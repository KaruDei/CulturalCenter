<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources\css\app.css', 'resources\js\app.js'])
</head>
<body class="h-full bg-slate-800">
    <div class="flex flex-col h-full">

        <header class="flex justify-center items-center h-16 bg-slate-900 text-white">
            <p>header</p>
        </header>
        
        <main class="flex flex-auto justify-center items-center text-white">
            {{ $slot }}
        </main>
        
        <footer class="flex justify-center items-center h-16 bg-slate-900 text-white">
            <p>footer</p>
        </footer>   
    </div>
</body>
</html>


