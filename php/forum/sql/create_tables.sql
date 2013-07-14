create table admins
(
id tinyint primary key not null auto_increment,
username varchar(10) not null,
password varchar(10) not null
);

create table categories
(
id tinyint primary key not null auto_increment,
name varchar(50) not null
) engine = InnoDB;

create table forums
(
id tinyint primary key not null auto_increment,
cat_id tinyint not null,
name varchar(30) not null,
description varchar(255) not null,
foreign key (cat_id) references categories(id)
) engine = InnoDB;

create table users
(
id int primary key not null auto_increment,
username varchar(10) not null,
password varchar(10) not null,
email varchar(100) not null,
verifystring varchar(20) not null,
active tinyint not null default 0
) engine = InnoDB;

create table topics
(
id tinyint primary key not null auto_increment,
date datetime not null,
user_id int not null,
forum_id tinyint not null,
subject varchar(100) not null,
foreign key (user_id) references users(id),
foreign key (forum_id) references forums(id)
) engine = InnoDB;

create table messages
(
id int primary key not null auto_increment,
date datetime not null,
user_id int not null,
topic_id tinyint not null,
subject varchar(100) not null,
body text not null,
foreign key (user_id) references users(id),
foreign key (topic_id) references topics(id)
) engine = InnoDB;