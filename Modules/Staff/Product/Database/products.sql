--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title_fa`, `title_en`, `nature`, `model`, `is_iranian`, `status`, `length`, `width`, `height`, `weight`, `brand_id`, `product_code`, `slug`, `advantages`, `disadvantages`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'گوشی موبایل سامسونگ مدل گلکسی note 4 پرایم', 'sample title', 'گوشی موبایل', 'گلکسی note 4 پرایم', 1, 1, 20, 30, 40, 60, 0, 1000000, 'گوشی موبایل مدل گلکسی note 4 پرایم', NULL, NULL, 'شرح تست...........................................................................................................................................................................', '2021-03-05 22:09:47', '2021-03-05 22:09:47', NULL),
(2, 'گوشی موبایل سامسونگ مدل گلکسی note 4 پرایم', 'sample title', 'گوشی موبایل', 'گلکسی note 4 پرایم', 1, 1, 20, 30, 40, 60, 0, 1000001, 'گوشی موبایل مدل گلکسی note 4 پرایم', NULL, NULL, 'شرح تست...........................................................................................................................................................................', '2021-03-06 13:45:18', '2021-03-06 13:45:18', NULL),
(3, 'کیف گوشی آنریل مدل از اون جدیدا', 'sample title', 'گوشی موبایل', 'لپ تاپ مک بوک پرو', 1, 1, 20, 30, 40, 60, 0, 1000002, 'گوشی موبایل مدل لپ تاپ مک بوک پرو', NULL, NULL, 'شرح تست...........................................................................................................................................................................', '2021-03-06 13:46:27', '2021-03-06 13:46:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_code_unique` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
