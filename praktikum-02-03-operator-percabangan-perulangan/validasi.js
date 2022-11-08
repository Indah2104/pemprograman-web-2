function validasi ()
{
    let inputanga1 = document.getElementById("inputangka1");
    if (txtKataKunci.value == "")
    {
        alert("Anda Harus Mengisi Textbox Sembarang Kata");
    }
    else{
        alert("Anda Ingin Mencari Dengan Kata Kunci = "+txtKataKunci.value);
    }
}