<?php

namespace App\Entity;

use App\Repository\SocialRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SocialRepository::class)]
class Social
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $social_url = null;

    #[ORM\Column(length: 255)]
    private ?string $url_icone = null;

    #[ORM\ManyToOne(inversedBy: 'socials')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSocialUrl(): ?string
    {
        return $this->social_url;
    }

    public function setSocialUrl(string $social_url): self
    {
        $this->social_url = $social_url;

        return $this;
    }

    public function getUrlIcone(): ?string
    {
        return $this->url_icone;
    }

    public function setUrlIcone(string $url_icone): self
    {
        $this->url_icone = $url_icone;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
