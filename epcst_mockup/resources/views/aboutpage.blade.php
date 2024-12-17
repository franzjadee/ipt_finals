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

    <div class="container d-flex flex-column justify-content-center align-items-center" 
         style="background-color: #afdc76; max-width: 300px; width: 100%; min-height: 70px; position: absolute; top: 20vh; left: 80vh">

        <p class="text-center" style="color: #347928; font-size: 20px;">
            A Brief History
        </p>

    </div>

    <div class="d-flex align-items-center justify-content-start" style="max-width: 100%; margin-top: 70px">

        <div class="container rounded-3 d-flex flex-column align-items-center" 
             style="background-color: #afdc76; max-width: 900px; width: 100%; min-height: 450px; margin-top: 70px">

            <p class="h5 text-center" style="max-width: 90%; margin-top: 50px;"> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

        <div class="me-5">
            <img src="{{ asset('images/school_image_2.png') }}" class="" style="height:100%; object-fit: cover;">
        </div>

    </div>

    <div class="container d-flex flex-column justify-content-center align-items-center" 
         style="background-color: #afdc76; max-width: 300px; width: 100%; min-height: 70px; margin-top: 135px; position: absolute; top: 95vh; right: 83vh">

        <p class="text-center" style="color: #347928; font-size: 20px;">
            Our Mission and Vision
        </p>

    </div>

    <div class="d-flex align-items-center justify-content-start" style="max-width: 100%; margin-top: 100px">

        <div class="ms-5">
            <img src="{{ asset('images/interior.png') }}" class="" style="height:100%; object-fit: cover;">
        </div>

        <div class="container rounded-3 d-flex flex-column align-items-center" 
             style="background-color: #afdc76; max-width: 900px; width: 100%; min-height: 450px; margin-top: 70px">

            <p class="h5 text-center" style="max-width: 90%; margin-top: 50px;"> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

    </div>

    <div class="container roundness d-flex flex-column justify-content-between align-items-center" 
         style="background-color: #afdc76; max-width: 900px; width: 100%; min-height: 100px; margin-top: 135px">
    
        <div class="d-flex flex-grow-1 align-items-center mb-5"> 
            <h2 class="text-center" style="color: #347928; font-size: 70px;">
                Facilities
            </h2>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center" 
     style="max-width: 100%; margin-top: 130px; padding-bottom: 300px;">

    <div class="d-flex justify-content-center align-items-center" 
         style="background-color: #afdc76; padding: 20px; border-radius: 2rem; width: 100%; max-width: 100%">

        <div class="ms-5">
            <img src="{{ asset('images/facility1.png') }}" class="" style="height:100%; object-fit: cover;">
        </div>
        <div class="ms-5">
            <img src="{{ asset('images/facility2.png') }}" class="" style="height:100%; object-fit: cover;">
        </div>
        <div class="ms-5">
            <img src="{{ asset('images/facility3.png') }}" class="" style="height:100%; object-fit: cover;">
        </div>

    </div>

</div>


</body>
</html>
