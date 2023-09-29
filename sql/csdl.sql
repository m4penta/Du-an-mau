create database `duanmau`;


/* 
Huỳnh công trình
*/
CREATE TABLE `duanmau`.`loai` (
    `ma_loai` INT NOT NULL AUTO_INCREMENT COMMENT 'Mã loại hàng',
    `ten_loai` VARCHAR(50) NOT NULL comment 'Tên loại hàng',
    PRIMARY KEY (`ma_loai`)
) ENGINE = InnoDB;

/* 
Nguyễn Hữu Thành
*/
CREATE TABLE `duanmau`.`hang_hoa` (
    `ma_hh` INT NOT NULL AUTO_INCREMENT COMMENT 'Mã',
    `ten_hh` VARCHAR(50) NOT NULL,
    `don_gia` FLOAT NULL,
    `giam_gia` FLOAT NULL DEFAULT NULL,
    `hinh` VARCHAR(50) NOT NULL,
    `ngay_nhap` DATE NOT NULL,
    `mo_ta` VARCHAR(2000) NOT NULL,
    `dac_biet` BIT NOT NULL,
    `so_luot_xem` INT NOT NULL DEFAULT 0,
    `ma_loai` INT NOT NULL,
    PRIMARY KEY (`ma_hh`),
    FOREIGN KEY (`ma_loai`) REFERENCES `loai`(`ma_loai`)
) ENGINE = InnoDB;
