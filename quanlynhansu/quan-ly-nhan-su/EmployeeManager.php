<?php


class EmployeeManager
{
private $personnel;

public function __construct(){
    $this->personnel = [];
}

public function add($personnel){
    $this->personnel[] = $personnel;
}

public function edit($personnel){
    $this->personnel[] = $personnel;
}

public function update($personnel){
    $this->personnel[] = $personnel;
}

}