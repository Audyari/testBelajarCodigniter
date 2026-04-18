<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($post['title']) ?> - Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
        }
        .meta {
            color: #666;
            font-size: 0.9em;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }
        .content {
            line-height: 1.6;
            color: #444;
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?= esc($post['title']) ?></h1>
        
        <div class="meta">
            <small>Post ID: <?= esc($post['id']) ?></small>
        </div>
        
        <div class="content">
            <p><?= esc($post['content']) ?></p>
        </div>
        
        <hr>
        <p><a href="/">← Kembali ke Beranda</a></p>
    </div>
</body>
</html>