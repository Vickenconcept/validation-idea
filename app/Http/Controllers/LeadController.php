<?php

namespace App\Http\Controllers;

use App\Mail\NewLeadNotification;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'unique:leads,email'],
            'business_size' => ['required', 'in:solo,2-5,6-10'],
            'quoting_method' => ['required', 'string', 'max:2000'],
            'willingness_to_pay' => ['required', 'in:yes,maybe,no'],
        ], [
            'email.unique' => 'This email is already registered.',
        ]);

        $lead = Lead::create($validated);

        $adminEmail = config('app.admin_email');
        if ($adminEmail) {
            Mail::to($adminEmail)->send(new NewLeadNotification($lead));
        }

        return redirect()->route('landing')->with('success', 'Thanks! You’re on the list. We’ll be in touch.');
    }
}
