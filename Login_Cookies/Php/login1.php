<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<style>
    body{
        background:fixed url(../Fotos/Fondo-de-madera.jpg);
        background-size: cover;
    }
    .fs{
        font-family: login;
        font-size: 130px;
    }
    .bg-trans{
        background-color: rgba(255, 255, 255, 0.267);
        backdrop-filter: blur(5px);
        height: 360px;
        width: 350px;
        border-radius: 10%;
        margin-top: 7%;

    }
    .imagen{
        margin-top: -110px;
    }
    .boton{
    margin-left: 40%;
    border-radius: 10%;
    background-color: rgb(252, 195, 79);
    }
    .username{
        background-color: rgb(252, 195, 79);
    }
    .password{
        background-color: rgb(252, 195, 79);
    }

    
</style>

</head>

<body>
    <?php
    session_start();
    session_destroy();
    ?>
    <div class="container-fluid">

        <div class="content text-white text-center mt-3">
            <h1 class="fs text-warning">LOGIN</h1>
        </div>

        <div class="content bg-trans mx-auto ">
            <div class="content text-white text-center">
                <img class="imagen"
                    src="../Fotos/61263271-cuenta-de-usuario-perfil-del-icono-del-círculo-plana-para-aplicaciones-y-sitios-web-removebg-preview.png"
                    alt="" height="200px" width="200px">
            </div>

            <form action="login.php" method="post">

                <div class="input-group flex-nowrap w-75 mt-3 mx-auto">
                    <span class="input-group-text bg-warning" id="addon-wrapping"><img
                            src="../Fotos/61263271-cuenta-de-usuario-perfil-del-icono-del-círculo-plana-para-aplicaciones-y-sitios-web-removebg-preview.png" alt=""
                            height="25px" width="25px"></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="Usuario"
                        aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap w-75 mt-5 mx-auto">
                    <span class="input-group-text bg-warning" id="addon-wrapping"><img src="../Fotos/3064155.png" alt=""
                            height="25px" width="25px"></span>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="Contraseña"
                        aria-describedby="addon-wrapping">
                </div>

                <input class="boton mt-5 bg-warning" type="submit" value="Entrar">
                
            </form>

        </div>
    </div>

</body>

</html>