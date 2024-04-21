<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240421035733 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create AdvertisementConvenience entity';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE advertisement_convenience (id INT AUTO_INCREMENT NOT NULL, convenience_id INT NOT NULL, advertisement_id INT NOT NULL, INDEX IDX_2F314C9713A1CE8C (convenience_id), INDEX IDX_2F314C97A1FBF71B (advertisement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE advertisement_convenience ADD CONSTRAINT FK_2F314C9713A1CE8C FOREIGN KEY (convenience_id) REFERENCES convenience (id)');
        $this->addSql('ALTER TABLE advertisement_convenience ADD CONSTRAINT FK_2F314C97A1FBF71B FOREIGN KEY (advertisement_id) REFERENCES advertisement (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE advertisement_convenience DROP FOREIGN KEY FK_2F314C9713A1CE8C');
        $this->addSql('ALTER TABLE advertisement_convenience DROP FOREIGN KEY FK_2F314C97A1FBF71B');
        $this->addSql('DROP TABLE advertisement_convenience');
    }
}
