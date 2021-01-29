<?php include('backend\validate.php') ?>
<center>
    <div id="login-form">
        <form id="formulario" method="post">
            <table align="center" width="30%" border="0">
                <?php
                if (isset($error)) {
                ?>
                    <tr>
                        <td id="error"><?php echo $error; ?></td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td>
                        <label for="exampleInputEmail1">Email address</label>
                        <input id="email" class="input" type="text" name="email" placeholder="example@gmail.com" />
                        <p id="error_email" class="ocultar_error">El email no tiene un formato correcto.</p>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="exampleInputPassword1">Password</label>
                        <input id="pass" class="input" type="password" name="pass" placeholder="Your Password" />
                        <p id="error_pass" class="ocultar_error">La contraseña tiene que ser de 5 o más digitos.</p>

                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="btn-signup">Log In</button></td>
                </tr>
                <tr>
                    <td>
                        <div class="formulario__mensaje" id="formulario__mensaje">
                            <p> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                        </div>
                    </td>



                </tr>
                <!-- <tr>
                    <td>
                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                    </div>
                    </td>
                
                </tr> -->
            </table>

        </form>
    </div>
</center>