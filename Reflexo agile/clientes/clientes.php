<?php

$servidor = '';
$porta = '';
$usuario ='';
$senha =''; 
$dados = '';

$conexao = new mysqli ($servidor, $port, $usuario,$senha,$dados);
if($conexao = mysqli_connect_error()){
    die ('não foi possivel ');
}
else{
    echo "banco de dados conectado";
}
$submit = $_POST[''];

$conexaoregistro = $conexao -> prepare ("insert into and values(?)");
if{
    die("tentativa não foi concluida, tenta novamente". $conexao->error);
}
else{
    echo ("otimo, obrigado!")
}
$conexaoregistro->close();
$conexao -> close();

?>