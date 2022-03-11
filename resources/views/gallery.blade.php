<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warisan Budaya Digital</title>
    <link rel="stylesheet" href="{{ asset('css/type-style.css') }}">
</head>

<body>
    <header>
        <div class="title" style="background: url({{ asset('images/SekarJepunUSD19c.jpg') }});">
            <h1>Galeri Tari Bali</h1>
            <p style="text-align: center;">Beragam Tarian Pulau Dewata dengan Beragam Makna</p>
        </div>
        <nav>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/type">Jenis</a></li>
                <li><a href="/gallery" style="font-weight: bold;">Galeri</a></li>
                <li><a href="/contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <div class="gallery">
                <a target="_blank" href="{{ asset('images/SekarJepunUSD19c.jpg') }}">
                    <img src="{{ asset('images/SekarJepunUSD19c.jpg') }}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="{{ asset('images/SekarJepunUSD19c.jpg') }}">
                    <img src="{{ asset('images/SekarJepunUSD19c.jpg') }}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="{{ asset('images/SekarJepunUSD19c.jpg') }}">
                    <img src="{{ asset('images/SekarJepunUSD19c.jpg') }}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="{{ asset('images/SekarJepunUSD19c.jpg') }}">
                    <img src="{{ asset('images/SekarJepunUSD19c.jpg') }}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery">
                <a target="_blank" href="{{ asset('images/SekarJepunUSD19c.jpg') }}">
                    <img src="{{ asset('images/SekarJepunUSD19c.jpg') }}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </section>
    </main>

    <footer>
        <p>Warisan Budaya Digital</p>
    </footer>
    <style>
        .gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 280px;
        }

        .gallery:hover {
            border: 1px solid #777;
        }

        .gallery img {
            width: 100%;
            height: auto;
        }

        .desc {
            padding: 15px;
            text-align: center;
        }

    </style>
</body>

</html>
