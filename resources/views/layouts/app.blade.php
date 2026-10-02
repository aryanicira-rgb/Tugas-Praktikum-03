<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'LaporBanjir')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe5e5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #d90429;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h1 {
            margin: 0;
            font-size: 22px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 30px;
            display: flex;
            justify-content: center;
        }
        footer {
            text-align: center;
            padding: 15px;
            color: #7a0019;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>LaporBanjir</h1>
        <nav>
            <a href="{{ route('banjir.form') }}">Form Lapor</a>
            <a href="{{ route('banjir.daftar') }}">Daftar Laporan</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} BPBD Kabupaten Bandung - Sistem LaporBanjir
    </footer>
</body>
</html>