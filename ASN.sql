drop table UPLOAD;
create table UPLOAD(
	picID int(11) unsigned NOT NULL AUTO_INCREMENT,
	image_path varchar(30), 
	image_name varchar(30),
	title text,
	description text, 
	location varchar(30),
	postDate datetime DEFAULT NULL,
	primary key (picID)
	);
