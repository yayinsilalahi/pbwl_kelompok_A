<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
{{-- STYLE --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Questrial&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="about.css">
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
                    <a class="nav-link" href="{{ route('feedback.create') }}">Feedback</a>
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
        <div class="layer2" style="display: flex; gap: 20px; padding: 20px; background-color: #C9526E; color: white; border-radius: 10px; font-family: 'Questrial', sans-serif;">
            <div class="left-col" style="flex: 1; padding: 20px;">
                <h1 style="font-size: 40px; text-align: center; font-weight: font-family: 'Laila', sans-serif; margin-bottom: 10px;">Donat Bahagia</h1>
                <p style="font-size: 22px; text-align: center; font-weight: font-family: 'Laila', sans-serif; margin-bottom: 5px;">Senin - Sabtu : 10.00 WIB - 17.00 WIB</p>
                <p style="font-size: 22px; text-align: center; font-weight: font-family: 'Laila', sans-serif; margin-bottom: 5px;">Tempat : Jln. Tuntungan</p>
                <div style="display: flex; align-items: center;">
                    <hr style="border: none; border-left: 3px solid white; height: 250px; margin: 0 15px;">
                    <hr style="border: none; border-left: 3px solid white; height: 200px; margin: 0 15px;">
                    <hr style="border: none; border-left: 3px solid white; height: 150px; margin: 0 15px;">
                </div>
                <p style="font-size: 40px; text-align: center; font-weight: font-family: 'Laila', sans-serif; margin-bottom: 5px;">All varian</p>
                <p style="font-size: 40px; text-align: center; font-weight: font-family: 'Laila', sans-serif; margin-bottom: 5px;">start Rp. 3.000</p>
            </div>
            <div class="right-col" style="flex: 1; text-align: center;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; justify-items: center;">
                    <!-- Baris pertama: Biru dan Pink (di kiri) -->
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; position: relative; top: -10px;">
                        <img src="images/about_donat_1_biru-.png" alt="" width="210px" style="transform: rotate(130deg);">
                        <img src="images/about_donat_3_pink.png" alt="" width="210px">
                    </div>
                
                    <!-- Baris kedua: Coklat dan Putih (di kanan) -->
                    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; position: relative; top: 10px;">
                        <img src="images/about_donat_2_coklat.png" alt="" width="180px" style="transform: rotate(190deg);">
                        <img src="images/about_donat_4_putih.png" alt="" width="180px" style="transform: rotate(190deg); position: relative; top: 50px;">
                    </div>
                </div>                              
                    </div>
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