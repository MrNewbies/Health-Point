<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>

<body>
    {{-- <div class="container">

            <div class="left">

                <div class="img">
                    <img src="{{ asset('assets/logohp.png') }}" alt="Logo">
                </div>

                <div class="ltxt">
                    <h1>Discover Quality Care with Ease</h1>
                </div>

                <div class="lparagraph">
                    <p> Easily search for hospital availability</p>
                </div>

            </div>


            <div class="right">

                <div class="signintxt">
                    <h1>Sign In</h1>
                </div>

                <div class="email">
                    <h2>Email Address</h2>
                    <input type="text" placeholder="Email">
                </div>

                <div class="password">
                    <h2>Password</h2>
                    <input type="text" placeholder="Password">
                </div>

                <div class="forgotpw">
                    <a href="forgotpassword.html">Forgot Password</a>
                </div>


                <div class="signinbtn">
                    <button type="submit" onclick="">Sign In</button>
                </div>

                <div class="line">
                    <p>or</p>
                </div>

                <div class="signupbtn">
                    <button type="submit" onclick="">Sign Up</button>
                </div>
    </div> --}}
    <div id="error-popup" class="error-popup">
        <span class="close-btn" onclick="closeErrorPopup()">&times;</span>
        <p id="error-message"></p>
    </div>

    <main class="login">
        <div class="left-side">
            <div class="container-left-login">
                <div class="left-logo">
                    <img src="{{ asset('assets/FullLogo 1.png') }}" alt="">
                </div>
                <div class="left-slogan">
                    <h1>Discover Quality Care With Ease</h1>
                </div>
                <div class="left-slogan2">
                    <span>Easily search for hospital availability</span>
                </div>
            </div>
        </div>

        <div class="right-side">
            <div class="container-right-login">
                <div class="right-title">
                    <h1>Sign In</h1>
                </div>

                <form action="/login-action" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            name="exampleInputPassword1">
                    </div>

                    <div class="action d-flex justify-content-between">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Stay Signed In</label>
                        </div>
                        <div class="forgot">
                            <a href="/forgotpass">
                                <img src="" alt="">
                                <span>Forgot Password</span>
                            </a>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary w-100 p-2">Sign In</button>

                    <div class="splitter">
                        <hr>
                        <p>or</p>
                        <hr>
                    </div>

                    <button type="sign-up" class="btn btn-primary w-100 p-2" id="button-signup"><a href="/register" class="text-decoration-none">Sign Up</a></button>

                </form>
            </div>
        </div>
    </main>

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            var form = document.querySelector("form");

            form.addEventListener("submit", function (event) {
                // Validate email
                var emailInput = document.getElementById("exampleInputEmail1");
                if (emailInput.value === "" || !isValidEmail(emailInput.value)) {
                    alert("Please enter a valid email address.");
                    event.preventDefault();
                    return false;
                }

                // Validate password
                var passwordInput = document.getElementById("exampleInputPassword1");
                if (passwordInput.value === "") {
                    alert("Please enter a password.");
                    event.preventDefault();
                    return false;
                }

                // Additional validations can be added here if needed
            });

            // Function to validate email format
            function isValidEmail(email) {
                // Basic email validation regex
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }
        });
    </script> --}}
    <script src="{{ asset('js/login.js') }}"></script>
    {{-- <script>
        // Fungsi untuk menampilkan popup kesalahan
        function showErrorPopup(message) {
            var errorPopup = document.getElementById("error-popup");
            var errorMessage = document.getElementById("error-message");

            errorMessage.innerHTML = message;
            errorPopup.style.display = "block";

            setTimeout(function () {
                errorPopup.style.animation = "none";
                errorPopup.offsetHeight; /* trigger reflow */
                errorPopup.style.animation = null;
            }, 100);
        }

        // Fungsi untuk menutup popup kesalahan
        function closeErrorPopup() {
            document.getElementById("error-popup").style.display = "none";
        }

        // Event listener untuk validasi formulir
        document.addEventListener("DOMContentLoaded", function () {
            var form = document.querySelector("form");

            form.addEventListener("submit", function (event) {
                var email = document.getElementById("exampleInputEmail1").value;
                var password = document.getElementById("exampleInputPassword1").value;

                // Example validation: Check if the Email Address is empty and valid
                if (email.trim() === "") {
                    showErrorPopup("Email harus diisi ngabs.");
                    event.preventDefault();
                    return;
                } else {
                    // Advanced email validation using regular expression
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!email.match(emailRegex)) {
                        showErrorPopup("masukin email yang benar.");
                        event.preventDefault();
                        return;
                    }
                }

                // Example validation: Check if the Password is empty
                if (password.trim() === "") {
                    showErrorPopup("password harus diisi cuy.");
                    event.preventDefault();
                    return;
                }
            });
        });
    </script> --}}
</body>



</html>
