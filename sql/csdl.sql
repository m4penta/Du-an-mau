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

CREATE TABLE `duanmau`.`khach_hang` (
    `ma_kh` VARCHAR(20) NOT NULL COMMENT 'Mã khách hàng',
    `mat_khau` VARCHAR(50) NOT NULL comment'Mật khẩu',
    `ho_ten` VARCHAR(50) NOT NULL comment'Họ và tên',
    `kich_hoat` BIT NOT NULL  comment'Trạng thái kích hoạt',
    `hinh` VARCHAR(50) NOT NULL  comment'Tên hình ảnh',
	`email` VARCHAR(50) NOT NULL  comment'Địa chỉ email',
	`vai_tro` BIT NOT NULL  comment'Vai trò true là nhân viên',
     PRIMARY KEY (`ma_kh`)
) ENGINE = InnoDB;

/* 
Xuân Vũ
*/

CREATE TABLE `duanmau`.`binh_luan` (
    `ma_bl` INT NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận',
    `noi_dung` VARCHAR(255) NOT NULL comment'nội dung bình luận',
	`ma_hh` INT NOT NULL comment'Mã hàng hóa được bình luận',
    `ma_kh` VARCHAR(20) NOT NULL comment'Mã người bình luận',
    `ngay_bl` DATE NOT NULL comment'Thời gian bình luận',
    PRIMARY KEY (`ma_bl`),
    FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa`(`ma_hh`),
    FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang`(`ma_kh`)
) ENGINE = InnoDB;
