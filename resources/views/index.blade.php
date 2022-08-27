@extends('layout.template')

@section('content')
<section>
    <div class="container">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/carousel/img1.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/carousel/img2.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/carousel/img3.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/carousel/img4.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/carousel/img5.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/carousel/img6.jpg" class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container">
        <div class="category-title py-1 px-1">
            <h5 class="text-center fs-2">All Product</h5>
        </div>
        <div class="row">
            @foreach ($datas as $data)
            <div class="col-lg-3 col-md-4 col-6 mt-4 col-card-index ">
                <div class="card card-index" style="width: 18rem;">
                    <img src="{{ $data->image }}" class="card-img-top p-3" alt="{{ $data->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{Str::limit($data->title, 35) }}</h5>
                        <p class="card-text"> <strong>Price : </strong> ${{ $data->price }}</p>
                        <a href="{{ route('pages.show', $data->id) }}" class="btn btn-success d-grid">Buy</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection