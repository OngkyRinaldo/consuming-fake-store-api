@extends('layout.template')

@section('title')
- Women's Clothing
@endsection


@section('content')
<section>
    <div class="container">
        <div class="category-title py-1 px-1">
            <h5 class="text-center fs-2">Women's Clothing</h5>
        </div>
        <div class="row">
            @foreach ($datas as $data)
            <div class="col-lg-3 col-md-4 col-6 mt-4 col-card-index">
                <div class="card card-index" style="width: 18rem;">
                    <img src="{{ $data->image }}" class="card-img-top p-3" alt="{{ $data->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{Str::limit($data->title, 35) }}</h5>
                        <p class="card-text"> <strong>Price : </strong> ${{ $data->price }}</p>
                        <a href="#" class="btn btn-success d-grid">Buy</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection