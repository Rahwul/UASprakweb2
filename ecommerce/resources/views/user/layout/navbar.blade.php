<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NF Shop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/favicon.ico') }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />

    <!-- Custom CSS -->
    <style>
        .navbar-logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            /* Add custom styles for your logo */
        }

        .navbar-toggler-icon-custom {
            /* Add custom styles for your toggle icon */
        }

        .navbar-nav .nav-link {
            color: #333;
            /* Add custom styles for your navbar links */
        }

        .navbar-nav .nav-link:hover {
            color: #555;
            /* Add custom styles for hover effect */
        }
    </style>
</head>

<body style="background-color: #8ecae6">
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-md" style="background-color:  #219ebc">
        <div class="container-fluid px-5">
            <a class="navbar-logo" href="#!">NF Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navbar-toggler-icon-custom"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="{{ url('user/dashboard') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="{{ url('user/transaksi') }}">Transaksi</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page"
                            href="{{ url('user/beli') }}">Shop</a></li>
                    <li>
                        <a class="nav-link" aria-current="page" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>
