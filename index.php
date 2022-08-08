<?php
session_start();
$usuario;
if (isset($_SESSION['usuario'])) :
    $usuario = unserialize($_SESSION['usuario']);
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script defer src="./public/js/util.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./public/css/util.css">
    <title>DrogaKova</title>
</head>

<body>
    <nav class="blue darken-3">
        <div class="nav-wrapper">
            <?php
            if (isset($_SESSION['usuario'])) {
                echo "
                    <a href='./controller/user_logout.php'>Logout</a>
                ";
            }
            ?>
            <img class="brand-logo center" src="./public/img/DrogaKova.png" alt="" srcset="">
        </div>
    </nav>
    <div class="row">
        <div class="container">
            <div class="card-panel teal center-align">
                <?php
                if (isset($_SESSION['usuario'])) {
                    echo "<span class='green-text'>Seja bem vindo, Aproveite o nosso estoque agora que você está logado!!</span>";
                } else {
                    echo "<span class='white-text'>Bem vindo a DrogaKova, o local onde você irá encontrar seus melhores medicamentos por um preço
                            acessível.</span>";
                }
                ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="carousel carousel-slider center">
                    <div class="carousel-item blue white-text utilCarouselBackground center-align" href="#one!">
                        <div class="card-panel blue darken-2">
                            <h2>O quê você poderá fazer aqui?</h2>
                            <p class="white-text">Aqui você poderá encomendar ou fazer um pré pagamento dos nosso items.
                                Siga mais informações nesse painel interativo. Arraste para o lado -->
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item blue white-text utilCarouselBackground" href="#two!">
                        <div class="card-panel blue darken-2">
                            <h2>Como encomendar conosco?</h2>
                            <p class="white-text">Você pode ligar para o número (xx) xxxxxxxxx ou clicar no botão abaixo:</p>
                            <a class="btn cyan waves-effect" href="#!">Encomende por e-mail</a>
                        </div>
                    </div>
                    <div class="carousel-item blue white-text utilCarouselBackground" href="#three!">
                        <div class="card-panel blue darken-2">
                            <h2>Entre nossos conteúdos estão:</h2>
                        </div>
                        <div class="row">
                            <div class="col s4">
                                <div class="card-panel blue darken-2">
                                    <span class="white-text"> medicamentos
                                    </span>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="card-panel blue darken-2">
                                    <span class="white-text"> produtos de higiene e limpeza
                                    </span>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="card-panel blue darken-2">
                                    <span class="white-text"> produtos correlatos
                                    </span>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="card-panel blue darken-2">
                                    <span class="white-text"> cosméticos
                                    </span>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="card-panel blue darken-2">
                                    <span class="white-text"> perfumes
                                    </span>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="card-panel blue darken-2">
                                    <span class="white-text"> produtos médicos e para diagnóstico in vitro
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card-panel blue darken-2 center-align teal">
                <span class="white-text">
                    <h6>Registro Rápido:</h6>
                </span>
            </div>
        </div>
        <div class="container">
            <div class="row teal accent-4">
                <div class="col s12 m6">
                    <div class="container center-align">
                        <span class="white-text">
                            <h6>Registro</h6>
                        </span>
                        <?php
                        if (isset($_GET['validation'])) {
                            echo "<span class='red-text'><b>{$_GET['validation']}</b></span>";
                        }
                        ?>
                        <form method="POST" action="controller/user_controll.php" class="col s12">
                            <div class="row">
                                <div class="input-field col s12 m6">
                                    <input name="fName" class="white-text" id="first_name" type="text" class="validate" required>
                                    <label class="white-text" for="first_name">Primeiro Nome:</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <input name="lName" class="white-text validate" id="last_name" type="text" required>
                                    <label class="white-text" for="last_name">Ultimo Nome:</label>
                                </div>
                                <div class="input-field col s12">
                                    <input name="email" id="email" type="email" class="validate white-text" required>
                                    <label class="white-text" for="email">Email</label>
                                </div>
                                <div class="input-field col s12">
                                    <input name="password" id="password" type="password" class="validate white-text" required>
                                    <label class="white-text" for="password">Password</label>
                                </div>
                                <button type="submit" class="btn waves-effect">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col s12 m6 center-align">
                    <span class="white-text">
                        <h6>Logar</h6>
                    </span>
                    <?php
                    if (isset($_GET['log'])) {
                        echo "<span class='red-text'><b>{$_GET['log']}</b></span>";
                    }
                    ?>
                    <form method="POST" action="./controller/user_logged.php" class="col s12">
                        <div class="input-field col s12">
                            <input name="email" id="email2" type="email" class="validate white-text" required>
                            <label class="white-text" for="email2">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <input name="password" id="password2" type="password" class="validate white-text" required>
                            <label class="white-text" for="password2">Password</label>
                        </div>
                        <button type="submit" class="btn waves-effect">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>