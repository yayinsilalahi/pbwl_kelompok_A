<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
{{-- STYLE --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Questrial&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="feedback.css">
{{-- STYLE --}}
</head>
<body style="background: linear-gradient(to right, #F67280 50%, #E6B2C6 50%)">
    <div class="container">
        <div class="row">
            <nav class="navbar">
                <div class="col-sm-6">
                    <img src="images/logo-donat.png" alt="" width="150px">
                </div>
                <div class="nav-link">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                    <a class="nav-link" href="{{ route('feedback') }}">Feedback</a>
                </div>
            </nav>
        </div>
            <div class="row1">
                <img class="gambar1" src="images/donat1.png" alt="" width="500px">
                <div class="welcome">W E L C O M E</div>
                <div class="sosmed">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-tiktok"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div class="donat2"><img src="images/donat2.png" alt="" width="150px"></div>
                <div class="garis-vertikal"><img src="images/garis1.png" alt="" width="35px"></div>
            </div>
    </div>
    <div class="row2">
        <div class="row2 mt-5">
            <div class="layer2 d-flex flex-column align-items-center justify-content-center">
                <h2 class="text-white mb-4">Saran & Kritik</h2>
                <form action="{{ route('submit.feedback') }}" method="POST" class="w-75">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label text-white">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label text-white">No. HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <div class="mb-3">
                        <label for="kritik" class="form-label text-white">Kritik/Saran</label>
                        <textarea class="form-control" id="kritik" name="kritik" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Rating</label><br>
                        <div class="star-rating">
                            <input type="radio" name="rating" value="5" id="star5"><label for="star5" class="fa fa-star"></label>
                            <input type="radio" name="rating" value="4" id="star4"><label for="star4" class="fa fa-star"></label>
                            <input type="radio" name="rating" value="3" id="star3"><label for="star3" class="fa fa-star"></label>
                            <input type="radio" name="rating" value="2" id="star2"><label for="star2" class="fa fa-star"></label>
                            <input type="radio" name="rating" value="1" id="star1"><label for="star1" class="fa fa-star"></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <footer class="footer">
        <div class="logo-footer">
            <img src="images/logo-donat.png" alt="" width="100px">
            <p>Copyright &copy; 2025 All Rights Reserved PBWL A</p>
        </div>
        <div class="sosmed-footer">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-tiktok"></i>
            <i class="fa-brands fa-whatsapp"></i>
        </div>
    </footer>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>