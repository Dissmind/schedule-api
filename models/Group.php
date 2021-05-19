<?php


class Group {
    public $id = null;
    public $name = null;
    public $year_at = null;

    public function __construct($id, $name, $year_at) {
        $this->id = $id;
        $this->name = $name;
        $this->year_at = $year_at;
    }
}