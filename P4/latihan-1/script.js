//ambil elemen
const tombol = document.getElementById("btn");
const teks = document.getElementById("teks");

// Event untuk klik tombol
tombol.addEventListener("click", function (){
    teks.textContent = "Teks berhasil diubah dengan javascript!";
    teks.style.color = "green";
})