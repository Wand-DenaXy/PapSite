SELECT * FROM papsite.registrar;

create table registrar (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username varchar(255),
    email varchar(255),
    password varchar(255)
);