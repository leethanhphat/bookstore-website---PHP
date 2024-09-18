-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:4306
-- Thời gian đã tạo: Th12 09, 2023 lúc 02:04 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Cơ sở dữ liệu: `db_bookshop`
--
CREATE DATABASE IF NOT EXISTS `db_bookshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_bookshop`;
--
-- Cơ sở dữ liệu: `db_bookshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_carts`
--

CREATE TABLE `tbl_carts` (
  `cart_id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_carts`
--

INSERT INTO `tbl_carts` (`cart_id`, `userID`, `productID`, `quantity`) VALUES
(1, 1, 2, 10),
(2, 1, 3, 1),
(3, 1, 8, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `categoryID` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_categories`
--

INSERT INTO `tbl_categories` (`categoryID`, `category_name`) VALUES
(1, 'book'),
(2, 'pen'),
(3, 'pencil'),
(4, 'ruler'),
(5, 'notebook');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_orderdetails`
--

CREATE TABLE `tbl_orderdetails` (
  `order_detailID` int(11) NOT NULL,
  `orderID` int(11) DEFAULT NULL,
  `productID` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `orderID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_products`
--

CREATE TABLE `tbl_products` (
  `productID` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `stock_quantity` int(11) DEFAULT NULL,
  `product_img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_products`
--

INSERT INTO `tbl_products` (`productID`, `product_name`, `categoryID`, `price`, `stock_quantity`, `product_img`) VALUES
(1, 'Đắc Nhân Tâm', 1, 65, 100, 'https://cdn0.fahasa.com/media/catalog/product/d/n/dntttttuntitled_1.jpg'),
(2, 'Nhà Giả Kim', 1, 70, 50, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_36793.jpg'),
(3, 'Muôn Kiếp Nhân Sinh tập 2', 1, 150, 100, 'https://cdn0.fahasa.com/media/catalog/product/m/u/muonkiepnhansinh2_bia-01.jpg'),
(4, 'Muôn Kiếp Nhân Sinh', 1, 68, 30, 'https://cdn0.fahasa.com/media/catalog/product/m/u/muonkiepnhansinh_1.jpg'),
(5, 'Harry Potter Và Hòn Đá Phù Thuỷ - tập 1', 1, 65, 100, 'https://cdn0.fahasa.com/media/catalog/product/8/9/8934974179672.jpg'),
(6, 'Harry Potter  Và Phòng Chứa Bí Mật - tập 2', 1, 65, 100, 'https://cdn0.fahasa.com/media/catalog/product/8/9/8934974182290.jpg'),
(7, 'Bút hồng', 2, 15, 1000, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_10616.jpg'),
(8, 'Bút xanh', 2, 15, 500, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_10615.jpg'),
(9, 'Bút xám', 2, 15, 500, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_10607.jpg'),
(10, 'Bút tím', 2, 15, 500, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_10600.jpg'),
(11, 'Bút chì gỗ', 3, 15, 500, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_244718_1_1064.jpg'),
(12, 'Bút chì bấm - màu xanh', 3, 15, 500, 'https://cdn0.fahasa.com/media/catalog/product/3/9/3900000150743.jpg'),
(13, 'Bút chì bấm - màu hồng', 3, 15, 500, 'https://cdn0.fahasa.com/media/catalog/product/3/9/3900000150583.jpg'),
(14, 'Bộ thước Maped', 4, 25, 450, 'https://cdn0.fahasa.com/media/catalog/product/3/1/3154142428158_2.jpg'),
(15, 'Thước Dẻo SR-023 - Hồng', 4, 25, 450, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_50806.jpg'),
(16, 'Thước Baoke 20cm RU2074', 4, 25, 450, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_195509_1_31214.jpg'),
(17, 'Vở chấm bi', 5, 25, 450, 'https://cdn0.fahasa.com/media/catalog/product/i/m/image_227381.jpg'),
(18, 'Vở sọc', 5, 25, 450, 'https://cdn0.fahasa.com/media/catalog/product/8/9/8936072916142_1.jpg'),
(19, 'Vở cún', 5, 25, 450, 'https://cdn0.fahasa.com/media/catalog/product/8/9/8935044514348.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `username`, `password`, `Email`, `is_admin`) VALUES
(1, 'ADMIN1', '$2y$10$FVMm5KUR21PODKJ8C4q2lOtu1UxxcaXV6vsLCvZhjsa48rKzAoQdW', 'admin1@gmail.com', 1),
(2, 'SMILE', '$2y$10$L3JKZLPqGGjob104B9nZ2Ol7ULubJvH3PPp7hii1/FZF/DemAXQXq', 'smile@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_carts`
--
ALTER TABLE `tbl_carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `userID_3` (`userID`,`productID`),
  ADD KEY `userID_2` (`userID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `userID` (`userID`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Chỉ mục cho bảng `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD PRIMARY KEY (`order_detailID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `productID` (`productID`);

--
-- Chỉ mục cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`);

--
-- Chỉ mục cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_carts`
--
ALTER TABLE `tbl_carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  MODIFY `order_detailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_carts`
--
ALTER TABLE `tbl_carts`
  ADD CONSTRAINT `FR_KEY_PRODUCTID` FOREIGN KEY (`productID`) REFERENCES `tbl_products` (`productID`),
  ADD CONSTRAINT `FR_KEY_USERID` FOREIGN KEY (`userID`) REFERENCES `tbl_users` (`userID`);

--
-- Các ràng buộc cho bảng `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD CONSTRAINT `tbl_orderdetails_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `tbl_orders` (`orderID`),
  ADD CONSTRAINT `tbl_orderdetails_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `tbl_products` (`productID`);

--
-- Các ràng buộc cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD CONSTRAINT `tbl_orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tbl_users` (`userID`);

--
-- Các ràng buộc cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `tbl_products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `tbl_categories` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
