-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 04:10 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snperp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `snpuser`
--

CREATE TABLE `snpuser` (
  `mid` int(11) NOT NULL,
  `surname` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `musername` text COLLATE utf8_unicode_ci NOT NULL,
  `mpassword` text COLLATE utf8_unicode_ci NOT NULL,
  `mlevel` int(11) NOT NULL,
  `dep` int(11) NOT NULL COMMENT '1=การตลาด,2=วิศว,3=ผลิต,4=การเงิน,5=โฟร์แมน,9=ไอที',
  `position` int(11) NOT NULL DEFAULT 0 COMMENT '1=ช่างเขียนแบบ,2=วิศวกร,3=อื่นๆ, 9=ผู้บริหาร',
  `NPrefix` text COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'คำนำหน้า',
  `NPosition` text COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ตำแหน่ง',
  `RoleID` int(11) DEFAULT 0,
  `status` int(2) DEFAULT NULL COMMENT 'สถานะ พนง.',
  `picture` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `snpuser`
--

INSERT INTO `snpuser` (`mid`, `surname`, `email`, `tel`, `name`, `musername`, `mpassword`, `mlevel`, `dep`, `position`, `NPrefix`, `NPosition`, `RoleID`, `status`, `picture`) VALUES
(78, 'แจ้งศรี', '-', '-', 'สุกัญญา', 'Sukunya', '7777', 3, 3, 1, NULL, NULL, 3, NULL, 'default.png'),
(83, ' กองสงค์', '-', NULL, 'สรายุทธ', 'sarayut', '1234', 3, 3, 1, NULL, NULL, 2, NULL, 'default.png'),
(15, 'ดูแลระบบ', 'yyy@gmail.com', '025489456', 'เจ้าหน้าที่', 'admin', '1234', 2, 4, 0, NULL, NULL, 2, NULL, 'default.png'),
(193, 'ข้อยุ่น	', '-', '063-5256347	', 'ธนรัตน์ (ก๊อต)	', 'thanarat', 'thanarat', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(60, 'บุญสายบัว', 'nontawat.snp@gmail.com', '', 'นนทวัฒน์', 'NONTAWAT', 'boonsaibour', 1, 2, 2, NULL, '', 0, NULL, 'default.png'),
(61, 'ตรียศกล', '-', NULL, 'ธนน', 'PHANTHAWAT', 'NO15012522', 4, 2, 2, NULL, NULL, 2, NULL, 'default.png'),
(100, 'พึ่งกลั่น', '-', '-', 'ภิลาวรรณ', 'pilawan', 'abc123ab', 2, 4, 0, NULL, NULL, 2, NULL, 'default.png'),
(194, 'ศรีสุวรรณ	', '-', '094-4930617	', 'ณัฐภูมิ (บี)	', 'natthabhum', 'natthabhum', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(112, 'ตรียศกล', 'tanon.snp@gmail.com', '-', 'ธนน', 'PHANTHAWAT', 'NO15012522', 3, 1, 0, 'นาย', NULL, 6, 1, 'default.png'),
(54, 'ลิเส็ม', 'manita.snp@gmail.com', '085-100-7766', 'มานิตา', 'tatar', '5239', 2, 1, 0, 'นางสาว', 'Senior Sales Executive', 0, 1, 'news_60487cdfd63ff.jpg'),
(53, NULL, 'golf.goff@gmail.com', NULL, 'Test', 'test', '0000', 3, 1, 9, NULL, NULL, 6, NULL, 'default.png'),
(56, 'วัฒนศิริเสรีกุล', 'puttiphon.w@gmail.com', '088-8835646', 'พุฒิพล', 'put', 'puzzie', 3, 1, 9, 'นาย', NULL, 2, NULL, 'default.png'),
(62, 'ปานเจริญ', 'chudaporn.snp@gmail.com', '0949429654', 'ชุดาพร', 'Chudaporn', 'Kung0105', 3, 2, 2, NULL, '', 0, NULL, 'Chudaporn.jpg'),
(63, 'แก้วขวัญ', 'rattajak.snp@gmail.com', NULL, 'รัฐจักร', 'Rattajak', '000000', 1, 2, 1, NULL, NULL, 0, NULL, 'default.png'),
(64, 'สบตุ๋ย', 'pojjana2532@gmail.com', '', 'พจนา', 'POJJANA', '14300', 1, 2, 1, NULL, '', 0, NULL, 'POJJANA.jpg'),
(65, 'สืบสุขปีติกุล', 'panumart.snp@gmail.com', '0945567662', 'ภานุมาส', 'Panumart', 'Mart031', 3, 2, 2, NULL, '', 0, NULL, 'ภานุมาส.jpg'),
(66, 'แสนรวยเงิน', 'pakorn.snp@gmail.com', NULL, 'ปกรณ์', 'PAKORN', 'Park777', 4, 2, 2, NULL, NULL, 2, NULL, 'default.png'),
(67, 'เพ็งสิงห์', 'kaidtisuk.snp@gmail.com', '', 'เกียรติศักดิ์', 'Kiadtisak', '0873567830', 1, 2, 2, NULL, '', 0, NULL, 'KIADTISAK.jpg'),
(68, 'ปานเจริญ', 'phiphat.snp@gmail.com', '', 'พิพัฒน์', 'PHIPHAT', '0949494498', 3, 2, 1, NULL, '', 0, NULL, 'Mod.jpg'),
(69, 'พัศชะสีห์', 'Nuttapon.snp@gmail.com', '092-9952249', 'ณัฐพล', 'Nuttapon', '2486', 1, 2, 1, NULL, '', 0, NULL, 'NUTTAPON.jpg'),
(70, 'วงศ์สิงห์', 'ohm.snp@gmail.com', '', 'ธนชาต', 'Tharnachart', '0871736839', 1, 2, 1, NULL, '', 0, NULL, 'THARNACHART.JPG'),
(71, 'เก่งไฉไล', 'supho.snp@gmail.com', '', 'สุโพ', 'SUPHO', 'KL1234', 1, 2, 2, NULL, '', 0, NULL, 'Supho.jpg'),
(198, 'flashdevmatong', 'user สำหรับทดสอบ', 'user สำหรับทดสอบ', 'devtong-MK', 'devtong', '1111', 4, 1, 0, NULL, '-', 0, NULL, 'samphan.jpg'),
(185, 'หาญณรงค์	', '-', '063-5256349	', 'โชติวัฒน์ (ทิว)	', 'chotiwat', 'chotiwat', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(186, 'กุลบ่าง	', '-', '062-8759723	', 'อมรเทพ (ปี่)	', 'amornthep', 'amornthep', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(75, 'พานทอง', 'atip.snp@gmail.com', '', 'อธิป', 'ATIP', '16112533', 1, 2, 1, NULL, '', 0, NULL, 'ATIP.jpg'),
(76, 'สุมกระจิว', 'cheewin.snp@gmail.com', '-', 'ชีวินทร์', 'CHEEWIN', 'khuncheewin', 1, 2, 2, NULL, NULL, 0, NULL, 'default.png'),
(101, 'จันทร์เพชร', 'aomlovely_1@hotmail.com', '092-092-7832', 'ชวัลธร', 'Chawanthorn', 'aomlovely_1', 1, 4, 0, NULL, NULL, 2, NULL, 'default.png'),
(102, 'บัวอุไร', 'chanokporn.snp@gmail.com', '097-073-6364', 'ชนกพร', 'chanokporn', 'muihlee', 1, 4, 0, NULL, NULL, 2, NULL, 'default.png'),
(195, 'แจ้งคล้าย	', '-', '094-5567652	', 'ชวลิต (ปาร์ค)	', 'chawalit', 'chawalit', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(104, 'เนตรใส', 'worrapreya.snp@gmail.com', '061-819-6040', 'วรปรียา', 'ปู', '2929', 2, 1, 0, 'นางสาว', ' Marketing Office', 0, 1, 'worrapreya.jpg'),
(105, 'วานิชกมลนันท์', 'parkpoome.snp@gmail.com', NULL, 'ภาคภูมิ', 'parkpoome', '1234', 4, 2, 2, NULL, NULL, 2, NULL, 'default.png'),
(107, 'ชาห์', 'nontawat.snp@gmail.com', NULL, 'นัยนา', 'Naina', 'naina0037', 1, 2, 2, NULL, NULL, 0, NULL, 'default.png'),
(197, 'แสนปัญญา	', '-', '094-4838167	', 'ขันติ (บุ๋ม)	', 'khanti', 'khanti', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(109, 'กองสงค์', '-', '-', 'สรายุทธ', 'sarayut', '1234', 4, 2, 9, NULL, NULL, 2, NULL, 'default.png'),
(113, 'ใบรักษา', 'Bairaksa', '๋Jenjira', 'เจนจิรา', 'Jenjira', 'teang2534', 1, 4, 0, NULL, NULL, 2, NULL, 'default.png'),
(196, 'ชัยเมืองพล	', '-', '063-4641353	', 'จักรพันธ์ (จักร)	', 'jakkapan', 'jakkapan', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(187, 'จัดระเบียบ	', '-', '062-7980006	', 'อนุสรณ์ (ปอนด์3)	', 'anusorn', 'anusorn', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(118, 'ชูเอียด', 'Pattama.snp.post@gmail.com', '061-823-9825', 'ปัทมาภรณ์', 'pat', '4367', 2, 1, 0, 'นางสาว', 'Sales Executive', 0, 1, 'patthama.jpg'),
(119, 'บุญล้อม', 'surabot.snp@gmail.com', '-', 'สุรบถ', 'surabot', 'bunlom', 1, 2, 2, NULL, NULL, 0, NULL, 'surabot.png'),
(120, 'เชื้อกรด', 'sarawuth.snp@gmail.com', '0863273722', 'สราวุธ', 'sarawuth', 'chueakrod', 1, 2, 1, NULL, 'เขียนแบบ', 0, NULL, 'SARAWUTH.jpg'),
(188, 'พนาลี', '-', '087-5554991', 'วิษณุ	', 'witsanu', 'witsanu', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(127, 'จักรบุญมา', 'chutichai.snp@gmail.com', '-', 'ชุธิชัย', 'Chutichai', 'Jukbunma12', 1, 2, 2, NULL, '', 0, NULL, 'Chutichai.jpg'),
(128, 'เมฆธวัชชัยกุล', 'tawichai.snp@gmail.com', '089-771-0595', 'ทวีชัย', 'tawichai', 'tawichai1234', 0, 0, 0, NULL, '', 2, NULL, 'default.png'),
(203, 'devtong-AC', 'samphan@gmail.com', 'user สำหรับทดสอบ', 'devtong-AC', 'devtong', '4444', 2, 4, 0, NULL, NULL, 0, NULL, 'default.png'),
(130, 'พึ่งกลั่น', '-', '-', 'ศุทธิ', 'suthi', 'suthi1234', 0, 0, 0, NULL, NULL, 2, NULL, 'default.png'),
(131, 'วัฒนศิริเสรีกุล', 'puttiphon.w@gmail.com', '088-8835646', 'พุฒิพล', 'put', 'puzzie', 4, 2, 9, 'นาย', NULL, 2, NULL, 'default.png'),
(132, 'วัฒนศิริเสรีกุล', 'puttiphon.w@gmail.com', '088-8835646', 'พุฒิพล', 'put', 'puzzie', 3, 3, 9, 'นาย', NULL, 2, NULL, 'default.png'),
(133, 'วัฒนศิริเสรีกุล', 'puttiphon.w@gmail.com', '088-8835646', 'พุฒิพล', 'put', 'puzzie', 2, 4, 9, 'นาย', NULL, 2, NULL, 'default.png'),
(189, 'บัวลอย', '-', '061-8196038	', 'มุจลินทร์ (ปอนด์1)	', 'mutjalin', 'mutjalin', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(190, 'จันทร์มี	', '-', '063-5256345	', 'มงคล (ขวัญ)	', 'mongkol', 'mongkol', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(136, 'ซ่อผูก', '-', '-', 'ปวีณา', 'Paweena', 'Chophuk', 1, 4, 0, NULL, NULL, 0, NULL, 'default.png'),
(139, 'สมทรง', '-', '-', 'อันธิกา', 'Anthika', '6607', 1, 4, 0, NULL, NULL, 2, NULL, 'default.png'),
(191, 'ชาวบ้านดอย	', '-', '085-1115344	', 'ประกอบ (ตู่)	', 'prakhob', 'prakhob', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(192, 'อุทธา	', '-', '-', 'นราธร (ทอม)	', 'narathorn', 'narathorn', 1, 5, 0, NULL, NULL, 0, NULL, 'default.png'),
(143, 'สีดาใหญ่', 'warunee.snp@gmail.com', '086-809-5550', 'วารุณี', 'Warunee', 'Sidayai6605', 2, 1, 0, 'นางสาว', 'Sale Executive', 0, 1, 'warunee.jpg'),
(155, 'Chen', '', NULL, 'Thearith', 'Thearith', '0943562621', 1, 2, 2, NULL, NULL, 0, NULL, 'default.png'),
(156, 'ด้วงสุภา', '-', NULL, 'ชุดาภา', 'Chudapa', '110104', 1, 3, 1, NULL, NULL, 3, NULL, 'default.png'),
(154, 'วรกุลทรัพย์', 'weerapat.snp@gmail.com', NULL, 'วีรภัทร', 'weerapat', 'weerapat555', 3, 2, 2, NULL, NULL, 0, NULL, 'default.png'),
(146, 'เดียวตระกูล', '-', '-', 'ธัญญาเรศ', 'Thunyares', 'T11662', 1, 4, 0, NULL, NULL, 2, NULL, 'default.png'),
(147, 'ศรีเจริญ', '-', '-', 'รัตนพล', 'ratanapol', 'R3362', 1, 2, 1, NULL, '', 0, NULL, 'RATTANAPON.JPG'),
(148, 'ศรีวัชรเมธาบดี', 'suwimon.snp@gmail.com', '-', 'สุวิมล', 'suwimon', '22062', 2, 1, 0, 'นางสาว', 'Sale Executive', 0, 1, 'suwimon.jpg'),
(150, 'ดีเหนี่ยง', 'phornpen.snp@gmail.com', '063-525-6348', 'พรเพ็ญ', 'phornpen', 'phornpen0962', 2, 1, 0, 'นางสาว', 'Sale Executive', 0, 1, 'phornpen.jpg'),
(151, 'ฝ่ายผลิต', '-', '-', 'ส่วนกลาง(ผลิต)', 'Production', '111062', 1, 3, 1, NULL, NULL, 3, NULL, 'default.png'),
(152, 'มีเบ้า', '-', NULL, 'วรรณนิสา', 'Wannisa', '261019', 1, 3, 1, NULL, NULL, 3, NULL, 'default.png'),
(157, 'นาคนิล', '-', NULL, 'สุพัตรา', 'Supattar', '25162526', 1, 3, 1, NULL, NULL, 3, NULL, 'default.png'),
(184, 'กัน', '-', '-', 'กัน', 'gun969', '0968828001', 4, 9, 0, NULL, NULL, 0, NULL, 'default.png'),
(159, 'หวังดี', '-', '061-8196041', 'สมศักดิ์ (โม)', 'somsak', 'somsak', 1, 5, 3, NULL, NULL, 0, NULL, 'default.png'),
(160, 'แก้วใจรักษ์', '-', '063-4747137', 'ปรัชญา (บาส)', 'pachya', 'pachya', 1, 5, 3, NULL, NULL, 0, NULL, 'default.png'),
(161, 'สมสาร์', '-', '087-7988088', 'มานพ (หนู)', 'manop', 'manop', 1, 5, 3, NULL, NULL, 0, NULL, 'default.png'),
(162, 'เนียมทอง', '-', '061-8196039', 'ปรีชา (ดอน)', 'preecha', 'preecha', 1, 5, 3, NULL, NULL, 0, NULL, 'default.png'),
(163, 'Phuthong', 'flashdevmatong@gmail.com', '095-8656287', 'samphan', 'devtong', 'dev123456', 5, 9, 0, NULL, NULL, 0, NULL, 'samphan.jpg'),
(167, 'สาทรานนท์', 'krit.test10@gmail.com', '095-3762299', 'สัณฑสักก์ ', 'Santrasak', 'Snp080863', 1, 9, 0, NULL, NULL, 0, NULL, 'santrasak.jpg'),
(202, 'devtong', 'user สำหรับทดสอบ', 'user สำหรับทดสอบ', 'devtong-PRD', 'devtong', '3333', 4, 3, 0, NULL, NULL, 0, NULL, 'samphanPRD.jpg'),
(200, 'devtong', 'user สำหรับทดสอบ', 'user สำหรับทดสอบ', 'devtong-EN', 'devtong', '2222', 4, 2, 2, NULL, NULL, 0, NULL, 'samphanEN.jpg'),
(201, 'สัณฑสักก์', 'user สำหรับทดสอบ	', 'user สำหรับทดสอบ	', 'SantrasakEN', 'SantrasakEN', 'snp110182', 1, 2, 2, NULL, '', 0, NULL, 'SantrasakEN.jpg'),
(204, 'devtong', 'user สำหรับทดสอบ', 'user สำหรับทดสอบ', 'devtong-FR', 'devtong', '5555', 4, 5, 0, NULL, NULL, 0, NULL, 'samphanFR.jpg'),
(205, 'สัณฑสักก์', 'user สำหรับทดสอบ', 'user สำหรับทดสอบ', 'SantrasakAC', 'SantrasakAC', 'snp110182', 1, 4, 0, NULL, '', 0, NULL, 'SantrasakAC.jpg'),
(206, 'สัณฑสักก์', 'user สำหรับทดสอบ', 'user สำหรับทดสอบ', 'SantrasakMK', 'SantrasakMK', 'snp110182', 1, 1, 0, NULL, '', 0, NULL, 'SantrasakMK.jpg'),
(207, 'สัณฑสักก์', 'user สำหรับทดสอบ', 'user สำหรับทดสอบ', 'SantrasakPRD', 'SantrasakPRD', 'snp110182', 1, 3, 0, NULL, NULL, 0, NULL, 'SantrasakPRD.jpg'),
(208, 'สัณฑสักก์', 'user สำหรับทดสอบ', 'user สำหรับทดสอบ', 'SantrasakFR', 'SantrasakFR', 'snp110182', 1, 5, 0, NULL, NULL, 0, NULL, 'SantrasakFR.jpg'),
(210, '', '-', '-', 'วิศวกร ทุกคน', 'people', 'people', 1, 2, 2, NULL, NULL, 0, NULL, 'allengineer.jpg'),
(211, '', '-', '-', 'เขียนแบบ ทุกคน', 'people', 'people', 1, 2, 1, NULL, NULL, 0, NULL, 'alldraft.jpg'),
(212, 'ตรียศกล', 'tanon.snp@gmail.com', '-', 'ธนน', 'PHANTHAWAT', 'NO15012522', 3, 4, 0, 'นาย', NULL, 6, 1, 'default.png'),
(213, 'ตรียศกล', 'tanon.snp@gmail.com', '-', 'ธนน', 'PHANTHAWAT', 'NO15012522', 3, 3, 0, 'นาย', NULL, 6, 1, 'default.png'),
(214, 'ตรียศกล', 'tanon.snp@gmail.com', '-', 'ธนน', 'PHANTHAWAT', 'NO15012522', 3, 5, 0, 'นาย', NULL, 6, 1, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `snpuser`
--
ALTER TABLE `snpuser`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `snpuser`
--
ALTER TABLE `snpuser`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
