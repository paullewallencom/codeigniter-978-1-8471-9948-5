CREATE TABLE `error_logs` ( 
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`site_id` INT NOT NULL ,
`error` TEXT NOT NULL ,
`date` DATETIME NOT NULL 
) ENGINE = InnoDB;