CREATE TABLE `acl` 
    (
        `id` INT(40) NOT NULL AUTO_INCREMENT ,
        `description` VARCHAR(20) ,
        PRIMARY KEY (`id`)
    );

CREATE TABLE `users_acl` 
    (
        `userid` INT(40) NOT NULL AUTO_INCREMENT ,
        `aclid` VARCHAR(20) ,
        PRIMARY KEY (`userid`)
    );