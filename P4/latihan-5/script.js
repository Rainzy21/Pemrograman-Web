// Fungsi untuk ubah teks & style
function ubahKonten() {
    const judul = document.getElementById("judul");
    const paragraf = document.getElementById("paragraf");

    judul.textContent = "Judul Baru";
    judul.style.color = "red";
    judul.style.textTransform = "uppercase";

    paragraf.textContent = "Ini adalah teks paragraf yang berhasil diubah setelah klik tombol.";
    paragraf.style.color = "blue";
    paragraf.style.fontStyle = "italic";

    console.log("Konten berhasil diubah!");
    }

    // Fungsi reset konten & style
    function resetKonten() {
    const judul = document.getElementById("judul");
    const paragraf = document.getElementById("paragraf");

    judul.textContent = "Judul Asli";
    judul.style.color = "black";
    judul.style.textTransform = "none";

    paragraf.textContent = "Ini adalah teks awal paragraf.";
    paragraf.style.color = "black";
    paragraf.style.fontStyle = "normal";

    console.log("Konten sudah direset!");
}