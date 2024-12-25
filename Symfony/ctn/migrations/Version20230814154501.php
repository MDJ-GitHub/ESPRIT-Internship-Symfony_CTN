<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230814154501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mouvement DROP INDEX UNIQ_5B51FC3E85344C98, ADD INDEX IDX_5B51FC3E85344C98 (matriculep_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mouvement DROP INDEX IDX_5B51FC3E85344C98, ADD UNIQUE INDEX UNIQ_5B51FC3E85344C98 (matriculep_id)');
    }
}
