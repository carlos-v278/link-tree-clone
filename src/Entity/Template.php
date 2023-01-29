<?php

namespace App\Entity;

use App\Repository\TemplateRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TemplateRepository::class)]
class Template
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $baseline = null;

    #[ORM\Column(length: 255)]
    private ?string $youtube_url = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section_1_bg_color = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section_1_title_color = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section_1_baseline_color = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section2_bg_color = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section_3_bg_color = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section_3_bg_color_card = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section_3_color_txt_card = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section_4_bg_color = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section_4_bg_color_btn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section_4_color_txt_btn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section_5_bg_color = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section_5_icon_color = null;

    #[ORM\OneToOne(inversedBy: 'template', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;





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

    public function getBaseline(): ?string
    {
        return $this->baseline;
    }

    public function setBaseline(string $baseline): self
    {
        $this->baseline = $baseline;

        return $this;
    }

    public function getYoutubeUrl(): ?string
    {
        return $this->youtube_url;
    }

    public function setYoutubeUrl(string $youtube_url): self
    {
        $this->youtube_url = $youtube_url;

        return $this;
    }

    public function getSection1BgColor(): ?string
    {
        return $this->section_1_bg_color;
    }

    public function setSection1BgColor(?string $section_1_bg_color): self
    {
        $this->section_1_bg_color = $section_1_bg_color;

        return $this;
    }

    public function getSection1TitleColor(): ?string
    {
        return $this->section_1_title_color;
    }

    public function setSection1TitleColor(?string $section_1_title_color): self
    {
        $this->section_1_title_color = $section_1_title_color;

        return $this;
    }

    public function getSection1BaselineColor(): ?string
    {
        return $this->section_1_baseline_color;
    }

    public function setSection1BaselineColor(?string $section_1_baseline_color): self
    {
        $this->section_1_baseline_color = $section_1_baseline_color;

        return $this;
    }

    public function getSection2BgColor(): ?string
    {
        return $this->section2_bg_color;
    }

    public function setSection2BgColor(?string $section2_bg_color): self
    {
        $this->section2_bg_color = $section2_bg_color;

        return $this;
    }

    public function getSection3BgColor(): ?string
    {
        return $this->section_3_bg_color;
    }

    public function setSection3BgColor(?string $section_3_bg_color): self
    {
        $this->section_3_bg_color = $section_3_bg_color;

        return $this;
    }

    public function getSection3BgColorCard(): ?string
    {
        return $this->section_3_bg_color_card;
    }

    public function setSection3BgColorCard(?string $section_3_bg_color_card): self
    {
        $this->section_3_bg_color_card = $section_3_bg_color_card;

        return $this;
    }

    public function getSection3ColorTxtCard(): ?string
    {
        return $this->section_3_color_txt_card;
    }

    public function setSection3ColorTxtCard(?string $section_3_color_txt_card): self
    {
        $this->section_3_color_txt_card = $section_3_color_txt_card;

        return $this;
    }



    public function getSection4BgColor(): ?string
    {
        return $this->section_4_bg_color;
    }

    public function setSection4BgColor(?string $section_4_bg_color): self
    {
        $this->section_4_bg_color = $section_4_bg_color;

        return $this;
    }

    public function getSection4BgColorBtn(): ?string
    {
        return $this->section_4_bg_color_btn;
    }

    public function setSection4BgColorBtn(?string $section_4_bg_color_btn): self
    {
        $this->section_4_bg_color_btn = $section_4_bg_color_btn;

        return $this;
    }

    public function getSection4ColorTxtBtn(): ?string
    {
        return $this->section_4_color_txt_btn;
    }

    public function setSection4ColorTxtBtn(?string $section_4_color_txt_btn): self
    {
        $this->section_4_color_txt_btn = $section_4_color_txt_btn;

        return $this;
    }

    public function getSection5BgColor(): ?string
    {
        return $this->section_5_bg_color;
    }

    public function setSection5BgColor(?string $section_5_bg_color): self
    {
        $this->section_5_bg_color = $section_5_bg_color;

        return $this;
    }

    public function getSection5IconColor(): ?string
    {
        return $this->section_5_icon_color;
    }

    public function setSection5IconColor(?string $section_5_icon_color): self
    {
        $this->section_5_icon_color = $section_5_icon_color;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
