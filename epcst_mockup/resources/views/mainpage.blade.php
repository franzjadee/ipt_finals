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
                        <a class="nav-link" href="#">Our Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Linkage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admission</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container roundness d-flex flex-column justify-content-between align-items-center" 
     style="background-color: #afdc76; max-width: 1800px; width: 100%; min-height: 500px; margin-top: 70px">
    
        <div class="d-flex flex-grow-1 align-items-center mb-5"> 
            <h1 class="text-center" style="color: #347928; font-size: 80px;">
                Genosis Exousia
            </h1>
        </div>

        <p class="h3 text-center" style="max-width: 90%; margin-bottom: 50px;"> 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <div class="card-container card-container-roundness">
        <button type="button" class="btn btn-light card roundness justify-content-center mx-5 d-flex align-items-center flex-column">Read More</button>
        <button type="button" class="btn btn-light card roundness justify-content-center mx-5 d-flex align-items-center flex-column">Enroll Now</button>
        <button type="button" class="btn btn-light card roundness justify-content-center mx-5 d-flex align-items-center flex-column">Contacts</button>
    </div>

</body>
</html>
