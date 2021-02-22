--
-- Dumping data for table `categorizables`
--

INSERT INTO `categorizables` (`category_id`, `categorizable_type`, `categorizable_id`) VALUES
(12, 'Type', 1),
(12, 'Type', 2),
(12, 'AttributeGroups', 1),
(12, 'AttributeGroups', 2),
(1, 'Brand', 1),
(1, 'Brand', 2),
(1, 'Brand', 3),
(6, 'Brand', 3);

--
-- Indexes for table `categorizables`
--
ALTER TABLE `categorizables`
  ADD KEY `categorizables_categorizable_type_categorizable_id_index` (`categorizable_type`,`categorizable_id`);
COMMIT;
