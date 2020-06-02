<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
</head>

<style>
    body{
      background-color: #e6e6e6;
      font-size: 30px;
      color: #606060;
      display: block;
      width: 90%;
      height: 123px;
      margin: 0 auto;
    }   
    ul{
      font-size: 20px;
    }    
    a{
      color: #606060;
    }
    form {
        text-align:center;
    }
 
    </style>
    <div> <span style="float:right"><?php session_start();echo"o usuario é  ".$_SESSION['usuario'];?></span><br/></div>

 <h2><p><u>SEGURANÇA EM PRIMEIRO LUGAR</u></p></h2>
<body>
    

    <fieldset id="chamado"><legend>Ocorrências</legend>
    <form action="#" name="gerador" method="POST">

        
        <p><label for="cusuario">Nome Funcionário:</label><input type="text" name="tUsuario" id="cUsuario" size="20" maxlength="30" placeholder="Usuario"/></p>
        <p><label for="cdata">Data:</label><input type="date" name="tData" id="cNomedoJogo" size="20" maxlength="12"/></p>
        <p><label for="chora">Horario:</label><input type="time" name="tHora" id="cHora" size="5" maxlength="5" /></p>
        <p><label for="cChamado">Tipo de Ocorrências:</label>
            <select name="tChamado" id="cChamado">
		<optgroup label="">
                    <option value="imressora">Acidente com vítima</option>
                    <option value="terminal">Acidente com perda material</option>
                    <option value="senha">Incidente</option>
                    	
            </select>
            <br>
    <input type="submit" style="font-size: 20px; background-color: #404040;  color: #e6e6e6;" name="btn_gerar" value="Cadastrar Ocorrência"><br><br><br>
            	 
    </form>
<?php

?>
        

</body>
<p>Copyright &copy; 2020 - by Jose Maurico and Raphael Acacio.</p>
</html>

