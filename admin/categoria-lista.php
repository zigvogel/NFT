<?php
// conexao com banco de dados 

include_once '../includes/_banco.php';

// includes do arquivo do head

include_once '_header.php';

// SQL de consulta
$sql = "SELECT * FROM categorias";

// executa de consulta de dados (variavel de conexao d dados, variavel de sql de consulta)

$resultado = mysqli_query($conn,$sql);

// conta quantos registros existem 

$total = mysqli_num_rows($resultado);

//incue o menu na pagina

include_once '_menu.php';

?>

<main> 

<h2> administracao das categorias </h2>

<a herf = "categorias-salvar.php">inserir</a>
<hr>

<table border="1">

<tr> 

<th> ID </th>

<th> nome </th>

<th> acoes </th>

</tr>

<?php

// verficar se existe informacoes no banco de dados

if ($resultado) {
    // converter os resultados em uma linha da matriz
while ($dado = mysqli_fetch_array($resultado)) {
?>

<tr>

<td> <?php echo $dado['CategoriaID'];?>  </td>
<td> <a herf = "catergoria-salvar.php?acao=salvar&id=<?php echo $dado['CategoriaID']; ?>"><?php echo $dado['Nome'];?></a>  </th>

<td> <a herf = "categoria-processa.php?acao=excluir&id=<?php echo $dado['CategoriaID'];?>">Excluir</a> </th>

</tr>

<?php
} }

?>

</table>




</main>