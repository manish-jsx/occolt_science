-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2024 at 05:32 AM
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
-- Database: `occultscience`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `confirm_password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$TPAWp0Hei5KdlWMD6o8NteFblQEeEkwH9yNRA.PeWlvinkgOC6g6i', '$2y$12$YiTOPH/fE2TAB3Cq22GP7.XRHijtNQL.CZj1YoNQoOlTbv46f3JG2', '2024-03-26 08:25:22', '2024-07-09 22:16:55');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `title`, `status`, `created_at`, `updated_at`) VALUES
(3, '2961720590939_slider1.jpg', 'Convocation', 1, '2024-07-10 00:25:41', '2024-07-10 00:25:41'),
(4, '5341720590956_slider2.jpg', 'Convocation', 1, '2024-07-10 00:25:56', '2024-07-10 00:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `title`, `slug`, `short_description`, `full_description`, `status`, `created_at`, `updated_at`) VALUES
(5, '1581713542262_images.jpeg', 'The Ultimate Guide', 'the-ultimate-guide', 'Leather is, of course, the most common type of material for casual belts, and as we learned in the dress belts section, you should ALWAYS choose a \"full grain leather\" belt. This is actually even more important for a casual belt, if you can believe that, as many people wear their belt on a daily basis, and it will tend to break down quickly, unless it\'s made from full grain leather.', '<p>Pretty much every part a man&#39;s outfit gets significantly more attention than the lowly belt. It&#39;s treated more like a utility than a fashion piece, and as such, ends up being a product that&#39;s picked up as an after thought, rather than one that&#39;s sought out.</p>\r\n\r\n<p>In reality though, it should be just the opposite. If you&#39;re looking to differentiate yourself or make a statement, your belt should be one of the first places that you start.</p>\r\n\r\n<p>A high quality brown or black belt will add a necessary touch to complete an outfit, while a colorful exotic or statement belt can become the centerpiece of the whole outfit.</p>\r\n\r\n<p>In this guide, we&#39;ll walk you through how to choose the right belt for your specific situation.</p>', '1', '2024-04-19 19:49:03', '2024-04-19 19:57:42'),
(6, '3631713542151_919a9ac28d654defe2849186c714c5dc.jpg', 'Where To Repair Leather Belt', 'where-to-repair-leather-belt', 'Leather belts are timeless accessories that serve both functional and fashion purposes. They complete an outfit, ensuring that your trousers fit snugly while adding a final touch of style to your look. However, as with all things cherished and frequently used, they are prone to wear and tear. Scratches, scuffs, stretches, or even the complete breakage of the leather can occur over time, detracting from the belt’s aesthetic appeal and functionality. Knowing where and how to repair your leather belt is crucial. It not only extends the life of your beloved accessory but also maintains its elegance, making it an essential skill for the style-conscious and practical alike.', '<p><strong>Preparing for Repair</strong></p>\r\n\r\n<p><em>Tools and Materials Needed:</em>&nbsp;Embarking on a leather belt repair journey requires a basic set of tools and materials. Leather conditioner, a soft cloth, a leather repair kit (for more severe damages), and possibly a good-quality leather dye are essential. These tools will help you address most common issues, from superficial scratches to deeper cracks.</p>\r\n\r\n<p><em>Assessing the Damage:</em>&nbsp;Before proceeding with any repair, a thorough assessment of the belt&rsquo;s condition is necessary. Determine the extent of the damage and the type of leather you&rsquo;re dealing with. This step is crucial for choosing the most effective repair method. For instance, superficial scratches might only need conditioning, while a torn belt could require patching or stitching, necessitating a more complex approach.</p>', '1', '2024-04-19 19:55:52', '2024-04-19 19:55:52'),
(7, '5551713542537_images (1).jpeg', 'How Can You Tell It A Leather Belt Is Real', 'how-can-you-tell-it-a-leather-belt-is-real', 'Leather belts are more than just a functional accessory; they’re a statement of style, quality, and durability. But in a market flooded with imitations, how can you tell if a leather belt is real? This guide will arm you with knowledge and tips to discern genuine leather from faux, ensuring your next purchase is authentic.', '<p><strong>The Importance of Real Leather</strong></p>\r\n\r\n<p>Real leather is prized for its durability, aging quality, and texture. Understanding the value of genuine leather is key to appreciating why it&rsquo;s worth the investment.</p>\r\n\r\n<p><strong>Understanding Leather Types</strong></p>\r\n\r\n<ul>\r\n	<li><strong><a href=\"https://leatherbeltsonline.com/product-category/mens-belts/full-grain-leather-belts/\">Full-Grain Leather:</a></strong>&nbsp;The highest quality, including all layers of hide. It ages well, developing a patina.</li>\r\n	<li><strong>Top-Grain Leather:</strong>&nbsp;Second highest quality, slightly refined, retains durability with a smoother finish.</li>\r\n	<li><strong>Genuine Leather:</strong>&nbsp;More processed, less durable than top-grain, but still real leather.</li>\r\n	<li><strong>Bonded Leather:</strong>&nbsp;Made from leather scraps bonded together, least durable, and often misrepresented.</li>\r\n</ul>\r\n\r\n<p><strong>Visual Inspection</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surface Texture:</strong>&nbsp;Genuine leather has a unique, irregular texture, whereas faux leather is overly uniform.</li>\r\n	<li><strong>Edge Appearance:</strong>&nbsp;Real leather edges are rougher and may show layers, unlike the smooth edges of faux products.</li>\r\n	<li><strong>Color Uniformity:</strong>&nbsp;Genuine leather shows slight color variations, an indicator of its natural origin.</li>\r\n</ul>\r\n\r\n<p><strong>The Water Drop Test</strong></p>\r\n\r\n<p>Real leather absorbs moisture; a few drops of water will darken genuine leather, but will bead on synthetic surfaces.</p>\r\n\r\n<p><strong>Tactile Tests</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Flexibility:</strong>&nbsp;Real leather is naturally flexible with a unique range of motion.</li>\r\n	<li><strong>Warmth and Texture:</strong>&nbsp;Genuine leather feels warm and soft, while faux leather tends to be cold and rigid.</li>\r\n	<li><strong>Smell Test:</strong>&nbsp;Real leather has a distinctive, natural smell; synthetic materials often have a plastic-like or chemical odor.</li>\r\n</ul>\r\n\r\n<p><strong>The Burn Test</strong></p>\r\n\r\n<p>While not recommended due to potential damage, real leather chars slightly and smells like burnt hair; faux leather melts and smells like burning plastic.</p>\r\n\r\n<p><strong>Price and Brand Verification</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Price Check:</strong>&nbsp;Genuine leather typically commands a higher price due to its quality and durability.</li>\r\n	<li><strong>Brand Authenticity:</strong>&nbsp;Trustworthy brands are more likely to sell genuine leather, but always verify.</li>\r\n</ul>\r\n\r\n<p><strong>Certification and Labels</strong></p>\r\n\r\n<p>Look for labels or certifications that indicate the type of leather, its origin, and the manufacturing process.</p>\r\n\r\n<p><strong>Longevity and Durability</strong></p>\r\n\r\n<p>Real leather belts are known for their longevity, capable of lasting years with proper care, unlike their synthetic counterparts.</p>\r\n\r\n<p><strong>Environmental and Ethical Considerations</strong></p>\r\n\r\n<p>Genuine leather has environmental impacts, but it&rsquo;s also a byproduct of the meat industry, utilizing materials that might otherwise go to waste. Ethical sourcing is crucial.</p>\r\n\r\n<p><strong>Conclusion</strong></p>\r\n\r\n<p>Distinguishing real leather from faux requires a keen eye, knowledge of materials, and sometimes, a bit of testing. Investing in a genuine&nbsp;<a href=\"https://leatherbeltsonline.com/\">leather belt</a>&nbsp;means choosing longevity, quality, and timeless style. With these tips, you&rsquo;re well-equipped to make an informed decision on your next leather belt purchase.</p>', '1', '2024-04-19 20:02:17', '2024-04-19 20:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Men\'s Belt', 'mens-belt', '1', '2024-03-26 05:47:53', '2024-03-29 08:27:17'),
(3, 'Women\'s Belt', 'womens-belt', '1', '2024-03-27 23:10:44', '2024-03-29 08:28:31'),
(4, 'Wallet', 'wallet', '1', '2024-03-27 23:10:51', '2024-03-29 08:29:02'),
(5, 'Bags', 'bags', '1', '2024-03-27 23:11:03', '2024-03-29 08:29:22'),
(10, 'Women\'s Bag', 'womens-bag', '1', '2024-04-25 19:48:58', '2024-04-25 19:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone`, `email`, `course_name`, `message`, `created_at`, `updated_at`) VALUES
(25, 'Leslie Alexander', '6376206155', 'bhupender.tarun2@gmail.com', 'Palmistry Course', 'test', '2024-07-11 04:33:13', '2024-07-11 04:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genral_enquiries`
--

CREATE TABLE `genral_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genral_enquiries`
--

INSERT INTO `genral_enquiries` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(5, 'Bagpack', '6376206155', 's@gmail.com', '2024-07-11 04:38:57', '2024-07-11 04:38:57'),
(6, 'Bagpack', '6376206155', 'vijaypal92276@gmail.com', '2024-07-11 04:39:19', '2024-07-11 04:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `image_galleries`
--

CREATE TABLE `image_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_galleries`
--

INSERT INTO `image_galleries` (`id`, `image_section`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, '1', '2941720596363_img2n.jpeg', NULL, '2024-07-10 01:56:03', '2024-07-10 01:56:03'),
(4, '1', '5421720596375_img2m.jpeg', NULL, '2024-07-10 01:56:16', '2024-07-10 01:56:16'),
(5, '2', '6781720596386_img2l.jpeg', NULL, '2024-07-10 01:56:27', '2024-07-10 01:56:27'),
(6, '2', '3861720596398_img2k.jpeg', NULL, '2024-07-10 01:56:38', '2024-07-10 01:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_26_060838_create_enquiries_table', 1),
(6, '2024_03_26_082138_create_admins_table', 2),
(7, '2024_03_26_105619_create_categories_table', 3),
(8, '2024_03_26_113335_create_subcategories_table', 4),
(9, '2024_03_26_123317_create_blogs_table', 5),
(10, '2014_10_12_100000_create_password_resets_table', 6),
(11, '2024_02_26_131114_create_products_table', 6),
(12, '2024_03_27_081804_create_testimonials_table', 7),
(13, '2024_03_28_052926_create_contact_us_table', 8),
(14, '2024_07_09_110104_create_banners_table', 9),
(15, '2024_07_09_114230_create_syllabi_table', 10),
(16, '2024_07_09_122740_create_image_galleries_table', 11),
(17, '2024_07_09_130707_create_video_galleries_table', 12),
(18, '2024_07_10_060429_create_genral_enquiries_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `discount_price` double(8,2) NOT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `product_name`, `slug`, `product_image`, `price`, `discount_price`, `full_description`, `color`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 3, 'MIPL-BLT-25', 'mipl-blt-25', '6421711977517_product-autolock-img-01.jpg', 1899.00, 1299.00, '-Easy use just slide the dress belt into the sliding buckle and pull the belt through, the nice belts buckle simply auto locks the automatic belt, to release the belt, gently push the lever on the side of the removable buckle and lock will snap. Simple, smooth and sleek\r\n\r\n-Disclaimer: all our products are made from genuine leather. Due to the nature of natural leather, there may be slight variations in color and texture between pictures actual product. Also color may slightly vary due to lighting on the photography\r\n\r\n-Maximum durability presenting the perfect look of a fine, high quality belt for men, complemented with a highly fashionable stylish and interchangeable buckle that is elegantly designed with class. Scratch resistant durable buckles made to last\r\n\r\n-No more holes CONTACTS auto lock buckle belt provides unique adjustments for an extremely comfortable.', 'red, brown, black', '1', '2024-03-27 23:15:20', '2024-04-25 20:33:04'),
(8, 1, 9, 'MIPL-BLT-24', 'mipl-blt-24', '6801711977647_p-05.jpg', 599.00, 399.00, '100% genuine Leather Belt', 'red, brown, black', '1', '2024-03-31 09:41:59', '2024-04-25 20:34:27'),
(9, 5, 6, 'MIPL-BAG-01', 'mipl-bag-01', '5261712513564_WhatsApp Image 2024-02-10 at 3.11.22 PM.jpeg', 2499.00, 1799.00, 'Genuine Leather bag pack for man\'s and woman\'s', 'All Colors', '1', '2024-04-07 22:12:44', '2024-04-07 22:12:44'),
(10, 5, 19, 'MIPL-BAG-02', 'mipl-bag-02', '2611712513750_WhatsApp Image 2024-02-10 at 3.11.19 PM (2).jpeg', 2999.00, 1999.00, 'Genuine Leather Laptop Bag Dual Compartment \r\nThis Classic Laptop bag made of high-quality genuine leather can carry your laptop, documents, files, and much more. With plenty of pockets and compartments, this bag is both spacious and high utility. It also doubles up as a short travel bag making it really convenient. Being a premium and high-value proposition, it is an ideal gift for any occasion as well.', 'All Colors', '1', '2024-04-07 22:15:50', '2024-04-07 22:15:50'),
(11, 5, 20, 'MIPL-BAG-03', 'mipl-bag-03', '8551712514043_WhatsApp Image 2024-02-10 at 3.11.22 PM (2).jpeg', 1599.00, 899.00, 'Compact size and thoughtful organization can hold all your essentials in between transits. A zipper bock at the back to keep your valuables. Houses a slip in pocket, a zipper pocket and a spacious open compartment for maximum storage.', 'All Colors', '1', '2024-04-07 22:20:43', '2024-04-07 22:20:43'),
(12, 4, 5, 'MIPL-WLT-07', 'mipl-wlt-07', '1551713440029_WhatsApp-Image-2023-01-02-at-4.20.12-PM-1.jpeg', 499.00, 299.00, 'It has double stitch leather wallet.', 'Black, Brawn', '1', '2024-04-07 22:27:28', '2024-04-18 15:33:49'),
(13, 1, 11, 'MIPL-BLT-08', 'mipl-blt-08', '1691712855022_Remove background project-16.jpeg', 499.00, 299.00, 'Full Grain Genuine Leather Belt for Men', 'All Colors', '1', '2024-04-11 21:03:42', '2024-04-11 21:03:42'),
(14, 1, 11, 'MIPL-BLT-15', 'mipl-blt-15', '2651712855107_WhatsApp Image 2024-02-10 at 2.35.40 PM (2).jpeg', 499.00, 299.00, 'Full Grain Genuine Leather Belt for Men', 'All Colors', '1', '2024-04-11 21:05:07', '2024-04-11 21:05:07'),
(15, 1, 10, 'MIPL-BLT-22', 'mipl-blt-22', '6161713537268_WhatsApp Image 2024-02-10 at 2.38.29 PM.jpeg', 799.00, 599.00, 'Men\'s 100% Genuine leather Riversible Belt', '(Black, Brown), ( Black, Tan )', '1', '2024-04-11 21:07:48', '2024-04-19 18:34:28'),
(16, 1, 7, 'MIPL-BLT-05', 'mipl-blt-05', '1861712855561_Remove background project-7.jpeg', 499.00, 299.00, 'Football Printed Casual Black Color Genuine Leather Belts For Men', 'All Colors', '1', '2024-04-11 21:12:41', '2024-04-11 21:12:41'),
(17, 1, 8, 'MIPL-BLT-23', 'mipl-blt-23', '3071712856022_WhatsApp Image 2024-02-10 at 2.52.56 PM (2).jpeg', 799.00, 599.00, 'Leather Handcrafted Unisex Belt', 'All Colors', '1', '2024-04-11 21:20:22', '2024-04-11 21:20:22'),
(18, 3, 24, 'MIPL-WBLT-02', 'mipl-wblt-02', '7521712856325_WhatsApp Image 2024-02-10 at 2.54.23 PM.jpeg', 499.00, 249.00, 'Women Black Leather Formal Premium Casual Slim Belts For Ladies.', 'All Colors', '1', '2024-04-11 21:25:25', '2024-04-11 21:25:25'),
(19, 3, 25, 'MIPL-WBLT-06', 'mipl-wblt-06', '2391712856580_WhatsApp Image 2024-02-10 at 2.59.17 PM (1).jpeg', 499.00, 249.00, 'Women Leather Causal Belt Premium Casual Slim Belts For Ladies.', 'All Colors', '1', '2024-04-11 21:29:40', '2024-04-11 21:29:40'),
(20, 3, 26, 'MIPL-WBLT-07', 'mipl-wblt-07', '7571712856793_WhatsApp Image 2024-02-10 at 2.59.17 PM.jpeg', 699.00, 499.00, 'Pure Genuine Leather, Girls/Women', 'All Colors', '1', '2024-04-11 21:33:14', '2024-04-11 21:33:14'),
(21, 1, 4, 'MIPL-BLT-04', 'mipl-blt-04', '4291713435823_SD-21404_1.jpg', 599.00, 499.00, 'Men\'s Crocodile 100% Genuine leather Belt (Tan)', 'Tan', '1', '2024-04-18 14:23:44', '2024-04-18 14:23:44'),
(22, 1, 7, 'MIPL-BLT-09', 'mipl-blt-09', '1311713436176_SD-21401_1.jpg', 499.00, 399.00, 'Men\'s Jungle Print 100% Genuine leather Belt ( Black )', 'Black', '1', '2024-04-18 14:29:36', '2024-04-18 14:29:36'),
(23, 1, 4, 'MIPL-BLT-20', 'mipl-blt-20', '9661713437217_SD-21403_1.jpg', 499.00, 399.00, 'Men\'s 100% Genuine Leather Belt ( Brown )', 'Brown', '1', '2024-04-18 14:46:57', '2024-04-18 14:46:57'),
(24, 1, 4, 'MIPL-BLT-19', 'mipl-blt-19', '2921713437673_SD-21406_1.jpg', 599.00, 499.00, 'Men\'s 100% Genuine Leather Belt ( Black )', 'Black', '1', '2024-04-18 14:54:33', '2024-04-18 14:54:33'),
(25, 1, 4, 'MIPL-BLT-11 (BROWN)', 'mipl-blt-11-brown', '5311713438121_SD-21405_1.jpg', 499.00, 399.00, 'Men\'s 100% Genuine leather Belt ( Brown )', 'Brown', '1', '2024-04-18 15:02:01', '2024-04-26 17:51:15'),
(26, 1, 4, 'MIPL-BLT-10', 'mipl-blt-10', '2491713438316_SD-21407_1.jpg', 499.00, 399.00, 'Men\'s 100% Genuine leather Belt ( Brown )', 'Brown', '1', '2024-04-18 15:05:16', '2024-04-18 15:05:16'),
(27, 4, 14, 'MIPL-WLT-06', 'mipl-wlt-06', '1931713438809_WhatsApp-Image-2023-01-02-at-4.21.15-PM.jpeg', 599.00, 299.00, 'Men\'s 100% Genuine leather Wallet ( Brown )', 'Brown', '1', '2024-04-18 15:13:29', '2024-04-18 15:13:29'),
(28, 4, 21, 'MIPL-WLT-04', 'mipl-wlt-04', '3771713438982_WhatsApp-Image-2023-01-02-at-4.19.20-PM.jpeg', 599.00, 299.00, 'Men\'s 100% Genuine leather Wallet ( Brown )', 'Brown', '1', '2024-04-18 15:16:22', '2024-04-18 15:16:22'),
(29, 1, 7, 'MIPL-BLT-17', 'mipl-blt-17', '9261713541336_3001713441092_WhatsApp Image 2024-02-06 at 6.11.49 PM (1)-Photoroom.png-Photoroom.png', 499.00, 349.00, 'Mens 100% Top Grain Genuine Leather Belt (Tan)', 'Tan', '1', '2024-04-18 15:51:32', '2024-04-19 19:42:17'),
(30, 1, 4, 'MIPL-BLT-07', 'mipl-blt-07', '7941714138338_MIPL-BLT-07-04, (TAN).jpeg', 599.00, 499.00, 'Men\'s 100% Genuine Leather Belt ( Brown)', 'Brown', '1', '2024-04-18 15:58:10', '2024-04-26 17:32:18'),
(31, 1, 4, 'MIPL-BLT-12', 'mipl-blt-12', '4081713441767_Remove background project-31.jpeg', 499.00, 349.00, 'Men\'s 100% Genuine Leather Belt (Black)', 'Black', '1', '2024-04-18 16:02:47', '2024-04-18 16:02:47'),
(32, 1, 4, 'MIPL-BLT-16 (TAN)', 'mipl-blt-16-tan', '1521714138994_IMG_1581.JPG', 599.00, 399.00, 'Men\'s 100% Genuine Crunch leather Belt (Brown)', 'Brown', '1', '2024-04-18 16:29:09', '2024-04-26 17:43:14'),
(33, 4, 15, 'MIPL-WLT-10', 'mipl-wlt-10', '7471713525274_MIPL-WLT-10.jpeg', 799.00, 499.00, 'Men\'s 100% Genuine NDM Leather Wallet (Blue)', 'Blue', '1', '2024-04-19 15:14:34', '2024-04-19 15:14:34'),
(34, 4, 18, 'MIPL-WLT-09', 'mipl-wlt-09', '6691713526059_MIPL-WLT-09.jpeg', 799.00, 499.00, 'Men\'s 100% Genuine Leather Belt', 'Olive Green', '1', '2024-04-19 15:27:39', '2024-04-19 15:27:39'),
(35, 4, 17, 'MIPL-WLT-11', 'mipl-wlt-11', '5801713526319_MIPL-WLT-11.jpeg', 799.00, 499.00, '100% GENIUNE LEATHER TWO FOLD WALLET FOR MEN’S (BROWN)', 'Brown', '1', '2024-04-19 15:31:59', '2024-04-19 15:31:59'),
(36, 4, 21, 'MIPL-WLT-12', 'mipl-wlt-12', '9311713526604_MIPL-WLT-12.jpeg', 799.00, 499.00, 'Men\'s 100% Genuine leather Wallet (Brown)', 'Brown', '1', '2024-04-19 15:36:44', '2024-04-19 15:36:44'),
(37, 4, 22, 'MIPL-WLT-13', 'mipl-wlt-13', '8271713534642_MIPL-WLT-13.jpeg', 799.00, 499.00, 'Men\'s 100% Genuine Leather Wallet, Pattern :- Crocodile', 'Black & Brown', '1', '2024-04-19 17:50:42', '2024-04-19 17:50:42'),
(38, 1, 10, 'MIPL-BLT-26', 'mipl-blt-26', '2351713537128_rvrsble.jpg', 799.00, 599.00, 'Men\'s 100% Genuine leather Riversible Belt', 'Black & Brown', '1', '2024-04-19 18:32:09', '2024-04-19 18:32:09'),
(39, 1, 3, 'MIPL-BLT-27', 'mipl-blt-27', '7651713537952_61pPNY6robL._SY879_.jpg', 699.00, 499.00, 'Men\'s Autolock Belt ( Brown), 100% Genuine leather', 'Brown', '1', '2024-04-19 18:44:43', '2024-04-19 18:45:52'),
(41, 1, 4, 'MIPL-BeLT', 'mipl-belt', '6301713540319_2-Photoroom.png-Photoroom.png', 1499.00, 1199.00, 'Men\'s 100% Genuine Leather Belt', 'Brown colour', '1', '2024-04-19 19:25:20', '2024-04-25 20:14:46'),
(42, 1, 3, 'MIPL-BLTb', 'mipl-bltb', '8251713540903_4.jpg', 1299.00, 899.00, 'Men\'s 100% Genuine Leather Belt', 'Black colour', '1', '2024-04-19 19:35:03', '2024-04-25 20:13:48'),
(43, 1, 3, 'MIPL-BLT .', 'mipl-blt', '2651713541125_4G0A2366-850x550.JPG.webp', 899.00, 599.00, 'Men\'s 100% Genuine Leather Belt', 'Black colour', '1', '2024-04-19 19:38:45', '2024-04-25 20:15:11'),
(44, 5, 6, 'Plain Mi', 'plain-mi', '7531713543808_custom-genuine-oem-leather-backpack.jpg', 1499.00, 999.00, 'Custom Genuine Leather Backpack', 'All Colors', '1', '2024-04-19 20:23:28', '2024-04-25 20:15:41'),
(45, 5, 6, 'MIPL-BAG', 'mipl-bag', '8471713544080_51DmIVl7oyL._SL1050_.jpg', 1199.00, 799.00, 'Custom Genuine Leather Backpack', 'All Colors', '1', '2024-04-19 20:28:00', '2024-04-25 20:15:59'),
(46, 3, 24, 'MIPL-BLT-99', 'mipl-blt-99', '3481713544328_MG_1550_1200x.jpg', 599.00, 399.00, 'Women Genuine Leather Belt', 'All Colors', '1', '2024-04-19 20:32:08', '2024-04-25 20:16:18'),
(47, 3, 24, 'MIPL-BLT-98', 'mipl-blt-98', '3101713544483_hmgoepprod.jpeg', 599.00, 399.00, 'Women Genuine Leather Belt', 'All Colors', '1', '2024-04-19 20:34:43', '2024-04-25 20:16:58'),
(48, 3, 25, 'MIPL-BLT-009', 'mipl-blt-009', '4581713617363_152065240-113372162-1614884027.jpg', 799.00, 499.00, 'Women Leather Causal Belt Premium Casual Slim Belts For Ladies.', 'All Colors', '1', '2024-04-20 16:49:23', '2024-04-25 20:17:19'),
(49, 5, 19, 'MIPL-BAG-002', 'mipl-bag-002', '8531713617603_41IOCrws9YL.jpg', 8999.00, 5999.00, 'Genuine Leather Laptop Bag', 'All Colors colour', '1', '2024-04-20 16:53:23', '2024-04-25 20:17:34'),
(50, 10, 30, 'MIPL-BAG-008', 'mipl-bag-008', '2541714061140_81eaQxolQ7L._AC_UY1000_DpWeblab_.jpg', 8999.00, 5999.00, 'Women\'s Leather Designer Handbag', 'tan colour', '1', '2024-04-25 20:05:40', '2024-04-25 20:17:54'),
(51, 10, 30, 'MIPL-BAG-009', 'mipl-bag-009', '3741714061433_71FEAFOrWZL._SY695_.jpg', 8999.00, 4999.00, 'Leather Women\'s Handbag', 'Tan colour', '1', '2024-04-25 20:10:33', '2024-04-25 21:10:09'),
(52, 3, 24, 'MIPL-BLT-32', 'mipl-blt-32', '4981714062529_formal-wear-leather-belts-for-ladies-754.jpg', 1299.00, 899.00, '100% Leather Belts For Ladies', 'All Colors', '1', '2024-04-25 20:28:49', '2024-04-25 20:28:49'),
(53, 10, 30, 'MIPL-BAG-076', 'mipl-bag-076', '7671714063401_ladies-office-bags.jpg', 11999.00, 8999.00, '100% leather finished', 'Black colour', '1', '2024-04-25 20:43:21', '2024-04-25 20:43:21'),
(54, 5, 20, 'MIPL-BAG-111', 'mipl-bag-111', '3221714064944_ladies-designer-leather-sling-bag.jpg', 1599.00, 999.00, 'Ladies Designer Leather Sling Bag', 'Brown colour', '1', '2024-04-25 21:09:04', '2024-04-25 21:09:04'),
(55, 5, 6, 'MIPL-BACKPACK-02', 'mipl-backpack-02', '9551714123737_0A2A7007-scaled.jpg', 6999.00, 2999.00, 'Men\'s 100% Genuine Leather Backpack', 'Brown', '1', '2024-04-26 13:28:57', '2024-04-26 13:28:57'),
(56, 5, 6, 'MIPL-BACKPACK-03', 'mipl-backpack-03', '8471714124151_0A2A7012-scaled.jpg', 5999.00, 2499.00, 'Men\'s 100% Genuine Leather Backpack', 'Brown', '1', '2024-04-26 13:35:52', '2024-04-26 13:35:52'),
(57, 5, 6, 'MIPL-BACKPACK-04', 'mipl-backpack-04', '7301714124471_0A2A6998-scaled.jpg', 5999.00, 2499.00, 'Men\'s 100% Genuine Leather Backpack', 'Light Brown', '1', '2024-04-26 13:41:12', '2024-04-26 13:41:12'),
(58, 5, 19, 'MIPL-LAPTOPBAG-03', 'mipl-laptopbag-03', '3891714125120_von-baer-city-mens-leather-business-laptop-bag-brown-with-male-model_2048x2048.jpg', 6999.00, 2999.00, 'Men\'s 100% Genuine Leather Laptop Bag', 'Brown', '1', '2024-04-26 13:52:01', '2024-04-26 13:52:01'),
(59, 5, 19, 'MIPL-LAPTOPBAG-04', 'mipl-laptopbag-04', '1291714125721_13-1200x1500.jpg', 7999.00, 3499.00, 'Men\'s 100% Genuine Leather Crunch Green Laptop Bag', 'Olive Green', '1', '2024-04-26 14:02:01', '2024-04-26 14:02:01'),
(60, 5, 19, 'MIPL-LAPTOPBAG-05', 'mipl-laptopbag-05', '5041714126019_DSC063591.jpg', 7999.00, 3999.00, 'Men\'s 100% Genuine Leather Olive Crunch Laptop Bag', 'Brown', '1', '2024-04-26 14:06:59', '2024-04-26 14:06:59'),
(61, 1, 4, 'MIPL-BLT-07 (BLACK)', 'mipl-blt-07-black', '3201714138309_MIPL-BLT-07-1.jpeg', 799.00, 499.00, 'Men\'s 100% Genuine Leather Belt (Black)', 'Black', '1', '2024-04-26 17:31:49', '2024-04-26 17:31:49'),
(62, 1, 4, 'MIPL-BLT-07 (BROWN)', 'mipl-blt-07-brown', '4481714138533_Remove background project-4.jpeg', 799.00, 499.00, 'Men\'s 100% Genuine Leather Belt (Brown)', 'Brown', '1', '2024-04-26 17:35:33', '2024-04-26 17:35:33'),
(63, 1, 4, 'MIPL-BLT-08 (BROWN)', 'mipl-blt-08-brown', '9611714138799_Remove background project-4.jpeg', 699.00, 399.00, 'Men\'s 100% Genuine Leather Belt (Brown)', 'Brown', '1', '2024-04-26 17:39:59', '2024-04-26 17:39:59'),
(64, 1, 4, 'MIPL-BLT-16 (BROWN)', 'mipl-blt-16-brown', '5691714138953_MIPL-BLT-16,(BROWN), 02 .jpeg', 799.00, 499.00, 'Men\'s 100% Genuine Leather belt', 'Brown', '1', '2024-04-26 17:42:34', '2024-04-26 17:42:34'),
(65, 1, 7, 'MIPL-BLT-09 (BROWN)', 'mipl-blt-09-brown', '9411714139413_IMG_1606.JPG', 699.00, 399.00, 'Men\'s 100% Genuine Leather Belt', 'Brown', '1', '2024-04-26 17:50:13', '2024-04-26 17:50:13'),
(66, 1, 7, 'MIPL-BLT-11 (BLACK)', 'mipl-blt-11-black', '4141714139662_MIPL-BLT-11, (BLACK), 01 .jpeg', 699.00, 399.00, 'Men\'s 100% Genuine Leather Belt', 'Black', '1', '2024-04-26 17:54:22', '2024-04-26 17:54:22'),
(67, 1, 4, 'MIPL-BLT-19 (BROWN)', 'mipl-blt-19-brown', '8801714139860_MIPL-BLT-19, (BROWN), 04 .jpeg', 799.00, 499.00, 'Men\'s 100% Genuine leather Belt', 'Brown', '1', '2024-04-26 17:57:40', '2024-04-26 17:57:40'),
(68, 1, 7, 'MIPL-BLT-20 (BLACK)', 'mipl-blt-20-black', '3791714140052_MIPL-BLT-20, (BROWN), 02 .jpeg', 699.00, 349.00, 'Men\'s 100% Genuine Leather Belt (Black)', 'Black', '1', '2024-04-26 18:00:52', '2024-04-26 18:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `speci_heding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speci_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specifications`
--

INSERT INTO `specifications` (`id`, `product_id`, `speci_heding`, `speci_content`, `created_at`, `updated_at`) VALUES
(14, 3, '100% genuine Leather Belt', ',', '2024-04-01 06:05:20', '2024-04-25 20:33:04'),
(15, 8, '.', '.', '2024-04-01 17:20:47', '2024-04-25 20:34:27'),
(16, 9, 'Genuine Leather bag pack for man\'s and woman\'s', 'This classic backpack combines everyday styling with practicality. Main section, front pouch and internal pocket fasten securely with a zip. Mesh pockets on either side. Made from genuine leather, which is lightweight and scuff-resistant to reduce wear and tear. easy-to-wear wardrobe staples that combine classic and contemporary styles.', '2024-04-07 22:12:44', '2024-04-07 22:12:44'),
(17, 10, 'Genuine Leather Laptop Bag', 'Dimensions(LxBxH): 45cm x 15cm x 33cm\r\nMaterial: Hand crafted from 100% Genuine leather.\r\nFeatures: Two main compartments with Laptop and folder organizer. Fully lined interior. One rear zip pocket. Front zipped compartment with Pen holders and pockets. Additional two zip pockets on the front. Detachable and adjustable shoulder strap for easy handling. Double padded handles secured with Velcro closure. Suitable for 15-inch Laptops', '2024-04-07 22:15:50', '2024-04-07 22:15:50'),
(18, 11, 'Genuine Leather Sling bag', 'Height -22 cm\r\nWidth - 18 cm\r\nDepth - 7 cm\r\nNo of Compartments -1\r\nNo of Pockets - 6\r\nInside Material - Cotton fabric\r\nOutside Material - Genuine Leather\r\nHandle -Shoulder Strap', '2024-04-07 22:20:43', '2024-04-07 22:20:43'),
(19, 12, 'Genuine Leather Wallet for man\'s', 'It made of full grain leather because that\'s the best quality. The design and capacity has meet your everyday carry requirements. The size of wallet assist the way you normally carry your wallet in your pocket or your hand.', '2024-04-07 22:27:28', '2024-04-18 15:33:49'),
(20, 13, 'Genuine Leather Stitch belt', 'Genuine Leather Belt \'ALL LEATHER\' Classic Dress Casual Double Stitch 35 mm, Black, Size All sizes.', '2024-04-11 21:03:42', '2024-04-11 21:03:42'),
(21, 14, 'Genuine Leather Stitch belt', 'Genuine Leather Belt \'ALL LEATHER\' Classic Dress Casual Double Stitch 35mm, Black, Size 38 (Waist 36) from Belts', '2024-04-11 21:05:07', '2024-04-11 21:05:07'),
(22, 15, 'MATERIAL:-', 'Crafted from pure genuine leather, this high-quality belt gives you a nice and clean look to complement any pair of pants. The sleek and smooth leather strap is perfect to go with any of your outfits. SINGLE PRONG BUCKLE: Our Buckle is made with zinc alloy to create a substance with greater strength and resistance to corrosion. It’s a long lasting and durable single prong buckle that looks great with formal and casual pants. SIZE UP: 6 Holes in Our Belt For best fit, select belt size 2 inches larger than your pant size.', '2024-04-11 21:07:48', '2024-04-19 18:34:28'),
(23, 16, 'Genuine Leather Casual belt', 'MATERIAL & DESIGN: Made from Fine Quality Smooth Leather. *Specially Designed and Manufactured in India By Skilled Handicraft Man for Those Who Like Leather Product.', '2024-04-11 21:12:41', '2024-04-11 21:12:41'),
(24, 17, 'Genuine Handcrafted Unisex Belt', 'Hand made Genuine belt. available in all sizes.', '2024-04-11 21:20:22', '2024-04-11 21:20:22'),
(25, 18, 'Genuine Leather Women Casual Slim Belts', 'High Quality ladies belts are made of high quality Leather material. It is durable to use.', '2024-04-11 21:25:25', '2024-04-11 21:34:38'),
(26, 19, 'Women Leather Causal Belt', 'High Quality ladies belts are made of high quality Leather material. It is durable to use.', '2024-04-11 21:29:40', '2024-04-11 21:29:40'),
(27, 20, 'Genuine Leather handicraft belt', 'Genuine Leather handicraft belt for Ladies/ Girls.', '2024-04-11 21:33:14', '2024-04-11 21:33:14'),
(28, 21, 'MATERIAL:', 'Crafted from pure genuine leather, this high-quality belt gives you a nice and clean look to complement any pair of pants. The sleek and smooth leather strap is perfect to go with any of your outfits. SINGLE PRONG BUCKLE: Our Buckle is made with zinc alloy to create a substance with greater strength and resistance to corrosion. It’s a long lasting and durable single prong buckle that looks great with formal and casual pants. SIZE UP: 6 Holes in Our Belt For best fit, select belt size 2 inches larger than your pant size.', '2024-04-18 14:23:44', '2024-04-18 14:23:44'),
(29, 22, 'MATERIAL:', 'Crafted from pure genuine leather, this high-quality belt gives you a nice and clean look to complement any pair of pants. The sleek and smooth leather strap is perfect to go with any of your outfits. SINGLE PRONG BUCKLE: Our Buckle is made with zinc alloy to create a substance with greater strength and resistance to corrosion. It’s a long lasting and durable single prong buckle that looks great with formal and casual pants. SIZE UP: 6 Holes in Our Belt For best fit, select belt size 2 inches larger than your pant size.', '2024-04-18 14:29:36', '2024-04-18 14:29:36'),
(30, 23, 'Genuine Leather -', 'This belt is made up of Top Grain Genuine Leather which makes it long lasting than any other belts', '2024-04-18 14:46:57', '2024-04-18 14:46:57'),
(31, 23, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-18 14:46:57', '2024-04-18 14:46:57'),
(32, 23, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches.  select belt size 2 inches larger than your pant size.', '2024-04-18 14:46:57', '2024-04-18 14:46:57'),
(33, 23, 'Gifting solution -', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-18 14:46:57', '2024-04-18 14:46:57'),
(34, 24, 'Genuine Leather -', 'This belt is made up of Top Grain Genuine Leather which makes it long lasting than any other belts.', '2024-04-18 14:54:33', '2024-04-18 14:54:33'),
(35, 24, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-18 14:54:33', '2024-04-18 14:54:33'),
(36, 24, 'Belt size -', 'Belt width:- 35mm. 6 Holes in Our Belt For best fit, select belt size 2 inches larger than your pant size.This belt can fit upto waist size of 28 To 44 inches.', '2024-04-18 14:54:33', '2024-04-18 14:54:33'),
(37, 24, 'Gifting solution -', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-18 14:54:33', '2024-04-18 14:54:33'),
(38, 25, 'Genuine Leather -', 'This belt is made up of Top Grain Genuine Leather which makes it long lasting than any other belts', '2024-04-18 15:02:01', '2024-04-26 17:51:15'),
(39, 25, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-18 15:02:01', '2024-04-26 17:51:15'),
(40, 25, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-18 15:02:01', '2024-04-26 17:51:15'),
(41, 25, 'Gifting solution -', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-18 15:02:01', '2024-04-26 17:51:15'),
(42, 26, 'Genuine Leather -', 'This belt is made up of Top Grain Genuine Leather which makes it long lasting than any other belts', '2024-04-18 15:05:16', '2024-04-18 15:05:16'),
(43, 26, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-18 15:05:16', '2024-04-18 15:05:16'),
(44, 26, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-18 15:05:16', '2024-04-18 15:05:16'),
(45, 26, 'Gifting solution -', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-18 15:05:16', '2024-04-18 15:05:16'),
(46, 27, 'Product Description :-', 'A Simple, Clean design and Classic style are the Hallmarks of men’s wallets and Hammonds Flycatcher walks the extra mile to achieve that Perfection. We strive for fine quality and uniqueness. All our products are designed keeping in mind the Best Interests of our Customers and this time too, we are offering something that bears the unique stamp of Our Craftsmanship. Presenting to you, the Range of Genuine Leather Wallets for Men of all age groups. Your wallet will complement your personality.', '2024-04-18 15:13:29', '2024-04-18 15:13:29'),
(47, 27, 'Product Info', 'Cards Slot : 5 | Currency Slot :- 2 | Coin Pocket : Yes | Hidden Slot : 1 | Easy Access Card : Yes |', '2024-04-18 15:13:29', '2024-04-18 15:13:29'),
(48, 28, 'Product Description :-', 'A Simple, Clean design and Classic style are the Hallmarks of men’s wallets and Hammonds Flycatcher walks the extra mile to achieve that Perfection. We strive for fine quality and uniqueness. All our products are designed keeping in mind the Best Interests of our Customers and this time too, we are offering something that bears the unique stamp of Our Craftsmanship. Presenting to you, the Range of Genuine Leather Wallets for Men of all age groups. Your wallet will complement your personality.', '2024-04-18 15:16:22', '2024-04-18 15:16:22'),
(49, 28, 'Product Info :-', 'Cards Slot : 6 | Note Slot :- 2 | Coin Pocket : Yes | Hidden Slot : 1 | Easy Access Card : Yes |', '2024-04-18 15:16:22', '2024-04-18 15:16:22'),
(50, 29, 'Genuine Leather -', 'This belt is made up of Top Grain Genuine Leather which makes it long lasting than any other belts', '2024-04-18 15:51:32', '2024-04-19 19:42:17'),
(51, 29, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-18 15:51:32', '2024-04-19 19:42:17'),
(52, 29, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-18 15:51:32', '2024-04-19 19:42:17'),
(53, 29, 'Gifting solution -', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-18 15:51:32', '2024-04-19 19:42:17'),
(54, 30, 'Genuine Leather -', 'This belt is made up of Top Premium Genuine Leather which makes it long lasting than any other belts', '2024-04-18 15:58:10', '2024-04-26 17:32:18'),
(55, 30, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-18 15:58:10', '2024-04-26 17:32:18'),
(56, 30, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-18 15:58:10', '2024-04-26 17:32:18'),
(57, 30, 'Gifting solution -', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-18 15:58:10', '2024-04-26 17:32:18'),
(58, 31, 'Genuine Leather -', 'This belt is made up of Top Grain Genuine Leather which makes it long lasting than any other belts', '2024-04-18 16:02:48', '2024-04-18 16:02:48'),
(59, 31, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-18 16:02:48', '2024-04-18 16:02:48'),
(60, 31, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-18 16:02:48', '2024-04-18 16:02:48'),
(61, 31, 'Gifting solution:-', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-18 16:02:48', '2024-04-18 16:02:48'),
(62, 32, 'Genuine Leather :-', 'This belt is made up of Top Grain Genuine Leather which makes it long lasting than any other belts', '2024-04-18 16:29:09', '2024-04-26 17:43:14'),
(63, 32, 'Durability :-', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-18 16:29:09', '2024-04-26 17:43:14'),
(64, 32, 'Belt size :-', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-18 16:29:09', '2024-04-26 17:43:14'),
(65, 32, 'Gifting solution:-', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-18 16:29:09', '2024-04-26 17:43:14'),
(66, 33, 'Genuine Leather :-', 'This Wallet Made in Exclusive Quality Leather, Well Designed By Skilled Handcraft Man, Durable Cloth Lining Used, Designed To Accommodate maximum needs. Each Wallet Has Unique Natural Grain Of Leather.', '2024-04-19 15:14:35', '2024-04-19 15:14:35'),
(67, 33, 'Product Description :-', 'We at Merchado are working hard to make and present the best product made up of Pure Leather. We are looking to have good and genuine feedback that might help others.', '2024-04-19 15:14:35', '2024-04-19 15:14:35'),
(68, 34, 'Genuine Leather :-', 'This Wallet Made in Exclusive Quality Leather, Well Designed By Skilled Handcraft Man, Durable Cloth Lining Used, Designed To Accommodate maximum needs. Each Wallet Has Unique Natural Grain Of Leather.', '2024-04-19 15:27:39', '2024-04-19 15:27:39'),
(69, 34, 'Gifting solution :-', 'This wallet of Merchado is ideal to gift for your loved one and it comes with gift box. This is a Perfect Diwali Gift for Men and Men’s Diwali Gift Hamper.', '2024-04-19 15:27:39', '2024-04-19 15:27:39'),
(70, 35, 'Genuine Leather :-', 'This Wallet Made in Exclusive Quality Leather, Well Designed By Skilled Handcraft Man, Durable Cloth Lining Used, Designed To Accommodate maximum needs. Each Wallet Has Unique Natural Grain Of Leather.', '2024-04-19 15:31:59', '2024-04-19 15:31:59'),
(71, 36, 'Product Description :-', 'This Wallet Made in Exclusive Quality Leather, Well Designed By Skilled Handcraft Man, Durable Cloth Lining Used, Designed To Accommodate maximum needs. Each Wallet Has Unique Natural Grain Of Leather.', '2024-04-19 15:36:44', '2024-04-19 15:36:44'),
(72, 37, 'Genuine Leather :-', 'This Wallet Made in Exclusive Quality Leather, Well Designed By Skilled Handcraft Man, Durable Cloth Lining Used, Designed To Accommodate maximum needs. Each Wallet Has Unique Natural Grain Of Leather.', '2024-04-19 17:50:42', '2024-04-19 17:50:42'),
(73, 38, 'MATERIAL:-', 'Crafted from pure genuine leather, this high-quality belt gives you a nice and clean look to complement any pair of pants. The sleek and smooth leather strap is perfect to go with any of your outfits. SINGLE PRONG BUCKLE: Our Buckle is made with zinc alloy to create a substance with greater strength and resistance to corrosion. It’s a long lasting and durable single prong buckle that looks great with formal and casual pants. SIZE UP: 6 Holes in Our Belt For best fit, select belt size 2 inches larger than your pant size.', '2024-04-19 18:32:09', '2024-04-19 18:32:09'),
(74, 39, 'Genuine Leather -', 'Crafted from pure genuine leather, this high-quality belt gives you a nice and clean look to complement any pair of pants. The sleek and smooth leather strap is perfect to go with any of your outfits. SINGLE PRONG BUCKLE: Our Buckle is made with zinc alloy to create a substance with greater strength and resistance to corrosion. It’s a long lasting and durable single prong buckle that looks great with formal and casual pants.', '2024-04-19 18:44:43', '2024-04-19 18:45:52'),
(76, 41, 'This belt is made up of Top Grain Genuine Leather which makes it long lasting than any other belts', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-19 19:25:20', '2024-04-25 20:14:46'),
(77, 42, '.', '.', '2024-04-19 19:35:03', '2024-04-25 20:13:48'),
(78, 43, '.', '.', '2024-04-19 19:38:45', '2024-04-25 20:15:11'),
(79, 44, 'Genuine Leather bag pack for man\'s and woman\'s', '.', '2024-04-19 20:23:28', '2024-04-25 20:15:41'),
(80, 45, 'Leather Backpack Solid Color Fashion Laptop Big Lightweight Casual Daypack', '.', '2024-04-19 20:28:00', '2024-04-25 20:15:59'),
(81, 46, '.', 'Leather is a durable material made from animal hides.', '2024-04-19 20:32:09', '2024-04-25 20:16:18'),
(82, 47, '.', '.', '2024-04-19 20:34:43', '2024-04-25 20:16:58'),
(83, 48, '.', '.', '2024-04-20 16:49:23', '2024-04-25 20:17:19'),
(84, 49, '.', '.', '2024-04-20 16:53:23', '2024-04-25 20:17:34'),
(85, 50, 'Shoulder Bag', 'High quality light gold hardware. Dark brown interior polyester lining. Zippered opening closure.', '2024-04-25 20:05:40', '2024-04-25 20:17:54'),
(86, 51, 'Shoulder Bag', 'Dimensions: 9.85HX 11L X 3W IN\r\n\r\nClosure Type: Zipper, Strap Type: Shoulder Strap\r\n\r\nCare : Keep the leather clean. Try to brush your leather with leather polisher at least once a week. Do not use any soaps, detergent or hard cleansers.', '2024-04-25 20:10:33', '2024-04-25 21:10:09'),
(87, 52, 'Genuine Leather belt for woman\'s', 'High Quality ladies belts are made of high quality Leather material. It is durable to use.', '2024-04-25 20:28:49', '2024-04-25 20:28:49'),
(88, 53, 'Shoulder Bag', 'This hand bag is perfect for women to carry at work or a formal/casuals outdoor use.', '2024-04-25 20:43:22', '2024-04-25 20:43:22'),
(89, 54, 'Plain pattern', '.', '2024-04-25 21:09:04', '2024-04-25 21:09:04'),
(90, 55, 'Premium Leather:-', 'Crafted from high-quality leather for a luxurious and durable finish.', '2024-04-26 13:28:58', '2024-04-26 13:28:58'),
(91, 55, 'Spacious Interior:-', 'Offers ample room to carry your belongings, making it suitable for daily use or travel.', '2024-04-26 13:28:58', '2024-04-26 13:28:58'),
(92, 55, 'Multiple Pockets:-', 'Equipped with various pockets to keep your items organized and easily accessible.', '2024-04-26 13:28:58', '2024-04-26 13:28:58'),
(93, 55, 'Timeless Design:-', 'A classic and versatile look that complements various outfits and occasions.', '2024-04-26 13:28:58', '2024-04-26 13:28:58'),
(94, 55, 'Comfortable Straps:-', 'Adjustable and padded shoulder straps ensure a comfortable fit during extended wear.', '2024-04-26 13:28:58', '2024-04-26 13:28:58'),
(95, 55, 'Durability:-', 'Constructed to withstand daily wear and tear, ensuring long-lasting use.', '2024-04-26 13:28:58', '2024-04-26 13:28:58'),
(96, 55, 'Stylish Details:-', 'Thoughtful embellishments and finishes add a touch of sophistication to your ensemble.', '2024-04-26 13:28:58', '2024-04-26 13:28:58'),
(97, 55, 'Versatile Use:-', 'Ideal for work, school, travel, or casual outings, adapting to your diverse lifestyle needs', '2024-04-26 13:28:58', '2024-04-26 13:28:58'),
(98, 56, 'Premium Leather:-', 'Crafted from high-quality leather for a luxurious and durable finish.', '2024-04-26 13:35:52', '2024-04-26 13:35:52'),
(99, 56, 'Spacious Interior:-', 'Offers ample room to carry your belongings, making it suitable for daily use or travel.', '2024-04-26 13:35:52', '2024-04-26 13:35:52'),
(100, 56, 'Multiple Pockets:-', 'Equipped with various pockets to keep your items organized and easily accessible.', '2024-04-26 13:35:52', '2024-04-26 13:35:52'),
(101, 56, 'Timeless Design:-', 'A classic and versatile look that complements various outfits and occasions.', '2024-04-26 13:35:52', '2024-04-26 13:35:52'),
(102, 56, 'Comfortable Straps:-', 'Adjustable and padded shoulder straps ensure a comfortable fit during extended wear.', '2024-04-26 13:35:52', '2024-04-26 13:35:52'),
(103, 56, 'Durability:-', 'Constructed to withstand daily wear and tear, ensuring long-lasting use.', '2024-04-26 13:35:52', '2024-04-26 13:35:52'),
(104, 56, 'Stylish Details:-', 'Thoughtful embellishments and finishes add a touch of sophistication to your ensemble.', '2024-04-26 13:35:52', '2024-04-26 13:35:52'),
(105, 56, 'Versatile Use:-', 'Ideal for work, school, travel, or casual outings, adapting to your diverse lifestyle needs.', '2024-04-26 13:35:52', '2024-04-26 13:35:52'),
(106, 57, 'Premium Leather:-', 'Crafted from high-quality leather for a luxurious and durable finish.', '2024-04-26 13:41:12', '2024-04-26 13:41:12'),
(107, 57, 'Spacious Interior:-', 'Offers ample room to carry your belongings, making it suitable for daily use or travel.', '2024-04-26 13:41:12', '2024-04-26 13:41:12'),
(108, 57, 'Multiple Pockets:-', 'Equipped with various pockets to keep your items organized and easily accessible.', '2024-04-26 13:41:12', '2024-04-26 13:41:12'),
(109, 57, 'Timeless Design:-', 'A classic and versatile look that complements various outfits and occasions.', '2024-04-26 13:41:12', '2024-04-26 13:41:12'),
(110, 57, 'Comfortable Straps:-', 'Adjustable and padded shoulder straps ensure a comfortable fit during extended wear.', '2024-04-26 13:41:12', '2024-04-26 13:41:12'),
(111, 57, 'Durability:-', 'Constructed to withstand daily wear and tear, ensuring long-lasting use.', '2024-04-26 13:41:12', '2024-04-26 13:41:12'),
(112, 57, 'Stylish Details:-', 'Thoughtful embellishments and finishes add a touch of sophistication to your ensemble.', '2024-04-26 13:41:12', '2024-04-26 13:41:12'),
(113, 57, 'Versatile Use:-', 'Ideal for work, school, travel, or casual outings, adapting to your diverse lifestyle needs.', '2024-04-26 13:41:12', '2024-04-26 13:41:12'),
(114, 58, 'Premium Leather:-', 'choose our lifetime-lasting sustainable full-grain leather over cheaper, short-lived alternatives.', '2024-04-26 13:52:01', '2024-04-26 13:52:01'),
(115, 58, 'Carry your laptop in style:-', 'a professional laptop bag that’s ideal for making a statement at work.', '2024-04-26 13:52:01', '2024-04-26 13:52:01'),
(116, 58, 'Spacious design:-', 'fits up to 15.6-inch laptop, enjoy ample space, designed to accommodate your essentials seamlessly.', '2024-04-26 13:52:01', '2024-04-26 13:52:01'),
(117, 59, 'High Quality & Durable Leather:-', 'Experience the ultimate in style and durability with this high-quality genuine leather product. Crafted from top-grade Original leather, it has a robust construction that will withstand daily wear and tear.', '2024-04-26 14:02:01', '2024-04-26 14:02:01'),
(118, 59, 'Our Polished Leather Manufacturing Process:-', 'The creation of this leather laptop bag starts with selecting only the highest quality Animal Skin. These hides are carefully inspected for any imperfections and hand-selected for their texture, grain, and durability.', '2024-04-26 14:02:01', '2024-04-26 14:02:01'),
(119, 59, 'LUXURY DESIGN:-', 'Experience the epitome of luxury and sophistication with our elegant and compact men’s leather Sling Bag, crafted entirely from 100% genuine leather.', '2024-04-26 14:02:01', '2024-04-26 14:02:01'),
(120, 59, 'PROFICIENT LEATHER ARTISANS:-', 'The artisans begin stitching the leather pieces together, using strong and durable thread and using Premium Zippers and Runners. They take great care to ensure that each stitch is precisely placed, creating a sturdy and well-constructed bag\r\n\r\nFinally, the bag is thoroughly inspected to ensure it meets our high standards for quality and craftsmanship. The result is a stunning leather laptop bag that is both functional and stylish and ready to be used for years to come.”.', '2024-04-26 14:02:01', '2024-04-26 14:02:01'),
(121, 60, 'High Quality & Durable Leather:-', 'Experience the ultimate in style and durability with this high-quality genuine leather product. Crafted from top-grade Original leather, it has a robust construction that will withstand daily wear and tear.', '2024-04-26 14:06:59', '2024-04-26 14:06:59'),
(122, 60, 'Our Polished Leather Manufacturing Process:-', 'The creation of this leather laptop bag starts with selecting only the highest quality Animal Skin. These hides are carefully inspected for any imperfections and hand-selected for their texture, grain, and durability.', '2024-04-26 14:06:59', '2024-04-26 14:06:59'),
(123, 60, 'LUXURY DESIGN:-', 'Experience the epitome of luxury and sophistication with our elegant and compact men’s leather Sling Bag, crafted entirely from 100% genuine leather.', '2024-04-26 14:06:59', '2024-04-26 14:06:59'),
(124, 60, 'PROFICIENT LEATHER ARTISANS:-', 'The artisans begin stitching the leather pieces together, using strong and durable thread and using Premium Zippers and Runners. They take great care to ensure that each stitch is precisely placed, creating a sturdy and well-constructed bag Finally, the bag is thoroughly inspected to ensure it meets our high standards for quality and craftsmanship. The result is a stunning leather laptop bag that is both functional and stylish and ready to be used for years to come.”.', '2024-04-26 14:06:59', '2024-04-26 14:06:59'),
(125, 61, 'Genuine Leather -', 'This belt is made up of Top Premium Genuine Leather which makes it long lasting than any other belts', '2024-04-26 17:31:49', '2024-04-26 17:31:49'),
(126, 61, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-26 17:31:49', '2024-04-26 17:31:49'),
(127, 61, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-26 17:31:49', '2024-04-26 17:31:49'),
(128, 61, 'Gifting solution-', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-26 17:31:49', '2024-04-26 17:31:49'),
(129, 62, 'Genuine Leather -', 'This belt is made up of Top Premium Genuine Leather which makes it long lasting than any other belts.', '2024-04-26 17:35:33', '2024-04-26 17:35:33'),
(130, 62, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-26 17:35:33', '2024-04-26 17:35:33'),
(131, 62, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-26 17:35:33', '2024-04-26 17:35:33'),
(132, 62, 'Gifting solution-', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-26 17:35:33', '2024-04-26 17:35:33'),
(133, 63, 'Genuine Leather -', 'This belt is made up of Top Premium Genuine Leather which makes it long lasting than any other belts', '2024-04-26 17:39:59', '2024-04-26 17:39:59'),
(134, 63, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-26 17:39:59', '2024-04-26 17:39:59'),
(135, 63, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-26 17:39:59', '2024-04-26 17:39:59'),
(136, 63, 'Gifting solution-', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-26 17:39:59', '2024-04-26 17:39:59'),
(137, 64, 'Genuine Leather -', 'This belt is made up of Top Premium Genuine Leather which makes it long lasting than any other belts', '2024-04-26 17:42:34', '2024-04-26 17:42:34'),
(138, 64, 'Durability', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-26 17:42:34', '2024-04-26 17:42:34'),
(139, 64, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-26 17:42:34', '2024-04-26 17:42:34'),
(140, 64, 'Gifting solution -', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-26 17:42:34', '2024-04-26 17:42:34'),
(141, 65, 'Genuine Leather -', 'This belt is made up of Top Premium Genuine Leather which makes it long lasting than any other belts', '2024-04-26 17:50:13', '2024-04-26 17:50:13'),
(142, 65, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-26 17:50:13', '2024-04-26 17:50:13'),
(143, 65, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-26 17:50:13', '2024-04-26 17:50:13'),
(144, 65, 'Gifting solution-', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-26 17:50:13', '2024-04-26 17:50:13'),
(145, 66, 'Genuine Leather -', 'This belt is made up of Top Premium Genuine Leather which makes it long lasting than any other belts.', '2024-04-26 17:54:22', '2024-04-26 17:54:22'),
(146, 66, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-26 17:54:22', '2024-04-26 17:54:22'),
(147, 66, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-26 17:54:22', '2024-04-26 17:54:22'),
(148, 67, 'Genuine Leather -', 'This belt is made up of Top Premium Genuine Leather which makes it long lasting than any other belts.', '2024-04-26 17:57:40', '2024-04-26 17:57:40'),
(149, 67, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-26 17:57:40', '2024-04-26 17:57:40'),
(150, 67, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-26 17:57:40', '2024-04-26 17:57:40'),
(151, 67, 'Gifting solution -', 'This belt comes in a premium gift box Pamper your loved ones with this stylish belt which is suitable for any occasion like Birthday, Diwali, Anniversary gifts ,Rakhi', '2024-04-26 17:57:40', '2024-04-26 17:57:40'),
(152, 68, 'Genuine Leather -', 'This belt is made up of Top Premium Genuine Leather which makes it long lasting than any other belts.', '2024-04-26 18:00:52', '2024-04-26 18:00:52'),
(153, 68, 'Durability -', 'We have used thick leather in this belt to ensure its longitivtiy and durability. High quality metal buckle is used to make sure that this belt lasts for ages.', '2024-04-26 18:00:52', '2024-04-26 18:00:52'),
(154, 68, 'Belt size -', 'Belt width:- 35mm, 6 Holes in Our Belt For best fit, This belt can fit upto waist size of 28 To 44 inches. select belt size 2 inches larger than your pant size.', '2024-04-26 18:00:52', '2024-04-26 18:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, '1', 'Autolock Belt', 'autolock-belt', '1', '2024-03-27 23:11:58', '2024-03-29 08:32:12'),
(4, '1', 'Formal Belt', 'formal-belt', '1', '2024-03-27 23:12:14', '2024-03-29 08:33:35'),
(5, '4', 'Double stitch', 'double-stitch', '1', '2024-03-27 23:12:29', '2024-03-29 08:42:11'),
(6, '5', 'Bagpack', 'bagpack', '1', '2024-03-27 23:12:43', '2024-03-29 08:47:00'),
(7, '1', 'Casual Belt', 'casual-belt', '1', '2024-03-28 14:24:58', '2024-03-29 08:32:45'),
(8, '1', 'Handcrafted Belt', 'handcrafted-belt', '1', '2024-03-28 14:25:44', '2024-03-29 08:33:57'),
(9, '1', 'Polo Belt', 'polo-belt', '1', '2024-03-28 14:26:02', '2024-03-29 08:34:21'),
(10, '1', 'Reversible Belt', 'reversible-belt', '1', '2024-03-28 14:26:18', '2024-03-29 08:34:50'),
(11, '1', 'Stitch Belt', 'stitch-belt', '1', '2024-03-28 14:26:37', '2024-03-29 08:35:17'),
(14, '4', 'Outer card', 'outer-card', '1', '2024-03-28 14:28:50', '2024-03-29 08:42:47'),
(15, '4', 'Blue NDM', 'blue-ndm', '1', '2024-03-28 14:29:17', '2024-03-29 08:43:11'),
(17, '4', 'Hunter oil pulp wallet', 'hunter-oil-pulp-wallet', '1', '2024-03-28 14:51:20', '2024-03-29 08:45:29'),
(18, '4', 'Hunter Olive green wallet', 'hunter-olive-green-wallet', '1', '2024-03-28 14:51:43', '2024-03-29 08:46:05'),
(19, '5', 'Laptop Bags', 'laptop-bags', '1', '2024-03-28 14:52:47', '2024-03-29 08:47:45'),
(20, '5', 'Sling Bags', 'sling-bags', '1', '2024-03-28 14:53:01', '2024-03-29 08:48:03'),
(21, '4', 'Outer lock', 'outer-lock', '1', '2024-03-29 08:43:37', '2024-03-29 08:43:37'),
(22, '4', 'Crocodile', 'crocodile', '1', '2024-03-29 08:44:56', '2024-03-29 08:44:56'),
(24, '3', 'Formal Belt', 'formal-belt', '1', '2024-03-29 10:51:51', '2024-03-29 10:51:51'),
(25, '3', 'Causal Belt', 'causal-belt', '1', '2024-03-29 10:52:07', '2024-03-29 10:52:07'),
(26, '3', 'Handicraft Belt', 'handicraft-belt', '1', '2024-03-29 10:52:22', '2024-03-29 10:52:22'),
(30, '10', 'Formal bag', 'formal-bag', '1', '2024-04-25 19:57:02', '2024-04-25 20:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `syllabi`
--

CREATE TABLE `syllabi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `destination`, `content`, `status`, `created_at`, `updated_at`) VALUES
(6, '8391720677297_img-1.jpg', 'Ajay Kumar', 'Telangana, India', 'The insights I received from these sessions are extremely helpful, every remedy and\r\n                                    explanation was logical and sir also makes sure that everyone\'s doubts are cleared\r\n                                    and has been very helpful to me.', '1', '2024-07-11 00:24:58', '2024-07-11 00:24:58'),
(7, '3631720677338_img-1.jpg', 'Deepa Chaubey', 'SA, South Africa', 'The in depth knowledge and the experience that I got from this Institution is worth\r\n                                    way more than they charge for their respective courses. Especially, I would like to\r\n                                    thank to Kashyap sir for his enlightening guidance throughout the journey and way\r\n                                    ahead', '1', '2024-07-11 00:25:38', '2024-07-11 00:25:38'),
(8, '4281720677377_img-1.jpg', 'Reena Gupta', 'Hyderabad, India', 'Best institute for Vastu course.Teacher and working staff are so nice. From the\r\n                                    institute I got opportunity for site visit and chance for TV programme which is must\r\n                                    want experience for any vastu learner. Thankful to all the members of All India\r\n                                    Institute of Occult Science.', '1', '2024-07-11 00:26:17', '2024-07-11 00:26:17'),
(9, '9731720677419_img-1.jpg', 'Pratik Karn', 'Delhi , India', 'This is the best Institute in Delhi for vastu and astrology course. Faculty is very\r\n                                    good by nature and behavior. Healthy and safe environment for all students. I will\r\n                                    recommend all those r searching for a better course. Plz join this institute.', '1', '2024-07-11 00:26:59', '2024-07-11 00:26:59'),
(10, '5141720677458_img-1.jpg', 'Neha Singhal', 'Uttar Pardesh , India', 'I have learnt Numerology course from the very basics from this Institute and I am\r\n                                    highly satisfied with the Teacher i.e Nawal Sir. He s highly knowledgeable person in\r\n                                    this field. In every class he patiently listens all our queries and satisfactorily\r\n                                    responds. This institute opens a new arena for me through which I can help others.', '1', '2024-07-11 00:27:38', '2024-07-11 00:27:38'),
(11, '2641720677513_img-1.jpg', 'Sushil Kaushal', 'Delhi , India', 'This institute is the Best Institute for all the Occult science Courses, I have done\r\n                                    my masters in Vaastu Shastra, It has given me immense Practical knowledge covering\r\n                                    all the minute aspects also. I am really Thankful to my tutors and respected Sir.', '1', '2024-07-11 00:28:33', '2024-07-11 00:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `title`, `url`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Astrology – Yantra Part 2', 'https://www.youtube.com/watch?v=jHs9EfFCgfY', '4311720599709_video-thumb15.jpg', 1, '2024-07-10 02:51:49', '2024-07-10 02:55:38'),
(3, 'Astrology – Yantra Part 1', 'https://www.youtube.com/watch?v=jHs9EfFCgfY', '4911720599765_video-thumb14.jpg', 1, '2024-07-10 02:52:45', '2024-07-10 02:55:11'),
(4, 'Intro To Numerology | Haryana News', 'https://youtu.be/56PSUwL43vI?feature=shared', '5341720599812_video-thumb13.jpg', 1, '2024-07-10 02:53:32', '2024-07-10 02:53:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genral_enquiries`
--
ALTER TABLE `genral_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabi`
--
ALTER TABLE `syllabi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genral_enquiries`
--
ALTER TABLE `genral_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `syllabi`
--
ALTER TABLE `syllabi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
