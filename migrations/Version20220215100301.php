<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220215100301 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE calendrier');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE calendrier (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, start DATETIME NOT NULL, end DATETIME NOT NULL, commentaire LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, event_duration TINYINT(1) NOT NULL, background_color VARCHAR(7) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, border_color VARCHAR(7) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, text_color VARCHAR(7) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
    }
}
