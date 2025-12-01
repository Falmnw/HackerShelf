<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">HackerShelf</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                {{-- HOME / ADMIN CATALOGUE --}}

                
                <li class="nav-item">
                    @auth
                        @if(auth()->user()->role === 'admin')
                            <a class="nav-link" href="{{ route('catalogue') }}">Admin Catalogue</a>
                        @else
                            <a class="nav-link" href="{{ route('seeHome') }}">Home</a>
                        @endif
                    @endauth

                    @guest
                        <a class="nav-link" href="{{ route('seeHome') }}">Home</a>
                    @endguest

                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>

                      {{-- FAQ PAGE (Everyone can access) --}}
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                      </li>

                </li>

                  {{-- ADD PRODUCT (ONLY WHEN LOGGED IN) --}}
                @auth
                @if(auth()->user()->role !== 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('addproduct') }}">Add Product</a>
                    </li>
                @endif
            @endauth  

            </ul>


            {{-- PROFILE BUTTON --}}
            @auth
                @if(auth()->user()->role !== 'admin')
                <a class="btn btn-outline-light me-2" href="{{ route('profile') }}">
                    {{ auth()->user()->username ?? 'Profile' }}
                </a>
                @endif
            @endauth

            @guest
                <a class="btn btn-outline-light me-2" href="{{ route('seeLogin') }}">
                    Guest (Login)
                </a>
            @endguest


            {{-- LOGOUT BUTTON (ONLY VISIBLE WHEN LOGGED IN) --}}
            @auth
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
            @endauth

        </div>
    </div>
</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
