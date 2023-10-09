<!DOCTYPE html>
<html>
<head>
    <title>Produk</title>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <style>
        body {
            background-color: #E0E9F0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .navbar {
            background-color: #2F4F4F;
            color: #fff;
            padding: 10px;
        }
        
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        
        .navbar li {
            margin: 0 10px;
        }
        
        .navbar a {
            text-decoration: none;
            color: white;
        }
        
        .search-container {
            position: absolute;
            display: inline-block;
            top: 10px;
            right: 10px;
        }
        
        .search-input {
            padding: 8px;
            border: none;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 14px;
        }
        
        .search-button {
            position: absolute;
            top: 0;
            right: 0;
            padding: 8px;
            border: none;
            background-color: #333;
            color: #fff;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }
        
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
        
        .gallery img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            margin: 10px;
        }
        
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
        }
        
        .image-gallery img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin: 10px;
        }
        
    </style>
    <script>
        function performSearch() {
            var searchTerm = document.getElementById('search-input').value;
            var apiKey = '229ff157f9b90eb273aca2f89b9d8bfa'; // Ganti dengan kunci API Anda

            // URL API pencarian gambar
            var apiUrl = 'https://pixabay.com/api/?key=' + apiKey + '&q=' + encodeURIComponent(searchTerm);

            // Mengirim permintaan GET ke API menggunakan Fetch API
            fetch(apiUrl)
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    // Menampilkan gambar hasil pencarian
                    displayImages(data.hits);
                })
                .catch(function(error) {
                    console.log('Terjadi kesalahan:', error);
                });
        }

        function displayImages(images) {
            var gallery = document.getElementById('image-gallery');
            gallery.innerHTML = '';

            images.forEach(function(image) {
                var imgElement = document.createElement('img');
                imgElement.src = image.webformatURL;
                imgElement.alt = image.tags;
                gallery.appendChild(imgElement);
            });
        }

        function goBack() {
            var searchInput = document.getElementById("search-input").value.toLowerCase();
            var gallery = document.getElementsByClassName("gallery")[0];
            var images = gallery.getElementsByTagName("img");

            // Menampilkan semua gambar yang mungkin disembunyikan karena pencarian sebelumnya
            for (var i = 0; i < images.length; i++) {
                images[i].style.display = "block";
            }

            // Mereset nilai input pencarian
            document.getElementById("search-input").value = "";

            // Kembali ke halaman galeri
            window.scrollTo(0, gallery.offsetTop);
        }
    </script>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="admin.php">Beranda</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="produk.php">Galerry</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
    </div>
    <h1>Cila_shop</h1>
    <div class="search-container">
        <input type="text" id="search-input" class="search-input" placeholder="Cari...">
        <button onclick="performSearch()" class="search-button">Cari</button>
    </div>

    <div class="gallery">
    <figure>
        <img src="tv.jpg" alt="tv" style="width: 500px; height: 400px;">
        <figcaption style="float: right; text-align: left;">
        <div style="color: black";>
            <p>Hadirnya TV dinding membantu menjawab kebutuhan pengguna karena bisa</p>
            <p>ditempatkan di ruangan minimalis. Selain dari nilai fungsinya, produk tersebut juga</p>
            <p>dipilih dapat meningkatkan nilai keindahan ruangan.</p>
            <p>Nah TV dinding ini sangat cocok dengan rumah minimalis, karena dengan dapat</p>
            <p>meminimalisir penempatan dari elektronik di rumah dengan ruang yang minimalis.</p>
            <p>Lantas apa sajakah Merk TV dinding terbaik yang direkomendasikan untuk Anda?</p>
            <p>Dapatkan jawabannya dengan membaca ulasan pada postingan ini sampai selesai.</p>
        </div>
        <ul>
            <li><a href="https://tiperumah.id/blog/wp-content/uploads/2022/10/Akari-LED-TV-20-Inch.png.webp">Akari LED TV 20 Inch<a></li>
            <li><a href="https://tiperumah.id/blog/wp-content/uploads/2022/10/Changhong-LED-TV-32-Inch.png.webp">Changhong LED TV 32 Inch</a></li>
            <li><a href="https://tiperumah.id/blog/wp-content/uploads/2022/10/Polytron-LED-TV-20-Inch.png.webp">Polytron LED TV 20 Inch</a></li>
            <li><a href="https://tiperumah.id/blog/wp-content/uploads/2022/10/Sharp-LED-TV-32-Inch.png.webp">Sharp LED TV 32 Inch</a></li>
            <li><a href="https://tiperumah.id/blog/wp-content/uploads/2022/10/LG-LED-TV-55-Inch.png.webp">LG LED TV 55 Inch</a></li>
            <li><a href="https://tiperumah.id/blog/wp-content/uploads/2022/10/Sony-LED-TV-48-Inch.png.webp">Sony LED TV 48 Inch</a></li>
            <li><a href="https://tiperumah.id/blog/wp-content/uploads/2022/10/Xiaomi-Mi-LED-TV-A4-Smart-TV.png.webp">Xiaomi Mi LED TV A4 Smart TV</a></li>
            <li><a href="https://tiperumah.id/blog/wp-content/uploads/2022/10/Samsung-43-QLED-4K-Q63B.png.webp">Samsung 43” QLED 4K Q63B</a></li>
        </ul>
        </figcaption>
        </figure>
        <figure>
        <img src="kursi.jpg" alt="kursi" style="width: 500px; height: 400px;">
        <figcaption style="float: right; text-align: left;">
        <div style="color: black";>
            <p class="black-text">Persembahan Spesial! Dapatkan kenyamanan tak tergantikan dengan koleksi kursi sofa </p>
            <p class="black-text">kami yang elegan dan berkualitas tinggi. Pilihlah kursi sofa impian Anda sekarang dan nikmati </p>
            <p class="black-text">waktu berkualitas di rumah. Hanya untuk Anda, diskon hingga 30% untuk pembelian pertama! </p>
            <p class="black-text">Segera kunjungi toko kami atau belanja online di situs resmi kami sebelum kesempatan </p>
            <p class="black-text">istimewa ini berakhir. Buatlah ruang tamu Anda menjadi tempat yang penuh gaya dengan </p>
            <p class="black-text">kursi sofa yang menakjubkan dari kami. Dapatkan kenyamanan dan keindahan dalam satu </p>
            <p class="black-text">paket. Tunggu apa lagi? Segera dapatkan kursi sofa idaman Anda sekarang!"</p>
        </div>
        <ul>
        <li><a href="https://asset.morefurniture.id/NEWS/2022/Sofa%20sinetron%20klasik%20Chesterfield%20ruang%20tamu.jpg">Sofa Chesterfield</a></li>
        <li><a href="https://asset.morefurniture.id/NEWS/2022/beli%20Sofa%20bed%20procella%20minimalis%20modern%20ruang%20tamu.jpg">Sofa Bed</a></li>
        <li><a href="https://asset.morefurniture.id/NEWS/2022/Sofa%20minimalis%20Lawson%20untuk%20ruang%20tamu.jpg">Sofa Lawson</a></li>
        <li><a href="https://asset.morefurniture.id/NEWS/2022/Sofa%20modern%20Tuxedo%20kaki%20kayu%20runcing%20untuk%20ruang%20tamu.jpg">Sofa Tuxedo</a></li>
        <li><a href="https://asset.morefurniture.id/NEWS/2022/Sofa%20Mid-century%20minimalis%20untuk%20ruang%20tamu.jpg">Sofa Mid-century</a></li>
        <li><a href="https://asset.morefurniture.id/NEWS/2022/Sofa%20Chaise%20minimalis%20buat%20tidur.jpg">Sofa Chaise</a></li>
        <li><a href="https://asset.morefurniture.id/NEWS/2022/Sofa%20Loveseat%20minimalis%20abu-abu.jpg">Sofa Loveseat</a></li>
        <li><a href="https://asset.morefurniture.id/NEWS/2022/Sofa%20English%20Roll%20Arm%20minimalis%20warna%20netral.jpg">Sofa English Roll Arm</a></li>
    </ul>
        </figcaption>
        </figure>
        <figure>
        <img src="adv.jpg" alt="adv" style="width: 500px; height: 400px;">
        <figcaption style="float: right; text-align: left;">
        <div style="color: black";>
            <p>All New ADV Honda 160cc memiliki dua tipe, yaitu CBS dan ABS.</p>
            <p>Untuk diketahui, ADV 350 telah diluncurkan di Eropa beberapa waktu lalu. Motor ini memiliki garis</p>
            <p>desain yang sama seperti ADV 150, terutama di area fascia-nya. Namun ADV 350 dibuat</p>
            <p>sedikit lebih bongsor bodinya, mirip-mirip Honda Forza 350. Sebelum kita membedah perbedaan dua motor</p>
            <p>tersebut, brother harus tau spesifikasi dasarnya terlebih dahulu. Honda ADV 160 kali ini dibekali</p>
            <p>dengan mesin baru berkapasitas 160 cc 4 katup berpendingin cairan, eSP+. Dengan sistem pembakaran</p>
            <p>injeksi PGM-FI. Mesin baru tersebut menghasilkan tenaga yang lebih besar mencapai 15,8 hp</p>
            <p>di 8.500 rpm dan torsi 14,7 Nm di 6.500 rpm. Selain mesin, desain Honda ADV 160 juga banyak perubahan</p>
            <p>dibanding generasi sebelumnya. Honda ADV 160 ABS dan CBS mendapatkan tiga warna, untuk varian ABS:</p>
        </div>
        <ul>
            <li><a href="https://cdn.setirkanan.co.id/images/2023/06/09/37c3b564dc758a7a1b8a25500ca591e7b967fb2b/blobid0.png">Tough Matte Black (Hitam Doff)</a></li>
            <li><a href="https://awsimages.detik.net.id/community/media/visual/2022/06/28/rendering-all-new-honda-adv-160-karya-julak-sendie_43.jpeg?w=1200">Tough Matte Red (Merah Doff)</a></li>
            <li><a href="https://media.suara.com/pictures/653x366/2022/07/01/14760-new-honda-adv-160-pt-ahm-02.jpg">Tough Matte White (Putih Doff).</a></li>
            <li><a href="https://www.google.com/search?q=jenis-jenis+motor+yamaha%2Chonda&tbm=isch&ved=2ahUKEwjOxu2j76mAAxWZzaACHflmCKYQ2-cCegQIABAA&oq=jenis-jenis+motor+yamaha%2Chonda&gs_lcp=CgNpbWcQAzoECCMQJzoECAAQHjoGCAAQCBAeOgcIABAYEIAEOgUIABCABFDZBVjNoQFg_aMBaAJwAHgAgAHfAYgBuxuSAQYxLjIyLjKYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=YcG_ZI6SBJmbg8UP-c2hsAo&bih=607&biw=1366&client=firefox-b-d">silahkan cek motor dan warna kesukaan mu...</a></li>
        </ul>
        </figcaption>
        </figure>
        <figure>
            <img src="genio.jpg" alt="genio" style="width: 500px; height: 400px;">
            <figcaption style="float: right; text-align: left;">
            <div style="color: black;">
                <p>Honda Genio 2023 merupakan motor matic yang hadir dengan nuansa retro modern, sama seperti</p>
                <p>saudaranya Scoopy.Honda Genio 2023 memangku mesin berkapasitas 110cc dan memiliki identitas</p>
                <p>sebagai skutik casual fashionable dan menjadi tren baru masa kini. Skutik ini juga menjadi </p>
                <p>andalan Honda untuk bisa laris manis seperti saudara kandungnya, Honda BeAT. Tenaga maksimal</p>
                <p>mesin milik Honda Genio ini mencapai 6,6 kW pada 7.500 rpm, dan torsi puncak di 9,3 Nm</p>
                <p>pada 5.500 rpm. Honda Genio memiliki tinggi jok 744 mm dengan bobot 93 kg Rem depan</p>
                <p>menggunakan Disc, sedangkan di belakang Drum. Honda Genio memiliki 6 pilihan warna.</p>
            </div>
                <ul>
                    <li><a href="https://imgcdn.oto.com/large/gallery/color/73/2177/honda-genio-color-557536.jpg">Radiant red</a></li>
                    <li><a href="https://imgcdn.oto.com/large/gallery/color/73/2177/honda-genio-color-920787.jpg">Fabulous Matte Black</a></li>
                    <li><a href="https://imgcdn.oto.com/large/gallery/color/73/2177/honda-genio-color-473741.jpg">Fabulous Matte Brown</a></li>
                    <li><a href="https://imgcdn.oto.com/large/gallery/color/73/2177/honda-genio-color-206052.jpg">Radiant Brown Black</a></li>
                    <li><a href="https://imgcdn.oto.com/large/gallery/color/73/2177/honda-genio-color-622097.jpg">Fabulous Matte Blue</a></li>
                    <li><a href="https://imgcdn.oto.com/large/gallery/color/73/2177/honda-genio-color-997259.jpg">Radiant Black</a></li>
                </ul>
            </figcaption>
            </figure>
            <figure>
            <img src="Beat-150.jpg" alt="honda" style="width: 500px; height: 400px;">
            <figcaption style="float: right; text-align: left;">
            <div style="color: black;">
                <p> Industri otomotif kembali dihebohkan dengan sosok New Honda BeAT 2023. Karena, dikabarkan bahwa New</p>
                <p>Honda BeAT 2023 ini akan diluncurkan dengan versi terbarunya. Diketahui, bahwa versi terbaru dari New</p>
                <p>Honda BeAT 2023 ini akan mengusung instrumen layar TFT, rem ABS serta Lampu Full LED.</p>
                <p>Dan yang pasti, New Honda BeAT 2023 ini akan tetap irit dengan harga terjangkau sebagai motor sejuta umat.</p>
                <p>tersebut,brother harus tau spesifikasi dasarnya terlebih dahulu.Honda ADV 160 kali ini dibekali</p>
                <p>Di Indonesia pun, motor matic Honda murah ini jadi yang terlaris di pasaran. Maka tak heran,</p>
                <p>kalau para penggemarnya ingin mesinnya di upgrade jadi 125cc sampai 150cc. Karena, untuk meningkatkan </p>
                <p>performa dan supaya lebih besar tenaga nya Serta, bisa dengan mudah ketika di tanjakan atau medan lainnya</p>
                <p></p>
            </div>
                <ul>
                    <li><a href="https://imgx.motorplus-online.com/crop/0x0:0x0/700x0/photo/2019/01/24/3677280817.jpg">Honda BeAT Sporty</a></li>
                    <li><a href="https://imgx.motorplus-online.com/crop/0x0:0x0/700x0/photo/2019/01/24/2866795712.jpg">Honda BeAT Street</a></li>
                    <li><a href="https://imgx.motorplus-online.com/crop/0x0:0x0/700x0/photo/2018/12/22/1801278557.jpg">Honda BeAT POP eSP</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </figcaption>
            </figure>
       </div>

    <a href="admin.php" class="btn">back to</a>
    <a href="tentang.php" class="btn">next</a>
</body>
</html>
