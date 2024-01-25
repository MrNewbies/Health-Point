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
