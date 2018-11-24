<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181123150008 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE benutzer (id INT AUTO_INCREMENT NOT NULL, geschlecht VARCHAR(1) NOT NULL, name VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, sp_gesetzt TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fach (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kalender_eintrag (id INT AUTO_INCREMENT NOT NULL, benutzer_id INT NOT NULL, klasse_id INT NOT NULL, fach_id INT NOT NULL, datum DATETIME NOT NULL, kalender_key VARCHAR(255) NOT NULL, notiz VARCHAR(255) NOT NULL, INDEX IDX_498C4A989F9AC274 (benutzer_id), INDEX IDX_498C4A9834860711 (klasse_id), INDEX IDX_498C4A98FA2B40D (fach_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE klasse (id INT AUTO_INCREMENT NOT NULL, benutzer_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_63D43DFB9F9AC274 (benutzer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE schueler (id INT AUTO_INCREMENT NOT NULL, klasse_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_C382476D34860711 (klasse_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE todo (id INT AUTO_INCREMENT NOT NULL, benutzer_id INT NOT NULL, klasse_id INT NOT NULL, fach_id INT NOT NULL, todo_string VARCHAR(255) NOT NULL, todo_key VARCHAR(255) NOT NULL, erledigt TINYINT(1) NOT NULL, INDEX IDX_5A0EB6A09F9AC274 (benutzer_id), INDEX IDX_5A0EB6A034860711 (klasse_id), INDEX IDX_5A0EB6A0FA2B40D (fach_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kalender_eintrag ADD CONSTRAINT FK_498C4A989F9AC274 FOREIGN KEY (benutzer_id) REFERENCES benutzer (id)');
        $this->addSql('ALTER TABLE kalender_eintrag ADD CONSTRAINT FK_498C4A9834860711 FOREIGN KEY (klasse_id) REFERENCES klasse (id)');
        $this->addSql('ALTER TABLE kalender_eintrag ADD CONSTRAINT FK_498C4A98FA2B40D FOREIGN KEY (fach_id) REFERENCES fach (id)');
        $this->addSql('ALTER TABLE klasse ADD CONSTRAINT FK_63D43DFB9F9AC274 FOREIGN KEY (benutzer_id) REFERENCES benutzer (id)');
        $this->addSql('ALTER TABLE schueler ADD CONSTRAINT FK_C382476D34860711 FOREIGN KEY (klasse_id) REFERENCES klasse (id)');
        $this->addSql('ALTER TABLE todo ADD CONSTRAINT FK_5A0EB6A09F9AC274 FOREIGN KEY (benutzer_id) REFERENCES benutzer (id)');
        $this->addSql('ALTER TABLE todo ADD CONSTRAINT FK_5A0EB6A034860711 FOREIGN KEY (klasse_id) REFERENCES klasse (id)');
        $this->addSql('ALTER TABLE todo ADD CONSTRAINT FK_5A0EB6A0FA2B40D FOREIGN KEY (fach_id) REFERENCES fach (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE kalender_eintrag DROP FOREIGN KEY FK_498C4A989F9AC274');
        $this->addSql('ALTER TABLE klasse DROP FOREIGN KEY FK_63D43DFB9F9AC274');
        $this->addSql('ALTER TABLE todo DROP FOREIGN KEY FK_5A0EB6A09F9AC274');
        $this->addSql('ALTER TABLE kalender_eintrag DROP FOREIGN KEY FK_498C4A98FA2B40D');
        $this->addSql('ALTER TABLE todo DROP FOREIGN KEY FK_5A0EB6A0FA2B40D');
        $this->addSql('ALTER TABLE kalender_eintrag DROP FOREIGN KEY FK_498C4A9834860711');
        $this->addSql('ALTER TABLE schueler DROP FOREIGN KEY FK_C382476D34860711');
        $this->addSql('ALTER TABLE todo DROP FOREIGN KEY FK_5A0EB6A034860711');
        $this->addSql('DROP TABLE benutzer');
        $this->addSql('DROP TABLE fach');
        $this->addSql('DROP TABLE kalender_eintrag');
        $this->addSql('DROP TABLE klasse');
        $this->addSql('DROP TABLE schueler');
        $this->addSql('DROP TABLE todo');
    }
}
