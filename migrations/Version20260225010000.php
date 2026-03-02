<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260225010000 extends AbstractMigration
{

    public function getDescription(): string
    {
        return 'Create don and donneur tables';
    }

    public function up(Schema $schema): void
    {

        $this->addSql("
            CREATE TABLE donneur (
                id INT AUTO_INCREMENT NOT NULL,
                nom VARCHAR(50) NOT NULL,
                prenom VARCHAR(50) NOT NULL,
                age INT NOT NULL,
                telephone VARCHAR(15) NOT NULL,
                groupe_sanguin VARCHAR(3) NOT NULL,
                disponible TINYINT(1) NOT NULL,
                created_at DATETIME NOT NULL,
                date_dernier_don DATETIME DEFAULT NULL,
                profile_image_name VARCHAR(255) DEFAULT NULL,
                updated_at DATETIME DEFAULT NULL,
                PRIMARY KEY(id)
            )
        ");

        $this->addSql("
            CREATE TABLE don (
                id INT AUTO_INCREMENT NOT NULL,
                type_don VARCHAR(20) NOT NULL,
                type_sanguin VARCHAR(10) DEFAULT NULL,
                type_organe VARCHAR(50) DEFAULT NULL,
                region VARCHAR(50) NOT NULL,
                urgence TINYINT(1) NOT NULL,
                statut VARCHAR(20) NOT NULL DEFAULT 'EN_ATTENTE',
                date_don DATETIME NOT NULL,
                document_name VARCHAR(255) DEFAULT NULL,
                document_size INT DEFAULT NULL,
                updated_at DATETIME DEFAULT NULL,
                PRIMARY KEY(id)
            )
        ");

    }


    public function down(Schema $schema): void
    {

        $this->addSql("DROP TABLE don");
        $this->addSql("DROP TABLE donneur");

    }

}
