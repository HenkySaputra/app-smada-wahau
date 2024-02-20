<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <title>SMAN 2 Muara Wahau</title>
    <link rel="shortcut icon" href="{{ asset('user/assets/images/logo_SMA.png') }}">
    <!-- bootstrap core css -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.css') }}" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/css-circular-prog-bar.css') }}">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('user/assets/css/responsive.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('user/assets/css/css-circular-prog-bar.css') }}">

</head>

<body>
    <div class="top_container">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="">
                        <img src="{{ asset('user/assets/images/logo_SMA.png') }}" alt="">
                        <span>
                            SMAN 2 Muara Wahau
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('home') }}"> Home <span
                                            class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('curiculum') }}"> Kurikulum </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('studentship') }}"> Kesiswaan </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="vehicle.html"> Sarpras </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="vehicle.html"> Osis </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="vehicle.html"> Pengumuman </a>
                                </li>

                            </ul>
                            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                </nav>
            </div>
        </header>
