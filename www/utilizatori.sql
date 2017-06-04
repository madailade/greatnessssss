CREATE TABLE IF NOT EXISTS `utilizatori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) NOT NULL,
  `prenume` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `parola` varchar(32) NOT NULL,
  `data_inregistrare` date NOT NULL,
  `activated` enum('0','1') NOT NULL,
  `departament` VARCHAR(32) NOT NULL,
  `poza_profil` text NOT NULL,
  `prieteni` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;