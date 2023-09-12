<?php $servidor="sql210.infinityfree.com";
       $usuario="if0_35019117";
       $senha="GQkhNFP4Rt";
       $dbname="if0_35019117_amadeuu";


       $conexao=mysqli_connect($servidor , $usuario , $senha , $dbname);
       if(!$conexao){
            die("Houve um erro:".mysqli_connect_error());
       } 
?>