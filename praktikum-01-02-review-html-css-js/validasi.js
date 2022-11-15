function validasi ()
{
    let txtKataKunci = document.getElementById("txtKataKunci");
    if (txtKataKunci.value == "")
    {
        alert("Anda Harus Mengisi Textbox Sembarang Kata");
    }
    else{
        alert("Anda Ingin Mencari Dengan Kata Kunci = "+txtKataKunci.value);
    }
}

