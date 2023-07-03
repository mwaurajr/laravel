<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Test</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            margin: 0;
            padding: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;

        }

        .site-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            margin: 0;
            padding: 20px 0;
        }

        .post-title {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            text-transform: capitalize;
            margin-bottom: 10px;
        }

        .post-body {
            font-size: 16px;
            color: #333;
            line-height: 1.5;
            padding-right: 20px
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="site-title">My Test</h1>
    <h1>Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</div>
</body>
</html>
