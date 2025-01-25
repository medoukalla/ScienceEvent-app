<?php

namespace App\Http\Controllers;

use App\Order;
use App\RequestInvoice;
use Illuminate\Http\Request;
use Auth;

class BackendController extends Controller
{
    // function to reject an order 
    public function reject_order( Order $order ) {
        $order->status = 4;
        $order->confirmed_by = Auth::user()->id;
        $order->save();
        session()->flash('success', __('generic.successfully_updated'));
        return back();
    }

    // function to confirm an order 
    public function confirm_order( Order $order ) {
        $order->status = 3;
        $order->confirmed_by = Auth::user()->id;
        $order->save();
        session()->flash('success', __('generic.successfully_updated'));
        return back();
    }


    // function to reject an order 
    public function reject_request_invoice( RequestInvoice $requestInvoice ) {
        $requestInvoice->status = 2;
        $requestInvoice->confirmed_by = Auth::user()->id;
        $requestInvoice->save();

        $order = Order::where('id',$requestInvoice->order_id)->first();

        $order->access_invoice = 0;
        $order->touch();
        $order->save();

        session()->flash('success', __('generic.successfully_updated'));
        return back();
    }

    // function to confirm an order 
    public function confirm_request_invoice( RequestInvoice $requestInvoice ) {

        $requestInvoice->status = 1;
        $requestInvoice->confirmed_by = Auth::user()->id;
        $requestInvoice->save();
        
        $order = Order::where('id',$requestInvoice->order_id)->first();

        $order->access_invoice = 3;
        $order->touch();
        $order->save();

        session()->flash('success', __('generic.successfully_updated'));
        return back();
    }
}
