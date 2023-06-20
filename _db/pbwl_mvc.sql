CREATE TABLE tb_users (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(50) NOT NULL,
	user_password VARCHAR(100) NOT NULL,
	user_nama VARCHAR(100) DEFAULT NULL,
	user_alamat TEXT DEFAULT NULL,
	user_hp VARCHAR(25) DEFAULT NULL,
	user_pos VARCHAR(5) DEFAULT NULL,
	user_role TINYINT(2),
	user_aktif TINYINT(2),
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(user_id)
);

CREATE TABLE tb_pelanggan (
    pel_id INT(11) NOT NULL AUTO_INCREMENT,
    pel_id_gol TINYINT(3),
    pel_no VARCHAR(20) NOT NULL,
    pel_nama VARCHAR(50) NOT NULL,
    pel_alamat TEXT DEFAULT NULL,
    pel_hp VARCHAR(20) NOT NULL,
    pel_ktp VARCHAR(50) NOT NULL,
    pel_seri VARCHAR(50) NOT NULL,
    pel_meteran INT(11) NOT NULL,
    pel_aktif ENUM('Y','N'),
    pel_id_user INT(11) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
    PRIMARY KEY(pel_id),
    INDEX(pel_id_gol),
    INDEX(pel_id_user)
);

CREATE TABLE tb_golongan (
    gol_id TINYINT(3) AUTO_INCREMENT,
    gol_kode VARCHAR(10) NOT NULL,
    gol_nama VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
    PRIMARY KEY(gol_id)
);