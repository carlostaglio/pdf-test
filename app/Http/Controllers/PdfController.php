<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function testPDF()
    {
        $pdf = PDF::loadView('testPDF');
        return $pdf->download('pdfTest.pdf');
    }

    public function visitaPDF(Request $request)
    {
        $validated = $request->validate([
            'empresa' => 'required|string|max:30',
            'razon_social' => 'required|string|max:30',
            'cuit' => 'required|string|max:30',
            'direccion' => 'required|string|max:50',
            'localidad' => 'required|string|max:30',
            'motivo'=> 'required|in:rutina,capacitacion,ambiente,otros',
            'observaciones' => 'required|string|max:3000',
        ]);
        $pdf = PDF::loadView('visitaPDF', ['data' => $validated]);
        return $pdf->download('visitaPDF.pdf');
    }
}
