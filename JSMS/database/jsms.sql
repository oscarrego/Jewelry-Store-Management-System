-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 07:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_date`) VALUES
(4, 'oscar', 'oscar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2024-05-02'),
(5, 'oscar 1', 'oscar1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2024-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `cart_table`
--

CREATE TABLE `cart_table` (
  `cart_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_qty` int(11) NOT NULL,
  `cart_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_table`
--

INSERT INTO `cart_table` (`cart_id`, `p_id`, `user_id`, `cart_qty`, `cart_date`) VALUES
(13, 44, 1, 2, '2024-05-31'),
(14, 42, 1, 1, '2024-06-01'),
(19, 49, 9, 1, '2024-06-05'),
(21, 44, 10, 1, '2024-06-05'),
(22, 44, 9, 1, '2024-06-06'),
(23, 44, 15, 1, '2024-06-07'),
(24, 45, 15, 1, '2024-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `cid` int(11) NOT NULL,
  `cname` varchar(12) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`cid`, `cname`, `date`) VALUES
(58, 'Earrings', '2024-05-30'),
(59, 'Ear Cuffs', '2024-05-30'),
(60, 'Rings', '2024-05-30'),
(61, 'Necklaces', '2024-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `p_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pname` text NOT NULL,
  `img` varchar(300) NOT NULL,
  `price` float NOT NULL,
  `descp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`p_id`, `cat_id`, `pname`, `img`, `price`, `descp`) VALUES
(42, 58, '\"Dune\" Crystal White Earring', 'upload/p1.png', 17000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(44, 58, '\"Dune\" MATT Brown Earring', 'upload/p2.png', 18000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(45, 58, '\"Dune\" Crystal Green Earring', 'upload/p3.png', 17500, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(46, 58, '\"Dune\" BolderMATT Brown Earring', 'upload/p4.png', 18500, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(47, 58, '\"Dune\" Green Stone Earring', 'upload/p11.png', 18000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(48, 58, '\"Dune\" Blue Stone Earring', 'upload/p12.png', 18000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(49, 58, '\"Dune\" MATT Brown Piece Earring', 'upload/p6.png', 9000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(50, 58, '\"Dune\" Blue Stone Piece Earring', 'upload/p10.png', 9000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(51, 58, '\"Dune\" Green Stone Piece Earring', 'upload/p9.png', 9000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(53, 58, '\"Spear\" Lapis lazuli & Lemon Quartz', 'upload/IN89KMECT104GCCCT105GCC-2_1000x.png', 21000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(54, 58, '\"Spear\" Door Knocker Earring', 'upload/IN89KMECT198GCCCT109GCC-2_1000x.png', 21000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(55, 58, '\"Spear\" Door Knocker Earring ', 'upload/IN89KMECT101GCCCT108GCC-2_1000x.png', 21000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(57, 60, '18k \"All About Basics\" Chain Ring', 'upload/p26.png', 49000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(58, 60, '\"Manhattan\" Pearl Diamond Cuff Ring', 'upload/p27.png', 51000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(59, 60, '\"Gossamer\" Diamond Ring', 'upload/p33.png', 59000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(60, 0, '\"Gossamer\" Diamond Short Bar Cuff Ring', 'upload/p28.png', 51000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(61, 60, '\"Gossamer\" Diamond Short Bar Cuff Ring', 'upload/p25.png', 51000, 'Artistic and eye-catching, the earpiece can be customized with natural stones, gold beads and pearls creating an everyday armor that amplifies and accentuates your personality.'),
(62, 61, '\"Trapeze\" Diamond Necklace', 'upload/p21.png', 79000, 'Inspired by the tension and dynamics of the trapeze, Hirotaka’s signature diamond bar necklace is renewed with a center golden part that is striking when layered. Hold the ball part attached to the slide adjuster, slide the chain and adjust it to your preferred length.'),
(63, 61, '\"Wheel of Fortune\" Diamond Necklace', 'upload/p15.png', 81000, 'Inspired by the tension and dynamics of the trapeze, Hirotaka’s signature diamond bar necklace is renewed with a center golden part that is striking when layered. Hold the ball part attached to the slide adjuster, slide the chain and adjust it to your preferred length.'),
(64, 61, '\"Beluga\" Pearl Necklace', 'upload/p17.png', 80000, 'Inspired by the tension and dynamics of the trapeze, Hirotaka’s signature diamond bar necklace is renewed with a center golden part that is striking when layered. Hold the ball part attached to the slide adjuster, slide the chain and adjust it to your preferred length.'),
(65, 61, '\"Beluga\" Oblong Diamond Necklace', 'upload/p16.png', 88000, 'Sculpted for everyday wear, Hirotaka’s latest “Beluga” collection takes on a new streamlined shape that’s bold and distinctive. Inspired by New York City’s iconic Art Deco era, the retro modern silhouette, “Allonge”, is a golden grooved form with an open center.  Inside the structure sleek bezel-set diamonds, bright green garnet, and rich Akoya pearls shine, creating a beautiful dimension. “Beluga” Necklaces show off the geometric lines and depth of this original style.'),
(66, 59, '\"Dune\" Earring', 'upload/DN09TME1_1000x.png', 40000, '\"Dune\" by Hirotaka draws inspiration from the wind-traced marks and ridges on sands. The thematic image of the collection is the whimsically carved marks on the dunes of the Kalahari Desert. Crafted in silver, it is expressed through smooth thread lines with a playfully moving solid 18K gold ring. High-quality craftsmanship introduces an elevated and abstract dimension to everyday styling.'),
(67, 59, '\"Dune\" Oblong Ear Cuff', 'upload/DN07TMF1_1000x.png', 38000, '\"Dune\" by Hirotaka draws inspiration from the wind-traced marks and ridges on sands. The thematic image of the collection is the whimsically carved marks on the dunes of the Kalahari Desert. Crafted in silver, it is expressed through smooth thread lines with a playfully moving solid 18K gold ring. High-quality craftsmanship introduces an elevated and abstract dimension to everyday styling.'),
(68, 59, '\"Dune\" Ear Cuff', 'upload/DN05TMF1_1000x.png', 40000, '\"Dune\" by Hirotaka draws inspiration from the wind-traced marks and ridges on sands. The thematic image of the collection is the whimsically carved marks on the dunes of the Kalahari Desert. Crafted in silver, it is expressed through smooth thread lines with a playfully moving solid 18K gold ring. High-quality craftsmanship introduces an elevated and abstract dimension to everyday styling.'),
(69, 59, '\"Dune\" Ear Cuff S size', 'upload/DN04TMF_f040ea39-52eb-4408-a978.png', 40000, '\"Dune\" by Hirotaka draws inspiration from the wind-traced marks and ridges on sands. The thematic image of the collection is the whimsically carved marks on the dunes of the Kalahari Desert. Crafted in silver, it is expressed through smooth thread lines with a playfully moving solid 18K gold ring. High-quality craftsmanship introduces an elevated and abstract dimension to everyday styling.'),
(70, 62, '\"Dune\" Bangle', 'upload/DN11TMAS1_1000x.png', 50000, '\"Dune\" by Hirotaka draws inspiration from the wind-traced marks and ridges on sands. The thematic image of the collection is the whimsically carved marks on the dunes of the Kalahari Desert. Crafted in silver, it is expressed through smooth thread lines with a playfully moving solid 18K gold ring. High-quality craftsmanship introduces an elevated and abstract dimension to everyday styling.'),
(71, 62, '\"Gossamer\" Diamond Long Bar Bracelet', 'upload/1106154951_5dc26d0fccfc3_1000x.png', 62000, '\"Dune\" by Hirotaka draws inspiration from the wind-traced marks and ridges on sands. The thematic image of the collection is the whimsically carved marks on the dunes of the Kalahari Desert. Crafted in silver, it is expressed through smooth thread lines with a playfully moving solid 18K gold ring. High-quality craftsmanship introduces an elevated and abstract dimension to everyday styling.'),
(72, 62, '\"Gossamer\" Diamond Short Bar Bracelet', 'upload/1106161239_5dc2726715d17_1000x.png', 65000, 'Inspired by spiderwebs sparking with dew in the sunlight, this bracelet has a sleek and sophisticated diamond bar. Hold the ball part attached to the slide adjuster, slide the chain and adjust it to your preferred length.\r\n\r\n'),
(73, 62, '\"Wheel of Fortune\" White and Black Diamond Bracelet', 'upload/EBT200521-0045_1000x.png', 56000, ' “Wheel of Fortune” signifies a positive turning point, good luck, and forthcoming fortune. Gold circle pendants come in three sizes outlined in white and black diamonds on long adjustable chains that delicately sparkle. Hold the ball part attached to the slide adjuster, slide the chain and adjust it to your preferred length.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_add` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_add`) VALUES
(9, 'oscar', 'oscar@gmail.com', 123456789, '827ccb0eea8a706c4c34a16891f84e7b', 'managlore'),
(10, 'oscar1', 'oscar1@gmail.com', 123456789, '827ccb0eea8a706c4c34a16891f84e7b', 'managlore'),
(13, 'hi', 'hi@gmail.com', 0, '202cb962ac59075b964b07152d234b70', ''),
(14, 'rahul', 'rahul2@gmail.com', 0, '827ccb0eea8a706c4c34a16891f84e7b', ''),
(15, 'priya', 'priya@gmail.com', 0, '827ccb0eea8a706c4c34a16891f84e7b', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart_table`
--
ALTER TABLE `cart_table`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart_table`
--
ALTER TABLE `cart_table`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
