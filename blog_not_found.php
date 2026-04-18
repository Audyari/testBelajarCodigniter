<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Tidak Ditemukan - Blog</title>
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
            text-align: center;
        }
        h1 {
            color: #d9534f;
            font-size: 2.5em;
            margin: 0 0 10px 0;
        }
        p {
            color: #666;
            font-size: 1.1em;
            line-height: 1.6;
        }
        .error-code {
            font-size: 5em;
            color: #ddd;
            margin: 20px 0;
            font-weight: bold;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #0066cc;
            color: white;
            text-decoration: none;
            border-radius: 3px;
        }
        a:hover {
            background-color: #0052a3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-code">404</div>
        <h1>Post Tidak Ditemukan</h1>
        
        <p>
            Maaf, post dengan ID <strong><?= esc($id) ?></strong> tidak ada atau telah dihapus.
        </p>
        
        <p>
            Silakan kembali ke halaman utama atau coba post lainnya.
        </p>
        
        <a href="/">← Kembali ke Beranda</a>
    </div>
</body>
</html>