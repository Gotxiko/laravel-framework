<?php
// app/Http/Controllers/EmailController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomEmail;

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
    
        Mail::send('email.notification', ['details' => $details], function($message) use ($details) {
            $message->to($details['email'])
                    ->subject('Notificación');
        });
    
        return back()->with('success', 'Email enviado correctamente.');
    }
}