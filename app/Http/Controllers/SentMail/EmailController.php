<?php

namespace App\Http\Controllers\SentMail;

use App\Http\Controllers\Controller;
use App\Mail\SendPDFMail;
use PDF;
use Mail;
use App\Models\Products;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index() {
        $product = Products::all();
        $data['product'] = $product;
        $pdf = PDF::loadView('pdf.stockreportpdf', $data);
        $to_email = "osmanforhad94@gmail.com";
        Mail::to($to_email)->send(new SendPDFMail($pdf));
        return response()->json(['status' => 'success', 'message' => 'Report has been sent successfully.']);
      }
}
