<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column(type: 'integer')]
  private $id;

  #[ORM\Column(type: 'string', length: 255)]
  private $username;

  #[ORM\Column(type: 'string', length: 255)]
  private $email;

  #[ORM\Column(type: 'string', length: 255)]
  private $password;

  #[ORM\Column(type: 'decimal', precision: 10, scale: '0')]
  private $age;

  public function getId(): ?int
  {
    return $this->id;
  }

  public function getUsername(): ?string
  {
    return $this->username;
  }

  public function setUsername(string $username): self
  {
    $this->username = $username;

    return $this;
  }

  public function getEmail(): ?string
  {
      return $this->email;
  }

  public function setEmail(string $email): self
  {
      $this->email = $email;

      return $this;
  }

  public function getPassword(): ?string
  {
      return $this->password;
  }

  public function setPassword(string $password): self
  {
      $this->password = $password;

      return $this;
  }

  public function getAge(): ?string
  {
      return $this->age;
  }

  public function setAge(string $age): self
  {
      $this->age = $age;

      return $this;
  }
}