//LOGIN ACC PAGE
function ValidasiForm() {
    //form validasi untuk menampilkan pesan jika terdapat inputan yang kosong
    if (document.FormReg.email.value == "") {
        //pesan error ditampilkan menggunakan DOM pada masing2 id
        document.getElementById("error_email").innerHTML =
            "please input your email first";
        return false;
    } else {
        document.getElementById("error_email").innerHTML = "";
    }

    if (document.FormReg.password.value == "") {
        document.getElementById("error_password").innerHTML =
            "please input your password";
        return false;
    } else if (document.FormReg.password.value.length <= 6) {
        document.getElementById("error_password").innerHTML =
            "Password must be longer than 6 character";
        return false;
    } else {
        document.getElementById("error_password").innerHTML = "";
    }
}

function turnActive() {
    console.log("Turning active");
}

//BOOKING DETAILS PAGE
console.log("Here");
