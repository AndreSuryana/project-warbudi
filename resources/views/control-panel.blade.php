<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control Panel - Project Warisan Budaya</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
</head>

<body>
    <form action="/control-panel" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="imgcontainer">
            <img src="{{ asset('images/balinese.png') }}" alt="Avatar" class="avatar">
            <h1>Project Warisan Budaya</h1>
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

            <label for="images">Gambar Tari*</label>
            <input class="@error('images') is-invalid @enderror" type="file" name="images" id="images">
            @error('images')
                <div class="small-error-message">
                    {{ $message }}
                </div>
            @enderror

            <button style="margin-top: 25px" class="button success" type="submit">Tambah Data Tari</button>
        </div>
    </form>
    <div class="container">
        <a class="button info" href="/control-panel/dance-list" style="display: block; text-align: center; width:auto;">List Data Tari</a>
    </div>
    <div class="container">
        <form action="/logout" method="POST">
            @csrf
            <button class="button danger" type="submit">Logout</button>
        </form>
    </div>

    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap');

        body {
            font-family: "Noto Serif", Arial, Helvetica, sans-serif;
            margin: auto;
            padding: 0;
            max-width: 80vw;
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
