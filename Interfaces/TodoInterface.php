<?php


interface TodoInterface

{
    public function add(TodoInsert $u);

    public function findAll();

    public function findById($id);

    public function update(TodoInsert $u);

    public function delete($id);
}