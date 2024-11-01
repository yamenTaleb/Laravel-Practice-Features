<!doctype html>
<html lang="en">
<head>
    @include('admin.partials.head')
</head>
<body class="vertical  dark  ">
<div class="wrapper">
    @include('admin.partials.navbar')
    @include('admin.partials.sidebar')

    <main role="main" class="main-content">
        @yield('content')
    </main>
</div> <!-- .wrapper -->
@include('admin.partials.scripts')
</body>
</html>
