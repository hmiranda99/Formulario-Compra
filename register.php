<style>
    <?php include 'style.css'?>
</style>

<?php
    $nomeProduto= $_POST['nameProduct'];
    $categoriaProduto= $_POST['category'];
    $valorProduto= $_POST['price'];
    $descontoProduto= $_POST['discount'];
    $nomeComprador= $_POST['namePerson'];
    $cpfComprador= $_POST['idPerson'];

    $percentual= $valorProduto*$descontoProduto/100;
    $desconto= $valorProduto-$percentual;
?>

<?php
    echo('<main>
            <section class="resposta">
                <h2 class="color1">Detalhes da compra</h2>
                    <div class="linha">
                        <div class="coluna"><label>Produto: '.$nomeProduto.'</label></div>

                        <div class="coluna-resposta"><label>Categoria: '.$categoriaProduto.'</label></div>
                    </div>

                    <div>
                        <div class="coluna"><label>Valor do produto: </label></div> 
                        <div class="coluna-resposta"><label class="estilo-resposta color1">R$'.$valorProduto. '</label></div>

                        <div class="coluna"><label>Desconto do produto: </label></div> 
                        <div class="coluna-resposta"><label class="estilo-resposta color2">'.$descontoProduto.'%</label></div>

                        <div class="coluna"><label>Valor do desconto: </label></div> 
                        <div class="coluna-resposta"><label class="estilo-resposta color3">-R$'.$percentual.'</label></div>

                        <div class="coluna linha"><label>Valor a pagar: </label></div>
                        <div class="coluna-resposta linha"><label class="estilo-resposta color4">R$'.$desconto.'</label></div>
                    </div>

                    
                    <label>Nome do comprador: '.$nomeComprador.'</label>
                    <label>CPF do comprador: '.$cpfComprador.'</label>
                    
                    <img class="img-resposta" src="./images/code 1.svg">
            </section>
        </main>');
?>