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
        <h1>Cadastrar Mensagem</h1>
        <br><br>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            
            unset($_SESSION['msg']);
        }
        ?>
        <form style='margin:10px';method="POST" action="proc_edit_contatos.php" style='margin:10px';>
        <div class="form-row">
        <div class="form-group col-md-3">
        <label>Id: </label>
            <input class="form-control"  type="text" name="idcontato" placeholder="Inserir o Id completo"><br><br>
          
            <label>Nome: </label>
            <input class="form-control"  type="text" name="nome" placeholder="Inserir o nome completo"><br><br>
          
            <label>Sexo: </label>
            <input class="form-control"  type="text" name="sexo" placeholder="Seu  sexo"><br><br>            
              </div>
              </div>
             
              <label>Cidade: </label>
            <input class="form-control"  type="text" name="cidade" placeholder="Sua cidade"><br><br>            
              </div>
            <input class="btn btn-primary" type="submit" value="Alterar"  style='margin:2px';>
        </form>
        <br>
        <form method="POST" action="list.php">  
        
            <input class="btn btn-primary" name="SendCadCont" type="submit" value="Consultar e deletar"  style='margin:10px';>
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
