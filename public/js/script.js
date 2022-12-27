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
window.onload = function () {
    console.log("test");
    const total = document.getElementById("total");
    const trash = document.getElementById("trash");
    const laundry = document.getElementById("laundry");
    const start = document.getElementById("start_date");
    const end = document.getElementById("end_date");
    var totalHarga = total.value;

    const currTotal = totalHarga;
    const trashHarga = 25000;
    const laundryHarga = 50000;
    trash.addEventListener("change", function () {
        console.log("uwu");
        if (trash.checked == true) {
            totalHarga = parseInt(totalHarga) + trashHarga;
            console.log(totalHarga);
            total.value = totalHarga;
        } else {
            totalHarga = parseInt(totalHarga) - trashHarga;
            total.value = totalHarga;
        }
    });
    laundry.addEventListener("change", function () {
        console.log("uwu");
        if (laundry.checked == true) {
            totalHarga = parseInt(totalHarga) + laundryHarga;
            console.log(totalHarga);
            total.value = totalHarga;
        } else {
            totalHarga = parseInt(totalHarga) - laundryHarga;
            total.value = totalHarga;
        }
    });
    start.addEventListener("change", function () {
        var endDate = new Date(start.value);
        endDate.setDate(endDate.getDate() + 30);
        var futureDate =
            endDate.getFullYear() +
            "-" +
            ("0" + (endDate.getMonth() + 1)).slice(-2) +
            "-" +
            ("0" + endDate.getDate()).slice(-2);
        console.log(futureDate);
        end.value = futureDate;
    });
};
