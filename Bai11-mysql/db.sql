create database netflix;

-- phim
-- the_loai
-- quoc_gia
-- dien_vien
-- dao_dien
-- tap_phim
-- nguoi_dung

--Table Người dùng (nguoi_dung)
CREATE TABLE IF NOT EXISTS nguoi_dung(
    id int AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap varchar(30) NOT NULL,
    mat_khau varchar(30) NOT NULL,
    email varchar(30) NOT NULL,
    ho_ten varchar(50) NOT NULL,
    ngay_sinh date NOT NULL,
    so_dien_thoai varchar(10) NOT NULL,
    gioi_tinh boolean NOT NULL
);

-- the_loai
id int AUTO_INCREMENT PRIMARY KEY,
ten_the_loai varchar(255),

-- dien_vien
id int AUTO_INCREMENT PRIMARY KEY,
ho_ten varchar(100),
ngay_sinh date,

-- phim
id int AUTO_INCREMENT PRIMARY KEY,
ten_phim varchar(255),
quoc_gia varchar(100),
dao_dien_id int,
nam datetime,
do_tuoi int,
mo_ta varchar(255),

--phim_the_loai
id int AUTO_INCREMENT PRIMARY KEY,
phim_id int,
the_loai_id int,

--phim_dien_vien
id int AUTO_INCREMENT PRIMARY KEY,
phim_id int,
dien_vien_id int,


SELECT phim.ten_phim,
		phim_the_loai.id_phim,
        the_loai.ten_the_loai,
        phim.quoc_gia,
        phim.nam_san_xuat,
        dao_dien.ho_ten
FROM phim
JOIN phim_the_loai
ON phim_the_loai.id_phim=phim.id_phim
JOIN the_loai
ON phim_the_loai.id_the_loai=the_loai.id_the_loai
JOIN dao_dien
ON phim.dao_dien_id=dao_dien.id_dao_dien
