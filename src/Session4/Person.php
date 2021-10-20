<?php

//overriding property accesses

class Person
{
    private array $__data = [];

    public function __get(string $property)
    {
//        if (isset($this->__data[$property])) {
//            return $this->__data[$property];
//        } else {
//            return false;
//        }

        //php 7.3
        return $this->__data[$property] ?? false;
    }

    public function __set(string $property, $value)
    {
        $this->__data[$property] = $value;
    }
}

$personObj = new Person();
$personObj->name = 'mohammed'; //you called __set
$personObj->email = 'mohammed@test.com';
$personObj->id = 'XXXX0001111';
$personObj->address = 'Gaza';
$personObj->salary = 90;

var_dump($personObj->salary); // you call __get