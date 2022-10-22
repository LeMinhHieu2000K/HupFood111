-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 07:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodsell`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 0,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `id_user`, `id_sanpham`, `soluong`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(7, NULL, 1, 69, 1, NULL, 120000, 'Paypal', 'hup', '2022-06-08 08:08:31', '2022-06-08 08:08:31'),
(6, 5, 1, 69, 1, NULL, 120000, 'Thanh Toán Tiền Mặt', 'ko', '2022-06-06 04:51:39', '2022-06-06 04:46:31'),
(8, NULL, 1, 63, 2, NULL, 136000, 'Thanh Toán Tiền Mặt', '123123123', '2022-06-08 08:49:22', '2022-06-08 08:49:22'),
(9, NULL, 1, 67, 4, NULL, 592000, 'Thanh Toán Tiền Mặt', '123123123', '2022-06-08 08:49:22', '2022-06-08 08:49:22'),
(10, NULL, 1, 68, 6, NULL, 990000, 'Thanh Toán Tiền Mặt', '123123123', '2022-06-08 08:49:22', '2022-06-08 08:49:22'),
(11, NULL, 1, 66, 6, NULL, 1350000, 'Thanh Toán Tiền Mặt', '123123123', '2022-06-08 08:49:22', '2022-06-08 08:49:22'),
(12, NULL, 1, 70, 1, NULL, 195000, 'Paypal', 'sdfdsf', '2022-06-08 08:51:35', '2022-06-08 08:51:35'),
(13, NULL, 1, 64, 4, NULL, 272000, 'Thanh Toán Tiền Mặt', 'f', '2022-06-10 04:16:33', '2022-06-10 04:16:33'),
(14, NULL, 1, 70, 1, NULL, 195000, 'Thanh Toán Tiền Mặt', 'd', '2022-06-10 05:03:56', '2022-06-10 05:03:56'),
(15, NULL, 1, 66, 1, NULL, 225000, 'Thanh Toán Tiền Mặt', 'd', '2022-06-10 05:03:56', '2022-06-10 05:03:56'),
(16, NULL, 1, 67, 1, NULL, 148000, 'Paypal', '2\r\n13', '2022-06-10 05:39:30', '2022-06-10 05:39:30'),
(17, NULL, 1, 69, 1, NULL, 120000, 'Paypal', 'hup de', '2022-06-10 05:41:02', '2022-06-10 05:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 2, 5000, '2017-03-11 13:10:10', '0000-00-00 00:00:00'),
(2, 5, 12, 1, 10000, '2017-03-11 13:08:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT 0,
  `thanhtoan` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category_products`
--

CREATE TABLE `category_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_products`
--

INSERT INTO `category_products` (`id`, `name`) VALUES
(1, 'Món dùng ngay'),
(2, 'Món chế biến sẵn'),
(3, 'Đồ uống');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(5, 'Huong Huong', 'Nữ', 'huongnguyenak96@gmail.com', 'le thi rieng', '55555555', '55555555555555', '2016-11-14 08:25:57', '2016-11-14 08:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `create_at`, `update_at`) VALUES
(1, 'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".', 'Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất. ', 'sample1.jpg', '2017-03-11 06:20:23', '0000-00-00 00:00:00'),
(2, 'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', 'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ', 'sample2.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(3, 'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng', 'Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà ', 'sample3.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(4, 'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', 'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ', 'sample4.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00'),
(5, 'Phong cách mới trong sử dụng đồ gỗ nội thất gia đình', 'Đồ gỗ nội thất gia đình ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Phong cách sử dụng đồ gỗ hiện nay của các gia đình hầu h ', 'sample5.jpg', '2016-10-20 02:07:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `new`, `status`, `created_at`, `updated_at`) VALUES
(63, 'SALAD RAU MÙA SỐT CAM TASTY', 8, 'Salad rau mùa sốt cam TASTY là sự lựa chọn tuyệt vời cho các tín đồ yêu eat clean. Món ăn có đến 5 loại xà lách (carol, frise, lô lô tím, xà lách mỡ và radicchio tím) kết hợp cùng các loại trái cây như táo, cà chua, ô liu... mang lại nguồn vitamin tổng hợp dồi dào, hỗ trợ tăng cường đề kháng cho cơ thể. Điểm nhấn tạo nên nét chấm phá cho món nằm ở nước sốt cam độc đáo với vị chua ngọt tự nhiên dịu dàng. Salad rau mùa sốt cam TASTY thực sự là một bữa tiệc về màu sắc, xua tan cơn nóng mùa hè, đánh thức tối đa vị giác.', 68000, 0, 'salad-bo-1280x1000-4dbe.jpg', '1', 1, '2022-06-06 03:30:42', '2022-06-06 03:33:40'),
(64, 'SALAD RAU MÙA SỐT MÁC MÁC', 8, 'Salad rau mùa sốt mác mác được lựa chọn từ những loại rau củ ẩm thực phương Tây như xà lách lolo, xà lách carron, dầu oliu, kết hợp với hương đồng cỏ nội trong văn hoá ẩm thực Việt Nam là củ dền, táo đỏ, táo xanh, chanh dây và rau quế. Tất cả được hòa quyện dưới lớp sốt mác mác rau mùi được cấu thành bởi 3 thành phần chính là chanh dây, rau mùi và mayonaise, đem đến hương vị độc đáo, giàu vitamin C và chất xơ.', 68000, 0, '18-salad-rau-mua-3-fea4.jpg', '0', 1, '2022-06-06 03:39:22', '2022-06-06 03:39:22'),
(65, 'NEM CHUA TASTY', 8, 'Khác với các loại nem chua thông thường, Nem chua TASTY mang hương vị đặc trưng của người miền Bắc qua bàn tay tài hoa của các đầu bếp TASTY dễ dàng làm \"xiêu lòng\" mọi thực khách. Món ăn được chế biến hoàn toàn thủ công, trải qua nhiều công đoạn, kết hợp các nguyên liệu chất lượng như thịt heo nóng, da heo cùng các gia vị khác, sử dụng phương pháp lên men tự nhiên tạo nên vị chua ngậy đầy hấp dẫn. Một trong những nguyên liệu chủ đạo làm gia tăng mùi vị thơm lừng xen lẫn chút bùi bùi, béo béo là thính bắp rang chín vàng, không quá cháy cũng chẳng quá non. Nem chua TASTY dùng kèm với lá sung, đinh lăng, tỏi cô đơn và ớt hiểm chấm thêm tương ớt mang đến hương vị vừa quen, vừa lạ, là lựa chọn mà các tín đồ mê ăn vặt không thể bỏ qua.', 78000, 0, 'nem-chua-423b.jpg', '0', 1, '2022-06-06 03:48:05', '2022-06-06 03:48:05'),
(66, 'GÀ LẠNH Ủ MUỐI HOA TIÊU', 9, 'Gà lạnh ủ muối hoa tiêu món - món ăn tưởng chừng đơn giản nhưng đòi hỏi sự chăm chút kỹ lưỡng từ khâu lựa chọn nguyên liệu cho đến cách căn chỉnh nguyên liệu thật hài hòa. Loại gà được sử dụng trong món là gà ta thả vườn chính vì vậy thịt gà luôn đảm bảo chất lượng và có độ mềm dai vừa phải. Thêm vào đó, các đầu bếp TASTY còn sử dụng những gia vị hoàn toàn tự nhiên như: đinh hương, thảo quả, hoa hồi, quế cây, lá nguyệt quế, sả, gừng, nghệ tươi,... đi cùng đó là gia vị đặc biệt: muối hột và hoa tiêu. Đây cũng là một trong số những bí quyết giúp lớp da gà vàng ươm thêm giòn sần sật, thịt gà săn chắc, vị ngon ngọt đậm đà đồng thời thơm nồng mùi hoa tiêu hấp dẫn.', 225000, 0, 'ga-lanh-2782.jpg', '0', 1, '2022-06-06 04:11:30', '2022-06-06 04:11:30'),
(67, 'CÀ RI GÀ', 9, 'Với công thức đặc biệt được nghiên cứu từ các đầu bếp TASTY nhằm chinh phục khẩu vị tinh tế của người Việt, Cà ri gà TASTY là một món ngon không thể bỏ lỡ để đổi vị hoàn hảo cho mâm cơm tại gia. Từng miếng thịt gà ta mềm ngọt được tẩm ướp kĩ càng hòa quyện đều trong nước súp sánh ngọt của nước cốt dừa béo ngậy và khoai lang bùi bùi, hòa quyện cùng vị cay the nồng nàn của các loại gia vị, thích hợp ăn cùng cơm nóng hoặc ăn kèm bánh mì.', 148000, 0, 'ca-ri-ga-2-7986.jpg', '1', 1, '2022-06-06 04:12:26', '2022-06-06 04:12:26'),
(68, 'MÌ SOBA TÔM SỐT CAM CAY', 9, 'Mì soba tôm sốt cam cay là sự kết hợp đầy thú vị và sáng tạo của ẩm thực châu Á. Từ sợi mì soba xuất xứ Nhật Bản chứa nhiều protein, mangan, chất xơ và nhiều dưỡng chất tốt cho sức khỏe hòa quyện cùng vị ấn tượng của Nước sốt cam cay - Lấy ý tưởng từ sốt ớt nổi tiếng Singapore thêm biến tấu với nước cam cô đặc và thịt cua tạo ra hương vị mới lạ, đầy hấp dẫn. Chút nhấn nhá cùng phần tôm sú tươi tẩm ướp cẩn thận với gừng, vỏ quế và hoa hồi,...mang đến một món ăn độc đáo làm thực khách nhớ mãi.', 165000, 0, 'mi-soba-tom-1280x1000-b890.jpg', '1', 1, '2022-06-06 04:13:26', '2022-06-06 04:13:26'),
(69, 'CANH CHUA CÁ LÓC', 10, 'Canh chua cá lóc dưới sự chế biến của các đầu bếp TASTY Kitchen mang đến hương vị tuyệt hảo mà bạn chưa từng thưởng thức trước đây. Với phần nước canh trong vắt màu nâu hoàn toàn tự nhiên từ me, vị đậm đà thêm chút chua chua đặc sắc. Đi kèm đó là thịt cá lóc tươi ngon được xử lý tinh tế có mùi thơm hấp dẫn. Đặc biệt hơn, món ăn còn dễ dàng kích hoạt vị giác khi dậy mùi thơm của các loại rau nêm phong phú', 120000, 0, 'canh-chua-ca-loc-1280x1000-368f.jpg', '1', 1, '2022-06-06 04:14:50', '2022-06-06 04:14:50'),
(70, 'ĐỊA SÂM TIỀM TRÁI DỪA', 10, 'Địa sâm tiềm trái dừa được các đầu bếp TASTY Kitchen nâng tầm từ món ăn cổ truyền của Miền Bắc kết hợp nhiều nguyên liệu phong phú tốt cho sức khỏe. Với phần nước dùng chế biến từ địa sâm là một loại hải sản quý hiếm giàu axit amin, glyxin, các loại khoáng chất giúp thanh nhiệt dương khí. Thêm vào đó là bóng bì chứa nhiều collagen làm chậm quá trình lão hóa cùng tôm thẻ tươi ngon, ngọt thịt. Tất cả hòa quyện tạo nên món canh bổ dưỡng, thanh tao dễ hấp thụ, thích hợp trong mọi thời tiết.', 195000, 0, 'dia-sam-trai-dua-1280x1000-df54.jpg', '0', 1, '2022-06-06 04:16:23', '2022-06-09 09:08:46'),
(71, 'CANH MƯỚP HƯƠNG NHỒI THỊT', 10, 'Canh mướp hương nhồi thịt được xử lý đầy tinh tế mang đến vị ngọt thanh và hương thơm thoang thoảng kích thích vị giác. Mướp hương vốn là loại quả quen thuộc được nhiều người ưa thích có vị ngọt, tính mát cùng nhiều dưỡng chất tốt cho sức khỏe. Đặc biệt kết hợp với phần nhân làm từ tôm bạc thẻ, thịt heo xay, giò sống heo giúp tăng thêm vị đậm đà, sự dai giòn ấn tượng. Đi cùng vị ngọt thuần chất của các loại củ như su hào, bắp mỹ trái, hành baro, củ sắn...chắc chắn sẽ mang đến trải nghiệm khó quên.', 120000, 0, 'canh-muop-1280x1000-final-2109.jpg', '0', 0, '2022-06-06 04:17:03', '2022-06-06 04:17:03'),
(72, 'CƠM CHẢ CUA HOÀNG KIM', 11, 'Cơm chả cua hoàng kim với sự đặc biệt khi chả của được làm 100% thủ công. Từ khâu chọn lựa nguyên vật liệu chất lượng, đánh thịt làm giò sóng, sau đó kết hợp với các nguyên liệu như nấm mèo, miến, thịt cua miếng và thịt cua xé nhuyễn. Điểm nhấn đặc biệt nhất là trứng muối béo bùi, tất cả làm nên một hương vị chả cua chỉ có tại TASTY Kitchen. Chả cua được ăn kèm với cơm gạo ST25 hảo hạng, thơm ngon, dẻo bùi, cùng đồ chua được ngâm thủ công tại bếp đảm bảo chất lượng và hương vị độc đáo. Nước mắm được xem như linh hồn của món được pha chế công phu, khi độ ngọt thanh tự nhiên đến từ nước dừa tươi nấu lên làm thành thứ nước mắm đặc kẹo và là mảnh ghép cuối cùng cho sự tròn trịa hương vị của món tuy quen mà lạ.', 75000, 0, 'com-cha-cua-66f6.jpg', '0', 0, '2022-06-06 04:23:16', '2022-06-06 04:23:16'),
(73, 'CHÁO BÒ BẰM TRỨNG BẮC THẢO [RTC]', 13, '- Khuấy cháo nhẹ trong quá trình hâm, tránh cháy dưới đáy nồi và cháo bị tách lớp.\r\n\r\n - Không microwave bò xào, trứng bắc thảo trong bao hút chân không kín.\r\n\r\n - Ngon hơn khi dùng kèm tiêu xay, hành phi, hành lá, rau răm.', 74000, 0, 'bo-ham-cu-cai-af61.jpg', '0', 0, '2022-06-06 04:25:12', '2022-06-06 04:25:12'),
(74, 'CỦ SEN XÓC MUỐI RONG BIỂN 60 GR', 14, 'Sau khi mở nắp sử dụng hết trong 03 ngày.\r\n\r\nBảo quản nơi khô ráo, thoáng mát. Đậy kín nắp hộp khi sử dụng không hết.', 48000, 0, 'cu-sen-pho-mai-60gr-1b8f.jpg', '0', 0, '2022-06-06 04:26:32', '2022-06-06 04:26:57'),
(76, 'TRÀ SỮA KHOAI LANG VÀNG', 17, 'Sử dụng nguyên liệu khoai lang mật nông sản nổi tiếng tại Việt Nam, kết hợp cùng trà oolong, mang đến sản phẩm vừa quen thuộc vừa mới lạ. Thơm vị trà olong & khoai lang vàng, ngọt dịu', 48000, 0, 'tra-sua-khoai-lang-ac8e.jpg', '1', 0, '2022-06-06 04:29:21', '2022-06-06 04:30:35'),
(77, 'PHỞ CUỐN TASTY', 8, 'Thành phần :\r\nNạc vai bò Úc, bánh ướt, húng lủi, húng quế, ngò gai, giá sống, cà chua, hành phi, đậu phộng, nước mắm, đường cát Biên Hòa, giấm nuôi, tỏi lột, mè trắng, bột thịt gà, tiêu đen\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 28.33, Carbs - 24.93, Fats - 8.97 (Total Kcal - 293.77)', 82000, 0, 'pho-cuon-hn-1280x1000-7020.jpg', '0', 1, '2022-10-17 02:56:22', '2022-10-17 02:56:22'),
(78, 'Gỏi tai heo hoa chuối', 8, 'Thành phần :\r\nBa rọi heo, tai heo, bắp chuối, cà rốt, dưa leo, hành tây, ớt sừng, tỏi, rau răm, ngò rí, húng cây,...\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 16.0, Carbs - 55.2, Fat -10.2 (Total Kcal - 376.4)', 125000, 100000, 'goi-tai-heo-4443.jpg', '0', 1, '2022-10-17 02:57:50', '2022-10-17 02:57:50'),
(79, 'SALAD BÒ NAM BỘ', 8, 'Thành phần :\r\nThăn bò, húng quế, ngò gai, rau càng cua, lá cóc, lá quế vị, xà lách lô lô xanh, tắc, khế, cà pháo, hành tím, sả, ớt sừng, mè trắng, lá chanh thái\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 23.165, Carbs - 7.4, Fats - 6.1 (Total Kcal - 177.16)', 125000, 0, 'salad-bo-1280x1000-4dbe.jpg', '0', 1, '2022-10-17 03:00:11', '2022-10-17 03:00:11'),
(80, 'Sụn gà xóc muối Tây Ninh', 8, 'Thành phần :\r\nSụn gà, muối Tây Ninh, trứng gà, sả, nghệ, lá chanh, ớt sừng, hành phi, tỏi phi, tôm khô, chà bông heo, bột chiên xù\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\n Protein - 19, Carbs - 5.8, Fats - 4 (Total Kcal - 135.2)', 135000, 0, '2-d84e.jpg', '0', 1, '2022-10-17 03:01:18', '2022-10-17 03:01:18'),
(81, 'SALAD CÁ HỒI XÔNG KHÓI SỐT MÁC MÁC', 8, 'Thành phần :\r\nCá hồi xông khói, táo đỏ, táo xanh, củ dền, cà rốt, xà lách lolo, xà lách carron, chanh dây, dầu oliu, rau quế, mayonaise,...\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein: 11.2, Carbs: 14.4, Fat: 12.2, Total Kcal: 211.8', 150000, 0, '17-salad-ca-hoi-xong-khoi-sot-mac-mac-1-46f5.jpg', '0', 1, '2022-10-17 03:02:47', '2022-10-17 03:02:47'),
(82, 'CHẠO TÔM TASTY', 8, 'Thành phần :\r\nTôm, giò sống, mỡ lưng heo, trứng gà, sả, riềng, ngò rí, gừng, hành tím, dầu mè, bột ngọt, dầu màu điều, đường cát\r\n\r\n+ Nước chấm: Nước mắm, đường cát, thơm, bột ngọt, tỏi, ớt sừng, chanh Đà Lạt\r\n\r\n+ Ăn kèm: Bún tươi, bánh tráng, dưa leo, thơm gọt, khế chua, diếp cá, húng lủi, tía tô, ngò rí, lá quế, xà lách lô lô tím\r\n\r\n+ Trang trí: Dầu ăn Tường An, hành lá, đậu phộng, ớt sừng, hành boa-rô\r\n\r\n Khẩu phần:\r\n1 người\r\n Thời gian hoàn tất :\r\n10 - 12 phút\r\n\r\n Mô tả món :\r\nChạo tôm vốn là món ăn nổi tiếng ở cung đình Huế được tạo nên để dâng lên vua và quan tướng. Lấy cảm hứng đó, đội ngũ bếp TASTY đã khéo léo mang đến hương vị mới lạ nhưng vẫn giữ trọn vị đậm đà đặc trưng. Kết hợp từ các nguyên liệu tươi ngon như tôm tươi, giò sống, mỡ lưng heo, trứng gà thêm sả, riềng, gừng, ngò rí...trộn lên và quết cho đặc lại, sau đó cuộn cẩn thận bên ngoài cây sả, cuối cùng là nướng lên vàng ươm. Tất cả tạo nên độ mềm dai, mùi thơm phức cùng hương vị khó cưỡng. Khi thưởng thức, chạo tôm TASTY được dùng kèm bánh tráng cho thêm ít bún tươi, rau sống chấm với nước mắm tỏi ớt, chua ngọt chắc chắn sẽ khiến mọi thực khách say lòng.\r\n\r\n Hướng dẫn sử dụng :\r\nNgon hơn khi dùng nóng', 158000, 0, 'chao-tom-4e2c.jpg', '0', 1, '2022-10-17 03:11:44', '2022-10-17 03:11:44'),
(83, 'NEM LỤI NƯỚNG MÍA', 8, 'Thành phần :\r\nMỡ gáy, thịt nạc mông, giò sống heo, mía cây, màu thực phẩm, chất tạo độ dai thực phẩm, bột nở, bột bắp, tiêu đen, tiêu sọ trắng, sả cây, hành tím, tỏi, mật ong, mắm khô, bột ngũ vị hương, bột ngọt, đường cát\r\n\r\n+ Nước chấm: Nước mắm, đường phèn, tương ớt, mè trắng, ớt hiểm, bơ đậu phộng, ớt sừng, tỏi, tắc\r\n\r\n+ Ăn kèm: bún tươi, bánh tráng, dưa leo, thơm gọt, khế chua, diếp cá, húng lủi, tía tô, ngò rí, lá quế, xà lách lô lô tím\r\n\r\n+ Trang trí: Dầu ăn Tường An, hành lá, đậu phộng, ớt sừng, hành boa-rô\r\n\r\n Khẩu phần:\r\n1 người\r\n Thời gian hoàn tất :\r\n10 - 12 phút\r\n\r\n Mô tả món :\r\nNem lụi được biết đến là đặc sản của vùng đất kinh kỳ đồng thời là lựa chọn mà mọi tín đồ yêu thích ẩm thực không thể bỏ qua. Món ăn hấp dẫn ngay từ cái nhìn đầu tiên với màu sắc vàng ươm cùng mùi vị thơm lừng sau khi được nướng lên. Thực khách sẽ cảm nhận trọn vẹn vị đậm đà pha chút mềm dai của thịt heo, giò sống hài hòa với các gia vị đặc biệt. Thêm vào đó, Nem lụi TASTY còn ngon hơn khi dùng kèm bánh tráng, bún tươi, rau sống và nước chấm sền sệt, vị bùi ngậy do chính các đầu bếp TASTY sáng tạo.\r\n\r\n Hướng dẫn sử dụng :\r\nNgon hơn khi dùng nóng', 158000, 0, 'nem-lui-434c.jpg', '0', 1, '2022-10-17 03:13:26', '2022-10-17 03:13:26'),
(84, 'GÀ CUỐN LÁ DỨA', 9, 'Thành phần :\r\nĐùi gà, lá dứa, xà lách lô lô xanh, xà lách lô lô tím, cà chua bi, hành tây tím, đường cát, tiêu sọ trắng, bột bắp, bột chiên giòn, bột năng, dầu mè, tỏi xay, ngò rí, nước tương, dầu ăn\r\n\r\n+ Sốt chấm: mè trắng, đường thốt nốt, nước tương đậu nành, hắc xì dầu, dầu mè\r\n\r\n+ Sốt xà lách: giấm trắng, muối, tiêu đen, tỏi xay, hành tím, đường cát\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 36.82, Carbs - 1.9, Fats - 26 (Total Kcal - 388.88)\r\n\r\n Thời gian hoàn tất :\r\n15 phút\r\n\r\n Mô tả món :\r\nGà cuốn lá dứa là món ăn mang phong vị ẩm thực Thái Lan, đã được các đầu bếp TASTY Kitchen biến tấu mang đầy mới mẻ và phù hợp với khẩu vị người Việt. Thịt gà lóc xương, giữ nguyên da cắt miếng vừa ăn tẩm ướp suốt hơn 3 tiếng cùng các gia vị đặc trưng của Việt Nam như tỏi, dầu hào, điều,...cân chỉnh với tỷ lệ thích hợp. Thêm điểm nhấn khi kết hợp mùi thơm tự nhiên của lá dứa được trồng tại Đà Lạt cuốn cẩn thận với gà và chiên giòn hấp dẫn. Không chỉ dễ dàng chiêu đãi vị giác món ăn còn mang lại giá trị dinh dưỡng cao, rất tốt cho tim mạch.', 168000, 150000, 'ga-cuon-la-dua-1280x1000-628f.jpg', '0', 1, '2022-10-17 03:16:47', '2022-10-17 03:16:47'),
(85, 'BA RỌI CHIÊN MẮM NGÒ', 9, 'Thành phần :\r\nThịt ba rọi rút sườn Ba Lan, bột chiên giòn, gạo thái, ngò rí, tỏi củ, sả cây, tắc, ớt sừng, dưa leo, ngò rí, ớt hiểm, thơm gọt, húng quế, húng lủi, lô lô xanh, lô lô tím, dầu ăn, đường cát, tương ớt, nước mắm, giấm gạo\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 16.7, Carbs - 0, Fats - 30.9 (Total Kcal - 344.9)\r\n\r\n Thời gian hoàn tất :\r\n15 phút\r\n\r\n Mô tả món :\r\nBa rọi chiên mắm ngò là sự sáng tạo được khơi nguồn từ món ba rọi chiên mắm vốn đã quen thuộc trong bữa cơm người Việt, giúp nâng tầm tinh túy ẩm thực dân gian và mang lại trải nghiệm hoàn toàn mới cho thực khách. Bằng cách xử lý tinh tế, miếng thịt ba rọi chiên giòn kết hợp cùng sốt nước mắm thơm thêm chút vị chua thanh nhẹ của tắc tươi, phảng phất mùi ngò rí tạo nên sự cân bằng tuyệt hảo. Món ăn sẽ tuyệt vời hơn khi thưởng thức kèm rau thơm và kim chi hấp dẫn.', 145000, 0, 'ba-roi-mam-ngo-1280x1000-9503.jpg', '0', 1, '2022-10-17 03:18:21', '2022-10-17 03:18:21'),
(86, 'ỨC GÀ ĐÚT LÒ PHỦ LÁ CHANH', 9, 'Thành phần :\r\nThịt ức gà, Thịt heo xay, giò sống, nấm mèo, nấm đông cô, tỏi, ớt sừng, phô mai Parmessan, lá chanh, ngũ vị hương, bột ớt cựa gà, bột hành tây, bột ngò, bột tỏi\r\n\r\n+ Sốt ngò gai: ngò gai, húng lủi, ớt hiểm, sữa đặc, mayonnaise, chanh\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 62.5, Carbs - 4.61, Fats - 14.6 (Total Kcal - 399.84)\r\n\r\n Thời gian hoàn tất :\r\n15 phút\r\n\r\n Mô tả món :\r\nSử dụng phương pháp nướng cách thủy đặc biệt mang đến hương vị mới mẻ cho món Ức gà đút lò phủ lá chanh vừa giữ được sự mềm dai vừa thấm đều nước sốt hấp dẫn. Với thành phần ức gà giàu đạm, ít béo, kết hợp cùng lá chanh, lá dứa, thịt heo và các loại nấm tạo nên một món ăn đậm đà từ hương đến vị khi dùng kèm cơm trắng. Không chỉ thơm ngon, món ăn còn cung cấp dinh dưỡng phù hợp, là lựa chọn không thể bỏ qua của người ăn kiêng', 185000, 0, 'uc-ga-bb75-min-4c96.jpg', '1', 1, '2022-10-17 03:19:14', '2022-10-17 03:19:14'),
(87, 'BA RỌI NƯỚNG RIỀNG MẺ', 9, 'Thành phần :\r\nThịt ba rọi rút sườn Ba Lan, mắm tôm, cơm mẽ, hành tím, riềng củ, húng lủi, lá mơ, ngò gai, sả, ớt hiểm, mè trắng, dầu hào\r\n\r\n+ Sốt chấm riềng mẻ: riềng củ, sả cây, hành tím, tỏi, ớt hiểm, cơm mẻ, nghệ, mắm tôm, màu điều, thịt ba chỉ xay\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 43.9, Carbs - 13, Fats - 53.75 (Total Kcal - 711.35)\r\n\r\n Thời gian hoàn tất :\r\n20 phút\r\n\r\n Mô tả món :\r\nBa rọi nướng riềng mẻ là món ăn đặc trưng của người miền Bắc. Với những miếng thịt ba rọi rút sườn tẩm ướp cẩn thận trong nhiều giờ cùng riềng, mẻ và các gia vị đặc biệt được nướng lên thơm lừng. Vị chua, cay nhẹ đầy hấp dẫn của từng miếng thịt khi thưởng thức kèm cơm nóng sẽ mang đến trải nghiệm vị giác ấn tượng không thể bỏ qua.', 155000, 0, 'ba-chi-nuong-1280x1000-4196.jpg', '0', 1, '2022-10-17 03:20:55', '2022-10-17 03:20:55'),
(88, 'BỒ CÂU NƯỚNG ĐỒNG QUÊ', 9, 'Thành phần :\r\nBồ câu Pháp, lá mắc mật, riềng củ, lá dứa, hạt dổi, mắc khén, sả, tỏi, hành tím, ớt sừng, dầu hào, mật ong\r\n\r\n+ Sốt cay TASTY: Ớt hiểm đỏ, ớt sừng đỏ, nước mắm Hưng Thịnh, đường cát trắng, bột ngọt, chanh, chanh dây, tỏi cô đơn, muối thái, mayonaise, sữa đặc NSPN, lá chúc\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 56.28, Carbs - 31.4, Fats - 29.3 (Total Kcal - 614.42)\r\n\r\n Thời gian hoàn tất :\r\n25 phút\r\n\r\n Mô tả món :\r\nVới vị ngọt tự nhiên thuần chất của thịt bồ câu hòa quyện cùng mùi thơm đặc trưng của mắc khén, lá mắc mật cùng các gia vị đặc biệt, món Bồ câu nướng đồng quê chắc chắn sẽ mang đến một trải nghiệm vị giác đầy hấp dẫn. Hơn thế nữa, đây còn là món ăn giàu dinh dưỡng giúp bồi bổ cho cơ thể và phù hợp với mọi độ tuổi.', 275000, 0, 'a1-f996.jpg', '0', 1, '2022-10-17 03:22:09', '2022-10-17 03:22:09'),
(89, 'Cơm đùi gà chiên giòn', 11, 'Thành phần :\r\nĐùi gà góc 4, muối thái, đường cát, bột thịt gà, hạt nêm heo, bột ngọt, hạt điều, dầu ăn, hành tím, hành lá, gừng củ, gạo tài nguyên, mỡ gà, nghệ củ, trứng gà, ngò gai, nghệ củ\r\n\r\n+ Nước mắm pha tỏi, ớt: Nước dừa tươi, đường phèn, nước mắm, tỏi, ớt sừng\r\n\r\n+ Đồ chua: Cà rốt ngâm chua, đu đủ ngâm chua, giấm gạo, muối Thái, đường cát\r\n\r\n+ Ăn kèm: dưa leo, cà chua, xà lách\r\n\r\n Khẩu phần:\r\n1 người\r\n Thời gian hoàn tất :\r\n12 phút \r\n\r\n Mô tả món :\r\nCơm đùi gà chiên giòn vốn là món ăn quen thuộc với nhiều người nhưng với sự tinh tế của các đầu bếp TASTY giúp mang đến hương vị mới mẻ, đầy hấp dẫn. Phần đùi gà góc tư được tẩm ướp gia vị trong thời gian vừa đủ sau đó chiên cho lớp da vàng đều và giòn rụm còn phần thịt bên trong đảm bảo mềm dai, vị đậm đà, ngon ngọt tự nhiên. Khi thưởng thức, thực khách dùng kèm cơm nóng dẻo thêm chút cà rốt, đu đủ ngâm chua đặc biệt là phần nước mắm chấm tỏi ớt được pha chế từ nước dừa tươi càng giúp \"đổi gió\" cho món ăn thân thuộc.', 58000, 0, 'com-dui-ga-bb3e.jpg', '1', 1, '2022-10-17 03:24:44', '2022-10-17 03:24:44'),
(90, 'CƠM SƯỜN NƯỚNG', 11, 'Thành phần :\r\nSườn cốt lết, gạo ST25, sữa tươi (Ướp sườn), baking soda, dầu hào, nước tương, tiêu đen, bột ngọt, hạt nêm, bột ngũ vị hương, tương ớt, đường cát, mật ong, nước màu gạch tôm, rượu vodka, hành tím, tỏi, hành lá, sả\r\n\r\n+ Nước mắm pha tỏi, ớt: Nước dừa tươi, đường phèn, nước mắm, giấm trắng, tỏi, ớt sừng\r\n\r\n+ Đồ chua: cà rốt ngâm chua, đu đủ ngâm chua, giấm gạo, muối Thái, đường cát\r\n\r\n+ Ăn kèm: Dưa leo, cà chua\r\n\r\n Khẩu phần:\r\n1 người\r\n Thời gian hoàn tất :\r\n12 phút \r\n\r\n Mô tả món :\r\nCơm sườn nướng sẽ gây ấn tượng với thực khách ngay từ lần đầu tiên với sự mềm thơm, đầy vị và mọng nước của miếng sườn, không hề khô rang như những nơi khác. Với tổng thời gian tẩm ướp lên đến 8 tiếng, với 4 tiếng ngâm sữa tươi và 4h tiếng ướp gia vị, giúp miếng sườn giữ được độ thơm mềm và hương vị đậm đà tròn trịa. Nước mắm được xem như linh hồn của món được pha chế công phu, khi độ ngọt thanh tự nhiên đến từ nước dừa tươi nấu lên làm thành thứ nước mắm đặc kẹo và là mảnh ghép cuối cùng cho sự tròn trịa hương vị của món tuy quen mà lạ.Món sườn ăn kèm với cơm gạo ST25 hảo hạng, thơm ngon, dẻo bùi, cùng đồ chua được ngâm thủ công tại bếp đảm bảo chất lượng và hương vị độc đáo.', 65000, 0, 'com-suon-nuong-afed.jpg', '1', 1, '2022-10-17 03:25:58', '2022-10-17 03:26:30'),
(91, 'BÚN BÒ TASTY', 11, 'Thành phần :\r\n+ Topping: Chả cua, gầu bò, ngò gai, rau răm, hành lá, hành tây\r\n\r\n+ Ăn kèm: Bún tươi, rau muống bào, bắp chuối bào, giá sống, ngò gai, chanh không hạt, ớt Batri, Sa tế khô, rau quế, húng quế\r\n\r\n+ Nước lèo: Xương ống bò, xương bánh chè heo, tôm khô, tỏi, hành tím, hành tây, ớt sừng, sả cây, sa tế, dầu ăn, đường phèn, đường cát, bột ngọt, nước mắm\r\n\r\n Khẩu phần:\r\n1 người\r\n Thời gian hoàn tất :\r\n10 phút\r\n\r\n Mô tả món :\r\nBún bò món ăn truyền thống, niềm tự hào của ẩm thực vùng đất kinh kỳ nay đã có trong thực đơn của TASTY với phiên bản đầy mới mẻ đủ khiến mọi thực khách phải xuýt xoa. Để chế biến món bún bò TASTY đặc biệt  cần trải qua nhiều công đoạn nhưng quan trọng nhất vẫn là nước lèo - “linh hồn” của món vì cần ninh xương trong hàng giờ liền kết hợp các gia vị và nguyên liệu đặc trưng từ sả tươi, sa tế, ớt sừng, hành tím...đến tôm khô tạo nên màu sắc bắt mắt, dậy mùi thơm phức cùng hương vị đậm đà. Đặc biệt, món ăn còn hấp dẫn bởi phần gầu bò hầm kỹ, chả cua ngọt thịt. Khi thưởng thức, thực khách vắt thêm miếng chanh, thả chút ớt và các loại rau sống tươi ngon chắc chắn sẽ mang đến trải nghiệm khó quên.', 65000, 0, 'bun-bo-2-18b2.jpg', '0', 1, '2022-10-17 03:29:57', '2022-10-17 03:29:57'),
(92, 'BÚN BÒ TASTY ĐẶC BIỆT (BÚN BÒ GIÒ HEO)', 11, 'Thành phần :\r\n+ Topping: Chả cua, gầu bò, giò heo (tô đặc biệt), ngò gai, rau răm, hành lá, hành tây\r\n\r\n+ Ăn kèm: Bún tươi, rau muống bào, bắp chuối bào, giá sống, ngò gai, chanh không hạt, ớt Batri, Sa tế khô, rau quế, húng quế\r\n\r\n+ Nước lèo: Xương ống bò, xương bánh chè heo, tôm khô, tỏi, hành tím, hành tây, ớt sừng, sả cây, sa tế, dầu ăn, đường phèn, đường cát, bột ngọt, nước mắm\r\n\r\n Khẩu phần:\r\n1 người\r\n Thời gian hoàn tất :\r\n10 phút\r\n Mô tả món :\r\nBún bò món ăn truyền thống, niềm tự hào của ẩm thực vùng đất kinh kỳ nay đã có trong thực đơn của TASTY với phiên bản đầy mới mẻ đủ khiến mọi thực khách phải xuýt xoa. Để chế biến món bún bò TASTY đặc biệt  cần trải qua nhiều công đoạn nhưng quan trọng nhất vẫn là nước lèo - “linh hồn” của món vì cần ninh xương trong hàng giờ liền kết hợp các gia vị và nguyên liệu đặc trưng từ sả tươi, sa tế, ớt sừng, hành tím...đến tôm khô tạo nên màu sắc bắt mắt, dậy mùi thơm phức cùng hương vị đậm đà. Đặc biệt, món ăn còn hấp dẫn bởi phần gầu bò hầm kỹ, chả cua ngọt thịt, hơn hết là khoanh giò heo mềm dai, chất lượng. Khi thưởng thức, thực khách vắt thêm miếng chanh, thả chút ớt và các loại rau sống tươi ngon chắc chắn sẽ mang đến trải nghiệm khó quên.', 85000, 80000, 'bun-bo-tasty-dac-biet-bf78.jpg', '0', 1, '2022-10-17 03:31:05', '2022-10-17 03:31:05'),
(93, 'CHÁO SƯỜN', 11, 'Thành phần :\r\nCháo xay nhuyễn, thịt heo xay, nấm đông cô, sườn, hành, ngò, hành phi, ớt\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 15.2, Carbs - 48.35, Fats - 15 (Total Kcal - 389.2)\r\n\r\n Thời gian hoàn tất :\r\n15 phút\r\n\r\n Mô tả món :\r\nMón Cháo sườn tại TASTY Kitchen được xử lý tinh tế từ những hạt gạo xay nhỏ nấu cùng sườn non và nước hầm xương đạt đến thời gian tiêu chuẩn. Thêm vào đó, kết hợp cùng các nguyên liệu đặc biệt để cho ra đời món cháo nhuyễn mịn màng với hương vị hấp dẫn, ngon ngọt tự nhiên, yêu chiều vị giác thực khách ở mọi độ tuổi từ người lớn đến trẻ nhỏ. Món ăn sẽ thêm phần tròn vị khi dùng kèm bánh quẩy bắc.', 85000, 0, 'chao-suon-1280x1000-977d.jpg', '0', 1, '2022-10-17 03:31:58', '2022-10-17 03:31:58'),
(94, 'CHÁO BÒ BẰM VÀ TRỨNG BẮC THẢO', 11, 'Thành phần :\r\nCháo còn hạt, thăn bò bằm, trứng bắc thảo, khoai môn sáp vàng, đậu bắp, rau răm, hành lá, hành phi, giá sống\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 16.7, Carbs - 50.15, Fats - 6.3 (Total Kcal - 324.1)\r\n\r\n Thời gian hoàn tất :\r\n15 phút\r\n\r\n Mô tả món :\r\nCháo bò bằm và trứng bắc thảo là một món dễ ăn mà lại vô cùng bổ dưỡng. Cháo được nấu từ nước dùng xương hầm bò trong suốt 8 tiếng liền, tạo nên độ đậm đà và dinh dưỡng cho món ăn. Thịt bò giàu đạm, kết hợp cùng trứng bắc thảo béo bùi và giàu Vitamin A, là món ăn phù hợp cho nhiều đối tượng.', 85000, 0, 'chao-bo-bam-1280x1000-dd47.jpg', '0', 1, '2022-10-17 03:32:48', '2022-10-17 03:32:48'),
(95, 'HỦ TIẾU ÁP CHẢO BÒ', 11, 'Thành phần :\r\nThăn bò, hủ tiếu mềm, nước hầm xương gà, cà rốt, cải thìa, nấm đông cô, giá sống, hẹ lá, hành lá, dầu ăn, tỏi củ, hành tím, bột năng, dầu hào, nước tương, mạch nha, đường phèn.\r\n\r\n Khẩu phần:\r\n1 - 2 người\r\n Thời gian hoàn tất :\r\n12 phút\r\n\r\n Mô tả món :\r\nHủ tiếu bò áp chảo là món ăn tuyệt hảo sử dụng phương pháp áp chảo vốn đã rất nổi tiếng ở nhiều nước Phương Tây. Qua lớp dầu nóng giúp các nguyên liệu chín nhanh ở nhiệt độ cao, lưu giữ được độ giòn, vị ngọt tự nhiên, đặc biệt hơn hết là màu sắc bắt mắt và hương vị thơm ngon khó cưỡng của phần thịt bò phi lê đậm đà hài hòa cùng từng sợi hủ tiếu mềm mỏng hấp dẫn. Với hàm lượng dinh dưỡng phù hợp, giàu chất sơ từ các loại rau củ, món ăn chắc chắn là lựa chọn lý tưởng vào các bữa ăn trong ngày.', 99000, 0, 'hu-tieu-bo-ap-chao-1280x1000-17b4.jpg', '1', 1, '2022-10-17 03:34:34', '2022-10-17 03:34:34'),
(96, 'CƠM SƯỜN NƯỚNG CHẢ CUA HOÀNG KIM', 11, 'Thành phần :\r\nSườn cốt lết, mai cua, thịt heo xay, chả cua, thịt cua, trứng gà, trứng vịt muối, gạo ST25, sữa tươi (Ướp sườn), baking soda, dầu hào, nước tương, tiêu đen, bột ngọt, hạt nêm, bột ngũ vị hương, tương ớt, đường cát, mật ong, nước màu gạch tôm, rượu vodka, hành tím, bún tàu, nấm mèo, củ sắn, ngò rí, dầu ăn, hành lá, sả, tiêu đen xay, dầu màu điều\r\n\r\n+ Nước mắm pha tỏi, ớt: Nước dừa tươi, đường phèn, nước mắm, giấm trắng, tỏi, ớt sừng, \r\n\r\n+ Đồ chua: cà rốt ngâm chua, đu đủ ngâm chua, giấm gạo, muối Thái, đường cát\r\n\r\n+ Ăn kèm: Dưa leo, cà chua\r\n\r\n Khẩu phần:\r\n1 người\r\n Thời gian hoàn tất :\r\n12 phút \r\n\r\n Mô tả món :\r\nCơm sườn nướng chả cua hoàng kim nên là món nhất định phải thử trong menu của TASTY. Với sự kết hợp của sườn được chế biến tẩm ướp công phu và chả của làm 100% thủ công với công thức độc quyền của TASTY. Với tổng thời gian tẩm ướp lên đến 8 tiếng, với 4 tiếng ngâm sữa tươi và 4h tiếng ướp gia vị, giúp miếng sườn giữ được độ thơm mềm và hương vị đậm đà tròn trịa. Và chả cua được là từ giò sóng đánh từ thịt tươi tại bếp, sau đó kết hợp với các nguyên liệu như nấm mèo, miến, thịt cua miếng và thịt cua xé nhuyễn. Điểm nhấn đặc biệt nhất là trứng muối béo bùi, tất cả làm nên một hương vị chả cua chỉ có tại TASTY Kitchen. Món ăn dùng kèm với cơm gạo ST25 hảo hạng, thơm ngon, dẻo bùi, cùng đồ chua được ngâm thủ công tại bếp đảm bảo chất lượng và hương vị độc đáo. Nước mắm được xem như linh hồn của món được pha chế công phu, khi độ ngọt thanh tự nhiên đến từ nước dừa tươi nấu lên làm thành thứ nước mắm đặc kẹo và là mảnh ghép cuối cùng cho sự tròn trịa hương vị của món đặc biệt này.', 99000, 0, 'com-suon-cha-cua-7c0c.jpg', '1', 1, '2022-10-17 03:35:33', '2022-10-17 03:35:33'),
(97, 'MÌ SPAGHETTI SỐT KEM NẤM', 11, 'Thành phần :\r\nMì spaghetti, ba chỉ xông khói (Bacon), tỏi, hành tây, nấm đông cô, nấm đùi gà, kem sữa nấu, sữa tươi tiệt trùng, trứng gà, phô mai parmesan, dầu ô-liu extra virgin, bơ lạt Anchor, đường cát, muối, tiêu đen\r\n\r\n+ Trang trí: ngò tây\r\n\r\n+ Ăn kèm: phô mai parmesan\r\n\r\n Khẩu phần:\r\n1 người\r\n Thời gian hoàn tất :\r\n10 phút\r\n\r\n Mô tả món :\r\nMì spaghetti sốt kem là món ăn đặc biệt không thể bỏ qua của mọi tín đồ yêu thích ẩm thực nước Ý. Với từng sợi mì vàng óng, mềm dai đấm mình trong nước sốt sền sệt vị béo ngậy, phảng phất mùi thơm đầy hấp dẫn cân bằng với vị mằn mặn của từng lát thịt ba chỉ xông khói, nhấn nhá thêm chút vị ngọt tự nhiên từ nấm đông cô, nấm đùi gà và chẳng thể thiếu một lớp phô mai parmesan bào nhuyển phủ đều bên trên, tất cả hòa quyện mang đến hương vị thơm ngon đúng điệu, dễ dàng đánh thức vị giác của mọi thực khách.\r\n\r\n Hướng dẫn sử dụng :\r\nNgon hơn khi dùng nóng', 99000, 0, 'my-y-kem-nam-2-b720.jpg', '0', 1, '2022-10-17 03:36:34', '2022-10-17 03:36:34'),
(98, 'MÌ SPAGHETTI SỐT BÒ BẰM', 11, 'Thành phần :\r\nMì spaghetti, thịt bò xay, ớt hiểm đỏ, hành tây, ngò tây, quế tây, sốt cà chua, lá nguyệt quế, muối, tiêu đen, đường, phô mai parmesan, dầu ô-liu extra virgin, bơ lạt Anchor, tỏi\r\n\r\n+ Trang trí: ngò tây\r\n\r\n \r\n\r\n+ Ăn kèm: phô mai parmesan\r\n\r\n Khẩu phần:\r\n1 người\r\n Thời gian hoàn tất :\r\n10 phút\r\n\r\n Mô tả món :\r\nVới món mì spaghetti sốt bò bằm, TASTY muốn mang tới thực khách trải nghiệm nét đặc trưng trong văn hóa ẩm thực nước Ý nhưng được sáng tạo trong công thức nước sốt để phù hợp với khẩu vị người Việt. Phần nước sốt bò bằm là sự hòa quyện của nhiều nguyên liệu, mang màu đỏ nổi bật từ sốt cà chua và rượu vang, cùng với hương thơm béo ngậy của phô mai Parmesan và hương thơm đặc trưng của thịt bò. Sợi mì tơi, vàng óng, mềm dai hòa quyện với lớp sốt thịt bò bằm phô mai thơm ngọt đậm đà sẽ đem đến cho thực khách những trải nghiệm ẩm thực khó quên.\r\n\r\n Hướng dẫn sử dụng :\r\nNgon hơn khi dùng nóng', 99000, 0, 'my-y-bo-bam-2-59b9.jpg', '0', 1, '2022-10-17 03:38:08', '2022-10-17 03:38:08'),
(99, 'CƠM CHIÊN THỊT CUA LÁ CẨM', 11, 'Thành phần :\r\nGạo Basmati, trứng gà (vỏ trứng cuộn), thịt cua, thanh cua, trứng cá chuồn, giá sống, hành lá, gừng, bắp mỹ, lá cẩm, hạt nêm heo, muối, đường cát, dầu ăn, bột mì, trứng gà, ớt chuông đỏ, ớt sừng xanh, ngò rí\r\n+ Nước tương pha tỏi, ớt: nước tương Nam Dương, tỏi bằm,ớt sừng bằm\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 21.9, Carbs - 71.15, Fats - 1.7 (Total Kcal - 387.5)\r\n\r\n Thời gian hoàn tất :\r\n15 phút\r\n\r\n Mô tả món :\r\nCơm chiên thịt cua lá cẩm là món ăn đạt điểm tuyệt đối từ hình thức đến hương vị. Sử dụng nguyên liệu gạo Basmati Malika giàu dinh dưỡng được nhập khẩu từ Ấn Độ giúp hạt cơm luôn tơi xốp, không bị dính. Kết hợp cùng lá cẩm, một loại thảo dược tốt cho sức khỏe và tạo nên màu tím bắt mắt điểm xuyến với màu trắng từ thịt cua tươi ngon và màu vàng hấp dẫn của bắp mỹ. Món ăn gói cầu kỳ bên trong lớp trứng mỏng giúp lưu giữ độ nóng và vị đậm đà tuyệt hảo.', 89000, 0, 'com-chien-la-cam-aee6.jpg', '0', 1, '2022-10-17 03:39:38', '2022-10-17 03:39:38'),
(100, 'CƠM CHIÊN HẢI SẢN TASTY', 11, 'Thành phần :\r\nGạo basmati, Trứng gà, tôm, thanh cua, trứng cá chuồn, bắp hạt, cà rốt, đậu Hà Lan, hành lá, ớt sừng, tỏi, nghệ, mỡ gà, bột gạo, dầu hào\r\n\r\n+ Nước tương pha tỏi, ớt: nước tương, tỏi, ớt sừng\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 23.2, Carbs - 72.05, Fats - 8.05 (Total Kcal - 453.45)\r\n\r\n Thời gian hoàn tất :\r\n15 phút\r\n\r\n Mô tả món :\r\nCơm chiên hải sản TASTY mang đến hương vị đặc sắc khi dùng nguyên liệu chính là gạo Basmati - môt loại gạo Ấn Độ với những công dụng tuyệt vời cho sức khỏe, cộng hưởng vị ngọt tự nhiên của tôm tươi, thanh cua, trứng cua cùng các nguyên liệu và gia vị phong phú. Bên cạnh đó, lớp trứng bao phủ bên ngoài sẽ giúp lưu giữ độ nóng và hương vị món ăn được nguyên vẹn khi đến tay thực khách.', 89000, 0, 'com-chien-1280x1000-min-4d48.jpg', '0', 1, '2022-10-17 03:40:29', '2022-10-17 03:40:29'),
(101, 'MIẾN XÀO THỊT CUA', 11, 'Thành phần :\r\nThịt cua, miến, nước hầm xương heo, gừng, rau răm, nấm mèo, trứng gà, bột thịt gà, tiêu đen, đường cát, dầu ăn, hành phi, lá chuối, ngò rí, xương ống heo, củ sắn, hành tây, bắp mỹ, cà rốt, hành tím, hoa hồi, quế cây\r\n\r\n Khẩu phần:\r\n1 người\r\n Năng lượng :\r\nProtein - 17.99, Carbs - 20.85, Fats - 6.3 (Total Kcal - 212.06)\r\n\r\n Thời gian hoàn tất :\r\n15 phút\r\n\r\n Mô tả món :\r\nMiến xào thịt cua trở nên đặc biệt khi từng sợi miến được làm thủ công từ các vị đầu bếp tài ba của TASTY Kitchen. Chọn lọc những hạt gạo chất lượng nhất của vùng đồng bằng sông Hồng và đồng bằng sông Cửu Long, trải qua quá trình xử lý công phu từ ủ gạo, xay nhuyễn, tạo thành sợi nhỏ rồi phơi khô mang đến sợi miến gạo dẻo dai, vị thơm ngon, giàu dinh dưỡng. Món ăn càng hoàn hảo hơn khi hòa quyện cùng vị ngọt tự nhiên của thịt cua Cà Mau nổi tiếng xào với ít nước lèo gà, nấm mèo, hành tây,...gói trọn bên trong lớp trứng vàng ươm tạo nên màu sắc bắt mắt cùng hương vị hấp dẫn, giúp món ăn luôn giữ nhiệt tốt nhất.', 158000, 0, 'mien-xao-cua-0789.jpg', '0', 1, '2022-10-17 03:41:29', '2022-10-17 03:41:29'),
(102, 'MÌ SOBA CÁ HỒI', 11, 'Thành phần :\r\nCá hồi, mì soba, nước tương, đường cát, rượu ngọt – mirin, giấm gạo, dầu mè, tỏi lột, gừng củ, tiêu đen, cà rốt, hành tây, ớt chuông, cải cầu vồng, cải bó xôi, bắp cải tím\r\n\r\n+ Trang trí: Củ thì là, ớt sừng\r\n\r\n Khẩu phần:\r\n1 người\r\n Thời gian hoàn tất :\r\n12 phút\r\n\r\n Mô tả món :\r\nMì soba cá hồi tại TASTY được biến tấu từ những sợi mì làm từ bột kiều mạch giàu dinh dưỡng, biểu trưng cho sự trường thọ trong ẩm thực Nhật Bản. Món ăn kết hợp giữa cá hồi phi lê được xử lý tinh tế giúp giữ trọn hương vị ngon ngọt thuần chất xen lẫn vị béo mềm hấp dẫn. Đặc biệt, món mì còn điểm xuyến thêm các rau củ tươi xanh, đẹp mắt mang đến hương vị mới mẻ phù hợp cho những thực khách coi trọng việc ăn uống để nâng cao sức khỏe.', 165000, 0, 'mi-soba-ca-hoi-1280x1000-6243.jpg', '0', 1, '2022-10-17 03:42:21', '2022-10-17 03:42:21'),
(103, 'BÁNH CHUỐI HẤP', 12, 'Thành phần :\r\n+ Bánh chuối: Chuối sứ chín, đường vàng, muối Thái, hương va-ni, rượu vodka, tinh dầu chuối, bột năng, dầu hạt cải, bột nếp, màu vàng thực phẩm\r\n\r\n+ Nước cốt dừa: nước cốt dừa, sữa đặc, đường cát, bột năng, muối Thái, lá dứa\r\n\r\n+ Trang trí: đậu phộng, mè trắng, lá chuối\r\n\r\n \r\n\r\n Khẩu phần:\r\n1 - 2 người\r\n Thời gian hoàn tất :\r\n6 phút\r\n\r\n Mô tả món :\r\nBánh chuối hấp là một món ăn vặt dân dã của nền ẩm thực Việt. Các đầu bếp của TASTY đã khéo léo kết hợp vị ngọt ngào của những quả chuối sứ chín thơm lừng cùng nước cốt dừa béo ngậy, nhấn nhá một chút hương rượu vodka để gia tăng sự độc đáo trong hương vị từng miếng bánh. Là sự giao thoa tinh tế giữa ẩm thực truyền thống và hơi thở hiện đại, từng miếng bánh chuối dẻo dai được phủ một lớp nước cốt dừa thơm béo, tuy giản dị song lại có sức hấp dẫn lạ lùng với các thực khách gần xa.', 28000, 0, 'banh-chuoi-7e91.jpg', '1', 1, '2022-10-17 03:49:58', '2022-10-17 03:49:58'),
(104, 'DƯƠNG CHI CAM LỘ', 12, 'Thành phần :\r\nPuree xoài, xoài tươi, tép bưởi da xanh, bột báng\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nDương chi cam lộ là một món tráng miệng xuất phát từ Hongkong với nguyên liệu chính là bưởi chùm (bưởi, xoài và bột mì). Dựa theo hương vị nguyên bản, các bếp trưởng TASTY đã điều chỉnh món ăn theo khẩu vị người Việt Nam bằng việc kết hợp các nguyên liệu nội địa cao cấp: xoài cát Hòa Lộc, bưởi Năm Roi, sữa hoa hồng... Với hương vị chua ngọt, thanh mát đến từ hoa quả, dương chi cam lộ sẽ làm vị giác của bạn dịu lại sau mỗi bữa ăn. Món ăn cũng chứa nhiều thành phần dinh dưõng (vitamin A, C, D & khoáng chất) góp phần làm đẹp da và cải thiện hệ thống tiêu hóa.', 55000, 0, 'duong-chi-cam-lo-1280x1000-2-7424.jpg', '0', 1, '2022-10-17 03:51:23', '2022-10-17 03:51:23'),
(105, 'NHA ĐAM PHA LÊ', 12, 'Thành phần :\r\nNha đam, bột rau câu, đường cát, sả, lá chanh thái\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nLà món tráng miệng độc quyền của đầu bếp tài năng TASTY. Món ăn đã có vinh dự được thưởng thức và đón nhận qua nhiều tổng thống, lãnh tụ quốc gia của nhiều nước. Nay xuất hiện trên thực đơn của nhà hàng TASTY với sứ mệnh nâng tầm trải nghiệm ẩm thực của thực khách. Từ dưỡng chất kỳ diệu của nha đam, món tráng miệng đem đến sự thanh mát, nhẹ nhàng có tác dụng làm đẹp da, tóc và vóc dáng của phái đẹp. Ngoài ra nha đam còn bổ sung nước cho cơ thể, thanh nhiệt cho hệ tiêu hóa, tăng cường hệ miễn dịch. Để đem đến bữa tiệc \"thị & vị giác\" cho khách hàng, đầu bếp TASTY còn khéo léo tô điểm thêm nhiều loại trái cây nhiệt đới.', 55000, 0, 'ava-5f03.jpg', '0', 1, '2022-10-17 03:52:30', '2022-10-17 03:52:30'),
(106, 'TRÀ HIBISCUS THANH YÊN 330ML', 17, 'Thành phần :\r\nTrà xanh hoa lài Đài Loan, hoa lạc thần, mứt thanh yên Nhật, trân châu trắng\r\n\r\n Khẩu phần:\r\n1 - 4 người\r\n Quy cách :\r\nChai nhựa vuông, dung tích 330ml \r\n\r\n Hương vị :\r\nVị trà xanh kết hợp với trà hoa, chua của mứt thanh yên, giòn của trân châu trắng\r\n\r\n Mô tả món :\r\nTrà hibiscus thanh yên là sự kết hợp tinh tế giữa 2 loại trà xanh hoa lài Đài Loan, hoa lạc thần và mứt thanh yên. Thức uống bật lên hương vị đậm và thơm của trà & hậu vị thanh mát chua nhẹ\r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 72 giờ\r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\nLắc đều trước khi sử dụng', 58000, 0, 'tra-hibiscus-thanh-yen-4d81.jpg', '0', 1, '2022-10-17 04:26:14', '2022-10-17 04:26:14'),
(107, 'TRÀ OLOONG BƯỞI HỒNG 330ML', 17, 'Thành phần :\r\nTrà Oolong, mứt bưởi đỏ, trân châu trắng\r\n\r\n Khẩu phần:\r\n1 người\r\n Quy cách :\r\nChai nhựa vuông, dung tích 330ml \r\n\r\n Hương vị :\r\nVị trà oolong đậm đà, kết hợp cùng vị chua và đắng nhẹ đặc trưng của bưởi đỏ\r\n\r\n Mô tả món :\r\nTrà Oloong bưởi hồng trà là một trong những thức uống độc đáo nhất trong menu trà hoa quả nhà TASTY. Hương vị thân thuộc của trà Oloong mang đến trải nghiệm đầy mới lạ khi kết hợp với mứt bưởi hồng. Nhấp 1 ngụm trà để từ từ cảm nhận vị đắng nhẹ từ vỏ bưởi ngọt ngọt chua chua khó cưỡng, cùi bưởi và trân châu trắng dai giòn hòa quyện mượt mà cùng vị chát dịu dàng từ trà Oloong. Điểm nhấn của thức uống nằm ở topping cùi bưởi và tép bưởi thật 100%, mang đến hương vị thanh mát thuần tự nhiên. \r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 72 giờ\r\n\r\n \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\n \r\n\r\nLắc đều trước khi sử dụng', 58000, 0, 'tra-olong-buoi-025e.jpg', '0', 1, '2022-10-17 04:27:09', '2022-10-17 04:27:09'),
(108, 'TRÀ LÀI NHÃN 330ML', 17, 'Thành phần :\r\nTrà xanh hoa lài Đài Loan, syrup nhãn, trái nhãn\r\n\r\n Khẩu phần:\r\n1 - 3 người\r\n Quy cách :\r\nChai nhựa vuông, dung tích 330ml\r\n\r\n \r\n\r\n Hương vị :\r\nVị trà lại thơm nhẹ nhàng, thanh mát\r\n\r\n Mô tả món :\r\nTrà lài luôn là khởi đầu dễ chịu để sáng tạo nên những thức uống thanh nhiệt thú vị. Khi kết hợp cùng long nhãn, trà lài được cân bằng độ chát nhẹ bằng vị ngọt dịu thanh nhã, tạo nên một thức uống giải nhiệt, an thần hiệu quả.\r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 72 giờ\r\n\r\n \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\n \r\n\r\nLắc đều trước khi sử dụng', 58000, 0, 'tra-lai-nhan-34ad.jpg', '0', 1, '2022-10-17 04:28:12', '2022-10-17 04:28:12'),
(109, 'TRÀ VẢI HOA HỒNG 330ML', 17, 'Thành phần :\r\nTrà xanh hoa lài Đài Loan, vải hoa hồng.\r\n\r\n Khẩu phần:\r\n1 - 4 người\r\n Quy cách :\r\nChai nhựa vuông, dung tích 330ml\r\n\r\n \r\n\r\n Hương vị :\r\nVị trà thanh nhẹ, chua ngọt từ trái cây, thơm mùi hoa hồng.\r\n\r\n Mô tả món :\r\nTrà vải hoa hồng là sự kết hợp hoàn hảo của trà xanh hoa nhài Đài Loan đậm vị, cùng mứt vải hoa hồng dịu dàng thơm ngọt tạo nên thứ thức uống quyến rũ đầy tươi mát. Topping vải ngâm chua ngọt hấp dẫn góp phần hoàn thiện hương vị tuyệt hảo của món trà. Thưởng thức một cốc trà vải hoa hồng mát lạnh chắc chắn sẽ là một sự lựa chọn hoàn hảo, giúp xua tan đi cái nóng oi ả của tiết trời mùa hè.\r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 72 giờ\r\n\r\n \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\n \r\n\r\nLắc đều trước khi sử dụng', 58000, 0, 'tra-vai-hoa-hong-1e7c.jpg', '1', 1, '2022-10-17 04:28:54', '2022-10-17 04:28:54'),
(110, 'TRÀ LÀI KIWI NHA ĐAM 330ML', 17, 'Thành phần :\r\nTrà xanh hoa lài Đài Loan, mứt kiwi, nha đam, syrup sả lá dứa\r\n\r\n Khẩu phần:\r\n1 người\r\n Quy cách :\r\nChai nhựa vuông, dung tích 330ml\r\n\r\n \r\n\r\n Hương vị :\r\nVị trà trà xanh, mát, thanh của nha đam, hương nhẹ lá dứa, sả, hậu vị thơm kiwi\r\n\r\n Mô tả món :\r\nĐúng như tên gọi là một món nước hoàn hảo dành cho phái đẹp giúp đẹp da, giữ dáng và chống lão hóa. Từ các nguyên liệu chọn lọc như: tuyết yến, nhựa đào, long nhãn, nấm đông trùng hạ thảo, táo đỏ, kỷ tử, hạt sen, hạt chia,...được nấu tỉ mỉ cùng đường cỏ ngọt, một loại đường tốt cho sức khỏe công dụng hỗ trợ giảm cân, mang đến vị ngọt thanh mát dễ dàng chinh phục từng thực khách khó tính nhất\r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 72 giờ\r\n\r\n \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\n \r\n\r\nLắc đều trước khi sử dụng', 58000, 0, 'tra-lai-kiwi-8248.jpg', '0', 1, '2022-10-17 04:29:32', '2022-10-17 04:29:32'),
(111, 'TRÀ SỮA MASALA 330ML', 17, 'Thành phần :\r\nTrà đen Lâm Hà, syrup masala chai, bột sữa tách béo\r\n\r\n Khẩu phần:\r\n1 - 4 người\r\n Quy cách :\r\nChai nhựa vuông, dung tích 330ml\r\n\r\n \r\n\r\n Hương vị :\r\nVị trà sữa thơm bùi, ngọt dịu lại đậm đà hương thơm thảo mộc thiên nhiên\r\n\r\n Mô tả món :\r\nTrà sữa Masala là sự kết hợp đầy tinh tế của trà đen có nguồn gốc từ vùng trà nổi tiếng Lâm Hà, Lâm Đồng cùng bột sữa cao cấp và syrup spicy tự nấu từ các loại thảo mộc gia vị. Được dày công nghiên cứu bởi những đội ngũ đầu bếp TASTY Kitchen, Trà sữa Masala được xem như bản giao hưởng mượt mà của vị trà sữa thơm bùi, ngọt dịu lại đậm đà hương thơm thảo mộc thiên nhiên. Hãy chọn trà sữa Masala để có được những trải nghiệm sảng khoái và tươi mới nhất cho hè này. \r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 72 giờ\r\n\r\n \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\n \r\n\r\nLắc đều trước khi sử dụng', 52000, 0, 'tra-sua-masala-0dd5.jpg', '1', 1, '2022-10-17 04:30:17', '2022-10-17 04:30:17'),
(112, 'TRÀ SỮA OLOONG 330ML', 8, 'Thành phần :\r\nTrà oolong Bảo Lộc, bột sữa tách béo\r\n\r\n Khẩu phần:\r\n1 - 4 người\r\n Quy cách :\r\nChai nhựa vuông, dung tích 330ml\r\n\r\n \r\n\r\n Hương vị :\r\nvị ngọt thanh dịu nhẹ, đậm vị trà oolong và béo của bột sữa\r\n\r\n Mô tả món :\r\nTrà sữa Oolong TASTY là sự hòa quyện của tinh túy giữa trà oolong vùng Bảo Lộc trứ danh và bột sữa thơm béo. Với tỷ lệ trà, sữa và đường phù hợp, mỗi ly trà sữa oolong có vị ngọt thanh dịu nhẹ, dễ dàng làm xiêu lòng mọi tín đồ trà sữa. TASTY Kitchen hy vọng, mỗi ly trà sữa oloong sẽ giúp quý khách tận hưởng vị ngon lan tỏa đến từng giác quan và tiếp thêm năng lượng cho ngày tươi mới.\r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 72 giờ\r\n\r\n \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\n \r\n\r\nLắc đều trước khi sử dụng', 52000, 0, 'tra-sua-olong-0a3a.jpg', '0', 1, '2022-10-17 04:31:53', '2022-10-17 04:31:53'),
(113, 'TRÀ SỮA LÀI HOA ĐẬU BIẾC 330ML', 17, 'Thành phần :\r\nTrà xanh hoa lài Đài Loan, trà hoa đậu biếc, bột sữa tách béo.\r\n\r\n Khẩu phần:\r\n1 - 2 người\r\n Quy cách :\r\nChai nhựa vuông, dung tích 330ml\r\n\r\n \r\n\r\n Hương vị :\r\nThơm vị trà nhài, ngọt dịu.\r\n\r\n Mô tả món :\r\nNguyên liệu chính của thức uống là trà xanh hoa lài Đài Loan kết hợp cùng trà hoa đậu biếc được ngâm ủ cẩn thận để sản phẩm có vị đậm đà và hương thơm đặc trưng. Trà kết hợp cùng bột sữa tách béo mang đến một thức uống có hương vị ngọt thanh mà không quá béo ngậy. Món trà mang màu xanh tím tự nhiên vô cùng đẹp mắt, hơn nữa còn có tác dụng giúp đẹp da, ngăn ngừa lão hóa, tăng cường hệ miễn dịch và tốt cho sức khỏe tim mạch.\r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 72 giờ\r\n\r\n \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\n \r\n\r\nLắc đều trước khi sử dụng', 52000, 0, 'tra-sua-lai-dau-biec-ef62.jpg', '0', 1, '2022-10-17 04:32:35', '2022-10-17 04:32:35'),
(114, 'CHÈ DƯỠNG NHAN 330ML', 17, 'Thành phần :\r\nĐông trùng hạ thảo, hạt chia, táo đỏ, hạt sen, long nhãn, nấm tuyết, tuyết yến, nhựa đào, kỷ tử, táo cắt, lá dứa, đường phèn\r\n\r\n Khẩu phần:\r\n1 - 3 người\r\n Quy cách :\r\nChai nhựa vuông, dung tích 330ml \r\n\r\n Hương vị :\r\nVị thanh mát, ngọt dịu\r\n\r\n Mô tả món :\r\nĐúng như tên gọi là một món nước hoàn hảo dành cho phái đẹp giúp đẹp da, giữ dáng và chống lão hóa. Từ các nguyên liệu chọn lọc như: tuyết yến, nhựa đào, long nhãn, nấm đông trùng hạ thảo, táo đỏ, kỷ tử, hạt sen, hạt chia,...được nấu tỉ mỉ cùng đường cỏ ngọt, một loại đường tốt cho sức khỏe công dụng hỗ trợ giảm cân, mang đến vị ngọt thanh mát dễ dàng chinh phục từng thực khách khó tính nhất\r\n\r\n Nhiệt độ bảo quản & hạn sử dụng :\r\nHạn sử dụng 48H \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\nLắc đều trước khi sử dụng', 52000, 0, 'che-duong-nhan-1-f948.jpg', '1', 1, '2022-10-17 04:33:27', '2022-10-17 04:33:27'),
(115, 'TRÀ HIBISCUS TÁO DỨA 330ML', 17, 'Thành phần :\r\nHoa Lạc Thần, táo xanh, syrup sả lá dứa, trân châu trắng\r\n\r\n Khẩu phần:\r\n1 - 4 người\r\n Quy cách :\r\nChai nhựa vuông, dung tích 330ml \r\n\r\n Hương vị :\r\nVị trà hoa nhẹ nhàng, thơm mùi sả & lá dứa\r\n\r\n Mô tả món :\r\nTrà không những có nhiều tác dụng tốt cho sức khoẻ: cải thiện hệ tiêu hoá, cholesterol trong máu, huyết áp, giảm cân,... mà hương vị cũng đặc biệt thơm ngon bằng sự kết hợp của táo xanh, mùi thơm của sả và độ giòn của trân châu\r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 72 giờ\r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\nLắc đều trước khi sử dụng', 58000, 0, 'tra-hibiscus-tao-dua-7f65.jpg', '0', 1, '2022-10-17 04:34:14', '2022-10-17 04:34:14'),
(116, 'TRÀ ĐÀO CAM SẢ 330ML', 17, 'Thành phần :\r\nTrà đen, syrup đào, syrup sả (tự nấu), đào ngâm\r\n\r\n Khẩu phần:\r\n1 - 4 người\r\n Quy cách :\r\nChai nhựa vuông, dung tích 330ml\r\n\r\n Hương vị :\r\nVị trà đen đậm đà, kết hợp cùng vị ngọt đậm của đào, mùi thơm của sả, chút chua nhẹ từ cam vàng\r\n\r\n Mô tả món :\r\nTrà đào cam sả - một trong những đồ uống giải khát được yêu thích nhất tại các thương hiệu đồ uống. Vị đào thơm ngọt đậm đà kết hợp với nước cốt trà mang đến hương vị thơm ngon khó cưỡng. Sự kết hợp hài hòa của syrup sả với công thức tự nấu đặc biệt từ TASTY cùng trà đen và syrup đào, nhấn nhá thêm chút vị chua nhẹ từ cam vàng... mang đến hương vị Trà đào cam sả vị tươi mát và an toàn với sức khoẻ.\r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 72 giờ\r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\nLắc đều trước khi sử dụng', 58000, 48000, 'tra-dao-cam-sa-ac21.jpg', '0', 1, '2022-10-17 04:36:13', '2022-10-17 04:36:13'),
(117, 'BẠC XỈU TASTY 200 ML', 17, 'Thành phần :\r\nCà phê Lâm Đồng pha phin, sữa mix\r\n\r\n Khẩu phần:\r\n1 người\r\n Quy cách :\r\nChai thuỷ tinh dẹt, dung tích 200ml  ~ 4 lần uống\r\n\r\n Hương vị :\r\nVị cafe nhẹ\r\n\r\n Mô tả món :\r\nSử dụng hạt cà phê từ vùng Bảo Lộc và Cầu Đất, Lâm Đồng, với tỷ lệ 60% Arabica và 40% Robusta. Sử dụng phương pháp pha chế bằng Phin truyền thống, kết hợp cùng sữa béo, sữa tươi và sữa đặc cho ra sản phẩm có độ béo, vị ngọt và hậu vị cà phê thanh nhẹ nhưng vẫn đủ mang lại sự tỉnh táo.\r\n\r\n \r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng 72H \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp', 68000, 0, 'bac-xiu-9e5d.jpg', '0', 1, '2022-10-17 04:37:04', '2022-10-17 04:37:04'),
(118, 'CÀ PHÊ SỮA 200 ML', 17, 'Thành phần :\r\nCà phê Lâm Đồng pha phin, sữa mix.\r\n\r\n Khẩu phần:\r\n1 người\r\n Quy cách :\r\nChai thủy tinh dẹt, dung tích 200ml.\r\n\r\n Hương vị :\r\nĐậm cafe, vị ngọt béo.\r\n\r\n Mô tả món :\r\nCà phê sữa TASTY là sự lựa chọn hoàn hảo cho những ai yêu thích cà phê nhưng lại không thích vị đắng nguyên bản của cà phê đen truyền thống. Hương vị cà phê mang dấu ấn sáng tạo rất Việt Nam. Cái khéo trong sự kết hợp giữa các nguyên liệu cao cấp: cà phê phin, sữa béo và sữa đặc cho ra đời một thức uống tròn vị đắng, ngọt, bùi. Vị ngọt thấm vào đầu lưỡi, vị đắng lắng đọng nơi cuống họng vừa đủ để người thưởng thức tỉnh táo suốt cả ngày dài.\r\n\r\n Nhiệt độ bảo quản & hạn sử dụng :\r\nHạn sử dụng 72h. Nên sử dụng trong vòng 24h kể từ khi mở nắp.', 68000, 0, 'cafe-sua-4963.jpg', '0', 1, '2022-10-17 04:37:48', '2022-10-17 04:37:48'),
(119, 'CÀ PHÊ ĐEN CHAI 200 ML', 17, 'Thành phần :\r\nCà phê pha phin, đường.\r\n\r\n Khẩu phần:\r\n1 người\r\n Quy cách :\r\nChai thủy tinh dẹt, dung tích 200ml.\r\n\r\n Hương vị :\r\nĐậm vị cà phê.\r\n\r\n Mô tả món :\r\nDành cho những người sành cà phê, cà phê đen TASTY mang vị đắng đậm đà truyền thống. Từng hạt cà phê được chắt lọc kỹ càng từ vùng nguyên liệu cao cấp Bảo Lộc – Cầu Đất, kết hợp với cách pha chế bằng phin thủ công, cho ra đời những giọt tinh chất cà phê hảo hạng đầy tinh tế. Mỗi ngụm cà phê đăng đắng êm ái mượt mà chạm vào vị giác, kích thích tối đa các giác quan phù hợp để bắt đầu một ngày mới tràn trề năng lượng.\r\n\r\n Nhiệt độ bảo quản & hạn sử dụng :\r\nHạn sử dụng 72h. Nên sử dụng trong vòng 24h kể từ khi mở nắp.', 68000, 0, 'cafe-den-d878.jpg', '0', 1, '2022-10-17 04:38:29', '2022-10-17 04:38:29'),
(120, 'COCO LEMON COLD BREW COFFEE', 17, 'Thành phần :\r\nCà phê Arabica ủ lạnh, nước dừa tươi, chanh vàng\r\n\r\n Khẩu phần:\r\n1 người\r\n Quy cách :\r\nChai thuỷ tinh tròn, dung tích 200ml ~ 2-3 lần uống\r\n\r\n Hương vị :\r\nVị cafe kết hợp với nước dừa tươi nhẹ nhàng, thanh mát. Thơm mùi cafe hoà quyện với chanh vàng...\r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 5 ngày \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\nLắc đều trước khi sử dụng', 68000, 0, 'cocolemon-7abd.jpg', '0', 1, '2022-10-17 04:39:17', '2022-10-17 04:39:17'),
(121, 'IRISH CREAM COLD BREW COFFEE', 17, 'Thành phần :\r\nCà phê Arabica ủ lạnh, sốt Irish Cream, sữa tươi\r\n\r\n Khẩu phần:\r\n1 người\r\n Quy cách :\r\nChai thuỷ tinh tròn, dung tích 200ml ~ 2-3 lần uống\r\n\r\n Hương vị :\r\nVị cafe nhẹ nhàng, kết hợp với kem & sữa tươi béo ngậy\r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 3 ngày \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\nLắc đều trước khi sử dụng', 68000, 0, 'irish-cream-7944.jpg', '0', 1, '2022-10-17 04:40:13', '2022-10-17 04:40:13'),
(122, 'ORIGINAL COLD BREW COFFEE 200 ML', 17, 'Thành phần :\r\n100% Cà phê Arabica ủ lạnh\r\n\r\n Khẩu phần:\r\n1 người\r\n Quy cách :\r\nChai thuỷ tinh tròn, dung tích 200ml ~ 2-3 lần uống\r\n\r\n Hương vị :\r\nVị cafe thơm nhẹ nhàng\r\n\r\n Hướng dẫn sử dụng :\r\nHạn sử dụng: 7 ngày \r\n\r\nNên sử dụng trong vòng 24h kể từ khi mở nắp\r\n\r\nLắc đều trước khi sử dụng', 68000, 0, 'coldbrew-1008.jpg', '0', 1, '2022-10-17 04:41:58', '2022-10-17 04:41:58');
INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `new`, `status`, `created_at`, `updated_at`) VALUES
(123, 'COCA COLA LON 320ML', 17, NULL, 13000, 0, 'capture12-9765-b83a.jpg', '0', 1, '2022-10-17 04:42:33', '2022-10-17 04:42:33'),
(124, 'COCA COLA LIGHT LON 320ML', 17, NULL, 13000, 0, 'ca01d11a869c73c22a8d-a1d2.jpg', '0', 1, '2022-10-17 04:43:08', '2022-10-17 04:43:08'),
(125, 'SPRITE LON 320ML', 17, NULL, 13000, NULL, '11111111111-b1ba.jpg', '0', 1, '2022-10-17 04:43:41', '2022-10-17 04:43:41'),
(126, 'FANTA LON 320ML', 17, NULL, 13000, NULL, '22222222222-75e6.jpg', '0', 1, '2022-10-17 04:44:07', '2022-10-17 04:44:07'),
(127, 'TRÀ LÀI NHÃN', 16, 'Thành phần :\r\nTrà xanh hoa lài Đài Loan, syrup nhãn, trái nhãn\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nTrà lài luôn là khởi đầu dễ chịu để sáng tạo nên những thức uống thanh nhiệt thú vị. Khi kết hợp cùng long nhãn, trà lài được cân bằng độ chát nhẹ bằng vị ngọt dịu thanh nhã, tạo nên một thức uống giải nhiệt, an thần hiệu quả.', 48000, 0, 'tra-lai-nhan-ly-95db.jpg', '0', 1, '2022-10-17 04:51:38', '2022-10-17 04:51:38'),
(128, 'TRÀ LÀI KIWI NHA ĐAM', 16, 'Thành phần :\r\nTrà xanh hoa lài Đài Loan, mứt kiwi, nha đam, syrup sả lá dứa\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nĐúng như tên gọi là một món nước hoàn hảo dành cho phái đẹp giúp đẹp da, giữ dáng và chống lão hóa. Từ các nguyên liệu chọn lọc như: tuyết yến, nhựa đào, long nhãn, nấm đông trùng hạ thảo, táo đỏ, kỷ tử, hạt sen, hạt chia,...được nấu tỉ mỉ cùng đường cỏ ngọt, một loại đường tốt cho sức khỏe công dụng hỗ trợ giảm cân, mang đến vị ngọt thanh mát dễ dàng chinh phục từng thực khách khó tính nhất', 48000, 0, 'tra-lai-kiwi-ly-60b2.jpg', '0', 1, '2022-10-17 04:53:18', '2022-10-17 04:53:18'),
(129, 'TRÀ SỮA OOLONG', 16, 'Thành phần :\r\nTrà oolong Bảo Lộc, bột sữa tách béo \r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nTrà sữa Oolong TASTY là sự hòa quyện của tinh túy giữa trà oolong vùng Bảo Lộc trứ danh và bột sữa thơm béo. Với tỷ lệ trà, sữa và đường phù hợp, mỗi ly trà sữa oolong có vị ngọt thanh dịu nhẹ, dễ dàng làm xiêu lòng mọi tín đồ trà sữa. TASTY Kitchen hy vọng, mỗi ly trà sữa oloong sẽ giúp quý khách tận hưởng vị ngon lan tỏa đến từng giác quan và tiếp thêm năng lượng cho ngày tươi mới.', 45000, 0, 'tra-sua-olong-8616.jpg', '0', 1, '2022-10-17 04:53:57', '2022-10-17 04:53:57'),
(130, 'TRÀ SỮA MASALA', 16, 'Thành phần :\r\nTrà Đen, bột sữa tách béo, syrup spicy\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nTrà sữa Masala là sự kết hợp đầy tinh tế của trà đen có nguồn gốc từ vùng trà nổi tiếng Lâm Hà, Lâm Đồng cùng bột sữa cao cấp và syrup spicy tự nấu từ các loại thảo mộc gia vị. Được dày công nghiên cứu bởi những đội ngũ đầu bếp TASTY Kitchen, Trà sữa Masala được xem như bản giao hưởng mượt mà của vị trà sữa thơm bùi, ngọt dịu lại đậm đà hương thơm thảo mộc thiên nhiên. Hãy chọn trà sữa Masala để có được những trải nghiệm sảng khoái và tươi mới nhất cho hè này.', 45000, 0, 'tra-sua-masala-6b3b.jpg', '1', 1, '2022-10-17 04:54:35', '2022-10-17 04:54:35'),
(131, 'CÀ PHÊ SỮA ĐÁ', 16, 'Thành phần :\r\nCà phê pha phin, sữa đặc, sữa béo\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nCà phê sữa TASTY là sự lựa chọn hoàn hảo cho những ai yêu thích cà phê nhưng lại không thích vị đắng nguyên bản của cà phê đen truyền thống. Hương vị cà phê mang dấu ấn sáng tạo rất Việt Nam. Cái khéo trong sự kết hợp giữa các nguyên liệu cao cấp: cà phê phin, sữa béo và sữa đặc cho ra đời một thức uống tròn vị đắng, ngọt, bùi. Vị ngọt thấm vào đầu lưỡi, vị đắng lắng đọng nơi cuống họng vừa đủ để người thưởng thức tỉnh táo suốt cả ngày dài.', 35000, 0, 'cafe-sua-1280x1000-be0b.jpg', '0', 1, '2022-10-17 04:55:13', '2022-10-17 04:55:13'),
(132, 'BẠC XỈU TASTY', 16, 'Thành phần :\r\nCà phê pha phin, sữa béo, sữa tươi, sữa đặc\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nBạc xỉu không phải là cà phê sữa mà là ly sữa trắng được thêm một chút vị đắng của cà phê. Khác với công thức gốc của người Hoa, bạc xỉu TASTY mang đậm tinh thần Việt Nam bởi đó là sự kết hợp hài hòa của các nguyện liệu chọn lọc như cà phê phin từ hạt cà phê vùng Bảo Lộc - Cầu Đất, sữa tươi, sữa đặc và đặc biệt là sữa béo, khiến hương vị trở nên thơm ngon khó cưỡng. Vị sữa béo ngậy nơi đầu môi và cùng với hương thơm đặc trưng của cà phê sẽ mang đến hơi thở mới mẻ cho thức uống đã quen thuộc bấy lâu trong lòng người Sài Gòn.', 35000, 0, 'bac-xiu-tasty-1280x1000-98cd.jpg', '0', 1, '2022-10-17 04:55:56', '2022-10-17 04:55:56'),
(133, 'TRÀ SỮA TASTY', 16, 'Thành phần :\r\nTrà đen, bột sữa tách béo, trân châu trắng\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nTrà sữa TASTY được tạo nên từ 100% nguyên liệu Việt với hồn cốt là trà đen nổi tiếng vùng Lâm Hà, Lâm Đồng. Hương thơm đặc trưng của trà đen được hòa quyện với độ béo vừa phải của sữa, tạo nên vị ngọt thanh mà vẫn giữ được hậu vị trà đậm đà. Cuối cùng, thành phần không thể thiếu để tạo nên món trà sữa trứ danh là trân châu trắng ngọt ngào, dai dai giòn giòn, cân bằng lại vị chát nhẹ của trà. Tất cả tạo nên một hương vị vừa lạ vừa quen, thổi hồn Việt Nam vào một thức uống mang danh ngoại lai bấy lâu.', 45000, 0, 'tra-sua-tasty-1280x1000-9a3c.jpg', '0', 1, '2022-10-17 04:56:39', '2022-10-17 04:56:39'),
(134, 'TRÀ SỮA LÀI HOA ĐẬU BIẾC', 16, 'Thành phần :\r\nTrà xanh hoa lài, trà hoa đậu biếc, trân châu trắng, bột sữa tách béo\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nNguyên liệu chính của thức uống là trà xanh hoa lài Đài Loan kết hợp cùng trà hoa đậu biếc được ngâm ủ cẩn thận để sản phẩm có vị đậm đà và hương thơm đặc trưng. Trà kết hợp cùng bột sữa tách béo và phần topping trân châu trắng dai giòn, mang đến một thức uống có hương vị ngọt thanh mà không quá béo ngậy. Món trà mang màu xanh tím tự nhiên vô cùng đẹp mắt, hơn nữa còn có tác dụng giúp đẹp da, ngăn ngừa lão hóa, tăng cường hệ miễn dịch và tốt cho sức khỏe tim mạch.', 45000, 0, 'ts-hoa-dau-biec-1280x1000-6961.jpg', '0', 1, '2022-10-17 04:57:09', '2022-10-17 04:57:09'),
(135, 'YAKULT THANH LONG', 16, 'Thành phần :\r\nYakult, nước ép sơri thanh long, trân châu trắng\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nĐi một chặng đường xa từ Tiền Giang về với quầy bar TASTY, trái sơ ri Gò Công mang trong mình vị chua ngọt dễ chịu cùng hàm lượng vitamin C gấp 34 lần chanh. Quyện vị cùng sơ ri là nước ép thanh long đỏ ngọt thanh, mang đến màu sắc bắt mắt và hương vị Việt Nam quen thuộc. Vừa dung hòa, vừa tạo điểm nhấn đặc biệt cho món nước ưa nhìn là sữa lên men yakult, với vị chua nhẹ thơm thơm, hỗ trợ hệ tiêu hóa, mang lại nhiều lợi ích cho sức khỏe và giữ mãi sự tươi trẻ cho thực khách. Đi kèm với trân châu trắng dai giòn, Yakult thanh long là một trải nghiệm mới mẻ, thơm ngon cho những ngày nắng nóng.', 48000, 0, 'yakul-1-cd6d.jpg', '0', 1, '2022-10-17 04:57:42', '2022-10-17 04:57:42'),
(136, 'NƯỚC ÉP CAM THƠM', 16, 'Thành phần :\r\nNước ép cam, nước ép thơm, nha đam\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nTăng cường lớp lá chắn bảo vệ cơ thể bằng một cốc Nước ép cam thơm chua ngọt đầy ấn tượng tại TASTY Kitchen sẽ giúp đánh thức mọi giác quan trên cơ thể bạn, bừng tỉnh sau những ngày dài đầy mệt mỏi. Sự hoà quyện độc đáo đầy hấp dẫn từ những loại trái cây nhiệt đới như Thơm, Cam kết hợp cùng nha đam tươi mát nên một thức uống đầy sảng khoái. Nước ép cam thơm với công thức tuyệt hảo, một chút thơm ngọt dịu của trái thơm cùng vị chua nhẹ qua từng tép cam cung cấp những dưỡng chất thiết yếu nhất giúp cơ thể tràn đầy sức sống.', 48000, 0, 'cam-thom-1-6905.jpg', '0', 1, '2022-10-17 04:58:14', '2022-10-17 04:58:14'),
(137, 'TRÀ OOLONG BƯỞI HỒNG', 16, 'Thành phần :\r\nTrà Oolong, mứt bưởi đỏ\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nTrà Oloong bưởi hồng trà là một trong những thức uống độc đáo nhất trong menu trà hoa quả nhà TASTY. Hương vị thân thuộc của trà Oloong mang đến trải nghiệm đầy mới lạ khi kết hợp với mứt bưởi hồng. Nhấp 1 ngụm trà để từ từ cảm nhận vị đắng nhẹ từ vỏ bưởi ngọt ngọt chua chua khó cưỡng, cùi bưởi thơm giòn hòa quyện mượt mà cùng vị chát dịu dàng từ trà Oloong. Điểm nhấn của thức uống nằm ở topping cùi bưởi và tép bưởi thật 100%, mang đến hương vị thanh mát thuần tự nhiên, bổ sung thêm nguồn vitamin C dồi dào cho cơ thể.', 48000, 0, 'tra-olong-buoi-bda5.jpg', '1', 1, '2022-10-17 04:58:48', '2022-10-17 04:58:48'),
(138, 'TRÀ ĐÀO CAM SẢ', 16, 'Thành phần :\r\nTrà đen, syrup đào, syrup sả (tự nấu), đào ngâm\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nTrà đào cam sả - một trong những đồ uống giải khát được yêu thích nhất tại các thương hiệu đồ uống. Vị đào thơm ngọt đậm đà kết hợp với nước cốt trà mang đến hương vị thơm ngon khó cưỡng. Sự kết hợp hài hòa của syrup sả với công thức tự nấu đặc biệt từ TASTY cùng trà đen và syrup đào, nhấn nhá thêm chút vị chua nhẹ từ cam vàng... mang đến hương vị Trà đào cam sả vị tươi mát và an toàn với sức khoẻ.', 48000, 0, 'tra-dao-cam-sa-927c.jpg', '0', 1, '2022-10-17 04:59:18', '2022-10-17 04:59:18'),
(139, 'TRÀ VẢI HOA HỒNG', 16, 'Thành phần :\r\nTrà xanh hoa lài, vải hoa hồng\r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nTrà vải hoa hồng là sự kết hợp hoàn hảo của trà xanh hoa nhài Đài Loan đậm vị, cùng mứt vải hoa hồng dịu dàng thơm ngọt tạo nên thứ thức uống quyến rũ đầy tươi mát. Topping vải ngâm chua ngọt hấp dẫn góp phần hoàn thiện hương vị tuyệt hảo của món trà. Thưởng thức một cốc trà vải hoa hồng mát lạnh chắc chắn sẽ là một sự lựa chọn hoàn hảo, giúp xua tan đi cái nóng oi ả của tiết trời mùa hè.', 48000, 0, 'tra-vai-hoa-hong-1280x1000-ad7a.jpg', '0', 1, '2022-10-17 04:59:56', '2022-10-17 04:59:56'),
(140, 'DETOX SƠ-RI THANH LONG', 16, 'Thành phần :\r\nNước ép cam, nước ép sơri thanh long, trân châu trắng \r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nDetox sơ ri thanh long đánh thức mọi giác quan bằng vị chua dễ chịu của những trái sơ ri Gò Công, có hàm lượng vitamin C gấp 34 lần chanh. Tiếp theo đó là sự tươi mát lan tỏa trong khoang miệng, với nước ép cam đậm đà cùng thanh long ngọt ngào giàu vitamin A. Trân châu trắng giòn dai khó cưỡng hoàn thiện bản giao hưởng của trái cây nhiệt đới, mang lại một cơ thể khỏe mạnh, dẻo dai cùng sức hấp dẫn không thể chối từ.', 48000, 0, 'king-222-971f.jpg', '0', 1, '2022-10-17 05:01:15', '2022-10-17 05:01:15'),
(141, 'DETOX CẢI XOĂN', 16, 'Thành phần :\r\nNước ép cam, nước ép sơri thanh long, trân châu trắng \r\n\r\n Khẩu phần:\r\n1 người\r\n Mô tả món :\r\nDetox sơ ri thanh long đánh thức mọi giác quan bằng vị chua dễ chịu của những trái sơ ri Gò Công, có hàm lượng vitamin C gấp 34 lần chanh. Tiếp theo đó là sự tươi mát lan tỏa trong khoang miệng, với nước ép cam đậm đà cùng thanh long ngọt ngào giàu vitamin A. Trân châu trắng giòn dai khó cưỡng hoàn thiện bản giao hưởng của trái cây nhiệt đới, mang lại một cơ thể khỏe mạnh, dẻo dai cùng sức hấp dẫn không thể chối từ.', 48000, 0, 'kale-1-8446.jpg', '0', 1, '2022-10-17 05:02:41', '2022-10-17 05:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(255) NOT NULL,
  `id_sanpham` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_image` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `id_sanpham`, `customer_name`, `customer_image`, `review`, `updated_at`, `created_at`) VALUES
(1, 73, 'Phạm Tiến Đức', '278762605_1411798959265016_8115676779592581896_n.jpg', 'Ngon', '2022-06-09 10:18:57', '2022-06-09 10:18:57'),
(2, 73, 'Phạm Tiến Đức', '278762605_1411798959265016_8115676779592581896_n.jpg', 'very suong', '2022-06-09 10:22:17', '2022-06-09 10:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tittle` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `name`, `image`, `tittle`, `content`, `link`, `created_at`, `updated_at`) VALUES
(5, 'Slide-01', 'group-863-97d5.png', 'Chú thích 1', 'Nội dung', 'https://tiki.vn/tikingon/soi-bien-203-trung-kinh-i259884', '2022-06-06 04:20:58', '2022-06-06 04:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `id_category`, `created_at`, `updated_at`) VALUES
(8, 'Khai vị', 1, '2022-06-06 03:17:45', '2022-06-06 03:17:45'),
(9, 'Món chính dùng ngay', 1, '2022-06-06 03:18:01', '2022-06-06 03:49:58'),
(10, 'Canh-Tiềm-Súp', 1, '2022-06-06 03:18:15', '2022-06-06 03:18:15'),
(11, 'Cơm-Mỳ-Cháo', 1, '2022-06-06 03:18:27', '2022-06-06 03:18:27'),
(12, 'Tráng miệng', 1, '2022-06-06 03:18:34', '2022-06-06 03:18:34'),
(13, 'Món chính chế biến sẵn', 2, '2022-06-06 03:19:30', '2022-06-06 03:50:31'),
(14, 'Ăn vặt', 2, '2022-06-06 03:19:40', '2022-06-06 03:19:40'),
(15, 'Sốt', 2, '2022-06-06 03:19:51', '2022-06-06 03:19:51'),
(16, 'Đồ uống dùng trong ngày', 3, '2022-06-06 03:20:12', '2022-06-06 03:20:12'),
(17, 'Đồ uống đóng chai', 3, '2022-06-06 03:20:22', '2022-06-06 03:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user.png',
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `phone`, `address`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Phạm Tiến Đức', 'cuongnew37@gmail.com', '$2y$10$qitS6Uds5hfIC.m93Hiuw.AB3.joQxA1/5FHSew/7tjnhvBdZ0HNe', '278762605_1411798959265016_8115676779592581896_n.jpg', '0976947354', NULL, 0, NULL, '2022-06-06 01:56:51', '2022-06-15 04:49:29'),
(2, 'Phạm Tiến Duat', 'ducpham0307@gmail.com', '$2y$10$mxteLp6cE3WuDPFDagoAg.gSLoZim3xAtoJO3fxFTB/FVz6mTYXqi', 'user.png', '0976947356', NULL, 1, NULL, '2022-06-06 02:49:51', '2022-06-06 02:49:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
