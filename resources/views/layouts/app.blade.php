<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduCourse Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dark-mode { background-color: #121212 !important; color: #ffffff !important; }
        .dark-mode .card { background-color: #1e1e1e; color: #ffffff; border: 1px solid #333; }
        .dark-mode .table { color: #ffffff; }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">EduCourse</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav me-auto">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                    <a class="nav-link {{ request()->is('students*') ? 'active' : '' }}" href="/students">Mahasiswa</a>
                    <a class="nav-link {{ request()->is('lecturers*') ? 'active' : '' }}" href="/lecturers">Dosen</a>
                    <a class="nav-link {{ request()->is('articles*') ? 'active' : '' }}" href="/articles">Artikel</a>
                    <a class="nav-link {{ request()->is('profile*') ? 'active' : '' }}" href="/profile">Profile</a>
                </div>
                <button class="btn btn-outline-light btn-sm" onclick="toggleDarkMode()">🌙 Mode</button>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        @yield('content')
    </div>

    <footer class="text-center py-4 border-top text-muted">
        <p>&copy; 2026 Management Informatics - Politeknik Negeri Lampung</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>