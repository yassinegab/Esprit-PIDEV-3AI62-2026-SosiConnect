<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260227000001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create cycle, symptome, and event_user tables if missing';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE IF NOT EXISTS cycle (
            id_cycle INT AUTO_INCREMENT NOT NULL,
            user_id INT NOT NULL,
            date_debut_m DATE NOT NULL,
            date_fin_m DATE NOT NULL,
            PRIMARY KEY(id_cycle)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('ALTER TABLE cycle ADD CONSTRAINT IF NOT EXISTS FK_CYCLE_USER FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IF NOT EXISTS IDX_CYCLE_USER ON cycle (user_id)');

        $this->addSql('CREATE TABLE IF NOT EXISTS symptome (
            id_symptome INT AUTO_INCREMENT NOT NULL,
            cycle_id INT DEFAULT NULL,
            type VARCHAR(255) NOT NULL,
            intensite VARCHAR(255) NOT NULL,
            date_observation DATE DEFAULT NULL,
            PRIMARY KEY(id_symptome)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('ALTER TABLE symptome ADD CONSTRAINT IF NOT EXISTS FK_SYMPTOME_CYCLE FOREIGN KEY (cycle_id) REFERENCES cycle (id_cycle)');
        $this->addSql('CREATE INDEX IF NOT EXISTS IDX_SYMPTOME_CYCLE ON symptome (cycle_id)');

        $this->addSql('CREATE TABLE IF NOT EXISTS event_user (
            event_id INT NOT NULL,
            user_id INT NOT NULL,
            INDEX IDX_EVENT_USER_EVENT (event_id),
            INDEX IDX_EVENT_USER_USER (user_id),
            PRIMARY KEY(event_id, user_id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('ALTER TABLE event_user ADD CONSTRAINT IF NOT EXISTS FK_EVENT_USER_EVENT FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE event_user ADD CONSTRAINT IF NOT EXISTS FK_EVENT_USER_USER FOREIGN KEY (user_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE IF EXISTS event_user');
        $this->addSql('DROP TABLE IF EXISTS symptome');
        $this->addSql('DROP TABLE IF EXISTS cycle');
    }
}
