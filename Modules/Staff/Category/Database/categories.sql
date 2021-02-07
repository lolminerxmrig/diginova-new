--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `en_name`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'کالای دیجیتال', 'electronic devices', 'electronic-devices', 0, '2021-02-03 05:13:43', NULL),
(2, 'خودرو، ابزار و تجهیزات صنعتی', 'vehicles', 'vehicles', 0, '2021-02-03 05:14:29', NULL),
(3, 'مد و پوشاک', 'apparel', 'apparel', 0, '2021-02-03 05:15:43', NULL),
(4, 'اسباب بازی، کودک و نوزاد', 'اسباب بازی، کودک و نوزاد', 'mother-and-child', 0, '2021-02-03 05:16:46', NULL),
(5, 'خوردنی و آشامیدنی', 'food beverage', 'food-beverage', 0, '2021-02-03 05:18:05', NULL),
(6, 'زیبایی و سلامت', 'personal appliance', 'personal-appliance', 0, '2021-02-03 05:19:23', NULL),
(7, 'خانه و آشپزخانه', 'home and kitchen', 'home-and-kitchen', 0, '2021-02-03 05:20:39', NULL),
(8, 'کتاب، لوازم تحریر و هنر', 'book and media', 'book-and-media', 0, '2021-02-03 05:21:54', NULL),
(9, 'ورزش و سفر', 'sport entertainment', 'sport-entertainment', 0, '2021-02-03 05:23:13', NULL),
(10, 'موبایل', 'mobile phone', 'mobile-phone', 1, '2021-02-03 05:49:14', NULL),
(11, 'لوازم جانبی گوشی موبایل', 'mobile accessories', 'mobile-accessories', 10, '2021-02-03 05:50:45', NULL),
(12, 'کیف و کاور گوشی', 'cell phone pouch cover', 'cell-phone-pouch-cover', 11, '2021-02-03 05:53:45', NULL);
