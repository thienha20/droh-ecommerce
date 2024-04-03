CREATE TABLE `cscart_test` (
   `test_id` int NOT NULL AUTO_INCREMENT,
   `data` varchar(255) NOT NULL DEFAULT '',
   `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (`test_id`)
) ENGINE = InnoDB;

INSERT INTO `cscart_test` (`data`) VALUE ('Hello world!');