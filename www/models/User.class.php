<?php class User{

    private int $_id;
    private string $_firstName;
    private string $_lastName;
    private string $_email;
    private string $_password;
    private string $sex;
    public function _construct($id, $firstname, $lastname, $email, $password, $sex){

    }

    public function getId(){return $this->id;}
    public function getFirstName(){return $this->firstname;}
    public function getLastName(){return $this->lastname;}
    public function getEmail(){return $this->email;}
    public function getPassword(){return $this->password;}
    public function getSex(){return $this->sex;}
?>