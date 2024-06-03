<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_peminjaman = $_POST["kode_peminjaman"];
    $nama = $_POST["nama"];
    $nrp = $_POST["nrp"];
    $whatsapp = $_POST["whatsapp"];
    $foto_ktp = $_POST["foto_ktp"];
    $unit_departemen = $_POST["unit_departemen"];
    $nama_acara =$_POST["nama_acara"];
    $jumlah = $_POST["jumlah"];
    $tanggal = $_POST["tanggal"];
    $sesi1 = $_POST["sesi1"];
    $sesi2 = $_POST["sesi2"];
    $sesi3 = $_POST["sesi3"];
    $sesi4 = $_POST["sesi4"];
    $sesi5 = $_POST["sesi5"];
    $sesi6 = $_POST["sesi6"];
    $ruanganArray = $_POST["ruangan"];

    // Your database connection code here
    $conn = mysqli_connect("localhost", "root", "", "booking_system");



    for ($i = 0; $i < 16; $i++) {
        // hitung tanggal secara kontinu sampai 15 minggu ke depan
        $currentDate = date('Y-m-d', strtotime("$tanggal +{$i} weeks"));

        foreach ($ruanganArray as $ruangan) {
            // Insert data into pengajuan2 table for each selected room
            $sql = "INSERT INTO pengajuan2 (kode_peminjaman, jenis, nama, nrp, whatsapp, foto_ktp, unit_departemen, nama_acara, tanggal, sesi1, sesi2, sesi3, sesi4, sesi5, sesi6, ruangan, surat_skpb, surat_sarpras, status ) 
                    VALUES ('$kode_peminjaman', 'semester', '$nama', '$nrp', '$whatsapp', '$foto_ktp', '$unit_departemen', '$nama_acara' ,'$currentDate', $sesi1, $sesi2, $sesi3, $sesi4, $sesi5, $sesi6, '$ruangan', ' ',' ','Menunggu Persetujuan')";
    
            if (mysqli_query($conn, $sql)) {
                // Do nothing here, just continue to the next room
            } else {
                echo "Ada sesuatu yang salah!";
                exit();  // Exit if an error occurs
            }
        }
    }


  

    if ($jumlah == 1) {
        header("Location: ../success.php?kode_peminjaman=$kode_peminjaman");
    } else {
        $jumlah -= 1;
        header("Location: step2.php?nama=$nama&jumlah=$jumlah&kode_peminjaman=$kode_peminjaman&nrp=$nrp&whatsapp=$whatsapp&foto_ktp=$foto_ktp&unit_departemen=$unit_departemen&nama_acara=$nama_acara");
    }
}
?>