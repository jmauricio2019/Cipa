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
    
    <fieldset id="chamado"><legend>Cadastros</legend>
     <br>
    </form>
    <a href="cadastroUsuario.php"><button style="background:  #404040; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size:20px;">Usuários</button></a>        	        	 
    <a href="cadastroOcorrencias.php"><button style="background:  #404040; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size:20px;">Ocorrências</button></a> 
    <br>   	        	 
    </form>

</body>
<br>
</fieldset>
<p>Copyright &copy; 2020 - by Jose Maurico and Raphael Acacio.</p>
</html>

