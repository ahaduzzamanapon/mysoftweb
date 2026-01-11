-- FULL MIGRATION SCRIPT with Data & Dummies
-- 1. Cleans existing new tables (Using DELETE to handle Foreign Keys)
-- 2. Migrates actual product data (Name, Description, Links)
-- 3. Sets demo_call_to_action_image SAME as hero_image (Poster & Logo same)
-- 4. Adds relevant Dummy Data for all child sections

SET FOREIGN_KEY_CHECKS = 0;

DELETE FROM `product_metrics`; ALTER TABLE `product_metrics` AUTO_INCREMENT = 1;
DELETE FROM `product_app_links`; ALTER TABLE `product_app_links` AUTO_INCREMENT = 1;
DELETE FROM `product_modules`; ALTER TABLE `product_modules` AUTO_INCREMENT = 1;
DELETE FROM `product_features`; ALTER TABLE `product_features` AUTO_INCREMENT = 1;
DELETE FROM `product_audiences`; ALTER TABLE `product_audiences` AUTO_INCREMENT = 1;
DELETE FROM `product_industries`; ALTER TABLE `product_industries` AUTO_INCREMENT = 1;
DELETE FROM `product_technologies`; ALTER TABLE `product_technologies` AUTO_INCREMENT = 1;
DELETE FROM `product_pricing_features`; ALTER TABLE `product_pricing_features` AUTO_INCREMENT = 1;
DELETE FROM `product_pricing_plans`; ALTER TABLE `product_pricing_plans` AUTO_INCREMENT = 1;
DELETE FROM `product_faqs`; ALTER TABLE `product_faqs` AUTO_INCREMENT = 1;
DELETE FROM `product_clients`; ALTER TABLE `product_clients` AUTO_INCREMENT = 1;
DELETE FROM `products_new`; ALTER TABLE `products_new` AUTO_INCREMENT = 1;

SET FOREIGN_KEY_CHECKS = 1;

-- ==========================================================
-- 1. INSERT MAIN PRODUCTS (From Real Data)
--    Note: hero_image is used for both 'hero_image' and 'demo_call_to_action_image'
-- ==========================================================
INSERT INTO `products_new` (`id`, `slug`, `name`, `hero_heading`, `hero_subheading`, `hero_description`, `hero_image`, `hero_button_text`, `hero_button_link`, `why_heading`, `why_description`, `summary_heading`, `modules_heading`, `features_heading`, `features_subheading`, `audiences_heading`, `industries_heading`, `technology_heading`, `pricing_heading`, `faq_heading`, `demo_call_to_action_heading`, `demo_call_to_action_image`, `clients_heading`) VALUES 
(1, 'sheba-erp', 'Sheba ERP', 'Sheba ERP System', 'Best ERP Software in Bangladesh', 'SHEBA ERP System of Mysoft Heaven BD Ltd is the best ERP system in Dhaka for maintaining your total organization tasks and a complete Enterprise Resource Planning System.', 'Sheba_ERP.png', 'Get Started', 'http://173.212.223.213/erp', 'Why Choose Sheba ERP?', 'Access your data smoothly and combine enormous quantity of data into a single system. Develop effectiveness and streamline all processes.', 'System Analytics', 'Core ERP Modules', 'Key Features', 'Explore the powerful features that manage your organization.', 'Who Can Use This?', 'Industries We Serve', 'Technology Stack', 'Flexible Pricing', 'Common Questions', 'Ready to Optimize Your Business?', 'Sheba_ERP.png', 'Trusted By'),
(2, 'best-hr-software-in-bangladesh', 'HR Sheba', 'HR Sheba Software', 'Complete HR & Payroll Solution', 'Our all-in-one HR management platform is built to streamline every step of the employee lifecycle—from hiring to retirement—while ensuring full compliance.', '438231103_374761272223436_6091012394832469885_n.jpg', 'Get Started', 'http://173.212.223.213/hrsheba', 'Why HR Sheba?', 'Covers complete employee lifecycle, Supports both compliant and non-compliant payroll, Built with factory and corporate HR needs in mind.', 'HR Statistics', 'HRM Modules', 'Smart Features', ' Everything you need to manage your workforce.', 'Designed For', 'Industries', 'Built With', 'Pricing Plans', 'FAQ', 'Automate Your HR Today', '438231103_374761272223436_6091012394832469885_n.jpg', 'Our Clients'),
(3, 'salesman', 'Salesman POS', 'Salesman POS', 'Efficient Point of Sales System', 'Salesman app is here to minimize the harassments of the billing system. Point of sales is the zone of bill payment by the customer.', 'WhatsApp_Image_2024-10-30_at_12_28_19_PM.jpeg', 'Get Started', 'http://173.212.223.213/Salesman', 'Why Salesman?', 'Process transactions efficiently using barcode scanners, cash registers, and payment terminals. Manage inventory and billing seamlessly.', 'Sales Overview', 'POS Modules', 'Features', 'Fast and reliable billing.', 'Users', 'Retail Sectors', 'Tech Stack', 'POS Pricing', 'FAQ', 'Speed Up Your Sales', 'WhatsApp_Image_2024-10-30_at_12_28_19_PM.jpeg', 'Happy Clients'),
(4, 'binyog', 'Binyog', 'Binyog Investment', 'Leading Investment Management', 'Biniyog is the complete Multipurpose Management system to secure your investment return and optimize your investment staging.', 'Binyog.png', 'View Demo', 'http://173.212.223.213/Multi Purpose', 'Why Binyog?', 'Real-time investment management analytics and data to help improve decision making and optimize portfolio performance.', 'Investment Stats', 'Management Modules', 'Key Features', 'Secure your future returns.', 'Target Users', 'Sectors', 'Technologies', 'Plans', 'FAQ', 'Start Investing Smartly', 'Binyog.png', 'Investors'),
(5, 'filling-master', 'Filling Master', 'Filling Master', 'Petrol Pump Management', 'Designed for petroleum pump owners to manage meter readings, inventory, billing, and accounting seamlessly.', 'Filling_Master.png', 'Get Started', 'http://173.212.223.213/point_of_sale/index.php/main/generate_token', 'Why Filling Master?', 'Reduce fuel theft, manage density, credit systems, VAT integration, and generate shift-wise reports automatically.', 'Station Stats', 'Pump Modules', 'Station Features', 'Control your fuel station.', 'Audience', 'Clients', 'Tech Stack', 'Pricing', 'FAQ', 'Digitize Your Pump Station', 'Filling_Master.png', 'Clients'),
(6, 'smart-educare', 'SMART Educare', 'SMART Educare', 'Institute Management System', 'A complete data collection and management system for primary, secondary, and govt educational projects to keep records smart.', 'SMART_Educare.png', 'Live Demo', 'http://173.212.223.213/school/demo/', 'Why Smart Educare?', 'Manage attendance, homework, discipline, results, fee tracking, and transport in one unified cloud-based system.', 'School Stats', 'Edu Modules', 'Campus Features', 'Smart management for schools.', 'Users', 'Education Sector', 'Tech Stack', 'Packages', 'FAQ', 'Upgrade Your Institution', 'SMART_Educare.png', 'Institutions'),
(7, 'gym-master', 'Gym Master', 'Gym Master', 'Gym Management Software', 'Easily maintain detailed records of members, packages, trainers, and track sales to grow your fitness club.', 'Gym_Master.png', 'Try Demo', 'http://173.212.223.213/', 'Why Gym Master?', 'Member tracking, package management, automated payment reminders, and product inventory for your gym equipment.', 'Club Stats', 'Gym Modules', 'Fitness Features', 'Power up your gym business.', 'For', 'Fitness Industry', 'Built With', 'Membership Plans', 'FAQ', 'Power Up Your Gym', 'Gym_Master.png', 'Clubs'),
(8, 'sompod', 'Sompod', 'Sompod Inventory', 'Best Store Management System', 'A complete system for tracking inventory levels, orders, sales, and deliveries for manufacturers and retailers.', 'Sompod.png', 'Get Started', 'http://173.212.223.213/inventory_management/login/generate_token', 'Why Sompod?', 'Optimize warehouses, handle multiple locations, manage expirations, and integrate billing with your inventory.', 'Stock Stats', 'Inventory Modules', 'Stock Features', 'Optimize your stock flow.', 'Businesses', 'Retail & Warehousing', 'Tech Stack', 'Plans', 'FAQ', 'Manage Inventory Better', 'Sompod.png', 'Retailers'),
(9, 'hr-master', 'HR Master', 'HR Master', 'HR Management System', 'Complete employee management and consultancy system to centralize data and improve HR department efficiency.', 'HR_Master.png', 'View Demo', 'http://173.212.223.213/', 'Why HR Master?', 'Enhance internal communication, minimize costs, monitor employee data, and automate payroll processing.', 'HR Stats', 'Admin Modules', 'Core Features', 'Simplify employee management.', 'Users', 'Corporate', 'Tech Stack', 'Pricing', 'FAQ', 'Master Your HR Process', 'HR_Master.png', 'Organizations'),
(10, 'crm', 'SMART CRM', 'SMART CRM', 'Best CRM Tool', 'Analyze relationships and interactions with potential customers to drive sales growth and improve service.', 'Smart_CRM.png', 'Get Started', 'http://173.212.223.213/', 'Why SMART CRM?', 'Contact management, lead generation, sales forecasting, and inventory integration to nurture customer relationships.', 'CRM Stats', 'Sales Modules', 'Growth Features', 'Boost your customer relations.', 'For', 'Sales Teams', 'Tech Stack', 'Plans', 'FAQ', 'Grow Your Business', 'Smart_CRM.png', 'Clients');


-- ==========================================================
-- 2. INSERT DUMMY CHILD DATA (For all 10 products)
-- ==========================================================

-- 2a. Product Metrics
INSERT INTO `product_metrics` (`product_id`, `value`, `label`) VALUES
(1, '50+', 'Modules'), (1, '100+', 'Clients'), (1, '99%', 'Uptime'),
(2, '500+', 'Companies'), (2, '10k+', 'Employees'), (2, '24/7', 'Support'),
(3, '1M+', 'Sales Processed'), (3, '200+', 'Shops'), (3, 'Fast', 'Billing'),
(4, '50Cr+', 'Funds Managed'), (4, '15+', 'Portfolios'), (4, 'Secure', 'Platform'),
(5, '100+', 'Pumps'), (5, '0%', 'Pilferage'), (5, 'Accurate', 'Reading'),
(6, '200+', 'Schools'), (6, '50k+', 'Students'), (6, 'Cloud', 'Based'),
(7, '300+', 'Gyms'), (7, '50k+', 'Members'), (7, 'Easy', 'Access'),
(8, '1M+', 'SKUs'), (8, '50+', 'Warehouses'), (8, 'Realtime', 'Tracking'),
(9, '80+', 'Corporates'), (9, '5k+', 'Users'), (9, 'Auto', 'Payroll'),
(10, '100+', 'Leads/Day'), (10, '3X', 'Sales Growth'), (10, 'Smart', 'Insights');

-- 2b. App Links
INSERT INTO `product_app_links` (`product_id`, `icon`, `count_text`, `description`) VALUES
(1, 'fa-cogs', 'Complete', 'Full ERP Solution'), (1, 'fa-users', 'Multi-User', 'Role Based Access'), (1, 'fa-cloud', 'Cloud', 'Access Anywhere'), (1, 'fa-shield', 'Secured', 'Data Encryption'),
(2, 'fa-check-circle', 'Compliant', 'Labor Law Ready'), (2, 'fa-money', 'Automated', 'Payroll Processing'), (2, 'fa-id-card', 'Tracking', 'Attendance System'), (2, 'fa-mobile', 'App', 'Employee Portal'),
(3, 'fa-barcode', 'Scanner', 'Barcode Support'), (3, 'fa-print', 'Fast', 'Thermal Printing'), (3, 'fa-cubes', 'Stock', 'Inventory Sync'), (3, 'fa-file-text', 'Reports', 'Daily Sales Report'),
(4, 'fa-line-chart', 'Growth', 'Maximize Returns'), (4, 'fa-pie-chart', 'Analysis', 'Portfolio Tracking'), (4, 'fa-lock', 'Safe', 'Secure Investment'), (4, 'fa-user-secret', 'Privacy', 'Data Protection'),
(5, 'fa-tint', 'Fuel', 'Density Check'), (5, 'fa-tachometer', 'Meter', 'Reading Calc'), (5, 'fa-truck', 'Tanker', 'Stock Management'), (5, 'fa-calculator', 'Billing', 'Auto Invoicing'),
(6, 'fa-graduation-cap', 'Academic', 'Result Processing'), (6, 'fa-bus', 'Transport', 'Route Management'), (6, 'fa-book', 'Library', 'Book Keeping'), (6, 'fa-calendar', 'Routine', 'Class Scheduling'),
(7, 'fa-heartbeat', 'Health', 'Member Tracking'), (7, 'fa-calendar-check-o', 'Schedule', 'Class Booking'), (7, 'fa-credit-card', 'Payments', 'Auto Renewal'), (7, 'fa-shopping-cart', 'Store', 'Product Sales'),
(8, 'fa-archive', 'Stock', 'Level Tracking'), (8, 'fa-history', 'Audit', 'Stock History'), (8, 'fa-exclamation-triangle', 'Alerts', 'Low Stock Notify'), (8, 'fa-share-alt', 'Multi', 'Warehouse Support'),
(9, 'fa-users', 'Team', 'Employee Database'), (9, 'fa-calendar', 'Leave', 'Application System'), (9, 'fa-money', 'Salary', 'Bank Sheet Gen'), (9, 'fa-bell', 'Notify', 'SMS/Email Alerts'),
(10, 'fa-filter', 'Leads', 'Pipeline View'), (10, 'fa-comments', 'Chat', 'Client Support'), (10, 'fa-envelope', 'Email', 'Marketing Campaigns'), (10, 'fa-bar-chart', 'Insights', 'Sales Forecasting');

-- 2c. Modules
INSERT INTO `product_modules` (`product_id`, `icon`, `title`, `description`) VALUES
(1, 'fa-user', 'HRM Module', 'Manage employees, attendance, and payroll.'), (1, 'fa-calculator', 'Accounts', 'General ledger and income statements.'), (1, 'fa-cubes', 'Inventory', 'Stock management and supply chain.'),
(2, 'fa-users', 'Recruitment', 'Job posting and candidate selection.'), (2, 'fa-briefcase', 'Onboarding', 'Document submission and joining process.'), (2, 'fa-money', 'Payroll', 'Salary calculation with tax and PF.'),
(3, 'fa-barcode', 'Billing', 'Fast checkout with barcode scanning.'), (3, 'fa-archive', 'Stock', 'Real-time inventory deduction.'), (3, 'fa-user', 'Customer', 'Loyalty program and history.'),
(4, 'fa-briefcase', 'Portfolio', 'Manage multiple investment portfolios.'), (4, 'fa-line-chart', 'Analysis', 'Market trend analysis tools.'), (4, 'fa-money', 'Transactions', 'Deposit and withdrawal tracking.'),
(5, 'fa-tachometer', 'Meter Reading', 'Daily nozzle meter reading entry.'), (5, 'fa-tint', 'Dip Reading', 'Underground tank stock validation.'), (5, 'fa-credit-card', 'Credit Sales', 'Manage corporate client credits.'),
(6, 'fa-user', 'Student Info', 'Complete student profiles.'), (6, 'fa-book', 'Exams', 'Marks entry and report card generation.'), (6, 'fa-money', 'Fees', 'Tuition fee collection and receipts.'),
(7, 'fa-user-plus', 'Membership', 'New member registration and packages.'), (7, 'fa-calendar', 'Scheduling', 'Trainer and class slot allocation.'), (7, 'fa-cutlery', 'Diet Plans', 'Nutrition tracking for members.'),
(8, 'fa-list', 'Catalog', 'Product and category management.'), (8, 'fa-qrcode', 'Barcoding', 'Label generation and scanning.'), (8, 'fa-truck', 'Suppliers', 'Purchase orders and receiving.'),
(9, 'fa-file', 'Docs', 'Employee document vault.'), (9, 'fa-gavel', 'Disciplinary', 'Warning and action tracking.'), (9, 'fa-handshake-o', 'Asset', 'Company asset distribution.'),
(10, 'fa-address-book', 'Contacts', 'Centralized client database.'), (10, 'fa-bullhorn', 'Marketing', 'Email and SMS blasts.'), (10, 'fa-ticket', 'Support', 'Ticketing system for issues.');

-- 2d. Features
INSERT INTO `product_features` (`product_id`, `icon`, `title`, `description`) VALUES
(1, 'fa-star', 'User Friendly', '.'), (1, 'fa-lock', 'Secure Data', '.'),
(2, 'fa-star', 'Dynamic Shifts', '.'), (2, 'fa-lock', 'Role Access', '.'),
(3, 'fa-star', 'Fast Billing', '.'), (3, 'fa-mobile', 'Mobile App', '.'),
(4, 'fa-check', 'Accurate', '.'), (4, 'fa-globe', 'Global Access', '.'),
(5, 'fa-check', 'Shift Mgmt', '.'), (5, 'fa-file', 'VAT Ready', '.'),
(6, 'fa-check', 'Parent Portal', '.'), (6, 'fa-envelope', 'SMS Service', '.'),
(7, 'fa-check', 'Fingerprint', '.'), (7, 'fa-camera', 'Member Photo', '.'),
(8, 'fa-check', 'Low Stock', '.'), (8, 'fa-history', 'Logs', '.'),
(9, 'fa-check', 'Ease of Use', '.'), (9, 'fa-archive', 'Digital File', '.'),
(10, 'fa-check', 'Lead Scoring', '.'), (10, 'fa-phone', 'Call Log', '.');

-- 2e. Technologies
INSERT INTO `product_technologies` (`product_id`, `icon`, `title`) VALUES
(1, 'php.png', 'PHP'), (1, 'mysql.png', 'MySQL'), (1, 'codeigniter.png', 'CodeIgniter'), (1, 'bootstrap.png', 'Bootstrap'),
(2, 'php.png', 'PHP'), (2, 'mysql.png', 'MySQL'), (2, 'laravel.png', 'Laravel'), (2, 'vue.png', 'Vue.js'),
(3, 'java.png', 'Java'), (3, 'android.png', 'Android'), (3, 'php.png', 'PHP'), (3, 'mysql.png', 'MySQL'),
(4, 'php.png', 'PHP'), (4, 'mysql.png', 'MySQL'), (4, 'html5.png', 'HTML5'),
(5, 'php.png', 'PHP'), (5, 'mysql.png', 'MySQL'), (5, 'html5.png', 'HTML5'),
(6, 'php.png', 'PHP'), (6, 'mysql.png', 'MySQL'), (6, 'html5.png', 'HTML5'),
(7, 'php.png', 'PHP'), (7, 'mysql.png', 'MySQL'), (7, 'html5.png', 'HTML5'),
(8, 'php.png', 'PHP'), (8, 'mysql.png', 'MySQL'), (8, 'html5.png', 'HTML5'),
(9, 'php.png', 'PHP'), (9, 'mysql.png', 'MySQL'), (9, 'html5.png', 'HTML5'),
(10, 'php.png', 'PHP'), (10, 'mysql.png', 'MySQL'), (10, 'html5.png', 'HTML5');

-- 2f. Pricing Plans
INSERT INTO `product_pricing_plans` (`product_id`, `plan_name`, `price`, `price_unit`, `button_text`, `button_link`) VALUES
(1, 'Basic', '25k', '/month', 'Choose Basic', '#'),
(1, 'Standard', '45k', '/month', 'Choose Standard', '#'),
(1, 'Premium', '80k', '/month', 'Choose Premium', '#'),
(2, 'Startup', '10k', '/month', 'Get Started', '#'),
(2, 'Corporate', '35k', '/month', 'Get Corporate', '#'),
(3, 'Starter', '15k', '/month', 'Buy Now', '#'),
(3, 'Business', '30k', '/month', 'Buy Now', '#'),
(4, 'Silver', '5%', '/profit', 'Invest Now', '#'),
(4, 'Gold', '3%', '/profit', 'Invest Now', '#'),
(5, 'Standard', '20k', '/license', 'Buy Now', '#'),
(6, 'Cloud', '5k', '/month', 'Subscribe', '#'),
(7, 'Basic', '5k', '/month', 'Start', '#'),
(8, 'Retail', '10k', '/month', 'Start', '#'),
(9, 'SME', '15k', '/month', 'Start', '#'),
(10, 'Growth', '20k', '/month', 'Start', '#');

-- 2g. Pricing Features
INSERT INTO `product_pricing_features` (`plan_id`, `feature_text`) SELECT id, 'Full Access' FROM product_pricing_plans;
INSERT INTO `product_pricing_features` (`plan_id`, `feature_text`) SELECT id, '24/7 Support' FROM product_pricing_plans;
INSERT INTO `product_pricing_features` (`plan_id`, `feature_text`) SELECT id, 'Cloud Backup' FROM product_pricing_plans;

-- 2h. FAQ
INSERT INTO `product_faqs` (`product_id`, `question`, `answer`) VALUES
(1, 'Is it customizable?', 'Yes, fully customizable.'), (1, 'Support available?', 'Yes, 24/7 support.'),
(2, 'Labor law compliant?', 'Yes, updated with latest laws.'), (2, 'Multi-user?', 'Yes, role based access.'),
(3, 'Offline mode?', 'Yes, works offline.'), (3, 'Hardware support?', 'Supports scanners and printers.'),
(4, 'Is it secure?', 'Bank grade security.'), (4, 'Mobile app?', 'Yes, available on stores.'),
(5, 'Automatic reading?', 'Yes, with compatible dispensers.'),
(6, 'Exam management?', 'Complete exam & result engine.'),
(7, 'Biometric?', 'Yes, fingerprint integration.'),
(8, 'Multiple warehouse?', 'Yes, infinite warehouses.'),
(9, 'Payroll included?', 'Yes, integrated payroll.'),
(10, 'Email marketing?', 'Yes, built-in campaigns.');

-- 2i. Audiences
INSERT INTO `product_audiences` (`product_id`, `icon`, `title`, `description`) VALUES
(1, 'fa-building', 'Factory', 'Manufacturing units.'), (1, 'fa-briefcase', 'Corporate', 'Large offices.'),
(2, 'fa-users', 'HR Managers', 'HR Depts.'), (2, 'fa-building', 'Agencies', 'Recruitment firms.'),
(3, 'fa-shopping-cart', 'Retailers', 'Shops and Marts.'),
(5, 'fa-car', 'Pump Owners', 'Filling Stations.'),
(6, 'fa-graduation-cap', 'Schools', 'Colleges and Schools.');

-- 2j. Industries
INSERT INTO `product_industries` (`product_id`, `icon`, `title`) VALUES
(1, 'fa-industry', 'Textile'), (1, 'fa-flask', 'Pharma'),
(2, 'fa-users', 'Service'), (2, 'fa-industry', 'Industrial'),
(3, 'fa-tag', 'Ecommerce'), (3, 'fa-cutlery', 'Food');
INSERT INTO `product_industries` (`product_id`, `icon`, `title`) SELECT id, 'fa-globe', 'General' FROM products_new WHERE id > 3;

-- 2k. Clients (Missing in previous script)
INSERT INTO `product_clients` (`product_id`, `client_name`, `logo_image`) VALUES
(1, 'Client A', 'client1.png'), (1, 'Client B', 'client2.png'), (1, 'Client C', 'client3.png'),
(2, 'Group X', 'client4.png'), (2, 'Company Y', 'client5.png'),
(3, 'Mart Z', 'client1.png'), (3, 'Shop W', 'client2.png'),
(4, 'Inv Firm', 'client3.png'), (4, 'Bank ABC', 'client4.png'),
(5, 'Pump 1', 'client5.png'),
(6, 'School A', 'client1.png'),
(7, 'Gym & Co', 'client2.png'),
(8, 'Store X', 'client3.png'),
(9, 'HR Corp', 'client4.png'),
(10, 'Sales Ltd', 'client5.png');
