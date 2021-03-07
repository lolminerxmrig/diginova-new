--
-- Dumping data for table `mediables`
--

INSERT INTO `mediables` (`id`, `media_id`, `mediable_type`, `mediable_id`, `is_main`, `position`)
VALUES (1, 2, 'Product', 1, 1, 0),
       (2, 1, 'Product', 1, 0, 1),
       (3, 4, 'Product', 2, 1, 0),
       (4, 3, 'Product', 2, 0, 1),
       (5, 6, 'Product', 3, 1, 0),
       (6, 5, 'Product', 3, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mediables`
--
ALTER TABLE `mediables`
    ADD PRIMARY KEY (`id`),
  ADD KEY `mediables_mediable_type_mediable_id_index` (`mediable_type`,`mediable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mediables`
--
ALTER TABLE `mediables`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
