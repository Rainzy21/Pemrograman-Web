// Fungsi ubah teks & warna menggunakan getElementByid()
function ubahDenganid() {
    const paragrafid = document.getElementById("teks-id");
    paragrafid.textContent = "teks ini diubah dengan getElementById()";
    paragrafid.style.color = "green";
    paragrafid.style.fontWeight = "bold"
    console.log("Berhasil ubah dengan getElementByid");
}

//fungsi ubah teks & warna menggunakan querySelector()
function ubahDenganQuery() {
    const paragrafClass = document.querySelector(".text-class");
    paragrafClass.textContent = "teks ini diubah dengan querySelector()";
    paragrafClass.style.color = "blue";
    paragrafClass.style.fontstyle = "italic";
    console.log("Berhasil ubah dengan querySelector()");
}