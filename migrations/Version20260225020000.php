<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260225020000 extends AbstractMigration
{

    public function getDescription(): string
    {
        return 'Create all remaining tables';
    }

    public function up(Schema $schema): void
    {

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `user` (
                id INT AUTO_INCREMENT NOT NULL,
                email VARCHAR(180) NOT NULL,
                roles JSON NOT NULL,
                password VARCHAR(255) NOT NULL,
                nom VARCHAR(255) NOT NULL,
                prenom VARCHAR(255) NOT NULL,
                telephone VARCHAR(20) DEFAULT NULL,
                created_at DATETIME NOT NULL,
                UNIQUE INDEX UNIQ_8D93D649E7927C74 (email),
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `hopital` (
                id INT AUTO_INCREMENT NOT NULL,
                nom VARCHAR(255) NOT NULL,
                adresse VARCHAR(255) NOT NULL,
                tel VARCHAR(255) NOT NULL,
                service_urgence_dispo TINYINT(1) DEFAULT NULL,
                latitude DOUBLE PRECISION NOT NULL,
                longitude DOUBLE PRECISION NOT NULL,
                capacite INT NOT NULL,
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `analyse_ai` (
                id INT AUTO_INCREMENT NOT NULL,
                patient_id INT NOT NULL,
                symptomes LONGTEXT NOT NULL,
                niveau_risque DOUBLE PRECISION NOT NULL,
                specialite_recommandee VARCHAR(255) NOT NULL,
                decision_proposee LONGTEXT NOT NULL,
                created_at DATETIME NOT NULL,
                INDEX IDX_ANALYSE_AI_PATIENT (patient_id),
                PRIMARY KEY(id),
                CONSTRAINT FK_ANALYSE_AI_PATIENT FOREIGN KEY (patient_id) REFERENCES `user` (id) ON DELETE CASCADE
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `rendez_vous` (
                id INT AUTO_INCREMENT NOT NULL,
                patient_id INT DEFAULT NULL,
                medecin_id INT DEFAULT NULL,
                hopital_id INT NOT NULL,
                type_consultation VARCHAR(255) NOT NULL,
                statut VARCHAR(255) NOT NULL,
                score_ai DOUBLE PRECISION DEFAULT NULL,
                date_rendez_vous DATETIME NOT NULL,
                notes LONGTEXT DEFAULT NULL,
                created_at DATETIME NOT NULL,
                updated_at DATETIME NOT NULL,
                INDEX IDX_RENDEZ_VOUS_PATIENT (patient_id),
                INDEX IDX_RENDEZ_VOUS_MEDECIN (medecin_id),
                INDEX IDX_RENDEZ_VOUS_HOPITAL (hopital_id),
                PRIMARY KEY(id),
                CONSTRAINT FK_RENDEZ_VOUS_PATIENT FOREIGN KEY (patient_id) REFERENCES `user` (id) ON DELETE SET NULL,
                CONSTRAINT FK_RENDEZ_VOUS_MEDECIN FOREIGN KEY (medecin_id) REFERENCES `user` (id) ON DELETE SET NULL,
                CONSTRAINT FK_RENDEZ_VOUS_HOPITAL FOREIGN KEY (hopital_id) REFERENCES hopital (id) ON DELETE CASCADE
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `urgence` (
                id INT AUTO_INCREMENT NOT NULL,
                latitude DOUBLE PRECISION NOT NULL,
                longitude DOUBLE PRECISION NOT NULL,
                message LONGTEXT NOT NULL,
                statut VARCHAR(50) NOT NULL,
                date_urgence DATETIME NOT NULL,
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `demande_don` (
                id INT AUTO_INCREMENT NOT NULL,
                type_demande VARCHAR(20) NOT NULL,
                type_organe VARCHAR(50) DEFAULT NULL,
                type_sanguin VARCHAR(5) DEFAULT NULL,
                region VARCHAR(50) NOT NULL,
                urgency TINYINT(1) NOT NULL,
                rang_attente INT NOT NULL,
                date_demande DATETIME NOT NULL,
                status VARCHAR(20) NOT NULL,
                patient_nom VARCHAR(100) DEFAULT NULL,
                patient_email VARCHAR(180) DEFAULT NULL,
                patient_telephone VARCHAR(20) DEFAULT NULL,
                description LONGTEXT DEFAULT NULL,
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `reponse_don` (
                id INT AUTO_INCREMENT NOT NULL,
                demande_id INT NOT NULL,
                donneur_nom VARCHAR(100) NOT NULL,
                donneur_email VARCHAR(180) NOT NULL,
                donneur_telephone VARCHAR(20) NOT NULL,
                donneur_groupe_sanguin VARCHAR(5) DEFAULT NULL,
                message LONGTEXT NOT NULL,
                status VARCHAR(20) NOT NULL,
                created_at DATETIME NOT NULL,
                responded_at DATETIME DEFAULT NULL,
                INDEX IDX_REPONSE_DON_DEMANDE (demande_id),
                PRIMARY KEY(id),
                CONSTRAINT FK_REPONSE_DON_DEMANDE FOREIGN KEY (demande_id) REFERENCES demande_don (id) ON DELETE CASCADE
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `video_tutorial` (
                id INT AUTO_INCREMENT NOT NULL,
                title VARCHAR(255) NOT NULL,
                description LONGTEXT NOT NULL,
                video_url VARCHAR(255) NOT NULL,
                category VARCHAR(100) NOT NULL DEFAULT 'general',
                duration INT NOT NULL DEFAULT 0,
                display_order INT NOT NULL DEFAULT 0,
                is_published TINYINT(1) NOT NULL DEFAULT 1,
                view_count INT NOT NULL DEFAULT 0,
                like_count INT NOT NULL DEFAULT 0,
                thumbnail_name VARCHAR(255) DEFAULT NULL,
                updated_at DATETIME DEFAULT NULL,
                created_at DATETIME NOT NULL,
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `support_ticket` (
                id INT AUTO_INCREMENT NOT NULL,
                subject VARCHAR(255) NOT NULL,
                description LONGTEXT NOT NULL,
                status VARCHAR(20) NOT NULL DEFAULT 'open',
                priority VARCHAR(20) NOT NULL DEFAULT 'medium',
                category VARCHAR(50) NOT NULL DEFAULT 'general',
                user_email VARCHAR(180) NOT NULL,
                user_name VARCHAR(100) NOT NULL,
                assigned_to VARCHAR(100) DEFAULT NULL,
                created_at DATETIME NOT NULL,
                updated_at DATETIME DEFAULT NULL,
                resolved_at DATETIME DEFAULT NULL,
                attachment_name VARCHAR(255) DEFAULT NULL,
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `chat_message` (
                id INT AUTO_INCREMENT NOT NULL,
                ticket_id INT NOT NULL,
                content LONGTEXT NOT NULL,
                sender_name VARCHAR(100) NOT NULL,
                sender_type VARCHAR(20) NOT NULL DEFAULT 'user',
                created_at DATETIME NOT NULL,
                is_read TINYINT(1) NOT NULL DEFAULT 0,
                INDEX IDX_CHAT_MESSAGE_TICKET (ticket_id),
                PRIMARY KEY(id),
                CONSTRAINT FK_CHAT_MESSAGE_TICKET FOREIGN KEY (ticket_id) REFERENCES support_ticket (id) ON DELETE CASCADE
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `support_feedback` (
                id INT AUTO_INCREMENT NOT NULL,
                ticket_id INT NOT NULL,
                rating INT NOT NULL DEFAULT 5,
                comment VARCHAR(1000) DEFAULT NULL,
                feedback_type VARCHAR(50) NOT NULL DEFAULT 'general',
                would_recommend TINYINT(1) NOT NULL DEFAULT 1,
                created_at DATETIME NOT NULL,
                INDEX IDX_SUPPORT_FEEDBACK_TICKET (ticket_id),
                PRIMARY KEY(id),
                CONSTRAINT FK_SUPPORT_FEEDBACK_TICKET FOREIGN KEY (ticket_id) REFERENCES support_ticket (id) ON DELETE CASCADE
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

        $this->addSql("
            CREATE TABLE IF NOT EXISTS `lieu_medical_review` (
                id INT AUTO_INCREMENT NOT NULL,
                lieu_id INT NOT NULL,
                author_name VARCHAR(100) NOT NULL,
                author_email VARCHAR(180) NOT NULL,
                rating INT NOT NULL DEFAULT 5,
                comment LONGTEXT NOT NULL,
                is_verified TINYINT(1) NOT NULL DEFAULT 0,
                helpful_count INT NOT NULL DEFAULT 0,
                created_at DATETIME NOT NULL,
                INDEX IDX_LIEU_MEDICAL_REVIEW_LIEU (lieu_id),
                PRIMARY KEY(id),
                CONSTRAINT FK_LIEU_MEDICAL_REVIEW_LIEU FOREIGN KEY (lieu_id) REFERENCES lieu_medical (id) ON DELETE CASCADE
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB
        ");

    }

    public function down(Schema $schema): void
    {
        $this->addSql("DROP TABLE IF EXISTS lieu_medical_review");
        $this->addSql("DROP TABLE IF EXISTS support_feedback");
        $this->addSql("DROP TABLE IF EXISTS chat_message");
        $this->addSql("DROP TABLE IF EXISTS video_tutorial");
        $this->addSql("DROP TABLE IF EXISTS reponse_don");
        $this->addSql("DROP TABLE IF EXISTS demande_don");
        $this->addSql("DROP TABLE IF EXISTS urgence");
        $this->addSql("DROP TABLE IF EXISTS rendez_vous");
        $this->addSql("DROP TABLE IF EXISTS analyse_ai");
        $this->addSql("DROP TABLE IF EXISTS hopital");
        $this->addSql("DROP TABLE IF EXISTS support_ticket");
        $this->addSql("DROP TABLE IF EXISTS `user`");
    }
}
