

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SKPB ITS</title>
    <link rel="icon" href="dist/img/component/Logo_SKPB-biru.png">
    <link rel="stylesheet" href="dist/output.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .swal2-confirm {
            background-color: #007bff !important;
            border-color: #007bff !important;
            color: white !important;
        }

    </style>
</head>

<body>
<?php
require 'function.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $kode_peminjaman = $_GET["kode_peminjaman"];
    // $nrp = $_GET["nrp"];

    // $sql = "SELECT * FROM pengajuan2 WHERE kode_peminjaman = '$kode_peminjaman' AND nrp = '$nrp' AND status!='Kelas SKPB'";
    $sql = "SELECT * FROM pengajuan2 WHERE kode_peminjaman = '$kode_peminjaman' AND status!='Kelas SKPB'";
    $result = mysqli_query($db, $sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);

        } else {
            echo "<script>
                alert('No Kode Peminjaman tidak valid! Silahkan periksa kembali!'); 
                window.history.back();
            </script>";
            exit();
        }
    }

    if(isset($_POST["submit_ktp"])) {
        // cek apakah data berhasil ditambahkan atau tidak
        if(up_ktp($_POST) > 0 && upload_ktp() !== false) {
            echo '<script>
                window.onload = function() {
                    Swal.fire({
                        title: "Dokumen Berhasil Diupload!",
                        text: "Cek status secara berkala",
                        icon: "success",
                        customClass: {
                            confirmButton: "swal2-confirm"
                    }
                    }).then(function() {
                        exit;
                    });
                };
            </script>';
        } else {
            echo '<script>
                window.onload = function() {
                    Swal.fire({
                        title: "Dokumen Gagal Diupload!",
                        text: "Perhatikan ukuran dan format file.",
                        icon: "error"
                    }).then(function() {
                        exit;
                    });
                };
            </script>';
        }
    }
    
    if(isset($_POST["submit_skpb"])) {
        // cek apakah data berhasil ditambahkan atau tidak
        if(up_surat_skpb($_POST) > 0 && upload_surat_skpb() !== false) {
            echo '<script>
                window.onload = function() {
                    Swal.fire({
                        title: "Dokumen Berhasil Diupload!",
                        text: "Cek status secara berkala",
                        icon: "success",
                        customClass: {
                            confirmButton: "swal2-confirm"
                    }
                    }).then(function() {
                        exit;
                    });
                };
            </script>';
        } else {
            echo '<script>
                window.onload = function() {
                    Swal.fire({
                        title: "Dokumen Gagal Diupload!",
                        text: "Perhatikan ukuran dan format file.",
                        icon: "error"
                    }).then(function() {
                        exit;
                    });
                };
            </script>';
        }
    }
    if(isset($_POST["submit_sarpras"])) {
        // cek apakah data berhasil ditambahkan atau tidak
        if(up_surat_sarpras($_POST) > 0 && upload_surat_sarpras() !== false) {
            echo '<script>
                window.onload = function() {
                    Swal.fire({
                        title: "Dokumen Berhasil Diupload!",
                        text: "Cek status secara berkala",
                        icon: "success",
                        customClass: {
                            confirmButton: "swal2-confirm"
                    }
                    }).then(function() {
                        exit;
                    });
                };
            </script>';
        } else {
            echo '<script>
                window.onload = function() {
                    Swal.fire({
                        title: "Dokumen Gagal Diupload!",
                        text: "Perhatikan ukuran dan format file.",
                        icon: "error"
                    }).then(function() {
                        exit;
                    });
                };
            </script>';
        }
    }
    

    $referer = $_SERVER['HTTP_REFERER'];
    if (strpos($referer, 'step3.php') !== false || strpos($referer, 'cekstatus.php') !== false ) {
        echo '<script>
            window.onload = function() {
                Swal.fire({
                    title: "Berhasil!",
                    text: "Silahkan cek status pengajuan!",
                    icon: "success"
                });
            };
        </script>';
    }
?>


    <?php

    require 'components/header.php';

    ?>

    <!--Upload Surat-->
    <section id="formupload" class="pt-20 pb-16">
        <div class="container">
            <div class="w-full px-4 lg:w-1/2 lg:mx-auto">
                <div class="w-full px-4 border border-slate-300 rounded-xl mx-auto p-5 shadow-md font-inter">
                    <div class="max-w-xl mx-auto text-center mt-6 mb-4">
                        <h4 class="font-bold text-3xl text-dark mt-6">FORM PEMINJAMAN RUANG</h4>
                        <h2 class="font-bold text-xl text-slate-400">Pengajuan Peminjaman Berhasil!</h2>
                    </div>


                    <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <?php
                            $kode_peminjaman = $_GET["kode_peminjaman"];

                            $sql = "SELECT * FROM pengajuan2 WHERE kode_peminjaman = '$kode_peminjaman' AND status!='Kelas SKPB'";
                            $result = mysqli_query($db, $sql);
                            $row = mysqli_fetch_assoc($result);
                        ?>

                        <div class="my-2 w-full px-4 mb-2">
                        <h1 class="text-primary font-semibold"><i>Simpan kode peminjaman dan silakan upload berkas dibawah. Harap cek status peminjaman anda pada halaman ini secara berkala</i></h1>
                            <!-- <h1>Pengajuan anda <b>berhasil! </b> Silahkan ingat atau catat <b>Kode Peminjaman</b> dibawah ini, untuk pengecekan berkala kedepannya.
                            </h1>
                            <br> -->
                            <br>
                            <label for="kode_peminjaman" class="text-base font-bold ">Kode Peminjaman Anda</label>
                            <input type="text" readonly value="<?= $row["kode_peminjaman"]  ?>" id="kode_peminjaman" class="w-full bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary" />
                        </div>
                        <div class="w-full px-4 mb-2">

                            <label for="nama" class="text-base font-bold ">Nama Peminjam</label>
                            <input type="text" readonly value="<?= $row["nama"]  ?>" id="nama" class="w-full bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary" />
                        </div>
                        <div class=" w-full px-4 mb-2">

                            <label for="nrp" class="text-base font-bold ">NRP/NIP/NPP</label>
                            <input type="text" readonly value="<?= $row["nrp"]  ?>" id="nrp" class="w-full bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary" />
                        </div>
                        <div class="w-full px-4 mb-2">
                            <label for="status" class="text-base font-bold">Status Pengajuan</label> <br>
                            <input type="text" readonly value="<?= $row["status"]  ?>" id="status" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary font-bold" 
                                style="background-color: <?php 
                                    if ($row['status'] == 'Terverifikasi') {
                                        echo '#28a745';
                                    } elseif ($row['status'] == 'Disetujui') {
                                        echo '#ffc107'; 
                                    } elseif ($row['status'] == 'Menunggu Persetujuan') {
                                        echo '#dc3545'; 
                                    } else {
                                        echo '#7a8288'; 
                                    }
                                ?>;"
                                value="<?php echo $row['status']; ?>"
                            />
                            
                        </div>


                        <?php if ($row['status'] == 'Menunggu Persetujuan'): ?>
                            <div class="w-full px-4 mb-4">
                                <label for="file">
                                    <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">
                                        Upload KTP/KTM</span>
                                    <input type="file" id="foto_ktp" name="foto_ktp" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary mb-2" required>
                                </label>

                                <div class="w-full px-4 mb-6 justify-start">
                                    <button id="submit_ktp" name="submit_ktp" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Submit</button>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($row['status'] == 'Disetujui'): ?>
                            <div class="w-full px-4 mb-4">
                                <label for="file">
                                    <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">
                                        Upload Surat Peminjaman Ditujukan ke SKPB</span>
                                        -> <a target="_blank" href="https://docs.google.com/document/d/1S_gdzXhPRlPJME8aWnZ75-yEsz7J2zNs/edit" class="text-primary">Template Surat Peminjaman SKPB</a>
                                    <input type="file" id="surat_skpb" name="surat_skpb" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary mb-2" required>
                                </label>

                                <div class="w-full px-4 mb-6 justify-start">
                                    <button id="submit_skpb" name="submit_skpb" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Submit</button>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($row['status'] == 'Terverifikasi'): ?>
                            <div class="w-full px-4 mb-4">
                                <label for="file">
                                    <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Upload
                                        Surat Sarpras</span>
                                    <input type="file" id="surat_sarpras" name="surat_sarpras" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary mb-2" required>
                                </label>

                                <div class="w-full px-4 mb-6 justify-start">
                                    <button id="submit_sarpras" name="submit_sarpras" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Submit</button>
                                </div>
                            </div>
                        <?php endif; ?>


                   
                    <!-- <div class="w-full px-4 mb-6 flex justify-end">
                        <button id="btn-save-as-pdf" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Save as PDF</button>
                    </div> -->
                </form>

                   
                </div>
            </div>
        </div>
    </section>
    <!--Upload Surat end-->


    <?php

    require 'components/footer.php';

    ?>


    <!-- <script src="dist/js/slider.js"></script> -->
    <script src="dist/js/script.js"></script>
    <script type="module" src="script.js"></script>
    <script>
        function validateForm() {
            let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i;
            let allowedExtensions2 = /(\.pdf|\.doc|\.docx)$/i;

            // foto ktp/ktm
            let fileInput = document.getElementById('foto_ktp');
            if (fileInput) {
                let filePath = fileInput.value;

                if (!allowedExtensions.exec(filePath)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Format file KTP/KTM tidak valid!',
                        customClass: {
                            confirmButton: "swal2-confirm"
                        }
                    });
                    fileInput.value = '';
                    return false;
                }

                let fileSize = fileInput.files[0].size;
                if (fileSize > 2000000) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Ukuran file KTP/KTM lebih dari 2 MB!',
                        customClass: {
                            confirmButton: "swal2-confirm"
                        }
                    });
                    fileInput.value = '';
                    return false;
                }
            }

            // surat skpb
            let fileInput2 = document.getElementById('surat_skpb');
            if (fileInput2) {
                let filePath2 = fileInput2.value;
                if (!allowedExtensions2.exec(filePath2)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Format file Surat SKPB tidak valid!',
                        customClass: {
                            confirmButton: "swal2-confirm"
                        }
                    });
                    fileInput2.value = '';
                    return false;
                }

                let fileSize2 = fileInput2.files[0].size;
                if (fileSize2 > 2000000) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Ukuran file Surat SKPB lebih dari 2 MB!',
                        customClass: {
                            confirmButton: "swal2-confirm"
                        }
                    });
                    fileInput2.value = '';
                    return false;
                }
            }

            // surat sarpras
            let fileInput3 = document.getElementById('surat_sarpras');
            if (fileInput3) {
                let filePath3 = fileInput3.value;
                if (!allowedExtensions2.exec(filePath3)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Format file Surat Sarpras tidak valid!',
                        customClass: {
                            confirmButton: "swal2-confirm"
                        }
                    });
                    fileInput3.value = '';
                    return false;
                }

                let fileSize3 = fileInput3.files[0].size;
                if (fileSize3 > 2000000) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Ukuran file Surat Sarpras lebih dari 2 MB!',
                        customClass: {
                            confirmButton: "swal2-confirm"
                        }
                    });
                    fileInput3.value = '';
                    return false;
                }
            }
            return true;
        }

        
    </script>



</body>

</html>