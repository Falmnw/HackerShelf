<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HackerShelf - Profile</title>
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
            background-color: #000000;
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .profile-container {
            max-width: 1200px;
            margin: 60px auto 0;
            padding: 0 20px 60px;
            position: relative;
            z-index: 2;
        }

        .profile-wrapper {
            display: flex;
            gap: 40px;
            margin-top: 40px;
        }

        .profile-card-container {
            width: 320px;
            flex-shrink: 0;
        }

        .profile-card {
            background: linear-gradient(171deg, #402100 20% , #AA661C);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .profile-pic-container {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 25px;
            background-color: #2A1608;
        }

        .profile-pic {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-name {
            font-size: 35.51px;
            font-weight: 5;
            margin-bottom: 15px;
            color: white;
        }

        .profile-tag {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #000000;
            padding: 8px 20px;
            border-radius: 20px;
            margin-bottom: 20px;
            width: 180px;
        }

        .tag-icon {
            width: 12px;
            height: 12px;
            background-color: #CA6E0A;
            border-radius: 50%;
            margin-right: 10px;
        }

        .tag-text {
            font-size: 16px;
            color: white;
            font-weight: 500;
        }

        .divider-line {
            width: 100%;
            height: 3px;
            background-color: rgba(255, 255, 255, 0.89); /* White line */
            margin-bottom: 20px;
        }

        .update-profile-btn {
            background:#CA6E0A;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 16px;
        }

        .update-profile-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(202, 110, 10, 0.4);
        }

        .profile-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .section-title {
            font-size: 47.53px;
            font-weight: 400;
            margin-bottom: 25px;
            background: linear-gradient(180deg, #716C66, #DBA890, #FFE4C7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .info-card {
            background-color: #1C1C1C;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .info-field {
            margin-bottom: 20px;
        }

        .info-field:last-child {
            margin-bottom: 0;
        }

        .field-label {
            font-size: 32px;
            background: linear-gradient(180deg, #716C66, #DBA890, #FFE4C7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 5px;
        }

        .field-value {
            font-size: 18px;
            color: #ffffff;
            background: rgba(255, 255, 255, 0.05);
            padding: 12px 15px;
            border-radius: 8px;
            border-left: 3px solid #CA6E0A;
        }

        .tools-container {
            background-color: #1C1C1C;
            border-radius: 12px;
            padding: 30px;
        }

        .tools-row {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }

        .tool-card {
            background: linear-gradient(180deg, #402100, #AA661C);
            border-radius: 10px;
            padding: 25px 20px;
            min-width: 250px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .tool-icon {
            font-size: 30px;
            color: #fff;
            background: rgba(0, 0, 0, 0.3);
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .tool-name {
            font-size: 18px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 8px;
        }

        .tool-category {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.8);
            background: rgba(0, 0, 0, 0.4);
            padding: 5px 12px;
            border-radius: 15px;
        }

        .see-all-container {
            text-align: right;
            margin-top: 15px;
        }

        .see-all-link {
            color: white;
            text-decoration: none;
            font-size: 16px;
            padding: 8px 16px;
            border-radius: 6px;
            background: rgba(202, 110, 10, 0.1);
            border: 1px solid rgba(202, 110, 10, 0.3);
        }

        .see-all-link:hover {
            background: rgba(202, 110, 10, 0.3);
        }

        @media (max-width: 900px) {
            .profile-wrapper {
                flex-direction: column;
            }
            
            .profile-card-container {
                width: 100%;
                max-width: 350px;
                margin: 0 auto;
            }
        }

        @media (max-width: 600px) {
            .profile-container {
                margin-top: 30px;
                padding: 0 15px 40px;
            }
            
            .section-title {
                font-size: 26px;
            }
        }
    </style>
</head>
<body>
    <div class="angular-spotlight"></div>

    <div class="profile-container">
        <div class="profile-wrapper">
            <div class="profile-card-container">
                <div class="profile-card">
                    <div class="profile-pic-container">
                        <div class="profile-pic" style="display: flex; align-items: center; justify-content: center; color: #CA6E0A; font-size: 14px;">
                            <img src="./public/assets/images//Profile Picture.png">
                        </div>
                    </div>
                    <div class="profile-name"> Brian Carrier</div>
                    
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

    <script>
        // Ini Temporary, kalo mau ganti ganti aja, ini cuma buat demo interaktif
        document.querySelector('.update-profile-btn').addEventListener('click', function() {
            const newName = prompt('Enter new username:', document.getElementById('username-field').textContent);
            if (newName && newName.trim() !== '') {
                document.getElementById('username-field').textContent = newName;
            }
            
            const newEmail = prompt('Enter new email:', document.getElementById('email-field').textContent);
            if (newEmail && newEmail.trim() !== '') {
                document.getElementById('email-field').textContent = newEmail;
            }
        });
    </script>
</body>
</html>