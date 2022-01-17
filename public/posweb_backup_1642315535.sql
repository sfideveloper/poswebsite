

CREATE TABLE `accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial_balance` double DEFAULT NULL,
  `total_balance` double NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO accounts VALUES("1","11111","Sales Account","1000","1000","this is first account","1","1","2018-12-18 09:58:02","2019-01-20 16:59:06");
INSERT INTO accounts VALUES("3","21211","Sa","","0","","0","1","2018-12-18 09:58:56","2019-01-20 16:59:06");



CREATE TABLE `adjustments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_qty` double NOT NULL,
  `item` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO adjustments VALUES("2","adr-20211207-072119","1","","7","1","","2021-12-07 14:21:19","2021-12-07 14:21:19");



CREATE TABLE `attendances` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `employee_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `checkin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO attendances VALUES("1","2019-01-02","1","1","10:00am","6:30pm","1","","2019-01-02 10:30:50","2019-01-02 10:30:50");
INSERT INTO attendances VALUES("3","2019-01-02","3","1","10:15am","6:30pm","0","","2019-01-02 10:57:12","2019-01-02 10:57:12");
INSERT INTO attendances VALUES("6","2020-02-03","1","1","11:30am","6:00pm","0","","2020-02-03 16:57:30","2020-02-03 16:57:30");



CREATE TABLE `billers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO billers VALUES("1","dimas","aks.jpg","aks","31123","dimas@kds.com","442343324","halishahar","chittagong","","","sdgs","0","2018-05-13 04:49:30","2021-12-08 10:42:15");
INSERT INTO billers VALUES("2","tariq","","big tree","","tariq@bigtree.com","321312","khulshi","chittagong","","","","0","2018-05-13 04:57:54","2021-12-08 10:42:15");
INSERT INTO billers VALUES("3","test","","test","","test@test.com","3211","erewrwqre","afsf","","","","0","2018-05-30 09:38:58","2018-05-30 09:39:57");
INSERT INTO billers VALUES("5","modon","mogaTel.jpg","mogaTel","","modon@gmail.com","32321","nasirabad","chittagong","","","bd","0","2018-09-01 10:59:54","2021-12-08 10:42:15");
INSERT INTO billers VALUES("6","a","","a","","a@a.com","q","q","q","","","","0","2018-10-07 09:33:39","2018-10-07 09:34:18");
INSERT INTO billers VALUES("7","a","","a","","a@a.com","a","a","a","","","","0","2018-10-07 09:34:36","2018-10-07 09:36:07");
INSERT INTO billers VALUES("8","x","x.png","x","","x@x.com","x","x","x","","","","0","2019-03-18 18:02:42","2021-12-08 10:42:03");
INSERT INTO billers VALUES("9","internK","","ewfew","","svds@gmail.com","32","svdsv","dsvsd","","","","0","2021-12-07 15:01:13","2021-12-08 10:41:55");
INSERT INTO billers VALUES("10","internKasir","","intern","","internKasir@khnk","0851","malang","malang","","","","1","2021-12-08 10:43:12","2021-12-08 10:43:12");



CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO brands VALUES("3","HP","HP.jpg","1","2018-05-12 16:06:14","2019-03-02 12:32:21");
INSERT INTO brands VALUES("4","samsung","samsung.jpg","1","2018-05-12 16:08:41","2018-07-04 10:38:37");
INSERT INTO brands VALUES("5","Apple","Apple.jpg","1","2018-09-01 06:34:49","2018-12-06 10:05:38");
INSERT INTO brands VALUES("6","jjjj","20201019093419.jpg","0","2020-10-19 22:33:52","2020-10-19 22:35:58");
INSERT INTO brands VALUES("7","Lotto","","1","2020-11-16 11:13:41","2020-11-16 11:13:41");



CREATE TABLE `cash_registers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cash_in_hand` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO cash_registers VALUES("1","100","9","1","0","2020-10-13 14:32:54","2020-10-24 07:27:42");
INSERT INTO cash_registers VALUES("2","50","9","1","1","2020-10-13 22:25:26","2020-10-13 22:25:26");
INSERT INTO cash_registers VALUES("3","200","1","1","1","2020-10-22 14:53:07","2020-10-24 07:33:32");
INSERT INTO cash_registers VALUES("4","100","1","2","1","2020-10-24 08:04:39","2020-10-24 08:04:39");
INSERT INTO cash_registers VALUES("5","10000","35","7","1","2021-12-08 11:16:50","2021-12-08 11:16:50");



CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO categories VALUES("1","Buah-buahan","","9","1","2018-05-12 10:27:25","2019-03-01 22:07:21");
INSERT INTO categories VALUES("2","Elektronik","","","1","2018-05-12 10:35:57","2019-03-01 22:07:21");
INSERT INTO categories VALUES("3","Koputer","20200701093146.jpg","2","1","2018-05-12 10:36:08","2020-07-01 22:31:46");
INSERT INTO categories VALUES("4","Mainan","","","1","2018-05-24 05:57:48","2019-03-01 22:09:27");
INSERT INTO categories VALUES("7","Jaket","","","0","2018-05-28 05:39:51","2018-05-28 05:40:48");
INSERT INTO categories VALUES("9","Makanan","","","1","2018-06-25 08:21:40","2018-09-03 10:41:28");
INSERT INTO categories VALUES("10","anda","","","0","2018-08-29 06:36:31","2018-08-29 06:37:34");
INSERT INTO categories VALUES("11","anda","","","0","2018-08-29 06:48:06","2018-08-29 06:53:22");
INSERT INTO categories VALUES("12","Aksesoris","","","1","2018-12-05 06:28:53","2021-12-07 14:20:22");
INSERT INTO categories VALUES("14","nn","","","0","2019-04-10 11:22:30","2019-04-10 12:38:47");
INSERT INTO categories VALUES("15","nm","","","0","2019-04-10 11:22:36","2019-04-10 12:41:43");
INSERT INTO categories VALUES("16","Desktop","","3","1","2020-03-11 17:42:33","2020-03-11 17:42:33");
INSERT INTO categories VALUES("17","tostos","20200701080042.png","","0","2020-07-01 21:00:42","2020-07-01 22:35:34");
INSERT INTO categories VALUES("19","SmartPhonee","20211207054808.png","2","0","2021-12-07 12:47:26","2021-12-07 12:48:15");
INSERT INTO categories VALUES("20","SmartPhone","","2","1","2021-12-07 12:48:34","2021-12-07 12:48:34");



CREATE TABLE `coupons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `minimum_amount` double DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `used` int(11) NOT NULL,
  `expired_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO coupons VALUES("1","sonar bangla","percentage","20","0","100","4","2020-11-19","1","1","2018-10-26 05:38:50","2020-11-18 07:52:39");
INSERT INTO coupons VALUES("2","i love bangladesh","fixed","200","1000","50","3","2021-12-09","1","1","2018-10-27 09:59:26","2021-12-08 10:32:57");



CREATE TABLE `currencies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange_rate` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO currencies VALUES("1","US Dollar","USD","1","2020-11-01 07:22:58","2020-11-01 07:34:55");
INSERT INTO currencies VALUES("2","Rupiah","Rp.","1","2020-11-01 07:22:58","2020-11-01 07:34:55");



CREATE TABLE `customer_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO customer_groups VALUES("1","general","0","1","2018-05-12 15:09:36","2019-03-02 13:01:35");
INSERT INTO customer_groups VALUES("2","distributor","-10","1","2018-05-12 15:12:14","2019-03-02 13:02:12");
INSERT INTO customer_groups VALUES("3","reseller","5","1","2018-05-12 15:12:26","2018-05-30 08:18:14");
INSERT INTO customer_groups VALUES("4","test","12","0","2018-05-30 08:17:16","2018-05-30 08:17:57");
INSERT INTO customer_groups VALUES("5","test","0","0","2018-08-03 16:10:27","2018-08-03 16:10:34");



CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_group_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit` double DEFAULT NULL,
  `expense` double DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO customers VALUES("1","1","22","dhiman","niamkvn","dhiman@gmail.com","+8801111111101","","kajir deuri","chittagong","","","bd","190","20","1","2018-05-12 17:00:48","2020-11-15 13:14:58");
INSERT INTO customers VALUES("2","2","","moinul","niamkvn","","+8801200000001","","jamalkhan","chittagong","","","bd","100","20","1","2018-05-12 17:04:51","2019-02-22 12:38:08");
INSERT INTO customers VALUES("3","3","","tariq","big tree","","3424","","khulshi","chittagong","","","bd","","","1","2018-05-12 17:07:52","2019-03-02 12:54:07");
INSERT INTO customers VALUES("4","1","","test","","","4234","","frwerw","qwerwqr","","","","","","0","2018-05-30 08:35:28","2018-05-30 08:37:38");
INSERT INTO customers VALUES("8","1","","anwar","smart it","anwar@smartit.com","32321","","nasirabad","chittagong","","","bd","","","0","2018-09-01 10:26:13","2018-09-01 10:29:55");
INSERT INTO customers VALUES("11","1","","walk-in-customer","","ashfaqdev.php@gmail.com","01923000001","11111","mohammadpur","dhaka","","","","","0","1","2018-09-02 08:30:54","2020-07-27 21:28:19");
INSERT INTO customers VALUES("15","1","","s","","","2","","s","3e","","","","","","0","2018-11-05 11:00:39","2018-11-08 10:37:08");
INSERT INTO customers VALUES("16","1","","asas","","","2121","","dasd","asdd","","","","","","0","2018-12-01 07:07:53","2018-12-04 04:55:46");
INSERT INTO customers VALUES("17","1","","sadman","","","312312","","khulshi","ctg","","","","","","0","2020-06-22 16:45:35","2020-06-22 16:45:51");
INSERT INTO customers VALUES("19","1","19","shakalaka","Digital image","shakalaka@gmail.com","1212","999","Andorkillah","Chittagong","Chittagong","1234","Bangladesh","","","1","2020-11-09 07:07:16","2020-11-09 07:07:16");
INSERT INTO customers VALUES("21","1","21","Modon Miya","modon company","modon@gmail.com","2222","","kuril road","Dhaka","","","","","","1","2020-11-13 14:12:11","2020-11-13 14:12:11");
INSERT INTO customers VALUES("24","1","","intern3","","inter3@gmail.com","0851","","malang","malang","ind","12345","ind","","","0","2021-12-07 14:44:21","2021-12-08 10:42:04");
INSERT INTO customers VALUES("25","2","","internC","","intern3@gmail.com","0857","","malang","malang","","","","","","0","2021-12-07 14:51:35","2021-12-08 10:41:59");
INSERT INTO customers VALUES("26","1","","aaaa","","","242","","egerg","err","","","","","","0","2021-12-07 14:55:42","2021-12-08 10:41:55");
INSERT INTO customers VALUES("27","1","","intern3","","intern3@gmail.com","231","","dwedewf","wcwdc","","","","","","0","2021-12-07 15:08:01","2021-12-08 10:41:50");
INSERT INTO customers VALUES("28","1","","Intern Pelanggan","Intern Perusahaan","internpelanggan@gmail.com","01","","Malang","Malang","","","","","","1","2021-12-08 10:44:26","2021-12-08 10:44:26");



CREATE TABLE `deliveries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivered_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recieved_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO deliveries VALUES("1","dr-20180808-044431","1","1","kajir deuri chittagong bd","abul","dhiman","","Instrument 1","3","2018-08-08 17:44:55","2020-09-26 19:25:39");
INSERT INTO deliveries VALUES("2","dr-20181106-105936","88","1","mohammadpur dhaka","","","","","2","2018-11-06 11:59:43","2018-11-06 12:10:38");
INSERT INTO deliveries VALUES("3","dr-20181106-111321","79","1","mohammadpur dhaka","Harun","Amjad","","","3","2018-11-06 12:13:25","2020-09-26 20:22:11");



CREATE TABLE `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO departments VALUES("1","Marketing","1","2018-12-27 12:16:47","2018-12-27 17:40:23");
INSERT INTO departments VALUES("2","IT Support","1","2018-12-27 17:28:47","2018-12-27 17:28:47");



CREATE TABLE `deposits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount` double NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO deposits VALUES("1","90","1","1","first deposit","2018-08-26 05:48:23","2018-08-26 08:18:55");
INSERT INTO deposits VALUES("3","100","2","1","","2018-08-26 07:53:16","2018-08-27 04:42:39");
INSERT INTO deposits VALUES("4","50","1","1","","2018-09-05 05:56:19","2018-09-05 05:56:19");
INSERT INTO deposits VALUES("5","50","1","1","","2018-09-10 07:08:40","2018-09-10 07:08:40");



CREATE TABLE `employees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO employees VALUES("1","john","john@gmail.com","10001","2","12","johngmailcom.jpg","GEC","chittagong","Bangladesh","1","2018-12-30 07:48:37","2019-03-02 13:50:23");
INSERT INTO employees VALUES("3","tests","test@test.com","111","1","","","","","","1","2018-12-31 05:20:51","2019-01-03 07:03:54");



CREATE TABLE `expense_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO expense_categories VALUES("1","16718342","washing","1","2018-08-16 07:32:48","2019-03-02 14:02:07");
INSERT INTO expense_categories VALUES("2","60128975","electric bill","1","2018-08-16 07:39:18","2018-08-16 07:39:18");
INSERT INTO expense_categories VALUES("3","83954970","test","0","2018-08-16 07:50:28","2018-08-16 07:51:40");
INSERT INTO expense_categories VALUES("4","1234","snacks","1","2018-09-01 09:40:04","2018-09-01 09:40:04");



CREATE TABLE `expenses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense_category_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cash_register_id` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO expenses VALUES("2","er-20180817-012254","1","2","1","1","","150","first expense...","2018-08-17 14:22:54","2018-08-17 14:44:13");
INSERT INTO expenses VALUES("3","er-20180817-014241","1","1","1","1","","125","second expense...","2018-08-17 14:42:41","2018-08-17 14:43:50");
INSERT INTO expenses VALUES("4","er-20181022-043609","2","1","1","1","","1000","","2018-10-22 17:36:09","2018-10-22 17:36:09");
INSERT INTO expenses VALUES("5","er-20181101-050207","2","2","1","1","","1000","","2018-11-01 06:02:07","2018-11-01 06:02:07");
INSERT INTO expenses VALUES("6","er-20181101-050231","2","1","1","1","","550","","2018-11-01 06:02:31","2018-11-01 06:02:31");
INSERT INTO expenses VALUES("7","er-20181105-091913","1","1","1","1","","2000","","2018-11-05 10:19:13","2018-11-05 10:19:13");
INSERT INTO expenses VALUES("8","er-20181105-091929","2","2","1","1","","1000","","2018-11-05 10:19:29","2018-11-05 10:19:29");
INSERT INTO expenses VALUES("9","er-20190101-063342","2","1","1","1","","100","","2019-01-01 07:33:42","2019-01-01 07:33:42");
INSERT INTO expenses VALUES("10","er-20190103-070018","2","2","1","9","","2000","","2019-01-03 08:00:18","2019-01-03 08:00:18");
INSERT INTO expenses VALUES("11","er-20190209-104656","2","2","1","1","","500","","2019-02-09 11:46:56","2019-02-09 11:46:56");
INSERT INTO expenses VALUES("12","er-20190209-104716","2","1","1","1","","400","","2019-02-09 11:47:16","2019-02-09 11:47:16");
INSERT INTO expenses VALUES("14","er-20190303-104142","2","2","1","1","","250","jjj","2019-03-03 11:41:42","2019-03-20 16:17:16");
INSERT INTO expenses VALUES("15","er-20190404-095645","2","1","1","1","","200","","2019-04-04 10:56:45","2019-04-04 10:56:45");
INSERT INTO expenses VALUES("16","er-20190528-103306","2","1","1","1","","560","","2019-05-28 11:33:06","2019-05-28 11:33:06");
INSERT INTO expenses VALUES("17","er-20190528-103325","2","2","1","1","","600","","2019-05-28 11:33:25","2019-05-28 11:33:25");
INSERT INTO expenses VALUES("19","er-20190613-101955","2","2","1","1","","800","","2019-06-13 11:19:55","2019-06-13 11:19:55");
INSERT INTO expenses VALUES("20","er-20191019-033149","2","1","1","1","","300","","2019-10-19 16:31:49","2019-10-19 16:31:49");
INSERT INTO expenses VALUES("21","er-20191222-023508","2","1","1","1","","550","","2019-12-22 15:35:08","2019-12-22 15:35:08");
INSERT INTO expenses VALUES("22","er-20200101-022304","2","2","1","1","","500","","2020-01-01 15:23:04","2020-01-01 15:23:04");
INSERT INTO expenses VALUES("23","er-20200204-105938","1","1","1","1","","400","","2020-02-04 23:59:38","2020-02-04 23:59:38");
INSERT INTO expenses VALUES("24","er-20200204-105957","1","2","1","1","","350","","2020-02-04 23:59:57","2020-02-04 23:59:57");
INSERT INTO expenses VALUES("25","er-20200406-075239","2","2","1","1","","750","","2020-04-06 20:52:39","2020-04-06 20:52:39");
INSERT INTO expenses VALUES("26","er-20200506-110112","2","2","1","1","","1260","","2020-05-07 00:01:12","2020-05-07 00:01:12");
INSERT INTO expenses VALUES("27","er-20200609-124344","2","1","1","1","","500","","2020-06-09 13:43:44","2020-06-09 13:43:44");
INSERT INTO expenses VALUES("28","er-20200609-124406","2","2","1","1","","1000","","2020-06-09 13:44:06","2020-06-09 13:44:06");
INSERT INTO expenses VALUES("29","er-20200703-064005","2","2","1","1","","630","","2020-07-03 19:40:05","2020-07-03 19:40:05");
INSERT INTO expenses VALUES("30","er-20200812-062947","1","2","1","1","","320","","2020-08-12 19:29:47","2020-08-12 19:29:47");
INSERT INTO expenses VALUES("31","er-20200812-063010","2","2","1","1","","730","","2020-08-12 19:30:10","2020-08-12 19:30:10");
INSERT INTO expenses VALUES("32","er-20201018-124438","2","1","1","9","2","100","","2020-10-18 13:44:38","2020-10-18 13:44:38");
INSERT INTO expenses VALUES("33","er-20201101-072257","1","2","1","1","4","50","","2020-11-01 08:22:57","2020-11-01 08:22:57");
INSERT INTO expenses VALUES("34","er-20201118-062500","4","1","1","1","3","200","","2020-11-18 07:25:00","2020-11-18 07:25:00");



CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




CREATE TABLE `general_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_access` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_format` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developed_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_format` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `currency_position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO general_settings VALUES("1","HEI POS","logo.svg","2","own","d/m/Y","niamkvn","standard","1","default.css","2018-07-06 13:13:11","2021-12-07 13:11:46","prefix");



CREATE TABLE `gift_card_recharges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gift_card_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO gift_card_recharges VALUES("1","2","100","1","2018-08-25 06:08:29","2018-08-25 06:08:29");
INSERT INTO gift_card_recharges VALUES("2","1","200","1","2018-08-25 06:08:50","2018-08-25 06:08:50");
INSERT INTO gift_card_recharges VALUES("3","1","100","1","2018-09-05 06:50:41","2018-09-05 06:50:41");
INSERT INTO gift_card_recharges VALUES("4","1","50","1","2018-09-05 06:51:38","2018-09-05 06:51:38");
INSERT INTO gift_card_recharges VALUES("5","1","50","1","2018-09-05 06:53:36","2018-09-05 06:53:36");
INSERT INTO gift_card_recharges VALUES("6","2","50","1","2018-09-05 06:54:34","2018-09-05 06:54:34");
INSERT INTO gift_card_recharges VALUES("7","5","10","1","2018-09-30 07:19:48","2018-09-30 07:19:48");
INSERT INTO gift_card_recharges VALUES("8","5","10","1","2018-09-30 07:20:04","2018-09-30 07:20:04");
INSERT INTO gift_card_recharges VALUES("9","2","100","1","2018-10-07 10:13:05","2018-10-07 10:13:05");
INSERT INTO gift_card_recharges VALUES("10","1","200","1","2018-10-07 10:13:39","2018-10-07 10:13:39");
INSERT INTO gift_card_recharges VALUES("11","1","300","1","2018-10-23 07:22:49","2018-10-23 07:22:49");



CREATE TABLE `gift_cards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `card_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `expense` double NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO gift_cards VALUES("1","3571097513020486","1400","450","1","","2020-12-31","1","1","2018-08-18 08:57:40","2020-10-18 12:14:26");
INSERT INTO gift_cards VALUES("2","0452297501931931","370","100","2","","2020-12-31","1","1","2018-08-18 09:46:43","2019-11-10 19:56:28");
INSERT INTO gift_cards VALUES("3","123","13123","0","1","","2018-08-19","1","0","2018-08-19 05:38:21","2018-08-19 05:38:28");
INSERT INTO gift_cards VALUES("4","1862381252690499","100","0","","1","2018-10-04","1","0","2018-09-30 07:16:28","2018-09-30 07:17:21");
INSERT INTO gift_cards VALUES("5","2300813717254199","143","0","","1","2018-10-04","1","0","2018-09-30 07:18:49","2018-09-30 07:20:20");
INSERT INTO gift_cards VALUES("6","8327019475026421","1","0","1","","2018-10-07","1","0","2018-10-07 10:12:41","2018-10-07 10:12:55");
INSERT INTO gift_cards VALUES("7","2063379780590151","1","0","1","","2018-10-23","1","0","2018-10-23 07:23:22","2018-10-23 07:23:39");
INSERT INTO gift_cards VALUES("8","3357199140242852","1000000","25600","24","","2021-12-12","1","1","2021-12-07 15:32:16","2021-12-08 10:32:58");



CREATE TABLE `holidays` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO holidays VALUES("12","29","2021-12-07","2021-12-08","izin","0","2021-12-07 14:41:52","2021-12-07 14:41:52");



CREATE TABLE `hrm_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `checkin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO hrm_settings VALUES("1","10:00am","6:00pm","2019-01-02 09:20:08","2019-01-02 11:20:53");



CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO languages VALUES("1","en","2018-07-08 05:59:17","2019-12-25 00:34:20");



CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO migrations VALUES("1","2014_10_12_000000_create_users_table","1");
INSERT INTO migrations VALUES("2","2014_10_12_100000_create_password_resets_table","1");
INSERT INTO migrations VALUES("3","2018_02_17_060412_create_categories_table","1");
INSERT INTO migrations VALUES("4","2018_02_20_035727_create_brands_table","1");
INSERT INTO migrations VALUES("5","2018_02_25_100635_create_suppliers_table","1");
INSERT INTO migrations VALUES("6","2018_02_27_101619_create_warehouse_table","1");
INSERT INTO migrations VALUES("7","2018_03_03_040448_create_units_table","1");
INSERT INTO migrations VALUES("8","2018_03_04_041317_create_taxes_table","1");
INSERT INTO migrations VALUES("9","2018_03_10_061915_create_customer_groups_table","1");
INSERT INTO migrations VALUES("10","2018_03_10_090534_create_customers_table","1");
INSERT INTO migrations VALUES("11","2018_03_11_095547_create_billers_table","1");
INSERT INTO migrations VALUES("12","2018_04_05_054401_create_products_table","1");
INSERT INTO migrations VALUES("13","2018_04_06_133606_create_purchases_table","1");
INSERT INTO migrations VALUES("14","2018_04_06_154600_create_product_purchases_table","1");
INSERT INTO migrations VALUES("15","2018_04_06_154915_create_product_warhouse_table","1");
INSERT INTO migrations VALUES("16","2018_04_10_085927_create_sales_table","1");
INSERT INTO migrations VALUES("17","2018_04_10_090133_create_product_sales_table","1");
INSERT INTO migrations VALUES("18","2018_04_10_090254_create_payments_table","1");
INSERT INTO migrations VALUES("19","2018_04_10_090341_create_payment_with_cheque_table","1");
INSERT INTO migrations VALUES("20","2018_04_10_090509_create_payment_with_credit_card_table","1");
INSERT INTO migrations VALUES("21","2018_04_13_121436_create_quotation_table","1");
INSERT INTO migrations VALUES("22","2018_04_13_122324_create_product_quotation_table","1");
INSERT INTO migrations VALUES("23","2018_04_14_121802_create_transfers_table","1");
INSERT INTO migrations VALUES("24","2018_04_14_121913_create_product_transfer_table","1");
INSERT INTO migrations VALUES("25","2018_05_13_082847_add_payment_id_and_change_sale_id_to_payments_table","2");
INSERT INTO migrations VALUES("26","2018_05_13_090906_change_customer_id_to_payment_with_credit_card_table","3");
INSERT INTO migrations VALUES("27","2018_05_20_054532_create_adjustments_table","4");
INSERT INTO migrations VALUES("28","2018_05_20_054859_create_product_adjustments_table","4");
INSERT INTO migrations VALUES("29","2018_05_21_163419_create_returns_table","5");
INSERT INTO migrations VALUES("30","2018_05_21_163443_create_product_returns_table","5");
INSERT INTO migrations VALUES("31","2018_06_02_050905_create_roles_table","6");
INSERT INTO migrations VALUES("32","2018_06_02_073430_add_columns_to_users_table","7");
INSERT INTO migrations VALUES("33","2018_06_03_053738_create_permission_tables","8");
INSERT INTO migrations VALUES("36","2018_06_21_063736_create_pos_setting_table","9");
INSERT INTO migrations VALUES("37","2018_06_21_094155_add_user_id_to_sales_table","10");
INSERT INTO migrations VALUES("38","2018_06_21_101529_add_user_id_to_purchases_table","11");
INSERT INTO migrations VALUES("39","2018_06_21_103512_add_user_id_to_transfers_table","12");
INSERT INTO migrations VALUES("40","2018_06_23_061058_add_user_id_to_quotations_table","13");
INSERT INTO migrations VALUES("41","2018_06_23_082427_add_is_deleted_to_users_table","14");
INSERT INTO migrations VALUES("42","2018_06_25_043308_change_email_to_users_table","15");
INSERT INTO migrations VALUES("43","2018_07_06_115449_create_general_settings_table","16");
INSERT INTO migrations VALUES("44","2018_07_08_043944_create_languages_table","17");
INSERT INTO migrations VALUES("45","2018_07_11_102144_add_user_id_to_returns_table","18");
INSERT INTO migrations VALUES("46","2018_07_11_102334_add_user_id_to_payments_table","18");
INSERT INTO migrations VALUES("47","2018_07_22_130541_add_digital_to_products_table","19");
INSERT INTO migrations VALUES("49","2018_07_24_154250_create_deliveries_table","20");
INSERT INTO migrations VALUES("50","2018_08_16_053336_create_expense_categories_table","21");
INSERT INTO migrations VALUES("51","2018_08_17_115415_create_expenses_table","22");
INSERT INTO migrations VALUES("55","2018_08_18_050418_create_gift_cards_table","23");
INSERT INTO migrations VALUES("56","2018_08_19_063119_create_payment_with_gift_card_table","24");
INSERT INTO migrations VALUES("57","2018_08_25_042333_create_gift_card_recharges_table","25");
INSERT INTO migrations VALUES("58","2018_08_25_101354_add_deposit_expense_to_customers_table","26");
INSERT INTO migrations VALUES("59","2018_08_26_043801_create_deposits_table","27");
INSERT INTO migrations VALUES("60","2018_09_02_044042_add_keybord_active_to_pos_setting_table","28");
INSERT INTO migrations VALUES("61","2018_09_09_092713_create_payment_with_paypal_table","29");
INSERT INTO migrations VALUES("62","2018_09_10_051254_add_currency_to_general_settings_table","30");
INSERT INTO migrations VALUES("63","2018_10_22_084118_add_biller_and_store_id_to_users_table","31");
INSERT INTO migrations VALUES("65","2018_10_26_034927_create_coupons_table","32");
INSERT INTO migrations VALUES("66","2018_10_27_090857_add_coupon_to_sales_table","33");
INSERT INTO migrations VALUES("67","2018_11_07_070155_add_currency_position_to_general_settings_table","34");
INSERT INTO migrations VALUES("68","2018_11_19_094650_add_combo_to_products_table","35");
INSERT INTO migrations VALUES("69","2018_12_09_043712_create_accounts_table","36");
INSERT INTO migrations VALUES("70","2018_12_17_112253_add_is_default_to_accounts_table","37");
INSERT INTO migrations VALUES("71","2018_12_19_103941_add_account_id_to_payments_table","38");
INSERT INTO migrations VALUES("72","2018_12_20_065900_add_account_id_to_expenses_table","39");
INSERT INTO migrations VALUES("73","2018_12_20_082753_add_account_id_to_returns_table","40");
INSERT INTO migrations VALUES("74","2018_12_26_064330_create_return_purchases_table","41");
INSERT INTO migrations VALUES("75","2018_12_26_144210_create_purchase_product_return_table","42");
INSERT INTO migrations VALUES("76","2018_12_26_144708_create_purchase_product_return_table","43");
INSERT INTO migrations VALUES("77","2018_12_27_110018_create_departments_table","44");
INSERT INTO migrations VALUES("78","2018_12_30_054844_create_employees_table","45");
INSERT INTO migrations VALUES("79","2018_12_31_125210_create_payrolls_table","46");
INSERT INTO migrations VALUES("80","2018_12_31_150446_add_department_id_to_employees_table","47");
INSERT INTO migrations VALUES("81","2019_01_01_062708_add_user_id_to_expenses_table","48");
INSERT INTO migrations VALUES("82","2019_01_02_075644_create_hrm_settings_table","49");
INSERT INTO migrations VALUES("83","2019_01_02_090334_create_attendances_table","50");
INSERT INTO migrations VALUES("84","2019_01_27_160956_add_three_columns_to_general_settings_table","51");
INSERT INTO migrations VALUES("85","2019_02_15_183303_create_stock_counts_table","52");
INSERT INTO migrations VALUES("86","2019_02_17_101604_add_is_adjusted_to_stock_counts_table","53");
INSERT INTO migrations VALUES("87","2019_04_13_101707_add_tax_no_to_customers_table","54");
INSERT INTO migrations VALUES("89","2019_10_14_111455_create_holidays_table","55");
INSERT INTO migrations VALUES("90","2019_11_13_145619_add_is_variant_to_products_table","56");
INSERT INTO migrations VALUES("91","2019_11_13_150206_create_product_variants_table","57");
INSERT INTO migrations VALUES("92","2019_11_13_153828_create_variants_table","57");
INSERT INTO migrations VALUES("93","2019_11_25_134041_add_qty_to_product_variants_table","58");
INSERT INTO migrations VALUES("94","2019_11_25_134922_add_variant_id_to_product_purchases_table","58");
INSERT INTO migrations VALUES("95","2019_11_25_145341_add_variant_id_to_product_warehouse_table","58");
INSERT INTO migrations VALUES("96","2019_11_29_182201_add_variant_id_to_product_sales_table","59");
INSERT INTO migrations VALUES("97","2019_12_04_121311_add_variant_id_to_product_quotation_table","60");
INSERT INTO migrations VALUES("98","2019_12_05_123802_add_variant_id_to_product_transfer_table","61");
INSERT INTO migrations VALUES("100","2019_12_08_114954_add_variant_id_to_product_returns_table","62");
INSERT INTO migrations VALUES("101","2019_12_08_203146_add_variant_id_to_purchase_product_return_table","63");
INSERT INTO migrations VALUES("102","2020_02_28_103340_create_money_transfers_table","64");
INSERT INTO migrations VALUES("103","2020_07_01_193151_add_image_to_categories_table","65");
INSERT INTO migrations VALUES("105","2020_09_26_130426_add_user_id_to_deliveries_table","66");
INSERT INTO migrations VALUES("107","2020_10_11_125457_create_cash_registers_table","67");
INSERT INTO migrations VALUES("108","2020_10_13_155019_add_cash_register_id_to_sales_table","68");
INSERT INTO migrations VALUES("109","2020_10_13_172624_add_cash_register_id_to_returns_table","69");
INSERT INTO migrations VALUES("110","2020_10_17_212338_add_cash_register_id_to_payments_table","70");
INSERT INTO migrations VALUES("111","2020_10_18_124200_add_cash_register_id_to_expenses_table","71");
INSERT INTO migrations VALUES("112","2020_10_21_121632_add_developed_by_to_general_settings_table","72");
INSERT INTO migrations VALUES("113","2019_08_19_000000_create_failed_jobs_table","73");
INSERT INTO migrations VALUES("114","2020_10_30_135557_create_notifications_table","73");
INSERT INTO migrations VALUES("115","2020_11_01_044954_create_currencies_table","74");
INSERT INTO migrations VALUES("116","2020_11_01_140736_add_price_to_product_warehouse_table","75");
INSERT INTO migrations VALUES("117","2020_11_02_050633_add_is_diff_price_to_products_table","76");
INSERT INTO migrations VALUES("118","2020_11_09_055222_add_user_id_to_customers_table","77");
INSERT INTO migrations VALUES("119","2020_11_17_054806_add_invoice_format_to_general_settings_table","78");



CREATE TABLE `money_transfers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_account_id` int(11) NOT NULL,
  `to_account_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO money_transfers VALUES("2","mtr-20200228-071852","1","3","100","2020-02-28 20:18:52","2020-02-28 20:18:52");
INSERT INTO money_transfers VALUES("3","mtr-20211207-071249","1","3","1900","2021-12-07 14:12:49","2021-12-07 14:12:49");



CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO notifications VALUES("7f4a1d9d-c96b-4167-85d5-07c1270dc24a","App\Notifications\SendNotification","App\User","9","{"message":"bfh"}","","2021-12-07 15:08:58","2021-12-07 15:08:58");



CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




CREATE TABLE `payment_with_cheque` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `cheque_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO payment_with_cheque VALUES("1","19","23425235235","2018-07-01 10:09:48","2018-07-01 10:09:48");
INSERT INTO payment_with_cheque VALUES("2","24","3123123123","2018-07-10 08:21:32","2018-07-10 08:21:32");
INSERT INTO payment_with_cheque VALUES("3","31","767867678","2018-08-08 17:36:22","2018-08-08 17:36:22");
INSERT INTO payment_with_cheque VALUES("4","34","3123412","2018-08-09 06:55:54","2018-08-09 06:55:54");
INSERT INTO payment_with_cheque VALUES("5","35","7765","2018-08-09 07:32:14","2018-08-09 07:32:14");
INSERT INTO payment_with_cheque VALUES("6","44","3124142412","2018-08-30 10:07:18","2018-08-30 10:07:18");
INSERT INTO payment_with_cheque VALUES("7","51","6576764646","2018-09-03 11:08:21","2018-09-03 11:08:21");
INSERT INTO payment_with_cheque VALUES("8","53","111111111","2018-09-03 11:15:24","2018-09-03 11:15:24");
INSERT INTO payment_with_cheque VALUES("9","79","1111","2018-10-06 07:51:55","2018-10-06 07:51:55");
INSERT INTO payment_with_cheque VALUES("10","147","221133","2018-12-04 07:58:35","2018-12-04 07:58:35");
INSERT INTO payment_with_cheque VALUES("11","175","1111","2019-02-07 13:38:23","2019-02-07 13:38:23");
INSERT INTO payment_with_cheque VALUES("12","176","1111","2019-02-07 13:54:59","2019-02-07 13:54:59");
INSERT INTO payment_with_cheque VALUES("13","178","420","2019-02-07 14:07:04","2019-02-07 14:07:04");
INSERT INTO payment_with_cheque VALUES("14","216","12344321","2019-11-11 11:39:11","2019-11-11 11:39:11");
INSERT INTO payment_with_cheque VALUES("15","295","111122222","2020-10-18 12:17:24","2020-10-18 12:17:24");



CREATE TABLE `payment_with_credit_card` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO payment_with_credit_card VALUES("4","294","1","cus_IDw8z9yJZn4qH3","ch_1HdUGJKwOmA8HLXePiqphlky","2020-10-18 12:16:55","2020-10-18 12:16:55");



CREATE TABLE `payment_with_gift_card` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `gift_card_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO payment_with_gift_card VALUES("1","36","2","2018-08-25 04:48:36","2018-08-25 07:57:35");
INSERT INTO payment_with_gift_card VALUES("4","39","1","2018-08-25 09:36:34","2018-08-25 09:36:34");
INSERT INTO payment_with_gift_card VALUES("6","50","1","2018-09-03 06:01:38","2018-09-03 06:01:38");
INSERT INTO payment_with_gift_card VALUES("8","293","1","2020-10-18 12:14:26","2020-10-18 12:14:26");
INSERT INTO payment_with_gift_card VALUES("9","333","8","2021-12-08 10:25:24","2021-12-08 10:25:24");
INSERT INTO payment_with_gift_card VALUES("10","334","8","2021-12-08 10:27:39","2021-12-08 10:27:39");
INSERT INTO payment_with_gift_card VALUES("11","339","8","2021-12-08 10:32:58","2021-12-08 10:32:58");



CREATE TABLE `payment_with_paypal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payment_reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `cash_register_id` int(11) DEFAULT NULL,
  `account_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `change` double NOT NULL,
  `paying_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=345 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO payments VALUES("33","spr-20180809-055453","1","","2","","1","1000","0","Cash","","2018-08-09 06:54:53","2018-08-09 06:54:53");
INSERT INTO payments VALUES("34","spr-20180809-055553","1","","2","","1","1200","0","Cheque","","2018-08-09 06:55:53","2018-08-09 06:56:36");
INSERT INTO payments VALUES("35","spr-20180809-063214","1","","3","","1","897","0","Cheque","","2018-08-09 07:32:14","2018-08-09 07:32:14");
INSERT INTO payments VALUES("36","spr-20180825-034836","1","","4","","1","100","0","Gift Card","100 bucks paid...","2018-08-25 04:48:36","2018-08-25 07:57:35");
INSERT INTO payments VALUES("39","spr-20180825-083634","1","","4","","1","200","0","Gift Card","","2018-08-25 09:36:34","2018-08-25 09:36:34");
INSERT INTO payments VALUES("41","spr-20180826-094836","1","","6","","1","20","0","Deposit","20 bucks paid","2018-08-26 10:48:36","2018-08-27 04:42:13");
INSERT INTO payments VALUES("42","spr-20180827-073545","1","","7","","1","880","0","Cash","","2018-08-27 08:35:45","2018-08-27 08:35:45");
INSERT INTO payments VALUES("43","ppr-20180830-071637","1","13","","","1","100","0","Cash","100 bucks paid...","2018-08-30 08:16:37","2018-08-30 08:16:37");
INSERT INTO payments VALUES("44","ppr-20180830-090718","1","13","","","1","200","0","Cheque","","2018-08-30 10:07:18","2018-08-30 10:07:18");
INSERT INTO payments VALUES("46","spr-20180902-053954","1","","8","","1","3529.8","0","Cash","fully paid","2018-09-02 06:39:54","2018-09-02 06:39:54");
INSERT INTO payments VALUES("49","spr-20180903-033314","1","","9","","1","20","0","Deposit","fully paid","2018-09-03 04:33:14","2018-09-03 04:33:14");
INSERT INTO payments VALUES("50","spr-20180903-050138","1","","10","","1","200","0","Gift Card","50 bucks due...","2018-09-03 06:01:38","2018-09-10 04:40:28");
INSERT INTO payments VALUES("51","spr-20180903-100821","1","","11","","1","5500","0","Cheque","","2018-09-03 11:08:21","2018-09-03 11:08:21");
INSERT INTO payments VALUES("53","ppr-20180903-101524","1","16","","","1","1750","0","Cheque","","2018-09-03 11:15:24","2018-10-06 08:09:20");
INSERT INTO payments VALUES("78","spr-20180926-092105","1","","31","","1","560","0","Cash","","2018-09-26 10:21:05","2018-09-26 10:21:05");
INSERT INTO payments VALUES("79","spr-20181006-065017","1","","30","","1","100","0","Cheque","","2018-10-06 07:50:17","2018-10-06 07:51:55");
INSERT INTO payments VALUES("80","spr-20181006-065222","1","","30","","1","20","0","Cash","","2018-10-06 07:52:22","2018-10-06 07:52:22");
INSERT INTO payments VALUES("82","ppr-20181006-070935","1","16","","","1","1600","0","Cash","","2018-10-06 08:09:35","2018-10-06 08:09:35");
INSERT INTO payments VALUES("83","spr-20181010-041636","1","","41","","1","461","0","Cash","","2018-10-10 05:16:36","2018-10-10 05:16:36");
INSERT INTO payments VALUES("84","spr-20181010-053456","1","","42","","1","440","0","Cash","","2018-10-10 06:34:56","2018-10-10 06:34:56");
INSERT INTO payments VALUES("91","spr-20181021-065338","1","","55","","1","250","0","Cash","","2018-10-21 07:53:38","2018-10-21 07:53:38");
INSERT INTO payments VALUES("92","spr-20181021-082618","1","","57","","1","575.2","0","Cash","","2018-10-21 09:26:18","2018-10-21 09:26:18");
INSERT INTO payments VALUES("93","spr-20181022-032730","1","","58","","1","1220","0","Cash","","2018-10-22 16:27:30","2018-10-22 16:27:30");
INSERT INTO payments VALUES("104","spr-20181023-071548","11","","73","","1","5500","0","Cash","","2018-10-23 08:15:48","2018-10-23 08:15:48");
INSERT INTO payments VALUES("105","spr-20181023-071648","1","","74","","1","2320","0","Cash","","2018-10-23 08:16:48","2018-10-23 08:16:48");
INSERT INTO payments VALUES("126","spr-20181101-050033","1","","75","","1","7678","0","Cash","","2018-11-01 06:00:33","2018-11-01 06:00:33");
INSERT INTO payments VALUES("127","spr-20181101-050130","1","","76","","1","1424","0","Cash","","2018-11-01 06:01:30","2018-11-08 10:44:51");
INSERT INTO payments VALUES("129","spr-20181105-091523","1","","79","","1","14454","0","Cash","","2018-11-05 10:15:23","2018-11-05 10:15:23");
INSERT INTO payments VALUES("130","spr-20181105-092002","1","","80","","1","2500","0","Cash","","2018-11-05 10:20:02","2018-11-05 10:20:02");
INSERT INTO payments VALUES("131","ppr-20181105-092128","1","24","","","1","15950","0","Cash","","2018-11-05 10:21:28","2018-11-05 10:21:28");
INSERT INTO payments VALUES("137","spr-20181105-095952","1","","86","","1","1100","0","Cash","","2018-11-05 10:59:52","2018-11-05 10:59:52");
INSERT INTO payments VALUES("138","spr-20181105-100310","1","","88","","1","1100","0","Cash","","2018-11-05 11:03:10","2018-11-05 11:03:10");
INSERT INTO payments VALUES("139","spr-20181126-020534","1","","94","","1","120","0","Cash","","2018-11-26 15:05:34","2018-11-26 15:05:34");
INSERT INTO payments VALUES("140","spr-20181128-071515","1","","96","","1","132","0","Cash","","2018-11-28 08:15:15","2018-11-28 08:15:15");
INSERT INTO payments VALUES("141","spr-20181201-060524","1","","97","","1","200","300","Cash","","2018-12-01 07:05:24","2018-12-04 07:21:05");
INSERT INTO payments VALUES("148","ppr-20181204-065932","1","23","","","1","500","500","Cash","","2018-12-04 07:59:32","2018-12-04 07:59:44");
INSERT INTO payments VALUES("149","ppr-20181205-053443","1","25","","","1","4450","550","Cash","","2018-12-05 06:34:43","2018-12-05 06:34:43");
INSERT INTO payments VALUES("150","spr-20181205-053608","1","","98","","1","800","200","Cash","","2018-12-05 06:36:08","2018-12-05 06:36:08");
INSERT INTO payments VALUES("151","spr-20181205-053724","1","","99","","1","800","0","Cash","","2018-12-05 06:37:24","2018-12-05 06:37:24");
INSERT INTO payments VALUES("152","spr-20181208-062032","1","","101","","1","100","400","Cash","","2018-12-08 07:20:32","2018-12-11 10:19:39");
INSERT INTO payments VALUES("157","ppr-20181220-063439","1","27","","","1","10","0","Cash","","2018-12-20 07:34:39","2018-12-20 07:35:01");
INSERT INTO payments VALUES("159","spr-20181224-045832","1","","103","","1","120","0","Cash","","2018-12-24 05:58:32","2018-12-24 05:58:32");
INSERT INTO payments VALUES("160","spr-20190101-054544","1","","105","","1","21","0","Cash","","2019-01-01 06:45:44","2019-01-01 06:45:44");
INSERT INTO payments VALUES("161","spr-20190101-091040","1","","106","","1","860","0","Cash","","2019-01-01 10:10:40","2019-01-01 10:10:40");
INSERT INTO payments VALUES("162","spr-20190103-065627","1","","107","","1","5040","960","Cash","","2019-01-03 07:56:27","2019-01-03 07:56:27");
INSERT INTO payments VALUES("163","spr-20190120-035824","1","","108","","1","120","0","Cash","","2019-01-20 16:58:24","2019-01-20 16:58:24");
INSERT INTO payments VALUES("164","ppr-20190129-100302","9","36","","","1","650","350","Cash","","2019-01-29 11:03:02","2019-01-29 11:03:02");
INSERT INTO payments VALUES("165","ppr-20190129-100324","9","34","","","1","2860","140","Cash","","2019-01-29 11:03:24","2019-01-29 11:03:24");
INSERT INTO payments VALUES("166","spr-20190129-101451","9","","109","","1","540","460","Cash","","2019-01-29 11:14:51","2019-01-29 11:14:51");
INSERT INTO payments VALUES("167","spr-20190129-115048","9","","110","","1","1700","300","Cash","","2019-01-29 12:50:48","2019-01-29 12:50:48");
INSERT INTO payments VALUES("168","spr-20190131-110839","9","","111","","1","271","0","Cash","","2019-01-31 12:08:39","2019-01-31 12:08:39");
INSERT INTO payments VALUES("169","spr-20190202-104045","1","","112","","1","440","0","Cash","","2019-02-02 11:40:45","2019-02-02 11:40:45");
INSERT INTO payments VALUES("170","spr-20190202-114117","1","","113","","1","350","0","Cash","","2019-02-02 12:41:17","2019-02-02 12:41:17");
INSERT INTO payments VALUES("171","spr-20190205-030454","1","","114","","1","440","0","Cash","","2019-02-05 16:04:54","2019-02-05 16:04:54");
INSERT INTO payments VALUES("176","ppr-20190207-125418","1","35","","","1","50","50","Cash","","2019-02-07 13:54:18","2019-02-07 14:05:23");
INSERT INTO payments VALUES("178","ppr-20190207-010640","1","35","","","1","50","50","Cheque","","2019-02-07 14:06:40","2019-02-07 14:07:04");
INSERT INTO payments VALUES("179","spr-20190207-010915","1","","120","","1","50","50","Cash","","2019-02-07 14:09:15","2019-02-07 14:09:15");
INSERT INTO payments VALUES("180","spr-20190209-104816","1","","121","","1","1272","728","Cash","","2019-02-09 11:48:16","2019-02-09 11:48:16");
INSERT INTO payments VALUES("181","ppr-20190209-104940","1","38","","","1","1660","0","Cash","","2019-02-09 11:49:40","2019-02-09 11:49:40");
INSERT INTO payments VALUES("182","ppr-20190209-104959","1","39","","","1","973.5","0","Cash","","2019-02-09 11:49:59","2019-02-09 11:49:59");
INSERT INTO payments VALUES("183","spr-20190219-023214","1","","123","","1","440","0","Cash","","2019-02-19 15:32:14","2019-02-19 15:32:14");
INSERT INTO payments VALUES("189","spr-20190303-104010","1","","127","","1","2500","0","Cash","","2019-03-03 11:40:10","2019-03-03 11:40:10");
INSERT INTO payments VALUES("190","ppr-20190303-104046","1","40","","","1","100","0","Cash","","2019-03-03 11:40:46","2019-03-03 11:40:46");
INSERT INTO payments VALUES("191","ppr-20190303-104222","1","37","","","1","4000","0","Cash","","2019-03-03 11:42:22","2019-03-03 11:42:22");
INSERT INTO payments VALUES("192","ppr-20190303-104414","1","41","","","1","1000","0","Cash","","2019-03-03 11:44:14","2019-03-03 11:44:14");
INSERT INTO payments VALUES("193","spr-20190404-095555","1","","128","","1","560","0","Cash","","2019-04-04 10:55:55","2019-04-04 10:55:55");
INSERT INTO payments VALUES("194","ppr-20190404-095910","1","42","","","1","300","200","Cash","","2019-04-04 10:59:10","2019-04-13 17:52:38");
INSERT INTO payments VALUES("195","spr-20190404-095937","1","","129","","1","120","0","Cash","","2019-04-04 10:59:37","2019-04-04 10:59:37");
INSERT INTO payments VALUES("196","spr-20190421-122124","1","","130","","1","586","0","Cash","","2019-04-21 13:21:24","2019-04-21 13:21:24");
INSERT INTO payments VALUES("197","spr-20190528-103229","1","","131","","1","2890","0","Cash","","2019-05-28 11:32:29","2019-05-28 11:32:29");
INSERT INTO payments VALUES("198","ppr-20190613-101351","1","37","","","1","2390","0","Cash","","2019-06-13 11:13:51","2019-06-13 11:13:51");
INSERT INTO payments VALUES("199","spr-20190613-101637","1","","132","","1","840","0","Cash","","2019-06-13 11:16:37","2019-06-13 11:16:37");
INSERT INTO payments VALUES("200","ppr-20190613-101713","1","43","","","1","1000","0","Cash","","2019-06-13 11:17:13","2019-06-13 11:17:13");
INSERT INTO payments VALUES("201","spr-20190613-101752","1","","133","","1","2700","0","Cash","","2019-06-13 11:17:52","2019-06-13 11:17:52");
INSERT INTO payments VALUES("202","ppr-20191019-032925","1","43","","","1","3290","710","Cash","","2019-10-19 16:29:25","2019-10-19 16:29:25");
INSERT INTO payments VALUES("203","spr-20191019-033028","1","","134","","1","2940","60","Cash","","2019-10-19 16:30:28","2019-10-19 16:30:28");
INSERT INTO payments VALUES("205","spr-20191103-114044","1","","139","","1","488","12","Cash","","2019-11-03 12:40:44","2019-11-03 12:40:44");
INSERT INTO payments VALUES("206","ppr-20191103-114222","1","46","","","1","200","0","Cash","","2019-11-03 12:42:22","2019-11-03 12:42:22");
INSERT INTO payments VALUES("211","spr-20191109-074131","1","","144","","1","1220","0","Cash","","2019-11-09 20:41:31","2019-11-09 20:41:31");
INSERT INTO payments VALUES("216","ppr-20191111-103911","1","49","","","1","5000","0","Cheque","","2019-11-11 11:39:11","2019-11-11 11:39:11");
INSERT INTO payments VALUES("217","spr-20191111-104008","1","","147","","1","2220","780","Cash","","2019-11-11 11:40:08","2019-11-11 11:40:08");
INSERT INTO payments VALUES("222","spr-20191203-115128","1","","163","","1","3","0","Cash","","2019-12-03 12:51:28","2019-12-03 12:51:28");
INSERT INTO payments VALUES("227","ppr-20191204-111124","1","57","","","1","220","280","Cash","","2019-12-05 00:11:24","2019-12-05 00:11:24");
INSERT INTO payments VALUES("228","spr-20191205-092712","1","","173","","1","621","0","Cash","","2019-12-05 10:27:12","2019-12-05 10:27:12");
INSERT INTO payments VALUES("239","spr-20191222-104058","1","","187","","1","288","212","Cash","","2019-12-22 11:40:58","2019-12-22 11:40:58");
INSERT INTO payments VALUES("241","spr-20191223-125946","1","","190","","1","1100","400","Cash","","2019-12-23 13:59:46","2019-12-23 13:59:46");
INSERT INTO payments VALUES("244","ppr-20200101-010750","1","61","","","1","60","0","Cash","","2020-01-01 14:07:50","2020-01-01 14:07:50");
INSERT INTO payments VALUES("246","spr-20200101-022028","1","","193","","1","1100","400","Cash","","2020-01-01 15:20:28","2020-01-01 15:20:28");
INSERT INTO payments VALUES("247","ppr-20200101-022131","1","59","","","1","6","0","Cash","","2020-01-01 15:21:31","2020-01-01 15:21:31");
INSERT INTO payments VALUES("248","ppr-20200101-022137","1","58","","","1","4","0","Cash","","2020-01-01 15:21:37","2020-01-01 15:21:37");
INSERT INTO payments VALUES("249","ppr-20200101-022144","1","56","","","1","2","0","Cash","","2020-01-01 15:21:44","2020-01-01 15:21:44");
INSERT INTO payments VALUES("250","ppr-20200101-022152","1","55","","","1","4","0","Cash","","2020-01-01 15:21:52","2020-01-01 15:21:52");
INSERT INTO payments VALUES("251","ppr-20200101-022225","1","49","","","1","2000","0","Cash","","2020-01-01 15:22:25","2020-01-01 15:22:25");
INSERT INTO payments VALUES("252","spr-20200102-043947","1","","194","","1","892","108","Cash","","2020-01-02 17:39:47","2020-01-02 17:39:47");
INSERT INTO payments VALUES("258","spr-20200203-035256","1","","201","","1","120","880","Cash","","2020-02-03 16:52:56","2020-02-03 16:52:56");
INSERT INTO payments VALUES("259","spr-20200204-105853","1","","202","","1","1400","100","Cash","","2020-02-04 23:58:53","2020-02-04 23:58:53");
INSERT INTO payments VALUES("260","ppr-20200204-110050","1","67","","","1","300","0","Cash","","2020-02-05 00:00:50","2020-02-05 00:00:50");
INSERT INTO payments VALUES("261","spr-20200302-115414","1","","203","","1","350","150","Cash","","2020-03-02 12:54:14","2020-03-02 12:54:14");
INSERT INTO payments VALUES("262","spr-20200302-115741","1","","204","","1","40","10","Cash","","2020-03-02 12:57:41","2020-03-02 12:57:41");
INSERT INTO payments VALUES("263","ppr-20200302-115811","1","70","","","1","50","0","Cash","","2020-03-02 12:58:11","2020-03-02 12:58:11");
INSERT INTO payments VALUES("264","ppr-20200302-115820","1","69","","","1","50","0","Cash","","2020-03-02 12:58:20","2020-03-02 12:58:20");
INSERT INTO payments VALUES("265","spr-20200311-044642","1","","205","","1","352","148","Cash","","2020-03-11 17:46:42","2020-03-11 17:46:42");
INSERT INTO payments VALUES("266","ppr-20200406-073823","1","71","","","1","2000","1000","Cash","First Payment","2020-04-06 20:38:23","2020-04-06 20:38:55");
INSERT INTO payments VALUES("267","spr-20200406-074024","1","","207","","1","500","500","Cash","","2020-04-06 20:40:24","2020-04-06 20:40:24");
INSERT INTO payments VALUES("268","spr-20200406-074201","1","","207","","1","144","56","Cash","","2020-04-06 20:42:01","2020-04-06 20:42:01");
INSERT INTO payments VALUES("269","spr-20200506-105950","1","","208","","1","1540","460","Cash","","2020-05-06 23:59:50","2020-05-06 23:59:50");
INSERT INTO payments VALUES("270","spr-20200609-124248","1","","209","","1","1220","780","Cash","","2020-06-09 13:42:48","2020-06-09 13:42:48");
INSERT INTO payments VALUES("273","spr-20200703-063914","1","","212","","1","2585","415","Cash","","2020-07-03 19:39:14","2020-07-03 19:39:14");
INSERT INTO payments VALUES("274","spr-20200712-095153","1","","213","","1","13","37","Cash","","2020-07-12 22:51:53","2020-07-12 22:51:53");
INSERT INTO payments VALUES("276","spr-20200727-083808","1","","217","","1","385","0","Cash","","2020-07-27 21:38:08","2020-07-27 21:38:08");
INSERT INTO payments VALUES("277","spr-20200727-084024","1","","218","","1","385","0","Cash","","2020-07-27 21:40:24","2020-07-27 21:40:24");
INSERT INTO payments VALUES("278","spr-20200727-084645","1","","219","","1","385","0","Cash","","2020-07-27 21:46:45","2020-07-27 21:46:45");
INSERT INTO payments VALUES("279","spr-20200812-062806","1","","220","","1","760","240","Cash","","2020-08-12 19:28:06","2020-08-12 19:28:06");
INSERT INTO payments VALUES("280","ppr-20200812-062853","1","62","","","1","1650","0","Cash","","2020-08-12 19:28:53","2020-08-12 19:28:53");
INSERT INTO payments VALUES("281","spr-20200812-063035","1","","221","","1","1100","0","Cash","","2020-08-12 19:30:35","2020-08-12 19:30:35");
INSERT INTO payments VALUES("282","spr-20200816-100426","1","","222","","1","23000","2000","Cash","","2020-08-16 23:04:26","2020-08-16 23:04:26");
INSERT INTO payments VALUES("283","spr-20200816-100523","1","","223","","1","300","200","Cash","","2020-08-16 23:05:23","2020-08-16 23:05:23");
INSERT INTO payments VALUES("284","spr-20200816-100632","1","","223","","1","100","0","Cash","","2020-08-16 23:06:32","2020-08-16 23:06:32");
INSERT INTO payments VALUES("285","spr-20200816-100735","1","","223","","1","40","0","Cash","","2020-08-16 23:07:35","2020-08-16 23:07:35");
INSERT INTO payments VALUES("290","spr-20201017-092854","9","","230","2","1","200","0","Cash","","2020-10-17 22:28:54","2020-10-18 11:48:54");
INSERT INTO payments VALUES("291","spr-20201018-105138","9","","230","2","1","50","0","Cash","","2020-10-18 11:51:38","2020-10-18 11:51:38");
INSERT INTO payments VALUES("292","spr-20201018-111333","9","","231","2","1","100","0","Cash","","2020-10-18 12:13:33","2020-10-18 12:13:33");
INSERT INTO payments VALUES("293","spr-20201018-111426","9","","231","2","1","50","0","Gift Card","","2020-10-18 12:14:26","2020-10-18 12:14:26");
INSERT INTO payments VALUES("294","spr-20201018-111651","9","","231","2","1","50","0","Credit Card","","2020-10-18 12:16:51","2020-10-18 12:16:51");
INSERT INTO payments VALUES("295","spr-20201018-111724","9","","231","2","1","50","0","Cheque","","2020-10-18 12:17:24","2020-10-18 12:17:24");
INSERT INTO payments VALUES("296","spr-20201022-013018","9","","232","2","1","100","0","Cash","","2020-10-22 14:30:18","2020-10-22 14:30:18");
INSERT INTO payments VALUES("297","spr-20201022-015606","1","","233","3","1","250","0","Cash","","2020-10-22 14:56:06","2020-10-22 14:56:06");
INSERT INTO payments VALUES("298","spr-20201024-070508","1","","234","4","1","11500","0","Cash","","2020-10-24 08:05:08","2020-10-24 08:05:08");
INSERT INTO payments VALUES("299","spr-20201024-070753","1","","235","4","1","250","0","Cash","","2020-10-24 08:07:53","2020-10-24 08:07:53");
INSERT INTO payments VALUES("300","spr-20201024-034619","1","","237","4","1","61900","0","Cash","","2020-10-24 16:46:19","2020-10-24 16:46:19");
INSERT INTO payments VALUES("302","spr-20201027-054004","1","","239","3","1","2","0","Cash","","2020-10-27 06:40:04","2020-10-27 06:40:04");
INSERT INTO payments VALUES("303","spr-20201027-054207","1","","240","3","1","6","0","Cash","","2020-10-27 06:42:07","2020-10-27 06:42:07");
INSERT INTO payments VALUES("304","spr-20201027-063202","1","","241","4","1","250","0","Cash","","2020-10-27 07:32:02","2020-10-27 07:32:02");
INSERT INTO payments VALUES("305","spr-20201029-073033","1","","242","4","1","250","0","Cash","","2020-10-29 08:30:33","2020-10-29 08:30:33");
INSERT INTO payments VALUES("306","spr-20201101-072115","1","","243","4","1","250","0","Cash","","2020-11-01 08:21:15","2020-11-01 08:21:15");
INSERT INTO payments VALUES("307","spr-20201101-074225","1","","245","3","1","1130","0","Cash","","2020-11-01 08:42:25","2020-11-01 08:42:25");
INSERT INTO payments VALUES("308","spr-20201101-075019","1","","246","4","1","440","0","Cash","","2020-11-01 08:50:19","2020-11-01 08:50:19");
INSERT INTO payments VALUES("310","spr-20201106-013042","1","","250","4","1","378.4","0","Cash","","2020-11-06 14:30:42","2020-11-06 14:30:42");
INSERT INTO payments VALUES("311","spr-20201109-011527","1","","251","4","1","500","0","Cash","","2020-11-09 14:15:27","2020-11-09 14:15:27");
INSERT INTO payments VALUES("312","spr-20201111-055902","1","","252","3","1","229.5","0","Cash","","2020-11-11 06:59:02","2020-11-11 06:59:02");
INSERT INTO payments VALUES("313","spr-20201114-064739","1","","253","4","1","10242.5","0","Cash","","2020-11-14 07:47:39","2020-11-14 07:47:39");
INSERT INTO payments VALUES("316","spr-20201117-064751","1","","256","4","1","715","0","Cash","","2020-11-17 07:47:51","2020-11-17 07:47:51");
INSERT INTO payments VALUES("317","spr-20201117-070920","1","","257","4","1","250","0","Cash","","2020-11-17 08:09:20","2020-11-17 08:09:20");
INSERT INTO payments VALUES("320","ppr-20201118-062036","1","90","","","1","33000","0","Cash","","2020-11-18 07:20:36","2020-11-18 07:20:36");
INSERT INTO payments VALUES("321","spr-20201118-065242","1","","258","4","1","27200","0","Cash","","2020-11-18 07:52:42","2020-11-18 07:52:42");
INSERT INTO payments VALUES("322","ppr-20211207-070108","1","91","","","1","7500000","100000","Cash","","2021-12-07 14:01:08","2021-12-07 14:09:50");
INSERT INTO payments VALUES("323","spr-20211207-072514","1","","259","3","1","2700000","0","Credit Card","","2021-12-07 14:25:14","2021-12-07 14:25:14");
INSERT INTO payments VALUES("324","spr-20211207-072627","1","","260","4","1","17397600","0","Credit Card","","2021-12-07 14:26:27","2021-12-07 14:26:27");
INSERT INTO payments VALUES("325","spr-20211207-081926","1","","261","4","1","8000","0","Credit Card","","2021-12-07 15:19:26","2021-12-07 15:19:26");
INSERT INTO payments VALUES("326","spr-20211207-081957","1","","262","4","1","8000","2000","Cash","","2021-12-07 15:19:57","2021-12-07 15:19:57");
INSERT INTO payments VALUES("327","spr-20211207-082032","1","","263","4","1","10097000","1000","Paypal","","2021-12-07 15:20:32","2021-12-07 15:20:32");
INSERT INTO payments VALUES("328","spr-20211207-082327","1","","264","4","1","8400","1600","Cash","","2021-12-07 15:23:27","2021-12-07 15:23:27");
INSERT INTO payments VALUES("329","spr-20211207-082441","1","","265","3","1","5400000","100000","Cash","","2021-12-07 15:24:41","2021-12-07 15:24:41");
INSERT INTO payments VALUES("330","spr-20211207-082539","1","","266","4","1","70000","0","Credit Card","","2021-12-07 15:25:39","2021-12-07 15:25:39");
INSERT INTO payments VALUES("331","spr-20211207-082556","1","","267","4","1","100000","0","Paypal","","2021-12-07 15:25:56","2021-12-07 15:25:56");
INSERT INTO payments VALUES("332","spr-20211207-085401","1","","269","4","1","8000","0","Credit Card","","2021-12-07 15:54:01","2021-12-07 15:54:01");
INSERT INTO payments VALUES("333","spr-20211208-032524","1","","270","4","1","8000","0","Gift Card","","2021-12-08 10:25:24","2021-12-08 10:25:24");
INSERT INTO payments VALUES("334","spr-20211208-032739","1","","271","4","1","7800","0","Gift Card","","2021-12-08 10:27:39","2021-12-08 10:27:39");
INSERT INTO payments VALUES("335","spr-20211208-032803","1","","272","4","1","8000","0","Paypal","","2021-12-08 10:28:03","2021-12-08 10:28:03");
INSERT INTO payments VALUES("336","spr-20211208-032912","1","","273","4","1","8000","0","Cash","","2021-12-08 10:29:12","2021-12-08 10:29:12");
INSERT INTO payments VALUES("337","spr-20211208-032959","1","","274","4","1","8000","0","Cash","","2021-12-08 10:29:59","2021-12-08 10:29:59");
INSERT INTO payments VALUES("338","spr-20211208-033038","1","","275","4","1","8000","0","Paypal","","2021-12-08 10:30:38","2021-12-08 10:30:38");
INSERT INTO payments VALUES("339","spr-20211208-033258","1","","276","4","1","9800","0","Gift Card","","2021-12-08 10:32:58","2021-12-08 10:32:58");
INSERT INTO payments VALUES("340","spr-20211208-033602","1","","277","4","1","5000","0","Cash","","2021-12-08 10:36:02","2021-12-08 10:36:02");
INSERT INTO payments VALUES("341","spr-20211208-035502","1","","278","","1","2700000","0","Cash","","2021-12-08 10:55:02","2021-12-08 10:55:02");
INSERT INTO payments VALUES("342","spr-20211208-035752","1","","279","4","1","8000","0","Paypal","","2021-12-08 10:57:52","2021-12-08 10:57:52");
INSERT INTO payments VALUES("343","ppr-20211208-042309","35","96","","","1","17501508","0","Cash","","2021-12-08 11:23:09","2021-12-08 11:23:09");
INSERT INTO payments VALUES("344","ppr-20211208-043122","35","97","","","1","10000000","0","Cash","","2021-12-08 11:31:22","2021-12-08 11:31:22");



CREATE TABLE `payrolls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `paying_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO payrolls VALUES("8","payroll-20190101-055231","1","1","1","100","0","","2019-01-01 06:52:31","2019-01-01 06:52:31");
INSERT INTO payrolls VALUES("9","payroll-20191204-113802","1","1","1","10000","0","","2019-12-05 00:38:02","2019-12-05 00:38:02");



CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO permissions VALUES("4","products-edit","web","2018-06-03 08:00:09","2018-06-03 08:00:09");
INSERT INTO permissions VALUES("5","products-delete","web","2018-06-04 05:54:22","2018-06-04 05:54:22");
INSERT INTO permissions VALUES("6","products-add","web","2018-06-04 07:34:14","2018-06-04 07:34:14");
INSERT INTO permissions VALUES("7","products-index","web","2018-06-04 10:34:27","2018-06-04 10:34:27");
INSERT INTO permissions VALUES("8","purchases-index","web","2018-06-04 15:03:19","2018-06-04 15:03:19");
INSERT INTO permissions VALUES("9","purchases-add","web","2018-06-04 15:12:25","2018-06-04 15:12:25");
INSERT INTO permissions VALUES("10","purchases-edit","web","2018-06-04 16:47:36","2018-06-04 16:47:36");
INSERT INTO permissions VALUES("11","purchases-delete","web","2018-06-04 16:47:36","2018-06-04 16:47:36");
INSERT INTO permissions VALUES("12","sales-index","web","2018-06-04 17:49:08","2018-06-04 17:49:08");
INSERT INTO permissions VALUES("13","sales-add","web","2018-06-04 17:49:52","2018-06-04 17:49:52");
INSERT INTO permissions VALUES("14","sales-edit","web","2018-06-04 17:49:52","2018-06-04 17:49:52");
INSERT INTO permissions VALUES("15","sales-delete","web","2018-06-04 17:49:53","2018-06-04 17:49:53");
INSERT INTO permissions VALUES("16","quotes-index","web","2018-06-05 05:05:10","2018-06-05 05:05:10");
INSERT INTO permissions VALUES("17","quotes-add","web","2018-06-05 05:05:10","2018-06-05 05:05:10");
INSERT INTO permissions VALUES("18","quotes-edit","web","2018-06-05 05:05:10","2018-06-05 05:05:10");
INSERT INTO permissions VALUES("19","quotes-delete","web","2018-06-05 05:05:10","2018-06-05 05:05:10");
INSERT INTO permissions VALUES("20","transfers-index","web","2018-06-05 05:30:03","2018-06-05 05:30:03");
INSERT INTO permissions VALUES("21","transfers-add","web","2018-06-05 05:30:03","2018-06-05 05:30:03");
INSERT INTO permissions VALUES("22","transfers-edit","web","2018-06-05 05:30:03","2018-06-05 05:30:03");
INSERT INTO permissions VALUES("23","transfers-delete","web","2018-06-05 05:30:03","2018-06-05 05:30:03");
INSERT INTO permissions VALUES("24","returns-index","web","2018-06-05 05:50:24","2018-06-05 05:50:24");
INSERT INTO permissions VALUES("25","returns-add","web","2018-06-05 05:50:24","2018-06-05 05:50:24");
INSERT INTO permissions VALUES("26","returns-edit","web","2018-06-05 05:50:25","2018-06-05 05:50:25");
INSERT INTO permissions VALUES("27","returns-delete","web","2018-06-05 05:50:25","2018-06-05 05:50:25");
INSERT INTO permissions VALUES("28","customers-index","web","2018-06-05 06:15:54","2018-06-05 06:15:54");
INSERT INTO permissions VALUES("29","customers-add","web","2018-06-05 06:15:55","2018-06-05 06:15:55");
INSERT INTO permissions VALUES("30","customers-edit","web","2018-06-05 06:15:55","2018-06-05 06:15:55");
INSERT INTO permissions VALUES("31","customers-delete","web","2018-06-05 06:15:55","2018-06-05 06:15:55");
INSERT INTO permissions VALUES("32","suppliers-index","web","2018-06-05 06:40:12","2018-06-05 06:40:12");
INSERT INTO permissions VALUES("33","suppliers-add","web","2018-06-05 06:40:12","2018-06-05 06:40:12");
INSERT INTO permissions VALUES("34","suppliers-edit","web","2018-06-05 06:40:12","2018-06-05 06:40:12");
INSERT INTO permissions VALUES("35","suppliers-delete","web","2018-06-05 06:40:12","2018-06-05 06:40:12");
INSERT INTO permissions VALUES("36","product-report","web","2018-06-25 06:05:33","2018-06-25 06:05:33");
INSERT INTO permissions VALUES("37","purchase-report","web","2018-06-25 06:24:56","2018-06-25 06:24:56");
INSERT INTO permissions VALUES("38","sale-report","web","2018-06-25 06:33:13","2018-06-25 06:33:13");
INSERT INTO permissions VALUES("39","customer-report","web","2018-06-25 06:36:51","2018-06-25 06:36:51");
INSERT INTO permissions VALUES("40","due-report","web","2018-06-25 06:39:52","2018-06-25 06:39:52");
INSERT INTO permissions VALUES("41","users-index","web","2018-06-25 07:00:10","2018-06-25 07:00:10");
INSERT INTO permissions VALUES("42","users-add","web","2018-06-25 07:00:10","2018-06-25 07:00:10");
INSERT INTO permissions VALUES("43","users-edit","web","2018-06-25 07:01:30","2018-06-25 07:01:30");
INSERT INTO permissions VALUES("44","users-delete","web","2018-06-25 07:01:30","2018-06-25 07:01:30");
INSERT INTO permissions VALUES("45","profit-loss","web","2018-07-15 04:50:05","2018-07-15 04:50:05");
INSERT INTO permissions VALUES("46","best-seller","web","2018-07-15 05:01:38","2018-07-15 05:01:38");
INSERT INTO permissions VALUES("47","daily-sale","web","2018-07-15 05:24:21","2018-07-15 05:24:21");
INSERT INTO permissions VALUES("48","monthly-sale","web","2018-07-15 05:30:41","2018-07-15 05:30:41");
INSERT INTO permissions VALUES("49","daily-purchase","web","2018-07-15 05:36:46","2018-07-15 05:36:46");
INSERT INTO permissions VALUES("50","monthly-purchase","web","2018-07-15 05:48:17","2018-07-15 05:48:17");
INSERT INTO permissions VALUES("51","payment-report","web","2018-07-15 06:10:41","2018-07-15 06:10:41");
INSERT INTO permissions VALUES("52","warehouse-stock-report","web","2018-07-15 06:16:55","2018-07-15 06:16:55");
INSERT INTO permissions VALUES("53","product-qty-alert","web","2018-07-15 06:33:21","2018-07-15 06:33:21");
INSERT INTO permissions VALUES("54","supplier-report","web","2018-07-30 10:00:01","2018-07-30 10:00:01");
INSERT INTO permissions VALUES("55","expenses-index","web","2018-09-05 08:07:10","2018-09-05 08:07:10");
INSERT INTO permissions VALUES("56","expenses-add","web","2018-09-05 08:07:10","2018-09-05 08:07:10");
INSERT INTO permissions VALUES("57","expenses-edit","web","2018-09-05 08:07:10","2018-09-05 08:07:10");
INSERT INTO permissions VALUES("58","expenses-delete","web","2018-09-05 08:07:11","2018-09-05 08:07:11");
INSERT INTO permissions VALUES("59","general_setting","web","2018-10-20 06:10:04","2018-10-20 06:10:04");
INSERT INTO permissions VALUES("60","mail_setting","web","2018-10-20 06:10:04","2018-10-20 06:10:04");
INSERT INTO permissions VALUES("61","pos_setting","web","2018-10-20 06:10:04","2018-10-20 06:10:04");
INSERT INTO permissions VALUES("62","hrm_setting","web","2019-01-02 17:30:23","2019-01-02 17:30:23");
INSERT INTO permissions VALUES("63","purchase-return-index","web","2019-01-03 04:45:14","2019-01-03 04:45:14");
INSERT INTO permissions VALUES("64","purchase-return-add","web","2019-01-03 04:45:14","2019-01-03 04:45:14");
INSERT INTO permissions VALUES("65","purchase-return-edit","web","2019-01-03 04:45:14","2019-01-03 04:45:14");
INSERT INTO permissions VALUES("66","purchase-return-delete","web","2019-01-03 04:45:14","2019-01-03 04:45:14");
INSERT INTO permissions VALUES("67","account-index","web","2019-01-03 05:06:13","2019-01-03 05:06:13");
INSERT INTO permissions VALUES("68","balance-sheet","web","2019-01-03 05:06:14","2019-01-03 05:06:14");
INSERT INTO permissions VALUES("69","account-statement","web","2019-01-03 05:06:14","2019-01-03 05:06:14");
INSERT INTO permissions VALUES("70","department","web","2019-01-03 05:30:01","2019-01-03 05:30:01");
INSERT INTO permissions VALUES("71","attendance","web","2019-01-03 05:30:01","2019-01-03 05:30:01");
INSERT INTO permissions VALUES("72","payroll","web","2019-01-03 05:30:01","2019-01-03 05:30:01");
INSERT INTO permissions VALUES("73","employees-index","web","2019-01-03 05:52:19","2019-01-03 05:52:19");
INSERT INTO permissions VALUES("74","employees-add","web","2019-01-03 05:52:19","2019-01-03 05:52:19");
INSERT INTO permissions VALUES("75","employees-edit","web","2019-01-03 05:52:19","2019-01-03 05:52:19");
INSERT INTO permissions VALUES("76","employees-delete","web","2019-01-03 05:52:19","2019-01-03 05:52:19");
INSERT INTO permissions VALUES("77","user-report","web","2019-01-16 13:48:18","2019-01-16 13:48:18");
INSERT INTO permissions VALUES("78","stock_count","web","2019-02-17 17:32:01","2019-02-17 17:32:01");
INSERT INTO permissions VALUES("79","adjustment","web","2019-02-17 17:32:02","2019-02-17 17:32:02");
INSERT INTO permissions VALUES("80","sms_setting","web","2019-02-22 12:18:03","2019-02-22 12:18:03");
INSERT INTO permissions VALUES("81","create_sms","web","2019-02-22 12:18:03","2019-02-22 12:18:03");
INSERT INTO permissions VALUES("82","print_barcode","web","2019-03-07 12:02:19","2019-03-07 12:02:19");
INSERT INTO permissions VALUES("83","empty_database","web","2019-03-07 12:02:19","2019-03-07 12:02:19");
INSERT INTO permissions VALUES("84","customer_group","web","2019-03-07 12:37:15","2019-03-07 12:37:15");
INSERT INTO permissions VALUES("85","unit","web","2019-03-07 12:37:15","2019-03-07 12:37:15");
INSERT INTO permissions VALUES("86","tax","web","2019-03-07 12:37:15","2019-03-07 12:37:15");
INSERT INTO permissions VALUES("87","gift_card","web","2019-03-07 13:29:38","2019-03-07 13:29:38");
INSERT INTO permissions VALUES("88","coupon","web","2019-03-07 13:29:38","2019-03-07 13:29:38");
INSERT INTO permissions VALUES("89","holiday","web","2019-10-19 15:57:15","2019-10-19 15:57:15");
INSERT INTO permissions VALUES("90","warehouse-report","web","2019-10-22 13:00:23","2019-10-22 13:00:23");
INSERT INTO permissions VALUES("91","warehouse","web","2020-02-26 13:47:32","2020-02-26 13:47:32");
INSERT INTO permissions VALUES("92","brand","web","2020-02-26 13:59:59","2020-02-26 13:59:59");
INSERT INTO permissions VALUES("93","billers-index","web","2020-02-26 14:11:15","2020-02-26 14:11:15");
INSERT INTO permissions VALUES("94","billers-add","web","2020-02-26 14:11:15","2020-02-26 14:11:15");
INSERT INTO permissions VALUES("95","billers-edit","web","2020-02-26 14:11:15","2020-02-26 14:11:15");
INSERT INTO permissions VALUES("96","billers-delete","web","2020-02-26 14:11:15","2020-02-26 14:11:15");
INSERT INTO permissions VALUES("97","money-transfer","web","2020-03-02 12:41:48","2020-03-02 12:41:48");
INSERT INTO permissions VALUES("98","category","web","2020-07-13 19:13:16","2020-07-13 19:13:16");
INSERT INTO permissions VALUES("99","delivery","web","2020-07-13 19:13:16","2020-07-13 19:13:16");
INSERT INTO permissions VALUES("100","send_notification","web","2020-10-31 13:21:31","2020-10-31 13:21:31");
INSERT INTO permissions VALUES("101","today_sale","web","2020-10-31 13:57:04","2020-10-31 13:57:04");
INSERT INTO permissions VALUES("102","today_profit","web","2020-10-31 13:57:04","2020-10-31 13:57:04");
INSERT INTO permissions VALUES("103","currency","web","2020-11-09 07:23:11","2020-11-09 07:23:11");
INSERT INTO permissions VALUES("104","backup_database","web","2020-11-15 07:16:55","2020-11-15 07:16:55");



CREATE TABLE `pos_setting` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `biller_id` int(11) NOT NULL,
  `product_number` int(11) NOT NULL,
  `keybord_active` tinyint(1) NOT NULL,
  `stripe_public_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_secret_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `pos_setting_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO pos_setting VALUES("1","11","2","1","4","0","pk_test_ITN7KOYiIsHSCQ0UMRcgaYUB","sk_test_TtQQaawhEYRwa3mU9CzttrEy","2018-09-02 10:17:04","2020-04-17 20:59:54");



CREATE TABLE `product_adjustments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adjustment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` double NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_adjustments VALUES("2","2","68","7","+","2021-12-07 14:21:19","2021-12-07 14:21:19");



CREATE TABLE `product_purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `recieved` double NOT NULL,
  `purchase_unit_id` int(11) NOT NULL,
  `net_unit_cost` double NOT NULL,
  `discount` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=254 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_purchases VALUES("59","12","4","","200","200","1","1","0","0","0","200","2018-08-09 06:48:36","2018-08-09 06:48:36");
INSERT INTO product_purchases VALUES("60","12","5","","100","100","1","100","0","0","0","10000","2018-08-09 06:48:36","2018-08-09 06:48:36");
INSERT INTO product_purchases VALUES("66","13","2","","100","100","3","166.96","0","15","2504.35","19200","2018-08-09 06:49:55","2018-08-09 06:49:55");
INSERT INTO product_purchases VALUES("67","13","3","","100","100","1","200","0","0","0","20000","2018-08-09 06:49:55","2018-08-09 06:49:55");
INSERT INTO product_purchases VALUES("68","13","1","","150","150","1","320","0","10","4800","52800","2018-08-09 06:49:55","2018-08-09 06:49:55");
INSERT INTO product_purchases VALUES("69","13","10","","60","60","7","10","0","0","0","600","2018-08-09 06:49:55","2018-08-09 06:49:55");
INSERT INTO product_purchases VALUES("70","14","1","","100","100","1","320","0","10","3200","35200","2018-08-09 14:23:48","2018-08-09 14:23:48");
INSERT INTO product_purchases VALUES("71","14","2","","50","50","3","166.96","0","15","1252.17","9600","2018-08-09 14:23:48","2018-08-09 14:23:48");
INSERT INTO product_purchases VALUES("72","14","3","","100","100","1","200","0","0","0","20000","2018-08-09 14:23:49","2018-08-09 14:23:49");
INSERT INTO product_purchases VALUES("73","14","5","","100","100","1","100","0","0","0","10000","2018-08-09 14:23:49","2018-08-09 14:23:49");
INSERT INTO product_purchases VALUES("74","14","10","","50","50","7","10","0","0","0","500","2018-08-09 14:23:49","2018-08-09 14:23:49");
INSERT INTO product_purchases VALUES("76","15","22","","20","20","1","800","0","10","1600","17600","2018-09-03 11:06:46","2018-09-03 11:06:46");
INSERT INTO product_purchases VALUES("87","16","22","","20","20","1","800","0","10","1600","17600","2018-09-20 16:09:12","2018-09-20 16:09:12");
INSERT INTO product_purchases VALUES("89","18","4","","50","50","1","1","0","0","0","50","2018-10-22 17:26:25","2018-10-22 17:26:25");
INSERT INTO product_purchases VALUES("90","19","4","","50","50","1","1","0","0","0","50","2018-10-22 17:26:52","2018-10-22 17:26:52");
INSERT INTO product_purchases VALUES("91","20","25","","15","15","1","500","0","10","750","8250","2018-10-23 08:14:21","2018-10-23 08:14:21");
INSERT INTO product_purchases VALUES("93","21","25","","15","15","1","500","0","10","750","8250","2018-10-23 08:14:58","2018-10-23 08:14:58");
INSERT INTO product_purchases VALUES("94","22","22","","5","5","1","800","0","10","400","4400","2018-11-01 05:59:03","2018-11-01 05:59:03");
INSERT INTO product_purchases VALUES("96","23","22","","5","5","1","800","0","10","400","4400","2018-11-03 10:23:52","2018-11-03 10:23:52");
INSERT INTO product_purchases VALUES("97","24","22","","15","15","1","800","0","10","1200","13200","2018-11-05 10:18:19","2018-11-05 10:18:19");
INSERT INTO product_purchases VALUES("98","24","25","","5","5","1","500","0","10","250","2750","2018-11-05 10:18:19","2018-11-05 10:18:19");
INSERT INTO product_purchases VALUES("99","25","31","","15","15","1","250","0","0","0","3750","2018-12-05 06:34:30","2018-12-05 06:34:30");
INSERT INTO product_purchases VALUES("100","25","30","","15","15","1","50","0","0","0","750","2018-12-05 06:34:30","2018-12-05 06:34:30");
INSERT INTO product_purchases VALUES("101","26","31","","15","15","1","250","0","0","0","3750","2018-12-05 06:35:08","2018-12-05 06:35:08");
INSERT INTO product_purchases VALUES("102","26","30","","15","15","1","50","0","0","0","750","2018-12-05 06:35:08","2018-12-05 06:35:08");
INSERT INTO product_purchases VALUES("104","27","32","","10","10","1","1","0","0","0","10","2018-12-19 06:57:41","2018-12-19 06:57:41");
INSERT INTO product_purchases VALUES("112","33","33","","10","10","1","1","0","0","0","10","2018-12-24 10:04:21","2018-12-24 10:04:21");
INSERT INTO product_purchases VALUES("113","34","25","","2","2","1","500","0","10","100","1100","2019-01-03 08:01:24","2019-01-03 08:01:24");
INSERT INTO product_purchases VALUES("114","34","22","","2","2","1","800","0","10","160","1760","2019-01-03 08:01:24","2019-01-03 08:01:24");
INSERT INTO product_purchases VALUES("115","35","31","","2","2","1","250","0","0","0","500","2019-01-29 10:54:48","2019-01-29 10:54:48");
INSERT INTO product_purchases VALUES("116","35","30","","2","2","1","50","0","0","0","100","2019-01-29 10:54:48","2019-01-29 10:54:48");
INSERT INTO product_purchases VALUES("117","36","30","","3","3","1","50","0","0","0","150","2019-01-29 10:55:58","2019-01-29 10:55:58");
INSERT INTO product_purchases VALUES("118","36","31","","2","2","1","250","0","0","0","500","2019-01-29 10:55:58","2019-01-29 10:55:58");
INSERT INTO product_purchases VALUES("121","39","1","","2","2","1","315","10","10","63","693","2019-02-09 11:44:13","2019-02-09 11:44:13");
INSERT INTO product_purchases VALUES("122","39","2","","1","1","3","192","0","0","0","192","2019-02-09 11:44:13","2019-02-09 11:44:13");
INSERT INTO product_purchases VALUES("123","38","32","","10","10","1","1","0","0","0","10","2019-02-09 11:45:24","2019-02-09 11:45:24");
INSERT INTO product_purchases VALUES("124","38","25","","3","3","1","500","0","10","150","1650","2019-02-09 11:45:24","2019-02-09 11:45:24");
INSERT INTO product_purchases VALUES("125","37","33","","10","10","1","1","0","0","0","10","2019-02-09 11:46:22","2019-02-09 11:46:22");
INSERT INTO product_purchases VALUES("126","37","25","","2","2","1","500","0","10","100","1100","2019-02-09 11:46:23","2019-02-09 11:46:23");
INSERT INTO product_purchases VALUES("127","37","22","","6","6","1","800","0","10","480","5280","2019-02-09 11:46:23","2019-02-09 11:46:23");
INSERT INTO product_purchases VALUES("128","40","33","","10","10","1","10","0","0","0","100","2019-03-03 11:39:17","2019-03-03 11:39:17");
INSERT INTO product_purchases VALUES("129","41","33","","5","5","1","10","0","0","0","50","2019-03-03 11:43:58","2019-03-03 11:43:58");
INSERT INTO product_purchases VALUES("130","41","1","","10","10","1","320","0","10","320","3520","2019-03-03 11:43:59","2019-03-03 11:43:59");
INSERT INTO product_purchases VALUES("133","42","30","","1","1","1","50","0","0","0","50","2019-04-13 20:50:08","2019-04-13 20:50:08");
INSERT INTO product_purchases VALUES("134","42","31","","1","1","1","250","0","0","0","250","2019-04-13 20:50:08","2019-04-13 20:50:08");
INSERT INTO product_purchases VALUES("135","43","25","","3","3","1","500","0","10","150","1650","2019-06-13 11:16:00","2019-06-13 11:16:00");
INSERT INTO product_purchases VALUES("136","43","22","","3","3","1","800","0","10","240","2640","2019-06-13 11:16:01","2019-06-13 11:16:01");
INSERT INTO product_purchases VALUES("137","44","25","","1","1","1","500","0","10","50","550","2019-10-19 16:31:19","2019-10-19 16:31:19");
INSERT INTO product_purchases VALUES("138","44","22","","1","1","1","800","0","10","80","880","2019-10-19 16:31:20","2019-10-19 16:31:20");
INSERT INTO product_purchases VALUES("140","46","33","","10","10","1","10","0","0","0","100","2019-11-03 12:39:49","2019-11-03 12:39:49");
INSERT INTO product_purchases VALUES("141","46","32","","10","10","1","5","0","0","0","50","2019-11-03 12:39:49","2019-11-03 12:39:49");
INSERT INTO product_purchases VALUES("142","47","1","","2","2","1","315","10","10","63","693","2019-11-09 12:25:10","2019-11-09 12:25:10");
INSERT INTO product_purchases VALUES("143","47","2","","1","1","3","192","0","0","0","192","2019-11-09 12:25:10","2019-11-09 12:25:10");
INSERT INTO product_purchases VALUES("144","48","4","","100","100","1","1","0","0","0","100","2019-11-10 20:02:21","2019-11-10 20:02:21");
INSERT INTO product_purchases VALUES("149","49","22","","10","10","1","800","0","10","800","8800","2019-11-11 11:28:59","2019-11-11 11:28:59");
INSERT INTO product_purchases VALUES("158","55","48","3","1","1","1","2","0","0","0","2","2019-11-27 23:28:35","2019-11-27 23:28:35");
INSERT INTO product_purchases VALUES("159","55","48","2","1","1","1","2","0","0","0","2","2019-11-27 23:28:35","2019-11-27 23:28:35");
INSERT INTO product_purchases VALUES("161","57","3","","1","1","1","200","0","0","0","200","2019-12-05 00:07:49","2019-12-05 00:07:49");
INSERT INTO product_purchases VALUES("162","58","48","2","1","1","1","2","0","0","0","2","2019-12-05 11:21:10","2019-12-05 11:21:10");
INSERT INTO product_purchases VALUES("163","58","48","3","1","1","1","2","0","0","0","2","2019-12-05 11:21:10","2019-12-05 11:21:10");
INSERT INTO product_purchases VALUES("169","59","48","3","1","1","1","2","0","0","0","2","2019-12-21 17:22:29","2019-12-21 17:22:29");
INSERT INTO product_purchases VALUES("170","59","48","2","1","1","1","2","0","0","0","2","2019-12-21 17:22:29","2019-12-21 17:22:29");
INSERT INTO product_purchases VALUES("171","59","48","5","1","1","1","2","0","0","0","2","2019-12-21 17:22:29","2019-12-21 17:22:29");
INSERT INTO product_purchases VALUES("174","56","48","2","1","1","1","2","0","0","0","2","2019-12-21 20:27:16","2019-12-21 20:27:16");
INSERT INTO product_purchases VALUES("178","61","48","3","10","10","1","2","0","0","0","20","2020-01-01 14:06:31","2020-01-01 14:06:31");
INSERT INTO product_purchases VALUES("179","61","48","2","10","10","1","2","0","0","0","20","2020-01-01 14:06:31","2020-01-01 14:06:31");
INSERT INTO product_purchases VALUES("180","61","48","5","10","10","1","2","0","0","0","20","2020-01-01 14:06:31","2020-01-01 14:06:31");
INSERT INTO product_purchases VALUES("181","62","25","","3","3","1","500","0","10","150","1650","2020-01-01 15:24:02","2020-01-01 15:24:02");
INSERT INTO product_purchases VALUES("209","67","31","","1","1","1","250","0","0","0","250","2020-02-05 00:00:41","2020-02-05 00:00:41");
INSERT INTO product_purchases VALUES("210","67","30","","1","1","1","50","0","0","0","50","2020-02-05 00:00:41","2020-02-05 00:00:41");
INSERT INTO product_purchases VALUES("212","69","4","","50","50","1","1","0","0","0","50","2020-03-02 12:55:10","2020-03-02 12:55:10");
INSERT INTO product_purchases VALUES("213","70","4","","50","50","1","1","0","0","0","50","2020-03-02 12:56:03","2020-03-02 12:56:03");
INSERT INTO product_purchases VALUES("214","71","25","","3","3","1","500","0","10","150","1650","2020-04-06 20:35:12","2020-04-06 20:35:12");
INSERT INTO product_purchases VALUES("215","71","31","","5","5","1","250","0","0","0","1250","2020-04-06 20:35:12","2020-04-06 20:35:12");
INSERT INTO product_purchases VALUES("216","71","30","","3","3","1","50","0","0","0","150","2020-04-06 20:35:12","2020-04-06 20:35:12");
INSERT INTO product_purchases VALUES("217","72","61","","10","10","1","2500","5000","15","3750","28750","2020-08-16 23:02:07","2020-08-16 23:02:07");
INSERT INTO product_purchases VALUES("219","73","62","12","2","2","1","1","0","0","0","2","2020-09-27 16:07:44","2020-09-27 16:07:44");
INSERT INTO product_purchases VALUES("221","74","61","","11","11","1","3000","0","15","4950","37950","2020-10-24 08:03:16","2020-10-24 08:03:16");
INSERT INTO product_purchases VALUES("222","74","22","","4","4","1","800","0","10","320","3520","2020-10-24 08:03:16","2020-10-24 08:03:16");
INSERT INTO product_purchases VALUES("232","83","60","9","2","2","1","1","0","0","0","2","2020-10-27 05:56:11","2020-10-27 05:56:11");
INSERT INTO product_purchases VALUES("233","84","60","9","2","2","1","2","0","0","0","4","2020-10-27 05:56:58","2020-10-27 05:56:58");
INSERT INTO product_purchases VALUES("234","85","1","","1","1","1","320","0","10","32","352","2020-11-02 10:29:52","2020-11-02 10:29:52");
INSERT INTO product_purchases VALUES("239","87","1","","1","1","1","320","0","10","32","352","2020-11-02 12:20:34","2020-11-02 12:20:34");
INSERT INTO product_purchases VALUES("242","89","62","12","1","1","1","1","0","0","0","1","2020-11-16 16:01:45","2020-11-16 16:01:45");
INSERT INTO product_purchases VALUES("243","89","1","","1","1","1","320","0","10","32","352","2020-11-16 16:01:45","2020-11-16 16:01:45");
INSERT INTO product_purchases VALUES("244","90","61","","10","10","1","3000","0","15","4500","34500","2020-11-18 07:15:44","2020-11-18 07:15:44");
INSERT INTO product_purchases VALUES("245","91","68","","3","2","1","2500000","0","0","0","7500000","2021-12-07 14:00:40","2021-12-07 14:00:40");
INSERT INTO product_purchases VALUES("246","92","68","","1","0","1","2500000","0","0","0","2500000","2021-12-07 14:03:51","2021-12-07 14:03:51");
INSERT INTO product_purchases VALUES("247","93","3","","2","2","1","200","0","0","0","400","2021-12-07 15:27:34","2021-12-07 15:27:34");
INSERT INTO product_purchases VALUES("248","94","4","","1","1","1","1","0","0","0","1","2021-12-08 10:23:51","2021-12-08 10:23:51");
INSERT INTO product_purchases VALUES("249","95","68","","1","1","1","2500000","0","0","0","2500000","2021-12-08 10:52:09","2021-12-08 10:52:09");
INSERT INTO product_purchases VALUES("250","96","68","","7","7","1","2500000","0","0","0","17500000","2021-12-08 11:22:38","2021-12-08 11:22:38");
INSERT INTO product_purchases VALUES("251","96","4","","8","8","1","1","0","0","0","8","2021-12-08 11:22:38","2021-12-08 11:22:38");
INSERT INTO product_purchases VALUES("252","96","31","","6","6","1","250","0","0","0","1500","2021-12-08 11:22:38","2021-12-08 11:22:38");
INSERT INTO product_purchases VALUES("253","97","68","","4","4","1","2500000","0","0","0","10000000","2021-12-08 11:31:10","2021-12-08 11:31:10");



CREATE TABLE `product_quotation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quotation_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `sale_unit_id` int(11) NOT NULL,
  `net_unit_price` double NOT NULL,
  `discount` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_quotation VALUES("2","1","1","","1","2","5030","10","15","754.5","5784.5","2018-08-09 06:52:50","2018-08-28 07:09:57");
INSERT INTO product_quotation VALUES("3","1","4","","50","1","1.5","25","10","7.5","82.5","2018-08-09 06:53:25","2018-08-28 07:34:36");
INSERT INTO product_quotation VALUES("4","1","2","","6","1","9.55","0","10","5.73","63","2018-08-28 08:03:48","2018-08-28 08:07:07");
INSERT INTO product_quotation VALUES("5","2","10","","2.5","7","22","0","0","0","55","2018-09-04 05:02:58","2018-09-20 17:37:41");
INSERT INTO product_quotation VALUES("6","2","13","","1","0","21","0","0","0","21","2018-09-04 05:02:58","2018-09-04 05:02:58");
INSERT INTO product_quotation VALUES("7","3","1","","1","1","400","0","10","40","440","2018-10-23 07:12:49","2019-12-21 13:41:37");
INSERT INTO product_quotation VALUES("19","3","48","2","1","1","13","0","0","0","13","2019-12-07 15:50:02","2019-12-21 13:41:37");
INSERT INTO product_quotation VALUES("27","11","61","","2","1","10000","0","15","3000","23000","2020-10-24 10:08:14","2020-10-24 10:28:35");
INSERT INTO product_quotation VALUES("28","12","4","","1","1","8000","0","0","0","8000","2021-12-08 11:01:41","2021-12-08 11:01:41");



CREATE TABLE `product_returns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `return_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `sale_unit_id` int(11) NOT NULL,
  `net_unit_price` double NOT NULL,
  `discount` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_returns VALUES("3","2","4","","20","1","2","0","0","0","40","","");
INSERT INTO product_returns VALUES("4","3","10","","2","7","22","0","0","0","44","","2018-10-07 09:19:40");
INSERT INTO product_returns VALUES("6","5","3","","1","1","250","0","0","0","250","","2018-12-26 05:16:08");
INSERT INTO product_returns VALUES("12","6","1","","1","1","400","0","10","40","440","","");
INSERT INTO product_returns VALUES("23","11","13","","1","0","21","0","0","0","21","2019-12-24 12:20:29","2019-12-24 12:20:29");
INSERT INTO product_returns VALUES("26","13","61","","1","1","10000","0","15","1500","11500","2020-08-16 23:25:02","2020-08-16 23:25:02");
INSERT INTO product_returns VALUES("27","14","1","","1","1","400","0","10","40","440","2020-10-13 18:39:54","2020-10-13 18:39:54");
INSERT INTO product_returns VALUES("31","18","61","","1","1","10000","0","15","1500","11500","2020-11-18 08:02:18","2020-11-18 08:02:18");



CREATE TABLE `product_sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `sale_unit_id` int(11) NOT NULL,
  `net_unit_price` double NOT NULL,
  `discount` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=420 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_sales VALUES("1","1","2","","1","2","104.35","0","15","15.65","120","2018-08-08 17:36:23","2018-08-08 18:13:27");
INSERT INTO product_sales VALUES("3","1","5","","2","1","115","10","0","0","230","2018-08-08 18:13:28","2018-08-08 18:13:28");
INSERT INTO product_sales VALUES("4","2","1","","10","1","420","0","10","420","4620","2018-08-09 06:54:53","2018-08-09 06:54:53");
INSERT INTO product_sales VALUES("5","2","4","","50","1","2.1","0","0","0","105","2018-08-09 06:54:53","2018-08-09 06:54:53");
INSERT INTO product_sales VALUES("6","2","2","","3","2","109.57","0","15","49.3","378","2018-08-09 06:54:53","2018-08-09 06:54:53");
INSERT INTO product_sales VALUES("7","3","4","","20","1","2.1","0","0","0","42","2018-08-09 07:32:15","2018-08-09 07:32:15");
INSERT INTO product_sales VALUES("8","3","5","","5","1","126","0","0","0","630","2018-08-09 07:32:15","2018-08-09 07:32:15");
INSERT INTO product_sales VALUES("9","3","3","","1","1","225","0","0","0","225","2018-08-09 07:32:15","2018-08-09 07:32:15");
INSERT INTO product_sales VALUES("10","4","1","","2","1","400","0","10","80","880","2018-08-25 04:48:37","2018-08-25 04:48:37");
INSERT INTO product_sales VALUES("12","6","13","","1","0","18.9","0","0","0","18.9","2018-08-26 10:48:36","2018-08-26 12:48:05");
INSERT INTO product_sales VALUES("13","7","1","","2","1","400","0","10","80","880","2018-08-27 08:35:45","2018-08-27 08:35:45");
INSERT INTO product_sales VALUES("14","8","5","","2","2","1440","0","10","288","3168","2018-09-02 06:39:54","2018-09-02 06:39:54");
INSERT INTO product_sales VALUES("15","9","4","","10","1","2","0","0","0","20","2018-09-03 04:33:14","2018-09-03 04:33:14");
INSERT INTO product_sales VALUES("16","10","3","","1","1","250","0","0","0","250","2018-09-03 06:01:39","2018-09-03 06:01:39");
INSERT INTO product_sales VALUES("17","11","22","","5","1","1000","0","10","500","5500","2018-09-03 11:08:21","2018-09-03 11:08:21");
INSERT INTO product_sales VALUES("18","12","22","","10","1","1050","0","10","1050","11550","2018-09-03 11:10:33","2018-09-03 11:10:33");
INSERT INTO product_sales VALUES("46","29","5","","1","1","120","0","0","0","120","2018-09-09 10:38:41","2018-09-09 10:38:41");
INSERT INTO product_sales VALUES("47","30","1","","1","1","400","0","10","40","440","2018-09-10 05:57:06","2018-09-20 16:12:38");
INSERT INTO product_sales VALUES("48","31","1","","1","1","400","0","10","40","440","2018-09-26 10:20:59","2018-09-26 10:21:25");
INSERT INTO product_sales VALUES("49","31","2","","1","2","104.35","0","15","15.65","120","2018-09-26 10:20:59","2018-09-26 10:21:25");
INSERT INTO product_sales VALUES("50","32","1","","1","1","400","0","10","40","440","2018-10-04 10:55:48","2018-10-04 10:55:48");
INSERT INTO product_sales VALUES("51","33","1","","1","1","400","0","10","40","440","2018-10-04 11:00:23","2018-10-04 11:00:23");
INSERT INTO product_sales VALUES("57","37","3","","1","1","250","0","0","0","250","2018-10-07 07:46:05","2018-10-07 07:46:05");
INSERT INTO product_sales VALUES("58","38","1","","1","1","400","0","10","40","440","2018-10-07 07:47:19","2018-10-07 07:47:19");
INSERT INTO product_sales VALUES("61","40","1","","1","1","400","0","10","40","440","2018-10-07 08:13:12","2018-10-07 08:13:12");
INSERT INTO product_sales VALUES("62","41","1","","1","1","400","0","10","40","440","2018-10-10 05:16:21","2018-10-10 05:16:21");
INSERT INTO product_sales VALUES("63","41","13","","1","0","21","0","0","0","21","2018-10-10 05:16:21","2018-10-10 05:16:21");
INSERT INTO product_sales VALUES("64","42","1","","1","1","400","0","10","40","440","2018-10-10 06:34:51","2018-10-10 06:34:51");
INSERT INTO product_sales VALUES("65","43","1","","1","1","400","0","10","40","440","2018-10-16 04:34:35","2018-10-16 04:34:35");
INSERT INTO product_sales VALUES("78","55","3","","1","1","250","0","0","0","250","2018-10-21 07:53:34","2018-10-21 07:53:34");
INSERT INTO product_sales VALUES("80","57","1","","1","1","400","0","10","40","440","2018-10-21 09:26:12","2018-10-21 09:26:12");
INSERT INTO product_sales VALUES("81","57","13","","2","0","21","0","0","0","42","2018-10-21 09:26:13","2018-10-21 09:26:13");
INSERT INTO product_sales VALUES("82","58","22","","1","1","1000","0","10","100","1100","2018-10-22 16:27:24","2018-10-22 16:27:24");
INSERT INTO product_sales VALUES("83","58","5","","1","1","120","0","0","0","120","2018-10-22 16:27:24","2018-10-22 16:27:24");
INSERT INTO product_sales VALUES("101","73","25","","3","1","1000","0","10","300","3300","2018-10-23 08:15:43","2018-10-23 08:15:43");
INSERT INTO product_sales VALUES("102","73","22","","2","1","1000","0","10","200","2200","2018-10-23 08:15:44","2018-10-23 08:15:44");
INSERT INTO product_sales VALUES("103","74","22","","1","1","1000","0","10","100","1100","2018-10-23 08:16:44","2018-10-23 08:16:44");
INSERT INTO product_sales VALUES("104","74","25","","1","1","1000","0","10","100","1100","2018-10-23 08:16:44","2018-10-23 08:16:44");
INSERT INTO product_sales VALUES("105","74","5","","1","1","120","0","0","0","120","2018-10-23 08:16:44","2018-10-23 08:16:44");
INSERT INTO product_sales VALUES("106","75","2","","3","2","104.35","0","15","46.96","360","2018-11-01 06:00:27","2018-11-01 06:00:27");
INSERT INTO product_sales VALUES("107","75","22","","2","1","1000","0","10","200","2200","2018-11-01 06:00:27","2018-11-01 06:00:27");
INSERT INTO product_sales VALUES("108","75","25","","3","1","1000","0","10","300","3300","2018-11-01 06:00:27","2018-11-01 06:00:27");
INSERT INTO product_sales VALUES("109","75","1","","2","1","400","0","10","80","880","2018-11-01 06:00:27","2018-11-01 06:00:27");
INSERT INTO product_sales VALUES("110","75","5","","2","1","120","0","0","0","240","2018-11-01 06:00:27","2018-11-01 06:00:27");
INSERT INTO product_sales VALUES("111","76","3","","1","1","250","0","0","0","250","2018-11-01 06:01:26","2018-11-03 10:28:56");
INSERT INTO product_sales VALUES("112","76","22","","1","1","1000","0","10","100","1100","2018-11-01 06:01:27","2018-11-03 10:28:56");
INSERT INTO product_sales VALUES("113","76","13","","4","0","21","0","0","0","84","2018-11-01 06:01:27","2018-11-03 10:28:56");
INSERT INTO product_sales VALUES("117","79","1","","4","1","400","0","10","160","1760","2018-11-05 10:15:17","2018-11-05 10:15:17");
INSERT INTO product_sales VALUES("118","79","2","","7","2","104.35","0","15","109.57","840","2018-11-05 10:15:17","2018-11-05 10:15:17");
INSERT INTO product_sales VALUES("119","79","3","","7","1","250","0","0","0","1750","2018-11-05 10:15:17","2018-11-05 10:15:17");
INSERT INTO product_sales VALUES("120","79","4","","7","1","2","0","0","0","14","2018-11-05 10:15:17","2018-11-05 10:15:17");
INSERT INTO product_sales VALUES("121","79","22","","8","1","1000","0","10","800","8800","2018-11-05 10:15:17","2018-11-05 10:15:17");
INSERT INTO product_sales VALUES("122","79","13","","10","0","21","0","0","0","210","2018-11-05 10:15:17","2018-11-05 10:15:17");
INSERT INTO product_sales VALUES("123","79","5","","9","1","120","0","0","0","1080","2018-11-05 10:15:17","2018-11-05 10:15:17");
INSERT INTO product_sales VALUES("124","80","2","","2","2","104.35","0","15","31.3","240","2018-11-05 10:19:58","2018-11-05 10:19:58");
INSERT INTO product_sales VALUES("125","80","3","","2","1","250","0","0","0","500","2018-11-05 10:19:58","2018-11-05 10:19:58");
INSERT INTO product_sales VALUES("126","80","1","","4","1","400","0","10","160","1760","2018-11-05 10:19:58","2018-11-05 10:19:58");
INSERT INTO product_sales VALUES("132","86","22","","1","1","1000","0","10","100","1100","2018-11-05 10:59:48","2018-11-05 10:59:48");
INSERT INTO product_sales VALUES("134","88","22","","1","1","1000","0","10","100","1100","2018-11-05 11:02:58","2018-11-05 11:02:58");
INSERT INTO product_sales VALUES("142","94","2","","1","2","104.35","0","15","15.65","120","2018-11-26 15:05:34","2018-11-26 15:05:34");
INSERT INTO product_sales VALUES("143","95","5","","3","1","120","0","0","0","360","2018-11-27 10:36:08","2018-11-27 10:36:08");
INSERT INTO product_sales VALUES("144","95","5","","3","1","120","0","0","0","360","2018-11-27 10:36:08","2018-11-27 10:36:08");
INSERT INTO product_sales VALUES("145","96","2","","1","2","104.35","0","15","15.65","120","2018-11-28 08:15:09","2018-11-28 08:15:09");
INSERT INTO product_sales VALUES("146","97","2","","2","2","104.35","0","15","31.3","240","2018-12-01 07:05:18","2018-12-01 07:05:18");
INSERT INTO product_sales VALUES("147","97","10","","1","7","22","0","0","0","22","2018-12-01 07:05:18","2018-12-01 07:05:18");
INSERT INTO product_sales VALUES("148","98","30","","2","1","100","0","0","0","200","2018-12-05 06:35:58","2018-12-05 06:35:58");
INSERT INTO product_sales VALUES("149","98","31","","2","1","300","0","0","0","600","2018-12-05 06:35:58","2018-12-05 06:35:58");
INSERT INTO product_sales VALUES("150","99","30","","2","1","100","0","0","0","200","2018-12-05 06:37:19","2018-12-05 06:37:19");
INSERT INTO product_sales VALUES("151","99","31","","2","1","300","0","0","0","600","2018-12-05 06:37:20","2018-12-05 06:37:20");
INSERT INTO product_sales VALUES("153","101","30","","1","1","100","0","0","0","100","2018-12-08 07:20:26","2018-12-08 07:20:26");
INSERT INTO product_sales VALUES("155","103","2","","1","2","104.35","0","15","15.65","120","2018-12-24 05:58:32","2018-12-24 05:58:32");
INSERT INTO product_sales VALUES("156","104","33","","4","1","2","0","0","0","8","2018-12-24 10:15:27","2018-12-25 04:55:23");
INSERT INTO product_sales VALUES("157","104","26","","2","0","1250","0","0","0","2500","2018-12-25 04:47:54","2018-12-25 04:55:23");
INSERT INTO product_sales VALUES("158","105","13","","1","0","21","0","0","0","21","2019-01-01 06:45:38","2019-01-01 06:45:38");
INSERT INTO product_sales VALUES("159","106","2","","1","2","104.35","0","15","15.65","120","2019-01-01 10:10:40","2019-01-01 10:10:40");
INSERT INTO product_sales VALUES("160","106","3","","2","1","250","0","0","0","500","2019-01-01 10:10:40","2019-01-01 10:10:40");
INSERT INTO product_sales VALUES("161","106","5","","2","1","120","0","0","0","240","2019-01-01 10:10:40","2019-01-01 10:10:40");
INSERT INTO product_sales VALUES("162","107","3","","2","1","250","0","0","0","500","2019-01-03 07:56:27","2019-01-03 07:56:27");
INSERT INTO product_sales VALUES("163","107","5","","2","1","120","0","0","0","240","2019-01-03 07:56:27","2019-01-03 07:56:27");
INSERT INTO product_sales VALUES("164","107","22","","2","1","1000","0","10","200","2200","2019-01-03 07:56:27","2019-01-03 07:56:27");
INSERT INTO product_sales VALUES("165","107","25","","1","1","1000","0","10","100","1100","2019-01-03 07:56:27","2019-01-03 07:56:27");
INSERT INTO product_sales VALUES("166","107","1","","2","1","400","0","10","80","880","2019-01-03 07:56:27","2019-01-03 07:56:27");
INSERT INTO product_sales VALUES("167","107","2","","1","2","104.35","0","15","15.65","120","2019-01-03 07:56:27","2019-01-03 07:56:27");
INSERT INTO product_sales VALUES("168","108","2","","1","2","104.35","0","15","15.65","120","2019-01-20 16:58:24","2019-01-20 16:58:24");
INSERT INTO product_sales VALUES("169","109","1","","1","1","400","0","10","40","440","2019-01-29 11:14:43","2019-01-29 11:14:43");
INSERT INTO product_sales VALUES("170","109","30","","1","1","100","0","0","0","100","2019-01-29 11:14:43","2019-01-29 11:14:43");
INSERT INTO product_sales VALUES("171","110","31","","2","1","300","0","0","0","600","2019-01-29 12:50:41","2019-01-29 12:50:41");
INSERT INTO product_sales VALUES("172","110","25","","1","1","1000","0","10","100","1100","2019-01-29 12:50:41","2019-01-29 12:50:41");
INSERT INTO product_sales VALUES("173","111","3","","1","1","250","0","0","0","250","2019-01-31 12:08:39","2019-01-31 12:08:39");
INSERT INTO product_sales VALUES("174","111","13","","1","0","21","0","0","0","21","2019-01-31 12:08:39","2019-01-31 12:08:39");
INSERT INTO product_sales VALUES("175","112","1","","1","1","400","0","10","40","440","2019-02-02 11:40:45","2019-02-02 11:40:45");
INSERT INTO product_sales VALUES("176","113","3","","1","1","250","0","0","0","250","2019-02-02 12:41:17","2019-02-02 12:41:17");
INSERT INTO product_sales VALUES("177","113","30","","1","1","100","0","0","0","100","2019-02-02 12:41:17","2019-02-02 12:41:17");
INSERT INTO product_sales VALUES("178","114","1","","1","1","400","0","10","40","440","2019-02-05 16:04:45","2019-02-05 16:04:45");
INSERT INTO product_sales VALUES("183","118","1","","1","1","400","0","10","40","440","2019-02-07 12:15:42","2019-02-07 12:15:42");
INSERT INTO product_sales VALUES("185","120","1","","1","1","400","0","10","40","440","2019-02-07 12:40:37","2019-02-07 12:40:37");
INSERT INTO product_sales VALUES("186","121","3","","1","1","250","0","0","0","250","2019-02-09 11:48:14","2019-02-09 11:48:14");
INSERT INTO product_sales VALUES("187","121","2","","1","2","104.35","0","15","15.65","120","2019-02-09 11:48:14","2019-02-09 11:48:14");
INSERT INTO product_sales VALUES("188","121","4","","10","1","2","0","0","0","20","2019-02-09 11:48:15","2019-02-09 11:48:15");
INSERT INTO product_sales VALUES("189","121","13","","2","0","21","0","0","0","42","2019-02-09 11:48:15","2019-02-09 11:48:15");
INSERT INTO product_sales VALUES("190","121","1","","1","1","400","0","10","40","440","2019-02-09 11:48:15","2019-02-09 11:48:15");
INSERT INTO product_sales VALUES("191","121","31","","1","1","300","0","0","0","300","2019-02-09 11:48:15","2019-02-09 11:48:15");
INSERT INTO product_sales VALUES("192","121","30","","1","1","100","0","0","0","100","2019-02-09 11:48:15","2019-02-09 11:48:15");
INSERT INTO product_sales VALUES("194","123","1","","1","1","400","0","10","40","440","2019-02-19 15:32:14","2019-02-19 15:32:14");
INSERT INTO product_sales VALUES("198","127","31","","1","1","300","0","0","0","300","2019-03-03 11:40:10","2019-03-03 11:40:10");
INSERT INTO product_sales VALUES("199","127","25","","1","1","1000","0","10","100","1100","2019-03-03 11:40:10","2019-03-03 11:40:10");
INSERT INTO product_sales VALUES("200","127","22","","1","1","1000","0","10","100","1100","2019-03-03 11:40:10","2019-03-03 11:40:10");
INSERT INTO product_sales VALUES("201","128","1","","1","1","400","0","10","40","440","2019-04-04 10:55:55","2019-04-04 10:55:55");
INSERT INTO product_sales VALUES("202","128","2","","1","2","104.35","0","15","15.65","120","2019-04-04 10:55:55","2019-04-04 10:55:55");
INSERT INTO product_sales VALUES("203","129","5","","2","1","120","0","0","0","240","2019-04-04 10:59:37","2019-04-11 11:50:16");
INSERT INTO product_sales VALUES("204","130","1","","1","1","400","0","10","40","440","2019-04-21 13:21:24","2019-04-21 13:21:24");
INSERT INTO product_sales VALUES("205","130","2","","1","2","125.22","0","15","18.78","144","2019-04-21 13:21:24","2019-04-21 13:21:24");
INSERT INTO product_sales VALUES("206","130","4","","1","1","2","0","0","0","2","2019-04-21 13:21:24","2019-04-21 13:21:24");
INSERT INTO product_sales VALUES("207","131","1","","1","1","400","0","10","40","440","2019-05-28 11:32:29","2019-05-28 11:32:29");
INSERT INTO product_sales VALUES("208","131","3","","1","1","250","0","0","0","250","2019-05-28 11:32:29","2019-05-28 11:32:29");
INSERT INTO product_sales VALUES("209","131","25","","1","1","1000","0","10","100","1100","2019-05-28 11:32:29","2019-05-28 11:32:29");
INSERT INTO product_sales VALUES("210","131","22","","1","1","1000","0","10","100","1100","2019-05-28 11:32:29","2019-05-28 11:32:29");
INSERT INTO product_sales VALUES("211","132","1","","1","1","400","0","10","40","440","2019-06-13 11:16:37","2019-06-13 11:16:37");
INSERT INTO product_sales VALUES("212","132","30","","1","1","100","0","0","0","100","2019-06-13 11:16:37","2019-06-13 11:16:37");
INSERT INTO product_sales VALUES("213","132","31","","1","1","300","0","0","0","300","2019-06-13 11:16:37","2019-06-13 11:16:37");
INSERT INTO product_sales VALUES("214","133","3","","2","1","250","0","0","0","500","2019-06-13 11:17:51","2019-06-13 11:17:51");
INSERT INTO product_sales VALUES("215","133","25","","1","1","1000","0","10","100","1100","2019-06-13 11:17:52","2019-06-13 11:17:52");
INSERT INTO product_sales VALUES("216","133","22","","1","1","1000","0","10","100","1100","2019-06-13 11:17:52","2019-06-13 11:17:52");
INSERT INTO product_sales VALUES("217","134","1","","1","1","400","0","10","40","440","2019-10-19 16:30:28","2019-10-19 16:30:28");
INSERT INTO product_sales VALUES("218","134","22","","1","1","1000","0","10","100","1100","2019-10-19 16:30:28","2019-10-19 16:30:28");
INSERT INTO product_sales VALUES("219","134","25","","1","1","1000","0","10","100","1100","2019-10-19 16:30:28","2019-10-19 16:30:28");
INSERT INTO product_sales VALUES("220","134","31","","1","1","300","0","0","0","300","2019-10-19 16:30:28","2019-10-19 16:30:28");
INSERT INTO product_sales VALUES("224","138","5","","1","1","120","0","0","0","120","2019-10-31 13:29:37","2019-10-31 13:29:37");
INSERT INTO product_sales VALUES("225","139","2","","2","2","125.22","0","15","37.57","288","2019-11-03 12:40:44","2019-11-03 12:40:44");
INSERT INTO product_sales VALUES("226","139","4","","100","1","2","0","0","0","200","2019-11-03 12:40:44","2019-11-03 12:40:44");
INSERT INTO product_sales VALUES("236","144","22","","1","1","1000","0","10","100","1100","2019-11-09 20:41:31","2019-11-09 20:41:31");
INSERT INTO product_sales VALUES("237","144","5","","1","1","120","0","0","0","120","2019-11-09 20:41:31","2019-11-09 20:41:31");
INSERT INTO product_sales VALUES("241","147","22","","1","1","1000","0","10","100","1100","2019-11-11 11:40:08","2019-11-11 11:40:08");
INSERT INTO product_sales VALUES("242","147","25","","1","1","1000","0","10","100","1100","2019-11-11 11:40:08","2019-11-11 11:40:08");
INSERT INTO product_sales VALUES("243","147","4","","10","1","2","0","0","0","20","2019-11-11 11:40:08","2019-11-11 11:40:08");
INSERT INTO product_sales VALUES("282","172","1","","1","1","400","0","10","40","440","2019-12-03 16:46:31","2019-12-03 16:46:31");
INSERT INTO product_sales VALUES("283","173","3","","1","1","225","0","0","0","225","2019-12-05 00:19:40","2019-12-05 00:19:40");
INSERT INTO product_sales VALUES("284","173","1","","1","1","360","0","10","36","396","2019-12-05 00:19:40","2019-12-05 00:19:40");
INSERT INTO product_sales VALUES("306","187","2","","2","2","125.22","0","15","37.57","288","2019-12-22 11:40:58","2019-12-22 11:40:58");
INSERT INTO product_sales VALUES("308","190","22","","1","1","1000","0","10","100","1100","2019-12-23 13:59:46","2019-12-23 13:59:46");
INSERT INTO product_sales VALUES("312","193","25","","1","1","1000","0","10","100","1100","2020-01-01 15:20:28","2020-01-01 15:20:28");
INSERT INTO product_sales VALUES("313","194","1","","2","1","400","0","10","80","880","2020-01-02 17:39:47","2020-01-02 17:39:47");
INSERT INTO product_sales VALUES("314","194","2","","1","1","10.43","0","15","1.57","12","2020-01-02 17:39:47","2020-01-02 17:39:47");
INSERT INTO product_sales VALUES("323","201","5","","1","1","120","0","0","0","120","2020-02-03 16:52:56","2020-02-03 16:52:56");
INSERT INTO product_sales VALUES("324","202","25","","1","1","1000","0","10","100","1100","2020-02-04 23:58:53","2020-02-04 23:58:53");
INSERT INTO product_sales VALUES("325","202","31","","1","1","300","0","0","0","300","2020-02-04 23:58:53","2020-02-04 23:58:53");
INSERT INTO product_sales VALUES("326","203","3","","1","1","250","0","0","0","250","2020-03-02 12:54:14","2020-03-02 12:54:14");
INSERT INTO product_sales VALUES("327","203","30","","1","1","100","0","0","0","100","2020-03-02 12:54:14","2020-03-02 12:54:14");
INSERT INTO product_sales VALUES("328","204","4","","20","1","2","0","0","0","40","2020-03-02 12:57:41","2020-03-02 12:57:41");
INSERT INTO product_sales VALUES("329","205","1","","1","1","400","0","10","40","440","2020-03-11 17:46:42","2020-03-11 17:46:42");
INSERT INTO product_sales VALUES("330","206","5","","1","1","120","0","0","0","120","2020-03-11 17:52:30","2020-03-11 17:54:04");
INSERT INTO product_sales VALUES("331","207","30","","2","1","100","0","0","0","200","2020-04-06 20:40:24","2020-04-06 20:41:11");
INSERT INTO product_sales VALUES("332","207","31","","1","1","300","0","0","0","300","2020-04-06 20:40:24","2020-04-06 20:41:11");
INSERT INTO product_sales VALUES("333","207","2","","1","2","125.22","0","15","18.78","144","2020-04-06 20:41:11","2020-04-06 20:41:11");
INSERT INTO product_sales VALUES("334","208","25","","1","1","1000","0","10","100","1100","2020-05-06 23:59:50","2020-05-06 23:59:50");
INSERT INTO product_sales VALUES("335","208","1","","1","1","400","0","10","40","440","2020-05-06 23:59:50","2020-05-06 23:59:50");
INSERT INTO product_sales VALUES("336","209","5","","1","1","120","0","0","0","120","2020-06-09 13:42:48","2020-06-09 13:42:48");
INSERT INTO product_sales VALUES("337","209","25","","1","1","1000","0","10","100","1100","2020-06-09 13:42:48","2020-06-09 13:42:48");
INSERT INTO product_sales VALUES("340","212","1","","1","1","350","0","10","35","385","2020-07-03 19:39:14","2020-07-03 19:39:14");
INSERT INTO product_sales VALUES("341","212","25","","1","1","1000","0","10","100","1100","2020-07-03 19:39:14","2020-07-03 19:39:14");
INSERT INTO product_sales VALUES("342","212","22","","1","1","1000","0","10","100","1100","2020-07-03 19:39:14","2020-07-03 19:39:14");
INSERT INTO product_sales VALUES("343","213","48","2","1","1","13","0","0","0","13","2020-07-12 22:51:53","2020-07-12 22:51:53");
INSERT INTO product_sales VALUES("344","214","3","","1","1","250","0","0","0","250","2020-07-14 12:53:41","2020-07-14 12:53:41");
INSERT INTO product_sales VALUES("347","217","1","","1","1","350","0","10","35","385","2020-07-27 21:38:08","2020-07-27 21:38:08");
INSERT INTO product_sales VALUES("348","218","1","","1","1","350","0","10","35","385","2020-07-27 21:40:24","2020-07-27 21:40:24");
INSERT INTO product_sales VALUES("349","219","1","","1","1","350","0","10","35","385","2020-07-27 21:46:45","2020-07-27 21:46:45");
INSERT INTO product_sales VALUES("350","220","31","","2","1","300","0","0","0","600","2020-08-12 19:28:04","2020-08-12 19:28:04");
INSERT INTO product_sales VALUES("351","220","33","","3","1","20","0","0","0","60","2020-08-12 19:28:04","2020-08-12 19:28:04");
INSERT INTO product_sales VALUES("352","220","30","","1","1","100","0","0","0","100","2020-08-12 19:28:04","2020-08-12 19:28:04");
INSERT INTO product_sales VALUES("353","221","25","","1","1","1000","0","10","100","1100","2020-08-12 19:30:35","2020-08-12 19:30:35");
INSERT INTO product_sales VALUES("354","222","61","","2","1","10000","0","15","3000","23000","2020-08-16 23:04:24","2020-08-16 23:04:24");
INSERT INTO product_sales VALUES("355","223","1","","1","1","400","0","10","40","440","2020-08-16 23:05:23","2020-08-16 23:05:23");
INSERT INTO product_sales VALUES("356","224","1","","3","1","390","30","10","117","1287","2020-08-26 21:01:39","2020-08-26 21:01:39");
INSERT INTO product_sales VALUES("362","230","3","","1","1","250","0","0","0","250","2020-10-17 22:28:52","2020-10-17 22:28:52");
INSERT INTO product_sales VALUES("363","231","1","","1","1","400","0","10","40","440","2020-10-18 12:13:33","2020-10-18 12:13:33");
INSERT INTO product_sales VALUES("364","232","30","","1","1","100","0","0","0","100","2020-10-22 14:30:14","2020-10-22 14:30:14");
INSERT INTO product_sales VALUES("365","233","3","","1","1","250","0","0","0","250","2020-10-22 14:56:04","2020-10-22 14:56:04");
INSERT INTO product_sales VALUES("366","234","61","","1","1","10000","0","15","1500","11500","2020-10-24 08:05:06","2020-10-24 08:05:06");
INSERT INTO product_sales VALUES("367","235","3","","1","1","250","0","0","0","250","2020-10-24 08:07:52","2020-10-24 08:07:52");
INSERT INTO product_sales VALUES("369","237","25","","2","1","1000","0","10","200","2200","2020-10-24 16:46:01","2020-10-24 16:46:01");
INSERT INTO product_sales VALUES("370","237","22","","2","1","1000","0","10","200","2200","2020-10-24 16:46:01","2020-10-24 16:46:01");
INSERT INTO product_sales VALUES("371","237","61","","5","1","10000","0","15","7500","57500","2020-10-24 16:46:01","2020-10-24 16:46:01");
INSERT INTO product_sales VALUES("373","239","60","9","1","1","2","0","0","0","2","2020-10-27 06:40:02","2020-10-27 06:40:02");
INSERT INTO product_sales VALUES("374","240","60","9","2","1","3","0","0","0","6","2020-10-27 06:42:06","2020-10-27 06:42:06");
INSERT INTO product_sales VALUES("375","241","3","","1","1","250","0","0","0","250","2020-10-27 07:32:00","2020-10-27 07:32:00");
INSERT INTO product_sales VALUES("376","242","3","","1","1","250","0","0","0","250","2020-10-29 08:30:30","2020-10-29 08:30:30");
INSERT INTO product_sales VALUES("377","243","3","","1","1","250","0","0","0","250","2020-11-01 08:21:12","2020-11-01 08:21:12");
INSERT INTO product_sales VALUES("380","245","1","","2","1","400","0","10","80","880","2020-11-01 08:42:23","2020-11-01 08:42:23");
INSERT INTO product_sales VALUES("381","245","3","","1","1","250","0","0","0","250","2020-11-01 08:42:23","2020-11-01 08:42:23");
INSERT INTO product_sales VALUES("382","246","1","","1","1","400","0","10","40","440","2020-11-01 08:50:18","2020-11-02 17:39:17");
INSERT INTO product_sales VALUES("386","250","1","","1","1","344","0","10","34.4","378.4","2020-11-06 14:30:41","2020-11-06 14:30:41");
INSERT INTO product_sales VALUES("387","251","1","","1","1","344","0","10","34.4","378.4","2020-11-09 14:15:24","2020-11-09 14:15:24");
INSERT INTO product_sales VALUES("388","251","3","","1","1","232.2","0","0","0","232.2","2020-11-09 14:15:24","2020-11-09 14:15:24");
INSERT INTO product_sales VALUES("389","252","3","","1","1","229.5","0","0","0","229.5","2020-11-11 06:58:58","2020-11-11 06:58:58");
INSERT INTO product_sales VALUES("390","253","3","","1","1","212.5","0","0","0","212.5","2020-11-14 07:47:36","2020-11-14 07:47:36");
INSERT INTO product_sales VALUES("391","253","31","","1","1","255","0","0","0","255","2020-11-14 07:47:36","2020-11-14 07:47:36");
INSERT INTO product_sales VALUES("392","253","61","","1","1","8500","0","15","1275","9775","2020-11-14 07:47:36","2020-11-14 07:47:36");
INSERT INTO product_sales VALUES("395","256","1","","1","1","400","0","10","40","440","2020-11-17 07:47:48","2020-11-17 07:47:48");
INSERT INTO product_sales VALUES("396","256","3","","1","1","250","0","10","25","275","2020-11-17 07:47:48","2020-11-17 07:47:48");
INSERT INTO product_sales VALUES("397","257","3","","1","1","250","0","0","0","250","2020-11-17 08:09:19","2020-11-17 08:09:19");
INSERT INTO product_sales VALUES("398","258","61","","3","1","10000","0","15","4500","34500","2020-11-18 07:52:39","2020-11-18 07:52:39");
INSERT INTO product_sales VALUES("399","259","68","","1","1","2700000","0","0","0","2700000","2021-12-07 14:25:13","2021-12-07 14:25:13");
INSERT INTO product_sales VALUES("400","260","25","","2","1","7908000","0","10","1581600","17397600","2021-12-07 14:26:26","2021-12-07 14:26:26");
INSERT INTO product_sales VALUES("401","261","4","","1","1","8000","0","0","0","8000","2021-12-07 15:19:25","2021-12-07 15:19:25");
INSERT INTO product_sales VALUES("402","262","4","","1","1","8000","0","0","0","8000","2021-12-07 15:19:56","2021-12-07 15:19:56");
INSERT INTO product_sales VALUES("403","263","22","","2","1","4590000","0","10","918000","10098000","2021-12-07 15:20:31","2021-12-07 15:20:31");
INSERT INTO product_sales VALUES("404","264","4","","1","1","8400","0","0","0","8400","2021-12-07 15:23:27","2021-12-07 15:23:27");
INSERT INTO product_sales VALUES("405","265","68","","2","1","2700000","0","0","0","5400000","2021-12-07 15:24:39","2021-12-07 15:24:39");
INSERT INTO product_sales VALUES("406","266","3","","2","1","35000","0","0","0","70000","2021-12-07 15:25:38","2021-12-07 15:25:38");
INSERT INTO product_sales VALUES("407","267","31","","1","1","100000","0","0","0","100000","2021-12-07 15:25:56","2021-12-07 15:25:56");
INSERT INTO product_sales VALUES("408","268","3","","1","1","35000","0","0","0","35000","2021-12-07 15:30:32","2021-12-07 15:30:32");
INSERT INTO product_sales VALUES("409","269","4","","1","1","8000","0","0","0","8000","2021-12-07 15:54:00","2021-12-07 15:54:00");
INSERT INTO product_sales VALUES("410","270","4","","1","1","8000","0","0","0","8000","2021-12-08 10:25:23","2021-12-08 10:25:23");
INSERT INTO product_sales VALUES("411","271","4","","1","1","8000","0","0","0","8000","2021-12-08 10:27:38","2021-12-08 10:27:38");
INSERT INTO product_sales VALUES("412","272","4","","1","1","8000","0","0","0","8000","2021-12-08 10:28:02","2021-12-08 10:28:02");
INSERT INTO product_sales VALUES("413","273","4","","1","1","8000","0","0","0","8000","2021-12-08 10:29:10","2021-12-08 10:29:10");
INSERT INTO product_sales VALUES("414","274","4","","1","1","8000","0","0","0","8000","2021-12-08 10:29:58","2021-12-08 10:29:58");
INSERT INTO product_sales VALUES("415","275","4","","1","1","8000","0","0","0","8000","2021-12-08 10:30:37","2021-12-08 10:30:37");
INSERT INTO product_sales VALUES("416","276","4","","1","1","8000","0","0","0","8000","2021-12-08 10:32:57","2021-12-08 10:32:57");
INSERT INTO product_sales VALUES("417","277","4","","1","1","8000","0","0","0","8000","2021-12-08 10:36:01","2021-12-08 10:36:01");
INSERT INTO product_sales VALUES("418","278","68","","1","1","2700000","0","0","0","2700000","2021-12-08 10:55:01","2021-12-08 10:55:01");
INSERT INTO product_sales VALUES("419","279","4","","1","1","8000","0","0","0","8000","2021-12-08 10:57:51","2021-12-08 10:57:51");



CREATE TABLE `product_transfer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transfer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `purchase_unit_id` int(11) NOT NULL,
  `net_unit_cost` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_transfer VALUES("1","1","4","","100","1","1","0","0","100","2018-08-08 18:17:10","2018-12-25 05:16:55");
INSERT INTO product_transfer VALUES("7","6","48","3","1","1","2","0","0","2","2019-12-05 20:55:04","2019-12-05 21:09:42");
INSERT INTO product_transfer VALUES("11","8","5","","10","1","100","0","0","1000","2020-01-22 13:30:59","2020-01-22 13:30:59");
INSERT INTO product_transfer VALUES("13","10","1","","1","1","320","10","32","352","2020-10-08 14:27:35","2020-10-08 14:29:35");
INSERT INTO product_transfer VALUES("14","11","62","12","1","1","1","0","0","1","2020-10-18 19:17:08","2020-10-18 19:17:08");
INSERT INTO product_transfer VALUES("15","12","61","","10","1","3000","15","4500","34500","2020-10-24 10:01:46","2020-10-24 10:01:46");



CREATE TABLE `product_variants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `item_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_price` double DEFAULT NULL,
  `qty` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_variants VALUES("3","48","3","1","S-93475396","","13","2019-11-21 14:03:04","2020-01-10 18:22:49");
INSERT INTO product_variants VALUES("5","48","5","3","L-93475396","50","11","2019-11-24 13:07:20","2020-03-16 21:08:26");
INSERT INTO product_variants VALUES("6","48","2","2","M-93475396","10","13","2019-11-24 14:17:07","2020-07-12 22:51:53");
INSERT INTO product_variants VALUES("10","60","9","1","a-32081679","","1","2020-05-18 23:44:14","2020-10-27 06:42:06");
INSERT INTO product_variants VALUES("11","60","11","2","b-32081679","","0","2020-05-18 23:58:31","2020-05-18 23:58:31");
INSERT INTO product_variants VALUES("12","62","12","1","variant 1-81145830","","3","2020-09-27 13:08:27","2020-11-16 16:01:45");
INSERT INTO product_variants VALUES("13","62","13","2","variant 2-81145830","","0","2020-09-27 13:08:27","2020-09-27 13:08:27");



CREATE TABLE `product_warehouse` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `warehouse_id` int(11) NOT NULL,
  `qty` double NOT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO product_warehouse VALUES("10","1","","1","133.5","","2018-08-08 15:30:12","2020-11-16 16:01:45");
INSERT INTO product_warehouse VALUES("11","2","","1","1404","","2018-08-08 15:30:12","2019-12-05 11:31:49");
INSERT INTO product_warehouse VALUES("12","3","","1","100","","2018-08-08 15:30:13","2020-11-11 06:58:58");
INSERT INTO product_warehouse VALUES("13","5","","1","77","","2018-08-08 15:30:13","2020-10-18 19:48:08");
INSERT INTO product_warehouse VALUES("14","4","","1","172","","2018-08-08 16:16:09","2021-12-08 10:23:51");
INSERT INTO product_warehouse VALUES("15","4","","2","108","","2018-08-08 18:16:15","2021-12-08 10:57:51");
INSERT INTO product_warehouse VALUES("16","2","","2","1847","","2018-08-08 18:26:49","2020-04-06 20:41:11");
INSERT INTO product_warehouse VALUES("17","1","","2","64.5","","2018-08-08 18:33:33","2020-11-17 07:47:48");
INSERT INTO product_warehouse VALUES("18","3","","2","59","","2018-08-09 06:47:23","2021-12-07 15:30:32");
INSERT INTO product_warehouse VALUES("19","5","","2","62","","2018-08-09 06:48:36","2020-06-09 13:42:48");
INSERT INTO product_warehouse VALUES("20","10","","1","50","","2018-08-09 06:49:29","2019-12-04 12:49:14");
INSERT INTO product_warehouse VALUES("21","10","","2","61","","2018-08-09 06:49:55","2018-12-01 07:05:18");
INSERT INTO product_warehouse VALUES("22","22","","1","24","","2018-09-03 11:06:09","2019-01-03 08:01:24");
INSERT INTO product_warehouse VALUES("23","22","","2","21","","2018-09-03 11:07:14","2021-12-07 15:20:31");
INSERT INTO product_warehouse VALUES("24","24","","2","0","","2018-09-16 04:49:30","2018-09-16 04:50:49");
INSERT INTO product_warehouse VALUES("25","25","","1","14","","2018-10-23 08:14:21","2021-12-07 13:54:58");
INSERT INTO product_warehouse VALUES("26","25","","2","10","","2018-10-23 08:14:41","2021-12-07 14:26:26");
INSERT INTO product_warehouse VALUES("27","31","","1","14","","2018-12-05 06:34:30","2020-10-24 10:24:13");
INSERT INTO product_warehouse VALUES("28","30","","1","14","","2018-12-05 06:34:30","2020-10-22 14:30:14");
INSERT INTO product_warehouse VALUES("29","31","","2","11","","2018-12-05 06:35:08","2021-12-07 15:25:56");
INSERT INTO product_warehouse VALUES("30","30","","2","12","","2018-12-05 06:35:08","2020-08-12 19:28:04");
INSERT INTO product_warehouse VALUES("31","32","","1","10","","2018-12-19 06:57:16","2019-02-09 11:45:23");
INSERT INTO product_warehouse VALUES("32","32","","2","20","","2018-12-19 06:57:41","2019-11-11 11:28:59");
INSERT INTO product_warehouse VALUES("33","33","","1","16","","2018-12-24 07:38:40","2019-03-03 11:39:17");
INSERT INTO product_warehouse VALUES("34","33","","2","22","","2019-02-09 11:21:38","2020-08-12 19:28:04");
INSERT INTO product_warehouse VALUES("35","48","3","1","2","","2019-11-25 21:23:02","2020-01-10 18:10:24");
INSERT INTO product_warehouse VALUES("36","48","2","1","3","","2019-11-26 13:47:42","2020-01-10 18:10:24");
INSERT INTO product_warehouse VALUES("37","48","3","2","11","","2019-11-26 15:12:08","2020-01-10 18:22:49");
INSERT INTO product_warehouse VALUES("38","48","2","2","10","","2019-11-26 15:12:08","2020-07-12 22:51:53");
INSERT INTO product_warehouse VALUES("39","48","5","1","1","","2019-12-21 17:18:51","2020-01-10 18:10:24");
INSERT INTO product_warehouse VALUES("40","48","5","2","10","","2019-12-22 15:36:39","2020-03-16 21:08:26");
INSERT INTO product_warehouse VALUES("45","61","","2","11","","2020-08-16 23:02:07","2020-11-18 08:02:18");
INSERT INTO product_warehouse VALUES("46","62","12","1","2","","2020-09-27 13:55:33","2020-11-16 16:01:45");
INSERT INTO product_warehouse VALUES("47","62","12","2","1","","2020-10-18 19:17:08","2020-10-27 06:39:39");
INSERT INTO product_warehouse VALUES("48","61","","1","10","","2020-10-24 10:01:46","2020-10-24 10:30:00");
INSERT INTO product_warehouse VALUES("49","60","9","1","1","","2020-10-26 17:34:05","2020-10-27 06:42:06");
INSERT INTO product_warehouse VALUES("51","68","","1","10","","2021-12-07 14:00:40","2021-12-08 11:31:10");
INSERT INTO product_warehouse VALUES("52","68","","2","0","","2021-12-07 14:03:51","2021-12-07 14:03:51");
INSERT INTO product_warehouse VALUES("53","68","","7","7","","2021-12-08 10:52:09","2021-12-08 11:22:38");
INSERT INTO product_warehouse VALUES("54","4","","7","8","","2021-12-08 11:22:38","2021-12-08 11:22:38");
INSERT INTO product_warehouse VALUES("55","31","","7","6","","2021-12-08 11:22:38","2021-12-08 11:22:38");



CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode_symbology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `purchase_unit_id` int(11) NOT NULL,
  `sale_unit_id` int(11) NOT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` double DEFAULT NULL,
  `alert_quantity` double DEFAULT NULL,
  `promotion` tinyint(4) DEFAULT NULL,
  `promotion_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_date` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `tax_method` int(11) DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_variant` tinyint(1) DEFAULT NULL,
  `is_diffPrice` tinyint(1) DEFAULT NULL,
  `featured` tinyint(4) DEFAULT NULL,
  `product_list` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty_list` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_list` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO products VALUES("1","Mouse","63920719","standard","C39","4","3","1","1","1","320","297000","198","20","1","350","2020-06-30","2020-07-31","1","1","toponemouse.jpg","","","","1","","","","<p style=@text-align: center;@>11:11:30 AM<img src=@https://pbs.twimg.com/profile_images/900037286879838208/sZhajgua_400x400.jpg@ alt=@niamkvn@ width=@400@ height=@400@ /><span style=@background-color: #ccffff;@>hello world<br /></span></p>","1","2018-05-13 05:23:03","2020-11-17 07:47:48");
INSERT INTO products VALUES("2","Buah Mangga","72782608","standard","C128","","1","1","3","2","8","12000","3251","100","","","","","2","2","mango.jpg","","","","1","","","","","0","2018-05-13 05:38:31","2022-01-16 06:43:51");
INSERT INTO products VALUES("3","Earphone","85415108","standard","C128","4","2","1","1","1","200","35000","159","25","","220","2020-11-02","2020-11-30","","1","airphonesamsung.jpg","","","0","1","","","","<p>Earphone with good <strong>sound quality.</strong></p>
<p>jhjkhjkhjh @@</p>","1","2018-05-13 05:39:55","2021-12-07 15:30:32");
INSERT INTO products VALUES("4","Buah Leci","38314290","standard","C128","","1","1","1","1","1","8000","288","50","","","","","","1","lychee.jpg","","","","1","","","","<p style=@text-align: center;@><em>sweet lychee from <strong>kalipur</strong>, bashkhali</em></p>","0","2018-05-24 05:54:56","2022-01-16 06:43:51");
INSERT INTO products VALUES("5","Baby doll","31261512","standard","C128","3","4","1","1","1","100","120","139","50","1","100","2020-02-28","2020-02-29","","1","lalacrybabydoll.jpg,15992893905761572515542825e4e2e433-e29b-4ca1-abb2-aad995574f2a_1.e4dc9f20c1d8b2999d66556ae0aa1600.jpeg","","","","1","","","","","0","2018-05-24 05:58:20","2020-10-18 19:48:08");
INSERT INTO products VALUES("6","test","78041363","standard","C128","","2","1","1","1","12","21","0","","","","","","","1","","","","","","","","","","0","2018-05-28 06:50:25","2018-05-28 06:53:24");
INSERT INTO products VALUES("10","potato","212132","standard","C128","","9","7","7","7","10","22","111","","","","","","","1","potato.jpeg","","","","","","","","","1","2018-06-25 08:34:53","2019-12-04 12:49:14");
INSERT INTO products VALUES("13","ldms","40624536","digital","C128","","3","0","0","0","0","21","0","","","","","","","1","ldms.jpg","1532330693.JPG","","","1","","","","<p>Amazon Prime 1 Month<br />Price: 300tk</p>
<p>User Ability: Max 2 Mobile User<br />Duration: 1 Month<br />Package: Premium</p>","1","2018-07-23 08:09:29","2020-03-07 23:45:01");
INSERT INTO products VALUES("14","ni","40237871","standard","C128","","9","8","8","8","55","56","0","","","","","","","1","","","","","","","","","","0","2018-08-01 05:36:51","2018-08-01 05:41:48");
INSERT INTO products VALUES("15","edawe","awd","standard","C128","","1","4","4","4","312","132","0","","","","","","","1","","","","","","","","","","0","2018-08-05 08:26:19","2018-08-05 08:27:03");
INSERT INTO products VALUES("16","weq","eqw","digital","C128","","2","0","0","0","0","2","0","","","","","","","1","","1533454125.jpg","","","","","","","","0","2018-08-05 08:28:45","2018-08-05 08:29:23");
INSERT INTO products VALUES("17","et","wer","standard","C128","","2","4","4","4","12","21","0","","","","","","","1","","","","","","","","","","0","2018-08-06 11:25:43","2018-08-06 11:27:41");
INSERT INTO products VALUES("18","wre","wre","standard","C128","","1","4","4","4","3","2","0","","","","","","","1","","","","","","","","","","0","2018-08-06 11:45:42","2018-08-06 11:57:41");
INSERT INTO products VALUES("19","ewr","wer","standard","C128","","2","4","4","4","3","23","0","","1","","2018-08-06","2018-08-10","","1","","","","","","","","","","0","2018-08-06 12:41:46","2019-11-28 12:16:47");
INSERT INTO products VALUES("20","dim","4234","standard","C128","","10","1","1","1","1","2","0","","","","","","","1","","","","","","","","","","0","2018-08-29 06:37:07","2018-08-29 06:43:18");
INSERT INTO products VALUES("21","dim","1","standard","C128","","11","1","1","1","1","2","0","","","","","","","1","","","","","","","","","","0","2018-08-29 06:49:27","2018-08-29 06:53:21");
INSERT INTO products VALUES("22","iphone-X","97103461","standard","C128","5","2","1","1","1","800","5100000","45","20","","","","","1","1","iphoneX.jpg","","","","1","","","","","1","2018-09-03 11:05:17","2021-12-07 15:20:31");
INSERT INTO products VALUES("23","qwq","1237920612311a","standard","C39","","2","1","1","1","1","2","0","","","","","","","1","","","","","","","","","","0","2018-09-11 06:53:18","2018-09-11 06:56:04");
INSERT INTO products VALUES("24","chocolate","84802317","standard","C128","","9","1","1","1","1","2","0","","","","","","","1","","","","","1","","","","","0","2018-09-16 04:42:01","2018-09-16 05:10:43");
INSERT INTO products VALUES("25","Galaxy S9","72100265","standard","C128","","2","1","1","1","500","7908000","24","50","","","","","1","1","SamsungGalaxyS9.jpg","","","","1","","","","","1","2018-10-23 08:13:22","2021-12-07 14:26:26");
INSERT INTO products VALUES("26","Samsung Set","39053411","combo","C128","4","2","0","0","0","0","1250","0","","","","","","","1","zummXD2dvAtI.png","","","","","3,25","1,1","250,1000","","1","2018-11-19 10:59:06","2018-11-20 09:12:02");
INSERT INTO products VALUES("27","mixed fruit juice","24805187","combo","C128","","9","0","0","0","0","16","0","","","","","","","1","zummXD2dvAtI.png","","","","","4,2","3,1","2,10","","0","2018-11-19 16:39:26","2018-11-25 05:35:51");
INSERT INTO products VALUES("28","ssaaa","sasas","standard","C128","","2","1","1","2","1","2","0","","","","","","","1","zummXD2dvAtI.png","","","","","","","","","0","2018-11-20 11:14:12","2018-11-20 11:34:02");
INSERT INTO products VALUES("29","testcloth","16055884","standard","C128","","4","10","10","10","10","15","0","","","","2018-11-29","","","1","zummXD2dvAtI.png","","","","","","","","","0","2018-11-29 10:49:25","2019-03-01 22:09:27");
INSERT INTO products VALUES("30","Kaos Polo","53467102","standard","C128","","12","1","1","1","50","50000","26","10","","","","","","1","PoloShirt.jpg","","","","1","","","","","1","2018-12-05 06:29:43","2020-10-22 14:30:14");
INSERT INTO products VALUES("31","Sepatu","90471412","standard","C128","","12","1","1","1","250","100000","31","10","","","","","","1","Shoe.jpg","","","","1","","","","","1","2018-12-05 06:33:09","2021-12-08 11:22:38");
INSERT INTO products VALUES("32","Toothpaste","859875003032","standard","C128","","12","1","1","1","5","10","30","","","","","","","1","1572759415477product-page-fresh-breath.jpg","","","","","","","","","1","2018-12-19 06:56:08","2019-11-11 11:28:59");
INSERT INTO products VALUES("33","tissue","8941161008066","standard","C128","","12","1","1","1","10","20","38","","","","","","","1","zummXD2dvAtI.png","","","","0","","","","","1","2018-12-24 06:33:58","2020-09-05 14:07:39");
INSERT INTO products VALUES("48","T-shirt","93475396","standard","C128","","12","1","1","1","2","45000","37","","","","","","","1","1577165120189220px-Blue_Tshirt.jpg","","1","","0","","","","","1","2019-11-21 14:03:04","2020-07-12 22:51:53");
INSERT INTO products VALUES("60","testvar","32081679","standard","C128","","12","1","1","1","1","2","1","","","","","","","1","zummXD2dvAtI.png","","1","","0","","","","","1","2020-05-18 23:44:14","2020-10-27 06:42:06");
INSERT INTO products VALUES("61","TV","32703342","standard","C128","4","2","1","1","1","3000","10000","21","","","","","","2","1","zummXD2dvAtI.png","","","","1","","","","","1","2020-08-16 22:58:39","2020-11-18 08:02:18");
INSERT INTO products VALUES("62","Test variant","81145830","standard","C128","","4","1","1","1","1","2","3","","","","","","","1","zummXD2dvAtI.png","","1","","","","","","","1","2020-09-27 13:08:27","2020-11-16 16:01:45");
INSERT INTO products VALUES("68","Galaxy Z","72100268","standard","C128","4","20","1","1","1","2500000","2700000","17","","","","","","","1","zummXD2dvAtI.png","","","","","","","","","1","2021-12-07 13:00:02","2021-12-08 11:31:10");



CREATE TABLE `purchase_product_return` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `return_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `qty` double NOT NULL,
  `purchase_unit_id` int(11) NOT NULL,
  `net_unit_cost` double NOT NULL,
  `discount` double NOT NULL,
  `tax_rate` double NOT NULL,
  `tax` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO purchase_product_return VALUES("1","1","3","","1","1","200","0","0","0","200","","2019-12-07 18:19:03");



CREATE TABLE `purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_discount` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_cost` double NOT NULL,
  `order_tax_rate` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `order_discount` double DEFAULT NULL,
  `shipping_cost` double DEFAULT NULL,
  `grand_total` double NOT NULL,
  `paid_amount` double NOT NULL,
  `status` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO purchases VALUES("12","pr-20180808-051614","1","2","3","2","300","0","0","10200","0","0","0","0","10200","0","1","1","","","2018-08-08 18:16:14","2018-09-22 09:53:24");
INSERT INTO purchases VALUES("13","pr-20180809-054723","1","2","3","4","410","0","7304.35","92600","10","9260","0","500","102360","300","1","1","","","2018-08-09 06:47:23","2018-08-30 10:07:18");
INSERT INTO purchases VALUES("14","pr-20180809-012348","1","1","1","5","400","0","4452.17","75300","10","7480","500","1000","83280","0","1","1","","","2018-08-09 14:23:48","2018-08-09 14:23:48");
INSERT INTO purchases VALUES("15","pr-20180903-100609","1","1","1","1","20","0","1600","17600","0","0","0","100","17700","0","1","1","","","2018-09-03 11:06:09","2018-10-08 05:11:24");
INSERT INTO purchases VALUES("16","pr-20180903-100714","1","2","3","1","20","0","1600","17600","0","0","0","150","17750","3350","1","1","","","2018-09-03 11:07:14","2018-10-07 07:57:36");
INSERT INTO purchases VALUES("18","pr-20181022-042625","1","1","1","1","50","0","0","50","0","0","","","50","0","1","1","","","2018-10-22 17:26:25","2018-10-22 17:26:25");
INSERT INTO purchases VALUES("19","pr-20181022-042652","1","2","3","1","50","0","0","50","0","0","","","50","0","1","1","","","2018-10-22 17:26:52","2018-10-22 17:26:52");
INSERT INTO purchases VALUES("20","pr-20181023-071420","11","1","1","1","15","0","750","8250","0","0","","","8250","0","1","1","","","2018-10-23 08:14:20","2018-10-23 08:14:20");
INSERT INTO purchases VALUES("21","pr-20181023-071441","11","2","3","1","15","0","750","8250","0","0","0","0","8250","0","1","1","","","2018-10-23 08:14:41","2018-10-23 08:14:58");
INSERT INTO purchases VALUES("22","pr-20181101-045903","1","1","1","1","5","0","400","4400","0","0","","","4400","0","1","1","","","2018-11-01 05:59:03","2018-11-01 05:59:03");
INSERT INTO purchases VALUES("23","pr-20181101-045928","1","2","3","1","5","0","400","4400","10","430","100","0","4730","500","1","1","","","2018-11-01 05:59:28","2018-12-04 08:01:34");
INSERT INTO purchases VALUES("24","pr-20181105-091819","1","2","1","2","20","0","1450","15950","0","0","","","15950","15950","1","2","","","2018-11-05 10:18:19","2018-11-05 10:21:27");
INSERT INTO purchases VALUES("25","pr-20181205-053429","1","1","1","2","30","0","0","4500","0","0","100","50","4450","4450","1","2","","","2018-12-05 06:34:29","2018-12-05 06:34:43");
INSERT INTO purchases VALUES("26","pr-20181205-053508","1","2","3","2","30","0","0","4500","0","0","","","4500","0","1","1","","","2018-12-05 06:35:08","2018-12-10 07:20:52");
INSERT INTO purchases VALUES("27","pr-20181219-055716","1","2","","1","10","0","0","10","0","0","0","0","10","10","1","2","","","2018-12-19 06:57:16","2018-12-20 07:34:39");
INSERT INTO purchases VALUES("33","pr-20181224-063840","1","1","","1","10","0","0","10","0","0","0","0","10","0","1","1","","","2018-12-24 07:38:40","2018-12-24 10:04:21");
INSERT INTO purchases VALUES("34","pr-20190103-070123","1","1","1","2","4","0","260","2860","0","0","","","2860","2860","1","2","","","2019-01-03 08:01:23","2019-01-29 11:03:24");
INSERT INTO purchases VALUES("35","pr-20190129-095448","9","1","1","2","4","0","0","600","0","0","","","600","100","1","1","","","2019-01-29 10:54:48","2019-02-07 14:06:40");
INSERT INTO purchases VALUES("36","pr-20190129-095558","9","2","1","2","5","0","0","650","0","0","","","650","650","1","2","","","2019-01-29 10:55:58","2019-01-29 11:03:02");
INSERT INTO purchases VALUES("37","pr-20190209-102138","1","2","1","3","18","0","580","6390","0","0","0","0","6390","6390","1","2","","","2019-02-09 11:21:38","2019-06-13 11:13:51");
INSERT INTO purchases VALUES("38","pr-20190209-102208","1","1","1","2","13","0","150","1660","0","0","0","0","1660","1660","1","2","","","2019-02-09 11:22:08","2019-02-09 11:49:40");
INSERT INTO purchases VALUES("39","pr-20190209-104413","1","1","1","2","3","10","63","885","10","88.5","","","973.5","973.5","1","2","","","2019-02-09 11:44:13","2019-02-09 11:49:59");
INSERT INTO purchases VALUES("40","pr-20190303-103917","1","1","1","1","10","0","0","100","0","0","","","100","100","1","2","","","2019-03-03 11:39:17","2019-03-03 11:40:46");
INSERT INTO purchases VALUES("41","pr-20190303-104358","1","2","","2","15","0","320","3570","0","0","","","3570","1000","1","1","","","2019-03-03 11:43:58","2019-04-13 18:02:41");
INSERT INTO purchases VALUES("42","pr-20190404-095757","1","1","3","2","2","0","0","300","0","0","0","0","300","300","1","2","","","2019-04-04 10:57:57","2019-04-13 20:50:08");
INSERT INTO purchases VALUES("43","pr-20190613-101600","1","2","1","2","6","0","390","4290","0","0","","","4290","4290","1","2","","","2019-06-13 11:16:00","2019-10-19 16:29:25");
INSERT INTO purchases VALUES("44","pr-20191019-033119","1","2","3","2","2","0","130","1430","0","0","","","1430","0","1","1","","","2019-10-19 16:31:19","2019-10-19 16:31:19");
INSERT INTO purchases VALUES("46","pr-20191103-113949","1","2","3","2","20","0","0","150","0","0","","50","200","200","1","2","","","2019-11-03 12:39:49","2019-11-03 12:42:22");
INSERT INTO purchases VALUES("47","pr-20191109-112510","1","1","","2","3","10","63","885","0","0","","66","951","0","1","1","","","2019-11-09 12:25:10","2019-11-09 12:25:10");
INSERT INTO purchases VALUES("48","pr-20191110-070221","1","2","","1","100","0","0","100","0","0","","40","140","0","1","1","","","2019-11-10 20:02:21","2019-11-10 20:02:21");
INSERT INTO purchases VALUES("49","pr-20191111-102155","1","2","1","1","10","0","800","8800","0","0","0","50","8850","7000","1","1","","","2019-11-11 11:21:55","2020-01-01 15:22:25");
INSERT INTO purchases VALUES("55","pr-20191127-102835","1","1","","2","2","0","0","4","0","0","","","4","4","1","2","","","2019-11-27 23:28:35","2020-01-01 15:21:52");
INSERT INTO purchases VALUES("56","pr-20191127-102906","1","2","","1","1","0","0","2","0","0","0","0","2","2","1","2","","","2019-11-27 23:29:06","2020-01-01 15:21:44");
INSERT INTO purchases VALUES("57","pr-20191204-110749","1","1","1","1","1","0","0","200","0","0","","20","220","220","1","2","","","2019-12-05 00:07:49","2019-12-05 00:11:24");
INSERT INTO purchases VALUES("58","pr-20191205-102110","1","1","1","2","2","0","0","4","0","0","0","0","4","4","1","2","","","2019-12-05 11:21:10","2020-01-01 15:21:37");
INSERT INTO purchases VALUES("59","pr-20191221-041851","1","1","","3","3","0","0","6","0","0","0","0","6","6","1","2","","","2019-12-21 17:18:51","2020-01-01 15:21:31");
INSERT INTO purchases VALUES("61","pr-20200101-010631","1","2","1","3","30","0","0","60","0","0","","","60","60","1","2","","","2020-01-01 14:06:31","2020-01-01 14:07:50");
INSERT INTO purchases VALUES("62","pr-20200101-022402","1","2","","1","3","0","150","1650","0","0","","","1650","1650","1","2","","","2020-01-01 15:24:02","2020-08-12 19:28:52");
INSERT INTO purchases VALUES("67","pr-20200204-110041","1","2","1","2","2","0","0","300","0","0","","","300","300","1","2","","","2020-02-05 00:00:41","2020-02-05 00:00:50");
INSERT INTO purchases VALUES("69","pr-20200302-115510","1","2","","1","50","0","0","50","0","0","","","50","50","1","2","","","2020-03-02 12:55:10","2020-03-02 12:58:20");
INSERT INTO purchases VALUES("70","pr-20200302-115603","1","1","1","1","50","0","0","50","0","0","","","50","50","1","2","","","2020-03-02 12:56:03","2020-03-02 12:58:11");
INSERT INTO purchases VALUES("71","pr-20200406-073512","1","2","3","3","11","0","150","3050","10","305","","","3355","2000","1","1","","","2020-04-06 20:35:12","2020-04-06 20:38:23");
INSERT INTO purchases VALUES("72","pr-20200816-100207","1","2","1","1","10","5000","3750","28750","0","0","","2000","30750","0","1","1","","","2020-08-16 23:02:07","2020-08-16 23:02:07");
INSERT INTO purchases VALUES("73","pr-20200927-125533","1","1","","1","2","0","0","2","0","0","0","0","2","0","1","1","","","2020-09-27 13:55:33","2020-09-27 16:07:44");
INSERT INTO purchases VALUES("74","pr-20201024-070201","1","2","1","2","15","0","5270","41470","0","0","0","0","41470","0","1","1","","","2020-10-24 08:02:01","2020-10-24 08:03:16");
INSERT INTO purchases VALUES("83","pr-20201027-045611","1","1","","1","2","0","0","2","0","0","","","2","0","1","1","","","2020-10-27 05:56:11","2020-10-27 05:56:11");
INSERT INTO purchases VALUES("84","pr-20201027-045658","1","1","","1","2","0","0","4","0","0","","","4","0","1","1","","","2020-10-27 05:56:58","2020-10-27 05:56:58");
INSERT INTO purchases VALUES("85","pr-20201102-092952","1","1","","1","1","0","32","352","0","0","","","352","0","1","1","","asasda
dasdasd","2020-11-02 10:29:52","2020-11-02 10:29:52");
INSERT INTO purchases VALUES("87","pr-20201102-093644","1","1","","1","1","0","32","352","0","0","0","0","352","0","1","1","","kjkljklj
lljkljkljkl
jhjhjh.","2020-11-02 10:36:44","2020-11-02 12:20:34");
INSERT INTO purchases VALUES("89","pr-20201116-030145","1","1","","2","2","0","32","353","0","0","","","353","0","1","1","","","2020-11-16 16:01:45","2020-11-16 16:01:45");
INSERT INTO purchases VALUES("90","pr-20201118-061543","1","2","","1","10","0","4500","34500","0","0","1000","100","33600","33000","1","1","","","2020-11-18 07:15:43","2020-11-18 07:20:36");
INSERT INTO purchases VALUES("91","pr-20211207-070040","1","1","1","1","3","0","0","7500000","0","0","0","100000","7600000","7500000","2","1","","","2021-12-07 14:00:40","2021-12-07 14:09:50");
INSERT INTO purchases VALUES("92","pr-20211207-070351","1","2","","1","1","0","0","2500000","0","0","1","","2499999","0","4","1","","","2021-12-07 14:03:51","2021-12-07 14:03:51");
INSERT INTO purchases VALUES("93","pr-20211207-082734","1","2","","1","2","0","0","400","0","0","","","400","0","1","1","","","2021-12-07 15:27:34","2021-12-07 15:27:34");
INSERT INTO purchases VALUES("94","pr-20211208-032351","1","1","","1","1","0","0","1","0","0","","","1","0","1","1","","","2021-12-08 10:23:51","2021-12-08 10:23:51");
INSERT INTO purchases VALUES("95","pr-20211208-035209","1","7","7","1","1","0","0","2500000","0","0","","","2500000","0","1","1","","","2021-12-08 10:52:09","2021-12-08 10:52:09");
INSERT INTO purchases VALUES("96","pr-20211208-042238","35","7","7","3","21","0","0","17501508","0","0","","","17501508","17501508","1","2","","","2021-12-08 11:22:38","2021-12-08 11:23:09");
INSERT INTO purchases VALUES("97","pr-20211208-043110","35","1","7","1","4","0","0","10000000","0","0","","","10000000","10000000","1","2","","","2021-12-08 11:31:10","2021-12-08 11:31:22");



CREATE TABLE `quotations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `biller_id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_discount` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_price` double NOT NULL,
  `order_tax_rate` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `order_discount` double DEFAULT NULL,
  `shipping_cost` double DEFAULT NULL,
  `grand_total` double NOT NULL,
  `quotation_status` int(11) NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO quotations VALUES("1","qr-20180809-055250","1","1","3","3","1","3","57","35","767.73","5930","10","583","100","500","6913","2","","first quotation...","2018-08-09 06:52:50","2018-09-04 10:32:16");
INSERT INTO quotations VALUES("2","qr-20180904-040257","1","1","","1","1","2","3.5","0","0","76","0","0","1.6","2.7","77.1","1","","","2018-09-04 05:02:57","2018-09-21 14:05:57");
INSERT INTO quotations VALUES("3","qr-20181023-061249","9","1","3","11","1","2","2","0","40","453","0","0","0","0","453","2","","","2018-10-23 07:12:49","2019-12-21 13:41:36");
INSERT INTO quotations VALUES("11","qr-20201024-090814","1","1","","1","1","1","2","0","3000","23000","0","0","0","0","23000","1","","","2020-10-24 10:08:14","2020-10-24 10:28:35");
INSERT INTO quotations VALUES("12","qr-20211208-040141","1","10","7","28","2","1","1","0","0","8000","0","0","","","8000","1","","","2021-12-08 11:01:41","2021-12-08 11:01:41");



CREATE TABLE `return_purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `warehouse_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_discount` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_cost` double NOT NULL,
  `order_tax_rate` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `grand_total` double NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO return_purchases VALUES("1","prr-20190101-090759","3","1","1","1","1","1","0","0","200","0","0","200","","","","2019-01-01 10:07:59","2019-12-07 18:19:03");



CREATE TABLE `returns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `cash_register_id` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `biller_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_discount` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_price` double NOT NULL,
  `order_tax_rate` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `grand_total` double NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO returns VALUES("2","rr-20180809-055834","1","","1","1","1","1","1","20","0","0","40","10","4","44","","","","2018-08-09 06:58:34","2018-08-09 06:58:34");
INSERT INTO returns VALUES("3","rr-20180828-045527","1","","1","2","1","1","1","2","0","0","44","0","0","44","","","","2018-08-28 05:55:27","2018-09-20 18:03:47");
INSERT INTO returns VALUES("5","rr-20181007-082129","1","","11","2","2","1","1","1","0","0","250","0","0","250","","","","2018-10-07 09:21:29","2018-12-26 05:16:08");
INSERT INTO returns VALUES("6","rr-20190101-090630","9","","1","1","1","1","1","1","0","40","440","0","0","440","","","","2019-01-01 10:06:30","2019-01-01 10:06:30");
INSERT INTO returns VALUES("13","rr-20200816-102502","1","","1","2","2","1","1","1","0","1500","11500","0","0","11500","","","","2020-08-16 23:25:02","2020-08-16 23:25:02");
INSERT INTO returns VALUES("14","rr-20201013-053954","9","1","1","1","1","1","1","1","0","40","440","0","0","440","","","","2020-10-13 18:39:54","2020-10-13 18:39:54");
INSERT INTO returns VALUES("18","rr-20201118-070218","1","4","1","2","1","1","1","1","0","1500","11500","0","0","11500","","","","2020-11-18 08:02:18","2020-11-18 08:02:18");



CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO role_has_permissions VALUES("4","1");
INSERT INTO role_has_permissions VALUES("4","2");
INSERT INTO role_has_permissions VALUES("4","4");
INSERT INTO role_has_permissions VALUES("5","1");
INSERT INTO role_has_permissions VALUES("5","2");
INSERT INTO role_has_permissions VALUES("6","1");
INSERT INTO role_has_permissions VALUES("6","2");
INSERT INTO role_has_permissions VALUES("6","4");
INSERT INTO role_has_permissions VALUES("7","1");
INSERT INTO role_has_permissions VALUES("7","2");
INSERT INTO role_has_permissions VALUES("7","4");
INSERT INTO role_has_permissions VALUES("8","1");
INSERT INTO role_has_permissions VALUES("8","2");
INSERT INTO role_has_permissions VALUES("8","4");
INSERT INTO role_has_permissions VALUES("9","1");
INSERT INTO role_has_permissions VALUES("9","2");
INSERT INTO role_has_permissions VALUES("9","4");
INSERT INTO role_has_permissions VALUES("10","1");
INSERT INTO role_has_permissions VALUES("10","2");
INSERT INTO role_has_permissions VALUES("11","1");
INSERT INTO role_has_permissions VALUES("11","2");
INSERT INTO role_has_permissions VALUES("12","1");
INSERT INTO role_has_permissions VALUES("12","2");
INSERT INTO role_has_permissions VALUES("12","4");
INSERT INTO role_has_permissions VALUES("13","1");
INSERT INTO role_has_permissions VALUES("13","2");
INSERT INTO role_has_permissions VALUES("13","4");
INSERT INTO role_has_permissions VALUES("14","1");
INSERT INTO role_has_permissions VALUES("14","2");
INSERT INTO role_has_permissions VALUES("15","1");
INSERT INTO role_has_permissions VALUES("15","2");
INSERT INTO role_has_permissions VALUES("16","1");
INSERT INTO role_has_permissions VALUES("16","2");
INSERT INTO role_has_permissions VALUES("17","1");
INSERT INTO role_has_permissions VALUES("17","2");
INSERT INTO role_has_permissions VALUES("18","1");
INSERT INTO role_has_permissions VALUES("18","2");
INSERT INTO role_has_permissions VALUES("19","1");
INSERT INTO role_has_permissions VALUES("19","2");
INSERT INTO role_has_permissions VALUES("20","1");
INSERT INTO role_has_permissions VALUES("20","2");
INSERT INTO role_has_permissions VALUES("20","4");
INSERT INTO role_has_permissions VALUES("21","1");
INSERT INTO role_has_permissions VALUES("21","2");
INSERT INTO role_has_permissions VALUES("21","4");
INSERT INTO role_has_permissions VALUES("22","1");
INSERT INTO role_has_permissions VALUES("22","2");
INSERT INTO role_has_permissions VALUES("22","4");
INSERT INTO role_has_permissions VALUES("23","1");
INSERT INTO role_has_permissions VALUES("23","2");
INSERT INTO role_has_permissions VALUES("24","1");
INSERT INTO role_has_permissions VALUES("24","2");
INSERT INTO role_has_permissions VALUES("24","4");
INSERT INTO role_has_permissions VALUES("25","1");
INSERT INTO role_has_permissions VALUES("25","2");
INSERT INTO role_has_permissions VALUES("25","4");
INSERT INTO role_has_permissions VALUES("26","1");
INSERT INTO role_has_permissions VALUES("26","2");
INSERT INTO role_has_permissions VALUES("27","1");
INSERT INTO role_has_permissions VALUES("27","2");
INSERT INTO role_has_permissions VALUES("28","1");
INSERT INTO role_has_permissions VALUES("28","2");
INSERT INTO role_has_permissions VALUES("28","4");
INSERT INTO role_has_permissions VALUES("29","1");
INSERT INTO role_has_permissions VALUES("29","2");
INSERT INTO role_has_permissions VALUES("29","4");
INSERT INTO role_has_permissions VALUES("30","1");
INSERT INTO role_has_permissions VALUES("30","2");
INSERT INTO role_has_permissions VALUES("31","1");
INSERT INTO role_has_permissions VALUES("31","2");
INSERT INTO role_has_permissions VALUES("32","1");
INSERT INTO role_has_permissions VALUES("32","2");
INSERT INTO role_has_permissions VALUES("33","1");
INSERT INTO role_has_permissions VALUES("33","2");
INSERT INTO role_has_permissions VALUES("34","1");
INSERT INTO role_has_permissions VALUES("35","1");
INSERT INTO role_has_permissions VALUES("35","2");
INSERT INTO role_has_permissions VALUES("36","1");
INSERT INTO role_has_permissions VALUES("36","2");
INSERT INTO role_has_permissions VALUES("37","1");
INSERT INTO role_has_permissions VALUES("37","2");
INSERT INTO role_has_permissions VALUES("38","1");
INSERT INTO role_has_permissions VALUES("38","2");
INSERT INTO role_has_permissions VALUES("39","1");
INSERT INTO role_has_permissions VALUES("39","2");
INSERT INTO role_has_permissions VALUES("40","1");
INSERT INTO role_has_permissions VALUES("40","2");
INSERT INTO role_has_permissions VALUES("41","1");
INSERT INTO role_has_permissions VALUES("41","2");
INSERT INTO role_has_permissions VALUES("42","1");
INSERT INTO role_has_permissions VALUES("42","2");
INSERT INTO role_has_permissions VALUES("43","1");
INSERT INTO role_has_permissions VALUES("43","2");
INSERT INTO role_has_permissions VALUES("44","1");
INSERT INTO role_has_permissions VALUES("44","2");
INSERT INTO role_has_permissions VALUES("45","1");
INSERT INTO role_has_permissions VALUES("45","2");
INSERT INTO role_has_permissions VALUES("46","1");
INSERT INTO role_has_permissions VALUES("46","2");
INSERT INTO role_has_permissions VALUES("47","1");
INSERT INTO role_has_permissions VALUES("47","2");
INSERT INTO role_has_permissions VALUES("48","1");
INSERT INTO role_has_permissions VALUES("48","2");
INSERT INTO role_has_permissions VALUES("49","1");
INSERT INTO role_has_permissions VALUES("49","2");
INSERT INTO role_has_permissions VALUES("50","1");
INSERT INTO role_has_permissions VALUES("50","2");
INSERT INTO role_has_permissions VALUES("51","1");
INSERT INTO role_has_permissions VALUES("51","2");
INSERT INTO role_has_permissions VALUES("52","1");
INSERT INTO role_has_permissions VALUES("52","2");
INSERT INTO role_has_permissions VALUES("53","1");
INSERT INTO role_has_permissions VALUES("53","2");
INSERT INTO role_has_permissions VALUES("54","1");
INSERT INTO role_has_permissions VALUES("54","2");
INSERT INTO role_has_permissions VALUES("55","1");
INSERT INTO role_has_permissions VALUES("55","2");
INSERT INTO role_has_permissions VALUES("55","4");
INSERT INTO role_has_permissions VALUES("56","1");
INSERT INTO role_has_permissions VALUES("56","2");
INSERT INTO role_has_permissions VALUES("56","4");
INSERT INTO role_has_permissions VALUES("57","1");
INSERT INTO role_has_permissions VALUES("57","2");
INSERT INTO role_has_permissions VALUES("57","4");
INSERT INTO role_has_permissions VALUES("58","1");
INSERT INTO role_has_permissions VALUES("58","2");
INSERT INTO role_has_permissions VALUES("59","1");
INSERT INTO role_has_permissions VALUES("59","2");
INSERT INTO role_has_permissions VALUES("60","1");
INSERT INTO role_has_permissions VALUES("60","2");
INSERT INTO role_has_permissions VALUES("61","1");
INSERT INTO role_has_permissions VALUES("61","2");
INSERT INTO role_has_permissions VALUES("62","1");
INSERT INTO role_has_permissions VALUES("62","2");
INSERT INTO role_has_permissions VALUES("63","1");
INSERT INTO role_has_permissions VALUES("63","2");
INSERT INTO role_has_permissions VALUES("63","4");
INSERT INTO role_has_permissions VALUES("64","1");
INSERT INTO role_has_permissions VALUES("64","2");
INSERT INTO role_has_permissions VALUES("64","4");
INSERT INTO role_has_permissions VALUES("65","1");
INSERT INTO role_has_permissions VALUES("65","2");
INSERT INTO role_has_permissions VALUES("66","1");
INSERT INTO role_has_permissions VALUES("66","2");
INSERT INTO role_has_permissions VALUES("67","1");
INSERT INTO role_has_permissions VALUES("67","2");
INSERT INTO role_has_permissions VALUES("68","1");
INSERT INTO role_has_permissions VALUES("68","2");
INSERT INTO role_has_permissions VALUES("69","1");
INSERT INTO role_has_permissions VALUES("69","2");
INSERT INTO role_has_permissions VALUES("70","1");
INSERT INTO role_has_permissions VALUES("70","2");
INSERT INTO role_has_permissions VALUES("71","1");
INSERT INTO role_has_permissions VALUES("71","2");
INSERT INTO role_has_permissions VALUES("72","1");
INSERT INTO role_has_permissions VALUES("72","2");
INSERT INTO role_has_permissions VALUES("73","1");
INSERT INTO role_has_permissions VALUES("73","2");
INSERT INTO role_has_permissions VALUES("74","1");
INSERT INTO role_has_permissions VALUES("74","2");
INSERT INTO role_has_permissions VALUES("75","1");
INSERT INTO role_has_permissions VALUES("75","2");
INSERT INTO role_has_permissions VALUES("76","1");
INSERT INTO role_has_permissions VALUES("76","2");
INSERT INTO role_has_permissions VALUES("77","1");
INSERT INTO role_has_permissions VALUES("77","2");
INSERT INTO role_has_permissions VALUES("78","1");
INSERT INTO role_has_permissions VALUES("78","2");
INSERT INTO role_has_permissions VALUES("79","1");
INSERT INTO role_has_permissions VALUES("79","2");
INSERT INTO role_has_permissions VALUES("80","1");
INSERT INTO role_has_permissions VALUES("80","2");
INSERT INTO role_has_permissions VALUES("81","1");
INSERT INTO role_has_permissions VALUES("81","2");
INSERT INTO role_has_permissions VALUES("82","1");
INSERT INTO role_has_permissions VALUES("82","2");
INSERT INTO role_has_permissions VALUES("83","1");
INSERT INTO role_has_permissions VALUES("83","2");
INSERT INTO role_has_permissions VALUES("84","1");
INSERT INTO role_has_permissions VALUES("84","2");
INSERT INTO role_has_permissions VALUES("85","1");
INSERT INTO role_has_permissions VALUES("85","2");
INSERT INTO role_has_permissions VALUES("86","1");
INSERT INTO role_has_permissions VALUES("86","2");
INSERT INTO role_has_permissions VALUES("87","1");
INSERT INTO role_has_permissions VALUES("87","2");
INSERT INTO role_has_permissions VALUES("88","1");
INSERT INTO role_has_permissions VALUES("88","2");
INSERT INTO role_has_permissions VALUES("89","1");
INSERT INTO role_has_permissions VALUES("89","2");
INSERT INTO role_has_permissions VALUES("90","1");
INSERT INTO role_has_permissions VALUES("90","2");
INSERT INTO role_has_permissions VALUES("91","1");
INSERT INTO role_has_permissions VALUES("91","2");
INSERT INTO role_has_permissions VALUES("92","1");
INSERT INTO role_has_permissions VALUES("92","2");
INSERT INTO role_has_permissions VALUES("93","1");
INSERT INTO role_has_permissions VALUES("93","2");
INSERT INTO role_has_permissions VALUES("94","1");
INSERT INTO role_has_permissions VALUES("94","2");
INSERT INTO role_has_permissions VALUES("95","1");
INSERT INTO role_has_permissions VALUES("95","2");
INSERT INTO role_has_permissions VALUES("96","1");
INSERT INTO role_has_permissions VALUES("96","2");
INSERT INTO role_has_permissions VALUES("97","1");
INSERT INTO role_has_permissions VALUES("97","2");
INSERT INTO role_has_permissions VALUES("98","1");
INSERT INTO role_has_permissions VALUES("98","2");
INSERT INTO role_has_permissions VALUES("99","1");
INSERT INTO role_has_permissions VALUES("99","2");
INSERT INTO role_has_permissions VALUES("100","1");
INSERT INTO role_has_permissions VALUES("100","2");
INSERT INTO role_has_permissions VALUES("101","1");
INSERT INTO role_has_permissions VALUES("101","2");
INSERT INTO role_has_permissions VALUES("102","1");
INSERT INTO role_has_permissions VALUES("102","2");
INSERT INTO role_has_permissions VALUES("103","1");
INSERT INTO role_has_permissions VALUES("103","2");
INSERT INTO role_has_permissions VALUES("104","1");
INSERT INTO role_has_permissions VALUES("104","2");



CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO roles VALUES("1","Admin","admin dapat mengakses semua data...","web","1","2018-06-02 06:46:44","2018-06-03 06:13:05");
INSERT INTO roles VALUES("2","Owner","Pemilik toko...","web","1","2018-10-22 09:38:13","2018-10-22 09:38:13");
INSERT INTO roles VALUES("4","Staff","staf memiliki akses khusus ...","web","1","2018-06-02 07:05:27","2018-06-02 07:05:27");
INSERT INTO roles VALUES("5","Customer","","web","1","2020-11-05 13:43:16","2020-11-15 07:24:15");



CREATE TABLE `sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `cash_register_id` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `biller_id` int(11) DEFAULT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_discount` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_price` double NOT NULL,
  `grand_total` double NOT NULL,
  `order_tax_rate` double DEFAULT NULL,
  `order_tax` double DEFAULT NULL,
  `order_discount` double DEFAULT NULL,
  `coupon_id` int(11) DEFAULT NULL,
  `coupon_discount` double DEFAULT NULL,
  `shipping_cost` double DEFAULT NULL,
  `sale_status` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `sale_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=280 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO sales VALUES("1","sr-20180808-043622","1","","1","1","1","2","3","10","15.65","350","380","10","30","50","","","50","1","2","","0","ukgjkgjkgkj","gjkgjkgkujg","2018-08-08 17:36:22","2018-10-06 16:25:29");
INSERT INTO sales VALUES("2","sr-20180809-055453","1","","3","1","1","3","63","0","469.3","5103","5503","0","0","100","","","500","1","2","","2200","","","2018-08-09 06:54:53","2018-08-09 06:56:35");
INSERT INTO sales VALUES("3","posr-20180809-063214","1","","2","2","2","3","26","0","0","897","897","0","0","","","","","1","4","","897","","","2018-08-09 07:32:14","2018-08-09 07:32:14");
INSERT INTO sales VALUES("4","sr-20180825-034836","1","","1","1","1","1","2","0","80","880","880","0","0","","","","","1","2","","300","","","2018-08-25 04:48:36","2018-09-22 09:56:03");
INSERT INTO sales VALUES("6","sr-20180826-094836","1","","2","1","2","1","1","0","0","18.9","20","0","0","0","","","1.1","1","4","","20","","","2018-08-26 10:48:36","2018-08-26 12:48:05");
INSERT INTO sales VALUES("7","sr-20180827-073545","1","","1","1","1","1","2","0","80","880","880","0","0","","","","","1","4","","880","","","2018-08-27 08:35:45","2018-08-27 08:35:45");
INSERT INTO sales VALUES("8","posr-20180902-053954","1","","1","1","2","1","2","0","288","3168","3529.8","10","311.8","50","","","100","1","4","","3529.8","good customer","good customer","2018-09-02 06:39:54","2018-09-02 06:39:54");
INSERT INTO sales VALUES("9","posr-20180903-033314","1","","1","2","1","1","10","0","0","20","20","0","0","","","","","1","4","","20","","","2018-09-03 04:33:14","2018-09-03 04:33:14");
INSERT INTO sales VALUES("10","posr-20180903-050138","1","","11","2","1","1","1","0","0","250","250","0","0","","","","","1","2","","200","","","2018-09-03 06:01:38","2018-09-10 04:40:28");
INSERT INTO sales VALUES("11","posr-20180903-100821","1","","11","2","1","1","5","0","500","5500","5500","0","0","","","","","1","4","","5500","","","2018-09-03 11:08:21","2018-09-03 11:08:21");
INSERT INTO sales VALUES("12","sr-20180903-101026","1","","3","1","5","1","10","0","1050","11550","11550","0","0","","","","","1","2","","0","","","2018-09-03 11:10:26","2018-09-22 09:55:14");
INSERT INTO sales VALUES("29","sr-20180909-093841","1","","1","1","1","1","1","0","0","120","132","10","12","","","","","1","2","","0","","","2018-09-09 10:38:41","2018-10-06 09:36:52");
INSERT INTO sales VALUES("30","posr-20180910-045706","1","","11","2","1","1","1","0","40","440","440","0","0","0","","","0","1","2","","120","","","2018-09-10 05:57:06","2018-10-06 07:53:20");
INSERT INTO sales VALUES("31","posr-20180926-092059","1","","11","2","1","2","2","0","55.65","560","560","0","0","0","","","0","1","4","","560","","","2018-09-26 10:20:59","2018-09-26 10:21:25");
INSERT INTO sales VALUES("32","posr-20181004-095547","1","","11","2","1","1","1","0","40","440","440","0","0","","","","","1","2","","","","","2018-10-04 10:55:47","2018-10-04 10:55:47");
INSERT INTO sales VALUES("33","posr-20181004-100022","1","","11","2","1","1","1","0","40","440","440","0","0","","","","","1","2","","","","","2018-10-04 11:00:22","2018-10-04 11:00:22");
INSERT INTO sales VALUES("37","sr-20181007-064605","1","","1","1","1","1","1","0","0","250","250","0","0","","","","","1","2","","0","","","2018-10-07 07:46:05","2018-10-07 07:46:28");
INSERT INTO sales VALUES("38","posr-20181007-064719","1","","11","2","1","1","1","0","40","440","440","0","0","","","","","1","2","","0","","","2018-10-07 07:47:19","2018-10-07 10:17:02");
INSERT INTO sales VALUES("40","posr-20181007-071312","1","","11","2","1","1","1","0","40","440","440","0","0","","","","","1","2","","0","","","2018-10-07 08:13:12","2018-10-07 10:17:39");
INSERT INTO sales VALUES("41","posr-20181010-041621","1","","1","2","1","2","2","0","40","461","461","0","0","","","","","1","4","","461","","","2018-10-10 05:16:21","2018-10-10 05:16:21");
INSERT INTO sales VALUES("42","posr-20181010-053450","1","","1","2","1","1","1","0","40","440","440","0","0","","","","","1","4","","440","","","2018-10-10 06:34:50","2018-10-10 06:34:50");
INSERT INTO sales VALUES("43","sr-20181016-033434","1","","1","1","1","1","1","0","40","440","440","0","0","","","","","1","2","","0","sss
sss
s","","2018-10-16 04:34:34","2018-10-23 07:21:27");
INSERT INTO sales VALUES("55","posr-20181021-065334","1","","11","2","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2018-10-21 07:53:34","2018-10-21 07:53:34");
INSERT INTO sales VALUES("57","posr-20181021-082612","1","","11","2","1","2","3","0","40","482","575.2","10","43.2","50","","","100","1","4","","575.2","","","2018-10-21 09:26:12","2018-10-21 09:26:12");
INSERT INTO sales VALUES("58","posr-20181022-032723","1","","11","2","1","2","2","0","100","1220","1220","0","0","","","","","1","4","","1220","","","2018-10-22 16:27:23","2018-10-22 16:27:23");
INSERT INTO sales VALUES("73","posr-20181023-071543","11","","11","1","5","2","5","0","500","5500","5500","0","0","","","","","1","4","","5500","","","2018-10-23 08:15:43","2018-10-23 08:15:43");
INSERT INTO sales VALUES("74","posr-20181023-071644","1","","11","2","1","3","3","0","200","2320","2320","0","0","","","","","1","4","","2320","","","2018-10-23 08:16:44","2018-10-23 08:16:44");
INSERT INTO sales VALUES("75","posr-20181101-050027","1","","11","2","1","5","12","0","626.96","6980","7678","10","698","","","","","1","4","","7678","","","2018-11-01 06:00:27","2018-11-01 06:00:27");
INSERT INTO sales VALUES("76","posr-20181101-050126","1","","11","2","1","3","6","0","100","1434","1424","0","0","10","","","0","1","4","","1424","","","2018-11-01 06:01:26","2018-11-08 10:44:51");
INSERT INTO sales VALUES("79","posr-20181105-091516","1","","11","2","1","7","52","0","1069.57","14454","14454","0","0","","","","","1","4","","14454","","","2018-11-05 10:15:16","2018-11-05 10:15:16");
INSERT INTO sales VALUES("80","posr-20181105-091958","1","","11","2","1","3","8","0","191.3","2500","2500","0","0","","","","","1","4","","2500","","","2018-11-05 10:19:58","2018-11-05 10:19:58");
INSERT INTO sales VALUES("86","posr-20181105-095948","1","","11","2","1","1","1","0","100","1100","1100","0","0","","","","","1","4","","1100","","","2018-11-05 10:59:48","2018-11-05 10:59:48");
INSERT INTO sales VALUES("88","posr-20181105-100258","1","","11","2","1","1","1","0","100","1100","1100","0","0","","","","","1","4","","1100","","","2018-11-05 11:02:58","2018-11-05 11:02:58");
INSERT INTO sales VALUES("94","posr-20181126-020534","1","","11","2","1","1","1","0","15.65","120","120","0","0","","","","","1","4","","120","","","2018-11-26 15:05:34","2018-11-26 15:05:34");
INSERT INTO sales VALUES("95","posr-20181127-093608","1","","11","2","1","1","3","0","0","360","360","0","0","","","","","1","2","","","","","2018-11-27 10:36:08","2018-11-27 10:36:08");
INSERT INTO sales VALUES("96","posr-20181128-071509","1","","11","2","1","1","1","0","15.65","120","132","10","12","","","","","1","4","","132","","","2018-11-28 08:15:09","2018-11-28 08:15:09");
INSERT INTO sales VALUES("97","posr-20181201-060518","1","","11","2","1","2","3","0","31.3","262","262","0","0","","","","","1","2","","200","","","2018-12-01 07:05:18","2018-12-04 07:21:05");
INSERT INTO sales VALUES("98","posr-20181205-053558","1","","11","2","1","2","4","0","0","800","800","0","0","","","","","1","4","","800","","","2018-12-05 06:35:58","2018-12-05 06:35:58");
INSERT INTO sales VALUES("99","posr-20181205-053719","1","","11","1","1","2","4","0","0","800","800","0","0","","","","","1","4","","800","","","2018-12-05 06:37:19","2018-12-05 06:37:19");
INSERT INTO sales VALUES("101","posr-20181208-062026","1","","11","2","1","1","1","0","0","100","100","0","0","","","","","1","4","","100","","","2018-12-08 07:20:26","2018-12-08 07:20:26");
INSERT INTO sales VALUES("103","posr-20181224-045832","1","","11","2","1","1","1","0","15.65","120","120","0","0","","","","","1","4","","120","","","2018-12-24 05:58:32","2018-12-24 05:58:32");
INSERT INTO sales VALUES("104","sr-20181224-091527","1","","1","1","2","2","6","0","0","2508","2518","0","0","0","","","10","1","2","","","","","2018-12-24 10:15:27","2018-12-25 04:55:23");
INSERT INTO sales VALUES("105","posr-20190101-054538","1","","1","2","1","1","1","0","0","21","21","0","0","","","","","1","4","","21","","","2019-01-01 06:45:38","2019-01-01 06:45:38");
INSERT INTO sales VALUES("106","posr-20190101-091040","1","","11","2","1","3","5","0","15.65","860","860","0","0","","","","","1","4","","860","","","2019-01-01 10:10:40","2019-01-01 10:10:40");
INSERT INTO sales VALUES("107","posr-20190103-065626","1","","11","2","1","6","10","0","395.65","5040","5040","0","0","","","","","1","4","","5040","","","2019-01-03 07:56:26","2019-01-03 07:56:26");
INSERT INTO sales VALUES("108","posr-20190120-035824","1","","11","2","1","1","1","0","15.65","120","120","0","0","","","","","1","4","","120","","","2019-01-20 16:58:24","2019-01-20 16:58:24");
INSERT INTO sales VALUES("109","posr-20190129-101443","9","","11","1","5","2","2","0","40","540","540","0","0","","","","","1","4","","540","","","2019-01-29 11:14:43","2019-01-29 11:14:43");
INSERT INTO sales VALUES("110","posr-20190129-115041","9","","11","1","5","2","3","0","100","1700","1700","0","0","","","","","1","4","","1700","","","2019-01-29 12:50:41","2019-01-29 12:50:41");
INSERT INTO sales VALUES("111","posr-20190131-110839","9","","11","1","5","2","2","0","0","271","271","0","0","","","","","1","4","","271","","","2019-01-31 12:08:39","2019-01-31 12:08:39");
INSERT INTO sales VALUES("112","posr-20190202-104045","1","","11","2","1","1","1","0","40","440","440","0","0","","","","","1","4","","440","","","2019-02-02 11:40:45","2019-02-02 11:40:45");
INSERT INTO sales VALUES("113","posr-20190202-114117","1","","11","2","1","2","2","0","0","350","350","0","0","","","","","1","4","","350","","","2019-02-02 12:41:17","2019-02-02 12:41:17");
INSERT INTO sales VALUES("114","posr-20190205-030445","1","","11","2","1","1","1","0","40","440","440","0","0","","","","","1","4","","440","","","2019-02-05 16:04:45","2019-02-05 16:04:45");
INSERT INTO sales VALUES("118","posr-20190207-111542","1","","11","2","1","1","1","0","40","440","440","0","0","","","","","3","2","","","","","2019-02-07 12:15:42","2019-02-07 12:15:42");
INSERT INTO sales VALUES("120","sr-20190207-114036","1","","1","1","2","1","1","0","40","440","440","0","0","","","","","1","2","","50","","","2019-02-07 12:40:36","2019-02-07 14:09:15");
INSERT INTO sales VALUES("121","posr-20190209-104814","1","","11","2","1","7","17","0","55.65","1272","1272","0","0","","","","","1","4","","1272","","","2019-02-09 11:48:14","2019-02-09 11:48:14");
INSERT INTO sales VALUES("123","posr-20190219-023214","1","","11","2","1","1","1","0","40","440","440","0","0","","","","","1","4","","440","","","2019-02-19 15:32:14","2019-02-19 15:32:14");
INSERT INTO sales VALUES("127","posr-20190303-104010","1","","11","2","1","3","3","0","200","2500","2500","0","0","","","","","1","4","","2500","","","2019-03-03 11:40:10","2019-03-03 11:40:10");
INSERT INTO sales VALUES("128","posr-20190404-095555","1","","11","2","1","2","2","0","55.65","560","560","0","0","","","","","1","4","","560","","","2019-04-04 10:55:55","2019-04-04 10:55:55");
INSERT INTO sales VALUES("129","posr-20190404-095937","1","","11","2","1","1","2","0","0","240","240","0","0","0","","","0","1","2","","120","","","2019-04-04 10:59:37","2019-04-11 11:50:16");
INSERT INTO sales VALUES("130","posr-20190421-122124","1","","11","2","1","3","3","0","58.78","586","586","0","0","","","","","1","4","","586","","","2019-04-21 13:21:24","2019-04-21 13:21:24");
INSERT INTO sales VALUES("131","posr-20190528-103229","1","","11","2","1","4","4","0","240","2890","2890","0","0","","","","","1","4","","2890","","","2019-05-28 11:32:29","2019-05-28 11:32:29");
INSERT INTO sales VALUES("132","posr-20190613-101637","1","","11","2","1","3","3","0","40","840","840","0","0","","","","","1","4","","840","","","2019-06-13 11:16:37","2019-06-13 11:16:37");
INSERT INTO sales VALUES("133","posr-20190613-101751","1","","11","2","1","3","4","0","200","2700","2700","0","0","","","","","1","4","","2700","","","2019-06-13 11:17:51","2019-06-13 11:17:51");
INSERT INTO sales VALUES("134","posr-20191019-033028","1","","11","2","1","4","4","0","240","2940","2940","0","0","","","","","1","4","","2940","","","2019-10-19 16:30:28","2019-10-19 16:30:28");
INSERT INTO sales VALUES("138","sr-20191031-122937","1","","1","1","1","1","1","0","0","120","120","0","0","","","","","1","1","","","","","2019-10-31 13:29:37","2019-10-31 13:29:37");
INSERT INTO sales VALUES("139","posr-20191103-114044","1","","11","2","1","2","102","0","37.57","488","488","0","0","","","","","1","4","","488","","","2019-11-03 12:40:44","2019-11-03 12:40:44");
INSERT INTO sales VALUES("144","posr-20191109-074131","1","","11","2","1","2","2","0","100","1220","1220","0","0","0","","","0","1","4","","1220","","","2019-11-09 20:41:31","2019-11-09 20:41:31");
INSERT INTO sales VALUES("147","posr-20191111-104008","1","","11","2","1","3","12","0","200","2220","2220","0","0","","","","","1","4","","2220","","","2019-11-11 11:40:08","2019-11-11 11:40:08");
INSERT INTO sales VALUES("172","posr-20191203-034631","1","","11","2","1","1","1","0","40","440","440","0","0","","","","","1","2","","","","","2019-12-03 16:46:31","2019-12-03 16:46:31");
INSERT INTO sales VALUES("173","sr-20191204-111940","1","","2","1","1","2","2","0","36","621","621","0","0","","","","","1","4","","621","","","2019-12-05 00:19:40","2019-12-05 10:27:12");
INSERT INTO sales VALUES("187","posr-20191222-104058","1","","11","2","1","1","2","0","37.57","288","288","0","0","","","","","1","4","","288","","","2019-12-22 11:40:58","2019-12-22 11:40:58");
INSERT INTO sales VALUES("190","posr-20191223-125946","1","","11","2","1","1","1","0","100","1100","1100","0","0","","","","","1","4","","1100","","","2019-12-23 13:59:46","2019-12-23 13:59:46");
INSERT INTO sales VALUES("193","posr-20200101-022028","1","","11","2","1","1","1","0","100","1100","1100","0","0","","","","","1","4","","1100","","","2020-01-01 15:20:28","2020-01-01 15:20:28");
INSERT INTO sales VALUES("194","posr-20200102-043947","1","","11","2","1","2","3","0","81.57","892","892","0","0","","","","","1","4","","892","","","2020-01-02 17:39:47","2020-01-02 17:39:47");
INSERT INTO sales VALUES("201","posr-20200203-035256","1","","11","2","1","1","1","0","0","120","120","0","0","","","","","1","4","","120","","","2020-02-03 16:52:56","2020-02-03 16:52:56");
INSERT INTO sales VALUES("202","posr-20200204-105853","1","","11","2","1","2","2","0","100","1400","1400","0","0","","","","","1","4","","1400","","","2020-02-04 23:58:53","2020-02-04 23:58:53");
INSERT INTO sales VALUES("203","posr-20200302-115414","1","","11","2","1","2","2","0","0","350","350","0","0","","","","","1","4","","350","","","2020-03-02 12:54:14","2020-03-02 12:54:14");
INSERT INTO sales VALUES("204","posr-20200302-115741","1","","11","2","1","1","20","0","0","40","40","0","0","","","","","1","4","","40","","","2020-03-02 12:57:41","2020-03-02 12:57:41");
INSERT INTO sales VALUES("205","posr-20200311-044641","1","","11","2","1","1","1","0","40","440","352","0","0","","1","88","","1","4","","352","","","2020-03-11 17:46:42","2020-03-11 17:46:42");
INSERT INTO sales VALUES("206","sr-20200311-045230","1","","1","1","1","1","1","0","0","120","120","0","0","0","","","0","1","2","","","","","2020-03-11 17:52:30","2020-03-11 17:54:04");
INSERT INTO sales VALUES("207","posr-20200406-074024","1","","11","2","1","3","4","0","18.78","644","644","0","0","0","","","0","1","4","","644","","","2020-04-06 20:40:24","2020-04-06 20:42:01");
INSERT INTO sales VALUES("208","posr-20200506-105950","1","","11","2","1","2","2","0","140","1540","1540","0","0","","","","","1","4","","1540","","","2020-05-06 23:59:50","2020-05-06 23:59:50");
INSERT INTO sales VALUES("209","posr-20200609-124248","1","","11","2","1","2","2","0","100","1220","1220","0","0","","","","","1","4","","1220","","","2020-06-09 13:42:48","2020-06-09 13:42:48");
INSERT INTO sales VALUES("212","posr-20200703-063914","1","","11","2","1","3","3","0","235","2585","2585","0","0","","","","","1","4","","2585","","","2020-07-03 19:39:14","2020-07-03 19:39:14");
INSERT INTO sales VALUES("213","posr-20200712-095153","1","","11","2","1","1","1","0","0","13","13","0","0","","","","","1","4","","13","","","2020-07-12 22:51:53","2020-07-12 22:51:53");
INSERT INTO sales VALUES("214","posr-20200714-115341","1","","11","2","1","1","1","0","0","250","309.5","10","24.5","5","","","40","3","2","","","","","2020-07-14 12:53:41","2020-07-14 12:53:41");
INSERT INTO sales VALUES("217","posr-20200727-083808","1","","11","2","1","1","1","0","35","385","385","0","0","","","","","1","4","","385","","","2020-07-27 21:38:08","2020-07-27 21:38:08");
INSERT INTO sales VALUES("218","posr-20200727-084024","1","","11","2","1","1","1","0","35","385","385","0","0","","","","","1","4","","385","","","2020-07-27 21:40:24","2020-07-27 21:40:24");
INSERT INTO sales VALUES("219","posr-20200727-084644","1","","11","2","1","1","1","0","35","385","385","0","0","","","","","1","4","","385","","","2020-07-27 21:46:45","2020-07-27 21:46:45");
INSERT INTO sales VALUES("220","posr-20200812-062804","1","","11","2","1","3","6","0","0","760","760","0","0","","","","","1","4","","760","","","2020-08-12 19:28:04","2020-08-12 19:28:04");
INSERT INTO sales VALUES("221","posr-20200812-063035","1","","11","2","1","1","1","0","100","1100","1100","0","0","","","","","1","4","","1100","","","2020-08-12 19:30:35","2020-08-12 19:30:35");
INSERT INTO sales VALUES("222","posr-20200816-100424","1","","11","2","1","1","2","0","3000","23000","23000","0","0","","","","","1","4","","23000","","","2020-08-16 23:04:24","2020-08-16 23:04:24");
INSERT INTO sales VALUES("223","posr-20200816-100523","1","","11","2","1","1","1","0","40","440","440","0","0","","","","","1","4","","440","","","2020-08-16 23:05:23","2020-08-16 23:07:35");
INSERT INTO sales VALUES("224","sr-20200826-080139","1","","1","1","1","1","3","30","117","1287","1287","0","0","","","","","1","1","","","","","2020-08-26 21:01:39","2020-08-26 21:01:39");
INSERT INTO sales VALUES("230","posr-20201017-092852","9","2","11","1","5","1","1","0","0","250","250","0","0","","","","","1","2","","350","","","2020-10-17 22:28:52","2020-10-18 11:51:38");
INSERT INTO sales VALUES("231","sr-20201018-111333","9","2","1","1","5","1","1","0","40","440","440","0","0","","","","","1","2","","250","","","2020-10-18 12:13:33","2020-10-18 12:17:24");
INSERT INTO sales VALUES("232","posr-20201022-013014","9","2","11","1","5","1","1","0","0","100","100","0","0","","","","","1","4","","100","","","2020-10-22 14:30:14","2020-10-22 14:30:14");
INSERT INTO sales VALUES("233","posr-20201022-015604","1","3","11","1","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-10-22 14:56:04","2020-10-22 14:56:04");
INSERT INTO sales VALUES("234","posr-20201024-070506","1","4","11","2","1","1","1","0","1500","11500","11500","0","0","","","","","1","4","","11500","","","2020-10-24 08:05:06","2020-10-24 08:05:06");
INSERT INTO sales VALUES("235","posr-20201024-070751","1","4","11","2","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-10-24 08:07:51","2020-10-24 08:07:51");
INSERT INTO sales VALUES("237","posr-20201024-034601","1","4","11","2","1","3","9","0","7900","61900","61900","0","0","","","","","1","4","","61900","","","2020-10-24 16:46:01","2020-10-24 16:46:01");
INSERT INTO sales VALUES("239","posr-20201027-054002","1","3","11","1","1","1","1","0","0","2","2","0","0","","","","","1","4","","2","","","2020-10-27 06:40:02","2020-10-27 06:40:02");
INSERT INTO sales VALUES("240","posr-20201027-054206","1","3","11","1","1","1","2","0","0","6","6","0","0","","","","","1","4","","6","","","2020-10-27 06:42:06","2020-10-27 06:42:06");
INSERT INTO sales VALUES("241","posr-20201027-063200","1","4","11","2","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-10-27 07:32:00","2020-10-27 07:32:00");
INSERT INTO sales VALUES("242","posr-20201029-073030","1","4","11","2","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-10-29 08:30:30","2020-10-29 08:30:30");
INSERT INTO sales VALUES("243","posr-20201101-072112","1","4","11","2","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-11-01 08:21:12","2020-11-01 08:21:12");
INSERT INTO sales VALUES("245","posr-20201101-074223","1","3","11","1","5","2","3","0","80","1130","1130","","0","0","","","0","1","4","","1130","","","2020-11-01 08:42:23","2020-11-01 08:42:23");
INSERT INTO sales VALUES("246","posr-20201101-075017","1","4","11","2","1","1","1","0","40","440","440","0","0","0","","","0","1","4","","440","ssss
ssas","hhhh
kkkk","2020-11-01 08:50:17","2020-11-02 17:39:17");
INSERT INTO sales VALUES("250","posr-20201106-013041","1","4","11","2","1","1","1","0","34.4","378.4","378.4","0","0","","","","","1","4","","378.4","","","2020-11-06 14:30:41","2020-11-06 14:30:41");
INSERT INTO sales VALUES("251","posr-20201109-011524","1","4","19","2","1","2","2","0","34.4","610.6","610.6","0","0","","","","","1","2","","500","","","2020-11-09 14:15:24","2020-11-09 14:15:24");
INSERT INTO sales VALUES("252","posr-20201111-055858","1","3","11","1","1","1","1","0","0","229.5","229.5","0","0","","","","","1","4","","229.5","","","2020-11-11 06:58:58","2020-11-11 06:58:58");
INSERT INTO sales VALUES("253","posr-20201114-064736","1","4","11","2","1","3","3","0","1275","10242.5","10242.5","0","0","","","","","1","4","","10242.5","","","2020-11-14 07:47:36","2020-11-14 07:47:36");
INSERT INTO sales VALUES("256","posr-20201117-064748","1","4","11","2","1","2","2","0","65","715","715","0","0","","","","","1","4","","715","","","2020-11-17 07:47:48","2020-11-17 07:47:48");
INSERT INTO sales VALUES("257","posr-20201117-070919","1","4","11","2","1","1","1","0","0","250","250","0","0","","","","","1","4","","250","","","2020-11-17 08:09:19","2020-11-17 08:09:19");
INSERT INTO sales VALUES("258","posr-20201118-065239","1","4","11","2","1","1","3","0","4500","34500","27200","0","0","600","1","6800","100","1","4","","27200","","","2020-11-18 07:52:39","2020-11-18 07:52:39");
INSERT INTO sales VALUES("259","posr-20211207-072513","1","3","11","1","1","1","1","0","0","2700000","2700000","0","0","","","","","1","4","","2700000","","","2021-12-07 14:25:13","2021-12-07 14:25:13");
INSERT INTO sales VALUES("260","posr-20211207-072626","1","4","11","2","1","1","2","0","1581600","17397600","17397600","0","0","","","","","1","4","","17397600","","","2021-12-07 14:26:26","2021-12-07 14:26:26");
INSERT INTO sales VALUES("261","posr-20211207-081925","1","4","11","2","1","1","1","0","0","8000","8000","0","0","","","","","1","4","","8000","","","2021-12-07 15:19:25","2021-12-07 15:19:25");
INSERT INTO sales VALUES("262","posr-20211207-081956","1","4","11","2","1","1","1","0","0","8000","8000","0","0","","","","","1","4","","8000","","","2021-12-07 15:19:56","2021-12-07 15:19:56");
INSERT INTO sales VALUES("263","posr-20211207-082031","1","4","25","2","1","1","2","0","918000","10098000","10098000","0","0","","","","","1","2","","10097000","","","2021-12-07 15:20:31","2021-12-07 15:20:31");
INSERT INTO sales VALUES("264","posr-20211207-082326","1","4","3","2","8","1","1","0","0","8400","8400","0","0","","","","","1","4","","8400","","","2021-12-07 15:23:26","2021-12-07 15:23:26");
INSERT INTO sales VALUES("265","posr-20211207-082439","1","3","11","1","1","1","2","0","0","5400000","5400000","0","0","","","","","1","4","","5400000","","","2021-12-07 15:24:39","2021-12-07 15:24:39");
INSERT INTO sales VALUES("266","posr-20211207-082538","1","4","11","2","1","1","2","0","0","70000","70000","0","0","","","","","1","4","","70000","","","2021-12-07 15:25:38","2021-12-07 15:25:38");
INSERT INTO sales VALUES("267","posr-20211207-082556","1","4","3","2","2","1","1","0","0","100000","100000","0","0","","","","","1","4","","100000","","","2021-12-07 15:25:56","2021-12-07 15:25:56");
INSERT INTO sales VALUES("268","sr-20211207-083032","1","4","24","2","1","1","1","0","0","35000","34999","0","0","1","","","","1","1","","","","","2021-12-07 15:30:32","2021-12-07 15:30:32");
INSERT INTO sales VALUES("269","posr-20211207-085400","1","4","24","2","9","1","1","0","0","8000","8000","0","0","","","","","1","4","","8000","","","2021-12-07 15:54:00","2021-12-07 15:54:00");
INSERT INTO sales VALUES("270","posr-20211208-032523","1","4","11","2","1","1","1","0","0","8000","8000","0","0","","","","","1","4","","8000","","","2021-12-08 10:25:23","2021-12-08 10:25:23");
INSERT INTO sales VALUES("271","posr-20211208-032737","1","4","11","2","1","1","1","0","0","8000","7800","0","0","","2","200","","1","4","","7800","","","2021-12-08 10:27:37","2021-12-08 10:27:37");
INSERT INTO sales VALUES("272","posr-20211208-032802","1","4","11","2","1","1","1","0","0","8000","8000","0","0","","","","","1","4","","8000","","","2021-12-08 10:28:02","2021-12-08 10:28:02");
INSERT INTO sales VALUES("273","posr-20211208-032910","1","4","11","2","1","1","1","0","0","8000","8000","0","0","","","","","1","4","","8000","","","2021-12-08 10:29:10","2021-12-08 10:29:10");
INSERT INTO sales VALUES("274","posr-20211208-032958","1","4","11","2","1","1","1","0","0","8000","8000","0","0","","","","","1","4","","8000","","","2021-12-08 10:29:58","2021-12-08 10:29:58");
INSERT INTO sales VALUES("275","posr-20211208-033037","1","4","11","2","1","1","1","0","0","8000","8000","0","0","","","","","1","4","","8000","","","2021-12-08 10:30:37","2021-12-08 10:30:37");
INSERT INTO sales VALUES("276","posr-20211208-033257","1","4","11","2","1","1","1","0","0","8000","9800","0","0","","2","200","2000","1","4","","9800","","","2021-12-08 10:32:57","2021-12-08 10:32:57");
INSERT INTO sales VALUES("277","sr-20211208-033601","1","4","24","2","1","1","1","0","0","8000","5000","0","0","5000","","","2000","1","4","","5000","","","2021-12-08 10:36:01","2021-12-08 10:36:01");
INSERT INTO sales VALUES("278","posr-20211208-035501","1","","28","7","10","1","1","0","0","2700000","2700000","0","0","","","","","1","4","","2700000","","","2021-12-08 10:55:01","2021-12-08 10:55:01");
INSERT INTO sales VALUES("279","posr-20211208-035751","1","4","11","2","","1","1","0","0","8000","8000","0","0","","","","","1","4","","8000","","","2021-12-08 10:57:51","2021-12-08 10:57:51");



CREATE TABLE `stock_counts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_adjusted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO stock_counts VALUES("1","scr-20190228-124939","2","","","1","full","20190228-124939.csv","","","0","2019-02-28 13:49:39","2019-02-28 13:49:39");



CREATE TABLE `suppliers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO suppliers VALUES("1","rizky","globaltouch.jpg","global touch","","rizky@globaltouch.com","231231","fsdfs","fsdfs","","","bd","1","2018-05-13 05:06:34","2019-12-21 17:58:47");
INSERT INTO suppliers VALUES("2","test","lion.jpg","lion","","lion@gmail.com","242","gfdg","fgd","","","","0","2018-05-30 06:59:41","2018-05-30 07:00:06");
INSERT INTO suppliers VALUES("3","ismail","","techbd","","ismail@test.com","23123123","mohammadpur","dhaka","","","bangladesh","1","2018-07-20 11:34:17","2018-07-20 11:34:17");
INSERT INTO suppliers VALUES("4","modon","mogaFruit.jpg","mogaFruit","","modon@gmail.com","32321","nasirabad","chittagong","","","bd","0","2018-09-01 11:30:07","2018-09-01 11:37:20");
INSERT INTO suppliers VALUES("5","sadman","","anda boda","dsa","asd@dsa.com","3212313","dadas","sdad","Other","1312","Australia","0","2020-06-22 16:48:33","2020-06-22 16:48:52");
INSERT INTO suppliers VALUES("6","internP","","ewffw","","sas@gmail","32","ascas","dasdwe","","","","0","2021-12-07 15:03:43","2021-12-08 10:42:50");
INSERT INTO suppliers VALUES("7","internPemasok","","intern","","internPemasok@gbjy","0851","malang","malang","","","","1","2021-12-08 10:45:26","2021-12-08 10:45:26");
INSERT INTO suppliers VALUES("8","trgertg","","ethth","","ertgetg@fgb","352","bh","ethyt","","","","0","2021-12-08 10:46:27","2021-12-08 10:46:37");



CREATE TABLE `taxes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO taxes VALUES("1","vat@10","10","1","2018-05-12 16:58:30","2019-03-02 18:46:10");
INSERT INTO taxes VALUES("2","vat@15","15","1","2018-05-12 16:58:43","2018-05-28 06:35:05");
INSERT INTO taxes VALUES("3","test","6","0","2018-05-28 06:32:54","2018-05-28 06:34:44");
INSERT INTO taxes VALUES("4","vat 20","20","1","2018-09-01 07:58:57","2018-09-01 07:58:57");



CREATE TABLE `transfers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `from_warehouse_id` int(11) NOT NULL,
  `to_warehouse_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `total_qty` double NOT NULL,
  `total_tax` double NOT NULL,
  `total_cost` double NOT NULL,
  `shipping_cost` double DEFAULT NULL,
  `grand_total` double NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO transfers VALUES("1","tr-20180808-051710","1","1","2","1","1","100","0","100","0","100","","","2018-08-08 18:17:10","2018-12-25 05:16:55");
INSERT INTO transfers VALUES("6","tr-20191205-075504","1","1","1","2","1","1","0","2","0","2","","","2019-12-05 20:55:04","2019-12-05 21:09:42");
INSERT INTO transfers VALUES("8","tr-20200122-123058","1","1","1","2","1","10","0","1000","","1000","","","2020-01-22 13:30:58","2020-01-22 13:30:58");
INSERT INTO transfers VALUES("10","tr-20201008-012735","9","1","1","2","1","1","32","352","0","352","","","2020-10-08 14:27:35","2020-10-08 14:29:35");
INSERT INTO transfers VALUES("11","tr-20201018-061708","9","1","1","2","1","1","0","1","","1","","","2020-10-18 19:17:08","2020-10-18 19:17:08");
INSERT INTO transfers VALUES("12","tr-20201024-090146","1","1","2","1","1","10","4500","34500","","34500","","","2020-10-24 10:01:46","2020-10-24 10:01:46");



CREATE TABLE `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unit_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_unit` int(11) DEFAULT NULL,
  `operator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operation_value` double DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO units VALUES("1","pc","Piece","","*","1","1","2018-05-12 09:27:46","2018-08-18 04:41:53");
INSERT INTO units VALUES("2","dozen","dozen box","1","*","12","1","2018-05-12 16:57:05","2018-05-12 16:57:05");
INSERT INTO units VALUES("3","cartoon","cartoon box","1","*","24","1","2018-05-12 16:57:45","2020-03-11 17:36:59");
INSERT INTO units VALUES("4","m","meter","","*","1","1","2018-05-12 16:58:07","2018-05-28 06:20:57");
INSERT INTO units VALUES("6","test","test","","*","1","0","2018-05-28 06:20:20","2018-05-28 06:20:25");
INSERT INTO units VALUES("7","kg","kilogram","","*","1","1","2018-06-25 07:49:26","2018-06-25 07:49:26");
INSERT INTO units VALUES("8","20","ni33","8","*","1","0","2018-08-01 05:35:51","2018-08-01 05:40:54");
INSERT INTO units VALUES("9","gm","gram","7","/","1000","1","2018-09-01 07:06:28","2018-09-01 07:06:28");
INSERT INTO units VALUES("10","gz","goz","","*","1","0","2018-11-29 10:40:29","2019-03-02 18:53:29");



CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `biller_id` int(11) DEFAULT NULL,
  `warehouse_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO users VALUES("1","admin","admin@gmail.com","$2y$10$DWAHTfjcvwCpOCXaJg11MOhsqns03uvlwiSUOQwkHL2YYrtrXPcL6","Z4TirNTqJHxR6Z33axzzuGM5IDRP0icGcqeYlWRoc34O4STOGYTt17qXw1pF","12112","niamkvn","1","","","1","0","2018-06-02 10:24:15","2018-09-05 07:14:15");
INSERT INTO users VALUES("3","dhiman da","dhiman@gmail.com","$2y$10$Fef6vu5E67nm11hX7V5a2u1ThNCQ6n9DRCvRF9TD7stk.Pmt2R6O.","5ehQM6JIfiQfROgTbB5let0Z93vjLHS7rd9QD5RPNgOxli3xdo7fykU7vtTt","212","niamkvn","1","","","0","1","2018-06-14 05:00:31","2020-11-05 14:06:51");
INSERT INTO users VALUES("6","test","test@gmail.com","$2y$10$TDAeHcVqHyCmurki0wjLZeIl1SngKX3WLOhyTiCoZG3souQfqv.LS","KpW1gYYlOFacumklO2IcRfSsbC3KcWUZzOI37gqoqM388Xie6KdhaOHIFEYm","1234","212312","4","","","0","1","2018-06-23 10:05:33","2018-06-23 10:13:45");
INSERT INTO users VALUES("8","test","test@yahoo.com","$2y$10$hlMigidZV0j2/IPkgE/xsOSb8WM2IRlsMv.1hg1NM7kfyd6bGX3hC","","31231","","4","","","0","1","2018-06-25 05:35:49","2018-07-02 08:07:39");
INSERT INTO users VALUES("9","staff","anda@gmail.com","$2y$10$kxDbnynB6mB1e1w3pmtbSOlSxy/WwbLPY5TJpMi0Opao5ezfuQjQm","DIDsmdI5kMZfkk2n4OkOpuH8yYHs3O0aPp9xUO0zuY4TwPvylsW5H6ovgE0K","3123","","4","5","1","1","0","2018-07-02 08:08:08","2018-10-24 04:41:13");
INSERT INTO users VALUES("10","abul","abul@alpha.com","$2y$10$5zgB2OOMyNBNVAd.QOQIju5a9fhNnTqPx5H6s4oFlXhNiF6kXEsPq","x7HlttI5bM0vSKViqATaowHFJkLS3PHwfvl7iJdFl5Z1SsyUgWCVbLSgAoi0","1234","anda","1","","","0","0","2018-09-08 06:44:48","2018-09-08 06:44:48");
INSERT INTO users VALUES("11","teststaff","a@a.com","$2y$10$5KNBIIhZzvvZEQEhkHaZGu.Q8bbQNfqYvYgL5N55B8Pb4P5P/b/Li","DkHDEcCA0QLfsKPkUK0ckL0CPM6dPiJytNa0k952gyTbeAyMthW3vi7IRitp","111","aa","4","5","1","0","1","2018-10-22 09:47:56","2018-10-23 09:10:56");
INSERT INTO users VALUES("12","john","john@gmail.com","$2y$10$P/pN2J/uyTYNzQy2kRqWwuSv7P2f6GE/ykBwtHdda7yci3XsfOKWe","O0f1WJBVjT5eKYl3Js5l1ixMMtoU6kqrH7hbHDx9I1UCcD9CmiSmCBzHbQZg","10001","","4","2","2","0","1","2018-12-30 07:48:37","2019-03-06 11:59:49");
INSERT INTO users VALUES("13","jjj","test@test.com","$2y$10$/Qx3gHWYWUhlF1aPfzXaCeZA7fRzfSEyCIOnk/dcC4ejO8PsoaalG","","1213","","1","","","0","1","2019-01-03 07:08:31","2019-03-03 11:02:29");
INSERT INTO users VALUES("19","shakalaka","shakalaka@gmail.com","$2y$10$ketLWT0Ib/JXpo00eJlxoeSw.7leS8V1CUGInfbyOWT4F5.Xuo7S2","","1212","Digital image","5","","","1","0","2020-11-09 07:07:16","2020-11-09 07:07:16");
INSERT INTO users VALUES("21","modon","modon@gmail.com","$2y$10$7VpoeGMkP8QCvL5zLwFW..6MYJ5MRumDLDoX.TTQtClS561rpFHY.","","2222","modon company","5","","","1","0","2020-11-13 14:12:08","2020-11-13 14:12:08");
INSERT INTO users VALUES("22","dhiman","dhiman@gmail.com","$2y$10$3mPygsC6wwnDtw/Sg85IpuExtUhgaHx52Lwp7Rz0.FNfuFdfKVpRq","","+8801111111101","niamkvn","5","","","1","0","2020-11-15 13:14:58","2020-11-15 13:14:58");
INSERT INTO users VALUES("29","intern2","intern2@gmail.com","$2y$10$LXW8.ljngUoFy2DwIwhu/.XZV0X6f6ciiK42MssSNwiPS2FccgkCO","","0857","","4","1","1","0","1","2021-12-07 14:33:22","2021-12-08 10:41:14");
INSERT INTO users VALUES("30","intern3","inter3@gmail.com","$2y$10$mB2.FDxa4gwmmjEaQg7fPOMChihZECGjQszbCmePd7wRcvkzOKC7e","","0851","","5","","","0","1","2021-12-07 14:44:21","2021-12-07 14:48:56");
INSERT INTO users VALUES("31","internC","intern3@gmail.com","$2y$10$hwGNjAo18iCliTsCXA8rdee6M7zeLFXdzs3MXBYaVYCEMVLS2oSsu","","0857","","5","","","0","1","2021-12-07 14:51:35","2021-12-07 15:06:24");
INSERT INTO users VALUES("32","intern4","intern4@gmail.com","$2y$10$C0tkp.pHz0F8JXkxBhLXye0UsmWY8DmrdfYxh6/PMzoUxq8I2nYmG","","0851","","2","","","0","1","2021-12-07 14:58:33","2021-12-07 15:06:17");
INSERT INTO users VALUES("33","intern3","intern3@gmail.com","$2y$10$ZD1W29FcnrsRqVb1CP19feCkV3XdOnrb6Z4ACa2TG7qsG0QsiVnQq","","231","","5","","","0","1","2021-12-07 15:08:01","2021-12-08 10:41:19");
INSERT INTO users VALUES("34","intern","intern@gmail.com","$2y$10$vLf80uCBcxwhp5VL/riQRe/bezn9rPIZY1f7KQHjB8zBypVUQJPGK","","0851","","1","","","0","1","2021-12-07 16:00:35","2021-12-08 10:41:25");
INSERT INTO users VALUES("35","internStaff","internStaff@khjkd","$2y$10$As4FlNR32KXdHmSByc9Ya.cm2989nx48E1vcUMZ4B1fQrZl04JR82","","0851","","4","10","7","1","0","2021-12-08 11:12:54","2021-12-08 11:12:54");
INSERT INTO users VALUES("36","interns","intern@gmail.com","$2y$10$e0H6ii1NwIL13wmUM3.G0e1GvZcR1XZnzQwNbM.N/2bm1xI8Hj3Oq","","0851","","2","","","1","0","2021-12-08 11:35:57","2021-12-08 11:36:47");
INSERT INTO users VALUES("37","user","user@gmail.com","$2y$10$mPb8db2aTN/K8ywKE5k4DOvVHsGtC2vyzCtb3DfJZmKsqTUAoqSyW","","+628953520708","","4","","","1","0","2021-12-08 13:06:16","2021-12-08 13:06:16");
INSERT INTO users VALUES("38","ammar","ammardev@gmail.com","$2y$10$LYjf8RapLj1aMllR1ybD8.WncovNmbosvwWTdvYR.L9SzZeOZxcw.","","86723423423","","4","","","1","0","2021-12-09 17:01:22","2021-12-09 17:01:22");
INSERT INTO users VALUES("39","trial","trial@gmail.com","$2y$10$y/ilK4VyIq1yVKSjV3TwSe0g0oj/PDvz4LeCgLH0gLJQIW8FsVene","","85603432232","","4","","","1","0","2021-12-09 19:21:50","2021-12-09 19:21:50");
INSERT INTO users VALUES("40","trial2","trial2@gmail.com","$2y$10$ePT8jyJpcbX343VMlCf.y.Gb3uzcjOXUh9p6laxat.e8xUsKnZM3.","","856433243324","","4","","","1","0","2021-12-09 19:28:55","2021-12-09 19:28:55");
INSERT INTO users VALUES("41","Membership","testmembeshiplevel@gmail.com","$2y$10$rct.qUFZo7hTezn.cY9UDexaz3fbKOV8E42WZkk9xg5hypdik8a7q","","08123675212","","4","","","1","0","2021-12-11 20:05:53","2021-12-11 20:05:53");
INSERT INTO users VALUES("42","AAAA","asa@gmail.com","$2y$10$zh01kbj3qacaFdrZ/0WA0eUWMA5c8MPvXTRijSNgg36aHMVnzX/WS","","01982198718","","4","","","1","0","2021-12-15 04:06:21","2021-12-15 04:06:21");
INSERT INTO users VALUES("43","testdiscount","testdiscount@gmail.com","$2y$10$S1alqVdK3bxXHZOFBoHeQ.Ff.q7tBI1q35ym22VOmeujrvzvRu2Di","","23728372765","","4","","","1","0","2021-12-17 04:30:46","2021-12-17 04:30:46");
INSERT INTO users VALUES("44","testdsc1","testdiscount1@gmail.com","$2y$10$PLjutQYFs8sxehngA38sT.6dlSsrtrA1KT7g1cGNdOk31JgrfecJK","","2342343213","","4","","","1","0","2021-12-17 04:56:30","2021-12-17 04:56:30");
INSERT INTO users VALUES("45","Fajar Illahi","whoa07003@gmail.com","$2y$10$hu.MRayP..xlJJTiGBdUW.P4kzA15YNqCVLY/WosAsW1QzTdc.UoC","","082285297889","","4","","","1","0","2021-12-21 09:33:26","2021-12-21 09:33:26");
INSERT INTO users VALUES("46","muskarab","muskarab@gmail.com","$2y$10$IAGjdlLxI3M/9WvaD8s3xu56p9Q0nkqVbFxdR7ty2BU.9BXXpKUxi","","12313","muskarab","1","","","1","0","2022-01-16 06:13:36","2022-01-16 06:13:36");



CREATE TABLE `variants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO variants VALUES("2","Medium","2019-11-21 14:03:04","2019-11-24 15:43:52");
INSERT INTO variants VALUES("3","Small","2019-11-21 14:03:04","2019-11-24 15:43:52");
INSERT INTO variants VALUES("5","Large","2019-11-24 13:07:20","2019-11-24 15:44:56");
INSERT INTO variants VALUES("9","a","2020-05-18 23:44:14","2020-05-18 23:44:14");
INSERT INTO variants VALUES("11","b","2020-05-18 23:53:49","2020-05-18 23:53:49");
INSERT INTO variants VALUES("12","variant 1","2020-09-27 13:08:27","2020-09-27 13:08:27");
INSERT INTO variants VALUES("13","variant 2","2020-09-27 13:08:27","2020-09-27 13:08:27");
INSERT INTO variants VALUES("15","S","2020-11-16 13:09:33","2020-11-16 13:09:33");
INSERT INTO variants VALUES("16","M","2020-11-16 13:09:33","2020-11-16 13:09:33");
INSERT INTO variants VALUES("17","L","2020-11-16 13:09:33","2020-11-16 13:09:33");



CREATE TABLE `warehouses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO warehouses VALUES("1","Gudang 1","2312121","war1@lion.com","Malang, Jatim","1","2018-05-12 14:51:44","2019-03-02 22:40:17");
INSERT INTO warehouses VALUES("2","Gudang 2","1234","","Malang, Jatim","1","2018-05-12 15:09:03","2018-06-20 05:30:38");
INSERT INTO warehouses VALUES("3","test","","","dqwdeqw","0","2018-05-30 07:14:23","2018-05-30 07:14:47");
INSERT INTO warehouses VALUES("6","gudam","2121","","gazipur","0","2018-09-01 05:53:26","2018-09-01 05:54:48");
INSERT INTO warehouses VALUES("7","GudangIntern","0851","","malang","1","2021-12-08 10:50:32","2021-12-08 10:50:32");

