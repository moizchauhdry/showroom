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

        view()->share([
            'invoice' => $invoice,
        ]);

        $pdf = PDF::loadView('prints.invoice');
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('INVOICE-' . $invoice->id . '.pdf', array("Attachment" => false));
    }
}
