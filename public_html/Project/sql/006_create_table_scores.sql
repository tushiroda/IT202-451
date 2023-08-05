CREATE TABLE
    IF NOT EXISTS `Scores` (
        `id` int auto_increment not null,
        `user_id` int,
        `score` int,
        `created` timestamp default current_timestamp,
        `modified` timestamp default current_timestamp on update current_timestamp,
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES Users(`id`),
        UNIQUE KEY (`user_id`)
    )