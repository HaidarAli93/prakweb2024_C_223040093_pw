
/**
 * Author:  Haidar Ali
 * Created: Oct 9, 2024
 */

-- Assume that database named 'prakweb_2024_C_223040093' was created;
use prakweb_2024_C_223040093;

drop table if exists prakweb_2024_C_223040093.Buku;
create table if not exists prakweb_2024_C_223040093.Buku (
    ID_Buku char(2),
    Judul_Buku varchar(80),
    Penulis_Buku varchar(80),
    primary key (ID_Buku)
);

insert into prakweb_2024_C_223040093.Buku values ('01', 'Sherlock Holmes', 'Sir Arthur Conan Doyle');
insert into prakweb_2024_C_223040093.Buku values ('02', 'Harry Potter', 'JK Rowling');
insert into prakweb_2024_C_223040093.Buku values ('03', 'Laskar Pelangi', 'Andrea Hirata');
insert into prakweb_2024_C_223040093.Buku values ('04', 'Maryamah Karpov', 'Andrea Hirata');
insert into prakweb_2024_C_223040093.Buku values ('05', 'Sang Pemimpi', 'Andrea Hirata');
insert into prakweb_2024_C_223040093.Buku values ('06', 'Orang-Orang Biasa', 'Andrea Hirata');
insert into prakweb_2024_C_223040093.Buku values ('07', 'Sebelas Patriot', 'Andrea Hirata');
insert into prakweb_2024_C_223040093.Buku values ('09', 'Pohon Sirkus', 'Andrea Hirata');
insert into prakweb_2024_C_223040093.Buku values ('10', 'Eugene', 'Ellya Ningsih');
