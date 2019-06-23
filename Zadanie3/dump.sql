-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `raiting` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `post_text`, `raiting`) VALUES
(1, 'FooBar', 'text', 5),
(2, 'FooBar', 'text', 3),
(3, 'False', 'text', 6),
(4, 'FooBar', 'text', 3),
(5, 'Foobar', 'text', 7),
(6, 'Foobar', 'text', 8),
(7, 'fooBar', 'text', 9),
(8, 'foo bar', 'text', 4),
(9, 'fooBar', 'text', 4),
(10, 'foo bar', 'text', 4);

-- --------------------------------------------------------
--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id`);
