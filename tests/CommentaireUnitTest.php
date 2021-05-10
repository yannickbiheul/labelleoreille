<?php

namespace App\Tests;

use DateTime;
use App\Entity\Commentaire;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $commentaire = new Commentaire();
        $datetime = new DateTime();

        $commentaire->setAuteur('auteur')
            ->setEmail('true@email.com')
            ->setContenu('contenu')
            ->setDateCreation($datetime);

        $this->assertTrue($commentaire->getAuteur() === 'auteur');
        $this->assertTrue($commentaire->getEmail() === 'true@email.com');
        $this->assertTrue($commentaire->getContenu() === 'contenu');
        $this->assertTrue($commentaire->getDateCreation() == $datetime);
    }

    public function testIsFalse()
    {
        $commentaire = new Commentaire();
        $datetime = new DateTime();

        $commentaire->setAuteur('auteur')
            ->setEmail('true@email.com')
            ->setContenu('contenu')
            ->setDateCreation($datetime);

        $this->assertFalse($commentaire->getAuteur() === 'false');
        $this->assertFalse($commentaire->getEmail() === 'False@email.com');
        $this->assertFalse($commentaire->getContenu() === 'false');
        $this->assertFalse($commentaire->getDateCreation() == new DateTime());
    }

    public function testIsEmpty()
    {
        $commentaire = new Commentaire();

        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getDateCreation());
    }

}
