CREATE TABLE `Users` 
    ( 
        `id` INT(10) NOT NULL AUTO_INCREMENT , 
        `email` VARCHAR(50) NOT NULL , 
        `password` VARCHAR(50) NOT NULL, 
        `firstName` VARCHAR(50) NOT NULL, 
        `lastName` VARCHAR(50) NOT NULL, 
        `avatar` VARCHAR(50) NULL, 
        `session` VARCHAR(20) NOT NULL, 
        `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
        PRIMARY KEY (`id`)
    );