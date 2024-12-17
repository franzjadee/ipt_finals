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

    <div class="container d-flex flex-column justify-content-between align-items-center" 
     style="background-color: #afdc76; max-width: 1800px; width: 40%; min-height: 70px; margin-top: 70px">
    
        <div class="d-flex flex-grow-1 align-items-center"> 
            <h1 class="text-center" style="color: #347928; font-size: 30px;">
                Primary Industry Partners
            </h1>
        </div>

    </div>

    <div class="container d-flex flex-column justify-content-between align-items-center p-2" 
     style="background-color: #afdc76; max-width: 1800px; width: 80%; min-height: 150px; margin-top: 70px">
    
        <div class="d-flex flex-grow-1 mt-2"> 
            <h1 class="text-center" style="color: #347928; font-size: 30px;">
                Description 
            </h1>
        </div>

    </div>

    <div class="container d-flex flex-column justify-content-between align-items-center" 
     style="background-color: #afdc76; max-width: 1800px; width: 40%; min-height: 70px; margin-top: 70px">
    
        <div class="d-flex flex-grow-1 align-items-center"> 
            <h1 class="text-center" style="color: #347928; font-size: 30px;">
                Secondary Industry Partners
            </h1>
        </div>

    </div>

    <div class="container d-flex flex-column justify-content-between align-items-center p-2" 
     style="background-color: #afdc76; max-width: 1800px; width: 80%; min-height: 150px; margin-top: 70px;">
    
        <div class="d-flex flex-grow-1 mt-2"> 
            <h1 class="text-center" style="color: #347928; font-size: 30px;">
                Description
            </h1>
        </div>

    </div>

</body>
</html>
