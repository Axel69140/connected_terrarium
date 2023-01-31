<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230131085638 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE data (id INT AUTO_INCREMENT NOT NULL, value DOUBLE PRECISION NOT NULL, night_value DOUBLE PRECISION NOT NULL, delta DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE humidity (id INT AUTO_INCREMENT NOT NULL, value DOUBLE PRECISION NOT NULL, night_value DOUBLE PRECISION NOT NULL, delta DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temperature (id INT AUTO_INCREMENT NOT NULL, value DOUBLE PRECISION NOT NULL, night_value DOUBLE PRECISION NOT NULL, delta DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE terrarium (id INT AUTO_INCREMENT NOT NULL, temperature_id INT NOT NULL, humidity_id INT DEFAULT NULL, luminosity_level DOUBLE PRECISION NOT NULL, min_luminosity_level DOUBLE PRECISION NOT NULL, night_hour DATETIME NOT NULL, `day_hour` DATETIME NOT NULL, name VARCHAR(255) NOT NULL, specimen DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_AD791373D9835775 (temperature_id), UNIQUE INDEX UNIQ_AD791373201FD671 (humidity_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE terrarium ADD CONSTRAINT FK_AD791373D9835775 FOREIGN KEY (temperature_id) REFERENCES temperature (id)');
        $this->addSql('ALTER TABLE terrarium ADD CONSTRAINT FK_AD791373201FD671 FOREIGN KEY (humidity_id) REFERENCES humidity (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE terrarium DROP FOREIGN KEY FK_AD791373D9835775');
        $this->addSql('ALTER TABLE terrarium DROP FOREIGN KEY FK_AD791373201FD671');
        $this->addSql('DROP TABLE data');
        $this->addSql('DROP TABLE humidity');
        $this->addSql('DROP TABLE temperature');
        $this->addSql('DROP TABLE terrarium');
        $this->addSql('DROP TABLE `user`');
    }
}
