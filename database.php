<?php
$connect = new mysqli("localhost", "root", "") or die ("check your server connection.");

mysqli_query($connect,"DROP DATABASE debasystem");

mysqli_query($connect,"CREATE DATABASE debasystem");

mysqli_select_db($connect,"debasystem");

$users="CREATE TABLE users (
id int(4) NOT NULL auto_increment,
fullname varchar(65) NOT NULL default '',
password varchar(65) NOT NULL default '',
passport varchar(65) NOT NULL default '',
residence varchar(65) NOT NULL default '',
education varchar(65) NOT NULL default '',
reciept varchar(65) NOT NULL default '',
country varchar(65) NOT NULL default '',
query_status varchar(15) NOT NULL default '',
created_at varchar(65) NOT NULL default '',
PRIMARY KEY (id)
)Engine=MySQL AUTO_INCREMENT=1 ";

$biusers="CREATE TABLE biusers (
id int(4) NOT NULL auto_increment,
fullname varchar(65) NOT NULL default '',
password varchar(65) NOT NULL default '',
passport varchar(65) NOT NULL default '',
residence varchar(65) NOT NULL default '',
education varchar(65) NOT NULL default '',
reciept varchar(65) NOT NULL default '',
country varchar(65) NOT NULL default '',
query_status varchar(15) NOT NULL default '',
created_at varchar(65) NOT NULL default '',
PRIMARY KEY (id)
)Engine=MySQL AUTO_INCREMENT=1 ";

$feusers="CREATE TABLE feusers (
id int(4) NOT NULL auto_increment,
fullname varchar(65) NOT NULL default '',
password varchar(65) NOT NULL default '',
passport varchar(65) NOT NULL default '',
residence varchar(65) NOT NULL default '',
education varchar(65) NOT NULL default '',
reciept varchar(65) NOT NULL default '',
country varchar(65) NOT NULL default '',
query_status varchar(15) NOT NULL default '',
created_at varchar(65) NOT NULL default '',
PRIMARY KEY (id)
)Engine=MySQL AUTO_INCREMENT=1 ";

$pdusers="CREATE TABLE pdusers (
id int(4) NOT NULL auto_increment,
fullname varchar(65) NOT NULL default '',
password varchar(65) NOT NULL default '',
passport varchar(65) NOT NULL default '',
residence varchar(65) NOT NULL default '',
education varchar(65) NOT NULL default '',
reciept varchar(65) NOT NULL default '',
country varchar(65) NOT NULL default '',
query_status varchar(15) NOT NULL default '',
created_at varchar(65) NOT NULL default '',
PRIMARY KEY (id)
)Engine=MySQL AUTO_INCREMENT=1 ";

$admins="CREATE TABLE admins (
id int(4) NOT NULL auto_increment,
username varchar(65) NOT NULL default '',
password varchar(65) NOT NULL default '',
PRIMARY KEY (id)
)Engine=MySQL AUTO_INCREMENT=1";

$blogs="CREATE TABLE blogs (
id int(4) NOT NULL auto_increment,
category varchar(65) NOT NULL default '',
title varchar(65) NOT NULL default '',
description varchar(65) NOT NULL default '',
content varchar(500) NOT NULL default '',
created_at varchar(65) NOT NULL default '',
updated_at varchar(65) NOT NULL default '',
type varchar(65) NOT NULL default '',
PRIMARY KEY (id)
)Engine=MySQL AUTO_INCREMENT=1";

$workshop="CREATE TABLE workshops (
id int(4) NOT NULL auto_increment,
title varchar(65) NOT NULL default '',
location varchar(65) NOT NULL default '',
date varchar(65) NOT NULL default '',
description varchar(500) NOT NULL default '',
PRIMARY KEY (id)
)Engine=MySQL AUTO_INCREMENT=1";

$gallery="CREATE TABLE gallery (
id int(4) NOT NULL auto_increment,
title varchar(65) NOT NULL default '',
location varchar(65) NOT NULL default '',
date varchar(65) NOT NULL default '',
description varchar(500) NOT NULL default '',
PRIMARY KEY (id)
)Engine=MySQL AUTO_INCREMENT=1";

$uploads="CREATE TABLE uploads (
id int(4) NOT NULL auto_increment,
filename varchar(65) NOT NULL default '',
filetype varchar(65) NOT NULL default '',
filesize int(15) NOT NULL default '0',
PRIMARY KEY (id)
)Engine=MySQL AUTO_INCREMENT=1";

$partners="CREATE TABLE partners (
id int(4) NOT NULL auto_increment,
name varchar(65) NOT NULL default '',
logo varchar(65) NOT NULL default '',
description varchar(65) NOT NULL default '',
PRIMARY KEY (id)
)Engine=MySQL AUTO_INCREMENT=1";


$results = mysqli_query($connect,$users) or die (mysqli_error($connect));
$results = mysqli_query($connect,$biusers) or die (mysqli_error($connect));
$results = mysqli_query($connect,$feusers) or die (mysqli_error($connect));
$results = mysqli_query($connect,$pdusers) or die (mysqli_error($connect));
$results = mysqli_query($connect,$admins) or die(mysqli_error($connect));
$results = mysqli_query($connect,$blogs) or die(mysqli_error($connect));
$results = mysqli_query($connect,$gallery) or die(mysqli_error($connect));
$results = mysqli_query($connect,$workshop) or die(mysqli_error($connect));
$results = mysqli_query($connect,$uploads) or die(mysqli_error($connect));
$results = mysqli_query($connect,$partners) or die(mysqli_error($connect));


echo "Database successfully created!";


?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="csss/style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	