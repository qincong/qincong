create table buyer (
    bid int not null AUTO_INCREMENT,
    name varchar(50) not null,
    password varchar(50) not null,
    primary key (bid)
);

create table goods (
    gid int not null auto_increment,
    name varchar(50) not null,
    description text,
    init_price float(10,2) default '0.00' not null,
    unit tinyint(2) unsigned not null,
    endtime varchar(50) default '0000-00-00 00:00' not null,
    reply_num int(4) unsigned not null,
    current_price float(10,2) default '0.00' not null,
    photodir varchar(50),
    primary key (gid)
);

create table reply (
    rid int not null auto_increment,
    bname varchar(50) not null,
    gid int not null,
    price float(10,2) default '0.00' not null,
    primary key (rid)
);