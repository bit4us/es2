CREATE TABLE `roles` 
    (
        `id` INT(40) NOT NULL AUTO_INCREMENT ,
        `description` VARCHAR(20) ,
        PRIMARY KEY (`id`)
    );

CREATE TABLE `users_roles` 
    (
        `userid` INT(40) NOT NULL AUTO_INCREMENT ,
        `roleid` VARCHAR(20) ,
        PRIMARY KEY (`userid`)
    );

CREATE TABLE `officers` 
    (
        `id` INT(40) NOT NULL AUTO_INCREMENT ,
        `description` VARCHAR(20) ,
        PRIMARY KEY (`id`)
    );

CREATE TABLE `users_officers` 
    (
        `userid` INT(40) NOT NULL AUTO_INCREMENT ,
        `officersid` VARCHAR(20) ,
        `assignmentdate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
        PRIMARY KEY (`userid`)
    );
