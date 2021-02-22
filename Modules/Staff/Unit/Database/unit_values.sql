--
-- Dumping data for table `unit_values`
--

INSERT INTO `unit_values` (`id`, `unit_id`, `value`, `position`, `created_at`, `updated_at`) VALUES
(1, 1, 'طول', 0, '2021-02-21 14:02:32', '2021-02-21 14:02:32'),
(2, 1, 'عرض', 1, '2021-02-21 14:02:33', '2021-02-21 14:06:12'),
(3, 1, 'ارتفاع', 2, '2021-02-21 14:02:33', '2021-02-21 14:06:12');

--
-- Indexes for table `unit_values`
--
ALTER TABLE `unit_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_values_unit_id_foreign` (`unit_id`);

--
-- Constraints for table `unit_values`
--
ALTER TABLE `unit_values`
  ADD CONSTRAINT `unit_values_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`);
COMMIT;
