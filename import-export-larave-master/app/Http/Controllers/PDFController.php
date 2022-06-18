<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTMLTOPDF;
use PDF;
class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to OnlineWebTutorBlog.com',
            'author' => "Sanjay"
        ];
          
        $pdf = PDF::loadView('pdf.my-pdf-file', $data);
    
        return $pdf->download('simple.pdf');
    }

    public function htmlToPDF(Request $request) {
        $data = $request->all();
        if(HTMLTOPDF::create($data)) {
            $pdf = PDF::loadView('pdf.html-to-pdf-file', $data);
            return $pdf->download('form-to-pdf.pdf');      
            // return redirect()->route('home')->with('inserted','Data inserted successfully !');
        } else {
            return redirect()->route('home')->with('notinserted','Data not inserted successfully !');
        }
    }
}
