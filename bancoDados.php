<?php
class Banco
{
    // valida login no banco
    public function login()
    {
        session_start();
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
                    echo 'alert("Usuário ou senha Incorreto")';
                    echo '</script>';
                }
                    
        }//fecha try
        catch (PDOException $erro) 
        {
            echo '<script language="javascript">';
            echo 'alert("Algum erro no banco")';
            echo '</script>';
        }       
        }
    }
    //cadastro de login
    public function Cadlogin()
    {
        if(isset($_POST['btn_cad'])){
        $name =$_POST['cx1'];
        $id =$_POST['cx2'];
        $login=$_POST['cx3'];
        $senha =$_POST['cx4'];
        if($_POST['tTipo']=="comum")
        {
           $tipo = "B"; 
        }else        
        {
           $tipo = "A";     
        }
                  
         try {
            $conecta= new PDO("mysql:host=127.0.0.1;port=3306;dbname=projeto_cipa","root","");
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $texto="INSERT INTO login(usuario,senha,tipo,nome,id)VALUE('".$login."','".$senha."','".$tipo."','".$name."','".$id."')";
            $conecta->exec($texto);
            echo '<script language="javascript">';
            echo 'alert("Dados salvos com sucesso ")';
            echo '</script>';
    
        } catch (PDOException $erro) {
            echo '<script language="javascript">';
            echo 'alert("Algum erro no banco")';
            echo '</script>';
        }
        }  
    }
    
}
 

 
?>