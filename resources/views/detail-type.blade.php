<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/detail-type-style.css') }}">
    <link rel="icon" href="{{ asset('images/balinese.png') }}">
</head>

<body>
    <header>
        <div class="title" style="background: url({{ $cover_path }});">
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
            <h2>Penelusuran Tari</h2>
            <input type="text" name="search_bar" id="search_bar" placeholder="Telusuri Tari. . .">
            <br><br>

            @forelse ($dances as $dance)
                <article id="jenis">
                    <a href="/dance/{{ $dance->slug }}">
                        <section class="card">
                            <img src="{{ $dance->image_path }}" alt="{{ $dance->name }}">
                            <div>
                                <h3>{{ $dance->name }}</h3>
                                {{-- <p>{!! implode(' ', array_slice(str_word_count($dance->description, 1), 0, 25)) !!} ...</p> --}}
                                <p>{!! $dance->description !!}</p>
                            </div>
                        </section>
                    </a>
                </article>
            @empty
                <section class="empty">
                    <img src="{{ asset('images/balinese.png') }}" alt="">
                    <p>Maaf data tari tidak ditemukan!</p>
                </section>
            @endforelse

        </div>
    </main>

    <footer>
        <p>Warisan Budaya Digital</p>
    </footer>
</body>

</html>
