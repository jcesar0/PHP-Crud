<!DOCTYPE html>
<div class="col">
    <h1>Lista Completa</h1>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
        <table class="table table-bordered table-striped mb-0">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>
            
            <tbody>
                <?php use App\Tarefa\TarefaDAO;
                $tdao = new TarefaDAO();
                foreach ($tdao->Read() as $tarefas) {
                    $statusClass = "bg-danger";

                    if ($tarefas["status"] != 0) $statusClass = "bg-success";
                    echo "<tr class='{$statusClass}'>
                    <td>{$tarefas['name']}</td>
                    <td>{$tarefas['description']}</td>
                </tr>";
                }
                ?>
            
            </tbody>
        </table>

    </div>
</div>