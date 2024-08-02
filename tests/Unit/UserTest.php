<?php

namespace Tests\Unit;

use App\Models\User;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function test_Validation()
    {
        $User1 = User::make(
            [
                'name'=>'aaa',
                'email'=>'ahmed@gmail.com',
                'password'=>'123456'

            ]
            );
            $User2 = User::make(
                [
                    'name'=>'aaa',
                    'email'=>'ahmed@gmail.com',
                    'password'=>'123456'

                ]);
                $this->assertTrue($User1->name == $User2->name);
   }
   public function test_number()
    {

                $this->assertTrue(4 > 5);
   }
}
