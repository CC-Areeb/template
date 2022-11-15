@extends('layouts.master')

@section('SMS')
    <div id="main_form_container" class="bg-success">
        <form action="{{ route('sendSMS') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div>
                <div>
                    <label for="sms_receiver" class="base_label">Phone number: </label>
                </div>
                <input type="text" name="sms_receiver" id="sms_receiver">
            </div>


            <div>
                <div>
                    <label for="sms_message" class="base_label">Your message: </label>
                </div>
                <textarea name="sms_message" id="sms_message" cols="60" rows="5">
                </textarea>
            </div>


            <div>
                <input type="submit" value="Send Message" id="sms_send_btn">
            </div>
        </form>
    </div>
@endsection