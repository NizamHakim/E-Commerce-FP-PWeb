<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pweb.Store | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">pweb.Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                    <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class="active" @endif>Dashboard</a>
                    <a href="/items" @if (request()->route()->uri == 'items' || request()->route()->uri == 'item-add' || request()->route()->uri == 'item-edit/{id}' || request()->route()->uri == 'item-delete/{id}' || request()->route()->uri == 'item-destroy/{id}' || request()->route()->uri == 'item-deleted' || request()->route()->uri == 'item-restore/{id}') class="active" @endif>Items</a>
                    <a href="/category-list" @if (request()->route()->uri == 'category-list') class="active" @endif>Categories</a>
                    <a href="/users" @if (request()->route()->uri == 'users') class="active" @endif>Users</a>
                    <a href="/logout">Logout</a>
                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>