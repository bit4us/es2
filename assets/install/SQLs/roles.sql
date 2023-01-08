CREATE TABLE `roles` 
    (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `description` VARCHAR(20) ,
        PRIMARY KEY (`id`)
    );

CREATE TABLE `users_roles` 
    (
        `userid` INT NOT NULL ,
        `roleid` INT NOT NULL,
        PRIMARY KEY (`userid`)
    );

CREATE TABLE `officers` 
    (
        `id` INT NOT NULL AUTO_INCREMENT ,
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

CREATE TABLE `roles_permissions`
    (
        `id` INT NOT NULL AUTO_INCREMENT,
        `description` VARCHAR(20),
        `role_id` INT NOT NULL,
        `read` BOOLEAN NOT NULL,
        `write` BOOLEAN NOT NULL,
        `create` BOOLEAN NOT NULL,
        PRIMARY KEY (`id`)
    );