<?php

session_start();

$kode_peminjaman = isset($_SESSION['kode_peminjaman']) ? $_SESSION['kode_peminjaman'] : null;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama = $_POST["nama"];
    $nrp = $_POST["nrp"];
    $whatsapp = $_POST["whatsapp"];

    $unit_departemen = $_POST["unit_departemen"];
    $jumlah = $_POST["jumlah"];
    $nama_acara= $_POST["nama_acara"];


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
                        <h2 class="font-bold text-xl text-slate-500">Keperluan Insidentil</h2>
                    </div>
                    <form action="step3.php" method="post" onsubmit="return validateForm()">
                        <div class="w-full px-4 mb-4">
                            <label for="endDate">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Tanggal</span>
                                <input type="date" name="tanggal" id="endDate" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required />
                            </label>
                        </div>
                        <!--Sesi-->
                        <section class=" pt-3 pb-2 ">
                            <div class="container">
                            <label for="Sesi">
                                <span class="block font-bold mb-2 md:text-xl lg:text-lg text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Sesi</span>
                                <div class="flex flex-wrap mx-auto">

                                    <div class=" px-3 mb-2  text-dark font-medium w-1/2 md:w-1/4 xl:w-1/2">

                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox" value="sesi1" name="sesi1" class="mr-2">
                                            <label for="checkbox1">Sesi 1 (07.00-08.50)</label>
                                        </div>

                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox"  value="sesi2" name="sesi2" class="mr-2">
                                            <label for="checkbox1">Sesi 2 (09.00-10.50)</label>
                                        </div>

                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox"  value="sesi3" name="sesi3" class="mr-2">
                                            <label for="checkbox1">Sesi 3 (11.00-12.50)</label>
                                        </div>
                                    </div>
                                    <div class=" px-3 mb-2  text-dark font-medium w-1/2 md:w-1/4 xl:w-1/2">

                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox"  value="sesi4" name="sesi4" class="mr-2">
                                            <label for="checkbox1">Sesi 4 (13.30-15.20)</label>
                                        </div>

                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox" value="sesi5" name="sesi5" class="mr-2">
                                            <label for="checkbox1">Sesi 5 (15.30-17.20)</label>
                                        </div>
                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox"  value="sesi6" name="sesi6" class="mr-2">
                                            <label for="checkbox1">Sesi 6 (>18.00)</label>
                                        </div>
                                    </div>

                                </div>
                                </label>
                            </div>
                        </section>


                        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                        <input type="hidden" name="nrp" value="<?php echo $nrp; ?>">
                        <input type="hidden" name="whatsapp" value="<?php echo $whatsapp; ?>">
                        <!-- <input type="hidden" name="foto_ktp" value="<?php echo $foto_ktp; ?>">  -->
                        <input type="hidden" name="unit_departemen" value="<?php echo $unit_departemen; ?>">
                        <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                        <input type="hidden" name="kode_peminjaman" value="<?php echo $kode_peminjaman; ?>">
                        <input type="hidden" name="nama_acara" value="<?php echo $nama_acara; ?>">

                        <!--Checkbox End-->
                        <div class="w-full px-4 mb-10 flex justify-end">
                            <!-- <a href="form.html" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Kembali</a> -->

                            <a class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"><button name="submit" type="submit">Selanjutnya</button></a>
                        </div>

                    </form>
                </div>
            </div>
    </section>
    <!--Form 1 end-->

    <?php   
    } else if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nama = $_GET["nama"];
        $nrp = $_GET["nrp"];
        $whatsapp = $_GET["whatsapp"];
        // $foto_ktp = $_GET["foto_ktp"];
        $unit_departemen = $_GET["unit_departemen"];
        $nama_acara = $_GET["nama_acara"];
        $jumlah = $_GET["jumlah"];

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
                        <h2 class="font-bold text-xl text-slate-400">Keperluan Insidentil</h2>
                    </div>
                    <form action="step3.php" method="post" onsubmit="return validateForm()">
                        <div class="w-full px-4 mb-4">
                            <label for="endDate">
                                <span class="block font-bold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Tanggal</span>
                                <input type="date" name="tanggal" id="endDate" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required />
                            </label>
                        </div>
                        <!--Sesi-->

                            
                                <label for="Sesi">
                                <span class="block font-bold mb-2 md:text-xl lg:text-lg text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">Sesi</span>
                                <div class="flex flex-wrap mx-auto">

                                    <div class=" px-2 mb-2  text-dark font-medium w-1/2">

                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox" value="sesi1" name="sesi1" class="mr-2">
                                            <label for="checkbox1">Sesi 1 (07.00-08.50)</label>
                                        </div>

                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox"  value="sesi2" name="sesi2" class="mr-2">
                                            <label for="checkbox1">Sesi 2 (09.00-10.50)</label>
                                        </div>

                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox"  value="sesi3" name="sesi3" class="mr-2">
                                            <label for="checkbox1">Sesi 3 (11.00-12.50)</label>
                                        </div>
                                    </div>
                                    <div class=" px-2 mb-2  text-dark font-medium w-1/2">

                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox"  value="sesi4" name="sesi4" class="mr-2">
                                            <label for="checkbox1">Sesi 4 (13.30-15.20)</label>
                                        </div>

                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox" value="sesi5" name="sesi5" class="mr-2">
                                            <label for="checkbox1">Sesi 5 (15.30-17.20)</label>
                                        </div>
                                        <div class=" flex flex-wrap mb-3">
                                            <input type="checkbox"  value="sesi6" name="sesi6" class="mr-2">
                                            <label for="checkbox1">Sesi 6 (>18.00)</label>
                                        </div>
                                    </div>

                                </div>
                                </label>
                            
  


                        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                        <input type="hidden" name="nrp" value="<?php echo $nrp; ?>">
                        <input type="hidden" name="whatsapp" value="<?php echo $whatsapp; ?>">
                        <!-- <input type="hidden" name="foto_ktp" value="<?php echo $foto_ktp; ?>"> -->
                        <input type="hidden" name="unit_departemen" value="<?php echo $unit_departemen; ?>">
                        <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                        <input type="hidden" name="kode_peminjaman" value="<?php echo $kode_peminjaman; ?>">
                        <input type="hidden" name="nama_acara" value="<?php echo $nama_acara; ?>">


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
        
    <?PHP
    } else {
        header("Location: step1.php");
    }
    ?>


    <?php

    require 'components/footer.php';

    ?>


    <!-- <script src="dist/js/slider.js"></script> -->
    <script src="../dist/js/script.js"></script>
    <script type="module" src="script.js"></script>

    <script>
        // Mendapatkan elemen input tanggal
        var inputDate = document.getElementById('endDate');
        
        // Mendapatkan tanggal hari ini dalam format yyyy-mm-dd
        var today = new Date().toISOString().split('T')[0];
        
        // Set minimum tanggal yang dapat dipilih menjadi hari ini
        inputDate.setAttribute('min', today);
    </script>
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
                    text: 'Tidak ada sesi yang dipilih!',
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