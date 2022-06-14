<?php
include_once './conexao.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>
    <body>

        <h1>Cadastro de Produtos</h1>
        <?php
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($dados['gravaproduto'])) {
            //var_dump($dados);
            $empty_input = false;

            $dados = array_map('trim', $dados); // retira os espaçoe em branco antes e depois

            if (in_array("", $dados)) {
                $empty_input = true;

                echo"<pstyle='color:#f00;'>Erro:Necessário preencher todos campos!</p>";
            }


            if (!$empty_input) {
                $query_usuario = "INSERT INTO atividade(nome, descricao, preco, categoria)VALUES('" . $dados['nome'] . "','" . $dados['descricao'] . "','" . $dados['preco'] . "', '" . $dados['categoria'] . "')";
                $cad_produto = $conn->prepare($query_usuario);

                $cad_produto->execute();

                if ($cad_produto->rowCount()) {
                    echo"Produto cadastrado com sucesso!<br>";
                } else {
                    echo"Erro!<br>";
                }
            }

            
        }
        ?> 
        <form name="cad-produdo" method="POST" action"">

            <label>Nome: </label>
            <input type="text"name="nome"id="nome"placeholder="Nome Produto" ><br> <br>

            <label>Descrição: </label>
            <input type="text"name="descricao"id="descricao"placeholder="Descrição Produto"><br> <br>

            <label>Preço: </label>
            <input type="text"name="preco"id="preco"placeholder="Preço do Produto"><br> <br>

            <label>Categoria: </label>
            <input type="text"name="categoria"id="categoria"placeholder="Categoria do Produto"><br> <br>
            <input type="submit"value="gravar"name="gravaproduto">



        </form>



    </body>
</html>
