<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel - Warisan Budaya Digital</title>
    <link rel="icon" href="{{ asset('images/balinese.png') }}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'
        integrity='sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=='
        crossorigin='anonymous' />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left bg-orange" style="width: 200px;"
        id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
        <a href="/control-panel" class="w3-bar-item w3-button selected"><strong>List Data Tari</strong></a>
        <a href="/control-panel/dance-add" class="w3-bar-item w3-button">Tambah Data Tari</a>
        <form action="/logout" method="POST">
            @csrf
            <button class="w3-bar-item btn danger" type="submit">Logout</button>
        </form>
    </div>

    <div class="w3-main" style="margin-left: 200px">
        <div class="header bg-orange">
            <button class="w3-button bg-orange w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1 class="title">Warisan Budaya Digital</h1>
            </div>
        </div>

        <div class="w3-container" style="margin: 1em 0 2em 0;">
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
                            <a href="/dance/{{ $dance->slug }}" class="btn primary"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="/control-panel/dance-edit/{{ $dance->slug }}" class="btn success"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            {{-- <a href="#" class="btn danger"><i class="fa-solid fa-trash-can"></i></i></a> --}}
                            <form action="/control-panel/dance-delete" method="POST">
                                @csrf
                                <input type="hidden" name="dance_id" value="{{ $dance->id }}">
                                <button class="btn danger" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Daftar Tari Bali masih kosong!</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap');

        body {
            font-family: "Noto Serif", Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .header {
            display: flex;
        }

        .title {
            font-family: "Dancing Script", Arial, Helvetica, sans-serif;
            font-weight: 600;
            font-size: 2rem;
            width: auto;
        }

        .bg-orange {
            background-color: #ffac42;
        }

        table {
            border-collapse: collapse;
            /* width: 50%; */
            width: 100%;
            border: 1px solid #f2f5f7;
        }

        table tr th {
            background: #ffac42;
            font-family: "Dancing Script", Arial, Helvetica, sans-serif;
            color: #f2f5f7;
            font-weight: normal;
        }

        table,
        th,
        td {
            padding: 8px 20px;
            text-align: center;
        }

        table tr:hover {
            background-color: #f5f5f5;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn {
            margin-left: 3px;
            margin-right: 3px;
            padding: 5px 10px 5px 10px;
            color: white;
            border: none;
        }

        /* The alert message box */
        .alert {
            padding: 20px;
            color: white;
            background-color: #f44336;
            margin-bottom: 15px;
            opacity: 1;
            transition: opacity 0.6s; /* 600ms to fade out */
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

        .primary {
            background-color: #008CBA;
        }

        .success {
            background-color: #6BCB77;
        }

        .btn:hover {
            cursor: pointer;
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
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }

        // Get all elements with class="closebtn"
        var close = document.getElementsByClassName("closebtn");
        var i;
        
        // Loop through all close buttons
        for (i = 0; i < close.length; i++) {
            // When someone clicks on a close button
            close[i].onclick = function(){
            
                // Get the parent of <span class="closebtn"> (<div class="alert">)
                var div = this.parentElement;
            
                // Set the opacity of div to 0 (transparent)
                div.style.opacity = "0";
            
                // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
                setTimeout(function(){ div.style.display = "none"; }, 600);
            }
        }

        // Remove upload in trix editor
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>

</body>

</html>
