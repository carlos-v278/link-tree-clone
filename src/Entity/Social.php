<?php

namespace App\Entity;

use App\Repository\SocialRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Security;

#[ORM\Entity(repositoryClass: SocialRepository::class)]
#[ORM\HasLifecycleCallbacks]
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

    #[ORM\ManyToOne(inversedBy: 'socials')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $font_awesome_icon_name = null;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function setCreatedUser(Security $userSecurity): self
    {
        $this->user = $userSecurity->getUser();
        return $this;
    }

    public function getFontAwesomeIconName(): ?string
    {
        return $this->font_awesome_icon_name;
    }

    public function setFontAwesomeIconName(string $font_awesome_icon_name): self
    {
        $this->font_awesome_icon_name = $font_awesome_icon_name;

        return $this;
    }
}
