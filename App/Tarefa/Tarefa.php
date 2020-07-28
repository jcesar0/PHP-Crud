<?php 
namespace App\Tarefa;

class Tarefa {
    private Int $id, $status;
    private String $name, $description;
    private String $create_at;

    public function __construct(String $name, String $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getDescription() { return $this->description; }
    public function getCreate_at() { return $this->create_at; }
    public function getStatus() { return $this->status; }

    public function setId($i) { $this->id = $i; } 
    public function setName($n) { $this->name = $n; } 
    public function setDescription($d) { $this->description = $d; } 
    public function setCreate_at($c) { $this->create_at = $c; } 
    public function setStatus($s) { $this->status = $s; } 

}