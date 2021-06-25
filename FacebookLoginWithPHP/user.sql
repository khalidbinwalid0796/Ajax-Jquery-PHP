
CREATE TABLE `fbuser` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fb_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Indexes for table `fbuser`
--
ALTER TABLE `fbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fbuser`
--
ALTER TABLE `fbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
