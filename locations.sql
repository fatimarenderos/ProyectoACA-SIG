<<<<<<< HEAD
-- SPDX-License-Identifier: Apache-2.0



CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` decimal(10,6) NOT NULL,
  `lng` decimal(10,6) NOT NULL,
  `organizer` varchar(200) NOT NULL,
  `eventdate` date NOT NULL DEFAULT current_timestamp(),
  `goal` int(11) NOT NULL DEFAULT 1,
  `linkinformation` varchar(200) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `location_status` tinyint(1) DEFAULT 0,
  `nombreevento` varchar(50) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
    ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
=======
-- SPDX-License-Identifier: Apache-2.0
CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` decimal(10,6) NOT NULL,
  `lng` decimal(10,6) NOT NULL,
  `organizer` varchar(200) NOT NULL,
  `eventdate` varchar(200) NOT NULL DEFAULT current_timestamp(),
  `goal` int(11) NOT NULL DEFAULT 1,
  `linkinformation` varchar(200) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `location_status` tinyint(1) DEFAULT 0,
  `nombreevento` varchar(50) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
    ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
>>>>>>> 324cd6d53d2da23c78cb3f66bfa10bafdf1411f2
