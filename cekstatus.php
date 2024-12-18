


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SKPB ITS</title>
    <link rel="icon" href="dist/img/component/Logo_SKPB-biru.png">
    <link rel="stylesheet" href="dist/output.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php

require 'components/header.php';

?>


    <!--Isi Cek Status-->
    <section id="cekstatus" class="pt-40 pb-40 ">
    <div class="container">
        <div class="w-full px-12 lg:w-1/2 lg:mx-auto">
            <div class="w-full px-4 border border-slate-300 rounded-xl mx-auto p-5 shadow-md font-inter">
                <div class="max-w-xl mx-auto text-center mt-6 mb-6">
                    <h4 class="font-bold text-xl text-dark mt-6">CEK STATUS PEMINJAMAN</h4>
                </div>

                <form method="post" action="">
                    <div class="w-full px-4 mb-4">
                        <h2 class="mb-4"><i>Untuk memastikan pengajuan Anda, cek halaman <a href="utilitas.php" class="text-primary">Utilitas Ruang</a></i></h2>
                        <label for="kode_peminjaman">
                            <span class="block font-semibold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">No Kode Peminjaman</span>   
                            <input type="text" id="kode_peminjaman" name="kode_peminjaman" class="w-full bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary" placeholder="Masukkan No Kode Peminjaman" required/>
                        </label>
                    </div>
                    <!-- <div class="w-full px-4 mb-4">
                        <label for="nrp">
                            <span class="block font-semibold mb-1 text-slate-800 after:content-['*'] after:text-pink-600 after:ml-0.5">NRP/NIP/NPP Peminjam</span> 
                            <input type="text" id="nrp" name="nrp" class="w-full bg-slate-200 text-dark p-2 rounded-md  focus:outline-none  focus:ring-primary focus:ring-1 focus:border-primary" placeholder="Masukkan NRP/NIP/NPP Peminjam" required/>
                        </label>
                    </div> -->
                    <div class="w-full px-4 mb-6 flex justify-end">
                        <a class="text-base font-semibold text-center bg-primary text-white py-3 px-6 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"><button name="submit" type="submit" id="submit">Submit</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

    <?php    

require 'components/footer.php';

?>

<script src="dist/js/script.js"></script>
<script type="module" src="script.js"></script>
<script>
    document.getElementById("submit").addEventListener("click", function(event){
        event.preventDefault(); // Prevent the default form submission
        var kode_peminjaman = document.getElementById("kode_peminjaman").value; // Get the value from the input field
        // var nrp = document.getElementById("nrp").value;
        window.location.href = "success.php?kode_peminjaman=" + kode_peminjaman;
        // window.location.href = "success.php?kode_peminjaman=" + kode_peminjaman +"&nrp=" + nrp ;
    });
</script>
</body>
</html>