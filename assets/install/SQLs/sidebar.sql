CREATE TABLE `sidebar`
    (
        `id` INT NOT NULL AUTO_INCREMENT,
        `position` INT NOT NULL,
        `parent` INT,
        `title` VARCHAR(50),
        `link` VARCHAR(250),
        `accordion` BOOLEAN NOT NULL,
        `icon` VARCHAR(1000),
        PRIMARY KEY (`id`)
    );

INSERT INTO sidebar 
  (
    position,
    parent,
    title,
    link,
    accordion,
    icon
  )
values 
  (
    1,
    NULL,
    'home',
    '/app/dashboard',
    false,
    '<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" /><rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" /><rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" /><rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />'
  );

INSERT INTO sidebar 
  (
    position,
    parent,
    title,
    link,
    accordion,
    icon
  )
values 
  (
    2,
    NULL,
    'User Management',
    '',
    true,
    '<path d="M6.5 11C8.98528 11 11 8.98528 11 6.5C11 4.01472 8.98528 2 6.5 2C4.01472 2 2 4.01472 2 6.5C2 8.98528 4.01472 11 6.5 11Z" fill="currentColor" /><path opacity="0.3" d="M13 6.5C13 4 15 2 17.5 2C20 2 22 4 22 6.5C22 9 20 11 17.5 11C15 11 13 9 13 6.5ZM6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22ZM17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22Z" fill="currentColor" />'
  );

INSERT INTO sidebar 
  (
    position,
    parent,
    title,
    link,
    accordion,
    icon
  )
values 
  (
    3,
    2,
    'Users',
    '',
    true,
    ''
  );

INSERT INTO sidebar 
  (
    position,
    parent,
    title,
    link,
    accordion,
    icon
  )
values 
  (
    4,
    3,
    'Users List',
    '/app/users/list.php',
    true,
    ''
  );

  INSERT INTO sidebar 
  (
    position,
    parent,
    title,
    link,
    accordion,
    icon
  )
values 
  (
    5,
    3,
    'View User',
    '/app/users/view.php',
    true,
    ''
  );

  INSERT INTO sidebar 
  (
    position,
    parent,
    title,
    link,
    accordion,
    icon
  )
values 
  (
    6,
    2,
    'Roles',
    '',
    true,
    ''
  );
  INSERT INTO sidebar 
  (
    position,
    parent,
    title,
    link,
    accordion,
    icon
  )
values 
  (
    7,
    6,
    'Roles List',
    '/app/roles/list.php',
    true,
    ''
  );
  INSERT INTO sidebar 
  (
    position,
    parent,
    title,
    link,
    accordion,
    icon
  )
values 
  (
    8,
    6,
    'Roles View',
    '/app/roles/view.php',
    true,
    ''
  );

  INSERT INTO sidebar 
  (
    position,
    parent,
    title,
    link,
    accordion,
    icon
  )
values 
  (
    9,
    2,
    'Permissions',
    '/app/user-management/permissions.php',
    true,
    ''
  );

  select * from sidebar;