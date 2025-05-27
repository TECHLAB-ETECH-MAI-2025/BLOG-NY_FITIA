<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250527181337 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE conversation (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user1_id INTEGER NOT NULL, user2_id INTEGER NOT NULL, created_at DATETIME NOT NULL, CONSTRAINT FK_8A8E26E956AE248B FOREIGN KEY (user1_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_8A8E26E9441B8B65 FOREIGN KEY (user2_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_8A8E26E956AE248B ON conversation (user1_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_8A8E26E9441B8B65 ON conversation (user2_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE message (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, sender_id INTEGER NOT NULL, conversation_id INTEGER NOT NULL, content CLOB NOT NULL, sent_at DATETIME NOT NULL, CONSTRAINT FK_B6BD307FF624B39D FOREIGN KEY (sender_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_B6BD307F9AC0396 FOREIGN KEY (conversation_id) REFERENCES conversation (id) NOT DEFERRABLE INITIALLY IMMEDIATE)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B6BD307FF624B39D ON message (sender_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B6BD307F9AC0396 ON message (conversation_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE conversation
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE message
        SQL);
    }
}
