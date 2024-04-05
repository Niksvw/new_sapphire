
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `admin` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@123', 77874512);



CREATE TABLE `super_luxury` (
  `s_no` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `holder_id` int(11) DEFAULT NULL,
  `holder_mobile` varchar(100) DEFAULT NULL,
  `holder_address` varchar(250) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `in_date` varchar(100) DEFAULT NULL,
  `out_date` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `super_luxury` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 251, 'b', 545, '5454', 'gafg', 2, 1, '25-06-2020', '29-06-2020', 1),
(2, 252, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 253, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 254, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);


CREATE TABLE `semi_luxury` (
  `s_no` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `holder_id` int(11) DEFAULT NULL,
  `holder_mobile` varchar(100) DEFAULT NULL,
  `holder_address` varchar(250) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `in_date` varchar(100) DEFAULT NULL,
  `out_date` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `semi_luxury` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 201, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 202, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 203, 'Akshay ', 74125, '85245698', 'Address of akshay', 0, 2, '25-05-2020', '30-05-2020', 1),
(5, 204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);



CREATE TABLE `double_deluxe` (
  `s_no` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `holder_id` int(11) DEFAULT NULL,
  `holder_mobile` varchar(100) DEFAULT NULL,
  `holder_address` varchar(250) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `in_date` varchar(100) DEFAULT NULL,
  `out_date` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `double_deluxe` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 152, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 153, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, 154, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);



CREATE TABLE `single_deluxe` (
  `s_no` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `holder_name` varchar(100) NOT NULL,
  `holder_id` int(11) NOT NULL,
  `holder_mobile` varchar(100) NOT NULL,
  `holder_address` varchar(250) NOT NULL,
  `child` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `in_date` varchar(100) NOT NULL,
  `out_date` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `single_deluxe` (`s_no`, `room_no`, `holder_name`, `holder_id`, `holder_mobile`, `holder_address`, `child`, `adult`, `in_date`, `out_date`, `status`) VALUES
(1, 101, '', 0, '', '', 0, 0, '', '', 0),
(2, 102, 'Pramod Sharma', 1010, '9878451245', 'xyz nagar , rajasthan', 2, 2, '29-04-2020', '31-04-2020', 1),
(3, 103, '', 0, '', '', 0, 0, '', '', 0),
(4, 104, '', 0, '', '', 0, 0, '', '', 0);


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `super_luxury`
  ADD PRIMARY KEY (`s_no`);


ALTER TABLE `semi_luxury`
  ADD PRIMARY KEY (`s_no`);


ALTER TABLE `double_deluxe`
  ADD PRIMARY KEY (`s_no`);


ALTER TABLE `single_deluxe`
  ADD PRIMARY KEY (`s_no`);


ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `super_luxury`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `semi_luxury`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `double_deluxe`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `single_deluxe`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
