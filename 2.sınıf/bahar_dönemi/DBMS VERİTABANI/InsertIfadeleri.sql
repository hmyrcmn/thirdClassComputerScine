use Quiz2Kitap;

insert into yazarlar
VALUES(1, "John Ronald Reuel", "Tolkien"),
(2, "Howard Phillips", "Lovecraft"),
(3, "George Raymond Richard", "Martin"),
(4, "Joanne Kathleen", "Rowling"),
(5, "Frank Patrick", "Herbert");

insert into turler
VALUES(1, "Bilimkurgu"),
(2, "Fantastik"),
(3, "Korku"),
(4, "Macera"),
(5, "Politik Kurgu"),
(6, "Dram"),
(7, "Kişisel Gelişim");

insert into kitaplar
VALUES(1, "A Game of Thrones", "A Song of Ice and Fire serisinin ilk kitabıdır. Yazların onlarca yıl, kışların bir ömür sürebildiği bir diyarın öyküsü.", 847, 3, 5),
(2, "Hobbit", "Fantastik bir evren olan Orta Dünya'da geçen ve bir hobbitin dönemin gri büyücüsü Gandalf ile girdiği macerayı konu alır.", 336, 1, 2),
(3, "Beren ve Lúthien'in Hikâyesi", "Ölümlü insan Beren ile ölümsüz elf Lúthien'in aşkı ve maceraları ile ilgili hikâye.", 297, 1, 4),
(4, "Harry Potter ve Felsefe Taşı", "Genç büyücü Harry Potter'ın sihir dünyasına attığı ilk adımları anlatan roman.", 274, 4, 2),
(5, "Dune", "Modern edebiyatın en epik mesih anlatılarından biri sayılan Dune, genç Paul Atreides'in hikâyesini anlatır.", 712, 5, 1),
(6, "Cthulhu'nun Çağrısı", "Cthulhu'nun Çağrısı, H. P. Lovecraft'ın Cthulhu Mitosu dahilinde yazdığı ünlü öyküsü.", NULL, 2, 3);

insert into uyeler
VALUES(1, "Salih", "Okur", "Nilüfer Cad. Yaprak Sk. No:2/4", "01112223344"),
(2, "Melih", "Okumaz", NULL, NULL),
(3, "Ayşe", "Görür", "Sarkıt Cad. Çay Sk. No:1/3", "01112123434"),
(4, "Fatma", "Bakmaz", "Tepe Cad. Göz Sk. No:4/5", NULL),
(5, "Sedat", "Pekmez", NULL, "01112132323");

insert into kayitlar
VALUES(1, 5, 1, '2022-01-01', NULL),
(2, 3, 4, '2022-02-01', '2022-02-28'),
(3, 3, 2, '2022-03-02', '2022-04-01'),
(4, 1, 4, '2022-03-22', '2022-05-05'),
(5, 1, 5, '2022-05-12', NULL),
(6, 3, 3, '2022-05-20', NULL),
(7, 4, 2, '2022-06-16', NULL);