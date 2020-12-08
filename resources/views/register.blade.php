<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body>

    @livewire('register')

    @livewireScripts
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
