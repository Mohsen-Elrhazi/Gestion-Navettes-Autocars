<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield("title") </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="{{ asset('css/Auth/auth.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">

        <div class="form-wrapper">

            @yield("form")

        </div>
    </div>

    </script>
</body>

</html>