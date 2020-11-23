<?php

namespace todoList\controller\ControllerCadastro;

use DateTimeImmutable;


class Notas
{
    public $title;
    public $description;
    public DateTimeImmutable $date;


    public function __construct($title, $description, \DateTimeImmutable $date)
    {
        $this->title = $_POST['title'];
        $this->description = $_POST['description'];
        $this->date = $date;
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * @param DateTimeImmutable $date
     */
    public function setDate(DateTimeImmutable $date): void
    {
        $this->date = $date;
    }


}


