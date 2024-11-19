<?php

class Button {
    public $text;

    public function __construct($text) {
        $this->text = $text;
    }

    public function __toString() {
        $style = "
            background-color: #8071ff; 
            color: #fff; 
            padding: 10px 20px; 
            border-radius: 5px;
        ";

        return "<button style='{$style}'>{$this->text}</button>";
    }
}

class Input {
    public $type = 'text';

    public function __construct($type) {
        $this->type = $type;
    }

    public function __toString() {
        $style = "
            border: 1px solid #ccc;
            padding: 5px;
        ";

        return "<input type='{$this->type}' style='{$style}'>";
    }
}

?>