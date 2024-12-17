<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eastwoods Professional College of Science and Technology</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        html, body {
            height: 100%; 
            margin: 0;    
        }
        .bg-image {
            background-image: url('{{ asset('images/school_image_1.png') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover; 
            min-height: 100%; 
        }
        .roundness {
            border-radius: 3rem;
        }
        .logo {
            background-image: url('{{ asset('images/school_logo.png') }}');
            background-repeat: no-repeat;
            background-position: center;
            min-height: 100%; 
        }    
        .container {
            margin-bottom: 20px; 
        }
    </style>
</head>
<body class="bg-image d-flex justify-content-center align-items-center flex-column">
    <div class="container h-25 roundness" style="background-color:#afdc76; width: 40%">
        <div class="logo"></div>
    </div>
    <button type="button" class="btn btn-light roundness" style="width:10%; height:5%" onclick="redirect()">Join Us!</button>
</body>
</html>

<script>
    function redirect(){
        window.location = '{{ route('mainpage') }}';
    }

</script>
