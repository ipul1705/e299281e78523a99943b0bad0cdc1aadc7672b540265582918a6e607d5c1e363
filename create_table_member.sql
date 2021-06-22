CREATE TABLE member (
id int unsigned NOT NULL PRIMARY KEY,
name varchar(100) NOT NULL DEFAULT '' UNIQUE,
parent_id int unsigned NOT NULL DEFAULT 0,
INDEX (parent_id)
);
