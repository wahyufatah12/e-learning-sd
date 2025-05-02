<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'E-Learning SD' }}</title>

    {{-- Hubungkan Tailwind CSS dan JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-800">

    {{-- Konten akan ditampilkan di sini --}}
    {{ $slot }}

</body>
</html>
