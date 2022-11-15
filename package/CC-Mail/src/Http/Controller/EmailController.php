<?php

namespace CooperativeComputing\Http\Controller;

use App\Http\Controllers\Controller;
use CooperativeComputing\Mail\Emails as MailEmails;
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
        Mail::queue((new MailEmails($validated))->onQueue('emails'));
        return "mail has been sent";
    }
}