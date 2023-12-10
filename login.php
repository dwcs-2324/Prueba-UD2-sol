<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container-fluid">
        <h1>Inicio de sesión</h1>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">
                <form method="post">
                    <!-- Email input -->
                    <div class="form-group mb-4 ">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" class="form-control" name="email" required />

                    </div>

                    <!-- Current Password input -->
                    <div class="form-group mb-4">
                        <label class="form-label" for="currentPwd">Contraseña</label>
                        <input type="password" id="currentPwd" class="form-control" name="pwd" required />

                    </div>

                    <!-- Submit button -->
                    <input type="submit" class="btn btn-primary btn-block mb-4" value="Iniciar sesión"></button>


                </form>

                <?php



                $usuarios = array(
                    "user1@edu.es" => array("pwd1" => "abc123.", "pwd2" => "abc321."),
                    "user2@edu.es" => array("pwd1" => "cba123.", "pwd2" => "cba321.")
                );


                const USER_DOES_NOT_EXIST = "No existe usuario";
                const PWD_INCORRECT = "La contraseña no es correcta";



                //Completar
                require_once 'util.php';
                $errors = array();

                if (isset($_POST["email"], $_POST["pwd"])) {
                    $email = $_POST["email"];
                    $pwd = $_POST["pwd"];
                    if (!existe_usuario($email, $usuarios)) {
                        array_push($errors, USER_DOES_NOT_EXIST);
                    } elseif (!es_pwd_correcta($email, $pwd, $usuarios)) {
                        array_push($errors, PWD_INCORRECT);
                    } else {
                        //validado correctamente
                        ?>

                        <div class="alert alert-success" role="alert">
                            Se ha iniciado sesión correctamente
                        </div>
                    <?php

                    }

                    foreach ($errors as $error) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error;
                            ?>
                        </div><?php
                            }
                        }

                                ?>







            </div>
        </div>
    </div>


</body>

</html>