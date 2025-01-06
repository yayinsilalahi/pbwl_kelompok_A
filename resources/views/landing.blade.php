<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DONAT'S</title>

{{-- STYLE --}}
<link rel="stylesheet" href="landing.css">

</head>
<body style="background: linear-gradient(to left, #F05162 30%, #D9808A 60%, #C39196 78%)">
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
    </div>


    <footer class="footer">
        <div class="logo-footer">
            <img src="images/logo-donat.png" alt="" width="100px">
            <p>Copyright &copy; 2025 All Rights Reserved PBWL A</p>
        </div>
    </footer>
</body>
</html>