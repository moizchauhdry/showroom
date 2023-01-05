<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{
    public function print($id)
    {
        $invoice = Invoice::find($id);

        // view()->share([
        //     'invoice' => $invoice,
        // ]);

        // $pdf = PDF::loadView('prints.invoice2');
        // $pdf->setPaper('A4', 'portrait');
        // return $pdf->stream('INVOICE-' . $invoice->id . '.pdf', array("Attachment" => false));

        return view('prints.invoice2', compact('invoice'));
    }
}
