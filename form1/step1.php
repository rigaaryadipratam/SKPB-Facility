<?php
    session_start();
    
    $kode_peminjaman = uniqid();
    $_SESSION['kode_peminjaman'] = $kode_peminjaman;

    // if(isset($_POST["submit"])) {
    //     $foto_ktp = upload_ktp();
    //     if ($foto_ktp) {
    //         $_SESSION['foto_ktp'] = $foto_ktp;
    //     } else{
    //         echo "Gagal";
    //     }
    // }

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .checkbox-group input[type="checkbox"],
        .checkbox-group label {
            display: none;
            position: relative;
        }
        .swal2-confirm {
            background-color: #007bff !important;
            border-color: #007bff !important;
            color: white !important;
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
                        <h2 class="font-bold text-xl text-slate-400">Keperluan Insidentil</h2>
                    </div>

                    <form action="step2.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

                        <div class="w-full px-4 mb-4">
                            <label for="name">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Nama Lengkap</span>
                                <input type="text" id="name" name="nama" class="w-full bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary" placeholder="Masukkan Nama Anda " required />
                            </label>
                        </div>

                        
                        <div class="w-full px-4 mb-4">
                            <label for="nama_acara">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Nama Kegiatan / Acara</span>
                                <input type="text" id="nama_acara" name="nama_acara" class="w-full bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary" placeholder="Masukkan Nama Anda " required />
                            </label>
                        </div>


                        <div class="w-full px-4 mb-4">
                            <label for="nrp">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">NRP/NIP/NPP</span>
                                <input type="text" id="nrp" name="nrp" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" placeholder="Masukkan NRP/NIP/NPP" required />
                            </label>
                        </div>

                        <div class="w-full px-4 mb-4">
                            <label for="whatsapp">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Nomor HP/WA</span>
                                <input type="text" id="whatsapp" name="whatsapp" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" placeholder="Masukkan Nomor HP/WA" required />
                            </label>
                        </div>

                        <!-- <div class="w-full px-3 mb-2">
                            <label for="foto_ktp">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Upload KTP/KTM</span>
                                <input type="file" id="foto_ktp" name="foto_ktp" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary mb-2" required>
                            </label>
                        </div> -->


                        <div class="w-full px-4 mb-4 ">
                            <label for="departemen">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Unit/Departemen</span>
                                <select id="departemen" name="unit_departemen" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required>
                                    <option value="" disabled selected hidden>Pilih Unit/Departemen</option>
                                    <?php
                                    $db = mysqli_connect("localhost", "root", "", "booking_system");
                                    $result = mysqli_query($db, "SELECT * FROM unit_departemen");
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='" .  $row['nama_unit'] . "'>" . $row['nama_unit'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </label>
                        </div>



                        <div class="w-full px-4 mb-4">
                            <label for="jumlahhari">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Jumlah Hari Peminjaman</span>
                                <input type="text" name="jumlah" id="jumlahhari" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" placeholder="Jumlah Hari Peminjaman" required />
                            </label>
                        </div>

                      
                        <!--Checkbox End-->
                        <div class="w-full px-4 mb-10 flex justify-end">
                            <a class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"><button name="submit" type="submit">Selanjutnya</button></a>
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
    <script type="module" src="script.js"></script>

    <script>
        function validateForm() {
            let nrpValue = document.getElementById('nrp').value.trim();
            if (nrpValue !== '' && (!/^\d+$/.test(nrpValue) || parseInt(nrpValue) <= 0)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'NRP/NIP/NPP tidak valid!',
                    customClass: {
                            confirmButton: "swal2-confirm"
                    }
                });
                document.getElementById('nrp').value = '';
                return false;
            }

            let whatsappValue = document.getElementById('whatsapp').value.trim();
            if (whatsappValue !== '' && (!/^\d+$/.test(whatsappValue) || parseInt(whatsappValue) <= 0)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Nomor Whatsapp tidak valid!',
                    customClass: {
                            confirmButton: "swal2-confirm"
                    }
                });
                document.getElementById('whatsapp').value = '';
                return false;
            }

            let jumlahhariValue = document.getElementById('jumlahhari').value.trim();
            if (jumlahhariValue !== '' && (!/^\d+$/.test(jumlahhariValue) || parseInt(jumlahhariValue) <= 0)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Input hari tidak valid!',
                    customClass: {
                            confirmButton: "swal2-confirm"
                    }
                });
                document.getElementById('jumlahhari').value = '';
                return false;
            }

            return true;
        }
    </script>



</body>

</html>