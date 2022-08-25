<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- icons --}}
    <link rel="icons" href="{{ asset('assets/icons/shop.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Fake Store</title>
</head>

<body>

    <head>
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/icons/shop.png') }}" alt="" width="30" height="24"
                        class="d-inline-block align-text-top">
                    <strong>Fake Store</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="#">Electronics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Jewelery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Men's clothing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Women's clothing</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        {{-- end navbar --}}
    </head>

    <main>
        @yield('content')

    </main>

    <footer>
        <section id="footer">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-12 text-center mb-3">
                        <a class="mx-1 mt-2" href="https://twitter.com/OngkyRinaldo" target="_blank"><img
                                src="{{ asset('assets/icons/twitter.png') }}" alt="twitter_icons.png"
                                class="img-footer"></i></a>
                        <a class="mx-1 mt-2" href="https://www.linkedin.com/in/ongkyrinaldo/" target="_blank"><img
                                src="{{ asset('assets/icons/linkedin.png') }}" alt="linkedin_icons.png"
                                class="img-footer"></i></a>

                    </div>
                    <div class="col-md-12 text-center">
                        <p>Copyright &copy; <strong>Ongky Rinaldo</strong> 2022</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>