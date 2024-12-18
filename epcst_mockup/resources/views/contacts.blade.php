<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eastwoods Professional College of Science and Technology</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body class="d-flex flex-column" style="background-color:#fdf0f0; padding-bottom: 300px">

    <nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color:#afdc76; position: relative;">
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

    <div class="container d-flex justify-content-center align-items-center mt-5" style="max-width: 1800px; width: 100%;">
        <div class="d-flex justify-content-around align-items-center" style="width: 100%;">

            <div class="d-flex flex-column pt-3 rounded-5" 
                style="background-color: #afdc76; max-width: 48%; width: 60%; min-height: 600px; margin-right: 10px;">
                <p class="ms-5" style="color: #347928; font-size: 30px; font-weight: bold">
                    Contact Info
                </p>
                <p class="ms-5" style="color: #black; font-size: 30px;">
                    Email: <br> <span style="color: #347928">eastwoodsprofessionalcollege@gmail.com</span>
                </p>
                <p class="ms-5" style="color: #black; font-size: 30px;">
                    Phone Number: <br> <span style="color: #347928">0998 - 123 - 3484</span> <br> <span style="color: #347928">0974 - 321 - 5531</span>
                </p>
                <p class="ms-5" style="color: #black; font-size: 30px;">
                    Location: <br> <span style="color: #347928">Somewhere in Bagong Silang</span>
                </p>
            </div>

            <div class="d-flex flex-column pt-3" 
                style="margin-left: 10px;">
                <img src="{{ asset('images/school_image_3.png') }}" alt="" style="width: 500px; height: auto">
            </div>

        </div>
    </div>

</body>
</html>
