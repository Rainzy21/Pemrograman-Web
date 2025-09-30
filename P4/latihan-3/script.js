function cekKelulusan() {
    console.clear(); //bersihkan console biar rapi
    let nilai = document.getElementById("nilai").value;

    if (nilai == "") {
        console.log("Silahkan masuukan nilai terlebih dahulu.")
        return;
    }

    nilai = parseInt(nilai);

    if (nilai >= 70) {
        console.log("Nilai Anda:", nilai, "status lulus");
    } else {
        console.log("Nilai Anda:", nilai, "status tidak lulus")
    }
}