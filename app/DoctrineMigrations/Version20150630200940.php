<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150630200940 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("ALTER TABLE `user_bind` ADD `isBind` BOOLEAN NULL DEFAULT FALSE;");
        $this->addSql("ALTER TABLE  `orders` CHANGE  `payment`  `payment` ENUM(  'none', 'alipay', 'tenpay', 'coin', 'wxpay' ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL");

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
