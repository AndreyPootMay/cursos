DROP TABLE `user`;

CREATE TABLE `profile` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `first_name` VARCHAR(100) NOT NULL,
  `last_name` VARCHAR(100) NOT NULL,
  `occupation` VARCHAR(50) NOT NULL,
  `bio` VARCHAR(255) DEFAULT NULL,
  `country` VARCHAR(50) NOT NULL,
  `city` VARCHAR(50) NOT NULL,
  `gender` CHAR(1) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `courses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `course_name` VARCHAR(255) NOT NULL,
  `course_details` VARCHAR(255) NOT NULL,
  `evaluation` INT(5) DEFAULT NULL,
  `category` VARCHAR(50) NOT NULL,
  `price` DECIMAL(16,4) NOT NULL,
  `students` VARCHAR(250) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `announces` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `courses_id` INT(11) NOT NULL,
  `title` VARCHAR(50) NOT NULL,
  `content` VARCHAR(255) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `faq` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `courses_id` INT(11) NOT NULL,
  `question` VARCHAR(255) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `my_courses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `courses_id` INT(11) NOT NULL,
  `evaluation` INT(11) DEFAULT NULL,
  `progress` INT(11) NOT NULL,
  `certification` TINYINT(1) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `section` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `courses_id` INT(11) NOT NULL,
  `section_name` VARCHAR(50) NOT NULL,
  `section_number` INT(11) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `lesson` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `sections_id` INT(11) NOT NULL,
  `number_lesson` INT(11) NOT NULL,
  `name` VARCHAR(250) NOT NULL,
  `content` VARCHAR(250) NULL,
  `video_url` VARCHAR(100) NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `resources` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `lesson_id` INT(11) NOT NULL,
  `filename` TEXT(255) NOT NULL,
  `filepath` TEXT(255) NOT NULL,
  `description` VARCHAR(255) NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32)  NOT NULL,
  `password_hash` varchar(255)  NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `active` TINYINT(1) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
);

