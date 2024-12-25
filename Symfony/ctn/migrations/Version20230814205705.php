<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230814205705 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evaluation ADD matriculem_id INT DEFAULT NULL, ADD matriculep_id INT NOT NULL, ADD archived INT NOT NULL');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A5752747C3DA FOREIGN KEY (matriculem_id) REFERENCES mouvement (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A57585344C98 FOREIGN KEY (matriculep_id) REFERENCES personnel (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1323A5752747C3DA ON evaluation (matriculem_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1323A57585344C98 ON evaluation (matriculep_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A5752747C3DA');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A57585344C98');
        $this->addSql('DROP INDEX UNIQ_1323A5752747C3DA ON evaluation');
        $this->addSql('DROP INDEX UNIQ_1323A57585344C98 ON evaluation');
        $this->addSql('ALTER TABLE evaluation DROP matriculem_id, DROP matriculep_id, DROP archived');
    }
}
