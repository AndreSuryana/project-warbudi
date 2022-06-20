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
        <div class="title banner">
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
            <form class="example" action="/type/{{ $type_slug }}" style="margin:auto;max-width:300px">
                <input type="text" placeholder="Search.." name="search" id="search" value="{{ $search }}">
                <button type="submit">Search</button>
            </form>

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

    <style>
        * {
            box-sizing: border-box;
        }

        form.example {
            display: flex;
        }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
            border: 1px solid black;
            border-radius: 25px;
        }

        form.example button {
            float: left;
            width: auto;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
            border: 1px solid black;
            border-radius: 25px;
            margin-left: 15px;
            background-color: #ffac42;
        }

        form.example button:hover {
            background: #0b7dda;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }
        
        .banner {
            background: url({{ asset('images/banner-warbudi.jpg') }}) no-repeat center;
            background-size: cover;
        }
        
    </style>
</body>

</html>
