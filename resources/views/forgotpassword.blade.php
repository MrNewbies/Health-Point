@extends('layout')

@section('title', 'forgot - password')

<link rel="stylesheet" href="{{ asset('css/forgotpassword.css') }}">

@section('content')
    <div class="container2">

        <div class="leftfpage">

            <div class="forgotheader">
                <h1>Forgot Password</h1>
                <p>Select which contact detail should we use <br> to reset your password.</p>
            </div>


            <div class="phoneverifbutton">
                <button type="submit" onclick="" class="phonebutton">

                    <div class="phoneimg">
                        <img src="{{ asset('assets/quill_phone.png') }}" alt="phone">
                    </div>

                    <a href="/scemail">Via mobile phone number</a>

                    {{-- <div class="phonebtntext">
                        Via mobile phone number
                    </div> --}}

                </button>
            </div>

            <div class="emailverifbutton">
                <button type="submit" onclick="" class="emailbutton">

                    <div class="emailimg">
                        <img src="{{ asset('assets/emailicon.png') }}" alt="email">
                    </div>

                    <a href="/scemail">Via e-mail</a>

                    {{-- <div class="emailbtntext">
                        Via e-mail
                    </div> --}}

                </button>
            </div>


        </div>


        <div class="rightfpage">
            <div class="rightfimg">
                <img src="{{ asset('assets/formmainicon.png') }}" alt="img">
            </div>

        </div>
    </div>
@endsection
