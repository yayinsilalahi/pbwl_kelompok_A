<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
{{-- STYLE --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Questrial&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
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
        <div class="layer2">
            <div class="menu">
                <div class="product">
                    <div>
                        <img src="images/donat_hijau.png" alt="" width="160px">
                        <p style="margin-left: 45px">Matcha</p>
                    </div>
                    <div>
                        <img src="images/donat_merah.png" alt="" width="160px">
                        <p style="margin-left: 50px">Redvelvet</p>
                    </div>
                    <div>
                        <img src="images/donat_coklat.png" alt="" width="160px">
                        <p style="margin-left: 45px">Chochlat</p>
                    </div>
                </div>
                <div class="product">
                    <div>
                        <img src="images/donat_taro.png" alt="" width="150px">
                        <p style="margin-left: 55px">Taro</p>
                    </div>
                    <div>
                        <img src="images/donat_cap.png" alt="" width="150px">
                        <p style="margin-left: 35px">Cappucino</p>
                    </div>
                    <div>
                        <img src="images/donat_cute.png" alt="" width="165px">
                        <p style="margin-left: 45px">Strawberry</p>
                    </div>
                </div>
                <div class="product">
                    <div>
                        <img src="images/donat_blue.png" alt="" width="150px">
                        <p style="margin-left: 45px">bluberry</p>
                    </div>
                    <div>
                        <img src="images/donat_tiramisyu.png" alt="" width="150px">
                        <p style="margin-left: 40px">Tiramisu</p>
                    </div>
                    <div>
                        <img src="images/donat_bintik.png" alt="" width="145px">
                        <p style="margin-left: 40px">Durian</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex flex-column align-items-center">
                    <div class="left-col">
                        <h1>Tooping Donat:</h1>
                        <p>1. Chochocip</p>
                        <p>2. Keju</p>
                        <p>3. Seres</p>
                        <p>4. Kacang</p>
                    </div>
                    <div class="garis" style="display: flex; align-items: center;">
                        <hr style="border: none; border-left: 3px solid white; height: 250px; margin: 0 15px;">
                        <hr style="border: none; border-left: 3px solid white; height: 200px; margin: 0 15px;">
                        <hr style="border: none; border-left: 3px solid white; height: 150px; margin: 0 15px;">    
                        <hr style="border: none; border-left: 3px solid white; height: 250px; margin: 0 15px;"> 
                        <hr style="border: none; border-left: 3px solid white; height: 250px; margin: 0 15px;">
                    </div>
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