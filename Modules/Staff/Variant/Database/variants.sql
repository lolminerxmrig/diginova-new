--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`id`, `name`, `value`, `status`, `position`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 'آبی', '#1273f3', 1, 0, 1, '2021-03-05 22:13:05', '2021-03-05 22:13:05'),
(2, 'قرمز', '#e21212', 1, 1, 1, '2021-03-05 22:13:05', '2021-03-05 22:13:05'),
(3, 'سبز', '#31bc15', 1, 2, 1, '2021-03-05 22:13:05', '2021-03-05 22:13:05'),
(4, 'نارنجی', '#e77f1d', 1, 3, 1, '2021-03-05 22:13:05', '2021-03-05 22:13:05'),
(5, 'فیروزه ای', '#06d0cc', 1, 4, 1, '2021-03-05 22:13:05', '2021-03-05 22:13:05'),
(6, 'زرد', '#f6ee09', 1, 5, 1, '2021-03-05 22:13:05', '2021-03-05 22:13:05'),
(7, 'بنفش', '#cb15c5', 1, 6, 1, '2021-03-05 22:13:05', '2021-03-05 22:13:05'),
(8, 'خاکستری', '#737373', 1, 7, 1, '2021-03-05 22:13:05', '2021-03-05 22:13:05'),
(9, 'مشکی', '#000000', 1, 8, 1, '2021-03-05 22:13:05', '2021-03-05 22:13:05'),
(10, 'سفید', '#ffffff', 1, 9, 1, '2021-03-05 22:13:06', '2021-03-05 22:13:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
    ADD PRIMARY KEY (`id`),
  ADD KEY `variants_group_id_foreign` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `variants`
--
ALTER TABLE `variants`
    ADD CONSTRAINT `variants_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `variant_groups` (`id`);
COMMIT;
