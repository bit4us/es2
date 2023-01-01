CREATE TABLE `meeting` 
    (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `image` VARCHAR(500),
        `title` VARCHAR(100),
        `description` VARCHAR(500),
        `date` TIMESTAMP,
        `location` VARCHAR(100),
        `location_map` VARCHAR(200),
        `ownerid` INT NOT NULL,
        PRIMARY KEY (`id`)
    );