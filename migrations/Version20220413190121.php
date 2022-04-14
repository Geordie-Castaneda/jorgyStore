<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220413190121 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function preUp(Schema $schema): void
    {
        parent::preUp($schema);

        $this->addSql("ALTER session SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_TZ_FORMAT = 'YYYY-MM-DD HH24:MI:SS TZH:TZM'");
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE "storeUser_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE TABLE "storeUser" (id NUMBER(10) NOT NULL, email VARCHAR2(180) NOT NULL, roles CLOB NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_611EBA44E7927C74 ON "storeUser" (email)');
        $this->addSql('COMMENT ON COLUMN "storeUser".roles IS \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE "storeUser_id_seq"');
        $this->addSql('CREATE SEQUENCE "user_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE TABLE "user" (ID NUMBER(10) NOT NULL, EMAIL VARCHAR2(180) NOT NULL, ROLES CLOB NOT NULL, PRIMARY KEY(ID))');
        $this->addSql('CREATE UNIQUE INDEX uniq_8d93d649e7927c74 ON "user" (EMAIL)');
        $this->addSql('COMMENT ON COLUMN "user".ROLES IS \'(DC2Type:json)\'');
        $this->addSql('DROP TABLE "storeUser"');
    }
}
