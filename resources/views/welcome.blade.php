<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4?plugins-forms,typography"></script>

    <title>@yield('title') | {{env('APP_NAME', 'FormVal')}}</title>
</head>
<body>
    @yield('content')
</body>
</html>