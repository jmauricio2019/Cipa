<?php
class Banco
{
    public function login()
    {
        if(isset($_POST['btn_entrar'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];

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
    }
    
}
 

 
?>