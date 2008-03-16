/*

 $Id$

*/


/*
	Table: 'phpbb_ads'
*/
CREATE TABLE phpbb_ads (
	ad_id number(8) NOT NULL,
	ad_name varchar2(255) DEFAULT '' ,
	ad_code clob DEFAULT '' ,
	ad_position number(8) DEFAULT '0' NOT NULL,
	ad_views number(8) DEFAULT '0' NOT NULL,
	ad_max_views number(8) DEFAULT '0' NOT NULL,
	all_forums number(1) DEFAULT '0' NOT NULL,
	all_groups number(1) DEFAULT '0' NOT NULL,
	CONSTRAINT pk_phpbb_ads PRIMARY KEY (ad_id)
)
/

CREATE INDEX pa_ad_position ON phpbb_ads (ad_position)
/
CREATE INDEX pa_ad_views ON phpbb_ads (ad_views)
/
CREATE INDEX pa_ad_max_views ON phpbb_ads (ad_max_views)
/
CREATE INDEX pa_all_forums ON phpbb_ads (all_forums)
/
CREATE INDEX pa_all_groups ON phpbb_ads (all_groups)
/

CREATE SEQUENCE phpbb_ads_seq
/

CREATE OR REPLACE TRIGGER t_phpbb_ads
BEFORE INSERT ON phpbb_ads
FOR EACH ROW WHEN (
	new.ad_id IS NULL OR new.ad_id = 0
)
BEGIN
	SELECT phpbb_ads_seq.nextval
	INTO :new.ad_id
	FROM dual;
END;
/


/*
	Table: 'phpbb_ads_forums'
*/
CREATE TABLE phpbb_ads_forums (
	ad_id number(8) DEFAULT '0' NOT NULL,
	forum_id number(8) DEFAULT '0' NOT NULL
)
/

CREATE INDEX paf_ad_forum ON phpbb_ads_forums (ad_id, forum_id)
/

/*
	Table: 'phpbb_ads_groups'
*/
CREATE TABLE phpbb_ads_groups (
	ad_id number(8) DEFAULT '0' NOT NULL,
	group_id number(8) DEFAULT '0' NOT NULL
)
/

CREATE INDEX pag_ad_group ON phpbb_ads_groups (ad_id, group_id)
/

