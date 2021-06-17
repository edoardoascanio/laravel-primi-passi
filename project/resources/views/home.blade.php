<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>home</title>
</head>

<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: Arial, Helvetica, sans-serif;
    }
    
    a{
        text-decoration: none;
        color: gray;
        margin: 10px;
    }

    input, button{
        border-radius: 8px;
    }
</style>

<body>
    <h1>HOMEPAGE</h1>
    <h3>Hello World!</h3>

    <div class="link">
        <a href="{{ route('info') }}">Info</a>
        <a href="{{ route('contacts') }}">Contatti</a>

        <input type="text"> <button>Cerca</button>
    </div>
</body>

</html>