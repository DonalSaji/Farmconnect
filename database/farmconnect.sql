-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 06:44 AM
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
-- Database: `farmconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `phone`, `password`, `photo`, `status`, `role`) VALUES
(1, 'Administrator', 'admin@gmail.com', '9478654862', 'fcea920f7412b5da7be0cf42b8c93759', 'user-1.jpg', 'Active', 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(50) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `content` varchar(2555) NOT NULL,
  `img` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `date`, `title`, `sub`, `content`, `img`, `user_id`) VALUES
(10, '2024-06-11', 'Wheat procurement exceeds 55% of target, touches 2', 'Wheat procurement in India increases, but challenges in key States may hinder Centre’s target achievement', 'With the pick up in pace of wheat procurement, the deficit has narrowed down to 8 per cent as of April 30 from 25 per cent a week ago. However, the likely lower than expected procurement in key states like Madhya Pradesh, Rajasthan and Uttar Pradesh may make it tough for the Centre to meet the overall procurement target of 372.9 lakh tonnes for the season. Wheat procurement in the country reached 205.42 lt by April 30, as against 222.89 lt year-ago, according to the official data. Since the procurement in last two years were below expectations, a comparison with purchases made in the same period in 2021 shows that it was 280.39 lt. The Centre had purchased over 12 lt in first two days of May in 2021, officials said while highlighting that the government had purchased a record 433.44 lt of wheat in whole year. The government had procured 187.92 lt of wheat in 2022-23 and 261.97 lt in 2023-24. “Though Covid factor was there in 2021, but in terms of production it was a normal year. But, the last two years were unusual as despite tall claims by agriculture ministry about bumper wheat production, the Centre could not mop up adequate wheat. However, due to previously held grain in the reserves, it sold a record 100 lt between June and March of 2023-24 fiscal and was able to put a check on prices,” said an official source. State-wise analysis Despite the export ban and a restriction on traders to participate in government’s wheat auction programme, the demand was so high that the government had to keep raising the weekly offer as well as the buying limit from time to time and the offtake remained over 95 per cent. Wheat procurement in Punjab stood at 95.97 lt till April 30, down by about 10 per cent from same period last year’s 106.54 lt, which millers and state officials attribute to this year’s delayed harvest of about 10 days. The progressive procurement had recorded a drop of 49 per cent until April 23. Wheat procurement in Haryana, where the target is 80 lt, has reached 62.75 lt till April 30, up 8 per cent from 58.27 lt year-ago. Officials said that 90 per cent of harvesting is completed in Haryana. The government is hopeful of procuring 210 lt per the target from Punjab and Haryana whereas the main problems are in Rajasthan, Uttar Pradesh and Madhya Pradesh, where the combined target is 160 lt. Relaxed specs The Centre on April 23 relaxed quality specifications for wheat in MP and Rajasthan so that there may be some improvement in the purchases. \r\n', 'dd.jpg', 1),
(11, '2024-06-11', ' Chennai-based agtech startup joins hands with far', 'Svastha Ecoharvest has roped in 10,000 farmers to produce quality rice meeting MRLs', '“Our farmers produce rice following the European rice standard, especially maintaining pesticide limits by not exceeding the maximum residue levels (MRLs). To comply with the standards, Svastha has implemented a specific information technology tool optimising chemical usage at the village level, “ said V Balamuthukumar, Project Coordinator of Svastha Ecoharvest. Using data science With chemical residue and climate compliant products emerging as the key features of the export market, the Chennai-based firm is innovating its products using data science, he said. “We are driven by digitisation, the future of consumption, sustainable living, and the pursuit of longer lifespans. Our primary objective is to provide clean and wholesome food while simultaneously increasing farm income,” the project coordinator of the company said. Also Read: ICAR-CIFT plans to promote entrepreneurship for millet based ready-to-eat fish products In order to ensure transparency of its products, the company has come up with quick response (QR) codes which provide the complete history of the product from farm-to-fork. The company produces test result for every packet it dispatches. One of the features of Svastha Ecoharvest is that it offers speciality rice varieties such as Ponni rice, Sona Masoori rice, Matta or Red rice, Idly rice, and traditional or indigenous ones such as Karuppu Kavuni, Poongar and Mappilai samba. In addition, the company works closely with urad (black matpe) growers, while offering white and parboiled rice varieties. AI-powered crop monitoring Svastha has a team of professional agricultural graduates who educate farmers on safe, appropriate and judicious use of chemicals. This ensures that the products comply with the maximum residue limits (MRL) permitted. Stating that the idea of deep purpose and deep learning is the ultimate process to transform quality control in agriculture today, Balamuthukumar said his company is continuously developing an artificial intelligence-powered crop monitoring solution to comply with the MRL of various agricultural products.\r\n', 'agri-technology.jpg', 1),
(12, '2024-06-11', 'Hope is still There for Farmers', 'Agriculture experts also caution the negative impacts of heavy rainfall on crops as they say flood has been seen to bring more damage than a drought', 'While everyone is glued to hear about likely heatwaves this month, which may not be as worrisome, India Meteorological Department hopes that there may be bountiful of monsoon rains in August this year due to La Nina, which if proved correct, will bring a big relief to the farmers. Last year, the rainfall in August was the lowest for the month since 1901 as the deficit was 36 per cent. Since July has highest 32 per cent share in the June-September monsoon season in a normal year, a small deficit in August is manageable for the crops. However, agriculture experts also caution the negative impacts of heavy rainfall on crops as they say flood has been seen to bring more damage than a drought. “After driest August in Maharashtra last year, there were reports of farmers using standing sugarcane crop for fodder. But, rains after September changed the entire situation and the State is now the top producer of sugar in the country this year,” said an industry expert. Briefing media on the likely temperature and rainfall during May, India Meteorological Department’s Director General Mrutyunjay Mohapatra on Wednesday said that though 8-11 days heat wave days are expected over south Rajasthan, west Madhya Pradesh, Vidarbha, Marathwada and Gujarat region, there may be 5-7 heatwave days remaining parts of Rajasthan, east Madhya Pradesh, Punjab, Haryana, Chandigarh, Delhi, Uttar Pradesh and some parts of Chhattisgarh, interior Odisha, Gangetic West Bengal, Jharkhand, Bihar, north interior Karnataka and Telangana.\r\n', '2014-05-26T210257Z_1437686686_GF2EA5N0IU802_RTRMADP_3_ASIA-ELNINO.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `id`, `product_id`, `qty`, `date_added`) VALUES
(1, 1, 1, 1, '2024-04-28'),
(2, 1, 1, 1, '2024-04-28'),
(3, 2, 1, 1, '2024-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Vegetable'),
(2, 'fruit'),
(3, 'fertilizer'),
(4, 'seed'),
(5, 'land'),
(6, 'machine');

-- --------------------------------------------------------

--
-- Table structure for table `order_db`
--

CREATE TABLE `order_db` (
  `order_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_db`
--

INSERT INTO `order_db` (`order_id`, `order_qty`, `product_id`, `id`, `date`) VALUES
(1, 1, 2, 2, 2147483647),
(2, 1, 1, 2, 2147483647),
(3, 1, 1, 2, 2147483647),
(4, 5, 2, 2, 2147483647),
(5, 3, 2, 3, 2147483647),
(6, 1, 1, 1, 2147483647),
(7, 2, 1, 6, 2147483647),
(8, 4, 1, 6, 2147483647),
(9, 2, 1, 6, 2147483647),
(10, 3, 1, 6, 2147483647),
(11, 2, 7, 6, 2147483647),
(12, 1, 2, 6, 2147483647),
(13, 1, 6, 6, 2147483647),
(14, 1, 6, 6, 2147483647),
(15, 3, 6, 6, 2147483647),
(16, 1, 6, 6, 2147483647),
(17, 1, 1, 6, 2147483647),
(18, 1, 6, 6, 2147483647);

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `rrp` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_des` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `price`, `rrp`, `product_qty`, `product_des`, `cat_id`, `id`, `date_added`) VALUES
(1, 'grape', 'about_img.jpg', 20, 10, 20, 'grape', 2, 1, '2024-04-23'),
(2, 'Strawberry', 'instagram-img-08.jpg', 45, 35, 50, 'Strawberry', 2, 2, '2024-05-02'),
(6, 'wheat crop', '3.jpg', 150000, 120000, 15, 'Land rent for sale near mangalore', 5, 2, '2024-05-02'),
(7, 'Carrot', 'carrot.jpg', 120, 145, 20, 'Freshly nutritious Carrot', 1, 1, '2024-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subs_id` int(11) NOT NULL,
  `subs_email` varchar(255) NOT NULL,
  `subs_date` varchar(100) NOT NULL,
  `subs_date_time` varchar(100) NOT NULL,
  `subs_hash` varchar(255) NOT NULL,
  `subs_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subs_id`, `subs_email`, `subs_date`, `subs_date_time`, `subs_hash`, `subs_active`) VALUES
(1, 'ruth@mail.com', '2022-03-20', '2022-03-20 10:25:18', 'f4eabc1afed38a08da8d1c6e5fb42187', 1),
(2, 'kimberly@mail.com', '2022-03-20', '2022-03-20 10:26:07', '61f3af9cac686555a4bff9e565f88c47', 1),
(3, 'gregobn@mail.com', '2022-03-20', '2022-03-20 10:27:21', '72d6fc3a9e9ed33dfc30b10f4de82f34', 1),
(4, 'morgan.sarahh5@mail.com', '2022-03-20', '2022-03-20 10:27:48', 'bcdeda095a6c882803fc3aaf4a17f08e', 1),
(5, 'greenwd1154@mail.com', '2022-03-20', '2022-03-20 10:28:09', '279ecfe9debbb091c664641f534857ee', 1),
(6, 'awsm785@mail.com', '2022-03-20', '2022-03-20 10:28:21', '94096ae01fc65e71c50c7843d096e041', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `lang_id` int(11) NOT NULL,
  `lang_name` varchar(255) NOT NULL,
  `lang_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`lang_id`, `lang_name`, `lang_value`) VALUES
(1, 'Currency', '&#8377'),
(2, 'Search Product', 'Search Product'),
(3, 'Search', 'Search'),
(4, 'Submit', 'Submit'),
(5, 'Update', 'Update'),
(6, 'Read More', 'Read More'),
(7, 'Serial', 'Serial'),
(8, 'Photo', 'Photo'),
(9, 'Login', 'Login'),
(10, 'Customer Login', 'Customer Login'),
(11, 'Click here to login', 'Click here to login'),
(12, 'Back to Login Page', 'Back to Login Page'),
(13, 'Logged in as', 'Logged in as'),
(14, 'Logout', 'Logout'),
(15, 'Register', 'Register'),
(16, 'Customer Registration', 'Customer Registration'),
(17, 'Registration Successful', 'Registration Successful'),
(18, 'Cart', 'Cart'),
(19, 'View Cart', 'View Cart'),
(20, 'Update Cart', 'Update Cart'),
(21, 'Back to Cart', 'Back to Cart'),
(22, 'Checkout', 'Checkout'),
(23, 'Proceed to Checkout', 'Proceed to Checkout'),
(24, 'Orders', 'Orders'),
(25, 'Order History', 'Order History'),
(26, 'Order Details', 'Order Details'),
(27, 'Payment Date and Time', 'Payment Date and Time'),
(28, 'Transaction ID', 'Transaction ID'),
(29, 'Paid Amount', 'Paid Amount'),
(30, 'Payment Status', 'Payment Status'),
(31, 'Payment Method', 'Payment Method'),
(32, 'Payment ID', 'Payment ID'),
(33, 'Payment Section', 'Payment Section'),
(34, 'Select Payment Method', 'Select Payment Method'),
(35, 'Select a Method', 'Select a Method'),
(36, 'PayPal', 'PayPal'),
(37, 'Stripe', 'Stripe'),
(38, 'Bank Deposit', 'Bank Deposit'),
(39, 'Card Number', 'Card Number'),
(40, 'CVV', 'CVV'),
(41, 'Month', 'Month'),
(42, 'Year', 'Year'),
(43, 'Send to this Details', 'Send to this Details'),
(44, 'Transaction Information', 'Transaction Information'),
(45, 'Include transaction id and other information correctly', 'Include transaction id and other information correctly'),
(46, 'Pay Now', 'Pay Now'),
(47, 'Product Name', 'Product Name'),
(48, 'Product Details', 'Product Details'),
(49, 'Categories', 'Categories'),
(50, 'Category:', 'Category:'),
(51, 'All Products Under', 'All Products Under'),
(52, 'Select Size', 'Select Size'),
(53, 'Select Color', 'Select Color'),
(54, 'Product Price', 'Product Price'),
(55, 'Quantity', 'Quantity'),
(56, 'Out of Stock', 'Out of Stock'),
(57, 'Share This', 'Share This'),
(58, 'Share This Product', 'Share This Product'),
(59, 'Product Description', 'Product Description'),
(60, 'Features', 'Features'),
(61, 'Conditions', 'Conditions'),
(62, 'Return Policy', 'Return Policy'),
(63, 'Reviews', 'Reviews'),
(64, 'Review', 'Review'),
(65, 'Give a Review', 'Give a Review'),
(66, 'Write your comment (Optional)', 'Write your comment (Optional)'),
(67, 'Submit Review', 'Submit Review'),
(68, 'You already have given a rating!', 'You already have given a rating!'),
(69, 'You must have to login to give a review', 'You must have to login to give a review'),
(70, 'No description found', 'No description found'),
(71, 'No feature found', 'No feature found'),
(72, 'No condition found', 'No condition found'),
(73, 'No return policy found', 'No return policy found'),
(74, 'Review not found', 'Review not found'),
(75, 'Customer Name', 'Customer Name'),
(76, 'Comment', 'Comment'),
(77, 'Comments', 'Comments'),
(78, 'Rating', 'Rating'),
(79, 'Previous', 'Previous'),
(80, 'Next', 'Next'),
(81, 'Sub Total', 'Sub Total'),
(82, 'Total', 'Total'),
(83, 'Action', 'Action'),
(84, 'Shipping Cost', 'Shipping Cost'),
(85, 'Continue Shopping', 'Continue Shopping'),
(86, 'Update Billing Address', 'Update Billing Address'),
(87, 'Update Shipping Address', 'Update Shipping Address'),
(88, 'Update Billing and Shipping Info', 'Update Billing and Shipping Info'),
(89, 'Dashboard', 'Dashboard'),
(90, 'Welcome to the Dashboard', 'Welcome to the Dashboard'),
(91, 'Back to Dashboard', 'Back to Dashboard'),
(92, 'Subscribe', 'Subscribe'),
(93, 'Subscribe To Our Newsletter', 'Subscribe To Our Newsletter'),
(94, 'Email Address', 'Email Address'),
(95, 'Enter Your Email Address', 'Enter Your Email Address'),
(96, 'Password', 'Password'),
(97, 'Forget Password', 'Forget Password'),
(98, 'Retype Password', 'Retype Password'),
(99, 'Update Password', 'Update Password'),
(100, 'New Password', 'New Password'),
(101, 'Retype New Password', 'Retype New Password'),
(102, 'Full Name', 'Full Name'),
(103, 'Company Name', 'Company Name'),
(104, 'Phone Number', 'Phone Number'),
(105, 'Address', 'Address'),
(106, 'Country', 'Country'),
(107, 'City', 'City'),
(108, 'State', 'State'),
(109, 'Zip Code', 'Zip Code'),
(110, 'About Us', 'About Us'),
(111, 'Featured Posts', 'Featured Posts'),
(112, 'Popular Posts', 'Popular Posts'),
(113, 'Recent Posts', 'Recent Posts'),
(114, 'Contact Information', 'Contact Information'),
(115, 'Contact Form', 'Contact Form'),
(116, 'Our Office', 'Our Office'),
(117, 'Update Profile', 'Update Profile'),
(118, 'Send Message', 'Send Message'),
(119, 'Message', 'Message'),
(120, 'Find Us On Map', 'Find Us On Map'),
(121, 'Congratulation! Payment is successful.', 'Congratulation! Payment is successful.'),
(122, 'Billing and Shipping Information is updated successfully.', 'Billing and Shipping Information is updated successfully.'),
(123, 'Customer Name can not be empty.', 'Customer Name can not be empty.'),
(124, 'Phone Number can not be empty.', 'Phone Number can not be empty.'),
(125, 'Address can not be empty.', 'Address can not be empty.'),
(126, 'You must have to select a country.', 'You must have to select a country.'),
(127, 'City can not be empty.', 'City can not be empty.'),
(128, 'State can not be empty.', 'State can not be empty.'),
(129, 'Zip Code can not be empty.', 'Zip Code can not be empty.'),
(130, 'Profile Information is updated successfully.', 'Profile Information is updated successfully.'),
(131, 'Email Address can not be empty', 'Email Address can not be empty'),
(132, 'Email and/or Password can not be empty.', 'Email and/or Password can not be empty.'),
(133, 'Email Address does not match.', 'Email Address does not match.'),
(134, 'Email address must be valid.', 'Email address must be valid.'),
(135, 'You email address is not found in our system.', 'You email address is not found in our system.'),
(136, 'Please check your email and confirm your subscription.', 'Please check your email and confirm your subscription.'),
(137, 'Your email is verified successfully. You can now login to our website.', 'Your email is verified successfully. You can now login to our website.'),
(138, 'Password can not be empty.', 'Password can not be empty.'),
(139, 'Passwords do not match.', 'Passwords do not match.'),
(140, 'Please enter new and retype passwords.', 'Please enter new and retype passwords.'),
(141, 'Password is updated successfully.', 'Password is updated successfully.'),
(142, 'To reset your password, please click on the link below.', 'To reset your password, please click on the link below.'),
(143, 'PASSWORD RESET REQUEST - YOUR WEBSITE.COM', 'PASSWORD RESET REQUEST - YOUR WEBSITE.COM'),
(144, 'The password reset email time (24 hours) has expired. Please again try to reset your password.', 'The password reset email time (24 hours) has expired. Please again try to reset your password.'),
(145, 'A confirmation link is sent to your email address. You will get the password reset information in there.', 'A confirmation link is sent to your email address. You will get the password reset information in there.'),
(146, 'Password is reset successfully. You can now login.', 'Password is reset successfully. You can now login.'),
(147, 'Email Address Already Exists', 'Email Address Already Exists.'),
(148, 'Sorry! Your account is inactive. Please contact to the administrator.', 'Sorry! Your account is inactive. Please contact to the administrator.'),
(149, 'Change Password', 'Change Password'),
(150, 'Registration Email Confirmation for YOUR WEBSITE', 'Registration Email Confirmation for YOUR WEBSITE.'),
(151, 'Thank you for your registration! Your account has been created. To active your account click on the link below:', 'Thank you for your registration! Your account has been created. To active your account click on the link below:'),
(152, 'Your registration is completed. Please check your email address to follow the process to confirm your registration.', 'Your registration is completed. Please check your email address to follow the process to confirm your registration.'),
(153, 'No Product Found', 'No Product Found'),
(154, 'Add to Cart', 'Add to Cart'),
(155, 'Related Products', 'Related Products'),
(156, 'See all related products from below', 'See all the related products from below'),
(157, 'Size', 'Size'),
(158, 'Color', 'Color'),
(159, 'Price', 'Price'),
(160, 'Please login as customer to checkout', 'Please login as customer to checkout'),
(161, 'Billing Address', 'Billing Address'),
(162, 'Shipping Address', 'Shipping Address'),
(163, 'Rating is Submitted Successfully!', 'Rating is Submitted Successfully!');

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_type` varchar(25) NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin` int(6) NOT NULL,
  `image` varchar(255) NOT NULL,
  `timedate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_type`, `email`, `password`, `phone`, `address`, `pin`, `image`, `timedate`) VALUES
(1, 'shibin', 'co-admin', 'shibin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '9633389789', 'shibin', 671543, 'ackerman.jpg', '2024-04-24'),
(2, 'Donal', 'co-admin', 'donal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9478654862', 'kkkkkkkkkk', 574236, 'cristiano.jpg', '2024-04-24'),
(3, 'priya', 'co-admin', 'priya@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', 0, '', '2024-05-02'),
(4, 'sahana', 'user', 'sahana@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', 0, '', '2024-05-02'),
(5, 'sona', 'user', 'sona@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', 0, '', '2024-05-02'),
(6, 'uavis', 'user', 'uvais@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', 0, '', '2024-05-03'),
(7, 'shibinsk', 'user', 'shibinsreedhar25@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', 0, '', '2024-05-03');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `f7` (`id`),
  ADD KEY `f8` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `order_db`
--
ALTER TABLE `order_db`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `f1` (`id`),
  ADD KEY `f2` (`product_id`);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `f3` (`cat_id`),
  ADD KEY `f4` (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_db`
--
ALTER TABLE `order_db`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `f7` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `f8` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `order_db`
--
ALTER TABLE `order_db`
  ADD CONSTRAINT `f1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `f2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

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

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `f3` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `f4` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
