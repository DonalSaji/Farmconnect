-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 10:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complete-blog-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `views`, `image`, `body`, `published`, `created_at`, `updated_at`) VALUES
(1, 1, '5 Habits that can improve your life', '5-habits-that-can-improve-your-life', 0, 'banner.jpg', 'Read every day', 1, '2018-02-03 02:28:02', '2018-02-01 13:44:31'),
(2, 1, 'Second post on FarmConnect', 'second-post-on-farmconnect', 0, '', '<p>This is the body of the second post on this site</p>\r\n', 0, '2024-03-04 09:16:04', '2024-03-04 09:16:04'),
(3, 1, '3 delicious Indian mangoes you must try this summer', '3-delicious-indian-mangoes-you-must-try-this-summer', 0, 'mango.jpg', '&lt;h2&gt;Here are 5 of India&amp;rsquo;s lesser-known mangoes that you need to try now&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Miyazaki Mango&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;The Miyazaki mango has made a big splash thanks to the efforts of Shree Kishan Suman from Rajasthan, a farmer who watched a youtube video and learnt how to grow an exotic Japanese fruit in his home. The red jewel-like Miyazaki from Japan is believed to be the world&amp;rsquo;s most expensive mango selling at upwards of Rs 2 lakh apiece. The flesh is sweet and soft, almost jelly-like in its texture and is a rare find globally. This farmer&amp;rsquo;s efforts from sourcing three saplings to nurturing them to fruition has resulted in the first crop of the Miyazaki mangoes in India. While currently, they are not available in the market, this success story could herald its arrival into the country&amp;rsquo;s mango lexicon.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Kohitoor&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;The Kohitoor from Murshidabad, Bengal is evocatively named after no less than one of the world&amp;rsquo;s greatest diamonds&amp;mdash;the Kohinoor. Its lineage is equally regal as this was mango that was grown especially for the Nawab of Murshidabad. A cross between the now-extinct Kalopahar and another unrecorded variant, this mango is believed to have been created for Nawab Siraj-ud-Daulah in the 18th century by his horticulturalist whose sole job was to create exotic varietals for the nawabs. Delicately flavoured with complex sweetness, this mango&amp;rsquo;s limited production keeps its price high and its patrons eagerly awaiting the new crop.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Moovandan&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;This Kerala mango&amp;rsquo;s name is key to understanding why this is such a ubiquitous species in this state. &amp;ldquo;Moonnu&amp;rdquo; means three and &amp;ldquo;aand&amp;#39; means year indicating that the tree starts giving fruit within three years of planting. Originally from the Idukki district, this mango comes with its own flavour profile which is tangy and a firm texture and a popular way to eat this fruit is when it&amp;#39;s nearly ripe with a side of salt and other spices.&lt;/p&gt;\r\n', 0, '2024-03-04 08:46:10', '2024-03-04 08:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `post_topic`
--

CREATE TABLE `post_topic` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_topic`
--

INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`) VALUES
(1, 'Agriculture', 'agriculture'),
(2, 'Farming', 'farming'),
(3, 'Diary', 'diary');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Shibin', 'shibinsreedhar25@gmail.com', 'Admin', 'mypassword', '2023-03-03 07:22:58', '2023-03-03 07:22:58'),
(2, 'Levi Ackerman', 'leviheichou658@gmail.com', NULL, 'ab334feeb31c05124cb73fa12571c2f6', '2024-03-04 05:09:15', '2024-03-04 05:09:15'),
(3, 'Uchiha Itachi', 'itachiofakatsuki@gmail.com', 'Admin', '54d68b192704cd16353e7619f07affb2', '2024-03-04 06:53:34', '2024-03-04 06:53:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_id` (`post_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_topic`
--
ALTER TABLE `post_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD CONSTRAINT `post_topic_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `post_topic_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
