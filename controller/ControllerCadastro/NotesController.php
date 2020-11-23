<?php

namespace todoList\controller\ControllerCadastro;

$notesRepository = include '../../model/NotesRepository.php';

$title = $_POST["title"];
$description = $_POST["description"];
$data = date("d-m H:i");


$criarNota = $notesRepository->Inserir($title, $description, $data);

var_dump($criarNota);





