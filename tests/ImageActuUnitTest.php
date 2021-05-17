<?php

namespace App\Tests;

use App\Entity\ImageActu;
use PHPUnit\Framework\TestCase;

class ImageActuUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $imageActu = new ImageActu;

        $imageActu->setNom('image');

        $this->assertTrue($imageActu->getNom() === 'image');
    }

    public function testIsFalse()
    {
        $imageActu = new ImageActu;

        $imageActu->setNom('image');

        $this->assertFalse($imageActu->getNom() === 'false');
    }

    public function testIsEmpty()
    {
        $imageActu = new ImageActu;

        $this->assertEmpty($imageActu->getNom());
    }
}
