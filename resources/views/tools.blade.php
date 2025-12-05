@extends('layout.master')
@section('title', 'Tools')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/style-tools.css') }}">
@endpush

@section('content')
<div class="tools-page">
  <main>
    <section class="hero-section">
      <div class="container">
        <h1 class="section-title">Reverse Engineering</h1>
        <p class="hero-sub">Browse curated reverse engineering and forensics tools.</p>

        <div class="search-container">
          <i class="fas fa-search search-icon"></i>
          <input type="text" class="search-bar" placeholder="Search tools" />
        </div>

        <div class="tools-grid-container">
          <div class="tools-grid">
            <!-- Autopsy -->
            <div class="tool-card" onclick="selectTool('Autopsy')">
              <div class="tool-logo-container">
                <img src="{{ asset('assets/images/autopsy-logo.png') }}" class="tool-logo" alt="Autopsy">
              </div>
              <h3 class="tool-name">Autopsy</h3>
              <div class="tool-category">Digital Forensics</div>
            </div>

            <!-- Volatility -->
            <div class="tool-card" onclick="selectTool('Volatility')">
              <div class="tool-logo-container">
                <img src="{{ asset('assets/images/volatility-logo.png') }}" class="tool-logo" alt="Volatility">
              </div>
              <h3 class="tool-name">Volatility</h3>
              <div class="tool-category">Memory Analysis</div>
            </div>

            <!-- Magnet Forensic -->
            <div class="tool-card" onclick="selectTool('Magnet Forensic')">
              <div class="tool-logo-container">
                <img src="{{ asset('assets/images/magnet-logo.png') }}" class="tool-logo" alt="Magnet Forensic">
              </div>
              <h3 class="tool-name">Magnet Forensic</h3>
              <div class="tool-category">Mobile Forensics</div>
            </div>

            <!-- FTK Imager -->
            <div class="tool-card" onclick="selectTool('FTK Imager')">
              <div class="tool-logo-container">
                <img src="{{ asset('assets/images/ftk-logo.png') }}" class="tool-logo" alt="FTK Imager">
              </div>
              <h3 class="tool-name">FTK Imager</h3>
              <div class="tool-category">Disk Imaging</div>
            </div>

            <!-- EXIF Tool -->
            <div class="tool-card" onclick="selectTool('EXIF Tool')">
              <div class="tool-logo-container">
                <img src="{{ asset('assets/images/exif-logo.png') }}" class="tool-logo" alt="EXIF Tool">
              </div>
              <h3 class="tool-name">EXIF Tool</h3>
              <div class="tool-category">Metadata Analysis</div>
            </div>

            <!-- DumpZilla -->
            <div class="tool-card" onclick="selectTool('DumpZilla')">
              <div class="tool-logo-container">
                <img src="{{ asset('assets/images/dumpzilla-logo.png') }}" class="tool-logo" alt="DumpZilla">
              </div>
              <h3 class="tool-name">DumpZilla</h3>
              <div class="tool-category">Browser Forensics</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>
@endsection
