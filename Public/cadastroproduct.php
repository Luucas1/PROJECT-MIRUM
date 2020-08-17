<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../Controller/ControllerCadastroProduct.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="name" name="name" placeholder="Name" required autofocus>
                <input class="form-control" type="number" id="price" name="price" placeholder="Price" onkeypress="formatarMoeda();" required>
                <input class="form-control" type="number" id="stored_id" name="stored_id" placeholder="stored_id" required>
                <input class="form-control" type="number" id="category_id" name="category_id" placeholder="category_id"  required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>

    <script language="javascript" type="text/javascript">
        function formatarMoeda() {
            var elemento = document.getElementById('preco');
            var valor = preco.value;

            valor = valor + '';
            valor = parseInt(valor.replace(/[\D]+/g, ''));
            valor = valor + '';
            valor = valor.replace(/([0-9]{2})$/g, ",$1");

            if (valor.length > 6) {
                valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
            }

            elemento.value = valor;
        }

    </script>
</body>

</html>
