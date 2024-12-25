<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230814011341 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evaluation (id INT AUTO_INCREMENT NOT NULL, note INT NOT NULL, commentaire VARCHAR(500) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mouvement DROP FOREIGN KEY FK_493AC53F85344C98');
        $this->addSql('ALTER TABLE mouvement ADD etat VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX uniq_493ac53f85344c98 ON mouvement');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5B51FC3E85344C98 ON mouvement (matriculep_id)');
        $this->addSql('ALTER TABLE mouvement ADD CONSTRAINT FK_493AC53F85344C98 FOREIGN KEY (matriculep_id) REFERENCES personnel (id)');
        $this->addSql('ALTER TABLE personnel ADD fonction VARCHAR(255) NOT NULL, ADD navir VARCHAR(255) NOT NULL, ADD motpasse VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE evaluation');
        $this->addSql('ALTER TABLE mouvement DROP FOREIGN KEY FK_5B51FC3E85344C98');
        $this->addSql('ALTER TABLE mouvement DROP etat');
        $this->addSql('DROP INDEX uniq_5b51fc3e85344c98 ON mouvement');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_493AC53F85344C98 ON mouvement (matriculep_id)');
        $this->addSql('ALTER TABLE mouvement ADD CONSTRAINT FK_5B51FC3E85344C98 FOREIGN KEY (matriculep_id) REFERENCES personnel (id)');
        $this->addSql('ALTER TABLE personnel DROP fonction, DROP navir, DROP motpasse');
    }
}
