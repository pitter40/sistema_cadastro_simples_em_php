 <?php
    include_once "templates/header.php"
    ?>

 <div class="container" id="view-equipamento-container">

     <h1 id="main-title">Editar equipamento</h1>

     <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
         <input type="hidden" name="type" value="edit">
         <input type="hidden" name="id" value="<?= $equipamento["id"] ?>">

         <div class="form-group">
             <label for="name"> Nome :</label>
             <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" value="<?= $equipamento["nome"] ?>" required>

         </div>

         <div class="form-group">
             <label for="subcelula">Subcelula:</label>
             <input type="text" class="form-control" id="subcelula" name="subcelula" placeholder="Digite da subcelula" value="<?= $equipamento["subcelula"] ?>" required>
         </div>

         <div class="form-group">
             <label for="patrimonio">Numero de patrimônio:</label>
             <input type="text" class="form-control" id="patrimonio" name="patrimonio" placeholder="Digite o numero de  patrimonio" value="<?= $equipamento["patrimonio"] ?>" required>
         </div>

         <div class="form-group">
             <label for="material">Tipo de material:</label>
             <input type="text" class="form-control" id="material" name="material" placeholder="Digite o tipo de material" value="<?= $equipamento["material"] ?>" required>
         </div>


         <div class="form-group">
             <label for="cautela">Cautela:</label>
             <input type="text" class="form-control" id="cautela" name="cautela" placeholder="Digite situação da cautela" value="<?= $equipamento["cautela"] ?>" required>
         </div>



         <div class="form-group">
             <label for="descricao"> Observação:</label>
             <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Insira as observações" rows="3"><?= $equipamento["descricao"] ?></textarea>
         </div>






         <button type="submit" class="btn btn-primary">Atualizar</button>
     </form>
 </div>


 <?php
    include_once "templates/footer.php"
    ?>