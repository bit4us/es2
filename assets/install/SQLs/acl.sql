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

INSERT INTO `acl` 
            (description)
        VALUES
            ('basic user');
INSERT INTO `acl` 
            (description)
        VALUES
            ('meeting admin');
INSERT INTO `acl` 
            (description)
        VALUES
            ('front end admin');
INSERT INTO `acl` 
            (description)
        VALUES
            ('group admin');
INSERT INTO `acl` 
            (description)
        VALUES
            ('main admin');

INSERT INTO `users_acl` 
            (userid, aclid)
        VALUES
            (1, 5);
INSERT INTO `users_acl` 
            (userid, aclid)
        VALUES
            (2, 1);
