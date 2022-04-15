<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220415000609 extends AbstractMigration
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
        $this->addSql('insert into PRODUCT (ID, NAME, DESCRIPTION, PRICE, URL) values (2, \'Sofa para sala\', \'Sofa blanco, para decorar la sala\', 779, \'images/tr2.png\')');
        $this->addSql('insert into PRODUCT (ID, NAME, DESCRIPTION, PRICE, URL) values (3, \'Silla y mesa\', \'Juego de silla y mesa para sala\', 880, \'images/tr3.png\')');
        $this->addSql('insert into PRODUCT (ID, NAME, DESCRIPTION, PRICE, URL) values (4, \'Sillas negras\', \'Hermosa sillas negras para decorar la sala\', 222, \'images/tr4.png\')');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
