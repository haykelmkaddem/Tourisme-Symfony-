<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210226181347 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prop_maison (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, cin BIGINT NOT NULL, img_cin_front VARCHAR(255) NOT NULL, img_cin_back VARCHAR(255) NOT NULL, verif_photo VARCHAR(255) NOT NULL, etat TINYINT(1) NOT NULL, INDEX IDX_D5C0E7CF79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE prop_maison ADD CONSTRAINT FK_D5C0E7CF79F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE prop_maison');
    }
}
