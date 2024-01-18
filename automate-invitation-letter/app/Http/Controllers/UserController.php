<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');

        $users = User::where('no_passport', 'LIKE', "%$search%")
                     ->orWhere('nik', 'LIKE', "%$search%")
                     ->get();            

        return view('index', ['users' => $users]);
    }

    public function generatePdf(Request $request)
    {
        // Search for a user by NIK number or passport number
        $user = User::where('nik', $request->input('nik'))
                    ->orWhere('no_passport', $request->input('no_passport'))
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

