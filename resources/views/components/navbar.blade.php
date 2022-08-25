<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
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
                    <a class="nav-link " href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('pages.electronics') }}">Electronics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('pages.jewelery') }}">Jewelery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('pages.men') }}">Men's clothing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('pages.women') }}">Women's clothing</a>
                </li>

            </ul>
        </div>
    </div>
</nav>