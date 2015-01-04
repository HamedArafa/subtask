drop table users;
create table problems (
	prob_id int not null primary key,
	prob_name varchar (20) not null,
	prob_dir varchar (50) not null,
	score int not null,
	time int not null
);
create table users (
	id int not null primary key,
	first_name varchar(20) not null,
	last_name varchar (20) not null,
	user_name varchar (20) not null,
	password varchar (20)  not null,
	email varchar (30) not null,
	country varchar (20) not null,
	quote varchar (300),
	score int not null,
	member_since date not null,
	image varchar(50) ,
	prob_id int not null,
	foreign key (prob_id) references problems (prob_id)
);
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

insert into problems  values(0,"Fibonacci","Problems/Fibonacci",100,120);
insert into problems  values(1,"Factorial","Problems/Factorial",100,120);
insert into problems  values(2,"Divisors","Problems/Divisors",100,180);


