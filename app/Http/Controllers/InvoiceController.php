<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function print($id)
    {
        $invoice = Invoice::find($id);
        return view('prints.invoice', compact('invoice'));
    }
}
