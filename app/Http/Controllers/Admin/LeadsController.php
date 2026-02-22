<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;

class LeadsController extends Controller
{
    public function index()
    {
        $leads = Lead::orderByDesc('created_at')->get();

        return view('admin.leads', compact('leads'));
    }
}
