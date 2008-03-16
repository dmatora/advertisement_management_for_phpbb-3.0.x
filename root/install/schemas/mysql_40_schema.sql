#
# $Id$
#

# Table: 'phpbb_ads'
CREATE TABLE phpbb_ads (
	ad_id mediumint(8) UNSIGNED NOT NULL auto_increment,
	ad_name varbinary(255) DEFAULT '' NOT NULL,
	ad_code blob NOT NULL,
	ad_position mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	ad_views mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	ad_max_views mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	all_forums tinyint(1) UNSIGNED DEFAULT '0' NOT NULL,
	all_groups tinyint(1) UNSIGNED DEFAULT '0' NOT NULL,
	PRIMARY KEY (ad_id),
	KEY ad_position (ad_position),
	KEY ad_views (ad_views),
	KEY ad_max_views (ad_max_views),
	KEY all_forums (all_forums),
	KEY all_groups (all_groups)
);


# Table: 'phpbb_ads_forums'
CREATE TABLE phpbb_ads_forums (
	ad_id mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	forum_id mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	KEY ad_forum (ad_id, forum_id)
);


# Table: 'phpbb_ads_groups'
CREATE TABLE phpbb_ads_groups (
	ad_id mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	group_id mediumint(8) UNSIGNED DEFAULT '0' NOT NULL,
	KEY ad_group (ad_id, group_id)
);


