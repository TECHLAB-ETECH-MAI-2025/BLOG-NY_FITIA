<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250529180422 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE message ADD COLUMN is_read BOOLEAN NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TEMPORARY TABLE __temp__message AS SELECT id, sender_id, recipient_id, content, created_at FROM message
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE message
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE message (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, sender_id INTEGER DEFAULT NULL, recipient_id INTEGER NOT NULL, content CLOB NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
            , CONSTRAINT FK_B6BD307FF624B39D FOREIGN KEY (sender_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_B6BD307FE92F8F78 FOREIGN KEY (recipient_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)
        SQL);
        $this->addSql(<<<'SQL'
            INSERT INTO message (id, sender_id, recipient_id, content, created_at) SELECT id, sender_id, recipient_id, content, created_at FROM __temp__message
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE __temp__message
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B6BD307FF624B39D ON message (sender_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B6BD307FE92F8F78 ON message (recipient_id)
        SQL);
    }
}
