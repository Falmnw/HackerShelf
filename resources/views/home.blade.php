@extends('layout.master')
@section('title', 'register account')

@section('content')

  <div class="col-md-6 offset-md-3 mt-5">
    <h1>Home</h1>

       <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('showCategory', $category->id) }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection




