-- Create FAQ table
CREATE TABLE IF NOT EXISTS `faq` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `question` VARCHAR(255) NOT NULL,
    `answer` LONGTEXT NOT NULL,
    `category` VARCHAR(50) NOT NULL DEFAULT 'general',
    `display_order` INT NOT NULL DEFAULT 0,
    `is_published` TINYINT(1) NOT NULL DEFAULT 1,
    `view_count` INT NOT NULL DEFAULT 0,
    `helpful_count` INT NOT NULL DEFAULT 0,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME DEFAULT NULL,
    PRIMARY KEY(`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

-- Create support_ticket table
CREATE TABLE IF NOT EXISTS `support_ticket` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `description` LONGTEXT NOT NULL,
    `status` VARCHAR(20) NOT NULL DEFAULT 'open',
    `priority` VARCHAR(20) NOT NULL DEFAULT 'medium',
    `category` VARCHAR(50) NOT NULL DEFAULT 'general',
    `user_email` VARCHAR(180) NOT NULL,
    `user_name` VARCHAR(100) NOT NULL,
    `assigned_to` VARCHAR(100) DEFAULT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME DEFAULT NULL,
    `resolved_at` DATETIME DEFAULT NULL,
    PRIMARY KEY(`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

-- Create chat_message table
CREATE TABLE IF NOT EXISTS `chat_message` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `content` LONGTEXT NOT NULL,
    `sender_name` VARCHAR(100) NOT NULL,
    `sender_type` VARCHAR(20) NOT NULL DEFAULT 'user',
    `created_at` DATETIME NOT NULL,
    `is_read` TINYINT(1) NOT NULL DEFAULT 0,
    `ticket_id` INT NOT NULL,
    INDEX IDX_CHAT_MESSAGE_TICKET (`ticket_id`),
    PRIMARY KEY(`id`),
    CONSTRAINT FK_CHAT_MESSAGE_TICKET FOREIGN KEY (`ticket_id`) REFERENCES `support_ticket` (`id`) ON DELETE CASCADE
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;

-- Insert sample FAQ data
INSERT INTO `faq` (`question`, `answer`, `category`, `display_order`, `is_published`, `created_at`) VALUES
('Comment puis-je faire un don de sang ?', 'Pour faire un don de sang, vous devez vous inscrire en tant que donneur sur notre plateforme. Une fois inscrit, vous recevrez des notifications pour les besoins de don compatibles avec votre groupe sanguin. Vous pouvez aussi vous rendre directement dans un centre de transfusion sanguine.', 'don', 1, 1, NOW()),
('Quelles sont les conditions pour donner du sang ?', 'Pour donner du sang, vous devez : avoir entre 18 et 65 ans, peser plus de 50 kg, être en bonne santé, et avoir jeûné au moins 4 heures avant le don. Certaines conditions médicales peuvent vous empêcher de donner temporairement ou définitivement.', 'don', 2, 1, NOW()),
('Comment créer une demande de don ?', 'Pour créer une demande de don, rendez-vous dans la section "Don" puis cliquez sur "Demande de don". Remplissez le formulaire avec le type de don nécessaire (sang ou organe), le groupe sanguin si applicable, la région et indiquez si c\'est une urgence.', 'don', 3, 1, NOW()),
('Comment signaler une urgence ?', 'En cas d\'urgence, vous pouvez utiliser la fonctionnalité d\'urgence dans la section Aide. Vous y trouverez également les numéros d\'urgence importants : SAMU (190), Pompiers (193), Police (197).', 'urgence', 4, 1, NOW()),
('Comment contacter le support ?', 'Pour contacter notre équipe de support, rendez-vous dans la section Aide puis cliquez sur "Créer un ticket". Décrivez votre problème et notre équipe vous répondra dans les plus brefs délais (généralement sous 24h).', 'general', 5, 1, NOW());
