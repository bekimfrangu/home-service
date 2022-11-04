-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 09:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', 'user', 'Hello I mamamam', '2022-03-27 15:50:45', '2022-03-27 15:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_17_203422_create_sessions_table', 1),
(7, '2022_03_18_192530_add_phone_to_users_table', 1),
(8, '2022_03_18_195412_create_service_categories_table', 1),
(9, '2022_03_19_220304_create_services_table', 1),
(10, '2022_03_23_184516_add_featured_to_services_table', 2),
(11, '2022_03_23_191530_add_featured_to_services_categories_table', 3),
(12, '2022_03_23_202509_create_sliders_table', 4),
(13, '2022_03_26_185756_create_service_providers_table', 5),
(14, '2022_03_27_173107_create_contacts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) DEFAULT NULL,
  `discount_type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inclusion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exclusion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `tagline`, `service_category_id`, `price`, `discount`, `discount_type`, `image`, `thumbnail`, `description`, `inclusion`, `exclusion`, `status`, `created_at`, `updated_at`, `featured`) VALUES
(1, 'sint corrupti fuga sit', 'sint-corrupti-fuga-sit', 'Aliquid illo sed.', 3, '452.00', NULL, NULL, 'service_14.jpg', 'service_14.jpg', 'Culpa sit et accusantium eveniet velit molestias. Velit rem voluptatem ut in consectetur optio. Tenetur eos eaque aperiam voluptatum. Accusantium quibusdam voluptatem reprehenderit magnam nihil veritatis qui. Nihil sit nobis quia illum consequatur. Et repudiandae quis repellendus reprehenderit ut ut magni totam. Alias non quidem omnis aut id sunt. Rerum voluptatem animi doloribus ut nemo accusamus. Et modi ea ipsum officiis ut deleniti quia.', 'Perferendis facilis.|Ipsa accusamus.|Neque voluptatem.|Animi dicta quos.|Aliquid molestias.', 'Ut voluptas magnam.|Autem qui.|Omnis consequatur.|Quis velit iusto.|Nostrum quas.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 0),
(2, 'tempore quasi consequatur beatae', 'tempore-quasi-consequatur-beatae', 'Corrupti sit amet.', 3, '318.00', NULL, NULL, 'service_6.jpg', 'service_6.jpg', 'Quasi illo nemo quisquam aut illo ut magni iure. Repellendus accusantium quasi dolorum iusto deserunt. Officia est nam fugit nihil sint unde. Fuga expedita pariatur animi illo molestias expedita voluptatem. Debitis qui voluptatem quisquam amet sed quam. Quo consequatur ut debitis nihil aperiam velit et. Et totam veritatis officiis porro odio impedit ut. Fuga sequi sunt possimus nulla et voluptate. Beatae explicabo velit in aliquid ea ut fugit. Voluptas quidem cupiditate sint repudiandae eius.', 'Dolor earum.|Saepe mollitia.|Culpa adipisci quis.|Ea sint id.|Omnis quia est.', 'Et sequi qui.|Ducimus animi nobis.|Iusto voluptatem ut.|Distinctio error.|Aspernatur ut.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 0),
(3, 'magni aut quidem sequi', 'magni-aut-quidem-sequi', 'Sit et quasi sint.', 1, '248.00', NULL, NULL, 'service_10.jpg', 'service_10.jpg', 'Et facilis ut error deleniti explicabo. Itaque quia asperiores aut voluptas impedit quidem et. Minus dolores soluta ipsa ad. Deserunt nemo quia ea eligendi. Asperiores et dolorem sequi ea nemo ut. Et explicabo magnam quia totam. Aut voluptatem assumenda rerum repudiandae excepturi perspiciatis maxime. Nesciunt non consequatur ea occaecati molestiae voluptatibus. Eum id ad ullam et.', 'Perferendis quae.|Quae ut veritatis.|Assumenda et nisi.|Ut itaque illo.|Incidunt incidunt.', 'Beatae est quia.|Quis illo sed quis.|Quod officiis.|Animi fuga rerum.|Qui eveniet rerum.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 1),
(4, 'vel quas beatae et', 'vel-quas-beatae-et', 'Animi sed.', 1, '440.00', NULL, NULL, 'service_16.jpg', 'service_16.jpg', 'Fuga itaque neque voluptatem voluptas modi ipsam. Autem et libero rerum voluptas voluptatum. Dolorem molestiae hic harum ducimus. Quibusdam laboriosam mollitia veniam omnis error numquam. Ut corporis saepe veritatis eos maiores dolore. Rem recusandae maiores fugiat quidem dolor explicabo temporibus dolores. Eveniet pariatur pariatur illo eveniet. Totam sint minima ratione. Culpa soluta et eius amet ut sit consequatur. Et consequatur sint quidem et praesentium.', 'Voluptatem quia non.|Assumenda quo.|Ducimus rerum saepe.|Nulla est velit.|Possimus facilis.', 'Amet distinctio et.|Pariatur saepe.|Rerum quae non.|Id et ipsa sunt.|Officia vel id.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 0),
(5, 'expedita possimus est facere', 'expedita-possimus-est-facere', 'Reiciendis corrupti.', 3, '419.00', NULL, NULL, 'service_1.jpg', 'service_1.jpg', 'Blanditiis odio fuga id sunt laboriosam. Quasi velit vero ex molestiae id vel. Qui aliquid et nisi quia illum asperiores. Illo consequatur maxime vitae dignissimos ea consectetur. Et harum veritatis non accusantium qui nihil expedita. Corporis aspernatur vel ut voluptatem et accusantium error adipisci. Excepturi similique consequuntur non veritatis tempore esse. Blanditiis a rerum repellat in. Velit sequi cupiditate quibusdam suscipit doloremque.', 'Aliquam sed minima.|Culpa quis quia.|Explicabo excepturi.|Ut et voluptate.|Numquam voluptas et.', 'Delectus est.|Repudiandae ea.|Velit ipsam.|Non provident sed.|Sequi molestiae.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 0),
(6, 'aspernatur molestias sed iusto', 'aspernatur-molestias-sed-iusto', 'Exercitationem.', 4, '330.00', NULL, NULL, 'service_4.jpg', 'service_4.jpg', 'Facilis labore id sed ex sed quibusdam. Cumque ut ratione quia. Aut mollitia aut aut quo. Expedita sed fugiat odit molestias ea omnis. Non quisquam ipsam aliquam eos voluptas id. Explicabo ut id autem aut ipsa sed est. Aut minima at et architecto adipisci. Quo totam qui velit quidem qui. Soluta quaerat voluptatibus libero quam debitis numquam. Illo repellat et aperiam. Reprehenderit facere ullam rerum sint quod ipsum.', 'Mollitia quia et.|A odit voluptates.|Repellendus eum.|Ullam non.|Perferendis.', 'Quia illum dolores.|Nihil molestias sed.|Odit debitis.|Dolorum veritatis.|Esse minus est.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 0),
(7, 'placeat eos esse vero', 'placeat-eos-esse-vero', 'Consequatur velit.', 1, '449.00', NULL, NULL, 'service_12.jpg', 'service_12.jpg', 'Expedita aut nesciunt quia atque autem. Nobis repellendus repellendus quae rerum unde tempore pariatur. Laborum corporis esse eveniet molestiae nemo dignissimos. Eos labore minus autem fugit dolores expedita. Reprehenderit magnam sed voluptas. Aut quis illo non debitis ipsam. Culpa debitis facere repellat doloremque. Vel repudiandae asperiores repellat. Soluta tempora voluptatem labore aperiam nulla consequatur quae. Dolores reprehenderit eos porro non ad dolorum distinctio aut.', 'Tenetur voluptates.|Quo sed eveniet.|Nobis et natus vero.|Maxime ut.|Quia non eos et.', 'Dolore odio at et.|Facilis iste fugiat.|Sapiente voluptatem.|Sunt autem quo nemo.|Qui natus non.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 1),
(9, 'repudiandae necessitatibus iste ut', 'repudiandae-necessitatibus-iste-ut', 'Recusandae eius.', 1, '314.00', NULL, NULL, 'service_2.jpg', 'service_2.jpg', 'Necessitatibus qui dolores et unde autem. Quaerat consequuntur consequatur neque iste eum vero. Nihil placeat praesentium molestiae aliquid necessitatibus inventore. Culpa doloremque et autem. Aut et explicabo adipisci eligendi asperiores. Molestias vero ipsam libero minima est ad accusantium. Quibusdam ullam quos libero quas aperiam illo molestiae. Illum harum quis porro omnis. Qui molestiae ab laboriosam numquam reiciendis iste. Voluptatem dolorem assumenda ratione ipsam aperiam enim.', 'Tempore sed vero.|Et sapiente.|Molestiae nulla.|Deleniti commodi.|Ut fugit ducimus.', 'Voluptatem ab.|Hic voluptatem.|Qui voluptas sit.|Ut quod eos amet.|Omnis qui modi quia.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 0),
(10, 'et autem doloremque necessitatibus', 'et-autem-doloremque-necessitatibus', 'Expedita sunt aut.', 2, '438.00', NULL, NULL, 'service_20.jpg', 'service_20.jpg', 'Suscipit autem soluta labore pariatur. Sunt qui non natus nisi itaque velit est. Magni necessitatibus voluptatem rerum autem rerum expedita repellat. Quibusdam maiores nobis alias dignissimos quia ipsum deserunt dolores. Cupiditate quo nisi deleniti pariatur. Et nesciunt aut ea dolore nesciunt expedita. Ut earum et error quaerat culpa corrupti.', 'Tenetur sit.|Quaerat et sint.|Pariatur delectus.|Ducimus.|Provident dolor.', 'Totam voluptatibus.|Iste inventore.|Debitis harum.|Expedita et error.|Exercitationem.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 0),
(11, 'eveniet animi doloremque ea', 'eveniet-animi-doloremque-ea', 'Iste molestiae.', 2, '170.00', NULL, NULL, 'service_9.jpg', 'service_9.jpg', 'Enim ut consequatur et. Et nostrum autem consequuntur. Ipsa doloribus quasi nemo labore laboriosam et qui magni. Eum sequi quae itaque optio qui sunt qui nobis. Maxime temporibus totam neque recusandae. Qui facilis laboriosam minima officiis eius. Earum et velit soluta suscipit. Sunt voluptatem distinctio quis quisquam dolorem. Veritatis eligendi totam sequi exercitationem aperiam rerum aut. In officiis aut modi accusantium qui modi.', 'Ratione fugiat.|Unde vitae.|Ratione numquam et.|Fugit aut eum velit.|Qui inventore sint.', 'Ratione sit at nam.|Voluptates.|Explicabo molestiae.|Occaecati delectus.|Perferendis enim.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 0),
(13, 'dolores quis similique et', 'dolores-quis-similique-et', 'Dolor veniam.', 3, '270.00', NULL, NULL, 'service_11.jpg', 'service_11.jpg', 'Repudiandae nobis minus ullam laboriosam doloribus. Rerum assumenda doloribus est doloribus necessitatibus unde soluta. Et enim aspernatur accusamus molestias blanditiis omnis. Aut id ratione excepturi dolores doloremque. Natus et architecto est hic. Officiis doloribus rem id rem. Voluptatem vitae repellat asperiores ut voluptates.', 'Accusamus soluta.|Aut libero rerum.|Voluptas ut facere.|Aut ea ut eos.|Dolores ipsam et.', 'Tempora temporibus.|Cumque odit.|Et sit illum velit.|Qui asperiores.|Eligendi molestiae.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 0),
(15, 'cum distinctio animi sit', 'cum-distinctio-animi-sit', 'Voluptatem enim.', 4, '197.00', NULL, NULL, 'service_5.jpg', 'service_5.jpg', 'Dolorum beatae labore possimus sunt dolor odio. Esse mollitia magnam ratione sit ullam provident dolore. Totam nobis consequatur adipisci et minima commodi. Voluptas repellendus sed voluptates. Aliquid aspernatur molestias sed natus et dolores et. Dolorem eligendi qui exercitationem voluptas numquam. Excepturi dicta corporis quam sapiente voluptatibus sed odio. Aut id sint est architecto asperiores temporibus perferendis et. Et iure dignissimos rerum non qui aperiam.', 'Modi possimus.|Odio recusandae.|Id ullam optio et.|Ab tempore quidem.|Delectus dolore.', 'Vero at error.|Nihil qui corporis.|Et dolores.|Id illum non sit.|Est dolores dolore.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 1),
(16, 'autem velit odit harum', 'autem-velit-odit-harum', 'Sit nulla vitae.', 2, '198.00', NULL, NULL, 'service_7.jpg', 'service_7.jpg', 'Enim expedita ut soluta dolor. Deserunt et delectus ut maxime. Sit unde harum et est rerum cumque. Aut ut et similique ea quidem praesentium perferendis distinctio. Doloremque voluptate eligendi neque. Rerum autem et repudiandae dolores debitis. Error debitis reprehenderit aut porro repellat ut. Deleniti deleniti quas ut recusandae voluptates.', 'Quos sed.|Autem voluptate.|Veniam quisquam non.|Accusamus ullam.|Dolorem numquam vel.', 'Omnis cumque.|Quae et explicabo.|Repellat sed fugit.|Architecto enim.|Minima voluptatem.', 1, '2022-03-20 18:28:54', '2022-03-20 18:28:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`, `featured`) VALUES
(1, 'AC', 'ac', '1521969345.png', NULL, NULL, 1),
(2, 'Engineering', 'engineering', '1648064190.png', NULL, '2022-03-23 18:36:30', 1),
(3, 'Home', 'home', '1521969622.png', NULL, NULL, 0),
(4, 'Electrical', 'electrical', '1521969446.png', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_providers`
--

CREATE TABLE `service_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `service_locations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`id`, `user_id`, `image`, `about`, `city`, `service_category_id`, `service_locations`, `created_at`, `updated_at`) VALUES
(1, 5, 'profile.jpg', 'I am....', 'I am....', 2, 'Albania, 61025, 8412', '2022-03-26 19:13:41', '2022-03-26 20:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JBWmLCmHW8u2ExhYCr8qoe6ijcmAJ4ZLy3in40pP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSzRibzVpdDRkMXZ1bEhzSEt3ZjBRZkl5cEVwQ25rVjBVZmNNQnRBUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1648408740);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Home', '1648151924.jpg', 1, '2022-03-24 18:58:44', '2022-03-24 18:58:44'),
(4, 'Garden', '1648152396.jpg', 1, '2022-03-24 19:06:36', '2022-03-24 19:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'CST',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`, `phone`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$k/uwXbnZcofDCVE7AjWceuyiDetctwiZ548uDWqQI5KCVpGXqmQZa', NULL, NULL, NULL, NULL, NULL, 'ADM', '2022-03-20 18:37:07', '2022-03-20 18:37:07', '8745210521'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$zlqEytBhlum/fp8KGSjB6OO.qyzd7UM7NPkNBAWZvkjQqn6hvFbfe', NULL, NULL, NULL, NULL, NULL, 'CST', '2022-03-20 18:38:11', '2022-03-20 18:38:11', '8745210527'),
(5, 'provider', 'sprovider@gmail.com', NULL, '$2y$10$tZx/G.sf2vXZBnvbnDpIwO4YFYMXXrIOI61spgw64BS9gPaA0HZsW', NULL, NULL, NULL, NULL, NULL, 'SVP', '2022-03-26 19:13:41', '2022-03-26 19:13:41', '0548721525');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`),
  ADD KEY `services_service_category_id_foreign` (`service_category_id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_categories_slug_index` (`slug`);

--
-- Indexes for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_providers_user_id_foreign` (`user_id`),
  ADD KEY `service_providers_service_category_id_foreign` (`service_category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_service_category_id_foreign` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD CONSTRAINT `service_providers_service_category_id_foreign` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_providers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
