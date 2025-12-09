<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Your Tool</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0f0f1e;
            color: #f0f0f0;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(113, 108, 102, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(255, 228, 199, 0.1) 0%, transparent 20%);
        }

        /* Header with gradient */
        .header {
            text-align: center;
            margin-bottom: 40px;
            width: 100%;
            max-width: 900px;
        }

        .header h1 {
            font-size: 3.2rem;
            font-weight: 700;
            background: linear-gradient(to right, #716C66, #FFE4C7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 10px;
            letter-spacing: 1px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .header p {
            color: #aaa;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.5;
        }

        /* Glowing card container */
        .card-container {
            position: relative;
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
        }

        .glowing-card {
            background-color: #1a1a2e;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 
                0 10px 30px rgba(0, 0, 0, 0.5),
                0 0 0 1px rgba(255, 228, 199, 0.1),
                inset 0 0 20px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        /* Glow effect */
        .glowing-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #716C66, #FFE4C7, #716C66, #FFE4C7);
            z-index: -1;
            border-radius: 22px;
            animation: glow 8s linear infinite;
            background-size: 400%;
            opacity: 0.7;
        }

        .glowing-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #1a1a2e;
            border-radius: 18px;
            z-index: -1;
        }

        @keyframes glow {
            0% {
                background-position: 0 0;
            }
            50% {
                background-position: 400% 0;
            }
            100% {
                background-position: 0 0;
            }
        }

        /* Card header */
        .card-header {
            margin-bottom: 30px;
            border-bottom: 1px solid rgba(255, 228, 199, 0.1);
            padding-bottom: 20px;
        }

        .card-header h2 {
            font-size: 2.2rem;
            color: #FFE4C7;
            margin-bottom: 10px;
        }

        .meta-info {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .meta-item {
            display: flex;
            flex-direction: column;
        }

        .meta-item span:first-child {
            font-size: 0.9rem;
            color: #aaa;
            margin-bottom: 5px;
        }

        .meta-item span:last-child {
            font-size: 1.1rem;
            color: #FFE4C7;
            font-weight: 500;
        }

        /* Form styling */
        .form-group {
            margin-bottom: 30px;
        }

        .form-label {
            display: block;
            font-size: 1.1rem;
            color: #FFE4C7;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .input-description {
            font-size: 0.9rem;
            color: #aaa;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .form-control {
            width: 100%;
            background-color: #252540;
            border: 1px solid #444;
            border-radius: 10px;
            padding: 15px;
            color: #f0f0f0;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: #FFE4C7;
            box-shadow: 0 0 10px rgba(255, 228, 199, 0.2);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        /* File input styling */
        .file-input-container {
            display: flex;
            gap: 15px;
        }

        .file-input-wrapper {
            flex: 1;
            position: relative;
        }

        .check-file-btn {
            background-color: #424242;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 15px 25px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            white-space: nowrap;
        }

        .check-file-btn:hover {
            background-color: #555;
            transform: translateY(-2px);
        }

        /* Buttons container */
        .buttons-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }

        .action-btn {
            padding: 16px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            z-index: 1;
            letter-spacing: 0.5px;
        }

        .approve-btn {
            background-color: #2a5c3d;
            color: #d4ffdf;
        }

        .reject-btn {
            background-color: #5c2a2a;
            color: #ffd4d4;
        }

        /* Dim glowing effect for buttons */
        .action-btn::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #716C66, #FFE4C7, #716C66, #FFE4C7);
            z-index: -1;
            border-radius: 14px;
            animation: glow 8s linear infinite;
            background-size: 400%;
            opacity: 0.3;
        }

        .action-btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 10px;
            z-index: -1;
        }

        .approve-btn::after {
            background-color: #2a5c3d;
        }

        .reject-btn::after {
            background-color: #5c2a2a;
        }

        .action-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .action-btn:active {
            transform: translateY(-1px);
        }

        /* Footer */
        .footer {
            margin-top: 40px;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5rem;
            }
            
            .glowing-card {
                padding: 25px;
            }
            
            .meta-info {
                flex-direction: column;
                gap: 15px;
            }
            
            .file-input-container {
                flex-direction: column;
            }
            
            .buttons-container {
                flex-direction: column;
                gap: 20px;
            }
            
            .action-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Upload Your Tool</h1>
        <p>Submit your tool for review and inclusion in our platform. Please provide accurate and detailed information.</p>
    </div>
    
    <div class="card-container">
        <div class="glowing-card">
            <div class="card-header">
                <h2>Data Analysis Pro</h2>
                <div class="meta-info">
                    <div class="meta-item">
                        <span>Version</span>
                        <span>v2.5.1</span>
                    </div>
                    <div class="meta-item">
                        <span>Category</span>
                        <span>Data Analytics</span>
                    </div>
                </div>
            </div>
            
            <form id="uploadForm">
                <div class="form-group">
                    <label class="form-label">Tool Name</label>
                    <div class="input-description">Enter the official name of your tool as you want it to appear on the platform.</div>
                    <input type="text" class="form-control" value="Data Analysis Pro" placeholder="Enter tool name">
                </div>
                
                <div class="form-group">
                    <div class="meta-info">
                        <div class="meta-item" style="width: 48%;">
                            <label class="form-label">Version</label>
                            <div class="input-description">Current version of your tool (e.g., v1.0.0).</div>
                            <input type="text" class="form-control" value="v2.5.1" placeholder="Enter version">
                        </div>
                        <div class="meta-item" style="width: 48%;">
                            <label class="form-label">Category</label>
                            <div class="input-description">Select the primary category for your tool.</div>
                            <select class="form-control">
                                <option>Data Analytics</option>
                                <option>Development</option>
                                <option>Design</option>
                                <option>Productivity</option>
                                <option>Security</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <div class="input-description">Provide a clear and concise description of what your tool does, its main features, and its target audience.</div>
                    <textarea class="form-control" placeholder="Enter tool description">Data Analysis Pro is a comprehensive tool for processing, analyzing, and visualizing complex datasets. It supports multiple data formats, provides advanced statistical analysis, and generates interactive reports with customizable dashboards.</textarea>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Installation Steps</label>
                    <div class="input-description">Provide step-by-step instructions for installing your tool. Include any prerequisites or dependencies needed.</div>
                    <textarea class="form-control" placeholder="Enter installation steps">1. Download the installer package from the official website
2. Run the installer executable
3. Follow the on-screen setup wizard
4. Configure your database connection
5. Set up user authentication
6. Run the initialization script
7. Launch the application</textarea>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Document/File</label>
                    <div class="input-description">Upload the documentation file (PDF, DOC, or TXT) that explains how to use your tool.</div>
                    <div class="file-input-container">
                        <div class="file-input-wrapper">
                            <input type="text" class="form-control" value="data_analysis_pro_documentation_v2.5.pdf" placeholder="Select or drag a file">
                        </div>
                        <button type="button" class="check-file-btn">
                            <i class="fas fa-file-alt"></i> Check File
                        </button>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Banner Design</label>
                    <div class="input-description">Upload a banner image (JPG, PNG, or SVG) that represents your tool. Recommended size: 1200x400px.</div>
                    <div class="file-input-container">
                        <div class="file-input-wrapper">
                            <input type="text" class="form-control" value="data_analysis_pro_banner_1200x400.png" placeholder="Select or drag an image file">
                        </div>
                        <button type="button" class="check-file-btn">
                            <i class="fas fa-image"></i> Check File
                        </button>
                    </div>
                </div>
                
                <div class="buttons-container">
                    <button type="button" class="action-btn approve-btn">
                        <i class="fas fa-check-circle"></i> Approve Tool
                    </button>
                    <button type="button" class="action-btn reject-btn">
                        <i class="fas fa-times-circle"></i> Reject Tool
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="footer">
        <p>© 2023 Tool Platform. All rights reserved. | Upload Tool Form</p>
    </div>
    
    <script>
        // Form validation and interaction
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('uploadForm');
            const checkFileButtons = document.querySelectorAll('.check-file-btn');
            const approveBtn = document.querySelector('.approve-btn');
            const rejectBtn = document.querySelector('.reject-btn');
            
            // Check file button functionality
            checkFileButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const container = this.closest('.file-input-container');
                    const input = container.querySelector('input[type="text"]');
                    
                    if (input.value.trim() === '') {
                        alert('No file selected. Please enter a file name or select a file.');
                        return;
                    }
                    
                    // Simulate checking the file
                    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Checking...';
                    this.disabled = true;
                    
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-check"></i> File Valid';
                        this.style.backgroundColor = '#2a5c3d';
                        
                        // Revert after 2 seconds
                        setTimeout(() => {
                            this.innerHTML = '<i class="fas fa-file-alt"></i> Check File';
                            this.style.backgroundColor = '#424242';
                            this.disabled = false;
                        }, 2000);
                    }, 1500);
                });
            });
            
            // Approve button functionality
            approveBtn.addEventListener('click', function() {
                if (validateForm()) {
                    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Approving...';
                    
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-check-circle"></i> Approved!';
                        this.style.backgroundColor = '#1e7e34';
                        
                        // Show success message
                        alert('Tool has been approved successfully!');
                    }, 2000);
                }
            });
            
            // Reject button functionality
            rejectBtn.addEventListener('click', function() {
                const toolName = document.querySelector('input[type="text"]').value;
                const reason = prompt(`Please provide a reason for rejecting "${toolName}":`);
                
                if (reason) {
                    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Rejecting...';
                    
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-times-circle"></i> Rejected!';
                        this.style.backgroundColor = '#a71d2a';
                        
                        // Show rejection message
                        alert(`Tool has been rejected. Reason: ${reason}`);
                    }, 2000);
                }
            });
            
            // Form validation
            function validateForm() {
                const toolName = document.querySelector('input[placeholder="Enter tool name"]').value;
                const version = document.querySelector('input[placeholder="Enter version"]').value;
                const description = document.querySelector('textarea[placeholder="Enter tool description"]').value;
                const installation = document.querySelector('textarea[placeholder="Enter installation steps"]').value;
                
                if (!toolName.trim()) {
                    alert('Please enter a tool name.');
                    return false;
                }
                
                if (!version.trim()) {
                    alert('Please enter a version.');
                    return false;
                }
                
                if (!description.trim()) {
                    alert('Please enter a description.');
                    return false;
                }
                
                if (!installation.trim()) {
                    alert('Please enter installation steps.');
                    return false;
                }
                
                return true;
            }
            
            // Simulate file input functionality
            const fileInputs = document.querySelectorAll('.file-input-wrapper input[type="text"]');
            fileInputs.forEach(input => {
                input.addEventListener('click', function() {
                    // In a real implementation, this would trigger a file input dialog
                    const fileName = this.getAttribute('placeholder').includes('image') ? 
                        'tool_banner.png' : 'tool_documentation.pdf';
                    
                    this.value = fileName;
                    
                    // Trigger the input description
                    const description = this.closest('.form-group').querySelector('.input-description');
                    const originalText = description.textContent;
                    description.innerHTML = originalText + ' <span style="color:#FFE4C7;">File selected: ' + fileName + '</span>';
                    
                    // Reset after 3 seconds
                    setTimeout(() => {
                        description.textContent = originalText;
                    }, 3000);
                });
            });
        });
    </script>
</body>
</html>