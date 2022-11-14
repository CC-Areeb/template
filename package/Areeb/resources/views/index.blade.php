@extends('layouts.master')

@section('content')
    <div id="main_form_container">
        <form action="{{ route('sendEmail') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div>
                <div>
                    <label for="sender">Sender: </label>
                </div>
                <input type="email" name="sender" id="sender" placeholder="sender@mail.com">
            </div>


            <div>
                <div>
                    <label for="to">To: </label>
                </div>
                <input type="email" name="to" id="to" placeholder="receiver@mail.com">
            </div>

            <div>
                <div>
                    <label for="subject">Subject: </label>
                </div>
                <input type="text" name="subject" id="subject" placeholder="your purpose of mail">
            </div>


            <div>
                <div>
                    <label for="message">message: </label>
                </div>
                <textarea name="message" id="message" cols="60" rows="20">
                </textarea>
            </div>


            <div>
                <input type="submit" value="Send Email">
            </div>
        </form>
    </div>
@endsection