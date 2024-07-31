<!DOCTYPE html>
<html>
<head>
    <title>Phone Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-img {
            max-width: 100%; /* Ảnh sẽ có chiều rộng tối đa là 100% của vùng chứa */
            height: auto; /* Chiều cao của ảnh sẽ tự động điều chỉnh để không bị méo */
        }

        .navbar {
            background-color: #007bff;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #cccccc !important;
        }
        .banner {
            background: url('https://cdn.tgdd.vn/2024/07/banner/5434-1920x450.jpg') no-repeat center center;
            background-size: cover;
            height: 400px;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .banner h1 {
            font-size: 4rem;
            font-weight: bold;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
        }
        .footer a {
            color: #ffffff;
        }
        .footer a:hover {
            color: #cccccc;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('home') }}">Phone Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link ml-auto" href="{{ route('home') }}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-auto" href="{{ route('list') }}">Danh sách</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="banner">
        <h1>Phone Store</h1>
    </div>
    <div class="container mt-4">
        @yield('content')
    </div>
    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">Phone Store &copy; 2024. All rights reserved.</span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
