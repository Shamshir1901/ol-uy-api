<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240421035416 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create an Advertisement entity';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE advertisement (id INT AUTO_INCREMENT NOT NULL, image_id INT NOT NULL, city_id INT NOT NULL, category_id INT NOT NULL, description LONGTEXT NOT NULL, text LONGTEXT NOT NULL, count_rooms SMALLINT NOT NULL, count_floor SMALLINT NOT NULL, current_floor SMALLINT DEFAULT NULL, all_floor SMALLINT DEFAULT NULL, size SMALLINT NOT NULL, live_size SMALLINT DEFAULT NULL, status SMALLINT NOT NULL, price SMALLINT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', type SMALLINT NOT NULL, INDEX IDX_C95F6AEE3DA5256D (image_id), INDEX IDX_C95F6AEE8BAC62AF (city_id), INDEX IDX_C95F6AEE12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE advertisement ADD CONSTRAINT FK_C95F6AEE3DA5256D FOREIGN KEY (image_id) REFERENCES media_object (id)');
        $this->addSql('ALTER TABLE advertisement ADD CONSTRAINT FK_C95F6AEE8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE advertisement ADD CONSTRAINT FK_C95F6AEE12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE advertisement DROP FOREIGN KEY FK_C95F6AEE3DA5256D');
        $this->addSql('ALTER TABLE advertisement DROP FOREIGN KEY FK_C95F6AEE8BAC62AF');
        $this->addSql('ALTER TABLE advertisement DROP FOREIGN KEY FK_C95F6AEE12469DE2');
        $this->addSql('DROP TABLE advertisement');
    }
}
