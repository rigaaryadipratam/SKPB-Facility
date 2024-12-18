<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SKPB ITS</title>
    <link rel="icon" href="dist/img/component/Logo_SKPB-biru.png">
    <link rel="stylesheet" href="dist/output.css">
    <style>
        /* CSS untuk Pop-up */
        .popup {
            display: none; /* Default hidden */
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        .popup-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 90%;
            max-width: 600px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }
        body.popup-open {
            overflow: hidden;
        }

        .popup h1 {
            font-size: 1.25rem; /* Mengurangi ukuran font judul */
        }

        .popup h2 {
            font-size: 1rem; /* Mengurangi ukuran font subjudul */
        }

        .popup p {
            font-size: 0.875rem; /* Mengurangi ukuran font teks paragraf */
        }

        .popup li {
            font-size: 0.875rem; /* Mengurangi ukuran font teks dalam list */
        }

        .popup .popup-content {
            padding: 10px; /* Mengurangi padding dalam pop-up */
        }

        .popup .popup-content .bg-white {
            padding: 10px; /* Mengurangi padding dalam konten putih */
        }

        .popup .popup-content .bg-white p {
            margin-bottom: 8px; /* Mengurangi margin bawah paragraf */
        }

        .popup .popup-content .bg-white li {
            margin: 3px 0; /* Mengurangi margin pada list item */
        }
        .popup.active {
            display: block;
        }

        .popup.active::before {
            content: '';
            position: fixed;
            z-index: -1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Efek blur */
            backdrop-filter: blur(8px); /* Efek blur dengan backdrop-filter (opsional, lihat catatan di bawah) */
        }
    </style>
</head>


<body>

<?php    

require 'components/header.php';

?>


<div id="myPopup" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h1 class="font-semibold text-primary text-xl xl:text-2xl">Selamat Datang</h1>
        <h2 class="font-semibold text-dark text-lg lg:text-xxl pb-2">Resource Sharing SKPB ITS</h2>
        <div class="bg-white rounded-lg p-3 border border-gray-300 border-2 pt-1 pb-3">
            <div class="text-dark leading-relaxed pt-1 text-justify">
                <p class="font-medium mb-2">
                    Aplikasi ini dirancang untuk memudahkan civitas akademika dan mahasiswa ITS dalam meminjam ruangan di SKPB ITS. Dengan sistem kami, proses peminjaman ruangan menjadi lebih cepat, mudah, dan transparan. Ajukan peminjaman ruangan sekarang dan nikmati kemudahan serta kenyamanan fasilitas terbaik yang kami tawarkan!
                </p>
                <p class="font-medium">
                    Sistem pelayanan penggunaan fasilitas ITS ini dinaungi oleh Subdirektorat Perkuliahan Bersama (SKPB) ITS, yang berkomitmen untuk menyediakan layanan peminjaman fasilitas yang efisien dan efektif bagi seluruh civitas akademika dan mahasiswa ITS.
                </p>
            </div>
            <p class="font-medium text-dark leading-relaxed pt-1">Layanan Kami :
                <li class="mx-5 font-medium text-dark leading-relaxed">
                    Peminjaman ruangan untuk kepentingan insidentil.
                </li>
                <li class="mx-5 font-medium text-dark leading-relaxed">
                    Peminjaman ruangan untuk keperluan perkuliahan selama satu semester.
                </li>
            </p>
        </div>
    </div>
</div>
 <!-- Hero Section Start -->
<section id="home" class="pt-28 pb-8 xl:pt-20">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-8 xl:px-6 mb-4  lg:w-1/2">
                    <h1 class="font-semibold  text-primary text-3xl xl:text-4xl">Selamat Datang</h1>
                    <h2 class="font-semibold  text-dark text-xl lg:text-2xl pb-2">Resource Sharing SKPB ITS</h2>

                    <div class="bg-white rounded-lg p-3 border border-gray-300 border-2 pt-1 pb-3">
                        <div class="text-dark leading-relaxed pt-1 text-justify">
                            <p class="font-medium mb-2">
                                Aplikasi ini dirancang untuk memudahkan civitas akademika dan mahasiswa ITS dalam meminjam ruangan di SKPB ITS. Dengan sistem kami, proses peminjaman ruangan menjadi lebih cepat, mudah, dan transparan. Ajukan peminjaman ruangan sekarang dan nikmati kemudahan serta kenyamanan fasilitas terbaik yang kami tawarkan!
                            </p>
                            <p class="font-medium">
                                Sistem pelayanan penggunaan fasilitas ITS ini dinaungi oleh Subdirektorat Perkuliahan Bersama (SKPB) ITS, yang berkomitmen untuk menyediakan layanan peminjaman fasilitas yang efisien dan efektif bagi seluruh civitas akademika dan mahasiswa ITS.
                            </p>
                        </div>
                        <p class="font-medium text-dark  leading-relaxed pt-1  ">Layanan Kami :
                        <li class="mx-5 font-medium text-dark  leading-relaxed">
                            Peminjaman ruangan untuk kepentingan insidentil.
                        </li>
                        <li class="mx-5  font-medium text-dark  leading-relaxed">
                            Peminjaman ruangan untuk keperluan perkuliahan selama satu semester.
                        </li>
                    </p>
                    </div>

                    <div class="pt-3">
                        <a href="https://docs.google.com/document/d/17rBbQvDRMRk83FINSq9imdO0uoRdHBgMwBDpe-yftHk/edit" class="text-base font-semibold text-white bg-primary border border-gray-300 py-3 px-8 rounded-full hover:shadow-lg
                    hover:opacity-80 transition duration-300 ease-in-out">Panduan Peminjaman</a>
                    </div>

                    <div class="mt-8"><a href="peminjaman.php" style="margin-top: 10px !important" class="text-base font-semibold text-primary bg-white border border-blue-900 py-3 px-8 rounded-full hover:shadow-lg
                    hover:opacity-80 transition duration-300 ease-in-out">Pinjam Ruangan Sekarang!</a></div>

                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class=" relative mt-8 right-0 lg:mt-5 lg:right-0">
                        <img src="dist/img/component/welcome.png" alt="E-Facilty ITS" class=" max-w-full mx-auto" />

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Carousel -->
    <section id="carouselberanda" class="pt-24 pb-24 bg-slate-200">
        <div class="max-w-3xl mx-auto ">

            <div id="default-carousel" class="sticky" data-carousel="static">

                <div class="overflow-hidden relative h-96 rounded-lg ">

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                        <img src="dist/img/component/tw1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="dist/img/component/tower2.jpeg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="dist/img/component/teater.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="dist/img/component/perpus.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                </div>


                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                </div>

                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="hidden">Anterior</span>
                    </span>
                </button>
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Siguiente</span>
                    </span>
                </button>

                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Siguiente</span>
                    </span>
                </button>
            </div>


            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>

    </section>

    <!-- Carousel End -->


    <!-- Rincian Ruangan Start -->
    <section id="rincianruangan" class="pt-24 pb-24 bg-slate-100">
    <div class="container">
        <div class="w-full px-6">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Gedung di SKPB ITS</h2>
            </div>
        </div>

        <div class="flex flex-wrap">

            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                    <img src="dist/img/component/tw1.jpg" alt="Tower 1" class="w-full h-36 object-cover"/>

                    <div class="py-8 px-6">
                        <h3>
                            <a href="cardclasstw1.php" class="text-center block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Gedung Tower 1</a>
                        </h3>
                        <p class="font-medium text-base text-secondary mb-6" style="text-align: justify;">Tower 1 memiliki ruangan yang diklasifikasikan berdasarkan jumlah kapasitas ruangan dan fasilitas ruangan.</p>
                        <a href="cardclasstw1.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                    <img src="dist/img/component/tower2.jpeg" alt="Tower 2" class="w-full h-36 object-cover"/>

                    <div class="py-8 px-6">
                        <h3>
                            <a href="cardclasstw2.php" class="text-center block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Gedung Tower 2</a>
                        </h3>
                        <p class="font-medium text-base text-secondary mb-6" style="text-align: justify;">Tower 2 memiliki ruangan yang diklasifikasikan berdasarkan jumlah kapasitas ruangan dan fasilitas ruangan.</p>
                        <a href="cardclasstw2.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                    <img src="dist/img/component/teater.jpg" alt="Teater" class="w-full h-36 object-cover"/>

                    <div class="py-8 px-6">
                        <h3>
                            <a href="cardclassteater.php" class="text-center block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Teater</a>
                        </h3>
                        <p class="font-medium text-base text-secondary mb-6" style="text-align: justify;">Teater memiliki ruangan yang diklasifikasikan berdasarkan jumlah kapasitas ruangan dan fasilitas ruangan.</p>
                        <a href="cardclassteater.php" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                    <img src="dist/img/component/perpus.jpg" alt="Perpustakaan" class="w-full h-36 object-cover"/>

                    <div class="py-8 px-6">
                        <h3>
                            <a href="cardclassperpustakaan.php" class="text-center block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Perpustakaan</a>
                        </h3>
                        <p class="font-medium text-base text-secondary mb-6" style="text-align: justify;">Perpustakaan memiliki ruangan yang diklasifikasikan berdasarkan jumlah kapasitas ruangan dan fasilitas ruangan.</p>
                        <a href='cardclassperpustakaan.php' class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    
    <?php    

    require 'components/footer.php';
    
    ?>

        <!-- <script src="dist/js/slider.js"></script> -->
    <script src="dist/js/script.js"></script>
    <script src="dist/js/slider-index.js"></script>
    <script type="module" src="script.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var popup = document.getElementById("myPopup");
            var closeBtn = document.getElementsByClassName("close")[0];
            var body = document.body;

            popup.classList.add("active"); // Tampilkan pop-up saat halaman dimuat
            body.classList.add("popup-open"); // Mengatur overflow body menjadi hidden

            closeBtn.onclick = function() {
                popup.classList.remove("active"); // Sembunyikan pop-up saat tombol close diklik
                body.classList.remove("popup-open"); // Kembalikan overflow body ke normal
            }

            window.onclick = function(event) {
                if (event.target == popup) {
                    popup.classList.remove("active"); // Sembunyikan pop-up saat area di luar pop-up diklik
                    body.classList.remove("popup-open"); // Kembalikan overflow body ke normal
                }
            }
        });

    </script>
</body>

</html>
