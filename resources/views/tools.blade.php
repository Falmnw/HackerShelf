<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HackerShelf - Tools</title>
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

        .angular-spotlight {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                180deg,
                #AA661C 0%,
                #8A4E18 2%,
                #6A3A14 5%,
                #4A2810 10%,
                #2A1608 20%,
                #1A0F03 40%,
                #000000 100%
            );
            pointer-events: none;
            z-index: 0;
        }

        body {
            min-height: 100vh;
            position: relative;
            padding-top: 100px;
        }

        .tools-page-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
            z-index: 2;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .section-title {
            font-size: 64px;
            font-weight: 100;
            background: linear-gradient(180deg, #716C66, #DBA890, #FFE4C7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: 1px;
        }

        .search-container {
            position: relative;
            min-width: 500px;
        }

        .search-bar {
            width: 100%;
            padding: 14px 20px 14px 50px;
            background: transparent;
            border: 2px solid white;
            border-radius: 30px;
            color: rgba(255, 255, 255);
            font-size: 32px;
            outline: none;
            transition: all 0.3s ease;
            
        }

        .search-bar:focus {
            border-color: white;
            box-shadow: 0 0 15px rgba(255, 228, 199, 0.3);
            background: rgba(0, 0, 0, 0.2);
        }

        .search-bar::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 18px;
        }

        .tools-grid-container {
            margin-top: 100px;
        }

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 70px;
            margin-bottom: 50px;
        }

        .tool-card {
            background: linear-gradient(180deg, #402100, #AA661C);
            border-radius: 12px;
            padding: 30px;
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            cursor: pointer;
            height: 100%;
            position: relative;
            overflow: hidden;
            min-height: 420px;
        }

        .tool-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(202, 110, 10, 0.3);
            border-color: rgba(202, 110, 10, 0.5);
        }

        .tool-logo-container {
            width: 160px;
            height: 160px;
            border-radius: 15px;
            background: rgba(80, 39, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            padding: 10px;
        }

        .tool-logo {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .tool-name {
            font-size: 38.62px;
            font-weight: 200;
            color: #fff;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .tool-category {
            font-size: 26.77px;
            color: rgba(255, 228, 199, 0.9);
            background: rgba(0, 0, 0, 0.4);
            padding: 8px 20px;
            border-radius: 20px;
            border: 1px solid rgba(255, 228, 199, 0.2);
            display: inline-block;
        }

        /* Animasi tambahan bisa didelete */
        /* .tool-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255, 228, 199, 0.1), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s;
        }

        .tool-card:hover::before {
            transform: translateX(100%);
        } */

        @media (max-width: 992px) {
            .tools-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px;
            }
            
            .page-header {
                flex-direction: column;
                text-align: center;
                align-items: center;
            }
            
            .section-title {
                font-size: 36px;
            }
        }

        @media (max-width: 768px) {
            .tools-page-container {
                padding: 30px 15px;
            }
            
            .section-title {
                font-size: 32px;
            }
            
            .search-container {
                min-width: 100%;
            }
            
            .tools-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .tool-card {
                padding: 25px 20px;
            }
        }

        @media (max-width: 480px) {
            .section-title {
                font-size: 28px;
            }
            
            .tool-name {
                font-size: 20px;
            }
            
            .tool-logo-container {
                width: 70px;
                height: 70px;
            }
        }
    </style>
</head>
<body>
    <div class="angular-spotlight"></div>

    <div class="tools-page-container">
        <div class="page-header">
            <h1 class="section-title">Reverse Engineering</h1>
            
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-bar" placeholder="Search tools">
            </div>
        </div>

        <div class="tools-grid-container">
            <div class="tools-grid">
                
                <!-- Autopsy -->
                <div class="tool-card" onclick="selectTool('Autopsy')">
                    <div class="tool-logo-container">
                        <img src="autopsy-logo.png" class="tool-logo" alt="Autopsy">
                    </div>
                    <h3 class="tool-name">Autopsy</h3>
                    <div class="tool-category">Digital Forensics</div>
                </div>
                
                <!-- Volatility -->
                <div class="tool-card" onclick="selectTool('Volatility')">
                    <div class="tool-logo-container">
                        <img src="volatility-logo.png" class="tool-logo" alt="Volatility">
                    </div>
                    <h3 class="tool-name">Volatility</h3>
                    <div class="tool-category">Memory Analysis</div>
                </div>
                
                <!-- Magnet Forensic -->
                <div class="tool-card" onclick="selectTool('Magnet Forensic')">
                    <div class="tool-logo-container">
                        <img src="magnet-logo.png" class="tool-logo" alt="Magnet Forensic">
                    </div>
                    <h3 class="tool-name">Magnet Forensic</h3>
                    <div class="tool-category">Mobile Forensics</div>
                </div>
                
                <!-- FTK Imager -->
                <div class="tool-card" onclick="selectTool('FTK Imager')">
                    <div class="tool-logo-container">
                        <img src="ftk-logo.png" class="tool-logo" alt="FTK Imager">
                    </div>
                    <h3 class="tool-name">FTK Imager</h3>
                    <div class="tool-category">Disk Imaging</div>
                </div>
                
                <!-- EXIF Tool -->
                <div class="tool-card" onclick="selectTool('EXIF Tool')">
                    <div class="tool-logo-container">
                        <img src="exif-logo.png" class="tool-logo" alt="EXIF Tool">
                    </div>
                    <h3 class="tool-name">EXIF Tool</h3>
                    <div class="tool-category">Metadata Analysis</div>
                </div>
                
                <!-- DumpZilla -->
                <div class="tool-card" onclick="selectTool('DumpZilla')">
                    <div class="tool-logo-container">
                        <img src="dumpzilla-logo.png" class="tool-logo" alt="DumpZilla">
                    </div>
                    <h3 class="tool-name">DumpZilla</h3>
                    <div class="tool-category">Browser Forensics</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //jangan lupa delete habis testing
        function selectTool(toolName) {
            alert(`Selected: ${toolName}\n\nThis would navigate to the tool's detailed page.`);
        }
        const searchBar = document.querySelector('.search-bar');
        const toolCards = document.querySelectorAll('.tool-card');
        
        searchBar.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            
            toolCards.forEach(card => {
                const toolName = card.querySelector('.tool-name').textContent.toLowerCase();
                const toolCategory = card.querySelector('.tool-category').textContent.toLowerCase();
                
                if (toolName.includes(searchTerm) || toolCategory.includes(searchTerm)) {
                    card.style.display = 'flex';
                    card.style.opacity = '1';
                } else {
                    card.style.display = 'none';
                    card.style.opacity = '0';
                }
            });
        });

        document.addEventListener('keydown', function(e) {
            if ((e.ctrlKey) && e.key === 'f') {
                e.preventDefault();
                searchBar.focus();
                searchBar.select();
            }
        });
    </script>
</body>
</html>