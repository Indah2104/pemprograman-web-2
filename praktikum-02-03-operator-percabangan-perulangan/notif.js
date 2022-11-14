function notif ()
{
    let inputanga1 = document.getElementById("inputangka1");
    if (inputanga1.value == "")
    {
        alert("Angka pertama Tidak Boleh Kosong");
    }
    else{
        alert("Angka Kedua Tidak Boleh Kosong = "+inputanga1.value);
    }
}