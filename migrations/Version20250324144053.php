<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250324144053 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entrainment RENAME INDEX equipe_fk_2 TO IDX_C96EBE976D861B89');
        $this->addSql('ALTER TABLE entrainment RENAME INDEX installation_fk_1 TO IDX_C96EBE976B15A882');
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY user_fk_1');
        $this->addSql('ALTER TABLE equipe CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA153C105691 FOREIGN KEY (coach_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe RENAME INDEX user_fk_1 TO IDX_2449BA153C105691');
        $this->addSql('ALTER TABLE equipement ADD type_equipement VARCHAR(255) NOT NULL, ADD image_url VARCHAR(255) NOT NULL, DROP typeEquipement, DROP imageUrl, CHANGE id id INT NOT NULL');
        $this->addSql('DROP INDEX nom_exercice_index ON exercice');
        $this->addSql('ALTER TABLE exercice CHANGE id id INT NOT NULL, CHANGE typeExercice type_exercice VARCHAR(255) NOT NULL, CHANGE dureeMinutes duree_minutes INT NOT NULL');
        $this->addSql('ALTER TABLE exercice_entrainment DROP FOREIGN KEY entrainment_fk_1');
        $this->addSql('ALTER TABLE exercice_entrainment DROP FOREIGN KEY exercice_fk_1');
        $this->addSql('ALTER TABLE exercice_entrainment CHANGE id id INT NOT NULL, CHANGE entrainment_id entrainment_id INT DEFAULT NULL, CHANGE exercice_id exercice_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE exercice_entrainment ADD CONSTRAINT FK_E22E927F4E51A4E5 FOREIGN KEY (entrainment_id) REFERENCES entrainment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercice_entrainment ADD CONSTRAINT FK_E22E927F89D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercice_entrainment RENAME INDEX entrainment_fk_1 TO IDX_E22E927F4E51A4E5');
        $this->addSql('ALTER TABLE exercice_entrainment RENAME INDEX exercice_fk_1 TO IDX_E22E927F89D40298');
        $this->addSql('ALTER TABLE installationsportive CHANGE id id INT NOT NULL, CHANGE typeInstallation type_installation VARCHAR(255) NOT NULL, CHANGE isDisponible is_disponible TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE matchsportif DROP FOREIGN KEY equipe_fk_1_');
        $this->addSql('ALTER TABLE matchsportif DROP FOREIGN KEY equipe_fk_2_');
        $this->addSql('ALTER TABLE matchsportif DROP FOREIGN KEY tournois_fk_1');
        $this->addSql('ALTER TABLE matchsportif CHANGE id id INT NOT NULL, CHANGE tournois_id tournois_id INT DEFAULT NULL, CHANGE equipe1_id equipe1_id INT DEFAULT NULL, CHANGE equipe2_id equipe2_id INT DEFAULT NULL, CHANGE date date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE matchsportif ADD CONSTRAINT FK_8AD05A0F752534C FOREIGN KEY (tournois_id) REFERENCES tournois (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matchsportif ADD CONSTRAINT FK_8AD05A0F4265900C FOREIGN KEY (equipe1_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matchsportif ADD CONSTRAINT FK_8AD05A0F50D03FE2 FOREIGN KEY (equipe2_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matchsportif RENAME INDEX tournois_fk_1 TO IDX_8AD05A0F752534C');
        $this->addSql('ALTER TABLE matchsportif RENAME INDEX equipe_fk_1_ TO IDX_8AD05A0F4265900C');
        $this->addSql('ALTER TABLE matchsportif RENAME INDEX equipe_fk_2_ TO IDX_8AD05A0F50D03FE2');
        $this->addSql('ALTER TABLE performanceathlete DROP FOREIGN KEY athlete_fk_3');
        $this->addSql('ALTER TABLE performanceathlete DROP FOREIGN KEY match_fk_1');
        $this->addSql('ALTER TABLE performanceathlete ADD minutes_jouees INT NOT NULL, ADD passes_decisives INT NOT NULL, ADD cartons_jaunes INT NOT NULL, ADD cartons_rouges INT NOT NULL, DROP minutesJouees, DROP passesDecisives, DROP cartonsJaunes, DROP cartonsRouges, CHANGE id id INT NOT NULL, CHANGE athlete_id athlete_id INT DEFAULT NULL, CHANGE match_id match_id INT DEFAULT NULL, CHANGE buts buts INT NOT NULL, CHANGE tirs tirs INT NOT NULL, CHANGE interceptions interceptions INT NOT NULL, CHANGE fautes fautes INT NOT NULL, CHANGE rebonds rebonds INT NOT NULL');
        $this->addSql('ALTER TABLE performanceathlete ADD CONSTRAINT FK_59E04AC0FE6BCB8B FOREIGN KEY (athlete_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE performanceathlete ADD CONSTRAINT FK_59E04AC02ABEACD6 FOREIGN KEY (match_id) REFERENCES matchsportif (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE performanceathlete RENAME INDEX athlete_fk_3 TO IDX_59E04AC0FE6BCB8B');
        $this->addSql('ALTER TABLE performanceathlete RENAME INDEX match_fk_1 TO IDX_59E04AC02ABEACD6');
        $this->addSql('ALTER TABLE performanceequipe DROP FOREIGN KEY tournois_fk_512');
        $this->addSql('ALTER TABLE performanceequipe DROP FOREIGN KEY equipe_fk_222');
        $this->addSql('ALTER TABLE performanceequipe CHANGE equipe_id equipe_id INT DEFAULT NULL, CHANGE tournois_id tournois_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE performanceequipe ADD CONSTRAINT FK_F6D1E1166D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE performanceequipe ADD CONSTRAINT FK_F6D1E116752534C FOREIGN KEY (tournois_id) REFERENCES tournois (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE performanceequipe RENAME INDEX equipe_fk_222 TO IDX_F6D1E1166D861B89');
        $this->addSql('ALTER TABLE performanceequipe RENAME INDEX tournois_fk_512 TO IDX_F6D1E116752534C');
        $this->addSql('ALTER TABLE tournois CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY equipe_fk_1');
        $this->addSql('DROP INDEX email_unique_index ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur CHANGE id id INT NOT NULL, CHANGE status status VARCHAR(255) NOT NULL, CHANGE birthday birthday DATE NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B36D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur RENAME INDEX equipe_fk_1 TO IDX_1D1C63B36D861B89');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entrainment RENAME INDEX idx_c96ebe976d861b89 TO equipe_fk_2');
        $this->addSql('ALTER TABLE entrainment RENAME INDEX idx_c96ebe976b15a882 TO installation_fk_1');
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA153C105691');
        $this->addSql('ALTER TABLE equipe CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT user_fk_1 FOREIGN KEY (coach_id) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe RENAME INDEX idx_2449ba153c105691 TO user_fk_1');
        $this->addSql('ALTER TABLE equipement ADD typeEquipement VARCHAR(255) NOT NULL, ADD imageUrl VARCHAR(255) NOT NULL, DROP type_equipement, DROP image_url, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE exercice CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE type_exercice typeExercice VARCHAR(255) NOT NULL, CHANGE duree_minutes dureeMinutes INT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX nom_exercice_index ON exercice (nom)');
        $this->addSql('ALTER TABLE exercice_entrainment DROP FOREIGN KEY FK_E22E927F4E51A4E5');
        $this->addSql('ALTER TABLE exercice_entrainment DROP FOREIGN KEY FK_E22E927F89D40298');
        $this->addSql('ALTER TABLE exercice_entrainment CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE entrainment_id entrainment_id INT NOT NULL, CHANGE exercice_id exercice_id INT NOT NULL');
        $this->addSql('ALTER TABLE exercice_entrainment ADD CONSTRAINT entrainment_fk_1 FOREIGN KEY (entrainment_id) REFERENCES entrainment (id)');
        $this->addSql('ALTER TABLE exercice_entrainment ADD CONSTRAINT exercice_fk_1 FOREIGN KEY (exercice_id) REFERENCES exercice (id)');
        $this->addSql('ALTER TABLE exercice_entrainment RENAME INDEX idx_e22e927f89d40298 TO exercice_fk_1');
        $this->addSql('ALTER TABLE exercice_entrainment RENAME INDEX idx_e22e927f4e51a4e5 TO entrainment_fk_1');
        $this->addSql('ALTER TABLE installationsportive CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE type_installation typeInstallation VARCHAR(255) NOT NULL, CHANGE is_disponible isDisponible TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE matchsportif DROP FOREIGN KEY FK_8AD05A0F752534C');
        $this->addSql('ALTER TABLE matchsportif DROP FOREIGN KEY FK_8AD05A0F4265900C');
        $this->addSql('ALTER TABLE matchsportif DROP FOREIGN KEY FK_8AD05A0F50D03FE2');
        $this->addSql('ALTER TABLE matchsportif CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE tournois_id tournois_id INT NOT NULL, CHANGE equipe1_id equipe1_id INT NOT NULL, CHANGE equipe2_id equipe2_id INT NOT NULL, CHANGE date date DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE matchsportif ADD CONSTRAINT equipe_fk_1_ FOREIGN KEY (equipe1_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE matchsportif ADD CONSTRAINT equipe_fk_2_ FOREIGN KEY (equipe2_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE matchsportif ADD CONSTRAINT tournois_fk_1 FOREIGN KEY (tournois_id) REFERENCES tournois (id)');
        $this->addSql('ALTER TABLE matchsportif RENAME INDEX idx_8ad05a0f4265900c TO equipe_fk_1_');
        $this->addSql('ALTER TABLE matchsportif RENAME INDEX idx_8ad05a0f50d03fe2 TO equipe_fk_2_');
        $this->addSql('ALTER TABLE matchsportif RENAME INDEX idx_8ad05a0f752534c TO tournois_fk_1');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE performanceathlete DROP FOREIGN KEY FK_59E04AC0FE6BCB8B');
        $this->addSql('ALTER TABLE performanceathlete DROP FOREIGN KEY FK_59E04AC02ABEACD6');
        $this->addSql('ALTER TABLE performanceathlete ADD minutesJouees INT DEFAULT NULL, ADD passesDecisives INT DEFAULT NULL, ADD cartonsJaunes INT DEFAULT NULL, ADD cartonsRouges INT DEFAULT NULL, DROP minutes_jouees, DROP passes_decisives, DROP cartons_jaunes, DROP cartons_rouges, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE athlete_id athlete_id INT NOT NULL, CHANGE match_id match_id INT NOT NULL, CHANGE buts buts INT DEFAULT NULL, CHANGE tirs tirs INT DEFAULT NULL, CHANGE interceptions interceptions INT DEFAULT NULL, CHANGE fautes fautes INT DEFAULT NULL, CHANGE rebonds rebonds INT DEFAULT NULL');
        $this->addSql('ALTER TABLE performanceathlete ADD CONSTRAINT athlete_fk_3 FOREIGN KEY (athlete_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE performanceathlete ADD CONSTRAINT match_fk_1 FOREIGN KEY (match_id) REFERENCES matchsportif (id)');
        $this->addSql('ALTER TABLE performanceathlete RENAME INDEX idx_59e04ac0fe6bcb8b TO athlete_fk_3');
        $this->addSql('ALTER TABLE performanceathlete RENAME INDEX idx_59e04ac02abeacd6 TO match_fk_1');
        $this->addSql('ALTER TABLE performanceequipe DROP FOREIGN KEY FK_F6D1E1166D861B89');
        $this->addSql('ALTER TABLE performanceequipe DROP FOREIGN KEY FK_F6D1E116752534C');
        $this->addSql('ALTER TABLE performanceequipe CHANGE equipe_id equipe_id INT NOT NULL, CHANGE tournois_id tournois_id INT NOT NULL');
        $this->addSql('ALTER TABLE performanceequipe ADD CONSTRAINT tournois_fk_512 FOREIGN KEY (tournois_id) REFERENCES tournois (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE performanceequipe ADD CONSTRAINT equipe_fk_222 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE performanceequipe RENAME INDEX idx_f6d1e1166d861b89 TO equipe_fk_222');
        $this->addSql('ALTER TABLE performanceequipe RENAME INDEX idx_f6d1e116752534c TO tournois_fk_512');
        $this->addSql('ALTER TABLE tournois CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B36D861B89');
        $this->addSql('ALTER TABLE utilisateur CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE status status VARCHAR(255) DEFAULT \'\'\'INACTIVE\'\'\', CHANGE birthday birthday DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT equipe_fk_1 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE UNIQUE INDEX email_unique_index ON utilisateur (email)');
        $this->addSql('ALTER TABLE utilisateur RENAME INDEX idx_1d1c63b36d861b89 TO equipe_fk_1');
    }
}
