<?php

class User
{
   private $id;
   private $name;
   private $surname;
   private $email;
   private $address;
   
   public function __construct()
   {
       $this->id=-1;
       $this->name='';
       $this->surname='';
       $this->email='';
       $this->address='';
   }
   
   public function setName($name) {
       if (trim($name)!='') {
        $this->name=trim($name);
       } else {
           echo 'Imię nie może być puste';
       }
   }
   public function setSurname($surname) {
       if (trim($surname)!='') {
        $this->surname=trim($surname);
       } else {
           echo 'Nazwisko nie może być puste';
       }
   }
   public function setEmail($email) {
       if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $this->email=filter_var($email,FILTER_VALIDATE_EMAIL);
       }
   }
   public function setAddress($address) {
       $this->address=$address;
   }
   public function getId() {
       return $this->id;
   }
   public function getName() {
       return $this->name;
   }
   public function getSurname() {
       return $this->surname;
   }
   public function getEmail() {
       return $this->email;
   }
   public function getAddress() {
       return $this->address;
   }
}
