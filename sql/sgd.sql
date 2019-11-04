CREATE TABLE `users` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `user_name` varchar(200) NOT NULL,
 `user_password` varchar(100) NOT NULL,
 `created_at` datetime DEFAULT NULL,
 `updated_at` datetime DEFAULT NULL,
 `deleted_at` datetime DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8


CREATE TABLE `users_complement` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `id_users_fk` int(10) unsigned NOT NULL,
 `nome_completo` varchar(200) NOT NULL,
 `email` varchar(150) NOT NULL,
 `created_at` datetime DEFAULT NULL,
 `updated_at` datetime DEFAULT NULL,
 `deleted_at` datetime DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8