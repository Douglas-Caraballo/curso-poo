<?php

class User extends Account{
    public function __construct($name, $document, $email, $password){
        parent::__construct($name,$document,$email,$password);
    }
    public function printDataUser(){
        echo "user";
        echo "<br>";
        echo "name: $this->name ,
            document: $this->document ,
            E-mail: $this->email ,
            Password: $this->password";
    }
}
