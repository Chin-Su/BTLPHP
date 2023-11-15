-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2023 lúc 05:24 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `book_database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'ChinSu', '123@abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(20) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(20) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `chucvu` int(11) NOT NULL,
  `diachi` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `taikhoan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`chucvu`, `diachi`, `email`, `hovaten`, `id_khachhang`, `matkhau`, `sodienthoai`, `taikhoan`) VALUES
(0, 'Bac Giang', '123@gmail.com', 'Nguyen Van A', 1, 'fc76c4a86c56becc717a88f651264622', 12345678, 'adminn'),
(0, 'Bac Giang', 'viet129@hotmail.com', 'Nguyen Van A', 2, 'fc76c4a86c56becc717a88f651264622', 123456789, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(2, 'Văn học nước ngoài', 2),
(3, 'Thiếu nhi', 3),
(11, 'Thời sự - chính trị', 4),
(17, 'Văn học Việt Nam', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giatien` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tacgia` varchar(100) NOT NULL,
  `nxb` varchar(100) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `noidung` text NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giatien`, `soluong`, `tacgia`, `nxb`, `hinhanh`, `noidung`, `id_danhmuc`) VALUES
(8, 'Gió đầu mùa', '8935235237391', '58000', 5, 'Thạch Lam', 'Hội nhà văn', '1685092458_DGDZBYGY.jpg', '“… qua một đêm mưa rào, trời bỗng đổi ra gió bấc, rồi cái lạnh ở đâu đến làm cho người ta tưởng đang ở giữa mùa  đông rét mướt. Sơn tung chăn tỉnh dậy, nhưng không bước xuống giường ngay như mọi khi, còn ngồi thu tay vào  trong bọc, bên cạnh đứa em bé vẫn nắm tay ngủ kỹ. Chị Sơn và mẹ Sơn đã trở dậy, đang ngồi quạt hỏa lò để pha nước chè uống. Sơn nhận thấy mọi người đã mặc áo rét cả rồi.”', 1),
(14, 'Để con được chích', '973462333', '20000', 125, 'BS.Lê Duy Minh', 'Nhã Nam', '1686286533_Screenshot 2023-06-09 115503.png', 'Bạn có phân vân trong việc đưa con đi tiêm chủng? Bạn có lo ngại về thông tin vắc xin MMR (sởi-rubella-quai bị) gây hội chứng tự kỷ? Và thủy ngân, cùng nhôm có thể được truyền vào cơ thể của trẻ cùng các mũi vắc xin? Con của bạn có phải là một trong hàng nghìn đứa trẻ mắc sởi vào mùa xuân 2019? Hay bé đã may mắn không mắc bệnh? Và hệ miễn dịch của trẻ, cùng của chính chúng ta thực ra hoạt động như thế nào?', 14),
(15, 'Nắng trong vườn', '798287424', '120000', 374, 'Thạch Lam', 'Kim Đồng', '1686334108_namtrongvuon.jpg', '\"KHI TÔI QUAY LẠI NHÌN CHỒNG NÀNG, tôi thấy rõ cái lãnh đạm của người đàn ông ấy... Nàng có sung sướng không? Nàng có còn nhớ đến tôi không? Ngậm ngùi, tôi nghĩ đến cuộc ái ân ngắn ngủi...trong mấy tháng hè: cái tình yêu  biết đâu chẳng vẫn còn để lại trong lòng nàng một vẻ rực rỡ như ánh nắng trong vườn.\"', 1),
(16, 'Đãm trẻ nhiễu văn hóa', '84874247478', '78000', 72, 'Ngọc Nguyễn', 'Thanh Hòa', '1686334240_damtrenhieuvanhoa.jpg', 'Sinh ra ở Moscow bởi bố mẹ người Việt Nam nhưng lại tin rằng mình có phần nào đó là người Xô viết, chuyển về Hà Nội khi lên 3 và vào học trường Quốc tế Pháp dưới sự ủng hộ của ông bà, 15 tuổi rời Việt Nam sang Mỹ để học tại một trường nội trú ở tiểu bang Connecticut, câu hỏi mà Ngọc Nguyễn, cũng như những đứa trẻ nhiễu văn hóa khác, cảm thấy khó trả lời nhất là \"Bạn đến từ đâu?”. Vượt lên trên một cuốn nhật ký cá nhân, Đám trẻ nhiễu văn hóa đặt ra những vấn đề nhân văn trong xã hội toàn cầu hóa đầy dịch chuyển. Mục đích cuối cùng của những suy tư và tìm tòi ấy không phải là một câu trả lời chính xác về danh tính, mà là cách để chấp nhận bản thân và tìm cho mình một nơi đề thuộc về.', 1),
(17, 'Chùa Đàn', '8476493453', '98000', 92, 'Nguyễn Tuân', 'Hội Nhà Văn', '1686334328_chuadan.jpg', '“Sau một cái tử biệt, giờ ta phải tính đến một nỗi sinh li khác. Đối với đàn, hát, từ bây giờ ta nguyện làm một người điếc một người cô đơn một người phản bội. Và trên vong linh Bá Nhỡ, ta thề độc là không bao giờ cầm đến một cái chén nào của cuộc đời này.”', 1),
(18, 'Lắng nghe gió hát', '7394647365', '120000', 82, 'Haruki Murakami', 'Hội nhà văn', '1686335143_langnghegiohat.jpg', 'Mười tám ngày của mùa hè năm hai mươi tuổi, đối với “tôi” là một kỳ nghỉ hè không sự kiện. Bất chấp những tối uống tràn ở quán Jay’s Bar cùng cậu bạn mang tên Chuột hay mối quen tình cờ với cô gái ở cửa hàng đĩa hát, thành phố quê hương ven biển mùa hè chỉ còn là gió trong “tôi”. Những chuyện kể về gió, tiếng gió hát bên bờ biển, và cảm giác tuổi thanh xuân trôi qua như gió. Mười tám ngày ấy đã gói ghém cả quá khứ, hiện tại, tương lai cùng với hoang mang, mất mát và cô đơn…', 2),
(19, 'FAUST - JOHANN WOLFGANG VON GOETHE', '8935235238046', '160000', 35, 'Johann Wolfgang von Goethe', 'Văn học', '1686335211_46XLHEM7.jpg', 'Trong đêm tối nghìn năm Trung cổ, nhân loại dần tỉnh giấc, dấn bước kiếm tìm giá trị bản thân và nhận thức thế giới. Trên chặng đường đó, đã sinh ra Faust - một nhân vật có thật, được huyền thoại hóa nhiều vào bậc nhất lịch sử thế giới, cả trong văn học dân gian lẫn văn học bác học, với đỉnh cao của mọi đỉnh cao là Faust của Johann Wolfgang von Goethe.', 2),
(20, 'DIỆT CHỦNG', '8935235237865', '268000', 22, ' Takano Kazuaki', 'Hội nhà văn', '1686335290_IEMIY2L1.jpg', 'Koga Kento, cậu sinh viên cao học chuyên ngành hóa dược, đột ngột nhận được email từ người cha quá cố. Bức thư tuyệt mệnh lạ lùng đã dẫn cậu lần ra một phòng thí nghiệm tư nhân bí ẩn. Cha cậu – một\r\nnhà virus học – đang nghiên cứu thứ gì ở đó?\r\nVì con trai mắc bệnh nan y, tay lính đánh thuê Jonathan Yeager nhận lời gánh vác một nhiệm vụ tuyệt mật. Với thông tin duy nhất “đó là một công việc vì nhân loại”, Yeager gia nhập một đội ám sát, thâm nhập vào rừng rậm của đất nước Congo đang bị chiến tranh tàn phá.\r\nKhi số phận của hai kẻ xa lạ ấy giao nhau, một sự thật chấn động được hé mở...', 2),
(21, 'HÃY ĐI ĐẶT NGƯỜI CANH GÁC', '845324424664', '140000', 26, 'Harper Lee', 'Văn học', '1686335347_4YRFRQRX.jpg', 'Nước Mỹ những năm 1950. Làn sóng đòi quyền bình đẳng cho người da đen đang dâng trào cả nước; trong vài tiểu bang miền Nam, người da trắng tập hợp để bảo vệ cái mà họ coi là bản sắc bị tước đoạt của mình… Trở về thăm nhà như lệ thường, Jean Louise không ngờ mình sắp bước chân vào giữa cuộc chiến tư tưởng của thập kỷ. Cô sẽ ngỡ ngàng thấy người cha Atticus, vị anh hùng vì lẽ công bình của cô thuở bé, dường như đã đổi màu niềm tin; người thân, bạn bè lâu năm bỗng dưng xa lạ; thị trấn Maycomb quê hương và chính cô không còn nhận ra nhau. Công lý ở đâu, đúng sai là gì? Khi thành trì lương tâm tuổi thơ cô đã vụn vỡ từng viên đá một, Jean Louise bắt đầu đi tìm một sự thật của riêng mình.\r\n\r\n ', 2),
(22, 'LỜI NHẮN CUỐI CÙNG', '977646434', '155000', 47, 'Laura Dave', 'Hà Nội', '1686335400_LAYEVALU.jpg', 'Hannah Hall có một cuộc hôn nhân muộn màng nhưng hạnh phúc với Owen Michaels, bất chấp những khó khăn xảy đến giữa cô và Bailey, đứa con gái riêng mười sáu tuổi của Owen với người vợ trước. Bỗng nhiên một ngày Owen Michaels biến mất, chỉ để lại một lời nhắn bí hiểm: “Hãy bảo vệ nó”, mà Hannah hiểu rằng người được nhắc đến chính là Bailey. Khao khát một câu trả lời khi mà hạnh phúc gia đình bỗng vuột khỏi tầm tay, Hannah cùng Bailey cất công đi tìm Owen, để rồi nhận ra người chồng, người cha của họ còn một quá khứ cay đắng và bí mật mà anh không bao giờ nhắc đến. ', 2),
(23, 'CUỐN SÁCH LỚN RỰC RỠ VỀ BÁC SĨ', '9034753873', '139000', 63, 'Liesbet Slegers', 'Hà Nội', '1686335481_TKTK58SD.jpg', 'Khi bị ốm mệt, em đừng lo lắng\r\n\r\nvì các bác sĩ trong chiếc áo bờ lu trắng,\r\n\r\ngiỏi giang, tận tâm và tỏ tường về cơ thể,\r\n\r\nluôn sẵn sàng chữa cho chúng mình khỏe lại.', 3),
(24, 'CUỐN SÁCH LỚN RỰC RỠ VỀ LÍNH CỨU HỎA', '6332436466', '198000', 98, 'Liesbet Slegers', 'Hà Nội', '1686335550_T1.jpg', 'Nguy hiểm vô cùng, những đám cháy!\r\n\r\nMay mắn thay,\r\n\r\nnhững người lính cứu hỏa gan dạ luôn ở đây\r\n\r\ntrong trang phục cứu hộ đặc biệt dày.\r\n\r\nNơi nào có cháy, gọi 114, họ sẽ có mặt ngay.', 3),
(25, 'VÌ MẸ YÊU CON NHIỀU - BECAUSE I LOVE YOU SO MUCH', '75645353', '78000', 37, 'Guido Van Genechten', 'Dân Trí', '1686335645_T2.jpg', 'Độ tuổi: 3-6 tuổi\r\n\r\nBé Gấu Tuyết đã biết rất nhiều điều: đám cá ngon lành bơi ở đâu, bông tuyết có vị thế nào, gió có thể mơn man mà cũng có thể buốt táp, khi nào mặt trời nhô và khi nào mặt trăng ló. Bé cũng biết nếu ở cách mẹ bao xa thì dễ gặp nguy hiểm. \r\n\r\nThế nhưng cũng có rất nhiều Bé Gấu Tuyết chưa thực sự hiểu, nhưng dù thế nào, bé vẫn biết câu trả lời cho câu hỏi quan trọng nhất…\r\n\r\nMột câu chuyện ngập tràn yêu thương và ấm áp về những bạn gấu Bắc Cực.\r\n\r\nMột cuốn sách đầy cảm xúc cho cả người lớn lẫn trẻ em.', 3),
(27, 'SINH TỒN GIỮA THIÊN NHIÊN CẨM NANG TOÀN TẬP VỀ DÃ NGOẠI', '8756334443', '78000', 65, ' Nicolas Clémendot , Émilie Cuissard', 'Thế Giới', '1686335860_T4.jpg', 'Trong xã hội bộn bề ngày nay, hòa mình vào thiên nhiên, trở về với không gian nguyên sơ và yên bình đang dần trở thành xu hướng được nhiều người quan tâm. Ta hoàn toàn có thể sống và tận hưởng thiên nhiên cùng cả gia đình một cách an toàn, miễn là ta chuẩn bị hành trang đúng cách.\r\n\r\nNicolas Clémendot, giảng viên dạy kỹ năng sinh tồn và bushcraft với hơn 10 năm kinh nghiệm và Émilie Cuissard, nhà thực vật học đam mê nghiên cứu các loài cây dại, sẽ đưa bạn rời khỏi những con đường mòn, tiến sâu vào rừng núi để trải nghiệm một chuyến đi có 1-0-2!', 11),
(28, 'NGÔI THỨ NHẤT SỐ ÍT', '894683943', '150000', 78, 'Haruki Murakami', 'Phụ nữ', '1686335930_T5.jpg', 'Thế giới thì trôi đi, nhưng câu chuyện sẽ lưu giữ lại cảnh tượng.\r\n\r\nMỗi truyện ngắn là một lát cắt của thế giới. Ngôi thứ nhất số ít là những \"con mắt đơn\" đóng khung trong từng lát cắt của thế giới. Nhưng khi những lát cắt ấy càng nhiều thêm, thì \"con mắt đơn\" đã trở thành \"con mắt kép\" mà mọi lát cắt đã vấn vít vào nhau. Và ở đó, tôi không còn là tôi, ta không còn là ta. Và rồi bạn cũng không còn là bạn nữa. Ở đó, điều gì đã xảy ra và điều gì không xảy ra? Chào mừng độc giả đến với thế giới của Ngôi thứ nhất số ít!', 11),
(29, 'BẦU TRỜI VÀ MẶT ĐẤT', '567565534388', '199000', 65, 'Paolo Giordano', 'Văn học', '1686335983_T6.jpg', 'Một đêm hè nọ, Teresa, đương trong kì nghỉ tại quê nội ở Puglia, Ý, đã chạm mặt ba câu trai đến bơi lén trong bể bơi nhà bà cô, và cuộc đời cô sẽ thay đổi mãi mãi từ thời khắc ấy. Số phận của cô bỗng gắn chặt với Nicola, Tommaso, và nhất là Bern, người mà cô sẽ nảy nở một tình yêu vừa say đắm vừa ám ảnh. Khởi sự là một tình bạn ngây thơ và đẹp giữa bốn người, với những mùa hè chừng như không bao giờ kết thúc, cùng những rung động mới chớm đầy hứa hẹn, và một mối gắn kết keo sơn tưởng như không bao giờ tan vỡ, câu chuyện rất sớm hé lộ bên dưới nó những bí ẩn thăm thẳm, những góc khuất, những hiểu lầm của tuổi trưởng thành rồi sẽ làm sụp đổ hết thảy cảnh tượng êm đềm ấy.\r\n\r\n ', 11);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
