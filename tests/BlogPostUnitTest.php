<?php

namespace App\Tests;

use App\Entity\BlogPost;
use DateTime;
use PHPUnit\Framework\TestCase;

class BlogPostUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $blogpost = new BlogPost();
        $datetime = new DateTime();

        $blogpost->setTitre('titre')
            ->setcontenu('contenu')
            ->setslug('slug')
            ->setDatetime($datetime);

        $this->assertTrue($blogpost->getTitre() === 'titre');
        $this->assertTrue($blogpost->getDatetime() === $datetime);
        $this->assertTrue($blogpost->getContenu() === 'contenu');
        $this->assertTrue($blogpost->getSlug() === 'slug');
    }

    public function testIsFalse()
    {
        $blogPost = new BlogPost();
        $datetime = new DateTime();

        $blogPost->setTitre('titre')
            ->setcontenu('contenu')
            ->setslug('slug')
            ->setDatetime($datetime);

        $this->assertFalse($blogPost->getTitre() === 'false');
        $this->assertFalse($blogPost->getDatetime() === new Datetime());
        $this->assertFalse($blogPost->getContenu() === 'false');
        $this->assertFalse($blogPost->getSlug() === 'false');
    }
    public function testIsEmpty()
    {
        $blogPost = new BlogPost();

        $this->assertEmpty($blogPost->getTitre());
        $this->assertEmpty($blogPost->getDatetime());
        $this->assertEmpty($blogPost->getContenu());
        $this->assertEmpty($blogPost->getSlug());
    }
}
