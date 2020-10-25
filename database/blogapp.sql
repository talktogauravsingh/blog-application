-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 08:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`id`, `post_title`, `post_content`, `post_category`, `userid`, `created_at`, `updated_at`) VALUES
(1, 'WP Dummy Content', 'The next of the list is WP Dummy Content. Whilst not as often updated as FakerPress, it is still a very good WordPress Plugin to generate dummy content on your blog. It automatically creates posts, pages etc with single or multiple paragraphs of text. You can also insert unordered lists, shortcodes, block-quotes, links etc with just a click.', 'Food', 1, '2020-10-25 04:40:08', '2020-10-25 14:20:49'),
(3, 'Better Lorem Ipsum Generator', 'Better Lorem Ipsum Generator is yet another dummy content generator for WordPress. This plugin has some additional features when compared to the rest above, the most important ones are its ability to generate custom taxonomies and custom post types automatically. Install this plugin and generate posts, pages, comments, tags, categories etc with ease.', 'Technology', 1, '2020-10-25 14:24:04', '2020-10-25 15:20:03'),
(4, 'Lorem Ipsum Post Generator', 'Lorem Ipsum Post Generator is a simple plugin that generates posts and comments automatically. It’s also super easy to use, All you need to do is to just specify the number of posts and number of comments per post, rest of the job will be done by this plugin. One thing missing in this plugin is that it doesn’t have the ability to generate pages, categories, tags etc.', 'Technology', 1, '2020-10-25 14:24:29', '2020-10-25 15:20:12'),
(5, 'WP Lipsum', 'WP Dummy Post Generator is also a very simple dummy content generator plugin for WordPress. The plugin allows you to add dummy posts and dummy categories to your WordPress blog. The plugin also lets you specify a Blog Name and Title to be set.\r\n\r\nYou can export the settings of the plugin on another blog as well. The plugin will generate a predefined set of subcategories and categories and creates random posts in them', 'Finance', 1, '2020-10-25 14:25:08', '2020-10-25 15:20:24'),
(6, 'Demo Data Creator', 'Demo Data Creator is another popular test data plugin generator for WordPress. The plugin allows a WordPress developer to create demo users, blogs, posts, comments and blogroll link. If you’re testing out your site with BuddyPress or Multisite enabled then Demo Data Creator is the right plugin for you.\r\n\r\nThe plugin allows you to add dummy content for both of these setups. Adds and lets you control the number of users, categories, tags , posts, comments, pages etc. Deletes all the dummy data from your website. On BuddyPress, it adds and lets you control the number of Groups, wire messages, friends, member status.', 'Food', 1, '2020-10-25 14:26:35', '2020-10-25 14:26:35');

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
(2, '2020_10_25_010950_blogpost', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Gaurav', 'talktoogaurav@gmail.com', '$2y$10$vO7GscR0qFD34bh6SERo3.fem.PWbGLVKafkeRhk88pcNtKhAXWOy', '2020-10-25 04:38:03', '2020-10-25 04:38:03'),
(2, 'admin', 'admin@gmail.com', '$2y$10$Hk3jTlP0OGygrD9s9YsVfe2Enr11TVd0I/H7xLL.kxsoQj2h7GHB2', '2020-10-25 17:55:10', '2020-10-25 17:55:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
