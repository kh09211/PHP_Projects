CREATE OR REPLACE DATABASE chat_app;
GRANT ALL PRIVILEGES ON chat_app.* TO 'chat_app'@'localhost' IDENTIFIED BY '____CREATE_PASSWORD___';
USE chat_app;
CREATE OR REPLACE TABLE `version_1` (
	`id` int(10) AUTO_INCREMENT,
	`name` varchar(15),
	`comment` varchar(255),
	PRIMARY KEY (id)
	); 
