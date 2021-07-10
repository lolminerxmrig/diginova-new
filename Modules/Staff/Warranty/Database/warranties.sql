--
-- Dumping data for table `warranties`
--

INSERT INTO `warranties` (`id`, `name`, `month`, `has_insurance`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'گارانتی اصالت و سلامت فیزیکی کالا', NULL, 0, '2021-03-05 18:44:42', '2021-03-05 18:44:42', NULL),
(6, 'گارانتی سریر', 18, 0, '2021-04-12 15:16:28', '2021-04-12 15:16:47', NULL),
(5, 'گارانتی داریا همراه پایتخت', 18, 0, '2021-04-12 15:14:36', '2021-04-12 15:14:36', NULL),
(7, 'گارانتی همراه گستر نقره فام', 18, 0, '2021-04-12 15:18:21', '2021-04-12 15:18:21', NULL);
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
