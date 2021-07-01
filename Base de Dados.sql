
use papstore;

CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(255),
  `mail` varchar(255),
  `password` varchar(255),
  `address` varchar(255),
  `phone` varchar(255),
  `type` int(11)
);

CREATE TABLE `userstype` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `type` varchar(255)
);

CREATE TABLE `products` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `type` int(11),
  `price` int(11),
  `charac` varchar(255)
);

CREATE TABLE `productstype` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `type` varchar(255)
);

CREATE TABLE `invoice` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `user` int(11),
  `products` int(11),
  `totalprice` int(11),
  `time` timestamp
);

CREATE TABLE `invoiceproducts` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `invoice` int(11),
  `products` int(11)
);

ALTER TABLE `users` ADD FOREIGN KEY (`type`) REFERENCES `userstype` (`id`);

ALTER TABLE `products` ADD FOREIGN KEY (`type`) REFERENCES `productstype` (`id`);

ALTER TABLE `invoice` ADD FOREIGN KEY (`user`) REFERENCES `users` (`id`);

ALTER TABLE `invoiceproducts` ADD FOREIGN KEY (`invoice`) REFERENCES `invoice` (`id`);

ALTER TABLE `invoiceproducts` ADD FOREIGN KEY (`products`) REFERENCES `products` (`id`);
