<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201229005706 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE announcement ADD model_id INT DEFAULT NULL, ADD energy_id INT DEFAULT NULL, ADD garage_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE announcement ADD CONSTRAINT FK_4DB9D91C7975B7E7 FOREIGN KEY (model_id) REFERENCES model (id)');
        $this->addSql('ALTER TABLE announcement ADD CONSTRAINT FK_4DB9D91CEDDF52D FOREIGN KEY (energy_id) REFERENCES energy (id)');
        $this->addSql('ALTER TABLE announcement ADD CONSTRAINT FK_4DB9D91CC4FFF555 FOREIGN KEY (garage_id) REFERENCES garage (id)');
        $this->addSql('CREATE INDEX IDX_4DB9D91C7975B7E7 ON announcement (model_id)');
        $this->addSql('CREATE INDEX IDX_4DB9D91CEDDF52D ON announcement (energy_id)');
        $this->addSql('CREATE INDEX IDX_4DB9D91CC4FFF555 ON announcement (garage_id)');
        $this->addSql('ALTER TABLE contact ADD announcement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638913AEA17 FOREIGN KEY (announcement_id) REFERENCES announcement (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638913AEA17 ON contact (announcement_id)');
        $this->addSql('ALTER TABLE garage ADD professionnal_id INT DEFAULT NULL, ADD address_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE garage ADD CONSTRAINT FK_9F26610B7FC96A42 FOREIGN KEY (professionnal_id) REFERENCES professionnal (id)');
        $this->addSql('ALTER TABLE garage ADD CONSTRAINT FK_9F26610BF5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id)');
        $this->addSql('CREATE INDEX IDX_9F26610B7FC96A42 ON garage (professionnal_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9F26610BF5B7AF75 ON garage (address_id)');
        $this->addSql('ALTER TABLE model ADD brand_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE model ADD CONSTRAINT FK_D79572D944F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
        $this->addSql('CREATE INDEX IDX_D79572D944F5D008 ON model (brand_id)');
        $this->addSql('ALTER TABLE photo ADD announcement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE photo ADD CONSTRAINT FK_14B78418913AEA17 FOREIGN KEY (announcement_id) REFERENCES announcement (id)');
        $this->addSql('CREATE INDEX IDX_14B78418913AEA17 ON photo (announcement_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE announcement DROP FOREIGN KEY FK_4DB9D91C7975B7E7');
        $this->addSql('ALTER TABLE announcement DROP FOREIGN KEY FK_4DB9D91CEDDF52D');
        $this->addSql('ALTER TABLE announcement DROP FOREIGN KEY FK_4DB9D91CC4FFF555');
        $this->addSql('DROP INDEX IDX_4DB9D91C7975B7E7 ON announcement');
        $this->addSql('DROP INDEX IDX_4DB9D91CEDDF52D ON announcement');
        $this->addSql('DROP INDEX IDX_4DB9D91CC4FFF555 ON announcement');
        $this->addSql('ALTER TABLE announcement DROP model_id, DROP energy_id, DROP garage_id');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638913AEA17');
        $this->addSql('DROP INDEX IDX_4C62E638913AEA17 ON contact');
        $this->addSql('ALTER TABLE contact DROP announcement_id');
        $this->addSql('ALTER TABLE garage DROP FOREIGN KEY FK_9F26610B7FC96A42');
        $this->addSql('ALTER TABLE garage DROP FOREIGN KEY FK_9F26610BF5B7AF75');
        $this->addSql('DROP INDEX IDX_9F26610B7FC96A42 ON garage');
        $this->addSql('DROP INDEX UNIQ_9F26610BF5B7AF75 ON garage');
        $this->addSql('ALTER TABLE garage DROP professionnal_id, DROP address_id');
        $this->addSql('ALTER TABLE model DROP FOREIGN KEY FK_D79572D944F5D008');
        $this->addSql('DROP INDEX IDX_D79572D944F5D008 ON model');
        $this->addSql('ALTER TABLE model DROP brand_id');
        $this->addSql('ALTER TABLE photo DROP FOREIGN KEY FK_14B78418913AEA17');
        $this->addSql('DROP INDEX IDX_14B78418913AEA17 ON photo');
        $this->addSql('ALTER TABLE photo DROP announcement_id');
    }
}
