-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2013 at 07:48 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dongphuong`
--

-- --------------------------------------------------------

--
-- Table structure for table `bang_thong_so`
--

CREATE TABLE IF NOT EXISTS `bang_thong_so` (
  `ma_so` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` longtext COLLATE utf8_unicode_ci NOT NULL,
  `gia_tri` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bang_thong_so`
--


-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `noi_dung` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `noi_dung`) VALUES
(1, '&nbsp;<img src="/hinhanh_fckeditor/image/529301_357108311067615_237542489_n.jpg" width="960" height="355" alt="" />');

-- --------------------------------------------------------

--
-- Table structure for table `dulieu_mottin`
--

CREATE TABLE IF NOT EXISTS `dulieu_mottin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ten_menu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dulieu_mottin`
--


-- --------------------------------------------------------

--
-- Table structure for table `duongdan_quanly`
--

CREATE TABLE IF NOT EXISTS `duongdan_quanly` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ten_tham_so` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `duong_dan` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `duongdan_quanly`
--

INSERT INTO `duongdan_quanly` (`id`, `ten_tham_so`, `duong_dan`) VALUES
(1, 'them_menu_doc', 'chuc_nang/menu/menu_doc/them.php'),
(2, 'quan_ly_menu_doc', 'chuc_nang/menu/menu_doc/quanly.php'),
(3, '', 'index_2.php'),
(4, 'sua_menu_doc', 'chuc_nang/menu/menu_doc/sua.php'),
(5, 'quan_ly_menu_ngang', 'chuc_nang/menu/menu_ngang/quanly.php'),
(6, 'them_menu_ngang', 'chuc_nang/menu/menu_ngang/them.php'),
(7, 'them_san_pham', 'chuc_nang/San_pham/them.php'),
(8, 'quan_ly_san_pham', 'chuc_nang/San_pham/quanly.php'),
(9, 'sua_menu_ngang', 'chuc_nang/menu/menu_ngang/sua.php'),
(10, 'sua_san_pham', 'chuc_nang/San_pham/sua.php'),
(11, 'quan_ly_thanh_vien', 'chuc_nang/Member/quanly.php'),
(12, 'sua_thanh_vien', 'chuc_nang/Menber/sua.php'),
(13, 'quan_ly_hoa_don', 'chuc_nang/Hoadon/quanly.php'),
(14, 'quan_ly_trang_chu', 'chuc_nang/Quanly_trangchu/quanly.php'),
(15, 'quang_cao_phai', 'chuc_nang/Quangcao/Phai/quanly.php'),
(16, 'quang_cao_trai', 'chuc_nang/Quangcao/Trai/quanly.php'),
(17, 'them_quang_cao_trai', 'chuc_nang/Quangcao/Trai/them.php'),
(18, 'them_quang_cao_phai', 'chuc_nang/Quangcao/Phai/them.php'),
(19, 'sua_quang_cao_phai', 'chuc_nang/Quangcao/Phai/sua.php'),
(20, 'sua_quang_cao_trai', 'chuc_nang/Quangcao/Trai/sua.php'),
(21, 'sua_lien_he', 'chuc_nang/Hotro/Lienhe/lienhe.php'),
(22, 'quan_ly_truc_tuyen', 'chuc_nang/Hotro/Tructuyen/quanly.php'),
(23, 'sua_truc_tuyen', 'chuc_nang/Hotro/Tructuyen/sua.php'),
(24, 'them_truc_tuyen', 'chuc_nang/Hotro/Tructuyen/them.php'),
(25, 'sua_quan_tri', 'chuc_nang/Quantri/sua_taikhoan.php'),
(26, 'sua_banner', 'chuc_nang/Giaodien/Banner/sua.php'),
(27, 'sua_footer', 'chuc_nang/Giaodien/Footer/sua.php'),
(28, 'xem_hoa_don', 'chuc_nang/Hoadon/xem.php');

-- --------------------------------------------------------

--
-- Table structure for table `duongdan_trangngoai`
--

CREATE TABLE IF NOT EXISTS `duongdan_trangngoai` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ten_tham_so` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `duong_dan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `duongdan_trangngoai`
--

INSERT INTO `duongdan_trangngoai` (`id`, `ten_tham_so`, `duong_dan`) VALUES
(1, '', 'chuc_nang/San_pham/home.php'),
(2, 'chitiet_sanpham', 'chuc_nang/San_pham/chitiet_sanpham.php'),
(3, 'xem_gio_hang', 'chuc_nang/Giohang/chitiet_donhang.php'),
(4, 'lien_he', 'chuc_nang/Lienhe/lienhe.php'),
(5, 'xuat_san_pham', 'chuc_nang/San_pham/list_san_pham.php'),
(6, 'dang_ky', 'chuc_nang/Login_Logout/dang_ky.php'),
(7, 'quen_mat_khau', 'chuc_nang/Login_Logout/quen_mat_khau.php'),
(8, 'sua_thong_tin', 'chuc_nang/Login_Logout/sua_thong_tin_ca_nhan.php'),
(9, 'gioi_thieu', 'chuc_nang/Gioithieu/gioithieu.php'),
(10, 'bang_gia', 'chuc_nang/Banggia/banggia.php');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `noi_dung` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `noi_dung`) VALUES
(1, '<div><strong>Copyright &copy; 2013, Dong Phuong Hong Ha noi., Jsc,. All Rights Reserved.</strong></div>\r\n<div>Add: 15/29 Nguyá»…n ChÃ­ Thanh str., Hanoi ; Hotline: 0903228633 ; Fax: (04) 62731009</div>\r\n<div><em>Website: http://www.dongphuonghanoi.vn &nbsp; ; Email: dongphuonghn@gmail.com&nbsp;</em></div>');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE IF NOT EXISTS `hoa_don` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `don_hang` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ten_dang_nhap` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `don_hang`, `ho_ten`, `dia_chi`, `email`, `dien_thoai`, `noi_dung`, `ten_dang_nhap`) VALUES
(1, 'don_hang', 'POST[ho_ten]', 'POST[dia_chi]', 'POST[email]', 'POST[dien_thoai', 'noi_dung', 'kd'),
(2, '24___1______', 'camtuquanvn', 'Ha noi', 'chanhcoco2012@yahoo.com.vn', '0975118298', 'sagfdsgfdg', 'camtuquanvn');

-- --------------------------------------------------------

--
-- Table structure for table `hotro_tructuyen`
--

CREATE TABLE IF NOT EXISTS `hotro_tructuyen` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ten_nick` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hotro_tructuyen`
--

INSERT INTO `hotro_tructuyen` (`id`, `ten_nick`) VALUES
(1, '0975118298');

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE IF NOT EXISTS `lien_he` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noi_dung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mail` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`id`, `noi_dung`, `mail`) VALUES
(1, 'Cong ty co phan Dong phuong Hong HN', 'camtuquanvn@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vitri_menu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuoc_menu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `ten`, `vitri_menu`, `lien_ket`, `thuoc_menu`) VALUES
(28, 'THIáº¾T Bá»Š VÄ‚N PHÃ’NG', 'doc', '', ''),
(29, 'TB AN NINH AN TOÃ€N', 'doc', '', ''),
(24, 'Báº¢NG GIÃ', 'ngang', '?thamso=bang_gia', ''),
(22, 'HOME', 'ngang', 'index.php', ''),
(23, 'GIá»šI THIá»†U', 'ngang', '?thamso=gioi_thieu', ''),
(30, 'Dá»ŠCH Vá»¤ Ká»¸ THUáº¬T', 'doc', '', ''),
(25, 'TÆ¯ Váº¤N - Há»– TRá»¢', 'ngang', '?thamso=tu_van', ''),
(26, 'LIÃŠN Há»†', 'ngang', '?thamso=lien_he', ''),
(27, 'ÄÄ‚NG KÃ', 'ngang', '?thamso=dang_ky', ''),
(31, 'MÃ¡y chiáº¿u', 'doc', '', '28'),
(32, 'Camera', 'doc', '', '29');

-- --------------------------------------------------------

--
-- Table structure for table `quang_cao`
--

CREATE TABLE IF NOT EXISTS `quang_cao` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `vi_tri` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cao` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rong` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ten_file` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `vi_tri`, `cao`, `rong`, `ten_file`, `link`) VALUES
(3, 'trai', '150px', '150px', '531675_579837988711227_1688594300_n.jpg', 'http://mp3.zing.vn/bai-hat/Noi-Tinh-Yeu-Bat-Dau-Bang-Kieu-Lam-Anh/ZWZEBCC7.html');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE IF NOT EXISTS `san_pham` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ten` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `brochure` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(10) NOT NULL,
  `so_luong` int(5) NOT NULL,
  `so_luong_mua` int(11) NOT NULL,
  `thuoc_menu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trang_chu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `xuat_xu` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `bao_hanh` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lien_he` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `noi_dung`, `hinh_anh`, `brochure`, `gia`, `so_luong`, `so_luong_mua`, `thuoc_menu`, `trang_chu`, `xuat_xu`, `bao_hanh`, `lien_he`) VALUES
(29, 'MÃ¡y chiáº¿u Panasonic PT-LB51EA', '&nbsp;CÆ°á»ng Ä‘á»™ sÃ¡ng 2000 ansi lumens ; Äá»™ phÃ¢n giáº£i thá»±c (dpi) 1024 x 768dpi; Äá»™ phÃ¢n giáº£i nÃ©n(dpi) 1280 x 1024dpi ; CÃ´ng nghá»‡ mÃ¡y chiáº¿u LCD ; TÃ­n hiá»‡u Ä‘áº§u vÃ o/ra VGA , S-Video, Composite, Monitor Out, Audio In, RS-232 ; Sá»‘ mÃ u 16.777.216 máº§u ; Äá»™ tÆ°Æ¡ng pháº£n 400 :1 ; Tuá»•i thá» bÃ³ng Ä‘Ã¨n 3000 giá» - BÃ³ng Ä‘Ã¨n : 155W UHM ; Nguá»“n Ä‘iá»‡n 100-240V AC, 50/60Hz . GiÃ¡ trÃªn Ä‘Ã£ bao gá»“m 10% VAT.\r\n<div>&nbsp;</div>', 'PT-LB51EA.jpg', '', 1, 0, 0, '31', 'Co', 'Made in Japan', '12 thÃ¡ng', '0903228633'),
(28, ' MÃ¡y chiáº¿u Panasonic PT-F100EA', '&nbsp;<span style="font-family: Arial; font-size: 13px; text-align: justify;">MÃ¡y chiáº¿u chÃ­nh hÃ£ng Panasonic CÆ°á»ng Ä‘á»™ sÃ¡ng 3200 ANSI Lumen Äá»™ phÃ¢n giáº£i XGA (1024 x 768) Äá»™ tÆ°Æ¡ng pháº£n: 400 : 1 TÆ°Æ¡ng thÃ­ch chuáº©n HDTV CÃ´ng nghá»‡ tá»± Ä‘á»™ng cáº£m biáº¿n theo Ã¡nh sÃ¡ng tháº¿ há»‡ thá»© 3 (Daylight View 3); CÃ´ng nghá»‡ má»›i cá»§a Panasonic : Bá»™ lá»c bá»¥i cuá»‘n tá»± Ä‘á»™ng ARF (Auto Rolling Filter); giÃºp tÄƒng tuá»•i thá» bÃ³ng Ä‘Ã¨n vÃ  mÃ¡y lÃªn 1.5 &ndash; 2 láº§n. CÆ¡ cháº¿ báº£o vá»‡ bÃ³ng Ä‘Ã¨n khi ngáº¯t nguá»“n Ä‘á»™t ngá»™t (Direct Power Off) ; TrÃ¬nh chiáº¿u Ä‘á»“ng thá»i 02 tÃ­n hiá»‡u Ä‘áº§u vÃ o ; Trá»ng lÆ°á»£ng 7.5kg ( Ä‘Ã£ bao gá»“m pin); BÃ³ng Ä‘Ã¨n cá»±c tá»‘t, cÃ³ thá»ƒ chiáº¿u xuyÃªn qua lá»›p bá»¥i dÃ y ; PhÃ¹ há»£p vá»›i viá»‡c trÃ¬nh chiáº¿u táº¡i cÃ¡c nhÃ  mÃ¡y sáº£n xuáº¥t. GiÃ¡ trÃªn Ä‘Ã£ bao gá»“m 10% VAT</span>', 'PT-F100EA.jpg', '', 1, 0, 0, '31', 'Co', 'Made in Japan', '12 thÃ¡ng', '0903228633'),
(30, ' MÃ¡y chiáº¿u Panasonic PT-LB51NTEA', '&nbsp;<span style="font-family: Arial; font-size: 13px; text-align: justify;">CÆ°á»ng Ä‘á»™ sÃ¡ng 2000 Ansi Lumens; Äá»™ phÃ¢n giáº£i: XGA (1024*768)dpi; Tuá»•i thá» cá»§a Ä‘Ã¨n: 165W UHM; Äá»™ tÆ°Æ¡ng pháº£n: 400:1; Chá»©c nÄƒng chá»‰nh hÃ¬nh thang: Keystone Correctinon; KÃ­ch cá»¡ phÃ³ng to mÃ n hÃ¬nh: 33'' - 300''; Cháº¿ Ä‘á»™ Password báº£o vá»‡ mÃ¡y; Sá»­ dá»¥ng Card káº¿t ná»‘i khÃ´ng dÃ¢y vá»›i mÃ¡y tÃ­nh. GiÃ¡ trÃªn Ä‘Ã£ bao gá»“m 10% VAT.</span>', 'PT-LB51NTEA.jpg', '', 1, 0, 0, '31', 'Co', 'Made in Japan', '12 thÃ¡ng', '0903228633'),
(31, 'MÃ¡y chiáº¿u Panasonic PT-F100NTEA', '&nbsp;<span style="font-family: Arial; font-size: 13px; text-align: justify;">MÃ¡y chiáº¿u chÃ­nh hÃ£ng Panasonic CÆ°á»ng Ä‘á»™ sÃ¡ng 3200 ANSI Lumen ; Äá»™ phÃ¢n giáº£i XGA ( 1024 x 768 ); Äá»™ tÆ°Æ¡ng pháº£n: 400 : 1 ; TÆ°Æ¡ng thÃ­ch chuáº©n HDTV ; CÃ´ng nghá»‡ tá»± Ä‘á»™ng cáº£m biáº¿n theo Ã¡nh sÃ¡ng tháº¿ há»‡ thá»© 3 (Daylight View 3); CÃ´ng nghá»‡ káº¿t ná»‘i khÃ´ng dÃ¢y tiÃªn tiáº¿n nháº¥t tháº¿ há»‡ thá»© 7 cá»§a Panasonic ; cho kháº£ nÄƒng káº¿t ná»‘i cÃ¹ng lÃºc 16 mÃ¡y tÃ­nh vÃ o 1 mÃ¡y chiáº¿u ; CÃ´ng nghá»‡ má»›i cá»§a Panasonic : Bá»™ lá»c bá»¥i cuá»‘n tá»± Ä‘á»™ng ARF (Auto Rolling Filter); giÃºp tÄƒng tuá»•i thá» bÃ³ng Ä‘Ã¨n vÃ  mÃ¡y lÃªn 1.5 &ndash; 2 láº§n ; CÆ¡ cháº¿ báº£o vá»‡ bÃ³ng Ä‘Ã¨n khi ngáº¯t nguá»“n Ä‘á»™t ngá»™t (Direct Power Off) ; TrÃ¬nh chiáº¿u Ä‘á»“ng thá»i 02 tÃ­n hiá»‡u Ä‘áº§u vÃ o ; Trá»ng lÆ°á»£ng 7.5Kg( Ä‘Ã£ bao gá»“m pin) BÃ³ng Ä‘Ã¨n cá»±c tá»‘t, cÃ³ thá»ƒ chiáº¿u xuyÃªn qua lá»›p bá»¥i dÃ y ; PhÃ¹ há»£p vá»›i viá»‡c trÃ¬nh chiáº¿u táº¡i cÃ¡c nhÃ  mÃ¡y sáº£n xuáº¥t. GiÃ¡ trÃªn Ä‘Ã£ bao gá»“m 10% VAT.</span>', 'PT-F100NTEA.jpg', '', 1, 0, 0, '31', 'Co', 'Made in Japan', '12 thÃ¡ng', '0903228633'),
(32, 'Panasonic WV-NF 284E', '&nbsp;<span style="font-family: Arial; font-size: 13px; text-align: justify;">Camera máº¡ng bÃ¡n cáº§u mÃ u PTZ, chuáº©n MPEG-4/JPEG, PoE, 30fps, á»‘ng kÃ­nh tiÃªu cá»± thay Ä‘á»•i 2.8-10mm, káº¿t ná»‘i máº¡ng Lan/Internet, cÃ³ Microphone, há»— trá»£ ghi tháº» nhá»›, chá»©c nÄƒng phÃ¡t hiá»‡n chuyá»ƒn Ä‘á»™ng, 0.18lux, AGC, ALC, ELC, BLC, nguá»“n 24VAC/12VDC, 1/4CCD</span>', 'WV-NF_284E.jpg', '', 1, 0, 0, '32', 'Co', 'Made in Japan', '12 thÃ¡ng', '0903228633'),
(33, 'Panasonic WV-NF302E', '&nbsp;<span style="font-family: Arial; font-size: 13px; text-align: justify;">Camera máº¡ng bÃ¡n cáº§u cá»‘ Ä‘á»‹nh ngÃ y Ä‘Ãªm vá»›i cÃ¡c tÃ­nh nÄƒng: 1.3 megapixel CCD, 1,280 x 960 Megapixel high quality image, 2.8 ~ 10 mm, 3.6x varifocal lens, 1.5 lux at F1.3, MPEG-4 and JPEG, Power over Ethernet (PoE) IEEE 802.3af</span>', 'WV-NF302E.jpg', '', 1, 0, 0, '32', 'Co', 'Made in Japan', '12 thÃ¡ng', '0903228633'),
(34, 'Panasonic WV-NM100/G', '&nbsp;<span style="font-family: Arial; font-size: 13px; text-align: justify;">Camera máº¡ng, quay ngang (Pan) Max 140&deg;, quay dá»c (Tilt) Max 120&deg;, 1/4''CCD, frame rate 30hÃ¬nh/giÃ¢y, 8 preset position, MPEG-4/JPEG selectable, Alarm input, Alarm Output, 10/100 Base-T, kháº£ nÄƒng quan sÃ¡t 08 camera/2 pages Quad, DC9V Adaptor. Loáº¡i PTZ trong nhÃ  ná»‘i dÃ¢y (Indoor wired type)</span>', 'WV-NM100G.jpg', '', 1, 0, 0, '32', 'Co', 'Made in Japan', '12 thÃ¡ng', '0903228633'),
(35, 'Panasonic WV-NP240/G', '&nbsp;<span style="font-family: Arial; font-size: 13px; text-align: justify;">Camera máº¡ng 1/3''CCD 220-240VAC hoáº·c PoE DC48V, 1.1lux táº¡i F1.2, Há»— trá»£ ghi qua tháº» nhá»›, frame rate 30hÃ¬nh/giÃ¢y, Bandwidth Control, 4 screens x 2, chá»©c nÄƒng phÃ¡t hiá»‡n chuyá»ƒn Ä‘á»™ng, cÃ´ng nghá»‡ MPEG-4 &amp; JPEG, Resolution 640 x 480, zoom 3X, cÃ³ microphone, cá»•ng ra TV. Loáº¡i cÃ³ dÃ¢y (Wired type)</span>', 'WV-NP240G.jpg', '', 1, 0, 0, '32', 'Co', 'Made in Japan', '12 thÃ¡ng', '0903228633'),
(36, ' Panasonic WV-NP304E', '&nbsp;<span style="font-family: Arial; font-size: 13px; text-align: justify;">Camera máº¡ng ngÃ y Ä‘Ãªm, vá»›i cÃ¡c chá»©c nÄƒng: 1.3 megapixel CCD, 1,280 x 960 Megapixel high quality image, 1.5 lux (Color) at F1.4, MPEG-4 and JPEG, Power over Ethernet (PoE) IEEE 802.3af</span>', 'WV-NP304E.jpg', '', 1, 0, 0, '32', 'Co', 'Made in Japan', '12 thÃ¡ng', '0903228633'),
(37, 'Panasonic WV-NS202AE', '&nbsp;<span style="font-family: Arial; font-size: 13px; text-align: justify;">Camera máº¡ng bÃ¡n cáº§u mÃ u, CÃ´ng nghá»‡ Super Dynamic II, Zoom 220X (22X quang, 10X sá»‘), PoE IEEE 802.3af, chuáº©n MPEG-4/JPEG, giao tiáº¿p Ã¢m thanh 2 chiá»u, ghi hÃ¬nh báº±ng tháº» nhá»›, Ä‘áº§u ra cáº£i tiáº¿n, 1/4'' CCD, AGC, ALC, ELC, BLC Auto Function, Quay ngang (Pan) 0&deg;-350&deg;, dá»c (Tilt) -30&deg; tá»›i +90&deg;, 30fps, 0.07lux, nguá»“n 12VDC</span>', 'WV-NS202AE.jpg', '', 1, 0, 0, '32', 'Co', 'Made in Japan', '12 thÃ¡ng', '0903228633');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mota_ngan` longtext COLLATE utf8_unicode_ci NOT NULL,
  `anh_lon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh_nho` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `slideshow`
--


-- --------------------------------------------------------

--
-- Table structure for table `thanh_vien`
--

CREATE TABLE IF NOT EXISTS `thanh_vien` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mat_khau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_dai_dien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `thanh_vien`
--

INSERT INTO `thanh_vien` (`id`, `ten_dang_nhap`, `mat_khau`, `hinh_dai_dien`, `email`, `dien_thoai`, `dia_chi`) VALUES
(1, 'camtuquanvn', '123456789', '', 'camtuquanvn@gmail.com', '0978266568', 'ha noi '),
(2, 'thanhhoavn', '123456789', '', '0975118298@yahoo.com', '0975118298', 'bsdjgjdksghjkds');

-- --------------------------------------------------------

--
-- Table structure for table `thongtin_quantri`
--

CREATE TABLE IF NOT EXISTS `thongtin_quantri` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ky_danh` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mat_khau` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `thongtin_quantri`
--

INSERT INTO `thongtin_quantri` (`id`, `ky_danh`, `mat_khau`) VALUES
(1, 'admin', 'admin'),
(2, 'camtuquanvn', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE IF NOT EXISTS `tin_tuc` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tin_tuc`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
