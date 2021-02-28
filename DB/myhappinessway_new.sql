-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 09:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhappinessway_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `author_infos`
--

CREATE TABLE `author_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author_infos`
--

INSERT INTO `author_infos` (`id`, `name`, `description`, `image`, `facebook`, `twitter`, `instagram`, `linkedin`, `pinterest`, `created_at`, `updated_at`) VALUES
(1, 'Atish', 'It\'s a platform of sharing happiness ways from own experience. For a happy, fearless and joyful life this platform will continuously share the happiness ways. Be always happy and healthy. Thank you!', 'public/uploaded/user_image/5fa1264d894b1.jpg', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.pinterest.com/', '2020-11-03 02:50:07', '2020-11-04 22:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Safe-Food', 'safe-food', 'public/frontend/categoryimage/5f51f1e976ab9.jpg', 'Health is wealth.', '2020-09-04 10:55:13', '2020-09-04 12:20:00'),
(2, 'Health', 'health', 'public/frontend/categoryimage/5f970b33708f2.png', NULL, '2020-09-04 10:56:07', '2020-10-26 21:45:23'),
(3, 'Philosophy', 'philosophy', 'public/frontend/categoryimage/5f51f2bee6392.png', 'Sharing your philosophy of happiness may be a great way for someone.', '2020-09-04 11:54:38', '2020-09-04 11:54:38'),
(4, 'Travelling', 'travelling', 'public/frontend/categoryimage/5f51f85d5d597.jpg', 'Sharing your travelling experience  may be a great happiness way for someone.', '2020-09-04 11:57:07', '2020-09-04 12:18:37'),
(5, 'Books', 'books', 'public/frontend/categoryimage/5f51f4ab21003.jpg', NULL, '2020-09-04 12:02:51', '2020-09-04 12:19:10'),
(6, 'Gardening', 'gardening', 'public/frontend/categoryimage/5f51f56dc74c4.jpg', NULL, '2020-09-04 12:06:05', '2020-09-04 12:06:05'),
(7, 'Self Development', 'self-development', 'public/frontend/categoryimage/5f51f6b365ee5.png', NULL, '2020-09-04 12:11:31', '2020-09-04 12:11:31'),
(8, 'Nature', 'nature', 'public/frontend/categoryimage/5f51f78b76083.jpg', NULL, '2020-09-04 12:15:07', '2020-09-04 12:15:07'),
(9, 'childhood', 'childhood', 'public/frontend/categoryimage/5f51f7ef76fb7.jpg', NULL, '2020-09-04 12:16:47', '2020-09-04 12:16:47'),
(10, 'plants', 'plants', 'public/frontend/categoryimage/5f51fa035e595.jpg', NULL, '2020-09-04 12:25:39', '2020-09-04 12:25:39'),
(11, 'technology', 'technology', 'public/frontend/categoryimage/5f9706c343d15.png', NULL, '2020-09-04 12:29:55', '2020-10-26 21:26:27'),
(12, 'Happiness', 'happiness', 'public/frontend/categoryimage/5f5b06d3850fc.jpg', 'Happiness', '2020-09-10 23:10:43', '2020-09-10 23:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Eric', 'eric@talkwithwebvisitor.com', 'how to turn eyeballs into phone calls', 'Hi, Eric here with a quick thought about your website myhappinessway.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=myhappinessway.com', '2020-10-04 10:36:50', '2020-10-04 10:36:50'),
(2, 'Eric', 'eric@talkwithwebvisitor.com', 'how to turn eyeballs into phone calls', 'Hi, Eric here with a quick thought about your website myhappinessway.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=myhappinessway.com', '2020-11-05 11:42:02', '2020-11-05 11:42:02'),
(3, 'Eric', 'ericjonesonline@outlook.com', 'Strike when the iron’s hot', 'Hey there, I just found your site, quick question…\r\n\r\nMy name’s Eric, I found myhappinessway.com after doing a quick search – you showed up near the top of the rankings, so whatever you’re doing for SEO, looks like it’s working well.\r\n\r\nSo here’s my question – what happens AFTER someone lands on your site?  Anything?\r\n\r\nResearch tells us at least 70% of the people who find your site, after a quick once-over, they disappear… forever.\r\n\r\nThat means that all the work and effort you put into getting them to show up, goes down the tubes.\r\n\r\nWhy would you want all that good work – and the great site you’ve built – go to waste?\r\n\r\nBecause the odds are they’ll just skip over calling or even grabbing their phone, leaving you high and dry.\r\n\r\nBut here’s a thought… what if you could make it super-simple for someone to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket?\r\n  \r\nYou can – thanks to revolutionary new software that can literally make that first call happen NOW.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know IMMEDIATELY – so that you can talk to that lead while they’re still there at your site.\r\n  \r\nYou know, strike when the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nWhen targeting leads, you HAVE to act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s why you should check out our new SMS Text With Lead feature as well… once you’ve captured the phone number of the website visitor, you can automatically kick off a text message (SMS) conversation with them. \r\n \r\nImagine how powerful this could be – even if they don’t take you up on your offer immediately, you can stay in touch with them using text messages to make new offers, provide links to great content, and build your credibility.\r\n\r\nJust this alone could be a game changer to make your website even more effective.\r\n\r\nStrike when  the iron’s hot!\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to learn more about everything Talk With Web Visitor can do for your business – you’ll be amazed.\r\n\r\nThanks and keep up the great work!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nStop wasting money chasing eyeballs that don’t turn into paying customers. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=myhappinessway.com', '2020-11-09 13:17:42', '2020-11-09 13:17:42'),
(4, 'Eric', 'ericjonesonline@outlook.com', 'how to turn eyeballs into phone calls', 'Hi, Eric here with a quick thought about your website myhappinessway.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://www.talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=myhappinessway.com', '2020-11-17 02:26:09', '2020-11-17 02:26:09'),
(5, 'Clint', 'myhappinessway.com@myhappinessway.com', 'RE: myhappinessway.com', 'Your domain name: myhappinessway.com\r\n\r\nHome - My Happiness Way\r\n\r\nThis announcement  RUNS OUT ON: Nov 19, 2020.\r\n\r\n\r\nWe have actually not gotten a payment from you.\r\nWe\'ve tried to call you however were incapable to reach you.\r\n\r\n\r\nPlease Browse Through:  https://cutt.ly/ShqbsaO\r\n\r\n\r\nFor information and to post a discretionary payment for solutions.\r\n\r\n\r\n11192020005712', '2020-11-19 10:57:20', '2020-11-19 10:57:20'),
(6, 'Eric', 'ericjonesonline@outlook.com', 'how to turn eyeballs into phone calls', 'Hi, Eric here with a quick thought about your website myhappinessway.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=myhappinessway.com', '2020-11-26 21:31:07', '2020-11-26 21:31:07'),
(7, 'Eric', 'ericjonesonline@outlook.com', 'how to turn eyeballs into phone calls', 'Hi, Eric here with a quick thought about your website myhappinessway.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE http://www.talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=myhappinessway.com', '2020-12-06 05:56:31', '2020-12-06 05:56:31'),
(8, 'Eric', 'ericjonesonline@outlook.com', 'Why not TALK with your leads?', 'My name’s Eric and I just found your site myhappinessway.com.\r\n\r\nIt’s got a lot going for it, but here’s an idea to make it even MORE effective.\r\n\r\nTalk With Web Visitor – CLICK HERE http://www.talkwithcustomer.com for a live demo now.\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nAnd once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation… and if they don’t take you up on your offer then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment. Don’t keep losing them. \r\nTalk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=myhappinessway.com', '2020-12-21 15:02:12', '2020-12-21 15:02:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_25_191321_create_categories_table', 1),
(5, '2020_07_25_211652_create_tags_table', 1),
(6, '2020_07_26_101509_create_posts_table', 1),
(8, '2020_09_02_044803_create_settings_table', 2),
(9, '2020_09_03_062859_create_contacts_table', 3),
(10, '2020_09_03_171356_create_comments_table', 4),
(11, '2020_09_03_171442_create_reply_comments_table', 4),
(12, '2020_09_03_174857_create_subscribes_table', 5),
(17, '2020_09_28_104023_create_social_media_table', 6),
(18, '2020_09_29_124023_create_galleries_table', 6),
(19, '2020_11_03_055028_create_authors_table', 7),
(20, '2020_11_03_073509_create_author_infos_table', 8),
(21, '2020_12_26_183553_create_privacy_policies_table', 9),
(22, '2020_12_26_183728_create_terms_conditions_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('imranemon.developer@gmail.com', '$2y$10$FkaJjNcnIdtIKtxFxvnkcuEAUKzh8YAeoBtITaaHzg8ynSNOORgq.', '2020-09-29 16:52:28'),
('imranemon.self@gmail.com', '$2y$10$qu1xKa5DsTZDOPRqKx/DweJjGJmFpmx0IcCXDuhfreXN.K88h09Tu', '2020-09-29 18:13:27'),
('atish203buet@gmail.com', '$2y$10$yfvDA356LzKUU2tZ2ILAw.xR6ChawYFJ2X/ODBF6GhomID96IIys2', '2020-11-07 22:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_view` int(15) DEFAULT NULL,
  `reading_time` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `image`, `description`, `category_id`, `user_id`, `user_type`, `post_view`, `reading_time`, `status`, `deleted_by`, `published_at`, `created_at`, `updated_at`) VALUES
INSERT INTO `posts` (`id`, `title`, `slug`, `image`, `description`, `category_id`, `user_id`, `user_type`, `post_view`, `reading_time`, `status`, `deleted_by`, `published_at`, `created_at`, `updated_at`) VALUES
(22, '5 Reasons Why You Should Read \"Rich Dad Poor Dad\" by Robert T. Kiyosaki', '5-reasons-why-you-should-read-rich-dad-poor-dad-by-robert-t-kiyosaki', 'public/uploaded/posts_image/5f9aa54c1728a.jpg', '<p>I have read \"Rich Dad Poor Dad\" by Robert T. Kiyosaki at the age of 32 in 2020. This book was dedicated to all parents, a child\'s first and most important teachers, and all those who educate, influence, and lead by example. I felt that this book should be read before the end of school life. So, if you have not read this book yet, don\'t be late before energy level going down. And if you have a lovable one whom you care recommend him to read this book. Let\'s see why you should read this book -</p><p><b style=\"background-color: transparent; color: rgb(14, 16, 26); font-size: 1rem;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1.For Building A Good Foundation of Financial Skill</b></p><p style=\"color: rgb(14, 16, 26); background: transparent; margin-top:0pt; margin-bottom:0pt;\"><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\">\"Rich Dad Poor Dad\" by Robert T. Kiyosaki teaches the basic foundation for Financial Literacy. Schools always focus on a specific subject and never inspire thinking out of the box. By reading the book you will know basic financial terms, e.g., Asset, Liability, Wealth, Income Statement, Balance Sheet, Cash Flow, History of Taxes, Power Of Corporation, Investment strategy, Business, etc. By keeping open your mindset, you will be benefitted building a good foundation for financial skills.&nbsp;</span></p><p style=\"color: rgb(14, 16, 26); background: transparent; margin-top:0pt; margin-bottom:0pt;\"><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\"><br></span></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>2. For Unveiling a clear vision of \'What is Life\'</b></font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\"><span style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\" data-preserver-spaces=\"true\"></span></font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\">At the beginning of the book, when The Author, Robert T. Kiyosaki, was only 9 years old, he did a job for his rich dad. He faced a hard situation at an early age. That was a bitter lesson but very effective for the rest of his life. He showed that if we don\'t learn about money, we have to work until death.&nbsp;</font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\"><br></font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>3. For Buying Assets, Not liabilities&nbsp;</b></font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\"></font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\">By reading the book, you will get a crystal clear meaning of Assets and liabilities. So you can buy the real Asset, not the liabilities. If we don\'t know what is Assets and liabilities, we will buy imbalance Assets and liabilities.&nbsp;</font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\"><br></font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<b>4. For a Steady Mindset</b></font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\"></font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\">You may hear the wise saying of the book from any source. But if you read the book attentively, it will create a deep constant mindset of becoming \'Wealthy\'.&nbsp;</font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\"><br></font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</font><span style=\"background-color: transparent;\"><font color=\"#0e101a\"><b>5. For Focusing on learning, not money</b></font></span></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\">With many examples with thousands of simple sentences, the book was written. The target message is- To Focus on Learning, Not Money. Learning is the best investment for achieving the desired goal. After reading the book, you will be guided to select a job from which you can learn instead of salary or facilities.&nbsp;</font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\"><br></font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\">Hope you will enjoy reading this book and apply it to your financial life.</font></p><p style=\"background: transparent; margin-top: 0pt; margin-bottom: 0pt;\"><font color=\"#0e101a\">Best Of Luck!</font></p>', 5, 11, 'Admin', 51, 5, 2, NULL, '2020-10-29 15:19:40', '2020-10-29 15:19:40', '2020-12-24 03:50:56'),
(23, 'Why Sunlight is important for our health ?', 'why-sunlight-is-important-for-our-health', 'public/uploaded/posts_image/5fa9979653f2d.jpg', '<p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:14.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\">Daylight is free\r\nin everyday regular life. But when a situation arises, we sometimes cannot see\r\nsunlight for a whole day. Especially in the covid-19 outbreak, we had to stay\r\nat home for many days. For me, the condition was more difficult as I was\r\npassing rigorous training for job purposes at a closed academic building for 30\r\ndays. On the first day, I felt the necessity for sunlight because, on that\r\nhectic day, I could not have sunlight and even could not see the open sky.\r\nLet\'s see why sunlight is important for our health-<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:9.5pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\"><br>\r\n<!--[if !supportLineBreakNewLine]--><br>\r\n<!--[endif]--><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:9.5pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\"><br>\r\n<!--[if !supportLineBreakNewLine]--><br>\r\n<!--[endif]--></span><span style=\"font-size:20.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-bottom-alt:auto;line-height:normal;\r\nmso-outline-level:2\"><b><span style=\"font-size: 20pt; font-family: &quot;Source Sans Pro&quot;, sans-serif;\">&nbsp; &nbsp;\r\n&nbsp; &nbsp; &nbsp; &nbsp; 1. Keep Your Mind Fresh</span></b><span style=\"font-size: 20pt; font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:14.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\">If you stay at\r\nhome or office all day and don\'t have enough sunshine, you will feel like a\r\nprisoner. As we are human beings and we are also part of nature, so we should\r\nact like nature accordingly. Day and night are the equal parts of a full day.\r\nIf you move around on a sunny day and sleep at night, it will keep your mind\r\nfresh.&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:9.5pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\"><o:p>&nbsp;</o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal;mso-outline-level:2\"><span style=\"font-size:20.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\"><o:p>&nbsp;</o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-bottom-alt:auto;line-height:normal;\r\nmso-outline-level:2\"><span style=\"font-size: 20pt; font-family: &quot;Source Sans Pro&quot;, sans-serif;\">&nbsp; &nbsp;\r\n&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<b>2. Improve Your Sleeping Quality</b><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:14.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\">Staying outside\r\nenough will improve your sleeping quality. If you have a good sleep, you will\r\nfeel more powerful and have good control of yourself.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:9.5pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\"><o:p>&nbsp;</o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal;mso-outline-level:2\"><span style=\"font-size:18.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\">&nbsp; &nbsp;\r\n&nbsp; &nbsp;&nbsp;<br>\r\n<!--[if !supportLineBreakNewLine]--><br>\r\n<!--[endif]--></span><span style=\"font-size:20.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-bottom-alt:auto;line-height:normal;\r\nmso-outline-level:2\"><span style=\"font-size: 20pt; font-family: &quot;Source Sans Pro&quot;, sans-serif;\">&nbsp; &nbsp;\r\n&nbsp; &nbsp; &nbsp; &nbsp;<b>3. Good Source of Vitamin-D</b><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:14.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\">Sunlight is a\r\ngood source of vitamin-D. Vitamin-D will improve your bone strength and improve\r\nyour immune system.&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:9.5pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\"><br>\r\n<!--[if !supportLineBreakNewLine]--><br>\r\n<!--[endif]--><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal;mso-outline-level:2\"><span style=\"font-size:20.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\"><br>\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>4. Develop Thinking More Logical</b><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:14.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\">Somebody who\r\nstays most of the time at home or in a living room, he has less opportunity to\r\nsee the natural activities happening outside then who stay enough time in the\r\ndaytime.&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:14.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\"><o:p>&nbsp;</o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:14.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\"><o:p>&nbsp;</o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:14.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\">If you don\'t\r\nstay enough outside of a room in the daytime, please don\'t miss the unlimited\r\nopportunities around you!<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:14.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\">Be Happy and\r\nStay Healthy!<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;line-height:\r\nnormal\"><span style=\"font-size:14.0pt;font-family:&quot;Source Sans Pro&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;\r\ncolor:#0E101A;mso-ansi-language:EN-US;mso-bidi-language:BN-BD\">Thank you.<o:p></o:p></span></p>', 2, 11, 'Admin', 43, 3, 2, NULL, '2020-11-10 00:25:10', '2020-11-10 00:25:10', '2020-12-23 03:34:28');
INSERT INTO `posts` (`id`, `title`, `slug`, `image`, `description`, `category_id`, `user_id`, `user_type`, `post_view`, `reading_time`, `status`, `deleted_by`, `published_at`, `created_at`, `updated_at`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 3, 2),
(6, 3, 4),
(7, 3, 5),
(8, 4, 2),
(9, 4, 3),
(10, 4, 6),
(11, 5, 1),
(12, 5, 2),
(13, 5, 7),
(14, 6, 1),
(15, 6, 2),
(16, 7, 2),
(17, 7, 4),
(18, 7, 7),
(19, 8, 1),
(27, 10, 2),
(28, 10, 3),
(29, 10, 5),
(30, 11, 1),
(31, 11, 3),
(32, 11, 5),
(33, 12, 2),
(34, 12, 7),
(35, 13, 1),
(36, 13, 5),
(37, 13, 6),
(38, 13, 7),
(39, 14, 1),
(40, 14, 2),
(41, 14, 5),
(42, 14, 6),
(43, 14, 7),
(44, 15, 1),
(45, 15, 2),
(46, 15, 5),
(47, 15, 6),
(48, 15, 7),
(49, 16, 1),
(50, 16, 2),
(51, 16, 3),
(52, 16, 5),
(53, 16, 6),
(54, 16, 7),
(55, 17, 1),
(56, 17, 2),
(57, 17, 5),
(58, 17, 6),
(59, 17, 7),
(60, 18, 1),
(61, 18, 2),
(62, 18, 5),
(63, 18, 6),
(64, 18, 7),
(65, 19, 1),
(66, 19, 2),
(67, 19, 5),
(68, 19, 6),
(69, 19, 7),
(71, 21, 1),
(72, 21, 4),
(73, 21, 8),
(74, 22, 2),
(75, 22, 4),
(76, 22, 10),
(77, 23, 2),
(78, 23, 5),
(79, 24, 2);

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacy_policies` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `privacy_policies`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">MyHappinessWay(MHW) will not supply your information to any third party. We may use your information for research development or may provide inforformation for legal demand which satisfy us that it would be necessary for settlement of legal investigation or may provide to service provider for development of data protection standard or may provide to whom that satisfy us it would prevent someone from harmful activities. For legal process of transfering information we will notice you so that you can take appropriate legal action about the matter. We will object If we believe that the legal process of requesting information about our service user is unacceptable .</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">Search engines may indicate your MHW user profile page, public relations, and post pages, so that people may find these pages when searching against your name or related post or key words on services like Google, Youtube, Amazon, yahoo or Bing.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">Users may also share your post via social media platform (e.g. Facebook, Twitter).</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">MHW uses third-party vendors and hosting partners, such as NameCheap, for hardware, software, networking, storage, and related technology we need to run website.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">Some of the content that you see displayed on www.MyHappinessWay.com is not hosted by us. These “embeds” are hosted by a third-party and embedded in a MHW page, so that it appears to be part of that page(e.g. YouTube or Vimeo videos, Imgur or Giphy gifs, SoundCloud audio files, Twitter tweets, GitHub code snippets, or Scribd documents ). These files send data to the hosted site just as if you were visiting that site directly (e.g. when you load a MHW post page with a YouTube video embedded in it, that video appears because of a pointer to files hosted by YouTube, and in turn YouTube receives data about your activity, such as your IP address and how much of the video you watch).</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">MHW doesn’t control what data third parties collect in cases like this, or what they ultimately do with it. So, third-party embeds on MHW are not covered by this Privacy Policy. They are covered by the privacy policy of the third-party service (so, when you watch a YouTube video embedded in a MHW post, the use of data about your interactions with the video would be covered by YouTube’s privacy policy).</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">Some embeds may ask you for personal information, such as submitting your email address, through a form linked to from a MHW post. However, if you choose to submit your information to a third party this way, we don’t know what they may do with it. As explained above, their actions are not covered by this Privacy Policy. So, please be careful when you see embedded forms on MHW asking for your email address or any other personal information. Make sure you understand who you are submitting your information to and what they say they plan to do with it. We suggest that you do not submit your email address or other personal information to any third-party through an embedded form.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">We may help advertisers and publishers connect to offer relevant advertising in their apps and websites. We will also Detect and defend against fraudulent, abusive, or unlawful activity.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">When posting on MHW, you may not embed a form that allows submission of personal information by users. You must link offsite to a page that allows such submissions by users, and that page’s appearance must be distinct enough from MHW to ensure it does not cause confusion among users over to whom they are submitting personal information. Failure to do so may lead MHW to disable the post or take other action to limit or disable your account.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">We use browser cookies and similar technologies to recognize you when you return to our Services. We use them in various ways, for example to log you in, remember your preferences (such as default language), evaluate email effectiveness, allow our paywall and meter to function, and personalize content and other services. Without cookies, our metered paywall would not work, so they are necessary to MHW’s basic functionality.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">MHW saves data about the URLs you Save to MHW (an optional feature that you may choose to use or decline to use), but we do not otherwise track your visits or activities off MHW Services. We track your interactions within the MHW Services (which encompasses MyHappinessWay.com, custom domains hosted by MHW, and your interactions with our mobile application) .</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">Some third-party services that we use to provide the Service, such as ops, may place their own cookies in your browser. This Privacy Policy covers use of cookies by MHW only and not the use of cookies by third parties.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">If you have questions, suggestions, or wish to make a complaint, please don’t hesitate to contact us at help@myhappinessway.com .</p>', '2020-12-26 18:00:00', '2020-12-26 13:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `reply_comments`
--

CREATE TABLE `reply_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `replycomments` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_width` int(15) DEFAULT NULL,
  `about_website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_us_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_head` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `website_logo`, `logo_width`, `about_website`, `about_us_text`, `about_us_image`, `facebook_link`, `twitter_link`, `instagram_link`, `youtube_link`, `email`, `mobile`, `address`, `copyright_text`, `slider_head`, `slider_about`, `slider_image`, `created_at`, `updated_at`) VALUES
(1, 'My Happiness Way', 'public/uploaded/logo/5f5107a14b231.png', 100, 'Hi, I\'m Atish Darshi Chakma. I will share my own experience that makes me happy. I believe that sharing happiness makes oneself happier .\r\n\r\n It will be fantastic if you also share your happiness way on this platform.\r\n\r\nLet\'s make a happier world together! Thank you!', '', 'public/uploaded/logo/5f6aedc9c6b43.png', 'https://facebook.com', 'https://twitter.com', 'https://instagram.com', 'https://youtube.com', 'myhappinessway2020@gmail.com', '01677262504', 'Chattogram', 'All rights reserved', 'Share and Be Happier', 'Hi, I\'m Atish Darshi Chakma. I will share my own experience that makes me happy. I believe that sharing happiness makes oneself happier .   It will be fantastic if you also share your happiness way on this platform.  Let\'s make a happier world together! Thank you!', 'public/uploaded/logo/5f74124102879.png', '2020-09-02 00:00:41', '2020-12-25 23:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_admin` int(11) DEFAULT NULL,
  `is_delete` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name`, `icon`, `link`, `status`, `is_admin`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'fa fa-facebook', 'https://facebook.com', 1, 11, 0, '2020-09-29 12:54:36', '2020-09-29 12:54:36'),
(2, 'Twitter', 'fa fa-twitter', 'https://twitter.com', 1, 11, 0, '2020-09-29 12:55:03', '2020-09-29 12:55:03'),
(3, 'Linkedin', 'fa fa-linkedin', 'https://linkedin.com', 1, 11, 0, '2020-09-29 12:55:22', '2020-09-29 12:55:22'),
(4, 'Youtube', 'fa fa-youtube', 'https://youtube.com', 1, 11, 0, '2020-09-29 12:56:09', '2020-09-29 12:56:09'),
(5, 'Whatsapp', 'fa fa-whatsapp', 'https://whatsapp.com', 1, 11, 0, '2020-09-29 12:56:46', '2020-09-29 12:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sosochakma@rocketmail.com', 1, '2020-10-19 11:23:21', '2020-10-19 11:23:21'),
(2, 'kimbr4@aol.com', 1, '2020-12-13 14:27:15', '2020-12-13 14:27:15'),
(3, 'russ60@gmail.com', 1, '2020-12-17 14:54:18', '2020-12-17 14:54:18'),
(4, 'admin@cannagreenexpress.io', 1, '2020-12-18 02:27:22', '2020-12-18 02:27:22'),
(5, 'danielsen.marie@yahoo.com', 1, '2020-12-21 16:56:22', '2020-12-21 16:56:22'),
(6, 'ghostxgaming213@gmail.com', 1, '2020-12-24 15:23:10', '2020-12-24 15:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'happy', 'happy', NULL, '2020-09-04 10:56:33', '2020-09-04 10:56:33'),
(2, 'life', 'life', NULL, '2020-09-04 10:56:41', '2020-09-04 10:56:41'),
(3, 'childhood', 'childhood', NULL, '2020-09-04 10:56:53', '2020-09-04 10:56:53'),
(4, 'aim', 'aim', NULL, '2020-09-04 10:57:01', '2020-09-04 10:57:01'),
(5, 'health', 'health', NULL, '2020-09-08 21:09:31', '2020-10-01 12:43:41'),
(6, 'world', 'world', NULL, '2020-09-26 04:46:22', '2020-09-26 04:46:22'),
(7, 'growth', 'growth', NULL, '2020-09-26 04:46:37', '2020-09-26 04:46:37'),
(8, 'music', 'music', NULL, '2020-10-21 20:32:33', '2020-10-21 20:32:33'),
(9, 'photography', 'photography', NULL, '2020-10-21 20:32:48', '2020-10-21 20:32:48'),
(10, 'book review', 'book-review', NULL, '2020-10-26 21:13:11', '2020-10-26 21:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms_conditions` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `terms_conditions`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">Welcome to www.MyHappinessWay.com , the platform to share your happiness way.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">Our goal is to have a free online platform of sharing one’s happiness way, practicing wisdom or experienced from daily life, so that if someone like the way he could follow.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">These Terms of Service valid to your entry to and use of the website.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">The term \'myhappinessway\' or \'MHW\' or ‘Service Provider’ or \'us\' or \'we\' or \'Site\' or any other terms related to any \'Product\' or \'Service\' refers to the owner of this website. The term ‘you’ or ‘your’ refers the user of this website.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">By confirming your approval (e.g. clicking ‘Continue’, “log In”, ‘Sign-up’ or ‘registration’) or by using our Services, you agree to these Terms.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">If you have any questions about any issue, please contact us at help@myhappinessway.com .</p><h4 style=\"font-family: &quot;Noto Sans JP&quot;, sans-serif; color: rgb(0, 12, 45); background-color: rgb(247, 248, 249);\">Your accountabilities</h4><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">You’re liable for your use of the Services and any content you provide, including comment, post, photos, video, etc. Content which protected by others’ intellectual property rights is strictly prohibited to copy, upload, download, or share content if you have not the right to do so.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">Your use of the Services must fulfill with our terms.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">You may need to register for an account to access comments, post, or all of our Services.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">You are responsible for protecting your account by keeping safe the password. You are requested not to share your password and other personal information to others.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">If you are not at least 13 years old or the legal age in some countries, you are not allowed to register or sign up to this site.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">Your post or comment must be related to the happiness otherwise it will be counted as irrelevant items. Repeated irrelevant items may be forced to terminate or block your account.</p><h4 style=\"font-family: &quot;Noto Sans JP&quot;, sans-serif; color: rgb(0, 12, 45); background-color: rgb(247, 248, 249);\">About User Content</h4><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">MHW will evaluate your content for fulfillment with these Terms before posting or uploading any items and reserves the right to remove any violating content.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">MHW keep the right to remove or disable content suspected to be breaching the intellectual property rights of others and to terminate accounts of a repeat infringer.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">We will take action to notices of alleged copyright infringement if they comply with the law.</p><h4 style=\"font-family: &quot;Noto Sans JP&quot;, sans-serif; color: rgb(0, 12, 45); background-color: rgb(247, 248, 249);\">Rights Of User</h4><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">You hold your rights of your submitted post, photos, videos or anything display on or through the website.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\"></p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">You are always free to terminate your account at any time.</p><h4 style=\"font-family: &quot;Noto Sans JP&quot;, sans-serif; color: rgb(0, 12, 45); background-color: rgb(247, 248, 249);\">Our Rights</h4><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">We reserve the right to terminate your account from the service at any time without any notice.</p><h4 style=\"font-family: &quot;Noto Sans JP&quot;, sans-serif; color: rgb(0, 12, 45); background-color: rgb(247, 248, 249);\">Declaration</h4><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">We do not guarantee that shared Happiness way on the site will be appropriate for your happiness. We also do not guarantee that our services are precise, absolute, trustworthy.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">Our site may down for maintenance or for unexpected technical or any other occurrence.</p><p style=\"margin-bottom: 1.2em; color: rgb(0, 12, 45); font-family: &quot;Noto Sans JP&quot;, sans-serif; font-size: 14px; background-color: rgb(247, 248, 249);\">If you don’t agree to the Terms, you must stop using our Services. Thank you for your understanding.</p>', '2020-12-26 18:00:00', '2020-12-26 13:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'User',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutu` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_by` int(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `username`, `name`, `email`, `email_verified_at`, `password`, `phone`, `birthday`, `address`, `aboutu`, `image`, `gender`, `provider_id`, `login_by`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Admin', 'admin', 'Atish Darshi Chakma', 'myhappinessway2020@gmail.com', NULL, '$2y$10$E3lwcO0hPiGDP0fG.AS5TeiJtVn2yzhBUMsLvd0Pr6Pzdx0ZmXcK.', '01677262504', '15-09-2020', 'Chittagong', 'You should write because you love the shape of stories and sentences and the creation of different words on a page.', 'public/uploaded/user_image/5f96bf2c3bd40.jpg', NULL, NULL, NULL, 1, '1OdIwgLgwHy8MoH3iugxmVlvwqcBb4mVi3k6dtcwxNzGQu8KwhAedvVrplkP', '2020-06-28 12:31:38', '2020-12-25 22:37:23'),
(27, 'User', 'sosochakma', 'md abu  taleb', 'sosochakma@rocketmail.com', NULL, '$2y$10$Q43VpafNwX2z2apBivTbxuHqUjx0bcpHkhEWgGeTNP9vzf2faGz2u', '01899458792', '15-09-2020', 'thakurgaon', 'You should write because you love the shape of stories and sentences and the creation of different words on a page.', 'public/uploaded/user_image/5f51e73501bc5.jpg', 'Male', NULL, NULL, 0, NULL, '2020-09-04 11:05:25', '2020-10-21 14:43:55'),
(47, 'User', 'abutalebgmtt', 'Md Abu Taleb', 'abutalebgmtt1@gmail.com', NULL, '$2y$10$Ks5t9u96LCpj2WRh2B6bgu5xs22eNdtdlExKwZHzj/gfOuWN.zOGq', '01779325718', '15-09-2020', 'Thakurgaon', 'You should write because you love the shape of stories and sentences and the creation of different words on a page.', 'public/uploaded/user_image/5f57b70bab234.jpg', 'Male', NULL, NULL, 1, 'KFQe4WcxM0Mi0DVynpCOoTkBXtkikhXWVAfPp5JGAjQlQqfHNukatGVZyDCM', '2020-09-08 20:53:31', '2020-09-30 05:38:13'),
(48, 'User', '', 'Imran Ahmed', 'imranemon.self@gmail.com', NULL, '$2y$10$CHh9ZkKp3ofRivsNlecr0OAVGCXAdVvPc.QYjUnlcZaPwtEZBmQ4q', '01755430927', '15-09-2020', 'Baliadangi', 'You should write because you love the shape of stories and sentences and the creation of different words on a page.', 'public/uploaded/user_image/5f5f44f017cc2.jpg', 'Male', NULL, NULL, 1, 'lDzIeU2MtUsEKDnUkonLq8F6F6ZYkzJlQGqhdsdSvp5DFbS454tLYqZFmDs6', '2020-09-09 08:21:32', '2020-09-29 17:47:10'),
(49, 'User', 'bokul', 'Md Bokul', 'bokul@gmail.com', NULL, '$2y$10$8UJuMfLgo.e1nDraFRU8gO.8kJu0SMP.7SwKyUCdrrRJZ33zYS1bW', '01988139008', '1996-09-15', 'Hello', NULL, 'public/uploaded/user_image/5f6e09a10d746.jpg', 'Male', NULL, NULL, 1, NULL, '2020-09-25 15:15:45', '2020-09-25 18:11:31'),
(50, 'User', '', 'Musfirat Musfirat', 'abu15-9929@diu.edu.bd', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 'V7h1NCt7Dg5zCLkZobBhCXH1Ns3MBxWbYqQeSwXuJS7iDpY15gk90rK4xCI3', '2020-09-30 15:03:29', '2020-10-21 14:45:31'),
(51, 'User', '', 'Md Bokul Islam', 'alfahadhossain511@gmail.com', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'O73Zqpuyd4UrIk7AnNHB56a7oCCg0V2Vu2MNEszfQN8iKf4vYMhLCaJ5WoE4', '2020-09-30 15:10:29', '2020-09-30 15:10:29'),
(52, 'User', '', 'Abu Taleb', 'abutaleb2288@gmail.com', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'lSQoCnLY506SE75Shr2cvABPvjHtkEBQX3QHsMtchDk9CTJKSwbabwVolYt3', '2020-09-30 16:10:04', '2020-09-30 16:10:04'),
(53, 'User', 'sharna203buet', 'sharna', 'sharna203buet@hotmail.com', NULL, '$2y$10$DIphrioqNRegkaN8Uq24WOHaW.J8kSZQ7I431RtIleDFtiTP7VKsG', '01677262504', '2000-01-01', 'dhaka', NULL, 'public/uploaded/user_image/5f7610d756671.jpg', 'Male', NULL, NULL, 0, NULL, '2020-10-01 21:24:39', '2020-10-21 14:44:10'),
(54, 'User', '', 'Imran Ahmed', 'imranemonn.me@gmail.com', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'qixGyHyR0WvATMUl1IDACm7qGfPFmGU1syCfI7O4SYVieJzv0XPHaRhCfDlv', '2020-10-02 19:45:12', '2020-10-02 19:45:12'),
(55, 'User', '', 'Abu Taleb', 'abutalebgmtt@gmail.com', NULL, '$2y$10$.d4hRJGWrnh.zkBH7c.fruAFAqht/gyIpeiBTLvqXjwAvNwE5iLOy', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'NuXJoDBGqTQJwXlA6OxICZ3L9v8QUUy36iC3x45z6Gbv5ml0JwExCWLBPfmJ', '2020-10-12 12:26:57', '2020-11-09 19:10:51'),
(60, 'User', '', 'Arifur Rahman', 'arif666633@gmail.com', NULL, '$2y$10$6njDoA8ur2jz3MJj11BzkuCYOAX734S77mU926K5jcs8x0Ea/nTu2', '01745738766', '', 'Thakurgaon\r\nThakurgaon', 'na', 'public/uploaded/user_image/5f85e578a9841.jpg', 'Male', NULL, NULL, 1, NULL, '2020-10-13 21:33:28', '2020-10-13 21:35:52'),
(66, 'User', '', NULL, 'ab@gmail.com', NULL, '$2y$10$wKdTtcGOkUv7jwMo1/N7gO3JmMAzx/LwToKBoqLsrdVlNxYkuPjlW', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-19 10:30:45', '2020-10-19 10:30:45'),
(67, 'User', '', 'Atish Darshi Chakma', 'atish203buet@gmail.com', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'An0dZISl0iP5m88k8F3eNHafwGdFFAMmPRIcaKixr8FTASozzSnFtQS7QI64', '2020-10-19 10:31:16', '2020-10-19 10:31:16'),
(79, 'User', '', NULL, 'user@gmail.com', NULL, '$2y$10$53ESdS/h49bycetmhlSeC.NTH2TzRxn8xFi6aYc0uWUEZeuvTrzwu', NULL, '', NULL, NULL, 'public/uploaded/user_image/5f8d3ad306796.jpg', 'Male', NULL, NULL, 1, 'N1hLeGyMDKeUWaN35AeKsrS89a7wNlFRz6t733Uk6EBb8zhuoFQMDf6gBbrE', '2020-10-19 11:05:33', '2020-10-19 11:05:55'),
(80, 'User', '', NULL, 'afrahisvskd dm@gadgetsqbd.com', NULL, '$2y$10$.nPdGF2Ea6qT4cOY/58yS.xCkrgNXOgJPjMMARlST/hK5dBpTR6km', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'gVDmDkndSo4DR1cXtFsRfrFCfCaktbtSvmPLI5MZc8TNfstmNiq2ucJhVTG0', '2020-10-19 11:09:32', '2020-10-19 11:09:32'),
(81, 'User', '', 'Philosophy', 'dghfg@gfhfg.com', NULL, '$2y$10$4gtcdpc18nmDdm.c.7nsBe66.t649DzGxypjHbPTDZQOIsznktSWK', NULL, '', NULL, NULL, NULL, 'Male', NULL, NULL, 0, 'ZFbCEdfhQMaismKd9SNPIitB76LN1BKqW0Ykgj6ETUPMiDsdDYpgYDVd9Krg', '2020-10-19 11:37:09', '2020-10-21 14:44:23'),
(82, 'User', '', 'Zuraimi Tang', 'geogatedproject293@gmail.com', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'nPsaBUYNykCTV2jjX7AeQT10OXyXKOKHqSb7QtjkwhBPXyUuOAF8Qz8KgOKZ', '2020-10-29 11:21:09', '2020-10-29 11:21:09'),
(83, 'User', '', 'Sofia Vergara', 'geogatedproject226@gmail.com', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2TFvz8iqSUVO7lMvVsTKncjVZlAiXAmBVYWdW8RBww9JAqu7xyHnyt9zyYXA', '2020-10-29 11:49:25', '2020-10-29 11:49:25'),
(84, 'User', '', NULL, 'Narciso_Reinger44@hotmail.com', NULL, '$2y$10$Rt59IMD6UQuMPMz9AL7wtuwCHI.Hz5uixk1jST5dGtTmnnoXGr/ru', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'ftVPGEgCSQnMQz58JvXnEvr4TsJPgkXii5FG1ijQpQxUaR6boWKOBbma3nuQ', '2020-12-08 01:39:32', '2020-12-08 01:39:32'),
(85, 'User', '', NULL, 'kimbr4@aol.com', NULL, '$2y$10$1dyA5r2yeF0kpiMLd7U5Iu6BBi6r9xBqL6EevRLYqIMqVMEp.M6Ve', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'ESc3BMvbyvYBxz1RYQAwAIOsr3fAmVYiNrcfdUKH0CwHH99nUSthri0lNB9v', '2020-12-13 14:26:53', '2020-12-13 14:26:53'),
(86, 'User', '', NULL, 'russ60@gmail.com', NULL, '$2y$10$978Vm71xE9obdd7VAi2zhe33avYslRJGoK3CpmroW6VzvftDVe9ly', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'uJSJ00Mwl4D4wVaEr74hwcb0wSfNRtW9oviPfq7bEx26ULLLnYHqC2D7VSWV', '2020-12-17 14:53:55', '2020-12-17 14:53:55'),
(87, 'User', '', NULL, 'admin@cannagreenexpress.io', NULL, '$2y$10$LBbY3CrhR2v958ZWiup3y.cXpuiiDccHqEwDcusnLAFRo56b1f7ZO', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'jLI8pA6Uug9q71J9lTtK9kRd52SUSjBS85fMBJYUQsuO8kGV4tcea9s4wKNL', '2020-12-18 02:26:53', '2020-12-18 02:26:53'),
(88, 'User', '', NULL, 'danielsen.marie@yahoo.com', NULL, '$2y$10$XRkLWxMTWVg8c/b7Faw8Ae1Jfxr8qlrGswidgf/HzroHzCUO6TGfK', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '4xyrqwzuOiE0OMbBOJE5oN8EkT2Y4v12ojyoqNOo1M7DC8rRJPmSNlDgV5j5', '2020-12-21 16:55:59', '2020-12-21 16:55:59'),
(89, 'User', '', NULL, 'ben@neurosurgical-assoc.com', NULL, '$2y$10$dbh/ra8VPGmL/yj7f0hbOekZWFwYw.FtIObvndlwg.62F3xGgVqUe', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, '78IMUQKtDoQ4eFA4imE1UA9DQompzcAwtFJWFyl01dhMOzXV63w7bJGkUrfs', '2020-12-23 04:00:55', '2020-12-23 04:00:55'),
(90, 'User', '', NULL, 'ghostxgaming213@gmail.com', NULL, '$2y$10$e9aA.OmVwd/yQ1wK4h6XxeTzU7cxIUMYnYsREe8RRnBevzEFMbHIO', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'kWuaBnQtVIK9s5soYS7ykuLfbUcBgVjTxWJijfLrhqqW7k8FHfKmgBiGWwA0', '2020-12-24 15:22:46', '2020-12-24 15:22:46'),
(93, 'Admin', 'admin', 'Imran Ahmed', 'imranahmed.developer@gmail.com', NULL, '$2y$12$RHxbrLnvUcUZ3c5W2pz2aO4B241bA0KaPCBaCZUINQAsk3Oja5ZFG', '01755430927', '16-09-2001', 'Thakurgaon', 'You should write because you love the shape of stories and sentences and the creation of different words on a page.', '', NULL, NULL, NULL, 1, '', '2020-06-28 12:31:38', '2020-12-25 22:37:23'),
(94, 'User', '', NULL, 'imranemon.developer@gmail.com', NULL, '$2y$10$ASV4XZ1CAIt./DR2BStgCepZtBiTiQ/a2plPxBLiBXUtU4xQQTt7K', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'lWRN3xKbHXDVd7TVeoydBQ3bXZdXegcc8gk8Afi9KSkelxGC0Bsw2YIaBwhW', '2020-12-26 13:55:48', '2020-12-26 13:55:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author_infos`
--
ALTER TABLE `author_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply_comments`
--
ALTER TABLE `reply_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
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
-- AUTO_INCREMENT for table `author_infos`
--
ALTER TABLE `author_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reply_comments`
--
ALTER TABLE `reply_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;