<?php

namespace App\Tests;

use DateTime;
use App\Entity\Actu;
use PHPUnit\Framework\TestCase;

class ActuUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $actu = new Actu();
        $datetime = new DateTime();

        $actu->setTitre('titre')
            ->setContenu('contenu')
            ->setDateCreation($datetime);

        $this->assertTrue($actu->getTitre() === 'titre');
        $this->assertTrue($actu->getContenu() === 'contenu');
        $this->assertTrue($actu->getDateCreation() === $datetime);

    }

    public function testIsFalse()
    {
        $actu = new Actu();
        $datetime = new DateTime();

        $actu->setTitre('titre')
            ->setContenu('contenu')
            ->setDateCreation($datetime);

        $this->assertFalse($actu->getTitre() === 'false');
        $this->assertFalse($actu->getContenu() === 'false');
        $this->assertFalse($actu->getDateCreation() === new DateTime());

    }

    public function testIsEmpty()
    {
        $actu = new Actu();

        $this->assertEmpty($actu->getTitre());
        $this->assertEmpty($actu->getContenu());
        $this->assertEmpty($actu->getDateCreation());
    }

}
