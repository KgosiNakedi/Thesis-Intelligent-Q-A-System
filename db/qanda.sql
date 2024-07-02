-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2024 at 03:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `acitivity` varchar(255) NOT NULL,
  `time_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(255) NOT NULL,
  `quiz_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `question` longtext NOT NULL,
  `optiona` varchar(255) NOT NULL,
  `optionb` varchar(255) NOT NULL,
  `optionc` varchar(255) DEFAULT NULL,
  `optiond` varchar(255) DEFAULT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `created_at`, `question`, `optiona`, `optionb`, `optionc`, `optiond`, `answer`) VALUES
(1, '3', '2024-05-29 23:55:31', 'fsa', 'fsdfas`', 'ffasaf', '', '', ''),
(2, '3', '2024-05-29 23:55:31', 'fas', 'asdfas', 'ffasd', '', '', ''),
(3, '4', '2024-05-29 23:56:42', 'fsa', 'fsdfas`', 'ffasaf', '', '', ''),
(4, '4', '2024-05-29 23:56:42', 'fas', 'asdfas', 'ffasd', '', '', ''),
(5, '5', '2024-05-29 23:58:07', 'q1', 'q1a', 'q2b', '', '', ''),
(6, '7', '2024-05-30 00:09:39', 'q1', 'a', 'b`', 'c', '', 'c'),
(7, '7', '2024-05-30 00:09:39', 'q2', 'a2', 'b2', 'c2', '', 'a'),
(8, '8', '2024-05-30 00:10:15', 'q1', 'a', 'b`', 'c', '', 'c'),
(9, '8', '2024-05-30 00:10:15', 'q2', 'a2', 'b2', 'c2', '', 'a'),
(10, '9', '2024-05-30 00:11:20', 'q1', 'q1a', 'q1b', '', '', 'a'),
(11, '9', '2024-05-30 00:11:20', 'q2', 'a', 'b', 'c', 'd', 'd'),
(12, '10', '2024-05-30 03:18:35', 'the answer is a', 'as', 's', '', '', 'a'),
(13, '10', '2024-05-30 03:18:35', 'Swim answer is b', 'q1a', 'bb', 's', 'e', 'b'),
(14, '10', '2024-05-30 03:18:36', 'answer is a', 'aa', 'd', 'c', 'ee', 'a'),
(15, '11', '2024-05-30 11:25:37', 'the answer is a', 'q1a', 'ghhj', '', '', 'a'),
(16, '11', '2024-05-30 11:25:37', 'bb', 'nmlkjk', 'qb', 'jlk;kl', 'jklkkk', 'b'),
(17, '12', '2024-05-31 15:06:49', 'aaaaaaaaaaaaaaaaaaaaaaa', 'a', 'b', 'c', '', 'a'),
(18, '12', '2024-05-31 15:06:49', 'aaa', 'b', 'c', 'd', '', 'b'),
(19, '13', '2024-05-31 15:13:31', 'Hi', 'ligma ligma ligma', 'ligma ligma ligma', 'ligma ligma ligma', '', 'b'),
(20, '13', '2024-05-31 15:13:32', 'ligma ligma ligma cc', 'q1a', 'das', 'wq', 'wq', 'c'),
(21, '14', '2024-05-31 15:37:31', 'In the name of gray', 'choose me', 'wrong', 'wrong', '', 'a'),
(22, '14', '2024-05-31 15:37:31', 'In the name of gray', 'wrong', 'choose', 'wrong', '', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(255) NOT NULL,
  `create_by` varchar(255) DEFAULT NULL,
  `num_questions` int(255) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `title` varchar(255) NOT NULL,
  `discriiption` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `create_by`, `num_questions`, `created_at`, `title`, `discriiption`) VALUES
(1, '1', 2, '2024-05-29 22:41:23', '', ''),
(2, '23', 0, '2024-05-29 23:54:45', 'fadsfd', 'fafasfsa'),
(3, '23', 0, '2024-05-29 23:55:31', 'fadsfd', 'fafasfsa'),
(4, '23', 0, '2024-05-29 23:56:42', 'fadsfd', 'fafasfsa'),
(5, '23', 0, '2024-05-29 23:58:07', 'dsadsa', 'adasdsa'),
(6, '23', 0, '2024-05-30 00:09:24', 'the quiz', 'amen'),
(7, '23', 0, '2024-05-30 00:09:39', 'the quiz', 'amen'),
(8, '23', 2, '2024-05-30 00:10:15', 'the quiz', 'amen'),
(9, '23', 2, '2024-05-30 00:11:19', 'title', 'fquiz'),
(10, '23', 3, '2024-05-30 03:18:35', 'The final boss', 'lorem\r\nloremlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem lorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\nlorem\r\n\r\nlorem\r\nlorem\r\n\r\nlorem\r\nlorem\r\nlorem\r\n'),
(11, '23', 2, '2024-05-30 11:25:36', 'the quiz', 'quizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizquizv'),
(12, '23', 2, '2024-05-31 15:06:49', 'yyyyyyyyyyyyyyyy', 'yyyyyyyyyyyyyyyyyyy'),
(13, '23', 2, '2024-05-31 15:13:31', 'the q', 'lolololololololololololololololololololololololo'),
(14, '23', 2, '2024-05-31 15:37:31', 'In the name of gray', 'In the name of gray');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `title` varchar(255) NOT NULL,
  `discription` longtext NOT NULL,
  `is_closed` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `created_by`, `created_at`, `title`, `discription`, `is_closed`) VALUES
(1, '', '0000-00-00 00:00:00', 'dsad', 'dsadasdas\r\n', 0),
(2, '', '0000-00-00 00:00:00', 'asdas', 'dsadsadas\r\n\r\n', 0),
(3, '1', '0000-00-00 00:00:00', 'The room', 'Hi hih ihih i\r\n', 0),
(4, '1', '0000-00-00 00:00:00', 'Room i', 'Hi msdsadkaskdkhbadhfdabs\r\n', 0),
(5, '1', '0000-00-00 00:00:00', 'ghvghvhg', 'gfcngmgmn\r\n', 0),
(6, '1', '0000-00-00 00:00:00', 'iuhkui', 'iluhuhkj', 0),
(7, '2', '0000-00-00 00:00:00', 'bjbo', 'kbjbobo', 0),
(8, '16', '2024-05-19 00:22:42', 'rom', 'd', 0),
(9, '18', '2024-05-20 15:33:38', 'room2', 'hehe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_messages`
--

CREATE TABLE `room_messages` (
  `id` int(255) NOT NULL,
  `from_user` varchar(255) NOT NULL,
  `room_id` varchar(255) NOT NULL,
  `messages` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `image_file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_messages`
--

INSERT INTO `room_messages` (`id`, `from_user`, `room_id`, `messages`, `created_at`, `image_file_name`) VALUES
(1, '2', '2', 'hi  m', '2024-05-19 15:30:46', NULL),
(2, '2', '2', 'hi  m', '2024-05-19 15:31:05', NULL),
(3, '2', '2', 'hi  m', '2024-05-19 15:31:16', NULL),
(4, '16', '8', 'assdaasdasfasd', '2024-05-19 15:45:20', NULL),
(5, '16', '8', 'adsfasfs', '2024-05-19 16:02:01', NULL),
(6, '16', '8', 'adsfasfsasfsdafdsa', '2024-05-19 16:02:04', NULL),
(7, '16', '8', 'adsfasfsasfsdafdsasdafdas', '2024-05-19 16:02:06', NULL),
(8, '16', '8', 'adsfasdfads', '2024-05-19 16:02:11', NULL),
(9, '17', '8', 'asdfdasfads\r\n', '2024-05-19 16:18:56', NULL),
(10, '17', '8', 'asdfdasfads\r\n', '2024-05-19 16:18:58', NULL),
(11, '17', '8', 'gogo', '2024-05-19 16:19:29', NULL),
(12, '16', '8', 'gogo', '2024-05-19 16:19:36', NULL),
(13, '16', '8', 'fsgdgd', '2024-05-19 16:22:48', NULL),
(14, '16', '8', 'dsfsd', '2024-05-19 16:23:13', NULL),
(15, '16', '8', 'dsfsd', '2024-05-19 16:23:13', NULL),
(16, '16', '8', 'dsfsd', '2024-05-19 16:23:58', NULL),
(17, '16', '8', 'ds', '2024-05-19 16:24:03', NULL),
(18, '16', '8', 'dsaa', '2024-05-19 16:25:29', NULL),
(19, '16', '8', 'fdfdasfads\r\n', '2024-05-19 16:33:00', NULL),
(20, '16', '8', 'dfdasfadssad', '2024-05-19 16:38:22', NULL),
(21, '16', '8', 'hi', '2024-05-19 16:39:08', NULL),
(22, '16', '8', 'dsadasdsa', '2024-05-19 16:40:35', NULL),
(23, '16', '8', 'dfasfasd', '2024-05-19 16:41:54', NULL),
(24, '16', '8', 'dfasfasd', '2024-05-19 16:42:05', NULL),
(25, '16', '8', 'dfasfasddafadsfads', '2024-05-19 16:42:54', NULL),
(26, '16', '8', 'fff', '2024-05-19 16:43:04', NULL),
(27, '16', '8', 'vvvdavads', '2024-05-19 16:43:35', NULL),
(28, '16', '8', 'dasdsa', '2024-05-19 16:45:27', NULL),
(29, '16', '8', 'dsasdas', '2024-05-19 16:45:30', NULL),
(30, '16', '8', 'dsadsadafadsf daf ads f das fdsafdsadasfasd', '2024-05-19 16:45:38', NULL),
(31, '16', '8', 'hi', '2024-05-19 16:48:13', NULL),
(32, '16', '8', '', '2024-05-19 16:48:16', NULL),
(33, '16', '8', 'how you doing', '2024-05-19 16:48:25', NULL),
(34, '16', '8', 'adsadas\r\n', '2024-05-20 10:27:32', NULL),
(35, '16', '8', '', '2024-05-20 10:35:49', NULL),
(36, '16', '8', 'dadsa', '2024-05-20 13:01:21', NULL),
(37, '16', '8', 'dasdsadsa', '2024-05-20 13:01:37', NULL),
(38, '16', '8', 'adsadas', '2024-05-20 13:02:12', NULL),
(39, '16', '8', 'hello\r\n', '2024-05-20 13:04:24', NULL),
(40, '16', '8', 'hali', '2024-05-20 13:05:30', NULL),
(41, '17', '8', 'dsadsa', '2024-05-20 13:05:43', NULL),
(42, '16', '8', 'dsadsa', '2024-05-20 13:06:25', NULL),
(43, '17', '8', 'dadsa', '2024-05-20 13:06:31', NULL),
(44, '16', '8', 'dasdsadas', '2024-05-20 13:07:19', NULL),
(45, '16', '8', 'dfsasafsda', '2024-05-20 13:12:29', NULL),
(46, '16', '8', 'hellow', '2024-05-20 13:12:37', NULL),
(47, '16', '8', 'hi', '2024-05-20 13:14:23', NULL),
(48, '16', '8', 'hello', '2024-05-20 13:14:53', NULL),
(49, '16', '8', 'hi', '2024-05-20 13:15:13', NULL),
(50, '16', '8', 'my name is ligma', '2024-05-20 13:15:20', NULL),
(51, '16', '8', '', '2024-05-20 13:15:20', NULL),
(52, '17', '8', 'hello', '2024-05-20 13:15:33', NULL),
(53, '16', '8', 'HimHimHIm', '2024-05-20 13:15:43', NULL),
(54, '17', '8', 'yoyoyo', '2024-05-20 13:15:47', NULL),
(55, '16', '8', 'ligma', '2024-05-20 13:17:21', NULL),
(56, '16', '8', 'sam', '2024-05-20 13:17:30', NULL),
(57, '16', '8', 'hi hi hi', '2024-05-20 13:18:10', NULL),
(58, '16', '8', 'dsadsa', '2024-05-20 13:33:19', NULL),
(59, '17', '8', 'testing', '2024-05-20 13:37:11', NULL),
(60, '17', '8', 'dsaas', '2024-05-20 13:37:53', NULL),
(61, '17', '8', 'hello', '2024-05-20 13:38:49', NULL),
(62, '17', '8', 'hi', '2024-05-20 13:39:42', NULL),
(63, '17', '8', 'hi', '2024-05-20 13:40:30', NULL),
(64, '17', '8', 'dsadas', '2024-05-20 13:41:09', NULL),
(65, '17', '8', 'dsa', '2024-05-20 13:41:47', NULL),
(66, '17', '8', 'dsadas', '2024-05-20 13:42:31', NULL),
(67, '17', '8', 'dd', '2024-05-20 13:42:59', NULL),
(68, '17', '8', 'dsadas', '2024-05-20 13:44:58', NULL),
(69, '17', '8', 'dsa', '2024-05-20 13:46:51', NULL),
(70, '16', '8', 'dd', '2024-05-20 13:47:06', NULL),
(71, '17', '8', 'dd', '2024-05-20 13:47:35', NULL),
(72, '17', '8', 'sss', '2024-05-20 13:47:39', NULL),
(73, '16', '8', 'hello', '2024-05-20 13:48:29', NULL),
(74, '17', '8', 'dsadsa', '2024-05-20 13:48:41', NULL),
(75, '17', '8', 'dsadas', '2024-05-20 15:06:31', NULL),
(76, '17', '8', 'dsadsadas', '2024-05-20 15:07:02', NULL),
(77, '17', '8', 'kk', '2024-05-20 15:07:16', NULL),
(78, '17', '8', 'jii', '2024-05-20 15:07:39', NULL),
(79, '16', '8', 'hhh', '2024-05-20 15:10:50', NULL),
(80, '16', '8', 'bb', '2024-05-20 15:10:54', NULL),
(81, '16', '8', 'bb', '2024-05-20 15:10:59', NULL),
(82, '17', '8', 'bbb', '2024-05-20 15:11:13', NULL),
(83, '17', '8', 'bb', '2024-05-20 15:11:52', NULL),
(84, '17', '8', 'hi', '2024-05-20 15:12:14', NULL),
(85, '17', '8', 'bb', '2024-05-20 15:12:38', NULL),
(86, '16', '8', 'hi', '2024-05-20 15:15:35', NULL),
(87, '16', '8', 'hi', '2024-05-20 15:15:49', NULL),
(88, '16', '8', 'hi', '2024-05-20 15:16:15', NULL),
(89, '16', '8', 'j', '2024-05-20 15:16:19', NULL),
(90, '16', '8', 'k', '2024-05-20 15:16:33', NULL),
(91, '16', '8', 'hh', '2024-05-20 15:16:54', NULL),
(92, '16', '8', 'h', '2024-05-20 15:25:39', NULL),
(93, '16', '8', 'hhhh', '2024-05-20 15:25:48', NULL),
(94, '17', '8', 'o\r\n', '2024-05-20 15:26:06', NULL),
(95, '16', '8', 'hi', '2024-05-20 15:26:32', NULL),
(96, '16', '8', 'i im ligma', '2024-05-20 15:26:39', NULL),
(97, '16', '8', 'hi', '2024-05-20 15:27:48', NULL),
(98, '16', '8', 'hi', '2024-05-20 15:27:53', NULL),
(99, '17', '8', 'jj', '2024-05-20 15:27:58', NULL),
(100, '16', '8', 'ligma', '2024-05-20 15:28:30', NULL),
(101, '16', '8', 'hello', '2024-05-20 15:28:34', NULL),
(102, '16', '8', 'fine sire', '2024-05-20 15:28:41', NULL),
(103, '17', '8', 'hi', '2024-05-20 15:31:11', NULL),
(104, '18', '8', 'ji im user', '2024-05-20 15:33:03', NULL),
(105, '17', '8', 'hello user', '2024-05-20 15:33:15', NULL),
(106, '17', '8', 'hello', '2024-05-20 15:33:45', NULL),
(107, '18', '9', 'hehe', '2024-05-20 15:33:55', NULL),
(108, '16', '9', 'yo', '2024-05-20 15:34:03', NULL),
(109, '16', '9', 'Im going to see ligma tomorrow', '2024-05-20 15:34:19', NULL),
(110, '18', '9', 'whats ligma', '2024-05-20 15:34:33', NULL),
(111, '16', '9', 'ligma ballls!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', '2024-05-20 15:34:43', NULL),
(112, '18', '9', 'hahahahahah', '2024-05-20 15:34:48', NULL),
(113, '18', '9', 'helo', '2024-05-20 16:20:54', NULL),
(114, '16', '9', 'hi', '2024-05-20 16:25:53', NULL),
(115, '16', '8', 'hi', '2024-05-20 21:25:48', NULL),
(116, '16', '8', 'hello', '2024-05-20 21:25:54', NULL),
(117, '16', '8', 'hi', '2024-05-20 21:26:59', NULL),
(118, '16', '8', 'hi', '2024-05-20 21:27:04', NULL),
(119, '18', '8', 'hi', '2024-05-20 21:27:16', NULL),
(120, '16', '8', 'hellow', '2024-05-20 21:27:27', NULL),
(121, '16', '8', 'hi', '2024-05-27 13:41:26', NULL),
(122, '16', '8', 'hello', '2024-05-27 13:42:58', NULL),
(123, '16', '8', 'hh', '2024-05-27 13:43:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `profile_image_filename` varchar(255) NOT NULL DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `created_at`, `role`, `profile_image_filename`) VALUES
(19, 'jhon@gmail.com', '123', 'ligma', 'lname', '2024-05-28 19:13:36', 'user', 'null'),
(20, '123@j.com', '123', 'Jhon', 'Doe', '2024-05-28 19:15:22', 'user', 'null'),
(21, 'jhon@j.com', '123', 'Jhon', 'Doe', '2024-05-28 19:39:50', 'user', '1716896390.jpg'),
(22, 'admin@gmail.com', '123', 'sam', 'sam', '2024-05-29 19:52:52', 'admin', '1716983572.jpg'),
(23, 'jhon@io.com', '123', 'sam', 'sam', '2024-05-29 19:54:33', 'user', '1716983673.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `question_id` int(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `chosen_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`id`, `user_id`, `question_id`, `created_at`, `chosen_answer`) VALUES
(1, 23, 6, '2024-05-30 03:16:26', 'a'),
(2, 23, 7, '2024-05-30 03:16:26', 'a'),
(3, 23, 12, '2024-05-30 03:34:37', 'a'),
(4, 23, 13, '2024-05-30 03:34:37', 'b'),
(5, 23, 14, '2024-05-30 03:34:37', 'a'),
(6, 23, 15, '2024-05-30 11:26:08', 'a'),
(7, 23, 16, '2024-05-30 11:26:08', 'b'),
(8, 23, 10, '2024-05-31 15:05:51', 'b'),
(9, 23, 11, '2024-05-31 15:05:51', 'c'),
(10, 23, 10, '2024-05-31 15:06:16', 'b'),
(11, 23, 11, '2024-05-31 15:06:16', 'b'),
(12, 23, 17, '2024-05-31 15:06:57', 'a'),
(13, 23, 18, '2024-05-31 15:06:57', 'a'),
(14, 23, 17, '2024-05-31 15:06:59', 'a'),
(15, 23, 18, '2024-05-31 15:06:59', 'a'),
(16, 23, 19, '2024-05-31 15:13:43', 'b'),
(17, 23, 20, '2024-05-31 15:13:44', 'c'),
(18, 23, 21, '2024-05-31 15:37:41', 'a'),
(19, 23, 22, '2024-05-31 15:37:41', 'b'),
(20, 23, 1, '2024-05-31 15:51:28', 'a'),
(21, 23, 2, '2024-05-31 15:51:28', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `user_quiz`
--

CREATE TABLE `user_quiz` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `score` int(255) NOT NULL DEFAULT 0,
  `quiz_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_quiz`
--

INSERT INTO `user_quiz` (`id`, `user_id`, `created_at`, `score`, `quiz_id`) VALUES
(1, 23, '2024-05-30 03:16:26', 1, 7),
(2, 23, '2024-05-30 03:34:37', 3, 10),
(3, 23, '2024-05-30 11:26:08', 2, 11),
(4, 23, '2024-05-31 15:05:51', 0, 9),
(5, 23, '2024-05-31 15:06:16', 0, 9),
(6, 23, '2024-05-31 15:06:57', 1, 12),
(7, 23, '2024-05-31 15:07:00', 1, 12),
(8, 23, '2024-05-31 15:13:44', 2, 13),
(9, 23, '2024-05-31 15:37:41', 2, 14),
(10, 23, '2024-05-31 15:51:29', 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_messages`
--
ALTER TABLE `room_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_quiz`
--
ALTER TABLE `user_quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `room_messages`
--
ALTER TABLE `room_messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_quiz`
--
ALTER TABLE `user_quiz`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
