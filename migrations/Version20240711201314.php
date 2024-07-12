<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240711201314 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creates lead table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE `lead` (id INT AUTO_INCREMENT NOT NULL, postcode VARCHAR(10) NOT NULL, reg VARCHAR(10) NOT NULL, model VARCHAR(255) NOT NULL, date VARCHAR(4) NOT NULL, cylinder VARCHAR(5) NOT NULL, color VARCHAR(20) NOT NULL, keepers VARCHAR(255) NOT NULL, contact VARCHAR(20) NOT NULL, email VARCHAR(255) NOT NULL, fuel VARCHAR(20) NOT NULL, trans VARCHAR(20) NOT NULL, doors VARCHAR(2) NOT NULL, mot_due VARCHAR(10) NOT NULL, lead_id VARCHAR(255) NOT NULL, vin VARCHAR(255) NOT NULL, is_scrap TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE `lead`');
    }
}
