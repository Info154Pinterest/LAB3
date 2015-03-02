CREATE DATABASE `twitter` /*!40100 DEFAULT CHARACTER SET latin1 */;


CREATE TABLE `results` (
  `search` varchar(500) NOT NULL,
  `id_str` varchar(45) NOT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `textf` varchar(1000) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(200) DEFAULT NULL,
  `search_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_str`,`search`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

select a.id_str,a.created_at, a.textf,a.user_id, a.search_id
from twitter.results a
join twitter.results b
on a.id_str = b.id_str
and a.search_id = b.search_id
where a.search <> b.search;


