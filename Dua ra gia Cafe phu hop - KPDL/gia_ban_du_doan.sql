-- Bảng chứa giá bán dự đoán
CREATE TABLE IF NOT EXISTS gia_du_doan (
    MaSP TEXT PRIMARY KEY,
    GiaBanDuDoan REAL
);

-- Xóa dữ liệu cũ (nếu cần)
DELETE FROM gia_du_doan;

-- Thêm dữ liệu giá bán dự đoán
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP01', 21.948539243407357);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP02', 17.356572510032933);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP03', 25.388888888888882);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP04', 25.644444444444442);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP05', 24.311111111111103);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP06', 23.80387184689562);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP07', 23.9);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP08', 15.561111111111117);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP09', 16.52416889720721);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP10', 15.483333333333334);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP11', 17.56111111111111);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP12', 14.844444444444447);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP13', 20.688888888888894);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP14', 19.922222222222217);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP15', 20.022222222222222);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP16', 21.05);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP17', 19.76666666666667);
INSERT INTO gia_du_doan (MaSP, GiaBanDuDoan) VALUES ('SP18', 22.183333333333334);
