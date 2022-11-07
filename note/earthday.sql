-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 02:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earthday`
--
DROP DATABASE IF EXISTS `earthday`;
CREATE DATABASE `earthday` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `earthday`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(75) NOT NULL,
  `password_hash` varchar(72) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `urgency` enum('Low','Moderate','High','Critical') NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `availabilities_start` date NOT NULL,
  `availabilities_end` date NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `eventfk` (`farmer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE IF NOT EXISTS `farmer` (
  `farmer_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profilePic` varchar(50) DEFAULT NULL,
  `info` text NOT NULL,
  `link` varchar(150) NOT NULL,
  `rating` decimal(10,0) DEFAULT NULL,
  `region` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` enum('ON','QC','NS','NB','MB','BC','PE','SK','AB','NL','NT','YT','NU') NOT NULL,
  `postal_code` varchar(7) NOT NULL,
  PRIMARY KEY (`farmer_id`),
  KEY `farmerfk` (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `farmer_capacity`
--

CREATE TABLE IF NOT EXISTS `farmer_capacity` (
  `farmer_id` int(11) NOT NULL,
  `produce_id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`farmer_id`,`produce_id`),
  KEY `fcapfk2` (`produce_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foodbank`
--

CREATE TABLE IF NOT EXISTS `foodbank` (
  `foodbank_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profilePic` varchar(50) DEFAULT NULL,
  `info` text NOT NULL,
  `link` varchar(150) NOT NULL,
  `rating` decimal(10,0) DEFAULT NULL,
  `region` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` enum('ON','QC','NS','NB','MB','BC','PE','SK','AB','NL','NT','YT','NU') NOT NULL,
  `max_distance` enum('10km','25km','50km','75km','100km') NOT NULL,
  `availability_start` date NOT NULL,
  `availability_end` date NOT NULL,
  PRIMARY KEY (`foodbank_id`),
  KEY `foodbankfk` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foodbank_capacity`
--

CREATE TABLE IF NOT EXISTS `foodbank_capacity` (
  `foodbank_id` int(11) NOT NULL,
  `produce_id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`foodbank_id`,`produce_id`),
  KEY `focapfk2` (`produce_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gleaner`
--

CREATE TABLE IF NOT EXISTS `gleaner` (
  `gleaner_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profilePic` varchar(50) DEFAULT NULL,
  `bio` text NOT NULL,
  `rating` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`gleaner_id`),
  KEY `gleanerfk` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `groups_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `link` varchar(150) NOT NULL,
  `rating` decimal(10,0) DEFAULT NULL,
  `status` enum('public','private') NOT NULL,
  `gleaner_id` int(11) NOT NULL,
  `region` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `province` enum('ON','QC','NS','NB','MB','BC','AB','NL','NT','YT','NU') NOT NULL,
  `maxDistance` enum('10km','25km','50km','75km','100km') NOT NULL,
  `availability_start` date NOT NULL,
  `availability_end` date NOT NULL,
  PRIMARY KEY (`groups_id`),
  KEY `groupsfk` (`gleaner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groups_review`
--

CREATE TABLE IF NOT EXISTS `groups_review` (
  `group_review_id` int(11) NOT NULL AUTO_INCREMENT,
  `groups_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `datetime` date NOT NULL,
  PRIMARY KEY (`group_review_id`),
  KEY `greviewfk1` (`groups_id`),
  KEY `greviewfk2` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `groups_id` int(11) NOT NULL,
  `gleaner_id` int(11) NOT NULL,
  PRIMARY KEY (`groups_id`,`gleaner_id`),
  KEY `membershipfk2` (`gleaner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE IF NOT EXISTS `participation` (
  `event_id` int(11) NOT NULL,
  `groups_id` int(11) NOT NULL,
  `foodbank_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`,`groups_id`,`foodbank_id`),
  KEY `paricipationfk2` (`groups_id`),
  KEY `paricipationfk3` (`foodbank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produce`
--

CREATE TABLE IF NOT EXISTS `produce` (
  `produce_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`produce_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `reviewer_id` int(11) NOT NULL,
  `reviewee_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `datetime` date NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `reviewfk1` (`reviewee_id`),
  KEY `reviewfk2` (`reviewer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `eventfk` FOREIGN KEY (`farmer_id`) REFERENCES `farmer` (`farmer_id`);

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `farmerfk` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `farmer_capacity`
--
ALTER TABLE `farmer_capacity`
  ADD CONSTRAINT `fcapfk1` FOREIGN KEY (`farmer_id`) REFERENCES `farmer` (`farmer_id`),
  ADD CONSTRAINT `fcapfk2` FOREIGN KEY (`produce_id`) REFERENCES `produce` (`produce_id`);

--
-- Constraints for table `foodbank`
--
ALTER TABLE `foodbank`
  ADD CONSTRAINT `foodbankfk` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `foodbank_capacity`
--
ALTER TABLE `foodbank_capacity`
  ADD CONSTRAINT `focapfk1` FOREIGN KEY (`foodbank_id`) REFERENCES `foodbank` (`foodbank_id`),
  ADD CONSTRAINT `focapfk2` FOREIGN KEY (`produce_id`) REFERENCES `produce` (`produce_id`);

--
-- Constraints for table `gleaner`
--
ALTER TABLE `gleaner`
  ADD CONSTRAINT `gleanerfk` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groupsfk` FOREIGN KEY (`gleaner_id`) REFERENCES `gleaner` (`gleaner_id`);

--
-- Constraints for table `groups_review`
--
ALTER TABLE `groups_review`
  ADD CONSTRAINT `greviewfk1` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`groups_id`),
  ADD CONSTRAINT `greviewfk2` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membershipfk1` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`groups_id`),
  ADD CONSTRAINT `membershipfk2` FOREIGN KEY (`gleaner_id`) REFERENCES `gleaner` (`gleaner_id`);

--
-- Constraints for table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `paricipationfk1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  ADD CONSTRAINT `paricipationfk2` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`groups_id`),
  ADD CONSTRAINT `paricipationfk3` FOREIGN KEY (`foodbank_id`) REFERENCES `foodbank` (`foodbank_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `reviewfk1` FOREIGN KEY (`reviewee_id`) REFERENCES `account` (`account_id`),
  ADD CONSTRAINT `reviewfk2` FOREIGN KEY (`reviewer_id`) REFERENCES `account` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- accounts
--
INSERT INTO `account` (email,password_hash) VALUES
('zhelvv@mycasualshirt.com','0cc175b9c0f1b6a831c399e269772661'),
('bobo999@taikz.com','92eb5ffee6ae2fec3ad71c777531578f'),
('danasnickas@wuupr.com','4a8a08f09d37b73795649038408b5f33'),
('arditgutt@baileprofessional.xyz','8277e0910d750195b448797616e091ad'),
('lilpunky@slissi.site','e1671797c52e15f763380b45e841ec32'),
('epipastic@cudimex.com','8fa14cdd754f91cc6554c9e71929cce7'),
('taylorncux@saxophonexltd.com','b2f5ff47436671b6e533d8dc3614845d'),
('stephan007@masjoco.com','2510c39011c5be704182423e3a695e91'),
('y2ej6r3g9d@taikz.com','865c0c0b4ab0e063e5caa3387c1a8741'),
('snaxion@skillion.org','363b122c528f54df4a0446b6bab05515'),
('mattse8@dmxs8.com','8ce4b16b22b58894aa86c421e8759df3'),
('olesyaparam@sihirfm.net','6f8f57715090da2632453988d9a1501b'),
('elaineherriott@excipientnetwork.com','7b8b965ad4bca0e41ab51de7b31363a1'),
('fitness4life2001@asifboot.com','2db95e8e1a9267b7a1188556b2013b33'),
('sanpromise@happiseektest.com','d95679752134a2d9eb61dbd7b91c4bcc'),
('droccagua@pickuplanet.com','83878c91171338902e0fe0fb97a8c47a'),
('jaymob45@chiguires.com','7694f4a66316e53c8cdd9d9954bd611d'),
('peepmaster@v-mail.xyz','03c7c0ace395d80182db07ae2c30f034'),
('felixmason22@gmailvn.net','e358efa489f58062f10dd7316b65649e'),
('sergey95nim@packiu.com','7b774effe4a349c6dd82ad4f4f21d34c'),
('tpattiso@unair.nl','9e3669d19b675bd57058fd4664205d2a'),
('kelsehc@mercantravellers.com','f1290186a5d0b1ceab27f4e77c0c5d68'),
('kieranadams@skillion.org','9dd4e461268c8034f5c8564e155c67a6'),
('emau99@unair.nl','415290769594460e2e485922904f345d'),
('yashaxx@yt-google.com','fbade9e36a3f36d3d676c1b808451dd7'),
('newtdawg@oanghika.com','4124bc0a9335c27f086f24ba207a4912'),
('jlbpbtdn@mercantravellers.com','187ef4436122d1cc2f40dc2b92f0eba0'),
('niteflite@email-temp.com','4c1b8d8ad4f026a2e0f4b0fc61dc88fc'),
('lemmens@email-temp.com','0b32e199eb026b461b2275b6849b2f4d'),
('latessacox@816qs.com','e86b70b7220d227411165aced746c0ed'),
('aowthaisamui@gmailvn.net','e7e364ef07486e0693a3b1a0111cc5cc'),
('nero2219@bandtoo.com','2a1bc5b0f73bf7d19845a0a200107e8a'),
('jonesj31@hotmail.red','8797cf43170db772aef383882c60ff04'),
('andrewchev@bukan.es','ffbf9f28ea4f016c344f261921f79118'),
('bogstad@pickuplanet.com','b3f4c10618488ca3186629005792a6c0'),
('forrochabrol@ezybarber.com','b735cc70c890a2416808f2976a025ee1'),
('emevgeniya@mercantravellers.com','edd1322b540a2627a268064ccfbf2a89'),
('tramal1@kertasqq.com','56415e4246316b8bf37cdb434ba9d1da'),
('curlyb@hulas.co','a3f2113ce19f4cb85b928d773687cd2b'),
('tokarihizukatyan@taikz.com','dbbd24e1c91e7bf6f197e3e75e98d65f'),
('mashenka710@guitarsxltd.com','b1e26eac8ed52dcbe975a231020e8de6'),
('manjcow@udinnews.com','1f2b6353137943f5a74a9553bb22445e'),
('heleneporter@mail-amazon.us','b98d52fe40f8d9fe519292101d51b153'),
('kendzer@playfuny.com','297ef66c9acbfca2b5a589fab92201f7'),
('hellxbattosay@pickuplanet.com','4337acb8714459fc7a87438689e84dbd'),
('utinakatya@bentsgolf.com','787652fa3f1748d8b32778d5bf3865f7'),
('sarengooq@bukan.es','b479bf67f426f8dc7cc8a8a7dfacf36b'),
('g5hfy@wuupr.com','0830784b182f71bec67894b175786bbc'),
('lopez3077@redaksikabar.com','2a7d15daabd76cc0e2bfe60d0ce22123'),
('matthuber1@mizii.eu','c93de8756ef3a7cc4521b3245002ceaf'),
('bananafish@breaksmedia.com','b7fe9eb7fda464c063cb194171e23404'),
('aneelks@play1x.icu','654a13d9f46adeb677db1664a97b6979'),
('annaspektor@bukan.es','f50fcca8b937c19538564df992b40275'),
('gailhperry3@wuupr.com','8961e7ce9d7b5570d442981487c1f221'),
('nail032@btcmod.com','8faccb6fc76ad6c3b4da8d8b12f7bcfc'),
('bossbt@burem.studio','a730f59af8560fab222bb3e135d6738c'),
('sochiksm@gasssmail.com','98fa47daa2c2ea46a5f8cdf8115b17b6'),
('tolkto@plexvenet.com','62767a8612110bf119f52fc050015005'),
('lyaijrz@parkers4events.com','8ffaf925b27d101d9a9ac6b9804096a8'),
('getu1azerty@manghinsu.com','c9985febff3187818513d269f2bd39f4'),
('densperalta23@mailsaviors.com','efd360dbfb75a1ede6f0e1664c724989'),
('raynor56@bukan.es','b837dcf88c9ebb4776e9948a687c3312'),
('coconutstx@ezybarber.com','5a8332fa5a4a4729a93de0f48449b5cd'),
('freak3@bukan.es','e47a743919cd40d26e6d70e0ade833c1'),
('ivxenz@24hinbox.com','cbde7a7069e83f4a6c623d2e984e100a'),
('simecekkj@hangxomu.com','60750b23d1900d145b9794f820341777'),
('nafarious008@redaksikabar.com','dacb16a2ac38ff86470ec7f0549f306e'),
('galchonokkynceva@productsproz.com','c00260bf2484737a8fc583185ced2cf5'),
('nomadgio@hangxomu.com','a30ac7651903367719f959980ea68378'),
('steven2115@redaksikabar.com','5e80eeb134b8cc80cef99f0599bdc0ca'),
('lexpn@pianoxltd.com','3592c033a2b05f410ab20f759fcddb2c'),
('stepanyankristi@pianoxltd.com','3f5d1fecc7d4e7b252388041c8c42375'),
('mdoggimpdadd@089563.quest','61123e9dae870c8f6a9dba76d65a2e29'),
('kranitir@hotmail.red','bf885f9a33ef5cea66d2e2704bbf700c'),
('dagmar2603@hungta2.com','e5ee429c4e8123a291f5c7e2765d9b11'),
('z2jqefrb@email-brasil.com','77297bd7f5fc08332a0dd0aaa5b5f2b3'),
('shabalin444@bukan.es','faad518b32a18a429ffbb1118244d077'),
('chanelpink@bizisstance.com','7e4e594f73a0baed7dcf950315284de3'),
('garvey05@hansenhu.com','7e4e594f73a0baed7dcf950315284de3'),
('lxl366@alvinneo.com','7e4e594f73a0baed7dcf950315284de3'),
('hjm123@pianoxltd.com','7e4e594f73a0baed7dcf950315284de3'),
('victoriadikonskaya@22jharots.com','7e4e594f73a0baed7dcf950315284de3'),
('sins0001@productsproz.com','7e4e594f73a0baed7dcf950315284de3'),
('paulyw69@playfuny.com','7e4e594f73a0baed7dcf950315284de3'),
('dominickwilkins@unair.nl','7e4e594f73a0baed7dcf950315284de3'),
('curtlfischer@wuupr.com','9b588c02dfdad4422f85a88753b3c9d4'),
('okletsgo@alvinneo.com','9b588c02dfdad4422f85a88753b3c9d4'),
('fedormaslenkoff@masjoco.com','9b588c02dfdad4422f85a88753b3c9d4'),
('tom1022@bensullivan.au','9b588c02dfdad4422f85a88753b3c9d4'),
('adrianscugtas@stareybary.website','9b588c02dfdad4422f85a88753b3c9d4'),
('modvt@tubidu.com','9b588c02dfdad4422f85a88753b3c9d4'),
('schvantz@hulas.co','cf328487a5b5dc927bee5052bc58a552'),
('61ihb66@shiro.pw','cf328487a5b5dc927bee5052bc58a552'),
('ilzata77@mycartzpro.com','cf328487a5b5dc927bee5052bc58a552'),
('pbwoody@bukan.es','cf328487a5b5dc927bee5052bc58a552'),
('bbcoff@shiro.pw','cf328487a5b5dc927bee5052bc58a552'),
('marmitila1988@goldinbox.net','cf328487a5b5dc927bee5052bc58a552'),
('kanaevaev@goldinbox.net','cf328487a5b5dc927bee5052bc58a552'),
('jumadi@grecc.me','cf328487a5b5dc927bee5052bc58a552'),
('bobrik197979@omtecha.com','cf328487a5b5dc927bee5052bc58a552'),
('mtrbach@gasss.net','cf328487a5b5dc927bee5052bc58a552'),
('svetlanasergeen@crossfitcoastal.com','8d5f246d8ede01459b527812bba73352'),
('tujh@packiu.com','8d5f246d8ede01459b527812bba73352'),
('tmrbnsn9@noisemails.com','8d5f246d8ede01459b527812bba73352'),
('brahmam2k1@starux.de','8d5f246d8ede01459b527812bba73352'),
('stauf00@mailpluss.com','8d5f246d8ede01459b527812bba73352'),
('tomwu@netveplay.com','8d5f246d8ede01459b527812bba73352'),
('ryxjn2dm4m@grecc.me','8d5f246d8ede01459b527812bba73352'),
('jbernis@samaltour.site','8d5f246d8ede01459b527812bba73352'),
('ttttdk@infoalgers.info','8d5f246d8ede01459b527812bba73352'),
('tatyanakhr@easygbd.com','8d5f246d8ede01459b527812bba73352'),
('00j007@omtecha.com','8d5f246d8ede01459b527812bba73352'),
('jpino@pianoxltd.com','8d5f246d8ede01459b527812bba73352'),
('vasoberi1985@handleride.com','8d5f246d8ede01459b527812bba73352'),
('paruslive@kaocashima.com','8d5f246d8ede01459b527812bba73352'),
('akterperov@noisemails.com','9ff1a38506e4fba898c144a5f3d586f6'),
('bettyf@breaksmedia.com','9ff1a38506e4fba898c144a5f3d586f6'),
('lprablek@plexvenet.com','9ff1a38506e4fba898c144a5f3d586f6'),
('drbucci@masjoco.com','9ff1a38506e4fba898c144a5f3d586f6'),
('eschley12@wuupr.com','9ff1a38506e4fba898c144a5f3d586f6'),
('ylthorin@getfollowers24.biz','9ff1a38506e4fba898c144a5f3d586f6'),
('apollo55@gumaygo.com','9ff1a38506e4fba898c144a5f3d586f6'),
('usmanovdinis@boranora.com','9ff1a38506e4fba898c144a5f3d586f6'),
('thom500@shiro.pw','9ff1a38506e4fba898c144a5f3d586f6'),
('cielogeleen17@fashionsell.online','b3490170abe3cd4a650711a2a87b5d2d'),
('n0gix35p@hungta2.com','b3490170abe3cd4a650711a2a87b5d2d'),
('gabrieljose96@emvil.com','b3490170abe3cd4a650711a2a87b5d2d'),
('alla87878@hungta2.com', 'b3490170abe3cd4a650711a2a87b5d2d'),
('dlonam@ovzcxmaijt.ga', 'b3490170abe3cd4a650711a2a87b5d2d'),
('greedblack2@tempxmail.info', '064d5c290cf4f15e4ff5e50af1dc9f64'),
('manuraj085@ebarg.net', '064d5c290cf4f15e4ff5e50af1dc9f64'),
('kipovec2007@luddo.me', '064d5c290cf4f15e4ff5e50af1dc9f64'),
('vasiliy94@edus.works', '064d5c290cf4f15e4ff5e50af1dc9f64'),
('stasygribulina@bukan.es', '064d5c290cf4f15e4ff5e50af1dc9f64'),
('serg0373@sihirfm.net', '064d5c290cf4f15e4ff5e50af1dc9f64'),
('james108@omtecha.com', '1c45f42a0f8e80a90b03abaca434ade7'),
('katushkalvenok@cuendita.com', '1c45f42a0f8e80a90b03abaca434ade7'),
('sayanadugarzhapova@mcatay.xyz', '1c45f42a0f8e80a90b03abaca434ade7'),
('aleksandrzavadskiy@kongshuon.com', '1c45f42a0f8e80a90b03abaca434ade7'),
('alsalhala3231282@coffeepancakewafflebacon.com', '1c45f42a0f8e80a90b03abaca434ade7'),
('gandyman@coffeepancakewafflebacon.com', 'a8a4c3b238121baa28151e50aa6293f6'),
('ania1911@esgebe.email', 'a8a4c3b238121baa28151e50aa6293f6'),
('tema1983dekan@mexcool.com', 'a8a4c3b238121baa28151e50aa6293f6'),
('osamd@mycasualtshirt.com', 'a8a4c3b238121baa28151e50aa6293f6'),
('fuhnestaeder@namakuirfan.com', 'a8a4c3b238121baa28151e50aa6293f6'),
('norosergej@mycasualtshirt.com', 'a8a4c3b238121baa28151e50aa6293f6'),
('novikovpm@namakuirfan.com', '804ac99f86f64d13c6957b3b9e73598f'),
('borgona@mexcool.com', '804ac99f86f64d13c6957b3b9e73598f'),
('milkhauss@emvil.com', '804ac99f86f64d13c6957b3b9e73598f'),
('katerinkado@infoalgers.info', '804ac99f86f64d13c6957b3b9e73598f'),
('crackaj@gmailpro.ml', '804ac99f86f64d13c6957b3b9e73598f');

--
-- gleaners
--

INSERT INTO `gleaner` (`account_id`, `username`, `name`, `profilePic`, `bio`, `rating`) VALUES
('25','Balatoon','Bruce Arellano','profilePicString','Maecenas pharetra purus at libero ullamcorper, et pretium felis maximus. Sed vehicula nisl in scelerisque varius.','4'),
('26','Urbanist','Rosalind Madden','profilePicString','Nulla felis eros, pellentesque quis velit ac, porta aliquet tortor. Nullam quis imperdiet ante, at sollicitudin tellus.','3'),
('27','Horbgorble','Scottie Fitzpatrick','profilePicString','Nulla eget fermentum lectus. Donec quis nunc ante. In vulputate dolor quis lacus feugiat congue.','5'),
('28','Acroteleutic','Tuan Arnold','profilePicString','Praesent ut dui at arcu consequat porta eget eu tortor.','5'),
('29','Bucolic','Michelle Edwards','profilePicString','Integer blandit, augue vitae consectetur posuere, magna libero iaculis quam, a scelerisque magna justo non enim.','4'),
('30','Atrament','Kasey Haney','profilePicString','Pellentesque varius lectus ipsum, bibendum pretium massa feugiat ut.','4'),
('31','OpoqGimpy','Frankie Clarke','profilePicString','Aenean vestibulum urna sed rutrum condimentum. Nunc scelerisque feugiat quam nec facilisis. Nunc vulputate dictum quam, eu semper tortor tempor in. Donec blandit mauris est, eget porta felis sagittis a.','3'),
('32','AnkenThurl','Cordell Neal','profilePicString','Pellentesque pharetra accumsan risus, sed sagittis ante elementum nec. Aliquam elementum enim ac ipsum dapibus, vitae pharetra sem maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget finibus nisl. Proin sit amet urna enim.','5'),
('34','NathpotWigwam','Natalia Doyle','profilePicString','Curabitur ut eleifend est. Quisque tincidunt, dolor ac consectetur suscipit, purus purus sollicitudin libero, et faucibus mi mauris sed turpis.','2'),
('35','Mithridatism','Delmer Lane','profilePicString','Nunc varius magna eget erat cursus, suscipit aliquet justo convallis. Duis sem sem, euismod ut eros sed, sollicitudin malesuada nisl. Integer aliquet volutpat dolor, at vestibulum mi dapibus quis.','2'),
('36','MrsmakerEcru','Marissa Fitzpatrick','profilePicString','Ut blandit vulputate felis gravida pretium. Suspendisse rhoncus est et lectus laoreet ullamcorper. Vivamus et hendrerit dolor.','3'),
('37','Kinderspiel','Eileen Whitney','profilePicString','Ut ultrices in ligula quis pulvinar. Suspendisse eget arcu erat. Curabitur dui quam, blandit a aliquam id, placerat sit amet quam. Vestibulum eu quam arcu. Phasellus tincidunt ipsum eros, quis dignissim dolor tristique non.','4'),
('38','Quiddle','Cynthia York','profilePicString','Quisque diam magna, congue non est ut, tristique bibendum justo. Vivamus ultrices a metus sed venenatis.','4'),
('39','All3nthegNibble','Jimmie Carrillo','profilePicString','Curabitur aliquam lacus sit amet venenatis lobortis. Morbi luctus ex venenatis, iaculis nisl ut, fermentum arcu.','5'),
('40','XapebAlow','Arthur Anderson','profilePicString','Sed ornare, purus sed ullamcorper pharetra, elit ex tincidunt augue, a mattis nisl mauris sed odio.','5'),
('41','Gimcrack','Opal Anderson','profilePicString','Ut et nisi nunc. In vel risus sagittis lectus molestie ultrices. Donec vehicula mauris eu tortor dignissim, a sagittis enim egestas. In suscipit libero tellus, ac fermentum nulla congue ac.','5'),
('42','Mjp105Crook','Francesco Randall','profilePicString','Nam vehicula, eros eget placerat ultrices, urna lorem pharetra est, non pellentesque mauris odio ut tortor.','2'),
('43','DrastikHopple','Alberto Cunningham','profilePicString','Duis id nisi facilisis, imperdiet ligula at, fermentum metus. Nulla non vehicula arcu.','3'),
('44','Sternutate','Carlene Hutchinson','profilePicString','Quisque congue enim vel justo efficitur consectetur. Sed bibendum consectetur ante, vel luctus nisi pulvinar vitae.','3'),
('45','GretelBuskin','Herb Cline','profilePicString','Proin placerat ultricies elit, faucibus pretium nulla ullamcorper nec. In id purus porta, lacinia ex at, sollicitudin velit.','4'),
('46','OnadGiglet','Reyes Gross','profilePicString','Morbi ut velit nibh. Sed turpis turpis, mattis in lobortis sed, faucibus sit amet metus. Nullam scelerisque sodales tempus. Nullam id mattis ex, elementum bibendum nulla.','2'),
('47','Whizbang','Rosario Morgan','profilePicString','Aliquam ornare molestie porttitor. Vestibulum rhoncus est auctor, molestie diam vel, mollis ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ultricies sem eget justo auctor mollis.','2'),
('48','KnifeinAgog','Marylou Le','profilePicString','Aliquam condimentum mi ac sapien consequat, et vestibulum ex sodales. Sed vitae velit ut mauris dictum lacinia sit amet eget nunc.','5'),
('49','Jackie1Futz','Linda Torres','profilePicString','Nullam aliquam felis quis sem commodo, sed rutrum erat viverra.','3'),
('50','Hannes3Ablaut','Lilly Erickson','profilePicString','Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam interdum eros nibh, eget hendrerit mauris varius sit amet.','3'),
('51','XenialHeriot','Amanda Beltran','profilePicString','Nam fermentum enim condimentum nisl ornare, et maximus tellus ullamcorper. Phasellus maximus leo id metus dictum, nec mollis ipsum tincidunt.','4'),
('52','Peristeronic','Winnie Trujillo','profilePicString','Vivamus condimentum gravida accumsan.','5'),
('53','Maxwell1462','Fidel Melton','profilePicString','Nam finibus magna nulla.','2'),
('54','Sportan8Sejant','Graig Banks','profilePicString','Nulla nec arcu libero. Aenean ultrices diam ut leo lacinia, ac molestie massa placerat. Pellentesque ornare convallis velit vel imperdiet.','4'),
('55','Chre24matistic','Donnell Zimmerman','profilePicString','In hac habitasse platea dictumst.','5'),
('56','Glareous','Marquis Walton','profilePicString','Mauris malesuada odio nisi, sed lobortis mauris consectetur a.','5'),
('57','Whisternefet','Brenda Fox','profilePicString','Vivamus consequat ligula varius mi dictum placerat.','4'),
('58','Icteritious','Jan Osborn','profilePicString','Integer sit amet felis vulputate, maximus lectus ac, aliquet ante. Morbi vulputate vehicula sem, nec consequat sapien egestas vitae.','4'),
('59','Didymous','Rich Beard','profilePicString','In mollis augue sed elit facilisis, luctus congue lorem euismod. In mattis elit leo, vel porta nisi efficitur in.','4'),
('60','Mancipation','Wes Floyd','profilePicString','Praesent accumsan nulla a accumsan accumsan. Vivamus vehicula velit quis fringilla mattis.','3'),
('61','B024nny','Erna George','profilePicString','Sed sed tincidunt lacus, nec posuere purus.','3'),
('62','Skawkey44','Marion Vincent','profilePicString','Curabitur et felis dolor. Aenean vel hendrerit orci, vitae lobortis mi.','3'),
('63','Vertigo2414','Florentino Frazier','profilePicString','Aliquam auctor ornare sapien, eu iaculis lorem dictum nec.','5'),
('64','Argaliche5','Elsie Pope','profilePicString','In blandit porttitor scelerisque. Integer vulputate sodales consequat. Duis euismod tortor consectetur ex auctor varius. Donec nec elit leo.','5'),
('65','Infructuous','Daisy Martin','profilePicString','Mauris tempor libero sit amet finibus tincidunt. Nulla nibh tellus, maximus in felis id, tempus venenatis quam.','4'),
('66','Scuppernong','Jerri Graham','profilePicString','Duis eu libero accumsan, ultricies neque nec, dignissim purus. Donec vitae est vel velit viverra congue.','4'),
('67','Podexgrezl','Kham Xie','profilePicString','Integer pretium ante fermentum ultricies gravida. Proin euismod semper justo. Donec pharetra lacus consequat purus rutrum sollicitudin.','4'),
('68','Dericnie117','Deidre Reid','profilePicString','Ut quis lorem vel diam ullamcorper pellentesque.','4'),
('69','WombatL0vzer','Demarcus Rasmussen','profilePicString','Sed ullamcorper interdum nibh sed aliquet. Fusce vehicula, risus in efficitur sagittis, nunc ipsum posuere nisl, a lobortis quam libero eget tortor.','3'),
('70','Loggerhead3451','Forrest Ruiz','profilePicString','Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.','3'),
('71','Ecophene','Rueben May','profilePicString','Praesent a dolor a nibh porta finibus. Donec in lacinia leo. In felis turpis, dictum nec tellus id, imperdiet lacinia leo.','4'),
('72','RubberneckG00se','Kendra Camacho','profilePicString','Morbi sollicitudin, quam in rutrum egestas, lectus nisl posuere erat, nec vehicula nisi arcu dapibus diam.','4'),
('73','XxsnipetCalash','Dena Wong','profilePicString','Duis sodales nisl at lorem vestibulum, eu aliquam sapien egestas. Etiam pellentesque dolor nec orci suscipit lobortis.','2'),
('74','Flummox','Dominick Frost','profilePicString','Nunc suscipit bibendum luctus. Sed vel auctor lorem. Nam sed mollis felis.','2'),
('75','Bardolatry','Johnnie Kent','profilePicString','Vivamus bibendum commodo erat, ac congue risus rhoncus a.','2'),
('76','Endemiology','Marian Hicks','profilePicString','Aliquam malesuada dignissim luctus.','5'),
('77','SprayinFoxy','Jewell Herrera','profilePicString','Phasellus laoreet augue justo, luctus luctus erat porttitor eget. Integer ac pharetra ligula, eu volutpat augue.','5'),
('78','Grauncher','Bobbi Meyers','profilePicString','Etiam euismod faucibus leo, quis hendrerit diam pretium at. Praesent egestas quam et posuere placerat.','4'),
('79','Figurehead','Adalberto Johnston','profilePicString','Mauris eget vestibulum turpis. Ut ac arcu et ex fermentum auctor. Nam rhoncus tortor sed leo pulvinar, suscipit placerat est consequat.','4'),
('80','Nr3505Ition','Lazaro Fisher','profilePicString','Fusce hendrerit consectetur enim sit amet luctus. Phasellus augue est, egestas eu nisi id, egestas tempus erat.','3'),
('81','Contr13432aband','Mallory Conner','profilePicString','Quisque tortor quam, aliquam eget eros vitae, iaculis consectetur quam.','5'),
('82','Eucrasy142','Nickolas Wright','profilePicString','Cras sodales varius lorem, non posuere odio suscipit non. In hac habitasse platea dictumst.','5'),
('83','Ensorcell41','Noah Hutchinson','profilePicString','Cras vitae nisi sollicitudin, pellentesque diam non, elementum erat.','4'),
('84','Lollapalooza11111','Truman Hunt','profilePicString','Curabitur tempor dolor non tempor ultrices. Etiam mollis non leo eu rhoncus. Nunc ac rhoncus diam, eu fringilla quam.','4'),
('85','Rinkomania214','Keenan Conley','profilePicString','Praesent et elit orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.','4'),
('86','BicyclecBunkum','Rudolph Avila','profilePicString','Nunc finibus posuere erat, vel porttitor ligula mattis eu. Donec sed neque lorem. Vivamus nec magna non nibh elementum viverra finibus et quam. Aenean enim sem, mollis quis ligula at, ullamcorper vestibulum diam.','4'),
('87','Quisquilious124','Meghan Terrell','profilePicString','Cras tempor lacus magna, eu pretium urna interdum non.','4'),
('88','46Limburger','Hershel Parsons','profilePicString','In eu lacinia lacus. Morbi vel viverra odio, eget mattis est.','2'),
('89','Andromania','Therese Decker','profilePicString','Praesent commodo interdum nibh, eget porta eros pellentesque vel. In dignissim sapien non efficitur pellentesque.','2'),
('90','BungeyBunBun','Dana Meza','profilePicString','Quisque volutpat imperdiet risus, at rhoncus leo feugiat id.','3'),
('91','Spurionw51','Major Weaver','profilePicString','Sed ac nisi elementum, tincidunt urna non, facilisis arcu.','5'),
('92','KudzuKay','Nestor Ritter','profilePicString','Proin faucibus nisi ligula, at convallis ligula tincidunt ut. Nulla facilisi. Curabitur commodo vulputate ligula, nec fringilla sem. Ut maximus fermentum libero.','4'),
('93','PizzazzSparkl3','Rena Bradley','profilePicString','Ut dolor nibh, ultricies sit amet leo eu, mattis aliquet augue. Ut fringilla luctus dolor, ac aliquam libero rhoncus a. Praesent facilisis urna eget velit iaculis, id lacinia nisl elementum. Fusce ut vulputate enim.','5'),
('94','Hansomtia22','Riley Pacheco','profilePicString','Sed elementum orci ipsum, quis volutpat ipsum mattis ut.','5'),
('95','Appal00sa','Mose Doyle','profilePicString','Etiam vestibulum ullamcorper fringilla. Nam faucibus nibh vitae augue consectetur, tempus pharetra libero dignissim.','4'),
('96','Flummoxed','Gabriela Knapp','profilePicString','Cras nec congue neque.','4'),
('97','Calverbob2002','Marion Haney','profilePicString','Nullam mollis, elit eget vehicula tempus, nunc orci mollis dolor, sit amet placerat sem orci quis libero.','3'),
('98','Mornebomb2000','Foster Hicks','profilePicString','Donec dapibus vulputate placerat. Quisque a elit at leo egestas viverra.','2'),
('99','Vamoose1958','Vicki Mckinney','profilePicString','Pellentesque laoreet dictum tortor, ut sagittis risus ultricies ut. Nulla lobortis et magna eu vulputate. Aenean vitae tortor nibh. Pellentesque sodales consectetur orci, sed facilisis lectus facilisis non.','4'),
('100','AlkcolRoccyx','Hyman Riddle','profilePicString','Nullam vehicula a nulla ac suscipit. Praesent ac diam est. Cras condimentum accumsan risus, vel ultricies mi varius at.','4'),
('101','Goldenrod46','Karl Vargas','profilePicString','Sed blandit vitae est sed maximus. Integer et consequat odio.','4'),
('102','Panjandrum','Amalia Sherman','profilePicString','Nulla quam odio, viverra vel tincidunt vel, porta id libero.','5'),
('103','Gnomonicse52','Darrick Alexander','profilePicString','Cras molestie ante ac purus tempor, id bibendum augue vehicula. Fusce dictum commodo elit vel dictum.','5'),
('104','Phalange2141','Matthew Schroeder','profilePicString','Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','5'),
('105','Colby21gunsWoozy','Monica Ortiz','profilePicString','Vestibulum viverra, risus ut ultrices dictum, justo leo accumsan ante, nec porta mi nisl eu sem.','3'),
('106','JackanQuoz','Parker Peck','profilePicString','Praesent consectetur sed lectus in finibus. Nulla facilisi. In ut metus pulvinar, imperdiet massa sed, pulvinar massa. Maecenas a aliquam nulla.','3'),
('107','TonythekFub','Nona Carter','profilePicString','Morbi pretium lectus dignissim urna cursus rutrum. Suspendisse potenti. Donec varius convallis sem non rutrum.','5'),
('108','Meretricious','Joey Mcknight','profilePicString','Suspendisse potenti. Ut a ornare enim, sit amet aliquet nulla. Aliquam euismod neque dolor, sit amet pellentesque felis faucibus at.','5'),
('109','Solo82Devoir','Eula Osborn','profilePicString','Sed pellentesque viverra justo, nec vestibulum lacus convallis et. Vestibulum elit dolor, eleifend vel magna ac, rhoncus placerat mi.','4'),
('110','RungwiscMoue','Faye Moore','profilePicString','Etiam lacinia, dui lobortis efficitur vestibulum, erat augue facilisis magna, ac ultrices tortor augue vel magna.','3'),
('111','AchreenUsurp','Janell Harrell','profilePicString','Nam sagittis pretium tristique. Nunc varius hendrerit augue id placerat. Pellentesque malesuada luctus elit commodo accumsan.','5'),
('112','Coloratura','Nestor Golden','profilePicString','Donec ac massa nec mauris tincidunt bibendum. Curabitur nec aliquam neque, non egestas dui.','2'),
('113','Glitchwofl','Katina Pham','profilePicString','Aenean sollicitudin sem in rhoncus ultrices. Etiam elementum vel dui sed viverra. Aliquam scelerisque elit sed augue elementum, ut varius justo porttitor.','2'),
('114','Sashay214','Arnulfo Stokes','profilePicString','Etiam hendrerit varius finibus. Vestibulum sit amet fringilla felis.','2'),
('115','Avocetyboy_124','Efren Petty','profilePicString','Maecenas porttitor consectetur nunc non viverra. Pellentesque sit amet sem nec ipsum tempor venenatis.','4'),
('116','Toroseter_24','Graham Norton','profilePicString','Quisque vitae nunc non ex imperdiet viverra. Aenean metus nunc, tempus eu condimentum vitae, aliquam at leo.','4'),
('117','Wisenheimer','Salvatore Mathis','profilePicString','Nullam ut nisi vitae nunc pulvinar semper. Duis vitae velit quam. Sed ultricies quis est eget malesuada.','5'),
('118','Sojourn462','Carrol Rodriguez','profilePicString','Pellentesque hendrerit eros in sem fringilla, sed sodales orci blandit. Fusce convallis ullamcorper placerat.','5'),
('119','MondegreenTeam','Mitchell Brown','profilePicString','Suspendisse hendrerit tortor et laoreet suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.','3'),
('120','Toco4Abba','Joey Sweeney','profilePicString','Curabitur commodo congue ultricies. Nulla facilisi. Maecenas interdum molestie eros.','2'),
('121','ShotwellZygote','Terence Brown','profilePicString','Mauris consectetur dictum eros sit amet cursus.','5'),
('122','PissarKowtow','Arline Snyder','profilePicString','Suspendisse et tempus nulla. Ut nec posuere ante, vitae viverra sapien.','5'),
('123','SyntaxblitzYaffle','Cortez Livingston','profilePicString','Donec at nisi libero. Nam sed dolor efficitur, consectetur diam sit amet, mattis ligula. Duis arcu quam, condimentum eu mauris eu, eleifend tempor sapien.','5'),
('124','MizulPitcher','Casey Galloway','profilePicString','Aliquam lobortis justo in nulla auctor, eget pharetra augue viverra. Ut eget risus justo. Suspendisse tristique nunc in risus gravida, a posuere urna suscipit.','2'),
('125','RaolHelmet','George Shelton','profilePicString','Praesent feugiat nisl nisi, ut auctor neque volutpat non. Vestibulum erat nibh, vestibulum vel laoreet sit amet, euismod non odio.','2'),
('126','Razzmatazz','Benito Delgado','profilePicString','Nullam magna lectus, posuere sit amet euismod vitae, aliquam id nulla. Duis pretium congue tempus. Vestibulum congue dapibus tortor ac dignissim.','2'),
('127','SkedaddleGReeen','Marcelino Simmons','profilePicString','Vestibulum egestas lacus et ipsum consectetur, id mollis eros tristique.','3'),
('128','Draconiform','Jermaine Solis','profilePicString','Nullam iaculis sapien non velit porta, vitae facilisis sapien pharetra. Phasellus mauris leo, convallis eu cursus id, gravida non diam.','3'),
('129','BleticBronco','Bridgett Atkins','profilePicString','Maecenas condimentum mi et lorem suscipit imperdiet. Aliquam imperdiet auctor est, sed congue nibh. Proin dictum, leo efficitur blandit euismod, arcu magna gravida dui, non lacinia sapien quam vel felis.','5'),
('130','SmokeDoozy','Lou Mckee','profilePicString','Mauris tempor at nunc id vehicula.','5'),
('131','ThemaksVolary','Monique Cameron','profilePicString','Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','4'),
('132','Undernrior2004','Suzanne Dawson','profilePicString','Nulla consequat pharetra augue non accumsan. Donec in pellentesque nunc. Sed malesuada, ligula nec lobortis pulvinar, nunc mauris tristique nisi, in tempor orci justo non libero.','4'),
('133','Midstlo013','Rodger Mills','profilePicString','Vestibulum auctor risus in orci pretium, ut gravida augue porta. Mauris vitae laoreet ex. Morbi placerat fringilla faucibus.','4'),
('134','Windlesus12345','Vicente Contreras','profilePicString','Mauris in sollicitudin nunc. Mauris condimentum tempor urna, at aliquam ligula tincidunt sagittis. Duis maximus cursus hendrerit. Suspendisse nisl neque, aliquam et cursus eget, gravida vitae dolor.','4'),
('135','Viper5235','Mohammad Thomas','profilePicString','Cras a nibh vel magna consequat porta.','3'),
('136','Salvenas225','Candice Dalton','profilePicString','Mauris sed neque congue, posuere libero vel, tempus mauris. Cras pretium, turpis nec facilisis fermentum, nibh velit pulvinar sem, ultricies mattis sem libero vel est.','3'),
('137','GtrxxDinghy','Claude Knight','profilePicString','Donec sem ipsum, pellentesque laoreet magna sit amet, rutrum consequat dui. In libero risus, eleifend in laoreet non, ultricies eget turpis.','5'),
('138','MosqueKaput','Gale Calhoun','profilePicString','Quisque venenatis elementum venenatis.','5'),
('139','OrcamOblong','Micah Larson','profilePicString','Quisque egestas maximus tellus interdum venenatis.','2'),
('140','YoicNitwit','Yvonne Li','profilePicString','Donec sagittis, metus eget tristique sodales, ante magna venenatis nisl, feugiat accumsan arcu elit ut risus. Suspendisse malesuada tortor urna, vel rutrum purus luctus ac. Cras sit amet nibh ullamcorper, volutpat mi sed, commodo purus.','2'),
('141','Fiddledeedee562','Ashley Snyder','profilePicString','Donec malesuada tellus ante, at rhoncus turpis mollis ut. Proin convallis orci ac quam varius gravida nec in ex. Phasellus faucibus est congue arcu molestie, at lacinia nunc pellentesque.','3'),
('142','Carva3Kvetch','Fabian Love','profilePicString','Nunc ullamcorper libero quis ex aliquet, at vulputate nulla condimentum. Nullam sollicitudin nunc a dui tempus, vitae imperdiet lorem interdum. Fusce maximus sit amet orci sed aliquam. Donec quis quam sed nulla condimentum venenatis.','3'),
('143','DayssinBower','Casandra Thompson','profilePicString','Etiam at tincidunt turpis. Morbi pharetra ullamcorper mi et condimentum. Suspendisse aliquet tristique lacus ac fringilla. Nunc mollis est in pharetra volutpat. In vehicula metus in auctor posuere.','4'),
('144','Dark_tornQuack','Maximo Mcknight','profilePicString','Duis ac condimentum leo, vel laoreet nisi. Proin suscipit neque sit amet metus blandit, id dignissim nunc interdum.','4'),
('145','Tech_ponyWoozy','Roberta Mcdowell','profilePicString','Pellentesque molestie, nulla posuere mattis molestie, quam mauris tristique turpis, nec dignissim erat libero eu nisi.','4');


--
-- farmers
--

INSERT INTO `farmer` (`account_id`, `name`, `phone`, `profilePic`, `info`, `link`, `rating`, `region`, `municipality`, `address`, `city`, `province`, `postal_code`) VALUES 
    (6, 'Misty River Farmstead', '819-224-7329', 'empty', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget metus et ante eleifend tempor. Sed ac massa euismod, lobortis dolor in, lobortis odio.', 'http://www.example.com/?arithmetic=afternoon&acoustics=berry', 5, 'Saguenay-Lac-Saint-Jean', 'Le Domaine-du-Roy', '527 rue Levy', 'Roberval', 'QC', 'G8H 3H2'),
    (7, 'Sleeping Hills Fields', '438-411-4545', 'empty', 'Donec nec elit consectetur, elementum tortor eget, pellentesque nulla. Quisque lacinia commodo mi, vel pulvinar nulla eleifend at. Cras tortor nibh, facilisis eget enim nec, commodo tincidunt ex.', 'https://www.example.com/board/afterthought?aunt=birthday&argument=bee', 5, 'Montreal', 'Montreal', '1662 rue Ontario Ouest', 'Montreal', 'QC', 'H3Z 2P8'),
    (8, 'Crossroad Farms', '819-651-8286', 'empty', 'Curabitur eget dignissim sapien. Sed non convallis libero. Nullam posuere laoreet egestas.', 'https://ball.example.com/', 2.8, 'Beauce-Centre', 'Chaudière-Appalaches', '1519 Boulevard Laflèche', 'Beauceville', 'QC', 'H2R 2E7'),
    (9, 'Paradise Meadow', '418-672-4146', 'empty', 'Etiam dui arcu, mattis sed molestie quis, aliquet nec lacus. Proin aliquet metus ac mi volutpat, id cursus nisi gravida. Phasellus tellus dolor, lobortis in fringilla ut, pretium ac ex.', 'http://www.example.com/birthday.php', 2.0, 'Côte-Nord', 'La Houte-Côte-Nord', '4359 St Jean Baptiste St', 'Les Escoumins', 'QC', 'G0T 1K1'),
    (10, 'Sweet Dreams Orchard', '819-128-1783', 'empty', 'Mauris efficitur, est sed tincidunt tempus, metus ante tempus dui, et dapibus urna tortor ut nisl. Integer nec viverra ligula. Aenean eu nulla a mauris tristique convallis.', 'http://www.example.com/authority.html', 4.1, 'Montérégie', 'Les Maskoutains', '432 St Maurice St', 'Saint-Hyacinthe', 'QC', 'J2R 1L1'),
    (11, 'Oakey Dokey Farmstead', '819-428-0365', 'empty', 'Aenean convallis, dui non efficitur laoreet, eros ipsum suscipit risus, ut commodo dolor nisl vitae massa. Suspendisse pretium consectetur lacinia.', 'https://www.example.org/ants', 5, 'Mauricie', 'Les Chenaux', '463 Boul. de la Perade', 'Saint-Luc-de-Vincennes', 'QC', 'J1T-1A3'),
    (12, 'Moonlight Ranch', '438-659-3005', 'empty', 'Donec tellus leo, porta eu purus sed, tempus vulputate diam. Aliquam elit mi, tempor a nisl vel, tincidunt lacinia nisi.', 'http://www.example.com/', 3, 'Abitibi-Témiscamingue', 'Témiscamingue', '456 Nicolet St', 'Ville-Marie', 'QC', 'J9V-1A1'),
    (13, 'Lucky Star Acres', '819-592-8656', 'empty', 'Aliquam pulvinar tristique magna, non feugiat magna vestibulum a. Nullam tincidunt arcu massa, sit amet auctor mauris sodales quis. Sed at dolor justo.', 'https://www.example.com/', 4, 'Mauricie', 'Les Jardins-de-Napierville', '456 Boul. St-Jean', 'Napierville', 'QC', 'J0J-5L0'),
    (14, 'Old Stone Farm', '450-105-1738', 'empty', 'Mauris pharetra maximus elementum. Aenean quis pharetra tortor. Nulla facilisi. Proin quis pellentesque enim. Quisque ornare metus in lectus feugiat, et laoreet diam lobortis. Aliquam lacinia est maximus, semper eros vel, tincidunt eros. Maecenas facilisis enim in venenatis mollis.', 'http://www.example.edu/bells/bridge.php', 3, 'Laval', 'Laval', '3052 Boul. Dagenais O.', 'Laval', 'QC', 'H8R-2L8'),
    (15, 'Willow Creek Farms', '418-360-0530', 'empty', 'Aenean nec tristique augue, in fermentum erat. Pellentesque dui augue, scelerisque sit amet neque in, tincidunt faucibus augue. Aenean aliquam tellus est, in dignissim erat tincidunt tempus.', 'http://www.example.com/authority.aspx?bottle=action', 5, 'Montérégie', 'La Vallée-du-Richelieu', 'McMasterville', '1234 Boulevard St', 'QC', 'J3G-6N9'),
    (16,'Badger Hill Farm', '418-027-7405', 'empty', 'Etiam tempus consequat massa sed laoreet. Integer in orci id massa efficitur luctus eu ut purus. Praesent interdum, velit ut bibendum lacinia, mauris nisl laoreet metus, eget laoreet nibh tellus a quam.', 'http://www.example.com/?birds=birth&birthday=brass', 5, 'Laurentides', 'Deux-Montagnes', '2563 Principale St', 'Saint-Eustache', 'QC', 'J7P-0H0'),
    (17, 'Hickory Homestead', '450-787-2294', 'empty', 'Sed elit tortor, aliquam vel justo a, fermentum pulvinar augue. Suspendisse consequat et lectus vel elementum. Pellentesque aliquam purus pellentesque est hendrerit lacinia.', 'http://www.example.com/battle', 4, 'Bas-Saint-Laurent', 'La Mitis', '120 St Pierre St', 'Val-Jean', 'QC', 'J7R-1P2'),
    (18, 'Farmy McFarmstead', '450-555-1234', 'empty', 'Sed elit tortor, aliquam vel justo a, fermentum pulvinar augue. Suspendisse consequat et lectus vel elementum. Pellentesque aliquam purus pellentesque est hendrerit lacinia.', 'http://www.example.com/farm', 1, 'Bas-Saint-Haute-Cote-Nord-Ouest-Témiscamingue', 'Rivière-Rouge-de-Haute-Bas-Mont-Montagne', "1234 Boul. St-Jules-de-la-Valée-de-l'Orme-Est", 'Ste-Hèlene-de-Mont-Marceau-de-Bienville', 'QC', 'H0H-0H0'),
    (19, 'Schrute Farms', '450-555-1234', 'empty', 'Sed elit tortor, aliquam vel justo a, fermentum pulvinar augue. Suspendisse consequat et lectus vel elementum. Pellentesque aliquam purus pellentesque est hendrerit lacinia.', 'http://www.example.com/farm', 1, 'Haute-Saint-Haute-Cote-Nord-Ouest', 'Rivière-Bleu-de-Bas-Bas-Mont-Montrouge', "1234 Boul. St-St-St-de-la-Valée-de-l'Orme-Ouest", 'Ste-Georgette-de-Mont-Marceau-de-Boulleau', 'QC', 'H0H-0H0'),
    (20, 'Potato Palace', '450-555-1234', 'empty', 'Sed elit tortor, aliquam vel justo a, fermentum pulvinar augue. Suspendisse consequat et lectus vel elementum. Pellentesque aliquam purus pellentesque est hendrerit lacinia.', 'http://www.example.com/farm', 1, 'Haute-Saint-Haute-Cote-Nord-Sud', 'Rivière-Jaune-de-Haute-Haute-Rivière-Montrouge', "1234 Boul. Ste-Juliette-de-la-Lac-du-Lac'Orme-Nord", 'Stes-Georgettes-des-Monts-Marceaux-des-Boulleaux', 'QC', 'H0H-0H0');


--
-- foodbanks
--

INSERT INTO `foodbank` (`account_id`, `name`, `phone`, `profilePic`, `info`, `link`, `rating`, `region`, `municipality`, `address`, `city`, `province`, `max_distance`, `availability_start`, `availability_end`) VALUES (16, 'N&A Foods Co.', '438-411-4545', 'empty', "This is a blurb describing a foodbank. Very much info, very descriptive. Wow, what a great foodbank, can't wait to give them food. Such a great place. Wow.", 'http://foodbanktopia.com', 0, 'Nord-Pas-De-Calais', 'Haute-Sainte-Georgette', '1265 De Rue St', 'Le Bront-James', 'QC', '25km', '2023-08-01', '2023-10-31');
INSERT INTO `foodbank` (`account_id`, `name`, `phone`, `profilePic`, `info`, `link`, `rating`, `region`, `municipality`, `address`, `city`, `province`, `max_distance`, `availability_start`, `availability_end`) VALUES (17, 'IGA', '438-411-4845', 'empty', "This is a blurb describing a foodbank. Very much info, very descriptive. Wow, what a great foodbank, can't wait to give them food. Such a great place. Wow.", 'http://foodbankopolis.com', 0, 'Montreal', 'Montreal', '1265 St-Catherine', 'Montreal', 'QC', '50km', '2023-08-01', '2023-10-31');
INSERT INTO `foodbank` (`account_id`, `name`, `phone`, `profilePic`, `info`, `link`, `rating`, `region`, `municipality`, `address`, `city`, `province`, `max_distance`, `availability_start`, `availability_end`) VALUES (18, 'Fondation Jean-Lavalée', '438-421-4445', 'empty', "This is a blurb describing a foodbank. Very much info, very descriptive. Wow, what a great foodbank, can't wait to give them food. Such a great place. Wow.", 'http://foodbankorama.com', 0, 'Laurentides', 'Deux-Montagnes', '1265 25e Avenue', 'Deux-Montagnes', 'QC', '25km', '2023-08-01', '2023-10-31');
INSERT INTO `foodbank` (`account_id`, `name`, `phone`, `profilePic`, `info`, `link`, `rating`, `region`, `municipality`, `address`, `city`, `province`, `max_distance`, `availability_start`, `availability_end`) VALUES (19, 'Fondation St-Antoine', '438-441-4545', 'empty', "This is a blurb describing a foodbank. Very much info, very descriptive. Wow, what a great foodbank, can't wait to give them food. Such a great place. Wow.", 'http://foodbankia.com', 0, 'Monteregie', "Marguerite-D'Youville", '1265 Principale St', 'Verchères', 'QC', '50km', '2023-08-01', '2023-10-31');
INSERT INTO `foodbank` (`account_id`, `name`, `phone`, `profilePic`, `info`, `link`, `rating`, `region`, `municipality`, `address`, `city`, `province`, `max_distance`, `availability_start`, `availability_end`) VALUES (20, 'Metro', '438-444-4445', 'empty', "This is a blurb describing a foodbank. Very much info, very descriptive. Wow, what a great foodbank, can't wait to give them food. Such a great place. Wow.", 'http://foodbankistan.com', 0, 'Mauricie', 'La Tuque', '1245 Principale St', 'La Tuque', 'QC', '75km', '2023-08-01', '2023-10-31');
INSERT INTO `foodbank` (`account_id`, `name`, `phone`, `profilePic`, `info`, `link`, `rating`, `region`, `municipality`, `address`, `city`, `province`, `max_distance`, `availability_start`, `availability_end`) VALUES (20, 'Johnson Brothers Foods inc.', '438-414-1485', 'empty', "This is a blurb describing a foodbank. Very much info, very descriptive. Wow, what a great foodbank, can't wait to give them food. Such a great place. Wow.", 'http://foodmark.com', 0, 'Lanaudiere', 'Joliette', '1347 Principale St', 'Joliette', 'QC', '50km', '2023-08-01', '2023-10-31');
INSERT INTO `foodbank` (`account_id`, `name`, `phone`, `profilePic`, `info`, `link`, `rating`, `region`, `municipality`, `address`, `city`, `province`, `max_distance`, `availability_start`, `availability_end`) VALUES (21, 'MT', '438-444-4445', 'empty', "This is a blurb describing a foodbank. Very much info, very descriptive. Wow, what a great foodbank, can't wait to give them food. Such a great place. Wow.", 'http://foodbankastan.com', 0, 'Mauricie', 'None', '1245 Principale St', 'La Tuque', 'QC', '75km', '2023-08-01', '2023-10-31');
INSERT INTO `foodbank` (`account_id`, `name`, `phone`, `profilePic`, `info`, `link`, `rating`, `region`, `municipality`, `address`, `city`, `province`, `max_distance`, `availability_start`, `availability_end`) VALUES (22, 'E&E Food Dist. Co.', '438-444-4445', 'empty', "This is a blurb describing a foodbank. Very much info, very descriptive. Wow, what a great foodbank, can't wait to give them food. Such a great place. Wow.", 'http://foodbankland.com', 0, 'Montreal', 'Montreal', '1545 Principale St', 'Montreal', 'QC', '100km', '2023-08-01', '2023-10-31');
INSERT INTO `foodbank` (`account_id`, `name`, `phone`, `profilePic`, `info`, `link`, `rating`, `region`, `municipality`, `address`, `city`, `province`, `max_distance`, `availability_start`, `availability_end`) VALUES (23, 'Fondation Levesque', '438-444-4455', 'empty', "This is a blurb describing a foodbank. Very much info, very descriptive. Wow, what a great foodbank, can't wait to give them food. Such a great place. Wow.", 'http://foodbanks.com', 0, 'Montreal', 'Montreal', '1545 Decarie St', 'Montreal', 'QC', '10km', '2023-08-01', '2023-10-31');
INSERT INTO `foodbank` (`account_id`, `name`, `phone`, `profilePic`, `info`, `link`, `rating`, `region`, `municipality`, `address`, `city`, `province`, `max_distance`, `availability_start`, `availability_end`) VALUES (24, 'Fondation La Belle Province', '438-444-4445', 'empty', "This is a blurb describing a foodbank. Very much info, very descriptive. Wow, what a great foodbank, can't wait to give them food. Such a great place. Wow.", 'http://foodbank.com', 0, 'Chaudière-Appalaches', 'Levis', '1565 Principale St', 'Levis', 'QC', '50km', '2023-08-01', '2023-10-31');


--
-- groups
--

INSERT INTO `groups` (`name`, `info`, `link`, `rating`, `status`, `gleaner_id`, `region`, `municipality`, `province`, `maxDistance`, `availability_start`, `availability_end`) VALUES 
    ("Environnement Matanie", "Page de la MRC de La Matanie dédiée à outiller sur la gestion des MR et l'environnement", "https://www.facebook.com/environnementmatanie.mrcdelamatanie/", 4, "private", 1, "Bas-Saint-Laurent ", "La Matanie", "QC", "50km", "2023-05-31", "2023-11-15"),
    ("Les Fruits Partagés", "We are a gleaning group that loves to glean. Here is some information about our gleaning group: We are a gleaning group that loves to glean. To glean is to live. Thank you for reading.", "https://www.facebook.com/fruitspartages/", 5, "public", 2, "Bas-Saint-Laurent ", "Rimouski-Neigette", "QC", "25km", "2023-05-31", "2023-11-15"),
    ("Artharecolte", "Inspirés par l’initiative de Maski-Récolte en Mauricie, des partenaires locaux ont créé et financé le projet Artha-Récolte, qui a débuté en juin 2020. La mission d'Artha-Récolte est de réduire le gaspillage alimentaire en facilitant la cueillette et la transformation des surplus des maraîchers de la MRC d'Arthabaska.", "https://www.artharecolte.com/", 5, "public", 3, "Centre-du-Québec", "Arthabaska", "QC", "75km", "2023-05-31", "2023-11-15"),
    ("Meilleur après", "Entreprise d'économie sociale en sécurité alimentaire pour un système alimentaire viable et durable.", "https://www.facebook.com/meilleurapres/", 4, "public", 4, "Centre-du-Québec", "Drummond", "QC", "25km", "2023-05-31", "2023-11-15"),
    ("Champ d’actions - Projet collectif en sécurité alimentaire", "Entreprendre Sherbrooke propose des services d’accompagnement personnalisés et sans frais pour les entreprises privées et collectives œuvrant dans les secteurs du commerce, des services et de l’agroalimentaire sur le territoire de Sherbrooke. Notre équipe a le succès de vos projets d’affaires à cœur !", "https://www.entreprendresherbrooke.com/projets/innovation-sociale/projet-collectif-en-securite-alimentaire/", "5", "private", "5", "Estrie", "Sherbrooke", "QC", "50km", "2023-05-31", "2023-11-15"),
    ("Estrie Recolte", "Initiatives citoyennes de glanage dans la région de Memphré-Magog. Pour contrer le gaspillage alimentaire dans les champs, Des bénévoles récoltent les surplus.", "https://www.facebook.com/Estrie-Recolte-110588398062159", 4, "public", 6, "Estrie", "Memphrémagog", "QC", "25km", "2023-05-31", "2023-11-15"),
    ("Nourrir Notre Monde Bonaventure", "Nourrir notre monde est un mouvement collectif qui se mobilise pour favoriser une alimentation local.", "https://www.facebook.com/NourrirNotreMondeBonaventure/", 5, "public", 7, "Gaspésie-Îles-de-la-Madeleine", "Bonaventure", "QC", "50km", "2023-05-31", "2023-11-15"),
    ("Les Anges-Jardins", "Les Anges-Jardins est un projet visant à une plus grande autonomie alimentaire en Haute-Gaspésie.\r\n", "https://www.facebook.com/people/Les-Anges-Jardins/100072542675593/", 5, "public", 8, "Gaspésie-Îles-de-la-Madeleine", "Haute-Gaspésie", "QC", "25km", "2023-05-31", "2023-11-15"),
    ("Les Butineurs", "Notre mission est de faciliter la récolte et le partage des surplus des fruits et des légumes sur le territoire de la MRC Lac-St-Jean est.", "https://lesbutineurs.ca/", 5, "private", 9, "Lac-Saint-Jean", "Lac-St-Jean-Est", "QC", "50km", "2023-05-31", "2023-11-15"),
    ("Transformation alimentaire Montcalm", "Transformation alimentaire Montcalm est un projet-pilote dont la mission est de transformer les surp", "https://www.facebook.com/transformationalimentairemontcalm", 4, "public", 10, "Lanaudière", "Montcalm", "QC", "25km", "2023-05-31", "2023-11-15"),
    ("Solidaires chez nous", "We are a gleaning group that loves to glean. Here is some information about our gleaning group: We are a gleaning group that loves to glean. To glean is to live. Thank you for reading.", "https://www.facebook.com/SolidairesChezNous", 3, "private", 11, "Lanaudière", "Les Moulins", "QC", "50km", "2023-05-31", "2023-11-15"),
    ("Des Chenaux récolte", "Faciliter la cueillette et la transformation des surplus d’entreprises maraîchères, d’arbres fruitiers et des potagers privés dans la MRC des Chenaux.", "https://deschenauxrecolte.com/", 5, "public", 12, "Mauricie", "Les Chenaux", "QC", "25km", "2023-05-31", "2023-11-15"),
    ("Maski Récolte", "En 2018, Maski Récolte voit le jour dans la MRC de Maskinongé grâce à Suzie Paquin, coordonnatrice de Maski en forme. Le principe est simple : organiser des activités de glanage citoyennes pour récolter les surplus au champ chez les entreprises maraichères participantes. Les surplus sont séparés à parts égales entre les citoyen.ne.s cueilleur.euse.s, les producteur.trice.s et des organismes communautaires.", "https://www.maskirecolte.com/", 4, "public", 13, "Mauricie", "Maskinongé", "QC", "50km", "2023-05-31", "2023-11-15"),
    ("Mékinac Récolte", "Initiative de récupération de surplus alimentaires dans les entreprises maraîchères, les potagers et les arbres fruitiers citoyens pour réduire le gaspillage alimentaire et contribuer à la sécurité alimentaire de la communauté.", "https://www.facebook.com/MekinacRecolte/", 4, "public", 14, "Mauricie", "Mékinac", "QC", "75km", "2023-05-31", "2023-11-15"),
    ("Shawi Récolte\r\n", "Projet de glanage de surplus agricoles chez les maraîchers et propriétaires d'arbres fruitiers afin d'éviter les pertes et de contribuer à la sécurité alimentaire des gens d’ici. ", "https://www.facebook.com/shawirecolte/",5, "public", 15, "Mauricie", "Shawinigan", "QC", "25km", "2023-05-31", "2023-11-15"),
    ("La Brouette - Agriculture urbaine et écocitoyenneté en Mauricie", "La Brouette, c’est un organisme à but non lucratif qui a pour mission de développer et de promouvoir l’agriculture urbaine et un mode de vie sain et écoresponsable auprès des citoyens, organismes, institutions, entreprises et municipalités de la Mauricie.", "https://www.facebook.com/labrouette.ca", 5, "public", 16, "Mauricie", "Trois-Rivières", "QC", "75km", "2023-05-31", "2023-11-15"),
    ("Récoltes oubliées", "Récoltes d'arbres fruitiers et de jardins. Redistribution à échelle locale.", "https://www.facebook.com/recoltesoubliees/", 5, "public", 17, "Montérégie", "Pierre-de-Saurel", "QC", "50km", "2023-05-31", "2023-11-15"),
    ("Table de solidarité alimentaire de la Vallée", "Les membres de la Table souhaitent travailler dans une optique de pouvoir d'agir individuel et colle", "https://www.facebook.com/TablesolidaritealimentaireVallee", 4, "public", 18, "Montérégie", "La Vallée-du-Richelieu", "QC", "25km", "2023-05-31", "2023-11-15"),
    ("Alternative Aliment-Terre", "Alternative Aliment-Terre récupère des aliments au champ et des surplus agricoles pour améliorer l'accès aux aliments sains et soutenir la création d’initiatives collectives pour réduire le gaspillage et favoriser l'autonomie alimentaire.", "https://www.facebook.com/alternative.aliment.terre/", 5, "public", 19, "Montérégie", "Haut-Richelieu", "QC", "75km", "2023-05-31", "2023-11-15"),
    ("Jardins solidaires", "Ancrée dans son milieu, La Croisée met en valeur les forces des gens de la communauté à travers des actions et des projets développés pour, par et avec eux!", "https://www.lacroiseedelongueuil.qc.ca/", 5, "private", 20, "Montérégie", "Longueuil", "QC", "50km", "2023-05-31", "2023-11-15"),
    ("Collectif 21", "Nombreux sont les arbres fruitiers un peu partout dans la ville qui ont beaucoup à donner et dont malheureusement, les fruits sont perdus. L'équipe de glanage organise donc des récoltes anti-gaspillage et partage les fruits ainsi sauvés entre les propriétaires, les glaneuses et glaneurs venus récolter et les groupes communautaires capables de traiter les ressources.", "https://site.collectif21.org/les-initiatives/glanage-urbain",4, "public", 21, "Montérégie", "Boucherville", "QC", "25km", "2023-05-31", "2023-11-15"),
    ("Les Fruits Défendus Montréal", "Collectif bénévole de cueillette de fruits: réduire le gaspillage alimentaire, augmenter la séc.", "https://www.facebook.com/lesfruitsdefendus.montreal/", 5, "public", 22, "Montréal", "Montréal", "QC", "50km", "2023-05-31", "2023-11-15"),
    ("Escouade anti-gaspillage alimentaire", "L’Escouade anti-gaspillage alimentaire a été créée par les membres de la Table de concertation sur la faim et le développement social de l’Outaouais (TCFDSO) avec comme objectif qu’ensemble, les citoyens et les entreprises de l’Outaouais luttent contre la faim en canalisant les produits alimentaires autrement jetés ou gaspillés vers les organismes qui luttent contre la faim en Outaouais.", "https://tcfdso.org/escouade/", 5, "public", 23, "Outaouais", "Grand Gatineau", "QC", "75km", "2023-05-31", "2023-11-15"),
    ("Eurêko", "Organisme communautaire à but non lucratif œuvrant dans le domaine de l'environnement et du développement durable principalement au Saguenay.", "https://www.facebook.com/EurekoQc", 5, "private", 24, "Saguenay", "Fjord-du-Saguenay", "QC", "75km", "2023-05-31", "2023-11-15");


--
-- events
--

INSERT INTO `event` (`name`, `info`, `urgency`, `farmer_id`,`availabilities_start`,`availabilities_end`) VALUES 
    ('Need Potatoes Harvested', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque erat non neque sagittis tincidunt. Nunc vitae rhoncus nulla.', 'Moderate', 8, '2023-08-16', '2023-10-31'),
    ('Tomatoes for Gleaning!', 'Phasellus scelerisque risus ut iaculis pretium. Etiam elementum interdum libero, nec consequat purus eleifend quis. Pellentesque rutrum magna eu magna convallis, eget ornare mi dapibus. ', 'High', 9, '2023-08-16', '2023-10-31'),
    ('Zucchinis, Cucumbers and Squash, need to be picked.', ' Praesent ultricies massa lectus, vitae ullamcorper ante rhoncus sed. Nunc ligula dui, maximus a orci non, varius auctor diam.', 'Low', 10, '2023-08-16', '2023-10-31'),
    ('Raspberries!', 'In semper enim orci, sit amet scelerisque lectus porta et. In consequat lectus eu augue congue, at dignissim nisl pellentesque. Fusce rhoncus ipsum condimentum feugiat tristique', 'Low', 11, '2023-08-16', '2023-10-31');


--
-- participation
--

INSERT INTO `participation` (`event_id`, `groups_id`, `foodbank_id`) VALUES (1, 9 , 1 );
INSERT INTO `participation` (`event_id`, `groups_id`, `foodbank_id`) VALUES (2, 22 , 2 );
INSERT INTO `participation` (`event_id`, `groups_id`, `foodbank_id`) VALUES (3, 20 , 10 );
INSERT INTO `participation` (`event_id`, `groups_id`, `foodbank_id`) VALUES (4, 19 , 1 );