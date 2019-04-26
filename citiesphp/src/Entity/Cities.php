<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CitiesRepository")
 */
class Cities
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prev;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @return mixed
     */

    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @return mixed
     */


    public function getName(): ?string
    {
        return $this->name;
    }
    /**
   * @param mixed $name
   */

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @return mixed
     */

    public function getPrev(): ?string
    {
        return $this->prev;
    }
    /**
   * @param mixed $prev
   */

    public function setPrev(?string $prev): self
    {
        $this->prev = $prev;

        return $this;
    }
    /**
     * @return mixed
     */


    public function getStatus(): ?bool
    {
        return $this->status;
    }
    /**
   * @param mixed $status
   */

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }
}
