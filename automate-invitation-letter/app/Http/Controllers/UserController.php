<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function generatePdf(Request $request)
    {
        // Search for a user by NIK number or passport number
        $user = User::where('nik_no', $request->input('nik_no'))
                    ->orWhere('passport_no', $request->input('passport_no'))
                    ->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Load the view with data
        $pdf = PDF::loadView('pdf.template', compact('user'));

        // Download the PDF or display it in the browser
        return $pdf->download('user_information.pdf');
    }
}

