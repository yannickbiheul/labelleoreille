<?php

namespace App\Tests;

use DateTime;
use App\Entity\Contact;
use PHPUnit\Framework\TestCase;

class ContactUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $contact = new Contact;
        $datetime = new DateTime();

        $contact->setNom('nom')
                ->setEmail('email@email.com')
                ->setMessage('Message')
                ->setDateCreation($datetime);

        $this->assertTrue($contact->getNom() === 'nom');
        $this->assertTrue($contact->getEmail() === 'email@email.com');
        $this->assertTrue($contact->getMessage() === 'Message');
        $this->assertTrue($contact->getDateCreation() === $datetime);
    }

    public function testIsFalse()
    {
        $contact = new Contact;
        $datetime = new DateTime();

        $contact->setNom('nom')
                ->setEmail('email@email.com')
                ->setMessage('Message')
                ->setDateCreation($datetime);

        $this->assertFalse($contact->getNom() === 'false');
        $this->assertFalse($contact->getEmail() === 'false@email.com');
        $this->assertFalse($contact->getMessage() === 'false');
        $this->assertFalse($contact->getDateCreation() === new Datetime());
    }

    public function testIsEmpty()
    {
        $contact = new Contact;

        $this->assertEmpty($contact->getNom());
        $this->assertEmpty($contact->getEmail());
        $this->assertEmpty($contact->getMessage());
        $this->assertEmpty($contact->getDateCreation());
    }

}
