<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("boot.css")}}">
    <link rel="stylesheet" href="{{asset("style.css")}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Admin</title>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row m-auto">
            <div onclick="closeNav()" id="clos"></div>
           <div class="col-md-3 col-12 p-0 h-100 rec_menu" id="mySidenav">
            <div class="d-flex flex-column bg-white flex-shrink-0 p-3 w-100 h-100">
                <div class="col-12 px-1 py-2">
                  <a href="/" class="d-flex align-items-center text-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <span class="fs-4">MegaSoft</span>
                  </a>
                </div>
                <hr>

                  <nav class="navbar navbar-dark bg-secondary">
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    </div>
                  </nav><div class="collapse" id="navbarToggleExternalContent">
                    <div class="p-4 border">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="{{url('/catigory')}}">Catigory</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{url('/add')}}">Qushish</a>
                            </li>
                          </ul>
                    </div>
                  </div>
                  <br>
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("/")}}">Home</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url("/logout")}}">Logout</a>
                    </li>
                  </ul>
                <hr>
              </div>
           </div>
           <div class="col-md-9 col-12 p-0 text-dark">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
                <div class="container-full">
                  <p class="lead px-2 menu" onclick="openNav()">|||</p>
                </div>
              </nav>
              <div class="col-12">
                @yield('content')
               </div>
        </div>
        </div>
    </div>
     <script src="{{asset("assets/js/my.js")}}"></script>
    <script src="{{asset("js/boot.js")}}"></script>

</body>
</html>
