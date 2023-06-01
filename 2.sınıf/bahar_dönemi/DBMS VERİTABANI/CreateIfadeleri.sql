create database Quiz2Kitap;
use Quiz2Kitap;

create table Yazarlar(
	yazarID int not null auto_increment,
    yazarAdi varchar(45) not null,
    yazarSoyadi varchar(45) not null,
    primary key(yazarID)
);

create table Turler(
	turID int not null auto_increment,
    turAdi varchar(45) not null,
    primary key(turID)
);

Create table Kitaplar(
	ISBN int not null auto_increment,
    kitapAdi varchar(45) not null,
    kitapAciklama text,
    sayfaSayisi int,
    yazarID int not null,
    turID int not null,
    primary key(ISBN),
    foreign key(yazarID) references Yazarlar(yazarID),
    foreign key(turID) references Turler(turID)
);

create table Uyeler(
	uyeID int not null auto_increment,
    uyeAdi varchar(45) not null,
    uyeSoyadi varchar(45) not null,
    uyeAdresi text,
    uyeGSM varchar(11),
    primary key(uyeID)
    );

create table Kayitlar(
	kayitID int not null auto_increment,
    uyeID int not null,
    ISBN int not null,
    aTarih date not null,
    vTarih date,
    primary key(kayitID),
    foreign key(uyeID) references Uyeler(uyeID),
    foreign key(ISBN) references Kitaplar(ISBN)
);