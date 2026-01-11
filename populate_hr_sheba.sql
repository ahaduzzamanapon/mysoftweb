-- This script populates the database with content for the "HR Sheba" product.
-- It assumes the main product will have an ID of 1.

-- 1. Insert into products_new table
INSERT INTO `products_new` (`id`, `slug`, `name`, `meta_title`, `meta_description`, `hero_heading`, `hero_subheading`, `hero_description`, `hero_button_text`, `hero_button_link`, `hero_image`, `why_heading`, `why_description`, `why_button_text`, `why_button_link`, `summary_heading`, `modules_heading`, `features_heading`, `features_subheading`, `audiences_heading`, `industries_heading`, `technology_heading`, `pricing_heading`, `pricing_subheading`, `faq_heading`, `clients_heading`, `status`)
VALUES
(1, 'hr-sheba', 'HR Sheba', 'HR Sheba - Best HR Software in Bangladesh', 'The best HR software in Bangladesh offering a complete solution for HRM, payroll, attendance, and employee management.', 'Best HR Software in Bangladesh', 'Complete HRM, Payroll, and Attendance Solution', 'Looking for the Best HR Software in Bangladesh to simplify and automate your human resources operations? Our all-in-one HR management platform is built to streamline every step of the employee lifecycle—from hiring to retirement—while ensuring full compliance with local labor laws.', 'Try Free Demo', '#', 'hr-sheba-hero-image.png', 'Why HR Sheba HRM is the Best?', 'Our HR Management Software simplifies everything from staff hiring and onboarding to attendance tracking, handling missed check-in, employee engagement, and performance reviews. By creating a seamless work environment and easing complex HR tasks, our HRMS becomes your trusted partner in people management.', 'Get Started', '#', 'HR Sheba HRM Summary', 'Our Modules', 'Key Features', 'Tailoring Workforce Management for Every Sector', 'HR Sheba HRM helps you build Software for', 'Industries We Serve', 'Technology What We Use', 'Choose the plan that''s right for your business', 'The involvement of time and regions makes it the biggest disadvantage of a business the plan.', 'Frequently asked questions', 'Trusted by our amazing customers', 'active');

-- 2. Insert into product_metrics table
INSERT INTO `product_metrics` (`product_id`, `value`, `label`, `order_num`) VALUES
(1, '2M+', 'Customers', 1),
(1, '20+', 'Countries', 2),
(1, '35K+', 'Dealer Network', 3),
(1, '15+', 'Years of Innovation', 4);

-- 3. Insert into product_app_links table
INSERT INTO `product_app_links` (`product_id`, `icon`, `count_text`, `description`, `link_url`, `order_num`) VALUES
(1, 'fa-google-play', '200+', 'Total Published Playstore Apps', '#', 1),
(1, 'fa-apple', '200+', 'Total Published Appstore Apps', '#', 2),
(1, 'fa-download', '200+', 'Total Published Apps', '#', 3),
(1, 'fa-briefcase', '200+', 'Total Business Apps', '#', 4);

-- 4. Insert into product_modules table
INSERT INTO `product_modules` (`product_id`, `icon`, `title`, `order_num`) VALUES
(1, 'fa-user', 'Employee Information Management', 1),
(1, 'fa-clock-o', 'Time and Attendance Management', 2),
(1, 'fa-credit-card', 'Payroll Processing', 3),
(1, 'fa-bar-chart', 'HR Analytics and Reporting', 4),
(1, 'fa-check-square-o', 'Compliance Management', 5),
(1, 'fa-ban', 'Non-Compliance Management', 6),
(1, 'fa-file-text-o', 'Performance Record', 7),
(1, 'fa-calendar', 'Scheduling', 8),
(1, 'fa-calendar-times-o', 'Absence Management', 9);

-- 5. Insert into product_features table
INSERT INTO `product_features` (`product_id`, `icon`, `title`, `description`, `order_num`) VALUES
(1, 'fa-mobile', 'Mobile Attendance Tracking with HR Sheba', '', 1),
(1, 'fa-map-marker', 'Geo-Fencing for AHendance', '', 2),
(1, 'fa-street-view', 'Live Location Tracking', '', 3),
(1, 'fa-sign-out', 'Instant Leave Requests & Approvals', '', 4),
(1, 'fa-calendar-check-o', 'Shift & Schedule Management', '', 5),
(1, 'fa-money', 'Payslip & Payroll Access', '', 6),
(1, 'fa-bell', 'Real-Time HR Notifications', '', 7),
(1, 'fa-dashboard', 'Employee Management Dashboard', '', 8),
(1, 'fa-certificate', 'Auto-Generated Salary Certificate', '', 9),
(1, 'fa-globe', 'Seamless Integration with Web-Based HR Platform', '', 10),
(1, 'fa-pie-chart', 'Reporting & Analytics', '', 11),
(1, 'fa-shield', 'Security & Access Control', '', 12);

-- 6. Insert into product_audiences table
INSERT INTO `product_audiences` (`product_id`, `icon`, `title`, `description`, `order_num`) VALUES
(1, 'fa-building', 'Corporate', 'Our collaborative consulting on mobile strategy catalyzes streamlining IT frameworks and processes with the mobile roadmap aligned with corporate scenarios, policies, and current systems.', 1),
(1, 'fa-university', 'Public Sector', 'Our collaborative consulting on mobile strategy catalyzes streamlining IT frameworks and processes with the mobile roadmap aligned with public sector scenarios, policies, and current systems.', 2),
(1, 'fa-shopping-basket', 'Small Business', 'Myselfheaven collaborative consulting on the Mobile Strategy serves as a catalyst in streamlining IT (Information Technology) frameworks and processes with the mobile roadmap.', 3),
(1, 'fa-users', 'Individuals', 'Myselfheaven collaborative consulting on the Mobile Strategy serves as a catalyst in streamlining IT (Information Technology) frameworks and processes with the mobile roadmap.', 4);

-- 7. Insert into product_industries table
INSERT INTO `product_industries` (`product_id`, `icon`, `title`, `order_num`) VALUES
(1, 'fa-bank', 'Finance & Banking', 1),
(1, 'fa-shopping-cart', 'E-commerce', 2),
(1, 'fa-home', 'Real Estate', 3),
(1, 'fa-laptop', 'Software', 4),
(1, 'fa-heartbeat', 'Health & Fitness', 5),
(1, 'fa-cutlery', 'Food & Drink', 6),
(1, 'fa-medkit', 'Medical', 7),
(1, 'fa-graduation-cap', 'Education', 8),
(1, 'fa-plane', 'Travel', 9),
(1, 'fa-car', 'Automobile', 10),
(1, 'fa-line-chart', 'Business', 11),
(1, 'fa-film', 'Entertainment', 12);

-- 8. Insert into product_technologies table
INSERT INTO `product_technologies` (`product_id`, `icon`, `title`, `order_num`) VALUES
(1, 'vuejs.png', 'Vue.js', 1),
(1, 'react.png', 'React', 2),
(1, 'laravel.png', 'Laravel', 3),
(1, 'mysql.png', 'Mysql', 4),
(1, 'html5.png', 'Html', 5),
(1, 'tailwind.png', 'Tailwind Css', 6),
(1, 'figma.png', 'Figma', 7),
(1, 'flutter.png', 'Flutter', 8);

-- 9. Insert into product_pricing_plans and product_pricing_features tables
-- Plan 1: Standard
INSERT INTO `product_pricing_plans` (`id`, `product_id`, `plan_name`, `price`, `price_unit`, `button_text`, `button_link`, `order_num`) VALUES (1, 1, 'Standard', '$ 27', '/month', 'Get Started', '#', 1);
INSERT INTO `product_pricing_features` (`plan_id`, `feature_text`, `order_num`) VALUES
(1, '150+ components', 1),
(1, '24/7 support', 2),
(1, '1-year free updates', 3);

-- Plan 2: Essential
INSERT INTO `product_pricing_plans` (`id`, `product_id`, `plan_name`, `price`, `price_unit`, `button_text`, `button_link`, `order_num`) VALUES (2, 1, 'Essential', '$ 67', '/month', 'Get Started', '#', 2);
INSERT INTO `product_pricing_features` (`plan_id`, `feature_text`, `order_num`) VALUES
(2, '300+ components', 1),
(2, '24/7 support', 2),
(2, '2-year free updates', 3);

-- Plan 3: Premium
INSERT INTO `product_pricing_plans` (`id`, `product_id`, `plan_name`, `price`, `price_unit`, `button_text`, `button_link`, `order_num`) VALUES (3, 1, 'Premium', '$ 97', '/month', 'Get Started', '#', 3);
INSERT INTO `product_pricing_features` (`plan_id`, `feature_text`, `order_num`) VALUES
(3, '500+ components', 1),
(3, '24/7 support', 2),
(3, 'Lifetime free updates', 3);

-- 10. Insert into product_faqs table
INSERT INTO `product_faqs` (`product_id`, `question`, `answer`, `order_num`) VALUES
(1, 'What types of software do you develop?', 'We develop a wide range of software including web applications, mobile apps (Android/iOS), desktop applications, custom business solutions (ERP, HRM, POS) and e-commerce platforms.', 1),
(1, 'How long does it take to build a custom software?', 'The timeline for building a custom software depends on the complexity and features of the project. A simple project might take a few weeks, while a large-scale application can take several months. We provide a detailed timeline after the initial requirement analysis.', 2),
(1, 'What do you need from us to start a project?', 'To start a project, we typically need a detailed requirement document or a clear idea of the project goals, features, and target audience. We can also assist in the requirement gathering and analysis phase.', 3),
(1, 'Do you provide support after the software is delivered?', 'Yes, we provide post-delivery support and maintenance services to ensure the software runs smoothly and remains up-to-date. The support terms are defined in the project contract.', 4),
(1, 'Do you offer hosting and domain services?', 'While our primary focus is on software development, we can assist you in choosing the right hosting and domain services for your application and help with the deployment process.', 5);

-- 11. Insert into product_clients table
INSERT INTO `product_clients` (`product_id`, `logo_image`, `client_name`, `order_num`) VALUES
(1, 'itbusiness.png', 'itBusiness', 1),
(1, 'syscom.png', 'Syscom', 2),
(1, 'webflow.png', 'webflow', 3),
(1, 'firetran.png', 'FireTran', 4),
(1, 'workato.png', 'workato', 5),
(1, 'weave.png', 'weave', 6),
(1, 'sisense.png', 'sisense', 7),
(1, 'datadan.png', 'DataDan', 8);
