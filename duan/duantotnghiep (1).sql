-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 10:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duantotnghiep`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(4) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `price`, `total`, `created_at`, `updated_at`) VALUES
(53, 2, 1, 1, 105000, 0, '2024-01-15 09:07:59', '2024-01-15 09:38:18'),
(54, 2, 1, 1, 105000, 105000, '2024-01-15 09:21:09', '2024-01-15 09:21:09'),
(55, 2, 1, 2, 105000, 210000, '2024-01-15 09:21:11', '2024-01-15 09:21:11'),
(56, 2, 2, 1, 93, 93, '2024-01-15 09:21:12', '2024-01-15 09:21:12'),
(57, 2, 2, 2, 93, 186, '2024-01-15 09:21:13', '2024-01-15 09:21:13'),
(58, 2, 1, 1, 105000, 105000, '2024-01-15 09:23:25', '2024-01-15 09:23:25'),
(59, 2, 2, 1, 93, 93, '2024-01-15 09:23:26', '2024-01-15 09:23:26'),
(60, 2, 3, 1, 95, 95, '2024-01-15 09:23:27', '2024-01-15 09:23:27'),
(61, 2, 5, 1, 170, 170, '2024-01-15 09:23:28', '2024-01-15 09:23:28'),
(62, 2, 1, 1, 105000, 105000, '2024-01-15 09:37:10', '2024-01-15 09:37:10'),
(63, 2, 47, 1, 70, 70, '2024-01-15 09:37:16', '2024-01-15 09:37:16'),
(64, 2, 1, 1, 105000, 105000, '2024-01-15 09:38:08', '2024-01-15 09:38:08'),
(65, 2, 1, 2, 105000, 210000, '2024-01-15 09:38:14', '2024-01-15 09:38:14'),
(66, 2, 2, 1, 93, 93, '2024-01-15 09:38:33', '2024-01-15 09:38:33'),
(67, 2, 3, 1, 95, 95, '2024-01-15 09:38:34', '2024-01-15 09:38:34'),
(68, 2, 1, 1, 105000, 105000, '2024-01-15 09:38:36', '2024-01-15 09:38:36'),
(69, 2, 1, 1, 105000, 105000, '2024-01-15 09:39:53', '2024-01-15 09:39:53'),
(70, 2, 2, 1, 93, 93, '2024-01-15 09:39:54', '2024-01-15 09:39:54'),
(71, 2, 1, 1, 105000, 105000, '2024-01-15 09:41:26', '2024-01-15 09:41:26'),
(72, 2, 2, 1, 93, 93, '2024-01-15 09:41:27', '2024-01-15 09:41:27'),
(73, 2, 1, 1, 105000, 105000, '2024-01-15 09:42:36', '2024-01-15 09:42:36'),
(74, 2, 2, 1, 93, 93, '2024-01-15 09:42:37', '2024-01-15 09:42:37'),
(75, NULL, 1, 1, 105000, 105000, '2024-01-15 09:45:40', '2024-01-15 09:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `hidden` int(11) NOT NULL DEFAULT 1,
  `thutu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `img`, `hidden`, `thutu`) VALUES
(1, 'Sách văn học', '12.png', 1, '1'),
(3, 'Tiểu thuyết', '12.png', 1, '2'),
(4, 'Thơ', '12.png', 1, '4'),
(5, 'Tiểu sử - Hồi ký', '12.png', 1, '5'),
(6, 'Truyện dài', '12.png', 1, '6'),
(7, 'Truyện trinh thám', '12.png', 1, '7'),
(8, 'Tuyện Giả tưởng - Huyền bí - Phiêu lưu', '23.png', 1, '8'),
(9, 'Truyện cổ tích - ngụ ngôn', '12.png', 1, '9'),
(10, 'Sách tâm lý', '12.png', 1, '10'),
(11, 'Tranh truyện', '12.png', 1, '11'),
(12, 'Truyện kinh dị', '12.png', 1, '12'),
(13, 'Truyện ngắn', '12.png', 1, '13');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `content` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hidden` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `idProduct`, `idUser`, `content`, `time`, `hidden`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'duoc chua', '2024-01-13 03:33:45', 0, 0, '2024-01-13 03:33:45', '2024-01-13 03:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `time` date NOT NULL,
  `hidden` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `img`, `content`, `time`, `hidden`, `created_at`, `updated_at`) VALUES
(1, 'Sách Tài Chính Cá Nhân Dành Cho Người Việt Nam: Mua Cũng Được, Không Cũng Chẳng Sao', '/img/tintuc1.jpg', 'Theo nghiên cứu của 1 tổ chức tài chính quốc tế thì tỷ lệ hiểu biết về tài chính ở người trưởng thành tại Việt Nam chỉ đạt 19%. Trong khi đó con số này ở Thái Lan là 24%. Và ở Sing thì lên đến 59%\r\nVậy người Việt Nam sẽ làm gì để nâng cao hiểu biết tài chính?\r\n\r\nHọ học, học qua các khóa học làm giàu. Họ học qua các video trên Youtube, các trang blog tài chính. Cũng như tìm đến những cuốn sách.\r\n\r\nVà cuốn Tài chính cá nhân dành cho người Việt Nam này nằm trong sự lựa chọn của khá nhiều bạn đọc hiện nay.\r\n\r\nNhưng mà hượm đã bạn ơi, trước khi mua hãy đọc bài review sách này của tôi. Vì thực sự thì cuốn này MUA CŨNG ĐƯỢC mà KHÔNG MUA CŨNG CHẲNG SAO.', '2024-01-10', 1, NULL, NULL),
(2, 'Đại dịch covid 19', '/img/tintuc2.jpg', 'Triều đại covid năm thứ 1 diễn ra vào dịp Tết Nguyên Đán 2020, đó là 1 cú sốc lớn với thị trường tài chính toàn cầu. Ở Việt Nam cũng không ngoại lệ. Mọi người khó khăn về tài chính hơn rất nhiều, chi tiêu dè dặt, tình hình ảm đạm.\r\n\r\nGiữa lúc đó tôi đi học 1 khóa về tài chính cá nhân với hi vọng cải thiện tình hình hiện tại. Cũng như nâng cấp bản thân. Trong khóa học đó, có 1 học viên đề cập tới cuốn sách đang khá nổi lúc bấy giờ “Tài chính cá nhân dành cho người Việt Nam”. Và anh ta hỏi diễn giả có nên đọc và làm theo cuốn sách này không?\r\n\r\nDiễn giả đó lạnh lùng trả lời “Sách như beep, đọc để làm gì?”\r\n\r\nLúc đó tôi ngạc nhiên, vì tôi có biết về cuốn sách này. Nó được PR khá nhiều trên tiki cũng như 1 vài blog tài chính khác là sách tài chính đầu tiên viết bởi người Việt Nam, dành cho người Việt Nam. Tại sao lại có chuyện đó được?\r\n\r\nAnh diễn giả nói thêm “Cuốn đó đã làm sai lệch tư tưởng tài chính của khá nhiều người. Anh khuyên là không nên đọc”.\r\n\r\nTại sao 1 người có kiến thức tài chính như vậy lại chê cuốn sách thậm tệ đến vậy được nhỉ?\r\n\r\nTôi sẽ kể tiếp lý do cho bạn nghe ngay sau đây! Nhưng trước tiên. tôi phải giới thiệu qua cho bạn về tác giả cuốn sách.\r\n\r\nMột cao thủ đầu không mưng mủ\r\nChờ chút, đoạn này tôi sẽ giới thiệu khá chi tiết về tác giả. Nếu bạn đã biết tác giả là ai thì có thể bỏ qua và đọc đoạn tiếp. Còn nếu chưa đọc, hãy bớt chút thời gian để đọc. Vì khi bạn mua 1 cuốn sách, bạn nên biết rõ tác giả của cuốn sách là ai.\r\n\r\nThường 10 ông viết sách thì có tới 7,8 ông là background khủng. Ông thì khủng về gia thế, ông thì khủng về học vấn. Có những ông thì khủng về tải sản. Và tác giả của cuốn sách này – Lâm Minh Chánh cũng không phải ngoại lệ.', '2024-01-01', 1, NULL, NULL),
(3, 'Review Sách Chuyện Con Mèo Dạy Hải Âu Bay: Bạn Có Nên Đọc?', '', 'Chuyện con mèo dạy hải âu bay? Chờ một chút, có gì đó sai sai ở đây. Con mèo dạy hải âu bay? Tên cuốn sách này nghe hết sức kỳ lạ phải không nào?\r\n\r\nVậy mà tiêu đề hết sức vô lý nhưng lại cực kỳ thuyết phục!\r\n\r\nTôi biết bạn click vào bài viết là để khám phá bí mật này. Làm sao một cuốn sách tưởng chừng như dành cho thiếu nhi mà lại được rất nhiều người lớn tìm đọc như vậy? Tại sao nó lại có sức cuốn hút đến thế?\r\n\r\nNếu bạn cũng tò mò về những câu hỏi như vậy, thì bài viết này là dành cho bạn.\r\n\r\nBạn chắc chắn sẽ đọc hết bài viết này phải không? Hãy để tôi đưa ra 1 lời đề nghị nhé!\r\n\r\nNếu bạn chịu đọc hết bài viết này, tôi sẽ hứa biến nó thành 1 cuộc dạo chơi thú vị, đầy ắp tiếng cười. Và hơn hết, tôi sẽ tặng bạn một món quà!\r\n\r\nTuyệt phải không nào? Vậy hãy thắt dây an toàn vào, chúng ta sẽ bắt đầu cuộc hành trình…', '2024-01-02', 1, NULL, NULL),
(4, 'Review Xách Balo Lên Và Đi: Châu Á Là Nhà, Đừng Khóc', '', 'Tước tiên hãy tạm bỏ qua việc nên hay không nên đọc cuốn Xách balo lên và đi này, đó là phần sau của bài viết. Hãy ngồi xuống, uống một cốc nước hoặc 1 chén trà. Và từ tốn nghe tôi kể cho các bạn 1 điều này. Rất có thể sẽ có hình dáng của bạn ở trong đó đấy.\r\n\r\nBạn biết Nike, Adidas và Puma chứ? Doanh số năm 2019 của Nike là 39,12 tỉ USD. Adidas theo sau với 23,64 tỉ USD. Còn Puma cũng mang về cho mình doanh thu 5,5 tỉ USD. Quả là những con số lớn phải không nào?\r\n\r\nTheo khảo sát thì người Việt đóng góp khá khá cho doanh thu của những hãng thể thao này. Nhưng người Việt chi cho giày dép với mục đích chủ yếu là làm đẹp lên tới 67%.\r\n\r\nCòn giới trẻ Âu, Mỹ thì chủ yếu mua giày cho nhu cầu thể thao và du lịch. Chính sự khác biệt này đã cho chúng ta cái nhìn không quá tích cực về người Việt. Nói chung là người Việt khá lười vận động.', '2024-01-03', 1, NULL, NULL),
(5, 'VĂN HỌC NƯỚC NGOÀI', '', 'Sách văn học nước ngoài luôn có sức ảnh hưởng và giá trị truyền tải là vô cùng lớn. Rất nhiều các tác phẩm nhận được những giải thưởng danh giá. Được đông đảo người đọc trên toàn thế giới yêu thích.\r\n\r\nDon Quixote dẫn dắt người đọc một cách tài tình để khám phá những khía cạnh khác thường của một con người. “Đồi gió hú” mang lại một kết thúc đẹp ám ảnh trong lòng người đọc. Hay “Bắt trẻ đồng xanh” đã đi vào lòng người bởi những triết lý đơn giản nhưng vẫn còn hiện hữu đến tận ngày nay.\r\n\r\nTại chuyên mục sách văn học nước ngoài của website Một cuốn sách, mình sẽ tập trung Review nhưng cuốn sách hay nhất, thực tế nhất. Cũng như những cuốn sách đang là trend, để giúp các bạn nắm được nội dung. ', '2024-01-01', 1, NULL, NULL),
(6, 'Sách Tài Chính Cá Nhân Dành Cho Người Việt Nam: Mua Cũng Được, Không Cũng Chẳng Sao', '', 'Theo nghiên cứu của 1 tổ chức tài chính quốc tế thì tỷ lệ hiểu biết về tài chính ở người trưởng thành tại Việt Nam chỉ đạt 19%. Trong khi đó con số này ở Thái Lan là 24%. Và ở Sing thì lên đến 59%\r\nVậy người Việt Nam sẽ làm gì để nâng cao hiểu biết tài chính?\r\n\r\nHọ học, học qua các khóa học làm giàu. Họ học qua các video trên Youtube, các trang blog tài chính. Cũng như tìm đến những cuốn sách.\r\n\r\nVà cuốn Tài chính cá nhân dành cho người Việt Nam này nằm trong sự lựa chọn của khá nhiều bạn đọc hiện nay.\r\n\r\nNhưng mà hượm đã bạn ơi, trước khi mua hãy đọc bài review sách này của tôi. Vì thực sự thì cuốn này MUA CŨNG ĐƯỢC mà KHÔNG MUA CŨNG CHẲNG SAO.', '2024-01-10', 1, NULL, NULL),
(7, 'Đại dịch covid 19', '', 'Triều đại covid năm thứ 1 diễn ra vào dịp Tết Nguyên Đán 2020, đó là 1 cú sốc lớn với thị trường tài chính toàn cầu. Ở Việt Nam cũng không ngoại lệ. Mọi người khó khăn về tài chính hơn rất nhiều, chi tiêu dè dặt, tình hình ảm đạm.\r\n\r\nGiữa lúc đó tôi đi học 1 khóa về tài chính cá nhân với hi vọng cải thiện tình hình hiện tại. Cũng như nâng cấp bản thân. Trong khóa học đó, có 1 học viên đề cập tới cuốn sách đang khá nổi lúc bấy giờ “Tài chính cá nhân dành cho người Việt Nam”. Và anh ta hỏi diễn giả có nên đọc và làm theo cuốn sách này không?\r\n\r\nDiễn giả đó lạnh lùng trả lời “Sách như beep, đọc để làm gì?”\r\n\r\nLúc đó tôi ngạc nhiên, vì tôi có biết về cuốn sách này. Nó được PR khá nhiều trên tiki cũng như 1 vài blog tài chính khác là sách tài chính đầu tiên viết bởi người Việt Nam, dành cho người Việt Nam. Tại sao lại có chuyện đó được?\r\n\r\nAnh diễn giả nói thêm “Cuốn đó đã làm sai lệch tư tưởng tài chính của khá nhiều người. Anh khuyên là không nên đọc”.\r\n\r\nTại sao 1 người có kiến thức tài chính như vậy lại chê cuốn sách thậm tệ đến vậy được nhỉ?\r\n\r\nTôi sẽ kể tiếp lý do cho bạn nghe ngay sau đây! Nhưng trước tiên. tôi phải giới thiệu qua cho bạn về tác giả cuốn sách.\r\n\r\nMột cao thủ đầu không mưng mủ\r\nChờ chút, đoạn này tôi sẽ giới thiệu khá chi tiết về tác giả. Nếu bạn đã biết tác giả là ai thì có thể bỏ qua và đọc đoạn tiếp. Còn nếu chưa đọc, hãy bớt chút thời gian để đọc. Vì khi bạn mua 1 cuốn sách, bạn nên biết rõ tác giả của cuốn sách là ai.\r\n\r\nThường 10 ông viết sách thì có tới 7,8 ông là background khủng. Ông thì khủng về gia thế, ông thì khủng về học vấn. Có những ông thì khủng về tải sản. Và tác giả của cuốn sách này – Lâm Minh Chánh cũng không phải ngoại lệ.', '2024-01-01', 1, NULL, NULL),
(8, 'Review Sách Chuyện Con Mèo Dạy Hải Âu Bay: Bạn Có Nên Đọc?', '', 'Chuyện con mèo dạy hải âu bay? Chờ một chút, có gì đó sai sai ở đây. Con mèo dạy hải âu bay? Tên cuốn sách này nghe hết sức kỳ lạ phải không nào?\r\n\r\nVậy mà tiêu đề hết sức vô lý nhưng lại cực kỳ thuyết phục!\r\n\r\nTôi biết bạn click vào bài viết là để khám phá bí mật này. Làm sao một cuốn sách tưởng chừng như dành cho thiếu nhi mà lại được rất nhiều người lớn tìm đọc như vậy? Tại sao nó lại có sức cuốn hút đến thế?\r\n\r\nNếu bạn cũng tò mò về những câu hỏi như vậy, thì bài viết này là dành cho bạn.\r\n\r\nBạn chắc chắn sẽ đọc hết bài viết này phải không? Hãy để tôi đưa ra 1 lời đề nghị nhé!\r\n\r\nNếu bạn chịu đọc hết bài viết này, tôi sẽ hứa biến nó thành 1 cuộc dạo chơi thú vị, đầy ắp tiếng cười. Và hơn hết, tôi sẽ tặng bạn một món quà!\r\n\r\nTuyệt phải không nào? Vậy hãy thắt dây an toàn vào, chúng ta sẽ bắt đầu cuộc hành trình…', '2024-01-02', 1, NULL, NULL),
(9, 'Review Xách Balo Lên Và Đi: Châu Á Là Nhà, Đừng Khóc', '', 'Tước tiên hãy tạm bỏ qua việc nên hay không nên đọc cuốn Xách balo lên và đi này, đó là phần sau của bài viết. Hãy ngồi xuống, uống một cốc nước hoặc 1 chén trà. Và từ tốn nghe tôi kể cho các bạn 1 điều này. Rất có thể sẽ có hình dáng của bạn ở trong đó đấy.\r\n\r\nBạn biết Nike, Adidas và Puma chứ? Doanh số năm 2019 của Nike là 39,12 tỉ USD. Adidas theo sau với 23,64 tỉ USD. Còn Puma cũng mang về cho mình doanh thu 5,5 tỉ USD. Quả là những con số lớn phải không nào?\r\n\r\nTheo khảo sát thì người Việt đóng góp khá khá cho doanh thu của những hãng thể thao này. Nhưng người Việt chi cho giày dép với mục đích chủ yếu là làm đẹp lên tới 67%.\r\n\r\nCòn giới trẻ Âu, Mỹ thì chủ yếu mua giày cho nhu cầu thể thao và du lịch. Chính sự khác biệt này đã cho chúng ta cái nhìn không quá tích cực về người Việt. Nói chung là người Việt khá lười vận động.', '2024-01-03', 1, NULL, NULL),
(10, 'VĂN HỌC NƯỚC NGOÀI', '', 'Sách văn học nước ngoài luôn có sức ảnh hưởng và giá trị truyền tải là vô cùng lớn. Rất nhiều các tác phẩm nhận được những giải thưởng danh giá. Được đông đảo người đọc trên toàn thế giới yêu thích.\r\n\r\nDon Quixote dẫn dắt người đọc một cách tài tình để khám phá những khía cạnh khác thường của một con người. “Đồi gió hú” mang lại một kết thúc đẹp ám ảnh trong lòng người đọc. Hay “Bắt trẻ đồng xanh” đã đi vào lòng người bởi những triết lý đơn giản nhưng vẫn còn hiện hữu đến tận ngày nay.\r\n\r\nTại chuyên mục sách văn học nước ngoài của website Một cuốn sách, mình sẽ tập trung Review nhưng cuốn sách hay nhất, thực tế nhất. Cũng như những cuốn sách đang là trend, để giúp các bạn nắm được nội dung. ', '2024-01-01', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`id`, `name`, `img`) VALUES
(1, 'VBooks', 'nxb1.jpg'),
(2, 'Nhà sách Trẻ Online', 'nxb2.jpg'),
(3, 'Nhà sách Fahasa', 'nxb3.jpg'),
(4, 'Nhà sách Kim Đồng', 'nxb4.jpg'),
(5, 'Minhhabooks', 'nxb5.jpg'),
(6, 'Phương Đông Books', 'nxb6.jpg'),
(7, 'Alpha Books Official', 'nxb7.jpg'),
(8, 'Nhà sách Phương Nam', 'nxb8.jpg'),
(9, 'Nhã Nam', 'nxb1.jpg'),
(10, 'NXB Trẻ', 'nxb2.jpg'),
(11, 'AZ Việt Nam', 'nxb3.jpg'),
(12, 'NXB Kim Đồng', 'nxb4.jpg'),
(13, 'Skybooks', 'nxb5.jpg'),
(14, 'NXB Phụ nữ Việt Nam', 'nxb6.jpg'),
(15, 'Alpha Books', 'nxb7.jpg'),
(16, 'Huy Hoàng Bookstore', 'nxb8.jpg'),
(17, 'Nhà Xuất Bản Hội Nhà Văn', 'nxb17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `hoTen` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `hoTen`, `email`, `phone`, `address`, `note`, `total`, `status`, `created_at`, `updated_at`) VALUES
(37, 2, 'Vo Dinh Kha', 'khavd@gmail.com', 389838883, 'HCM', NULL, 135000, 'new', '2024-01-15 09:14:02', '2024-01-15 09:14:02'),
(38, 2, 'Vo Dinh Kha', 'khavd@gmail.com', 389838883, 'HCM', 'test', 450279, 'new', '2024-01-15 09:21:23', '2024-01-15 09:21:23'),
(39, 2, 'Vo Dinh Kha', 'khavd@gmail.com', 389838883, 'HCM', NULL, 555637, 'new', '2024-01-15 09:23:32', '2024-01-15 09:23:32'),
(40, 2, 'Vo Dinh Kha', 'khavd@gmail.com', 389838883, 'HCM', 'test', 870707, 'new', '2024-01-15 09:37:31', '2024-01-15 09:37:31'),
(41, NULL, 'fg vhjk', 'khavodinh46@gmail.com', 1234567890, 'sdfdgf', 'sdFzdxgf', 135000, 'new', '2024-01-15 09:46:12', '2024-01-15 09:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `total` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `id_product`, `total`, `quantity`, `created_at`, `updated_at`) VALUES
(30, 37, 1, '105000', '1', '2024-01-15 09:14:02', '2024-01-15 09:14:02'),
(31, 38, 1, '210000', '2', '2024-01-15 09:21:23', '2024-01-15 09:21:23'),
(32, 38, 2, '186', '2', '2024-01-15 09:21:23', '2024-01-15 09:21:23'),
(33, 39, 1, '105000', '1', '2024-01-15 09:23:32', '2024-01-15 09:23:32'),
(34, 39, 2, '93', '1', '2024-01-15 09:23:32', '2024-01-15 09:23:32'),
(35, 39, 3, '95', '1', '2024-01-15 09:23:32', '2024-01-15 09:23:32'),
(36, 39, 5, '170', '1', '2024-01-15 09:23:32', '2024-01-15 09:23:32'),
(37, 40, 1, '315000', '3', '2024-01-15 09:37:31', '2024-01-15 09:37:31'),
(38, 40, 47, '70', '1', '2024-01-15 09:37:31', '2024-01-15 09:37:31'),
(39, 41, 1, '105000', '1', '2024-01-15 09:46:12', '2024-01-15 09:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `price` int(11) NOT NULL,
  `priceSale` float NOT NULL,
  `luotxem` varchar(1000) NOT NULL,
  `tomTat` varchar(1000) NOT NULL,
  `moTa` text NOT NULL,
  `ngayDang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `namsanxuat` varchar(1000) NOT NULL,
  `idNhaxuatban` int(11) NOT NULL,
  `idTacgia` int(11) NOT NULL,
  `idVoucher` int(11) NOT NULL,
  `yeuthich` varchar(1000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `giamgia` int(11) NOT NULL DEFAULT 0,
  `hidden` int(11) NOT NULL DEFAULT 0,
  `hot` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `price`, `priceSale`, `luotxem`, `tomTat`, `moTa`, `ngayDang`, `namsanxuat`, `idNhaxuatban`, `idTacgia`, `idVoucher`, `yeuthich`, `quantity`, `giamgia`, `hidden`, `hot`, `created_at`, `updated_at`) VALUES
(1, 'Tìm Mình Trong Thế Giới Hậu Tuổi Thơ', '/uploads/tl1.jpg', 105000, 90000, '56', 'Vang lên như những bài hát khi buồn đau khi dữ dội, những chân dung trong cuốn sách cùng các phân tích tâm lý học của tác giả sẽ khiến cha mẹ, thầy cô và tất cả những ai có người trẻ trong cuộc sống của mình phải thức tỉnh, phải ngồi xuống lắng nghe con em mình và suy ngẫm về bản thân, để học cách chữa lành và yêu thương đích thực.', 'Khi ngợi khen một người trẻ độc lập mạnh mẽ, có thể chúng ta không biết họ lớn lên trong môi trường phải làm bố mẹ của bố mẹ mình ra sao, cô đơn khắc khoải thế nào. Khi ngưỡng một một người trẻ học giỏi, có thể chúng ta không biết họ đã bị ngạt thở bởi kỳ vọng của cha mẹ. Khi phán xét một người trẻ hời hợt thiếu động lực sống, có thể chúng ta không biết từ bé đến lớn họ đã được \"đút sẵn\" đến nỗi không còn biết mình là ai. Khi kêu ca một người trẻ thiếu nghị lực muốn kết thúc cuộc sống, có thể chúng ta không biết họ đã oằn mình mang gánh nặng mà gia đình ấn xuống quá lâu, khiến cánh giải thoát duy nhất là cái chết…\r\n\r\nTìm mình trong thế giới hậu tuổi thơ của Đặng Hoàng Giang dẫn người đọc vào thế giới của người trẻ trên dưới hai mươi tuổi, lứa tuổi không còn trẻ con, nhưng cũng chưa thực sự là người lớn. Trong thế giới đó có những run rẩy của va chạm thân thể lần đầu, có lấp lánh của tình yêu, có những đêm dài, những chuyến đi xa, những hoang mang và băn khoăn hiện sinh. Nhưng bao trùm lên tất cả, như một tấm màn lớn, là nỗi đau. Nỗi đau từ sự cô đơn của đứa con vẫn được xã hội khen là “trưởng thành” và “ngoan,” từ sự trống rỗng nội tâm của đứa trẻ lớn lên trong một gia đình lạnh lẽo, từ sự tuyệt vọng của người trẻ bị giam cầm trong nhà tù mang tên tình yêu cha mẹ.\r\n\r\nVang lên như những bài hát khi buồn đau khi dữ dội, những chân dung trong cuốn sách cùng các phân tích tâm lý học của tác giả sẽ khiến cha mẹ, thầy cô và tất cả những ai có người trẻ trong cuộc sống của mình phải thức tỉnh, phải ngồi xuống lắng nghe con em mình và suy ngẫm về bản thân, để học cách chữa lành và yêu thương đích thực.', '2024-01-15 03:20:30', '2019', 5, 7, 1, '5', 5055, 1, 1, 1, NULL, NULL),
(2, 'Tâm Lý Học Về Sự Trưởng Thành', '/uploads/tl3.png', 93, 0, '45', 'Xin việc khó khăn, tương lai mù mịt, không có gì trong tay, chẳng việc gì suôn sẻ Có lẽ bây giờ bạn cũng đang sa chân vào đầm lầy của chán nản và tuyệt vọng. Lúc nào chúng ta cũng đau đầu tìm cách để được mọi người yêu thương và công nhận. Vì thế nên thay vì tận hưởng công việc, ta luôn bị đeo bám bởi nỗi lo lắng bị đào thải nếu không hoàn thành tốt nhiệm vụ. Đáng lẽ ta đã có thể sống vui vẻ hơn, hạnh phúc hơn, và yêu thương mọi người nhiều hơn, nhưng ta luôn để ý nghĩ “phải làm” nhấn chìm cuộc sống của mình vào trách nhiệm và nghĩa vụ.', 'Xin việc khó khăn, tương lai mù mịt, không có gì trong tay, chẳng việc gì suôn sẻ Có lẽ bây giờ bạn cũng đang sa chân vào đầm lầy của chán nản và tuyệt vọng. Lúc nào chúng ta cũng đau đầu tìm cách để được mọi người yêu thương và công nhận. Vì thế nên thay vì tận hưởng công việc, ta luôn bị đeo bám bởi nỗi lo lắng bị đào thải nếu không hoàn thành tốt nhiệm vụ. Đáng lẽ ta đã có thể sống vui vẻ hơn, hạnh phúc hơn, và yêu thương mọi người nhiều hơn, nhưng ta luôn để ý nghĩ “phải làm” nhấn chìm cuộc sống của mình vào trách nhiệm và nghĩa vụ.\r\nThiên tài không thể đánh bại những người làm việc chăm chỉ, người làm việc chăm chỉ không thể đánh bại những người biết tận hưởng. Vậy nên chỉ cần bạn muốn làm điều gì đó và tận hưởng được niềm vui từ công việc đó là đủ. Nếu đang bị gánh nặng “phải làm” đè lên vai khiến bạn không biết mình thực sự muốn gì, thì hãy bắt đầu tìm kiếm từ bây giờ. Vấn đề nảy sinh thì tìm cách giải quyết, xung đột xuất hiện thì tìm cách tháo gỡ, ngã thì đứng dậy, mệt thì dựa vào vai người bên cạnh nghỉ một chút rồi lại tiếp tục bước đi, đó là cách để ta sống cuộc đời này.\r\nBởi mỗi người lại có một cuộc đời khác nhau, nên không thể nào tồn tại một đáp án đúng cho tất cả. Thay vào đó, tâm lý học lắng nghe câu chuyện của bạn, cùng tìm hiểu nguồn gốc của vấn đề để giúp bạn tự hiểu ra và đưa ra những quyết định đúng đắn. Cuốn sách này đồng hành cùng bạn trong hành trình trưởng thành về tâm hồn, mong bạn đạt được những điều mình \"muốn làm\", sống một cuộc đời hạnh phúc và tự chữa lành cho bản thân.', '2024-01-14 18:12:39', '2023', 17, 18, 1, '10', 50, 0, 1, 1, NULL, NULL),
(3, 'Bồ Câu Không Đưa Thư', '/uploads/tl4.jpg', 95, 0, '10', 'Đây là một trong những truyện dài mà mình đã từng đọc của nhà văn Nguyễn Nhật Ánh. Bằng cách viết giản dị, đầy tính trữ tình, tác giả đã khiến mình cảm thấy rất ấn tượng với câu chuyện tình yêu học trò rất trong sáng, vô tư nhưng cũng có chút rụt rè của những cô cậu học sinh lớp mười một. Nhân vật chính trong chuyện rụt rè đến nỗi chỉ vì sợ bạn chê mình xấu, chê mình quê mà không dám ngỏ lời, chỉ dám hàng ngày lén để lại những lá thư những quả ổi hay phong kẹo trong ngăn bàn bạn để rồi cuối cùng cũng phải ra đi mang theo một dấu ấn khó phai của tuổi học trò.', 'Tình cảm tuổi học trò ngây ngô hồn nhiên trong sáng. Bộ ba Xuyến, Thục, Cúc Hương đã đưa người đọc đi từ bất ngờ này đến bất ngờ khác. Những bức thư trong ngăn bàn, những bài thơ, rồi cùng nhau đi rình xem tác giả của bức thư ấy là ai. Đó là tuổi học trò mộng mơ mà ai cũng từng trải qua. Câu chuyện mang đến cảm giác thân quen, nhẹ nhàng nhưng không kém phần sâu sắc. Nhà văn Nguyễn Nhật Ánh thực sự là cây bút của tuổi thơ. Bác cho trẻ em những tác phẩm phù hợp với lứa tuổi của mình và cho người lớn nhưng hoài niệm về một miền kí ức xôn xao.\r\n\r\nĐây là một trong những truyện dài mà mình đã từng đọc của nhà văn Nguyễn Nhật Ánh. Bằng cách viết giản dị, đầy tính trữ tình, tác giả đã khiến mình cảm thấy rất ấn tượng với câu chuyện tình yêu học trò rất trong sáng, vô tư nhưng cũng có chút rụt rè của những cô cậu học sinh lớp mười một. Nhân vật chính trong chuyện rụt rè đến nỗi chỉ vì sợ bạn chê mình xấu, chê mình quê mà không dám ngỏ lời, chỉ dám hàng ngày lén để lại những lá thư những quả ổi hay phong kẹo trong ngăn bàn bạn để rồi cuối cùng cũng phải ra đi mang theo một dấu ấn khó phai của tuổi học trò.\r\n\r\nBằng lối viết nhẹ nhàng, hóm hỉnh và trong trẻo, tác giả Nguyễn Nhật Ánh đã viết nên một câu chuyện của những cô cậu học trò bước vào tuổi mới lớn, với những xúc cảm trong sáng thuở đầu đời. Những bài thơ đút dưới ngăn bàn, những cây kẹo, trái ổi, quả xoài, ấy thế mà đã tạo nên tình bạn đẹp, cảm xúc đẹp. Thời học sinh, cấp 3 là gắn bó và ấn tượng nhất. Mối quan hệ lúc bấy giờ không còn khu biệt ở tình bạn, tình thầy trò mà đã mở rộng hơn là những rung động với bạn khác phái. Kí ức đó dù đẹp, mong manh hay vô định, cũng là hành trang để ta cất bước vào đời.', '2024-01-14 18:12:42', '2019', 10, 1, 1, '20', 50, 0, 1, 1, NULL, NULL),
(4, 'Sống Cảm Xúc Cũng Cần Đúng Lúc', '/uploads/tl5.jpg', 85, 0, '20', 'Cuốn sách “Sống cảm xúc cũng cần đúng lúc” là một ấn phẩm dành riêng đến bạn trong năm 2023 này. Khi mà các lớp học về trí thông minh cảm xúc được diễn đạt qua những câu chuyện dựa trên cuộc sống thực tế. Ấn phẩm giúp bạn hiểu tại sao các nhà nghiên cứu tại Đại học Harvard lại cho rằng 80% thành công của một người quyết định bởi trí tuệ cảm xúc (EQ), cũng giúp bạn hiểu hơn những câu hỏi bạn mãi hoài nghi', 'Ấn phẩm “Sống cảm xúc cũng cần đúng lúc” - Lớp học EQ dành cho người trẻ đang học cách kiểm soát xúc cảm cá nhân!\r\n\r\nCó phải bạn đang loay hoay tìm cách đối mặt với những chỉ trích?\r\n\r\nCó phải bạn đang rối trí khi cảm thấy bản thân không thể nói ra quan điểm của chính mình?\r\n\r\nCó phải bạn đang gặp vấn đề trong việc kết giao và xây dựng mối quan hệ?\r\n\r\nVà có phải bạn đang gặp phải hàng vạn vấn đề xoay xung quanh việc giải quyết mâu thuẫn giữa con tim và trí óc, giữa những xúc cảm và lý trí?\r\n\r\nCuốn sách “Sống cảm xúc cũng cần đúng lúc” là một ấn phẩm dành riêng đến bạn trong năm 2023 này. Khi mà các lớp học về trí thông minh cảm xúc được diễn đạt qua những câu chuyện dựa trên cuộc sống thực tế. Ấn phẩm giúp bạn hiểu tại sao các nhà nghiên cứu tại Đại học Harvard lại cho rằng 80% thành công của một người quyết định bởi trí tuệ cảm xúc (EQ), cũng giúp bạn hiểu hơn những câu hỏi bạn mãi hoài nghi:\r\n\r\nTại sao có những người rất đỗi thông minh khi còn trên ghế nhà trường nhưng lại gặp nhiều thất bại, gian nan trong công việc?\r\n\r\nVà tại sao có những người năng lực chỉ ở mức trung bình nhưng lại thành công vang dội ở một lĩnh vực nào đó?\r\n\r\nVà có phải chìa khóa thành công nằm ở việc người đó có trí tuệ cảm xúc?\r\n\r\nTác giả Chung Huệ sẽ dẫn dắt bạn đến “giảng đường” EQ, nơi mà bạn có thể học được cách đón nhận những chỉ trích bằng một tinh thần vững mạnh, vượt qua khó khăn bằng việc sử dụng lòng tin và ý chí sắt đá của bản thân. Giúp bạn trau dồi thêm kỹ năng lắng nghe, thấu hiểu để các mối quan hệ luôn thuận hòa với “dòng chảy” trưởng thành.', '2024-01-12 14:30:58', '2023', 2, 17, 1, '10', 20, -10, 1, 1, NULL, NULL),
(5, 'Hồ Sơ Tâm Lý Học - Tâm Thần Hay Kẻ Điên', '/uploads/tl6.jpg', 170, 0, '20', '“Có lúc, chúng ta gọi bệnh tâm thần là bệnh cố chấp, các bệnh nhân đều cố chấp sống trong thế giới kì thú của mình, không chịu hòa nhập với người xung quanh, không thể giống với đám đông, họ cố chấp dằn vặt chính mình.”', 'Nếu không có chuyên môn chúng ta sẽ chẳng thể hiểu nổi điều gì đang thống trị trong thế giới của những kẻ tâm thần. Tuy nhiên, nếu bạn đã sẵn sàng tiến thêm một bước vào mảng tối trong thế giới của họ, hãy cầm cuốn sách này lên.\r\n\r\nCuốn sách “Hồ sơ tâm lý học - Tâm thần hay kẻ điên” của tác giả Mục Qua sẽ tái hiện chân thực những khốn cảnh tâm lý của những bệnh nhân tâm thần dưới góc nhìn của bác sĩ, cũng như quá trình đấu tranh và hội phục tâm lý của họ. Từ đó phơi bày những góc khuất của xã hội, môi trường gia đình, bạo lực, tội phạm, mối liên hệ giữa bệnh nhân và xã hội.\r\n\r\nCuốn sách bao gồm 13 câu chuyện khác nhau diễn ra trong cùng một bệnh viện tâm thần, nó lột tả chi tiết từng khía cạnh về những căn bệnh tâm thần như chứng cuồng phóng hỏa, rối loạn nhân dạng phân ly, trầm cảm cười, chứng hoang tưởng,ên suốt cuốn sách bạn sẽ bắt gặp một nhóm “người điên” đang sống trong vực thẳm. Họ có thể là những thiên tài kỳ quái với những ý tưởng kỳ lạ không thể hiểu nổi. Là những kẻ lừa đảo có học, giấu đi nhân cách phản xã hội và phản nhân loại một cách đầy hoàn hảo, càng là những kẻ cô độc đến đáng thương, Họ mang trong mình những tâm hồn tan nát song đầy nóng bỏng ẩn sau hai từ “kẻ điên”.\r\n\r\nĐặc biệt, những bối cảnh tâm lý trong cuốn sách đều dựa trên những câu chuyện thực tế của chính bản thân tác giả khi làm việc tại Trung Tâm sức khỏe Tâm thần từ khi là thực tập sinh. Dưới ngòi bút của mình, bổ sung thêm kiến thức tâm lý học và trích dẫn lý thuyết một cách rõ ràng cuốn sách sẽ dẫn dắt bạn đi qua tất cả những cung bậc cảm xúc từ hoài nghi, phẫn nỗ đến bi thương và đồng cảm, phá vỡ những định kiến về căn bệnh này.\r\n\r\nBiến mình trở thành một đứa trẻ ngoan, giết chết nhân cách vốn có, một đứa trẻ đã phải trải qua những gì để có thể làm hài lòng cha mẹ? Cuốn sách sẽ đưa bạn xuyên qua những khu rừng tăm tối của trái tim con người và chạm vào những mảnh đời đang chờ đợi được sửa chữa. Bởi suy cho cùng những bệnh nhân tâm thần chính là những con người đáng thương nhất khi họ luôn phải chạy trốn trong chính vỏ bọc mà mình tạo ra.', '2024-01-12 14:31:49', '2020', 17, 16, 1, '1', 10, 0, 1, 1, NULL, NULL),
(11, 'Tại Sao Lời Bạn Nói Lại Khiến Tôi Không Vui', '/uploads/tl7.jpg', 155, 0, '10', 'Bản tính của con người được thể hiện thông qua cách chúng ta đối thoại với người khác. Trong bất kỳ trường hợp nào, chúng ta đều có thể lựa chọn thái độ khi trò chuyện. Thông qua thái độ ấy, ta có thể tự mình xây dựng đồng thời cũng có thể tự tay phá hủy các mối quan hệ và phẩm cách bản thân.', 'Bản tính của con người được thể hiện thông qua cách chúng ta đối thoại với người khác. Trong bất kỳ trường hợp nào, chúng ta đều có thể lựa chọn thái độ khi trò chuyện. Thông qua thái độ ấy, ta có thể tự mình xây dựng đồng thời cũng có thể tự tay phá hủy các mối quan hệ và phẩm cách bản thân.\r\n\r\nHọc cách đối thoại đúng đắn không phải để một ngày kia bản tính chúng ta sẽ bất ngờ thay đổi hay đối phương đột nhiên răm rắp nghe lời ta. Mà quan trọng hơn, ta sẽ rèn luyện được con mắt nhìn nhận người khác, và trên tất cả, đạt tới năng lực thấu hiểu. Chúng ta sẽ dám đứng lên khắc phục tình huống khó khăn, tiếp tục đối thoại bằng những kỹ năng hoàn toàn khác biệt.\r\n\r\nKhi bạn khó chịu với lời đối phương nói,\r\n\r\nKhi bạn hối hận với những gì mình lỡ thốt ra,\r\n\r\nCuốn sách này sẽ cung cấp những phương pháp đối thoại thực tế giúp bạn kết nối và gỡ rối các mối quan hệ.', '2024-01-12 14:31:49', '2020', 14, 18, 1, '100', 30, 0, 1, 1, NULL, NULL),
(12, 'Nương Theo Dòng Chảy Tâm Trí', 'uploads/tl2.jpg', 141, 0, '10', 'Làm thế nào để giải phóng năng lượng tiêu cực khỏi cơ thể bằng cách \"nương theo dòng chảy tâm trí”?Phương pháp Nương Theo Dòng Chảy Tâm Trí là chìa khóa của bạn để cuối cùng vượt qua lo lắng, chống lại căng thẳng và giải quyết các khối cảm xúc, từ đó giải phóng một nguồn năng lượng sống vô hạn. Thông qua sự kết hợp mạnh mẽ nhưng đơn giản của các chuyển động, bạn có thể kích hoạt sự thay đổi năng lượng và kết nối lại với dòng chảy tự nhiên của cuộc sống. ', 'Làm thế nào để giải phóng năng lượng tiêu cực khỏi cơ thể bằng cách \"nương theo dòng chảy tâm trí”?Phương pháp Nương Theo Dòng Chảy Tâm Trí là chìa khóa của bạn để cuối cùng vượt qua lo lắng, chống lại căng thẳng và giải quyết các khối cảm xúc, từ đó giải phóng một nguồn năng lượng sống vô hạn. Thông qua sự kết hợp mạnh mẽ nhưng đơn giản của các chuyển động, bạn có thể kích hoạt sự thay đổi năng lượng và kết nối lại với dòng chảy tự nhiên của cuộc sống. \r\n\r\nCách phương pháp Nương Theo Dòng Chảy Tâm Trí hoạt động:\r\n\r\n- Sử dụng các chuyển động tương tự như Khí công, khai thác trường năng lượng bên trong và xung quanh chúng ta. \r\n\r\n- Đưa chúng ta vào trạng thái ý thức cao hơn (trạng thái G4), nơi cơ thể chúng ta tiết ra các hormone \'hạnh phúc\' giúp chúng ta thư giãn. Ở trạng thái này, chúng ta có thể khai thác bất kỳ năng lượng độc hại nào xung quanh và sử dụng như sức mạnh của chính mình.\r\n\r\n-Nâng cao mức năng lượng của bạn và chuyển sang trạng thái trôi chảy và bình an sâu sắc bên trong.', '2024-01-02 15:53:18', '2023', 16, 11, 1, '10', 60, 0, 1, 0, NULL, NULL),
(13, 'Đừng lựa chọn an nhàn khi còn trẻ', 'uploads/tl8.jpg', 69, 0, '10', 'Đừng Lựa Chọn An Nhàn Khi Còn Trẻ\r\n\r\nTrong độ xuân xanh phơi phới ngày ấy, bạn không dám mạo hiểm, không dám nỗ lực để kiếm học bổng, không chịu tìm tòi những thử thách trong công việc, không phấn đấu hướng đến ước mơ của mình. Bạn mơ mộng rằng làm việc xong sẽ vào làm ở một công ty nổi tiếng, làm một thời gian sẽ thăng quan tiến chức. Mơ mộng rằng khởi nghiệp xong sẽ lập tức nhận được tiền đầu tư, cầm được tiền đầu tư là sẽ niêm yết trên sàn chứng khoán. Mơ mộng rằng muốn gì sẽ có đó, không thiếu tiền cũng chẳng thiếu tình, an hưởng những năm tháng êm đềm trong cuộc đời mình.', 'Đừng Lựa Chọn An Nhàn Khi Còn Trẻ\r\n\r\nTrong độ xuân xanh phơi phới ngày ấy, bạn không dám mạo hiểm, không dám nỗ lực để kiếm học bổng, không chịu tìm tòi những thử thách trong công việc, không phấn đấu hướng đến ước mơ của mình. Bạn mơ mộng rằng làm việc xong sẽ vào làm ở một công ty nổi tiếng, làm một thời gian sẽ thăng quan tiến chức. Mơ mộng rằng khởi nghiệp xong sẽ lập tức nhận được tiền đầu tư, cầm được tiền đầu tư là sẽ niêm yết trên sàn chứng khoán. Mơ mộng rằng muốn gì sẽ có đó, không thiếu tiền cũng chẳng thiếu tình, an hưởng những năm tháng êm đềm trong cuộc đời mình.\r\n\r\nNhưng vì sao bạn lại nghĩ rằng bạn chẳng cần bỏ ra chút công sức nào, cuộc sống sẽ dâng đến tận miệng những thứ bạn muốn? Bạn cần phải hiểu rằng: Hấp tấp muốn mau chóng thành công rất dễ khiến chúng ta đi vào mê lộ. Thanh xuân là khoảng thời gian đẹp đẽ nhất trong đời, cũng là những năm tháng then chốt có thể quyết định tương lai của một người. Nếu bạn lựa chọn an nhàn trong 10 năm, tương lai sẽ buộc bạn phải vất vả trong 50 năm để bù đắp lại. Nếu bạn bươn chải vất vả trong 10 năm, thứ mà bạn chắc chắn có được là 50 năm hạnh phúc. Điều quý giá nhất không phải là tiền mà là tiền bạc.\r\n\r\nThế nên, bạn à, đừng lựa chọn an nhàn khi còn trẻ.', '2024-01-02 15:56:53', '2023', 11, 16, 1, '20', 10, 0, 1, 1, NULL, NULL),
(14, 'Từ Ngày Mai Hãy Làm Người Hạnh Phúc', 'uploads', 118, 0, '50', 'Từ Ngày Mai Hãy Làm Người Hạnh Phúc\r\n\r\nNgày hôm nay của bạn có đang hoài nghi bản thân?\r\n\r\nVậy thì cuốn sách Từ Ngày Mai Hãy Làm Người Hạnh Phúc này là dành cho bạn. Từ Ngày Mai Hãy Làm Người Hạnh Phúc sẽ đồng hành bên bạn, dịu dàng gửi gắm các thông điệp ý nghĩa chân thành và tích cực về tình thân, tình bạn, tình yêu… dễ dàng chạm tới trái tim bạn, vỗ về sự tủi thân trong bạn, xoa dịu nỗi cô độc của bạn.', 'Từ Ngày Mai Hãy Làm Người Hạnh Phúc\r\n\r\nNgày hôm nay của bạn có đang hoài nghi bản thân?\r\n\r\nVậy thì cuốn sách Từ Ngày Mai Hãy Làm Người Hạnh Phúc này là dành cho bạn. Từ Ngày Mai Hãy Làm Người Hạnh Phúc sẽ đồng hành bên bạn, dịu dàng gửi gắm các thông điệp ý nghĩa chân thành và tích cực về tình thân, tình bạn, tình yêu… dễ dàng chạm tới trái tim bạn, vỗ về sự tủi thân trong bạn, xoa dịu nỗi cô độc của bạn.\r\n\r\nNhững con người khác nhau với những câu chuyện khác nhau, nhưng đều là những băn khoăn trăn trở của người trẻ trên hành trình trưởng thành, phấn đấu trở thành một “bản thân” tốt đẹp hơn, hạnh phúc hơn ở tương lai.\r\n\r\nThực chất, hạnh phúc không phải thứ gì quá mức to lớn xa vời, mà chỉ là những điều rất đỗi nhỏ bé ở xung quanh ta. Tựa như lúc tuyết phủ rợp trời, được lim dim thiếp đi trong căn nhà sáng ánh đèn, bên chậu than hồng ấm áp đã là niềm hạnh phúc to lớn nhất của cuộc đời vậy. \r\n\r\n“Mỗi ngày là khởi đầu, cũng là kết thúc. Mỗi ngày đều chỉ là quá khứ của ngày mai.\r\nHãy hướng tới ngày mai với tình yêu, đối đãi với mọi người, mọi chuyện bằng lòng yêu thương.\r\nHãy yêu cuộc đời giật gấu vá vai của mình.\r\nHãy bước về phía trước với lòng yêu thương, cho đến khi bạn trở nên thuần khiết, bao dung, tâm hồn trong sáng, khoáng đạt.\r\nTừ ngày mai hãy làm người hạnh phúc.”', '2024-01-04 15:56:53', '2021', 13, 9, 1, '10', 26, 0, 1, 1, NULL, NULL),
(15, 'Một cuốn sách trầm cảm', 'uploads/tl10.jpg', 88, 0, '50', '“Ở nơi đây mình không bán nụ cười\r\n\r\nmình chỉ bán nước mắt và buồn hiu\r\n\r\nở nơi đây mình không bán tình yêu\r\n\r\nchỉ có cô liêu và những ngày quạnh quẽ.”\r\n\r\n ', 'Một cuốn sách trầm cảm hay còn có tên Một cuốn sách của macmart là quyển tản văn và thơ bộc bạch những tâm tư, cảm xúc của một người trẻ, một trái tim non dại, một tâm hồn chênh vênh, khắc khoải, đớn đau khi phải đối mặt với hiện thực cuộc sống từ những ngày biết tự ý thức cho đến những bước chân tập tễnh đầu tiên trên hành trình tự trưởng thành, mà chắc hẳn ai cũng từng một lần cảm thấy.\r\n\r\nBắt đầu bằng những câu chuyện kể, những lời độc thoại cô đơn với chính mình, nhưng rồi sự xuất hiện của gia đình, bạn bè, của những người xa lạ đã mang đến cho “đứa trẻ” muôn vàn cảm xúc khác biệt. Có thể là chút hy vọng nhỏ nhoi, cũng có thể là nỗi đau tột cùng hay sự thất vọng ngập tràn, tuy nhiên dường như bấy giờ tâm trạng của nhân vật đã không còn đơn độc. Từ đó, có sự xuất hiện của những biến đổi trong cảm xúc, trong chính con người thật của “đứa trẻ” ấy. Và cuối cùng là niềm hi vọng được nhìn thấy ánh sáng tích cực, chút niềm tin về cuộc sống bé nhỏ như một bông hoa mọc ra trên vách đá mà tác giả gửi gắm.', '2024-01-04 15:56:53', '2020', 11, 8, 1, '50', 150, 0, 1, 1, NULL, NULL),
(16, 'Cây Cam Ngọt Của Tôi', 'uploads/vh1.jpg', 108, 0, '200', '“Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng số một tác phẩm kinh điển của Brazil.”\r\n\r\n- Booklist\r\n\r\n“Một cách nhìn cuộc sống gần như hoàn chỉnh từ con mắt trẻ thơ… có sức mạnh sưởi ấm và làm tan nát cõi lòng, dù người đọc ở lứa tuổi nào.”', '“Vị chua chát của cái nghèo hòa trộn với vị ngọt ngào khi khám phá ra những điều khiến cuộc đời này đáng số một tác phẩm kinh điển của Brazil.”\r\n\r\n- Booklist\r\n\r\n“Một cách nhìn cuộc sống gần như hoàn chỉnh từ con mắt trẻ thơ… có sức mạnh sưởi ấm và làm tan nát cõi lòng, dù người đọc ở lứa tuổi nào.”\r\n\r\n- The National\r\n\r\nHãy làm quen với Zezé, cậu bé tinh nghịch siêu hạng đồng thời cũng đáng yêu bậc nhất, với ước mơ lớn lên trở thành nhà thơ cổ thắt nơ bướm. Chẳng phải ai cũng công nhận khoản “đáng yêu” kia đâu nhé. Bởi vì, ở cái xóm ngoại ô nghèo ấy, nỗi khắc khổ bủa vây đã che mờ mắt người ta trước trái tim thiện lương cùng trí tưởng tượng tuyệt vời của cậu bé con năm tuổi.\r\n\r\nCó hề gì đâu bao nhiêu là hắt hủi, đánh mắng, vì Zezé đã có một người bạn đặc biệt để trút nỗi lòng: cây cam ngọt nơi vườn sau. Và cả một người bạn nữa, bằng xương bằng thịt, một ngày kia xuất hiện, cho cậu bé nhạy cảm khôn sớm biết thế nào là trìu mến, thế nào là nỗi đau, và mãi mãi thay đổi cuộc đời cậu.\r\nMở đầu bằng những thanh âm trong sáng và kết thúc lắng lại trong những nốt trầm hoài niệm, Cây cam ngọt của tôi khiến ta nhận ra vẻ đẹp thực sự của cuộc sống đến từ những điều giản dị như bông hoa trắng của cái cây sau nhà, và rằng cuộc đời thật khốn khổ nếu thiếu đi lòng yêu thương và niềm trắc ẩn. Cuốn sách kinh điển này bởi thế không ngừng khiến trái tim người đọc khắp thế giới thổn thức, kể từ khi ra mắt lần đầu năm 1968 tại Brazil.', '2024-01-01 16:12:41', '2020', 17, 11, 1, '100', 500, 0, 1, 1, NULL, NULL),
(17, 'Đám Trẻ Ở Đại Dương Đen', 'uploads/vh2.jpg', 69, 0, '1000', 'ĐÁM TRẺ Ở ĐẠI DƯƠNG ĐEN\r\n“nỗi buồn không rõ hình thù\r\nta cho nó dáng, ta thu vào lòng\r\nta ôm mà chẳng đề phòng\r\nmột ngày nó lớn chất chồng tâm can”\r\n\r\n“kẻ sống muốn đời cạn\r\nngười chết muốn hồi sinh\r\ntrần gian bi hài nhỉ?\r\nta còn muốn bỏ mình?”', 'Đám trẻ ở đại dương đen là lời độc thoại và đối thoại của những đứa trẻ ở đại dương đen, nơi từng lớp sóng của nỗi buồn và tuyệt vọng không ngừng cuộn trào, lúc âm ỉ, khi dữ dội. Những đứa trẻ ấy phải vật lộn trong những góc tối tâm lý, với sự u uất đè nén từ tổn thương khi không được sinh ra trong một gia đình toàn vẹn, ấm êm, khi phải mang trên đôi vai non dại những gánh nặng không tưởng.\r\n\r\nSong song đó cũng là quá trình tự chữa lành vô cùng khó khăn của đám trẻ, cố gắng vươn mình ra khỏi đại dương đen, tìm cho mình một ánh sáng. Và chính những sự nỗ lực xoa dịu chính mình đó đã hóa thành những câu từ trong cuốn sách này, bất kể đau đớn thế nào.\r\n\r\nCuốn sách được viết bởi Châu Sa Đáy Mắt, một tác giả GenZ mong muốn cùng các bạn trẻ bộc bạch và vỗ về những xúc cảm chân thật về gia đình, xã hội và chính bản thân.', '2024-01-09 16:12:41', '2023', 2, 2, 1, '400', 200, 0, 1, 1, NULL, NULL),
(18, 'Mùa hè không tên', 'uploads/vh3.jpg', 87, 0, '40', '\"Mùa hè không tên” là truyện dài mới nhất của nhà văn Nguyễn Nhật Ánh, với những câu chuyện tuổi thơ với vô số trò tinh nghịch, những thoáng thinh thích hồi hộp cùng vô vàn kỷ niệm. Để rồi khi những tháng ngày trong sáng của tình bạn dần qua, bọn nhỏ trong mỗi gia đình bình dị lớn lên cùng chứng kiến những giây phút cảm động của câu chuyện tình thân, nỗi khát khao hạnh phúc êm đềm, cùng bỡ ngỡ bước vào tuổi lớn nhiều yêu thương mang cả màu va vấp.', 'Mùa hè không tên” là truyện dài mới nhất của nhà văn Nguyễn Nhật Ánh, với những câu chuyện tuổi thơ với vô số trò tinh nghịch, những thoáng thinh thích hồi hộp cùng vô vàn kỷ niệm. Để rồi khi những tháng ngày trong sáng của tình bạn dần qua, bọn nhỏ trong mỗi gia đình bình dị lớn lên cùng chứng kiến những giây phút cảm động của câu chuyện tình thân, nỗi khát khao hạnh phúc êm đềm, cùng bỡ ngỡ bước vào tuổi lớn nhiều yêu thương mang cả màu va vấp.\r\n\r\nMùa hè năm ấy của cậu bé Khang không chỉ toàn chuyện leo cây hái trái và qua lại với con Nhàn hồn hậu đáng yêu ưa nuôi bọn cá dị tật, mà có Tí, có Chỉnh, rồi Túc, Đí phải đối mặt với những thử thách của số phận. Nhưng vì sao là “mùa hè không tên”?\r\n\r\n“Đó là mùa hè thật đặc biệt với tôi. Sau mùa hè đó, cuộc sống của tôi đã thay đổi mãi mãi.\r\n\r\nVì vậy tôi muốn đặt cho nó một cái tên để nó không giống với những mùa hè khác trong đời tôi mỗi khi tôi nhớ về. Tôi định gọi nó là mùa hè chia tay, mùa hè ưu tư, mùa hè định mệnh, hay sến sẩm một chút là mùa hè có mây tím bay nhưng rồi tôi thấy không cái tên nào thật sự phù hợp. Cuối cùng, tôi nghĩ nếu cần phải có một cái tên thì tôi sẽ đặt tên cho nó là mùa hè không tên. Ờ, mùa hè đặc biệt của tôi cần gì phải khoác một cái tên riêng khi mà mỗi lần đầu óc tôi quay ngược về thời kỳ đó, tôi luôn thấy lòng đầy xáo trộn. Nó đã khắc lên số phận tôi những dấu vết không thể phai mờ - như vết chàm mà con người ta phải mang theo cho đến tận cuối đời.” (Trích)\r\n\r\nNhà văn Nguyễn Nhật Ánh vốn nổi tiếng qua nhiều thế hệ bạn đọc với nhiều tác phẩm đi vào lòng người. Với tác phẩm này, ông vẫn luôn giữ thông điệp khơi dậy khao khát sống đẹp, sống tử tế nơi người đọc. Sách gồm 25 tranh minh họa lớn và nhiều minh họa nhỏ xinh xắn từ họa sĩ Đỗ Hoàng Tường.', '2024-01-09 16:18:01', '2023', 10, 1, 1, '20', 10, 0, 1, 1, NULL, NULL),
(19, 'Những Đêm Không Ngủ, Những Ngày Chậm Trôi', 'uploads/vh4.jpg', 58, 0, '10', 'NHỮNG ĐÊM KHÔNG NGỦ NHỮNG NGÀY CHẬM TRÔI - A CRAZY MIND\r\n\r\n“Những đêm không ngủ, những ngày chậm trôi” đại diện cho một hành tinh mới - nơi nỗi đau tinh thần được đưa ra ánh sáng và chữa lành.', 'NHỮNG ĐÊM KHÔNG NGỦ NHỮNG NGÀY CHẬM TRÔI - A CRAZY MIND\r\n\r\n“Những đêm không ngủ, những ngày chậm trôi” đại diện cho một hành tinh mới - nơi nỗi đau tinh thần được đưa ra ánh sáng và chữa lành.\r\n\r\nCuốn sách là tập hợp những câu chuyện có thật của những số phận khác nhau đang gặp phải các vấn đề về tâm lý: trầm cảm, rối loạn lo âu, rối loạn lưỡng cực… và những người đang học tập và làm việc trong ngành tâm lý học.\r\n\r\n“Nếu thế giới này còn thứ gì giữ bạn lại, là tình yêu thương hay sự quan tâm trong phút giây nào đó, mong bạn đừng gạt nó đi, bạn đừng bỏ qua sự cố gắng của bản thân dù nhỏ bé nhất!”- Khải Trạch. Hóa ra tận cùng nỗi đau và tận cùng sự chống chọi là một lòng tha thiết sống, lòng tha thiết bám rễ ở cuộc đời này như thế.\r\n\r\n“Những đêm không ngủ, những ngày chậm trôi” là một khoảng lặng giữa những nốt nhạc vội vã chạy nhảy giữa cuộc sống hiện đại, để những con người dù mang trong mình những tổn thương tâm lý hay không đều cùng ngồi lại bên nhau, soi tỏ tâm hồn nhau bằng ánh sáng của sự thấu cảm, trao gửi cho nhau thương yêu và kết nối để chữa lành.\r\n\r\nThông qua cuốn sách, A Crazy Mind mong muốn đưa một góc nhìn mới đến độc giả về thế giới của những con người đang phải đấu tranh với những nỗi đau tinh thần cũng như những câu chuyện thực tế ít được đề cập của những người đang học tập và làm việc trong ngành tâm lý học.\r\n\r\nĐây không phải cuốn sách đọc để giải trí, mà là một bức tranh “cảm xúc” được ghép từ những câu chuyện đủ đầy các mảng sáng tối lẩn khuất thẳm sâu trong tâm hồn. Hy vọng đây là một món ăn tinh thần làm đầy thêm sự phong phú trong tâm hồn bạn.', '2024-01-01 16:18:01', '2021', 2, 14, 1, '20', 50, 0, 1, 1, NULL, NULL),
(20, 'Chuyện Kỳ Lạ Ở Tiệm Sách Cũ Tanabe', 'uploads/vh5.png', 124, 0, '41', 'Cuốn sách là một tuyển tập những câu truyện “trinh thám” ngắn liên quan đến hành trình phá án hay đi tìm câu trả lời cho những bí ẩn hay “vụ án” xuất phát hoặc liên quan đến tiệm sách Tanabe nơi lão Iwa làm chủ. Trong suốt những hành trình nhỏ ấy, cả lão Iwa và đứa cháu Minoru của mình đã cho độc giả thấy lần lượt từng lớp lang bản chất con người (cả tiêu cực lẫn tích cực) cũng như mối quan hệ và tình cảm gia đình được thể hiện khéo léo qua những tương tác của hai ông cháu.', 'Cuốn sách là một tuyển tập những câu truyện “trinh thám” ngắn liên quan đến hành trình phá án hay đi tìm câu trả lời cho những bí ẩn hay “vụ án” xuất phát hoặc liên quan đến tiệm sách Tanabe nơi lão Iwa làm chủ. Trong suốt những hành trình nhỏ ấy, cả lão Iwa và đứa cháu Minoru của mình đã cho độc giả thấy lần lượt từng lớp lang bản chất con người (cả tiêu cực lẫn tích cực) cũng như mối quan hệ và tình cảm gia đình được thể hiện khéo léo qua những tương tác của hai ông cháu.', '2023-01-02 16:18:01', '2023', 9, 2, 1, '100', 50, 0, 1, 1, NULL, NULL),
(21, 'Trốn Lên Mái Nhà Để Khóc', 'uploads/vh6.jpg', 68, 0, '10', 'TRỐN LÊN MÁI NHÀ ĐỂ KHÓC\r\n\r\nNhững cơn gió heo may len lỏi vào từng góc phố nhỏ, mùa thu về gợi nhớ bao yêu thương đong đầy, bao xúc cảm dịu dàng của ký ức. Đó là nỗi nhớ đau đáu những hương vị quen thuộc của đồng nội, là hoài niệm bất chợt khi đi trên con đường cũ in dấu bao kỷ niệ để rồi ta ước có một chuyến tàu kỳ diệu trở về những năm tháng ấy, trở về nơi nương náu bình yên sau những tháng ngày loay hoay để học cách trở thành một người lớn. Bạn sẽ được đắm mình trong những cảm xúc đẹp đẽ xen lẫn những tiếc nuối đầy lắng đọng trong “Trốn lên mái nhà đẻ khóc” của Lam.', 'Có nhiều câu chuyện luôn nằm trong khảm sâu của ký ức…\r\nVí như, hồi nhỏ vào ngày hạ sao giăng đầy trời, được nằm dưới hiên nhà cùng bà ngắm bầu trời đêm cùng chú cún cứ ve vẩy cái đuôi đến thích thú,\r\nVí như khi lớn hơn một chút, cùng đám bạn nhỏ cùng làng rong ruổi khắp bờ đê thả diều nhảy dây dưới màu trời của hoàng hôn ấm áp,\r\nVí như từng chiều nghe mùi cơm nếp thơm thoang thoảng cùng lời mẹ gọi về nơi đầu ngõ\r\n…\r\n\r\nĐến một thời điểm, chúng ta sẽ đột nhiên nhớ đến những chuyện đã từng quên, nhớ đến những người đã tạm biệt; sau đó bình tĩnh nói với bản thân, cũng tốt, chính bởi những sự kiện đó, ta mới dần trở thành ta của bây giờ. Và cũng chính bởi vậy, tất thảy những nỗi buồn xuất hiện đều thật đẹp, để bạn biết yêu thương và trân trọng những gì mình đang có.\r\n\r\nNếu như trong cuốn sách đầu tay “Đi vòng thế giới vẫn quanh một người”, Lam vỗ về chênh vênh trong lòng bạn bằng những vần thơ dịu dàng, thì đến \"Trốn lên mái nhà để khóc\" Lam sẽ tiếp thêm cho bạn can đảm để đối mặt với những tổn thương của mình, khiến bạn vững vàng và tin tưởng vào những điều mà bạn đã chọn.\r\n\r\nXuyên suốt 208 trang viết là những tản văn về mẹ, về bà, về gia đình và những mảnh kí ức còn đó của tuổi thơ. Từng trang sách, từng mẩu chuyện trong “Trốn lên mái nhà để khóc” tựa như một cuộn phim tua chậm, phía sau thước phim ấy là những câu chuyện mà Lam đã cất giấu ở một góc trời bao lâu nay, Lam sẽ đưa bạn về một vùng trời ký ức bình yên mà hồi ấy còn hồn nhiên vô tư trong nụ cười của những đứa trẻ.\r\n\r\n“Em đã cất lại ước mơ về những con diều ở một góc thật sâu trong lòng mình. Nhưng em không thể ngăn đôi mắt ngước nhìn bầu trời những khi mùa gió đến, cũng chẳng thể ngăn đôi chân cứ rảo bước về phía triền đê, chạy theo những cánh diều không mang tên mình trên đó.”\r\n\r\nTrái tim bạn, sẽ một lần nữa rung lên như những bản nhạc qua từng câu chữ, từng nhịp thơ mà Lam gửi gắm qua những niềm vui, nỗi buồn, hạnh phúc và cả buồn tủ\r\n\r\n“có những đứa trẻ lớn lên từ nhà\r\ncó những đứa trẻ từ thương tổn nơi đó đi ra\r\nnếu đứa trẻ nào cũng là một bông hoa\r\nmình mong em có đủ nắng vàng\r\nđể chờ ngày bung nở.”\r\n\r\nNếu bạn không biết phải nương mình vào đâu sau những bộn bề thì cuốn sách này của Lam tựa như một mái nhà đầy sao để bạn nép vào. Nơi kí ức được lưu giữ một khoảng trời riêng, nơi còn đó mùi hương của bà và hình ảnh của ông vẫn vẹn nguyên dù tháng năm có trôi đi. Nơi bạn có thể thoải mái thả trôi cảm xúc của mình mà chẳng cần gồng mình lên với những suy nghĩ của những người ngoài kia.\r\n\r\n“Trốn lên mái nhà để khóc” là cuốn nhật ký nhỏ ghi lại những hoài niệm đẹp đẽ cất giữ vào góc nhỏ nơi sâu thẳm của trái tim của mỗi người, đồng thời cũng là người bạn đồng hành để chúng ta tiếp tục bước đi đến tương lai. Sau khi “Trốn lên mái nhà và khóc” khép lại, hãy mạnh mẽ để sống hết mình và để lại “những tháng năm rực rỡ”.', '2023-01-19 16:18:01', '2023', 13, 7, 1, '200', 20, 0, 1, 1, NULL, NULL),
(22, 'Cuối Con Đường Sẽ Gặp Một Người Thương', 'uploads/vh7.jpg', 67, 0, '200', 'Ngày ấy, chúng ta dốc hết tâm can để yêu một người, đã từng vì yêu một ai đó mà chấp nhận thay đổi bản thân rất nhiều. Thậm chí, đôi khi nhìn lại không còn là chúng ta của trước đây nữa. Rồi mới nhận ra, nếu yêu bạn thì họ sẽ yêu con người thật của bạn như cách bạn yêu họ, chứ không cần bạn phải thay đổi theo hình mẫu họ thích hay vì bất kì điều gì cả.', 'Ngày ấy, chúng ta dốc hết tâm can để yêu một người, đã từng vì yêu một ai đó mà chấp nhận thay đổi bản thân rất nhiều. Thậm chí, đôi khi nhìn lại không còn là chúng ta của trước đây nữa. Rồi mới nhận ra, nếu yêu bạn thì họ sẽ yêu con người thật của bạn như cách bạn yêu họ, chứ không cần bạn phải thay đổi theo hình mẫu họ thích hay vì bất kì điều gì cả.\r\n\r\nNgày ấy, chúng ta từng nghĩ, chỉ cần chúng ta thật lòng yêu nhau, cứ bên nhau như thế. Tình yêu sẽ giúp chúng ta, khó khăn nào cũng sẽ vượt qua, bão giông nào cũng trôi đi xa. Nhưng đến một ngày nhận ra, bản thân mỗi người không hề mạnh mẽ đến như thế!\r\nNgày ấy, chúng ta thất tình, khóc sưng cả mắt, ướt cả gối, tức cả ngực, đau cả tim. Sau này chúng ta trưởng thành hơn một chút, hiểu chuyện hơn một chút, trong lòng chắc có nhiều tiếc nuối nhưng thế là đã quá đẹp cho chuyện mình năm ấy rồi!\r\n\r\n“Cuối con đường sẽ gặp một người thương” Trí vẫn viết về những câu chuyện tình yêu, về những lần chia tay, về những mối tình đậm sâu nhưng bất thành. Nhưng bạn sẽ không còn thấy sự tan vỡ đến đau lòng nát dạ hay khóc cạn một dòng sông như trước đây nữa. Mà bạn sẽ cảm thấy, sau những cuộc tình ấy, chính là sự chấp nhận buông bỏ đến nhẹ bẫng hay mỉm cười rời đi một cách bình thản nhất.\r\n\r\n“Bầu trời hôm nay rất cao, mây hôm nay rất xanh, dáng vẻ của một người đi qua giông bão chính là dáng vẻ đẹp nhất. Hãy trân trọng những vết thương đang dần lên sẹo trong ngực trái tim mình bạn nhé. Những vết thương ấy xứng đáng xuất hiện, xứng đáng giúp bạn trưởng thành hơn và mạnh mẽ hơn”.', '2023-01-25 16:18:01', '2023', 17, 7, 1, '100', 200, 0, 1, 1, NULL, NULL),
(23, 'Những Người Hàng Xóm', 'uploads/vh8.jpg', 85, 0, '500', '“…Nếu con biết cách mở cửa sổ, đời sống sẽ tràn vào trang viết của con. Đôi khi chúng ta vẫn nhìn đấy, nhưng chúng ta không thấy. Nếu trái tim con đập vì con người, thậm chí đập vì một con chim, con sẽ nhìn thấy rất nhiều thứ”…\r\n\r\n“…Ruben là người tử tế. Người tử tế cao hơn người đàng hoàng một bậc. Người đàng hoàng sống ngay ngắn, không làm hại ai. Còn người tử tế là người sẵn sàng chịu thiệt thòi vì người khác.\r\n\r\nTôi không rõ định nghĩa của ông Jakob chính xác đến mức nào nhưng tôi biết câu chuyện của ông đang làm tôi cảm động…”\r\n\r\nRất nhiều những câu chuyện cảm động nho nhỏ, có khi chỉ là tình tiết, hay một câu nói… trong khắp từng chương sách khiến bạn đọc vẫn có thể nhận ngay ra “chất văn” của nhà văn mình yêu quý - Nguyễn Nhật Ánh. Mặc dù cuốn sách này được ông viết theo một cách khác, hoàn toàn mới lạ, gây ngạc nhiên từ cảnh quan cho đến nhân vật.\r\n\r\nVà ắt nhiên - có một bài thơ dịu ngọt từ một tình yêu đáng ngưỡng mộ dài cả gần thế kỷ.\r\n\r\nNgoài ra, qua tác phẩm tác giả còn đề ', 'Câu chuyện đi theo lời kể của một anh chàng mới lấy vợ, chuẩn bị đi làm và có ý thích viết văn. Anh chàng yêu vợ theo cách của mình, khen ngợi sùng bái người yêu cũng theo cách của mình, nhưng nhìn cuộc đời theo cách sống của những người hàng xóm. Sống trong tình yêu của vợ đầy mùi thơm và nhiều vị ngọt. Chứng kiến tình yêu của anh cảnh sát với cô bạn gái ngành y; mối tình thứ hai của người phụ nữ tốt bụng phát thanh viên ngôn ngữ ký hiệu. Và được chiêm nghiệm trong tình yêu đắm đuối mỗi ngày của ông họa sĩ già thương nhớ người vợ xinh đẹp-người mẫu, nàng thơ của ông.\r\n\r\nNhư một cuốn phim đầy màu sắc với âm điệu dịu dàng, êm ả. Cuộc sống bình yên của những người yêu thương nhau. Bài học về tình người đứng phía sau bài học về nghề viết, và cả trong câu chuyện về… một lối kinh doanh nhà cực kỳ đặc biệt! \r\n\r\nCâu chuyện mở ra sẽ là bất ngờ với bạn đọc “ruột” của Nguyễn Nhật Ánh, và kết thúc trong một sự dịu dàng nhẹ nhõm lòng, bởi nhà văn đã nhắc lại cho ta nhớ:  cuộc sống luôn thật là tươi đẹp biết bao. Khép sách lại, bạn sẽ nhận được niềm vui bình yên.', '2023-01-13 16:18:01', '2022', 10, 1, 1, '200', 200, 0, 1, 1, NULL, NULL),
(24, 'Bố Con Cá Gai', 'uploads/vh9.jpg', 74, 0, '52', 'Ra đời năm 2000, câu chuyện cảm động về ông bố cá gai và cậu bé con mà người bố ấy nâng niu trong Bố con cá gai có sức lay động mạnh mẽ, trở thành một trong những câu chuyện về tình cha được người Hàn Quốc yêu thích nhất.', 'Có những câu chuyện mãi được yêu thương, và nằm trong trái tim bạn đọc suốt năm này qua năm khác… Bố con cá gai là một câu chuyện như thế, trong trái tim độc giả Hàn Quốc, suốt nhiều năm nay. Ở đó có một em nhỏ đã chiến đấu với bệnh hiểm nghèo từ lúc lên ba, giờ em gần mười tuổi. Hãy khoan, đừng vội buồn! Vì em bé này sẽ chẳng làm bạn phải buồn nhiều. Em chịu tiêm rất giỏi, em không khóc, ngoài những lúc mệt quá ngủ thiếp đi, em còn bận đỏ bừng mặt nghĩ tới bạn Eun Mi kẹp-tóc-hoa, bận xếp hình tàu cướp biển, bận lật giở cuốn truyện Bảy viên ngọc rồng… Nhưng bố em thì khác, một ông bố làm em nhỏ của chúng ta phiền lòng quá nhiều, cũng làm những ai dõi theo “bố con cá gai” phải buồn không ít, có khi buồn quá hóa giận! Ông bố ấy đích thị là bố cá gai - một cá bố rất kỳ lạ - cả nguồn sống chỉ co cụm quẩn quanh cá gai con tí xíu. Như một ông bố ngốc!', '2024-01-04 16:18:01', '2019', 17, 2, 1, '500', 200, 0, 1, 1, NULL, NULL),
(25, 'Chú bé mang Pyjama sọc', 'uploads/vh10.jpg', 55, 0, '520', '“Một tuyệt tác sách nho nhỏ.”\r\n- Guardian\r\n\r\n“Một cuốn sách vương vấn khôn nguôi trong tâm trí người đọc.”\r\n- Times\r\n\r\n“Mạnh mẽ đến choáng váng.”\r\n- Carousel\r\n\r\n“Cuốn sách cứ nán lại trong tâm trí ta khá lâu. Một câu chuyện tinh tế, đơn giản một cách có tính toán và cảm động đến tận cùng. Dành cho bất kỳ lứa tuổi nào.”\r\n- Times\r\n\r\n\"Đây là những gì tiểu thuyết nên làm: giới thiệu ta đến với tâm trí của những người mà bình thường ta không dễ gì gặp được.\"\r\n- Guardian\r\n\r\n\"Gần như không thể buông xuống, đây là cuốn sách hiếm hoi sẽ ám ảnh tâm trí bạn nhiều ngày trời.\"\r\n- Becky Stradwick, The Bookseller\r\n\r\n\"Tràn ngập những ẩn ý ám ảnh trí tưởng tượ câu chuyện luôn đi trước độc giả trước khi tung ra cú đấm sát thủ cuối cùng trong những trang cuối.\"\r\n- Nick Tucker, Independent', 'Rất khó miêu tả câu chuyện về Chú bé mang pyjama sọc này. Thường thì chúng tôi vẫn tiết lộ vài chi tiết về cuốn sách trên bìa, nhưng trong trường hợp này chúng tôi nghĩ làm như vậy sẽ làm hỏng cảm giác đọc của bạn. Chúng tôi nghĩ điều quan trọng là bạn nên đọc mà không biết trước nó kể về điều gì.\r\n\r\nNếu bạn định bắt đầu đọc cuốn sách thật, bạn sẽ cùng được trải qua một hành trình với một cậu bé chín tuổi tên là Bruno (dù đây không hẳn là sách cho trẻ chín tuổi). Và chẳng sớm thì muộn bạn sẽ cùng Bruno đến một hàng rào. Những hàng rào như vậy vẫn tồn tại ở khắp nơi trên thế giới. Chúng tôi hy vọng không ai trong chúng ta phải vượt qua một hàng rào như vậy trong đời.', '2024-01-09 16:18:01', '2023', 17, 9, 1, '200', 20, -20, 1, 1, NULL, NULL),
(26, 'Mùa Hè Đổi Hướng', 'uploads/tt1.jpg', 50, 0, '522', 'Những mối quan hệ về tình bạn, tình yêu cũng nảy sinh từ đây, tuy nhiên những hiếu thắng, bồng bột của tuổi trẻ đã khiến họ bước sang những ngã rẽ không như mình mong muốn. Người tìm cách trốn chạy khỏi quá khứ, người lại luôn mang trong mình nỗi day dứt khôn nguôi..', 'Mùa Hè Đổi Hướng kể về những người trẻ tham gia vào lãnh địa văn học mạng. Từ những bài viết trên một diễn đàn, họ gặp nhau ngoài đời thật.\r\n\r\nNhững mối quan hệ về tình bạn, tình yêu cũng nảy sinh từ đây, tuy nhiên những hiếu thắng, bồng bột của tuổi trẻ đã khiến họ bước sang những ngã rẽ không như mình mong muốn. Người tìm cách trốn chạy khỏi quá khứ, người lại luôn mang trong mình nỗi day dứt khôn nguôi..', '2024-01-14 18:12:52', '2016', 1, 17, 1, '30', 50, 0, 1, 1, NULL, NULL),
(27, 'Thám tử Sherlock Holmes', 'uploads/tt2.jpg', 75, 0, '522', 'Tên tôi là Sherlock Holmes. Công việc của tôi là để biết những gì mà người khác không biết…', 'Chỉ từ một giọt nước, người giỏi suy luận có thể suy ra khả năng của một đại dương hoặc một thác nước, tuy chưa bao giờ tận mắt nhìn thấy chúng. Như vậy, toàn bộ cuộc sống là một chuỗi mắt xích rộng lớn mà ta có thể biết bản chất của nó, nếu ta biết được một mắt xích…\r\nSherlock Holmes – thám tử tư vĩ đại nhất trong văn học thế giới. Lạnh lùng, quyết đoán, dũng cảm, giàu lòng chính nghĩa, tài quan sát đáng kinh ngạc, khả năng suy luận tuyệt vời nhờ vào những chứng cứ khó ngờ nhất khám phá ra chân tướng ẩn giấu sau những sự thực bị bẻ cong hình thành một kinh điển bất hủ trong lĩnh vực văn học trinh thám.\r\nSherlock Holmes đã xuất hiện trong 4 tiểu thuyết và 56 truyện ngắn của nhà văn Conan Doyle. Hầu như tất cả các tác phẩm đều được viết dưới dạng ghi chép của bác sĩ John H. Watson, người bạn thân thiết và người ghi chép tiểu sử của Holmes, chỉ có 2 tác phẩm được viết dưới dạng ghi chép của chính Holmes và 2 tác phẩm khác dưới dạng ghi chép của người thứ 3.', '2024-01-02 03:10:09', '2018', 1, 15, 1, '22', 100, 0, 1, 1, NULL, NULL),
(28, 'Bồ công anh', 'uploads/tt3.jpg', 100, 0, '502', 'Điên trong cõi yêu và yêu trong cõi điên thì có gì khác với nàng Inako, nhân vật trung tâm nhưng không bao giời hiển hiện tự thân trong Bồ Công Anh, người mắc chứng nhân thể khuyết thị đã bao lần không nhìn thấy thân thể người yêu dù được anh ôm trong vòng tay.', 'Kawabata đã biến chứng nhân thể khuyết thị đó từ bệnh lí sang triết lí. Nói như người yêu của Inako thì: \"Chứng nhân thể khuyết thị chẳng phải là căn bệnh mà không nhìn thấy phần nào đó của mình, không nhìn thấy phần nào đó của người mình yêu thương, không nhìn thấy phần nào đó của cuộc đời sao?\"\r\n\r\n\"Ai mà như em ôi bồ công anh\r\ntan trong chiều đông long lanh long lanh\r\ngió giục rung mình em ánh sáng\r\nem rơi từ thiên thanh\r\nKhi tiếng chuông chùa ngân nga\r\nthiên nữ nghiêng mình bay tán hoa\r\nbàn tay sinh tử xui em múa\r\nem tung mình trong phôi pha.\"\r\n(Thơ Nhật Chiêu)\r\n\r\nHiện lên rõ nét nhất trong tác phẩm là bi cảm nhân sinh.\r\nCâu chuyện miên man, buồn bã giữa người mẹ và chàng trai trước cái đẹp bị tổn thương, về một nhân vật không xuất hiện trực tiếp - một cô gái gần như vô hình vô tiếng trong tác phẩm nhưng người đọc cảm được sự tồn tại của cô qua tình yêu của người mẹ, của chàng trai, và qua tiếng chuông chùa cô gióng lên...', '2024-01-01 03:20:44', '2023', 1, 2, 1, '210', 100, 0, 1, 1, NULL, NULL),
(29, 'Shuggie Bain chiếc linh hồn nhỏ', 'uploads/tt4.jpg', 200, 0, '100', '“SHUGGIE BAIN: Chiếc linh hồn nhỏ sở hữu một văn phong đầy nhạc tính. Đó không phải thứ âm nhạc du dương, khuôn đúc, cầu kỳ, lớp lang; hay nói chính xác hơn, nó mất cân bằng. Đó là thứ âm nhạc trắc trở, bất tuân và chộn rộn, xuất phát từ một tâm hồn đã gặp nhiều vết cứa và ít nhiều chai sạn, một tiếng nói chờ được bung ra nhưng không tìm được đúng tiết tấu mình cần. Nhưng rồi sẽ... Đó là thứ âm thanh trải lòng. Trải lòng tức là không còn phải cố nén.” - Lời người dịch SHUGGIE BAIN đào sâu vào từng góc khuất tăm tối của Glasgow vào thập niên 1980 dưới thời Margaret Thatcher, qua đó hé lộ một câu chuyện xúc động về những mảnh đời chật vật trong cảnh bế tắc mà không thấy được ánh sáng.\r\n', '“SHUGGIE BAIN: Chiếc linh hồn nhỏ sở hữu một văn phong đầy nhạc tính. Đó không phải thứ âm nhạc du dương, khuôn đúc, cầu kỳ, lớp lang; hay nói chính xác hơn, nó mất cân bằng. Đó là thứ âm nhạc trắc trở, bất tuân và chộn rộn, xuất phát từ một tâm hồn đã gặp nhiều vết cứa và ít nhiều chai sạn, một tiếng nói chờ được bung ra nhưng không tìm được đúng tiết tấu mình cần. Nhưng rồi sẽ... Đó là thứ âm thanh trải lòng. Trải lòng tức là không còn phải cố nén.” - Lời người dịch SHUGGIE BAIN đào sâu vào từng góc khuất tăm tối của Glasgow vào thập niên 1980 dưới thời Margaret Thatcher, qua đó hé lộ một câu chuyện xúc động về những mảnh đời chật vật trong cảnh bế tắc mà không thấy được ánh sáng.\r\n\r\nBằng lối kể pha trộn giữa bi kịch với hài hước, tàn nhẫn với dịu dàng, lòng trắc ẩn với đau đớn tột cùng, SHUGGIE BAIN khắc họa nên bức tranh đầy ám ảnh về quan hệ gia đình, về định kiến xã hội, về sự tự nhận thức bản thân, về đói nghèo và tệ nạn. Khi con người ngập ngụa dưới đáy khốn khổ, họ hiến dâng mù quáng cho tình yêu, họ chạm tới giới hạn tưởng chừng vô tận, họ bám víu điên cuồng vào niềm kiêu hãnh và hy vọng để khao khát làm chủ vận mệnh.\r\n', '2024-01-14 18:12:56', '2022', 16, 8, 1, '120', 50, 0, 1, 1, NULL, NULL),
(30, 'Ali Và Nino\r\n', 'uploads/tt5.jpg', 98, 90, '200', 'Hẳn nhiều người sẽ đoán, bằng vào cái tên, rằng đây là một câu chuyện tình. Phải, Ali và Nino: mối tình thanh mai trúc mã giữa hai cô cậu học trò nơi thành Baku cổ kính của đất nước Azerbaijan. Ali và Nino: đôi tình nhân ngang trái bị ràng buộc bởi hai tôn giáo, hai sắc tộc, chỉ có thể đến với nhau bằng cách trả những món nợ máu.', 'Hẳn nhiều người sẽ đoán, bằng vào cái tên, rằng đây là một câu chuyện tình. Phải, Ali và Nino: mối tình thanh mai trúc mã giữa hai cô cậu học trò nơi thành Baku cổ kính của đất nước Azerbaijan. Ali và Nino: đôi tình nhân ngang trái bị ràng buộc bởi hai tôn giáo, hai sắc tộc, chỉ có thể đến với nhau bằng cách trả những món nợ máu.\r\n\r\nNhưng, Ali và Nino không chỉ là một câu chuyện tình. Bằng giọng kể Nghìn lẻ một đêm, nó cuốn ta đi lên rừng, xuống biển, bằng sa mạc, rù quến ta trong những vẻ đẹp nên thơ và những bí ẩn gợi hoặc của miền đất giao thoa giữa Đông và Tây. Với tầm vóc sử thi, nó lại nhấn chìm ta trong bóng đen của cuộc Thế chiến thứ nhất, khi mối đe dọa chiến tranh bắt đầu xé toạc những lỗ hổng trong cái cộng đồng đa văn hóa, đa sắc tộc từ hàng bao thế kỷ, buộc những cư dân bất kể tôn giáo phải đưa ra lựa chọn: hướng về phương Tây với những biến đổi hiện đại chóng mặt, hay bám giữ lấy phương Đông của tinh thần, của thi ca, của truyền thống hàng trăm thế hệ. Để rồi cuối cùng, nó lại đưa ta trở về với thiên tình sử nồng nàn và bi thương, một nốt trầm lặng da diết khiến Ali và Nino trở nên một kiệt tác bất diệt như những đụn cát sa mạc.\r\n\r\nKurban Said là bút danh của tác giả Ali và Nino khi tác phẩm lần đầu xuất bản năm 1937 bằng tiếng Đức. Đến nay, danh tính thực sự của tác giả vẫn còn là ẩn số.\r\n\r\nCó giả thuyết cho rằng Kurban Said chính là nhà văn, nhà báo gốc Do Thái Lev Nussimbaum (còn có bút danh Essad Bey). Trong khi đó, nhiều ý kiến khẳng định tiểu thuyết gia người Azerbaijan, Yusif Vazir Chamanzaminli, mới là tác giả thực sự vì cuộc đời, tác phẩm và ghi chép của ông có nhiều điểm tương đồng với những chi tiết Ali và Nino. Ngoài ra, nam tước và nam tước phu nhân Ehrenfels người Áo cũng đăng ký tác quyền Ali và Nino với các cơ quan chức năng Đức ở Áo. “Kurban Said”, theo ngữ tộc Semit và ngữ hệ Thổ của Azerbaijan, có nghĩa là “sự hy sinh hạnh phúc”. Vài người suy đoán bút danh phù hợp với nội dung cuốn sách hơn đúng ra phải là “Kurban Seyid”, với ý nghĩa “một người dòng dõi thiêng liêng đã hy sinh\".\r\n\r\nMã hàng	8935235234826\r\nTên Nhà Cung Cấp	Nhã Nam\r\nTác giả	Kurban Said\r\nNgười Dịch	Nguyễn Bích Lan\r\nNXB	Hội Nhà Văn\r\nNăm XB	2022\r\nTrọng lượng (gr)	368\r\nKích Thước Bao Bì	20.5 x 14 cm x 1.8\r\nSố trang	368\r\nHình thức	Bìa Mềm\r\nSản phẩm hiển thị trong	\r\nNhã Nam\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Tiểu thuyết bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nHẳn nhiều người sẽ đoán, bằng vào cái tên, rằng đây là một câu chuyện tình. Phải, Ali và Nino: mối tình thanh mai trúc mã giữa hai cô cậu học trò nơi thành Baku cổ kính của đất nước Azerbaijan. Ali và Nino: đôi tình nhân ngang trái bị ràng buộc bởi hai tôn giáo, hai sắc tộc, chỉ có thể đến với nhau bằng cách trả những món nợ máu.\r\n\r\nNhưng, Ali và Nino không chỉ là một câu chuyện tình. Bằng giọng kể Nghìn lẻ một đêm, nó cuốn ta đi lên rừng, xuống biển, bằng sa mạc, rù quến ta trong những vẻ đẹp nên thơ và những bí ẩn gợi hoặc của miền đất giao thoa giữa Đông và Tây. Với tầm vóc sử thi, nó lại nhấn chìm ta trong bóng đen của cuộc Thế chiến thứ nhất, khi mối đe dọa chiến tranh bắt đầu xé toạc những lỗ hổng trong cái cộng đồng đa văn hóa, đa sắc tộc từ hàng bao thế kỷ, buộc những cư dân bất kể tôn giáo phải đưa ra lựa chọn: hướng về phương Tây với những biến đổi hiện đại chóng mặt, hay bám giữ lấy phương Đông của tinh thần, của thi ca, của truyền thống hàng trăm thế hệ. Để rồi cuối cùng, nó lại đưa ta trở về với thiên tình sử nồng nàn và bi thương, một nốt trầm lặng da diết khiến Ali và Nino trở nên một kiệt tác bất diệt như những đụn cát sa mạc.\r\n\r\nKurban Said là bút danh của tác giả Ali và Nino khi tác phẩm lần đầu xuất bản năm 1937 bằng tiếng Đức. Đến nay, danh tính thực sự của tác giả vẫn còn là ẩn số.\r\n\r\nCó giả thuyết cho rằng Kurban Said chính là nhà văn, nhà báo gốc Do Thái Lev Nussimbaum (còn có bút danh Essad Bey). Trong khi đó, nhiều ý kiến khẳng định tiểu thuyết gia người Azerbaijan, Yusif Vazir Chamanzaminli, mới là tác giả thực sự vì cuộc đời, tác phẩm và ghi chép của ông có nhiều điểm tương đồng với những chi tiết Ali và Nino. Ngoài ra, nam tước và nam tước phu nhân Ehrenfels người Áo cũng đăng ký tác quyền Ali và Nino với các cơ quan chức năng Đức ở Áo. “Kurban Said”, theo ngữ tộc Semit và ngữ hệ Thổ của Azerbaijan, có nghĩa là “sự hy sinh hạnh phúc”. Vài người suy đoán bút danh phù hợp với nội dung cuốn sách hơn đúng ra phải là “Kurban Seyid”, với ý nghĩa “một người dòng dõi thiêng liêng đã hy sinh\".', '2024-01-10 03:26:46', '2022', 17, 14, 1, '100', 200, -20, 1, 1, NULL, NULL);
INSERT INTO `product` (`id`, `name`, `img`, `price`, `priceSale`, `luotxem`, `tomTat`, `moTa`, `ngayDang`, `namsanxuat`, `idNhaxuatban`, `idTacgia`, `idVoucher`, `yeuthich`, `quantity`, `giamgia`, `hidden`, `hot`, `created_at`, `updated_at`) VALUES
(31, 'Bí Mật Của Naoko', 'uploads/tt6.jpg', 85, 80, '200', 'Bí mật của Naoko đã giành Giải thưởng của Hiệp hội các Nhà văn viết truyện kỳ bí Nhật Bản vào năm 1999, và là một trong những tác phẩm quan trọng nhất trong sự nghiệp của Higashino Keigo, bậc thầy truyện trinh thám Nhật thế kỷ XX.\r\n\r\nMã hàng	8935235212473\r\nTên Nhà Cung Cấp	Nhã Nam\r\nTác giả	Higashino Keigo\r\nNgười Dịch	Uyên Thiểm, Trương Thùy Lan\r\nNXB	NXB Hội Nhà Văn\r\nNăm XB	2018\r\nTrọng lượng (gr)	500\r\nKích Thước Bao Bì	14 x 20.5 cm\r\nSố trang	468\r\nHình thức	Bìa Mềm\r\nSản phẩm hiển thị trong	\r\nRƯỚC DEAL LINH ĐÌNH VUI ĐÓN TRUNG THU\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Tiểu thuyết bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nCuộc sống của Hirasule trôi qua hết sức bình lặng, cho đến m', 'Cuộc sống của Hirasule trôi qua hết sức bình lặng, cho đến một ngày tai nạn giao thông khủng khiếp xảy ra và gã mất đi người vợ yêu quý nhất của mình, còn đứa con gái bé bỏng vẫn trong tình trạng hôn mê bất tỉnh. Nhưng chỉ sau một đêm, con gái gã tỉnh lại và một mực xưng mình là Naoko, vợ gã. Dường như linh hồn của Naoko đã nhập vào thể xác con gái, còn Monami thực sự đã chết. Rốt cuộc Hirasuke đã mất vợ hay con gái trong vụ tai nạn ấy?', '2024-01-07 03:31:57', '2018', 17, 2, 1, '200', 10, 0, 1, 1, NULL, NULL),
(32, 'Có Phải Anh Nơi Này', 'uploads/tt7.jpg', 114, 110, '200', 'Nhân vật chính của tiểu thuyết “Có phải anh nơi này” là Diana O\'Toole. Mọi việc với cô đều thuận lợi. Cô sẽ kết hôn vào năm 30 tuổi, sinh con xong vào năm 35 tuổi, và chuyển đến vùng ngoại ô New York, Mỹ. Cô cũng đang leo lên bậc thang chuyên nghiệp trong thế giới đấu giá nghệ thuật đắt đỏ.', 'Nhân vật chính của tiểu thuyết “Có phải anh nơi này” là Diana O\'Toole. Mọi việc với cô đều thuận lợi. Cô sẽ kết hôn vào năm 30 tuổi, sinh con xong vào năm 35 tuổi, và chuyển đến vùng ngoại ô New York, Mỹ. Cô cũng đang leo lên bậc thang chuyên nghiệp trong thế giới đấu giá nghệ thuật đắt đỏ.\r\n\r\nCô hiện là chuyên gia thẩm định của nhà đấu giá nghệ thuật Sotheby’s tại New York. Cấp trên đã gợi ý về sự thăng tiến nếu cô ấy có thể hoàn tất thỏa thuận với một khách hàng cao cấp.\r\n\r\nBạn trai của Diana là Finn, một bác sĩ ngoại khoa. Anh sẽ cầu hôn cô trong chuyến đi nghỉ lãng mạn của họ tới Galapagos.\r\n\r\nThứ sáu ngày 13/3/2020, đêm trước chuyến đi của họ, một loại virus lạ xuất hiện trong thành phố.\r\n\r\nFinn đã báo tin anh phải ở lại bệnh viện và khuyên Diana tiếp tục chuyến đi cho khỏi lãng phí khoản tiền đặt trước. Vì vậy, Diana lên đường một cách miễn cưỡng.\r\n\r\nNgay lập tức, kỳ nghỉ trong mơ của Diana trở nên tồi tệ. Hành lý của cô bị thất lạc, Wi-Fi gần như không có và khách sạn họ đặt đã đóng cửa do đại dịch. Toàn bộ hòn đảo đang được kiểm dịch, và Diana bị mắc kẹt cho đến khi biên giới mở cửa trở lại.\r\n\r\nHoàn toàn bị cô lập, cô ấy phải mạo hiểm vượt ra khỏi giới hạn an toàn. Dần dần, Diana thiết lập mối liên hệ với gia đình địa phương khi một thiếu niên mở lòng về bí mật với cô.\r\n\r\nTại quần đảo Galapagos, Diana khám phá ra khía cạnh mới của bản thân. Cô xem xét các mối quan hệ, sự lựa chọn của mình và tự hỏi liệu khi về nhà, cô có tiến hóa thành một người hoàn toàn khác.', '2024-01-07 03:31:57', '2023', 3, 4, 1, '100', 200, 10, 1, 1, NULL, NULL),
(33, 'Trường Ca Achilles', 'uploads/tt8.jpg', 150, 140, '200', 'HUYỀN THOẠI BẮT ĐẦU…\r\n\r\nHy Lạp vào thời hoàng kim của các anh hùng. Patroclus là một hoàng tử trẻ vụng về, bị trục xuất tới vương quốc Phthia và được nuôi dạy dưới sự che chở của vua Peleus cùng cậu con trai hoàng kim của ngài, Achilles. “Người Hy Lạp vĩ đại nhất” – mạnh mẽ, đẹp đẽ, và mang nửa dòng máu của một nữ thần – Achilles là tất cả những gì mà Patroclus không bao giờ có được. Nhưng bất chấp sự khác biệt giữa họ, hai cậu bé trở thành chiến hữu trung thành của nhau. Tình cảm giữa họ càng đậm sâu khi cả hai lớn lên thành những chàng trai trẻ, thành thạo trong kĩ nghệ chiến đấu và y dược.', 'HUYỀN THOẠI BẮT ĐẦU…\r\n\r\nHy Lạp vào thời hoàng kim của các anh hùng. Patroclus là một hoàng tử trẻ vụng về, bị trục xuất tới vương quốc Phthia và được nuôi dạy dưới sự che chở của vua Peleus cùng cậu con trai hoàng kim của ngài, Achilles. “Người Hy Lạp vĩ đại nhất” – mạnh mẽ, đẹp đẽ, và mang nửa dòng máu của một nữ thần – Achilles là tất cả những gì mà Patroclus không bao giờ có được. Nhưng bất chấp sự khác biệt giữa họ, hai cậu bé trở thành chiến hữu trung thành của nhau. Tình cảm giữa họ càng đậm sâu khi cả hai lớn lên thành những chàng trai trẻ, thành thạo trong kĩ nghệ chiến đấu và y dược.\r\n\r\nKhi tin tức truyền tới rằng nàng Helen xứ Sparta đã bị bắt cóc, những chiến binh Hy Lạp, bị trói buộc bởi lời thề máu, phải nhân danh nàng mà vây hãm thành Troy. Bị cám dỗ bởi lời hứa hẹn về một số mệnh huy hoàng, Achilles tham gia hàng ngũ của họ. Bị giằng xé giữa tình yêu và nỗi lo sợ dành cho người bạn của mình, Patroclus ra trận theo Achilles. Họ không hay biết rằng các nữ thần Số Phận sẽ thử thách cả hai người họ hơn bao giờ hết và đòi hỏi một sự hi sinh khủng khiếp.\r\n\r\nDựa trên nền tảng của sử thi Iliad, câu chuyện về cuộc chiến thành Troy vĩ đại đã được Madeline Miller kể lại với tiết tấu dồn dập, lôi cuốn, và không kém phần xúc động, đánh dấu sự khởi đầu của một sự nghiệp rực rỡ.\r\n\r\nTrường Ca Achilles đã đoạt giải Orange năm 2012 và luôn nằm trong top các sách bán chạy của tờ New York Times.\r\n\r\nSách được tặng kèm bookmark cùng cuốn phụ lục bao gồm danh sách nhân vật và bài phỏng vấn tác giả.\r\n\r\n---\r\n\r\nMột ấn phẩm của WINGS BOOKS - Thương hiệu sách trẻ của NXB Kim Đồng.\r\n\r\nMã hàng	8935244843545\r\nTên Nhà Cung Cấp	Nhà Xuất Bản Kim Đồng\r\nTác giả	Madeline Miller\r\nNXB	NXB Kim Đồng\r\nNăm XB	2020\r\nTrọng lượng (gr)	450\r\nKích Thước Bao Bì	22.5 x 14 cm\r\nSố trang	444\r\nHình thức	Bìa Mềm\r\nSản phẩm bán chạy nhất	Top 100 sản phẩm Tiểu thuyết bán chạy của tháng\r\nGiá sản phẩm trên Fahasa.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...\r\nChính sách khuyến mãi trên Fahasa.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc\r\nHUYỀN THOẠI BẮT ĐẦU…\r\n\r\nHy Lạp vào thời hoàng kim của các anh hùng. Patroclus là một hoàng tử trẻ vụng về, bị trục xuất tới vương quốc Phthia và được nuôi dạy dưới sự che chở của vua Peleus cùng cậu con trai hoàng kim của ngài, Achilles. “Người Hy Lạp vĩ đại nhất” – mạnh mẽ, đẹp đẽ, và mang nửa dòng máu của một nữ thần – Achilles là tất cả những gì mà Patroclus không bao giờ có được. Nhưng bất chấp sự khác biệt giữa họ, hai cậu bé trở thành chiến hữu trung thành của nhau. Tình cảm giữa họ càng đậm sâu khi cả hai lớn lên thành những chàng trai trẻ, thành thạo trong kĩ nghệ chiến đấu và y dược.\r\n\r\nKhi tin tức truyền tới rằng nàng Helen xứ Sparta đã bị bắt cóc, những chiến binh Hy Lạp, bị trói buộc bởi lời thề máu, phải nhân danh nàng mà vây hãm thành Troy. Bị cám dỗ bởi lời hứa hẹn về một số mệnh huy hoàng, Achilles tham gia hàng ngũ của họ. Bị giằng xé giữa tình yêu và nỗi lo sợ dành cho người bạn của mình, Patroclus ra trận theo Achilles. Họ không hay biết rằng các nữ thần Số Phận sẽ thử thách cả hai người họ hơn bao giờ hết và đòi hỏi một sự hi sinh khủng khiếp.\r\n\r\nDựa trên nền tảng của sử thi Iliad, câu chuyện về cuộc chiến thành Troy vĩ đại đã được Madeline Miller kể lại với tiết tấu dồn dập, lôi cuốn, và không kém phần xúc động, đánh dấu sự khởi đầu của một sự nghiệp rực rỡ.\r\n\r\nTrường Ca Achilles đã đoạt giải Orange năm 2012 và luôn nằm trong top các sách bán chạy của tờ New York Times.', '2023-01-02 14:12:21', '2020', 4, 8, 1, '200', 300, 0, 1, 1, NULL, NULL),
(34, 'Có Hai Con Mèo Ngồi Bên Cửa Sổ ', 'uploads/tt9.jpg', 90, 0, '50', 'CÓ HAI CON MÈO NGỒI BÊN CỬA SỔ là tác phẩm đầu tiên của nhà văn Nguyễn Nhật Ánh viết theo thể loại đồng thoại. Đặc biệt hơn nữa là viết về tình bạn của hai loài vốn là thù địch của nhau mèo và chuột. Đó là tình bạn giữa mèo Gấu và chuột Tí Hon.', 'Ó HAI CON MÈO NGỒI BÊN CỬA SỔ là tác phẩm đầu tiên của nhà văn Nguyễn Nhật Ánh viết theo thể loại đồng thoại. Đặc biệt hơn nữa là viết về tình bạn của hai loài vốn là thù địch của nhau mèo và chuột. Đó là tình bạn giữa mèo Gấu và chuột Tí Hon.\r\n\r\nĐể biết tại sao mèo Gấu lại chơi thân với chuột Tí Hon, thì mời bạn hãy mở sách ra.\r\n\r\nCuốn truyện mỏng mảnh vừa phải, hình vẽ của họa sĩ Hoàng Tường sinh động đến từng nét nũng nịu hay kiêu căng của nàng mèo người yêu mèo Gấu, câu chuyện thì hấp dẫn duyên dáng điểm những bài thơ tình lãng mạn nao lòng song đọc to lên thì khiến cười hinh hích…', '2023-01-04 14:12:21', '2023', 10, 1, 1, '100', 10, 0, 1, 1, NULL, NULL),
(35, 'Một Lít Nước Mắt', 'uploads/tt10.jpg', 64, 0, '100', '“Hãy sống! Mình muốn hít thở thật sâu dưới trời xanh.”\r\nMột tâm hồn nhạy cảm.\r\nMột gia đình ấm áp.\r\nMột căn bệnh hiểm nghèo.\r\nMột cơ thể tật nguyền.', 'Đó là những gì Kito Aya có trong hơn 20 năm cuộc đời. Với Aya, tương lai của cô là một con đường hẹp, và càng ngày nó càng trở nên hẹp hơn. Căn bệnh ngăn trở Aya khỏi tất cả những ước mơ và dự định, thậm chí việc tự mình bước ra ngoài phố để đi tới hiệu sách cũng trở thành một khao khát cháy bỏng. Hơn 6 năm kiên trì viết nhật ký, cô kể về những cảm nhận và suy tư của bản thân trong suốt quãng thời gian chứng kiến cơ thể mình từng bước từng bước gánh lấy một số phận đau đớn . Nhưng từ trong nước mắt và tật nguyền, cuộc tìm kiếm giá trị bản thân của cô đã làm rúng động cả Nhật Bản.\r\n“Có những người mà sự tồn tại của họ giống như không khí, êm dịu, nhẹ nhàng, chỉ khi họ mất đi người ta mới nhận ra họ quan trọng nhường nào. Mình muốn trở thành một sự tồn tại như thế.”', '2023-03-16 14:24:10', '2019', 17, 16, 1, '200', 200, 0, 1, 1, NULL, NULL),
(36, 'Thương', 'uploads/t1.jpg', 57, 0, '300', '\"Em nói em từ bỏ\r\n\r\nSao em lại đau lòng?\r\n\r\nEm nói em từ bỏ\r\n\r\nSao em còn trông mong?\"', 'Được viết bởi các tác giả đến từ Group Thìa Đầy Thơ - nơi hội tụ thế hệ trẻ yêu thơ và làm thơ, \"Thương\" là một tập thơ rất tình, ngẫu hứng, và đầy sáng tạo. Ở “Thương ” không có bóng dáng của một nhân vật nhất định, nhưng mang lại cho người đọc đầy đủ tất cả cảm xúc về tình yêu, tuổi trẻ và cuộc đời.\r\n\r\n \r\n\r\nThực sự không khó để tìm được sự đồng điệu tâm hồn với những dòng thơ ấy. Sự đồng cảm trong giai điệu mà “Thương” phủ lên đôi môi của độc giả có chút nhẹ nhàng, bâng quơ, gần gũi, dễ đọc, dễ  đánh thức sự lãng mạn cùng những tâm tư chưa từng tỏ bày cùng ai. Đó là thứ thơ phóng khoáng, trẻ trung đầy sức sống, đôi khi da diết, đôi khi lửng lơ, phảng phất đủ loại thăng trầm được biểu đạt theo một cách hết sức dễ chịu. Bạn hẳn sẽ thấy chính mình trong đó. Đó là những ấm áp len lỏi của tình cảm gia đình, là ngọt ngào hạnh phúc của tình yêu, là những phút giây chậm lại để sống. Là nhớ thương chờ đợi, là giận hờn vu vơ, là lo sợ được mất và cả những tổn thương, những lần tự chữa lành.', '2023-11-14 14:43:29', '2021', 14, 19, 1, '200', 20, 0, 1, 1, NULL, NULL),
(37, 'Như Sao Trời Ôm Lấy Đại Dương', 'uploads/t2.jpg', 66, 0, '20', '“Tớ gửi chiếc ôm đi đâu đó\r\n\r\nBay đến bên cạnh một bé yêu\r\n\r\nĐang bật khóc giữa bầu trời đêm nhỏ\r\n\r\nĐể tớ ôm, tớ thương em rất nhiều.”', 'Thân gửi đến người bạn nhỏ một chiếc ôm đầy ấm áp qua tập thơ “Như sao trời ôm lấy đại dương”.\r\n\r\nChắc hẳn thế giới ngoài kia đã không ít lần làm xây xát trái tim vốn yếu mềm của bạn.\r\n\r\nHai chữ “trưởng thành” thật sự không dễ dàng, cuộc sống dù cho đã cố hết sức cũng không được như ý nguyện. Thế nhưng hy vọng bạn, cho dù có nhìn thấy những điều không hay vẫn tiếp tục tin tưởng vào những điều tốt đẹp sẽ xảy ra, giữ cho mình một trái tim lương thiện, sáng ngời.\r\n\r\nĐôi mắt bạn xứng đáng được nhìn thấy những khung cảnh xinh đẹp, đôi tai bạn xứng đáng được lắng nghe những thanh âm dịu dàng và trái tim bạn xứng đáng được yêu thương.\r\n\r\n“Như sao trời ôm lấy đại dương” là tác phẩm đầu tay của nhà thơ trẻ Hngoc. Tập thơ được chia làm hai phần: Yêu mình - Yêu người. Dù là phần nào thì bằng câu từ đẹp đẽ và lấp lánh, Hngoc sẽ khơi gợi khát khao yêu và được yêu trong mỗi chúng ta.\r\n\r\nCó lẽ trên chặng đường học làm “người lớn”, chúng ta sẽ không tránh khỏi những va vấp trong tình yêu. Nhưng giống như biển cả phải có những con sóng thì biển mới trở nên sống động, cũng như trái tim, đôi lúc cần những vết thương để trở nên dạn dĩ, trưởng thành. Từ giây phút bạn học được cách chấp nhận những nỗi đau cũng là lúc bạn học được cách chữa lành cho chính mình. Bởi suy cho cùng chỉ khi ta tự yêu lấy bản thân mình thì mới có khả năng để yêu thương một ai đó khác.\r\n\r\nSau cuối, vẫn mong rằng bạn sẽ tìm được ánh sao trời của riêng mình. Người đó sẽ nguyện ở lại yêu thương, che chở và đưa bạn qua những tháng năm thăng trầm tựa sao trời ôm lấy đại dương.', '2023-11-15 14:46:26', '2023', 13, 19, 1, '20', 10, -10, 1, 1, NULL, NULL),
(38, 'Thơ Xuân Quỳnh', 'uploads/t3.jpg', 32, 0, '30', '“Xuân Quỳnh là hiện tượng rất quan trọng của nền thơ của chúng ta. Có lẽ là từ thời Hồ Xuân Hương, qua các chặng phát triển, phải đến Xuân Quỳnh, nền thơ ấy mới thấy lại một nữ thi sĩ đầy tài năng và sự đa dạng của một tâm hồn được thể hiện ở một tầm cỡ đáng kể như vậy, dồi dào phong phú như vậy.” ', '“Thế giới thơ ca Xuân Quỳnh là sự tương tranh không ngừng giữa khắc nghiệt và yên lành với những biểu hiện sống động và biến hóa khôn cùng của chúng. Ở đó trái tim thơ Xuân Quỳnh là cánh chuồn chuồn báo bão cứ chao đi chao về, mệt nhoài giữa biến động và yên định, bão tố và bình yên, chiến tranh và hòa bình, thác lũ và êm trôi, tình yêu và cách trở, ra đi và trở lại, chảy trôi phiêu bạt và trụ vững kiên gan, tổ ấm và dòng đời, sóng và bờ, thuyền và biển, nhà ga và con tàu, trời xanh và bom đạn, gió Lào và cát trắng, cỏ dại và nắng lửa, thủy chung và trắc trở, xuân sắc và tàn phai, ngọn lửa cô đơn và đại ngàn tối sẫm...”', '2023-11-08 14:52:38', '2019', 12, 19, 1, '20', 10, 0, 1, 1, NULL, NULL),
(39, 'Nếu Như Tôi Nói Nhớ, Em Có Trở Về Không?', 'uploads/t4.jpg', 67, 0, '100', '“đây không phải là thơ tình đâu em\r\nđây là hôn, là ôm, là hơi thở\r\nđây là yêu, là thương, là trăn trở\r\ntôi mượn vần, vay chữ tặng đến em”.', 'Hơn cả những vần thơ, “Nếu như tôi nói nhớ, em có trở về không?” là tuyển tập những nỗi nhớ nhung, tâm tư cất giấu của những người đã lựa chọn gác lại một cuộc tình và tìm cách rời xa nhau.\r\n\r\nKhi mà nỗi nhớ không được cất thành lời.\r\nKhi mà bao lời yêu thương chẳng được hồi đáp.\r\nKhi mà cái ôm hôm nào vẫn vương mùi trên áo, khi mà môi hôn ngày ấy chưa kịp quên.\r\n\r\nLàm cách nào để một tâm tư chứa đựng hàng vạn nỗi nhớ thương có thể sống sót qua mùa đông lạnh giá?\r\nLàm thế nào để vỗ về một trái tim nhiều vết xước khi nhìn thấy ngoài kia có ngàn người đang hạnh phúc bên nhau.\r\n\r\n120 bài thơ trong tuyển tập “Nếu như tôi nói nhớ, em có trở về không?” sẽ là một cuốn sách chữa lành mọi vết thương của những trái tim đã từng tan vỡ, khi mà chúng ta khao khát có ai đó đồng cảm, ủi an.\r\n\r\nVì từng áng thơ nhỏ là những lời dịu dàng, ấm áp mà nhóm tác giả đến từ group “Chuyện kể rằng có nàng và em” thay chúng ta nói lên nhung nhớ cất giấu tận sâu đáy lòng.\r\n\r\nHy vọng dẫu tình yêu tuổi trẻ đôi lúc không trọn vẹn, lắm lúc không được hồi đáp, nhưng chúng ta vẫn tận hưởng dư vị của những nỗi mất mát đã từng rất đỗi ngọt ngào này.\r\n\r\nMột ngày nào đó chúng ta sẽ lại yêu, yêu hết mình, có thể với người mới hoặc là một người đã cũ. Nhưng dẫu với ai, mong những tháng ngày đó, có giận hờn, có chia ly vẫn đủ dũng cảm mở lời: “Nếu như tôi nói nhớ, em có trở về không?”.', '2024-01-10 14:52:38', '2023', 11, 19, 1, '20', 100, 0, 1, 1, NULL, NULL),
(40, 'Và Sao Không Thể Hết Yêu Em?', 'uploads/t5.jpg', 67, 0, '20', '“Bao giờ dương xỉ có hoa,\r\n\r\nRau muống làm nhà, gỗ nghiến làm nem\r\n\r\nBao giờ cho nắng về đêm,\r\n\r\nCho mưa rơi ngược thì em xa mình…”', 'Nếu “Thương” của Thìa Đầy Thơ đã khơi dậy những xúc cảm trong lòng bạn theo một cách rất riêng: nhẹ nhàng, lắng đọng và đầy tinh tế thì trong “Và sao không thể hết yêu em” (Thương 2), Thìa Đầy Thơ sẽ cùng bạn đi qua những ngông cuồng, xốc nổi của tuổi trẻ đến ngày có được sự trầm ổn và sâu lắng khi đã trưởng thành.\r\n\r\n“Và sao không thể hết yêu em?” dẫn bạn vào một không gian với đầy đủ màu sắc và cung bậc cảm xúc, nơi đó có…\r\n\r\nMột tình yêu âm ỉ qua năm tháng chẳng thể bật thành câu,\r\n\r\nMột tình yêu mới chớm nở, nhưng đã lụi tàn,\r\n\r\nMột tình yêu dung dị nắm tay nhau đi khắp nhân gian,\r\n\r\nHay một tình yêu rộng ra từ trái tim ta, như tình yêu dành cho cái ôm của mẹ đùm bọc ta thuở còn thơ bé...\r\n\r\n“Và sao không thể hết yêu em?” không có bóng dáng của một nhân vật nhất định, không gò bó về hình thức thể hiện, song đó lại là một tập thơ rất tình, ngẫu hứng và cũng cũng dạt dào xúc cảm.\r\n\r\nVới những sáng tác nổi bật nhất của Thìa Đầy Thơ - Thế hệ những tác giả trẻ luôn giữ gìn và sáng tạo Tiếng Việt, tập thơ “Thương 2” sẽ giúp bạn gạt bỏ những định kiến trong tình yêu, sẵn sàng mở lòng để bắt đầu một hành trình yêu mang đậm dấu ấn cá nhân của bạn.\r\n\r\nGấp lại “Và sao không thể hết yêu em?”, mong bạn dù ở độ tuổi nào, trong giai đoạn nào của cuộc đời cũng sẽ cảm thấy trái tim mình được ấp ôm và vỗ về.', '2023-11-14 14:52:38', '2022', 14, 19, 1, '200', 100, 0, 1, 1, NULL, NULL),
(41, 'Ca Dao, Tục Ngữ Bằng Tranh ', 'uploads/t6.jpg', 72, 70, '200', '\"Ca dao tục ngữ bằng tranh\" sẽ giúp các em hiểu thêm ý nghĩa của từng câu ca dao tục ngữ, thêm yêu và trân trọng những sáng tạo của cha ông.', 'Tục ngữ, ca dao là kho tàng kinh nghiệm sống quý giá, là tiếng nói chứa đựng tâm tư, tình cảm của người lao động từ ngàn đời để lại. Cuốn sách là tuyển tập những câu ca dao, tục ngữ theo các chủ đề \"Bài học ứng xử\", \"Tình cảm gia đình\", \"Tình cảm lứa đôi\", \"Châm biếm\", \"Chống phong kiến\". Mỗi cặp ca dao - tục ngữ có nghĩa tương đồng, được minh họa công phu theo phong cách dân gian.\r\n\r\nCác em chắc hẳn đã băt gặp những câu ca dao, tục ngữ quen thuộc này trong cuộc sống thường ngày, trong lời mẹ ru, trong lời bà kể chuyện.\r\n\r\n', '2023-12-20 14:52:38', '2019', 12, 19, 1, '30', 0, 0, 1, 1, NULL, NULL),
(42, 'Thành Ngữ Tục Ngữ Việt Nam', 'uploads/t7.jpg', 53, 0, '200', 'Mỗi người có một miền quê thương mến, rộng ra cho cả cộng đồng thì đó chính là cội nguồn dân tộc. Trân trọng nguồn cội dấu yêu là nền tảng căn bản để từng người con lớn lên lành mạnh. Để hiểu về dân tộc mình thì bước đầu tiên là học rành rẽ ngôn ngữ, câu chữ từ xưa truyền lại.', 'Ông cha ta để lại rất nhiều cụm từ, câu nói, bài thơ ngắn gọn, giản dị, giàu nhịp điệu và hình ảnh... Thuộc những cụm từ ấy, ta giàu thêm vốn từ, ta biết thêm kinh nghiệm, và tâm hồn ta cũng “giàu có” rất nhiều. Đó là những câu thành ngữ, tục ngữ, ca dao, dân ca... Cuốn sách này lựa ra những thành ngữ và tục ngữ thường gặp và dễ hiểu với bạn đọc trên 3 tuổi, thêm chú dẫn những khái niệm cổ và khó, thêm các cụm từ gần gặn... giúp các bạn đọc ít mà hiểu nhiều.', '2024-01-01 14:52:38', '2022', 17, 19, 1, '100', 30, 0, 1, 1, NULL, NULL),
(43, 'Những Trái Ngang Nhỏ Xíu - Mong Bạn Mạnh Mẽ Nhiều', 'uploads/t8.jpg', 65, 0, '20', '“Có bầu trời nào xanh mãi, có cơn mưa nào không ngớt, có nỗi buồn nào không phai, có vết thương nào không lành… Sinh mệnh đáng quý vậy chẳng lẽ mình lại đầu hàng trước dăm ba trái ngang nhỏ xíu.”', 'Cuộc sống giống như một chiếc kính vạn hoa, là sự tổng hòa của vô số màu sắc. Đó là màu hồng hồn nhiên của tuổi thơ, màu đỏ nồng nhiệt pha cùng màu xanh hy vọng của tuổi trẻ và màu xanh lá của tuổi tóc muối tiêu an yên. Nhưng như thế vẫn chưa đủ, bức tranh cuộc đời còn cần chút gam màu xám và đen của giông gió, bão tố mới trọn vẹn.\r\n\r\nChúng ta, lẽ tự nhiên, sẽ không thể tránh khỏi những vết đen xám đau đớn, những ngang trái, những biến cố ập đến khiến ta tưởng chừng như ngày mai chẳng bao giờ tới, và ta cũng không thể đau đớn hơn được. Ta buồn rầu, ta u uốt và đôi khi ta bỏ rơi bản thân.', '2024-01-07 14:52:38', '2023', 11, 19, 1, '20', 10, 0, 1, 1, NULL, NULL),
(44, 'Truyện Kiều', 'uploads/t9.jpg', 32, 0, '20', '“Trăm năm trong cõi người ta,\r\n\r\nChữ tài chữ mệnh khéo là ghét nhau.\r\n\r\nTrải qua một cuộc bể dâu,\r\n\r\nNhững điều trông thấy mà đau đớn lòng.\r\n\r\nLạ gì bỉ sắc tư phong,\r\n\r\nTrời xanh quen thói má hồng đánh ghen”.', 'Nhân dịp kỷ niệm 250 ngày sinh đại thi hào Nguyễn Du, Huy Hoàng book giới thiệu đến độc giả tác phẩm nổi tiếng nhất của ” người đặt nền móng” cho văn học nước nhà: Truyện Kiều             \r\nTác phẩm Truyện Kiều, nguyên tên là Đoạn trường tân thanh, từ khi ra đời đến nay (khoảng 200 năm), trong lịch sử Văn học Việt Nam chưa có công trình nào nghiên cứu sâu sắc về nó. Một trong nguyên nhân chính là vì bản gốc của Nguyễn Du sáng tác không còn nữa. Tuy nhiên, không phải vì vậy mà Truyện Kiều bị mai một. ', '2023-12-11 15:20:02', '2015', 16, 19, 1, '30', 20, 0, 1, 1, NULL, NULL),
(45, 'Chuyện Tình Yêu Loài Người', 'uploads/t10.jpg', 65, 0, '200', 'Và sau này mai đây\r\n\r\nTrên bậc thềm trước cửa\r\n\r\nVẫn câu chuyện muôn thuở\r\n\r\nSẽ có người vẫn kể\r\n\r\nThay cho anh và em\r\n\r\nChuyện tình yêu loài người.\r\n\r\nVà sau này mai đây\r\n\r\nTrên bậc thềm trước cửa\r\n\r\nVẫn câu chuyện muôn thuở\r\n\r\nSẽ có người vẫn kể\r\n\r\nThay cho anh và em\r\n\r\nChuyện tình yêu loài người.', 'Những câu từ giản đơn của Chuyện tình yêu loài người được chắt chiu từ những quan sát, chiêm nghiệm về cuộc sống bao gồm hai phần:\r\n\r\n- Phần 1 là tập thơ Mặt hồ nổi gió\r\n\r\n- Phần 2 là tản văn Giăng tơ giữa đời\r\n\r\nCuốn sách này sẽ là món ăn tinh thần mang đậm giá trị từ quá khứ đến hiện tại, nơi bạn có thể bắt gặp hình ảnh của chính mình, được tác giả Xuân Hòa gạn lọc trong 4 năm. Với Chuyện tình yêu loài người, hy vọng bạn đọc sẽ tìm thấy sự đồng điệu và niềm tin vào tình người và vẻ đẹp của cuộc sống.', '2023-11-08 15:20:02', '2023', 11, 19, 1, '20', 80, -10, 1, 1, NULL, NULL),
(46, 'Chúng Ta Rồi Sẽ Hạnh Phúc, Theo Những Cách Khác Nhau', 'uploads/tn1.jpg', 63, 0, '20', '- Bạn có từng đắm chìm trong vô vọng và không tìm ra lối thoát cho chuỗi ngày vụng dại tuổi trẻ của mình?\r\n\r\n- Bạn có từng muốn ngủ một giấc thật dài, sau khi tỉnh dậy sẽ chỉ còn những niềm vui ở lại?\r\n\r\n- Bạn có từng nghĩ rằng mình là người bất hạnh nhất trên thế gian này, khi những chuyện chẳng lành cứ dồn dập tới lui?', 'Trên đời này có vô vàn định nghĩa về hạnh phúc, nhưng bằng cách này hay cách khác, rồi sau này chúng ta sẽ hạnh hạnh phúc, cho dù chúng ta có gặp nhầm bao người đi nữa.\r\n\r\nCHÚNG TA RỒI SẼ HẠNH PHÚC, THEO NHỮNG CÁCH KHÁC NHAU là một lời nhắn nhủ của tác giả Thảo Thảo đến tất cả mọi người rằng mỗi chúng ta đều là một cá thể duy nhất trong vũ trụ bao la rộng lớn, đừng bao giờ cho người khác quyền mang lại niềm vui hay nỗi buồn cho bạn. Hãy sống với những gì bạn muốn, làm nhũng gì bạn cho là đúng, bởi nếu cứ sống vì người khác, bạn sẽ đánh mất những-gì-đặc-biệt-nhất của bản thân mình.\r\n\r\n“Những nụ cười tươi tắn nhất sẽ giấu đi những bí mật đau thương nhất.\r\nNgày lãng phí nhất trong cuộc đời là ngày thiếu vắng những nụ cười”.\r\n\r\nSẽ có một ngày bạn tỉnh dậy thật sớm, ngắm bình minh lên thật đẹp, đón ánh sáng thật lung linh rực rỡ và mỉm cười an nhiên khi từng nghĩ mình là kẻ cô đơn nhất thế giới nay đã có một người ở cạnh bên, cùng nhau hạnh phúc.\r\n\r\nCho dù ngày hôm nay bạn có căm ghét cuộc sống này đi chăng nữa thì cũng đừng buông bỏ, bởi chúng ta sinh ra trên đời này là để được hạnh phúc. Hãy trân trọng một lần được sống để sống trọn vẹn.', '2024-01-09 15:37:58', '2021', 11, 19, 1, '20', 20, 0, 1, 1, NULL, NULL),
(47, 'Gửi Cậu Một Cái Ôm Vì Đã Không Bỏ Cuộc', 'uploads/tn2.jpg', 70, 0, '20', 'Gửi đến cậu, những người đang loay hoay, bền bỉ nỗ lực từng ngày, để theo đuổi con đường mà mình đã chọn!\r\n\r\nNgười trẻ thế hệ mới tụi mình hầu như đều bị áp lực của xã hội, áp lực đồng trang lứa… đè nặng. Ở mỗi một độ tuổi, chúng ta lại có những mục tiêu “chuẩn mực” phải gồng mình hoàn thành:\r\n\r\n- 22 tuổi phải tốt nghiệp, tìm được việc làm.\r\n\r\n- 25 tuổi phải lập gia đình, phải sinh con.\r\n\r\n- 30 tuổi phải làm sếp, phải có nhà, có ô tô…\r\n\r\nChúng ta cứ thế mải mê trên hành trình đó, vừa mệt nhọc nỗ lực, vừa liên tục định vị xem bản thân đang ở đâu so với cuộc sống đầy thành tựu của những người xung quanh.', 'Này cậu, cậu có mệt không? Nếu như cậu đang thấy mỏi mệt quá, thấy con đường mình đã chọn sao khó đi quá... Vậy thì hãy để cuốn sách \"Gửi cậu một cái ôm vì đã không bỏ cuộc” mang đến cho cậu đôi lời cổ vũ nhé.\r\n\r\nChậm rãi lật giở từng trang sách, cậu sẽ nhận ra rằng hóa ra cuộc sống này xinh đẹp và \"dễ thở\" hơn cậu nghĩ rất nhiều đó. Cậu có một công việc, giúp cậu trả hóa đơn mỗi ngày, để cố gắng, nỗ lực phát triển bản thân. Cậu có một nơi để về sau hàng giờ vật lộn với đủ thứ trách nhiệm, để thả lỏng cơ thể và làm những điều mà cậu yêu thích. Cậu còn có những người để yêu thương, những bạn đồng hành, cùng cậu lắng nghe và sẻ chia vui buồn trong cuộc sống…\r\n\r\nMọi trải nghiệm, mọi hành trình đều là phép thử, mà phép thử thì không cần phải đúng ngay lần đầu tiên. Vậy nên hãy xem mọi phép thử là từng điểm mốc để chạm tới ước mong, để cậu có thể tự hào về bản thân vì đã luôn kiên cường không bỏ cuộc.\r\n\r\n', '2024-01-14 18:13:11', '2023', 15, 7, 1, '40', 50, 0, 1, 1, NULL, NULL),
(48, 'Tạm Biệt Tôi Của Nhiều Năm Về Trước', 'uploads/tn3.jpg', 83, 0, '50', 'Dành tặng bạn, những người muốn buông bỏ những “điều đã cũ” nhưng chưa đủ can đảm.\r\n\r\nDành tặng những ai đang khao khát được “chạm vào”, được vỗ về và thấu hiểu.\r\n\r\nDành tặng cho tất cả chúng ta, trong những năm tháng tươi đẹp nhất của thanh xuân, đang có một chốn để mơ về, có một ước mơ để theo đuổi và có một ai đó để da diết nhớ thương.', '“Tạm biệt tôi của nhiều năm về trước” là ấn phẩm mới nhất của An, chàng tác giả từng được biết tới với “cơn sốt” sách “Hẹn nhau phía sau tan vỡ” - liên tục cháy hàng và chinh phục trái tim của hàng vạn độc giả trẻ.\r\n\r\nTrong “Tạm biệt tôi của nhiều năm về trước”, với 248 trang viết kèm minh họa được thực hiện bởi chính tác giả, An dẫn bạn đọc bóc tách từng tổn thương chưa được chữa lành bên trong mình. Dù đó là vết thương do ai gây ra, vì lý do gì, vào thời điểm nào, còn sâu hay đã vơi… thì đều được vỗ về và ủi an.\r\n\r\n“Để trưởng thành chúng ta phải nói lời tạm biệt với nhiều người, và có thể là tạm biệt chính bản thân mình trong quá khứ.”\r\n\r\n“Đôi khi chúng ta tha thứ cho một người không phải vì họ xứng đáng nhận được, mà vì bạn xứng đáng với sự thanh thản, không cần bận tâm về những chuyện đã qua nữa.”\r\n\r\n“Chỉ khi bạn đi về phía ánh sáng, chiếc bóng mới hắt về phía sau. Đừng tự giam cầm mình trong quá khứ, hãy làm gì đó để bản thân cảm thấy tốt hơn. Rồi mọi chuyện cũng sẽ qua, mọi vết thương đều sẽ lành lại.“\r\n\r\nHãy chọn nói Tạm Biệt những kỉ niệm đã cũ mèm, cho phép nó rời bỏ mình, để ngày thêm an tĩnh và đêm thêm an yên.\r\n\r\nKhép lại “Tạm biệt tôi của nhiều năm về trước”, bạn sẽ trở thành một bạn hoàn toàn mới - 1 dáng vẻ sâu lắng, kiên cường và lắng đọng hơn.\r\n\r\nMùa xuân này, hãy trao gửi những dòng tâm tình ngọt ngào trong “Tạm biệt tôi của nhiều năm về trước” cho chính mình và những người mà bạn thương.\r\n\r\nChúc bạn 4 mùa trong 1 năm, mùa nào cũng dịu dàng và vô ưu.', '2023-09-04 15:44:09', '2022', 13, 19, 1, '50', 10, 0, 1, 1, NULL, NULL),
(49, 'Lạc Giữa Tần Số Không Người Nghe', 'uploads/tn4.jpg', 78, 75, '120', '“tôi lạc giữa những vùng biển khơi\r\n\r\nlạc giữa ánh sao trời - giữa vũ trụ xa khuất\r\n\r\ntôi lạc ngay cả khi đứng trên mặt đất\r\n\r\ntrăm lần tìm cách cất giọng\r\n\r\nvẫn không trùng một ai…”\r\n\r\nVậy lối thoát nào cho những đứa trẻ đi lạc?', 'Tr.ầm cả.m không gây đau đớn lên thể xác mà nó sẽ từ từ gặm nhấm tâm hồn bạn, từng chút, từng chút một cho đến khi bộ não và trái tim bạn chỉ còn lại một khối trống rỗng. Nhưng sâu thẳm trong một tâm hồn thương tổn đó là khát khao cháy bỏng nhận được sự thấu cảm và quan tâm từ những người xung quanh.\r\n\r\nQua cuốn sách “Lạc giữa tần số không người nghe”, tác giả macmart muốn gửi đến bạn một chút ấm áp như tia sáng bé nhỏ xuyên qua những khe nứt.\r\n\r\nMong rằng mỗi ngày trôi qua, bạn đều cảm thấy đó là ngày đáng sống.\r\n\r\nMong rằng bốn mùa bình an, trời quang, mây tạnh, gió thổi mát lòng.\r\n\r\nChúc cho những đứa trẻ trong thân hình người lớn luôn được yêu thương và vỗ về.', '2023-11-22 15:44:09', '2023', 14, 19, 1, '50', 20, 0, 1, 1, NULL, NULL),
(50, 'Tạm Biệt Tôi Của Nhiều Năm Về Trước', 'uploads/tn3.jpg', 83, 0, '50', 'Dành tặng bạn, những người muốn buông bỏ những “điều đã cũ” nhưng chưa đủ can đảm.\r\n\r\nDành tặng những ai đang khao khát được “chạm vào”, được vỗ về và thấu hiểu.\r\n\r\nDành tặng cho tất cả chúng ta, trong những năm tháng tươi đẹp nhất của thanh xuân, đang có một chốn để mơ về, có một ước mơ để theo đuổi và có một ai đó để da diết nhớ thương.', '“Tạm biệt tôi của nhiều năm về trước” là ấn phẩm mới nhất của An, chàng tác giả từng được biết tới với “cơn sốt” sách “Hẹn nhau phía sau tan vỡ” - liên tục cháy hàng và chinh phục trái tim của hàng vạn độc giả trẻ.\r\n\r\nTrong “Tạm biệt tôi của nhiều năm về trước”, với 248 trang viết kèm minh họa được thực hiện bởi chính tác giả, An dẫn bạn đọc bóc tách từng tổn thương chưa được chữa lành bên trong mình. Dù đó là vết thương do ai gây ra, vì lý do gì, vào thời điểm nào, còn sâu hay đã vơi… thì đều được vỗ về và ủi an.\r\n\r\n“Để trưởng thành chúng ta phải nói lời tạm biệt với nhiều người, và có thể là tạm biệt chính bản thân mình trong quá khứ.”\r\n\r\n“Đôi khi chúng ta tha thứ cho một người không phải vì họ xứng đáng nhận được, mà vì bạn xứng đáng với sự thanh thản, không cần bận tâm về những chuyện đã qua nữa.”\r\n\r\n“Chỉ khi bạn đi về phía ánh sáng, chiếc bóng mới hắt về phía sau. Đừng tự giam cầm mình trong quá khứ, hãy làm gì đó để bản thân cảm thấy tốt hơn. Rồi mọi chuyện cũng sẽ qua, mọi vết thương đều sẽ lành lại.“\r\n\r\nHãy chọn nói Tạm Biệt những kỉ niệm đã cũ mèm, cho phép nó rời bỏ mình, để ngày thêm an tĩnh và đêm thêm an yên.\r\n\r\nKhép lại “Tạm biệt tôi của nhiều năm về trước”, bạn sẽ trở thành một bạn hoàn toàn mới - 1 dáng vẻ sâu lắng, kiên cường và lắng đọng hơn.\r\n\r\nMùa xuân này, hãy trao gửi những dòng tâm tình ngọt ngào trong “Tạm biệt tôi của nhiều năm về trước” cho chính mình và những người mà bạn thương.\r\n\r\nChúc bạn 4 mùa trong 1 năm, mùa nào cũng dịu dàng và vô ưu.', '2023-09-04 15:44:09', '2022', 13, 19, 1, '50', 10, 0, 1, 1, NULL, NULL),
(51, 'Lạc Giữa Tần Số Không Người Nghe', 'uploads/tn4.jpg', 78, 75, '120', '“tôi lạc giữa những vùng biển khơi\r\n\r\nlạc giữa ánh sao trời - giữa vũ trụ xa khuất\r\n\r\ntôi lạc ngay cả khi đứng trên mặt đất\r\n\r\ntrăm lần tìm cách cất giọng\r\n\r\nvẫn không trùng một ai…”\r\n\r\nVậy lối thoát nào cho những đứa trẻ đi lạc?', 'Tr.ầm cả.m không gây đau đớn lên thể xác mà nó sẽ từ từ gặm nhấm tâm hồn bạn, từng chút, từng chút một cho đến khi bộ não và trái tim bạn chỉ còn lại một khối trống rỗng. Nhưng sâu thẳm trong một tâm hồn thương tổn đó là khát khao cháy bỏng nhận được sự thấu cảm và quan tâm từ những người xung quanh.\r\n\r\nQua cuốn sách “Lạc giữa tần số không người nghe”, tác giả macmart muốn gửi đến bạn một chút ấm áp như tia sáng bé nhỏ xuyên qua những khe nứt.\r\n\r\nMong rằng mỗi ngày trôi qua, bạn đều cảm thấy đó là ngày đáng sống.\r\n\r\nMong rằng bốn mùa bình an, trời quang, mây tạnh, gió thổi mát lòng.\r\n\r\nChúc cho những đứa trẻ trong thân hình người lớn luôn được yêu thương và vỗ về.', '2023-11-22 15:44:09', '2023', 14, 19, 1, '50', 20, 0, 1, 1, NULL, NULL),
(52, 'Moby Dick Cá Voi Trắng', 'uploads/tn5.jpg', 288, 280, '230', 'Có thể coi tác phẩm là một phần tự vấn trong quá trình suy ngẫm của tác giả về nước Mỹ quá khứ, hiện tại và tương lai với tâm thế cứu chuộc tuyệt vời trong đức tin tuyệt đối về tình yêu thương của loài người.', 'Không chỉ là chuyện kể về thủy thủ Ishmael chán ngấy đất liền và “hoàng tử đen” Queequeg xách đầu lâu rao bán trên hải cảng tình cờ gặp nhau để rồi cùng xuống tàu mạo hiểm vượt trùng khơi săn bắt cá voi..., cuốn tiểu thuyết còn mô tả tường tận thế giới nội tâm và cuộc chiến hung bạo thù hận trong hành trình truy tìm một sinh vật khổng lồ nhưng cô đơn là Moby Dick của lão thuyền trưởng Ahab độc đoán...', '2023-10-26 15:55:12', '2022', 4, 9, 1, '52', 0, -10, 1, 1, NULL, NULL),
(53, 'Nếu Biết Trăm Năm Là Hữu Hạn', 'uploads/tn6.jpg', 243, 0, '20', '“Nếu biết trăm năm là hữu hạn, cớ gì ta không sống thật sâu…”\r\n\r\nCó đôi khi những bộn bề của cuộc sống cuốn ta đi như dòng nước hững hờ cuốn trôi chiếc lá. Cứ thế, ta vội vã làm, vội vã ăn, vội vã ngủ, vội vã yêu và vội vã… để sống! Chắc hẳn đã không ít lần mỗi chúng ta đều thốt lên “giá như…”', 'Nếu Biết Trăm Năm Là Hữu Hạn, đưa người đọc đến nhiều tầng của cung bậc cảm xúc, đến nhiều không gian tưởng chừng ta không thể quay về. Vừa hoài niệm, sâu sắc, vừa giản dị, chân thành, vừa quá khứ, hiện tại.\r\n\r\nNếu Biết Trăm Năm Là Hữu Hạn cứ thế cuốn ta đi một cách nhẹ nhàng và đầy sâu lắng… Với tập hợp 40 truyện ngắn, chắc hẳn đâu đó xung quanh những câu chuyện ấy, ta sẽ vô tình bắt gặp chính ta. Nếu Biết Trăm Năm Là Hữu Hạn là một quyển sách dành cho nhiều người.\r\n\r\n“Người ta gọi tuổi mới lớn là “tuổi biết buồn”. “Biết buồn” tức là chạm ngõ cuộc đời rồi đó. Biết buồn tức là bắt đầu nhận ra sự hiện hữu của những khoảng trống trong tâm hồn. Biết buồn là khi nhận ra rằng có những lúc mình cảm thấy cô độc. Khi đó, hãy dành cho sự cô độc một khoảng riêng, hãy đóng khung sự cô đơn trong giới hạn của nó, như một căn phòng trống trong ngôi nhà tâm hồn. Mỗi lần vào căn phòng ấy, dù tự nguyện hay bị xô đẩy, thì bạn vẫn có thể điềm tĩnh khám phá bản thân trong sự tĩnh lặng. để rồi sau đó, bạn bình thản bước ra, khép cánh cửa lại và trở về với cuộc sống bề bộn thường ngày, vốn lắm nỗi buồn nhưng cũng không bao giờ thiếu niềm vui...”', '2023-10-20 15:59:06', '2023', 3, 11, 1, '50', 30, 0, 1, 1, NULL, NULL),
(54, 'Cảm Ơn Vì Tôi Bị Ung Thư', 'uploads/tn7.jpg', 114, 0, '50', '“Cô ấy sợ chết nên cô ấy đã quyết định không đầu hàng, buông xuôi mặc kệ. Cô ấy cũng không chấp nhận sống chung với ung thư. Cô ấy quyết tâm thoát khỏi nó. Đến giờ, khi đọc những dòng cuối cùng của những dòng tự truyện này thì OM cảm thấy đó không phải là quá trình thuần túy mà là một cuộc chiến đấu ngoan cường để chống lại nó, loại bỏ nó. Tuy cô ấy chưa bao giờ nhắc đến hai chữ “chiến đấu” nhưng thực sự nó là một cuộc chiến thực sự. Và qua những dòng tự truyện đó, OM mới thấy rằng cô ấy đã quyết định đúng và đã làm được. Tuy sự ủng hộ của gia đình, bạn bè là quan trọng nhưng chính sự tin tưởng vào bác sĩ, sự quyết tâm, sự kiên trì và tinh thần lạc quan mới là điều quan trọng giúp cô ấy.”', '\"Cuốn tự truyện này chứa rất nhiều thông tin bổ ích để chúng ta có thể tham khảo thêm về căn bệnh ung thư. Đó là về diễn biến của bệnh, về quan điểm y học đối với ung thư, về nguyên tắc sinh hoạt và diễn biến tâm lý của “dân chơi hệ K” và về cách phòng ngừa nó.Tất nhiên bệnh nặng nhẹ tùy lúc, tùy người, nhưng ít nhất thì đây cũng là câu chuyện người thật việc thật, là góc nhìn thực tiễn của chính người trong cuộc. Đáng tham khảo quá đi chứ.', '2024-01-01 15:59:06', '2023', 3, 19, 1, '50', 30, 0, 1, 1, NULL, NULL),
(55, 'Vỡ Vụn Tuổi 20\r\n', 'uploads/tn8.jpg', 63, 60, '60', 'Bước qua ngưỡng cửa 20, có những sự việc không như chúng ta tưởng tượng trước đó. Tất cả có thể hình dung bằng hai từ “vỡ vụn”.\r\n\r\nChúng ta đã từng nghĩ thành phố hai chục năm mình sinh sống thật nhỏ bé, người với người rất dễ để gặp nhau. Sau này mới phát hiện, mình thật nhỏ bé giữa sự xa hoa, hào nhoáng của chốn thân quen.\r\n\r\nChúng ta đã từng nghĩ cuộc sống này là màu hồng, trải đầy hoa hồng dưới gót chân, cứ thế mà bước đi chẳng điều gì cản bước. Sau này mới phát hiện, cuộc sống này ngoài gam màu tươi sáng còn cả những gam màu tối vắt kiệt cả hơi sức của chúng ta.\r\n\r\nChúng ta đã từng nghĩ tình yêu đơn giản lắm, người ta nhìn thấy nhau, biết nhau, quen nhau, rồi hẹn hò, rồi chán nản, rồi chia tay… mơ mộng về giấc mơ hoàng tử công chúa. Sau này mới phát hiện, mọi thứ không đơn giản, và hạnh phúc thì vốn dĩ không dễ kiếm tìm.\r\n\r\nKhi con người ta trải qua quá nhiều chuyện, thì rốt cuộc cũng giống như không có gì. Ở tuổi 20, người ta không phải là đã lớn, nhưng cũng chẳng còn dễ mỉm cười', '\"Vỡ vụn tuổi 20\" của Gari như một niềm trăn trở với dòng đời, như một lời tự sự để bản thân học cách buông bỏ và chấp nhận. Bắt đầu là rạn nứt, đến vỡ vụn của những mộng tưởng nhưng sau tất cả, chính sức sống mãnh liệt của tuổi trẻ lại một lần nữa vực họ dậy và tiếp tục cuộc sống của chính mình, với một bản thể, một con người hoàn toàn mới.\r\n\r\nĐiều sau cùng quan trọng nhất là sau sự vỡ vụn ấy mình bước tiếp như thế nào, mình vượt qua làm sao?\r\n\r\nBởi “Có nhiều lúc, ta tự thấy bản thân mình vẫn chỉ là một đứa trẻ to xác. Những gì ở bên ngoài, suy cho cùng, cũng chỉ là sự biến đổi ở thể xác, còn tâm hồn, vốn dĩ chẳng thể thay đổi. Thôi thì, nếu như đã không thể xoa dịu quá khứ, thì hãy để cuộc sống hiện tại là một món quà. Trong cuộc sống, có những người suốt ngày chỉ chăm chăm nhìn vào quá khứ tươi đẹp mà không biết trân trọng hiện tại – với những thứ mà họ đang có. Họ không nhận ra một điều rằng, thứ khởi đầu chưa chắc đã là thứ kết thúc. Bầu trời còn cao và rộng lắm…”.', '2023-11-20 15:59:06', '2023', 3, 19, 1, '50', 20, 0, 1, 1, NULL, NULL),
(56, 'Màu Nhạt Nắng', 'uploads/tn9.jpg', 130, 110, '50', 'Sau sự thành công với ba cuốn sách kể từ tháng 10/2019 gồm “Từ Kiến trúc sư thành Bác sĩ tại Hoa Kỳ”, “Trong phòng chờ với Bác sĩ Wynn” và “Chuyện ICU – Khi thiên thần nhiễm bệnh”, Bác sĩ Wynn Huỳnh Trần (Dr Wynn Tran) tiếp tục cho ra mắt quyển sách thứ tư mang tựa đề “Màu nhạt nắng”.', '“Màu nhạt nắng” là tuyển tập gồm nhiều truyện ngắn kể về tuổi thơ giản dị, mộc mạc của vùng đất nơi mà tác giả đã sinh ra và lớn lên – quê nhà Bạc Liêu. Bằng ngòi bút chân thành, hài hước, câu văn đơn giản súc tích nhưng mang nhiều tình cảm, Bác sĩ Wynn đã kể về Bạc Liêu có ấp Cái Dầy, có bầy cá lia thia đồng mỗi chiều đi bắt cùng chúng bạn, có chiếc cần xé bánh mì rao bên lề đường buổi tối. Bao câu chuyện đầy ắp kỷ niệm trong suốt nhiều năm tháng lớn lên tại Việt Nam hiện lên sinh động trên trang sách chính là hành trang lớn nhất mà Bác sĩ Wynn Huỳnh Trần mang theo đến Mỹ, để rồi hôm nay khi đã thành công ở một đất nước khác, anh vẫn kể về mảng màu tươi đẹp ấy một cách đầy say mê. \r\n\r\nTạm gác lại những bộn bề cuộc sống, mời quý vị bạn đọc theo chân tác giả đi từ quê nhà Bạc Liêu đến California để như thấy cả tuổi thơ của mình hiện lên qua cuốn sách: “Màu nhạt nắng”.', '2023-11-07 15:59:06', '2022', 15, 19, 1, '50', 20, 0, 1, 1, NULL, NULL),
(57, 'Tiếng Đàn Môi Sau Bờ Rào Đá', 'uploads/tn10.jpg', 152, 0, '60', 'Đây là một trong những tập truyện ngắn được bạn đọc yêu thích nhất của Đỗ Bích Thúy, bao gồm những tác phẩm chị viết gần như liên tục trong khoảng ba năm kể từ sau khi đoạt Giải nhất Cuộc thi truyện ngắn của Tạp chí Văn nghệ Quân đội (năm 1998 - 1999) 21 truyện ngắn trong tập truyện này của Đỗ Bích Thúy đưa người đọc trở về thiên nhiên Tây Bắc thật lộng lẫy.', 'Tập truyện ngắn “Tiếng đàn môi sau bờ rào đá” có truyện ngắn cùng tên từng được đạo diễn Ngô Quang Hải chuyển thể thành kịch bản và dựng phim “Chuyện của Pao” - giành Giải Cánh diều vàng năm 2005.', '2023-10-16 15:59:06', '2021', 3, 9, 1, '200', 10, 0, 1, 1, NULL, NULL),
(58, 'Ghi Chép Pháp Y - Những Thi Thể Không Hoàn Chỉnh', 'uploads/trt1.jpg', 95, 0, '420', '“Ghi chép pháp y - Những thi thể không hoàn chỉnh” là phần thứ 3, tiếp nối series đình đám “Ghi chép pháp y” được tác giả Pháp y Tần Minh và Phó giám đốc Hiệp hội pháp y Trung Quốc - Châu Diệc Vũ đặc biệt giới thiệu. Cuốn sách bao gồm 7 vụ án có thật, được viết bởi bác sĩ pháp y Lưu Bát Bách với 18 năm kinh nghiệm giải phẫu cho hơn 800 thi thể. ', 'Nếu phần 1 đi sâu vào việc phá án bằng nghiệp vụ chuyên môn, phần 2 là sự đồng cảm với những xác chết không thể lên tiếng thì ở phần 3, tác giả sẽ tập trung miêu tả những hiện trường tội ác man rợ, phân tích động cơ gây án cũng như tâm lý biến thái ẩn sau bộ mặt bình thản của hung thủ. \r\n\r\nSự độc ác của nhân tính có thể khiến đứa con trai tự tay giết mẹ, ăn trộm tiền cho bạn. Sự độc ác của nhân tính có thể khiến người thầy giáo cởi bỏ lớp ngụy trang mẫu mực, phân xác học sinh dưới sự bao che của nhà trường. Sự độc ác của nhân tính có thể khiến vị bác sĩ thảm sát cả gia đình đồng nghiệp chỉ vì ghen tị.\r\n\r\nBằng kỹ năng toàn diện và sự hỗ trợ của công nghệ siêu việt như: đối chiếu DNA, xác minh dấu giày, giám định mỏm xương thái dương… tác giả đã từng bước tìm ra chứng cứ then chốt, đập tan mọi ảo tưởng về “một tội ác hoàn hảo’ và đưa kẻ thủ ác ra trước ánh sáng pháp luật để chịu sự trừng phạt. \r\n\r\n“Thật ra pháp y chính là nghề như vậy, thân thể ở trong nơi tối, trái tim hướng về phía ánh sáng mặt trời.” - Lưu Bát Bách. \r\n\r\nHy vọng trong phần 3 của series “Ghi chép pháp y”, bạn đọc sẽ tiếp tục đồng hành cùng tác giả trải nghiệm quá trình phá án, truy tìm hung thủ để đòi quyền cho người sống - lên tiếng cho người chết.', '2023-11-30 16:40:06', '2023', 3, 20, 1, '500', 200, 0, 1, 1, NULL, NULL),
(59, 'Ghi Chép Pháp Y - Tập 2 - Khi Tử Thi Biết Nói', 'uploads/trt2.jpg', 92, 0, '500', 'Nếu kẻ thủ ác dùng cái chết để khiến một người im lặng, thì bác sĩ pháp y sẽ giúp nạn nhân “mở miệng” thông qua những mật mã để lại trên thi thể.\r\n\r\n“Ghi chép pháp y 2 - Khi tử thi biết nói” được tác giả của bộ tiểu thuyết đình đám “Pháp y Tần Minh” và Phó giám đốc Hiệp hội pháp y Trung Quốc - Châu Diệc Vũ giới thiệu, là một trong những cuốn sách về pháp y và tội phạm đáng đọc nhất. Cuốn sách tổng hợp 8 vụ án có thật, được viết bởi bác sĩ pháp y Liêu Tiểu Đao với 18 năm kinh nghiệm mổ xẻ tử thi bằng con dao bạc số 24.', 'Cuốn sách sẽ dẫn bạn bước vào hiện trường những vụ án ghê rợn, dưới góc nhìn chuyên môn của một bác sĩ pháp y: luộc xương để đoán tuổi xác chết, xác định thời gian tử vong dựa vào vỏ nhộng trên thi thể, dùng găng tay da người để nhận dạng danh tính nạn nhân… từng bước rửa oan cho người đã khuất, phơi bày những lỗ hổng pháp luật và sự mất nhân tính của một bộ phận con người trong xã hội.\r\n\r\nKhông chỉ thuật lại các phương pháp nghiệp vụ, cuốn sách còn chứa đựng suy tư của tác giả về những vụ án dai dẳng không lời giải đáp, những tử thi vô danh không thể lên tiếng và những gia đình còn ôm hy vọng tìm được xác người thân…\r\n\r\n‘Những vụ án chưa giải quyết không phải là một xấp giấy mỏng, mà đó là những “nấm mồ” của các nạn nhân đè lên tim tôi.”\r\n\r\nHiện trường vụ án là chiến trường của bác sĩ pháp y và xác chết là chìa khóa để truy tìm hung thủ. Tiếp nối thành công của “Ghi chép pháp y - Những cái chết bí ẩn”, hy vọng cuốn sách này sẽ đem tới cho bạn trải nghiệm chân thực về quá trình phá án, giải mã uẩn khúc đằng sau những mảnh vụn thi thể.', '2023-11-06 16:40:06', '2023', 11, 20, 1, '50', 100, 0, 1, 1, NULL, NULL),
(60, 'Ghi Chép Pháp Y - Những Cái Chết Bí Ẩn', 'uploads/trt3.jpg', 110, 0, '10', 'Làm cách nào để một “xác chết lên tiếng”? - đó là công việc của bác sĩ pháp y. \r\n\r\n“Ghi chép pháp y - Những cái chết bí ẩn” là cuốn sách nằm trong hệ liệt với “Pháp y Tần Minh” - bộ tiểu thuyết nổi đình đám của xứ Trung đã được chuyển thể thành series phim. Cuốn sách tổng hợp những vụ án có thật, được viết bởi bác sĩ pháp y Lưu Hiểu Huy - người có 15 năm kinh nghiệm và từng mổ xẻ hơn 800 tử thi. ', 'Trải qua 15 câu chuyện kinh hoàng, cuốn sách sẽ đưa bạn bước vào hiện trường của những vụ án man rợ như: xác chết phi tang dưới cánh đồng ngô, thi thể thiếu nữ không lành lặn, xác chết nhầy nhụa đang bị giòi bọ đục khoét hay một thi thể co cứng trong màng bọc nilon…lần theo những dấu vết, ghép lại sự thật từ những mảnh vụn thi thể, nguyên nhân của cái chết sẽ dần được hé mở.\r\n\r\nMỗi vụ án đều là một ẩn số, hiện trường vụ án bao gồm cả xác chết chính là chiếc chìa khóa để truy tìm hung thủ ngay cả khi nó không còn nguyên vẹn. Vậy làm cách để các bác sĩ pháp y có thể xác định thương tật, các dấu hiệu cơ thể bị xâm hại? Cuốn sách này sẽ trình bày những kiến thức chuyên môn và quy trình xử lý vụ án, từ hiện trường vụ án đến đài giải phẫu, xét nghiệm nội tạng, phân tích chất độc… từng bước tìm ra bí mật ẩn giấu sau mỗi tử thi, phơi bày những manh mối liên quan đến tội ác con người và lỗ hổng của xã hội.\r\n\r\nKhông chỉ thuật lại những vụ án và các phương pháp pháp y, cuốn sách còn chứa đựng cảm xúc của tác giả đối với nghề nghiệp và sự méo mó của bản chất con người. Chẳng hạn, một đứa trẻ bệnh nặng phải đau đớn đến thế nào khi bị người nhà đem ra làm công cụ để đòi bồi thường? Cuốn sách sẽ phơi bày những góc khuất của xã hội, những hành vi thủ ác, sự biến chất và mất nhân tính của một bộ phận con người trong xã hội.\r\n\r\nNếu bạn tò mò muốn biết cách đánh giá tuổi của người chết dựa trên mức độ mòn răng? Hay cách dùng một con giòi từ người chết để suy ra thời điểm chính xác của vụ án giết người?  Hy vọng cuốn sách này sẽ cho bạn trải nghiệm khó quên về nghề pháp y.', '2024-01-08 16:45:16', '2022', 11, 20, 1, '20', 120, 0, 1, 1, NULL, NULL),
(61, 'Bí Ẩn Sau Cánh Cửa Nhà Xác - Ghi Chép Của Người Giải Phẫu Tử Thi', 'uploads/trt4.jpg', 88, 0, '20', '“BÍ ẨN SAU CÁNH CỬA NHÀ XÁC - GHI CHÉP CỦA NGƯỜI GIẢI PHẪU TỬ THI” - Cuốn sách tiết lộ sự thật đằng sau công việc của những người sống cùng xác chết.\r\n\r\n“Tôi đã quen “đọc” máu thịt của người chết bằng cách nhìn và sờ, để tạo ra phần cuối câu chuyện cuộc đời của họ.\"\r\n\r\n“Bí ẩn sau cánh cửa nhà xác - Ghi chép của người giải phẫu tử thi” là cuốn sổ tay thuật lại những câu chuyện, những kiến thức chuyên môn của Carla Valentine - nhà công nghệ bệnh lý giải độc, đồng thời là người phụ trách Bảo tàng Bệnh học Barts vô cùng nổi tiếng tại Anh.', 'Từ nhỏ, khi quan sát những sinh vật chết trên đường hay chứng kiến sự qua đời của người thân, tác giả đã bị thu hút bởi quá trình giải phẫu và chôn cất tử thi. Trong 10 năm làm việc tại nhà xác, cô đã trải nghiệm nhiều vai trò khác nhau từ kỹ thuật viên giải phẫu, người hỏa táng đến người trang điểm tử thi.\r\n\r\nBạn đọc sẽ được trải nghiệm quá trình xử lý những xác chết ghê rợn, ám ảnh như: nha sĩ mắc chứng biếng ăn, nằm liệt giường với vô số vết hoen tử thi; thi thể dập nát do tai nạn giao thông; một đứa trẻ sơ sinh chết trong bụng mẹ… Không chỉ tìm hiểu về lịch sử, khoa học, nhân chủng học mà chúng ta còn tiếp cận thêm những kiến thức kỳ lạ về cái chết như: 5 giai đoạn tử thi phân hủy, cách bảo quản nội tạng làm mẫu vật, phương pháp lột da đầu ra khỏi hộp sọ…\r\n\r\nBằng tình yêu nghề, tác giả đã khiến cho từng nốt bầm, từng vết thối rữa hay từng đường dao trên thi thể đều mang một câ u chuyện riêng, từ đó đem đến góc nhìn tích cực hơn về công việc tại nhà xác vốn còn xa lạ và đáng sợ với nhiều người.\r\n\r\nHấp dẫn và sâu sắc, “Bí ẩn sau cánh cửa nhà xác - Ghi chép của người giải phẫu tử thi” sẽ tiết lộ những sự thật chưa từng được công khai trên phim ảnh hay truyền hình, những gì xảy ra khi nắp quan tài đóng lại và cánh cửa nhà xác mở ra.', '2023-09-04 16:45:16', '2023', 11, 20, 1, '50', 100, 0, 1, 1, NULL, NULL),
(62, 'Nhập Vai Thám Tử', 'uploads/trt5.jpg', 87, 80, '52', 'Cuốn sách được chia ra thành 50 vụ án từ đơn giản đến phức tạp – Áp dụng khả năng suy luận logic x Kỹ năng loại trừ, với 4 cấp độ:\r\n\r\n1. Sơ cấp: Gồm 13 vụ án\r\n\r\n2. Cầu viện thánh thần: Gồm 12 vụ án\r\n\r\n3. Căng não: Gồm 13 vụ án\r\n\r\n4. Bất khả giải: Gồm 12 vụ án\r\n\r\n+ Kẻ nào đã gây ra những tội ác rùng rợn ấy?\r\n\r\n+ Hắn đã sử dụng hung khí gì để kểt liễu nạn nhân?\r\n\r\n+ Cái bẫy đã được giăng sẵn ở đâu?\r\n\r\nHãy nghiên cứu kỹ lưỡng các đầu mối, phỏng vấn nhân chứng và vận dụng khả năng suy luận để “phá lưới”, bắt đúng thủ phạm!', 'Cuốn sách được chia ra thành 50 vụ án từ đơn giản đến phức tạp – Áp dụng khả năng suy luận logic x Kỹ năng loại trừ, với 4 cấp độ:\r\n\r\n1. Sơ cấp: Gồm 13 vụ án\r\n\r\n2. Cầu viện thánh thần: Gồm 12 vụ án\r\n\r\n3. Căng não: Gồm 13 vụ án\r\n\r\n4. Bất khả giải: Gồm 12 vụ án\r\n\r\n+ Kẻ nào đã gây ra những tội ác rùng rợn ấy?\r\n\r\n+ Hắn đã sử dụng hung khí gì để kểt liễu nạn nhân?\r\n\r\n+ Cái bẫy đã được giăng sẵn ở đâu?\r\n\r\nHãy nghiên cứu kỹ lưỡng các đầu mối, phỏng vấn nhân chứng và vận dụng khả năng suy luận để “phá lưới”, bắt đúng thủ phạm!', '2023-11-20 16:45:16', '2023', 11, 20, 1, '20', 50, 0, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pro_cate`
--

CREATE TABLE `pro_cate` (
  `id` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro_cate`
--

INSERT INTO `pro_cate` (`id`, `idCategory`, `idProduct`) VALUES
(1, 10, 3),
(2, 10, 5),
(3, 10, 15),
(4, 10, 12),
(5, 10, 4),
(6, 10, 11),
(7, 10, 14),
(8, 10, 2),
(9, 10, 1),
(10, 10, 13),
(11, 1, 24),
(12, 1, 20),
(13, 1, 25),
(14, 1, 16),
(15, 1, 18),
(16, 1, 23),
(17, 1, 19),
(18, 1, 21),
(19, 1, 17),
(20, 1, 22),
(27, 10, 17),
(28, 3, 26),
(29, 3, 27),
(30, 3, 28),
(31, 3, 29),
(32, 3, 30),
(33, 3, 31),
(34, 3, 32),
(35, 3, 33),
(36, 3, 34),
(37, 3, 35),
(38, 4, 36),
(39, 4, 37),
(40, 4, 38),
(41, 4, 39),
(42, 4, 40),
(43, 4, 41),
(44, 4, 42),
(45, 4, 43),
(46, 4, 44),
(47, 4, 45),
(48, 13, 17),
(49, 13, 21),
(50, 13, 15),
(51, 7, 27),
(52, 6, 25),
(53, 6, 16),
(54, 13, 16),
(55, 6, 3),
(56, 7, 58),
(57, 7, 59),
(58, 7, 60),
(59, 7, 61),
(60, 7, 62),
(61, 12, 60),
(62, 12, 59),
(63, 12, 61),
(64, 12, 60);

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`id`, `name`, `img`) VALUES
(1, 'Nguyễn Nhật Ánh', 'tg1.jpg'),
(2, 'Higashino Keigo', 'tg2.jpg'),
(3, 'Diệp Lạc Vô Tâm', 'tg3.jpg'),
(4, 'Mario Puzo', 'tg4.jpg'),
(5, 'Nam Cao', 'tg5.jpg'),
(6, 'Vũ Trọng Phụng', 'tg6.jpg'),
(7, 'Thạch Lam', 'tg7.jpg'),
(8, 'Jeffery Deaver', 'tg8.jpg'),
(9, 'Hertor Malot', 'tg9.jpg'),
(10, 'J.K.Rowling', 'tg10.jpg'),
(11, 'Marc Levy', 'tg11.jpg'),
(12, 'Ngô Tất Tố', 'tg12.jpg'),
(13, 'Tô Hoài', 'tg13.jpg'),
(14, 'Alexandre Dumas', 'tg14.jpg'),
(15, 'Sir Arthur Conan Doyle', 'tg15.jpg'),
(16, 'Stephen King', 'tg16.jpg'),
(17, 'Đặng Hoàng Giang', 'rg.jpg'),
(18, 'Kim Hye', 'tg.jpg'),
(19, 'Nhiều Tác Giả', 'tg.jpg'),
(20, 'Lưu Bát Bách', 'tg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `idgroup` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `phone`, `password`, `avatar`, `idgroup`, `created_at`, `updated_at`) VALUES
(1, 'Ân Nguyễn', 'Tô ký', 'an8.wordpress@gmail.com', '0338286902', '$2y$10$.byzKTl7sW7okfGzA3D9QeHufazZxUFgE/MQ1ChHadSpHhz4Jr6Fu', '/img/user.png', 1, '2024-01-13 03:26:02', '2024-01-13 03:26:02'),
(2, 'Vo Dinh Kha', 'HCM', 'khavd@gmail.com', '0389838883', '$2y$10$9zSa7eX1eX97m6/fxmnQLezoFK0kjsY/PWm0MzWqRtD4.VmDO5dKa', '/img/user.png', 1, '2024-01-15 02:13:49', '2024-01-15 02:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `magiamgia` varchar(255) NOT NULL,
  `giatri` varchar(255) NOT NULL,
  `kieugiamgia` varchar(255) NOT NULL,
  `ngayhethan` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `magiamgia`, `giatri`, `kieugiamgia`, `ngayhethan`, `status`) VALUES
(1, 'Tks5c2', '10.000', 'Free ship', '2024-01-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `yeuthich`
--

CREATE TABLE `yeuthich` (
  `id` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_cart` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_product` (`idProduct`),
  ADD KEY `fk_comment_users` (`idUser`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_cart` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orderdetail_order` (`order_id`),
  ADD KEY `fk_orderDetail_product` (`id_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nxn_product` (`idNhaxuatban`),
  ADD KEY `fk_tg_product` (`idTacgia`),
  ADD KEY `fk_voucher_product` (`idVoucher`);

--
-- Indexes for table `pro_cate`
--
ALTER TABLE `pro_cate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_procate_catagory` (`idCategory`),
  ADD KEY `fk_procate_product` (`idProduct`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_yeuthich_product` (`idProduct`),
  ADD KEY `fk_yeuthich_users` (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pro_cate`
--
ALTER TABLE `pro_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yeuthich`
--
ALTER TABLE `yeuthich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_user_cart` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_product` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_comment_users` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_cart` FOREIGN KEY (`user_id`) REFERENCES `cart` (`user_id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_orderDetail_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_order_orderDetail` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_nxn_product` FOREIGN KEY (`idNhaxuatban`) REFERENCES `nhaxuatban` (`id`),
  ADD CONSTRAINT `fk_tg_product` FOREIGN KEY (`idTacgia`) REFERENCES `tacgia` (`id`),
  ADD CONSTRAINT `fk_voucher_product` FOREIGN KEY (`idVoucher`) REFERENCES `voucher` (`id`);

--
-- Constraints for table `pro_cate`
--
ALTER TABLE `pro_cate`
  ADD CONSTRAINT `fk_procate_catagory` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `fk_procate_product` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`);

--
-- Constraints for table `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `fk_yeuthich_product` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_yeuthich_users` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
