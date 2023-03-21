CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `phone`, `password`) VALUES
('Ritik', 'ritikss748@gmail.com', '1123', '1234'),
('ritik2', 'ritik@gmail.com', '1124', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `gst` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `gst`) VALUES
(1, 'Ritik Sharma', 'naiya apartment', '11234AS3'),
(2, 'Vrutik Jagad', 'maninagar', 'HGF6152'),
(3, 'Shanu Pandey', 'Sanand', 'JH1234'),
(27, 'Jainam Shah', 'Gota Ahmedabad', 'L1K3J4H5GV6B4');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `code` varchar(10) NOT NULL DEFAULT 'SI0000001',
  `date` date NOT NULL,
  `customer` varchar(50) NOT NULL,
  `vehicle` varchar(30) NOT NULL,
  `trip` tinyint(1) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  `visitor_name` varchar(50) NOT NULL,
  `km` varchar(50) NOT NULL,
  `extra_km` varchar(50) NOT NULL,
  `extra_hour` varchar(50) NOT NULL,
  `toll` varchar(50) NOT NULL,
  `parking` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `night_hold` varchar(50) NOT NULL,
  `border_tax` varchar(50) NOT NULL,
  `airport` varchar(50) NOT NULL,
  `cgst` varchar(50) NOT NULL,
  `sgst` varchar(50) NOT NULL,
  `igst` varchar(50) NOT NULL,
  `tax` varchar(50) NOT NULL,
  `test` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`code`, `date`, `customer`, `vehicle`, `trip`, `period_start`, `period_end`, `visitor_name`, `km`, `extra_km`, `extra_hour`, `toll`, `parking`, `driver`, `night_hold`, `border_tax`, `airport`, `cgst`, `sgst`, `igst`, `tax`, `test`) VALUES
('SI0000001', '2023-03-20', 'ritik sharma', 'ertiga', 1, '2023-03-20', '2023-03-23', 'Ritik Kumar', '{\"q\":\"30\",\"r\":\"100\",\"t\":\"3000\"}', '{\"q\":\"30\",\"r\":\"50\",\"t\":\"1500\"}', '{\"q\":\"5\",\"r\":\"20\",\"t\":\"100\"}', '{\"q\":\"5\",\"r\":\"40\",\"t\":\"200\"}', '{\"q\":\"3\",\"r\":\"25\",\"t\":\"75\"}', '{\"q\":\"0\",\"r\":\"0\",\"t\":\"0\"}', '{\"q\":\"0\",\"r\":\"0\",\"t\":\"0\"}', '{\"q\":\"0\",\"r\":\"0\",\"t\":\"0\"}', '{\"q\":\"2\",\"r\":\"30\",\"t\":\"60\"}', '{\"name\":\"CGST@18\",\"rate\":\"18\"}', '{\"name\":\"GST@10\",\"rate\":\"10\"}', '{\"name\":\"IGST@10\",\"rate\":\"10\"}', '0', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(11) NOT NULL,
  `tax_name` varchar(20) NOT NULL,
  `tax_percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `tax_name`, `tax_percentage`) VALUES
(1, 'GST@10', 10),
(2, 'GST@18', 18),
(12, 'CGST@5', 5),
(13, 'CGST@10', 10),
(14, 'IGST@5', 5),
(15, 'IGST@10', 10),
(17, 'CGST@18', 18);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vname` varchar(50) NOT NULL,
  `vnumber` varchar(10) NOT NULL,
  `vserial` varchar(20) NOT NULL,
  `local_km_range` int(11) NOT NULL,
  `local_km_rate` int(11) NOT NULL,
  `local_ext_km` int(11) NOT NULL,
  `local_ext_hour` int(11) NOT NULL,
  `out_km_range` int(11) NOT NULL,
  `out_km_rate` int(11) NOT NULL,
  `out_ext_km` int(11) NOT NULL,
  `out_ext_hour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vname`, `vnumber`, `vserial`, `local_km_range`, `local_km_rate`, `local_ext_km`, `local_ext_hour`, `out_km_range`, `out_km_rate`, `out_ext_km`, `out_ext_hour`) VALUES
('Ertiga', 'GJ23DW3033', 'HDJ45G6H7J2', 400, 50, 10, 30, 150, 100, 200, 40),
('Activa 125 Disc pro', 'GJ27DW3033', 'HG3J2H3G4', 100, 150, 10, 20, 200, 300, 20, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;
