-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 08, 2024 lúc 06:28 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `banner_id` bigint UNSIGNED NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_path_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-08-01 02:24:53', '2024-08-01 02:24:53'),
(2, 2, '2024-08-05 01:02:31', '2024-08-05 01:02:31'),
(3, 4, '2024-08-05 05:05:49', '2024-08-05 05:05:49'),
(4, 5, '2024-08-05 05:59:06', '2024-08-05 05:59:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint UNSIGNED NOT NULL,
  `cart_id` bigint UNSIGNED NOT NULL,
  `product_variant_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_size_id` bigint UNSIGNED DEFAULT NULL,
  `product_color_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_items`
--

INSERT INTO `cart_items` (`id`, `cart_id`, `product_variant_id`, `quantity`, `created_at`, `updated_at`, `product_size_id`, `product_color_id`) VALUES
(85, 2, 45, 1, '2024-08-05 02:03:14', '2024-08-05 02:03:14', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Áo Phông', 'uploads/categories/mzgASTY2tfsynHuyQc6OighPrxQhMktzhzEIuMPb.jpg', 1, '2024-07-27 10:43:13', '2024-07-27 10:43:13'),
(2, 'Áo Khoác', 'uploads/categories/8Iey1u8sD5Hc4tuOKAq9ztdkqgPrAXRFRs5tDzX1.jpg', 1, '2024-07-27 10:43:32', '2024-07-27 10:43:32'),
(3, 'Áo Sơ Mi', 'uploads/categories/8HjlRtFmcJLM19jwxZztNcQx3jxcCMsHtl208CDO.jpg', 1, '2024-07-27 10:43:48', '2024-07-27 10:43:48'),
(4, 'Quần Short', 'uploads/categories/1LbCWAGRJuOnowxodDKFE5loae2YTjZoY4kF889g.jpg', 1, '2024-07-27 10:44:20', '2024-07-27 10:44:20'),
(5, 'Áo Polo', 'uploads/categories/QnNKrB0YAxdQEkbLLXw790jpBX3fzXLVjnjXYKcb.jpg', 1, '2024-07-27 10:44:47', '2024-08-05 05:35:09'),
(11, 'Áo Planel', 'uploads/categories/Lh3krZx4fN7dTgBf2Zr0jcolk3cvWYWL5tqmUbYU.jpg', 1, '2024-08-05 05:35:28', '2024-08-05 05:35:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '38ea1043-a4d8-4725-b4a0-b03dd8388b2b', 'database', 'default', '{\"uuid\":\"38ea1043-a4d8-4725-b4a0-b03dd8388b2b\",\"displayName\":\"App\\\\Mail\\\\OrderConfirm\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:21:\\\"App\\\\Mail\\\\OrderConfirm\\\":3:{s:5:\\\"order\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:16:\\\"App\\\\Models\\\\Order\\\";s:2:\\\"id\\\";i:92;s:9:\\\"relations\\\";a:5:{i:0;s:10:\\\"orderItems\\\";i:1;s:25:\\\"orderItems.productVariant\\\";i:2;s:33:\\\"orderItems.productVariant.product\\\";i:3;s:30:\\\"orderItems.productVariant.size\\\";i:4;s:31:\\\"orderItems.productVariant.color\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:26:\\\"teonguoinoitieng@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Illuminate\\Database\\Eloquent\\RelationNotFoundException: Call to undefined relationship [productVariant] on model [App\\Models\\OrderItem]. in D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\RelationNotFoundException.php:35\nStack trace:\n#0 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(806): Illuminate\\Database\\Eloquent\\RelationNotFoundException::make(Object(App\\Models\\OrderItem), \'productVariant\')\n#1 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(110): Illuminate\\Database\\Eloquent\\Builder->Illuminate\\Database\\Eloquent\\{closure}()\n#2 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(808): Illuminate\\Database\\Eloquent\\Relations\\Relation::noConstraints(Object(Closure))\n#3 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(776): Illuminate\\Database\\Eloquent\\Builder->getRelation(\'productVariant\')\n#4 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(756): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelation(Array, \'productVariant\', Object(Closure))\n#5 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(724): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelations(Array)\n#6 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(203): Illuminate\\Database\\Eloquent\\Builder->get(Array)\n#7 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(166): Illuminate\\Database\\Eloquent\\Relations\\Relation->get()\n#8 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(787): Illuminate\\Database\\Eloquent\\Relations\\Relation->getEager()\n#9 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(756): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelation(Array, \'orderItems\', Object(Closure))\n#10 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(704): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelations(Array)\n#11 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(109): Illuminate\\Database\\Eloquent\\Model->load(Array)\n#12 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(62): App\\Mail\\OrderConfirm->restoreModel(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#13 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesModels.php(93): App\\Mail\\OrderConfirm->getRestoredPropertyValue(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#14 [internal function]: App\\Mail\\OrderConfirm->__unserialize(Array)\n#15 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(97): unserialize(\'O:34:\"Illuminat...\')\n#16 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->getCommand(Array)\n#17 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(138): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(121): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#29 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 {main}', '2024-08-05 04:50:50'),
(2, '97e5e9bb-4e9a-4df9-adcd-c216f910d91c', 'database', 'default', '{\"uuid\":\"97e5e9bb-4e9a-4df9-adcd-c216f910d91c\",\"displayName\":\"App\\\\Mail\\\\OrderConfirm\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:21:\\\"App\\\\Mail\\\\OrderConfirm\\\":3:{s:5:\\\"order\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:16:\\\"App\\\\Models\\\\Order\\\";s:2:\\\"id\\\";i:93;s:9:\\\"relations\\\";a:5:{i:0;s:10:\\\"orderItems\\\";i:1;s:25:\\\"orderItems.productVariant\\\";i:2;s:33:\\\"orderItems.productVariant.product\\\";i:3;s:30:\\\"orderItems.productVariant.size\\\";i:4;s:31:\\\"orderItems.productVariant.color\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:26:\\\"teonguoinoitieng@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Illuminate\\Database\\Eloquent\\RelationNotFoundException: Call to undefined relationship [productVariant] on model [App\\Models\\OrderItem]. in D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\RelationNotFoundException.php:35\nStack trace:\n#0 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(806): Illuminate\\Database\\Eloquent\\RelationNotFoundException::make(Object(App\\Models\\OrderItem), \'productVariant\')\n#1 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(110): Illuminate\\Database\\Eloquent\\Builder->Illuminate\\Database\\Eloquent\\{closure}()\n#2 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(808): Illuminate\\Database\\Eloquent\\Relations\\Relation::noConstraints(Object(Closure))\n#3 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(776): Illuminate\\Database\\Eloquent\\Builder->getRelation(\'productVariant\')\n#4 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(756): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelation(Array, \'productVariant\', Object(Closure))\n#5 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(724): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelations(Array)\n#6 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(203): Illuminate\\Database\\Eloquent\\Builder->get(Array)\n#7 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(166): Illuminate\\Database\\Eloquent\\Relations\\Relation->get()\n#8 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(787): Illuminate\\Database\\Eloquent\\Relations\\Relation->getEager()\n#9 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(756): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelation(Array, \'orderItems\', Object(Closure))\n#10 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(704): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelations(Array)\n#11 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(109): Illuminate\\Database\\Eloquent\\Model->load(Array)\n#12 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(62): App\\Mail\\OrderConfirm->restoreModel(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#13 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesModels.php(93): App\\Mail\\OrderConfirm->getRestoredPropertyValue(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#14 [internal function]: App\\Mail\\OrderConfirm->__unserialize(Array)\n#15 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(97): unserialize(\'O:34:\"Illuminat...\')\n#16 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->getCommand(Array)\n#17 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(138): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(121): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#29 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 {main}', '2024-08-05 05:08:21'),
(3, '0b3a3413-2fff-47b3-8a3b-10e9888f434f', 'database', 'default', '{\"uuid\":\"0b3a3413-2fff-47b3-8a3b-10e9888f434f\",\"displayName\":\"App\\\\Mail\\\\OrderConfirm\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:21:\\\"App\\\\Mail\\\\OrderConfirm\\\":3:{s:5:\\\"order\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:16:\\\"App\\\\Models\\\\Order\\\";s:2:\\\"id\\\";i:94;s:9:\\\"relations\\\";a:2:{i:0;s:10:\\\"orderItems\\\";i:1;s:25:\\\"orderItems.productVariant\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:26:\\\"teonguoinoitieng@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Illuminate\\Database\\Eloquent\\RelationNotFoundException: Call to undefined relationship [productVariant] on model [App\\Models\\OrderItem]. in D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\RelationNotFoundException.php:35\nStack trace:\n#0 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(806): Illuminate\\Database\\Eloquent\\RelationNotFoundException::make(Object(App\\Models\\OrderItem), \'productVariant\')\n#1 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(110): Illuminate\\Database\\Eloquent\\Builder->Illuminate\\Database\\Eloquent\\{closure}()\n#2 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(808): Illuminate\\Database\\Eloquent\\Relations\\Relation::noConstraints(Object(Closure))\n#3 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(776): Illuminate\\Database\\Eloquent\\Builder->getRelation(\'productVariant\')\n#4 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(756): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelation(Array, \'productVariant\', Object(Closure))\n#5 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(724): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelations(Array)\n#6 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(203): Illuminate\\Database\\Eloquent\\Builder->get(Array)\n#7 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(166): Illuminate\\Database\\Eloquent\\Relations\\Relation->get()\n#8 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(787): Illuminate\\Database\\Eloquent\\Relations\\Relation->getEager()\n#9 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(756): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelation(Array, \'orderItems\', Object(Closure))\n#10 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(704): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelations(Array)\n#11 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(109): Illuminate\\Database\\Eloquent\\Model->load(Array)\n#12 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(62): App\\Mail\\OrderConfirm->restoreModel(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#13 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesModels.php(93): App\\Mail\\OrderConfirm->getRestoredPropertyValue(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#14 [internal function]: App\\Mail\\OrderConfirm->__unserialize(Array)\n#15 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(97): unserialize(\'O:34:\"Illuminat...\')\n#16 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->getCommand(Array)\n#17 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(138): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(121): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#29 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 {main}', '2024-08-05 05:43:40'),
(4, '62ba447e-7951-4681-a976-7d2f6a0ecef1', 'database', 'default', '{\"uuid\":\"62ba447e-7951-4681-a976-7d2f6a0ecef1\",\"displayName\":\"App\\\\Mail\\\\OrderConfirm\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:21:\\\"App\\\\Mail\\\\OrderConfirm\\\":3:{s:5:\\\"order\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:16:\\\"App\\\\Models\\\\Order\\\";s:2:\\\"id\\\";i:95;s:9:\\\"relations\\\";a:5:{i:0;s:10:\\\"orderItems\\\";i:1;s:25:\\\"orderItems.productVariant\\\";i:2;s:33:\\\"orderItems.productVariant.product\\\";i:3;s:30:\\\"orderItems.productVariant.size\\\";i:4;s:31:\\\"orderItems.productVariant.color\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:26:\\\"teonguoinoitieng@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Illuminate\\Database\\Eloquent\\RelationNotFoundException: Call to undefined relationship [productVariant] on model [App\\Models\\OrderItem]. in D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\RelationNotFoundException.php:35\nStack trace:\n#0 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(806): Illuminate\\Database\\Eloquent\\RelationNotFoundException::make(Object(App\\Models\\OrderItem), \'productVariant\')\n#1 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(110): Illuminate\\Database\\Eloquent\\Builder->Illuminate\\Database\\Eloquent\\{closure}()\n#2 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(808): Illuminate\\Database\\Eloquent\\Relations\\Relation::noConstraints(Object(Closure))\n#3 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(776): Illuminate\\Database\\Eloquent\\Builder->getRelation(\'productVariant\')\n#4 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(756): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelation(Array, \'productVariant\', Object(Closure))\n#5 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(724): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelations(Array)\n#6 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(203): Illuminate\\Database\\Eloquent\\Builder->get(Array)\n#7 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Relations\\Relation.php(166): Illuminate\\Database\\Eloquent\\Relations\\Relation->get()\n#8 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(787): Illuminate\\Database\\Eloquent\\Relations\\Relation->getEager()\n#9 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(756): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelation(Array, \'orderItems\', Object(Closure))\n#10 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Model.php(704): Illuminate\\Database\\Eloquent\\Builder->eagerLoadRelations(Array)\n#11 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(109): Illuminate\\Database\\Eloquent\\Model->load(Array)\n#12 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(62): App\\Mail\\OrderConfirm->restoreModel(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#13 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesModels.php(93): App\\Mail\\OrderConfirm->getRestoredPropertyValue(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#14 [internal function]: App\\Mail\\OrderConfirm->__unserialize(Array)\n#15 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(97): unserialize(\'O:34:\"Illuminat...\')\n#16 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(60): Illuminate\\Queue\\CallQueuedHandler->getCommand(Array)\n#17 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(138): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(121): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#29 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(181): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 D:\\laragon\\www\\laravelClass\\AsignmentLaravel\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 {main}', '2024-08-05 06:00:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_07_15_083137_create_categories_table', 1),
(7, '2024_07_15_084704_create_products_table', 1),
(8, '2024_07_15_084734_create_orders_table', 1),
(9, '2024_07_15_084944_create_order_details_table', 1),
(10, '2024_07_15_085109_create_promotions_table', 1),
(11, '2024_07_15_085124_create_banners_table', 1),
(12, '2024_07_23_170702_create_product_images_table', 1),
(13, '2024_07_27_112220_create_product_galleries', 1),
(14, '2024_07_27_112447_create_product_colors', 1),
(15, '2024_07_27_112518_create_product_sizes', 1),
(16, '2024_07_27_112559_create_product_variants', 1),
(17, '2024_07_31_045552_create_carts_table', 2),
(18, '2024_07_31_050141_create_cart_items_table', 2),
(19, '2024_07_31_063813_create_orders_table', 3),
(20, '2024_07_31_063939_create_order_items_table', 3),
(21, '2024_08_01_090047_remove_product_variant_id_from_carts_table', 4),
(22, '2024_08_02_093138_create_jobs_table', 5),
(23, '2024_08_04_183210_add_size_and_color_to_cart_items_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `total_price` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_email`, `user_name`, `user_address`, `user_phone`, `receiver_email`, `receiver_name`, `receiver_address`, `receiver_phone`, `order_status`, `payment_status`, `total_price`, `created_at`, `updated_at`) VALUES
(2, 1, 'luan@gmail.com', 'luannoname', 'Hà Nội', '0333', 'luan@gmail.com', 'luannoname', 'Hà Nội', '0394', 'pending', 'unpaid', 745000.00, '2024-08-02 00:32:16', '2024-08-03 02:34:51'),
(7, 1, 'luan@gmail.com', 'Hoàng Luân', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'Ngoc@gmail.com', 'Ngọc Xinh', 'Hà Nội', '0334678567', 'pending', 'unpaid', 318000.00, '2024-08-03 10:56:15', '2024-08-03 10:56:15'),
(8, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Hà Nội', '0334678567', 'pending', 'unpaid', 169000.00, '2024-08-03 11:10:33', '2024-08-03 11:10:33'),
(9, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Hà Nội', '0334678567', 'pending', 'unpaid', 507000.00, '2024-08-03 11:27:16', '2024-08-03 11:27:16'),
(10, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Hà Nội', '0334678567', 'pending', 'unpaid', 507000.00, '2024-08-03 11:38:25', '2024-08-03 11:38:25'),
(11, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Hà Nội', '0334678567', 'pending', 'unpaid', 169000.00, '2024-08-03 11:39:54', '2024-08-03 11:39:54'),
(12, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Hà Nội', '0334678567', 'pending', 'unpaid', 169000.00, '2024-08-03 12:01:04', '2024-08-03 12:01:04'),
(13, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Hà Nội', '0334678567', 'pending', 'unpaid', 149000.00, '2024-08-03 12:03:35', '2024-08-03 12:03:35'),
(16, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 406000.00, '2024-08-04 04:36:36', '2024-08-04 04:36:36'),
(17, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 273000.00, '2024-08-04 07:31:24', '2024-08-04 07:31:24'),
(19, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 273000.00, '2024-08-04 07:37:01', '2024-08-04 07:37:01'),
(22, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 203000.00, '2024-08-04 08:16:03', '2024-08-04 08:16:03'),
(23, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 203000.00, '2024-08-04 08:31:53', '2024-08-04 08:31:53'),
(24, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 203000.00, '2024-08-04 08:33:01', '2024-08-04 08:33:01'),
(25, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 203000.00, '2024-08-04 08:35:01', '2024-08-04 08:35:01'),
(26, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 203000.00, '2024-08-04 08:35:56', '2024-08-04 08:35:56'),
(27, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'delivered', 'unpaid', 203000.00, '2024-08-04 08:38:20', '2024-08-04 09:54:00'),
(28, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 273000.00, '2024-08-04 12:25:49', '2024-08-04 12:25:49'),
(29, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội1', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 12:37:09', '2024-08-04 12:37:09'),
(31, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội1', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 12:42:21', '2024-08-04 12:42:21'),
(32, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội1', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 12:42:48', '2024-08-04 12:42:48'),
(33, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội1', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 12:43:01', '2024-08-04 12:43:01'),
(34, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội1', '0334678567', 'pending', 'unpaid', 244000.00, '2024-08-04 12:45:47', '2024-08-04 12:45:47'),
(35, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội1', '0334678567', 'pending', 'unpaid', 244000.00, '2024-08-04 12:49:41', '2024-08-04 12:49:41'),
(36, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội1', '0334678567', 'pending', 'unpaid', 244000.00, '2024-08-04 12:50:14', '2024-08-04 12:50:14'),
(37, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:04:43', '2024-08-04 13:04:43'),
(45, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:22:28', '2024-08-04 13:22:28'),
(46, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:26:17', '2024-08-04 13:26:17'),
(47, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:29:53', '2024-08-04 13:29:53'),
(48, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:35:56', '2024-08-04 13:35:56'),
(49, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:41:07', '2024-08-04 13:41:07'),
(50, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:41:26', '2024-08-04 13:41:26'),
(51, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:42:36', '2024-08-04 13:42:36'),
(52, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:43:01', '2024-08-04 13:43:01'),
(53, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:43:15', '2024-08-04 13:43:15'),
(54, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:44:16', '2024-08-04 13:44:16'),
(55, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:44:38', '2024-08-04 13:44:38'),
(56, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:48:43', '2024-08-04 13:48:43'),
(57, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:51:07', '2024-08-04 13:51:07'),
(58, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:51:18', '2024-08-04 13:51:18'),
(59, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:52:52', '2024-08-04 13:52:52'),
(60, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:54:01', '2024-08-04 13:54:01'),
(61, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:55:25', '2024-08-04 13:55:25'),
(62, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:55:57', '2024-08-04 13:55:57'),
(63, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:56:14', '2024-08-04 13:56:14'),
(64, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:56:27', '2024-08-04 13:56:27'),
(65, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:58:43', '2024-08-04 13:58:43'),
(66, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:59:05', '2024-08-04 13:59:05'),
(67, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:59:19', '2024-08-04 13:59:19'),
(68, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:59:39', '2024-08-04 13:59:39'),
(69, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 13:59:57', '2024-08-04 13:59:57'),
(70, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:00:17', '2024-08-04 14:00:17'),
(71, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:01:12', '2024-08-04 14:01:12'),
(72, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:01:58', '2024-08-04 14:01:58'),
(73, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:02:51', '2024-08-04 14:02:51'),
(74, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:03:17', '2024-08-04 14:03:17'),
(75, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:03:49', '2024-08-04 14:03:49'),
(76, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:04:07', '2024-08-04 14:04:07'),
(77, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:04:14', '2024-08-04 14:04:14'),
(78, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:04:29', '2024-08-04 14:04:29'),
(79, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:04:45', '2024-08-04 14:04:45'),
(80, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:06:19', '2024-08-04 14:06:19'),
(81, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:07:27', '2024-08-04 14:07:27'),
(82, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:08:32', '2024-08-04 14:08:32'),
(83, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:08:56', '2024-08-04 14:08:56'),
(84, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:09:21', '2024-08-04 14:09:21'),
(85, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:09:35', '2024-08-04 14:09:35'),
(86, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-04 14:09:44', '2024-08-04 14:09:44'),
(87, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội2', '0334678567', 'pending', 'unpaid', 488000.00, '2024-08-04 14:10:49', '2024-08-04 14:10:49'),
(88, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội2', '0334678567', 'pending', 'unpaid', 488000.00, '2024-08-04 14:11:39', '2024-08-04 14:11:39'),
(89, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội2', '0334678567', 'pending', 'unpaid', 488000.00, '2024-08-04 14:12:05', '2024-08-04 14:12:05'),
(90, 2, 'teonguoinoitieng@gmail.com', 'luanph39383', 'Mỹ Đình - Nam Từ Liêm -Hà Nội', '0338476758', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội1', '0334678567', 'pending', 'unpaid', 122000.00, '2024-08-05 01:09:19', '2024-08-05 01:09:19'),
(91, 2, 'teonguoinoitieng@gmail.com', 'luanph39383', 'Mỹ Đình - Nam Từ Liêm -Hà Nội', '0338476758', 'ngoc@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội1', '0334678567', 'pending', 'unpaid', 70000.00, '2024-08-05 01:16:03', '2024-08-05 01:16:03'),
(92, 1, 'luan@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'teonguoinoitieng@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội3', '0334678567', 'pending', 'unpaid', 140000.00, '2024-08-05 04:50:44', '2024-08-05 04:50:44'),
(93, 4, 'teonguoinoitieng@gmail.com', 'luanmayman', 'Hà Nội', '0336478236', 'teonguoinoitieng@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội3', '0334678567', 'confirmed', 'unpaid', 70000.00, '2024-08-05 05:08:21', '2024-08-05 05:14:44'),
(94, 1, 'luannoname04@gmail.com', 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'teonguoinoitieng@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội', '0334678567', 'pending', 'unpaid', 70000.00, '2024-08-05 05:43:39', '2024-08-05 05:43:39'),
(95, 5, 'luan2@gmail.com', 'luanmayman1', 'Hà Nội', '0336478236', 'teonguoinoitieng@gmail.com', 'Ngọc Xinh', 'Thanh Xuân - Hà Nội3', '0334678567', 'pending', 'unpaid', 70000.00, '2024-08-05 05:59:57', '2024-08-05 05:59:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `product_variant_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price_sale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variant_size_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variant_color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `product_variant_id`, `order_id`, `product_name`, `product_sku`, `product_image_thumb`, `product_price`, `product_price_sale`, `variant_size_name`, `variant_color_name`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 10, 2, 'Áo sơ mi Caro', 'str5-1', 'uploads/products/Boftmo64KhvsmHJPPPteRu7nZeTpAbRcn9QNHEjf.jpg', '500000', '149000', 'M', 'Trắng', '5', '2024-08-02 00:32:17', '2024-08-02 00:32:17'),
(7, 10, 2, 'Áo sơ mi Caro', 'str5-1', 'uploads/products/Boftmo64KhvsmHJPPPteRu7nZeTpAbRcn9QNHEjf.jpg', '500000', '149000', 'M', 'Trắng', '3', '2024-08-02 00:32:17', '2024-08-02 00:32:17'),
(8, 36, 7, 'Áo sơ mi nâu đậm', 'ASM003', 'uploads/products/4AJZGupyPybLAQtkeaJln6oncBpHjJjAFiIWFUHO.jpg', '400000', '169000', 'S', 'Trắng', '1', '2024-08-03 10:56:15', '2024-08-03 10:56:15'),
(9, 10, 7, 'Áo sơ mi Caro', 'str5-1', 'uploads/products/Boftmo64KhvsmHJPPPteRu7nZeTpAbRcn9QNHEjf.jpg', '500000', '149000', 'M', 'Trắng', '1', '2024-08-03 10:56:15', '2024-08-03 10:56:15'),
(10, 36, 8, 'Áo sơ mi nâu đậm', 'ASM003', 'uploads/products/4AJZGupyPybLAQtkeaJln6oncBpHjJjAFiIWFUHO.jpg', '400000', '169000', 'S', 'Trắng', '1', '2024-08-03 11:10:33', '2024-08-03 11:10:33'),
(11, 36, 9, 'Áo sơ mi nâu đậm', 'ASM003', 'uploads/products/4AJZGupyPybLAQtkeaJln6oncBpHjJjAFiIWFUHO.jpg', '400000', '169000', 'S', 'Trắng', '3', '2024-08-03 11:27:16', '2024-08-03 11:27:16'),
(12, 36, 10, 'Áo sơ mi nâu đậm', 'ASM003', 'uploads/products/4AJZGupyPybLAQtkeaJln6oncBpHjJjAFiIWFUHO.jpg', '400000', '169000', 'S', 'Trắng', '3', '2024-08-03 11:38:25', '2024-08-03 11:38:25'),
(13, 36, 11, 'Áo sơ mi nâu đậm', 'ASM003', 'uploads/products/4AJZGupyPybLAQtkeaJln6oncBpHjJjAFiIWFUHO.jpg', '400000', '169000', 'S', 'Trắng', '1', '2024-08-03 11:39:54', '2024-08-03 11:39:54'),
(14, 36, 12, 'Áo sơ mi nâu đậm', 'ASM003', 'uploads/products/4AJZGupyPybLAQtkeaJln6oncBpHjJjAFiIWFUHO.jpg', '400000', '169000', 'S', 'Trắng', '1', '2024-08-03 12:01:04', '2024-08-03 12:01:04'),
(15, 10, 13, 'Áo sơ mi Caro', 'str5-1', 'uploads/products/Boftmo64KhvsmHJPPPteRu7nZeTpAbRcn9QNHEjf.jpg', '500000', '149000', 'M', 'Trắng', '1', '2024-08-03 12:03:35', '2024-08-03 12:03:35'),
(16, 45, 19, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'S', 'Vàng', '2', '2024-08-04 07:37:01', '2024-08-04 07:37:01'),
(17, 43, 22, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/ANhlE6ToDov5SdyKMfe7aHlgcK8oxQpUwkzyUAjX.jpg', '199000', '133000', 'S', 'Trắng', '1', '2024-08-04 08:16:03', '2024-08-04 08:16:03'),
(18, 45, 22, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'S', 'Vàng', '1', '2024-08-04 08:16:03', '2024-08-04 08:16:03'),
(19, 43, 23, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/ANhlE6ToDov5SdyKMfe7aHlgcK8oxQpUwkzyUAjX.jpg', '199000', '133000', 'S', 'Trắng', '1', '2024-08-04 08:31:53', '2024-08-04 08:31:53'),
(20, 45, 23, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'S', 'Vàng', '1', '2024-08-04 08:31:53', '2024-08-04 08:31:53'),
(21, 43, 24, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/ANhlE6ToDov5SdyKMfe7aHlgcK8oxQpUwkzyUAjX.jpg', '199000', '133000', 'S', 'Trắng', '1', '2024-08-04 08:33:01', '2024-08-04 08:33:01'),
(22, 45, 24, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'S', 'Vàng', '1', '2024-08-04 08:33:01', '2024-08-04 08:33:01'),
(23, 43, 25, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/ANhlE6ToDov5SdyKMfe7aHlgcK8oxQpUwkzyUAjX.jpg', '199000', '133000', 'S', 'Trắng', '1', '2024-08-04 08:35:01', '2024-08-04 08:35:01'),
(24, 45, 25, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'S', 'Vàng', '1', '2024-08-04 08:35:01', '2024-08-04 08:35:01'),
(25, 43, 26, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/ANhlE6ToDov5SdyKMfe7aHlgcK8oxQpUwkzyUAjX.jpg', '199000', '133000', 'S', 'Trắng', '1', '2024-08-04 08:35:56', '2024-08-04 08:35:56'),
(26, 45, 26, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'S', 'Vàng', '1', '2024-08-04 08:35:56', '2024-08-04 08:35:56'),
(27, 43, 27, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/ANhlE6ToDov5SdyKMfe7aHlgcK8oxQpUwkzyUAjX.jpg', '199000', '133000', 'S', 'Trắng', '1', '2024-08-04 08:38:20', '2024-08-04 08:38:20'),
(28, 45, 27, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'S', 'Vàng', '1', '2024-08-04 08:38:20', '2024-08-04 08:38:20'),
(29, 43, 28, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/ANhlE6ToDov5SdyKMfe7aHlgcK8oxQpUwkzyUAjX.jpg', '199000', '133000', 'S', 'Trắng', '1', '2024-08-04 12:25:49', '2024-08-04 12:25:49'),
(30, 45, 28, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'S', 'Vàng', '1', '2024-08-04 12:25:49', '2024-08-04 12:25:49'),
(31, 45, 28, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'S', 'Vàng', '1', '2024-08-04 12:25:49', '2024-08-04 12:25:49'),
(32, 44, 29, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Đen', '1', '2024-08-04 12:37:09', '2024-08-04 12:37:09'),
(34, 44, 31, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Đen', '1', '2024-08-04 12:42:21', '2024-08-04 12:42:21'),
(35, 44, 32, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Đen', '1', '2024-08-04 12:42:48', '2024-08-04 12:42:48'),
(36, 44, 33, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Đen', '1', '2024-08-04 12:43:01', '2024-08-04 12:43:01'),
(37, 44, 34, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Đen', '2', '2024-08-04 12:45:47', '2024-08-04 12:45:47'),
(38, 44, 35, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Đen', '2', '2024-08-04 12:49:41', '2024-08-04 12:49:41'),
(39, 44, 36, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Đen', '2', '2024-08-04 12:50:14', '2024-08-04 12:50:14'),
(40, 44, 37, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Đen', '1', '2024-08-04 13:04:43', '2024-08-04 13:04:43'),
(48, 44, 45, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:22:28', '2024-08-04 13:22:28'),
(49, 44, 46, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:26:17', '2024-08-04 13:26:17'),
(50, 44, 47, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:29:53', '2024-08-04 13:29:53'),
(51, 44, 48, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:35:56', '2024-08-04 13:35:56'),
(52, 44, 49, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:41:07', '2024-08-04 13:41:07'),
(53, 44, 50, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:41:26', '2024-08-04 13:41:26'),
(54, 44, 51, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:42:36', '2024-08-04 13:42:36'),
(55, 44, 52, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:43:01', '2024-08-04 13:43:01'),
(56, 44, 53, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:43:15', '2024-08-04 13:43:15'),
(57, 44, 54, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:44:16', '2024-08-04 13:44:16'),
(58, 44, 55, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:44:38', '2024-08-04 13:44:38'),
(59, 44, 56, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:48:43', '2024-08-04 13:48:43'),
(60, 44, 57, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:51:07', '2024-08-04 13:51:07'),
(61, 44, 58, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:51:18', '2024-08-04 13:51:18'),
(62, 44, 59, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:52:52', '2024-08-04 13:52:52'),
(63, 44, 60, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:54:01', '2024-08-04 13:54:01'),
(64, 44, 61, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:55:25', '2024-08-04 13:55:25'),
(65, 44, 62, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:55:57', '2024-08-04 13:55:57'),
(66, 44, 63, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:56:14', '2024-08-04 13:56:14'),
(67, 44, 64, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:56:27', '2024-08-04 13:56:27'),
(68, 44, 65, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:58:43', '2024-08-04 13:58:43'),
(69, 44, 66, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:59:05', '2024-08-04 13:59:05'),
(70, 44, 67, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:59:19', '2024-08-04 13:59:19'),
(71, 44, 68, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:59:39', '2024-08-04 13:59:39'),
(72, 44, 69, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 13:59:57', '2024-08-04 13:59:57'),
(73, 44, 70, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:00:17', '2024-08-04 14:00:17'),
(74, 44, 71, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:01:12', '2024-08-04 14:01:12'),
(75, 44, 72, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:01:58', '2024-08-04 14:01:58'),
(76, 44, 73, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:02:51', '2024-08-04 14:02:51'),
(77, 44, 74, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:03:17', '2024-08-04 14:03:17'),
(78, 44, 75, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:03:49', '2024-08-04 14:03:49'),
(79, 44, 76, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:04:07', '2024-08-04 14:04:07'),
(80, 44, 77, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:04:14', '2024-08-04 14:04:14'),
(81, 44, 78, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:04:29', '2024-08-04 14:04:29'),
(82, 44, 79, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:04:45', '2024-08-04 14:04:45'),
(83, 44, 80, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:06:19', '2024-08-04 14:06:19'),
(84, 44, 81, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:07:27', '2024-08-04 14:07:27'),
(85, 44, 82, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:08:32', '2024-08-04 14:08:32'),
(86, 44, 83, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:08:56', '2024-08-04 14:08:56'),
(87, 44, 84, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:09:21', '2024-08-04 14:09:21'),
(88, 44, 85, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:09:35', '2024-08-04 14:09:35'),
(89, 44, 86, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-04 14:09:44', '2024-08-04 14:09:44'),
(90, 44, 87, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Đen', '2', '2024-08-04 14:10:49', '2024-08-04 14:10:49'),
(91, 44, 87, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '2', '2024-08-04 14:10:49', '2024-08-04 14:10:49'),
(92, 44, 88, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Đen', '2', '2024-08-04 14:11:39', '2024-08-04 14:11:39'),
(93, 44, 88, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '2', '2024-08-04 14:11:39', '2024-08-04 14:11:39'),
(94, 44, 89, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Đen', '2', '2024-08-04 14:12:05', '2024-08-04 14:12:05'),
(95, 44, 89, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '2', '2024-08-04 14:12:05', '2024-08-04 14:12:05'),
(96, 44, 90, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', '149000', '122000', 'M', 'Trắng', '1', '2024-08-05 01:09:19', '2024-08-05 01:09:19'),
(97, 45, 91, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'S', 'Đen', '1', '2024-08-05 01:16:03', '2024-08-05 01:16:03'),
(98, 45, 92, 'Nguyễn Văn Luâ', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'S', 'Vàng', '2', '2024-08-05 04:50:44', '2024-08-05 04:50:44'),
(99, 45, 93, 'Áo Sơ Mi Cọc Tay', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'M', 'Vàng', '1', '2024-08-05 05:08:21', '2024-08-05 05:08:21'),
(100, 45, 94, 'Áo Sơ Mi Cọc Tay', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'M', 'Vàng', '1', '2024-08-05 05:43:39', '2024-08-05 05:43:39'),
(101, 45, 95, 'Áo Sơ Mi Cọc Tay', 'AP001sfs', 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', '129000', '70000', 'M', 'Vàng', '1', '2024-08-05 05:59:57', '2024-08-05 05:59:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(10,2) NOT NULL,
  `price_sale` double(10,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `material` text COLLATE utf8mb4_unicode_ci,
  `use_manual` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_best_sale` tinyint(1) NOT NULL DEFAULT '0',
  `is_40_sale` tinyint(1) NOT NULL DEFAULT '0',
  `is_hot_online` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `sku`, `category_id`, `image_thumb`, `price`, `price_sale`, `description`, `material`, `use_manual`, `is_active`, `is_best_sale`, `is_40_sale`, `is_hot_online`, `created_at`, `updated_at`) VALUES
(1, 'Voluptas fugit exercitationem corrupti.', 'voluptas-fugit-exercitationem-corrupti6gMEyj05', 'HoXO98Nh0', 5, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Minima ut optio eum. Voluptatem aperiam rerum est sunt cupiditate consequatur.', 'Iste vitae consequatur non non omnis. Ea neque officia aut voluptates dolorem.', 'Non repellendus similique saepe illo. Voluptas dolore distinctio nobis ut. Qui ad nemo nihil id.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(2, 'Neque nesciunt neque voluptatem illum.', 'neque-nesciunt-neque-voluptatem-illumQcvuVm9j', 'aeXI5yl21', 4, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Ut non sint asperiores quod. At et beatae sint. Rem voluptate ipsa inventore quibusdam.', 'Nostrum maiores aut quos ut. Sit magnam ipsa facere recusandae enim. Debitis et nisi praesentium.', 'Earum delectus iste aut commodi quas atque. Alias et eum fugit quisquam expedita et.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(3, 'Qui nisi hic ullam eveniet non nam.', 'qui-nisi-hic-ullam-eveniet-non-namfPj1ss7W', 'hm2zTdVr2', 2, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Beatae iure aut nam labore. Necessitatibus id in sed fuga aut.', 'Error et facilis et. Eveniet numquam rerum sed. Recusandae ut dignissimos voluptatum enim.', 'Dolorem et dolores corrupti sint consequatur. Praesentium eos qui deleniti ut. Sed ex pariatur et.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(4, 'Odio aut necessitatibus nobis ut aut.', 'odio-aut-necessitatibus-nobis-ut-autD2NfL15J', 'QAGI1FnF3', 5, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Sunt culpa incidunt est fuga. Pariatur quo illo occaecati consectetur.', 'Esse est quam est sint id reiciendis sed. Velit quas rem ipsam.', 'Dicta temporibus a sed optio. Sed sit ratione quod eos. Vero error autem rem et odit.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(6, 'Saepe et sed aut odit.', 'saepe-et-sed-aut-oditOk6KBQoX', 'A4yy267P5', 1, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Repellendus et reprehenderit odit eius perspiciatis in quidem. Nostrum esse sequi enim.', 'Et dolores inventore dolores reiciendis quisquam voluptate eos. Odit adipisci ad ab ea et ea.', 'Perspiciatis culpa vel dolores in. Ut ea eum accusamus. Et distinctio magni magni hic maxime.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(7, 'Qui modi sit accusamus.', 'qui-modi-sit-accusamusnbRIUy1Y', '0wmlokyD6', 5, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Porro necessitatibus perspiciatis et velit iure. Impedit est id quas in dolores.', 'Deleniti error quam autem. Esse impedit laudantium illo quis aut debitis similique adipisci.', 'Ipsa recusandae aut animi velit et. Nihil ducimus sunt aut nostrum quam. Qui molestiae qui sint.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(8, 'Velit autem enim dolore at.', 'velit-autem-enim-dolore-attisEKSQY', '8b3hopdA7', 4, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Est et minus minus incidunt cupiditate sunt. Asperiores autem a ea cum reprehenderit.', 'Neque quidem perferendis porro nihil quas. Libero corporis eum ducimus.', 'Occaecati temporibus quae excepturi quisquam sunt laborum. Ea pariatur corporis possimus dolorem.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(9, 'Voluptatibus dolores est at maiores.', 'voluptatibus-dolores-est-at-maioresUz1G6MU7', 'w3ewJp6d8', 5, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Recusandae adipisci distinctio sint eius. Ea voluptatem sit blanditiis consequuntur.', 'Rerum laudantium et ad. Est ad delectus omnis beatae. Ut quo aut molestiae.', 'Autem similique impedit vel eius. Voluptatem quas ut necessitatibus quia voluptatibus est.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(10, 'Molestiae minima veritatis ratione.', 'molestiae-minima-veritatis-rationeTRMyzBGA', 'mbO6xXsr9', 1, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Ea quaerat voluptatem nihil consequatur vel perspiciatis nemo. Laborum consequatur quis minus.', 'Mollitia sit excepturi ut quae asperiores ut omnis. Aut ducimus porro maiores doloremque id.', 'Voluptatibus neque officiis suscipit reprehenderit. Odio nulla et voluptate totam.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(11, 'Eum alias ut repellendus non sint.', 'eum-alias-ut-repellendus-non-sintWFtPdtGj', 'KX6mZIN810', 1, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Aut sit vel non. Fuga quod ex a doloremque in qui.', 'Provident molestiae voluptas culpa sed fugiat sit. Ipsa iure illo aut amet mollitia eum.', 'Et nam aut alias at. Quos voluptas nemo libero perferendis.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(12, 'Vel optio quo et.', 'vel-optio-quo-etiyENfKc4', 'VDTHVgOv11', 1, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Necessitatibus sequi et delectus tempore. Soluta praesentium temporibus consequatur eum.', 'Sunt et et ut. Excepturi expedita voluptas quis et illo culpa. Ex quo ullam quo voluptate.', 'Expedita eius cumque dolore velit eum a provident. Eum sunt ea et aliquid et laudantium doloremque.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(13, 'Quibusdam expedita autem dolor et vel.', 'quibusdam-expedita-autem-dolor-et-velLYndslC6', 'SBaZEDyR12', 3, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Est officia tempore eum cupiditate et quae. Unde unde cupiditate illo consequatur amet.', 'At iure perferendis neque vero aut officiis sint. Et voluptas neque esse ipsum.', 'Aperiam consequatur qui a qui ut nisi cupiditate. Iste esse ipsam maxime alias odit aut.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(14, 'Voluptas fuga tempore voluptatem.', 'voluptas-fuga-tempore-voluptatemgUQK9RBL', 'L14DLYrI13', 2, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Et et vitae voluptate. Iste ut accusamus non.', 'Dolor in et earum quia. Modi et quos optio accusamus. Ut tenetur eos est.', 'Dolores deserunt minima sint perspiciatis unde. Ut occaecati quis eius reiciendis quia.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(15, 'Delectus in et omnis et.', 'delectus-in-et-omnis-eteAuLNIo5', 't1q37xUV14', 2, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Voluptas aut sit aliquam ipsam et. Error omnis debitis reiciendis ut qui omnis nihil et.', 'Sunt ut sit corporis. Dolore distinctio in repudiandae qui non labore. Ab ex quia natus sit.', 'Beatae quis sed nobis nam. Porro minus dolores cupiditate quia quasi odio. Non suscipit rem quidem.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(16, 'Nihil non nisi delectus molestiae sed.', 'nihil-non-nisi-delectus-molestiae-sedxc1qe5gA', '3eGVekxw15', 4, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Labore voluptatibus consequuntur placeat id delectus incidunt. Consequuntur et ea sunt enim hic.', 'Beatae aliquam commodi sint et accusamus vel eos quis. Dolor enim repudiandae voluptates tempore.', 'Perspiciatis est explicabo quia nulla hic. Consequatur tenetur voluptatum esse cupiditate.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(17, 'Eligendi aut et placeat ad.', 'eligendi-aut-et-placeat-adiJryp9HX', '1g8JTzTw16', 5, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Nam est voluptatem aperiam consequuntur dolorem. Aperiam eaque non nulla. Est modi est optio.', 'Suscipit odio et et. Architecto ut aliquid est et ut consequuntur possimus.', 'Consectetur rerum iste ipsa atque rerum. Qui sit et nobis voluptas quia totam.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(18, 'Dicta molestiae quae sint at.', 'dicta-molestiae-quae-sint-atfAW76wAP', 'VZwnUWOr17', 3, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Laboriosam nesciunt quis ratione cumque ipsam culpa mollitia ullam. Suscipit repellat assumenda ad.', 'Dicta iusto natus eos sapiente sint. Est eum iure architecto et.', 'Tempore assumenda voluptatem at et et quis quidem est. Perferendis quia quas neque.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(19, 'Assumenda et accusantium rem ut.', 'assumenda-et-accusantium-rem-utau56DPXP', 'ADt29DOY18', 4, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Ea illum eos pariatur quas. In sint sed aut nulla sapiente.', 'Iste voluptatem repellat velit. Autem praesentium quo est impedit. Aut vel et aut praesentium.', 'Nesciunt quae et harum ut eos in earum. Omnis quos dicta sunt.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(20, 'Possimus autem deleniti eos sunt minus.', 'possimus-autem-deleniti-eos-sunt-minusKqBCW3d9', 'd8blpvq919', 2, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Tenetur officiis nobis repellendus quis nesciunt. Autem totam repellat sunt.', 'Cumque quasi omnis vel. Ipsum et voluptatum est voluptates.', 'Sint atque qui qui. Et ut porro autem soluta. Modi et pariatur fugit ipsam sunt.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(21, 'Laudantium quia eius nostrum.', 'laudantium-quia-eius-nostrum5pszRu5V', 'aA2A67JA20', 5, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Quisquam ratione vitae inventore. A aut doloribus voluptatem et facere labore. Nemo sit et debitis.', 'Est in veniam voluptatibus vel hic dolores omnis harum. Ratione ut dolore dignissimos eos.', 'Sed sunt dicta minima est et. Ut dolores impedit ad non. Quo dolor ut animi aperiam ea.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(22, 'Est non delectus ut.', 'est-non-delectus-utg5DwjdOu', 'jl2XJpng21', 1, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Quos consectetur ut fugiat. Aut nesciunt vel deleniti sed. Nesciunt enim dolores officiis quod.', 'Quia nisi nostrum error voluptate sequi aut aut. Pariatur et aut ipsa quo sit et temporibus.', 'Sed labore nobis itaque consequatur illo. Distinctio ducimus dolorem qui libero dolorem eos.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(23, 'Eos sapiente facere ut harum quae.', 'eos-sapiente-facere-ut-harum-quaeqwihC3Uz', 'VSekKPEZ22', 5, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Repudiandae tenetur sunt facere odio unde minus numquam sit. Sit architecto nam ea ut.', 'Et expedita voluptate eum et. Officiis debitis laborum culpa facilis.', 'Voluptatem hic quia est et earum quas. Tempora et et eius odit.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(24, 'Voluptas ea sapiente hic unde qui amet.', 'voluptas-ea-sapiente-hic-unde-qui-ametwzOgl79t', 'B2kxobOx23', 4, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Quia enim error aliquid provident fugit ipsa. Soluta quos ex esse nam quia aut sint.', 'Fuga in perferendis excepturi similique repellendus fugiat quo. Aut magnam velit voluptate a.', 'Velit sint dolore explicabo itaque. Eligendi corporis eos sequi iusto. Sequi ad vitae esse.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(25, 'Dicta voluptatem illo quia cumque.', 'dicta-voluptatem-illo-quia-cumque3sQnuhpb', 'rhm0vtYM24', 2, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Qui voluptatibus est maxime totam ipsum. Dolore corporis a molestiae ut ut.', 'Facilis assumenda incidunt eum vel adipisci. Porro qui sit et id quos iure.', 'Ex qui ut unde eos maiores. Quo nemo aut vel amet. Fuga maxime nulla est facilis sapiente et fugit.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(26, 'Consectetur aliquam sit fuga tempora.', 'consectetur-aliquam-sit-fuga-temporaUV4HvZLU', 'aCWOVcyq25', 1, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Ab et velit et et error error voluptas. Consequatur ipsum fuga unde consectetur natus.', 'Hic temporibus enim dolore qui earum ex velit. Eos sed et eligendi ut perferendis.', 'Sit quos vel ad incidunt sit quia. Neque harum reprehenderit dolorem maiores ut.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(27, 'Est voluptatibus iure atque deleniti.', 'est-voluptatibus-iure-atque-delenitifOEpYeWQ', 'EEOKqnCT26', 1, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Eveniet doloribus laudantium est qui. Autem laudantium exercitationem sunt fugiat atque non.', 'Id et eum ut voluptatem. Non quo neque eaque.', 'Vel enim quos laborum adipisci. Ut et quia neque qui.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(28, 'Vel nisi iusto repellat neque quam.', 'vel-nisi-iusto-repellat-neque-quamy0ZodIs4', 'J42O2PQ027', 1, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Aut deserunt dolorem error ex et deleniti vitae. Sint non qui laborum quaerat illo earum.', 'Nobis commodi atque debitis quam eum ea. Quisquam aut dicta eligendi et et eos.', 'Velit optio modi id corporis. Iste id eius ut est. Architecto exercitationem ut saepe praesentium.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(29, 'Porro fuga facere quo et modi et dolor.', 'porro-fuga-facere-quo-et-modi-et-dolorpGeGzFqP', 'dqlKjyPp28', 5, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Et perspiciatis fuga magnam sed deserunt. Culpa sit quaerat neque. Consequatur quaerat qui labore.', 'Aut sequi perferendis rem asperiores qui sapiente. Quia enim amet voluptatem rerum est quia.', 'Similique itaque voluptas quae. Vel blanditiis et ea.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(30, 'Voluptatem ex libero recusandae.', 'voluptatem-ex-libero-recusandaeG0OW78Yt', 'GGoHGrjj29', 5, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Quibusdam maiores nesciunt quia sit vero. Eveniet magnam illo voluptatem ut ad dolorum.', 'Dolor quia at cumque. Nulla nisi culpa quod ut. Quia qui et est eaque voluptas pariatur rerum.', 'Quidem incidunt velit est. Rerum officia non soluta molestiae neque. Aut aspernatur a impedit et.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(31, 'Sint eius ut quo.', 'sint-eius-ut-quosNoI79l5', 'ZS7pBqRC30', 2, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Vero deserunt id qui quia sapiente accusantium. Reiciendis et deleniti et ut eius sed.', 'Quidem dicta quidem quam assumenda. Eveniet dolores enim qui labore pariatur non nostrum.', 'Sit ut sunt qui sequi non. Dolores et quis magnam perspiciatis rem. Ad et est vero vero.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(32, 'Adipisci animi vel ut.', 'adipisci-animi-vel-utMVxJG3LN', 'MByoUmKK31', 4, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Fugiat incidunt quibusdam atque sed. Dolore accusamus sapiente assumenda et. Quia aut aut ex.', 'Porro neque mollitia maxime rem rerum dolor dicta. Consequatur in dolor similique.', 'Maxime eum quidem laboriosam saepe. Magnam vel cumque voluptas maiores dicta facere.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(33, 'Maxime dolorem ut ipsam earum.', 'maxime-dolorem-ut-ipsam-earumuIeZfwYl', '1g0x9Hmb32', 2, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'In cumque animi quis ullam sit sed. Eos nam quibusdam ea officia sed. Nostrum odit animi similique.', 'Ea nemo quis harum alias nobis. Commodi illo ut vel voluptatem consequatur.', 'Quia iste non voluptatibus. Totam rerum et quibusdam incidunt. Facere perferendis sed quia.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(34, 'Dolorum et architecto quod et.', 'dolorum-et-architecto-quod-etDh5rcYWx', 'morKSLoA33', 1, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Sint quo ut cum suscipit neque velit aperiam. Voluptatem rem dolores voluptas accusantium esse et.', 'Qui culpa aut rem. Vitae quis debitis nobis minima id esse odit. Qui aut minus quae enim sunt.', 'Eligendi aut debitis deleniti quaerat vel voluptas atque. Autem iste natus vel voluptatum ea.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(35, 'Aut id qui dolores aut similique.', 'aut-id-qui-dolores-aut-similique7eDFrGDE', 'kcP2cLIs34', 1, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Dolore sint laudantium enim esse. Eos omnis ea quisquam fugiat saepe eum.', 'Facere fugiat placeat dolorem magnam. Qui qui quo omnis quia quia.', 'Et occaecati qui aut beatae. Similique tempora dolore minima odit velit vel.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(37, 'Aperiam omnis odit dolores.', 'aperiam-omnis-odit-doloresMKTdi2fo', '4O0shcII36', 5, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Numquam voluptatem id reprehenderit quod. Iure dolorum nam labore eum aliquid sunt.', 'Est eos et tempore quos facilis. Voluptatibus quia rerum molestias alias enim hic.', 'Consectetur velit quam et. Voluptatem omnis sunt rem iste qui maiores aut.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(41, 'Eveniet tenetur non velit nihil.', 'eveniet-tenetur-non-velit-nihilo8A1xOqE', '1MEueDlB40', 3, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Debitis odit reiciendis sed. Et dolor illum nemo ipsa.', 'Quos dolorum nihil voluptatem at sit et excepturi. Blanditiis sequi maxime cumque nam eos ex aut.', 'Molestiae deserunt doloribus et facilis rerum est. Perferendis suscipit ex pariatur culpa.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(44, 'Similique ut eos ullam.', 'similique-ut-eos-ullamZrQMEJkt', 'nSVPMr9o43', 3, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Eos vel quia ex cupiditate. Voluptatum reiciendis qui cumque et velit.', 'Et non voluptatem atque nihil. Aut ipsa assumenda eos. Est minus quia quo minus.', 'Ut hic enim esse est. Laboriosam eveniet aliquid ut.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(45, 'Consequatur debitis delectus et.', 'consequatur-debitis-delectus-eth6TUxKNf', 'MqtEaNm544', 1, 'https://tokyolife.vn/_next/image?url=https%3A%2F%2Fpm2ec.s3.ap-southeast-1.amazonaws.com%2Fcms%2F17213643698935796.png&w=1920&q=75', 100000.00, 69000.00, 'Aut non dicta dicta quis. Mollitia commodi magni dolorem unde. Rerum est natus officia vel.', 'Ipsam et est iusto dolor in fuga nihil nihil. Et modi quod minima et aliquam id suscipit.', 'Quam voluptatem culpa sunt et. Aut quaerat aut reiciendis earum.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(48, 'Eligendi deleniti quia voluptates sint.', 'eligendi-deleniti-quia-voluptates-sint-jw34sfqz47', 'Jw34sFQZ47', 5, 'uploads/products/62XJuYLlS3ubS8zdVZfQlBlWjn2BPez0THoq0lOW.jpg', 100000.00, 69000.00, 'Error facilis fuga nam cupiditate consequuntur. Maxime nihil quia sunt labore iste asperiores.', 'Velit cumque rerum dolor qui. Quam ut laborum aut omnis. Et cupiditate numquam possimus rerum sit.', 'Delectus quaerat vero quod consectetur a quia sed. Vitae laborum officia et nobis minima sequi.', 1, 0, 0, 0, '2024-07-29 04:47:27', '2024-07-31 05:57:33'),
(54, 'Áo sơ mi Caro', 'ao-so-mi-caro-str5-1-1', 'str5-1', 3, 'uploads/products/Boftmo64KhvsmHJPPPteRu7nZeTpAbRcn9QNHEjf.jpg', 500000.00, 149000.00, NULL, NULL, NULL, 1, 1, 0, 0, '2024-07-29 11:54:08', '2024-07-31 05:56:33'),
(68, 'Nguyễn Văn Luâ', 'nguyen-van-lua-sfssfs', 'sfssfs', 1, 'uploads/products/W2eNfEFyBApUCHtLqxyFRGV9CXWgZij4jeUc9fs1.jpg', 200000.00, 149000.00, '<h1><b>Áo sơ mi</b></h1>', NULL, NULL, 1, 0, 0, 0, '2024-07-30 08:14:15', '2024-08-05 05:18:15'),
(69, 'Áo sơ mi nâu đậm', 'ao-so-mi-nau-dam-asm003-1', 'ASM003', 4, 'uploads/products/4AJZGupyPybLAQtkeaJln6oncBpHjJjAFiIWFUHO.jpg', 400000.00, 169000.00, 'haha', NULL, NULL, 1, 1, 1, 0, '2024-07-30 08:19:54', '2024-08-05 03:54:14'),
(70, 'luannoname3', 'luannoname3-ap001-1', 'AP001', 2, 'uploads/products/BihdULTRgGjBbNRIPdqXdeH4wvKyrYgR55qqAlM6.jpg', 600000.00, 149000.00, '<h1><p style=\"box-sizing: inherit; font-family: SVN-poppins, sans-serif; font-size: 16px;\"><span style=\"box-sizing: inherit; font-weight: 700;\"><img src=\"https://pm2ec.s3.ap-southeast-1.amazonaws.com/cms/17204051155696214.jpg\" width=\"100%\" style=\"box-sizing: inherit; max-width: 100%; height: auto;\"></span></p><p data-sourcepos=\"5:1-5:41\" style=\"box-sizing: inherit; font-family: SVN-poppins, sans-serif; font-size: 16px;\"><span style=\"box-sizing: inherit; font-size: 12pt;\"><span style=\"box-sizing: inherit; font-weight: 700;\"><img src=\"https://pm2ec.s3.ap-southeast-1.amazonaws.com/cms/17204050430143908.jpg\" width=\"100%\" style=\"box-sizing: inherit; max-width: 100%; height: auto;\"></span></span></p><p style=\"box-sizing: inherit; font-family: SVN-poppins, sans-serif; font-size: 16px;\"><span style=\"box-sizing: inherit; font-size: 12pt;\"><img src=\"https://pm2ec.s3.ap-southeast-1.amazonaws.com/cms/17204051679476812.jpg\" width=\"100%\" style=\"box-sizing: inherit; max-width: 100%; height: auto;\"></span></p></h1>', NULL, NULL, 1, 1, 1, 0, '2024-07-30 09:29:09', '2024-07-31 12:00:56'),
(71, 'luannoname044', 'luannoname044-ap001sf', 'AP001sf', 1, 'uploads/products/yTNLlqsv8hw1fs7FC2tIBMXdbR3RpTtfQK6SGh1C.jpg', 20000.00, 10000.00, NULL, NULL, NULL, 1, 0, 0, 0, '2024-07-30 10:29:00', '2024-07-30 10:29:00'),
(72, 'luannoname044', 'luannoname044-ap001ad', 'AP001àd', 1, 'uploads/products/1Z9zkNYH89lKILRG95CyX9U5EZsi2jYWBXBUgGQH.jpg', 200000.00, 149000.00, NULL, NULL, NULL, 1, 0, 1, 0, '2024-07-30 11:20:53', '2024-07-30 11:20:53'),
(73, 'Nguyễn Văn Luâ', 'nguyen-van-lua-ap001s', 'AP001s', 3, 'uploads/products/T1iGBuIeM3gNKdmgIrE2Y7PT7fELC0ym1GJn2066.jpg', 500000.00, 0.00, NULL, NULL, NULL, 1, 0, 0, 1, '2024-07-30 12:42:58', '2024-07-30 12:42:58'),
(74, 'Áo Sơ Mi Cọc Tay', 'nguyen-van-lua-ap001sfs-1', 'AP001sfs', 2, 'uploads/products/7Qz2IZ0yP1n0M9isZrMa4JLH1X1uNTQmulCMvz0p.jpg', 599000.00, 169000.00, NULL, NULL, NULL, 1, 1, 0, 0, '2024-08-03 13:00:49', '2024-08-05 02:26:18'),
(76, 'Áo sơ mi sọc', 'ao-so-mi-soc-asmsocj', 'asmsocj', 3, 'uploads/products/ooctMv3h4Won6A4mTyFtxc4usX4puds2OGachTis.jpg', 499000.00, 149000.00, '<h3>Áo đẹp</h3>', NULL, NULL, 1, 0, 1, 0, '2024-08-05 03:53:31', '2024-08-05 04:45:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_colors`
--

INSERT INTO `product_colors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Trắng', '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(2, 'Đen', '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(3, 'Vàng', '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(4, 'Đỏ', '2024-07-29 04:47:27', '2024-07-29 04:47:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(166, 69, 'uploads/product_galleries/69/JJMf1CHT2qT2kRmOSd0CXpV6rwidoHrj31qHPciz.webp', '2024-07-30 21:24:02', '2024-07-30 21:24:02'),
(167, 69, 'uploads/product_galleries/69/cURh8WIXg1CVNhDzN4f8F6LA5HP8r46dbSlvDvRc.webp', '2024-07-30 21:24:03', '2024-07-30 21:24:03'),
(168, 69, 'uploads/product_galleries/69/RiOvXHOogCrceipPiJJRRBmRfHv17HX4eP5TNeGK.webp', '2024-07-30 21:24:03', '2024-07-30 21:24:03'),
(169, 68, 'uploads/product_galleries/68/65nVGl5NduQXPcVTl1Kw5ylH9ycUJQdFrc0NSOxE.jpg', '2024-07-31 05:56:01', '2024-07-31 05:56:01'),
(170, 68, 'uploads/product_galleries/68/BbKHRbHu2e8GyniB9OsddS9UJk6PWuALIIJJ9WdD.jpg', '2024-07-31 05:56:01', '2024-07-31 05:56:01'),
(171, 68, 'uploads/product_galleries/68/Xi6LmRFddwa3b1DsW22bpOb1dwtqGz86QUxIjd90.jpg', '2024-07-31 05:56:01', '2024-07-31 05:56:01'),
(172, 54, 'uploads/product_galleries/54/r4IZEBlr1anMpC0i4bbQU5BdmiT9lSU4kN7Fs69F.jpg', '2024-07-31 05:56:33', '2024-07-31 05:56:33'),
(173, 54, 'uploads/product_galleries/54/zicAK7TkC77o2rZOmGnL1N7HX6zmcvsy2oIZosdq.jpg', '2024-07-31 05:56:33', '2024-07-31 05:56:33'),
(174, 54, 'uploads/product_galleries/54/4LFEXdJ5SZZKojXUvumhWdRqGy29twmmLt1Mz2Ci.jpg', '2024-07-31 05:56:33', '2024-07-31 05:56:33'),
(175, 48, 'uploads/product_galleries/48/rKfrwc4VRfNHkjlKzCQREpfczCSi7UFK5NHEPZ6D.jpg', '2024-07-31 05:57:33', '2024-07-31 05:57:33'),
(176, 48, 'uploads/product_galleries/48/4E4OKkZgnMfk1PpCL0V7vy1rT4RBhywRh4ErmJ9M.png', '2024-07-31 05:57:33', '2024-07-31 05:57:33'),
(177, 48, 'uploads/product_galleries/48/zQQpYrd3EyRsmVpjRFNd67DaeWqDvKZM4kGEbGeN.png', '2024-07-31 05:57:33', '2024-07-31 05:57:33'),
(178, 70, 'uploads/product_galleries/70/j6Rrb74mjqFaoiBZtjRRXtdXY9bLoyInPtVoSP7m.webp', '2024-07-31 11:56:16', '2024-07-31 11:56:16'),
(179, 70, 'uploads/product_galleries/70/QNyJ9wBqmytr4FyQmaFPI1Ecllm0pIQ8Q5uNCm8d.webp', '2024-07-31 11:56:16', '2024-07-31 11:56:16'),
(180, 70, 'uploads/product_galleries/70/Y5dBk1zwDEB7MU5RK8caRJeCpGN9UoPF6eVgX7yD.webp', '2024-07-31 11:56:16', '2024-07-31 11:56:16'),
(181, 74, 'uploads/product_galleries/74/icTiTVc4VDqzCtTLtsuLW0A9XU8CMLOxJ8LJlyC2.jpg', '2024-08-03 13:00:49', '2024-08-03 13:00:49'),
(182, 74, 'uploads/product_galleries/74/gHZ7s1bPz1RSmOohjWTTAjHj3Xz8kNi2V6sPLxuG.jpg', '2024-08-03 13:00:49', '2024-08-03 13:00:49'),
(185, 76, 'uploads/product_galleries/76/ySnji29gGkcHP4aeO1bRdWXTc9DY6mNGfBFLSY3Z.jpg', '2024-08-05 03:53:31', '2024-08-05 03:53:31'),
(186, 76, 'uploads/product_galleries/76/hpIzVJFYz94hKeHuH8mewGqQMVlx0Xi0vtoCKhxp.jpg', '2024-08-05 03:53:31', '2024-08-05 03:53:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'S', '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(2, 'M', '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(3, 'L', '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(4, 'XL', '2024-07-29 04:47:27', '2024-07-29 04:47:27'),
(5, 'XXL', '2024-07-29 04:47:27', '2024-07-29 04:47:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `product_color_id` bigint UNSIGNED NOT NULL,
  `product_size_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `price_sale` double(10,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `product_color_id`, `product_size_id`, `image`, `quantity`, `price`, `price_sale`, `created_at`, `updated_at`) VALUES
(9, 54, 1, 1, NULL, 10, 149000.00, 50000.00, '2024-07-29 11:54:08', '2024-07-29 11:54:08'),
(10, 54, 1, 2, NULL, 13, 129000.00, 70000.00, '2024-07-29 11:54:08', '2024-07-29 11:54:08'),
(11, 54, 1, 3, NULL, 5, 119000.00, 100000.00, '2024-07-29 11:54:08', '2024-07-29 11:54:08'),
(12, 54, 2, 1, NULL, 8, 179000.00, 90000.00, '2024-07-29 11:54:08', '2024-07-29 11:54:08'),
(13, 54, 3, 2, NULL, 12, 189000.00, 80000.00, '2024-07-29 11:54:08', '2024-07-29 11:54:08'),
(35, 68, 1, 1, NULL, 0, 0.00, 0.00, '2024-07-30 08:14:15', '2024-07-30 08:14:15'),
(36, 69, 1, 1, NULL, 0, 0.00, 0.00, '2024-07-30 08:19:54', '2024-07-30 08:19:54'),
(37, 70, 1, 1, NULL, 0, 0.00, 0.00, '2024-07-30 09:29:10', '2024-07-30 09:29:10'),
(38, 71, 1, 1, NULL, 0, 0.00, 0.00, '2024-07-30 10:29:00', '2024-07-30 10:29:00'),
(39, 72, 3, 1, 'uploads/product_variants/aYKOmbhR5PlRlpR0RRnV3HXVWY9cWsRY19H9FIz5.jpg', 10, 199000.00, 129000.00, '2024-07-30 11:20:53', '2024-07-30 11:20:53'),
(40, 72, 4, 2, 'uploads/product_variants/geOU9rSWRyrVFRt6jlMKHNVLaKf44x0XQBdyyhOk.jpg', 12, 149000.00, 50000.00, '2024-07-30 11:20:53', '2024-07-30 11:20:53'),
(41, 73, 1, 1, 'uploads/product_variants/v3bpYmcfRbliua3QtT2ofR652f8Wxyx8zgKYci2k.jpg', 10, 199000.00, 133000.00, '2024-07-30 12:42:58', '2024-07-30 12:42:58'),
(42, 73, 3, 3, 'uploads/product_variants/Fj9k9k1wFsYXIXrifKbyvT9npsDfv70q4C60sesl.jpg', 12, 149000.00, 119000.00, '2024-07-30 12:42:58', '2024-07-30 12:42:58'),
(43, 74, 1, 1, 'uploads/product_variants/ANhlE6ToDov5SdyKMfe7aHlgcK8oxQpUwkzyUAjX.jpg', 10, 199000.00, 133000.00, '2024-08-03 13:00:49', '2024-08-03 13:00:49'),
(44, 74, 2, 2, 'uploads/product_variants/iPdyVUDy6kHtDQKgi3jgEjm4AaVZ7ArII9cd1D2P.jpg', 0, 149000.00, 122000.00, '2024-08-03 13:00:49', '2024-08-05 01:09:19'),
(45, 74, 3, 1, 'uploads/product_variants/aCoJltRoeJkINSMlB6uP1Et6Ha9GHy2b5S315Leh.jpg', 14, 129000.00, 70000.00, '2024-08-03 13:00:49', '2024-08-05 05:59:57'),
(47, 76, 1, 3, 'uploads/product_variants/rpJaS0Foyrg1yNPultE6IJ0nuawryj7KyUAJaMJl.jpg', 10, 199000.00, 133000.00, '2024-08-05 03:53:31', '2024-08-05 03:53:31'),
(48, 76, 2, 1, 'uploads/product_variants/qjQ1gMOGhRSLXKfy58eNxP6woWXWzfHakmWn1v8J.jpg', 12, 177000.00, 122000.00, '2024-08-05 03:53:31', '2024-08-05 03:53:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotions`
--

CREATE TABLE `promotions` (
  `promotion_id` bigint UNSIGNED NOT NULL,
  `promotion_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_value` int NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `phone`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'luannoname', 'Phúc Diễn - Nam từ Liêm - Hà Nội', '0392847364', 'luan@gmail.com', '$2y$10$HmbX7Y7H.p7GVll9voU3AOhSnAfL9F8IUNWpH2V/9/f6FA5DDjjKu', 1, NULL, '2024-07-27 10:42:30', '2024-07-27 10:42:30'),
(2, 'luanph39383', 'Mỹ Đình - Nam Từ Liêm -Hà Nội', '0338476758', 'teonguoinoitieng@gmail.com', '$2y$10$lnpoSAJUkXaE.0y/Hg2BAezapWmXOVW/CoHRDAi.9RD9yNxTocrum', 0, NULL, '2024-08-05 01:02:15', '2024-08-05 01:02:15'),
(4, 'luanmayman', NULL, NULL, 'luan1@gmail.com', '$2y$10$q/i1Ii70w3AL/3WsCkfEq.CkFTBBnrzauBpKmvZU76UxjOazoaimu', 0, NULL, '2024-08-05 05:04:43', '2024-08-05 05:04:43'),
(5, 'luanmayman1', NULL, NULL, 'luan2@gmail.com', '$2y$10$tlOqeQCrgzLFife7o04TruroQTSVC7kp/C84cX./W2b7RR9c6PtdC', 0, NULL, '2024-08-05 05:58:47', '2024-08-05 05:58:47');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_items_product_variant_id_foreign` (`product_variant_id`),
  ADD KEY `cart_items_product_size_id_foreign` (`product_size_id`),
  ADD KEY `cart_items_product_color_id_foreign` (`product_color_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_variant_id_foreign` (`product_variant_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_galleries_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_variant_unique` (`product_id`,`product_color_id`,`product_size_id`),
  ADD KEY `product_variants_product_color_id_foreign` (`product_color_id`),
  ADD KEY `product_variants_product_size_id_foreign` (`product_size_id`);

--
-- Chỉ mục cho bảng `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `banner_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `promotions`
--
ALTER TABLE `promotions`
  MODIFY `promotion_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_items_product_color_id_foreign` FOREIGN KEY (`product_color_id`) REFERENCES `product_colors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `cart_items_product_size_id_foreign` FOREIGN KEY (`product_size_id`) REFERENCES `product_sizes` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variants` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_product_color_id_foreign` FOREIGN KEY (`product_color_id`) REFERENCES `product_colors` (`id`),
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_variants_product_size_id_foreign` FOREIGN KEY (`product_size_id`) REFERENCES `product_sizes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
