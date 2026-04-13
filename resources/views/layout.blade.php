<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure App Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Kustomisasi scrollbar agar pas dengan tema gelap */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #111827; }
        ::-webkit-scrollbar-thumb { background: #374151; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #4B5563; }
    </style>
</head>
<body class="bg-gray-950 text-gray-200 min-h-screen flex items-center justify-center p-6 antialiased font-sans">
    @yield('content')
</body>
</html>