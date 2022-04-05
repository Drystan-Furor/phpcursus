<?php

class EscapeString
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function test_Input()
    {
        $this->data = trim($this->data);
        $this->data = stripslashes($this->data);
        $this->data = htmlspecialchars($this->data);
        return $this->data;
    }

    public static function from_Input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        //$data = mysqli_real_escape_string($connection, $data);
        return $data;
    }
}
