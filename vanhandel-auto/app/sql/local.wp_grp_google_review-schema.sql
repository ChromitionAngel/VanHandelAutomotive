/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_grp_google_review` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `google_place_id` bigint(20) unsigned NOT NULL,
  `hash` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `text` varchar(10000) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `time` int(11) NOT NULL,
  `language` varchar(2) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `author_url` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `profile_photo_url` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `grp_google_review_hash` (`hash`),
  KEY `grp_google_place_id` (`google_place_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
