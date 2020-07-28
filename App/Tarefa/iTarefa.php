<?php
namespace App\Tarefa;

interface iTarefa {
    public function Create(Tarefa $tarefa);
    public function Read();
    public function Update(Tarefa $tarefa);
    public function Delete();
    public function ChangeStatusById(Int $id, Int $newStatus);
}