CREATE OR REPLACE DATABASE cheap_chat;
GRANT ALL PRIVILEGES ON cheap_chat.* TO 'cheap_chat'@'localhost' IDENTIFIED BY '____CREATE_PASSWORD___';
USE cheap_chat;
CREATE OR REPLACE TABLE `version_1` (
	`id` int(10) AUTO_INCREMENT,
	`name` varchar(15),
	`comment` varchar(255),
	PRIMARY KEY (id)
	); 
