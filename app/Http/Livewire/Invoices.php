<?php

namespace App\Http\Livewire;

use App\Formation;
use App\Order;
use App\RequestInvoice;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use NumberFormatter;
use Barryvdh\DomPDF\Facade\Pdf;


class Invoices extends Component
{

    public $orders;

    public $hide_form = false;

    public $payment_method = 'virement';

    public $laboratory_name;


    // selected order info 
    public $order_id = null;
    public $title;
    public $price;
    public $tva;

    public function mount() {
        $this->orders = Order::where('user_id', Auth::user()->id)->where('status', 3)->get();
    }

    public function render()
    {
        return view('livewire.invoices');
    }


    public function hide_table() {
        $this->hide_form = !$this->hide_form;
    }

    public function toggleShowForm( $id, $title, $price ) {
        $this->order_id = $id;
        $this->title = $title;
        $this->price = $price * 0.2;
        $this->hide_form = !$this->hide_form;
    }


    public function paymentOffline() {
        
        switch ($this->payment_method) {
            case 'virement':
                $method_payment = "Virement / Versement";
                break;
            case 'cheque':
                $method_payment = "Chéque";
                break;
            case 'espece':
                $method_payment = "Espèce";
                break;
            case 'prise_en_charge':
                $method_payment = "Prise en charge";
                break;
            case 'credit_card':
                $method_payment = "Paiement en ligne";
                break;
        }

        // check if there is an old request for the same formation then delete it 
        $order = Order::where('id', $this->order_id)->first();
        $check_old_request = RequestInvoice::where('formation_id', $order->formation->id)
            ->where('user_id', Auth::user()->id)
            ->get();

        if ($check_old_request->isNotEmpty()) { // Check if any records were found
            $check_old_request->each(function ($request) {
                $request->delete();
            });}

        // first add new record to request_invoices with status = 0 ( waiting confirmation )
        $request_invoice = new RequestInvoice();
        $order = Order::find($this->order_id);
        $request_invoice->order_id = $order->id;
        $request_invoice->formation_id = $order->formation_id;
        $request_invoice->user_id = $order->user_id;
        $request_invoice->price = $order->price;
        $request_invoice->tva_price = $order->price * 0.2;
        $request_invoice->method_payment = $method_payment;
        $request_invoice->status = 0;
        
        if ($request_invoice->save() ) {
            $order->access_invoice = 2;
            $order->save();

            $this->orders = Order::where('user_id', Auth::user()->id)->where('status', 3)->get();
            $this->hide_table();
        }

        // then change order->access_invoice to 1 ( waiting confirmation )

    }

    public function exportPdf( $order_id )
    {

        $order = Order::find($order_id);


        $logoPath = asset('storage/'.setting('site.logo'));

        // total in letters 
        $formatter = new NumberFormatter('fr', NumberFormatter::SPELLOUT); // 'fr' for French
        $total_letters = $formatter->format($order->price * 1.2);

        $data = [
            'order' => $order,
            'total_letters' => $total_letters
        ];   
        
        $pdf = Pdf::loadView('pdfs.delivery_with_tva', $data); // Ensure 'pdf.template' exists with the desired blade view content

        return response()->streamDownload(
            fn() => print($pdf->stream()),
            'Science-event-facture.pdf'
        );
    }
}
