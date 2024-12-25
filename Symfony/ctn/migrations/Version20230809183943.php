<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230809183943 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE navigation (id INT AUTO_INCREMENT NOT NULL, matriculep_id INT NOT NULL, dateemb DATE NOT NULL, datedeb DATE NOT NULL, fonction VARCHAR(255) NOT NULL, port VARCHAR(255) NOT NULL, situation VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_493AC53F85344C98 (matriculep_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personnel (id INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, daten DATE NOT NULL, lieun VARCHAR(255) NOT NULL, sexe VARCHAR(1) NOT NULL, tel INT NOT NULL, email VARCHAR(255) NOT NULL, typep VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE navigation ADD CONSTRAINT FK_493AC53F85344C98 FOREIGN KEY (matriculep_id) REFERENCES personnel (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navigation DROP FOREIGN KEY FK_493AC53F85344C98');
        $this->addSql('DROP TABLE navigation');
        $this->addSql('DROP TABLE personnel');
    }
}
