CREATE TABLE `sites` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `un` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `client1` int(10) NOT NULL default '0',
  `client2` int(10) NOT NULL default '0',
  `admin1` int(10) NOT NULL default '0',
  `admin2` int(10) NOT NULL default '0',
  `domainid` int(10) NOT NULL default '0',
  `hostid` int(10) NOT NULL default '0',
  `webroot` varchar(50) NOT NULL,
  `files` text NOT NULL,
  `filesdate` int(11) NOT NULL default '0',
  `lastupdate` int(11) NOT NULL default '0',
  `submit` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;