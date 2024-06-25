<?php
class Category {
    public $type;
    public $description;
    public function __construct($type, $description) {
        $this->type= $type;
        $this->description= $description;
    }
}