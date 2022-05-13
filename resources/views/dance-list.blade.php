<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warisan Budaya Digital</title>
    <link rel="stylesheet" href="{{ asset('css/dance-list-style.css') }}">
    <link rel="icon" href="{{ asset('images/balinese.png') }}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'
        integrity='sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=='
        crossorigin='anonymous' />
</head>

<body>
    <div class="sidenav">
        <a href="#" style="padding-top: 54px; font-weight: bold;">List Data Tari</a>
        <a href="/control-panel/dance-add/">Tambah Data Tari</a>
    </div>

    <header>
        <nav>
            <h1>Tari Bali</h1>
        </nav>
    </header>

    <main>
        @if (session('success'))
            <div class="alert success">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Success! </strong>{{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert danger">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Error! </strong>{{ session('error') }}
            </div>
        @endif

        <table class="center">
            <tr>
                <th>ID</th>
                <th>Nama Tari</th>
                <th>Jenis Tari</th>
                <th>Aksi</th>
            </tr>
            @forelse ($dances as $dance)
                <tr>
                    <td>{{ $dance->id }}</td>
                    <td>{{ $dance->name }}</td>
                    <td>{{ $dance->type->name }}</td>
                    <td class="action-buttons">
                        <a href="/dance/{{ $dance->slug }}" class="btn primary"><i class="fa-solid fa-eye"></i></a>
                        <a href="/control-panel/dance-edit/{{ $dance->slug }}" class="btn success"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        {{-- <a href="#" class="btn danger"><i class="fa-solid fa-trash-can"></i></i></a> --}}
                        <form action="/control-panel/dance-delete" method="POST">
                            @csrf
                            <input type="hidden" name="dance_id" value="{{ $dance->id }}">
                            <button style="padding: 8px; padding-bottom: 9px; padding-left: 12px; padding-right: 12px;"
                                class="btn danger" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Daftar Tari Bali masih kosong!</td>
                </tr>
            @endforelse
        </table>
    </main>

    <style>
        /* The alert message box */
        .alert {
            padding: 20px;
            color: white;
            background-color: #f44336;
            margin-bottom: 15px;
            opacity: 1;
            transition: opacity 0.6s;
            /* 600ms to fade out */
        }

        .danger {
            background-color: #f44336;
        }

        .success {
            background-color: #04AA6D;
        }

        .warning {
            background-color: #ff9800;
        }

        .info {
            background-color: #2196F3;
        }

        /* The close button */
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        /* When moving the mouse over the close button */
        .closebtn:hover {
            color: black;
        }

        .small-error-message {
            color: #f44336;
            font-size: small;
            margin-bottom: 15px;
        }

    </style>

    <script>
        // Get all elements with class="closebtn"
        var close = document.getElementsByClassName("closebtn");
        var i;

        // Loop through all close buttons
        for (i = 0; i < close.length; i++) {
            // When someone clicks on a close button
            close[i].onclick = function() {

                // Get the parent of <span class="closebtn"> (<div class="alert">)
                var div = this.parentElement;

                // Set the opacity of div to 0 (transparent)
                div.style.opacity = "0";

                // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
                setTimeout(function() {
                    div.style.display = "none";
                }, 600);
            }
        }
    </script>
</body>

</html>
