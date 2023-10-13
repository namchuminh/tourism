-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 08:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `MaBaiViet` int(11) NOT NULL,
  `MaNhanVien` int(11) NOT NULL,
  `TieuDe` varchar(500) NOT NULL,
  `NoiDung` text NOT NULL,
  `NgayDang` date NOT NULL DEFAULT current_timestamp(),
  `TrangThai` int(11) NOT NULL DEFAULT 1,
  `AnhChinh` text NOT NULL,
  `DuongDan` varchar(500) NOT NULL,
  `MaChuyenMuc` int(11) NOT NULL,
  `The` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chuyendi`
--

CREATE TABLE `chuyendi` (
  `MaChuyenDi` int(11) NOT NULL,
  `TenChuyenDi` varchar(500) NOT NULL,
  `GiaChuyenDi` int(11) NOT NULL,
  `AnhChinh` text NOT NULL,
  `MoTaNgan` text NOT NULL,
  `MaDiemDen` int(11) NOT NULL,
  `LoaiChuyenDi` int(11) NOT NULL,
  `DiemKhoiHanh` text NOT NULL,
  `GioKhoiHanh` date NOT NULL,
  `GioQuayVe` date NOT NULL,
  `QuyDinhTrangPhuc` text NOT NULL,
  `BaoGom` text NOT NULL,
  `KhongBaoGom` text NOT NULL,
  `NgayDang` datetime NOT NULL DEFAULT current_timestamp(),
  `DuongDan` text NOT NULL,
  `DoTuoi` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chuyenmuc`
--

CREATE TABLE `chuyenmuc` (
  `MaChuyenMuc` int(11) NOT NULL,
  `TenChuyenMuc` varchar(255) NOT NULL,
  `AnhChinh` text NOT NULL,
  `DuongDan` text NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datve`
--

CREATE TABLE `datve` (
  `MaDatVe` int(11) NOT NULL,
  `MaTimKiem` varchar(255) NOT NULL,
  `MaChuyenDi` int(11) NOT NULL,
  `SoLuongVe` int(11) NOT NULL,
  `TenKhachHang` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL,
  `LoaiKhachHang` varchar(255) NOT NULL,
  `NgayDatVe` datetime NOT NULL DEFAULT current_timestamp(),
  `LoiNhan` text NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diemden`
--

CREATE TABLE `diemden` (
  `MaDiemDen` int(11) NOT NULL,
  `TenDiemDen` varchar(500) NOT NULL,
  `MoTa` text NOT NULL,
  `AnhChinh` text NOT NULL,
  `HinhAnh` text NOT NULL,
  `QuocGia` varchar(255) NOT NULL,
  `YeuCauVisa` int(1) NOT NULL,
  `NgonNgu` varchar(255) NOT NULL,
  `DonViTien` varchar(255) NOT NULL,
  `DienTich` varchar(255) NOT NULL,
  `The` text NOT NULL,
  `DuongDan` text NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1,
  `MaChuyenMuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `MaHinhAnh` int(11) NOT NULL,
  `MaChuyenDi` int(11) NOT NULL,
  `DuongDan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKhachHang` int(11) NOT NULL,
  `TenKhachHang` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL,
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1,
  `NgayThamGia` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lichtrinh`
--

CREATE TABLE `lichtrinh` (
  `MaLichTrinh` int(11) NOT NULL,
  `MaChuyenDi` int(11) NOT NULL,
  `TieuDe` text NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNhanVien` int(11) NOT NULL,
  `TenNhanVien` varchar(255) NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL,
  `DiaChi` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `AnhChinh` text NOT NULL,
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNhanVien`, `TenNhanVien`, `SoDienThoai`, `DiaChi`, `Email`, `AnhChinh`, `TaiKhoan`, `MatKhau`, `TrangThai`) VALUES
(1, 'Anh Tuấn', '0999999999', 'Hà Nội', 'anhtuan@gmail.com', 'http://localhost/tourism/uploads/0c2fe8cfd23299adf541fd3d3dd50162e_169535073736.png', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vitri`
--

CREATE TABLE `vitri` (
  `MaViTri` int(11) NOT NULL,
  `MaChuyenDi` int(11) NOT NULL,
  `MoTaNgan` text NOT NULL,
  `MoTaDai` text NOT NULL,
  `BanDo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`MaBaiViet`);

--
-- Indexes for table `chuyendi`
--
ALTER TABLE `chuyendi`
  ADD PRIMARY KEY (`MaChuyenDi`);

--
-- Indexes for table `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  ADD PRIMARY KEY (`MaChuyenMuc`);

--
-- Indexes for table `datve`
--
ALTER TABLE `datve`
  ADD PRIMARY KEY (`MaDatVe`);

--
-- Indexes for table `diemden`
--
ALTER TABLE `diemden`
  ADD PRIMARY KEY (`MaDiemDen`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`MaHinhAnh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Indexes for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD PRIMARY KEY (`MaLichTrinh`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNhanVien`);

--
-- Indexes for table `vitri`
--
ALTER TABLE `vitri`
  ADD PRIMARY KEY (`MaViTri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `MaBaiViet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `chuyendi`
--
ALTER TABLE `chuyendi`
  MODIFY `MaChuyenDi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  MODIFY `MaChuyenMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `datve`
--
ALTER TABLE `datve`
  MODIFY `MaDatVe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `diemden`
--
ALTER TABLE `diemden`
  MODIFY `MaDiemDen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `MaHinhAnh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
  MODIFY `MaLichTrinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNhanVien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vitri`
--
ALTER TABLE `vitri`
  MODIFY `MaViTri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
