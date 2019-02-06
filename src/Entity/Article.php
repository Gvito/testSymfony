<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $contentofarticle;

    /**
     * @ORM\Column(type="date")
     */
    private $datecreate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nameofauthor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nameofcategory;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberview;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContentofarticle(): ?string
    {
        return $this->contentofarticle;
    }

    public function setContentofarticle(string $contentofarticle): self
    {
        $this->contentofarticle = $contentofarticle;

        return $this;
    }

    public function getDatecreate(): ?\DateTimeInterface
    {
        return $this->datecreate;
    }

    public function setDatecreate(\DateTimeInterface $datecreate): self
    {
        $this->datecreate = $datecreate;

        return $this;
    }

    public function getNameofauthor(): ?string
    {
        return $this->nameofauthor;
    }

    public function setNameofauthor(string $nameofauthor): self
    {
        $this->nameofauthor = $nameofauthor;

        return $this;
    }

    public function getNameofcategory(): ?string
    {
        return $this->nameofcategory;
    }

    public function setNameofcategory(string $nameofcategory): self
    {
        $this->nameofcategory = $nameofcategory;

        return $this;
    }

    public function getNumberview(): ?int
    {
        return $this->numberview;
    }

    public function setNumberview(int $numberview): self
    {
        $this->numberview = $numberview;

        return $this;
    }

    public function getShortedContent()
    {
        return substr($this->contentofarticle, 0, 50);

    }
}
