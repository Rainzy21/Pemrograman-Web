function runExercises() {
    console.clear() //bersihkan sebelum jalan

    //SOAL 1: Const
    const universitas = "Universitas Muhammadiyah Kalimantan Timur"
    console.log("Nama Universitas:", universitas)

    //soal 2: Let
    let jumlahMahasiswa = 25;
    jumlahMahasiswa = jumlahMahasiswa + 5;
    console.log("Jumlah mahasiswa sekarang:", jumlahMahasiswa)

    //soal 3: String
    let namaLengkap = "Ahmad Sahroni";
    console.log("Halo, nama saya" + namaLengkap);

    // soal 4; number
    let angka1 = 10;
    let angka2 = 5;
    console.log("Hasil penjumlahan:", angka1 + angka2);
    console.log("Hasil pengurangan:", angka1 - angka2);
    console.log("Hasil perkalian:", angka1 * angka2);
    console.log("Hasil pembagian:", angka1 / angka2);

    //Soal 5: Boolean
    let nilaiUjian = 80;
    let lulus = nilaiUjian >= 70;
    console.log("Apakah lulus?", lulus)
}