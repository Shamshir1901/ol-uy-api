<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240605015152 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Change phone column type to VARCHAR(12)';
    }

    public function up(Schema $schema) : void
    {
        // Change phone column to VARCHAR(12)
        $this->addSql('ALTER TABLE user MODIFY phone VARCHAR(12) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // Revert phone column to INT
        $this->addSql('ALTER TABLE user MODIFY phone INT NOT NULL');
    }
}
