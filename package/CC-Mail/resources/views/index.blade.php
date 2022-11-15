@extends('layouts.master')

@section('content')
    <div id="main_form_container">
        <form action="{{ route('sendEmail') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div>
                <div>
                    <label for="sender" class="base_label">Sender: </label>
                </div>
                <input type="email" name="sender" id="sender" placeholder="sender@mail.com">
            </div>


            <div>
                <div>
                    <label for="to" class="base_label">To: </label>
                </div>
                <input type="email" name="to" id="to" placeholder="receiver@mail.com">
            </div>

            <div>
                <div>
                    <label for="subject" class="base_label">Subject: </label>
                </div>
                <input type="text" name="subject" id="subject" placeholder="your purpose of mail">
            </div>


            <div>
                <div>
                    <label for="message" class="base_label">message: </label>
                </div>
                <textarea name="message" id="message" cols="60" rows="5">
                </textarea>
            </div>


            <div>
                <input type="submit" value="Send Email" id="send_email_btn">
            </div>
        </form>
    </div>
@endsection