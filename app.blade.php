<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <style>
        body.dark-mode { background-color: #121212; color: white; }
        .card { border-radius: 20px; }
    </style>
</head>
<body class="{{ Cookie::get('theme') == 'dark' ? 'dark-mode' : '' }}">
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
        <a class="navbar-brand" href="{{ route('tasks.index') }}">To-Do System</a>
        <div class="ms-auto d-flex align-items-center">
            <button id="themeToggle" class="btn btn-sm btn-secondary me-2">Toggle Theme</button>
            @auth
                <span class="me-3">Hello, {{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST">@csrf
                    <button class="btn btn-sm btn-danger">Logout</button>
                </form>
            @endauth
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        document.getElementById("themeToggle").addEventListener("click", function() {
            let body = document.body;
            let theme = body.classList.toggle("dark-mode") ? "dark" : "light";
            document.cookie = "theme=" + theme + "; path=/";
        });
    </script>
</body>
</html>
