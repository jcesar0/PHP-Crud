<?php   
use App\Tarefa\Tarefa;
use App\Tarefa\TarefaDAO;

function newTarefa() {
    $name = strval($_POST["name"]);
    $description =  strval($_POST["description"]);

    if (empty($description) || empty($name)) return false;
    $tdao = new TarefaDAO();
    $tdao->Create(new Tarefa($name, $description));

    header("Location: reloc.php");
}

?>
<!DOCTYPE html>
<div class="col">
    <form action="<?php newTarefa(); ?>" method="post">
        <h1>Nova Tarefa</h1>
        
        <label for="name">Nome: </label> <br>
        <input type="text" name="name" required> <br>

        <label for="description">Descrição: </label> <br>
        <textarea name="description" cols="60" rows="2" required></textarea> <br>
                
        <button type="submit" class="btn btn-success">Adicionar</button>

    </form>
</div>