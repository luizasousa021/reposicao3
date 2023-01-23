<?php
    include("conexao.php");
   
	$nome = $_POST["nome"];
	$data_nasc = $_POST["data de nascimento"];
	$telefone = $_POST["telefone"];
	
	

			
	$result_alu= "INSERT INTO contato(nome, data nascimento,telefone )
					VALUES ('$nome',$data_nasc,$telefone)";
    $resultado_cli = mysqli_query($conn, $result_alu);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "contato salvo com sucesso";
            }else{
                echo "Erro ao cadastrar";
                    
                  
            }
 ?>           