<?php
use App\Tarefa\TarefaDAO;

if (array_key_exists("btndelete", $_POST)) {
    $tdao = new TarefaDAO();
    $tdao->Delete();
    header("Refresh");
}
else if (is_int(array_key_first($_POST))) {
    $tdao = new TarefaDAO();
    $id = intval(array_key_first($_POST));
    $tdao->ChangeStatusById($id, 1);
    header("Refresh");
}

?>

<!DOCTYPE html>
<div class="col">
    <h1>Gerenciar Ativas 
        <form method="post">
            <button name="btndelete" type="submit" class="btn btn-danger"> Apagar tudo </button> 
        </form>
    </h1>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">

        <form method="post">
            <table class="table table-bordered table-striped mb-0">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $tdao = new TarefaDAO();
                    foreach ($tdao->Read() as $tarefas) {
                        if ($tarefas["status"] == 0) {
                            echo "<tr>
                            <td>{$tarefas['name']}</td>
                            <td>{$tarefas['description']}</td>
                            <td>{$tarefas['create_at']}</td>
                            <td> <center> <b> A Fazer </b> <center> <center> <button type='submit' class='btn btn-success' name='{$tarefas['id']}'> <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-pencil' fill='currentColor' xmlns='http://www.w3.org/2000/svg'> <path fill-rule='evenodd' d='M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z'/> <path fill-rule='evenodd' d='M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z'/> </svg> </center>  </td>
                            </tr>";
                        }
                    }
                    ?>
                
                </tbody>
            </table>
        </form>
    </div>
</div>