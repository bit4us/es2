CREATE TABLE `log_operations` 
    (
        `id` INT(40) NOT NULL AUTO_INCREMENT ,
        `userID` INT(10) NOT NULL ,
        `labelicon` VARCHAR(50) NULL,
        `labeltype` VARCHAR(20) NOT NULL , 
        `operation` VARCHAR(200) NOT NULL , 
        `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
        PRIMARY KEY (`id`)
    );