<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptek</title>
    <meta name="csrf-token" content=<?php $token = csrf_token();
                                    echo $token; ?> />
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="js/main.js" type="module"></script>
</head>

<body>
    <div class="tablazathelye"></div>
</body>

</html>