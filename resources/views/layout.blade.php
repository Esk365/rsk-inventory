<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Dashboard - RskInventory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            width: 200px;
            background-color: #343a40;
            color: #fff;
            position: fixed;
            top: 0;
            bottom: 0;
            overflow-y: auto;
        }

        .sidebar a {
            color: #fff;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 20px;
            padding: 20px;
            overflow-y: auto;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .search-container {
            display: flex;
            flex-grow: 1;
            justify-content: flex-end;
        }

        .search-container input {
            flex: 1;
            margin-right: 10px;
        }

        .card-header {
            background-color: #343a40;
            color: #fff;
        }

        .table-responsive {
            max-height: 400px;
            overflow-y: auto;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .content {
                margin-left: 0;
            }

            .navbar {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div>
        <div class="row">
            <div class="col-md-2">
                @include('partials.sidebar')
            </div>
            <div class="col-md-10">
                <div class="content">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Dashboard</a>
                        <div class="search-container">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </div>
                    </nav>
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
