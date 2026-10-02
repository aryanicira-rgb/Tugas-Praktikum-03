<!DOCTYPE html>
<html>
<head>
    <title>Form Lapor Banjir</title>
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
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #7a0019;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #d90429;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #d90429;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #a5001c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Pelaporan Banjir</h2>
        <form action="/lapor-banjir/kirim" method="post">
            @csrf
            <label>Nama Pelapor:</label>
            <input type="text" name="nama" required>

            <label>Lokasi Kejadian (Kecamatan/Desa):</label>
            <input type="text" name="lokasi" required>

            <label>Tinggi Genangan Air (cm):</label>
            <input type="number" name="tinggi_air" required>

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>
</body>
</html>