# Belajar Crud Dasar Menggunakan PHP dan Bootstrap 4
### System Requirements
- Xampp(PHP 7.X ++)
- Text Editor
- Browser
- Etc.

### Database on folder / Open CMD (Win+R) type "cmd"
1. Change Directory ```cd C:/xampp/mysql/bin```

![Gambar 1](https://github.com/mannnrachman/belajar-crud-dasar-boostrap/blob/master/database/Screenshot_1.png)


2. Login ```mysql -u root```

![Gambar 2](https://github.com/mannnrachman/belajar-crud-dasar-boostrap/blob/master/database/Screenshot_2.png)


3. ```show databases; ```

![Gambar 3](https://github.com/mannnrachman/belajar-crud-dasar-boostrap/blob/master/database/Screenshot_3.png)


4. Create Database ```create database penjualan_barang;```

![Gambar 4](https://github.com/mannnrachman/belajar-crud-dasar-boostrap/blob/master/database/Screenshot_4.png)


5. ```use penjualan_barang;```
6. ```show tables;```

![Gambar 5](https://github.com/mannnrachman/belajar-crud-dasar-boostrap/blob/master/database/Screenshot_5.png)


7. Create Table ```create table karyawan(idKaryawan int(9) not null primary key, nmKaryawan varchar(50) not null, tglLahir date, telp char(15), alamat text);```
8. ```desc karyawan;```

![Gambar 6](https://github.com/mannnrachman/belajar-crud-dasar-boostrap/blob/master/database/Screenshot_6.png)


9. Add Foreign Key ```alter table pesanan add foreign key(idKustomer) references kustomer(idKustomer);```
10.  ```alter table pesanan add foreign key(idKaryawan) references kustomer(idKaryawan);```

![Gambar 7](https://github.com/mannnrachman/belajar-crud-dasar-boostrap/blob/master/database/Screenshot_14.png)


11. Insert Query ```INSERT INTO karyawan(idKaryawan, nmKaryawan, tglLahir, telp, alamat) VALUES('1122334455','Aaoron','1999-01-08','089372462777','Jl. Kaca Piring');```

![Gambar 8](https://github.com/mannnrachman/belajar-crud-dasar-boostrap/blob/master/database/Screenshot_9.png)


12.  Update Query ```UPDATE karyawan SET alamat = 'Jl. Meratus' WHERE idKaryawan = '1122334477';```
13. Delete Query ```DELETE FROM karyawan WHERE idKaryawan = '1122334477';```

![Gambar 9](https://github.com/mannnrachman/belajar-crud-dasar-boostrap/blob/master/database/Screenshot_11.png)


14. Query Join ```SELECT * FROM pesanan INNER JOIN kustomer ON pesanan.idKustomer = kustomer.idKustomer INNER JOIN karyawan ON pesanan.idKaryawan = karyawan.idKaryawan;```

![Gambar 10](https://github.com/mannnrachman/belajar-crud-dasar-boostrap/blob/master/database/Screenshot_13.png)