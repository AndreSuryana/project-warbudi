<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warisan Budaya Digital</title>
    <link rel="stylesheet" href="{{ asset('css/contact-style.css') }}">
</head>
<body>
    <header>
        <div class="title" style="background: url({{ asset('images/SekarJepunUSD19c.jpg') }});">
            <h1>Kontak Kami</h1>
            <p style="text-align: center;">Beragam Tarian Pulau Dewata dengan Beragam Makna</p>
        </div>
        <nav>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/type">Jenis</a></li>
                <li><a href="/gallery">Galeri</a></li>
                <li><a href="/contact" style="font-weight: bold;">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="content">
            <h2>Anggota Tim</h2>
            <article id="profile">
                <section class="card">
                    <div class="image-container">
                        <img src="{{ asset('images/contact/udha.jpeg') }}" alt="">
                    </div>
                    <p><b>I Ketut Gede Udha Krisna Yasa</b></p>
                    <p>1908561089</p>
                </section>

                <section class="card">
                    <div class="image-container">
                        <img src="{{ asset('images/contact/yande.jpeg') }}" alt="">
                    </div>
                    <p><b>I Wayan Gede Adi Palguna</b></p>
                    <p>1908561098</p>
                </section>

                <section class="card">
                    <div class="image-container">
                        <img src="{{ asset('images/contact/andre.png') }}" alt="">
                    </div>
                    <p><b>Kadek Andre Suryana</b></p>
                    <p>1908561103</p>
                </section>
            </article>
        </div>
    </main>

    <footer>
        <p>Warisan Budaya Digital</p>
    </footer>
</body>
</html>