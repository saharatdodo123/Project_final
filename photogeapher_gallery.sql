-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2021 at 07:59 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photogeapher_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `lastname`, `email`, `password`) VALUES
(1, 'สหรัฐ ', 'สารสุวรรณ', '614259057@webmail.npru.ac.th', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `contract_employment`
--

CREATE TABLE `contract_employment` (
  `cm_id` int(10) NOT NULL,
  `pg_id` int(10) NOT NULL,
  `cs_id` int(10) NOT NULL,
  `type_of_work` varchar(50) NOT NULL,
  `form_of_employment` varchar(20) NOT NULL,
  `service_rates` int(6) NOT NULL,
  `at` varchar(50) NOT NULL,
  `house_number` varchar(10) NOT NULL,
  `canton` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `contract_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `day_month_year` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `to_time` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(255) NOT NULL,
  `img2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contract_employment`
--

INSERT INTO `contract_employment` (`cm_id`, `pg_id`, `cs_id`, `type_of_work`, `form_of_employment`, `service_rates`, `at`, `house_number`, `canton`, `district`, `province`, `contract_date`, `day_month_year`, `time`, `to_time`, `status`, `img`, `img2`, `img3`, `img4`) VALUES
(201, 2, 1, 'บุคคล/แฟชั่น', '1 วัน', 6000, 'Crocodile Convent', '85', 'ปฐมเจดีย์', 'เมืองนครปฐม', 'นครปฐม', '2021-10-16 19:51:14', '17 มกราคม 2564', '09.00 น.', '16.00 น.', 'ชำระเงินงวดที่3แล้ว', '08eb6d95b27381d76a486f094af90371.jpg', '8fbe363bf2b44b28f8ac3cabb9cb809e.jpg', 'e22ab08f5cccabd12e5b682d2c5c73c5.PNG', '34747ea1d19372a7cf14d0982f94f857.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(10) NOT NULL,
  `cus_firstname` varchar(30) NOT NULL,
  `cus_lastname` varchar(30) NOT NULL,
  `cus_sex` varchar(6) NOT NULL,
  `cus_email` varchar(50) NOT NULL,
  `cus_password` varchar(30) NOT NULL,
  `cus_phone` varchar(10) NOT NULL,
  `cus_fbprofile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_firstname`, `cus_lastname`, `cus_sex`, `cus_email`, `cus_password`, `cus_phone`, `cus_fbprofile`) VALUES
(1, 'สหรัฐ', 'สารสุวรรณ', 'ชาย', 'saharat@gmail.com', '123456', '0800743762', 'https://www.facebook.com/profile.php?id=100008231135362'),
(2, 'วุฒิพงษ์', 'โพธิ์งาม', 'ชาย', 'wuttipong@gmail.com', '123456789', '0877535782', ''),
(3, 'ฐิติศักดิ์', 'มาสุข', 'ชาย', 'thitisak@gmail.com', '123456789', '0950032145', ''),
(8, 'ภูริภัทร', 'รักคง', 'ชาย', 'phuriphat@gmail.com', '123456789', '0854859658', ''),
(9, 'อาทิต', 'แสงสว่าง', 'ชาย', 'shadoeiei@gmail.com', '123456789', '0950032144', ''),
(10, 'พะโล้', 'ยายนง', 'หญิง', 'saharat@gmail.com', '123456', '0800743762', '');

-- --------------------------------------------------------

--
-- Table structure for table `cus_address`
--

CREATE TABLE `cus_address` (
  `cus_id` int(10) NOT NULL,
  `cus_house_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cus_canton` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cus_district` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cus_province` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cus_postal_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cus_address`
--

INSERT INTO `cus_address` (`cus_id`, `cus_house_number`, `cus_canton`, `cus_district`, `cus_province`, `cus_postal_code`) VALUES
(1, '45/1', 'นครปฐม', 'เมืองนครปฐม', 'นครปฐม', 73000),
(2, '991/1', 'Nong Din Daeng', 'Mueang', 'Nakhon Pathom', 73000),
(3, '885/87', 'Nong Krathum', 'Kamphaeng Saen', 'Nakhon Pathom', 73140),
(8, '17', 'สระกระเทียม', 'เมืองนครปฐม', 'นครปฐม', 73000),
(9, '17', 'สระกระเทียม', 'เมืองนครปฐม', 'นครปฐม', 73000),
(10, '17', 'สระกระเทียม', 'เมืองนครปฐม', 'นครปฐม', 73000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pg_id` int(10) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_branch` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `account_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pg_id`, `bank_name`, `bank_branch`, `account_name`, `account_number`) VALUES
(1, 'กสิกรไทย', 'บิ๊กซี นครปฐม', 'นายสหรัฐ สารสุวรรณ', '047-8-50999-5'),
(2, 'กรุงไทย', 'บิ๊กซี นครปฐม', 'นายวุฒิพงษ์ โพธิ์งาม', '678-0-02194-6'),
(3, 'ออมสิน', 'โลตัส กำแพงแสน', 'นายฐิติศักดิ์ มาสุข', '0-200-5077-7786'),
(12, 'กรุงเทพ', 'โลตัส นครปฐม', 'นายภูริภัทร รักคง', '252-5-58458-5'),
(16, 'กรุงเทพ', 'โลตัส นครปฐม', 'นายณัฐดนัย กุไรรัตน์', '252-5-58458-5'),
(18, 'กรุงเทพ', 'โลตัส นครปฐม', 'นางสาวพะโล้ ยายนง', '252-5-58458-5');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `ptg_id` int(10) NOT NULL,
  `ptg_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ptg_firstname` varchar(30) NOT NULL,
  `ptg_lastname` varchar(30) NOT NULL,
  `ptg_nickname` varchar(30) NOT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `ptg_email` varchar(50) NOT NULL,
  `ptg_password` varchar(30) NOT NULL,
  `ptg_phone` varchar(10) NOT NULL,
  `ptg_score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`ptg_id`, `ptg_img`, `ptg_firstname`, `ptg_lastname`, `ptg_nickname`, `sex`, `ptg_email`, `ptg_password`, `ptg_phone`, `ptg_score`) VALUES
(1, '6766642f58e038a4e2b117da9069516b.jpg', 'สหรัฐ', 'สารสุวรรณ', 'ดีโด้', 'ชาย', '614259057@webmail.npru.ac.th', '123456', '0800743762', 58),
(2, '2222.jpg', 'วุฒิพงษ์', 'โพธิ์งาม', 'นิวจอบ', 'ชาย', '614259046@webmail.npru.ac.th', '123456789', '0927312299', 148),
(3, '3333.jpg', 'ฐิติศักดิ์', 'มาสุข', 'เต้', 'ชาย', '614259011@webmail.npru.ac.th', '123456789', '0954865782', 74),
(12, '4444.jpg', 'ภูริภัทร', 'รักคง', 'หมีพู', 'ชาย', '614259023@webmail.npru.ac.th', '123456789', '0988497183', 0),
(16, 'cebc89739adf6615d6b6d5ced95776c9.jpg', 'ณัฐดนัย', 'กุไรรัตน์', 'เอิร์ท', 'ชาย', '614259015@webmail.npru.ac.th', '123456789', '0956854158', 0),
(18, '0652e34758d2d9e35f2d5e28b27fb873.jpg', 'PALO', 'YAINONG', 'PALO', 'หญิง', 'PALO@webmail.npru.ac.th', '123456', '0800749136', 0);

-- --------------------------------------------------------

--
-- Table structure for table `photographers_wage_rates`
--

CREATE TABLE `photographers_wage_rates` (
  `pwr_id` int(11) NOT NULL,
  `pwr_img` varchar(255) NOT NULL,
  `pwr_type` varchar(50) NOT NULL,
  `pwr_price_h` int(6) NOT NULL,
  `pwr_price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photographers_wage_rates`
--

INSERT INTO `photographers_wage_rates` (`pwr_id`, `pwr_img`, `pwr_type`, `pwr_price_h`, `pwr_price`) VALUES
(1, 'architecture.jpg', 'สถาปัตยกรรม', 2000, 3000),
(2, 'Event.jpg', 'อีเวนต์', 2000, 2500),
(3, 'Graduation.jpg', 'รับปริญญา', 2000, 2500),
(4, 'fashion.jpg', 'บุคคล/แฟชั่น', 2000, 2500),
(5, 'product1.jpg', 'สินค้า/อาหาร', 2000, 2500),
(6, 'wedding.jpg', 'งานแต่ง/พรีเวดดิ้ง', 2500, 3500);

-- --------------------------------------------------------

--
-- Table structure for table `ptg_address`
--

CREATE TABLE `ptg_address` (
  `pg_id` int(10) NOT NULL,
  `pg_house_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pg_canton` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pg_district` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pg_province` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pg_postal_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ptg_address`
--

INSERT INTO `ptg_address` (`pg_id`, `pg_house_number`, `pg_canton`, `pg_district`, `pg_province`, `pg_postal_code`) VALUES
(1, '45/1', 'นครปฐม', 'เมืองนครปฐม', 'นครปฐม', 73000),
(2, '87/8', 'หนองดินแดง', 'เมืองนครปฐม', 'นครปฐม', 73000),
(3, '548', 'นครปฐม', 'กำแพงแสน', 'นครปฐม', 73140),
(12, '17', 'สระกระเทียม', 'เมืองนครปฐม', 'นครปฐม', 73000),
(16, '26', 'กระทุ่มแบน', 'กระทุ่มแบน', 'สมุทรสาคร', 74110),
(18, '800', 'กระทุ่มแบน', 'เมืองนครปฐม', 'สมุทรสาคร', 73000);

-- --------------------------------------------------------

--
-- Table structure for table `ptg_electronicdevice`
--

CREATE TABLE `ptg_electronicdevice` (
  `pg_id` int(10) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `camera_lens` varchar(50) DEFAULT NULL,
  `studio_light` varchar(50) DEFAULT NULL,
  `camera_tripod` varchar(50) DEFAULT NULL,
  `memory_card` varchar(50) DEFAULT NULL,
  `battery` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ptg_electronicdevice`
--

INSERT INTO `ptg_electronicdevice` (`pg_id`, `brand`, `camera_lens`, `studio_light`, `camera_tripod`, `memory_card`, `battery`) VALUES
(1, 'Fujifilm GFX50s', 'GF 120 mm F/4 Macro R LM OIS WR', 'No', 'Yes', 'Yes', 'Yes'),
(2, 'Sony A9', 'FE 35 mm F1.4 GM', 'Yes', 'Yes', 'Yes', 'Yes'),
(3, 'Olympus OM-D EM1 MarkII', 'M.Zuiko Digital ED 40-150mm F2.8 PRO', 'Yes', 'Yes', 'Yes', 'Yes'),
(12, 'Connon', 'Connon Lens011', 'มี', 'มี', 'มี', 'มี'),
(16, 'Fujifilm X-E4', '-26.1MP APS-C X-Trans BSI CMOS 4 Sensor', 'มี', 'มี', 'มี', 'มี'),
(18, 'Connon', 'Connon Lens011', 'ไม่มี', 'มี', 'มี', 'มี');

-- --------------------------------------------------------

--
-- Table structure for table `ptg_imageresult`
--

CREATE TABLE `ptg_imageresult` (
  `img_id` int(10) NOT NULL,
  `pg_id` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name_img` varchar(50) DEFAULT NULL,
  `detail_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ptg_imageresult`
--

INSERT INTO `ptg_imageresult` (`img_id`, `pg_id`, `img`, `name_img`, `detail_img`) VALUES
(1, 1, '11111.jpg', 'งานรับปริญญา', 'อยู่กับเขา อย่าลืมลบแชตเรานะ'),
(2, 1, '11112.jpg', 'งานรับปริญญา', 'ตอนแรกผมนึกว่าแฟนผมสั้น แต่ที่ไหนได้ ผมโสด!'),
(3, 1, '11113.jpg', 'งานรับปริญญา', 'อบอุ่นกว่าพี่ ก็มีแต่ไมโครเวฟแล้วแหละ'),
(4, 1, '11114.jpg', 'งานรับปริญญา', 'ไม่ต้องมีหรอกลักยิ้ม แต่น้องยิ้มพี่ก็รักแล้ว'),
(5, 2, '22221.jpg', 'งานแฟชั่น', 'ถ้าคุยกับใครแล้วเขาหาย แปลว่าคุณควรเรียนหมอนะ'),
(6, 2, '22222.jpg', 'งานแฟชั่น', 'ถ้าใจแข็งเหมือนปากก็คงจะดี'),
(7, 2, '22223.jpg', 'งานแฟชั่น', 'ไม่อยากคุยก็บอก ไม่ต้องโกหกว่าอยากนอน'),
(8, 2, '22224.jpg', 'งานแฟชั่น', 'ถ้าเศรษฐกิจซบเซา หันมาซบเราได้นะ'),
(9, 3, '33331.jpg', 'งานอาร์ต', 'มีแชมพูอะไรบ้างที่สระแล้วผมไม่เหงา'),
(10, 3, '33332.jpg', 'งานอาร์ต', 'ที่ชอบถ่ายรูปหันข้าง เพราะอยากให้เธอหันมามองบ้างทางนี้'),
(12, 3, '33334.jpg', 'งานอาร์ต', 'จ้องอะไรนักหนา มีปัญหาหรือมีใจ');

-- --------------------------------------------------------

--
-- Table structure for table `ptg_social`
--

CREATE TABLE `ptg_social` (
  `pg_id` int(10) NOT NULL,
  `favorite_job1` varchar(50) DEFAULT NULL,
  `favorite_job2` varchar(50) DEFAULT NULL,
  `favorite_job3` varchar(50) DEFAULT NULL,
  `favorite_job4` varchar(50) DEFAULT NULL,
  `favorite_job5` varchar(50) DEFAULT NULL,
  `favorite_job6` varchar(50) NOT NULL,
  `message` varchar(100) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `youtube` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ptg_social`
--

INSERT INTO `ptg_social` (`pg_id`, `favorite_job1`, `favorite_job2`, `favorite_job3`, `favorite_job4`, `favorite_job5`, `favorite_job6`, `message`, `website`, `youtube`, `twitter`, `instagram`, `facebook`) VALUES
(1, 'รับปริญญา', 'อีเวนต์', 'สถาปัตยกรรม', 'บุคคล/แฟชั่น', 'สินค้า/อาหาร', 'งานแต่ง/พรีเวดดิ้ง', 'https://www.facebook.com/messages/t/100008231135362', 'Dom', 'Dom_Channel', 'Dombabeka', 'Domblackwhite', 'Dom Channel'),
(2, 'งานแต่ง/พรีเวดดิ้ง', 'รับปริญญา', 'อีเวนต์', 'สถาปัตยกรรม', 'บุคคล/แฟชั่น', 'สินค้า/อาหาร', 'https://www.facebook.com/messages/t/100002459657025', '-', '-', '-', '-', '-'),
(3, 'สินค้า/อาหาร', 'งานแต่ง/พรีเวดดิ้ง', 'รับปริญญา', 'อีเวนต์', 'สถาปัตยกรรม', 'บุคคล/แฟชั่น', 'https://www.facebook.com/messages/t/100010309003640', '-', '-', '-', '-', '-'),
(12, 'บุคคล/แฟชั่น', 'สินค้า/อาหาร', 'งานแต่ง/พรีเวดดิ้ง', 'รับปริญญา', 'อีเวนต์', 'สถาปัตยกรรม', 'https://www.facebook.com/messages/t/100007745357388', '-', '-', '-', '-', 'Phuriphat Rakkhong'),
(16, 'สถาปัตยกรรม', 'อีเวนต์', 'รับปริญญา', 'บุคคล/แฟชั่น', 'สินค้า/อาหาร', 'งานแต่ง/พรีเวดดิ้ง', 'https://www.facebook.com/messages/t/100003533684166', '-', '-', '-', '-', 'Earth\'s Nadanai'),
(18, '', 'อีเวนต์', '', 'บุคคล/แฟชั่น', '', 'งานแต่ง/พรีเวดดิ้ง', 'https://www.facebook.com/messages/t/100007745357388', 'Dom', '123456', 'asdasdasdasd', 'asdasdasdas', 'Phuriphat Rakkhong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contract_employment`
--
ALTER TABLE `contract_employment`
  ADD PRIMARY KEY (`cm_id`),
  ADD KEY `cus_id` (`cs_id`),
  ADD KEY `ptg_id` (`pg_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `cus_address`
--
ALTER TABLE `cus_address`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`ptg_id`);

--
-- Indexes for table `photographers_wage_rates`
--
ALTER TABLE `photographers_wage_rates`
  ADD PRIMARY KEY (`pwr_id`);

--
-- Indexes for table `ptg_address`
--
ALTER TABLE `ptg_address`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `ptg_electronicdevice`
--
ALTER TABLE `ptg_electronicdevice`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `ptg_imageresult`
--
ALTER TABLE `ptg_imageresult`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `ptg_social`
--
ALTER TABLE `ptg_social`
  ADD PRIMARY KEY (`pg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contract_employment`
--
ALTER TABLE `contract_employment`
  MODIFY `cm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cus_address`
--
ALTER TABLE `cus_address`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `ptg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `photographers_wage_rates`
--
ALTER TABLE `photographers_wage_rates`
  MODIFY `pwr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ptg_address`
--
ALTER TABLE `ptg_address`
  MODIFY `pg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ptg_electronicdevice`
--
ALTER TABLE `ptg_electronicdevice`
  MODIFY `pg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ptg_imageresult`
--
ALTER TABLE `ptg_imageresult`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ptg_social`
--
ALTER TABLE `ptg_social`
  MODIFY `pg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contract_employment`
--
ALTER TABLE `contract_employment`
  ADD CONSTRAINT `contract_employment_ibfk_1` FOREIGN KEY (`cs_id`) REFERENCES `customer` (`cus_id`),
  ADD CONSTRAINT `contract_employment_ibfk_2` FOREIGN KEY (`pg_id`) REFERENCES `photographer` (`ptg_id`);

--
-- Constraints for table `cus_address`
--
ALTER TABLE `cus_address`
  ADD CONSTRAINT `cus_address_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`pg_id`) REFERENCES `photographer` (`ptg_id`);

--
-- Constraints for table `ptg_address`
--
ALTER TABLE `ptg_address`
  ADD CONSTRAINT `ptg_address_ibfk_1` FOREIGN KEY (`pg_id`) REFERENCES `photographer` (`ptg_id`);

--
-- Constraints for table `ptg_electronicdevice`
--
ALTER TABLE `ptg_electronicdevice`
  ADD CONSTRAINT `ptg_electronicdevice_ibfk_1` FOREIGN KEY (`pg_id`) REFERENCES `photographer` (`ptg_id`);

--
-- Constraints for table `ptg_social`
--
ALTER TABLE `ptg_social`
  ADD CONSTRAINT `ptg_social_ibfk_1` FOREIGN KEY (`pg_id`) REFERENCES `photographer` (`ptg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
