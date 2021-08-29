<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <section class="section-img">
            <img class="img-inicial" src="./images/bg2 1.svg">
        </section>
        <section class="section-form">
            <form METHOD="POST" action="register.php">
                <h2 class="color1">Formulário de compra</h2>

                <div class="linha">
                    <label>Nome do produto</label>
                    <input required type="text" id="nameProduct" name="nameProduct" placeholder="Digite o nome do produto">
                    <div class="line-input"></div>
                </div>

                <div class="linha">
                    <label>Categoria</label>
                    <select required id="category" name="category">
                        <option value="selection">Selecione</option>
                        <option value="eletronicos">Eletrônicos</option>
                        <option value="livros">Livros</option>
                        <option value="ultiDomesticas">Ultilidades domésticas</option>
                    </select>
                    <div class="line-input"></div>
                </div>

                <div class="linha">
                    <div class="coluna">
                        <label>Valor</label>
                        <input required type="number" id="price" name="price" placeholder="R$">
                        <div class="line-input"></div>
                    </div>

                    <div class="coluna">
                        <label>Desconto</label>
                        <input required type="number" id="discount" name="discount" placeholder="%">
                        <div class="line-input"></div>
                    </div>
                </div>

                <div class="linha">
                    <label>Nome do comprador</label>
                    <input required type="text" id="namePerson" name="namePerson" placeholder="Digite o nome do comprador">
                    <div class="line-input"></div>
                </div>

                <div class="linha">
                    <label>CPF do comprador</label>
                    <input onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" required type="text" id="idPerson" name="idPerson" placeholder="Digite o CPF do comprador">
                    <div class="line-input"></div>
                </div>

                <input class="button" type="submit" value="Finalizar compra">
            </form>
        </section>
    </main>
</body>

<script type="text/javascript">
    function fMasc(objeto, mascara) {
        obj = objeto
        masc = mascara
        setTimeout("fMascEx()", 1)
    }

    function fMascEx() {
        obj.value = masc(obj.value)
    }

    function mCPF(cpf) {
        cpf = cpf.replace(/\D/g, "")
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
        cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
        return cpf
    }
</script>



</html>