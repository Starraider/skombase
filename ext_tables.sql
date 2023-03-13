#
# Add SQL definition of database tables
#

--
-- Table structure for table 'tt_content'
--
CREATE TABLE tt_content (
    background_video int(11) unsigned DEFAULT '0',
		padding_top varchar(255) DEFAULT 'default' NOT NULL,
		padding_bottom varchar(255) DEFAULT 'default' NOT NULL,
);
