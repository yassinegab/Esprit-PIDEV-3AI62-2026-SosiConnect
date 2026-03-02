<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260218000000 extends AbstractMigration
{

    public function getDescription(): string
    {
        return 'Create table lieu_medical';
    }

    public function up(Schema $schema): void
    {

        $this->addSql("
            CREATE TABLE lieu_medical (
                id INT AUTO_INCREMENT NOT NULL,
                nom VARCHAR(100) NOT NULL,
                categorie VARCHAR(50) NOT NULL,
                adresse VARCHAR(255) NOT NULL,
                telephone VARCHAR(20) DEFAULT NULL,
                latitude DOUBLE PRECISION NOT NULL,
                longitude DOUBLE PRECISION NOT NULL,
                date_creation DATETIME NOT NULL,
                PRIMARY KEY(id)
            )
        ");

    }


    public function down(Schema $schema): void
    {

        $this->addSql("DROP TABLE lieu_medical");

    }

}
