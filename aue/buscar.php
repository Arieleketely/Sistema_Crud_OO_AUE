<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Formulario de Contato</title>
        <link rel="stylesheet" type="text/css" href="boostrap/bootstrap.min.css" media="screen" />
    </head>
    <body>
        <h1>Buscar para deletar:</h1>
        <br><br>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            
            unset($_SESSION['msg']);
        }
        ?>
        <form style='margin:10px';method="POST" action="excluir.php" style='margin:10px';>
        <div class="form-row">
        <div class="form-group col-md-3">
            <label>Id: </label>
            <input class="form-control"  type="text" name="idcontato" placeholder="Inserir o id completo"><br><br>
            </div>
            </div>
            
            <input class="btn btn-danger" name="SendCadCont" type="submit" value="Excluir"  style='margin:2px';>
</form>
    </body>
    <style>
    body{
        background:  url("Img/fundo.png") no-repeat;
        background-size:cover;
        color: #ffffff;
}
    }
    </style>
</html>
