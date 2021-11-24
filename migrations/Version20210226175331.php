<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210226175331 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE disponibilite (id INT AUTO_INCREMENT NOT NULL, guide_id INT DEFAULT NULL, date DATE NOT NULL, de TIME NOT NULL, a TIME NOT NULL, INDEX IDX_2CBACE2FD7ED1D4B (guide_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE guide (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, INDEX IDX_CA9EC73579F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, datenaissance DATE NOT NULL, email VARCHAR(255) NOT NULL, numtel BIGINT NOT NULL, pays VARCHAR(255) NOT NULL, pwd VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE disponibilite ADD CONSTRAINT FK_2CBACE2FD7ED1D4B FOREIGN KEY (guide_id) REFERENCES guide (id)');
        $this->addSql('ALTER TABLE guide ADD CONSTRAINT FK_CA9EC73579F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE disponibilite DROP FOREIGN KEY FK_2CBACE2FD7ED1D4B');
        $this->addSql('ALTER TABLE guide DROP FOREIGN KEY FK_CA9EC73579F37AE5');
        $this->addSql('DROP TABLE disponibilite');
        $this->addSql('DROP TABLE guide');
        $this->addSql('DROP TABLE utilisateur');
    }
}
