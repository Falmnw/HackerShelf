@extends('layout.master')
@section('title', 'Product Detail')

@section('content')

<div class="container mt-5">

    <h2>{{ $product->name }} (v{{ $product->version }})</h2>

    <div class="card mt-3">
        <div class="card-body">

            <p><strong>Category:</strong> {{ $product->category->name }}</p>

            @if(isset($product->description))
                <p><strong>Description:</strong> {{ $product->description }}</p>
            @endif

            <p><strong>Installation Steps:</strong></p>
            <pre>{{ $product->installation_steps }}</pre>

            <hr>

            <p><strong>Document:</strong></p>
            @if($product->tool_document)
                <a href="{{ asset('storage/' . $product->tool_document) }}" class="btn btn-primary" target="_blank">
                    Open Document
                </a>
            @else
                <span>No document uploaded.</span>
            @endif

            <hr>

            <p><strong>Banner / Picture:</strong></p>
            @if($product->picture)
                <img src="{{ asset('storage/' . $product->picture) }}" width="300" class="img-fluid rounded">
            @else
                <span>No picture uploaded.</span>
            @endif

        </div>
    </div>

</div>

@endsection
