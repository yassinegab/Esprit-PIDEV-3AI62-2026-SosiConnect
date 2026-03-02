<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260225000000 extends AbstractMigration
{

    public function getDescription(): string
    {
        return 'Create contact_urgence table';
    }

    public function up(Schema $schema): void
    {

        $this->addSql("
            CREATE TABLE contact_urgence (
                id INT AUTO_INCREMENT NOT NULL,
                nom VARCHAR(100) DEFAULT NULL,
                lien VARCHAR(50) DEFAULT NULL,
                telephone VARCHAR(20) DEFAULT NULL,
                email VARCHAR(180) DEFAULT NULL,
                PRIMARY KEY(id)
            )
        ");

    }


    public function down(Schema $schema): void
    {

        $this->addSql("DROP TABLE contact_urgence");

    }

}
