<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #343a40;
            color: #fff;
            padding: 1rem;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        .content {
            margin-left: 250px;
            padding: 1rem;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <a href="{{route('dashboard')}}"><h4>Dashboard</h4></a>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ route('book.index')}}" class="nav-link" style=" text-decoration: none;">Books</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('author.index')}}" class="nav-link" style=" text-decoration: none;">Authors</a>
        </li>
        <li class="nav-item">
            <form action="{{route('logout')}}" method="post" style="display:inline;">
                @csrf
                <button type="submit" class="btn " style="color: #fff;">Logout</button>
            </form>
        </li>
    </ul>
</div>

<div class="content">
    @yield('content')
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
