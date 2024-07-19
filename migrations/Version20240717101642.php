<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240717101642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient ADD blood_group VARCHAR(255) DEFAULT NULL, ADD admission_date DATE DEFAULT NULL, DROP blood_type, DROP addmission_date, CHANGE discharge_date discharge_date DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient ADD addmission_date VARCHAR(255) DEFAULT NULL, DROP admission_date, CHANGE discharge_date discharge_date VARCHAR(255) DEFAULT NULL, CHANGE blood_group blood_type VARCHAR(255) DEFAULT NULL');
    }
}
