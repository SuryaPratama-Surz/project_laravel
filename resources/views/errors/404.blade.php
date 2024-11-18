<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            overflow: hidden;
            position: relative;
        }
        h1 {
            font-size: 100px;
            margin: 0;
            animation: bounce 1s infinite;
        }
        p {
            font-size: 24px;
            margin: 10px 0;
            opacity: 0.8;
        }
        a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            border: 2px solid #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }
        a:hover {
            background: #fff;
            color: #ff7e5f;
        }
        .image-container {
            margin-top: 20px;
        }
        img {
            max-width: 300px;
            height: auto;
            animation: fadeIn 1s;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div>
        <h1>404</h1>
        <p>Oops! Halaman yang Anda cari tidak ditemukan.</p>
        <p>Kembali ke <a href="{{ url('/') }}">beranda</a>.</p>
        <div class="image-container">
            <img src="https://i.imgur.com/8E0Z7xI.png" alt="Not Found Image">
        </div>
    </div>
</body>
</html>