<?php

namespace App\Tests;

use App\Entity\Audio;
use PHPUnit\Framework\TestCase;

class AudioUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $audio = new Audio();

        $audio->setNom('nom')
            ->setLien('lien');

        $this->assertTrue($audio->getNom() === 'nom');
        $this->assertTrue($audio->getLien() === 'lien');
    }

    public function testIsFalse()
    {
        $audio = new Audio();

        $audio->setNom('nom')
            ->setLien('lien');

        $this->assertFalse($audio->getNom() === 'false');
        $this->assertFalse($audio->getLien() === 'false');
    }

    public function testIsEmpty()
    {
        $audio = new Audio();

        $this->assertEmpty($audio->getNom());
        $this->assertEmpty($audio->getLien());
    }

}
