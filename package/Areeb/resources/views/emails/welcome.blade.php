@extends('layouts.master')

@section('content')
    <div id="main_heading">
        <h1>
            Welcome to Mailgun
        </h1>
    </div>

    <div id="main_body">
        <strong>Welcome,</strong> {{ $validated['to'] }}
        <p>
            This is a test mail from {{ $validated['sender'] }}
        </p>
    </div>

    <div id="main_footer">
        <p>
            Thanks, <br>
            {{ config('app.name') }}
        </p>
    </div>
@endsection