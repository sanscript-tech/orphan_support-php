CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;



INSERT INTO `user_details` (`user_id`, `user_email`, `user_password`, `user_name`) VALUES
(1, 'raj@gmail.com', 'Raj', 'Raj'),
(2, 'hello@gmail.com', 'hello', 'hellophp')
;
