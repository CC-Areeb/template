<?php

namespace Areeb\Http\Controller;

use App\Http\Controllers\Controller;
use Areeb\Mail\Emails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function index()
    {
        return view('areeb::index');
    }

    public function sendEmail(Request $request)
    {
        # make some base validation
        $validator = Validator::make($request->all(), [
            'sender' => 'required',
            'to' => 'required',
            'subject' => '',
            'message' => '',
        ]);
        if ($validator->fails()) {
            return "mail cannot be sent";
        }
        $validated = $validator->validated();
        Mail::queue((new Emails($validated))->onQueue('emails'));
        return "mail has been sent";
    }
}