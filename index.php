<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>
<div class="container">
    <h2>Promoção</h2>
    <div class="row mt-5">
        <?php
        $sql = "SELECT * from produtos where ativo = 1";
        //executa o comando sql
        $exec = mysqli_query($conn,$sql);
        //informar a quantidade de registro de dados
        $numProdutos = mysqli_num_rows($exec);

        
        // laco de repeticao para exibir os 3 primeiros produtos
        while ($dados = mysqli_fetch_assoc($exec)) 
           {
        ?>
        <div class="card m-3" style="width: 18rem;">
            <img src="./content/<?php echo $dados['Imagens'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dados['Nome'];?></h5>
                <p class="card-text"><?php echo $dados['Descricao'];?></p>
                <a href="produto-detalhe.php?id=<?php echo $dados['ProdutoID'];?>&tipo=promocao" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>    
</div>

<?php
        
// include do footer
include_once './includes/_footer.php';
?>