--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `type`, `is_required`, `is_filterable`, `is_favorite`, `group_id`, `unit_id`, `position`, `created_at`, `updated_at`) VALUES
(1, 'ابعاد(میلی‌متر)', 5, 0, 0, 0, 1, 1, 0, '2021-02-21 14:05:54', '2021-02-21 15:03:20'),
(2, 'وزن', 5, 1, 0, 0, 1, 2, 1, '2021-02-21 14:05:54', '2021-02-21 14:05:54'),
(19, 'رنگ', 1, 1, 0, 1, 2, NULL, 0, '2021-02-21 14:34:42', '2021-02-21 14:40:49'),
(21, 'توضیحات بیشتر', 2, 0, 0, 0, 2, NULL, 4, '2021-02-21 14:35:48', '2021-02-21 14:40:50'),
(22, 'فرمت های قابل پشتیبانی', 4, 1, 1, 0, 2, NULL, 1, '2021-02-21 14:38:59', '2021-02-21 14:40:49'),
(23, 'دوربین ثانویه', 3, 1, 1, 0, 2, NULL, 2, '2021-02-21 14:39:00', '2021-02-21 14:40:49'),
(24, 'زوم', 5, 1, 0, 1, 2, 4, 3, '2021-02-21 14:39:00', '2021-02-21 14:40:50');

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_group_id_foreign` (`group_id`),
  ADD KEY `attributes_unit_id_foreign` (`unit_id`);


--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for table `attributes`
--
ALTER TABLE `attributes`
  ADD CONSTRAINT `attributes_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `attribute_groups` (`id`),
  ADD CONSTRAINT `attributes_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`);
COMMIT;
