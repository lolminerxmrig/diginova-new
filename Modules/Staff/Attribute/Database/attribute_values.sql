--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `attribute_id`, `value`, `position`, `created_at`, `updated_at`) VALUES
(1, 22, 'MP3', 0, '2021-02-21 14:38:59', '2021-02-21 14:38:59'),
(2, 22, 'MP4', 1, '2021-02-21 14:39:00', '2021-02-21 14:40:49'),
(3, 22, 'WebM', 2, '2021-02-21 14:39:00', '2021-02-21 14:40:49'),
(4, 23, 'دارد', 0, '2021-02-21 14:39:00', '2021-02-21 14:39:00'),
(5, 23, 'ندارد', 1, '2021-02-21 14:39:00', '2021-02-21 14:40:50');

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;
COMMIT;
