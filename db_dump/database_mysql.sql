CREATE TABLE `couriers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on_way` tinyint(1) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='utf8mb4_unicode_ci'

CREATE TABLE `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `region` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_code` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `way_duration` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci



CREATE TABLE `schedules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `courier_id` int(10) unsigned DEFAULT NULL,
  `region_id` int(10) unsigned DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `start_at` timestamp NULL DEFAULT NULL,
  `end_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci


INSERT INTO `couriers` (`id`, `login`,`first_name`, `middle_name`, `last_name`, `on_way`, `email`, `phone`, `password`, `created_at`) VALUES
(1, 'Иванков','Иван','Васильевич','0','test1@test.com','888888888','qw3232e43433erssdfd','2019-04-14 22:16:29'),
(2, 'Иванов','Иван','Иванович','0','test12@test.com','888888888','qw3232e43433erssdfd','2019-04-14 22:16:29'),
(3, 'Иванок','Сергей','Васильевич','0','test123@test.com','888888888','qw3232e43433erssdfd','2019-04-14 22:16:29'),
(4, 'Иванченко','Петр','Васильевич','0','test1234@test.com','888888888','qw3232e43433erssdfd','2019-04-14 22:16:29'),
(5, 'Иванович','Иван','Петрович','0','test1456@test.com','888888888','qw3232e43433erssdfd','2019-04-14 22:16:29'),
(6, 'Иваносов','Олег','Васильевич','0','test1678@test.com','888888888','qw3232e43433erssdfd','2019-04-14 22:16:29'),
(7, 'Иванонкин','Алексей','Васильевич','0','test1456@test.com','888888888','qw3232e43433erssdfd','2019-04-14 22:16:29'),
(8, 'Иванин','Михаил','Васильевич','0','test1890@test.com','888888888','qw3232e43433erssdfd','2019-04-14 22:16:29'),
(9, 'Иванищенко','Игорь','Степанович','0','test1123@test.com','888888888','qw3232e43433erssdfd','2019-04-14 22:16:29'),
(10, 'Иванин','Иван','Васильевич','0','test1888@test.com','888888888','qw3232e43433erssdfd','2019-04-14 22:16:29');


INSERT INTO `regions` (`id`, `region`, `region_code`,  `way_duration`,`created_at`) VALUES
(0, 'Санкт-Петербург', '1234', 3, '2019-03-12 22:16:29'),
(1, 'Уфа','4546', 5, '2019-03-12 22:16:29'),
(2, 'Нижний Новгород','6767', 4, '2019-03-12 22:16:29'),
(3, 'Владимир', '3434', 3, '2019-03-12 22:16:29'),
(4, 'Кострома', '9824', 2, '2019-03-12 22:16:29'),
(5, 'Екатеринбург', '0943', 5, '2019-03-12 22:16:29'),
(6, 'Ковров', '4545', 3, '2019-03-12 22:16:29'),
(7, 'Воронеж', '1545', 4, '2019-03-12 22:16:29'),
(8, 'Самара', '9534', 5, '2019-03-12 22:16:29'),
(9, 'Астрахань', '4878', 6, '2019-03-12 22:16:29');


INSERT INTO `schedule` (`id`, `courier_id`,  `region_id`, `comment`,  `start_at`,`end_at`) VALUES
(0, 1, 2, 'забрать товар', '2019-03-20 01:24:00', '2019-04-03 01:24:00'),
(1, 2, 4, 'забрать товар', '2019-03-20 01:26:00', '2019-04-04 01:11:00'),
(2, 2, 4, 'забрать весь товар', '2019-03-20 01:26:00', '2019-04-05 01:11:00'),
(3, 2, 4, 'забрать весь товар', '2019-03-21 01:26:00', '2019-04-06 01:11:00'),
(4, 2, 4, 'забрать  товар', '2019-03-22 01:26:00', '2019-04-07 01:11:00'),
(5, 2, 4, 'забрать весь товар', '2019-03-23 01:26:00', '2019-04-08 01:11:00'),
(6, 2, 4, 'забрать товар', '2019-03-24 01:26:00', '2019-04-09 01:11:00'),
(7, 2, 4, 'забрать весь товар', '2019-03-25 01:26:00', '2019-04-10 01:11:00'),
(8, 2, 4, 'забрать товар', '2019-03-26 01:26:00', '2019-04-11 01:11:00'),
(9, 2, 4, 'забрать весь товар', '2019-03-27 01:26:00', '2019-04-12 01:11:00');



