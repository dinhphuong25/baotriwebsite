<?php
$url = isset($_GET['url']) ? $_GET['url'] : '';
$redirect_url = "https://thptchuyenbentre.edu.vn/" . $url;
$seconds_wait = 10;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đang chuyển hướng...</title>
    <meta http-equiv="refresh" content="<?php echo $seconds_wait; ?>;url=<?php echo $redirect_url; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #0f172a;
            --accent: #2563eb;
            --accent-light: #eff6ff;
            --bg-color: #f8fafc;
            --white: #ffffff;
            --border: #e2e8f0;
            --font-main: 'Plus Jakarta Sans', sans-serif;
        }
        body {
            font-family: var(--font-main);
            background-color: var(--bg-color);
            color: var(--primary);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px;
        }
        .card {
            background: var(--white);
            padding: 40px;
            border-radius: 16px;
            border: 1px solid var(--border);
            text-align: center;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
        }
        .icon-box {
            width: 60px; height: 60px;
            background: var(--accent-light);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            color: var(--accent);
        }
        .spinner {
            width: 24px; height: 24px;
            border: 3px solid rgba(37, 99, 235, 0.3);
            border-top-color: var(--accent);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
        h1 { font-size: 1.5rem; margin-bottom: 12px; }
        p { color: #64748b; line-height: 1.5; margin-bottom: 24px; }
        b { color: var(--primary); }
        .btn {
            display: inline-block;
            background: var(--primary);
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: background 0.2s;
        }
        .btn:hover { background: #1e293b; }
    </style>
</head>
<body>
    <div class="card">
        <div class="icon-box">
            <div class="spinner"></div>
        </div>
        <h1>Đang chuyển hướng...</h1>
        <p>Bạn đang được chuyển đến <b>thptchuyenbentre.edu.vn</b> trong <?php echo $seconds_wait; ?> giây.</p>
        <a href="<?php echo $redirect_url; ?>" class="btn">Bấm vào đây nếu không tự chuyển</a>
    </div>
</body>
</html>
