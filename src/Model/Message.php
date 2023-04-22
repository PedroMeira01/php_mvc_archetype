<?php 

namespace PHPMVCArchetype\Model;

class Message {
    private $message;

    public function __construct(string $message) {
        $this->message = $message;
    }

    public function print() {
        echo "$this->message";
    }
}