<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330001532 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lieu_maison (id INT AUTO_INCREMENT NOT NULL, lieu VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE maison (id INT AUTO_INCREMENT NOT NULL, tpmaison_id INT NOT NULL, lieu_maison_id INT NOT NULL, prix DOUBLE PRECISION NOT NULL, nsm VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, check_in VARCHAR(255) NOT NULL, check_out VARCHAR(255) NOT NULL, piscine VARCHAR(255) NOT NULL, bedrooms INT NOT NULL, bathrooms INT NOT NULL, maxppl INT NOT NULL, smoke VARCHAR(255) NOT NULL, pet VARCHAR(255) NOT NULL, image1 VARCHAR(255) DEFAULT NULL, description LONGTEXT NOT NULL, dateAjout DATETIME NOT NULL, email VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, phone DOUBLE PRECISION NOT NULL, INDEX IDX_F90CB66DA85BD904 (tpmaison_id), INDEX IDX_F90CB66DF2004318 (lieu_maison_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tpmaison (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE maison ADD CONSTRAINT FK_F90CB66DA85BD904 FOREIGN KEY (tpmaison_id) REFERENCES tpmaison (id)');
        $this->addSql('ALTER TABLE maison ADD CONSTRAINT FK_F90CB66DF2004318 FOREIGN KEY (lieu_maison_id) REFERENCES lieu_maison (id)');
    }

    public function down(Schema $schema) : void
    {
          }
}
