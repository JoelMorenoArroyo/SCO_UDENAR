<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Maestra</title>
</head>
<body>
    <header>
        Header
    </header>

    @yield('content')

    <section>
        @yield ('morecontent')
    </section>
</body>
</html>