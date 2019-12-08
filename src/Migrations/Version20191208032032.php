<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191208032032 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE projet (id INT AUTO_INCREMENT NOT NULL, universite_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, descrip VARCHAR(255) NOT NULL, lien VARCHAR(255) DEFAULT NULL, INDEX IDX_50159CA92A52F05F (universite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE universite (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, lien VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, universite_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, niveau VARCHAR(255) NOT NULL, annee VARCHAR(255) NOT NULL, INDEX IDX_404021BF2A52F05F (universite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE projet ADD CONSTRAINT FK_50159CA92A52F05F FOREIGN KEY (universite_id) REFERENCES universite (id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BF2A52F05F FOREIGN KEY (universite_id) REFERENCES universite (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE projet DROP FOREIGN KEY FK_50159CA92A52F05F');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BF2A52F05F');
        $this->addSql('DROP TABLE projet');
        $this->addSql('DROP TABLE universite');
        $this->addSql('DROP TABLE formation');
    }
}
