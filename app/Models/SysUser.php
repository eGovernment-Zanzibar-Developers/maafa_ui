<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SysUser extends Model
{
    use HasFactory;
    
    public $id, $firstName, $middleName, $lastName;
    public $title, $phoneNumber, $email, $employeeNumber,$passportNumber;
    public  $userName, $password, $userTypeId, $userStatusId, $departmentId;
}
