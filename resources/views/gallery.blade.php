<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warisan Budaya Digital</title>
    <link rel="icon" href="{{ asset('images/balinese.png') }}">
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
        <section class="gallery-container">
            @forelse ($dances as $dance)
                <div class="gallery">
                    <a target="_blank" href="{{ $dance->image_path }}">
                        <img src="{{ $dance->image_path }}" alt="{{ $dance->name }}" width="600" height="400">
                    </a>
                    <div class="desc">{{ $dance->name }}</div>
                </div>
            @empty
                <section class="empty">
                    <img src="{{ asset('images/balinese.png') }}" alt="">
                    <p>Maaf galeri tari belum tersedia!</p>
                </section>
            @endforelse
        </section>
    </main>

    <footer>
        <p>Warisan Budaya Digital</p>
    </footer>
    <style>
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            flex-direction: row;
        }

        .gallery {
            margin: 15px 5px 15px 5px;
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
