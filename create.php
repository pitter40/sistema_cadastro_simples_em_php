    <?php
    include_once "templates/header.php"
    ?>

    <div class="container" id="view-contact-container">

        <h1 id="main-title">Criando Contato</h1>

        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="nome"> Nome :</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>

            </div>

            <div class="form-group">
                <label for="subcelula">Subcelula:</label>
                <input type="text" class="form-control" id="subcelula" name="subcelula" placeholder="Digite a Subcelula" required>
            </div>

            <div class="form-group">
                <label for="patrimonio">Numero de patrimônio:</label>
                <input type="text" class="form-control" id="patrimonio" name="patrimonio" placeholder="Digite o patrimônio" required>
            </div>

            <div class="form-group">
                <label for="material">Tipo de material:</label>
                <input type="text" class="form-control" id="material" name="material" placeholder="Digite o tipo de material" required>
            </div>



            <div class="form-group">
                <label for="descricao">Descrição do material:</label>
                <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Insira as observações" rows="3"></textarea>
            </div>


            <div class="form-group">
                <label for="cautela">Cautela:</label>
                <input type="text" class="form-control" id="cautela" name="cautela" placeholder="Situação da cautela" required>
            </div>



            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>


    <?php
    include_once "templates/footer.php"
    ?>