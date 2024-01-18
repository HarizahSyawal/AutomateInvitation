<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function showForm()
    {
        return view('pdf.form');
    }

    public function updatePdf(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'x' => 'required|numeric',
            'y' => 'required|numeric',
        ]);

        $pdfPath = public_path('/public/SURAT_UNDANGAN.pdf'); // Update with your PDF file name
        $text = $request->input('text');
        $x = $request->input('x');
        $y = $request->input('y');

        $pdf = $this->modifyPdf($pdfPath, $text, $x, $y);

        return response($pdf)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename=modified.pdf');
    }

    private function modifyPdf($pdfPath, $text, $x, $y)
    {
        $pdf = PDF::loadFile($pdfPath);

        // Set font and size
        $pdf->getCanvas()->setFont('Arial', 'normal', 10);

        // Add text at specified coordinates
        $pdf->getCanvas()->text($text, $x, $y);

        return $pdf->output();
    }
}
