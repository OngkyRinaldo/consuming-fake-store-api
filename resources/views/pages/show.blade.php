@extends('layout.template')

@section('content')
<main>
    <!-- breadcrumb -->
    <section>
        <div class="container">
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb p-3">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}">Home</a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">
                        Product
                    </li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- end breadcrumb -->

    <!-- single-product -->
    <section>
        <div class="container">
            <div class="row row-product">
                <div class="col-lg-5">
                    <figure class="figure">
                        <img src="{{ $data->image }}" class="figure-img img-fluid" alt="..." />

                    </figure>
                </div>
                <div class="col-lg-7">
                    <h4>{{ $data->title }}</h4>
                    <hr />

                    <p class="mb-3 fw-bold category-item fs-3">{{ $data->category }}</p>
                    <p class="mb-3 text-muted">{{ $data->description }}</p>
                    <div id="mainDiv">
                        <button type="button" class="btn btn-dark" id="minus">-</button>
                        <span class="mx-2" id="numberPlace">0</span>
                        <button type="button" class="btn btn-warning" id="plus">+</button>
                    </div>

                    <h3 class="text-muted my-3">${{ $data->price }}</h3>
                    <div class="btn-product mt-3">
                        <a href="#" class="btn btn-success btn-lg me-2"><i class="fas fa-shopping-cart fs-6 me-2"></i>
                            Masukan Keranjang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end single-product -->
</main>
@endsection

@section('js')
<script src="{{ asset('assets/js/script.js') }}"></script>
@endsection