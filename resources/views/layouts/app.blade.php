<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Surat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        /* Sidebar */
        .sidebar {
            width: 200px;
            background: #f2f2f2;
            min-height: 100vh;
            padding: 20px;
        }
        .sidebar h3 {
            font-size: 18px;
            margin-bottom: 15px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 10px 0;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }
        .sidebar ul li a:hover {
            font-weight: bold;
        }

        /* Konten */
        .content {
            flex: 1;
            padding: 20px;
        }

        /* Tabel */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 15px;
        }
        table th, table td {
            border: 1px solid #999;
            padding: 8px;
            text-align: left;
        }
        table th {
            background: #ddd;
        }

        /* Tombol */
        button, a.button {
            padding: 5px 10px;
            border: 1px solid black;
            cursor: pointer;
            margin: 2px;
            text-decoration: none;
        }
        .btn-red { background: red; color: white; }
        .btn-yellow { background: yellow; color: black; }
        .btn-blue { background: blue; color: white; }
        .btn-grey { background: grey; color: white; }
        .btn-green { background: green; color: white; }

        /* Form */
        .form-container {
            max-width: 600px;
            padding: 20px;
            border-radius: 8px;
        }
        .form-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        .form-group label {
            width: 150px;
        }
        .form-group input,
        .form-group select {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group textarea {
            padding: 28px;
            border: 1px solid #ccc;
            border-radius: 4px;
            flex: 1;
            min-height: 60px; /* 2x input */
            resize: vertical; /* biar bisa ditarik ke bawah */
        }
        .form-actions {
            margin-top: 20px;
        }

        /* Alert sukses */
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        .about-container {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
        }
        .about-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ccc;
        }
        .about-info p {
            margin: 5px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Menu</h3>
        <hr>
        <ul>
            <li><a href="{{ route('arsip.index') }}">⭐ Arsip</a></li>
            <li><a href="{{ route('kategori.index') }}">📂 Kategori Surat</a></li>
            <li><a href="{{ route('about.index') }}">ℹ️ About</a></li>
        </ul>
    </div>

    <!-- Konten -->
    <div class="content">
        @yield('content')
    </div>
</body>
</html>