<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260225003007 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // join table for event attendees; if the table already exists it's safe to skip
        $this->addSql('CREATE TABLE IF NOT EXISTS event_user (event_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_92589AE271F7E88B (event_id), INDEX IDX_92589AE2A76ED395 (user_id), PRIMARY KEY(event_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE event_user ADD CONSTRAINT FK_92589AE271F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_user ADD CONSTRAINT FK_92589AE2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        // remove Gedmo log table if it exists
        $this->addSql('DROP TABLE IF EXISTS ext_log_entries');
        // make user_id nullable so existing cycles do not break
        $this->addSql('ALTER TABLE cycle ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cycle ADD CONSTRAINT FK_B086D193A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B086D193A76ED395 ON cycle (user_id)');
        // make cycle_id nullable for existing symptoms
        $this->addSql('ALTER TABLE symptome ADD cycle_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE symptome ADD CONSTRAINT FK_39E81B425EC1162 FOREIGN KEY (cycle_id) REFERENCES cycle (id_cycle)');
        $this->addSql('CREATE INDEX IDX_39E81B425EC1162 ON symptome (cycle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ext_log_entries (id INT AUTO_INCREMENT NOT NULL, action VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, logged_at DATETIME NOT NULL, object_class VARCHAR(191) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, object_id VARCHAR(64) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, version INT NOT NULL, data LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, username VARCHAR(191) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE event_user DROP FOREIGN KEY FK_92589AE271F7E88B');
        $this->addSql('ALTER TABLE event_user DROP FOREIGN KEY FK_92589AE2A76ED395');
        $this->addSql('DROP TABLE event_user');
        $this->addSql('ALTER TABLE cycle DROP FOREIGN KEY FK_B086D193A76ED395');
        $this->addSql('DROP INDEX IDX_B086D193A76ED395 ON cycle');
        $this->addSql('ALTER TABLE cycle DROP user_id');
        $this->addSql('ALTER TABLE symptome DROP FOREIGN KEY FK_39E81B425EC1162');
        $this->addSql('DROP INDEX IDX_39E81B425EC1162 ON symptome');
        $this->addSql('ALTER TABLE symptome DROP cycle_id');
    }
}
