<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190415105403 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cursus (id INT AUTO_INCREMENT NOT NULL, categorie VARCHAR(255) NOT NULL, prijs INT NOT NULL, datum DATE NOT NULL, programma VARCHAR(255) NOT NULL, opmerkingen VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE location (id INT AUTO_INCREMENT NOT NULL, beschikbaarheid TINYINT(1) NOT NULL, lengtegraad INT NOT NULL, breedtegraad INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservaties (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, cursus_id_id INT NOT NULL, locatie_id_id INT NOT NULL, INDEX IDX_DB21CD069D86650F (user_id_id), INDEX IDX_DB21CD06ED70AAB9 (cursus_id_id), INDEX IDX_DB21CD06C933D04A (locatie_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservaties ADD CONSTRAINT FK_DB21CD069D86650F FOREIGN KEY (user_id_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE reservaties ADD CONSTRAINT FK_DB21CD06ED70AAB9 FOREIGN KEY (cursus_id_id) REFERENCES cursus (id)');
        $this->addSql('ALTER TABLE reservaties ADD CONSTRAINT FK_DB21CD06C933D04A FOREIGN KEY (locatie_id_id) REFERENCES location (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reservaties DROP FOREIGN KEY FK_DB21CD06ED70AAB9');
        $this->addSql('ALTER TABLE reservaties DROP FOREIGN KEY FK_DB21CD06C933D04A');
        $this->addSql('DROP TABLE cursus');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP TABLE reservaties');
    }
}
