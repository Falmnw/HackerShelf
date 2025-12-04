<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HackerShelf - Upload Your Tool</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://cdn.vercel.app/geist/1.0.0/geist.css');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Geist', sans-serif;
        }

        body {
            background-color: #000000;
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .page-header {
            margin-bottom: 40px;
            text-align: center;
            width: 100%;
            max-width: 1000px;
        }

        .page-title {
            font-size: 75px;
            font-weight: 200;
            background: linear-gradient(180deg, #716C66, #FFE4C7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
        }

        .upload-container {
            max-width: 1000px;
            width: 100%;
            position: relative;
        }

        .upload-card {
            background-color: #000000;
            border-radius: 20px;
            padding: 50px;
            position: relative;
            border: 1px solid rgba(253, 193, 127, 0.2);
            box-shadow: 
                0 0 120px rgba(253, 193, 127, 0.25),
                0 0 200px rgba(253, 193, 127, 0.15),
                0 0 250px rgba(253, 193, 127, 0.08),
                inset 0 0 30px rgba(253, 193, 127, 0.05);
        }

        .upload-card::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            background: linear-gradient(45deg, #FDC17F, #FFFFFF, #FDC17F);
            border-radius: 40px;
            z-index: -1;
            opacity: 0.25;
            animation: glow 3s ease-in-out infinite alternate;
            filter: blur(15px);
        }

        @keyframes glow {
            0% {
                opacity: 0.2;
                box-shadow: 0 0 40px rgba(253, 193, 127, 0.3);
            }
            100% {
                opacity: 0.35;
                box-shadow: 0 0 60px rgba(253, 193, 127, 0.5);
            }
        }

        .upload-form {
            display: flex;
            flex-direction: column;
            gap: 35px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .form-row {
            display: flex;
            gap: 30px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .form-label {
            font-size: 28px;
            color: #ffffff;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            padding: 15px 20px;
            color: #FFFFFF;
            font-size: 16px;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form-input:focus {
            outline: none;
            border-color: #FDC17F;
            box-shadow: 0 0 15px rgba(253, 193, 127, 0.2);
            background: rgba(255, 255, 255, 0.08);
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        textarea.form-input {
            min-height: 120px;
            resize: vertical;
        }

        .file-upload-container {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .file-input {
            flex: 1;
        }

        .file-upload-btn {
            background-color: #424242;
            color: #FFFFFF;
            border: none;
            border-radius: 10px;
            padding: 15px 25px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
        }

        .file-upload-btn:hover {
            background-color: #505050;
            transform: translateY(-2px);
        }

        .file-upload-btn i {
            font-size: 18px;
        }

        .submit-btn-container {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .submit-btn {
            background: linear-gradient(45deg, rgba(253, 193, 127, 0.7), rgba(255, 255, 255, 0.7), rgba(253, 193, 127, 0.7));
            background-size: 200% 100%;
            color: #000000;
            border: none;
            border-radius: 15px;
            padding: 20px 50px;
            font-size: 20px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(253, 193, 127, 0.3);
        }

        .submit-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 35px rgba(253, 193, 127, 0.4);
            background-position: 100% 0;
        }

        .submit-btn:active {
            transform: translateY(-2px);
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient(45deg, #FDC17F, #FFFFFF, #FDC17F);
            border-radius: 25px;
            z-index: -1;
            opacity: 0.15; /* Dimmer opacity */
            animation: glow 3s ease-in-out infinite alternate;
            filter: blur(10px);
        }

        .file-preview {
            margin-top: 10px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 8px;
            border: 1px dashed rgba(255, 255, 255, 0.2);
            font-size: 14px;
            color: #DBA890;
        }

        @media (max-width: 768px) {
            body {
                padding: 20px 15px;
            }
            
            .page-title {
                font-size: 36px;
            }
            
            .upload-card {
                padding: 30px;
            }
            
            .form-row {
                flex-direction: column;
                gap: 25px;
            }
            
            .form-label {
                font-size: 16px;
            }
            
            .form-input {
                padding: 12px 15px;
                font-size: 15px;
            }
            
            .file-upload-btn {
                padding: 12px 20px;
                font-size: 14px;
            }
            
            .submit-btn {
                padding: 18px 40px;
                font-size: 18px;
            }
            
            .upload-card::before {
                top: -15px;
                left: -15px;
                right: -15px;
                bottom: -15px;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 32px;
            }
            
            .upload-card {
                padding: 25px 20px;
            }
            
            .upload-form {
                gap: 25px;
            }
            
            .file-upload-container {
                flex-direction: column;
                gap: 10px;
            }
            
            .file-upload-btn {
                width: 100%;
                justify-content: center;
            }
            
            .submit-btn {
                padding: 16px 30px;
                font-size: 16px;
                width: 100%;
            }
            
            .upload-card::before {
                top: -10px;
                left: -10px;
                right: -10px;
                bottom: -10px;
            }
        }
    </style>
</head>
<body>
    <div class="page-header">
        <h1 class="page-title">Upload Your Tool</h1>
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

    <script>
        const docFileInput = document.getElementById('docFileInput');
        const docFileName = document.getElementById('docFileName');
        const docFilePreview = document.getElementById('docFilePreview');
        const uploadDocBtn = document.getElementById('uploadDocBtn');
        
        const bannerFileInput = document.getElementById('bannerFileInput');
        const bannerFileName = document.getElementById('bannerFileName');
        const bannerFilePreview = document.getElementById('bannerFilePreview');
        const uploadBannerBtn = document.getElementById('uploadBannerBtn');
        
        uploadDocBtn.addEventListener('click', () => {
            docFileInput.click();
        });
        
        docFileInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                docFileName.value = file.name;
                docFilePreview.textContent = `Selected: ${file.name} (${(file.size / 1024).toFixed(2)} KB)`;
                docFilePreview.style.display = 'block';
            } else {
                docFileName.value = '';
                docFilePreview.style.display = 'none';
            }
        });
        
        uploadBannerBtn.addEventListener('click', () => {
            bannerFileInput.click();
        });
        
        bannerFileInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                bannerFileName.value = file.name;
                bannerFilePreview.textContent = `Selected: ${file.name} (${(file.size / 1024).toFixed(2)} KB)`;
                
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        bannerFilePreview.innerHTML = `
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <img src="${e.target.result}" alt="Preview" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                                <div>
                                    <div>${file.name}</div>
                                    <div style="font-size: 12px; color: rgba(219, 168, 144, 0.7);">
                                        ${(file.size / 1024).toFixed(2)} KB
                                    </div>
                                </div>
                            </div>
                        `;
                    };
                    reader.readAsDataURL(file);
                }
                
                bannerFilePreview.style.display = 'block';
            } else {
                bannerFileName.value = '';
                bannerFilePreview.style.display = 'none';
            }
        });
        
        const uploadForm = document.getElementById('uploadForm');
        const submitBtn = uploadForm.querySelector('.submit-btn');
        
        uploadForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Uploading...';
            submitBtn.disabled = true;
            setTimeout(() => {
                alert('Tool uploaded successfully!\n\nYour tool will be reviewed by our team and published within 24-48 hours.');
                
                uploadForm.reset();
                docFilePreview.style.display = 'none';
                bannerFilePreview.style.display = 'none';
                
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });
        
        const inputs = uploadForm.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('input', () => {
                if (input.checkValidity()) {
                    input.style.borderColor = '#4CAF50';
                } else {
                    input.style.borderColor = '#ff4444';
                }
            });
        });
    </script>
</body>
</html>