<?php


class TodoInsert
{

    private int $id;
    private string $title;
    private string $description;
    private $status;
    private $date;

    public function getId(): int
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }


    public function setTitle(string $tile): void
    {
        $this->title = $tile;
    }


    public function getDescription(): string
    {
        return $this->description;
    }


    public function setDescription($description): void
    {
        $this->description = $description;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date): void
    {
        $this->date = $date;
    }


    public function getStatus(): int
    {
        return $this->status;
    }


    public function setStatus(mixed $status): void
    {
        $this->status = $status;
    }


}

