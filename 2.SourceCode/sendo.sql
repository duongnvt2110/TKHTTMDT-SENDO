-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 29, 2018 lúc 06:16 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sendo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account_seller`
--

CREATE TABLE `account_seller` (
  `sellerId` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `password` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `account_seller`
--

INSERT INTO `account_seller` (`sellerId`, `username`, `password`) VALUES
(2, '0967488581', '12345678%40'),
(3, 'locntk.ec@gmail.com', 'nhoem2508');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customerId` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customerName` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `numberPhone` varchar(12) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `items`
--

CREATE TABLE `items` (
  `itemId` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `itemName` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `quantity_existed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_item`
--

CREATE TABLE `order_item` (
  `orderId` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `deliver_status` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `totalPrice` int(11) DEFAULT NULL,
  `shopId` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop`
--

CREATE TABLE `shop` (
  `shopId` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `shopName` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sellerId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `shop`
--

INSERT INTO `shop` (`shopId`, `shopName`, `sellerId`) VALUES
('357076', 'DCL', 2),
('378532', 'keity', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_customer`
--

CREATE TABLE `shop_customer` (
  `shopId` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customerId` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_items`
--

CREATE TABLE `shop_items` (
  `shopId` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `itemId` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account_seller`
--
ALTER TABLE `account_seller`
  ADD PRIMARY KEY (`sellerId`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Chỉ mục cho bảng `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`);

--
-- Chỉ mục cho bảng `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `shopId` (`shopId`);

--
-- Chỉ mục cho bảng `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shopId`),
  ADD KEY `sellerId` (`sellerId`);

--
-- Chỉ mục cho bảng `shop_customer`
--
ALTER TABLE `shop_customer`
  ADD PRIMARY KEY (`shopId`,`customerId`),
  ADD KEY `customerId` (`customerId`);

--
-- Chỉ mục cho bảng `shop_items`
--
ALTER TABLE `shop_items`
  ADD PRIMARY KEY (`shopId`,`itemId`),
  ADD KEY `itemId` (`itemId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account_seller`
--
ALTER TABLE `account_seller`
  MODIFY `sellerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`shopId`) REFERENCES `shop` (`shopId`);

--
-- Các ràng buộc cho bảng `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_ibfk_1` FOREIGN KEY (`sellerId`) REFERENCES `account_seller` (`sellerId`);

--
-- Các ràng buộc cho bảng `shop_customer`
--
ALTER TABLE `shop_customer`
  ADD CONSTRAINT `shop_customer_ibfk_1` FOREIGN KEY (`shopId`) REFERENCES `shop` (`shopId`),
  ADD CONSTRAINT `shop_customer_ibfk_2` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`);

--
-- Các ràng buộc cho bảng `shop_items`
--
ALTER TABLE `shop_items`
  ADD CONSTRAINT `shop_items_ibfk_1` FOREIGN KEY (`shopId`) REFERENCES `shop` (`shopId`),
  ADD CONSTRAINT `shop_items_ibfk_2` FOREIGN KEY (`itemId`) REFERENCES `items` (`itemId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
