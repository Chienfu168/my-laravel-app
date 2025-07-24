<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', '非營利管理系統') }}</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- 自訂 CSS --}}
    <style>
        body {
            padding-top: 60px;
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
    </style>
</head>
<body>
    {{-- 導覽列 --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', '非營利管理系統') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="切換導航">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navBar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('accounts.index') }}">帳戶</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projects.index') }}">專案</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('petty-cash.index') }}">零用金</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('transactions.index') }}">支出</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('trips.index') }}">出差</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn btn-link nav-link" type="submit">登出</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登入</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    {{-- 主要內容 --}}
    <main class="py-4">
        @yield('content')
    </main>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
