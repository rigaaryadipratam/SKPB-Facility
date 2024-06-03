<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_peminjaman = $_POST["kode_peminjaman"];
    $nama = $_POST["nama"];
    $nrp = $_POST["nrp"];
    $whatsapp = $_POST["whatsapp"];
    $foto_ktp = $_POST["foto_ktp"];
    $unit_departemen = $_POST["unit_departemen"];
    $nama_acara = $_POST["nama_acara"];
    $jumlah = $_POST["jumlah"];
    $tanggal = $_POST["tanggal"];
    $sesi1 = isset($_POST["sesi1"]) ? 1 : 0;
    $sesi2 = isset($_POST["sesi2"]) ? 1 : 0;
    $sesi3 = isset($_POST["sesi3"]) ? 1 : 0;
    $sesi4 = isset($_POST["sesi4"]) ? 1 : 0;
    $sesi5 = isset($_POST["sesi5"]) ? 1 : 0;
    $sesi6 = isset($_POST["sesi6"]) ? 1 : 0;

    // Your database connection code here
    $conn = mysqli_connect("localhost", "root", "", "booking_system2");
    // Query to get available rooms for the given date and session from the database
    // Assume $conn is the database connection object
    // $sql = "SELECT DISTINCT nama_ruangan FROM ruangan 
    //         WHERE nama_ruangan NOT IN (
    //             SELECT ruangan FROM pengajuan2 
    //             WHERE tanggal = '$tanggal' AND (
    //                 (sesi1 = $sesi1) OR 
    //                 (sesi2 = $sesi2) OR 
    //                 (sesi3 = $sesi3) OR 
    //                 (sesi4 = $sesi4) OR 
    //                 (sesi5 = $sesi5) OR 
    //                 (sesi6 = $sesi6) 
    //             )
    //         )";

    // query untuk menampilkan ruangan yang tersedia sesuai antara tanggal dan sesi yang dipilih user dengan ketersediaan di database
    $sql = "SELECT DISTINCT nama_ruangan FROM ruangan WHERE nama_ruangan NOT IN 
 (SELECT ruangan FROM pengajuan2 WHERE tanggal BETWEEN '$tanggal' AND DATE_ADD('$tanggal', INTERVAL 15 WEEK) 
     AND (
         (sesi1 =  $sesi1) OR 
         (sesi2 =  $sesi2) OR 
         (sesi3 =  $sesi3) OR 
         (sesi4 =  $sesi4) OR 
         (sesi5 =  $sesi5) OR 
         (sesi6 =  $sesi6)
         ) 
         AND DAYOFWEEK(tanggal) = DAYOFWEEK('$tanggal')
 )
    AND status_ruangan = 'Bisa Dipinjam'
    ";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $availableRooms = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $availableRooms[] = $row["nama_ruangan"];
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKPB ITS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="../dist/img/component/Logo_SKPB-biru.png">
    <link rel="stylesheet" href="../dist/output.css">
    <style>
        .checkbox-group input[type="checkbox"],
        .checkbox-group label {
            display: none;
            position: relative;
        }
    </style>
</head>

<body>


    <?php

    require 'components/header.php';

    ?>

    <section id="form1start" class="my-10 pt-32 pb-16">
        <div class="container">
            <div class="w-full px-4 lg:w-1/2 lg:mx-auto">
                <div class="w-full px-4 border border-slate-300 rounded-xl mx-auto p-5 shadow-md font-inter">
                    <div class="max-w-xl mx-auto text-center mt-6 mb-5">
                        <h4 class="font-bold text-3xl text-dark mt-6">FORM PEMINJAMAN RUANG</h4>
                        <h2 class="font-bold text-xl text-slate-400">Perkuliahan 1 Semester</h2>
                    </div>
                    <form action="eksekusi.php" method="post" onsubmit="return validateForm()">

                        <section class=" pt-3 pb-2 bg-inherit">
                            <div class="container">
                                <label for="Checklist Ruangan">
                                    <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Pilih Ruangan</span>
                                    <div class="grid grid-cols-2 gap-4">
                                        <?php

                                        if (!empty($availableRooms)) {

                                            foreach ($availableRooms as $room => $value) {
                                        ?>
                                                <div class="flex flex-wrap mb-3">
                                                    <input type="checkbox" id="checkbox<?= $index ?>" name="ruangan[]" class="mr-2" value="<?= $value ?>">
                                                    <label for="checkbox<?= $index ?>"><?= $value ?></label>
                                                </div>
                                        <?php
                                            }
                                        } else {
                                            echo "Tidak ada ruangan yang tersedia pada tanggal dan sesi yang dipilih.";
                                        }
                                        ?>
                                    </div>
                                </label>
                            </div>
                        </section>

                        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                        <input type="hidden" name="nrp" value="<?php echo $nrp; ?>">
                        <input type="hidden" name="whatsapp" value="<?php echo $whatsapp; ?>">
                        <input type="hidden" name="foto_ktp" value="<?php echo $foto_ktp; ?>">
                        <input type="hidden" name="unit_departemen" value="<?php echo $unit_departemen; ?>">
                        <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                        <input type="hidden" name="kode_peminjaman" value="<?php echo $kode_peminjaman; ?>">
                        <input type="hidden" name="nama_acara" value="<?php echo $nama_acara; ?>">
                        <input type="hidden" name="tanggal" value="<?php echo $tanggal; ?>">
                        <input type="hidden" name="sesi1" value="<?php echo $sesi1; ?>">
                        <input type="hidden" name="sesi2" value="<?php echo $sesi2; ?>">
                        <input type="hidden" name="sesi3" value="<?php echo $sesi3; ?>">
                        <input type="hidden" name="sesi4" value="<?php echo $sesi4; ?>">
                        <input type="hidden" name="sesi5" value="<?php echo $sesi5; ?>">
                        <input type="hidden" name="sesi6" value="<?php echo $sesi6; ?>">

                        <!--Checkbox End-->
                        <div class="w-full px-4 mb-10 flex justify-end">
                            <!-- <a href="form.html" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Kembali</a> -->

                            <a class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"><button name="submit" type="submit">Submit</button></a>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </section>
    <!--Form 1 end-->


    <?php

    require 'components/footer.php';

    ?>

    <!-- <script src="dist/js/slider.js"></script> -->
    <script src="../dist/js/script.js"></script>
    <script type="module" src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function validateForm() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var isChecked = false;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                isChecked = true;
                break;
            }
        }
        if (!isChecked) {
            Swal.fire({
                title: 'Oops!',
                text: 'Tidak ada ruangan yang dipilih!',
                icon: 'error',
                confirmButtonText: 'OK',
                customClass: {
                    popup: 'swal-popup-class',
                    title: 'swal-title-class',
                    content: 'swal-content-class',
                },
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
            return false;
        }
        return true;
    }
</script>

</body>

</html>