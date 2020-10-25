<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201025201620 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE especes');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE especes (REGNE VARCHAR(8) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PHYLUM VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CLASSE VARCHAR(8) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ORDRE VARCHAR(11) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, FAMILLE VARCHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, SOUS_FAMILLE VARCHAR(17) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, TRIBU VARCHAR(16) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, GROUP1_INPN VARCHAR(11) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, GROUP2_INPN VARCHAR(8) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CD_NOM INT DEFAULT NULL, CD_TAXSUP VARCHAR(6) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CD_SUP VARCHAR(6) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CD_REF INT DEFAULT NULL, RANG VARCHAR(4) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, LB_NOM VARCHAR(47) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, LB_AUTEUR VARCHAR(65) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, NOM_COMPLET VARCHAR(87) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, NOM_COMPLET_HTML VARCHAR(102) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, NOM_VALIDE VARCHAR(81) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, NOM_VERN VARCHAR(37) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, NOM_VERN_ENG VARCHAR(78) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, HABITAT VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, FR VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, GF VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, MAR VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, GUA VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, SM VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, SB VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, SPM VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, MAY VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, EPA VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, REU VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, SA VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, TA VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, TAAF VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PF VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, NC VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, WF VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CLI VARCHAR(1) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, URL VARCHAR(41) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE user');
    }
}
