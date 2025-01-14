<?php

namespace App\Http\Controllers;

use App\Order;
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
}
