<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerEditarProduct.php");?>
    <div class="row">
        <form method="post" action="../controller/ControllerEditarProduct.php" id="form" name="form"  class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="name" name="name" value="<?php echo $editar->getname(); ?>" required autofocus>
                <input class="form-control" type="number" id="price" name="price" value="<?php echo $editar->getprice(); ?>" required>
               <input class="form-control" type="number" id="stored_id" name="stored_id" value="<?php echo $editar->getstored_id(); ?>" required> 
                <input class="form-control" type="number" id="category_id" name="category_id" value="<?php echo $editar->getcategory_id(); ?>" required>

            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getname();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>
      <script language="javascript" type="text/javascript">
     



        // function validar(formulario) {
        //     var quantidade = form.quantidade.value;
        //     var preco = form.preco.value;
        //     for (i = 0; i <= formulario.length - 2; i++) {
        //         if ((formulario[i].value == "")) {
        //             alert("Preencha o campo " + formulario[i].name);
        //             formulario[i].focus();
        //             return false;
        //         }
        //     }
        //     if (quantidade <= 0) {
        //         alert('A quantidade de páginas não pode ser igual ou inferior a 0');
        //         form.quantidade.focus();
        //         return false;
        //     }
        //     if (preco <= 0) {
        //         alert('O preço do livro não pode ser igual ou infeiror a 0');
        //         form.preco.focus();
        //         return false;
        //     }
        //     formulario.submit();
        // }

    </script>
</body>

</html>
