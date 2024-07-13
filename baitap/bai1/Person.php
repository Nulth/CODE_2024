<?php
class Person
{
    private $name;
    private $yearOfBirth;
    private $address;

    public function __construct($name, $yearOfBirth, $address)
    {
        $this->name = $name;
        $this->yearOfBirth = $yearOfBirth;
        $this->address = $address;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getYearOfBirth()
    {
        return $this->yearOfBirth;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function tinhTuoi()
    {
        $currentYear = date("Y");
        return $currentYear - $this->yearOfBirth;
    }
}
