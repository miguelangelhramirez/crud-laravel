<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>    
    <div class="container mx-auto">
        <livewire:nav-bar/>
        {{ $slot }}
    </div>
</body>
</html>