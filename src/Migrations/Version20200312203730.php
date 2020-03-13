<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200312203730 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE persons (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL, expected_cost INT NOT NULL, travel_type INT NOT NULL, comments LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Tom','Brady','tombrady43@yahoo.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Andrei','Wasylki','wasyll111@gmail.com',1,1,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Glen','Granham','ggranham0@google.com.au',2,1,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Van','Kurt','vkurt1@java.com',0,1,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Keith','Swatridge','kswatridge2@intel.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Bili','Casotti','bcasotti3@sfgate.com',0,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Rudolfo','Ornells','rornells4@aol.com',0,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Amii','Livock','alivock5@example.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Justina','Klimkiewich','jklimkiewich6@unesco.org',1,1,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Andrey','Jannasch','ajannasch7@tamu.edu',2,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Deni','Pembridge','dpembridge8@webeden.co.uk',2,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Alain','Klein','aklein9@pbs.org',2,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Cherri','Kasperski','ckasperskia@ustream.tv',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Adelind','Peers','apeersb@constantcontact.com',2,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Charles','Antyshev','cantyshevc@globo.com',0,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Margaret','Parks','mparksd@vistaprint.com',0,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Shandie','Carslaw','scarslawe@businessweek.com',0,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Janette','Giovannelli','jgiovannellif@privacy.gov.au',0,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Milena','Muglestone','mmuglestoneg@state.gov',0,1,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Mahmoud','Havard','mhavardh@ameblo.jp',1,1,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Glen','Granham','ggranham0@google.com.au',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Van','Kurt','vkurt1@java.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Rasla','Follows','rfollowsi@dropbox.com',1,1,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Phineas','Mowday','pmowdayj@weibo.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Kara','Viveash','kviveashk@so-net.ne.jp',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Enrika','Jerrim','ejerriml@list-manage.com',2,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Tabitha','Phizacklea','tphizackleam@amazon.com',2,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Kacie','Stanbra','kstanbran@arstechnica.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Wilhelmine','Ivain','wivaino@patch.com',0,1,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Carolina','Erb','cerbp@naver.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Waverley','Omond','womondq@cnet.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Trueman','Keeting','tkeetingr@macromedia.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Eddy','Jarrad','ejarrads@amazon.co.uk',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Alwyn','MacGuiness','amacguinesst@woothemes.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Loren','Naismith','lnaismithu@cnet.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Abbey','Jersh','ajershv@digg.com',2,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Deeanne','Rupert','drupertw@wiley.com',1,1,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Mead','Sainteau','msainteaux@time.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Kala','Simoneau','ksimoneauy@ed.gov',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Glen','Granham','ggranham0@google.com.au',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Van','Kurt','vkurt1@java.com',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Deni','Pembridge','dpembridge8@webeden.co.uk',2,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Alain','Klein','aklein9@pbs.org',2,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Cherri','Kasperski','ckasperskia@ustream.tv',1,0,'')");
        $this->addSql("Insert into persons (first_name,last_name,email,expected_cost,travel_type,comments) VALUES('Adelind','Peers','apeersb@constantcontact.com',2,0,'')");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE persons');
    }
}
