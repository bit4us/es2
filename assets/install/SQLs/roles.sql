CREATE TABLE `roles` 
    (
        `id` INT(40) NOT NULL AUTO_INCREMENT ,
        `description` VARCHAR(20) ,
        PRIMARY KEY (`id`)
    );

CREATE TABLE `users_roles` 
    (
        `userid` INT(40) NOT NULL ,
        `roleid` INT(20) NOT NULL,
        PRIMARY KEY (`userid`)
    );

CREATE TABLE `officers` 
    (
        `id` INT(40) NOT NULL AUTO_INCREMENT ,
        `description` VARCHAR(50) ,
        PRIMARY KEY (`id`)
    );

CREATE TABLE `users_officers` 
    (
        `userid` INT,
        `officersid` INT ,
        `assignmentdate` TIMESTAMP , 
        PRIMARY KEY (`userid`)
    );
