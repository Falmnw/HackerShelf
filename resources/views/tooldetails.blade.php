<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HackerShelf - Autopsy Tool Details</title>
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
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .tool-details-container {
            max-width: 800px;
            width: 100%;
            position: relative;
        }

        .tool-details-card {
            background-color: #000000;
            border-radius: 20px;
            padding: 50px;
            position: relative;
            border: 1px solid rgba(253, 193, 127, 0.2);
            box-shadow: 
                0 0 80px rgba(253, 193, 127, 0.25),
                0 0 150px rgba(253, 193, 127, 0.15),
                0 0 200px rgba(253, 193, 127, 0.08),
                inset 0 0 30px rgba(253, 193, 127, 0.05);
        }

        .tool-details-card::before {
            content: '';
            position: absolute;
            top: -20px;  
            left: -20px; 
            right: -20px; 
            bottom: -20px; 
            background: linear-gradient(45deg, #FDC17F);
            border-radius: 40px; 
            z-index: -1;
            opacity: 0.25;
            animation: glow 3s ease-in-out infinite alternate;
            filter: blur(15px);
        }

        @keyframes glow {
            0% {
                opacity: 0.35;
                box-shadow: 0 0 40px rgba(253, 193, 127, 0.3);
            }
            100% {
                opacity: 0.5;
                box-shadow: 0 0 60px rgba(253, 193, 127, 0.5);
            }
        }

        .tool-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 40px;
            margin-left: 100px;
        }

        .tool-name {
            font-size: 32px;
            font-weight: 300;
            color: #FFE4C7;
            letter-spacing: 0.5px;
        }

        .tool-actions {
            display: flex;
            align-items: center;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            padding: 10px 20px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-right: 25px;  
        }

        .action-btn:hover {
            background: rgba(253, 193, 127, 0.2);
            transform: translateY(-2px);
        }

        .action-btn i {
            color: #ffffff;
        }

        .founder-section {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-left: 100px;
        }

        .founder-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #FDC17F;
            overflow: hidden;
            background: rgba(253, 193, 127, 0.1);
        }

        .founder-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .founder-name {
            font-size: 24px;
            font-weight: 600;
            color: white;
        }

        .tool-description {
            font-size: 18px;
            line-height: 1.7;
            color: #FFFFFF;
            margin-bottom: 50px;
            padding: 25px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            border-left: 4px solid #FDC17F;
            margin-left: 100px;
            margin-right: 100px;
        }

        .buttons-container {
            display: flex;
            flex-direction: column; 
            gap: 10px;
            max-width: 500px;
            margin: 0 auto;
        }

        .gradient-btn {
            width: 100%;
            padding: 20px 30px;
            border: none;
            border-radius: 12px;
            font-size: 24px;
            font-weight: 150;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            background: linear-gradient(to right, #FDC17F, #FFFFFF, #FDC17F);
            background-size: 200% 100%;
            color: #000000;
            text-align: center;
        }

        .gradient-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(253, 193, 127, 0.3);
            background-position: 100% 0;
        }

        .gradient-btn:active {
            transform: translateY(-2px);
        }

        .gradient-btn i {
            margin-right: 10px;
            color: #000000;
        }

        @media (max-width: 384px) {
            body {
                padding: 20px 15px;
            }
            
            .tool-details-card {
                padding: 30px;
            }
            
            .tool-header {
                flex-direction: column;
                gap: 20px;
                align-items: flex-start;
            }
            
            .tool-name {
                font-size: 18px;
            }
            
            .tool-actions {
                align-self: flex-end;
            }
            
            .founder-section {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            
            .founder-info {
                align-items: center;
            }
            
            .tool-description {
                font-size: 8px;
                padding: 20px;
            }
            
            .buttons-container {
                max-width: 100%;
                gap: 15px;
            }
            
            .gradient-btn {
                min-width: 100%;
            }
            
            .tool-details-card::before {
                top: -15px;
                left: -15px;
                right: -15px;
                bottom: -15px;
            }
        }

        @media (max-width: 240px) {
            .tool-details-card {
                padding: 25px 20px;
            }
            
            .tool-name {
                font-size: 16px;
            }
            
            .tool-actions {
                gap: 10px;
            }
            
            .action-btn {
                padding: 8px 15px;
                font-size: 7px;
            }
            
            .founder-name {
                font-size: 10px;
            }
            
            .tool-description {
                font-size: 8px;
                padding: 15px;
            }
            
            .gradient-btn {
                padding: 18px 25px;
                font-size: 8px;
            }
            
            .tool-details-card::before {
                top: -10px;
                left: -10px;
                right: -10px;
                bottom: -10px;
            }
        }
    </style>
</head>
<body>
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
                    <img src="Profile Picture.png" alt="Founder">
                    <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: #FDC17F; font-size: 24px;">
                        <i class="fas fa-user"></i>
                    </div>
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

    <!-- iseng iseng -->
    <script>
        const bookmarkBtn = document.getElementById('bookmarkBtn');
        const likeBtn = document.getElementById('likeBtn');
        const installBtn = document.getElementById('installBtn');
        const downloadBtn = document.getElementById('downloadBtn');
        
        let isBookmarked = false;
        let isLiked = false;
        let likeCount = 700;
        
        bookmarkBtn.addEventListener('click', function() {
            isBookmarked = !isBookmarked;
            const icon = this.querySelector('i');
            const text = this.querySelector('span');
            
            if (isBookmarked) {
                icon.style.color = '#FDC17F';
                text.textContent = 'Bookmarked';
                this.style.background = 'rgba(253, 193, 127, 0.2)';
            } else {
                icon.style.color = '#FDC17F';
                text.textContent = 'Bookmark';
                this.style.background = 'rgba(253, 193, 127, 0.1)';
            }
        });
        
        // Like functionality
        likeBtn.addEventListener('click', function() {
            isLiked = !isLiked;
            const icon = this.querySelector('i');
            const text = this.querySelector('span');
            
            if (isLiked) {
                icon.style.color = '#FF4D4D';
                likeCount++;
                text.textContent = likeCount;
                this.style.background = 'rgba(255, 77, 77, 0.2)';
                this.style.borderColor = 'rgba(255, 77, 77, 0.3)';
            } else {
                icon.style.color = '#FDC17F';
                likeCount--;
                text.textContent = likeCount;
                this.style.background = 'rgba(253, 193, 127, 0.1)';
                this.style.borderColor = 'rgba(253, 193, 127, 0.3)';
            }
        });
        
        installBtn.addEventListener('click', function() {
            alert('Opening Installation Steps...\n\n1. Download the latest version\n2. Run the installer\n3. Follow the setup wizard\n4. Launch Autopsy\n5. Configure your settings');
        });
        
        downloadBtn.addEventListener('click', function() {
            alert('Available Versions:\n\n• Autopsy 4.19.3 (Latest)\n• Autopsy 4.18.0\n• Autopsy 4.17.0\n• Autopsy 4.16.0\n\nSelect a version to download.');
        });
        
        const interactiveElements = [bookmarkBtn, likeBtn, installBtn, downloadBtn];
        
        interactiveElements.forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            element.addEventListener('mouseleave', function() {
                if (!(this === likeBtn && isLiked) && !(this === bookmarkBtn && isBookmarked)) {
                    this.style.transform = 'translateY(0)';
                }
            });
        });
    </script>
</body>
</html>