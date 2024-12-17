<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eastwoods Professional College of Science and Technology</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body class="bg-image d-flex flex-column">

    <div class="bg-overlay"></div>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#afdc76; position: relative;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('mainpage') }}" style="position: absolute; top: 20%; left: 3%; inline-block; padding: 0; margin: 0;">
                <img src="{{ asset('images/school_logo.png') }}" class="rounded-pill ps-4 pb-2 pe-1" style="width:55%; height:20%; background-color:#afdc76">
            </a>

            <div class="navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutpage') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('programs') }}">Our Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('linkage') }}">Linkage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admission') }}">Admission</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</body>
</html>
