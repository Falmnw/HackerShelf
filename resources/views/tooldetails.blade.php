@extends('layout.master')
@section('title', 'Tool Details')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/style-tooldetails.css') }}">
@endpush

@section('content')
<div class="tooldetails-page">
    <div class="tool-details-wrapper">
        <div class="tool-details-container">
            <div class="tool-details-card">
                <div class="tool-header">
                    <div>
                        <h1 class="tool-name">Autopsy</h1>
                    </div>

                    <div class="tool-actions">
                        <button class="action-btn" id="bookmarkBtn">
                            <i class="fas fa-bookmark"></i>
                        </button>
                        <button class="action-btn" id="likeBtn">
                            <i class="fas fa-heart"></i>
                            <span>700</span>
                        </button>
                    </div>
                </div>

                <div class="founder-section">
                    <div class="founder-pic">
                        <img src="{{ asset('assets/images/Profile Picture.png') }}" alt="Founder">
                    </div>
                    <div class="founder-info">
                        <div class="founder-name">Brian Carrier</div>
                    </div>
                </div>

                <div class="tool-description">
                    Autopsy is an open-source digital forensics tool for analyzing disk images, recovering files, and extracting digital evidence.
                </div>

                <div class="buttons-container">
                    <button class="gradient-btn" id="installBtn">
                        <i class="fas fa-download"></i>
                        Installation Steps
                    </button>
                    <button class="gradient-btn" id="downloadBtn">
                        <i class="fas fa-code-branch"></i>
                        Download Versions
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
