@extends('layout.master')
@section('title', 'Home')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/style-home.css') }}">
@endpush

@section('content')

    <div class="hero-section">
        <img src="{{ asset('assets/images/cahaya-diatas-eclipse.png') }}" class="hero-light-top" alt="Top Light">
        <div class="hero-text">
            <h1>The Tools Shelf<br>For Future Hackers</h1>
            <p>Learn | Share | Exploit</p>
        </div>
        <img src="{{ asset('assets/images/eclipse-light.png') }}" class="hero-glow" alt="Glow">
        <img src="{{ asset('assets/images/eclipse-ball.png') }}" class="hero-ball" alt="Ball">
    </div>


    <section class="categories">
        <h2 class="section-title">Find Your Category</h2>
        <p class="section-subtitle">Search Whatever You Want</p>

        <div class="category-cards">
            <div class="category-card active">
                <h3>Reverse<br>Engineering</h3>
            </div>
            <div class="category-card">
                <h3>Cryptography</h3>
            </div>
            <div class="category-card">
                <h3>Forensics</h3>
            </div>
            <div class="category-card">
                <h3>Binary<br>Exploitation</h3>
            </div>
        </div>

        <div class="category-actions">
            <button class="btn-nav" aria-label="Previous category">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="btn-find-tools">Find Tools</button>
            <button class="btn-nav" aria-label="Next category">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </section>


    <div class="cards-section">
        <div class="card-row row-1">
            <img src="{{ asset('assets/images/lock-card.png') }}" class="card-img lock-card" alt="Lock Card">
            <img src="{{ asset('assets/images/feedback-card.png') }}" class="card-img feedback-card" alt="Feedback Card">
        </div>

        <div class="card-row row-2">
            <img src="{{ asset('assets/images/1-card.png') }}" class="card-img one-card" alt="One Card">
            <img src="{{ asset('assets/images/kaachow.png') }}" class="card-img kaachow-card" alt="Kaachow Card">
        </div>
    </div>



    <div class="faq-section">
        <h2>FAQ</h2>

        <div class="faq-item">
            <span>01 How do I publish a tool?</span>
            <span>&gt;</span>
        </div>
        <div class="faq-item">
            <span>02 How can I report a bug?</span>
            <span>&gt;</span>
        </div>
        <div class="faq-item">
            <span>03 Am I using “real” hacking tools?</span>
            <span>&gt;</span>
        </div>
        <div class="faq-item">
            <span>04 How do I request for a tool?</span>
            <span>&gt;</span>
        </div>
    </div>

@endsection
