@extends('layout.master')
@section('title', 'Profile')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/style-profile.css') }}">
@endpush

@section('content')
<div class="profile-page">
    <main>
        <section class="hero-section">
            <div class="container">
                <h1 class="hero-title">Profile</h1>
                <p class="hero-sub">Manage your account and published tools.</p>

                <!-- sekarang tempatkan konten profile di dalam container yang sama -->
                <div class="profile-container">
                    <div class="profile-wrapper">
                        <div class="profile-card-container">
                            <div class="profile-card">
                                <div class="profile-pic-container">
                                    <div class="profile-pic" style="display: flex; align-items: center; justify-content: center; color: #CA6E0A; font-size: 14px;">
                                        <img src="{{ asset('assets/images/Profile Picture.png') }}" alt="Profile Picture" style="width:100%; height:100%; object-fit:cover;">
                                    </div>
                                </div>
                                <div class="profile-name">Brian Carrier</div>

                                <div class="profile-tag">
                                    <div class="tag-icon"></div>
                                    <div class="tag-text">#brc_123</div>
                                </div>

                                <div class="divider-line"></div>

                                <button class="update-profile-btn">Update Profile</button>
                            </div>
                        </div>

                        <div class="profile-content">
                            <div>
                                <h2 class="section-title">Profile</h2>
                                <div class="info-card">
                                    <div class="info-field">
                                        <div class="field-label">Username</div>
                                        <div class="field-value" id="username-field">BC_PwN</div>
                                    </div>

                                    <div class="info-field">
                                        <div class="field-label">Email Address</div>
                                        <div class="field-value" id="email-field">brian.carrier@gmail.com</div>
                                    </div>
                                </div>
                            </div>

                            <div class="tools-section">
                                <h2 class="section-title">Published Tools</h2>

                                <div class="tools-container">
                                    <div class="tools-row">
                                        <div class="tool-card">
                                            <div class="tool-icon">
                                                <i class="fas fa-search"></i>
                                            </div>
                                            <div class="tool-name">Autopsy</div>
                                            <div class="tool-category">Forensics</div>
                                        </div>

                                        <div class="tool-card">
                                            <div class="tool-icon">
                                                <i class="fas fa-shield-alt"></i>
                                            </div>
                                            <div class="tool-name">Volatility</div>
                                            <div class="tool-category">Forensics</div>
                                        </div>
                                    </div>

                                    <div class="see-all-container">
                                        <a href="#" class="see-all-link">See all published tools &gt;&gt;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir profile-container -->
            </div>
        </section>
    </main>
</div>
@endsection
