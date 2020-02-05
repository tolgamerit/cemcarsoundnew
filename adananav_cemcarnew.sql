-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 05 Şub 2020, 15:11:37
-- Sunucu sürümü: 10.3.21-MariaDB-cll-lve
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `adananav_cemcarnew`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cms_contact`
--

CREATE TABLE `cms_contact` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `phone` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sending_date` datetime NOT NULL,
  `ip` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `cms_contact`
--

INSERT INTO `cms_contact` (`id`, `customer_name`, `email`, `phone`, `message`, `sending_date`, `ip`) VALUES
(1, 'Tolga Merit Tekin', 'tolgamerit@gmail.com', '+905465681237', 'deneme mesajım.', '0000-00-00 00:00:00', '31.223.25.141'),
(2, 'Tolga Merit Tekin', 'tolgamerit@gmail.com', '+905465681237', 'tarih', '0000-00-00 00:00:00', '31.223.25.141'),
(3, 'Tolga Merit Tekin', 'tolgamerit@gmail.com', '+905465681237', 'dsadsad', '0000-00-00 00:00:00', '31.223.25.141'),
(4, 'Tolga Merit Tekin', 'tolgamerit@gmail.com', '+905465681237', 'dedede', '2020-01-17 00:00:00', '31.223.25.141'),
(5, 'Tolga Merit Tekin', 'tolgamerit@gmail.com', '+905465681237', 'cdcdcd', '2020-01-17 08:02:49', '31.223.25.141'),
(6, 'test', 'test@mail.com', 'test', 'test', '2020-02-05 14:03:53', '95.70.228.222');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cms_products`
--

CREATE TABLE `cms_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `keywords` varchar(160) CHARACTER SET latin1 NOT NULL,
  `description` varchar(160) CHARACTER SET latin1 NOT NULL,
  `product_picture1` varchar(150) CHARACTER SET latin1 NOT NULL,
  `product_picture2` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `product_description` text CHARACTER SET latin1 DEFAULT NULL,
  `seflink` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `product_brand` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `car_brand` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `product_type` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `product_storage` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `product_ram` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `product_display` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `product_size` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `product_system` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `product_serial` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `product_warranty` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'aktif'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cms_products`
--

INSERT INTO `cms_products` (`id`, `product_name`, `keywords`, `description`, `product_picture1`, `product_picture2`, `product_description`, `seflink`, `product_brand`, `car_brand`, `product_type`, `product_storage`, `product_ram`, `product_display`, `product_size`, `product_system`, `product_serial`, `product_warranty`, `status`) VALUES
(1, 'Deneme Ürün', 'deneme keywords', 'deneme description', 'img/slider/slide2.jpg', 'img/slider/slide3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet aut cumque debitis deserunt dolor eaque hic impedit, incidunt laudantium nisi obcaecati odio quis saepe sequi sunt suscipit velit voluptatum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolorem, porro! Accusantium autem consequatur dignissimos ea explicabo, harum incidunt labore, magnam natus neque obcaecati possimus quaerat repellendus tempora tempore voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at atque cumque dignissimos ea, eligendi fuga fugit laborum maiores, minima nihil omnis quas qui quis quisquam ratione repudiandae tempore vero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequatur cum eum facere harum molestias, qui voluptate! Consequuntur cum dignissimos dolores exercitationem iusto libero quae quia quis quisquam ratione! Sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis dolorum eos eum fugit inventore magni, maiores nesciunt porro quia quibusdam quo rerum ullam unde veniam? Autem dignissimos facere ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam animi architecto aut cumque cupiditate debitis esse eum in minima minus molestiae, non numquam perferendis quis sequi similique suscipit voluptas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa error, esse ex minus nobis non recusandae veritatis! Aspernatur cumque distinctio, et, facilis, labore minima modi nihil nobis optio quidem soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ex laboriosam laborum optio perferendis quis quod, ullam velit. Earum eos illum inventore iure maxime minus mollitia nisi quis reprehenderit voluptatibus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt magnam neque nisi officia repellendus sint temporibus! Dicta fugiat magni nam neque, odio odit quae repellat, repudiandae suscipit tenetur ullam veritatis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem culpa cumque earum eligendi eos molestiae mollitia nihil, nulla odit officiis quam sequi similique, sint tempore ullam voluptates voluptatum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus harum inventore mollitia nobis rerum? Aperiam beatae consectetur illo iure minima nostrum quam sapiente tenetur ullam voluptatum. Eos iste quibusdam sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur consectetur corporis dolor doloremque eveniet excepturi fuga harum id inventore laborum minima, obcaecati quasi quia quis quos recusandae vitae voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad culpa deserunt eligendi, enim, eum harum id impedit itaque iure laboriosam maiores nesciunt nisi porro repudiandae, tempore tenetur vero voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam cupiditate deserunt esse quam rem voluptas! Accusamus aliquam blanditiis, cumque cupiditate dignissimos dolorem doloremque ex facere libero neque sed tempore.', 'deneme-urun', 'Cyclone', 'mercedes', 'tip1', '16GB', '2GB', '1024X640', '7\"', 'Android', '324856456', '24 AY', 'aktif'),
(2, 'Deneme Ürün3', 'deneme keywords', 'deneme description', 'img/slider/slide2.jpg', 'img/slider/slide3.jpg', '11Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet aut cumque debitis deserunt dolor eaque hic impedit, incidunt laudantium nisi obcaecati odio quis saepe sequi sunt suscipit velit voluptatum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolorem, porro! Accusantium autem consequatur dignissimos ea explicabo, harum incidunt labore, magnam natus neque obcaecati possimus quaerat repellendus tempora tempore voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at atque cumque dignissimos ea, eligendi fuga fugit laborum maiores, minima nihil omnis quas qui quis quisquam ratione repudiandae tempore vero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequatur cum eum facere harum molestias, qui voluptate! Consequuntur cum dignissimos dolores exercitationem iusto libero quae quia quis quisquam ratione! Sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis dolorum eos eum fugit inventore magni, maiores nesciunt porro quia quibusdam quo rerum ullam unde veniam? Autem dignissimos facere ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam animi architecto aut cumque cupiditate debitis esse eum in minima minus molestiae, non numquam perferendis quis sequi similique suscipit voluptas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa error, esse ex minus nobis non recusandae veritatis! Aspernatur cumque distinctio, et, facilis, labore minima modi nihil nobis optio quidem soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ex laboriosam laborum optio perferendis quis quod, ullam velit. Earum eos illum inventore iure maxime minus mollitia nisi quis reprehenderit voluptatibus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt magnam neque nisi officia repellendus sint temporibus! Dicta fugiat magni nam neque, odio odit quae repellat, repudiandae suscipit tenetur ullam veritatis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam autem culpa cumque earum eligendi eos molestiae mollitia nihil, nulla odit officiis quam sequi similique, sint tempore ullam voluptates voluptatum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus harum inventore mollitia nobis rerum? Aperiam beatae consectetur illo iure minima nostrum quam sapiente tenetur ullam voluptatum. Eos iste quibusdam sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur consectetur corporis dolor doloremque eveniet excepturi fuga harum id inventore laborum minima, obcaecati quasi quia quis quos recusandae vitae voluptates. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad culpa deserunt eligendi, enim, eum harum id impedit itaque iure laboriosam maiores nesciunt nisi porro repudiandae, tempore tenetur vero voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam cupiditate deserunt esse quam rem voluptas! Accusamus aliquam blanditiis, cumque cupiditate dignissimos dolorem doloremque ex facere libero neque sed tempore.', 'deneme-urun2', 'naviin', 'nissan', 'tip2', '32GB', '4GB', '1920X1080', '12\"', 'Windows', '324856457', '24 AY', 'pasif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cms_settings`
--

CREATE TABLE `cms_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(160) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `description` varchar(160) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(160) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `phone1` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `phone2` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `map` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `analytics` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `social_facebook` varchar(150) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `social_youtube` varchar(150) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `social_instagram` varchar(150) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `cms_settings`
--

INSERT INTO `cms_settings` (`id`, `site_name`, `keywords`, `description`, `mail`, `phone1`, `phone2`, `map`, `analytics`, `social_facebook`, `social_youtube`, `social_instagram`) VALUES
(1, 'Cem Car Sound', 'Adana,oto,ses,navigasyon,montajı', 'Adana oto ses ve navigasyon montajı, Adana görüntü sistemleri, Adana geri dönüş kamerası, En ucuz navigasyon montajı Adana', 'info@cemcarsound.com', '554 586 42 22', '545 220 09 01', '<iframe class=\"map\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.493355859901!2d35.32783431487138!3d36.998024979908294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f6b7b4f5fa7%3A0xeff8c934d6fe8f47!2sCEM+CAR+SOUND+Adana+Multimedya+Navigasyon+ve+Ses+Sistemleri+Montaj+Servis+ve+Yedek+Par%C3%A7a+Merkezi!5e0!3m2!1str!2str!4v1477313124563\"\r\n                        width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>', '<!-- Global site tag (gtag.js) - Google Analytics --> <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-65870109-2\"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag(\'js\', new Date());    gtag(\'config\', \'UA-65870109-2\'); </script>', 'https://www.facebook.com/CEMCARSOUND/', 'https://www.youtube.com/channel/UCjaxbzMsaM76e-28WtFJZ8Q', 'https://www.instagram.com/cemcarsound/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cms_users`
--

CREATE TABLE `cms_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `cms_users`
--

INSERT INTO `cms_users` (`id`, `username`, `password`) VALUES
(1, '21232f297a57a5a743894a0e4a801fc3', '662a01d2f36f8e47aadcbfc97aeae7f7');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cms_contact`
--
ALTER TABLE `cms_contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cms_products`
--
ALTER TABLE `cms_products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cms_settings`
--
ALTER TABLE `cms_settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cms_users`
--
ALTER TABLE `cms_users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cms_contact`
--
ALTER TABLE `cms_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `cms_products`
--
ALTER TABLE `cms_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `cms_settings`
--
ALTER TABLE `cms_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `cms_users`
--
ALTER TABLE `cms_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
