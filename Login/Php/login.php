<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <style>
    
    @font-face {
        font-family: horaDia;
        src: url(../fuentes/HelpMe-Yz7Lq.ttf);
    }
    body{
        background:fixed url(../Fotos/Fondo-de-madera.jpg);
        background-size: cover;
    }
    .bg-trans{
        background-color: rgba(255, 255, 255, 0.267);
        backdrop-filter: blur(5px);
        height: 400px;
        width: 350px;
        border-radius: 10%;
        margin-top: 7%;

    }
    .bg-transp{
        background-color: rgba(255, 255, 255, 0.267);
        backdrop-filter: blur(5px);
        height: 400px;
        width: 800px;
        border-radius: 10px;
        margin-top: 7%;
    }
    .fs{
        font-family: login;
        font-size: 130px;
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
    .denegar{
       text-shadow:2px 2px 2px black;
        font-size: 19px;
        
    }
    pre{
        font-family: horaDia;
        color: white;
        text-align: center;
        margin-top:20px;
        font-size: 60px;
    }
    h3{
        font-family: login;
        color: white;
    }
    .boton1{
        margin-top: 50px;
        margin-left: 25px;
    }
    .boton2{
        margin-top: 50px;
        margin-left: 55px;
    }
    .boton3{
        margin-top: 50px;
        margin-left: 60px;
    }
    .CA{
        margin-top: 50px;
        margin-left: 20px;
    }
    .BA{
        margin-top: 50px;
        margin-left: 30px;
    }
    .ruta{
        margin-top: 100px;
        color: white;
    }
    .crear2{
        margin-top: 40px;
        color: white;
    }


</style>

</head>
<body>



<?php

    

    if (isset($_POST["Usuario"]) && $_POST["Usuario"]=="Admin" && isset($_POST["Contraseña"]) && $_POST["Contraseña"]=="1234" || isset($_POST["rutaActual"]) || isset($_POST["crear"])  || isset($_POST["BuscArch"])) {
        
        echo "<pre>".date("d/m/y")."</pre>";
        
        echo "<pre>".date("h:i:s")."</pre>";
    
    ?>
        
        <div class="content bg-transp mx-auto ">
            <div class="row ms-4">
                <div class="col-4"> 
                    <h3>Ruta Actual</h3>
                        <form action="login.php" method="post">
                            <div class="ruta ">
                                <?php
                                if( isset($_POST["rutaActual"])){
                                    echo getcwd();
                                }
                                ?>
                            </div>
                            <input class="boton1 bg-warning" type="submit" value="Ruta actual" name="rutaActual">
                        </form> 
                       
                </div>

                <div class="col-4"> 
                    <h3>Crear Archivo</h3>
                        <form action="login.php" method="post">
                        <input type="text" class="CA form-control w-50" placeholder="" name="textCrear">
                            <div class="Crear2">
                                <?php
                                if( isset($_POST["crear"])){
                                    $abrir=fopen($_POST["textCrear"], "a+");
                                    fwrite($abrir, "Hola Mundo");
                                    echo "El archivo ha sido creado.";   
                                    fclose($abrir);
                                }
                                ?>
                            </div>
                            <input class="boton2 bg-warning" type="submit" value="Crear" name="crear">
                        </form>
                </div>

                <div class="col-4"> 
                    <h3>Buscar Archivo</h3>
                    <form action="login.php" method="post">
                    <input type="text" class="BA form-control w-50" placeholder="" name="BuscArch">
                        <div class="Crear2 ms-3">
                                        <?php
                                        if( isset($_POST["BuscArch"])){
                                            $arch=scandir(getcwd());
                                            if (in_array($_POST["BuscArch"], $arch)) {
                                                echo "Archivo encontrado."; 
                                            }else{
                                                echo "Archivo no encontrado.";
                                            }
                                             
                                        }
                                        ?>
                                    </div>
                        <input class="boton3 bg-warning" type="submit" value="Buscar">
                    </form>
                </div>
            </div>
        </div>


<?php

    }else if ($usuario!="Admin" || $contraseña!="1234"){

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

        <form action="../Php/login.php" method="post">

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

            <div class="container mt-4 ms-4 text-danger"><p class="denegar">Usuario o contraseña no validos</p></div>

            <input class="boton mt-2 bg-warning" type="submit" value="Entrar">
            
        </form>

    </div>
</div>
<?php
}?>

</body>
</html>