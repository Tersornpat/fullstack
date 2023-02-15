CREATE TABLE `customer` (
  `IDCust` varchar(4) primary key NOT NULL,
  `CustName` varchar(20) DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `Address` varchar(80) DEFAULT NULL,
  `Tel` varchar(10) DEFAULT NULL
);

INSERT INTO `customer` (`IDCust`, `CustName`, `Sex`, `Address`, `Tel`) VALUES
('001', 'DAWD', 'M', '32233/2', '0565452586'),
('002', 'FFE', 'M', '32233/2', '0565452586'),
('003', 'EFAS', 'M', '32233/2', '0565452586'),
('004', 'Jeff', 'M', '32233/2', '0565452586'),
('005', 'AWAD', 'M', '32233/2', '0565452586'),
('006', 'Jeff', 'M', '32233/2', '0565452586'),
('007', 'Jeff', 'M', '32233/2', '0565452586'),
('008', 'Jeff', 'M', '32233/2', '0565452586');