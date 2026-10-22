<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>500 — Server Error | Amaanullah</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      background: #0f1016;
      color: #fff;
      font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 24px;
    }
    .box { max-width: 520px; }
    h1 {
      font-size: clamp(64px, 12vw, 120px);
      margin: 0;
      font-weight: 800;
      background: linear-gradient(135deg, #ef4444, #f87171);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      letter-spacing: -0.05em;
    }
    h2 { font-size: 24px; margin: 10px 0 16px; }
    p { color: rgba(255, 255, 255, 0.65); line-height: 1.6; margin-bottom: 28px; }
    a.btn {
      display: inline-block;
      background: #232530;
      color: #fff;
      text-decoration: none;
      padding: 12px 28px;
      border-radius: 999px;
      font-weight: 700;
      border: 1px solid rgba(255,255,255,0.15);
      transition: all .25s ease;
    }
    a.btn:hover { background: #f26a1b; border-color: #f26a1b; }
  </style>
</head>
<body>
  <div class="box">
    <h1>500</h1>
    <h2>Application Exception</h2>
    <p>An unexpected condition occurred. Our technical logs have been updated.</p>
    <a href="<?= function_exists('base_url') ? base_url('/') : '/' ?>" class="btn">Return to Safety →</a>
  </div>
</body>
</html>
