@extends('layout.master')
@section('title', $category->name)

@section('content')
<div class="container mt-5">

    <h2 class="mb-4">Category: {{ $category->name }}</h2>

    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100" style="width: 18rem;">
                @if ($product->picture)
                    <img src="{{ asset('storage/' . $product->picture) }}"
                         class="card-img-top"
                         alt="{{ $product->name }}"
                         style="height: 210px; object-fit: cover">
                @else
                    <img src="https://via.placeholder.com/300x210?text=No+Image"
                         class="card-img-top"
                         alt="No image">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Category: {{ $product->category->name }}
                    </li>
                    <li class="list-group-item">
                        Description: {{ $product->description }}
                    </li>
                </ul>

                <div class="card-body d-flex justify-content-between">
                    <a href="{{ route('showdetail',[  'category_id' => $product->category_id,
                         'product_id' => $product->id]) }}"
                       class="btn btn-primary">See More</a>
                </div>
            </div>
        </div>
        @endforeach

        @if ($products->isEmpty())
            <p class="text-muted px-3">No products found in this category.</p>
        @endif
    </div>
</div>
@endsection
