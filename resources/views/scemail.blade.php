<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/scemail.css') }}">
</head>
<body>
    <section class="card">
        <div class="container">
            <div class="left">
                <div class="top_left">
                    <h1>Forget Password</h1>
                    <div class="mail_image">
                        <img src="{{ asset('assets/emailicon.png') }}" alt="">
                    </div>
                </div>
                <div class="instructions">
                    <p>please enter your email address to receive</p>
                    <p>a verification card</p>
                </div>
                <div class="enter_email">
                    <h4>Enter your email</h4>
                    <input type="text">
                </div>
                <div class="wbutton">
                    <button>Send Code</button>
                </div>
            </div>
            <div class="right">
                <img src="{{ asset('assets/formmainicon.png') }}" alt="">
            </div>
        </div>
    </section>
</body>
</html>

