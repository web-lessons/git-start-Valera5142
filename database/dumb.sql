CREATE DATABASE `databaser`;databaser

USE `databaser`;
CREATE TABLE IF NOT EXISTS `products` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `slug` varchar(50) NOT NULL,
    `img` varchar(225) DEFAULT NULL,
    `description` text DEFAULT NULL,
    `price` int(10) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `products` (`id`, `name`,`slug`,`img`,`description`,`price`)VALUES
    (1, '   Товар 1', 'products1', 'https://sun9-18.userapi.com/VuEBEvT9IR56kLoANg0DVW1iaSMQtbeM1-Jraw/7TGnYvZzm_E.jpg?ava=1','Хороший товар','2500'),
    (2, '   Товар 2', 'products2', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Brain_090407.jpg/220px-Brain_090407.jpg','Хороший товар','10000'),
    (3, '   Товар 3', 'products3', 'https://cs6.pikabu.ru/post_img/big/2015/01/12/5/1421043416_1912902171.jpg','Хороший товар','2'),
    (4, '   Товар 4', 'products4', 'https://fakty.ua/user_uploads_new/images/articles/2019/12/13/327598/f1e3ad60bed2d98ae6e046083d883894bf8a8b95ad3c81146c2121ae55891621.jpg','Хороший товар','999999999'),
    (5, '   Товар 5', 'products5', 'https://sun9-19.userapi.com/c622730/v622730668/269eb/BdFbZZ7v9co.jpg?ava=1','Хороший товар','0');
