CREATE TABLE `evento` (
                             `id` int(11) NOT NULL,
                             `lat` decimal(8,5) NOT NULL,
                             `lon` decimal(8,5) NOT NULL,
                             `organizador` varchar(200) NOT NULL,
                            `fecha` date NOT NULL,
                             `meta` int(11) NOT NULL,
                             `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `evento`
    ADD PRIMARY KEY (`id`);


