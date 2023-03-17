<?php
    //declarando as variáveis.

    $est = $_POST['estados'];
    $cid = $_POST['cidades'];
    $inst = $_POST['instituicao'];
    $gest = $_POST['gestor'];
    $pac = $_POST['paciente'];
    $cpf = $_POST['cpf'];
    $cpfNumberCheck = is_numeric($cpf);
    $cpfQntCheck = strlen($cpf);

    

    //iniciando lógica para verificar o CPF.

    if ($cpfNumberCheck == 1 and $cpfQntCheck == 11){
    
        echo json_encode("Estado: " . $est . "<br>" . "Cidade: " . $cid . "<br>" . "Instituicao: " . $inst . "<br>" . "Gestor: " . 
        $gest . "<br>" . "Paciente: " . $pac . "<br>" . "CPF: " . $cpf . "<br>");

    } else {
        echo "Erro, CPF inválido!";
    };   
?>