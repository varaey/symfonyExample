<?php


namespace App\Model;


class Post
{
    private $id;
    private $category;
    private $title;
    private $shortDescription;
    private $image;
    private $publicationDate;

    public function __construct(int $id, Category $category, string $title)
    {
        $this->id = $id;
        $this->category = $category;
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return Category
     */
    public function getCategory() : Category
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    /**
     * @return mixed
     */
    public function getImage() : ?string
    {
        return $this->image;
    }

    /**
     * @param mixed $shortDescription
     */
    public function setShortDescription(string $shortDescription) : self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * @param mixed $image
     */
    public function setImage(string $image) : self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicationDate(): \DateTime
    {
        return $this->publicationDate;
    }

    /**
     * @param mixed $publicationDate
     */
    public function setPublicationDate(\DateTime $publicationDate) : self
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }
}