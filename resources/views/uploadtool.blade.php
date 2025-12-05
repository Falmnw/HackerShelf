@extends('layout.master')
@section('title', 'Upload Your Tool')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/style-uploadtool.css') }}">
@endpush

@section('content')
<div class="uploadtool-page">
    <div class="page-header">
        <h1 class="page-title">Upload Your Tool</h1>
        <p class="page-subtitle">Share your security tools with the community.</p>
    </div>

    <div class="upload-container">
        <div class="upload-card">
            <form class="upload-form" id="uploadForm">
                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-toolbox"></i>
                        Tool Name
                    </label>
                    <input type="text" class="form-input" placeholder="e.g., Autopsy Digital Forensics" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-code-branch"></i>
                            Version
                        </label>
                        <input type="text" class="form-input" placeholder="e.g., 1.0.0" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-tags"></i>
                            Category
                        </label>
                        <select class="form-input" required>
                            <option value="">Select a category</option>
                            <option value="forensics">Digital Forensics</option>
                            <option value="network">Network Security</option>
                            <option value="web">Web Security</option>
                            <option value="mobile">Mobile Security</option>
                            <option value="malware">Malware Analysis</option>
                            <option value="pentesting">Penetration Testing</option>
                            <option value="cryptography">Cryptography</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-align-left"></i>
                        Description
                    </label>
                    <textarea class="form-input" placeholder="Describe your tool in detail..." required></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-download"></i>
                        Installation Steps
                    </label>
                    <textarea class="form-input" placeholder="1. Download the tool...
2. Install dependencies...
3. Run setup...
4. Configure settings..." required></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-file-alt"></i>
                        Documentation/File
                    </label>
                    <div class="file-upload-container">
                        <input type="text" class="form-input file-input" placeholder="No file selected" readonly id="docFileName">
                        <button type="button" class="file-upload-btn" id="uploadDocBtn">
                            <i class="fas fa-upload"></i>
                            Upload File
                        </button>
                        <input type="file" id="docFileInput" style="display: none;" accept=".pdf,.doc,.docx,.zip,.rar,.tar,.gz">
                    </div>
                    <div class="file-preview" id="docFilePreview" style="display: none;">
                        No file selected
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-image"></i>
                        Banner Design
                    </label>
                    <div class="file-upload-container">
                        <input type="text" class="form-input file-input" placeholder="No image selected" readonly id="bannerFileName">
                        <button type="button" class="file-upload-btn" id="uploadBannerBtn">
                            <i class="fas fa-upload"></i>
                            Upload Image
                        </button>
                        <input type="file" id="bannerFileInput" style="display: none;" accept=".jpg,.jpeg,.png,.svg,.gif">
                    </div>
                    <div class="file-preview" id="bannerFilePreview" style="display: none;">
                        No image selected
                    </div>
                </div>

                <div class="submit-btn-container">
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-cloud-upload-alt"></i>
                        Upload Tool
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
