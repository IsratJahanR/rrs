create a file named rrs on C:\xampp\htdocs location.
also create a relational databse name users into database rrs xampp.
Here is the sql commands to create relation:


create table rrs.users(
nid 	bigint(20)	Primary key NOT NULL, 				
name	varchar(30)	not null, 				
mobile	varchar(11) not null, 			
email	varchar(11)	not null, 				
gender	varchar(10)	not null ,			
address	varchar(50)	not null ,			
password	varchar(30)	not null 
)
