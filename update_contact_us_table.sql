ALTER TABLE `contact_us` ADD COLUMN `phone` VARCHAR(50) NULL AFTER `email`;
ALTER TABLE `contact_us` ADD COLUMN `company` VARCHAR(255) NULL AFTER `phone`;
ALTER TABLE `contact_us` ADD COLUMN `industry` VARCHAR(100) NULL AFTER `company`;
ALTER TABLE `contact_us` ADD COLUMN `service` VARCHAR(100) NULL AFTER `industry`;
ALTER TABLE `contact_us` ADD COLUMN `budget` VARCHAR(100) NULL AFTER `service`;
ALTER TABLE `contact_us` ADD COLUMN `project_details` TEXT NULL AFTER `budget`;
