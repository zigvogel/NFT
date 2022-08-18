<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

// captura os dados via get
$id = $_GET['id'];
$tipo = $_GET['tipo'];
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><?php echo $produtos[$id]['Nome'];?></h1>
            <p><?php echo $produtos[$id] ['Descricao'];?></p>
            <img src="./content/<?php echo $produtos[$id]['Imagem'];?>">
            <h4>R$ <?php echo $produtos[$id]['Preco'];?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col">Voltar</div>
        <div class="col">Comprar</div>
    </div>
</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>