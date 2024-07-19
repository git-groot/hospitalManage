<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240718054224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE appointment (id INT AUTO_INCREMENT NOT NULL, doctor_id INT DEFAULT NULL, patient_id INT DEFAULT NULL, scheduled_on DATETIME DEFAULT NULL, appointment_date DATE DEFAULT NULL, appointment_time TIME DEFAULT NULL, INDEX IDX_FE38F84487F4FB17 (doctor_id), INDEX IDX_FE38F8446B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bill (id INT AUTO_INCREMENT NOT NULL, room_cost_id INT DEFAULT NULL, test_cost_id INT DEFAULT NULL, medicine_cost_id INT DEFAULT NULL, patient_id INT DEFAULT NULL, policy_no_id INT DEFAULT NULL, date DATE DEFAULT NULL, other_charges VARCHAR(255) DEFAULT NULL, total VARCHAR(255) DEFAULT NULL, remaining_balance VARCHAR(255) DEFAULT NULL, INDEX IDX_7A2119E3F19D399F (room_cost_id), INDEX IDX_7A2119E3C1FE51B7 (test_cost_id), INDEX IDX_7A2119E31044F261 (medicine_cost_id), INDEX IDX_7A2119E36B899279 (patient_id), INDEX IDX_7A2119E3A1A34CBD (policy_no_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE department (id INT AUTO_INCREMENT NOT NULL, dept_head VARCHAR(255) DEFAULT NULL, dept_name VARCHAR(255) DEFAULT NULL, emp_count INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE doctor (id INT AUTO_INCREMENT NOT NULL, employe_id INT DEFAULT NULL, department_id INT DEFAULT NULL, qualifications VARCHAR(255) DEFAULT NULL, specialization VARCHAR(255) DEFAULT NULL, INDEX IDX_1FC0F36A1B65292 (employe_id), INDEX IDX_1FC0F36AAE80F5DF (department_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emergency_contact (id INT AUTO_INCREMENT NOT NULL, patient_id INT DEFAULT NULL, contact_name VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, relation VARCHAR(255) DEFAULT NULL, INDEX IDX_FE1C61906B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE insurance (id INT AUTO_INCREMENT NOT NULL, patient_id INT DEFAULT NULL, policy_number VARCHAR(255) DEFAULT NULL, ins_code VARCHAR(255) DEFAULT NULL, end_date VARCHAR(255) DEFAULT NULL, provider VARCHAR(255) DEFAULT NULL, plan VARCHAR(255) DEFAULT NULL, co_pay VARCHAR(255) DEFAULT NULL, coverage VARCHAR(255) DEFAULT NULL, maternity TINYINT(1) DEFAULT NULL, dental TINYINT(1) NOT NULL, optical TINYINT(1) DEFAULT NULL, INDEX IDX_640EAF4C6B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lab_screening (id INT AUTO_INCREMENT NOT NULL, patient_id INT DEFAULT NULL, technician_id INT DEFAULT NULL, doctor_id INT DEFAULT NULL, test_cost NUMERIC(10, 2) DEFAULT NULL, date DATE DEFAULT NULL, INDEX IDX_396CCAAF6B899279 (patient_id), INDEX IDX_396CCAAFE6C5D496 (technician_id), INDEX IDX_396CCAAF87F4FB17 (doctor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medicine (id INT AUTO_INCREMENT NOT NULL, m_name VARCHAR(255) DEFAULT NULL, m_quantity INT DEFAULT NULL, m_cost NUMERIC(10, 2) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nurse (id INT AUTO_INCREMENT NOT NULL, patient_id INT DEFAULT NULL, staff_id INT DEFAULT NULL, department_id INT DEFAULT NULL, INDEX IDX_D27E6D436B899279 (patient_id), INDEX IDX_D27E6D43D4D57CD (staff_id), INDEX IDX_D27E6D43AE80F5DF (department_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payroll (id INT AUTO_INCREMENT NOT NULL, staff_id INT DEFAULT NULL, account_no VARCHAR(255) DEFAULT NULL, salary NUMERIC(10, 2) DEFAULT NULL, bonus NUMERIC(10, 2) DEFAULT NULL, iba_number VARCHAR(255) DEFAULT NULL, INDEX IDX_499FBCC6D4D57CD (staff_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prescription (id INT AUTO_INCREMENT NOT NULL, patient_id INT DEFAULT NULL, medicine_id INT DEFAULT NULL, doctor_id INT DEFAULT NULL, date DATE DEFAULT NULL, dosage INT NOT NULL, INDEX IDX_1FBFB8D96B899279 (patient_id), INDEX IDX_1FBFB8D92F7D140A (medicine_id), INDEX IDX_1FBFB8D987F4FB17 (doctor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE room (id INT AUTO_INCREMENT NOT NULL, patient_id INT DEFAULT NULL, room_type VARCHAR(255) DEFAULT NULL, room_cost NUMERIC(10, 2) DEFAULT NULL, INDEX IDX_729F519B6B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE staff (id INT AUTO_INCREMENT NOT NULL, department_id INT DEFAULT NULL, employe_fname VARCHAR(255) DEFAULT NULL, employe_lname VARCHAR(255) DEFAULT NULL, date_of_joining DATE DEFAULT NULL, date_of_seperation DATE DEFAULT NULL, employe_type VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, aadhar_number VARCHAR(255) DEFAULT NULL, INDEX IDX_426EF392AE80F5DF (department_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F84487F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id)');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F8446B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E3F19D399F FOREIGN KEY (room_cost_id) REFERENCES room (id)');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E3C1FE51B7 FOREIGN KEY (test_cost_id) REFERENCES lab_screening (id)');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E31044F261 FOREIGN KEY (medicine_cost_id) REFERENCES medicine (id)');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E36B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E3A1A34CBD FOREIGN KEY (policy_no_id) REFERENCES insurance (id)');
        $this->addSql('ALTER TABLE doctor ADD CONSTRAINT FK_1FC0F36A1B65292 FOREIGN KEY (employe_id) REFERENCES staff (id)');
        $this->addSql('ALTER TABLE doctor ADD CONSTRAINT FK_1FC0F36AAE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
        $this->addSql('ALTER TABLE emergency_contact ADD CONSTRAINT FK_FE1C61906B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE insurance ADD CONSTRAINT FK_640EAF4C6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE lab_screening ADD CONSTRAINT FK_396CCAAF6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE lab_screening ADD CONSTRAINT FK_396CCAAFE6C5D496 FOREIGN KEY (technician_id) REFERENCES staff (id)');
        $this->addSql('ALTER TABLE lab_screening ADD CONSTRAINT FK_396CCAAF87F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id)');
        $this->addSql('ALTER TABLE nurse ADD CONSTRAINT FK_D27E6D436B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE nurse ADD CONSTRAINT FK_D27E6D43D4D57CD FOREIGN KEY (staff_id) REFERENCES staff (id)');
        $this->addSql('ALTER TABLE nurse ADD CONSTRAINT FK_D27E6D43AE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
        $this->addSql('ALTER TABLE payroll ADD CONSTRAINT FK_499FBCC6D4D57CD FOREIGN KEY (staff_id) REFERENCES staff (id)');
        $this->addSql('ALTER TABLE prescription ADD CONSTRAINT FK_1FBFB8D96B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE prescription ADD CONSTRAINT FK_1FBFB8D92F7D140A FOREIGN KEY (medicine_id) REFERENCES medicine (id)');
        $this->addSql('ALTER TABLE prescription ADD CONSTRAINT FK_1FBFB8D987F4FB17 FOREIGN KEY (doctor_id) REFERENCES doctor (id)');
        $this->addSql('ALTER TABLE room ADD CONSTRAINT FK_729F519B6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE staff ADD CONSTRAINT FK_426EF392AE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F84487F4FB17');
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F8446B899279');
        $this->addSql('ALTER TABLE bill DROP FOREIGN KEY FK_7A2119E3F19D399F');
        $this->addSql('ALTER TABLE bill DROP FOREIGN KEY FK_7A2119E3C1FE51B7');
        $this->addSql('ALTER TABLE bill DROP FOREIGN KEY FK_7A2119E31044F261');
        $this->addSql('ALTER TABLE bill DROP FOREIGN KEY FK_7A2119E36B899279');
        $this->addSql('ALTER TABLE bill DROP FOREIGN KEY FK_7A2119E3A1A34CBD');
        $this->addSql('ALTER TABLE doctor DROP FOREIGN KEY FK_1FC0F36A1B65292');
        $this->addSql('ALTER TABLE doctor DROP FOREIGN KEY FK_1FC0F36AAE80F5DF');
        $this->addSql('ALTER TABLE emergency_contact DROP FOREIGN KEY FK_FE1C61906B899279');
        $this->addSql('ALTER TABLE insurance DROP FOREIGN KEY FK_640EAF4C6B899279');
        $this->addSql('ALTER TABLE lab_screening DROP FOREIGN KEY FK_396CCAAF6B899279');
        $this->addSql('ALTER TABLE lab_screening DROP FOREIGN KEY FK_396CCAAFE6C5D496');
        $this->addSql('ALTER TABLE lab_screening DROP FOREIGN KEY FK_396CCAAF87F4FB17');
        $this->addSql('ALTER TABLE nurse DROP FOREIGN KEY FK_D27E6D436B899279');
        $this->addSql('ALTER TABLE nurse DROP FOREIGN KEY FK_D27E6D43D4D57CD');
        $this->addSql('ALTER TABLE nurse DROP FOREIGN KEY FK_D27E6D43AE80F5DF');
        $this->addSql('ALTER TABLE payroll DROP FOREIGN KEY FK_499FBCC6D4D57CD');
        $this->addSql('ALTER TABLE prescription DROP FOREIGN KEY FK_1FBFB8D96B899279');
        $this->addSql('ALTER TABLE prescription DROP FOREIGN KEY FK_1FBFB8D92F7D140A');
        $this->addSql('ALTER TABLE prescription DROP FOREIGN KEY FK_1FBFB8D987F4FB17');
        $this->addSql('ALTER TABLE room DROP FOREIGN KEY FK_729F519B6B899279');
        $this->addSql('ALTER TABLE staff DROP FOREIGN KEY FK_426EF392AE80F5DF');
        $this->addSql('DROP TABLE appointment');
        $this->addSql('DROP TABLE bill');
        $this->addSql('DROP TABLE department');
        $this->addSql('DROP TABLE doctor');
        $this->addSql('DROP TABLE emergency_contact');
        $this->addSql('DROP TABLE insurance');
        $this->addSql('DROP TABLE lab_screening');
        $this->addSql('DROP TABLE medicine');
        $this->addSql('DROP TABLE nurse');
        $this->addSql('DROP TABLE payroll');
        $this->addSql('DROP TABLE prescription');
        $this->addSql('DROP TABLE room');
        $this->addSql('DROP TABLE staff');
    }
}
