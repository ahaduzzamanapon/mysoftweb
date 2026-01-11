-- Table for general product details, replacing/extending existing `product` table for this new design
CREATE TABLE IF NOT EXISTS `products_new` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `slug` VARCHAR(255) UNIQUE NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `meta_title` VARCHAR(255),
    `meta_description` TEXT,
    `hero_heading` VARCHAR(255),
    `hero_subheading` VARCHAR(255),
    `hero_description` TEXT,
    `hero_button_text` VARCHAR(255),
    `hero_button_link` VARCHAR(255),
    `hero_image` VARCHAR(255),
    `why_heading` VARCHAR(255),
    `why_description` TEXT,
    `why_button_text` VARCHAR(255),
    `why_button_link` VARCHAR(255),
    `summary_heading` VARCHAR(255),
    `modules_heading` VARCHAR(255),
    `features_heading` VARCHAR(255),
    `features_subheading` VARCHAR(255),
    `audiences_heading` VARCHAR(255),
    `industries_heading` VARCHAR(255),
    `technology_heading` VARCHAR(255),
    `pricing_heading` VARCHAR(255),
    `pricing_subheading` TEXT,
    `faq_heading` VARCHAR(255),
    `demo_call_to_action_heading` VARCHAR(255),
    `demo_call_to_action_button_text` VARCHAR(255),
    `demo_call_to_action_button_link` VARCHAR(255),
    `demo_call_to_action_image` VARCHAR(255),
    `clients_heading` VARCHAR(255),
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Table for key metrics (e.g., "2M+ Customers")
CREATE TABLE IF NOT EXISTS `product_metrics` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `icon` VARCHAR(255),
    `value` VARCHAR(255),
    `label` VARCHAR(255),
    `order_num` INT DEFAULT 0,
    `status` ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (`product_id`) REFERENCES `products_new`(`id`) ON DELETE CASCADE
);

-- Table for app store blocks
CREATE TABLE IF NOT EXISTS `product_app_links` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `icon` VARCHAR(255),
    `count_text` VARCHAR(255),
    `description` VARCHAR(255),
    `link_url` VARCHAR(255),
    `order_num` INT DEFAULT 0,
    `status` ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (`product_id`) REFERENCES `products_new`(`id`) ON DELETE CASCADE
);

-- Table for product modules
CREATE TABLE IF NOT EXISTS `product_modules` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `icon` VARCHAR(255),
    `title` VARCHAR(255),
    `description` TEXT,
    `order_num` INT DEFAULT 0,
    `status` ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (`product_id`) REFERENCES `products_new`(`id`) ON DELETE CASCADE
);

-- Table for product features
CREATE TABLE IF NOT EXISTS `product_features` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `icon` VARCHAR(255),
    `title` VARCHAR(255),
    `description` TEXT,
    `order_num` INT DEFAULT 0,
    `status` ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (`product_id`) REFERENCES `products_new`(`id`) ON DELETE CASCADE
);

-- Table for target audiences
CREATE TABLE IF NOT EXISTS `product_audiences` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `icon` VARCHAR(255),
    `title` VARCHAR(255),
    `description` TEXT,
    `order_num` INT DEFAULT 0,
    `status` ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (`product_id`) REFERENCES `products_new`(`id`) ON DELETE CASCADE
);

-- Table for industries served
CREATE TABLE IF NOT EXISTS `product_industries` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `icon` VARCHAR(255),
    `title` VARCHAR(255),
    `order_num` INT DEFAULT 0,
    `status` ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (`product_id`) REFERENCES `products_new`(`id`) ON DELETE CASCADE
);

-- Table for technologies used
CREATE TABLE IF NOT EXISTS `product_technologies` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `icon` VARCHAR(255),
    `title` VARCHAR(255),
    `order_num` INT DEFAULT 0,
    `status` ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (`product_id`) REFERENCES `products_new`(`id`) ON DELETE CASCADE
);

-- Table for pricing plans
CREATE TABLE IF NOT EXISTS `product_pricing_plans` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `plan_name` VARCHAR(255),
    `price` VARCHAR(255),
    `price_unit` VARCHAR(255),
    `button_text` VARCHAR(255),
    `button_link` VARCHAR(255),
    `order_num` INT DEFAULT 0,
    `status` ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (`product_id`) REFERENCES `products_new`(`id`) ON DELETE CASCADE
);

-- Table for features within each pricing plan
CREATE TABLE IF NOT EXISTS `product_pricing_features` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `plan_id` INT NOT NULL,
    `feature_text` VARCHAR(255),
    `order_num` INT DEFAULT 0,
    `status` ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (`plan_id`) REFERENCES `product_pricing_plans`(`id`) ON DELETE CASCADE
);

-- Table for frequently asked questions
CREATE TABLE IF NOT EXISTS `product_faqs` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `question` VARCHAR(255),
    `answer` TEXT,
    `order_num` INT DEFAULT 0,
    `status` ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (`product_id`) REFERENCES `products_new`(`id`) ON DELETE CASCADE
);

-- Table for client logos
CREATE TABLE IF NOT EXISTS `product_clients` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `logo_image` VARCHAR(255),
    `client_name` VARCHAR(255),
    `link_url` VARCHAR(255),
    `order_num` INT DEFAULT 0,
    `status` ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (`product_id`) REFERENCES `products_new`(`id`) ON DELETE CASCADE
);