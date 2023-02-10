<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230210072748 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE terrarium ADD hour_day TIME NOT NULL, ADD hour_night TIME NOT NULL, DROP zoby, DROP zeub');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE terrarium ADD zoby DATETIME DEFAULT NULL, ADD zeub DATETIME DEFAULT NULL, DROP hour_day, DROP hour_night');
    }
}
