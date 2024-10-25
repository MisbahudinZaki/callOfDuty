<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Call of Duty</title>
    <link rel="stylesheet" href="./css/mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="website icon" href="images/headlogo.png" type="image/png">


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3">
        <button style="width: 5%" class="btn btn-mb btn-light" id="toggle-sidebar"><i class="fas fa-sliders-h"></i></button>

          <a class="navbar-brand" href="#"><font color="white">PAVILIUN TAIPING</font></a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
       <a class="nav-link" href="{{url('/home')}}"><font color="white">Home</font> <span class="sr-only">(current)</span></a>
        </li>
       <li class="nav-item">
         <a class="nav-link" href=""><font color="white">BLACKWATCH</font></a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href=""><font color="white">TASK FORCE</font></a>
       </li>
        <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><font color="white">Disabled</font></a>
        </li>
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <font color="white"> Dropdown link</font>
                       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                       <a class="dropdown-item" href="#">Action</a>
                       <a class="dropdown-item" href="#">Another action</a>
                       <a class="dropdown-item" href="#">Something else here</a>
                       </div>
                   </li>
                   </ul>
                   <form class="form-inline my-2 my-lg-0">
                   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                   <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                   </form>
         </div>
       </nav>



       <div id="content">
        <main class="py-4">

        <div id="sidebar">
            <button class="btn btn-mb btn-light" id="hide-sidebar" align="center"><i class="fas fa-sliders-h"></i></button>
            <hr>
            <p><img src="gambar/headlogo.png" alt="logo" width="70">
                Paviliun Taiping
                </p>
                <hr>
                <div class="text-center">
                    <p><a style="width: 100%;" class="btn btn-primary" href="{{route('home')}}"><i class="fas fa-tachometer-alt"></i> DASHBOARD</a></p>
                    <p><a style="width: 100%;" class="btn btn-light" href=""><i class="fas fa-border-all"></i> PRESENSI</a></p>
                    <p></p>

            </div>

            <div class="container">
                <p><a style="color:aliceblue; text-decoration:none; font-size:20px" href="{{route('blackwatch.index')}}"><i class="fas fa-edit"></i> GANTI PASSWORD</a></p>

            </div>

        </div>
            @yield('isi')
        </main>
        </div>

    <script src="./js/myscript.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <footer class="">Footer</footer>
</body>
</html>
