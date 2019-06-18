<?php

include "models/blogger.model.php";

class Bloggers {

    private $blogger;
    private $result;

    public function controleBlogger($pdo){
        if ($_SESSION) {
            $this->blogger = new Blogger();
            $this->result = $this->blogger->getInfosBlogger($pdo);
        }
        return $this->result;
    }
}

?>