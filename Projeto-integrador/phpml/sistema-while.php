<?php
if($resultado == true){
    while ($registro = mysqli_fetch_assoc($resultado)) {
        $id = $registro['id'];
        $nome = $registro['nome'];
        $sobrenome = $registro['sobrenome'];
        $email = $registro['email'];
        $telefone = $registro['telefone'];
        $mensagem = $registro['mensagem'];
        $opcao = $registro['opcao'];
        $termo = $registro['termo'];
        echo "<li class='info-bd'>";
        echo "<div class='nome'>" . $nome . "</div>";
        echo "<div class='sobrenome'>" . $sobrenome . "</div>";
        echo "<div class='email'>" . $email . "</div>";
        echo "<div class='telefone'>" . $telefone . "</div>";
        echo "<div class='mensagem'>" . $mensagem . "</div>";
        echo "<div class='opcao'>" . $opcao . "</div>";
        echo "<div class='arquivar'>" . "<a href=../php/arquivar.php?id=$registro[id]\" onclick=\" return confirm('Tem certeza que deseja arquivar essa solicitação?')\"><img class='imagem-arquivo' src=../img/icons/arquivar.png></a>" . "</div>";
        echo "</li>";
    }
}
?>