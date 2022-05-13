<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warisan Budaya Digital</title>
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <link rel="icon" href="{{ asset('images/balinese.png') }}">
</head>
<body>
    <header>
        <div class="title" style="background: url({{ asset('images/SekarJepunUSD19c.jpg') }});">
            <h1>Tari Bali</h1>
            <p style="text-align: center;">Beragam Tarian Pulau Dewata dengan Beragam Makna</p>
        </div>
        <nav>
            <ul>
                <li><a href="/" style="font-weight: bold;">Beranda</a></li>
                <li><a href="/type">Jenis</a></li>
                <li><a href="/gallery">Galeri</a></li>
                <li><a href="/contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="content">
            <article>
                <section >
                    <h2>Apa itu<br>Warisan Budaya Digital ?</h2>
                    <p><strong>Warisan Budaya Digital</strong> merupakan proses digitalisasi peninggalan berupa benda maupun non-benda yang memanfaatkan teknologi informasi. Warisan Budaya merupakan gambaran dari jati diri dan kehidupan masyarakat pada masa lampau dan diwariskan dari generasi sebelumnya serta dilestarikan untuk generasi yang akan datang.</p>
                </section>

                <section>
                    <h2>Tujuan dari<br>Warisan Budaya Digital</h2>
                    <p>Tujuan dari <strong>Warisan Budaya Digital</strong> adalah untuk melestarikan warisan budaya yang dimiliki oleh sebuah daerah tertentu agar nantinya generasi penerus dapat mengetahui warisan budaya tersebut.</p>
                </section>

                <section class="images">
                    <img src="{{ asset('images/balinese.png') }}" alt="">
                    <img src="{{ asset('images/balinese.png') }}" alt="">
                    <img src="{{ asset('images/balinese.png') }}" alt="">
                </section>
            </article>
        </div>
    </main>

    <footer>
        <p>Warisan Budaya Digital</p>
    </footer>
</body>
</html>