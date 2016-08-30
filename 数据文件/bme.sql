-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 08 月 24 日 05:41
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bme`
--
CREATE DATABASE IF NOT EXISTS `bme` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bme`;

-- --------------------------------------------------------

--
-- 表的结构 `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员';

--
-- 转存表中的数据 `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `imgUrl` text NOT NULL,
  `intro` text NOT NULL,
  `degree` text NOT NULL COMMENT '学位',
  `researchInterest` text NOT NULL,
  `education` text NOT NULL,
  `experience` text NOT NULL,
  `personalHonor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='成员介绍';

--
-- 转存表中的数据 `members`
--

INSERT INTO `members` (`name`, `email`, `imgUrl`, `intro`, `degree`, `researchInterest`, `education`, `experience`, `personalHonor`) VALUES
('Yuying Zhao', 'yyzhaoyuying@163.com', 'images/members/Yuying Zhao.png', '不忘初心，方得始终。', 'Research assistant', '', '', '', ''),
('Xinru You', 'youxr5@163.com', 'images/members/Xinru You.png', 'God helps those who help themselves.', 'Master Candidates', '', '', '', ''),
('Shaohan Zhang', 'blair0608@163.com', 'images/members/Shaohan Zhang.png', '有趣的人：读书，行路，见人，历事，经世。', 'Doctoral Candidates', '', '', '', ''),
('Jun Huang', 'hjnature@163.com', 'images/members/Jun Huang.png', 'To save time is to lengthen life', 'Doctoral Candidates', '', '', '', ''),
('Xing Chen', 'cgeminix@163.com', 'images/members/Xing Chen.png', '你不能改变事实，但可以改变态度～你不能改变结局，但可以改变心境～', 'Master Candidates', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `publications`
--

CREATE TABLE IF NOT EXISTS `publications` (
  `classification` text NOT NULL,
  `year` year(4) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `publications`
--

INSERT INTO `publications` (`classification`, `year`, `info`) VALUES
('Book Chapter', 2016, '1. Basit Yameen，Jun Wu，Cristian Vilos，Andrew Whyte，David Werstler，Lori Pollit，Omid C. Farokhzad，Stimuli-responsive nanotheranostics，Nanotheranostics for personalized medicine, Prof. P. Couvreur and Prof. S. Mura, World Scientific, pp 267-296, 2016/4\r\n'),
('Peer Reviewed Publications\r\n', 2016, 'Liu, Y; Gunda, V; Zhu, X; Xu, X; Wu, J; Askhatova, D; Farokhzad, O.C.; Parangi, S; Shi, J, Theranostic near-infrared fluorescent nanoplatform for imaging and systemic siRNA delivery to metastatic anaplastic thyroid cancer. Proceedings of the National Academy of Sciences 2016, (IN PROOF)\r\n'),
('Peer Reviewed Publications', 2016, 'Li, Q; Wen, Y; You, X; Zhang, F; Shah, V; Chen, X; Tong, D; Yin, L; Wei, X; Li, J; Wu, J*; Xu, X*; Development of reactive oxygen species (ROS)-responsive nanoplatform for targeted oral cancer therapy. Journal of Materials Chemistry B 2016, (DOI: 10.1039/C6TB01016D) （Corresponding author)\r\n'),
('Peer Reviewed Publications', 2016, 'Zhao, H; Lin Z; Yildirimer, L; Dhinakar, A; Zhao, X*; Wu, J*; Polymer-based nanoparticles for protein delivery: design, strategies and applications. Journal of Materials Chemistry B 2016, 4, 4060-4071 （Corresponding author)\r\n'),
('Peer Reviewed Publications', 2016, 'Chen, F#; Wu, J#; Zheng, C; Zhu, J; Zhang, Y; You, X; Cai, F; Shah, V.; Liu, J. and Ge, L., TPGS modified reduced bovine serum albumin nanoparticles as a lipophilic anticancer drug carrier for overcoming multidrug resistance. Journal of Materials Chemistry B 2016, 4, 3959-3968 (Equal Contribution)\r\n'),
('Peer Reviewed Publications', 2016, 'Nazila Kamaly, Gabrielle Fredman, Jhalique Jane R Fojas, Manikandan Subramanian, Won II Choi, Katherine Zepeda, Cristian Vilos, Mikyung Yu, Suresh Gadde, Jun Wu, Jaclyn Milton, Renata Carvalho Leitao, Livia Rosa Fernandes, Moaraj Hasan, Huayi Gao, Vance Nguyen, Jordan Harris, Ira Tabas, Omid C Farokhzad, Targeted Interleukin-10 Nanotherapeutics Developed with a Microfluidic Chip Enhance Resolution of Inflammation in Advanced Atherosclerosis. ACS Nano 2016, 10 (5), 5280–5292\r\n'),
('Peer Reviewed Publications', 2016, 'Xu, X.# ; Wu, J.#; Liu, Y.; Yu, M.; Zhao, Z.; Zhu, X.; Bhasin, S.; Li, Q.; Ha, E.; Shi, J.; Farokhzad, O.C., Ultra pH-Responsive and Tumor-Penetrating Nanoplatform for Targeted siRNA Delivery with Robust Anti-Cancer Efficacy. Angewandte Chemie International Edition 2016, 55, 7091-7094 (Equal Contribution)\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
