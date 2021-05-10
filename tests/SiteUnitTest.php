<?php

namespace App\Tests;

use App\Entity\Site;
use PHPUnit\Framework\TestCase;

class SiteUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $site = new Site();

        $site->setPhraseTitre('phraseTitre')
            ->setLienFacebook('lienFacebook')
            ->setLienInstagram('lienInstagram')
            ->setPhrase('phrase')
            ->setDescription('description');

        $this->assertTrue($site->getPhraseTitre() === 'phraseTitre');
        $this->assertTrue($site->getLienFacebook() === 'lienFacebook');
        $this->assertTrue($site->getLienInstagram() === 'lienInstagram');
        $this->assertTrue($site->getPhrase() === 'phrase');
        $this->assertTrue($site->getDescription() === 'description');
    }

    public function testIsFalse()
    {
        $site = new Site();

        $site->setPhraseTitre('phraseTitre')
            ->setLienFacebook('lienFacebook')
            ->setLienInstagram('lienInstagram')
            ->setPhrase('phrase')
            ->setDescription('description');

        $this->assertFalse($site->getPhraseTitre() === 'false');
        $this->assertFalse($site->getLienFacebook() === 'false');
        $this->assertFalse($site->getLienInstagram() === 'false');
        $this->assertFalse($site->getPhrase() === 'false');
        $this->assertFalse($site->getDescription() === 'false');
    }

    public function testIsEmpty()
    {
        $site = new Site();

        $this->assertEmpty($site->getPhraseTitre());
        $this->assertEmpty($site->getLienFacebook());
        $this->assertEmpty($site->getLienInstagram());
        $this->assertEmpty($site->getPhrase());
        $this->assertEmpty($site->getDescription());
    }
}
