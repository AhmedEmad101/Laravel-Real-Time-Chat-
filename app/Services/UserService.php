<?php
namespace App\Services;
use App\Models\User;
class UserService{
public function CreateUser(array $data)
{
    return User::create($data);
}

}
