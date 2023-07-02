<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Izipay test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
       <!-- Javascript library. Should be loaded in head section -->
       <script
        src="https://static.micuentaweb.pe/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js"
        kr-public-key="{{$publicKey}}"
        kr-post-url-success="{{url('/api/register-payment')}}">
        </script>

        <link rel="stylesheet" href="https://static.micuentaweb.pe/static/js/krypton-client/V4.0/ext/classic-reset.css">
        <script src="https://static.micuentaweb.pe/static/js/krypton-client/V4.0/ext/classic.js">
        </script>
    </head>
    <body>
    <nav class="navbar navbar-light" style="background-color: #2AD2C9;">
        <div class="container-fluid mx-2 d-flex justify-content-center">
            <h1 style="color: #FFFFFF;">myShop</h1>
        </div>
    </nav>
    <main class="mx-5 h-70 d-flex flex-column" style="min-height: 100vh;">
        <h2 class="m-4 text-center">Checkout</h2>
        <div class="container my-3">
            <div class="container d-flex align-items-end flex-wrap">
                <img src="{{asset('images/product.png')}}" alt="Product" style="height: 200px;">
                <div>
                    <p class="m-0"><strong>Planta decorativa pequeña</strong></p>
                    <p>Qyt: 2</p>
                    <p>S/. 35</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container bg-light p-4 rounded">
                <h3>Resumen de compra</h3>
                <p>Planta decorativa pequeña x2</p>
                <p><strong>TOTAL</strong> S/.70</p>
                <div class="kr-embedded" kr-popin kr-form-token="{{$response['answer']['formToken']}}">

                    <!-- payment form fields -->
                    <div class="kr-pan"></div>
                    <div class="kr-expiry"></div>
                    <div class="kr-security-code"></div>

                    <!-- payment form submit button -->
                    <button class="kr-payment-button"></button>

                    <!-- error zone -->
                    <div class="kr-form-error"></div>
                </div>
            </div>
        </div>
    </main>
    </body>
</html>
