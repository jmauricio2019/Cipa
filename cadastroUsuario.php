<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link rel="stylesheet" type="text/css"href="_css/estilo.css"/>	
    <link rel="stylesheet" href="_css/fotos.css">
</head>

    <div> <span style="float:left"><?php session_start();echo" ".$_SESSION['usuario'];?></span><br/></div>

<body>
        <header id="cabecalho">
        <img id="icone" src="_imagens/logocipa.png" />

        <h2><p><u>SEGURANÇA EM PRIMEIRO LUGAR</u></p></h2>

        </header>
    
    <fieldset id="chamado"><legend>Cadastrar</legend>
        
    </form>
    <form action="#" name="gerador" method="POST">
    
        <p><label for="cFuncionario">Nome:</label><input type="text" name="cx1" id="cFuncionario" size="20" maxlength="30" placeholder="Funcionário"/></p>
        <p><label for="cMatricula">    ID:</label><input type="number" name="cx2" id="cMatricula" size="20" maxlength="30" placeholder="Matrícula"/></p>
        <p><label for="cLogin">Login:</label><input type="text" name="cx3" id="cLogin" size="20" maxlength="30" placeholder="Login"/></p>
        <p><label for="cSenha">Senha:</label><input type="text" name="cx4" id="cSenha" size="20" maxlength="30" placeholder="senha"/></p>
        <p><label for="cTipo">Tipo Usuario:</label>
            <select name="tTipo" id="cChamado">
		<optgroup label="">
                    <option value="comum">Usuario Padrão</option>
                    <option value="admin">Usuario Administrador</option>	
            </select></p>
        <input type="submit" style="font-size: 20px; background-color: #404040;  color: #e6e6e6;" name="btn_cad" value="Cadastrar"><br>

    </form>
<?php
    include("bancoDados.php");
    $tempcad = new Banco();
    $tempcad->Cadlogin();
?>
    
        
</body>
<br>
</fieldset>
<p>Copyright &copy; 2020 - by Jose Mauricio and Raphael Acacio.</p>
</html>

