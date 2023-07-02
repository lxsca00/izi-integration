<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" contengit branch -M maint="width=device-width, initial-scale=1.0">
    <title>Pago exitoso</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
        <h1 class="text-center my-5">El pago se realizo correctamente</h1>
        <button class="btn" onClick="location.href='{{url('/')}}'" style="background-color: #2AD2C9;">
            Volver al checkout
        </button>
    </div>
</body>
</html>
