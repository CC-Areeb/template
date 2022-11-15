@extends('layouts.master')

@section('SMS')
    <div id="main_form_container">
        <h1 id="sms_welcome_heading">You sms was sent successfully</h1>
        <a href="{{ route('SMSindex') }}" id="go_back_link">
            Back
        </a>
    </div>
@endsection