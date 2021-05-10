<?php

namespace App\Tests;

use App\Entity\Role;
use PHPUnit\Framework\TestCase;

class RoleUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $role = new Role();

        $role->setNom('nom');

        $this->assertTrue($role->getNom() === 'nom');
    }

    public function testIsFalse()
    {
        $role = new Role();

        $role->setNom('nom');

        $this->assertFalse($role->getNom() === 'false');
    }

    public function testIsEmpty()
    {
        $role = new Role();

        $this->assertEmpty($role->getNom());
    }
    
}
