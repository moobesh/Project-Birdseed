CREATE DATABASE tele_mgmt

CREATE TABLE profile(
		id INTEGER NOT NULL AUTO_INCREMENT, 
		name TEXT, 
		extention INTEGER, 
		type TEXT, 
		PRIMARY KEY(id)
);

CREATE TABLE cab(
		cab_id INTEGER NOT NULL,
		cab INTEGER,
		shelf INTEGER,
		slot INTEGER,
		circuit INTEGER,
		patch TEXT

);

CREATE TABLE cer_vert(
		vertical_id INTEGER NOT NULL,
		vertical_location INTEGER,
		vertical_sub_id INTEGER,
		vertical_patch INTEGER,

);

CREATE TABLE per_vert(
		per_vert_location INTEGER,
		per_vert_port INTEGER

);

CREATE TABLE floorbox(
		floorbox_id INTEGER,
		floorbox_per TEXT,
		floorbox_level TEXT,
		floorbox_port INTEGER

);

CREATE TABLE logs(
		post_id INTEGER,
		post_timestamp INTEGER,
		poster_initials TEXT,
		post_info TEXT

);