$id = $_POST['id'];
$nome = $_POST['nome'];
$valor = $_POST['valor'];

$sql = "UPDATE produtos SET nome = '$nome', valor = '$valor' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Produto atualizado com sucesso!";
} else {
    echo "Erro ao atualizar o produto: " . mysqli_error($conn);
}


/*
$host = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_banco";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
*/

<form action="atualizar_produto.php" method="POST">
    ID do produto: <input type="text" name="id"><br>
    Novo nome: <input type="text" name="nome"><br>
    Novo valor: <input type="text" name="valor"><br>
    <input type="submit" value="Atualizar">
</form>
