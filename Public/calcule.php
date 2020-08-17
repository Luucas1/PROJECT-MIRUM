<?php
if (isset($_POST['enviar'])):
    $aluno = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;


    echo "Olá " . $aluno ." suas notas foram: <br>"
        ."Primeiro Bimestre: " . $nota1 . "<br>"
        ."Segundo Bimestre: " . $nota2 . "<br>"
        ."Terceiro Bimestre: " . $nota3 . "<br>"
        ."Quarto Bimestre: " . $nota4 . "<br>"
        ."Sua média final é " . $media . " - ";

    if ($media >= 7):
        echo "Aluno Aprovado!";
    elseif (($media < 7) && ($media >= 5)):
        echo "Aluno em Exame!";
    else:
        echo "Aluno Reprovado!";
    endif;
endif;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculo de Notas</title>
    </head>
    <body>
        <form method="post" action="../controller/ControllerEditarStored.php" id="form" name="form"  class="col-10">
            <label>Nome: </label>
            <input name="nome" type="text">
            <br>
            <label>Nota 1</label>
            <input name="nota1" type="text">
            <br>
            <label>Nota 2</label>
            <input name="nota2" type="text">
            <br>
            <label>Nota 3</label>
            <input name="nota3" type="text">
            <br>
            <label>nota4</label>
            <input name="nota4" type="text">
            <br>
            <button type="submit" name="enviar">
                Verificar Nota
            </button>
            <button type="reset">Limpar</button>
        </form>
    </body>
</html>