<?php 
        $result_usuarios = ("SELECT * FROM `msg_usu` WHERE `respondido` = 'N' ");
        $resultado_usuarios = mysqli_query($conexao, $result_usuarios);
        while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
            echo "Nome: " . $row_usuario['nome'] . "<br>";
            echo "E-mail: " . $row_usuario['email'] . "<br>";
            echo "Mensagem: " . $row_usuario['mensagem'] . "<br><hr>";
      
        }
        
      ?>