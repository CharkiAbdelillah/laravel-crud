<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use kk\Account
class AccountTest extends TestCase
{
    //had @test tat dirha blax blama tb9a tktb kola mara test 9bl function
/** @test */
    public function find_profil()
    { 
     $profil = Accountant::findProfil(100);
        $this->assertEquals(10,$profil);
    }
}
