<?php

namespace App\Tests;

use App\Entity\Prestation;
use PHPUnit\Framework\TestCase;

class PrestationUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $prestation = new Prestation();

        $prestation->setTitre('titre')
            ->setContenu('contenu');

        $this->assertTrue($prestation->getTitre() === 'titre');
        $this->assertTrue($prestation->getContenu() === 'contenu');
        
    }

    public function testIsFalse()
    {
        $prestation = new Prestation();

        $prestation->setTitre('titre')
            ->setContenu('contenu');

        $this->assertFalse($prestation->getTitre() === 'false');
        $this->assertFalse($prestation->getContenu() === 'false');
        
    }

    public function testIsEmpty()
    {
        $prestation = new Prestation();

        $this->assertEmpty($prestation->getTitre());
        $this->assertEmpty($prestation->getContenu());
    }

}
