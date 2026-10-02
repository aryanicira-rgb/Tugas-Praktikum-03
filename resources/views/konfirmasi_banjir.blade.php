<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Laporan Banjir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe5e5;
            display: flex;
            justify-content: center;
            padding: 40px;
        }
        .container {
            background-color: #ffffff;
            border: 2px solid #d90429;
            border-radius: 10px;
            padding: 30px;
            width: 400px;
            box-shadow: 0 4px 10px rgba(217, 4, 41, 0.2);
        }
        h2 {
            color: #d90429;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            margin: 10px 0;
            color: #333;
        }
        strong {
            color: #7a0019;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: white;
            background-color: #d90429;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }
        a:hover {
            background-color: #a5001c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Laporan Diterima</h2>
        <p><strong>Nama Pelapor:</strong> {{ $nama }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $lokasi }}</p>
        <p><strong>Tinggi Genangan Air:</strong> {{ $tinggi_air }} cm</p>
        <a href="/lapor-banjir">Buat Laporan Baru</a>
    </div>
</body>
</html>