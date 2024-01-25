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

function closeErrorPopup() {
    document.getElementById("error-popup").style.display = "none";
}

document.querySelector("form").addEventListener("submit", function (event) {
    var fullName = document.getElementById("fname").value;
    var email = document.getElementById("Eaddress").value;
    var mobileNumber = document.getElementById("Mnumber").value;
    var password = document.getElementById("pass").value;
    var dateOfBirth = document.getElementById("dob").value;
    var address = document.getElementById("address").value;
    var gender = document.getElementById("gender").value;
    var confirmPassword = document.getElementById("cpass").value;
    var isvalid = true;

    // Example validation: Check if the Full Name is empty
    if (fullName.trim() === "") {
        showErrorPopup("Nama gabisa kosong cuy.");
        event.preventDefault(); // Prevent form submission
        return;
    }

    // Example validation: Check if the Email Address is empty and valid
    if (email.trim() === "") {
        showErrorPopup("Email harus diisi & HARUS UNIK ngabs.");
        event.preventDefault();
        return;
    } else {
    // Advanced email validation using regular expression
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailRegex)) {
        showErrorPopup("masukin email yang benar.");
        event.preventDefault();
        return;
    }}

    // Example validation: Check if the Mobile Number is empty and valid
    if (mobileNumber.trim() === "") {
        showErrorPopup("isi mobile numbernya!!.");
        event.preventDefault();
        return;
    } else if (!mobileNumber.startsWith('0') || mobileNumber.length < 10 || mobileNumber.length > 13) {
        showErrorPopup("coba cek lagi input nomornya");
        event.preventDefault();
        return;
    }

    // Example validation: Check if the Password is empty
    if (password.trim() === "") {
        showErrorPopup("كلمة السر لا يمكن أن تترك فارغة.");
        event.preventDefault();
        return;
    } else if (password.length <= 6 || !/\d/.test(password)) {
        showErrorPopup("panjang password minimal 7 & harus ada minimal 1 angka.");
        event.preventDefault();
        return;
    }

    // Example validation: Check if the Date of Birth is empty
    if (dateOfBirth.trim() === "") {
        showErrorPopup("Isi ya tanggal lahirnya.");
        event.preventDefault();
        return;
    } else {

    var currentDate = new Date();
    var selectedDate = new Date(dateOfBirth);

    if (selectedDate > currentDate) {
        showErrorPopup("lu dari masadepan?.");
        event.preventDefault();
        return;
    }
    }

    // Example validation: Check if the Address is empty
    if (address.trim() === "") {
        showErrorPopup("minimal isi alamat.");
        event.preventDefault();
        return;
    }

    // Example validation: Check if the Gender is empty
    if (gender.trim() === "") {
        showErrorPopup("isi lah gendernya!.");
        event.preventDefault();
        return;
    } else if (gender !== "GN001" && gender !== "GN002") {
        showErrorPopup("Gender harus GN001 untuk male atau GN002 untuk female. -hehe");
        event.preventDefault();
        return;
    }
    // Example validation: Gender has to be either Male or Female


    // Example validation: Check if the Confirm Password matches the Password
    if (confirmPassword !== password) {
        showErrorPopup("Password ga sama.");
        event.preventDefault();
        return;
    }
});
