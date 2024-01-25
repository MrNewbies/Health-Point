<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>

<link rel="stylesheet" href="{{ asset('js/register.js') }}">

<body style="background-color: #BEFFF7;">

    <div id="error-popup" class="error-popup">
        <span class="close-btn" onclick="closeErrorPopup()">&times;</span>
        <p id="error-message"></p>
    </div>

    <!-- Sign Up Container -->
    <div class="container" id="container">
        <div class="container-form">
            <div class="form-container-sign-up">
                <div class="img">
                    <img src="{{ asset('assets/Rectangle 2.png') }}" alt="">
                </div>
                <div class="content">
                    <form action="/register" method="POST">
                        @csrf

                        <div class="leftinput">
                            <div class="title">
                                <h1>Create Account</h1>
                            </div>
                                <div class="input-field">
                                    <label for="fname">Full Name</label><br>
                                    <input type="text" id="fname" name="fname"><br>
                                </div>
                                <div class="input-field">
                                    <label for="Eaddress">Email Address</label><br>
                                    <input type="email" id="Eaddress" name="Eaddress"><br>
                                </div>
                                <div class="input-field">
                                    <label for="Mnumber">Mobile Number</label><br>
                                    <input type="number" id="Mnumber" name="Mnumber"><br>
                                </div>
                                <div class="input-field">
                                    <label for="pass">Password</label><br>
                                    <input type="password" id="pass" name="pass"><br>
                                </div>
                            <div class="text">
                                Already have an account?
                                <a href="/login">Sign In</a>
                            </div>
                        </div>
                        <div class="rightinput">
                            <div class="input-field">
                                <label for="dob">Date of Birth</label><br>
                                <input type="date" id="dob" name="dob"><br>
                            </div>
                            <div class="input-field">
                                <label for="address">Address</label><br>
                                <input type="text" id="address" name="address"><br>
                            </div>
                            <div class="input-field">
                                <label for="gender">Gender</label><br>
                                <input type="text" id="gender" name="gender"><br>
                            </div>
                            <div class="input-field">
                                <label for="cpass">Confirm Password</label><br>
                                <input type="password" id="cpass" name="cpass"><br>
                            </div>
                            <button>Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/register.js') }}"></script>

</body>
</html>
