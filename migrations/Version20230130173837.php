<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230130173837 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, name VARCHAR(255) NOT NULL, promotional_code VARCHAR(255) NOT NULL, date_start DATE NOT NULL, date_end DATE NOT NULL, bg_color VARCHAR(255) DEFAULT NULL, color_txt VARCHAR(255) DEFAULT NULL, INDEX IDX_C11D7DD1A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, name VARCHAR(255) NOT NULL, url_image VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, INDEX IDX_939F4544A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE social (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, name VARCHAR(255) NOT NULL, social_url VARCHAR(255) NOT NULL, font_awesome_icon_name VARCHAR(255) NOT NULL, INDEX IDX_7161E187A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE template (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, baseline VARCHAR(255) DEFAULT NULL, youtube_url VARCHAR(255) DEFAULT NULL, section_1_bg_color VARCHAR(255) DEFAULT NULL, section_1_title_color VARCHAR(255) DEFAULT NULL, section_1_baseline_color VARCHAR(255) DEFAULT NULL, section2_bg_color VARCHAR(255) DEFAULT NULL, section_3_bg_color VARCHAR(255) DEFAULT NULL, section_3_bg_color_card VARCHAR(255) DEFAULT NULL, section_3_color_txt_card VARCHAR(255) DEFAULT NULL, section_4_bg_color VARCHAR(255) DEFAULT NULL, section_4_bg_color_btn VARCHAR(255) DEFAULT NULL, section_4_color_txt_btn VARCHAR(255) DEFAULT NULL, section_5_bg_color VARCHAR(255) DEFAULT NULL, section_5_icon_color VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_97601F83A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, profile_image VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ressource ADD CONSTRAINT FK_939F4544A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE social ADD CONSTRAINT FK_7161E187A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE template ADD CONSTRAINT FK_97601F83A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1A76ED395');
        $this->addSql('ALTER TABLE ressource DROP FOREIGN KEY FK_939F4544A76ED395');
        $this->addSql('ALTER TABLE social DROP FOREIGN KEY FK_7161E187A76ED395');
        $this->addSql('ALTER TABLE template DROP FOREIGN KEY FK_97601F83A76ED395');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('DROP TABLE social');
        $this->addSql('DROP TABLE template');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
