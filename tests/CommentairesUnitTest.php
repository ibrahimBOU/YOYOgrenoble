<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\BlogPost;
use App\Entity\Commentaire;
use DateTime;
use DateTimeImmutable;

use function PHPUnit\Framework\assertFalse;

class CommentairesUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $commentaire = new Commentaire();
        $datetime = new DateTimeImmutable();
        $blogpost = new Blogpost();

        $commentaire->setAuteur('auteur')
            ->setEmail('email@test.com')
            ->setCreatedAt($datetime)
            ->setContenu('contenu')
            ->setRelation($blogpost);

        $this->assertTrue($commentaire->getAuteur() === 'auteur');
        $this->assertTrue($commentaire->getEmail() === 'email@test.com');
        $this->assertTrue($commentaire->getCreatedAt() === $datetime);
        $this->assertTrue($commentaire->getContenu() === 'contenu');
        $this->assertTrue($commentaire->getRelation() === $blogpost);
    }
    public function testIsFalse()
    {
        $commentaire = new Commentaire();
        $datetime = new DateTimeImmutable();
        $blogpost = new Blogpost();


        $commentaire->setAuteur('false')
            ->setEmail('false@test.com')
            ->setCreatedAt(new DateTimeImmutable())
            ->setContenu('false')
            ->setRelation(new Blogpost());

        $this->assertFalse($commentaire->getAuteur() === 'auteur');
        $this->assertFalse($commentaire->getEmail() === 'email@test.com');
        $this->assertFalse($commentaire->getCreatedAt() === $datetime);
        $this->assertFalse($commentaire->getContenu() === 'contenu');
        $this->assertFalse($commentaire->getRelation() === $blogpost);
    }
    public function testIsEmpty()
    {
        $commentaire = new Commentaire();

        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getCreatedAt());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getRelation());
    }
}
