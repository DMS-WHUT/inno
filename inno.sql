-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-12-01 16:19:03
-- 服务器版本： 10.0.21-MariaDB-log
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inno`
--
CREATE DATABASE IF NOT EXISTS `inno` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inno`;

-- --------------------------------------------------------

--
-- 表的结构 `article`
--
-- 创建时间： 2015-10-04 05:36:57
-- 最后更新： 2015-10-04 05:36:57
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `keyword` varchar(100) COLLATE utf8_bin NOT NULL,
  `digest` text COLLATE utf8_bin NOT NULL,
  `author` varchar(100) COLLATE utf8_bin NOT NULL,
  `refer_doc` text COLLATE utf8_bin NOT NULL,
  `last_date` date NOT NULL,
  `pdf_name` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `category_id`, `title`, `keyword`, `digest`, `author`, `refer_doc`, `last_date`, `pdf_name`) VALUES
(1, 1, '中国企业网络化制造模式与发展策略的研究*', '全球化制造 全球产业链 网络化制造 应用模式 系统结构 区域信息系统 发展策略', '在中国国家863高技术发展计划项目《面向网络化制造的ASP应用服务平台开发与应用》支持下，针对中国企业发展网络化制造的需求开展研究。对全球化制造的产业链结构进行分析，阐述不同类型企业在全球化产业链中所处地位、竞争优势、侧重的核心业务范围及其\r\n发展特征。根据对全球化制造现状与发展趋势的分析，提出符合市场规律和技术发展趋势的网络化制造的３种基本模式———龙头企业为核心的网络化制造、基于ASP的网络化制造、形成互联的网络化制造（由前两种基本模式\r\n的系统互联构成）。\r\n分析形成网络化制造三种基本模式的市场背景。在龙头企业为核心的网络化制造模式中，以龙头企业为核心将上下游企业整合为产业链，组成动态虚拟企业，实现敏捷响应市场、降低制造成本、优化供应链，使产品在整个产业链上实现每个过程的合理增值。在基于ASP的网络化制造模式中，企业通过采用ASP提供的应用服务，不仅将缩短企业信息化建设周期及降低信息化总体成本，而且使得区域或行业内各具特色的企业（特别是中小企业）通过采用ASP应用服务，能够更有效地整合优势资源（人力资源、技术资源、设计资源、制造资源、产品资源、市场渠道等），加强企业间的协同，提高企业核心竞争力，从而形成具备整体优势、实现双赢及多赢的供应链、产业链及增值链。形成互联的网络化制造模式，是适应全球制造环境下多元化市场的需求而产生的。在面向多元化市场以及优化产业链及价值链等方面需求的拉动下，逐渐形成网状的供应链关系，即一个供应商往往需要加入多个不同的供应链体系，由此产生多个不同商业背景的网络化制造系统之间的互联。阐述龙头企业为核心的网络化制造、基于ASP的网络化制造、形成互联的网络化制造等３种网络化制造基本模式的应用模式、系统结构，并给出典型的应用实例。针对中国经济发展水平和企业的实际情况，分析发达地区、次发达地区和欠发达地区制造业的区域特征，提出不同区域的发展网络化制造的基本策略。发达地区网络化制造的发展重点是构建龙头企业带动的全球化制造系统，构建面向全球化制造的互联平台；次发达地区网络化制造的发展重点：构建面向全球化制造的行业或区域的ASP 平台，构建龙头企业带动的全球化制造系统；欠发达地区网络化制造的发展重点：加入相关产业链的全球化制造系统，构建面向全球化制造的行业或区域ASP平台。', '谢庆生 贵州省 贵阳市 550003 贵州工业大学 CAD/CIMS 工程技术中心 qsxie qzcims.com.cn', '１　谢庆生．我国制造业ＡＳＰ的模式与发展策略．中国制造业信息化，２００３（１）：６６ ７０\r\n２　严隽琪．数字化与网络化制造．工业工程与管理，２０００（１）：８ １１\r\n３　张智勇，吴波，杨叔子．网络协同制造系统的构想与实现．中国科学基金，２００３（１）：１６ ２０\r\n４　陈菊红，汪应洛．灵捷虚拟企业信息平台的功能及合作机制研究．制造业信息化，２００２，２４（２）：４１ ４５\r\n５　韩新民．我国发展网络化制造面临的挑战．中国软科学，２００２（４）：３６ ３７\r\n６　王仲奇，李西宁，姜澄宇．面向关中高新技术产业带的网络化制造．计算机集成制造系统，２００３，９（８）：７１０ ７１５\r\n７　郝泳涛，李启炎．基于Ｉｎｔｅｒｎｅｔ虚拟企业的ＡＳＰ框架模型．计算机工程，２００２，２８（３）：２９ ３１\r\n８　周光辉，江平宇，张映峰．基于Ｗｅｂ的网络化分散制造电子服务操作平台．计算机集成制造系统，２００２（８）：２９４ ２９８\r\n９　Ｇｈｏｓｈ Ａ， Ｍａｒｐｌｅｓ Ｄ， Ｍｏｙｅｒ Ｓ．ＡＳＰ Ｐｅｒｓｐｅｃｔｉｖｅｓ ｏｎ Ｎｅｔｗｏｒｋｅｄ Ａｐｐｌｉａｎｃｅｓ．ＩＥＥＥ Ｉｎｔｅｒｎａｔｉｏｎａｌ Ｃｏｎｆｅｒｅｎｃｅ ｏｎ\r\nＣｏｍｍｕｎｉｃａｔｉｏｎｓ，２００１，４：１２９９ １３０２\r\n１０　ＡｈｎＪＧ，ＬｅｅｍＣＳ，ＹａｎｇＪＨ．ＡＦｒａｍｅｗｏｒｋｆｏｒＣｅｒｔｉｆｉｃａｔｉｏｎａｎｄＡｕｄｉｔｏｆＡｐｐｌｉｃａｔｉｏｎＳｅｒｖｉｃｅＰｒｏｖｉｄｅｒＡＳＰ．Ｊｏｕｒｎａｌｏｆ\r\nＳｙｓｔｅｍｓＩｎｔｅｇｒａｔｉｏｎ，２００１，１０（３）：２３９ ２５２\r\n１１　Ｆｏｒｔｕｎｅ Ａ，Ｈｏｗａｒｄ Ｅ．Ａｌｄｒｉｃｈ，Ａｃｑｕｉｒｉｎｇ Ｃｏｍｐｅｔｅｎｃｅａｔａ Ｄｉｓｔａｎｃｅ：Ａｐｐｌｉｃａｔｉｏｎ Ｓｅｒｖｉｃｅ Ｐｒｏｖｉｄｅｒｓａｓａ Ｈｙｂｒｉｄ\r\nＯｒｇａｎｉｚａｔｉｏｎａｌＦｏｒｍ．ＪｏｕｒｎａｌｏｆＩｎｔｅｒｎａｔｉｏｎａｌＥｎｔｒｅｐｒｅｎｅｕｒｓｈｉｐ，２００３，１（１）：１０３ １１９\r\n１２　ＭａｒｃｈａｎｄＮ．ＡｎＥｃｏｎｏｍｉｃＭｏｄｅｌｔｏＳｔｕｄｙＤｅｐｅｎｄｅｎｃｉｅｓｂｅｔｗｅｅｎＩｎｄｅｐｅｎｄｅｎｔＳｏｆｔｗａｒｅＶｅｎｄｏｒｓａｎｄＡｐｐｌｉｃａｔｉｏｎＳｅｒｖｉｃｅ\r\nＰｒｏｖｉｄｅｒｓ．ＥｌｅｃｔｒｏｎｉｃＣｏｍｍｅｒｃｅＲｅｓｅａｒｃｈ，２００１，１（３）：３１５ ３３４\r\n１３　ＤａｎｉｅｌＧ．Ｃｏｎｗａｙ，ＳｕｐｐｌｉｅｒＡｆｆｉｌｉａｔｅｄＥｘｔｅｎｄｅｄＳｕｐｐｌｙＣｈａｉｎＢａｃｋｂｏｎｅｓ．ＩｎｆｏｒｍａｔｉｏｎＳｙｓｔｅｍｓＦｒｏｎｔｉｅｒｓ，２０００，２（１）：５７ ６４\r\n１４　ＭｏｌｉｎａＡ．Ａ ＶｉｒｔｕａｌＥｎｔｅｒｐｒｉｓｅｉｎ Ｍｅｘｉｃｏ：ｆｒｏｍＣｏｎｃｅｐｔｓｔｏＰｒａｃｔｉｃｅ．ＪｏｕｒｎａｌｏｆＩｎｔｅｌｌｉｇｅｎｔａｎｄＲｏｂｏｔｉｃＳｙｓｔｅｍｓ，１９９９，\r\n２６（３）：２８９ ３０２\r\n１５　Ｐｒｅｓｌｅｙ Ａ．Ｅｎｇｉｎｅｅｒｉｎｇｔｈｅ ＶｉｒｔｕａｌＥｎｔｅｒｐｒｉｓｅ：Ａｎ ＡｒｃｈｉｔｅｃｔｕｒｅＤｒｉｖｅｎ Ｍｏｄｅｌｉｎｇ Ａｐｐｒｏａｃｈ．ＩｎｔｅｒｎａｔｉｏｎａｌＪｏｕｒｎａｌｏｆ\r\nＦｌｅｘｉｂｌｅＭａｎｕｆａｃｔｕｒｉｎｇＳｙｓｔｅｍｓ，２００１，１３（２）：１４５ １６２\r\n１６　ＣａｍａｒｉｎｈａＭａｔｏｓＬ Ｍ．ＴｏｗａｒｄｓａｎＡｒｃｈｉｔｅｃｔｕｒｅｆｏｒＶｉｒｔｕａｌＥｎｔｅｒｐｒｉｓｅｓ．ＪｏｕｒｎａｌｏｆＩｎｔｅｌｌｉｇｅｎｔＭａｎｕｆａｃｔｕｒｉｎｇ，１９９８，９（２）：１８９ １９９\r\n１７　ＢｒｅｍｅｒＣＦ．ＶＩＲＴＥＣ：ＡｎＥｘａｍｐｌｅｏｆａＢｒａｚｉｌｉａｎｖｉｒｔｕａｌｏｒｇａｎｉｚａｔｉｏｎ．ＪｏｕｒｎａｌｏｆＩｎｔｅｌｌｉｇｅｎｔ Ｍａｎｕｆａｃｔｕｒｉｎｇ，２００１，１２\r\n（２）：２１３ ２２１\r\n１８　ＪａｎｏｗｓｋｉＴ．ＭｏｄｅｌｌｉｎｇａｎＥｘｔｅｎｄｅｄ／ＶｉｒｔｕａｌＥｎｔｅｒｐｒｉｓｅｂｙｔｈｅＣｏｍｐｏｓｉｔｉｏｎｏｆＥｎｔｅｒｐｒｉｓｅ Ｍｏｄｅｌｓ．ＪｏｕｒｎａｌｏｆＩｎｔｅｌｌｉｇｅｎｔ\r\nａｎｄＲｏｂｏｔｉｃＳｙｓｔｅｍｓ，１９９９，２６ （３）：３０３ ３２４\r\n１９　ＣａｓａｔｉＦ．ＭｏｄｅｌｉｎｇａｎｄＭａｎａｇｉｎｇＩｎｔｅｒａｃｔｉｏｎｓａｍｏｎｇＢｕｓｉｎｅｓｓＰｒｏｃｅｓｓｅｓ．ＪｏｕｒｎａｌｏｆＳｙｓｔｅｍｓＩｎｔｅｇｒａｔｉｏｎ，２００１，１０ （２）：\r\n１４５ １６８\r\n２０　ＴｈａｋｕｒＭ，ＳｒｉｖａｓｔａｖａＢ Ｎ．Ｍａｎａｇｉｎｇ ＡｌｌｉａｎｃｅＩｎｔｒｉｃａｃｉｅｓ：ＡｎＥｘｐｌｏｒａｔｏｒｙＳｔｕｄｙｏｆＵＳａｎｄＩｎｄｉａｎ ＡｌｌｉａｎｃｅＰａｒｔｎｅｒｓ．\r\nＡｓｉａＰａｃｉｆｉｃＪｏｕｒｎａｌｏｆＭａｎａｇｅｍｅｎｔ，２０００，１７ （１）：１５５ １７３', '2015-01-01', '20098289045.pdf'),
(2, 1, '基于虚拟样机技术的丘陵地带小型甘蔗联合收割机开发研究*', '小型甘蔗联合收割机 丘陵地带 虚拟样机技术 数字化农业机械产品虚拟设计平台 扶蔗装置 砍蔗机构 断蔗机构 剥叶元件', '在中国国家自然科学基金、广西壮族自治区科技攻关计划项目的资助下，以丘陵地带小型甘蔗联合收割机为典型产\r\n品，探索农业机械数字化设计技术。以中国南方及东南亚地区甘蔗种植地区小田块、以丘陵为特征复杂的地理条件、不良的交通\r\n状况、暂时无法统一和规范的种植模式等四大特点为需求进行丘陵地带甘蔗联合收割机设计。\r\n对中国甘蔗主产区———广西地区蔗地进行甘蔗弯曲程度、甘蔗倒伏情况、丘陵地带地势地貌测量等项田间调查，并获得相应\r\n统计数据。以最大弯曲挠度与株高之比（犺／犾）作为衡量，得出弯曲程度的定性定义，将弯曲程度分为轻微弯曲、一般弯曲、严重弯\r\n曲等３类，获得上述３类弯曲比例为６３．９％，３３．３％，２．８％ ；相对于机器前进方向，把甘蔗分为顺倒伏、逆倒伏、侧倒伏等３种基\r\n本倒伏状态，建立以倒伏姿态角α、倒伏角β、侧偏角γ 为变量的甘蔗倒伏模型，统计出甘蔗倒伏程度，给出倒伏姿态角α 的分布曲\r\n线和甘蔗侧偏角γ 的分布曲线。\r\n归纳出甘蔗五大标准收割工序（扶蔗、根部收割、断尾、剥叶和捆扎），将可视化虚拟设计分成扶蔗设计、砍蔗设计、断尾设计、\r\n剥叶设计和全局设计协调等五大功能模块，并进行任务和功能赋予，提出丘陵地带小型甘蔗联合收割机虚拟样机设计开发的总体\r\n框架。该框架包括确定约束条件、初始条件，开始总体方案初步设计，功能机构建模和仿真，整机建模，建立丘陵甘蔗联合收割机\r\n械性能评价专家系统，优化设计，实验验证等７个层次。利用软件集成框架ＰＤＭ 封装和集成工具并结合人工智能技术构建以丘\r\n陵地带小型甘蔗联合收割机为典型代表的数字化农业机械产品的虚拟设计环境，该虚拟集成设计平台分为界面层、应用工具层、\r\n对象管理层和支撑环境层等４个层次。\r\n在该虚拟集成设计平台上进行了丘陵地带小型甘蔗联合收割机关键部件———扶蔗装置、砍蔗机构、断尾机构、剥叶元件的虚\r\n拟设计开发。利用三维软件IDEAS结合创新设计，构造出扶蔗装置的多种设计方案，通过优化设计的扶蔗器能扶起左右倒伏及\r\n前后倒伏的甘蔗。以砍蔗机构为对象，建立起完整的虚拟设计步骤，这包括建立评价指标的计算机模型，在评价参数权重规则的\r\n指导下进行功能结构和整个机构的虚拟设计，在设计中特别注意利用各类分析软件进行功能分析。定义断尾所必须的输送、夹\r\n持、切断、排出四大工作过程，在此基础上开发出一种新型断尾机构。构建了具有互相独立、各不相扰的“正交实验”、“优化设计”、\r\n“疲劳分析”等３大功能的甘蔗联合收割机剥叶元件虚拟试验平台，通过数值模拟正交设计方法在ＡＮＳＹＳ上建立剥叶元件的有限\r\n元分析模型，利用统计学软件ＳＰＳＳ找出不同参数变化对计算结果的影响规律，求出各因素水平的最佳组合，用户只需要输入所需\r\n的参数就可以对不同结构和装夹方式的剥叶元件实施有限元分析计算，从而高效快捷地实现剥叶元件的虚拟设计。\r\n采用基于知识的专家评价系统评价设计方案，采用自顶向下的装配方法虚拟装配甘蔗联合收割机整机，对设计方案的评估参\r\n数指标集（含技术性能、可靠性、动力性能、使用性能、经济性能等）进行综合评估，根据评估情况，对部件及整机系统进行优化设\r\n计，完善、修改设计建模的参数；输出甘蔗联合收割机的主参数及数字样机模型，验证方案的可行性。给出一台小型甘蔗联合收割\r\n机虚拟样机模型，该数字样机能较好完成甘蔗收割的几个重要的环节，适用性能较好。\r\n阐述利用虚拟样机技术开发小型甘蔗联合收割机的的总体思路，介绍小型甘蔗联合收割机的关键部件扶蔗、砍蔗、断尾、剥叶\r\n的虚拟设计方法，借助于计算机的仿真分析、专家系统的协调决策可以快速、有效的设计开发出甘蔗收获机械的产品级的数字化\r\n产品模型。通过在甘蔗收获机关键部件创新设计、开发，以及建立整机系统的概念样机，得到一种适合复杂机械系统虚拟设计的\r\n方法和设计思路，对进行甘蔗收获机的研制开发有一定的指导意义。', '李尚平 邓劲莲 蒙艳玫 梁式 陈伟叙', '1.林日健，全国热带南亚热带作物生产情况和发展趋势，湛江热带农业技，1996（2）：10-23\r\n2.\r\n3.mysql\r\n', '2015-01-14', '20098289537.pdf'),
(3, 1, '走自主创新之路', '机械科学 国家自然科学基金 应用基础研究 自主创新', '介绍中国国家自然科学基金委员会机械学科10年来的资助情况；总结应用基础研究资助低投入、高产出，在促进科技和社会进步、推动国家经济发展和人才培养中所起的巨大作用；指出机械工程应用基础研究应当大力提倡瞄准学科前沿，面向经济建设，走自主创新之路。', '雷源明  黎明            ', '', '2015-01-16', '20091118225.pdf');

-- --------------------------------------------------------

--
-- 表的结构 `profile`
--
-- 创建时间： 2015-11-29 16:04:51
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `id` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `realname` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `sex` int(1) NOT NULL DEFAULT '1',
  `age` int(3) NOT NULL DEFAULT '18',
  `birthday` datetime DEFAULT NULL,
  `city` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '武汉',
  `email` varchar(40) NOT NULL,
  `signature` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '你还没有写自己的个人签名',
  `edittime` datetime NOT NULL,
  `photo` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'touxiang.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `profile`
--

INSERT INTO `profile` (`id`, `username`, `realname`, `sex`, `age`, `birthday`, `city`, `email`, `signature`, `edittime`, `photo`) VALUES
(1, 'zhang', NULL, 1, 18, NULL, '武汉', '409290014@qq.com', '你还没有写自己的个人签名', '2015-11-29 16:05:28', 'touxiang.jpg'),
(2, 'yoshen', NULL, 1, 18, NULL, '武汉', '409290014@qq.com', '你还没有写自己的个人签名', '2015-11-29 16:24:48', 'touxiang.jpg'),
(3, 'zhanghao', NULL, 1, 18, NULL, '武汉', '409290014@qq.com', '你还没有写自己的个人签名', '2015-11-29 19:31:42', ''),
(4, 'anxian', NULL, 1, 18, NULL, '武汉', '409290014@qq.com', '你还没有写自己的个人签名', '2015-11-29 20:30:46', '');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--
-- 创建时间： 2015-11-29 03:45:23
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `time`) VALUES
(1, 'zhang', '71dd3ac2193f96266419c2273ff029b9b4333990', '409290014@qq.com', '2015-11-29 16:05:28'),
(2, 'yoshen', '71dd3ac2193f96266419c2273ff029b9b4333990', '409290014@qq.com', '2015-11-29 16:24:48'),
(3, 'zhanghao', '71dd3ac2193f96266419c2273ff029b9b4333990', '409290014@qq.com', '2015-11-29 19:31:42'),
(4, 'anxian', '71dd3ac2193f96266419c2273ff029b9b4333990', '409290014@qq.com', '2015-11-29 20:30:46');

-- --------------------------------------------------------

--
-- 表的结构 `voice`
--
-- 创建时间： 2015-12-01 07:29:16
--

DROP TABLE IF EXISTS `voice`;
CREATE TABLE `voice` (
  `id` int(10) NOT NULL,
  `user_id` int(8) NOT NULL,
  `user_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `voice`
--

INSERT INTO `voice` (`id`, `user_id`, `user_name`, `name`, `time`) VALUES
(1, 1, 'zhang', 'whistle.mp3', '2015-10-04 10:26:23'),
(2, 2, 'yoshen', '20151130203136.wav', '2015-11-12 00:00:00'),
(10, 1, 'a', 'dms', '2015-12-01 16:14:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `article` ADD FULLTEXT KEY `refer_doc` (`refer_doc`);
ALTER TABLE `article` ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `article` ADD FULLTEXT KEY `author` (`author`);
ALTER TABLE `article` ADD FULLTEXT KEY `address` (`keyword`);
ALTER TABLE `article` ADD FULLTEXT KEY `author_2` (`author`);
ALTER TABLE `article` ADD FULLTEXT KEY `address_2` (`keyword`);
ALTER TABLE `article` ADD FULLTEXT KEY `address_3` (`keyword`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voice`
--
ALTER TABLE `voice`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `voice`
--
ALTER TABLE `voice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
