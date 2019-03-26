CREATE TABLE `catalogs` (
	`id` INT(11) NULL,
	`catalog_id` INT(11) NULL,
	`catalog_type` INT(11) NULL,
	`catalog_name` VARCHAR(100) NULL,
	`active` TINYINT(1) NULL,
	`created_at` DATETIME NULL,
	`created_by` INT NULL,
	`updated_at` DATETIME NULL,
	`updated_by` INT NULL
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

CREATE TABLE `catalogs_type` (
	`id` INT(11) NULL,
	`catalog_type` INT(11) NULL,
	`singular_name` VARCHAR(100) NULL,
	`plural_name` VARCHAR(100) NULL,
	`order_menu` TINYINT(2) NULL
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
