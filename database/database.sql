-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 24, 2025 at 06:58 PM
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
  `brief` text DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `brief`, `icon`, `created_at`, `updated_at`) VALUES
(5, 'Allergologue', 'Médecin spécialisé dans le diagnostic et le traitement des allergies et des maladies allergiques. Il prend en charge les réactions allergiques, l\'asthme, l\'eczéma et autres manifestations allergiques. Il réalise des tests allergiques et prescrit des traitements adaptés.', 'virus-search', '2024-12-14 16:06:16', '2025-01-05 11:30:50'),
(7, 'Anesthésiste réanimateur', 'Médecin spécialisé dans l\'anesthésie et la réanimation. Il assure la prise en charge du patient avant, pendant et après une intervention chirurgicale. Il gère également les situations d\'urgence vitale et les soins intensifs.', 'vaccine', '2025-01-05 11:32:42', '2025-01-05 11:32:42'),
(8, 'Cardiologue', 'Spécialiste des maladies du cœur et des vaisseaux sanguins. Il diagnostique et traite les pathologies cardiovasculaires comme l\'hypertension, les troubles du rythme cardiaque, l\'insuffisance cardiaque et les maladies coronariennes.', 'heartbeat', '2025-01-05 11:33:09', '2025-01-05 11:33:09'),
(9, 'Chirurgien cardio-vasculaire', 'Chirurgien spécialisé dans les interventions sur le cœur et les vaisseaux sanguins. Il réalise des opérations comme les pontages coronariens, les remplacements valvulaires et les interventions sur l\'aorte.', 'droplet-heart', '2025-01-05 11:36:16', '2025-01-05 11:36:16'),
(10, 'Chirurgien vasculaire', 'Se concentre sur la chirurgie des vaisseaux sanguins hors cœur. Il traite les pathologies artérielles et veineuses, comme les varices, les anévrismes et l\'artériopathie des membres.', 'thermometer', '2025-01-05 11:39:16', '2025-01-05 11:39:16'),
(11, 'Dermatologue', 'Spécialiste des maladies de la peau, des cheveux et des ongles. Il diagnostique et traite les affections cutanées comme l\'acné, l\'eczéma, le psoriasis et les cancers de la peau.', 'mood-smile', '2025-01-05 11:40:45', '2025-01-05 11:40:45'),
(12, 'Endocrinologue', 'Spécialiste des troubles hormonaux et du système endocrinien. Il prend en charge les maladies comme le diabète, les troubles thyroïdiens, les problèmes de croissance et les désordres métaboliques.', 'building-hospital', '2025-01-05 11:48:12', '2025-01-05 11:48:12'),
(13, 'Généraliste', 'Médecin de premier recours qui assure le suivi global des patients. Il diagnostique et traite les pathologies courantes, coordonne les soins et oriente vers les spécialistes si nécessaire.', 'stethoscope', '2025-01-05 11:49:05', '2025-01-05 11:49:05'),
(14, 'Gynécologue', 'Spécialiste de la santé de la femme, particulièrement du système reproducteur féminin. Il assure le suivi gynécologique, la contraception, le suivi de grossesse et traite les pathologies gynécologiques.', 'gender-female', '2025-01-05 11:50:03', '2025-01-05 11:50:03'),
(15, 'Interniste', 'Spécialiste qui prend en charge les maladies complexes touchant plusieurs organes. Il a une approche globale du patient et gère souvent les cas médicaux complexes nécessitant une expertise approfondie.', 'body-scan', '2025-01-05 11:51:28', '2025-01-05 11:51:28'),
(16, 'Kinésithérapeute', 'Professionnel de santé spécialisé dans la rééducation fonctionnelle. Il traite les troubles musculo-squelettiques, respiratoires et neurologiques par des techniques manuelles et des exercices adaptés.', 'yoga', '2025-01-05 11:52:26', '2025-01-05 11:52:26'),
(17, 'Néphrologue', 'Spécialiste des maladies des reins. Il traite l\'insuffisance rénale, l\'hypertension d\'origine rénale, et supervise les dialyses et les suivis de transplantation rénale.', 'body-scan', '2025-01-05 11:54:39', '2025-01-05 11:54:39'),
(18, 'ORL (Oto-Rhino-Laryngologiste)', 'Spécialiste des pathologies de l\'oreille, du nez et de la gorge. Il traite les problèmes auditifs, les infections ORL, les troubles de la voix et les pathologies sinusiennes.', 'ear-scan', '2025-01-05 11:56:32', '2025-01-05 11:56:32'),
(19, 'Pédiatre', 'Médecin spécialisé dans la santé des enfants et des adolescents. Il assure le suivi du développement, la prévention des maladies infantiles et le traitement des pathologies pédiatriques.', 'mood-kid', '2025-01-05 11:57:10', '2025-01-05 11:57:10'),
(21, 'Urologue', 'Chirurgien spécialisé dans les pathologies de l\'appareil urinaire et de l\'appareil génital masculin. Il traite les calculs rénaux, les troubles de la prostate et les cancers urologiques.', 'stethoscope', '2025-01-05 12:06:53', '2025-01-05 12:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `category_formation`
--

CREATE TABLE `category_formation` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_formation`
--

INSERT INTO `category_formation` (`id`, `category_id`, `formation_id`, `created_at`, `updated_at`) VALUES
(1, 19, 34, NULL, NULL),
(2, 8, 34, NULL, NULL),
(3, 15, 34, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `formation_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `formation_id`, `user_id`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'test\n', '2024-12-24 13:24:44', '2024-12-24 13:24:44', NULL),
(2, 1, 1, 'test 2', '2024-12-24 13:27:51', '2024-12-24 13:27:51', NULL),
(3, 1, 7, 'Message from user', '2024-12-24 13:30:16', '2024-12-24 13:30:16', NULL),
(4, 1, 1, 'Hi user am admin', '2024-12-24 13:33:09', '2024-12-24 13:33:09', NULL),
(5, 1, 7, 'test', '2024-12-24 14:24:03', '2024-12-24 14:24:03', NULL),
(6, 1, 7, 'test 3', '2024-12-24 14:26:27', '2024-12-24 14:26:27', NULL),
(7, 1, 7, 'test 4', '2024-12-24 14:30:51', '2024-12-24 14:30:51', NULL),
(8, 1, 1, 'test 5 from admin', '2024-12-24 14:35:10', '2024-12-24 14:35:10', NULL),
(9, 1, 7, 'test 6', '2024-12-24 14:35:54', '2024-12-24 14:35:54', NULL),
(10, 1, 7, 'test 7', '2024-12-24 14:38:01', '2024-12-24 14:38:01', NULL),
(11, 1, 7, 'test 8', '2024-12-24 14:41:34', '2024-12-24 14:41:34', NULL),
(12, 1, 7, 'test 9', '2024-12-24 14:42:37', '2024-12-24 14:42:37', NULL),
(13, 1, 7, 'test 10', '2024-12-24 14:43:23', '2024-12-24 14:43:23', NULL),
(14, 1, 1, 'test 11 from admin', '2024-12-24 14:46:21', '2024-12-24 14:46:21', NULL),
(15, 1, 1, 'test scroll', '2024-12-24 14:48:58', '2024-12-24 14:48:58', NULL),
(16, 1, 1, 'test scroll\n', '2024-12-24 15:37:01', '2024-12-24 15:37:01', NULL),
(17, 1, 1, 'test', '2024-12-24 15:38:02', '2024-12-24 15:38:02', NULL),
(18, 1, 1, 'new message', '2024-12-24 17:04:09', '2024-12-24 17:04:09', NULL),
(19, 1, 1, 'new message', '2024-12-24 17:04:31', '2024-12-24 17:04:31', NULL),
(20, 1, 1, 'test new message', '2024-12-24 17:05:22', '2024-12-24 17:05:22', NULL),
(21, 1, 1, 'new message', '2024-12-24 17:05:31', '2024-12-24 17:05:31', NULL),
(22, 1, 1, 'salam', '2024-12-25 20:46:10', '2024-12-25 20:46:10', NULL),
(23, 1, 1, 'si mohamed\n', '2024-12-25 20:49:46', '2024-12-25 20:49:46', NULL),
(24, 6, 1, 'hi\n', '2025-01-19 17:29:23', '2025-01-19 17:29:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `formation_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `formation_id`, `parent_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 'First comment', '2024-12-25 20:14:10', '2024-12-25 20:14:10'),
(2, 1, 1, NULL, 'Second comment', '2024-12-25 20:16:17', '2024-12-25 20:16:17'),
(3, 1, 1, 2, 'Comment under second comment', '2024-12-25 20:16:38', '2024-12-25 20:16:38'),
(4, 1, 1, NULL, 'Third comment', '2024-12-25 20:25:36', '2024-12-25 20:25:36'),
(5, 1, 1, NULL, 'akjna akjna', '2024-12-25 20:26:24', '2024-12-25 20:26:24'),
(6, 7, 1, NULL, 'Comment by user', '2024-12-25 20:28:18', '2024-12-25 20:28:18'),
(7, 7, 1, 5, 'Replay by user', '2024-12-25 20:28:32', '2024-12-25 20:28:32'),
(8, 8, 1, NULL, 'New comment from user 2', '2024-12-25 20:36:45', '2024-12-25 20:36:45'),
(9, 1, 1, 6, 'test', '2024-12-25 20:46:39', '2024-12-25 20:46:39'),
(10, 1, 1, NULL, 'hola homa', '2024-12-25 20:46:53', '2024-12-25 20:46:53'),
(11, 1, 1, 10, 'bien , question', '2024-12-25 20:50:21', '2024-12-25 20:50:21'),
(12, 1, 6, NULL, 'test', '2025-01-14 13:55:33', '2025-01-14 13:55:33'),
(13, 1, 6, NULL, 'test', '2025-01-14 13:55:38', '2025-01-14 13:55:38'),
(14, 1, 6, 12, 'test', '2025-01-14 13:56:05', '2025-01-14 13:56:05');

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
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 0, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 12),
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
(24, 4, 'email', 'text', 'E-mail', 0, 0, 1, 1, 1, 1, '{}', 6),
(25, 4, 'phone', 'text', 'Téléphone', 0, 0, 1, 1, 1, 1, '{}', 7),
(26, 4, 'bio', 'rich_text_box', 'Biographie', 0, 0, 1, 1, 1, 1, '{}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 8),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(29, 4, 'avatar', 'image', 'Photo', 0, 1, 1, 1, 1, 1, '{}', 2),
(30, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(31, 5, 'title', 'text', 'Titre', 0, 1, 1, 1, 1, 1, '{}', 2),
(32, 5, 'cover', 'image', 'Couverture', 0, 0, 1, 1, 1, 1, '{}', 4),
(33, 5, 'date', 'date', 'Premier jour de formation', 0, 0, 1, 1, 1, 1, '{}', 7),
(34, 5, 'price', 'hidden', 'Prix', 0, 0, 1, 1, 1, 1, '{}', 9),
(35, 5, 'objective', 'rich_text_box', 'Objectif', 0, 0, 1, 1, 1, 1, '{}', 12),
(36, 5, 'program', 'rich_text_box', 'Les extraits (description)', 0, 0, 1, 1, 1, 1, '{}', 13),
(37, 5, 'other_details', 'rich_text_box', 'Résumé de la formation', 0, 0, 1, 1, 1, 1, '{}', 11),
(38, 5, 'location_training', 'code_editor', 'LIEU DE LA FORMATION', 0, 0, 1, 1, 1, 1, '{}', 14),
(39, 5, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 15),
(40, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 16),
(41, 5, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 17),
(42, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(52, 6, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 14),
(53, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 15),
(62, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 0, 1, 1, 1, 1, '{}', 8),
(63, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(64, 9, 'name', 'text', 'Nom de la catégorie', 0, 1, 1, 1, 1, 1, '{}', 2),
(65, 9, 'brief', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 3),
(66, 9, 'icon', 'text', 'Icon Copier le nom de l\'icône à partir de ce site Web : https://tablericons.com/', 0, 0, 1, 1, 1, 1, '{}', 4),
(67, 5, 'formation_hasone_doctor_relationship', 'relationship', 'Doctor', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Doctor\",\"table\":\"doctors\",\"type\":\"belongsTo\",\"column\":\"doctor_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 18),
(68, 5, 'doctor_id', 'hidden', 'Doctor Id', 0, 1, 1, 1, 1, 1, '{}', 19),
(69, 5, 'category_id', 'hidden', 'Category Id', 0, 0, 1, 1, 1, 1, '{}', 20),
(70, 5, 'formation_belongstomany_category_relationship', 'relationship', 'Spécialités', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsToMany\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"category_formation\",\"pivot\":\"1\",\"taggable\":\"on\"}', 21),
(71, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(72, 10, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(73, 10, 'price', 'number', 'Price', 0, 1, 1, 1, 1, 1, '{}', 3),
(74, 10, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"Actif\",\"0\":\"Inactif\"}}', 4),
(75, 10, 'formation_id', 'text', 'Formation Id', 0, 1, 1, 1, 1, 1, '{}', 5),
(76, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 6),
(77, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(78, 10, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 8),
(79, 10, 'pack_belongsto_formation_relationship', 'relationship', 'formations', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Formation\",\"table\":\"formations\",\"type\":\"belongsTo\",\"column\":\"formation_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":null}', 9),
(80, 5, 'video', 'file', 'Présentation vidéo ( Vidéo courte )', 0, 0, 1, 1, 1, 1, '{\"mimes\":\"mp4,avi,mov,wmv,flv,mkv\",\"size\":\"50000\"}', 5),
(86, 5, 'type', 'select_dropdown', 'Type de formation', 1, 0, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"E-learning\",\"2\":\"Pr\\u00e9sentiel\",\"3\":\"Classe Virtuelle\"}}', 3),
(88, 4, 'facebook', 'text', 'Facebook', 0, 0, 1, 1, 1, 1, '{}', 10),
(89, 4, 'linkedin', 'text', 'Linkedin', 0, 0, 1, 1, 1, 1, '{}', 11),
(90, 4, 'youtube', 'text', 'Youtube', 0, 0, 1, 1, 1, 1, '{}', 12),
(91, 4, 'twiter', 'text', 'X ( Twitter )', 0, 0, 1, 1, 1, 1, '{}', 13),
(92, 4, 'speciality', 'text', 'Specialité', 0, 0, 1, 1, 1, 1, '{}', 4),
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
(118, 5, 'brief', 'text_area', 'Bref aperçu de formation', 0, 0, 1, 1, 1, 1, '{}', 10),
(119, 6, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(120, 6, 'formation_id', 'text', 'Formation Id', 0, 1, 1, 1, 1, 1, '{}', 7),
(121, 6, 'pack_id', 'text', 'Pack Id', 0, 0, 0, 0, 0, 1, '{}', 8),
(122, 6, 'price', 'text', 'Prix', 0, 1, 1, 1, 1, 1, '{}', 9),
(123, 6, 'status', 'select_dropdown', 'Statut', 0, 1, 1, 1, 1, 1, '{\"default\":1,\"options\":{\"1\":\"Nouvelle commande\",\"2\":\"Non pay\\u00e9\",\"3\":\"Pay\\u00e9\",\"4\":\"Annul\\u00e9\"}}', 10),
(124, 6, 'confirmed_by', 'text', 'Confirmé par', 0, 1, 1, 1, 1, 1, '{}', 3),
(125, 6, 'method_payment', 'select_dropdown', 'Method Payment', 0, 1, 1, 1, 1, 1, '{\"default\":1,\"options\":{\"1\":\"Virement \\/ Versement\",\"2\":\"Ch\\u00e9que\",\"3\":\"Esp\\u00e8ce\",\"4\":\"Prise en charge\",\"5\":\"Paiement en ligne\"}}', 11),
(126, 6, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 16),
(127, 6, 'proof', 'image', 'Preuve du paiement', 0, 1, 1, 1, 1, 1, '{}', 13),
(128, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 5),
(129, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(130, 5, 'video_full', 'file', 'Présentation vidéo ( Vidéo complète )', 0, 0, 1, 1, 1, 1, '{\"mimes\":\"mp4,avi,mov,wmv,flv,mkv\",\"size\":\"50000\"}', 6),
(131, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(132, 14, 'file_path', 'file', 'Fichier', 0, 1, 1, 1, 1, 1, '{}', 7),
(133, 14, 'formation_id', 'text', 'Formation Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(134, 14, 'file_name', 'text', 'Nom de fichier', 0, 1, 1, 1, 1, 1, '{}', 4),
(135, 14, 'file_type', 'text', 'File Type', 0, 0, 0, 0, 0, 0, '{}', 5),
(136, 14, 'file_size', 'text', 'File Size', 0, 0, 0, 0, 0, 0, '{}', 6),
(137, 14, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 8),
(138, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(139, 14, 'resource_belongsto_formation_relationship', 'relationship', 'Formation', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Formation\",\"table\":\"formations\",\"type\":\"belongsTo\",\"column\":\"formation_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(140, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(141, 15, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(142, 15, 'formation_id', 'text', 'Formation Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(143, 15, 'parent_id', 'text', 'Parent Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(144, 15, 'content', 'text_area', 'Commentaire', 0, 1, 1, 1, 1, 1, '{}', 5),
(145, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 1, '{}', 6),
(146, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(147, 15, 'comment_belongsto_user_relationship', 'relationship', 'User', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(148, 15, 'comment_belongsto_formation_relationship', 'relationship', 'Formation', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Formation\",\"table\":\"formations\",\"type\":\"belongsTo\",\"column\":\"formation_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 9),
(149, 15, 'comment_belongsto_comment_relationship', 'relationship', 'Commentaire parent', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\Comment\",\"table\":\"comments\",\"type\":\"belongsTo\",\"column\":\"parent_id\",\"key\":\"id\",\"label\":\"content\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(150, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(151, 16, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(152, 16, 'formation_id', 'text', 'Formation Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(153, 16, 'comment_id', 'text', 'Comment Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(154, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(155, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(156, 16, 'like_belongsto_user_relationship', 'relationship', 'User', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(157, 16, 'like_belongsto_formation_relationship', 'relationship', 'Formation', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Formation\",\"table\":\"formations\",\"type\":\"belongsTo\",\"column\":\"formation_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(158, 16, 'like_belongsto_comment_relationship', 'relationship', 'Commentaire', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Comment\",\"table\":\"comments\",\"type\":\"belongsTo\",\"column\":\"comment_id\",\"key\":\"id\",\"label\":\"content\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 9),
(159, 6, 'order_belongsto_formation_relationship', 'relationship', 'Formation', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Formation\",\"table\":\"formations\",\"type\":\"belongsTo\",\"column\":\"formation_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(160, 6, 'order_belongsto_user_relationship', 'relationship', 'Client', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(161, 6, 'labo_name', 'text', 'Laboratoire', 0, 1, 1, 1, 1, 1, '{}', 12),
(162, 5, 'date_details', 'text', 'Date de la formation', 0, 1, 1, 1, 1, 1, '{\"placeholder\":\"1-2-3\\/01\\/2025\"}', 8),
(163, 1, 'color', 'color', 'Color', 0, 1, 1, 1, 1, 1, '{}', 12),
(164, 6, 'order_belongsto_user_relationship_1', 'relationship', 'Confirmé par', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"confirmed_by\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 4),
(165, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(166, 17, 'name', 'text', 'Prenom', 0, 1, 1, 1, 1, 1, '{}', 2),
(167, 17, 'last_name', 'text', 'Nom', 0, 1, 1, 1, 1, 1, '{}', 3),
(168, 17, 'email', 'text', 'E-mail', 0, 1, 1, 1, 1, 1, '{}', 4),
(169, 17, 'phone', 'text', 'Téléphone', 0, 1, 1, 1, 1, 1, '{}', 5),
(170, 17, 'subject', 'text', 'Sujet', 0, 1, 1, 1, 1, 1, '{}', 6),
(171, 17, 'message', 'text_area', 'Message', 0, 0, 1, 1, 1, 1, '{}', 7),
(172, 17, 'created_at', 'timestamp', 'Reçu à', 0, 1, 1, 1, 0, 1, '{}', 8),
(173, 17, 'updated_at', 'timestamp', 'Mis à jour à', 0, 0, 0, 0, 0, 0, '{}', 9),
(174, 17, 'deleted_at', 'timestamp', 'Supprimé à', 0, 0, 0, 0, 0, 1, '{}', 10),
(175, 6, 'access_invoice', 'text', 'Access Invoice', 1, 0, 1, 1, 1, 1, '{}', 14),
(176, 19, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 0),
(177, 19, 'order_id', 'text', 'Order Id', 0, 0, 1, 1, 1, 1, '{}', 2),
(178, 19, 'formation_id', 'text', 'Formation Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(179, 19, 'user_id', 'text', 'User Id', 0, 1, 1, 1, 1, 1, '{}', 4),
(180, 19, 'price', 'text', 'Prix de formation', 0, 1, 1, 1, 1, 1, '{}', 8),
(181, 19, 'tva_price', 'number', 'Prix de TVA ( 20%)', 0, 1, 1, 1, 1, 1, '{}', 9),
(182, 19, 'method_payment', 'text', 'Méthode de paiement', 0, 1, 1, 1, 1, 1, '{}', 10),
(183, 19, 'status', 'select_dropdown', 'Statut', 0, 1, 1, 1, 1, 1, '{\"default\":\"0\",\"options\":{\"0\":\"En attente de confirmation\",\"1\":\"Paiement confirm\\u00e9\"}}', 11),
(184, 19, 'created_at', 'timestamp', 'Demandé à', 0, 1, 1, 1, 0, 1, '{}', 12),
(185, 19, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(186, 19, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 1, '{}', 15),
(187, 19, 'request_invoice_belongsto_user_relationship', 'relationship', 'Client', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(188, 19, 'request_invoice_belongsto_order_relationship', 'relationship', 'Commande', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\Order\",\"table\":\"orders\",\"type\":\"belongsTo\",\"column\":\"order_id\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 16),
(189, 19, 'request_invoice_belongsto_formation_relationship', 'relationship', 'Formation', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Formation\",\"table\":\"formations\",\"type\":\"belongsTo\",\"column\":\"formation_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(190, 19, 'request_invoice_belongsto_user_relationship_1', 'relationship', 'Confirmé par', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"confirmed_by\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(191, 19, 'confirmed_by', 'text', 'Confirmed By', 0, 1, 1, 1, 1, 1, '{}', 13);

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
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2024-11-21 18:54:11', '2025-01-14 10:05:24'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2024-11-21 18:54:11', '2024-11-21 18:54:11'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2024-11-21 18:54:11', '2024-11-21 18:54:11'),
(4, 'doctors', 'doctors', 'Doctor', 'Doctors', NULL, 'App\\Doctor', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2024-11-22 12:41:57', '2025-01-12 15:07:02'),
(5, 'formations', 'formations', 'Formation', 'Formations', NULL, 'App\\Formation', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2024-11-22 13:07:33', '2025-01-13 15:11:46'),
(6, 'orders', 'inscriptions', 'Inscription', 'Inscriptions', NULL, 'App\\Order', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2024-11-22 14:33:19', '2025-01-24 02:11:17'),
(9, 'categories', 'categories', 'Catégorie des formations', 'Catégories des formations', NULL, 'App\\Category', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2024-12-14 15:57:07', '2024-12-22 21:33:45'),
(10, 'packs', 'packs', 'Pack', 'Packs', NULL, 'App\\Pack', NULL, NULL, NULL, 1, 0, NULL, '2024-12-14 17:33:37', '2024-12-14 17:33:37'),
(11, 'faqs', 'faqs', 'Faq', 'Faqs', NULL, 'App\\Faq', NULL, NULL, NULL, 1, 1, '{\"scope\":null}', '2024-12-15 01:29:48', '2024-12-15 01:30:00'),
(13, 'extraits', 'extraits', 'Extrait', 'Extraits', NULL, 'App\\Extrait', NULL, NULL, NULL, 1, 0, '{\"scope\":null}', '2024-12-15 04:46:18', '2025-01-20 11:03:49'),
(14, 'resources', 'resources', 'Resource', 'Resources', NULL, 'App\\Resource', NULL, NULL, NULL, 1, 1, '{\"scope\":null}', '2024-12-24 18:49:06', '2024-12-24 18:54:26'),
(15, 'comments', 'comments', 'Comment', 'Comments', NULL, 'App\\Comment', NULL, NULL, NULL, 1, 1, '{\"scope\":null}', '2024-12-25 15:36:59', '2024-12-25 16:03:58'),
(16, 'likes', 'likes', 'Like', 'Likes', NULL, 'App\\Like', NULL, NULL, NULL, 1, 0, '{\"scope\":null}', '2024-12-25 16:48:02', '2024-12-25 17:13:07'),
(17, 'messages', 'messages', 'Message', 'Messages', NULL, 'App\\Message', NULL, NULL, NULL, 1, 0, NULL, '2025-01-14 22:42:33', '2025-01-14 22:42:33'),
(19, 'request_invoice', 'request-invoice', 'Demande de facture', 'Demandes de factures', NULL, 'App\\RequestInvoice', NULL, NULL, NULL, 1, 0, '{\"scope\":null}', '2025-01-24 12:15:23', '2025-01-24 16:47:14');

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
(2, 'Dr. CHROQUI Younes', NULL, NULL, 'Médecin anesthésiste réanimateur\r\nDiplômé en auriculothérapie et en acupuncture scientifique', '2024-11-22 12:50:39', '2025-01-05 10:36:26', 'doctors/January2025/jidRKuv1fCrLeVehdNPZ.jpg', NULL, NULL, NULL, NULL, 'Anesthésiste Réanimateur'),
(3, 'Pr. CHIKHAOUI Nabil', NULL, NULL, 'Professeur universitaire à la Faculté de Médecine et de Pharmacie Université Hassan II et Chef du service de radiologie des urgences Centre Hospitalo-Universitaire Ibn Rochd Casablanca, depuis 1996', '2024-11-22 12:51:19', '2025-01-05 10:34:16', 'doctors/January2025/8Er11EgCzcPYk65p9sbI.PNG', NULL, NULL, NULL, NULL, 'Radiologue'),
(4, 'Pr. HAMMOUDI Nadjib', NULL, NULL, 'Nadjib Hammoudi est cardiologue, professeur de médecine à l\'université de la Sorbonne et chef du service de soins intensifs cardiaques à l\'Institut de Cardiologie-Hôpital de la Pitié-Salpêtrière (Paris, France). Ses domaines de prédilection sont l\'échocardiographie et les valvulopathies.', '2024-11-22 12:51:54', '2025-01-05 10:20:57', 'doctors/November2024/AOfADl7z85dbRpG7p7fE.png', NULL, NULL, NULL, NULL, 'Cardiologie et Maladies Vasculaires'),
(5, 'Pr. CHICHE Laurent', NULL, NULL, '– Professeur de chirurgie vasculaire : Assistance publique- hopitaux de paris\r\n– Chef du Service de Chirurgie Vasculaire et Endovasculaire : Faculté de médecine Sorbonne Université\r\n– Président : CIV-world congress\r\n– Centre Aortique Tertiaire. CHU Pitié-Salpêtrière', '2024-11-22 12:56:33', '2025-01-05 10:17:22', 'doctors/November2024/4WTp80LW581469fjkOml.jpeg', NULL, NULL, NULL, NULL, 'Chirurgie Vasculaire et Endovasculaire'),
(6, 'Pr. FAKHIR Bouchra', NULL, NULL, 'Professeur de l’enseignement supérieur à la faculté de médecine et de pharmacie, université Caddi Ayyad de Marrakech. Chef de service du service de gynécologie obstétrique de l’hôpital Ibn Tofeil du Centre Hospitalo-Universitaire Mohammed VI de Marrakech', '2024-12-15 00:48:17', '2025-01-05 10:16:24', 'doctors/January2025/bCHESJhNKocpn639LnK4.jpg', NULL, NULL, NULL, NULL, 'Gynécologue'),
(7, 'Pr. POLAK Michel', NULL, NULL, '- Chef de service, Endocrinologie gynécologie diabétologie pédiatriques à l’Hôpital Universitaire Necker Enfants Malades, AP-HP\r\n- Coordonnateur du Centre Régional de Dépistage Néonatal (CRDN) IDF', '2025-01-05 09:31:47', '2025-01-05 10:14:39', 'doctors/January2025/M7pzadDg6wYs6fORDn95.jpg', NULL, NULL, NULL, NULL, 'Endocrinologie, gynécologie et diabétologie pédiatriques'),
(8, 'Pr. MOUSSAOUI Mohamed', NULL, NULL, '-Professeur de l’enseignement supérieur à la faculté de médecine Hassanll en anesthésie réanimation et Médecine d’urgence\r\n-Diplôme de formateur de médecine sur simulateur de l’université Paris Descartes\r\n-Diplôme d’anesthésie Réanimation de l’université libre de Bruxelles ULB', '2025-01-05 09:32:03', '2025-01-05 10:11:50', 'doctors/January2025/ilA6Qd4gle80EopRtQop.PNG', NULL, NULL, NULL, NULL, 'Anesthésiste-Réanimateur'),
(9, 'Pr. LEZMI Guillaume', NULL, NULL, 'Le Dr. LEZMI GUILLAUME Pédiatrie à Paris 15e Arrondissement. Ce praticien est référencé sur notre site comme étant inscrit à l\'Ordre des Médecins. Il est donc titulaire du doctorat de Médecine et spécialiste de sa discipline médicale. Un médecin est un professionnel de santé qui est formé pour diagnostiquer et traiter les maladies et les troubles médicaux. Les médecins peuvent exercer dans une variété de spécialités, dont la médecine générale, la chirurgie, la pédiatrie, la gynécologie, la psychiatrie et bien d\'autres encore. Les médecins ont une formation approfondie en sciences médicales, en anatomie humaine, en physiologie, ainsi que dans la compréhension des maladies et des troubles médicaux. Votre médecin utilise son expertise médicale en Pédiatrie pour évaluer les symptômes de ses patients, effectuer les bons examens médicaux et prescrire des traitements appropriés. En plus de diagnostiquer et de traiter les maladies, les médecins peuvent également fournir des conseils sur la Pédiatrie, la prévention des pathologies associées et les stratégies de gestion de la santé à long terme. Le médecin est le professionnel qui a le bagage théorique et pratique le plus important et la vision la plus large et la plus experte de la santé humaine.', '2025-01-05 09:32:22', '2025-01-05 10:04:42', 'doctors/January2025/7mjJs34rwes2zDZZuih9.PNG', NULL, NULL, NULL, NULL, 'Pneumologie et allergologie pédiatriques'),
(10, 'Pr. CARON Philippe', NULL, NULL, 'Docteur en Médecine : thèse n°36l. Toulouse. l980. <br>\r\nLes tumeurs à cellules de Leydig chez l’adulte.<br>\r\nLauréat de la Faculté de Toulouse (Médaille d’argent).\r\nChef de Clinique – Université Paul Sabatier. Octobre l980.\r\nDiplôme Universitaire de Médecine Interne. Octobre l980.\r\nSpécialiste en Médecine Interne. Juin l983.\r\nMembre du jury des épreuves du C.S.C.T. Faculté Toulouse Rangueil Juin 1991.\r\nChargé de cours à la faculté de Médecine. 1992-1994, 1995-2021.\r\nHabilitation à diriger des recherches 25 Mars 1998.\r\nDiplôme Universitaire d’Endocrinologie Moléculaire – Faculté de Montpellier 11 Septembre 1998.\r\nReprésentant de la Faculté de Médecine Toulouse-Rangueil à la Délégation Régionale à la Recherche Cliniqu Décembre 1999.\r\nJury Habilitation à diriger des Recherches Marie Pierre Teissier Novembre 2001.\r\nProfesseur des Universités Endocrinologie, Diabétologie et Maladies Métaboliques\r\n2 ème classe Septembre 2000.\r\n1 ère classe Septembre 2006.\r\nClasse exceptionnelle\r\n1 er échelon Septembre 2013.\r\n2 ème échelon Septembre 2017.\r\nMembre du jury des prix de thèse Université Paul Sabatier Toulouse III Juillet 2007, 2012.\r\nMembre au profil de l’Unité INSERM U1037 CRCT (équipe 6), IFR 31, Institut Louis Bugnard : PI3K de signalisation et contrôle de la traduction des cancers du pancréas et de l’hypophyse (Stéphane Pyronnet).\r\nDiplôme inter-universitaire de Thyroïdologie\r\nResponsable pédagogique 2010-1014\r\nDirecteur du diplôme à partir de 2015\r\nDirecteur de thèse en vue de l’obtention du Doctorat de l’Université de Toulouse (UT3 Paul Sabatier) Romain Baer : Rôles des isoformes de PI3K p110a et p110b dans l’initiation de la carcinogénèse pancréatique induite par Kras oncogènique, le 14 septembre 2015.\r\nJury Habilitation à diriger des Recherches Delphine Vezzosi Les tumeurs endocriniennes : du diagnostic à la prise en charge thérapeutique 27 janvier 2017.\r\nDirecteur de thèse en vue de l’obtention du Doctorat de l’Université de Toulouse (UT3 Paul Sabatier) Quemerais Christophe : Ciblage des vulnérabilités des fibroblastes\r\nassociés au cancer pancréatique en lien avec leur phénotype sécrétoire : rôle de FKBP7, le 23 Avril 2021\r\nProfesseur Emérite Septembre 2021', '2025-01-05 09:32:37', '2025-01-05 09:59:09', 'doctors/January2025/gtRlQulqDp43Yg3UUrW3.jpg', NULL, NULL, NULL, NULL, 'Endocrinologie et métabolismes'),
(11, 'Pr. BAUDUCEAU Bernard', NULL, NULL, '<ul>\r\n<li>Ancien Chef du Service d&rsquo;Endocrinologie de l&rsquo;H&ocirc;pital B&eacute;gin</li>\r\n<li>Secr&eacute;taire g&eacute;n&eacute;ral de l&rsquo;Alf&eacute;diam de 1999 &agrave; 2003</li>\r\n<li>Tr&eacute;sorier de la SFD de 2007 &agrave; 2015</li>\r\n<li>Tr&eacute;sorier de la FFRD de 2013 &agrave; 2021</li>\r\n<li>Charg&eacute; de mission pour l&rsquo;organisation des congr&egrave;s de la - SFD depuis 2017</li>\r\n<li>Th&eacute;matiques de recherche et centres d&rsquo;int&eacute;r&ecirc;t</li>\r\n<li>Diab&egrave;te du sujet &acirc;g&eacute; : &eacute;tude G&eacute;rodiab</li>\r\n<li>Complications cardiovasculaires</li>\r\n<li>Neuropathie v&eacute;g&eacute;tative</li>\r\n<li>Traitement du diab&egrave;te de type 2</li>\r\n</ul>', '2025-01-05 09:32:50', '2025-01-12 15:08:18', 'doctors/January2025/xK0vMQpkDu8HeOX1Z3sF.jpg', NULL, NULL, NULL, NULL, 'Endocrinologie et métabolismes'),
(12, 'Dr. BOURSASSI Abdelmajid', NULL, NULL, '–  Chirurgien chirurgie générale et chirurgie oncologique\r\n–  Diplôme en coeliochirurgie de la faculté de médecine Bordeaux France\r\n–  Diplôme en chirurgie cancérologique de la faculté de médecine de Rabat\r\n–  Diplôme en chirurgie proctologique de la faculté de médecine rabat\r\n–  Diplôme en échographie générale de la faculté de médecine de casa\r\n–  Ancien chef de polyclinique de santé à sidi Benour\r\n–  Ancien directeur d’hopital à el jadida\r\n–  Ancien délégué du ministère de la santé', '2025-01-05 09:33:01', '2025-01-05 10:48:19', 'doctors/January2025/8c0GYaXxSmTr2HGa7Sqn.PNG', NULL, NULL, NULL, NULL, 'Chirurgien Généraliste'),
(13, 'Dr. HEFTI Abderrazak', NULL, NULL, 'Chirurgien à Clinique Zerktouni – Casablanca\r\nServiteur du football National\r\nChirurgien orthopédiste et traumatologue\r\nChirurgien Traumatologue Orthopédiste\r\nMembre de la fondation AO Suisse Chirurgie Prothétique\r\nArthroscopie\r\nChirurgie du sport\r\nChirurgie de la main et de l’épaule\r\nMaladie de la colonne vertébrale\r\nPRP\r\nles Urgences', '2025-01-05 09:33:18', '2025-01-05 09:47:55', 'doctors/January2025/IPo44nl4C21m3DZsDgBN.jpg', NULL, NULL, NULL, NULL, 'Orthopédiste Traumatologue'),
(14, 'Dr. HADJ RABIA Smail', NULL, NULL, 'Le Dr. HADJ-RABIA SMAIL Dermatologie et vénéréologie à Paris 15e Arrondissement. Ce praticien est référencé sur notre site comme étant inscrit à l\'Ordre des Médecins. Il est donc titulaire du doctorat de Médecine et spécialiste de sa discipline médicale. Un médecin est un professionnel de santé qui est formé pour diagnostiquer et traiter les maladies et les troubles médicaux. Les médecins peuvent exercer dans une variété de spécialités, dont la médecine générale, la chirurgie, la pédiatrie, la gynécologie, la psychiatrie et bien d\'autres encore. Les médecins ont une formation approfondie en sciences médicales, en anatomie humaine, en physiologie, ainsi que dans la compréhension des maladies et des troubles médicaux. Votre médecin utilise son expertise médicale en Dermatologie et vénéréologie pour évaluer les symptômes de ses patients, effectuer les bons examens médicaux et prescrire des traitements appropriés. En plus de diagnostiquer et de traiter les maladies, les médecins peuvent également fournir des conseils sur la Dermatologie et vénéréologie, la prévention des pathologies associées et les stratégies de gestion de la santé à long terme. Le médecin est le professionnel qui a le bagage théorique et pratique le plus important et la vision la plus large et la plus experte de la santé humaine.', '2025-01-05 09:33:40', '2025-01-05 10:18:19', 'doctors/January2025/mUr2GYFlg0WEN3JFFMVm.png', NULL, NULL, NULL, NULL, 'Dermatologie et vénéréologie');

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
(5, '[{\"download_link\":\"extraits\\/January2025\\/uGAN73HqwCTD6Nn4nDCS.mp4\",\"original_name\":\"extrait - Plaies et processus de cicatrisation.mp4\"}]', '2024-12-15 05:41:00', '2025-01-05 19:18:27', NULL, 6, NULL, 'Plaies et processus de cicatrisation');

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
  `brief` text DEFAULT NULL,
  `video_full` varchar(255) DEFAULT NULL,
  `date_details` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formations`
--

INSERT INTO `formations` (`id`, `title`, `cover`, `date`, `price`, `objective`, `program`, `other_details`, `location_training`, `created_at`, `updated_at`, `deleted_at`, `doctor_id`, `category_id`, `video`, `type`, `brief`, `video_full`, `date_details`) VALUES
(6, 'Plaies et processus de cicatrisation', 'formations/January2025/7eSZWzvdDUNAWhjZW9QT.webp', '2025-01-18', NULL, '<p>A l&rsquo;issue de cette formation les m&eacute;decins participants pourront:<br>&ndash; Am&eacute;liorer le traitement des plaies aigu&euml;s/chroniques en terme d&rsquo;efficacit&eacute; et de confort du patient<br>&ndash; Am&eacute;liorer la prise en charge des plaies avec une cicatrisation optimale et dans les meilleurs d&eacute;lais<br>&ndash; Utiliser des techniques de pointes et performante dans le domaine</p>', NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08h30 &ndash; 09h00 : Remise des badges<br>Qu&rsquo;est ce que la cicatrisation ? :<br>&ndash; D&eacute;finition /Phases de la cicatrisation/ Les facteurs de croissance tissulaire<br>&ndash; La r&eacute;gulation du ph&eacute;nom&egrave;ne de cicatrisation /Remodelage et maturit&eacute; de la cicatrice /Facteurs entachant le processus de cicatrisation<br>&ndash; La cicatrice hypertrophique /La ch&eacute;lo&iuml;de La cicatrice atrophique/ Facteurs de mauvais pronostic cicatriciel<br>10h30 &ndash; 10h45 : Pause caf&eacute;</li>\r\n</ul>\r\n<p style=\"padding-left: 40px;\">Le Laser et Cicatrices :<br>D&eacute;finition, accessoires, caract&eacute;ristiques, diff&eacute;rents lasers en cicatrisation, indications, pr&eacute;cautions</p>\r\n<p style=\"padding-left: 40px;\">Atelier pratique 1: Points et Suture<br>&ndash; Fils et points de suture : Quelles sont les qualit&eacute;s que l&rsquo;on attend d&rsquo;un fil ou un point de suture pour une cicatrisation optimale ?<br>&ndash; Points esth&eacute;tiques, techniques d&rsquo;anesth&eacute;sie<br>&ndash; Techniques de pansements en fonction du stade de cicatrisation : pansements dits intelligents.<br>&ndash; Initiation au lambeaux cutan&eacute; dits au hasard<br>13h00 &ndash; 14h00 &ndash; Pause d&eacute;jeuner</p>\r\n<p style=\"padding-left: 40px;\">Diagnostiques et CAT devant :<br>&ndash; D&eacute;fauts de cicatrisation et d&eacute;nutrition<br>&ndash; D&eacute;faut de cicatrisation et d&eacute;ficit de la sensibilit&eacute; (pieds diab&eacute;tique)<br>&ndash; D&eacute;faut de cicatrisation et d&eacute;ficit circulatoire (l&rsquo;ulc&egrave;re variqueux)<br>&ndash; D&eacute;faut de cicatrisation et maladies g&eacute;n&eacute;tiques<br>16h30 &ndash; Pause caf&eacute;</p>\r\n<p style=\"padding-left: 40px;\">Atelier pratique 2 : Techniques de dissection/Hemostase et pansement<br>&ndash; Techniques d&rsquo;incision lignes de moindre tension<br>&ndash; Techniques de dissection<br>&ndash; Techniques d&rsquo;h&eacute;mostase<br>&ndash; Pansements intelligents et interfaces</p>\r\n<ul>\r\n<li><strong>JOUR 2</strong><br>09h00 &ndash; Plaies aigues :<br>&ndash; Causes et &eacute;tiologies, gravite, cons&eacute;quences, traitement</li>\r\n</ul>\r\n<p style=\"padding-left: 40px;\">Plaies chroniques :<br>&ndash; Escarres /Fausses plaies /Cicatrisation dirig&eacute;e /Mouvements tissulaires<br>&ndash; Autres techniques de r&eacute;paration tissulaire (greffe de peau, lambeaux cutan&eacute;s )<br>10h30 &ndash; 10h45 : Pause caf&eacute;</p>\r\n<p style=\"padding-left: 40px;\">Atelier pratique 3: Perte de substance, Techniques de lambeaux<br>&ndash; Lambeaux d avancement lambeau de rotation, lambeau de transposition, plastie en Z<br>&ndash; Lambeau LLL</p>', NULL, '2025-01-05 12:15:18', '2025-01-20 10:16:20', NULL, 12, 13, '[{\"download_link\":\"formations\\/January2025\\/e3eTTeElhe6wZzK6nYfV.mp4\",\"original_name\":\"Plaies et processus de cicatrisation.mp4\"}]', 2, NULL, '[{\"download_link\":\"formations\\/January2025\\/QnAVPoexBnVT2EuOl5yJ.mp4\",\"original_name\":\"extrait - Plaies et processus de cicatrisation.mp4\"}]', 'En cours de validation'),
(7, 'Échographie néphro-urologique', 'formations/January2025/QXQiaxbaUj1md444kO7B.png', '2025-09-18', NULL, NULL, NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08:00 &ndash; 09h00 : Remise des badges<br>&ndash; Test pr&eacute;requis<br>&ndash; R&eacute;glages &eacute;chographe<br>&ndash; Artefacts en Echographie<br>&ndash; Echographie r&eacute;nale normale<br>10h30 &ndash; 10:45 &ndash; Pause-caf&eacute;<br>&ndash; Echographie r&eacute;nale pathologique (Malformations ,masses kystiques,Tumeurs , Ad&eacute;nocarcinome,Pathologie Obstructives, Coliques n&eacute;phr&eacute;tiques)<br>13:00 &ndash; 14:00 : D&eacute;jeuner<br>-Echo doppler des art&egrave;res r&eacute;nales (Echographie dans l&rsquo;insuffisance r&eacute;nale)<br>&ndash; Ateliers Pratiques&nbsp;<br>16:30 &ndash; 16:45 &ndash; Pause-caf&eacute;<br>&ndash; Ateliers Pratiques&nbsp;</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>JOUR 2</strong><br>9:00 :<br>&ndash; Echographie v&eacute;sicale normale pathologique (Pathologie tumorale et infectieuse)<br>&ndash; Echographie prostatique normale et pathologique<br>&ndash; Echographie r&eacute;nale chez l&rsquo;enfant et nourrisson<br>10h30 &ndash; 10:45 &ndash; Pause-caf&eacute;<br>&ndash; Cas echo cliniques<br>&ndash; Evaluation<br>&ndash; Remise des attestations</li>\r\n</ul>', NULL, '2025-01-05 12:16:24', '2025-01-20 10:21:04', NULL, 3, 21, '[{\"download_link\":\"formations\\/January2025\\/aXL9e8pLoXS0vo1sKnVB.mp4\",\"original_name\":\"\\u00c9chographie n\\u00e9phro-urologique.mp4\"}]', 2, NULL, '[]', 'En cours de validation'),
(8, 'Techniques avancées en phlébologie', 'formations/January2025/dHUyQkwX8RAoK5boQeCu.jpeg', '2025-01-24', NULL, '<ul>\r\n<li>Insuffisance Veineuse Superficielle</li>\r\n<li>Syndrome De Congestion Pelvienne Et Syndrome Du Nutcracker</li>\r\n</ul>', NULL, '<ul>\r\n<li><strong>JOUR1<br></strong>18h30 : -Acceuil et Introduction de L&rsquo;enseignement<strong><br></strong></li>\r\n<li><strong>JOUR2</strong><br>09h00 :&nbsp;<strong>INSUFFISANCE VEINEUSE SUPERFICIELLE &ndash; (1&egrave;re partie)</strong><br>&ndash; D&eacute;finition IVC (profonde primaire et secondaire ; superficielle : classification CEAP)<br>&ndash; Historique de la prise en charge chirurgicale de l&rsquo;insuffisance veineuse superficielle<br>&ndash; Techniques chirurgicales conventionnelles conservatrices et non conservatrices<br>10h30 &ndash; 10h45 : Pause-caf&eacute;<br>10h45 :&nbsp;<strong><br></strong>&ndash; Complications des techniques chirurgicales conventionnelles<br>&ndash; Techniques non chirurgicales et non thermiques (colle, &eacute;cho-scl&eacute;roth&eacute;rapie &agrave; la mousse, ablation m&eacute;canico-chimique<br>13h00 &ndash; 14h00 : D&eacute;jeuner<br><strong>14h00 : INSUFFISANCE VEINEUSE SUPERFICIELLE &ndash; (2&egrave;me partie)<br></strong>&ndash; Techniques d&rsquo;ablation thermique : principes, dispositifs, r&eacute;alisation clinique (vid&eacute;o)<br>&ndash; Indications et contre-indications des proc&eacute;dures endoveineuses d&rsquo;ablation thermique<br>&ndash; Complications des ablations thermiques<br>&ndash; Laser, radiofr&eacute;quence ou chirurgie conventionnelle des troncs saph&egrave;nes : comment choisir sa strat&eacute;gie ? (cas cliniques)<br>16h30 &ndash; 16h45 : Pause-caf&eacute;<br>16h45 :<br>&ndash; Phl&eacute;bectomies per proc&eacute;dures endoveineuses : sont-elles indispensables ?<br>&ndash; Cas particuliers : r&eacute;cidives variqueuses, varices du pied, an&eacute;vrismes veineux<br>&ndash; Synth&egrave;se : Recommandations en chirurgie veineuse superficielle<strong><br></strong></li>\r\n<li><strong>JOUR3<br></strong><strong>09h00 : ATELIERS DE SIMULATION &Agrave; L&rsquo;&Eacute;VEINAGE PAR LASER ENDO-VEINEUX (4 ateliers<br>simultan&eacute;s, avec la participation de LSO M&eacute;dical)</strong><br>&ndash; Ponction veineuse / Acc&egrave;s veineux et positionnement de la fibre / Tumescence / Proc&eacute;dure Endotherme<br>10h30 &ndash; 10h45 : Pause-caf&eacute;<br>10h45 :&nbsp;<strong>SYNDROME DE CONGESTION PELVIENNE ET SYNDROME DU NUTCRACKER<br></strong>&ndash; Congestion veineuse pelvienne et syndromes du nutcracker: G&eacute;n&eacute;ralit&eacute;s et diagnostic<br>&ndash; Syndrome du nutcracker veineux : revue des traitements propos&eacute;s<br>&ndash; Syndrome du nutcracker veineux : traitement s&eacute;quentiel hybride art&eacute;rio-veineux : Indications, technique et r&eacute;sultats</li>\r\n</ul>', NULL, '2025-01-05 12:17:23', '2025-01-20 09:01:39', NULL, 5, 8, '[]', 2, NULL, '[]', '24, 25 et 26 Janvier 2025'),
(9, 'Échographie pédiatrique', 'formations/January2025/r4Iy4EmbqjHU6ptvNXwK.jpg', '2025-01-25', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>A la fin de cette formation les m&eacute;decins participants pourront ma&icirc;triser l&rsquo;&eacute;cho-anatomies et pathologie (du foie, des reins, des voix biliaires, de la rate, du pancr&eacute;as, de la vessie, de la prostate, de l&rsquo;appareil digestif et la hanche).</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"e3o3l-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"e3o3l-0-0\">\r\n<ol>\r\n<li><strong>JOUR 1</strong></li>\r\n</ol>\r\n</div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"1ai5a-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"1ai5a-0-0\"><span data-offset-key=\"1ai5a-0-0\">08:00 &ndash; Remise des badges</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"3qpr1-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"3qpr1-0-0\"><span data-offset-key=\"3qpr1-0-0\">08:30 &ndash; Reglage echographique et&nbsp;</span>Artefacts en &eacute;chographie.</div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"8n60o-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"8n60o-0-0\"><span data-offset-key=\"8n60o-0-0\">09:30 &ndash; Echographie Foie, voies biliaires,&nbsp;</span><span data-offset-key=\"232kk-0-0\">rate et pancreas.</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"f7cpk-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"f7cpk-0-0\"><span data-offset-key=\"f7cpk-0-0\">11:45 &ndash; Pathologie h&eacute;patique et voies biliaires.</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"dftb2-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"dftb2-0-0\"><span data-offset-key=\"dftb2-0-0\">12:30 &ndash; Echographie r&eacute;nale et v&eacute;sicale.</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"3365i-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"3365i-0-0\"><span data-offset-key=\"3365i-0-0\">13:00 &ndash; D&eacute;jeuner</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"d1sje-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"d1sje-0-0\"><span data-offset-key=\"d1sje-0-0\">14:00 &ndash; Ateliers pratiques sur patients.</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"8ptb-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"8ptb-0-0\"><span data-offset-key=\"8ptb-0-0\">16:00 &ndash; Pause-caf&eacute;</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"3s7vb-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"3s7vb-0-0\"><span data-offset-key=\"3s7vb-0-0\">16:15 &ndash; Ateliers pratiques sur patients.</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"1v0b8-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"1v0b8-0-0\"><span data-offset-key=\"1v0b8-0-0\">&nbsp;</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"6hc8q-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"6hc8q-0-0\">\r\n<ul>\r\n<li><strong>JOUR 2</strong></li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"5dlu0-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"5dlu0-0-0\"><span data-offset-key=\"5dlu0-0-0\">09:00 &ndash; Pathologie r&eacute;nale et v&eacute;sicale.</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"ghr2-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"ghr2-0-0\"><span data-offset-key=\"ghr2-0-0\">10:00 &ndash; Echographie du reflux gastro oesophagien.</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"32quq-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"32quq-0-0\"><span data-offset-key=\"32quq-0-0\">10:30 &ndash; Pause-caf&eacute;</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"e0olv-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"e0olv-0-0\"><span data-offset-key=\"e0olv-0-0\">10:45 &ndash; Echographie de la Stenose hypertrophique du pylore.</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"ab4t2-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"ab4t2-0-0\"><span data-offset-key=\"ab4t2-0-0\">11:30 &ndash; Echographie des urgences abdominales p&eacute;diatriques.</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"2tlfn-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"2tlfn-0-0\"><span data-offset-key=\"2tlfn-0-0\">12:00 &ndash; Ateliers pratiques sur patients.</span></div>\r\n</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"29ef2-0-0\">&nbsp;</div>\r\n<div class=\"\" data-block=\"true\" data-editor=\"cmpen\" data-offset-key=\"67cjj-0-0\">\r\n<div class=\"_1mf _1mj\" data-offset-key=\"67cjj-0-0\">13:30 &ndash; Fin de session</div>\r\n</div>', NULL, '2025-01-05 12:18:15', '2025-01-20 09:04:26', NULL, 3, 19, '[]', 2, NULL, '[]', '25 et 26 Janvier 2025'),
(10, 'Pathologies des membres supérieurs', 'formations/January2025/OlteCmLNyCPxbUIDPntC.png', '2025-02-08', NULL, '<ul>\r\n<li><strong>Jour 1</strong></li>\r\n</ul>\r\n<p><em><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">08h00-09h00:Remise des badges</span></em><br><strong><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Membres sup&eacute;rieurs:<br>Examen clinique et d&eacute;membrement des diff&eacute;rents pathologies</span></strong><br><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">&ndash; Examen de l&rsquo;Epaule<br></span><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\"><em>10h30-10h45:Pause-caf&eacute;</em><br>&ndash; Examen du Coude<br></span><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">&ndash; Examen du Poignet et de la Main chez le Sportif<br><em>13h00-14h00: D&eacute;jeuner</em><br></span><strong><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Membres inf&eacute;rieurs:<br></span>Examen clinique et d&eacute;membrement des diff&eacute;rents pathologies</strong><br><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Examen de la Hanche<br></span><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Examen de la Pubalgie<br></span><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Examen d&rsquo;un Genou aigu&euml;<br><em>16h30-16h45:Pause-caf&eacute;</em><br></span><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Examen d&rsquo;un Genou Chronique<br></span><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Examen de la Cheville et du Pied aigu&euml; chez le sportif<br></span><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Examen de la Cheville et du Pied chronique chez le sportif</span></p>\r\n<ul>\r\n<li><strong>Jour 2</strong></li>\r\n</ul>\r\n<p><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\"><em>09h00:</em><br><strong>Comment prendre une charge?</strong></span><br><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Une l&eacute;sion musculaire aigu&euml;<br></span><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Une l&eacute;sion musculaire chronique<br><em>10h30-10h45:Pause caf&eacute;</em><br></span><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Synth&egrave;se sur le s&eacute;minaire</span></p>', NULL, NULL, NULL, '2025-01-05 12:19:36', '2025-01-20 09:06:07', NULL, 13, 13, '[{\"download_link\":\"formations\\/January2025\\/NVBnunuzAlx2D5n7X77m.mp4\",\"original_name\":\"Pathologies des membres sup\\u00e9rieurs inf\\u00e9rieurs .mp4\"}]', 2, NULL, '[]', '08 et 09 Février 2025'),
(11, 'Echo Doppler Veineux', 'formations/January2025/lCwV9RffAiXQfXIM1zOU.jpg', '2025-02-08', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>A la fin de cette formation les m&eacute;decins participants pourront ma&icirc;triser l&rsquo;Artefact en echo doppler, R&eacute;glages doppler, Doppler veineux normal et dans la thrombose veineuse, Doppler veineux dans le bilan des varices, Doppler des art&egrave;res des membres inf&eacute;rieurs et sup&eacute;rieurs, Doppler des troncs supra-aortique, Analyse du spectre Quantification et d&rsquo;une st&eacute;nose et la Strat&eacute;gie de prise en charge d&rsquo;un poly vasculaire.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08:00 &ndash; 09:00 &ndash; Remise des badges<br>Test prerequis en Echo Doppler<br>R&eacute;glages Echographie<br>Artefacts<br>R&eacute;glage Doppler<br>Echo anatomie des veines des membres inf&eacute;rieurs<br>Echo anatomie des veines des membres sup&eacute;rieurs<br>10:30 &ndash; 10:45 &ndash; Pause-caf&eacute;<br>Doppler des thromboses veineuses<br>Gestion doppler des phl&eacute;bites<br>13:00 &ndash; 15:00 &ndash; D&eacute;jeuner<br>Manipulation sur patients, r&eacute;daction de compte rendu de cas &eacute;cho cliniques, Orientations de prise en charge<br>16:00 &ndash; 16:15 &ndash; Pause-caf&eacute;<br>Manipulation sur patients, r&eacute;daction de compte rendu de cas &eacute;cho cliniques, Orientations de prise en charge</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>JOUR 2</strong><br>08: 30&nbsp;<br>Doppler des varices<br>Doppler des fistules arterio veineuses<br>10:30 &ndash; 10:45 &ndash; Pause-caf&eacute;<br>Orientation de prise en charge<br>&Eacute;valuation<br>Remise des attestations</li>\r\n</ul>', NULL, '2025-01-05 12:20:26', '2025-01-20 10:29:03', NULL, 3, 8, '[]', 2, NULL, '[]', 'En cours de validation'),
(12, 'Transition en endocrinologie', 'formations/January2025/uILHrAoR7WtiurAasc9r.png', '2025-02-14', NULL, '<ul>\r\n<li><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">R&eacute;&eacute;valuer le diagnostic, adapter les th&eacute;rapeutiques, aborder les probl&egrave;mes sp&eacute;cifiques &agrave; cet &acirc;ge: adh&eacute;sion th&eacute;rapeutique, sexualit&eacute;, fertilit&eacute;.</span></li>\r\n<li><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">Discuter politiques d&rsquo;encadrement et de pr&eacute;paration au transfert du patient</span></li>\r\n<li><span class=\"OYPEnA font-feature-liga-off font-feature-clig-off font-feature-calt-off text-decoration-none text-strikethrough-none\">R&eacute;&eacute;valuer l&rsquo;approche de l&rsquo;endocrinologie dans ce groupe d&rsquo;&acirc;ge</span></li>\r\n</ul>', NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>18h00 : Inscription et remise des badges<br>18:30 : Les enjeux et les difficult&eacute;s de la transition<br>19:00 : Les projets aidant &agrave; la : exemple de Transend</li>\r\n<li><strong>JOUR 2</strong><br>09h00 &ndash; 10h15 : Cas avec les probl&eacute;matiques sp&eacute;cifiques lors de la transition<br>Cas n&deg; 1 maladie de Basedow<br>Cas n&deg; 2 nodule de la thyro&iuml;de<br>10h00 &ndash; 11h00 : Restitution en pl&eacute;ni&egrave;re, avec discussion g&eacute;n&eacute;rale, des deux cas cliniques pr&eacute;c&eacute;dents<br>&ndash; Conf&eacute;rence: La thyro&iuml;de de la transition<br>11h00 &ndash; 10h30 : Pause caf&eacute;<br>11h30 &ndash; 12h00 : Ateliers de discussion de cas cliniques (2 cas cliniques discut&eacute;s en sous-groupes)<br>Cas n&deg; 3 retard pubertaire<br>Cas n&deg; 4 syndrome de Turner<br>12h00 &ndash; 13h00 : Restitution en pl&eacute;ni&egrave;re, avec discussion g&eacute;n&eacute;rale, des deux cas cliniques pr&eacute;c&eacute;dents<br>13h00 &ndash; 14h00 : Pause d&eacute;jeuner<br>14h00 : Conf&eacute;rence : Retard pubertaire et hypogonadisme hypogonadotrope (Probl&egrave;mes diagnostiques et th&eacute;rapeutiques)</li>\r\n<li><strong>JOUR 3</strong><br>09h00 &ndash; 09h30 : Ateliers de discussion de cas cliniques (2 cas cliniques discut&eacute;s en sous-groupes)<br>Cas n&deg; 5 d&eacute;ficit en hormone de croissance<br>Cas n&deg; 6 hyperplasie cong&eacute;nitale des surr&eacute;nales<br>09h30 &ndash; 10h30 : Restitution en pl&eacute;ni&egrave;re, avec discussion g&eacute;n&eacute;rale, des deux cas cliniques pr&eacute;c&eacute;dents<br>10h00 &ndash; 10h15: Pause caf&eacute;<br>11h30 : Conf&eacute;rence de cl&ocirc;ture : Adaptations du traitement par hormone de croissance &agrave; la transition et nouveaut&eacute;s (Hormone de croissance &agrave; longue dur&eacute;e d&rsquo;action)</li>\r\n</ul>', NULL, '2025-01-05 12:21:19', '2025-01-20 09:09:47', NULL, 7, 19, '[]', 2, NULL, '[]', '14, 15 et 16 Février 2025'),
(13, 'Echo-doppler des fistule artério-veineuse', 'formations/January2025/womwEtNRtDWbDcWK36nO.png', '2025-04-12', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>A la fin de cette formation les m&eacute;decins participants pourront ma&icirc;triser l&rsquo;Artefact en echo doppler, R&eacute;glages doppler, Echographie dans les FAV chez le dialys&eacute;, dans la surveillance des FAV, des complications des FAV et dans le traitement des complications des FAV + Debimetrie Des FAV .</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08:00 &ndash; 09:00 &ndash; Remise des badges<br>R&eacute;glages Doppler sur mannequins<br>10:30 &ndash; 10:45 &ndash; Pause-caf&eacute;<br>Echographie dans les FAV chez le dialys&eacute; &ldquo;Bilan Pre Operatoire&rdquo;<br>Debimetrie Des FAV<br>13:00 &ndash; 15:00 &ndash; D&eacute;jeuner<br>Manipulation sur mannequins, r&eacute;daction de compte rendu de cas &eacute;cho cliniques, Orientations de prise en charge<br>16:00 &ndash; 16:15 &ndash; Pause-caf&eacute;<br>Manipulation sur mannequins, r&eacute;daction de compte rendu de cas &eacute;cho cliniques, Orientations de prise en charge</li>\r\n<li><strong>JOUR 2</strong><br>08: 30&nbsp;<br>Echographie dans la surveillance des FAV<br>Echographie des complications des FAV<br>Echographie dans le traitement des complications des FAV<br>10:30 &ndash; 10:45 &ndash; Pause-caf&eacute;<br>Evaluation<br>Fin session</li>\r\n</ul>', NULL, '2025-01-05 12:22:26', '2025-01-20 09:13:46', NULL, 3, 8, '[{\"download_link\":\"formations\\/January2025\\/oFKJ480sApJ0N0gNtTXp.mp4\",\"original_name\":\"Echo-doppler des fistule art\\u00e9rio-veineuse.mp4\"}]', 2, NULL, '[]', '12 et 13 Avril 2025'),
(14, 'Allergologie pédiatrique', 'formations/January2025/qCSIwQKkFfmakhpIewFI.png', '2025-04-12', NULL, NULL, NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>17h30 : &nbsp;Les ALLERGIES DE L&rsquo;ENFANT :<br>-Contexte &eacute;pid&eacute;miologique<br>-G&eacute;n&eacute;ralit&eacute; et physiopathologie de l&rsquo;allergie IgE-m&eacute;di&eacute;e</li>\r\n<li><strong>JOUR 2</strong><br>09h00 : TESTS ALLERGOLOGIQUES<br>-Prick-tests<br>-IgE sp&eacute;cifiques<br>-Recombinants<br>10h00:RHINITE ALLERGIQUE DE L&rsquo;ENFANT<br>-Une pathologie pas si simple &agrave; prendre en charge<br>11h00-11h30- : Pause-caf&eacute;<br>11h30: ALLERGIE ALIMENTAIRE IgE-m&eacute;di&eacute;e :<br>-Diagnostic<br>-Suivi<br>-Traitement<br>13h00 &ndash; 14h00 : D&eacute;jeuner<br>14h00 : Atelier test cutan&eacute;<br>15h00- 15h30 : Pause-caf&eacute;<br>15h45 :Anaphylaxie<br>&ndash; CAS CLINIQUE<br>-Prise en charge des asthme difficile</li>\r\n<li><strong>JOUR 3</strong><br>09h00 :Allergie aux antibiotiques chez l&rsquo;enfant<br>10h30 &ndash; 10h45 : Pause-caf&eacute;10h45 :<br>-Allergies alimentaires non IgE-m&eacute;di&eacute;es<br>12h00:Fin de la session</li>\r\n</ul>', NULL, '2025-01-05 12:23:35', '2025-01-20 09:15:20', NULL, 9, 19, '[]', 2, NULL, '[]', '11, 12 et 13 Avril 2024'),
(15, 'Petite chirurgie au cabinet', 'formations/January2025/koB2y6lbrDdrWEgPCRtk.webp', '2025-04-19', NULL, '<p>Cet enseignement a pour objectif l&rsquo;acquisition de comp&eacute;tences destin&eacute;es &agrave;&nbsp;:<br>La petite chirurgie, l&rsquo;Interventions chirurgicales de base, la Prise en charge pratique de l&rsquo;ongle douloureux, la Suppuration en proctologie et la Suppuration en gyn&eacute;cologie.</p>', NULL, '<ul>\r\n<li><strong>Jours 1</strong><br><strong>La petite chirurgie, du grand Art:</strong><br>&ndash; Introduction, d&eacute;finition. &ndash; Environnement chirurgical. &ndash; Anesth&eacute;sie locale.<br>&ndash; Techniques chirurgicales. &ndash; Prophylaxie. &ndash; Elimination des d&eacute;chets.<br><strong>Ateliers pratiques:</strong><br>&ndash; Lavage chirurgical des mains. &ndash; Instrumentation. &ndash; Fils chirurgicaux.<br>&ndash; Pr&eacute;paration du champ op&eacute;ratoire. &ndash; Techniques d&rsquo;anesth&eacute;sie.<br>&ndash; Techniques d&rsquo;incision et de sutures.<br><strong>Interventions chirurgicales de base.</strong><br><strong>Prise en charge pratique:</strong><br>&ndash; Des plais . &ndash; Des kystes cutan&eacute;s. &ndash; Des Abc&egrave;s. &ndash; Des lipomes.<br><strong>Ateliers pratiques:</strong><br>&ndash; Techniques d&rsquo;incision. &ndash; Dissection. &ndash; H&eacute;mostase. &ndash; Fermeture place /plan<br>&ndash; Fermeture cutan&eacute;e. &ndash; Surjet intradermique. &ndash; Point de Blair-Donati.<br>&ndash; Drainage /m&eacute;chage.</li>\r\n<li><strong>Jours 2</strong><br><strong>Prise en charge pratique de l&rsquo;ongle douloureux:</strong><br>&ndash; Ongle incarn&eacute;. &ndash; Traumatisme ungu&eacute;al.<br><strong>Suppuration en proctologie:</strong><br>&ndash; Abc&egrave;s Anal. &ndash; Maladie de Verneuil.<br><strong>Suppuration en gyn&eacute;cologie:</strong><br>&ndash; Abc&egrave;s de Bartholin.<br><strong>Cancer de la peau.</strong><br><strong>Ateliers pratique:</strong><br>&ndash; Technique de dissection &ndash; Biopsie et Biopsie Ex&eacute;r&egrave;se. &ndash; Evacuation / drainage.<br>&ndash; Technique de suture.</li>\r\n</ul>', NULL, '2025-01-05 12:24:34', '2025-01-20 09:16:44', NULL, 12, 13, '[]', 2, NULL, '[]', '19 et 20 Avril 2025'),
(16, 'Pathologies du sein', NULL, '2025-04-19', NULL, NULL, NULL, '<ul>\r\n<li><strong>Jour 1</strong><br>Matin<br>&ndash; Le sein normal: Anatomie, histologie,<br>&ndash; Imagerie Normale et pathologique (Mammographie, &eacute;chographie, IRM)<br>Pause caf&eacute;<br>&ndash; Pathologie b&eacute;nigne du sein: du diagnostic au traitement<br>D&eacute;jeuner<br>&ndash; Cancer du sein:<br>&nbsp; &nbsp;-Strat&eacute;gie de d&eacute;pistage<br>&nbsp; &nbsp;-Diagnostic positif, Biopsies (atelier pratique)<br>Pause caf&eacute;<br>&ndash; Formes cliniques, Stades<br>&ndash; Classification histologique<br>&ndash; Classification mol&eacute;culaire</li>\r\n<li><strong>Jour 2</strong><br>Matin:<br>&ndash; Bases du traitement chirurgical des tumeurs mammaires:<br>&nbsp; &nbsp;-La tumerectomie<br>&nbsp; &nbsp;-Le traitement oncoplastique<br>&nbsp; &nbsp;-La mastectomie<br>&nbsp; &nbsp;-Le curage ganglionnaire axillaire<br>&nbsp; &nbsp;-Pause caf&eacute;<br>&nbsp; &nbsp;-Strat&eacute;gies th&eacute;rapeutiques du cancer du sein<br>&nbsp; &nbsp;-Soins de support et suivi du cancer du sein<br>Fin du cours</li>\r\n</ul>', NULL, '2025-01-05 12:33:07', '2025-01-20 09:18:42', NULL, 6, 14, '[]', 2, NULL, '[]', '19 et 20 Avril 2025'),
(17, 'Échographie des varices', NULL, '2025-04-26', NULL, NULL, NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08:00 &ndash; 09:00 &ndash; Remise des badges<br>&ndash; Test prerequis en Echo Doppler .<br>&ndash; Reglages Doppler et diff&eacute;rents param&egrave;tres &eacute;chographiques:<br>Manipulation des diff&eacute;rents touches de r&eacute;glage<br>-Artefacts en &Eacute;chographie<br>&ndash; Echo doppler veineux normal et echo anatomie normale:<br>Technique d&rsquo;exploration<br>Evaluation de continence valvulaire<br>Recherche de reflux<br>Evaluation anatomique et h&eacute;modynamique de la veine cave inf&eacute;rieure<br>&ndash; Echodoppler des varices des membres inf&eacute;rieurs:<br>Techniques de Recherche de varices<br>Utilit&eacute; du Doppler dans la prise en charge des varices<br>Evaluation de l&rsquo;&eacute;tendue des varices<br>10:30 &ndash; 10:45 &nbsp;&ndash; Pause-caf&eacute;<br>&ndash; Complcations des varices:<br>Diagnostic des thromboses<br>Evaluations de l&rsquo;&eacute;tendue des thromboses veineuses<br>Datation et suivie des thromboses veineuses<br>13:00 &ndash; 14:00 &ndash; D&eacute;jeuner<br>Pratique doppler veineux normal:<br>Etude des r&eacute;seaux veineux normaux profonds et superficiels<br>Recherche des incontinences valvulaires<br>17:30 &ndash; Pause-caf&eacute;</li>\r\n<li><strong>JOUR 2</strong><br>09:00<br>&ndash; Pratique avec marquage des perforantes incontentes.<br>10:30 &ndash; 10:45 &ndash; Pause-caf&eacute;<br>&ndash; Modalit&eacute;s th&eacute;rapeutiques des varices.<br>&ndash; Cas echo cliniques.<br>12:30 &ndash; Fin de session</li>\r\n</ul>', NULL, '2025-01-05 12:36:21', '2025-01-20 09:20:37', NULL, 3, 9, '[]', 2, NULL, '[]', '26 et 27 Avril 2025'),
(18, 'Urgences en hémodialyse', 'formations/January2025/FcNk0HS3vXfmlDt98oHV.jpg', '2025-05-03', NULL, NULL, NULL, '<ul>\r\n<li><strong>Jour 1</strong><br>09h00 :<br>L&rsquo;arr&ecirc;t cardio-respiratoire<br>La d&eacute;tresse respiratoire<br>L&rsquo;&eacute;tat de choc<br>10h30 &ndash; 11h00 : Pause-caf&eacute;<br>11h00 :<br>&ndash; Ateliers pratique &amp; Cas Cliniques<br>13h00 &ndash; 14h00 : d&eacute;jeuner<br>14h00 :</li>\r\n</ul>\r\n<p>Convulsions et coma<br>L&rsquo;hypotension au cours de l&rsquo;h&eacute;modialyse<br>L&rsquo; ECG et les troubles du Rythmo graves<br>Les m&eacute;dicaments et le chariot de l&rsquo;urgence<br>16h00 &ndash; 16h30 : Pause-caf&eacute;<br>16h30 :<br>&ndash; Ateliers pratique &amp; Cas Cliniques</p>\r\n<ul>\r\n<li><strong>Jour 2</strong><br>9h00 :<br>Equipement et monitorage<br>Le d&eacute;fibrillateur<br>Les techniques d&rsquo;oxyg&eacute;nation et de ventilation<br>10h30 &ndash; 11h00 : Pause-caf&eacute;<br>11h00 :<br>&ndash; Ateliers pratique &amp; Cas Cliniques</li>\r\n</ul>', NULL, '2025-01-05 12:39:04', '2025-01-20 09:23:54', NULL, 8, 17, '[]', 2, NULL, '[]', NULL),
(19, 'Anévrisme de l\'aorte abdominale', 'formations/January2025/4ECRrZS9vF8zfBtEUKlv.jpeg', '2025-05-03', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>Un &ldquo;&eacute;tat de l&rsquo;art&rdquo; sur les an&eacute;vrismes de l&rsquo;aorte abdominale ! Cette formation a pour but d&rsquo;approfondir vos connaissances concernant les an&eacute;vrismes de l&rsquo;aorte abdominale. Apr&egrave;s avoir abord&eacute; les notions g&eacute;n&eacute;rales concernant leurs &eacute;tiologies, leur d&eacute;pistage, leur bilan et indications th&eacute;rapeutiques, nous exposerons les traitements chirurgicaux conventionnels, laparoscopiques et endovasculaires qui peuvent &ecirc;tre propos&eacute;s &agrave; vos patients. Vous vous perfectionnerez ou en d&eacute;couvrirez les aspects techniques, les r&eacute;sultats, leurs complications et les recommandations en vigueur. Un point sp&eacute;cifique concernera les an&eacute;vrismes d&rsquo;&eacute;tiologies non ath&eacute;romateuses et les an&eacute;vrismes rompus.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08h00 : Remise des badges<br>D&eacute;finitions: Etiologies des an&eacute;vrismes de l&rsquo;aorte abdominale (AAA)<br>D&eacute;pistage et surveillance des petits AAA<br>Particularit&eacute;s des AAA chez la femme<br>10h30-10h45: Pause-caf&eacute;</li>\r\n</ul>\r\n<p>Bilan morphologique des AAA<br>Indications op&eacute;ratoires des AAA<br>Bilan m&eacute;dical d&rsquo;op&eacute;rabilit&eacute;<br>Traitement chirurgical conventionnel : techniques<br>Traitement chirurgical conventionnel : complications pr&eacute;coces</p>\r\n<p>13:00 &ndash; 14:00 : D&eacute;jeuner<br>Traitement chirurgical conventionnel : complications tardives et r&eacute;sultats<br>Traitement chirurgical laparoscopie<br>Traitement endovasculaire des AAA (EVAR) : G&eacute;n&eacute;ralit&eacute;s<br>Sizing des endoproth&egrave;ses<br>Description des endoproth&egrave;ses disponibles (En France)</p>\r\n<p>16:00 &ndash; 16:15 : Pause-caf&eacute;<br>Traitement endovasculaire des AAA (EVAR) : Aspects techniques<br>Gestion des an&eacute;vrismes iliaques durant l&rsquo;EVAR<br>Complications de l&rsquo;EVAR<br>Endofuites post EVAR : description et prise en charge</p>\r\n<ul>\r\n<li>JOUR 2<br>09:00 :<br>Recommandations et litt&eacute;rature chirurgie ouverte / EVAR<br>Chirurgie ouverte simultan&eacute;e des AAA et des l&eacute;sions occlusives aorto-iliaques<br>An&eacute;vrismes juxta-r&eacute;naux et an&eacute;vrismes thoracoabdominaux de type 4<br>AAA inflammatoires</li>\r\n</ul>\r\n<p>10:30 &ndash; 10:45 : Pause-caf&eacute;</p>\r\n<p>AAA mycotiques<br>AAA rompus<br>Syndrome compartimental abdominal<br>Fin de session</p>', NULL, '2025-01-05 12:39:59', '2025-01-20 09:28:48', NULL, 5, 9, '[]', 2, NULL, '[]', '03 et 04 Mai 2025'),
(20, 'Gynécologie médicale', 'formations/January2025/FU4TfSY6sLmXauC71sGU.jpg', '2025-05-10', NULL, NULL, NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08:00 &ndash; Remise des badges<br>09:00 &ndash; La contraception<br>&ndash; Principes de prescription de la contraception, Recommandations de l&rsquo;OMS: Cas cliniques<br>&ndash; DIU : principes d&rsquo;utilisation et pose /Vid&eacute;o, Atelier pratique<br>10:45 &ndash; Pause-caf&eacute;<br>11:00 &ndash; D&eacute;pistage du cancer du col<br>&ndash; Qu&rsquo;est ce qu&rsquo;on d&eacute;piste? notion de dysplasie<br>&ndash; Comment on d&eacute;piste ? technique du frottis cervico-vaginale ! Que faire si d&eacute;pistage positive ? cas cliniques de frottis anormaux<br>13:00 &ndash; D&eacute;jeuner<br>14:00 &ndash; La fertilit&eacute; :<br>&ndash; Etiologies de l&rsquo;infertilit&eacute; f&eacute;minine.<br>&ndash; Etiologies de l&rsquo;infertilit&eacute; Masculine, lecture de spermogramme<br>16:00 &ndash; Pause-caf&eacute;<br>16:15 &ndash; Suite fertilit&eacute; :<br>&ndash; Bilan initiale et principes de PEC, arbre d&eacute;cisionnelles .<br>&ndash; Cas cliniques interactifs</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>JOUR 2</strong><br>09:00 &ndash; Suivie de la grossesse<br>&ndash; Rythme de suivie de grossesse, Objectifs de la consultation pr&eacute;natale du premier, deuxi&egrave;me et troisi&egrave;me trimestre<br>&ndash; Nutrition et suppl&eacute;mentation de la femme enceinte<br>10:45 &ndash; Pause-caf&eacute;<br>11:00 &ndash; Diagnostic de la grossesses et grossesses anormales au premier trimestre, cas cliniques (FC, GEU, Moles, Grossesse g&eacute;mellaire)<br>&ndash; Consultation du post partum<br>&ndash; Fin de session</li>\r\n</ul>', NULL, '2025-01-05 12:41:36', '2025-01-20 10:00:00', NULL, 6, 14, '[]', 2, NULL, '[]', '04 et 05 Octobre 2025'),
(21, 'Les infiltrations échoguidées', 'formations/January2025/FU7raOj37tSH6ZNZNzdY.png', '2025-05-17', NULL, '<ul>\r\n<li>Epaule, Coude,&nbsp;Main, Poignet,&nbsp;<span class=\"OYPEnA text-decoration-underline text-strikethrough-none\">Hanche,&nbsp;</span><span class=\"OYPEnA text-decoration-underline text-strikethrough-none\">Genou ,</span>Cheville,&nbsp;<span class=\"OYPEnA text-decoration-underline text-strikethrough-none\">Muscules</span></li>\r\n</ul>', NULL, '<ul>\r\n<li><strong>JOUR1</strong><br>08h30 : Remise des badges<br>09h00 :- Pr&eacute;caution &ndash; Asepsie &ndash; Mat&eacute;riel<br>&ndash; Produits utilises : cortico&iuml;des &ndash; Acide hyaluronique &ndash; PRP<br>&ndash; Indications et contre indications<br>EPAULE :&nbsp;<br>&ndash; Echo anatomie<br>&ndash; Infiltration : Gl&eacute;no-hum&eacute;rale &ndash; acromio-claviculaire &ndash; Bourse &ndash; coulisse bicipitale<br>&ndash; Ateliers pratiques<br>10h30 : Pause-caf&eacute;<br>10h45 : COUDE :<br>&ndash; Echo anatomie<br>&ndash; Infiltration : Tennis elbow &ndash; Golf elbow &ndash; Articulation du coude<br>&ndash; Ateliers pratiques<br>POIGNET &ndash; MAIN :<br>&ndash; Echo anatomie<br>&ndash; Infiltration : Dequervain &ndash; Kyste &ndash; Rhizarthrose &ndash; canal carpien &ndash; radio-ulnair doigt &agrave; ressaut<br>&ndash; Ateliers pratiques<br>13h00: D&eacute;jeuner<br>14h00: HANCHE :<br>&ndash; Echo anatomie<br>&ndash; Infiltration : coxo-f&eacute;morale &ndash; bourse trochant&eacute;rienne<br>&ndash; Ateliers pratiques<br>GENOU :<br>&ndash; Echo anatomie<br>&ndash; Infiltration : articulation &ndash; Kyste poplit&eacute; &ndash; Essuie-glace &ndash; demi-tendineux &ndash; mur m&eacute;niscal<br>&ndash; Ateliers pratiques<br>16h30 : Pause-caf&eacute;<br>16h45 : CHEVILLE &ndash; PIED :<br>&ndash; Echo anatomie<br>&ndash; Infiltration : Talo crurale &ndash; bursite &ndash; pr&eacute;-achill&eacute;enne &ndash; tibial post&eacute;rieur &ndash; Fibulaires n&eacute;vrome de Morton &ndash; carrefour post&eacute;rieur</li>\r\n<li><strong>JOUR2</strong><br>09h00 : MUSCULES :<br>&ndash; Echo anatomie<br>&ndash; H&eacute;matome : Quadriceps &ndash; ischio-jambier &ndash; Adducteur &ndash; Mollet<br>Ateliers pratique<br>10h30 : Pause-caf&eacute;<br>10h45 : &ndash; Pratique sur cuisse de poulet<br>&ndash; Synth&egrave;se sur le s&eacute;minaire<br>&ndash; Fin de session</li>\r\n</ul>', NULL, '2025-01-05 12:42:37', '2025-01-20 09:37:20', NULL, 13, 13, '[]', 2, NULL, '[]', '17 et 18 Mai 2025'),
(22, 'Chirurgie dermatologique au cabinet', 'formations/January2025/JKngKLdWozRocYHOoQwn.png', '2025-05-24', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>En participant &agrave; cette formation en chirurgie dermatologique au cabinet, les professionnels de la sant&eacute; pourront acqu&eacute;rir une expertise compl&egrave;te dans la r&eacute;alisation de proc&eacute;dures chirurgicales dermatologiques. Ils ma&icirc;triseront les techniques d&rsquo;anesth&eacute;sie, d&rsquo;incision, de dissection, et de sutures, tout en comprenant la gestion pratique du cabinet.</p>\r\n<p>De plus, les participants seront capables de g&eacute;rer efficacement les cas de l&eacute;sions dermatologiques b&eacute;nignes et oncologiques, y compris la chirurgie des m&eacute;lanomes.&nbsp;</p>\r\n<p>En fin de compte, cette formation les pr&eacute;parera &agrave; fournir des soins dermatologiques de haute qualit&eacute;, en toute s&eacute;curit&eacute;, avec une attention particuli&egrave;re &agrave; l&rsquo;esth&eacute;tique des r&eacute;sultats.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_raw_code wpb_content_element wpb_raw_html\">\r\n<div class=\"wpb_wrapper\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '<ul>\r\n<li><strong>JOUR1</strong><br>8h00: remise des badges9h00 :<br>D&eacute;finition / Historique<br>Bases anatomiques de la chirurgie dermatologique<br>Analyse structurelle et biom&eacute;canique de la peau<br>Organisation des soins : locaux et environnement chirurgical, &eacute;quipements, boite de petite chirurgie, consommables (fils, pansements)<br>Prevention des risques infectieux : lavage chirurgical des mains de l&rsquo;op&eacute;rateur, st&eacute;rilisation des instruments, champs op&eacute;ratoires, antibioprophylaxie, gestion des d&eacute;chets de soins au cabinet<br>Anesth&eacute;sie : de contact, locale, locor&eacute;gionale, tumescente, d&eacute;termination de la dose toxique<br>Techniques d incision, de dissection, et d&rsquo;exerese<br>Techniques de sutures cutan&eacute;es<br>10h30-10h45: Pause-caf&eacute;</li>\r\n</ul>\r\n<p style=\"padding-left: 40px;\">Ateliers Pratique 1: techniques d&rsquo;incisions, d&rsquo;h&eacute;mostase et de dissection</p>\r\n<p style=\"padding-left: 40px;\">Fils et points de sutures<br>Points esth&eacute;tiques<br>Point intra dermique invers&eacute;, surjet intradermique, point d&rsquo;angle<br>Techniques de r&eacute;paration des malfa&ccedil;ons chirurgicales<br>Techniques d&rsquo;anesth&eacute;sies, d&rsquo;incision, de dissection et d&rsquo;h&eacute;mostase<br>13h-14h: D&eacute;jeuner</p>\r\n<p style=\"padding-left: 40px;\">Chirurgie des l&eacute;sions dermatologiques b&eacute;nignes<br>Chirurgie cutan&eacute;e de l&rsquo;enfant<br>Marges d&rsquo;ex&eacute;r&egrave;se et recommandations<br>Chirurgie micrographique<br>Analyse des mouvements tissulaires et principe des lambeaux<br>16h30-16h45: Pause-caf&eacute;</p>\r\n<p style=\"padding-left: 40px;\">Ateliers Pratique 2</p>\r\n<p style=\"padding-left: 40px;\">R&eacute;alisation pratique des lambeaux d&rsquo;avancements, de rotation<br>Plastie en Z</p>\r\n<ul>\r\n<li><strong>JOUR2</strong><br>9h00<br>Chirurgie oncologique dermatologique<br>Pi&egrave;ges diagnostiques et chirurgie des m&eacute;lanomes<br>Greffe de peau : totale et compens&eacute;, peau mince</li>\r\n</ul>\r\n<p style=\"padding-left: 40px;\">Chirurgie ungu&eacute;ale<br>Prise en charge chirurgicale des cicatrices<br>Les pansements<br>Le compte rendu op&eacute;ratoire<br>10h30-10h45: Pause-caf&eacute;</p>\r\n<p style=\"padding-left: 40px;\">Ateliers Pratique 3</p>\r\n<p style=\"padding-left: 40px;\">Entrainement pratique, r&eacute;alisations des lambeaux, plastie en z<br>Plastie de transposition LLL<br>Entrainement pratique sur les points et sutures esth&eacute;tiques<br>Fin de la session&nbsp;</p>', NULL, '2025-01-05 12:43:36', '2025-01-20 09:45:18', NULL, 12, 13, '[]', 2, NULL, '[]', '24 et 25 Mai 2025'),
(23, 'Échographie gynéco-obstétrique', 'formations/January2025/JICwIkjYSIgp9ugHwGCM.jpg', '2025-05-24', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>A la fin de cette formation les m&eacute;decins participants pourront ma&icirc;triser l&rsquo;&eacute;chographie et pathologies (ut&eacute;rine, Tubo-ovarienne, mammaire, des bourses, de la grossesse du 1er, 2&egrave;me et 3&egrave;me Trimestre).</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p><span style=\"background-color: rgb(230, 126, 35);\"><strong>EN COURS</strong></span></p>\r\n</div>\r\n</div>', NULL, '2025-01-05 12:44:34', '2025-01-20 09:46:40', NULL, 3, 13, '[]', 2, NULL, '[]', '24 et 25 Mai 2025'),
(24, 'Endocrinologie pédiatrique', 'formations/January2025/H6lK88MWD20ygVuvYX0s.jpg', '2025-05-30', NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08h00 &ndash; 08h30 : Remise des badges<br>09h00 &ndash; 10h15 : Ateliers de discussion de cas cliniques (2 cas cliniques discut&eacute;s en sous-groupes)<br>Cas n&deg;1 : Pubert&eacute; pr&eacute;coce centrale<br>Cas n&deg;2 : Pubert&eacute; pr&eacute;coce p&eacute;riph&eacute;rique<br>10h00 &ndash; 11h00 : Restitution en pl&eacute;ni&egrave;re, avec discussion g&eacute;n&eacute;rale, des deux cas cliniques pr&eacute;c&eacute;dents<br>11h00 &ndash; 10h30 : Pause caf&eacute;<br>11h30 &ndash; 12h00 : Ateliers de discussion de cas cliniques (2 cas cliniques discut&eacute;s en sous-groupes)<br>Cas n&deg;3 : Pathologie thyro&iuml;dienne cong&eacute;nitale<br>Cas n&deg;4 : Pathologie thyro&iuml;dienne acquise<br>12h00 &ndash; 13h00 : Restitution en pl&eacute;ni&egrave;re, avec discussion g&eacute;n&eacute;rale, des deux cas cliniques pr&eacute;c&eacute;dents<br>13h00 &ndash; 14h00 : Pause d&eacute;jeuner<br>14h00 : Conf&eacute;rence : Pubert&eacute; pr&eacute;coce et traitement</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>JOUR 2</strong><br>09h00 &ndash; 09h30 : Ateliers de discussion de cas cliniques (2 cas cliniques discut&eacute;s en sous-groupes)<br>Cas n&deg;5 : Pathologie de la croissance cong&eacute;nitale<br>Cas n&deg;6 : Pathologie de la croissance acquise<br>09h30 &ndash; 10h30 : Restitution en pl&eacute;ni&egrave;re, avec discussion g&eacute;n&eacute;rale, des deux cas cliniques pr&eacute;c&eacute;dents<br>10h00 &ndash; 10h15: Pause caf&eacute;<br>11h30 : Conf&eacute;rence de cl&ocirc;ture : utilisation raisonn&eacute;e de l&rsquo;hormone de croissance</li>\r\n</ul>', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>A la fin de cette formation les m&eacute;decins participants pourront ma&icirc;triser la prise en charge de : d&eacute;pistage des anomalies de croissance et de la pubert&eacute;, pubert&eacute; pr&eacute;coce et traitement, utilisation raisonn&eacute;e de l&rsquo;hormone de croissance et pathologies thyro&iuml;diennes du nouveau-n&eacute; de l&rsquo;enfant de l&rsquo;adolescent</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '2025-01-05 12:45:22', '2025-01-20 09:49:14', NULL, 7, 19, '[]', 2, NULL, '[]', '30 et 31 Mai 2025'),
(25, 'Échographie obstétricale morphologique', 'formations/January2025/O9a4mU1dJZ8YvZw0vr2e.jpg', '2025-06-14', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>A la fin de cette formation les m&eacute;decins participants pourront ma&icirc;triser l&rsquo;&eacute;chographie et pathologies (ut&eacute;rine, Tubo-ovarienne, mammaire, des bourses, de la grossesse du 1er, 2&egrave;me et 3&egrave;me Trimestre).</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '<p><span style=\"background-color: rgb(230, 126, 35);\"><strong>EN COURS</strong></span></p>', NULL, '2025-01-05 12:46:45', '2025-01-20 10:48:56', NULL, 3, 13, '[]', 2, NULL, '[]', '14 et 15 Juin 2025');
INSERT INTO `formations` (`id`, `title`, `cover`, `date`, `price`, `objective`, `program`, `other_details`, `location_training`, `created_at`, `updated_at`, `deleted_at`, `doctor_id`, `category_id`, `video`, `type`, `brief`, `video_full`, `date_details`) VALUES
(26, 'Échocardiographie de stress', 'formations/January2025/Epzr5juB9Ok64cbsA0yt.png', '2025-06-05', NULL, NULL, NULL, '<ul>\r\n<li><strong>Jour 1</strong><br>17h : Pr&eacute;sentation du programme &ndash; Conf&eacute;rence d&rsquo;introduction (30 minutes):<br>Pourquoi explorer les patients lors d&rsquo;un stress physique ou pharmacologique ?</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Jour 2</strong><br>9h-10h30 :<br><strong>Echocardiographie Dobutamine pour rechercher l&rsquo;isch&eacute;mie / viabilit&eacute;</strong><br>&ndash; Protocole pharmacologique<br>&ndash; R&egrave;gles de s&eacute;curit&eacute;<br>&ndash; Protocole d&rsquo;acquisition des images<br>Pause-caf&eacute;<br>10h45-12h45 :<br><strong>Echocardiographie d&rsquo;effort pour rechercher l&rsquo;isch&eacute;mie / viabilit&eacute;</strong><br>&ndash; Protocole d&rsquo;effort<br>&ndash; R&egrave;gles de s&eacute;curit&eacute;<br>&ndash; Protocole d&rsquo;acquisition des images<br>D&eacute;jeuner&nbsp;<br>14h-16h30:<br><strong>Ateliers de discussions de cas cliniques en petits groupes</strong><br>&ndash; Comment optimiser l&rsquo;imagerie<br>&ndash; Reconnaitre les principales anomalies et les interpr&eacute;ter<br>&ndash; Comment r&eacute;diger un compte rendu et orienter la prise en charge.<br>Pause-caf&eacute;<br>16h45 &ndash; 18h :<br><strong>Autres indications de l&rsquo;&eacute;chocardiographie de stress</strong><br>&ndash; Valvulopathies<br>&ndash; Insuffisance cardiaque</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Jour 3</strong><br>9h-10h30<br>Cas cliniques interactifs</li>\r\n</ul>', NULL, '2025-01-05 12:48:06', '2025-01-20 10:12:05', NULL, 4, 13, '[]', 2, NULL, '[]', '14 et 15 Juin 2025'),
(27, 'Acupuncture scientifique', 'formations/January2025/pyEB5IE6vopO3ArNLj8X.png', '2025-06-28', NULL, NULL, NULL, '<ul>\r\n<li><strong>JOUR1</strong><br>09h00 : Introduction:<br>&ndash; La douleur aigu&euml; et chronique en m&eacute;decine g&eacute;n&eacute;rale<br>&ndash; Acupuncture D&eacute;finition / Comment se d&eacute;roule une s&eacute;ance d&rsquo;acupuncture<br>&ndash; Le principe de l&rsquo;acupuncture<br>&ndash; Les indications et les contre indications de l&rsquo;acupuncture<br>&ndash; Le traitement de diff&eacute;rentes pathologies par acupuncture<br>&ndash; Physiopathologie<br>&ndash; Point de vue de la m&eacute;decine occidentale .<br>&ndash; point de vue de la m&eacute;decine traditionnelle chinoise<br>&ndash; Les m&eacute;ridiens<br>&ndash; Les 12 points miraculeux en Acupuncture<br>&ndash; Les m&eacute;ridiens : Unit&eacute;s de mesures +Les points (tonification et s&eacute;dation points)<br>&ndash; Les points Shu du dos<br>&ndash; Les points Mu<br>&ndash; Les points sources des m&eacute;ridiens Yin<br>&ndash; Les points sources des m&eacute;decins Yang<br>&ndash; Le diagnostic de la douleur en MTC<br>&ndash; Auriculoth&eacute;rapie pour traiter la douleur<br>&ndash; l&rsquo;acupuncture corporelle pour traiter la douleur<br>10h30 : Pause<br>10h45 : Ateliers pratiques :<br>&ndash; Le traitement de diff&eacute;rentes pathologies par acupuncture<br>&ndash; Migraines<br>&ndash; Dysm&eacute;norrh&eacute;e<br>&ndash; N&eacute;vralgie cervico-brachiales<br>&ndash; Sciatalgie et lombalgies<br>13h00: Pause<br>14h00: Atelier pratiques<br>16h30 : Pause-caf&eacute;<br>16h45 : Ateliers pratiques</li>\r\n<li><strong>JOUR2</strong><br>09h00 : Prise en charge de la :<br>-Tendinites de l&rsquo;&eacute;paule<br>-Genoux douloureux<br>-Entorses<br>10h30 : Pause<br>10h45 : Ateliers pratiques</li>\r\n</ul>', NULL, '2025-01-05 12:50:43', '2025-01-20 09:54:24', NULL, 2, 7, '[{\"download_link\":\"formations\\/January2025\\/t0Ab3tBhwGUyLUeu8lW0.mp4\",\"original_name\":\"Acupuncture scientifique.mp4\"}]', 2, NULL, '[]', '28 et 29 Juin 2025'),
(28, 'Échographie musculo-tendineuse', 'formations/January2025/kIIOqPv6iAfzrAwJMhvr.jpg', '2025-07-05', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>A la fin de cette formation les m&eacute;decins participants pourront ma&icirc;triser l&rsquo;Echographie normale et pathologique de l&rsquo;epaule, du coude, du poignet, du genou, de la cheville, de la cuisse et du creux poplit&eacute;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p><span style=\"background-color: rgb(230, 126, 35);\"><strong>EN COURS</strong></span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '2025-01-05 12:51:50', '2025-01-20 09:55:24', NULL, 3, 13, '[{\"download_link\":\"formations\\/January2025\\/scB8fDa6wjRq8K6ruwlb.mp4\",\"original_name\":\"\\u00c9chographie musculo-tendineuse.mp4\"}]', 2, NULL, '[]', '5 et 6 Juillet 2025'),
(29, 'Echo doppler artériel', 'formations/January2025/7chgYtgrZgLxXvW30e6K.jpg', '2025-10-18', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>A la fin de cette formation les m&eacute;decins participants pourront ma&icirc;triser l&rsquo;Artefact en echo doppler, R&eacute;glages doppler, Doppler veineux normal et dans la thrombose veineuse, Doppler veineux dans le bilan des varices, Doppler des art&egrave;res des membres inf&eacute;rieurs et sup&eacute;rieurs, Doppler des troncs supra-aortique, Analyse du spectre Quantification et d&rsquo;une st&eacute;nose et la Strat&eacute;gie de prise en charge d&rsquo;un poly vasculaire.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08:00 &ndash; Remise des badges<br>08:30 &ndash; Artefact en echo doppler.<br>09:00 &ndash; R&eacute;glages doppler.<br>09:30 &ndash; Doppler des tronc supra aortique<br>10:00 &ndash; Quantification de la st&eacute;nose<br>10:30 &ndash; Pause-caf&eacute;<br>10:45 &ndash; Doppler des art&egrave;res des membres inf&eacute;rieurs<br>11:45 &ndash; Doppler des art&egrave;res des membres sup&eacute;rieurs<br>12:30 &ndash; Doppler des art&egrave;res r&eacute;nales<br>13:00 &ndash; D&eacute;jeuner<br>14:00 &ndash; Ateliers pratiques sur patients.<br>16:00 &ndash; Pause-caf&eacute;<br>16:15 &ndash; Ateliers pratiques sur patients.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>JOUR 2</strong><br>08:30 &ndash; Doppler transcr&acirc;nien .<br>09:30 &ndash; Doppler des art&egrave;res digestif.<br>10:30 &ndash; Pause-caf&eacute;<br>10:45 &ndash; Ecoutes des sons des art&egrave;res.<br>11:45 &ndash; Cas Echo cliniques<br>12:30 &ndash; Evaluation<br>13:00 &ndash; Remises des attestation<br>13:30 &ndash; Fin de session</li>\r\n</ul>', NULL, '2025-01-05 12:54:27', '2025-01-20 10:02:55', NULL, 3, 8, '[]', 2, NULL, '[]', '18 et 19 Octobre 2025'),
(30, 'Pathologies thyroïdiennes', 'formations/January2025/4fzqF3GDfTfAz0kWFKFQ.jpg', '2025-10-18', NULL, '<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>A la fin de cette formation les m&eacute;decins participants pourront ma&icirc;triser l&rsquo;Exploration fonctionnelle et auto-immune de la thyro&iuml;de, nodule thyro&iuml;dien, goitre thyro&iuml;dien et l&rsquo;hypothyro&iuml;die</p>\r\n</div>\r\n</div>', NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08h00 &ndash; 09h00 : Inscription et remise des badges<br>09h00 &ndash; 10h15 : Les Thyro&iuml;dites :<br>Physiopathologie<br>Diagnostic<br>Traitement<br>10h15 &ndash; 10h30 : Pause caf&eacute;<br>10h30 &ndash; 13h00 : Maladie de Basedow :<br>Physiopathologie<br>Diagnostic<br>Traitement<br>13h00 &ndash; 14h00 : Pause d&eacute;jeuner<br>14h00 &ndash; 15h15 : Conduite &agrave; tenir devant un nodule thyro&iuml;dien :<br>Derni&egrave;res recommandations<br>15h15 &ndash; 16h30 : Pause caf&eacute;<br>16h30 &ndash; 18h00 : Atelier Pratique<br>Conduite &agrave; tenir devant une hypothyro&iuml;die p&eacute;riph&eacute;rique<br>Examen clinique de la thyro&iuml;de &agrave; la main devant un nodule thyro&iuml;dien</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>JOUR 2</strong><br>09h00 &ndash; 10h00 : Dysthyro&iuml;dies et grossesse<br>10h00 &ndash; 10h15: Pause caf&eacute;<br>10h15 &ndash; 11h30 : hypothyro&iuml;die et hypothyro&iuml;die d&rsquo;origine hypophysaire<br>13:00 : Fin de session.</li>\r\n</ul>', NULL, '2025-01-05 13:00:34', '2025-01-20 10:04:21', NULL, 10, 18, '[]', 2, NULL, '[]', '18 et 19 Octobre 2025'),
(31, 'Diabétologie 2025', 'formations/January2025/FGNHSl2ITcAk1zJlXOOg.png', '2025-10-24', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>A la fin de cette formation les m&eacute;decins participants pourront ma&icirc;triser l&rsquo;epid&eacute;miologie, physiopathologie des diff&eacute;rents diab&egrave;tes, d&eacute;pistage du diab&egrave;te de type 2,&nbsp;&nbsp;traitement du diab&egrave;te de type 2 et la pr&eacute;vention du diab&egrave;te de type 2</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08h00 : Inscription et remise des badges<br>9:00 : D&eacute;finition et &eacute;pid&eacute;miologie des diabetes<br>&ndash; Complication du diab&egrave;te de type 2<br>09h30 &ndash; 10h15 : Ateliers de discussion de cas cliniques (2 cas cliniques discut&eacute;s en sous-groupes)<br>Cas n&deg;1 : le syndrome m&eacute;tabolique<br>Cas n&deg;2 : Prise en charge d&rsquo;un diab&egrave;te de d&eacute;couverte r&eacute;cente<br>10h15 &ndash; 10h30 : Pause caf&eacute;<br>10h30 &ndash; 13h00 : Restitution en pl&eacute;ni&egrave;re, avec discussion g&eacute;n&eacute;rale, des deux cas cliniques pr&eacute;c&eacute;dents<br>13h00 &ndash; 14h00 : Pause d&eacute;jeuner<br>14h00 &ndash; 15h15 : Ateliers de discussion de cas cliniques (2 cas cliniques discut&eacute;s en sous-groupes)<br>Cas n&deg;3 : Prise en charge d&rsquo;un patient diab&eacute;tique pr&eacute;sentant des complications<br>Cas n&deg;4 : Passage &agrave; l&rsquo;insuline d&rsquo;un patient diab&eacute;tique de type 2<br>15h15 &ndash; 16h30 : Pause caf&eacute;<br>15h30 &ndash; 18h00 : Restitution en pl&eacute;ni&egrave;re, avec discussion g&eacute;n&eacute;rale, des deux cas cliniques pr&eacute;c&eacute;dents</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>JOUR 2</strong><br>09h00 &ndash; 10h00 : Ateliers de discussion de cas cliniques (2 cas cliniques discut&eacute;s en sous-groupes)<br>Cas n&deg;5 : Diab&egrave;te chez une personne &acirc;g&eacute;e<br>Cas n&deg;6 : Diab&egrave;te au cours du Ramadan<br>10h00 &ndash; 10h15: Pause caf&eacute;<br>10h15 &ndash; 11h30 : Actualit&eacute; sur les diff&eacute;rant moyens th&eacute;rapeutiques du diab&egrave;te de type 2<br>11h30 &ndash; 13h00 : Strat&eacute;gie th&eacute;rapeutique dans le diab&egrave;te de type 2 : la derni&egrave;re prise de position de la SFD de d&eacute;cembre 2023<br>13:00 : Fin de session.</li>\r\n</ul>', NULL, '2025-01-05 18:03:00', '2025-01-20 10:07:07', NULL, 11, 18, '[{\"download_link\":\"formations\\/January2025\\/6kmTqZ5gJHlVkzCKbt5N.mp4\",\"original_name\":\"Diab\\u00e9tologie 2025.mp4\"}]', 2, NULL, '[]', '24,25 et 26 Octobre 2025'),
(32, 'Urgences au cabinet', 'formations/January2025/yY8xq5eDwmJ7TbyqW0Bh.jpg', '2025-11-01', NULL, '<p>Tout m&eacute;decin, quelle que soit son lieu d&rsquo;exercice ou sa sp&eacute;cialit&eacute;, peut &ecirc;tre confront&eacute; aux urgences.<br>L&rsquo;urgence surprend et il est attendu, tant d&rsquo;un point de vue l&eacute;gal que d&rsquo;un point de vue moral, que tous les m&eacute;decins soient form&eacute;s aux gestes d&rsquo;urgence et sachent r&eacute;agir devant une situation engageant le pronostic vital.<br>Le m&eacute;decin g&eacute;n&eacute;raliste restera le premier maillon de la prise en charge des urgences m&eacute;dicales aussi bien ressenties que vitales, cependant ni sa formation de base ni son apprentissage sur le tas ne lui garantissent les comp&eacute;tences n&eacute;cessaires pour g&eacute;rer ces situations.</p>', NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>09h00 :<br>&ndash; Arr&ecirc;t cardiaque<br>&ndash; Choc anaphylactique<br>&ndash; OAP et urgences hypertensives<br>10h30 &ndash; 11h00 : Pause-caf&eacute;<br>11h00 :<br>&ndash; Ateliers pratique &amp; Cas Cliniques<br>13h00 &ndash; 14h00 : d&eacute;jeuner<br>14h00 :<br>&ndash; Convulsion et coma<br>&ndash; La douleur aigue intense usage de morphiniques<br>&ndash; Les m&eacute;dicaments et la trousse d&rsquo;urgence<br>16h00 &ndash; 16h30 : Pause-caf&eacute;<br>16h30 :<br>&ndash; Ateliers pratique &amp; Cas Cliniques</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>JOUR 2</strong><br>9h00 :<br>&ndash; Oxyg&eacute;nation ventilation<br>&ndash; Massage cardiaque externe et D&eacute;fibrillateur<br>&ndash; ECG op&eacute;rationnel et urgences cardiologiques<br>10h30 &ndash; 11h00 : Pause-caf&eacute;<br>11h00 :<br>&ndash; Ateliers pratique &amp; Cas Cliniques</li>\r\n</ul>', NULL, '2025-01-05 18:04:38', '2025-01-20 10:09:23', NULL, 8, 13, '[]', 2, NULL, '[]', '1 - 2 Novembre 2025'),
(33, 'Dermatologie pédiatrique', 'formations/January2025/XMVPrwCCpXLhOapiU1na.png', '2025-09-02', NULL, NULL, NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>16h30 : Pr&eacute;sentation du programme<br>17h00 : Conf&eacute;rence d&rsquo;introduction :<br>17h30 : Conf&eacute;rence : La barri&egrave;re cutan&eacute;e</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>JOUR 2</strong><br>09h00 &ndash; 10h15 : Ateliers de discussion de cas cliniques (2 cas cliniques discut&eacute;s en sous-groupes)<br>Cas n&deg;1 : Dermatite atopique du nourrisson<br>Cas n&deg;2 : Des l&eacute;sions d&rsquo;ecz&eacute;ma chez l&rsquo;enfant<br>10h00 &ndash; 11h00 : Restitution en pl&eacute;ni&egrave;re, avec discussion g&eacute;n&eacute;rale, des deux cas cliniques pr&eacute;c&eacute;dents<br>11h00 &ndash; 10h30 : Pause caf&eacute;<br>11h30 &ndash; 13h00 : Conf&eacute;rence : corticoth&eacute;rapie locale chez l&rsquo;enfant<br>13h00 &ndash; 14h00 : Pause d&eacute;jeuner<br>14h00 : Ateliers de discussion de cas cliniques (2 cas cliniques discut&eacute;s en sous-groupes)<br>Cas n&deg;3 : une dermatite atopique devenue r&eacute;sistante &agrave; la corticoth&eacute;rapie locale<br>Cas n&deg;4 : Dermatite atopique et maladies infectieuses<br>14h30-16h30 : Restitution en pl&eacute;ni&egrave;re, avec discussion g&eacute;n&eacute;rale, des deux cas cliniques pr&eacute;c&eacute;dents<br>16h30-16h45 : : Pause d&eacute;jeuner<br>11h30 &ndash; 13h00 : Conf&eacute;rence : Traitements syst&eacute;miques de la dermatite atopique de l&rsquo;enfant</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>JOUR 3</strong><br>09h00 &ndash; 09h30 : Ateliers de discussion de cas cliniques (2 cas cliniques discut&eacute;s en sous-groupes)<br>Cas n&deg;5 : &eacute;rythrodermies de l&rsquo;enfant<br>Cas n&deg;6 : La dermatite atopique, c&rsquo;est allergique<br>09h30 &ndash; 10h30 : Restitution en pl&eacute;ni&egrave;re, avec discussion g&eacute;n&eacute;rale, des deux cas cliniques pr&eacute;c&eacute;dents<br>10h00 &ndash; 10h15: Pause caf&eacute;<br>11h30 &ndash; 12h30 : Conf&eacute;rence de cl&ocirc;ture<br>13:00 : Fin de session.</li>\r\n</ul>', NULL, '2025-01-05 18:05:28', '2025-01-20 10:26:57', NULL, 14, 11, '[]', 2, NULL, '[]', 'En cours de validation'),
(34, 'Echographie Abdominale', 'formations/January2025/JRRzn7NF2yc23Q98AlN2.jpg', '2025-02-22', NULL, '<div class=\"vc_row wpb_row vc_row-fluid\">\r\n<div class=\"wpb_column vc_column_container vc_col-sm-12\">\r\n<div class=\"vc_column-inner\">\r\n<div class=\"wpb_wrapper\">\r\n<div class=\"wpb_text_column wpb_content_element \">\r\n<div class=\"wpb_wrapper\">\r\n<p>A la fin de cette formation les m&eacute;decins participants pourront ma&icirc;triser l&rsquo;&eacute;cho-anatomies et pathologie (du foie, des reins, des voix biliaires, de la rate, du pancr&eacute;as, de la vessie, de la prostate, de l&rsquo;ut&eacute;rus, de l&rsquo;appareil digestif et de la thyro&iuml;de).</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, '<ul>\r\n<li><strong>JOUR 1</strong><br>08h00: Remise des badges<br>9h00<br>&ndash; Test pr&eacute;-requis<br>&ndash; R&eacute;glage &eacute;chographique<br>&ndash; Artefacts en &eacute;chographie<br>&ndash; Echographie foie rate pancr&eacute;as et rate normal<br>10h30-10h45: Pause-caf&eacute;<br>&ndash; Pathologie h&eacute;patique<br>&ndash; Pathologie des voies biliaires<br>&ndash; Pathologie pancr&eacute;atique<br>13h-14h: D&eacute;jeuner<br>&ndash; Ateliers pratiques sur patients</li>\r\n<li><strong>JOUR 2</strong><br>9h00<br>&ndash; Echographie r&eacute;nale normale<br>&ndash; Echographie pathologique r&eacute;nale<br>&ndash; Echographie prostatique<br>&ndash; Echographie des urgences abdominales traumatiques et non traumatiques<br>10h30-10h45: Pause-caf&eacute;<br>&ndash; Ateliers pratiques sur patients<br>&ndash; Cas &eacute;cho cliniques et &eacute;valuation<br>Ateliers pratiques sur patients</li>\r\n</ul>', NULL, '2025-01-05 18:40:25', '2025-01-20 09:11:57', NULL, 3, 13, '[{\"download_link\":\"formations\\/January2025\\/CDuH6dL92s4liECllOfo.mp4\",\"original_name\":\"Echographie Abdominale.mp4\"}]', 2, NULL, '[]', '22 et 23 février 2025');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `formation_id`, `comment_id`, `created_at`, `updated_at`) VALUES
(2, 7, 1, 5, '2024-12-25 20:31:21', '2024-12-25 20:31:21'),
(3, 7, 1, 4, '2024-12-25 20:31:23', '2024-12-25 20:31:23'),
(4, 7, 1, 7, '2024-12-25 20:31:25', '2024-12-25 20:31:25'),
(8, 7, 1, 1, '2024-12-25 20:34:17', '2024-12-25 20:34:17'),
(9, 7, 1, 3, '2024-12-25 20:34:19', '2024-12-25 20:34:19'),
(11, 7, 1, 6, '2024-12-25 20:36:01', '2024-12-25 20:36:01'),
(12, 8, 1, 6, '2024-12-25 20:36:32', '2024-12-25 20:36:32'),
(13, 8, 1, 7, '2024-12-25 20:36:34', '2024-12-25 20:36:34'),
(16, 1, 1, 6, '2024-12-25 20:46:26', '2024-12-25 20:46:26'),
(17, 1, 1, 7, '2024-12-25 20:46:35', '2024-12-25 20:46:35'),
(26, 1, 1, 8, '2024-12-25 21:12:37', '2024-12-25 21:12:37'),
(29, 1, 1, 10, '2024-12-25 21:15:13', '2024-12-25 21:15:13');

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
(1, 1, 'Tableau de bord', '', '_self', 'dashboard', '#000000', NULL, 1, '2024-11-21 18:54:12', '2024-12-20 13:50:25', 'voyager.dashboard', 'null'),
(2, 1, 'Médias', '', '_self', 'device-tv-old', '#000000', 5, 2, '2024-11-21 18:54:12', '2025-01-20 11:58:24', 'voyager.media.index', 'null'),
(3, 1, 'Utilisateurs', '', '_self', 'user-check', '#000000', NULL, 9, '2024-11-21 18:54:12', '2025-01-24 05:23:44', 'voyager.users.index', 'null'),
(4, 1, 'Rôles', '', '_self', 'user', '#000000', 5, 3, '2024-11-21 18:54:12', '2025-01-20 11:58:29', 'voyager.roles.index', 'null'),
(5, 1, 'Outils', '', '_self', 'tools', '#000000', NULL, 11, '2024-11-21 18:54:12', '2025-01-24 05:23:44', NULL, ''),
(6, 1, 'Générateur de menus', '', '_self', 'voyager-list', '#000000', 5, 1, '2024-11-21 18:54:12', '2024-12-15 20:08:21', 'voyager.menus.index', 'null'),
(10, 1, 'Paramètres', '', '_self', 'adjustments', '#000000', NULL, 10, '2024-11-21 18:54:12', '2025-01-24 05:23:44', 'voyager.settings.index', 'null'),
(11, 1, 'Médecins', '', '_self', 'user-heart', '#000000', NULL, 4, '2024-11-22 12:41:57', '2025-01-20 11:58:00', 'voyager.doctors.index', 'null'),
(12, 1, 'Formations', '', '_self', 'certificate', '#000000', 18, 2, '2024-11-22 13:07:33', '2024-12-14 17:23:20', 'voyager.formations.index', 'null'),
(13, 1, 'Inscriptions', '', '_self', 'currency-dollar', '#000000', NULL, 5, '2024-11-22 14:33:19', '2025-01-20 11:58:05', 'voyager.inscriptions.index', 'null'),
(17, 1, 'Spécialités', '', '_self', 'category-2', '#000000', 18, 1, '2024-12-14 15:57:07', '2025-01-14 15:10:03', 'voyager.categories.index', 'null'),
(18, 1, 'Les formations', '#', '_self', 'certificate', '#000000', NULL, 3, '2024-12-14 17:22:57', '2025-01-20 11:57:50', NULL, ''),
(19, 1, 'Packs', '', '_self', NULL, '#000000', 18, 3, '2024-12-14 17:33:37', '2024-12-14 17:42:49', 'voyager.packs.index', 'null'),
(20, 1, 'Faqs', '', '_self', 'help-hexagon', '#000000', NULL, 7, '2024-12-15 01:29:48', '2025-01-24 05:23:44', 'voyager.faqs.index', 'null'),
(22, 1, 'Extraits', '', '_self', 'circle-dashed-check', '#000000', 18, 5, '2024-12-15 04:46:19', '2024-12-25 16:59:47', 'voyager.extraits.index', 'null'),
(23, 1, 'Page d\'accueil', '', '_blank', 'home', '#000000', NULL, 2, '2024-12-15 20:11:49', '2024-12-15 20:11:59', 'frontend.index', NULL),
(24, 1, 'Resources', '', '_self', 'archive', '#000000', 18, 4, '2024-12-24 18:49:06', '2024-12-24 18:52:28', 'voyager.resources.index', 'null'),
(25, 1, 'Comments', '', '_self', NULL, NULL, 18, 6, '2024-12-25 15:36:59', '2024-12-25 16:59:47', 'voyager.comments.index', NULL),
(27, 1, 'Messages', '', '_self', 'inbox', '#000000', NULL, 8, '2025-01-14 22:42:33', '2025-01-24 05:23:44', 'voyager.messages.index', 'null'),
(29, 1, 'Demandes de factures', '', '_self', 'file-dollar', '#000000', NULL, 6, '2025-01-24 12:15:23', '2025-01-24 16:23:18', 'voyager.request-invoice.index', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `last_name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Prenom', 'Nom', 'email@gmail.com', '0600000000', 'Subject', 'Message ici', '2025-01-15 12:16:01', '2025-01-15 12:16:01', NULL),
(2, 'Prenom', 'Nom', 'email@gmail.com', '0600000000', 'Subject', 'Message ici', '2025-01-15 12:16:16', '2025-01-15 12:16:16', NULL);

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
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2025_01_15_194613_create_notifications_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('007e4e2a-d004-4081-a9e1-6a1812b35367', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 10, '{\"user_id\":14,\"user_name\":\"Client 5\",\"order_id\":36,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', NULL, '2025-01-21 02:20:16', '2025-01-21 02:20:16'),
('19bf41fe-bf02-4474-b259-86db09180d6a', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 12, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":28,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\",\"has_pdf\":true}', NULL, '2025-01-21 01:08:54', '2025-01-21 01:08:54'),
('1d98d25c-3d6f-4620-9bb1-c4db6808c5f9', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 1, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":23,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', NULL, '2025-01-20 02:12:07', '2025-01-20 02:12:07'),
('41efe966-9479-437b-8c76-e767c75dd25b', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 12, '{\"user_id\":13,\"user_name\":\"User 2\",\"order_id\":29,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\",\"has_pdf\":true}', NULL, '2025-01-21 01:15:35', '2025-01-21 01:15:35'),
('4d6b044c-ac94-4842-a1d9-ca2f9b3ad638', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 11, '{\"user_id\":13,\"user_name\":\"User 2\",\"order_id\":29,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\",\"has_pdf\":true}', NULL, '2025-01-21 01:15:35', '2025-01-21 01:15:35'),
('4e6afd81-0b92-4f8a-be5c-530f295229c7', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 10, '{\"user_id\":13,\"user_name\":\"User 2\",\"order_id\":29,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\",\"has_pdf\":true}', NULL, '2025-01-21 01:15:34', '2025-01-21 01:15:34'),
('634bcea5-e1d8-4bec-8937-4ce185338752', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 10, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":22,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', NULL, '2025-01-15 19:53:03', '2025-01-15 19:53:03'),
('6b912d43-1a1b-4df0-b09a-a5ff33ebeab7', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 1, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":23,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', NULL, '2025-01-20 02:12:06', '2025-01-20 02:12:06'),
('744ac1b4-8a12-44d3-9312-778f4912065a', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 11, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":22,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', NULL, '2025-01-15 19:53:04', '2025-01-15 19:53:04'),
('81e68c09-f0f0-472d-a1ed-39b33de72681', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 12, '{\"user_id\":14,\"user_name\":\"Client 5\",\"order_id\":36,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', NULL, '2025-01-21 02:20:17', '2025-01-21 02:20:17'),
('85e97116-8eeb-4b53-b7ef-37adb8b7063e', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 1, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":28,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\",\"has_pdf\":true}', NULL, '2025-01-21 01:08:53', '2025-01-21 01:08:53'),
('89c352c7-0efb-4767-aeef-a68234e59f01', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 1, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":22,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', NULL, '2025-01-15 19:53:03', '2025-01-15 19:53:03'),
('a2124ccb-d9fd-47d1-99cd-d1ff45f39162', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 1, '{\"user_id\":13,\"user_name\":\"User 2\",\"order_id\":29,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\",\"has_pdf\":true}', NULL, '2025-01-21 01:15:34', '2025-01-21 01:15:34'),
('a9a8611c-0bbf-4867-a87f-a0a555eff31b', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 11, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":23,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', NULL, '2025-01-20 02:12:07', '2025-01-20 02:12:07'),
('ad9c77c7-934c-48f9-8a60-6c077c4ff25a', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 11, '{\"user_id\":14,\"user_name\":\"Client 5\",\"order_id\":36,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', NULL, '2025-01-21 02:20:16', '2025-01-21 02:20:16'),
('ae872b4c-33c7-437e-8359-8155c98b271f', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 10, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":28,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\",\"has_pdf\":true}', NULL, '2025-01-21 01:08:54', '2025-01-21 01:08:54'),
('c4d8ae59-53a7-4506-a99e-2bc8ac7d7bed', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 10, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":23,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', NULL, '2025-01-20 02:12:07', '2025-01-20 02:12:07'),
('d89ac13f-fc7e-49f4-abf2-696e3e5acc49', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 1, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":28,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\",\"has_pdf\":true}', NULL, '2025-01-21 01:08:53', '2025-01-21 01:08:53'),
('d908477d-37cc-4d84-9af4-e57ffd3391a1', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 1, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":22,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', '2025-01-15 20:04:59', '2025-01-15 19:53:03', '2025-01-15 20:04:59'),
('df5799b1-62e0-4e86-bf32-794af823a139', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 1, '{\"user_id\":14,\"user_name\":\"Client 5\",\"order_id\":36,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\"}', NULL, '2025-01-21 02:20:15', '2025-01-21 02:20:15'),
('e1b5f72c-4228-4405-91f0-ff421e3d1873', 'App\\Notifications\\WaitingConfirmation', 'App\\Models\\User', 11, '{\"user_id\":1,\"user_name\":\"Admin\",\"order_id\":28,\"message\":\"Nouvelle commande en attente de validation de paiement.\",\"link\":\"https:\\/\\/snow-fox-155214.hostingersite.com\\/admin\\/inscriptions\",\"has_pdf\":true}', NULL, '2025-01-21 01:08:54', '2025-01-21 01:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  `pack_id` int(11) DEFAULT NULL,
  `price` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `confirmed_by` int(11) DEFAULT NULL,
  `method_payment` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `proof` varchar(250) DEFAULT NULL,
  `labo_name` varchar(100) DEFAULT NULL,
  `access_invoice` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `user_id`, `formation_id`, `pack_id`, `price`, `status`, `confirmed_by`, `method_payment`, `deleted_at`, `proof`, `labo_name`, `access_invoice`) VALUES
(16, '2024-12-29 12:23:17', '2025-01-05 08:15:21', 9, 1, NULL, '6160', 1, NULL, 3, NULL, '[{\"download_link\":\"inscriptions\\/January2025\\/dzDTppA413s4TRutnjcT.png\",\"original_name\":\"Cheque.png\"}]', NULL, 0),
(17, '2025-01-05 18:04:35', '2025-01-14 10:41:12', 8, 6, NULL, '6160', 1, NULL, 2, '2025-01-14 10:41:12', 'proofs/b4LFYqNceL4dyFWUM5ZIa5OGA626o0o2wwoFYbAY.png', NULL, 0),
(18, '2025-01-05 18:11:13', '2025-01-14 16:55:08', 1, 6, NULL, '7000', 4, 1, 3, NULL, 'proofs/rpHT1A2AlJdkg3PDPhxIAqyK7Wb0ZhUXwAvQbbIP.png', NULL, 0),
(20, '2025-01-05 18:11:13', '2025-01-24 18:49:53', 1, 6, NULL, '7000', 3, 11, 3, NULL, 'proofs/rpHT1A2AlJdkg3PDPhxIAqyK7Wb0ZhUXwAvQbbIP.png', NULL, 0),
(22, '2025-01-15 19:51:22', '2025-01-15 19:53:01', 1, 6, NULL, '6500', 1, NULL, 1, NULL, 'proofs/wDWgPfNmMusoTOyyJujQVcsIKpJR2urgZnJqxNmO.png', NULL, 0),
(23, '2025-01-20 02:10:57', '2025-01-20 02:12:04', 1, 34, NULL, NULL, 1, NULL, 1, NULL, 'proofs/fhkJdGtKAD89rRybJmol8knGJKSU35X73D2M8Pto.png', NULL, 0),
(24, '2025-01-20 10:32:34', '2025-01-20 10:32:34', 12, 6, NULL, '7000', 1, NULL, 1, NULL, NULL, NULL, 0),
(25, '2025-01-20 17:03:02', '2025-01-20 17:03:02', 1, 7, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, 0),
(26, '2025-01-20 17:03:08', '2025-01-20 17:03:08', 1, 7, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, 0),
(27, '2025-01-21 00:46:13', '2025-01-21 01:07:14', 1, 6, NULL, '6500', 1, NULL, 4, NULL, 'proofs/KBhuOzLgSu2C1qoCTc6m9GfXW7mwRz96gsBpeBOr.png', 'laboratoire', 0),
(28, '2025-01-21 01:08:47', '2025-01-21 01:08:51', 1, 6, NULL, '6160', 1, NULL, 1, NULL, 'proofs/cVHnupaL69sQgcVA6GkcvTXnsgdT7a9em3rBKbGV.png', NULL, 0),
(29, '2025-01-21 01:14:40', '2025-01-21 01:15:32', 13, 6, NULL, '6160', 1, NULL, 3, NULL, 'proofs/AclxG5t6gHBtydX7LsrizppBVqlxIP2TXqGHY5vB.png', NULL, 0),
(30, '2025-01-21 01:50:23', '2025-01-21 01:50:23', 14, 6, NULL, '6160', 1, NULL, 1, NULL, NULL, NULL, 0),
(31, '2025-01-21 01:53:12', '2025-01-21 01:53:12', 14, 6, NULL, '6160', 1, NULL, 1, NULL, NULL, NULL, 0),
(32, '2025-01-21 01:54:50', '2025-01-21 01:54:50', 14, 6, NULL, '6500', 1, NULL, 2, NULL, NULL, NULL, 0),
(33, '2025-01-21 01:56:38', '2025-01-21 01:56:38', 14, 6, NULL, '6500', 1, NULL, 2, NULL, NULL, NULL, 0),
(34, '2025-01-21 01:56:53', '2025-01-21 01:56:53', 14, 6, NULL, '6500', 1, NULL, 2, NULL, NULL, NULL, 0),
(35, '2025-01-21 01:58:56', '2025-01-21 01:58:56', 14, 6, NULL, '6500', 1, NULL, 2, NULL, NULL, NULL, 0),
(36, '2025-01-21 02:18:18', '2025-01-21 02:20:13', 14, 6, NULL, '6160', 1, NULL, 1, NULL, 'proofs/3jwiDLqdfHXIP1Nu62Tu6yJkGKg8z9sA9OVU4Doo.png', NULL, 0);

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
(1, 'Pack inscription', '6160', 1, 6, '2024-12-14 17:35:11', '2025-01-05 18:03:55', NULL),
(2, 'Pack inscription + Hébérgement 2 nuits en chambre single', '7000', 1, 6, '2024-12-14 17:36:01', '2025-01-05 18:03:49', NULL),
(3, 'Pack inscription + Hébérgement 2 nuits en chambre double', '6500', 1, 6, '2024-12-14 17:40:01', '2025-01-05 18:03:43', NULL);

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
(75, 'delete_extraits', 'extraits', '2024-12-15 04:46:18', '2024-12-15 04:46:18'),
(76, 'browse_resources', 'resources', '2024-12-24 18:49:06', '2024-12-24 18:49:06'),
(77, 'read_resources', 'resources', '2024-12-24 18:49:06', '2024-12-24 18:49:06'),
(78, 'edit_resources', 'resources', '2024-12-24 18:49:06', '2024-12-24 18:49:06'),
(79, 'add_resources', 'resources', '2024-12-24 18:49:06', '2024-12-24 18:49:06'),
(80, 'delete_resources', 'resources', '2024-12-24 18:49:06', '2024-12-24 18:49:06'),
(81, 'browse_comments', 'comments', '2024-12-25 15:36:59', '2024-12-25 15:36:59'),
(82, 'read_comments', 'comments', '2024-12-25 15:36:59', '2024-12-25 15:36:59'),
(83, 'edit_comments', 'comments', '2024-12-25 15:36:59', '2024-12-25 15:36:59'),
(84, 'add_comments', 'comments', '2024-12-25 15:36:59', '2024-12-25 15:36:59'),
(85, 'delete_comments', 'comments', '2024-12-25 15:36:59', '2024-12-25 15:36:59'),
(86, 'browse_likes', 'likes', '2024-12-25 16:48:02', '2024-12-25 16:48:02'),
(87, 'read_likes', 'likes', '2024-12-25 16:48:02', '2024-12-25 16:48:02'),
(88, 'edit_likes', 'likes', '2024-12-25 16:48:02', '2024-12-25 16:48:02'),
(89, 'add_likes', 'likes', '2024-12-25 16:48:02', '2024-12-25 16:48:02'),
(90, 'delete_likes', 'likes', '2024-12-25 16:48:02', '2024-12-25 16:48:02'),
(91, 'browse_messages', 'messages', '2025-01-14 22:42:33', '2025-01-14 22:42:33'),
(92, 'read_messages', 'messages', '2025-01-14 22:42:33', '2025-01-14 22:42:33'),
(93, 'edit_messages', 'messages', '2025-01-14 22:42:33', '2025-01-14 22:42:33'),
(94, 'add_messages', 'messages', '2025-01-14 22:42:33', '2025-01-14 22:42:33'),
(95, 'delete_messages', 'messages', '2025-01-14 22:42:33', '2025-01-14 22:42:33'),
(101, 'browse_request_invoice', 'request_invoice', '2025-01-24 12:15:23', '2025-01-24 12:15:23'),
(102, 'read_request_invoice', 'request_invoice', '2025-01-24 12:15:23', '2025-01-24 12:15:23'),
(103, 'edit_request_invoice', 'request_invoice', '2025-01-24 12:15:23', '2025-01-24 12:15:23'),
(104, 'add_request_invoice', 'request_invoice', '2025-01-24 12:15:23', '2025-01-24 12:15:23'),
(105, 'delete_request_invoice', 'request_invoice', '2025-01-24 12:15:23', '2025-01-24 12:15:23');

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
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(5, 3),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(9, 3),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(15, 3),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 3),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(40, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(57, 1),
(57, 3),
(58, 1),
(58, 3),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(61, 1),
(61, 3),
(62, 1),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 1),
(65, 3),
(71, 1),
(71, 3),
(72, 1),
(72, 3),
(73, 1),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 3),
(76, 1),
(76, 3),
(77, 1),
(77, 3),
(78, 1),
(78, 3),
(79, 1),
(79, 3),
(80, 1),
(80, 3),
(81, 1),
(81, 3),
(82, 1),
(82, 3),
(83, 1),
(83, 3),
(84, 1),
(84, 3),
(85, 1),
(85, 3),
(86, 1),
(86, 3),
(87, 1),
(87, 3),
(88, 1),
(88, 3),
(89, 1),
(89, 3),
(90, 1),
(90, 3),
(91, 1),
(91, 3),
(92, 1),
(92, 3),
(93, 3),
(94, 3),
(95, 1),
(95, 3),
(101, 1),
(101, 3),
(102, 1),
(102, 3),
(103, 1),
(103, 3),
(104, 1),
(105, 1);

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
-- Table structure for table `request_invoice`
--

CREATE TABLE `request_invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `tva_price` varchar(50) DEFAULT NULL,
  `method_payment` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `confirmed_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(250) DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  `file_name` varchar(250) DEFAULT NULL,
  `file_type` varchar(250) DEFAULT NULL,
  `file_size` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `file_path`, `formation_id`, `file_name`, `file_type`, `file_size`, `created_at`, `updated_at`) VALUES
(1, '[{\"download_link\":\"resources\\/December2024\\/Dd49dG85LgGOZ26CfWzO.png\",\"original_name\":\"Screenshot from 2024-12-23 21.25.40.png\"}]', 1, 'First file', NULL, NULL, '2024-12-24 18:54:56', '2024-12-24 18:54:56'),
(2, '[{\"download_link\":\"resources\\/December2024\\/WeorWVptc0Q2XYIWTqOY.png\",\"original_name\":\"Screenshot from 2024-12-23 21.12.17.png\"}]', 1, 'Second file', NULL, NULL, '2024-12-24 18:55:16', '2024-12-24 18:55:16'),
(3, '[{\"download_link\":\"resources\\/December2024\\/9IweWJr3v4EJhYCfHF4V.mp4\",\"original_name\":\"High.Potential.S01E02.720p.WEB.mp4\"}]', 1, 'Video file', NULL, NULL, '2024-12-24 19:07:17', '2024-12-24 19:07:17'),
(4, '[{\"download_link\":\"resources\\/December2024\\/PlDoOJADTuhwl1GKkREq.pdf\",\"original_name\":\"Site Title-12-24-2024_06_59_PM.pdf\"}]', 1, 'Pdf file', NULL, NULL, '2024-12-24 19:57:59', '2024-12-24 19:57:59'),
(5, '[{\"download_link\":\"resources\\/December2024\\/DuxEqBgQdQ8Y065caFac.docx\",\"original_name\":\"Site Title-12-24-2024_06_59_PM.docx\"}]', 1, 'Word file', NULL, NULL, '2024-12-24 19:58:14', '2024-12-24 19:58:14');

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
(2, 'Client', 'Client', '2024-11-21 18:54:12', '2025-01-13 21:38:00'),
(3, 'Confirmation', 'Confirmation', '2025-01-13 21:39:18', '2025-01-13 21:39:18');

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
(1, 'site.title', 'Site Title', 'Science Events', '', 'text', 2, 'Site'),
(2, 'site.description', 'Site Description', 'Formation en echographie, echographie generale, echographie abdominale, echographie gynecho-obstetricale et mamaire, echo doppler, diabetologie, ech et l\'hta', '', 'text', 3, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings/November2024/K5zzpjzofLJzbKEW4C4T.png', '', 'image', 1, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'ScienceEvent', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to ScienceEvent', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'virement.compte-name', 'Titulaire du compte', 'SCIENCE EVENTS', NULL, 'text', 6, 'Virement'),
(12, 'virement.iban', 'IBAN', 'MA64 007 450 0015208000000049 97', NULL, 'text', 9, 'Virement'),
(13, 'virement.swift', 'swift', 'BCMAMAMC', NULL, 'text', 35, 'Virement'),
(14, 'virement.rib', 'RIB N°', '007 450 0015208000000049 97', NULL, 'text', 8, 'Virement'),
(15, 'reseaux-sociaux.facebook', 'Facebook', 'https://web.facebook.com/ScienceEvents.ma?_rdc=1&_rdr', NULL, 'text', 10, 'Reseaux sociaux'),
(16, 'reseaux-sociaux.twitter', 'X ( Twitter )', 'https://x.com', NULL, 'text', 11, 'Reseaux sociaux'),
(17, 'reseaux-sociaux.linkedin', 'Linkedin', 'https://linkedin.com', NULL, 'text', 12, 'Reseaux sociaux'),
(18, 'reseaux-sociaux.youtube', 'Youtube', 'https://youtube.com', NULL, 'text', 13, 'Reseaux sociaux'),
(19, 'site.adresse', 'Adresse', 'Koutoubia Center 2 – Avenue Hassan II – Guéliz – Marrakech', NULL, 'text', 14, 'Site'),
(20, 'site.phone', 'Numéro de téléphone', '+212 700 443 555', NULL, 'text', 15, 'Site'),
(21, 'site.email', 'Adresse email', 'contact@science-events.ma', NULL, 'text', 16, 'Site'),
(22, 'accueil-hero.headline', 'Titre', 'La formation e-learning que les soignants méritent', NULL, 'text', 17, 'Accueil Hero'),
(23, 'accueil-hero.description', 'Description', 'Améliorez la prise en charge de vos patients à l’hôpital ou en libéral grâce à nos formations agréées DPC, conçues par les meilleurs experts européens.', NULL, 'text', 18, 'Accueil Hero'),
(24, 'accueil-hero.catalogue-file', 'Catalogue ( pdf )', '[{\"download_link\":\"settings\\/January2025\\/1UGI3et3y7AJ0RV3HcQE.pdf\",\"original_name\":\"Science-Events-01-11-2025_07_12_PM.pdf\"}]', NULL, 'file', 19, 'Accueil Hero'),
(25, 'accueil-hero.video-left', 'Vidéo sur le côté gauche', '[{\"download_link\":\"settings\\/January2025\\/tBLRRkkd66Xrb4u4wgUK.webm\",\"original_name\":\"video1.webm\"}]', NULL, 'file', 20, 'Accueil Hero'),
(26, 'accueil-hero.video-middle', 'Vidéo au milieu', '[{\"download_link\":\"settings\\/January2025\\/luXMis3kPZY1zBH8LJtU.webm\",\"original_name\":\"science event video2 milieu.webm\"}]', NULL, 'file', 21, 'Accueil Hero'),
(27, 'accueil-hero.video-right', 'Vidéo sur le côté droit', '[{\"download_link\":\"settings\\/January2025\\/wsMrTnnnYhaSjFH6yiRP.webm\",\"original_name\":\"science event video3 droit.webm\"}]', NULL, 'file', 22, 'Accueil Hero'),
(32, 'accueil-hero.first-popup-title', 'Titre du premier autocollant', 'Forum', NULL, 'text', 27, 'Accueil Hero'),
(33, 'accueil-hero.second-popup-title', 'Titre du deuxième autocollant', 'Video', NULL, 'text', 30, 'Accueil Hero'),
(34, 'accueil-hero.third-popup-title', 'Troisième titre d\'autocollant', 'Nouvelle réponse d’un expert', NULL, 'text', 31, 'Accueil Hero'),
(35, 'accueil-hero.first-popup-text', 'Texte du premier autocollant', 'Support des experts', NULL, 'text', 28, 'Accueil Hero'),
(36, 'accueil-hero.second-popup-text', 'Texte du deuxième autocollant', 'Ressource', NULL, 'text', 33, 'Accueil Hero'),
(37, 'accueil-hero.third-popup-text', 'Texte du troisième autocollant', 'Nouvelle réponse d’un expert', NULL, 'text', 34, 'Accueil Hero'),
(38, 'accueil-hero.first-popup-icon', 'Première icône d\'autocollant', 'settings/January2025/sR8JuA2ZHEjAli98dXpJ.png', NULL, 'image', 26, 'Accueil Hero'),
(39, 'accueil-hero.second-popup-icon', 'Deuxième icône d\'autocollant', 'settings/January2025/dAj7h0e9ZcHcou1euY7n.png', NULL, 'image', 29, 'Accueil Hero'),
(40, 'accueil-hero.third-popup-icon', 'Troisième icône d\'autocollant', 'settings/January2025/OXWxee784vujTBxCsDSY.png', NULL, 'image', 32, 'Accueil Hero'),
(41, 'virement.bank-name', 'Nom de la banque', 'ATTIJARI BANK', NULL, 'text', 7, 'Virement'),
(42, 'virement.cheque-for', 'chèque au profit de', 'Science Events', NULL, 'text', 36, 'Virement'),
(43, 'virement.espece-address', 'Espéce Adresse', 'Koutoubia Center 2, Av. Hassane 2, Guéliz - Marrakech', NULL, 'text', 37, 'Virement'),
(44, 'a-propos-de-nous.title', 'Titre', 'Empouvoir la prochaine génération de professionnels de la santé', NULL, 'text', 38, 'A Propos de nous'),
(46, 'a-propos-de-nous.video', 'Video', '[{\"download_link\":\"settings\\/January2025\\/zQGFDqbQZTS1ER5WFyNo.mp4\",\"original_name\":\"View_From_A_Blue_Moon_Trailer-576p (1).mp4\"}]', NULL, 'file', 41, 'A Propos de nous'),
(47, 'a-propos-de-nous.description', 'Description', 'Notre mission est d’accompagner les étudiants en médecine en leur offrant un soutien personnalisé par des experts. Grâce à notre plateforme, nous leur offrons des opportunités d’apprentissage innovantes pour les aider à exceller et à devenir les leaders de demain dans le domaine de la santé.', NULL, 'text_area', 40, 'A Propos de nous'),
(48, 'a-propos-de-nous.show-doctors', 'Afficher la section médecins ?', '1', '{\r\n    \"on\" : \"Oui\",\r\n    \"off\" : \"No\",\r\n    \"checked\" : true\r\n}', 'checkbox', 42, 'A Propos de nous'),
(49, 'a-propos-de-nous.show-faq', 'Afficher la section FAQ ?', '1', '{\r\n    \"on\" : \"Oui\",\r\n    \"off\" : \"No\",\r\n    \"checked\" : true\r\n}', 'checkbox', 43, 'A Propos de nous'),
(50, 'contact-us.image', 'Image', 'settings/January2025/qJEFWvEm35FD2mamHNsw.jpg', NULL, 'image', 44, 'Contact us'),
(51, 'contact-us.title', 'Titre', 'Vous avez des questions !', NULL, 'text', 45, 'Contact us'),
(52, 'contact-us.show-doctors', 'Afficher la section médecins ?', '1', '{\r\n    \"on\" : \"Oui\",\r\n    \"off\" : \"No\",\r\n    \"checked\" : true\r\n}', 'checkbox', 46, 'Contact us'),
(53, 'contact-us.show-faq', 'Afficher la section FAQ ?', '1', '{\n    \"on\" : \"Oui\",\n    \"off\" : \"No\",\n    \"checked\" : true\n}', 'checkbox', 47, 'Contact us'),
(54, 'aide.page-content', 'Contenu de la page', '<p><strong>Test</strong></p>\r\n<p><strong>test</strong></p>\r\n<p>test</p>', NULL, 'rich_text_box', 48, 'Aide'),
(55, 'aide.show-doctors', 'Afficher la section médecins ?', '0', '{\r\n    \"on\" : \"Oui\",\r\n    \"off\" : \"No\",\r\n    \"checked\" : true\r\n}', 'checkbox', 49, 'Aide'),
(56, 'aide.show-faq', 'Afficher la section FAQ ?', '0', '{\r\n    \"on\" : \"Oui\",\r\n    \"off\" : \"No\",\r\n    \"checked\" : true\r\n}', 'checkbox', 50, 'Aide');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `color`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', 'users/default.png', NULL, '$2y$10$MvY8O.B0upLlNGEgOp7ukez1KT/7eTMv4b0fL/mgOvaiyahWx00HK', NULL, '{\"locale\":\"fr\"}', '2024-11-21 19:04:13', '2025-01-20 11:38:57', '#000000'),
(2, 2, 'med', 'med@gmail.com', 'users/default.png', NULL, '$2y$10$1/gIBc9NwVNxpkpdJD.nbuhTpzyMFSf1mqXXKB41mrdvPhUwPpTeq', NULL, NULL, '2024-12-19 19:20:59', '2024-12-19 19:20:59', NULL),
(3, 2, 'Med', 'med2@gmail.com', 'users/default.png', NULL, '$2y$10$lDb.PhSP6C5fUBnyX9saT.aRYIjpmL.bHCtvzhAbDEe10PCcci/hC', NULL, NULL, '2024-12-19 20:18:34', '2024-12-19 20:18:34', NULL),
(4, 2, 'Med', 'med3@gmail.com', 'users/default.png', NULL, '$2y$10$beO1dLVjmsku9ZBR9rYegOBeLcfQLXXJf08jCabjC8if7u8VhZdBy', NULL, NULL, '2024-12-19 20:40:40', '2024-12-19 20:40:40', NULL),
(5, 2, 'des', 'example@gmail.com', 'users/default.png', NULL, '$2y$10$dmU.V2vMv8puAZaoiXoxI.cocEia26owsh9oF1cGZpAhRL3KOwTSq', NULL, NULL, '2024-12-19 20:48:21', '2024-12-19 20:48:21', NULL),
(6, 2, 'Med 4', 'med4@gmail.com', 'users/default.png', NULL, '$2y$10$V52UPm7qtvOizPBHudzlVeUqzVU0JOL1Aoo4bOYJB7HAzA7H.XRHu', NULL, NULL, '2024-12-19 20:49:32', '2024-12-19 20:49:32', NULL),
(7, 2, 'User', 'user@gmail.com', 'users/default.png', NULL, '$2y$10$nrKSzUptNWhOYsyRCkN3iuqW23dEe2t7/GDQ90USlyLXz.a9QjlsC', NULL, '{\"locale\":\"fr\"}', '2024-12-20 09:38:03', '2025-01-06 10:16:54', NULL),
(8, 2, 'User 2', 'user2@gmail.com', 'users/default.png', NULL, '$2y$10$WGaw8ZuM2ubXUIHUMfApweJxLCm2grBsvH2aT//ToRk2ytQHt7aEu', NULL, '{\"locale\":\"fr\"}', '2024-12-20 09:41:36', '2024-12-25 20:36:08', NULL),
(9, 2, 'Yassine Touhtane', 'test@test.tt', 'users/default.png', NULL, '$2y$10$jmQw8DBMlgt7EXmY8DeWuu7/81ccAqtlTqsau/mQZ.ss4tYDXqHRe', NULL, NULL, '2024-12-29 12:22:24', '2024-12-29 12:22:24', NULL),
(10, 3, 'Kawtar', 'kawtar@gmail.com', 'users/default.png', NULL, '$2y$10$G54MDkMqf/WaUCxyHSo2MuFBLHOI.PB/PScjWTnTUHyyuVXjOOBiy', NULL, '{\"locale\":\"fr\"}', '2025-01-14 09:21:44', '2025-01-14 10:01:58', '#fdc9ef'),
(11, 3, 'Fatima', 'fatima@gmail.com', 'users/default.png', NULL, '$2y$10$sBDtGAcH3D2F1erwDpkrSeI/7h3b9xkjHlQoFMQnWRhC6M/UzpieG', NULL, '{\"locale\":\"fr\"}', '2025-01-14 15:03:05', '2025-01-14 15:03:05', '#7aa7ff'),
(12, 3, 'yassine', 'touyassine@gmail.fr', 'users/default.png', NULL, '$2y$10$HXASbhqeRHtFTMsy6DNq.usRRbMCmysKp7xlr.qSmi8WsIxJZDZcG', NULL, '{\"locale\":\"fr\"}', '2025-01-20 10:31:39', '2025-01-20 12:01:43', NULL),
(13, NULL, 'User 2', 'email2@gmail.fr', 'users/default.png', NULL, '$2y$10$FX1oW6P/fVYeRszkdV9tIuY8L/XPbcHDEQI6OGejzhC8.hJQnUUMa', NULL, NULL, '2025-01-21 01:14:21', '2025-01-21 01:14:21', NULL),
(14, NULL, 'Client 5', 'client5@gmail.fr', 'users/default.png', NULL, '$2y$10$fZx9JVPVUV460Mp7iwypBukA6aNQgvmRrsyNa6VeNrMyF7AcXu2gO', NULL, NULL, '2025-01-21 01:50:16', '2025-01-21 01:50:16', NULL);

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
-- Indexes for table `chat`
--
ALTER TABLE `chat`
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
-- Indexes for table `likes`
--
ALTER TABLE `likes`
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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `request_invoice`
--
ALTER TABLE `request_invoice`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category_formation`
--
ALTER TABLE `category_formation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `packs`
--
ALTER TABLE `packs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_invoice`
--
ALTER TABLE `request_invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
