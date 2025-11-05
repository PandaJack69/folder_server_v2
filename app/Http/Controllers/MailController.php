<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\TestMail;
use App\Models\Email;

class MailController extends Controller
{
    public function SendEmail(Request $request)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'name' => 'required|string|max:50',
                'email' => 'required|email|max:50',
                'password' => 'required|string',
                'password_confirmation' => 'required|string|same:password',
                'birthdate' => 'required|date|before_or_equal:today',
            ]);

            // Prepare data for email
            $emailData = [
                'name' => $request->name,
                'email' => $request->email,
                'birthdate' => $request->birthdate,
            ];

            // \Log::info('Attempting to send email to: ' . $request->email);

            // Send the email
            Mail::to($request->email)->send(new TestMail($emailData));

            // \Log::info('Email sent successfully to: ' . $request->email);

            // Save the email record to database
            Email::create([
                'to_email'   => $request->email,
                'from_email' => env('MAIL_FROM_ADDRESS'),
                'subject'    => 'Cloud Computing 2025 - Registration Confirmation',
                'message'    => "Registration confirmation email sent to {$request->name} ({$request->email}) for Cloud Computing 2025. Birthdate: {$request->birthdate}",
                'status'     => 'sent',
            ]);

            return view('success', ['name' => $request->name]);

        } catch (\Exception $e) {
            // \Log::error('Email sending failed: ' . $e->getMessage());
            
            // Save failed status
            Email::create([
                'to_email'   => $request->email ?? 'unknown',
                'from_email' => env('MAIL_FROM_ADDRESS'),
                'subject'    => 'Cloud Computing 2025 - Registration Failed',
                'message'    => 'Error: ' . $e->getMessage(),
                'status'     => 'failed',
                'error_message' => $e->getMessage(),
            ]);

            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }
}