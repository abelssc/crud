<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            max-width: 800px;
            background-color: #f2f2f2;
            margin: 100px auto;
            padding: 2rem;
        }
        form{
            display: flex;
            flex-direction: column;
            gap: .5rem;
            width: 100%;
        }
        .danger{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield("content")
    </div>
</body>
</html>