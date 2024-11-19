-- WARNING! Using this will remove all data in database sneakerness
drop database if exists sneakerness;
create database sneakerness;
use sneakerness;

create table Location (
Id int unsigned not null auto_increment
,Location varchar(50) not null
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
);

insert into Location (
    Location
) values (
    'MILAN' 
), (
    'ATHENS'
), (
    'TOKYO'
);

create table Events (
Id int unsigned not null auto_increment
,Location_Id int unsigned
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
,foreign key(Location_Id) references Location(Id)
);

create table Visitor (
Id int unsigned not null auto_increment
,EventId int unsigned not null
,Firstname varchar(50) not null
,Infix varchar(10) default null
,Lastname varchar(50) not null
,Email varchar(320) not null
,TicketAmount INT unsigned not null
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
,foreign key (EventId) references Event(Id)
);

create table Orders (
Id int unsigned not null auto_increment
,Visitor_Id int unsigned not null
,Ticket_Id int unsigned not null
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (id)
,foreign key (Visitor_Id) references Visitor(Id)
,foreign key (Ticket_id) references Tickets(Id)
);

create table Tickets (
Id int unsigned not null auto_increment
,Price_Id int unsigned not null
,Time_Id int unsigned not null
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
,foreign key (Price_Id) references TicketPrice(Id)

);

create table TicketTime (
Id int unsigned not null auto_increment
,EntranceTime time not null
,DateOfEntry date not null
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
);

insert into TicketTime (
    EntranceTime, DateOfEntry, Opmerking
) VALUES (
    '11:00', '2025-08-27', 'TOKYO'
), (
    '12:00', '2025-08-27', 'TOKYO'
), (
    '14:00', '2025-08-27', 'TOKYO'
), (
    '16:00', '2025-08-27', 'TOKYO'
), (
    '12:00', '2025-08-28', 'TOKYO'
), (
    '14:00', '2025-08-28', 'TOKYO'
), (
    '16:00', '2025-08-28', 'TOKYO'
),
(
    '11:00', '2025-08-11', 'ATHENS'
), (
    '12:00', '2025-08-11', 'ATHENS'
), (
    '14:00', '2025-08-11', 'ATHENS'
), (
    '16:00', '2025-08-11', 'ATHENS'
), (
    '12:00', '2025-08-12', 'ATHENS'
), (
    '14:00', '2025-08-12', 'ATHENS'
), (
    '16:00', '2025-08-12', 'ATHENS'
),
(
    '11:00', '2025-08-05', 'MILAN'
), (
    '12:00', '2025-08-05', 'MILAN'
), (
    '14:00', '2025-08-05', 'MILAN'
), (
    '16:00', '2025-08-05', 'MILAN'
), (
    '12:00', '2025-08-06', 'MILAN'
), (
    '14:00', '2025-08-06', 'MILAN'
), (
    '16:00', '2025-08-06', 'MILAN'
);

create table TicketPrice (
Id int unsigned not null auto_increment
,TicketPrice decimal(5,2) not null
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
);

insert into TIcketPrice(
    TicketPrice
) VALUES (
    10.00
), (
    11.00
), (
    12.00
), (
    14.00
), (
    15.00
), (
    50.00
);

create table TicketAmount (
Id int unsigned not null auto_increment
,TicketAmount tinyint unsigned
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
);

insert into TicketAmount(
    TicketAmount
) values (
    1
), (
    2
), (
    3
), (
    4
),(
    5
);

create table Seller (
Id int unsigned not null auto_increment
,Seller_Id int unsigned not null
,SellerType_Id int unsigned not null
,ContactPerson int unsigned not null
,Event_Id int unsigned not null
,standAmmount int unsigned not null
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
,foreign key (Seller_id) references Stand(Id)
,foreign key (SellerType_Id) references SellerType(Id)
,foreign key (ContactPerson) references ContactPerson(Id)
,foreign key (Event_Id) references Event(Id)
,foreign key (standAmmount) references StandAmmount(Id)
);


create table ContactPerson (
Id int unsigned not null auto_increment
,Firstname varchar(50) not null
,Infix varchar(10) default null
,Lastname varchar(50) not null
,Email varchar(320) not null
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
);

create table SellerType (
Id int unsigned not null auto_increment
,Type varchar(50) not null
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
);

create table StandAmmount (
Id int unsigned auto_increment
,Ammount tinyint unsigned not null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
);

create table Stand (
Id int unsigned not null auto_increment
,Stand_Id int unsigned not null
,Prices int unsigned not null
,standLocation_id int unsigned not null
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
,foreign key(Stand_Id) references Stand(Id)
,foreign key(Prices) references Price(Id)
,foreign key(standLocation_id) references StandLocation(Id)
);

create table Price (
Id int unsigned not null auto_increment
,Price decimal(5,2)
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
);

create table StandLocation (
Id int unsigned not null auto_increment
,Location varchar(50)
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
);

create table StandQuality (
Id int unsigned not null auto_increment
,Quality varchar(10) not null
,Opmerking varchar(250) default null
,DatumAangemaakt Datetime(6) not null default NOW(6)
,DatumGewijzigd Datetime(6) not null default NOW(6)
,primary key (Id)
);