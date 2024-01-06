<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" href="/img/icon.ico">
    <style>
        * {
            font-family: Poppins;
        }

        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 367px;
            background-color: rgba(59, 75, 101, 1);
            position: fixed;
            height: 100%;
            overflow: auto;
            border: 1px white;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 16px;
            text-decoration: none;
            border: 1px white;
        }

        .sidebar a.active {
            background-color: rgba(27, 119, 160, 1);
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 390px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }

        .tabel-aktif {
            background-color: rgba(59, 75, 101, 1);
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            color: white;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .tabel-mati {
            background-color: rgba(217, 217, 217, 1);
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            color: rgba(94, 94, 94, 1);
            padding-top: 15px;
            padding-bottom: 15px;
        }
    </style>
</head>

<body>
    @include('partials.sidebar')
    @yield('container')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
