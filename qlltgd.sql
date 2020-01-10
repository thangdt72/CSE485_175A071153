-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th1 10, 2020 lúc 10:44 SA
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlltgd`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` char(10) NOT NULL,
  `TenGV` varchar(50) NOT NULL,
  `NgaySinh` date NOT NULL,
  `QueQuan` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `TenGV`, `NgaySinh`, `QueQuan`, `Email`) VALUES
('79TS167', 'Trần Quốc Trung', '1979-09-04', 'Hưng Yên', 'quoctrung67@gmail.com'),
('80TS153', 'Lê Huy Đức', '1980-01-21', 'Hà Đông, Hà Nội', 'huyduc53@gmail.com'),
('81TS112', 'Phạm Tiến Vũ', '1981-05-13', 'Bắc Giang', 'tienvu12@gmail.com'),
('82TS133', 'Dương Minh Sơn', '1982-11-22', 'Hai Bà Trưng, Hà Nội', 'minhson33@gmail.com'),
('82TS144', 'Chu Bá Lộc', '1982-02-23', 'Cầu Giấy, Hà Nội', 'baloc44@gmail.com'),
('83TS116', 'Nguyễn Minh Trang', '1983-06-14', 'Thanh Xuân, Hà Nội', 'minhtrang16@gmail.com'),
('83TS199', 'Đoàn Ngọc Hưng', '1983-02-24', 'Ba Đình, Hà Nội', 'ngochung99@gmail.com'),
('84ThS172', 'Hoàng Thu Thủy', '1984-07-27', 'Hà Nam', 'thuthuy72@gmail.com'),
('85ThS181', 'Vũ Minh Tú', '1985-04-03', 'Đống Đa, Hà Nội', 'minhtu81@gmail.com'),
('86ThS161', 'Lê Thu Hương', '1986-08-06', 'Mỹ Đình, Hà Nội', 'thuhuong61@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kehoach`
--

CREATE TABLE `kehoach` (
  `MaLop` char(15) NOT NULL,
  `Buoi` int(11) DEFAULT NULL,
  `BaiHoc` varchar(100) DEFAULT NULL,
  `PhongHoc` char(15) DEFAULT NULL,
  `TietHoc` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `kehoach`
--

INSERT INTO `kehoach` (`MaLop`, `Buoi`, `BaiHoc`, `PhongHoc`, `TietHoc`) VALUES
('CSE484-1.1-1-18', 1, 'TỔNG QUAN HỆ THỐNG CƠ SỞ DỮ LIỆU', '322 - A4', '1,2,3'),
('CSE484-1.1-1-18', 2, 'GIỚI THIỆU THIẾT KẾ CƠ SỞ DỮ LIỆU', '322 - A4', '1,2,3'),
('CSE484-1.1-1-18', 3, 'MÔ HÌNH QUAN HỆ', '322 - A4', '1,2,3'),
('CSE484-1.1-1-18', 4, 'SQL: TRUY VẤN, RÀNG BUỘC', '322 - A4', '1,2,3'),
('CSE484-1.1-1-18', 5, 'PHỤ THUỘC HÀM VÀ KHÓA', '322 - A4', '1,2,3'),
('CSE481-1.1-1-19', 6, 'DẠNG CHUẨN VÀ CHUẨN HÓA', '322 - A4', '1,2,3'),
('CSE484-1.1-1-18', 7, '	\r\nTỐI ƯU HÓA CÂU HỎI TRUY VẤN', '322 - A4', '1,2,3'),
('CSE484-2.1-1-18', 1, 'TỔNG QUAN HỆ THỐNG CƠ SỞ DỮ LIỆU', '324 - A4', '4,5,6'),
('CSE484-2.1-1-18', 2, 'GIỚI THIỆU THIẾT KẾ CƠ SỞ DỮ LIỆU', '324 - A4', '4,5,6'),
('CSE484-2.1-1-18', 3, 'MÔ HÌNH QUAN HỆ', '324 - A4', '4,5,6'),
('CSE484-2.1-1-18', 4, 'SQL: TRUY VẤN, RÀNG BUỘC', '324 - A4', '4,5,6'),
('CSE484-2.1-1-18', 5, 'PHỤ THUỘC HÀM VÀ KHÓA', '324 - A4', '4,5,6'),
('CSE484-2.1-1-18', 6, 'DẠNG CHUẨN VÀ CHUẨN HÓA', '324 - A4', '4,5,6'),
('CSE484-2.1-1-18', 7, 'TỐI ƯU HÓA CÂU HỎI TRUY VẤN', '324 - A4', '4,5,6'),
('CSE484-1.1-1-18', 6, 'DẠNG CHUẨN VÀ CHUẨN HÓA', '322 - A4', '1,2,3'),
('CSE484-1.1-1-18', 8, 'dgsdvasd', '322 - A4', '1,2,3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichtrinh`
--

CREATE TABLE `lichtrinh` (
  `MaLop` char(15) NOT NULL,
  `Buoi` int(11) DEFAULT NULL,
  `BaiHoc` varchar(100) DEFAULT NULL,
  `PhongHoc` char(15) DEFAULT NULL,
  `TietHoc` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lichtrinh`
--

INSERT INTO `lichtrinh` (`MaLop`, `Buoi`, `BaiHoc`, `PhongHoc`, `TietHoc`) VALUES
('CSE484-1.1-1-18', 1, 'TỔNG QUAN HỆ THỐNG CƠ SỞ DỮ LIỆU', '224 - A4', '1,2,3'),
('CSE484-1.1-1-18', 2, 'GIỚI THIỆU THIẾT KẾ CƠ SỞ DỮ LIỆU', '322 - A4', '1,2,3'),
('CSE484-2.1-1-18', 1, 'TỔNG QUAN HỆ THỐNG CƠ SỞ DỮ LIỆU', '322 - A4', '4,5,6'),
('CSE484-2.1-1-18', 2, 'GIỚI THIỆU THIẾT KẾ CƠ SỞ DỮ LIỆU', '322 - A4', '1,2,3'),
('CSE484-1.1-1-18', 8, 'dgsdvasd', '322 - A4', '1,2,3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `MaLop` char(15) NOT NULL,
  `TenLop` varchar(50) NOT NULL,
  `MaMon` char(8) NOT NULL,
  `GiaiDoan` tinyint(2) NOT NULL,
  `HocKy` tinyint(2) NOT NULL,
  `NamHoc` char(10) NOT NULL,
  `DiaDiem` char(15) NOT NULL,
  `MaGV` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`MaLop`, `TenLop`, `MaMon`, `GiaiDoan`, `HocKy`, `NamHoc`, `DiaDiem`, `MaGV`) VALUES
('CHE224-1.1-1-19', 'Hóa nước-1.1-1-19', 'CHEM224', 1, 1, '2019-2020', '222 - A2', '85ThS181'),
('CHE224-2.1-1-19', 'Hóa nước-2.1-1-19', 'CHEM224', 2, 1, '2019-2020', '328 - A3', '79TS167'),
('CHE224-2.2-1-19', 'Hóa nước-2.2-1-19', 'CHEM224', 2, 1, '2019-2020', '326 - A3', '79TS167'),
('CSE370-1.1-1-19', 'Kiến trúc máy tính-1.1-1-19', 'CSE370', 1, 1, '2019-2020', '325 - A2', '79TS167'),
('CSE370-1.2-1-19', 'Kiến trúc máy tính-1.2-1-19', 'CSE370', 1, 1, '2019-2020', '322 - A4', '83TS116'),
('CSE481-1.1-1-19', 'Công nghệ phần mềm-1.1-1-19', 'CSE481', 1, 1, '2019-2020', '328 - A3', '80TS153'),
('CSE482-2.1-1-19', 'Hệ điều hành-2.1-1-19', 'CSE482', 2, 1, '2019-2020', '422 - A3', '81TS112'),
('CSE484-1.1-1-18', 'Cơ sở dữ liệu-1.1-1-18', 'CSE484', 1, 1, '2018-2019', '322 - A4', '79TS167'),
('CSE484-2.1-1-18', 'Cơ sở dữ liệu-2.1-1-18', 'CSE484', 2, 1, '2018-2019', '324 - A4', '79TS167'),
('CSE484-2.1-1-19', 'Cơ sở dữ liệu-2.1-1-19', 'CSE484', 2, 1, '2019-2020', '422 - A4', '82TS133'),
('CSE486-1.1-2-19', 'Hệ quản trị cơ sở dữ liệu-1.1-2-19', 'CSE486', 1, 2, '2019-2020', '222 - A4', '82TS144'),
('EN315-1.1-2-19', 'Vi sinh vật học môi trường-1.1-2-19', 'EN315', 1, 2, '2019-2020', '322 - A2', '86ThS161'),
('GEO214-1.1-1-19', 'Địa chất công trình-1.1-1-19', 'GEOT214', 1, 1, '2019-2020', '222 - A3', '83TS199'),
('GEO325-2.1-1-19', 'Cơ học đất-2.1-1-19', 'GEOT325', 2, 1, '2019-2020', '322 - A3', '84ThS172'),
('HYD325-1.1-1-19', 'Thủy lực công trình-1.1-1-19', 'HYDR325', 1, 1, '2019-2020', '422-A4', '79TS167'),
('HYD346-2.1-1-19', 'Thủy văn công trình-2.1-1-19', 'HYDR346', 2, 1, '2019-2020', '222 - A3', '79TS167');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMon` char(8) NOT NULL,
  `TenMon` varchar(50) NOT NULL,
  `MaNganh` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMon`, `TenMon`, `MaNganh`) VALUES
('CE214', 'Sức bền vật liệu', 'TLA105'),
('CHEM224', 'Hóa nước', 'TLA107'),
('CSE370', 'Kiến trúc máy tính', 'TLA106'),
('CSE481', 'Công nghệ phần mềm', 'TLA106'),
('CSE482', 'Hệ điều hành', 'TLA106'),
('CSE484', 'Cơ sở dữ liệu', 'TLA106'),
('CSE486', 'Hệ quản trị cơ sở dữ liệu', 'TLA106'),
('ECOL0214', 'Sinh thái học', 'TLA109'),
('EES234', 'Hóa học môi trường', 'TLA109'),
('EGN316', 'Kỹ thuật điện', 'TLA107'),
('EN315', 'Vi sinh vật học môi trường', 'TLA109'),
('ENV215', 'Quy hoạch môi trường', 'TLA109'),
('ENV225', 'Phân tích môi trường', 'TLA109'),
('FLME214', 'Cơ học chất lỏng', 'TLA104'),
('GEOT214', 'Địa chất công trình', 'TLA104'),
('GEOT325', 'Cơ học đất', 'TLA104'),
('HYDR325', 'Thủy lực công trình', 'TLA107'),
('HYDR346', 'Thủy văn công trình', 'TLA107'),
('MACH214', 'Nguyên lý máy', 'TLA105'),
('MECH213', 'Cơ học cơ sở 1', 'TLA104'),
('MECH224', 'Cơ học cơ sở 2', 'TLA104'),
('MEDR314', 'Vẽ cơ khí 1', 'TLA105'),
('MEDR324', 'Vẽ cơ khí 2', 'TLA105'),
('THER315', 'Kỹ thuật nhiệt', 'TLA105'),
('URPM316', 'Quy hoạch đô thị', 'TLA107');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhhoc`
--

CREATE TABLE `nganhhoc` (
  `MaNganh` char(8) NOT NULL,
  `TenNganh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nganhhoc`
--

INSERT INTO `nganhhoc` (`MaNganh`, `TenNganh`) VALUES
('TLA104', 'Kỹ thuật xây dựng'),
('TLA105', 'Kỹ thuật cơ khí'),
('TLA106', 'Nhóm ngành công nghệ thông tin'),
('TLA107', 'Kỹ thuật cấp thoát nước'),
('TLA109', 'Kỹ thuật môi trường'),
('TLA114', 'Quản lý xây dựng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `MaQuyen` int(10) UNSIGNED NOT NULL,
  `TenQuyen` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`MaQuyen`, `TenQuyen`) VALUES
(1, 'Admin'),
(2, 'GiangVien');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int(10) UNSIGNED NOT NULL,
  `TenTK` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(80) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Sdt` varchar(11) DEFAULT NULL,
  `MaQuyen` int(10) UNSIGNED NOT NULL,
  `TrangThai` bit(1) NOT NULL DEFAULT b'0',
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `MaGV` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `TenTK`, `MatKhau`, `Email`, `Sdt`, `MaQuyen`, `TrangThai`, `created`, `MaGV`) VALUES
(1, 'Admin', '$2y$10$vNI5IdRPco/2MqiL74nY1u/1wYR.ejk2rSpMKbOmy9MLADyziRPJK', 'duongtienthang123456789@gmail.com', '09794458663', 1, b'1', '0000-00-00 00:00:00', NULL),
(2, 'quoctrung67', '$2y$10$MkO6jJx9eXIXdMxMOIfeW.UBKOaE4gR8IkN4dxCwwFWIGCHGk9JoC', 'quoctrung67@gmail.com', '0979763098', 2, b'1', '0000-00-00 00:00:00', '79TS167');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`);

--
-- Chỉ mục cho bảng `kehoach`
--
ALTER TABLE `kehoach`
  ADD KEY `MaLop` (`MaLop`);

--
-- Chỉ mục cho bảng `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD KEY `MaLop` (`MaLop`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaMon` (`MaMon`),
  ADD KEY `MaGV` (`MaGV`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMon`),
  ADD KEY `MaNganh` (`MaNganh`);

--
-- Chỉ mục cho bảng `nganhhoc`
--
ALTER TABLE `nganhhoc`
  ADD PRIMARY KEY (`MaNganh`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`),
  ADD KEY `MaQuyen` (`MaQuyen`),
  ADD KEY `MaGV` (`MaGV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `MaQuyen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `kehoach`
--
ALTER TABLE `kehoach`
  ADD CONSTRAINT `kehoach_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`);

--
-- Các ràng buộc cho bảng `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD CONSTRAINT `lichtrinh_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`);

--
-- Các ràng buộc cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD CONSTRAINT `lophoc_ibfk_1` FOREIGN KEY (`MaMon`) REFERENCES `monhoc` (`MaMon`),
  ADD CONSTRAINT `lophoc_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);

--
-- Các ràng buộc cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`MaNganh`) REFERENCES `nganhhoc` (`MaNganh`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `quyen` (`MaQuyen`),
  ADD CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
