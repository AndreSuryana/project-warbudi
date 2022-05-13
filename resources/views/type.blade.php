<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warisan Budaya Digital</title>
    <link rel="stylesheet" href="{{ asset('css/type-style.css') }}">
    <link rel="icon" href="{{ asset('images/balinese.png') }}">
</head>

<body>
    <header>
        <div class="title" style="background: url({{ asset('images/SekarJepunUSD19c.jpg') }});">
            <h1>Jenis Tari Bali</h1>
            <p style="text-align: center;">Beragam Tarian Pulau Dewata dengan Beragam Makna</p>
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
        <p style="text-align: center; margin-bottom: 5vh">Tari Bali adalah beragam tarian yang berasal dari pulau Bali.
            Tari Bali tidak selalu bergantung pada alur cerita. Tujuan utama penari Bali adalah untuk menarikan tiap
            tahap gerakan dan rangkaian dengan ekspresi penuh. Kecantikan tari Bali tampak pada gerakan-gerakan yang
            abstrak dan indah.</p>
        <article>
            @foreach ($types as $type)
                <a href="/type/{{ $type->slug }}" style="text-decoration: none; color: black;">
                    <section class="card">
                        <h2>{{ $type->name }}</h2>
                        <img src="{{ asset('images/balinese.png') }}" alt="">
                        <p>{{ $type->description }}</p>
                    </section>
                </a>
            @endforeach
        </article>
    </main>

    <footer>
        <p>Warisan Budaya Digital</p>
    </footer>
</body>

</html>
