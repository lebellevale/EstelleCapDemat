<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210803082641 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ass_mat (id INT AUTO_INCREMENT NOT NULL, nom_prenom VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE liste_assmat (id INT AUTO_INCREMENT NOT NULL, ass_mats LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE liste_secteur (id INT AUTO_INCREMENT NOT NULL, liste_assmats LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE personnependu');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE personnependu (id INT AUTO_INCREMENT NOT NULL, identifiant VARCHAR(256) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, MDP VARCHAR(256) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, motATrouver VARCHAR(256) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, nbTentatives INT DEFAULT 11 NOT NULL, score INT DEFAULT 0, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE ass_mat');
        $this->addSql('DROP TABLE liste_assmat');
        $this->addSql('DROP TABLE liste_secteur');
    }
}
