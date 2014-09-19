INSERT INTO `c_bbcodes` (`id`, `reg_x`, `html`, `name`, `active`) VALUES (1, '\\[youtube\\](.+)\\[\\/youtube\\]', '<object width="425" height="355"><param name="movie" value="https://www.youtube.com/v/{$1}"></param><param name="allowFullScreen" value="true"></param><embed src="https://www.youtube.com/v/{$1}" type="application/x-shockwave-flash" width="425" height="355" allowfullscreen="true"></embed></object>', 'YouTube', 1);
INSERT INTO `c_languages` (`l_id`, `name`, `directory`, `author_name`, `author_email`, `active`, `default`) VALUES (1, 'English (US)', 'en', 'Addictive Community', 'brunno.pleffken@outlook.com', 1, 1);
INSERT INTO `c_stats` (`id`, `member_count`, `total_posts`, `total_threads`) VALUES (1, 1, 1, 1);
INSERT INTO `c_templates` (`tpl_id`, `name`, `directory`, `active`, `author_name`, `author_email`, `css_file`) VALUES (1, 'Default', 'default', 1, 'Addictive Community', 'brunno.pleffken@outlook.com', '1.css');
INSERT INTO `c_usergroups` (`g_id`, `name`, `preffix`, `suffix`, `color`, `view_board`, `post_new_threads`, `reply_threads`, `edit_own_threads`, `edit_own_posts`, `delete_own_posts`, `can_attach`, `access_offline`, `post_html`, `avoid_flood`, `admin_cp`, `max_pm_storage`, `stock`) VALUES (1, 'Administrator', NULL, NULL, '#070', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1),(2, 'Moderator', NULL, NULL, '#090', 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1),(3, 'Member', NULL, NULL, '#000', 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 1),(4, 'Banned', NULL, NULL, '#F00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),(5, 'Guest', NULL, NULL, NULL, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);