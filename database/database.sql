-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2024 at 03:27 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u331461897_scienceevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `brief` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `brief`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Nephrologue', 'Nephrologue', NULL, '2024-12-14 16:04:05', '2024-12-14 16:04:05'),
(2, 'Esthetique', 'Esthetique', NULL, '2024-12-14 16:04:38', '2024-12-14 16:04:38'),
(3, 'Urologue', 'Urologue', NULL, '2024-12-14 16:05:02', '2024-12-14 16:05:02'),
(4, 'Interniste', 'Interniste', NULL, '2024-12-14 16:05:42', '2024-12-14 16:05:42'),
(5, 'Généraliste', 'Généraliste', NULL, '2024-12-14 16:06:16', '2024-12-14 16:06:16'),
(6, 'Pediatre', 'Pediatre', NULL, '2024-12-14 15:20:41', '2024-12-14 15:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `category_formation`
--

CREATE TABLE `category_formation` (
  `id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` int(11) DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `comment_parent` int(11) DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 4),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 5),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 6),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 7),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 2),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 12),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 13),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 10),
(22, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'name', 'text', 'Nom', 0, 1, 1, 1, 1, 1, '{}', 3),
(24, 4, 'email', 'text', 'E-mail', 0, 1, 1, 1, 1, 1, '{}', 6),
(25, 4, 'phone', 'text', 'Téléphone', 0, 1, 1, 1, 1, 1, '{}', 7),
(26, 4, 'bio', 'text_area', 'Biographie', 0, 0, 1, 1, 1, 1, '{}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 8),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(29, 4, 'avatar', 'image', 'Photo', 0, 1, 1, 1, 1, 1, '{}', 2),
(30, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(31, 5, 'title', 'text', 'Titre', 0, 1, 1, 1, 1, 1, '{}', 2),
(32, 5, 'cover', 'image', 'Couverture', 0, 0, 1, 1, 1, 1, '{}', 4),
(33, 5, 'date', 'date', 'Date de la formation', 0, 1, 1, 1, 1, 1, '{}', 6),
(34, 5, 'price', 'hidden', 'Price', 0, 0, 1, 1, 1, 1, '{}', 7),
(35, 5, 'objective', 'text_area', 'Objectif', 0, 0, 1, 1, 1, 1, '{}', 10),
(36, 5, 'program', 'text_area', 'Les extraits (description)', 0, 0, 1, 1, 1, 1, '{}', 11),
(37, 5, 'other_details', 'rich_text_box', 'Other Details', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'location_training', 'code_editor', 'LIEU DE LA FORMATION', 0, 0, 1, 1, 1, 1, '{}', 12),
(39, 5, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 13),
(40, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(41, 5, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 15),
(42, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(43, 6, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(44, 6, 'specialite', 'text', 'Specialite', 0, 1, 1, 1, 1, 1, '{}', 3),
(45, 6, 'pays', 'text', 'Pays', 0, 0, 1, 1, 1, 1, '{}', 4),
(46, 6, 'telephone', 'text', 'Telephone', 0, 1, 1, 1, 1, 1, '{}', 5),
(47, 6, 'email', 'text', 'Email', 0, 0, 1, 1, 1, 1, '{}', 6),
(48, 6, 'tarifs', 'text', 'Tarifs', 0, 1, 1, 1, 1, 1, '{}', 7),
(49, 6, 'modes_de_payement', 'text', 'Modes De Payement', 0, 1, 1, 1, 1, 1, '{}', 8),
(50, 6, 'status_paymanet', 'select_dropdown', 'Status Paymanet', 0, 1, 1, 1, 1, 1, '{\"default\":\"option1\",\"options\":{\"option1\":\"En attente de confirmation\",\"option2\":\"Paiement confirm\\u00e9\"}}', 9),
(51, 6, 'formation', 'text', 'Formation', 0, 0, 1, 1, 1, 1, '{}', 10),
(52, 6, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 11),
(53, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(54, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(55, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(56, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 3),
(57, 7, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 1, 1, 1, 1, '{}', 4),
(58, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(59, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 2),
(60, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(61, 8, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 1, 1, 1, 1, '{}', 7),
(62, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 8),
(63, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(64, 9, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(65, 9, 'brief', 'text_area', 'Brief', 0, 1, 1, 1, 1, 1, '{}', 3),
(66, 9, 'icon', 'text', 'Icon', 0, 0, 1, 1, 1, 1, '{\"description\":\"A helpful description text here for your future self.\"}', 4),
(67, 5, 'formation_hasone_doctor_relationship', 'relationship', 'Doctor', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Doctor\",\"table\":\"doctors\",\"type\":\"belongsTo\",\"column\":\"doctor_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 16),
(68, 5, 'doctor_id', 'hidden', 'Doctor Id', 0, 1, 1, 1, 1, 1, '{}', 17),
(69, 5, 'category_id', 'hidden', 'Category Id', 0, 1, 1, 1, 1, 1, '{}', 18),
(70, 5, 'formation_belongstomany_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"category_formation\",\"pivot\":\"0\",\"taggable\":\"on\"}', 19),
(71, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(72, 10, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(73, 10, 'price', 'number', 'Price', 0, 1, 1, 1, 1, 1, '{}', 3),
(74, 10, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"Actif\",\"0\":\"Inactif\"}}', 4),
(75, 10, 'formation_id', 'text', 'Formation Id', 0, 1, 1, 1, 1, 1, '{}', 5),
(76, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 6),
(77, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(78, 10, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 8),
(79, 10, 'pack_belongsto_formation_relationship', 'relationship', 'formations', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Formation\",\"table\":\"formations\",\"type\":\"belongsTo\",\"column\":\"formation_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":null}', 9),
(80, 5, 'video', 'file', 'Présentation vidéo', 0, 0, 1, 1, 1, 1, '{\"mimes\":\"mp4,avi,mov,wmv,flv,mkv\",\"size\":\"50000\"}', 5),
(81, 8, 'comment_belongsto_formation_relationship', 'relationship', 'formations', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Formation\",\"table\":\"formations\",\"type\":\"belongsTo\",\"column\":\"formation_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(82, 8, 'user', 'text', 'User', 0, 1, 1, 1, 1, 1, '{}', 3),
(83, 8, 'comment', 'text', 'Comment', 0, 1, 1, 1, 1, 1, '{}', 4),
(84, 8, 'comment_parent', 'text', 'Comment Parent', 0, 1, 1, 1, 1, 1, '{}', 8),
(85, 8, 'formation_id', 'text', 'Formation Id', 0, 1, 1, 1, 1, 1, '{}', 9),
(86, 5, 'type', 'select_dropdown', 'Type de formation', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"E-learning\",\"2\":\"Pr\\u00e9sentiel\",\"3\":\"Classe Virtuelle\"}}', 3),
(88, 4, 'facebook', 'text', 'Facebook', 0, 0, 1, 1, 1, 1, '{}', 10),
(89, 4, 'linkedin', 'text', 'Linkedin', 0, 0, 1, 1, 1, 1, '{}', 11),
(90, 4, 'youtube', 'text', 'Youtube', 0, 0, 1, 1, 1, 1, '{}', 12),
(91, 4, 'twiter', 'text', 'X ( Twitter )', 0, 0, 1, 1, 1, 1, '{}', 13),
(92, 4, 'speciality', 'text', 'Speciality', 0, 0, 1, 1, 1, 1, '{}', 4),
(93, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(94, 11, 'question', 'text', 'Question', 0, 1, 1, 1, 1, 1, '{}', 2),
(95, 11, 'answer', 'text_area', 'Answer', 0, 0, 1, 1, 1, 1, '{}', 3),
(96, 11, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 4),
(97, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(98, 11, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 6),
(106, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(109, 13, 'video', 'file', 'Video', 0, 1, 1, 1, 1, 1, '{\"mimes\":\"mp4,avi,mov,wmv,flv,mkv\",\"files\":{\"size\":\"50000\"}}', 4),
(111, 13, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 5),
(112, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(113, 13, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 7),
(114, 13, 'extrait_belongsto_formation_relationship', 'relationship', 'Formation', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Formation\",\"table\":\"formations\",\"type\":\"belongsTo\",\"column\":\"formation_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(115, 13, 'formation_id', 'text', 'Formation Id', 0, 1, 1, 1, 1, 1, '{}', 9),
(116, 13, 'thumbnail', 'image', 'Miniature de la vidéo', 0, 1, 1, 1, 1, 1, '{}', 3),
(117, 13, 'title', 'text', 'Titre d\'extraits', 0, 1, 1, 1, 1, 1, '{}', 2),
(118, 5, 'brief', 'text_area', 'Bref aperçu de formation', 0, 0, 1, 1, 1, 1, '{}', 8);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_name_singular` varchar(255) NOT NULL,
  `display_name_plural` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `policy_name` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2024-11-21 18:54:11', '2024-11-22 15:32:15'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2024-11-21 18:54:11', '2024-11-21 18:54:11'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2024-11-21 18:54:11', '2024-11-21 18:54:11'),
(4, 'doctors', 'doctors', 'Doctor', 'Doctors', NULL, 'App\\Doctor', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2024-11-22 12:41:57', '2024-12-15 01:12:14'),
(5, 'formations', 'formations', 'Formation', 'Formations', NULL, 'App\\Formation', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2024-11-22 13:07:33', '2024-12-19 13:50:08'),
(6, 'orders', 'inscriptions', 'Inscription', 'Inscriptions', NULL, 'App\\Order', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2024-11-22 14:33:19', '2024-11-22 14:33:19'),
(7, 'resources', 'resources', 'Resource', 'Resources', NULL, 'App\\Resource', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2024-11-22 14:41:22', '2024-11-22 14:41:22'),
(8, 'comments', 'comments', 'Commentaire', 'Commentaires', NULL, 'App\\Comment', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2024-11-22 14:42:23', '2024-12-14 22:47:21'),
(9, 'categories', 'categories', 'Catégorie des formations', 'Catégories des formations', NULL, 'App\\Category', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2024-12-14 15:57:07', '2024-12-14 15:57:07'),
(10, 'packs', 'packs', 'Pack', 'Packs', NULL, 'App\\Pack', NULL, NULL, NULL, 1, 0, NULL, '2024-12-14 17:33:37', '2024-12-14 17:33:37'),
(11, 'faqs', 'faqs', 'Faq', 'Faqs', NULL, 'App\\Faq', NULL, NULL, NULL, 1, 1, '{\"scope\":null}', '2024-12-15 01:29:48', '2024-12-15 01:30:00'),
(13, 'extraits', 'extraits', 'Extrait', 'Extraits', NULL, 'App\\Extrait', NULL, NULL, NULL, 1, 0, '{\"scope\":null}', '2024-12-15 04:46:18', '2024-12-15 05:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `bio` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `linkedin` varchar(250) DEFAULT NULL,
  `youtube` varchar(250) DEFAULT NULL,
  `twiter` varchar(250) DEFAULT NULL,
  `speciality` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `phone`, `bio`, `created_at`, `updated_at`, `avatar`, `facebook`, `linkedin`, `youtube`, `twiter`, `speciality`) VALUES
(2, 'Dr. CHROQUI Younes', 'example@gmail.com', '0600000000', 'Médecin anesthésiste réanimateur\r\nDiplômé en auriculothérapie et en acupuncture scientifique', '2024-11-22 12:50:39', '2024-11-22 12:50:39', 'doctors/November2024/hNK1oytefoUyZQZiE8Uf.jpg', NULL, NULL, NULL, NULL, NULL),
(3, 'Pr. Olivier HANON', 'example@gmail.com', '0600000000', 'Médecin Gériatrie / gérontologie\r\n\r\nProfesseur à l’Université Paris-Descartes ; service de gériatrie – Hôpital Broca, AP-HP Paris', '2024-11-22 12:51:19', '2024-11-22 12:55:59', 'doctors/November2024/nvlmeCPaSdD6CXRLKql0.jpg', NULL, NULL, NULL, NULL, NULL),
(4, 'Pr. Nadjib HAMMOUDI', 'example@gmail.com', '0600000000', 'Cardiologue et expert en échocardiographie, Paris – France', '2024-11-22 12:51:54', '2024-11-22 12:51:54', 'doctors/November2024/AOfADl7z85dbRpG7p7fE.png', NULL, NULL, NULL, NULL, NULL),
(5, 'Pr. Laurent Chiche', 'example@gmail.com', '0600000000', '– Professeur de chirurgie vasculaire : Assistance publique- hopitaux de paris\r\n– Chef du Service de Chirurgie Vasculaire et Endovasculaire : Faculté de médecine Sorbonne Université\r\n– Président : CIV-world congress\r\n– Centre Aortique Tertiaire. CHU Pitié-Salpêtrière', '2024-11-22 12:56:33', '2024-11-22 12:56:33', 'doctors/November2024/4WTp80LW581469fjkOml.jpeg', NULL, NULL, NULL, NULL, NULL),
(6, 'PF Fakhir bouchra', 'fakhirbouchra@gmail.com', '0600000000', 'Professeur de l’enseignement supérieur à la faculté de médecine et de pharmacie, université Caddi Ayyad de Marrakech. Chef de service du service de gynécologie obstétrique de l’hôpital Ibn Tofeil du Centre Hospitalo-Universitaire Mohammed VI de Marrakech', '2024-12-15 00:48:17', '2024-12-15 00:48:17', 'doctors/December2024/XmBHWvWBOBk5UEGuwirZ.jpg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `extraits`
--

CREATE TABLE `extraits` (
  `id` int(10) UNSIGNED NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  `thumbnail` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extraits`
--

INSERT INTO `extraits` (`id`, `video`, `created_at`, `updated_at`, `deleted_at`, `formation_id`, `thumbnail`, `title`) VALUES
(5, '[{\"download_link\":\"extraits\\/December2024\\/NJWWHT3z6wmimvbbBtkO.mp4\",\"original_name\":\"View_From_A_Blue_Moon_Trailer-576p.mp4\"}]', '2024-12-15 05:41:00', '2024-12-15 05:54:53', NULL, 1, 'extraits/December2024/EayLaFZVG1exNNnzdU7C.jpg', 'Extraits video A');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(250) DEFAULT NULL,
  `answer` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1. Quelles formations médicales proposez-vous ?', 'Nous proposons une large gamme de formations dans les domaines suivants : soins infirmiers, premiers secours, gestion des urgences médicales, santé mentale, soins aux personnes âgées, réanimation cardio-pulmonaire (RCP), et bien d\'autres spécialités médicales. Nos formations sont adaptées aux professionnels de santé, aux étudiants et à toute personne désireuse d\'acquérir des compétences médicales.', '2024-12-15 01:36:51', '2024-12-15 01:37:16', NULL),
(2, '2. Comment s\'inscrire à une formation ?', 'L\'inscription à nos formations se fait directement sur notre site web. Il vous suffit de choisir la formation qui vous intéresse, de remplir le formulaire d\'inscription et de procéder au paiement en ligne. Une fois votre inscription validée, vous recevrez un e-mail de confirmation avec les détails de la formation.', '2024-12-15 01:37:34', '2024-12-15 01:37:34', NULL),
(3, '3. Les formations sont-elles certifiées ?', 'Oui, toutes nos formations sont certifiées par des organismes reconnus dans le domaine médical. À la fin de chaque formation, vous recevrez un certificat attestant de vos compétences, ce qui peut être un atout pour votre carrière professionnelle.', '2024-12-15 01:37:48', '2024-12-15 01:37:48', NULL),
(4, '4. Y a-t-il des prérequis pour suivre une formation ?', 'Certaines de nos formations nécessitent des prérequis, tels qu\'une expérience dans le domaine médical ou des connaissances de base en soins de santé. Les prérequis spécifiques sont indiqués dans la description de chaque formation. Pour les formations sans prérequis, elles sont ouvertes à tous, que vous soyez débutant ou professionnel expérimenté.', '2024-12-15 01:38:10', '2024-12-15 01:38:10', NULL),
(5, '5. Les formations sont-elles en ligne ou en présentiel ?', 'Nous proposons des formations en ligne et en présentiel, selon le type de formation. Les formations en ligne peuvent être suivies à votre rythme, avec un accès à des modules vidéo, des quiz et des ressources pédagogiques. Les formations en présentiel se déroulent dans des centres agréés ou dans des locaux spécifiques selon votre région.', '2024-12-15 01:38:20', '2024-12-15 01:38:20', NULL),
(6, '6. Combien de temps dure une formation ?', 'La durée des formations varie en fonction de la spécialité et du niveau de compétence requis. Certaines formations peuvent durer de quelques heures à plusieurs jours. Vous trouverez la durée exacte de chaque formation sur la page de description de la formation.', '2024-12-15 01:38:56', '2024-12-15 01:38:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `formations`
--

CREATE TABLE `formations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `objective` longtext DEFAULT NULL,
  `program` longtext DEFAULT NULL,
  `other_details` longtext DEFAULT NULL,
  `location_training` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `brief` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formations`
--

INSERT INTO `formations` (`id`, `title`, `cover`, `date`, `price`, `objective`, `program`, `other_details`, `location_training`, `created_at`, `updated_at`, `deleted_at`, `doctor_id`, `category_id`, `video`, `type`, `brief`) VALUES
(1, 'Diabeto et endo pediatrique', 'formations/November2024/q4e8ZogCNlggsLLp7EsH.jpg', '2024-12-30', NULL, '<ul>\r\n                                    <li>Connaître les principales recommandations vaccinales concernant les\r\n                                        professionnels de santé.</li>\r\n                                    <li>Connaître les informations relatives à la vaccination à saisir dans le carnet de\r\n                                        vaccination du patient.</li>\r\n                                    <li>Connaître les différents outils numériques d’enregistrement des vaccinations\r\n                                        (DMP, Mon espace santé, carnet de vaccination électronique, etc) et les\r\n                                        différents modes de transmission sécurisés des informations du professionnel\r\n                                        vaccinateur au médecin traitant.</li>\r\n                                    <li>Connaître les principaux déterminants de l’hésitation vaccinale, savoir\r\n                                        argumenter face aux fausses nouvelles, savoir convaincre avec une information\r\n                                        claire et objective.</li>\r\n                                    <li>Savoir mener un entretien de manière à recueillir les antécédents médicaux et\r\n                                        les traitements en cours.</li>\r\n                                    <li>Savoir reconnaître les situations complexes de personnes à orienter vers le\r\n                                        médecin.</li>\r\n<li>Savoir reconnaître les situations complexes de personnes à orienter vers le\r\n                                        médecin.</li>\r\n                                </ul>', 'Cette formation a été conçue autour des situations les plus fréquemment rencontrées\r\n                                    par les Infirmier.ère au quotidien, dans un format qui met l’accent sur les aspects\r\n                                    pratiques, des conseils concrets et le retour d’expérience d’experts de terrain,\r\n                                    appuyé par les dernières recommandations scientifiques..', 'Les médecins généralistes sont souvent consultés pour diverses affections cutanées. L\'accessibilité aux spécialistes est devenue complexe. De ce fait, le médecin généraliste est amené de plus en plus à diagnostiquer et traiter des dermatoses inflammatoires, infectieuses communes et dermatoses faciales fréquentes afin d’améliorer le parcours de soins du patient. Le rôle du médecin généraliste est primordial en dermatologie car selon le lieu d’exercice, le recours à l’avis spécialisé est aussi limité. De plus, la dermatologie évolue rapidement avec une demande de prévention grandissante. De même, plus le diagnostic est précoce, moins la prise en charge sera complexe. Le praticien est ainsi amené à adopter une bonne analyse clinique, un interrogatoire précis et d’adresser de manière plus efficace et raisonnée au médecin spécialiste soit le dermatologue. En effet, entre les différentes manifestations virales et les affections diverses de la peau, le médecin généraliste doit adopter une démarche rigoureuse et structurée de gestion du risque lui permettant de poser le bon diagnostic. L\'utilisation d\'une nomenclature centrée sur l\'abord de ce risque et intégrée dans un outil informatisé de gestion d\'incertitude diagnostique (le Dictionnaire des Résultats de Consultation®, aligné CIM 10) permet au médecin généraliste de sécuriser l\'inconfort de l\'incertitude diagnostique ici dermatologiques', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26586.506912757377!2d-7.549152505849049!3d33.59717294320431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cc9b5ed39c01%3A0x4db6f1381ccf8d63!2zQcOvbiBTZWJhw6IsIENhc2FibGFuY2E!5e0!3m2!1sen!2sma!4v1732285411410!5m2!1sen!2sma\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2024-11-22 14:23:52', '2024-12-19 13:50:57', NULL, 4, 5, '[{\"download_link\":\"formations\\/December2024\\/AX6aNr6Az83oNGyAtNhT.mp4\",\"original_name\":\"View_From_A_Blue_Moon_Trailer-576p.mp4\"}]', 3, 'la prise en charge de vos patients à l’hôpital ou en libéral grâce à nos formations agréées DPC, conçues par les meilleurs experts européens.'),
(2, 'Echocardiographie', 'formations/November2024/q4e8ZogCNlggsLLp7EsH.jpg', '2024-12-30', NULL, 'Tout médecin, quelle que soit son lieu d’exercice ou sa spécialité, peut être confronté aux urgences.\r\nL’urgence surprend et il est attendu, tant d’un point de vue légal que d’un point de vue moral, que tous les médecins soient formés aux gestes d’urgence et sachent réagir devant une situation engageant le pronostic vital.\r\nLe médecin généraliste restera le premier maillon de la prise en charge des urgences médicales aussi bien ressenties que vitales, cependant ni sa formation de base ni son apprentissage sur le tas ne lui garantissent les compétences nécessaires pour gérer ces situations.\r\nLe programme comprendra des cours théoriques, des ateliers pratiques ::', 'PROGRAMME\r\n\r\n>>Samedi\r\n\r\n09h00 :\r\n– Arrêt cardiaque\r\n– Choc anaphylactique\r\n– OAP et urgences hypertensives\r\n10h30 – 11h00 : Pause\r\n11h00 :\r\n– Ateliers pratique & Cas Cliniques\r\n13h00 – 14h00 : Pause\r\n14h00 :\r\n– Convulsion et coma\r\n– La douleur aigue intense usage de morphiniques\r\n– Les médicaments et la trousse d’urgence\r\n16h00 – 16h30 : Pause\r\n16h30 :\r\n– Ateliers pratique & Cas Cliniques\r\n\r\n>>Dimanche\r\n\r\n9h00 :\r\n– Oxygénation ventilation\r\n– Massage cardiaque externe et Défibrillateur\r\n– ECG opérationnel et urgences cardiologiques\r\n10h30 – 11h00 : Pause\r\n11h00 :\r\n– Ateliers pratique & Cas Cliniques', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26586.506912757377!2d-7.549152505849049!3d33.59717294320431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cc9b5ed39c01%3A0x4db6f1381ccf8d63!2zQcOvbiBTZWJhw6IsIENhc2FibGFuY2E!5e0!3m2!1sen!2sma!4v1732285411410!5m2!1sen!2sma\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2024-11-22 14:23:52', '2024-12-15 19:55:48', NULL, 3, 3, '[{\"download_link\":\"formations\\/December2024\\/AX6aNr6Az83oNGyAtNhT.mp4\",\"original_name\":\"View_From_A_Blue_Moon_Trailer-576p.mp4\"}]', 2, NULL),
(3, 'Urgence', 'formations/November2024/q4e8ZogCNlggsLLp7EsH.jpg', '2024-12-25', NULL, 'Tout médecin, quelle que soit son lieu d’exercice ou sa spécialité, peut être confronté aux urgences.\r\nL’urgence surprend et il est attendu, tant d’un point de vue légal que d’un point de vue moral, que tous les médecins soient formés aux gestes d’urgence et sachent réagir devant une situation engageant le pronostic vital.\r\nLe médecin généraliste restera le premier maillon de la prise en charge des urgences médicales aussi bien ressenties que vitales, cependant ni sa formation de base ni son apprentissage sur le tas ne lui garantissent les compétences nécessaires pour gérer ces situations.\r\nLe programme comprendra des cours théoriques, des ateliers pratiques :', 'PROGRAMME\r\n\r\n>>Samedi\r\n\r\n09h00 :\r\n– Arrêt cardiaque\r\n– Choc anaphylactique\r\n– OAP et urgences hypertensives\r\n10h30 – 11h00 : Pause\r\n11h00 :\r\n– Ateliers pratique & Cas Cliniques\r\n13h00 – 14h00 : Pause\r\n14h00 :\r\n– Convulsion et coma\r\n– La douleur aigue intense usage de morphiniques\r\n– Les médicaments et la trousse d’urgence\r\n16h00 – 16h30 : Pause\r\n16h30 :\r\n– Ateliers pratique & Cas Cliniques\r\n\r\n>>Dimanche\r\n\r\n9h00 :\r\n– Oxygénation ventilation\r\n– Massage cardiaque externe et Défibrillateur\r\n– ECG opérationnel et urgences cardiologiques\r\n10h30 – 11h00 : Pause\r\n11h00 :\r\n– Ateliers pratique & Cas Cliniques', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26586.506912757377!2d-7.549152505849049!3d33.59717294320431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cc9b5ed39c01%3A0x4db6f1381ccf8d63!2zQcOvbiBTZWJhw6IsIENhc2FibGFuY2E!5e0!3m2!1sen!2sma!4v1732285411410!5m2!1sen!2sma\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2024-11-22 14:23:52', '2024-12-15 00:21:53', NULL, 2, 1, '[{\"download_link\":\"formations\\/December2024\\/AX6aNr6Az83oNGyAtNhT.mp4\",\"original_name\":\"View_From_A_Blue_Moon_Trailer-576p.mp4\"}]', 1, NULL),
(4, 'Acupuncture', 'formations/November2024/q4e8ZogCNlggsLLp7EsH.jpg', '2024-12-30', NULL, 'Tout médecin, quelle que soit son lieu d’exercice ou sa spécialité, peut être confronté aux urgences.\r\nL’urgence surprend et il est attendu, tant d’un point de vue légal que d’un point de vue moral, que tous les médecins soient formés aux gestes d’urgence et sachent réagir devant une situation engageant le pronostic vital.\r\nLe médecin généraliste restera le premier maillon de la prise en charge des urgences médicales aussi bien ressenties que vitales, cependant ni sa formation de base ni son apprentissage sur le tas ne lui garantissent les compétences nécessaires pour gérer ces situations.\r\nLe programme comprendra des cours théoriques, des ateliers pratiques :', 'PROGRAMME:\r\n\r\n>>Samedi\r\n\r\n09h00 :\r\n– Arrêt cardiaque\r\n– Choc anaphylactique\r\n– OAP et urgences hypertensives\r\n10h30 – 11h00 : Pause\r\n11h00 :\r\n– Ateliers pratique & Cas Cliniques\r\n13h00 – 14h00 : Pause\r\n14h00 :\r\n– Convulsion et coma\r\n– La douleur aigue intense usage de morphiniques\r\n– Les médicaments et la trousse d’urgence\r\n16h00 – 16h30 : Pause\r\n16h30 :\r\n– Ateliers pratique & Cas Cliniques\r\n\r\n>>Dimanche\r\n\r\n9h00 :\r\n– Oxygénation ventilation\r\n– Massage cardiaque externe et Défibrillateur\r\n– ECG opérationnel et urgences cardiologiques\r\n10h30 – 11h00 : Pause\r\n11h00 :\r\n– Ateliers pratique & Cas Cliniques', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26586.506912757377!2d-7.549152505849049!3d33.59717294320431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cc9b5ed39c01%3A0x4db6f1381ccf8d63!2zQcOvbiBTZWJhw6IsIENhc2FibGFuY2E!5e0!3m2!1sen!2sma!4v1732285411410!5m2!1sen!2sma\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2024-11-22 14:23:52', '2024-12-15 19:55:58', NULL, 5, 2, '[{\"download_link\":\"formations\\/December2024\\/AX6aNr6Az83oNGyAtNhT.mp4\",\"original_name\":\"View_From_A_Blue_Moon_Trailer-576p.mp4\"}]', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-11-21 18:54:12', '2024-11-21 18:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `parameters` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Tableau de bord', '', '_self', 'dashboard', '#000000', NULL, 1, '2024-11-21 18:54:12', '2024-12-15 20:01:32', 'voyager.dashboard', 'null'),
(2, 1, 'Médias', '', '_self', 'device-tv-old', '#000000', NULL, 5, '2024-11-21 18:54:12', '2024-12-15 20:11:56', 'voyager.media.index', 'null'),
(3, 1, 'Utilisateurs', '', '_self', 'user-check', '#000000', NULL, 4, '2024-11-21 18:54:12', '2024-12-15 20:11:56', 'voyager.users.index', 'null'),
(4, 1, 'Rôles', '', '_self', 'user', '#000000', NULL, 3, '2024-11-21 18:54:12', '2024-12-15 20:11:59', 'voyager.roles.index', 'null'),
(5, 1, 'Outils', '', '_self', 'tools', '#000000', NULL, 10, '2024-11-21 18:54:12', '2024-12-15 20:11:56', NULL, ''),
(6, 1, 'Générateur de menus', '', '_self', 'voyager-list', '#000000', 5, 1, '2024-11-21 18:54:12', '2024-12-15 20:08:21', 'voyager.menus.index', 'null'),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 2, '2024-11-21 18:54:12', '2024-12-15 20:11:54', 'voyager.compass.index', NULL),
(10, 1, 'Paramètres', '', '_self', 'adjustments', '#000000', NULL, 9, '2024-11-21 18:54:12', '2024-12-15 20:11:56', 'voyager.settings.index', 'null'),
(11, 1, 'Médecins', '', '_self', 'user-heart', '#000000', NULL, 6, '2024-11-22 12:41:57', '2024-12-15 20:11:56', 'voyager.doctors.index', 'null'),
(12, 1, 'Formations', '', '_self', 'certificate', '#000000', 18, 2, '2024-11-22 13:07:33', '2024-12-14 17:23:20', 'voyager.formations.index', 'null'),
(13, 1, 'Inscriptions', '', '_self', 'currency-dollar', '#000000', NULL, 8, '2024-11-22 14:33:19', '2024-12-15 20:11:56', 'voyager.inscriptions.index', 'null'),
(15, 1, 'Ressources', '', '_self', 'archive', '#000000', 18, 5, '2024-11-22 14:41:22', '2024-12-15 20:11:56', 'voyager.resources.index', 'null'),
(16, 1, 'Commentaires', '', '_self', 'message', '#000000', 18, 4, '2024-11-22 14:42:23', '2024-12-14 22:48:04', 'voyager.comments.index', 'null'),
(17, 1, 'Catégories', '', '_self', 'category-2', '#000000', 18, 1, '2024-12-14 15:57:07', '2024-12-14 17:23:20', 'voyager.categories.index', 'null'),
(18, 1, 'Les formations', '#', '_self', 'certificate', '#000000', NULL, 7, '2024-12-14 17:22:57', '2024-12-15 20:11:56', NULL, ''),
(19, 1, 'Packs', '', '_self', NULL, '#000000', 18, 3, '2024-12-14 17:33:37', '2024-12-14 17:42:49', 'voyager.packs.index', 'null'),
(20, 1, 'Faqs', '', '_self', 'help-hexagon', '#000000', NULL, 11, '2024-12-15 01:29:48', '2024-12-15 20:11:56', 'voyager.faqs.index', 'null'),
(22, 1, 'Extraits', '', '_self', 'circle-dashed-check', '#000000', 18, 6, '2024-12-15 04:46:19', '2024-12-15 20:11:56', 'voyager.extraits.index', 'null'),
(23, 1, 'Page d\'accueil', '', '_blank', 'home', '#000000', NULL, 2, '2024-12-15 20:11:49', '2024-12-15 20:11:59', 'frontend.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `specialite` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tarifs` varchar(255) DEFAULT NULL,
  `modes_de_payement` varchar(255) DEFAULT NULL,
  `status_paymanet` varchar(255) DEFAULT NULL,
  `formation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `specialite`, `pays`, `telephone`, `email`, `tarifs`, `modes_de_payement`, `status_paymanet`, `formation`, `created_at`, `updated_at`) VALUES
(1, 'Yassine', 'test', 'test', '0600000000', 'yassine@gmail.com', '150', 'Virement / Versement', 'option1', 'URGENCES AU CABINET (EN LIGNE)', '2024-11-22 14:34:53', '2024-11-22 14:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `packs`
--

CREATE TABLE `packs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `formation_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packs`
--

INSERT INTO `packs` (`id`, `title`, `price`, `status`, `formation_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pack inscription', '6160', 1, 1, '2024-12-14 17:35:11', '2024-12-14 17:35:11', NULL),
(2, 'Pack inscription + Hébérgement 2 nuits en chambre single', '7000', 1, 1, '2024-12-14 17:36:01', '2024-12-14 17:36:01', NULL),
(3, 'Pack inscription + Hébérgement 2 nuits en chambre double', '6500', 1, 1, '2024-12-14 17:40:01', '2024-12-14 17:40:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(2, 'browse_bread', NULL, '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(3, 'browse_database', NULL, '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(4, 'browse_media', NULL, '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(5, 'browse_compass', NULL, '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(6, 'browse_menus', 'menus', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(7, 'read_menus', 'menus', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(8, 'edit_menus', 'menus', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(9, 'add_menus', 'menus', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(10, 'delete_menus', 'menus', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(11, 'browse_roles', 'roles', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(12, 'read_roles', 'roles', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(13, 'edit_roles', 'roles', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(14, 'add_roles', 'roles', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(15, 'delete_roles', 'roles', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(16, 'browse_users', 'users', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(17, 'read_users', 'users', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(18, 'edit_users', 'users', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(19, 'add_users', 'users', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(20, 'delete_users', 'users', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(21, 'browse_settings', 'settings', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(22, 'read_settings', 'settings', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(23, 'edit_settings', 'settings', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(24, 'add_settings', 'settings', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(25, 'delete_settings', 'settings', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(26, 'browse_doctors', 'doctors', '2024-11-22 12:41:57', '2024-11-22 12:41:57'),
(27, 'read_doctors', 'doctors', '2024-11-22 12:41:57', '2024-11-22 12:41:57'),
(28, 'edit_doctors', 'doctors', '2024-11-22 12:41:57', '2024-11-22 12:41:57'),
(29, 'add_doctors', 'doctors', '2024-11-22 12:41:57', '2024-11-22 12:41:57'),
(30, 'delete_doctors', 'doctors', '2024-11-22 12:41:57', '2024-11-22 12:41:57'),
(31, 'browse_formations', 'formations', '2024-11-22 13:07:33', '2024-11-22 13:07:33'),
(32, 'read_formations', 'formations', '2024-11-22 13:07:33', '2024-11-22 13:07:33'),
(33, 'edit_formations', 'formations', '2024-11-22 13:07:33', '2024-11-22 13:07:33'),
(34, 'add_formations', 'formations', '2024-11-22 13:07:33', '2024-11-22 13:07:33'),
(35, 'delete_formations', 'formations', '2024-11-22 13:07:33', '2024-11-22 13:07:33'),
(36, 'browse_orders', 'orders', '2024-11-22 14:33:19', '2024-11-22 14:33:19'),
(37, 'read_orders', 'orders', '2024-11-22 14:33:19', '2024-11-22 14:33:19'),
(38, 'edit_orders', 'orders', '2024-11-22 14:33:19', '2024-11-22 14:33:19'),
(39, 'add_orders', 'orders', '2024-11-22 14:33:19', '2024-11-22 14:33:19'),
(40, 'delete_orders', 'orders', '2024-11-22 14:33:19', '2024-11-22 14:33:19'),
(41, 'browse_resources', 'resources', '2024-11-22 14:41:22', '2024-11-22 14:41:22'),
(42, 'read_resources', 'resources', '2024-11-22 14:41:22', '2024-11-22 14:41:22'),
(43, 'edit_resources', 'resources', '2024-11-22 14:41:22', '2024-11-22 14:41:22'),
(44, 'add_resources', 'resources', '2024-11-22 14:41:22', '2024-11-22 14:41:22'),
(45, 'delete_resources', 'resources', '2024-11-22 14:41:22', '2024-11-22 14:41:22'),
(46, 'browse_comments', 'comments', '2024-11-22 14:42:23', '2024-11-22 14:42:23'),
(47, 'read_comments', 'comments', '2024-11-22 14:42:23', '2024-11-22 14:42:23'),
(48, 'edit_comments', 'comments', '2024-11-22 14:42:23', '2024-11-22 14:42:23'),
(49, 'add_comments', 'comments', '2024-11-22 14:42:23', '2024-11-22 14:42:23'),
(50, 'delete_comments', 'comments', '2024-11-22 14:42:23', '2024-11-22 14:42:23'),
(51, 'browse_categories', 'categories', '2024-12-14 15:57:07', '2024-12-14 15:57:07'),
(52, 'read_categories', 'categories', '2024-12-14 15:57:07', '2024-12-14 15:57:07'),
(53, 'edit_categories', 'categories', '2024-12-14 15:57:07', '2024-12-14 15:57:07'),
(54, 'add_categories', 'categories', '2024-12-14 15:57:07', '2024-12-14 15:57:07'),
(55, 'delete_categories', 'categories', '2024-12-14 15:57:07', '2024-12-14 15:57:07'),
(56, 'browse_packs', 'packs', '2024-12-14 17:33:37', '2024-12-14 17:33:37'),
(57, 'read_packs', 'packs', '2024-12-14 17:33:37', '2024-12-14 17:33:37'),
(58, 'edit_packs', 'packs', '2024-12-14 17:33:37', '2024-12-14 17:33:37'),
(59, 'add_packs', 'packs', '2024-12-14 17:33:37', '2024-12-14 17:33:37'),
(60, 'delete_packs', 'packs', '2024-12-14 17:33:37', '2024-12-14 17:33:37'),
(61, 'browse_faqs', 'faqs', '2024-12-15 01:29:48', '2024-12-15 01:29:48'),
(62, 'read_faqs', 'faqs', '2024-12-15 01:29:48', '2024-12-15 01:29:48'),
(63, 'edit_faqs', 'faqs', '2024-12-15 01:29:48', '2024-12-15 01:29:48'),
(64, 'add_faqs', 'faqs', '2024-12-15 01:29:48', '2024-12-15 01:29:48'),
(65, 'delete_faqs', 'faqs', '2024-12-15 01:29:48', '2024-12-15 01:29:48'),
(71, 'browse_extraits', 'extraits', '2024-12-15 04:46:18', '2024-12-15 04:46:18'),
(72, 'read_extraits', 'extraits', '2024-12-15 04:46:18', '2024-12-15 04:46:18'),
(73, 'edit_extraits', 'extraits', '2024-12-15 04:46:18', '2024-12-15 04:46:18'),
(74, 'add_extraits', 'extraits', '2024-12-15 04:46:18', '2024-12-15 04:46:18'),
(75, 'delete_extraits', 'extraits', '2024-12-15 04:46:18', '2024-12-15 04:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2024-11-21 18:54:12', '2024-11-21 18:54:12'),
(2, 'user', 'Normal User', '2024-11-21 18:54:12', '2024-11-21 18:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 2, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 3, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/November2024/K5zzpjzofLJzbKEW4C4T.png', '', 'image', 1, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'ScienceEvent', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to ScienceEvent. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'virement.compte-name', 'Titulaire du compte', 'SCIENCE EVENTS', NULL, 'text', 6, 'Virement'),
(12, 'virement.iban', 'IBAN', 'MA64 007 450 0015208000000049 97', NULL, 'text', 7, 'Virement'),
(13, 'virement.swift', 'swift', 'BCMAMAMC', NULL, 'text', 8, 'Virement'),
(14, 'virement.rib', 'RIB N°', '007 450 0015208000000049 97', NULL, 'text', 9, 'Virement'),
(15, 'reseaux-sociaux.facebook', 'Facebook', 'https://web.facebook.com/ScienceEvents.ma?_rdc=1&_rdr', NULL, 'text', 10, 'Reseaux sociaux'),
(16, 'reseaux-sociaux.twitter', 'X ( Twitter )', 'https://x.com', NULL, 'text', 11, 'Reseaux sociaux'),
(17, 'reseaux-sociaux.linkedin', 'Linkedin', 'https://linkedin.com', NULL, 'text', 12, 'Reseaux sociaux'),
(18, 'reseaux-sociaux.youtube', 'Youtube', 'https://youtube.com', NULL, 'text', 13, 'Reseaux sociaux'),
(19, 'site.adresse', 'Adresse', 'Koutoubia Center 2 – Avenue Hassan II – Guéliz – Marrakech', NULL, 'text', 14, 'Site'),
(20, 'site.phone', 'Numéro de téléphone', '+212 700 443 555', NULL, 'text', 15, 'Site'),
(21, 'site.email', 'Adresse email', 'contact@science-events.ma', NULL, 'text', 16, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `column_name` varchar(255) NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `settings` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', 'users/default.png', NULL, '$2y$10$MD5d4buhxpJM5Xdzkp8XMOQGAvMGOY86mwHHT7Z.J4AgHgDT1OITC', NULL, '{\"locale\":\"fr\"}', '2024-11-21 19:04:13', '2024-12-15 19:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_formation`
--
ALTER TABLE `category_formation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extraits`
--
ALTER TABLE `extraits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packs`
--
ALTER TABLE `packs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_formation`
--
ALTER TABLE `category_formation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `extraits`
--
ALTER TABLE `extraits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packs`
--
ALTER TABLE `packs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
