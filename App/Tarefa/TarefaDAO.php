<?php
namespace App\Tarefa;

use App\Connection;
use PDO;

class TarefaDAO implements iTarefa {
    public function Create(Tarefa $tarefa) {
        $sql = "INSERT INTO tarefas (name, description) VALUES (:name, :description)";
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(":name", $tarefa->getName());
        $stmt->bindValue(":description", $tarefa->getDescription());
        if ($stmt->execute()) return true;
        return false;
    }

    public function Read() {
        $sql = "SELECT * FROM tarefas";
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }

    public function Update(Tarefa $tarefa) {

    }

    public function Delete() {
        $sql = "DELETE FROM tarefas";
        $stmt = Connection::getConnection()->prepare($sql);
        if ($stmt->execute()) return true;
        return false;
    }

    public function ChangeStatusById(Int $id, Int $newStatus) {
        $sql = "UPDATE tarefas SET status = :status WHERE id = :id";
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(":status", $newStatus);
        $stmt->bindValue(":id", $id);
        if ($stmt->execute()) return true;
        return false;
    }

}