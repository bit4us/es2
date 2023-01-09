CREATE TABLE `roles` 
    (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `name` VARCHAR(30) ,
        PRIMARY KEY (`id`)
    );

CREATE TABLE `users_roles` 
    (
        `userid` INT NOT NULL ,
        `roleid` INT NOT NULL,
        PRIMARY KEY (`userid`)
    );

CREATE TABLE `permissions`
    (
        `id` INT NOT NULL AUTO_INCREMENT,
        `description` VARCHAR(20),
        `role_id` INT NOT NULL,
        `read` BOOLEAN NOT NULL,
        `write` BOOLEAN NOT NULL,
        `create` BOOLEAN NOT NULL,
        PRIMARY KEY (`id`)
    );

CREATE TABLE `role_permissions`
    (
        `roleid` INT NOT NULL,
        `permissionid` INT NOT NULL,
        PRIMARY KEY(`roleid`)
    )