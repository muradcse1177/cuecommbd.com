-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';


DROP TABLE IF EXISTS `about_us`;
CREATE TABLE `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `about` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `about_us` (`id`, `heading`, `about`) VALUES
(1,	'Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequature',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis. Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget.');

DROP TABLE IF EXISTS `company_info`;
CREATE TABLE `company_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `contact1` varchar(15) NOT NULL,
  `contact2` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `opening` varchar(15) DEFAULT NULL,
  `closing` varchar(15) DEFAULT NULL,
  `fblink` varchar(300) DEFAULT NULL,
  `twitlink` varchar(300) DEFAULT NULL,
  `youlink` varchar(300) DEFAULT NULL,
  `instalink` varchar(300) DEFAULT NULL,
  `linkedlink` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `company_info` (`id`, `name`, `logo`, `about`, `contact1`, `contact2`, `address`, `email`, `opening`, `closing`, `fblink`, `twitlink`, `youlink`, `instalink`, `linkedlink`) VALUES
(7,	'Cue Communication',	'/back_resource/images/upload/1525518601.31138088_576652442710197_6438092814914945024_n.jpg',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',	'01928992963',	'01862578652',	'32-Dhanmondi,Dhaka',	'cuecommbd@gmail.com',	'Saturday',	'Thusday',	'https://www.facebook.com/company/cue-communications-ltd-/',	'https://www.twitter.com/company/cue-communications-ltd-/',	'https://www.youtube.com/company/cue-communications-ltd-/',	'https://www.instagram.com/company/cue-communications-ltd-/',	'https://www.linkedin.com/company/cue-communications-ltd-/');

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `comment`) VALUES
(1,	'Syed Muradul Islam',	'muradcse1177@gmail.com',	'01929877307',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(2,	'Syed Muradul Islam',	'muradcse1177@gmail.com',	'01929877307',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(3,	'Syed Muradul Islam',	'muradcse1177@gmail.com',	'01929877307',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(4,	'Cue Communication Ltd.',	'cuecommbd@gmail.com',	'01929877307',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(5,	'Cue Communication Ltd.',	'cuecommbd@gmail.com',	'01929877307',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book');

DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `file` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `uploadBy` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO `contents` (`id`, `type`, `name`, `description`, `file`, `status`, `uploadBy`, `time`) VALUES
(1,	'Gallery',	'Latest Gallery',	'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.',	'/back_resource/images/upload/1525586768.g1.jpg',	'Active',	'Murad',	'2018-05-06 06:35:22'),
(2,	'Gallery',	'Latest Gallery',	'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.',	'/back_resource/images/upload/1525586826.g2.jpg',	'Active',	'Murad',	'2018-05-06 06:35:59'),
(4,	'Gallery',	'Latest Gallery',	'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.',	'/back_resource/images/upload/1525586846.g3.jpg',	'Active',	'Murad',	'2018-05-06 06:35:59'),
(5,	'Gallery',	'Latest Gallery',	'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.',	'/back_resource/images/upload/1525586850.g4.jpg',	'Active',	'Murad',	'2018-05-06 06:35:59'),
(6,	'Gallery',	'Latest Gallery',	'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.',	'/back_resource/images/upload/1525586854.g5.jpg',	'Active',	'Murad',	'2018-05-06 06:35:59'),
(7,	'Gallery',	'Latest Gallery',	'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.',	'/back_resource/images/upload/1525586860.g6.jpg',	'Active',	'Murad',	'2018-05-06 06:35:59'),
(8,	'Gallery',	'Latest Gallery',	'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.',	'/back_resource/images/upload/1525586866.g7.jpg',	'Active',	'Murad',	'2018-05-06 06:35:59'),
(9,	'Gallery',	'Latest Gallery',	'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.',	'/back_resource/images/upload/1525586869.g8.jpg',	'Active',	'Murad',	'2018-05-06 06:35:59'),
(10,	'Gallery',	'Latest Gallery',	'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.',	'/back_resource/images/upload/1525591487.g8.jpg',	'Inactive',	'Murad',	'2018-05-06 07:24:47'),
(11,	'Blog',	'SOLUTA VUM NOBIS',	'Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien. Donec ultricies faucibus ante in mattis earum rerum delectus in auctor sapien.',	'/back_resource/images/upload/1525587079.img1.jpg',	'Active',	'Murad',	'2018-05-06 06:11:19'),
(12,	'Blog',	'AENEAN NEC PURUS AC',	'Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien. Donec ultricies faucibus ante in mattis earum rerum hic a sapiente delectus.',	'/back_resource/images/upload/1525587110.img2.jpg',	'Active',	'Murad',	'2018-05-06 06:11:50'),
(13,	'Blog',	'MATTIS EARUM RERUM',	'Sed interdum interdum accumsan. Aenean nec purus ac orci finibus facilisis. In sit amet placerat nisl, in auctor sapien. Donec ultricies faucibus ante rerum hic a sapiente delectus in auctor sapien.',	'/back_resource/images/upload/1525587131.img3.jpg',	'Active',	'Murad',	'2018-05-06 06:12:11'),
(14,	'Testimonial',	'DOUGLAS JOE',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue tempor nisi sed luctus. Vestibulum semper quis enim vitae posuere. Vestibulum ac odio nec lorem commodo.',	'/back_resource/images/upload/1525587260.t5.jpg',	'Active',	'Murad',	'2018-05-06 06:14:20'),
(15,	'Testimonial',	'LAURA HILL',	'Fusce congue tempor nisi sed luctus. Vestibulum semper quis enim vitae posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac odio nec lorem commodo.',	'/back_resource/images/upload/1525587301.t6.jpg',	'Active',	'Murad',	'2018-05-06 06:15:01'),
(16,	'Testimonial',	'CHRISTOPHER',	'Vestibulum semper quis enim vitae posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue tempor nisi sed luctus. Vestibulum ac odio nec lorem commodo.',	'/back_resource/images/upload/1525587331.t7.jpg',	'Active',	'Murad',	'2018-05-06 06:15:31'),
(17,	'Gallery',	'Latest Gallery',	'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum ....',	'/back_resource/images/upload/1525756349.map.PNG',	'Inactive',	'Murad',	'2018-05-08 05:12:29'),
(18,	'Gallery',	'Syed Muradul Islam',	'What is Lorem Ipsum',	'/back_resource/images/upload/1525759478.Casdfghjkpture.PNG',	'Active',	'Murad',	'2018-05-08 06:04:38');

DROP TABLE IF EXISTS `cv_store`;
CREATE TABLE `cv_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `cv` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

INSERT INTO `cv_store` (`id`, `name`, `college`, `address`, `email`, `mobile`, `photo`, `cv`, `date`) VALUES
(33,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775280.t2.jpg',	'back_resource/images/upload/1525775280.EduKr.pdf',	'2018-05-08'),
(34,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775282.t2.jpg',	'back_resource/images/upload/1525775282.EduKr.pdf',	'2018-05-08'),
(35,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775282.t2.jpg',	'back_resource/images/upload/1525775282.EduKr.pdf',	'2018-05-08'),
(36,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775283.t2.jpg',	'back_resource/images/upload/1525775283.EduKr.pdf',	'2018-05-08'),
(37,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775283.t2.jpg',	'back_resource/images/upload/1525775283.EduKr.pdf',	'2018-05-08'),
(38,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775283.t2.jpg',	'back_resource/images/upload/1525775283.EduKr.pdf',	'2018-05-08'),
(39,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775284.t2.jpg',	'back_resource/images/upload/1525775284.EduKr.pdf',	'2018-05-08'),
(40,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775284.t2.jpg',	'back_resource/images/upload/1525775284.EduKr.pdf',	'2018-05-08'),
(41,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775285.t2.jpg',	'back_resource/images/upload/1525775285.EduKr.pdf',	'2018-05-08'),
(42,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775285.t2.jpg',	'back_resource/images/upload/1525775285.EduKr.pdf',	'2018-05-08'),
(43,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775285.t2.jpg',	'back_resource/images/upload/1525775285.EduKr.pdf',	'2018-05-08'),
(44,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775286.t2.jpg',	'back_resource/images/upload/1525775286.EduKr.pdf',	'2018-05-08'),
(45,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775286.t2.jpg',	'back_resource/images/upload/1525775286.EduKr.pdf',	'2018-05-08'),
(46,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775286.t2.jpg',	'back_resource/images/upload/1525775286.EduKr.pdf',	'2018-05-08'),
(47,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775287.t2.jpg',	'back_resource/images/upload/1525775287.EduKr.pdf',	'2018-05-08'),
(48,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775287.t2.jpg',	'back_resource/images/upload/1525775287.EduKr.pdf',	'2018-05-08'),
(49,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775288.t2.jpg',	'back_resource/images/upload/1525775288.EduKr.pdf',	'2018-05-08'),
(50,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775288.t2.jpg',	'back_resource/images/upload/1525775288.EduKr.pdf',	'2018-05-08'),
(51,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775289.t2.jpg',	'back_resource/images/upload/1525775289.EduKr.pdf',	'2018-05-08'),
(52,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775289.t2.jpg',	'back_resource/images/upload/1525775289.EduKr.pdf',	'2018-05-08'),
(53,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775290.t2.jpg',	'back_resource/images/upload/1525775290.EduKr.pdf',	'2018-05-08'),
(54,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775290.t2.jpg',	'back_resource/images/upload/1525775290.EduKr.pdf',	'2018-05-08'),
(55,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775290.t2.jpg',	'back_resource/images/upload/1525775290.EduKr.pdf',	'2018-05-08'),
(56,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775291.t2.jpg',	'back_resource/images/upload/1525775291.EduKr.pdf',	'2018-05-08'),
(57,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775291.t2.jpg',	'back_resource/images/upload/1525775291.EduKr.pdf',	'2018-05-08'),
(58,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775292.t2.jpg',	'back_resource/images/upload/1525775292.EduKr.pdf',	'2018-05-08'),
(59,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775292.t2.jpg',	'back_resource/images/upload/1525775292.EduKr.pdf',	'2018-05-08'),
(60,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775292.t2.jpg',	'back_resource/images/upload/1525775292.EduKr.pdf',	'2018-05-08'),
(61,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775293.t2.jpg',	'back_resource/images/upload/1525775293.EduKr.pdf',	'2018-05-08'),
(62,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775293.t2.jpg',	'back_resource/images/upload/1525775293.EduKr.pdf',	'2018-05-08'),
(63,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775294.t2.jpg',	'back_resource/images/upload/1525775294.EduKr.pdf',	'2018-05-08'),
(64,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775294.t2.jpg',	'back_resource/images/upload/1525775294.EduKr.pdf',	'2018-05-08'),
(65,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775294.t2.jpg',	'back_resource/images/upload/1525775294.EduKr.pdf',	'2018-05-08'),
(66,	'Syed Muradul Islam',	'DU',	'32-Dhanmondi,Dhaka',	'muradcse1177@gmail.com',	'01929877307',	'back_resource/images/upload/1525775295.t2.jpg',	'back_resource/images/upload/1525775295.EduKr.pdf',	'2018-05-08');

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `value` varchar(1000) DEFAULT NULL,
  `file` varchar(200) NOT NULL,
  `fblink` varchar(300) DEFAULT NULL,
  `twitlink` varchar(300) DEFAULT NULL,
  `linkedlink` varchar(300) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `employee` (`id`, `name`, `designation`, `value`, `file`, `fblink`, `twitlink`, `linkedlink`, `status`) VALUES
(1,	'MARK SOPHIA',	'Manager',	NULL,	'/back_resource/images/upload/1525592947.t1.jpg',	'https://www.facebook.com/muradcse1177',	'https://www.facebook.com/muradcse1177',	'https://www.facebook.com/muradcse1177',	'Active'),
(2,	'HENRY KEN',	'Event Manager',	NULL,	'/back_resource/images/upload/1525592970.t2.jpg',	'https://www.facebook.com/muradcse1177',	'https://www.facebook.com/muradcse1177',	'https://www.facebook.com/muradcse1177',	'Active'),
(3,	'LAURA HILL',	'Team Manager',	NULL,	'/back_resource/images/upload/1525592993.t3.jpg',	'https://www.facebook.com/muradcse1177',	'https://www.facebook.com/muradcse1177',	'https://www.facebook.com/muradcse1177',	'Active'),
(4,	'EDWARD',	'CEO& Founder',	NULL,	'/back_resource/images/upload/1525595544.t4.jpg',	'https://www.facebook.com/muradcse1177',	'https://www.facebook.com/muradcse1177',	'https://www.facebook.com/muradcse1177',	'Active');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `newsletter` (`id`, `email`) VALUES
(3,	'muradcse1177@gmail.com'),
(4,	'admin@admin.com'),
(5,	'admin@example.com'),
(6,	'cuecommbd@gmail.com'),
(7,	'muradcse1177@gmail.com');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `email`, `username`, `password`, `name`) VALUES
(5,	'muradcse1177@gmail.com',	'muradcse1177',	'81dc9bdb52d04dc20036dbd8313ed055',	'Syed Muradul Islam');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2018-05-08 15:36:59
