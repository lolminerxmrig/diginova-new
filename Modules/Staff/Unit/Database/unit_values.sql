--
-- Dumping data for table `unit_values`
--

INSERT INTO `unit_values` (`id`, `unit_id`, `value`, `position`, `created_at`, `updated_at`) VALUES
(6, 32, 'ارتفاع', 0, '2021-04-07 14:23:32', '2021-04-07 14:23:32'),
(5, 32, 'عرض', 1, '2021-04-07 14:23:32', '2021-04-07 14:25:05'),
(4, 32, 'طول', 2, '2021-04-07 14:23:32', '2021-04-07 14:25:05');

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
