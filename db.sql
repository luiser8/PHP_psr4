CREATE TABLE client(
	id_client INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	first_name VARCHAR(200) NOT NULL,
	last_name VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
	created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE = INNODB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_spanish_ci;