Microsoft Windows [Version 10.0.10240]
(c) 2015 Microsoft Corporation. All rights reserved.

C:\Users\USER>cd/

C:\>cd xampp

C:\xampp>cd mysql

C:\xampp\mysql>cd bin

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 4
Server version: 10.1.30-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2017, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> create database kampus_BSI;
Query OK, 1 row affected (0.00 sec)

MariaDB [(none)]> use kampus_BSI;
Database changed
MariaDB [kampus_BSI]> create table mahasiswa(
    -> nim char(30) primary key,
    -> nama_mahasiswa varchar(30),
    -> alamat_mahasiswa varchar(30),
    -> tempat_tanggal_lahir varchar(40));
Query OK, 0 rows affected (0.39 sec)

MariaDB [kampus_BSI]> create table dosen(
    -> nip char(15) primary key,
    -> nama_dosen varchar(30),
    -> alamat_dosen varchar(70));
Query OK, 0 rows affected (0.19 sec)

MariaDB [kampus_BSI]> create table mata_kuliah(
    -> id_matkul char(12) primary key,
    -> nama_matkul varchar(30),
    -> jam_kuliah char(10));
Query OK, 0 rows affected (0.18 sec)

MariaDB [kampus_BSI]> create table ruang_teori(
    -> nip char(15) primary key,
    -> foreign key (nip) references dosen(nip),
    -> id_matkul char(12),
    -> foreign key (id_matkul) references mata_kuliah(id_matkul));
Query OK, 0 rows affected (0.17 sec)

MariaDB [kampus_BSI]> create table lab(
    -> nip char(15),
    -> foreign key (nip) references dosen(nip),
    -> id_matkul char(12),
    -> foreign key (id_matkul) references mata_kuliah(id_matkul));
Query OK, 0 rows affected (0.19 sec)

MariaDB [kampus_BSI]> create table perpus(
    -> nama_buku varchar(30),
    -> loker char(5),
    -> nip char(15),
    -> foreign key (nip) references dosen (nip),
    -> nim char(15),
    -> foreign key (nim) references mahasiswa(nim));
Query OK, 0 rows affected (0.34 sec)