<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240421040111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create CompanyComment entity';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company_comment (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, company_id INT NOT NULL, comment LONGTEXT NOT NULL, INDEX IDX_B42648BBA76ED395 (user_id), INDEX IDX_B42648BB979B1AD6 (company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE company_comment ADD CONSTRAINT FK_B42648BBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE company_comment ADD CONSTRAINT FK_B42648BB979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company_comment DROP FOREIGN KEY FK_B42648BBA76ED395');
        $this->addSql('ALTER TABLE company_comment DROP FOREIGN KEY FK_B42648BB979B1AD6');
        $this->addSql('DROP TABLE company_comment');
    }
}
