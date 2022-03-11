<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warisan Budaya Digital</title>
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aperiam dicta 
                        adipisci minus molestias ea sint atque quos doloremque at! Quia accusantium quam 
                        quas voluptatum, tempore consequuntur beatae repellendus atque.</p>
                </section>

                <section>
                    <h2>Tujuan dari<br>Warisan Budaya Digital</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit itaque 
                        dignissimos officiis veniam, blanditiis dolorem dolor eveniet non possimus odio 
                        debitis inventore porro tempora asperiores reprehenderit officia alias sequi.</p>
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