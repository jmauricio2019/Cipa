<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIPA</title>
</head>

<style>
    body{
      background-color: #ffff99;
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
 <h2><p><u>SEGURANÇA EM PRIMEIRO LUGAR</u></p></h2>

<body>
    <fieldset id="chamado"><legend>Ocorrências</legend>
    <form action="#" name="gerador" method="POST">
        
        <p><label for="cusuario">Login:</label><input type="text" name="login" id="cUsuario" size="20" maxlength="30" placeholder="Usuario"/></p>
        <p><label for="cdata">Senha:</label><input type="text" name="senha" id="cNomedoJogo" size="20" maxlength="12"/></p>
       
        
                    	
            </select>
            <br>
    <input type="submit" style="font-size: 20px; background-color: #404040;  color: #e6e6e6;" name="btn_entrar" value="Entrar"><br><br><br>
            	 
    </form>
        
<?php
session_start();
if(isset($_POST['btn_entrar'])){
// session_start inicia a sessão

// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
try {
            $conecta= new PDO("mysql:host=127.0.0.1;port=3306;dbname=projeto_cipa","root","");
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dados=$conecta->query("SELECT * FROM  login");
            foreach ($dados as $linha){
                if($linha['usuario']==$login && $linha['senha']==$senha && $linha['tipo']=="A")
                {
                    $_SESSION['usuario']= $linha['usuario'];
                    header("location:admistrador.php");
                }
                if($linha['usuario']==$login && $linha['senha']==$senha && $linha['tipo']=="B")
                {
                    $_SESSION['usuario']= $linha['usuario'];
                    header("location:usuario.php");
                }
                }
                if($linha['usuario']!=$login || $linha['senha']!=$senha )
                {
                    echo '<script language="javascript">';
                    echo 'alert("Usuário ou senha Incorretos")';
                    echo '</script>';
                }
               
                
                    
                
        }//fecha try
        catch (PDOException $erro) 
        {
            echo "Nao posso fazer a pesquisa";
        }
        
}
?>
</body>
<p>Copyright &copy; 2020 - by Jose Mauricio and Raphael Acacio.</p>
</html>