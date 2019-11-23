-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 05:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sachdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `Gia` bigint(20) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `Gia`, `SoLuong`) VALUES
(1, 200000, 5),
(4, 300000, 4),
(8, 180000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `Id` int(11) NOT NULL,
  `Ten` text COLLATE utf8_unicode_ci NOT NULL,
  `TacGia` text COLLATE utf8_unicode_ci NOT NULL,
  `Gia` bigint(20) NOT NULL,
  `Anh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`Id`, `Ten`, `TacGia`, `Gia`, `Anh`, `MoTa`) VALUES
(1, 'Hoa và Nắng', 'Ngô Bá', 200000, 'images/KT0001.jpg', 'Sách tập trung vào các nội dung sau:\r\n\r\nNghiên cứu lí thuyết chung về từ ngữ ngoại lai làm cơ sở lí thuyết cho việc khảo sát về từ ngữ Hán Việt.\r\nKhảo sát những điểm đặc sắc của từ ngữ Hán Việt trên các bình diện cấu tạo, ngữ nghĩa, giá trị phong cách và dụng học; đặc biệt là những cách thức “Việt hóa” hay sáng tạo mới (trong tiếng Hán không có) của cha ông ta.\r\nKhảo sát những sai sót trong việc giải nghĩa yếu tố Hán Việt. Xây dựng chủ trương, thái độ đúng đắn trong việc chuẩn hóa từ ngữ Hán Việt.\r\nKhảo sát việc sử dụng từ ngữ Hán Việt từ một số bình diện khác như: phong cách học, thành ngữ học, từ điển học.\r\nCác nội dung nêu trên nhằm làm nổi bật một quan điểm tổng quát: từ ngữ Hán Việt là kết quả của sự tiếp nhận tiếng Hán mang tính sáng tạo của người Việt Nam trong quá trình phát triển tiếng Việt.\r\n'),
(3, 'Hoa dại', 'Ngô Quyền', 200000, 'images/KT0002.jpg', 'Sách tập trung vào các nội dung sau:\r\n\r\nNghiên cứu lí thuyết chung về từ ngữ ngoại lai làm cơ sở lí thuyết cho việc khảo sát về từ ngữ Hán Việt.\r\nKhảo sát những điểm đặc sắc của từ ngữ Hán Việt trên các bình diện cấu tạo, ngữ nghĩa, giá trị phong cách và dụng học; đặc biệt là những cách thức “Việt hóa” hay sáng tạo mới (trong tiếng Hán không có) của cha ông ta.\r\nKhảo sát những sai sót trong việc giải nghĩa yếu tố Hán Việt. Xây dựng chủ trương, thái độ đúng đắn trong việc chuẩn hóa từ ngữ Hán Việt.\r\nKhảo sát việc sử dụng từ ngữ Hán Việt từ một số bình diện khác như: phong cách học, thành ngữ học, từ điển học.\r\nCác nội dung nêu trên nhằm làm nổi bật một quan điểm tổng quát: từ ngữ Hán Việt là kết quả của sự tiếp nhận tiếng Hán mang tính sáng tạo của người Việt Nam trong quá trình phát triển tiếng Việt.\r\n'),
(4, 'Đồ họa máy tính', 'Ngô Bá', 300000, 'images/KT0007.jpg', 'Sách tập trung vào các nội dung sau:\r\n\r\nNghiên cứu lí thuyết chung về từ ngữ ngoại lai làm cơ sở lí thuyết cho việc khảo sát về từ ngữ Hán Việt.\r\nKhảo sát những điểm đặc sắc của từ ngữ Hán Việt trên các bình diện cấu tạo, ngữ nghĩa, giá trị phong cách và dụng học; đặc biệt là những cách thức “Việt hóa” hay sáng tạo mới (trong tiếng Hán không có) của cha ông ta.\r\nKhảo sát những sai sót trong việc giải nghĩa yếu tố Hán Việt. Xây dựng chủ trương, thái độ đúng đắn trong việc chuẩn hóa từ ngữ Hán Việt.\r\nKhảo sát việc sử dụng từ ngữ Hán Việt từ một số bình diện khác như: phong cách học, thành ngữ học, từ điển học.\r\nCác nội dung nêu trên nhằm làm nổi bật một quan điểm tổng quát: từ ngữ Hán Việt là kết quả của sự tiếp nhận tiếng Hán mang tính sáng tạo của người Việt Nam trong quá trình phát triển tiếng Việt.\r\n'),
(5, 'Cỏ vàng', 'Ngô Bá', 100000, 'images/KT0003.jpg', 'Sách tập trung vào các nội dung sau:\r\n\r\nNghiên cứu lí thuyết chung về từ ngữ ngoại lai làm cơ sở lí thuyết cho việc khảo sát về từ ngữ Hán Việt.\r\nKhảo sát những điểm đặc sắc của từ ngữ Hán Việt trên các bình diện cấu tạo, ngữ nghĩa, giá trị phong cách và dụng học; đặc biệt là những cách thức “Việt hóa” hay sáng tạo mới (trong tiếng Hán không có) của cha ông ta.\r\nKhảo sát những sai sót trong việc giải nghĩa yếu tố Hán Việt. Xây dựng chủ trương, thái độ đúng đắn trong việc chuẩn hóa từ ngữ Hán Việt.\r\nKhảo sát việc sử dụng từ ngữ Hán Việt từ một số bình diện khác như: phong cách học, thành ngữ học, từ điển học.\r\nCác nội dung nêu trên nhằm làm nổi bật một quan điểm tổng quát: từ ngữ Hán Việt là kết quả của sự tiếp nhận tiếng Hán mang tính sáng tạo của người Việt Nam trong quá trình phát triển tiếng Việt.\r\n'),
(6, 'Chấm', 'Ngô Bá', 150000, 'images/KT0005.jpg', 'Sách tập trung vào các nội dung sau:\r\n\r\nNghiên cứu lí thuyết chung về từ ngữ ngoại lai làm cơ sở lí thuyết cho việc khảo sát về từ ngữ Hán Việt.\r\nKhảo sát những điểm đặc sắc của từ ngữ Hán Việt trên các bình diện cấu tạo, ngữ nghĩa, giá trị phong cách và dụng học; đặc biệt là những cách thức “Việt hóa” hay sáng tạo mới (trong tiếng Hán không có) của cha ông ta.\r\nKhảo sát những sai sót trong việc giải nghĩa yếu tố Hán Việt. Xây dựng chủ trương, thái độ đúng đắn trong việc chuẩn hóa từ ngữ Hán Việt.\r\nKhảo sát việc sử dụng từ ngữ Hán Việt từ một số bình diện khác như: phong cách học, thành ngữ học, từ điển học.\r\nCác nội dung nêu trên nhằm làm nổi bật một quan điểm tổng quát: từ ngữ Hán Việt là kết quả của sự tiếp nhận tiếng Hán mang tính sáng tạo của người Việt Nam trong quá trình phát triển tiếng Việt.\r\n'),
(7, 'Hoa mười giờ', 'Hoàng', 160000, 'images/KT0009.jpg', 'Sách tập trung vào các nội dung sau: Nghiên cứu lí thuyết chung về từ ngữ ngoại lai làm cơ sở lí thuyết cho việc khảo sát về từ ngữ Hán Việt. Khảo sát những điểm đặc sắc của từ ngữ Hán Việt trên các bình diện cấu tạo, ngữ nghĩa, giá trị phong cách và dụng học; đặc biệt là những cách thức “Việt hóa” hay sáng tạo mới (trong tiếng Hán không có) của cha ông ta. Khảo sát những sai sót trong việc giải nghĩa yếu tố Hán Việt. Xây dựng chủ trương, thái độ đúng đắn trong việc chuẩn hóa từ ngữ Hán Việt. Khảo sát việc sử dụng từ ngữ Hán Việt từ một số bình diện khác như: phong cách học, thành ngữ học, từ điển học. Các nội dung nêu trên nhằm làm nổi bật một quan điểm tổng quát: từ ngữ Hán Việt là kết quả của sự tiếp nhận tiếng Hán mang tính sáng tạo của người Việt Nam trong quá trình phát triển tiếng Việt.'),
(8, 'Cảm Nắng', 'Thanh Hoàng', 180000, 'images/KT0008.jpg', 'Sách tập trung vào các nội dung sau: Nghiên cứu lí thuyết chung về từ ngữ ngoại lai làm cơ sở lí thuyết cho việc khảo sát về từ ngữ Hán Việt. Khảo sát những điểm đặc sắc của từ ngữ Hán Việt trên các bình diện cấu tạo, ngữ nghĩa, giá trị phong cách và dụng học; đặc biệt là những cách thức “Việt hóa” hay sáng tạo mới (trong tiếng Hán không có) của cha ông ta. Khảo sát những sai sót trong việc giải nghĩa yếu tố Hán Việt. Xây dựng chủ trương, thái độ đúng đắn trong việc chuẩn hóa từ ngữ Hán Việt. Khảo sát việc sử dụng từ ngữ Hán Việt từ một số bình diện khác như: phong cách học, thành ngữ học, từ điển học. Các nội dung nêu trên nhằm làm nổi bật một quan điểm tổng quát: từ ngữ Hán Việt là kết quả của sự tiếp nhận tiếng Hán mang tính sáng tạo của người Việt Nam trong quá trình phát triển tiếng Việt.'),
(9, 'Mùa đông không lạnh', 'Vô Danh', 95000, 'images/KT0004.jpg', 'Sách tập trung vào các nội dung sau: Nghiên cứu lí thuyết chung về từ ngữ ngoại lai làm cơ sở lí thuyết cho việc khảo sát về từ ngữ Hán Việt. Khảo sát những điểm đặc sắc của từ ngữ Hán Việt trên các bình diện cấu tạo, ngữ nghĩa, giá trị phong cách và dụng học; đặc biệt là những cách thức “Việt hóa” hay sáng tạo mới (trong tiếng Hán không có) của cha ông ta. Khảo sát những sai sót trong việc giải nghĩa yếu tố Hán Việt. Xây dựng chủ trương, thái độ đúng đắn trong việc chuẩn hóa từ ngữ Hán Việt. Khảo sát việc sử dụng từ ngữ Hán Việt từ một số bình diện khác như: phong cách học, thành ngữ học, từ điển học. Các nội dung nêu trên nhằm làm nổi bật một quan điểm tổng quát: từ ngữ Hán Việt là kết quả của sự tiếp nhận tiếng Hán mang tính sáng tạo của người Việt Nam trong quá trình phát triển tiếng Việt.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `sach` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
