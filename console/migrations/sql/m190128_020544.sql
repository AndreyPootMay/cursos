CREATE SCHEMA IF NOT EXISTS `courses` DEFAULT CHARACTER SET utf8 ;
USE `courses` ;

-- -----------------------------------------------------
-- Table `courses`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `courses`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `auth_key` VARCHAR(32) NOT NULL,
  `password_hash` VARCHAR(255) NOT NULL,
  `password_reset_token` VARCHAR(255) NULL DEFAULT NULL,
  `email` VARCHAR(255) NOT NULL,
  `status` SMALLINT(6) NOT NULL DEFAULT '10',
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username` (`username` ASC),
  UNIQUE INDEX `email` (`email` ASC),
  UNIQUE INDEX `password_reset_token` (`password_reset_token` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `courses`.`courses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `courses`.`courses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `course_name` VARCHAR(255) NOT NULL,
  `course_details` VARCHAR(255) NOT NULL,
  `evaluation` INT(5) NULL DEFAULT NULL,
  `category` VARCHAR(50) NOT NULL,
  `price` DECIMAL(16,4) NOT NULL,
  `students` VARCHAR(250) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_courses_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_courses_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `courses`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `courses`.`announces`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `courses`.`announces` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `courses_id` INT(11) NOT NULL,
  `title` VARCHAR(50) NOT NULL,
  `content` VARCHAR(255) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_announces_courses1_idx` (`courses_id` ASC),
  CONSTRAINT `fk_announces_courses1`
    FOREIGN KEY (`courses_id`)
    REFERENCES `courses`.`courses` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `courses`.`faq`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `courses`.`faq` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `courses_id` INT(11) NOT NULL,
  `question` VARCHAR(255) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_faq_courses1_idx` (`courses_id` ASC),
  INDEX `fk_faq_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_faq_courses1`
    FOREIGN KEY (`courses_id`)
    REFERENCES `courses`.`courses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_faq_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `courses`.`user` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `courses`.`section`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `courses`.`section` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `courses_id` INT(11) NOT NULL,
  `section_name` VARCHAR(50) NOT NULL,
  `section_number` INT(11) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_section_courses1_idx` (`courses_id` ASC),
  CONSTRAINT `fk_section_courses1`
    FOREIGN KEY (`courses_id`)
    REFERENCES `courses`.`courses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `courses`.`lesson`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `courses`.`lesson` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `section_id` INT(11) NOT NULL,
  `number_lesson` INT(11) NOT NULL,
  `name` VARCHAR(250) NOT NULL,
  `content` VARCHAR(250) NULL DEFAULT NULL,
  `video_url` VARCHAR(100) NULL DEFAULT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_lesson_section1_idx` (`section_id` ASC),
  CONSTRAINT `fk_lesson_section1`
    FOREIGN KEY (`section_id`)
    REFERENCES `courses`.`section` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `courses`.`migration`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `courses`.`migration` (
  `version` VARCHAR(180) NOT NULL,
  `apply_time` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`version`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `courses`.`my_courses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `courses`.`my_courses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `courses_id` INT(11) NOT NULL,
  `evaluation` INT(11) NULL DEFAULT NULL,
  `progress` INT(11) NOT NULL,
  `certification` TINYINT(1) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_my_courses_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_my_courses_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `courses`.`user` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `courses`.`profile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `courses`.`profile` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `first_name` VARCHAR(100) NOT NULL,
  `last_name` VARCHAR(100) NOT NULL,
  `occupation` VARCHAR(50) NOT NULL,
  `bio` VARCHAR(255) NULL DEFAULT NULL,
  `country` VARCHAR(50) NOT NULL,
  `city` VARCHAR(50) NOT NULL,
  `gender` CHAR(1) NOT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_profile_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_profile_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `courses`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `courses`.`resources`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `courses`.`resources` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `lesson_id` INT(11) NOT NULL,
  `filename` TEXT NOT NULL,
  `filepath` TEXT NOT NULL,
  `description` VARCHAR(255) NULL DEFAULT NULL,
  `active` TINYINT(1) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_resources_lesson1_idx` (`lesson_id` ASC),
  CONSTRAINT `fk_resources_lesson1`
    FOREIGN KEY (`lesson_id`)
    REFERENCES `courses`.`lesson` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
