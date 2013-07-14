create table catetories
(
id tinyint primary key not null auto_increment,
cat varchar(20) not null
);

create table entries
(
id int primary key not null auto_increment,
cat_id tinyint not null,
dateposted datetime not null,
subject varchar(200) not null,
body text,
foreign key (cat_id) references catetories(id)
);

create table comments
(
id int primary key not null auto_increment,
blog_id int not null,
dateposted datetime not null,
name varchar(50) not null,
comment text,
foreign key (blog_id) references entries(id)
);

create table logins
(
id tinyint primary key not null auto_increment,
username varchar(10) not null,
password varchar(10) not null
);
