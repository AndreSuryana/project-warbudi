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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
</head>

<body>

    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left bg-orange" style="width: 200px;"
        id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
        <a href="/control-panel" class="w3-bar-item w3-button selected">List Data Tari</a>
        <a href="/control-panel/dance-add" class="w3-bar-item w3-button"><strong>Tambah Data Tari</strong></a>
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
            <form action="/control-panel/dance-add/" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="imgcontainer">
                    <img src="{{ asset('images/warbudi-image.png') }}" alt="Avatar" class="avatar">
                    <h1>Tambah Data Tari</h1>
                </div>
                <div class="container">
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
        
                    <label for="name"><b>Nama Tari*</b></label>
                    <input class="@error('name') is-invalid @enderror" type="text" placeholder="Masukan nama tari" name="name" required>
                    @error('name')
                        <div class="small-error-message">
                            {{ $message }}
                        </div>
                    @enderror
        
                    <label for="history"><b>History*</b></label>
                    <input class="@error('history') is-invalid @enderror" id="history" type="hidden" name="history">
                    <trix-editor input="history" placeholder="Masukan sejarah tari"></trix-editor>
                    @error('history')
                        <div class="small-error-message">
                            {{ $message }}
                        </div>
                    @enderror
        
                    <label for="description"><b>Description*</b></label>
                    <input id="description" type="hidden" name="description">
                    <trix-editor class="@error('description') is-invalid @enderror" input="description" placeholder="Masukan deskripsi tari"></trix-editor>
                    @error('description')
                        <div class="small-error-message">
                            {{ $message }}
                        </div>
                    @enderror
        
                    <label><b>Jenis Tari</b></label>
                    @foreach ($types as $type)
                        <div class="radio-input">
                            <input type="radio" name="type_id" id="{{ $type->slug }}" value="{{ $type->id }}" required>
                            <label for="{{ $type->slug }}">{{ $type->name }}</label>
                        </div>
                    @endforeach
        
                    <br>
        
                    <label for="video_link"><b>YouTube Video Link*</b><small style="color: #f44336"> (<em>id video saja!</em>)</small><br></label>
                    <input class="@error('video_link') is-invalid @enderror" type="text" placeholder="Masukan link video (contoh: zI3UT5T-zvA)" name="video_link" required>
                    @error('video_link')
                        <div class="small-error-message">
                            {{ $message }}
                        </div>
                    @enderror
        
                    <label for="image_link"><b>Dance Images Link*</b></label>
                    <input class="@error('image_link') is-invalid @enderror" type="text" placeholder="Masukan link gambar tari" name="image_link" id="image_link">
                    @error('image_link')
                        <div class="small-error-message">
                            {{ $message }}
                        </div>
                    @enderror
        
                    <button style="margin-top: 25px; margin-bottom: 25px;" class="button success" type="submit">Tambah Data Tari</button>
                </div>
            </form>
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

        .btn {
            margin-left: 3px;
            margin-right: 3px;
            padding: 5px 10px 5px 10px;
            color: white;
            border: none;
        }

        .danger {
            background-color: #f44336;
        }

        /* Full-width inputs */
        .radio-input {
            display: block;
            padding: 8px 0px 8px 15px;
        }

        input[type=text],
        input[type=password],
        input[type=file],
        textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-family: "Noto Serif", Arial, Helvetica, sans-serif;
        }

        .is-invalid {
            border: 1px solid #f44336;
            background: rgba(244, 67, 54, 0.25)
            
        }

        trix-editor {
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: small;
            padding: 20px;
        }

        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        textarea {
            resize: vertical;
        }

        /* Set a style for all buttons */
        .button {
            text-decoration: none;
            font-family: "Noto Serif", Arial, Helvetica, sans-serif;
            font-size: 0.85rem;
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Add a hover effect for buttons */
        .button:hover {
            opacity: 0.8;
        }

        /* Extra style for the cancel button (red) */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the avatar image inside this container */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        .imgcontainer h1 {
            font-family: "Dancing Script", Arial, Helvetica, sans-serif;
            font-size: 2.5em;
        }

        /* Avatar image */
        img.avatar {
            width: 40%;
            max-width: 20vw;
            border-radius: 50%;
        }

        /* Add padding to containers */
        .container {
            /* padding: 16px; */
            padding-left: 16px;
            padding-right: 16px;
        }

        /* The "Forgot password" text */
        span.password {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.password {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
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
