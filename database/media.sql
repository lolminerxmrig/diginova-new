--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `path`, `person_role`, `person_id`, `status`, `created_at`, `updated_at`)
VALUES (1, '161498218243068.jpg', 'media/images', 'staff', 1, 1, '2021-03-05 22:09:42', '2021-03-05 22:09:48'),
       (2, '161498218246843.jpg', 'media/images', 'staff', 1, 1, '2021-03-05 22:09:42', '2021-03-05 22:09:48'),
       (3, '161503831458166.jpg', 'media/images', 'staff', 1, 1, '2021-03-06 13:45:14', '2021-03-06 13:45:19'),
       (4, '161503831586349.jpg', 'media/images', 'staff', 1, 1, '2021-03-06 13:45:15', '2021-03-06 13:45:19'),
       (5, '161503838320704.jpg', 'media/images', 'staff', 1, 1, '2021-03-06 13:46:23', '2021-03-06 13:46:28'),
       (6, '161503838385096.jpg', 'media/images', 'staff', 1, 1, '2021-03-06 13:46:24', '2021-03-06 13:46:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
