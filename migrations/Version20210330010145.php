<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330010145 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE social_media (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, facebook VARCHAR(255) DEFAULT NULL, linkedin VARCHAR(255) DEFAULT NULL, instagram VARCHAR(255) DEFAULT NULL, website VARCHAR(255) DEFAULT NULL, INDEX IDX_20BC159EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE social_media ADD CONSTRAINT FK_20BC159EA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE maison CHANGE id_user user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE maison ADD CONSTRAINT FK_F90CB66DA85BD904 FOREIGN KEY (tpmaison_id) REFERENCES tpmaison (id)');
        $this->addSql('ALTER TABLE maison ADD CONSTRAINT FK_F90CB66DF2004318 FOREIGN KEY (lieu_maison_id) REFERENCES lieu_maison (id)');
        $this->addSql('ALTER TABLE maison ADD CONSTRAINT FK_F90CB66DA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_F90CB66DA85BD904 ON maison (tpmaison_id)');
        $this->addSql('CREATE INDEX IDX_F90CB66DF2004318 ON maison (lieu_maison_id)');
        $this->addSql('CREATE INDEX IDX_F90CB66DA76ED395 ON maison (user_id)');
        $this->addSql('ALTER TABLE utilisateur CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE datenaissance datenaissance DATE NOT NULL, CHANGE numtel numtel VARCHAR(255) NOT NULL, CHANGE pays pays VARCHAR(255) NOT NULL, CHANGE image image VARCHAR(255) NOT NULL, CHANGE roles roles JSON NOT NULL, CHANGE password password VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(180) NOT NULL, CHANGE is_verified is_verified TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE social_media');
        $this->addSql('ALTER TABLE maison DROP FOREIGN KEY FK_F90CB66DA85BD904');
        $this->addSql('ALTER TABLE maison DROP FOREIGN KEY FK_F90CB66DF2004318');
        $this->addSql('ALTER TABLE maison DROP FOREIGN KEY FK_F90CB66DA76ED395');
        $this->addSql('DROP INDEX IDX_F90CB66DA85BD904 ON maison');
        $this->addSql('DROP INDEX IDX_F90CB66DF2004318 ON maison');
        $this->addSql('DROP INDEX IDX_F90CB66DA76ED395 ON maison');
        $this->addSql('ALTER TABLE maison CHANGE user_id id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE email email VARCHAR(180) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE roles roles JSON DEFAULT NULL, CHANGE password password VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE datenaissance datenaissance DATE DEFAULT NULL, CHANGE numtel numtel VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE pays pays VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE is_verified is_verified TINYINT(1) DEFAULT NULL');
    }
}
