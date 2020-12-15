<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
table{
    border: 3px solid;
    width: 300px;
    height: 50px;
}
th,td{
    border: 2px solid;
}
</style>
<body>
<table>
    <tr>
        <th>STT</th>
        <th>Họ</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Vị trí công việc</th>
    </tr>
    <!--<tr>
        <td>1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>4</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>-->
</table>

<form method="post">
    <input type="text" name="surname" placeholder="surname"></br>
    <input type="text" name="name" placeholder="name"></br>
    <input type="text" name="dateOfBirth" placeholder="dateOfBirth"></br>
    <input type="text" name="address" placeholder="address"></br>
    <input type="text" name="jobPosition" placeholder="jobPosition"></br>
    <button type="submit">Add</button>
</form>
</body>
</html>
<?php
include "Employee.php";
include "EmployeeManager.php";

/*$EmployeeManager = new EmployeeManager();*/

function saveDataJson($data){
    $contact = json_encode($data);
    file_put_contents('data.json',$contact);
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $surname =$_POST["surname"];
    $name =$_POST["name"];
    $dateOfBirth =$_POST["dateOfBirth"];
    $address =$_POST["address"];
    $jobPosition =$_POST["jobPosition"];
    $arr = [$surname,$name,$dateOfBirth,$address,$jobPosition];
    saveDataJson($arr);
}
