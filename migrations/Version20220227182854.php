<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220227182854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evaluation CHANGE idMatiere idMatiere INT DEFAULT NULL, CHANGE idStagiaire idStagiaire INT DEFAULT NULL');
        $this->addSql('ALTER TABLE enseigner RENAME INDEX idformateur TO IDX_663E85CD119C5519');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseigner RENAME INDEX idx_663e85cd119c5519 TO idFormateur');
        $this->addSql('ALTER TABLE evaluation CHANGE idMatiere idMatiere INT NOT NULL, CHANGE idStagiaire idStagiaire INT NOT NULL');
        $this->addSql('ALTER TABLE formateur CHANGE prenom prenom VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE nom nom VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE email email VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE matiere CHANGE nomMatiere nomMatiere VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE stagiaire CHANGE prenom prenom VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE nom nom VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE email email VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`');
    }
}
