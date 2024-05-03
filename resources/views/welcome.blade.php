<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project | Framework</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <style>
        body {
            font-family: Poppins, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            text-align: center;
            color: #333;
        }

        .mahasiswa {
            margin-top: 30px;
        }

        .info p {
            margin: 5px 0;
        }

        .info p strong {
            font-weight: bold;
            margin-right: 5px;
        }

        .img-container {
            display: flex;
            justify-content: center;
        }

        .img-thumbnail {
            max-width: 100%;
            height: auto;
            margin-left: 200px;
        }
    </style>
    <div class="container">
        <header>
            <h1>Welcome to Master Barang!</h1> <br>
            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/laravel.png') }}" alt="image">
        </header>
        <section class="mahasiswa">
            <div class="info">
                <p><strong>Nama:</strong>Angela Fransisca Yulisiswati</p>
                <p><strong>NIM:</strong> 1204220007</p>
                <p><strong>Kelas:</strong>IS-05-03</p> <br>
                <p><strong>Disusun dalam memenuhi Mata Kuliah Pemrograman Framework</strong></p>
            </div>
        </section>
    </div>

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-primary" href="{{ route('home') }}">Masuk!</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
