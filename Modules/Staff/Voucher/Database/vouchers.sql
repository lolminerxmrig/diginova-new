--
-- Dumping data for table `warranties`
--

INSERT INTO `warranties` (`id`, `name`, `month`, `has_insurance`, `created_at`, `updated_at`, `deleted_at`)
VALUES (1, 'گارانتی اصالت و سلامت فیزیکی کالا', NULL, 0, '2021-03-05 22:14:42', '2021-03-05 22:14:42', NULL),
       (2, 'واژنگ', 12, 0, '2021-03-05 22:15:56', '2021-03-05 22:15:56', NULL),
       (3, 'مدیا پردازش', 8, 0, '2021-03-05 22:16:34', '2021-03-05 22:16:34', NULL),
       (4, 'گلدیران', 24, 0, '2021-03-05 22:17:02', '2021-03-05 22:17:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `warranties`
--
ALTER TABLE `warranties`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `warranties`
--
ALTER TABLE `warranties`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
