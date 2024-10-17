<?php
// app/Http/Controllers/EmailController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $details = [
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::send([], [], function ($message) use ($details) {
            $message->to($details['email'])
                    ->subject('Nuevo Mensaje')
                    ->setBody($details['message'], 'text/html');
        });

        return back()->with('success', 'Email enviado correctamente.');
    }
}