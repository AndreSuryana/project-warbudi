<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name }}</title>
    <link rel="stylesheet" href="{{ asset('css/detail-style.css') }}">
</head>
<body>
    <header>
        <div class="title" style="background: url({{ asset('images/SekarJepunUSD19c.jpg') }});">
            <h1>{{ $title }}</h1>
            <p style="text-align: center;">{{ $subtitle }}</p>
        </div>
        <nav>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/type" style="font-weight: bold;">Jenis</a></li>
                <li><a href="/gallery">Galeri</a></li>
                <li><a href="/contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="content">
            <h2>{{ $name }}</h2>
            <section class="images">
                <img src="{{ $image_path }}" alt="{{ $name }}">
            </section>

            <section class="card" style="margin-top: 50px;">
                <iframe src="https://www.youtube.com/embed/{{ $video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <h3>Sejarah Tari</h3>
                {!! $history !!}
                
                <h3>Deskripsi Tari</h3>
                {!! $description !!}

                <h3>Jenis Tari</h3>
                <ul>
                    <a href="/type/{{ $type->slug }}"><li>{{ $type->name }}</li></a>
                </ul>
            </section>
        </div>
    </main>

    <footer>
        <p>Warisan Budaya Digital</p>
    </footer>
</body>
</html>