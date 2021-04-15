-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2021 年 4 月 15 日 08:43
-- サーバのバージョン： 5.5.62
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c9`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `item_problem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_coping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_result` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `added` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `item_category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `books`
--

INSERT INTO `books` (`id`, `user_id`, `item_problem`, `item_coping`, `item_result`, `added`, `created_at`, `updated_at`, `item_category`, `user_name`) VALUES
(11, 2, '仕事中に眠くなってしまう', '1時間早く寝るようにする', '少し改善されたかも', '2021-04-08', '2021-04-14 07:36:40', '2021-04-14 07:38:58', '仕事の悩み', 'elizabeth_test'),
(12, 2, '彼氏が自分が仕事を頑張ることに対して、なぜか気に入らないみたい', '仕事の話をするのをやめて、相手の仕事を褒めるようにして見た', '彼氏の機嫌は良くなったけど、なんかモヤモヤする', '2021-04-06', '2021-04-14 07:52:37', '2021-04-14 07:52:37', '家庭の悩み', 'elizabeth_test'),
(13, 2, '最近寝つきづらい。', '寝る前にハーブティーを飲むようにした', 'プラシーボかもしれないが、前より寝つきやすくなったかもしれない', '2021-04-09', '2021-04-14 07:53:03', '2021-04-14 07:53:03', '自分自身の悩み', 'elizabeth_test'),
(14, 1, '上司が自分にだけ厳しい。会議に出るのが怖い。会議前は涙が出てしまう。', '産業医に相談し、話を聞いてもらった。', 'あなたが悪いと叱責され、何も改善されなかった。逆に自分が辛い思いをした。最悪。', '2021-04-01', '2021-04-14 07:54:03', '2021-04-14 07:54:03', '仕事の悩み', 'Caori'),
(15, 1, '夫が子育てに全く協力してくれない。', '夫が子育てに参加している漫画を部屋に置いてみた。', '多分読んでないな', '2021-04-03', '2021-04-14 07:54:28', '2021-04-14 07:54:28', '家庭の悩み', 'Caori'),
(16, 1, '春になってみんな新しい生活を迎えるのに、自分だけ一人ぼっちな気がする。', 'ひたすら韓流ドラマをみている。', 'ドラマを見ている間は孤独を忘れられるが、終わった後の虚しさがすごい', '2021-04-02', '2021-04-14 07:54:47', '2021-04-14 07:54:47', '自分自身の悩み', 'Caori'),
(17, 3, '部下を怒れない。傷つくかもしれないと思って強く言えない。でも言いたいことはたくさんある', 'まず褒めてから指摘するやり方を取ってみた。', 'まだ言いづらいが、傷つけてしまった感じはない。', '2021-04-07', '2021-04-14 07:55:35', '2021-04-14 07:55:35', '仕事の悩み', 'mia_test'),
(18, 3, '義理の妹が連絡なしに家に泊まりに来る', '夫に相談してみた', 'さりげなく伝えてくれると言ってくれたので、期待', '2021-04-09', '2021-04-14 07:55:57', '2021-04-14 07:55:57', '家庭の悩み', 'mia_test'),
(19, 3, '次の仕事が見つかるか不安。転職活動にも集中できてないし、うまく行ってない。', 'さいあくアルバイトすればいいか、と楽観的になってみた。', '生きるのが楽かも！！', '2021-04-11', '2021-04-14 07:56:14', '2021-04-14 07:56:14', '自分自身の悩み', 'mia_test');

-- --------------------------------------------------------

--
-- テーブルの構造 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `favorites`
--

CREATE TABLE `favorites` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL COMMENT 'ユーザID',
  `book_id` int(10) UNSIGNED NOT NULL COMMENT '投稿ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `book_id`) VALUES
(2, 2, 8),
(3, 2, 7),
(5, 3, 6),
(6, 3, 3),
(7, 3, 2),
(8, 3, 1),
(9, 2, 3),
(10, 2, 1),
(11, 2, 2),
(12, 3, 16),
(13, 3, 11);

-- --------------------------------------------------------

--
-- テーブルの構造 `followers`
--

CREATE TABLE `followers` (
  `following_id` int(10) UNSIGNED NOT NULL COMMENT 'フォローしているユーザID',
  `followed_id` int(10) UNSIGNED NOT NULL COMMENT 'フォローされているユーザID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `followers`
--

INSERT INTO `followers` (`following_id`, `followed_id`) VALUES
(2, 1),
(3, 1),
(3, 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2021_03_23_142249_create_books_table', 1),
(14, '2021_03_24_055050_rename_on_books_table', 1),
(15, '2021_03_24_091721_changemold_on_books_table', 1),
(16, '2021_03_25_055311_addcalum_on_books_table', 1),
(17, '2021_03_25_065341_changemold2_on_books_table', 1),
(18, '2021_03_30_140922_create_followers_table', 1),
(20, '2021_04_14_045958_addusername_on_books_table', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Caori', 'test@test.com', NULL, '$2y$10$uCdXAY.HpTUYnlzAIdjkqO8fuzmpGwzLjFuLYQfe0ihTt0Ewp4M5u', NULL, '2021-04-12 05:37:13', '2021-04-12 05:37:13'),
(2, 'elizabeth_test', 'eli@test.com', NULL, '$2y$10$lJpK5J.DczcGdBLQ2g3zMeMy4IcLoQV0XQHf0s7jUqRVvo9.Jlyx6', NULL, '2021-04-12 05:43:10', '2021-04-12 05:43:10'),
(3, 'mia_test', 'mia@test.com', NULL, '$2y$10$Ui/nv9oh73RPdA0UarnMNeAUe4Vj9HpYZD.ba9B6PT3x6dAkAQd1G', NULL, '2021-04-12 05:44:59', '2021-04-12 05:44:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_id_index` (`id`),
  ADD KEY `favorites_user_id_index` (`user_id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD UNIQUE KEY `followers_following_id_followed_id_unique` (`following_id`,`followed_id`),
  ADD KEY `followers_following_id_index` (`following_id`),
  ADD KEY `followers_followed_id_index` (`followed_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
