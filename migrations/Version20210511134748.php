<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210511134748 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actu ADD image_id INT DEFAULT NULL, ADD commentaires_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE actu ADD CONSTRAINT FK_837303423DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE actu ADD CONSTRAINT FK_8373034217C4B2B0 FOREIGN KEY (commentaires_id) REFERENCES commentaire (id)');
        $this->addSql('CREATE INDEX IDX_837303423DA5256D ON actu (image_id)');
        $this->addSql('CREATE INDEX IDX_8373034217C4B2B0 ON actu (commentaires_id)');
        $this->addSql('ALTER TABLE image ADD audio_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F3A3123C7 FOREIGN KEY (audio_id) REFERENCES audio (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F3A3123C7 ON image (audio_id)');
        $this->addSql('ALTER TABLE prestation ADD audio_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE prestation ADD CONSTRAINT FK_51C88FAD3A3123C7 FOREIGN KEY (audio_id) REFERENCES audio (id)');
        $this->addSql('CREATE INDEX IDX_51C88FAD3A3123C7 ON prestation (audio_id)');
        $this->addSql('ALTER TABLE role ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE role ADD CONSTRAINT FK_57698A6AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_57698A6AA76ED395 ON role (user_id)');
        $this->addSql('ALTER TABLE user ADD audio_id INT DEFAULT NULL, ADD actu_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493A3123C7 FOREIGN KEY (audio_id) REFERENCES audio (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F77EEF58 FOREIGN KEY (actu_id) REFERENCES actu (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6493A3123C7 ON user (audio_id)');
        $this->addSql('CREATE INDEX IDX_8D93D649F77EEF58 ON user (actu_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actu DROP FOREIGN KEY FK_837303423DA5256D');
        $this->addSql('ALTER TABLE actu DROP FOREIGN KEY FK_8373034217C4B2B0');
        $this->addSql('DROP INDEX IDX_837303423DA5256D ON actu');
        $this->addSql('DROP INDEX IDX_8373034217C4B2B0 ON actu');
        $this->addSql('ALTER TABLE actu DROP image_id, DROP commentaires_id');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F3A3123C7');
        $this->addSql('DROP INDEX IDX_C53D045F3A3123C7 ON image');
        $this->addSql('ALTER TABLE image DROP audio_id');
        $this->addSql('ALTER TABLE prestation DROP FOREIGN KEY FK_51C88FAD3A3123C7');
        $this->addSql('DROP INDEX IDX_51C88FAD3A3123C7 ON prestation');
        $this->addSql('ALTER TABLE prestation DROP audio_id');
        $this->addSql('ALTER TABLE role DROP FOREIGN KEY FK_57698A6AA76ED395');
        $this->addSql('DROP INDEX IDX_57698A6AA76ED395 ON role');
        $this->addSql('ALTER TABLE role DROP user_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493A3123C7');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F77EEF58');
        $this->addSql('DROP INDEX IDX_8D93D6493A3123C7 ON user');
        $this->addSql('DROP INDEX IDX_8D93D649F77EEF58 ON user');
        $this->addSql('ALTER TABLE user DROP audio_id, DROP actu_id');
    }
}
