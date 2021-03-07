
--
-- Dumping data for table `product_has_variants`
--

INSERT INTO `product_has_variants` (`id`, `product_id`, `variant_id`, `warranty_id`, `shipping_type`, `status`, `post_time`, `buy_price`, `sale_price`, `max_order_count`, `stock_count`, `variant_code`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'site', '1', 1, 400, 500, 2, 3, 2000000, '2021-03-05 22:18:19', '2021-03-05 22:18:19'),
(2, 1, 2, 1, 'site', '1', 2, 22200, 223000, 22, 222, 2000001, '2021-03-05 22:18:48', '2021-03-05 22:18:48'),
(3, 1, 3, 1, 'site', '1', 3, 33300, 334000, 33, 33, 2000002, '2021-03-05 22:19:19', '2021-03-05 22:19:19'),
(4, 1, 4, 1, 'site', '1', 4, 444000, 445000, 44, 444, 2000003, '2021-03-05 22:19:46', '2021-03-05 22:19:46'),
(5, 1, 5, 1, 'site', '1', 5, 55000, 56000, 55, 555, 2000004, '2021-03-05 22:20:09', '2021-03-05 22:20:09'),
(6, 1, 6, 1, 'site', '1', 6, 6660, 666000, 66, 666, 3000005, '2021-03-05 22:20:34', '2021-03-05 22:20:34'),
(7, 1, 7, 1, 'site', '1', 7, 7770000, 770000000, 777, 7777, 2000006, '2021-03-05 22:21:09', '2021-03-05 22:21:09'),
(8, 3, 3, 3, 'site', '1', 5, 8000, 9000, 6, 7, 3000006, '2021-03-06 13:47:09', '2021-03-06 13:47:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_has_variants`
--
ALTER TABLE `product_has_variants`
ADD PRIMARY KEY (`id`),
  ADD KEY `product_has_variants_variant_id_foreign` (`variant_id`),
  ADD KEY `product_has_variants_warranty_id_foreign` (`warranty_id`),
  ADD KEY `product_has_variants_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for table `product_has_variants`
--
ALTER TABLE `product_has_variants`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for table `product_has_variants`
--
ALTER TABLE `product_has_variants`
    ADD CONSTRAINT `product_has_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_has_variants_variant_id_foreign` FOREIGN KEY (`variant_id`) REFERENCES `variants` (`id`),
  ADD CONSTRAINT `product_has_variants_warranty_id_foreign` FOREIGN KEY (`warranty_id`) REFERENCES `warranties` (`id`);
COMMIT;
