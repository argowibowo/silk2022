create table obat(
id_obat char(5) not null primary key auto_increment,
nama varchar(20) not null ,
kode_obat char(20) not null,
jenis_obat varchar(20) not null);

insert into obat values ('101','Analgesik','001','obat cair'),
 ('102','Antidiare','002','obat tablet'),
 ('103','Antibiotik','003','obat tablet'),
 ('104','Sitotoksi','004','obat cair'),
 ('105','Antiinflamasi','005','obat cair'),
 ('106','Bronkodilator','006','obat cair'),
 ('107','AntiCemas','007','obat tablet'),
 ('108','Antiaritmia','008','obat tablet'),
 ('109','Antijamur','009','obat tablet'),
 ('110','Dekongestan','010','obat cair');

create table stok_obat(
id int(5) not null primary key auto_increment,
kode_obat char(20) not null,
stok char(5) not null,
tanggal_ masuk char(10) not null,
exp_date char(10) not null);

insert into stok_obat values ('1','001','20','20-9-2022','20-9-2023'),
 ('2','002', '20', '19-10-2022', '19-10-2023'),
 ('3','003', '21', '20-5-2022', '20-10-2023'),
 ('4','004', '25', '12-4-2022', '12-4-2023'),
 ('5','005', '20', '3-5-2022', '3-5-2023'),
 ('6','006', '21', '12-5-2022', '12-5-2023'),
 ('7','007', '30', '20-12-2022', '20-12-2023'),
 ('8','008', '20', '1-10-2022', '1-10-2023'),
 ('9','009', '22', '14-11-2022', '14-11-2023'),
 ('10','010', '21', '19-10-2022', '19-10-2023');

