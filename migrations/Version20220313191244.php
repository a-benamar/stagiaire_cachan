<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220313191244 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formateur CHANGE prenom prenom VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE nom nom VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE email email VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE matiere CHANGE nomMatiere nomMatiere VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE stagiaire CHANGE prenom prenom VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE nom nom VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, CHANGE email email VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`');
    }
}
