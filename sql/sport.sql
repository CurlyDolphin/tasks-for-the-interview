CREATE TABLE `sportsman` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `FIO` text,
    `email` varchar(255),
    `mobile` int(11),
    CONSTRAINT chk_phone CHECK (mobile like '[7][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]'),
    `birthday` date,
    `age` int(11),
    `passport_id` int(11),
    `biography` text,
    `middle_place` int(3),
    FOREIGN KEY (videoId)  REFERENCES Video (id),
    `created_at` timestamp,
    `updated_at` timestamp,
) ;