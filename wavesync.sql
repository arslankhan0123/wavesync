-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2025 at 05:44 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wavesync`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci,
  `email` longtext COLLATE utf8mb4_unicode_ci,
  `phone` longtext COLLATE utf8mb4_unicode_ci,
  `subject` longtext COLLATE utf8mb4_unicode_ci,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Cook', 'cirunuwy@mailinator.com', '+1 (926) 824-6667', 'Tempora earum volupt', 'Cum fuga Velit dol', '2025-06-16 11:52:18', '2025-06-16 11:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_14_213307_create_contacts_table', 1),
(5, '2025_06_16_143356_create_services_table', 1);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `title`, `image`, `short_description`, `long_description`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Web Development', NULL, '<p>At Wavesync, we craft stunning, fast, and responsive websites tailored to your brand and goals. Whether you\'re a startup or an enterprise, we ensure your web presence reflects professionalism, creativity, and user-centric design.</p>', '<h4 data-start=\"157\" data-end=\"174\"><strong data-start=\"162\" data-end=\"174\">Overview</strong></h4><p data-start=\"175\" data-end=\"404\">At Wavesync, we craft stunning, fast, and responsive websites tailored to your brand and goals. Whether you\'re a startup or an enterprise, we ensure your web presence reflects professionalism, creativity, and user-centric design.</p><hr data-start=\"406\" data-end=\"409\"><h4 data-start=\"411\" data-end=\"435\"><strong data-start=\"416\" data-end=\"435\">What’s Included</strong></h4><p data-start=\"437\" data-end=\"560\">✅ <strong data-start=\"439\" data-end=\"460\">Responsive Design</strong><br data-start=\"460\" data-end=\"463\">\r\nYour website will look and work flawlessly on all devices — desktops, tablets, and mobile phones.</p><p data-start=\"562\" data-end=\"695\">✅ <strong data-start=\"564\" data-end=\"581\">SEO-Optimized</strong><br data-start=\"581\" data-end=\"584\">\r\nWe structure every page with clean code and search-engine-friendly practices to improve your Google visibility.</p><p data-start=\"697\" data-end=\"824\">✅ <strong data-start=\"699\" data-end=\"722\">Performance-Focused</strong><br data-start=\"722\" data-end=\"725\">\r\nOptimized load speeds, lazy loading, and caching strategies to ensure excellent performance scores.</p><p data-start=\"826\" data-end=\"938\">✅ <strong data-start=\"828\" data-end=\"854\">Admin Panel (Optional)</strong><br data-start=\"854\" data-end=\"857\">\r\nGet a custom admin panel to manage your content without needing technical skills.</p><p data-start=\"940\" data-end=\"1064\">✅ <strong data-start=\"942\" data-end=\"961\">CMS Integration</strong><br data-start=\"961\" data-end=\"964\">\r\nWhether it\'s WordPress, Laravel Nova, or a custom CMS, we integrate the system that fits your needs.</p><p data-start=\"1066\" data-end=\"1160\">✅ <strong data-start=\"1068\" data-end=\"1100\">Contact Forms + Lead Capture</strong><br data-start=\"1100\" data-end=\"1103\">\r\nLet users reach you easily with secure and dynamic forms.</p><p data-start=\"1162\" data-end=\"1261\">✅ <strong data-start=\"1164\" data-end=\"1196\">Blog/News Section (Optional)</strong><br data-start=\"1196\" data-end=\"1199\">\r\nShare updates, articles, and news to boost engagement and SEO.</p><p data-start=\"1263\" data-end=\"1384\">✅ <strong data-start=\"1265\" data-end=\"1301\">Custom Animations &amp; Interactions</strong><br data-start=\"1301\" data-end=\"1304\">\r\nEnhance your site with modern animations powered by AOS, Framer Motion, or GSAP.</p><p data-start=\"1386\" data-end=\"1525\">✅ <strong data-start=\"1388\" data-end=\"1426\">E-commerce Ready (Optional Add-on)</strong><br data-start=\"1426\" data-end=\"1429\">\r\nWe can integrate shop features like product listing, checkout, and payment gateways if required.</p><hr data-start=\"1527\" data-end=\"1530\"><h4 data-start=\"1532\" data-end=\"1558\"><strong data-start=\"1537\" data-end=\"1558\">Tech Stack We Use</strong></h4><ul data-start=\"1560\" data-end=\"1803\">\r\n<li data-start=\"1560\" data-end=\"1629\">\r\n<p data-start=\"1562\" data-end=\"1629\">HTML5, CSS3, JavaScript (Vanilla or frameworks like Vue.js / React)</p>\r\n</li>\r\n<li data-start=\"1630\" data-end=\"1656\">\r\n<p data-start=\"1632\" data-end=\"1656\">Bootstrap / Tailwind CSS</p>\r\n</li>\r\n<li data-start=\"1657\" data-end=\"1690\">\r\n<p data-start=\"1659\" data-end=\"1690\">Laravel / PHP for backend logic</p>\r\n</li>\r\n<li data-start=\"1691\" data-end=\"1725\">\r\n<p data-start=\"1693\" data-end=\"1725\">MySQL or PostgreSQL for database</p>\r\n</li>\r\n<li data-start=\"1726\" data-end=\"1748\">\r\n<p data-start=\"1728\" data-end=\"1748\">REST APIs or GraphQL</p>\r\n</li>\r\n<li data-start=\"1749\" data-end=\"1803\">\r\n<p data-start=\"1751\" data-end=\"1803\">Deployment via GitHub, Vercel, or traditional cPanel</p>\r\n</li>\r\n</ul><hr data-start=\"1805\" data-end=\"1808\"><h4 data-start=\"1810\" data-end=\"1828\"><strong data-start=\"1815\" data-end=\"1828\">Ideal For</strong></h4><ul data-start=\"1829\" data-end=\"1964\">\r\n<li data-start=\"1829\" data-end=\"1851\">\r\n<p data-start=\"1831\" data-end=\"1851\">Corporate websites</p>\r\n</li>\r\n<li data-start=\"1852\" data-end=\"1885\">\r\n<p data-start=\"1854\" data-end=\"1885\">Portfolio &amp; personal websites</p>\r\n</li>\r\n<li data-start=\"1886\" data-end=\"1908\">\r\n<p data-start=\"1888\" data-end=\"1908\">SaaS landing pages</p>\r\n</li>\r\n<li data-start=\"1909\" data-end=\"1937\">\r\n<p data-start=\"1911\" data-end=\"1937\">Service-based businesses</p>\r\n</li>\r\n<li data-start=\"1938\" data-end=\"1964\">\r\n<p data-start=\"1940\" data-end=\"1964\">Agencies &amp; consultants</p>\r\n</li>\r\n</ul><hr data-start=\"1966\" data-end=\"1969\"><h4 data-start=\"1971\" data-end=\"2001\">💵 <strong data-start=\"1979\" data-end=\"1999\">Starting at $300</strong></h4><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"2002\" data-end=\"2062\"><em data-start=\"2002\" data-end=\"2062\">Pricing varies based on features, pages, and integrations.</em></p>', 300.00, 1, '2025-06-16 11:40:26', '2025-06-16 11:40:26'),
(2, NULL, 'App Development', NULL, '<p>We build intuitive, feature-rich mobile applications for Android and iOS, ensuring seamless user experiences, robust performance, and beautiful interfaces — from idea to launch.</p>', '<p data-start=\"434\" data-end=\"722\">At <strong data-start=\"437\" data-end=\"449\">Wavesync</strong>, we design and develop mobile applications that are not only visually stunning but also technically robust and user-friendly. Whether you\'re building an MVP or a full-scale product, we guide you through every stage — from strategy and design to development and deployment.</p><hr data-start=\"724\" data-end=\"727\"><h4 data-start=\"729\" data-end=\"753\"><strong data-start=\"734\" data-end=\"753\">What’s Included</strong></h4><p data-start=\"755\" data-end=\"909\">✅ <strong data-start=\"757\" data-end=\"787\">Cross-Platform Development</strong><br data-start=\"787\" data-end=\"790\">\r\nWe develop apps using Flutter or React Native to ensure compatibility with both Android and iOS — saving time and cost.</p><p data-start=\"911\" data-end=\"1080\">✅ <strong data-start=\"913\" data-end=\"934\">Native App Option</strong><br data-start=\"934\" data-end=\"937\">\r\nNeed full control? We also build native apps using Swift (iOS) and Kotlin (Android) for maximum performance and platform-specific capabilities.</p><p data-start=\"1082\" data-end=\"1192\">✅ <strong data-start=\"1084\" data-end=\"1107\">Custom UI/UX Design</strong><br data-start=\"1107\" data-end=\"1110\">\r\nPixel-perfect and user-focused interfaces designed to deliver the best experience.</p><p data-start=\"1194\" data-end=\"1322\">✅ <strong data-start=\"1196\" data-end=\"1219\">Backend Integration</strong><br data-start=\"1219\" data-end=\"1222\">\r\nWe build robust APIs and connect your app with backend services using Laravel, Node.js, or Firebase.</p><p data-start=\"1324\" data-end=\"1434\">✅ <strong data-start=\"1326\" data-end=\"1348\">Push Notifications</strong><br data-start=\"1348\" data-end=\"1351\">\r\nEngage your users with personalized, real-time updates using Firebase or OneSignal.</p><p data-start=\"1436\" data-end=\"1562\">✅ <strong data-start=\"1438\" data-end=\"1467\">Authentication &amp; Security</strong><br data-start=\"1467\" data-end=\"1470\">\r\nSecure login/signup using email, OTP, Google, Facebook, or Apple ID — all data is encrypted.</p><p data-start=\"1564\" data-end=\"1675\">✅ <strong data-start=\"1566\" data-end=\"1588\">Real-Time Features</strong><br data-start=\"1588\" data-end=\"1591\">\r\nAdd real-time chat, location tracking, or activity feeds with WebSocket or Firebase.</p><p data-start=\"1677\" data-end=\"1813\">✅ <strong data-start=\"1679\" data-end=\"1703\">App Store Deployment</strong><br data-start=\"1703\" data-end=\"1706\">\r\nWe handle everything — app icon, screenshots, store listing, and publishing to the App Store &amp; Google Play.</p><hr data-start=\"1815\" data-end=\"1818\"><h4 data-start=\"1820\" data-end=\"1846\"><strong data-start=\"1825\" data-end=\"1846\">Tech Stack We Use</strong></h4><ul data-start=\"1848\" data-end=\"2116\">\r\n<li data-start=\"1848\" data-end=\"1918\">\r\n<p data-start=\"1850\" data-end=\"1918\"><strong data-start=\"1850\" data-end=\"1862\">Frontend</strong>: Flutter, React Native, Swift (iOS), Kotlin (Android)</p>\r\n</li>\r\n<li data-start=\"1919\" data-end=\"1962\">\r\n<p data-start=\"1921\" data-end=\"1962\"><strong data-start=\"1921\" data-end=\"1932\">Backend</strong>: Laravel, Node.js, Firebase</p>\r\n</li>\r\n<li data-start=\"1963\" data-end=\"2015\">\r\n<p data-start=\"1965\" data-end=\"2015\"><strong data-start=\"1965\" data-end=\"1977\">Database</strong>: Firebase Firestore, MySQL, MongoDB</p>\r\n</li>\r\n<li data-start=\"2016\" data-end=\"2062\">\r\n<p data-start=\"2018\" data-end=\"2062\"><strong data-start=\"2018\" data-end=\"2027\">Tools</strong>: Figma, Postman, GitHub, VS Code</p>\r\n</li>\r\n<li data-start=\"2063\" data-end=\"2116\">\r\n<p data-start=\"2065\" data-end=\"2116\"><strong data-start=\"2065\" data-end=\"2073\">APIs</strong>: Google Maps, Stripe, PayPal, Twilio, etc.</p>\r\n</li>\r\n</ul><hr data-start=\"2118\" data-end=\"2121\"><h4 data-start=\"2123\" data-end=\"2141\"><strong data-start=\"2128\" data-end=\"2141\">Ideal For</strong></h4><ul data-start=\"2142\" data-end=\"2321\">\r\n<li data-start=\"2142\" data-end=\"2171\">\r\n<p data-start=\"2144\" data-end=\"2171\">Startups launching an MVP</p>\r\n</li>\r\n<li data-start=\"2172\" data-end=\"2209\">\r\n<p data-start=\"2174\" data-end=\"2209\">Businesses building customer apps</p>\r\n</li>\r\n<li data-start=\"2210\" data-end=\"2257\">\r\n<p data-start=\"2212\" data-end=\"2257\">Service providers (delivery, booking, etc.)</p>\r\n</li>\r\n<li data-start=\"2258\" data-end=\"2292\">\r\n<p data-start=\"2260\" data-end=\"2292\">Social platforms &amp; communities</p>\r\n</li>\r\n<li data-start=\"2293\" data-end=\"2321\">\r\n<p data-start=\"2295\" data-end=\"2321\">Internal enterprise apps</p>\r\n</li>\r\n</ul><hr data-start=\"2323\" data-end=\"2326\"><h4 data-start=\"2328\" data-end=\"2358\">💵 <strong data-start=\"2336\" data-end=\"2356\">Starting at $500</strong></h4><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"2359\" data-end=\"2424\"><em data-start=\"2359\" data-end=\"2424\">Final pricing depends on features, platforms, and integrations.</em></p>', 500.00, 1, '2025-06-16 11:42:08', '2025-06-16 11:42:08'),
(3, NULL, 'E-Commerce Store', NULL, '<p>We develop modern, scalable e-commerce stores with secure payments, inventory management, and smooth user experiences — tailored for your brand and business goals.</p>', '<p data-start=\"445\" data-end=\"756\">At <strong data-start=\"448\" data-end=\"460\">Wavesync</strong>, we create powerful, fully functional e-commerce platforms that help you sell your products or services online effortlessly. Whether you\'re a startup launching your first store or a brand looking to scale globally, we build solutions that are secure, customizable, and optimized for conversions.</p><hr data-start=\"758\" data-end=\"761\"><h4 data-start=\"763\" data-end=\"787\"><strong data-start=\"768\" data-end=\"787\">What’s Included</strong></h4><p data-start=\"789\" data-end=\"922\">✅ <strong data-start=\"791\" data-end=\"819\">Custom Storefront Design</strong><br data-start=\"819\" data-end=\"822\">\r\nWe design visually appealing, responsive store layouts that reflect your brand and drive engagement.</p><p data-start=\"924\" data-end=\"1072\">✅ <strong data-start=\"926\" data-end=\"960\">Product &amp; Inventory Management</strong><br data-start=\"960\" data-end=\"963\">\r\nEasily manage product listings, stock levels, variants (size, color), and categories from an admin dashboard.</p><p data-start=\"1074\" data-end=\"1208\">✅ <strong data-start=\"1076\" data-end=\"1106\">Secure Payment Integration</strong><br data-start=\"1106\" data-end=\"1109\">\r\nWe integrate Stripe, PayPal, Razorpay, or custom gateways to enable smooth and secure transactions.</p><p data-start=\"1210\" data-end=\"1346\">✅ <strong data-start=\"1212\" data-end=\"1240\">Shopping Cart &amp; Checkout</strong><br data-start=\"1240\" data-end=\"1243\">\r\nCustom cart features with promo codes, shipping calculators, tax rules, and step-by-step checkout flow.</p><p data-start=\"1348\" data-end=\"1459\">✅ <strong data-start=\"1350\" data-end=\"1383\">Order Tracking &amp; Email Alerts</strong><br data-start=\"1383\" data-end=\"1386\">\r\nReal-time order updates and email notifications for customers and admins.</p><p data-start=\"1461\" data-end=\"1562\">✅ <strong data-start=\"1463\" data-end=\"1490\">Customer Account System</strong><br data-start=\"1490\" data-end=\"1493\">\r\nLet users register, log in, manage addresses, and view order history.</p><p data-start=\"1564\" data-end=\"1673\">✅ <strong data-start=\"1566\" data-end=\"1581\">Admin Panel</strong><br data-start=\"1581\" data-end=\"1584\">\r\nUser-friendly admin dashboard to manage orders, users, discounts, reports, and analytics.</p><p data-start=\"1675\" data-end=\"1824\">✅ <strong data-start=\"1677\" data-end=\"1711\">SEO &amp; Performance Optimization</strong><br data-start=\"1711\" data-end=\"1714\">\r\nOptimized URLs, structured data, and lightning-fast load speeds to boost search visibility and user retention.</p><p data-start=\"1826\" data-end=\"1940\">✅ <strong data-start=\"1828\" data-end=\"1856\">Mobile-Responsive Design</strong><br data-start=\"1856\" data-end=\"1859\">\r\nYour store works beautifully on all devices — smartphones, tablets, and desktops.</p><p data-start=\"1942\" data-end=\"2064\">✅ <strong data-start=\"1944\" data-end=\"1972\">Third-Party Integrations</strong><br data-start=\"1972\" data-end=\"1975\">\r\nAdd features like Google Analytics, Facebook Pixel, WhatsApp chat, CRM systems, and more.</p><hr data-start=\"2066\" data-end=\"2069\"><h4 data-start=\"2071\" data-end=\"2102\"><strong data-start=\"2076\" data-end=\"2102\">Platforms We Work With</strong></h4><ul data-start=\"2104\" data-end=\"2243\">\r\n<li data-start=\"2104\" data-end=\"2137\">\r\n<p data-start=\"2106\" data-end=\"2137\"><strong data-start=\"2106\" data-end=\"2137\">Custom Laravel-based Stores</strong></p>\r\n</li>\r\n<li data-start=\"2138\" data-end=\"2167\">\r\n<p data-start=\"2140\" data-end=\"2167\"><strong data-start=\"2140\" data-end=\"2167\">WooCommerce (WordPress)</strong></p>\r\n</li>\r\n<li data-start=\"2168\" data-end=\"2206\">\r\n<p data-start=\"2170\" data-end=\"2206\"><strong data-start=\"2170\" data-end=\"2206\">Shopify (Customization &amp; Themes)</strong></p>\r\n</li>\r\n<li data-start=\"2207\" data-end=\"2243\">\r\n<p data-start=\"2209\" data-end=\"2243\"><strong data-start=\"2209\" data-end=\"2243\">Magento / OpenCart (on demand)</strong></p>\r\n</li>\r\n</ul><hr data-start=\"2245\" data-end=\"2248\"><h4 data-start=\"2250\" data-end=\"2268\"><strong data-start=\"2255\" data-end=\"2268\">Ideal For</strong></h4><ul data-start=\"2269\" data-end=\"2459\">\r\n<li data-start=\"2269\" data-end=\"2297\">\r\n<p data-start=\"2271\" data-end=\"2297\">Fashion &amp; Apparel Stores</p>\r\n</li>\r\n<li data-start=\"2298\" data-end=\"2323\">\r\n<p data-start=\"2300\" data-end=\"2323\">Electronics &amp; Gadgets</p>\r\n</li>\r\n<li data-start=\"2324\" data-end=\"2363\">\r\n<p data-start=\"2326\" data-end=\"2363\">Digital Products (eBooks, software)</p>\r\n</li>\r\n<li data-start=\"2364\" data-end=\"2388\">\r\n<p data-start=\"2366\" data-end=\"2388\">Grocery &amp; Essentials</p>\r\n</li>\r\n<li data-start=\"2389\" data-end=\"2433\">\r\n<p data-start=\"2391\" data-end=\"2433\">Service Bookings (e.g., salons, doctors)</p>\r\n</li>\r\n<li data-start=\"2434\" data-end=\"2459\">\r\n<p data-start=\"2436\" data-end=\"2459\">B2B &amp; Wholesale Shops</p>\r\n</li>\r\n</ul><hr data-start=\"2461\" data-end=\"2464\"><h4 data-start=\"2466\" data-end=\"2496\">💵 <strong data-start=\"2474\" data-end=\"2494\">Starting at $750</strong></h4><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"2497\" data-end=\"2573\"><em data-start=\"2497\" data-end=\"2573\">Pricing varies based on platform, number of products, and custom features.</em></p>', 750.00, 1, '2025-06-16 11:54:59', '2025-06-16 11:54:59'),
(4, NULL, 'AI Chatbot', NULL, '<p data-start=\"207\" data-end=\"345\">Boost customer engagement and automate support with AI-powered chatbots that provide smart, instant, and personalized interactions — 24/7.</p>', '<p data-start=\"383\" data-end=\"694\">At <strong data-start=\"386\" data-end=\"398\">Wavesync</strong>, we design and build advanced <strong data-start=\"429\" data-end=\"444\">AI Chatbots</strong> that streamline your communication channels, reduce support costs, and deliver exceptional user experiences. Whether you need a chatbot for your website, mobile app, or messaging platforms like WhatsApp or Facebook Messenger — we’ve got you covered.</p><hr data-start=\"696\" data-end=\"699\"><h4 data-start=\"701\" data-end=\"725\"><strong data-start=\"706\" data-end=\"725\">What’s Included</strong></h4><p data-start=\"727\" data-end=\"910\">✅ <strong data-start=\"729\" data-end=\"753\">Custom Bot Workflows</strong><br data-start=\"753\" data-end=\"756\">\r\nFrom greetings to lead capture, appointment booking, or support responses — we craft intelligent, human-like conversation flows tailored to your business.</p><p data-start=\"912\" data-end=\"1082\">✅ <strong data-start=\"914\" data-end=\"954\">Natural Language Understanding (NLU)</strong><br data-start=\"954\" data-end=\"957\">\r\nOur bots use NLP (Natural Language Processing) to understand customer intent and respond accurately, even to complex queries.</p><p data-start=\"1084\" data-end=\"1241\">✅ <strong data-start=\"1086\" data-end=\"1110\">Multichannel Support</strong><br data-start=\"1110\" data-end=\"1113\">\r\nDeploy chatbots on multiple platforms — your website, WhatsApp, Messenger, Telegram, Slack, or even voice assistants like Alexa.</p><p data-start=\"1243\" data-end=\"1385\">✅ <strong data-start=\"1245\" data-end=\"1267\">Live Agent Handoff</strong><br data-start=\"1267\" data-end=\"1270\">\r\nAutomatically hand over conversations to a live human agent when needed, ensuring seamless transitions and support.</p><p data-start=\"1387\" data-end=\"1533\">✅ <strong data-start=\"1389\" data-end=\"1418\">AI Training &amp; Improvement</strong><br data-start=\"1418\" data-end=\"1421\">\r\nWe train your bot using real data and continuously improve it through supervised learning and customer feedback.</p><p data-start=\"1535\" data-end=\"1691\">✅ <strong data-start=\"1537\" data-end=\"1569\">Integration with APIs &amp; CRMs</strong><br data-start=\"1569\" data-end=\"1572\">\r\nConnect the bot with your CRM, inventory systems, calendars, ticketing platforms, or custom APIs for dynamic responses.</p><p data-start=\"1693\" data-end=\"1810\">✅ <strong data-start=\"1695\" data-end=\"1724\">Multilingual Capabilities</strong><br data-start=\"1724\" data-end=\"1727\">\r\nReach a global audience by supporting multiple languages based on user preferences.</p><p data-start=\"1812\" data-end=\"1951\">✅ <strong data-start=\"1814\" data-end=\"1838\">Analytics &amp; Insights</strong><br data-start=\"1838\" data-end=\"1841\">\r\nTrack chatbot performance, user engagement, popular queries, and conversion funnels via a reporting dashboard.</p><p data-start=\"1953\" data-end=\"2066\">✅ <strong data-start=\"1955\" data-end=\"1976\">24/7 Availability</strong><br data-start=\"1976\" data-end=\"1979\">\r\nYour bot works around the clock — responding instantly, even when your team is offline.</p><hr data-start=\"2068\" data-end=\"2071\"><h4 data-start=\"2073\" data-end=\"2108\"><strong data-start=\"2078\" data-end=\"2108\">Types of Chatbots We Build</strong></h4><ul data-start=\"2110\" data-end=\"2297\">\r\n<li data-start=\"2110\" data-end=\"2136\">\r\n<p data-start=\"2112\" data-end=\"2136\"><strong data-start=\"2112\" data-end=\"2136\">Lead Generation Bots</strong></p>\r\n</li>\r\n<li data-start=\"2137\" data-end=\"2164\">\r\n<p data-start=\"2139\" data-end=\"2164\"><strong data-start=\"2139\" data-end=\"2164\">Customer Support Bots</strong></p>\r\n</li>\r\n<li data-start=\"2165\" data-end=\"2205\">\r\n<p data-start=\"2167\" data-end=\"2205\"><strong data-start=\"2167\" data-end=\"2205\">E-commerce Product Suggestion Bots</strong></p>\r\n</li>\r\n<li data-start=\"2206\" data-end=\"2237\">\r\n<p data-start=\"2208\" data-end=\"2237\"><strong data-start=\"2208\" data-end=\"2237\">Booking &amp; Scheduling Bots</strong></p>\r\n</li>\r\n<li data-start=\"2238\" data-end=\"2268\">\r\n<p data-start=\"2240\" data-end=\"2268\"><strong data-start=\"2240\" data-end=\"2268\">FAQ &amp; Knowledgebase Bots</strong></p>\r\n</li>\r\n<li data-start=\"2269\" data-end=\"2297\">\r\n<p data-start=\"2271\" data-end=\"2297\"><strong data-start=\"2271\" data-end=\"2297\">Survey &amp; Feedback Bots</strong></p>\r\n</li>\r\n</ul><hr data-start=\"2299\" data-end=\"2302\"><h4 data-start=\"2304\" data-end=\"2322\"><strong data-start=\"2309\" data-end=\"2322\">Ideal For</strong></h4><ul data-start=\"2323\" data-end=\"2471\">\r\n<li data-start=\"2323\" data-end=\"2348\">\r\n<p data-start=\"2325\" data-end=\"2348\">SaaS &amp; Tech Companies</p>\r\n</li>\r\n<li data-start=\"2349\" data-end=\"2370\">\r\n<p data-start=\"2351\" data-end=\"2370\">E-commerce Brands</p>\r\n</li>\r\n<li data-start=\"2371\" data-end=\"2399\">\r\n<p data-start=\"2373\" data-end=\"2399\">Real Estate &amp; Healthcare</p>\r\n</li>\r\n<li data-start=\"2400\" data-end=\"2423\">\r\n<p data-start=\"2402\" data-end=\"2423\">Education Platforms</p>\r\n</li>\r\n<li data-start=\"2424\" data-end=\"2448\">\r\n<p data-start=\"2426\" data-end=\"2448\">Travel &amp; Hospitality</p>\r\n</li>\r\n<li data-start=\"2449\" data-end=\"2471\">\r\n<p data-start=\"2451\" data-end=\"2471\">Government Portals</p>\r\n</li>\r\n</ul><hr data-start=\"2473\" data-end=\"2476\"><h4 data-start=\"2478\" data-end=\"2508\">💵 <strong data-start=\"2486\" data-end=\"2506\">Starting at $600</strong></h4><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"2509\" data-end=\"2604\"><em data-start=\"2509\" data-end=\"2604\">Pricing depends on platform integration, number of flows, AI training needs, and custom APIs.</em></p>', 600.00, 1, '2025-06-16 11:56:22', '2025-06-16 11:56:22'),
(5, NULL, 'Full-Stack Development', NULL, '<p>We offer complete frontend and backend development services, delivering fully functional, scalable, and secure digital solutions from start to finish.</p>', '<p data-start=\"433\" data-end=\"789\">At <strong data-start=\"436\" data-end=\"448\">Wavesync</strong>, we specialize in <strong data-start=\"467\" data-end=\"493\">Full-Stack Development</strong> that covers every layer of your application — from pixel-perfect frontend interfaces to powerful backend logic and databases. Whether you\'re launching a SaaS platform, an admin dashboard, or a custom enterprise system, we bring your vision to life with modern tech stacks and expert engineering.</p><hr data-start=\"791\" data-end=\"794\"><h3 data-start=\"796\" data-end=\"822\">🔧 <strong data-start=\"803\" data-end=\"822\">What’s Included</strong></h3><p data-start=\"824\" data-end=\"954\">✅ <strong data-start=\"826\" data-end=\"850\">Frontend Development</strong><br data-start=\"850\" data-end=\"853\">\r\nResponsive and dynamic UI using technologies like React.js, Vue.js, Blade (Laravel), or Tailwind CSS.</p><p data-start=\"956\" data-end=\"1084\">✅ <strong data-start=\"958\" data-end=\"981\">Backend Development</strong><br data-start=\"981\" data-end=\"984\">\r\nRobust business logic, APIs, and data processing using Laravel, Node.js, Express, Django, or Python.</p><p data-start=\"1086\" data-end=\"1214\">✅ <strong data-start=\"1088\" data-end=\"1107\">Database Design</strong><br data-start=\"1107\" data-end=\"1110\">\r\nRelational (MySQL, PostgreSQL) or NoSQL (MongoDB) database architecture for performance and scalability.</p><p data-start=\"1216\" data-end=\"1368\">✅ <strong data-start=\"1218\" data-end=\"1251\">API Integration &amp; Development</strong><br data-start=\"1251\" data-end=\"1254\">\r\nBuild custom RESTful or GraphQL APIs and integrate with third-party services like Stripe, Twilio, and social auth.</p><p data-start=\"1370\" data-end=\"1512\">✅ <strong data-start=\"1372\" data-end=\"1406\">Authentication &amp; Authorization</strong><br data-start=\"1406\" data-end=\"1409\">\r\nSecure login systems, user roles, admin panels, and access control with JWT, Laravel Sanctum, or OAuth.</p><p data-start=\"1514\" data-end=\"1654\">✅ <strong data-start=\"1516\" data-end=\"1539\">Deployment &amp; DevOps</strong><br data-start=\"1539\" data-end=\"1542\">\r\nWe handle CI/CD pipelines, server setup (DigitalOcean, AWS, etc.), and version control (Git, GitHub, Bitbucket).</p><p data-start=\"1656\" data-end=\"1799\">✅ <strong data-start=\"1658\" data-end=\"1686\">Performance Optimization</strong><br data-start=\"1686\" data-end=\"1689\">\r\nWe optimize queries, reduce page load times, cache responses, and minimize frontend bloat for top performance.</p><p data-start=\"1801\" data-end=\"1926\">✅ <strong data-start=\"1803\" data-end=\"1830\">Security Best Practices</strong><br data-start=\"1830\" data-end=\"1833\">\r\nSQL injection prevention, CSRF/XSS protection, HTTPS configuration, and secure data handling.</p><p data-start=\"1928\" data-end=\"2047\">✅ <strong data-start=\"1930\" data-end=\"1953\">Testing &amp; Debugging</strong><br data-start=\"1953\" data-end=\"1956\">\r\nUnit tests, feature tests, and real-time debugging to ensure a stable and reliable product.</p><hr data-start=\"2049\" data-end=\"2052\"><h3 data-start=\"2054\" data-end=\"2083\">💻 <strong data-start=\"2061\" data-end=\"2083\">Tech Stacks We Use</strong></h3><ul data-start=\"2085\" data-end=\"2319\">\r\n<li data-start=\"2085\" data-end=\"2145\">\r\n<p data-start=\"2087\" data-end=\"2145\"><strong data-start=\"2087\" data-end=\"2099\">Frontend</strong>: React, Vue, Blade, Tailwind CSS, Bootstrap</p>\r\n</li>\r\n<li data-start=\"2146\" data-end=\"2196\">\r\n<p data-start=\"2148\" data-end=\"2196\"><strong data-start=\"2148\" data-end=\"2159\">Backend</strong>: Laravel, Node.js, Django, Express</p>\r\n</li>\r\n<li data-start=\"2197\" data-end=\"2242\">\r\n<p data-start=\"2199\" data-end=\"2242\"><strong data-start=\"2199\" data-end=\"2212\">Databases</strong>: MySQL, PostgreSQL, MongoDB</p>\r\n</li>\r\n<li data-start=\"2243\" data-end=\"2319\">\r\n<p data-start=\"2245\" data-end=\"2319\"><strong data-start=\"2245\" data-end=\"2263\">Cloud &amp; DevOps</strong>: DigitalOcean, AWS, GitHub Actions, Docker (on request)</p>\r\n</li>\r\n</ul><hr data-start=\"2321\" data-end=\"2324\"><h3 data-start=\"2326\" data-end=\"2345\">🧑‍💻 Ideal For</h3><ul data-start=\"2347\" data-end=\"2484\">\r\n<li data-start=\"2347\" data-end=\"2365\">\r\n<p data-start=\"2349\" data-end=\"2365\">SaaS Platforms</p>\r\n</li>\r\n<li data-start=\"2366\" data-end=\"2386\">\r\n<p data-start=\"2368\" data-end=\"2386\">Admin Dashboards</p>\r\n</li>\r\n<li data-start=\"2387\" data-end=\"2402\">\r\n<p data-start=\"2389\" data-end=\"2402\">CRMs &amp; ERPs</p>\r\n</li>\r\n<li data-start=\"2403\" data-end=\"2423\">\r\n<p data-start=\"2405\" data-end=\"2423\">Social Platforms</p>\r\n</li>\r\n<li data-start=\"2424\" data-end=\"2451\">\r\n<p data-start=\"2426\" data-end=\"2451\">Web Portals &amp; Intranets</p>\r\n</li>\r\n<li data-start=\"2452\" data-end=\"2484\">\r\n<p data-start=\"2454\" data-end=\"2484\">Marketplace &amp; Listings Sites</p>\r\n</li>\r\n</ul><hr data-start=\"2486\" data-end=\"2489\"><h3 data-start=\"2491\" data-end=\"2520\">💵 <strong data-start=\"2498\" data-end=\"2518\">Starting at $950</strong></h3><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"2521\" data-end=\"2602\"><em data-start=\"2521\" data-end=\"2602\">Final cost depends on complexity, number of modules, and integrations required.</em></p>', 950.00, 1, '2025-06-16 11:57:31', '2025-06-16 11:57:31'),
(6, NULL, 'Custom Software Development', NULL, '<p>We build tailored software solutions that solve your unique business challenges — from automation to complex system integrations.</p>', '<p data-start=\"446\" data-end=\"766\">At <strong data-start=\"449\" data-end=\"461\">Wavesync</strong>, our <strong data-start=\"467\" data-end=\"498\">Custom Software Development</strong> service is designed to turn your specific business processes into efficient digital tools. Whether you\'re a startup looking to scale or an enterprise needing robust internal systems, we craft software that adapts perfectly to your workflow — not the other way around.</p><p data-start=\"768\" data-end=\"928\">We collaborate closely with you to understand your business goals, analyze current operations, and build a scalable, maintainable system tailored to your needs.</p><hr data-start=\"930\" data-end=\"933\"><h3 data-start=\"935\" data-end=\"958\">🔧 What’s Included:</h3><p data-start=\"960\" data-end=\"1105\">✅ <strong data-start=\"962\" data-end=\"988\">End-to-End Development</strong><br data-start=\"988\" data-end=\"991\">\r\nFrom discovery and UI/UX design to deployment and maintenance — we handle the full software development lifecycle.</p><p data-start=\"1107\" data-end=\"1244\">✅ <strong data-start=\"1109\" data-end=\"1140\">Business Process Automation</strong><br data-start=\"1140\" data-end=\"1143\">\r\nDigitize manual workflows, reduce redundancy, and eliminate repetitive tasks to improve productivity.</p><p data-start=\"1246\" data-end=\"1380\">✅ <strong data-start=\"1248\" data-end=\"1284\">Custom Dashboards &amp; Admin Panels</strong><br data-start=\"1284\" data-end=\"1287\">\r\nVisualize data, manage operations, and control users or content with feature-rich dashboards.</p><p data-start=\"1382\" data-end=\"1513\">✅ <strong data-start=\"1384\" data-end=\"1413\">Role-Based Access Systems</strong><br data-start=\"1413\" data-end=\"1416\">\r\nCreate advanced permissions and multi-user access systems for administrators, teams, and clients.</p><p data-start=\"1515\" data-end=\"1644\">✅ <strong data-start=\"1517\" data-end=\"1548\">Reporting &amp; Analytics Tools</strong><br data-start=\"1548\" data-end=\"1551\">\r\nGenerate detailed reports, export data, and make informed decisions with real-time analytics.</p><p data-start=\"1646\" data-end=\"1796\">✅ <strong data-start=\"1648\" data-end=\"1681\">API Development &amp; Integration</strong><br data-start=\"1681\" data-end=\"1684\">\r\nBuild and consume APIs for seamless integration with third-party platforms like ERPs, CRMs, or payment gateways.</p><p data-start=\"1798\" data-end=\"1948\">✅ <strong data-start=\"1800\" data-end=\"1835\">Modular &amp; Scalable Architecture</strong><br data-start=\"1835\" data-end=\"1838\">\r\nWe design your software to grow with your business — whether it’s adding users, modules, or features later on.</p><p data-start=\"1950\" data-end=\"2076\">✅ <strong data-start=\"1952\" data-end=\"1984\">Cross-Platform Compatibility</strong><br data-start=\"1984\" data-end=\"1987\">\r\nOur apps work seamlessly across desktops, tablets, and mobile devices with responsive UI.</p><p data-start=\"2078\" data-end=\"2193\">✅ <strong data-start=\"2080\" data-end=\"2104\">Deployment &amp; Support</strong><br data-start=\"2104\" data-end=\"2107\">\r\nWe assist with server deployment, backups, and offer post-launch support and upgrades.</p><hr data-start=\"2195\" data-end=\"2198\"><h3 data-start=\"2200\" data-end=\"2220\">👨‍💼 Ideal For:</h3><ul data-start=\"2222\" data-end=\"2407\">\r\n<li data-start=\"2222\" data-end=\"2246\">\r\n<p data-start=\"2224\" data-end=\"2246\">SMEs and Enterprises</p>\r\n</li>\r\n<li data-start=\"2247\" data-end=\"2284\">\r\n<p data-start=\"2249\" data-end=\"2284\">Healthcare, Logistics &amp; Education</p>\r\n</li>\r\n<li data-start=\"2285\" data-end=\"2315\">\r\n<p data-start=\"2287\" data-end=\"2315\">Real Estate &amp; Construction</p>\r\n</li>\r\n<li data-start=\"2316\" data-end=\"2341\">\r\n<p data-start=\"2318\" data-end=\"2341\">Finance &amp; Legal Firms</p>\r\n</li>\r\n<li data-start=\"2342\" data-end=\"2377\">\r\n<p data-start=\"2344\" data-end=\"2377\">Startups with Unique SaaS Ideas</p>\r\n</li>\r\n<li data-start=\"2378\" data-end=\"2407\">\r\n<p data-start=\"2380\" data-end=\"2407\">NGOs &amp; Government Systems</p>\r\n</li>\r\n</ul><hr data-start=\"2409\" data-end=\"2412\"><h3 data-start=\"2414\" data-end=\"2441\">💻 Technologies We Use:</h3><ul data-start=\"2443\" data-end=\"2721\">\r\n<li data-start=\"2443\" data-end=\"2507\">\r\n<p data-start=\"2445\" data-end=\"2507\"><strong data-start=\"2445\" data-end=\"2471\">Languages &amp; Frameworks</strong>: Laravel, Node.js, Python, Django</p>\r\n</li>\r\n<li data-start=\"2508\" data-end=\"2560\">\r\n<p data-start=\"2510\" data-end=\"2560\"><strong data-start=\"2510\" data-end=\"2522\">Frontend</strong>: Vue.js, React, Bootstrap, Tailwind</p>\r\n</li>\r\n<li data-start=\"2561\" data-end=\"2606\">\r\n<p data-start=\"2563\" data-end=\"2606\"><strong data-start=\"2563\" data-end=\"2576\">Databases</strong>: MySQL, PostgreSQL, MongoDB</p>\r\n</li>\r\n<li data-start=\"2607\" data-end=\"2665\">\r\n<p data-start=\"2609\" data-end=\"2665\"><strong data-start=\"2609\" data-end=\"2625\">Integrations</strong>: Stripe, Twilio, Mailgun, Google APIs</p>\r\n</li>\r\n<li data-start=\"2666\" data-end=\"2721\">\r\n<p data-start=\"2668\" data-end=\"2721\"><strong data-start=\"2668\" data-end=\"2678\">DevOps</strong>: Docker, GitHub Actions, DigitalOcean, AWS</p>\r\n</li>\r\n</ul><hr data-start=\"2723\" data-end=\"2726\"><h3 data-start=\"2728\" data-end=\"2758\">💵 <strong data-start=\"2735\" data-end=\"2756\">Starting at $1200</strong></h3><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"2759\" data-end=\"2831\"><em data-start=\"2759\" data-end=\"2831\">Final pricing varies based on project scope, timeline, and complexity.</em></p>', 1200.00, 1, '2025-06-16 11:58:48', '2025-06-16 11:58:48'),
(7, NULL, 'Blockchain Development', NULL, '<p>We create secure, transparent blockchain solutions including smart contracts, wallets, and decentralized applications tailored to your business goals.</p>', '<p data-start=\"481\" data-end=\"749\">At <strong data-start=\"484\" data-end=\"496\">Wavesync</strong>, our <strong data-start=\"502\" data-end=\"528\">Blockchain Development</strong> services are built to empower forward-thinking businesses with decentralized technology. We develop highly secure and scalable blockchain-based solutions that bring transparency, automation, and trust to your operations.</p><p data-start=\"751\" data-end=\"913\">Whether you\'re launching a DeFi product, an NFT marketplace, or need private blockchain infrastructure, our team can architect the right system for your use case.</p><hr data-start=\"915\" data-end=\"918\"><h3 data-start=\"920\" data-end=\"947\">🔧 <strong data-start=\"927\" data-end=\"947\">What’s Included:</strong></h3><p data-start=\"949\" data-end=\"1114\">✅ <strong data-start=\"951\" data-end=\"981\">Smart Contract Development</strong><br data-start=\"981\" data-end=\"984\">\r\nWe write and deploy secure smart contracts using Solidity and Rust for Ethereum, Polygon, Solana, and other EVM-compatible chains.</p><p data-start=\"1116\" data-end=\"1266\">✅ <strong data-start=\"1118\" data-end=\"1156\">Decentralized Applications (dApps)</strong><br data-start=\"1156\" data-end=\"1159\">\r\nCustom decentralized platforms with Web3 integration — NFT platforms, DeFi tools, DAO dashboards, and more.</p><p data-start=\"1268\" data-end=\"1396\">✅ <strong data-start=\"1270\" data-end=\"1299\">Crypto Wallet Integration</strong><br data-start=\"1299\" data-end=\"1302\">\r\nIntegrate non-custodial wallets like MetaMask, WalletConnect, or custom wallets into your app.</p><p data-start=\"1398\" data-end=\"1541\">✅ <strong data-start=\"1400\" data-end=\"1443\">Token Creation (ERC20, ERC721, ERC1155)</strong><br data-start=\"1443\" data-end=\"1446\">\r\nWe help you launch your own cryptocurrency or NFT with customized tokenomics and functionality.</p><p data-start=\"1543\" data-end=\"1705\">✅ <strong data-start=\"1545\" data-end=\"1590\">Private &amp; Consortium Blockchain Solutions</strong><br data-start=\"1590\" data-end=\"1593\">\r\nNeed an internal blockchain? We build permissioned chains using Hyperledger Fabric or private Ethereum networks.</p><p data-start=\"1707\" data-end=\"1833\">✅ <strong data-start=\"1709\" data-end=\"1739\">Blockchain API Integration</strong><br data-start=\"1739\" data-end=\"1742\">\r\nSeamlessly connect your system with platforms like Moralis, Alchemy, Infura, and The Graph.</p><p data-start=\"1835\" data-end=\"1960\">✅ <strong data-start=\"1837\" data-end=\"1866\">Security Audits &amp; Testing</strong><br data-start=\"1866\" data-end=\"1869\">\r\nAll contracts undergo rigorous testing to prevent exploits, gas leaks, and vulnerabilities.</p><p data-start=\"1962\" data-end=\"2092\">✅ <strong data-start=\"1964\" data-end=\"1995\">Launch &amp; Monitoring Support</strong><br data-start=\"1995\" data-end=\"1998\">\r\nFrom testnet to mainnet, we support your product launch, performance monitoring, and upgrades.</p><hr data-start=\"2094\" data-end=\"2097\"><h3 data-start=\"2099\" data-end=\"2120\">🚀 <strong data-start=\"2106\" data-end=\"2120\">Ideal For:</strong></h3><ul data-start=\"2122\" data-end=\"2304\">\r\n<li data-start=\"2122\" data-end=\"2150\">\r\n<p data-start=\"2124\" data-end=\"2150\">FinTech &amp; DeFi Platforms</p>\r\n</li>\r\n<li data-start=\"2151\" data-end=\"2171\">\r\n<p data-start=\"2153\" data-end=\"2171\">NFT Marketplaces</p>\r\n</li>\r\n<li data-start=\"2172\" data-end=\"2204\">\r\n<p data-start=\"2174\" data-end=\"2204\">Token Launches (ICO/IDO/IEO)</p>\r\n</li>\r\n<li data-start=\"2205\" data-end=\"2231\">\r\n<p data-start=\"2207\" data-end=\"2231\">DAO-Based Applications</p>\r\n</li>\r\n<li data-start=\"2232\" data-end=\"2261\">\r\n<p data-start=\"2234\" data-end=\"2261\">Supply Chain Transparency</p>\r\n</li>\r\n<li data-start=\"2262\" data-end=\"2304\">\r\n<p data-start=\"2264\" data-end=\"2304\">Voting &amp; Identity Verification Systems</p>\r\n</li>\r\n</ul><hr data-start=\"2306\" data-end=\"2309\"><h3 data-start=\"2311\" data-end=\"2343\">💻 <strong data-start=\"2318\" data-end=\"2343\">Technologies &amp; Tools:</strong></h3><ul data-start=\"2345\" data-end=\"2627\">\r\n<li data-start=\"2345\" data-end=\"2378\">\r\n<p data-start=\"2347\" data-end=\"2378\"><strong data-start=\"2347\" data-end=\"2360\">Languages</strong>: Solidity, Rust</p>\r\n</li>\r\n<li data-start=\"2379\" data-end=\"2442\">\r\n<p data-start=\"2381\" data-end=\"2442\"><strong data-start=\"2381\" data-end=\"2391\">Chains</strong>: Ethereum, Polygon, BNB Chain, Solana, Avalanche</p>\r\n</li>\r\n<li data-start=\"2443\" data-end=\"2509\">\r\n<p data-start=\"2445\" data-end=\"2509\"><strong data-start=\"2445\" data-end=\"2459\">Web3 Tools</strong>: Web3.js, Ethers.js, Truffle, Hardhat, Metamask</p>\r\n</li>\r\n<li data-start=\"2510\" data-end=\"2577\">\r\n<p data-start=\"2512\" data-end=\"2577\"><strong data-start=\"2512\" data-end=\"2526\">Frameworks</strong>: React, Next.js, Laravel (for dashboard/backend)</p>\r\n</li>\r\n<li data-start=\"2578\" data-end=\"2627\">\r\n<p data-start=\"2580\" data-end=\"2627\"><strong data-start=\"2580\" data-end=\"2588\">APIs</strong>: Moralis, Infura, Alchemy, Chainlink</p>\r\n</li>\r\n</ul><hr data-start=\"2629\" data-end=\"2632\"><h3 data-start=\"2634\" data-end=\"2664\">💵 <strong data-start=\"2641\" data-end=\"2662\">Starting at $1500</strong></h3><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"2665\" data-end=\"2764\"><em data-start=\"2665\" data-end=\"2764\">Pricing depends on smart contract complexity, integrations, and the number of supported networks.</em></p>', 1500.00, 1, '2025-06-16 12:02:04', '2025-06-16 12:02:04'),
(8, NULL, 'Machine Learning', NULL, '<p>Leverage AI-driven predictions, intelligent automation, and data insights. Our ML models help optimize operations, forecast trends, and boost decision-making.</p>', '<p data-start=\"415\" data-end=\"700\">At <strong data-start=\"418\" data-end=\"430\">Wavesync</strong>, we turn your data into intelligence through advanced <strong data-start=\"485\" data-end=\"510\">Machine Learning (ML)</strong> solutions. Whether you want to automate repetitive tasks, forecast trends, detect anomalies, or personalize customer experiences — our ML experts craft models that deliver measurable value.</p><p data-start=\"702\" data-end=\"839\">From prototype to production, we guide you through every step of the ML lifecycle to ensure accuracy, scalability, and real-world impact.</p><hr data-start=\"841\" data-end=\"844\"><h3 data-start=\"846\" data-end=\"873\">🔧 <strong data-start=\"853\" data-end=\"873\">What’s Included:</strong></h3><p data-start=\"875\" data-end=\"1040\">✅ <strong data-start=\"877\" data-end=\"901\">Predictive Analytics</strong><br data-start=\"901\" data-end=\"904\">\r\nForecast sales, demand, user behavior, or market shifts using time series forecasting, regression models, and classification techniques.</p><p data-start=\"1042\" data-end=\"1178\">✅ <strong data-start=\"1044\" data-end=\"1070\">Recommendation Systems</strong><br data-start=\"1070\" data-end=\"1073\">\r\nBoost conversions with personalized recommendations powered by collaborative filtering and deep learning.</p><p data-start=\"1180\" data-end=\"1337\">✅ <strong data-start=\"1182\" data-end=\"1219\">Natural Language Processing (NLP)</strong><br data-start=\"1219\" data-end=\"1222\">\r\nExtract meaning from text — sentiment analysis, text classification, chatbots, document parsing, and summarization.</p><p data-start=\"1339\" data-end=\"1454\">✅ <strong data-start=\"1341\" data-end=\"1360\">Computer Vision</strong><br data-start=\"1360\" data-end=\"1363\">\r\nAutomate image recognition, object detection, facial recognition, and image classification.</p><p data-start=\"1456\" data-end=\"1579\">✅ <strong data-start=\"1458\" data-end=\"1477\">Fraud Detection</strong><br data-start=\"1477\" data-end=\"1480\">\r\nUse anomaly detection models to flag suspicious activity in banking, e-commerce, or SaaS platforms.</p><p data-start=\"1581\" data-end=\"1706\">✅ <strong data-start=\"1583\" data-end=\"1603\">Model Deployment</strong><br data-start=\"1603\" data-end=\"1606\">\r\nDeploy models using APIs, Docker containers, or cloud services (AWS SageMaker, Google AI, Azure ML).</p><p data-start=\"1708\" data-end=\"1840\">✅ <strong data-start=\"1710\" data-end=\"1736\">Real-Time ML Pipelines</strong><br data-start=\"1736\" data-end=\"1739\">\r\nBuild pipelines that automate model training and real-time inference using Kafka, Airflow, or MLFlow.</p><p data-start=\"1842\" data-end=\"1977\">✅ <strong data-start=\"1844\" data-end=\"1868\">Explainable AI (XAI)</strong><br data-start=\"1868\" data-end=\"1871\">\r\nEnsure your ML decisions are transparent and auditable using SHAP, LIME, and other interpretability tools.</p><hr data-start=\"1979\" data-end=\"1982\"><h3 data-start=\"1984\" data-end=\"2005\">🚀 <strong data-start=\"1991\" data-end=\"2005\">Ideal For:</strong></h3><ul data-start=\"2007\" data-end=\"2194\">\r\n<li data-start=\"2007\" data-end=\"2046\">\r\n<p data-start=\"2009\" data-end=\"2046\">E-commerce &amp; Marketing Optimization</p>\r\n</li>\r\n<li data-start=\"2047\" data-end=\"2074\">\r\n<p data-start=\"2049\" data-end=\"2074\">Fintech Risk Management</p>\r\n</li>\r\n<li data-start=\"2075\" data-end=\"2101\">\r\n<p data-start=\"2077\" data-end=\"2101\">Healthcare Diagnostics</p>\r\n</li>\r\n<li data-start=\"2102\" data-end=\"2133\">\r\n<p data-start=\"2104\" data-end=\"2133\">Customer Support Automation</p>\r\n</li>\r\n<li data-start=\"2134\" data-end=\"2159\">\r\n<p data-start=\"2136\" data-end=\"2159\">Logistics Forecasting</p>\r\n</li>\r\n<li data-start=\"2160\" data-end=\"2194\">\r\n<p data-start=\"2162\" data-end=\"2194\">SaaS Analytics &amp; Scoring Systems</p>\r\n</li>\r\n</ul><hr data-start=\"2196\" data-end=\"2199\"><h3 data-start=\"2201\" data-end=\"2233\">💻 <strong data-start=\"2208\" data-end=\"2233\">Technologies &amp; Tools:</strong></h3><ul data-start=\"2235\" data-end=\"2499\">\r\n<li data-start=\"2235\" data-end=\"2263\">\r\n<p data-start=\"2237\" data-end=\"2263\"><strong data-start=\"2237\" data-end=\"2250\">Languages</strong>: Python, R</p>\r\n</li>\r\n<li data-start=\"2264\" data-end=\"2333\">\r\n<p data-start=\"2266\" data-end=\"2333\"><strong data-start=\"2266\" data-end=\"2279\">Libraries</strong>: Scikit-learn, TensorFlow, PyTorch, XGBoost, OpenCV</p>\r\n</li>\r\n<li data-start=\"2334\" data-end=\"2396\">\r\n<p data-start=\"2336\" data-end=\"2396\"><strong data-start=\"2336\" data-end=\"2349\">Platforms</strong>: AWS SageMaker, Google AI Platform, Azure ML</p>\r\n</li>\r\n<li data-start=\"2397\" data-end=\"2448\">\r\n<p data-start=\"2399\" data-end=\"2448\"><strong data-start=\"2399\" data-end=\"2416\">Visualization</strong>: Streamlit, Power BI, Tableau</p>\r\n</li>\r\n<li data-start=\"2449\" data-end=\"2499\">\r\n<p data-start=\"2451\" data-end=\"2499\"><strong data-start=\"2451\" data-end=\"2468\">Data Handling</strong>: Pandas, NumPy, Airflow, Kafka</p>\r\n</li>\r\n</ul><hr data-start=\"2501\" data-end=\"2504\"><h3 data-start=\"2506\" data-end=\"2536\">💵 <strong data-start=\"2513\" data-end=\"2534\">Starting at $1800</strong></h3><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"2537\" data-end=\"2627\"><em data-start=\"2537\" data-end=\"2627\">Pricing may vary based on dataset size, problem complexity, and deployment requirements.</em></p>', 1799.98, 1, '2025-06-16 12:03:02', '2025-06-16 12:03:02');
INSERT INTO `services` (`id`, `user_id`, `title`, `image`, `short_description`, `long_description`, `price`, `status`, `created_at`, `updated_at`) VALUES
(9, NULL, 'Bot Integration', NULL, '<p>We integrate intelligent bots into your platforms like WhatsApp, Slack, Discord, or your website to automate tasks, handle customer queries, and enhance user engagement.</p>', '<p data-start=\"471\" data-end=\"800\">At <strong data-start=\"474\" data-end=\"486\">Wavesync</strong>, our <strong data-start=\"492\" data-end=\"511\">Bot Integration</strong> services are designed to bring efficiency, speed, and interactivity to your business processes. Whether you\'re looking to automate customer support, streamline operations, or deliver real-time notifications, we build and integrate smart bots that align perfectly with your business goals.</p><p data-start=\"802\" data-end=\"1003\">These bots can be connected across multiple channels including <strong data-start=\"865\" data-end=\"923\">Slack, Discord, WhatsApp, Telegram, Facebook Messenger</strong>, or your custom web platform — giving your users a consistent, 24/7 experience.</p><hr data-start=\"1005\" data-end=\"1008\"><h3 data-start=\"1010\" data-end=\"1037\">🔧 <strong data-start=\"1017\" data-end=\"1037\">What’s Included:</strong></h3><p data-start=\"1039\" data-end=\"1197\">✅ <strong data-start=\"1041\" data-end=\"1065\">Chatbot for Websites</strong><br data-start=\"1065\" data-end=\"1068\">\r\nEngage visitors instantly with intelligent chatbots that can answer FAQs, collect leads, and direct users to the right resources.</p><p data-start=\"1199\" data-end=\"1368\">✅ <strong data-start=\"1201\" data-end=\"1238\">WhatsApp Business API Integration</strong><br data-start=\"1238\" data-end=\"1241\">\r\nBuild interactive customer experiences using WhatsApp bots — for appointment scheduling, product inquiries, and order tracking.</p><p data-start=\"1370\" data-end=\"1508\">✅ <strong data-start=\"1372\" data-end=\"1396\">Slack &amp; Discord Bots</strong><br data-start=\"1396\" data-end=\"1399\">\r\nAutomate team workflows, set reminders, and provide internal dashboards or custom notifications in real time.</p><p data-start=\"1510\" data-end=\"1661\">✅ <strong data-start=\"1512\" data-end=\"1548\">Telegram/Facebook Messenger Bots</strong><br data-start=\"1548\" data-end=\"1551\">\r\nAutomated customer service and lead generation directly in the messaging platforms your audience already uses.</p><p data-start=\"1663\" data-end=\"1799\">✅ <strong data-start=\"1665\" data-end=\"1694\">Webhook &amp; API Integration</strong><br data-start=\"1694\" data-end=\"1697\">\r\nConnect bots with your CRM, ERP, or custom backend to create advanced workflows and real-time syncing.</p><p data-start=\"1801\" data-end=\"2004\">✅ <strong data-start=\"1803\" data-end=\"1840\">Custom Bot Logic &amp; AI Integration</strong><br data-start=\"1840\" data-end=\"1843\">\r\nUse NLP (Natural Language Processing) for smart responses, sentiment analysis, or intent detection using tools like Dialogflow, Wit.ai, or custom-trained models.</p><p data-start=\"2006\" data-end=\"2156\">✅ <strong data-start=\"2008\" data-end=\"2034\">Notifications &amp; Alerts</strong><br data-start=\"2034\" data-end=\"2037\">\r\nSend personalized messages, updates, or reports to users or teams through bots triggered by system events or schedules.</p><p data-start=\"2158\" data-end=\"2270\">✅ <strong data-start=\"2160\" data-end=\"2186\">Multi-language Support</strong><br data-start=\"2186\" data-end=\"2189\">\r\nExpand your reach by integrating multilingual support for users around the globe.</p><hr data-start=\"2272\" data-end=\"2275\"><h3 data-start=\"2277\" data-end=\"2298\">🚀 <strong data-start=\"2284\" data-end=\"2298\">Ideal For:</strong></h3><ul data-start=\"2300\" data-end=\"2506\">\r\n<li data-start=\"2300\" data-end=\"2335\">\r\n<p data-start=\"2302\" data-end=\"2335\">E-commerce &amp; Support Automation</p>\r\n</li>\r\n<li data-start=\"2336\" data-end=\"2371\">\r\n<p data-start=\"2338\" data-end=\"2371\">Booking &amp; Scheduling Assistants</p>\r\n</li>\r\n<li data-start=\"2372\" data-end=\"2400\">\r\n<p data-start=\"2374\" data-end=\"2400\">Internal Team Management</p>\r\n</li>\r\n<li data-start=\"2401\" data-end=\"2437\">\r\n<p data-start=\"2403\" data-end=\"2437\">Customer Relationship Management</p>\r\n</li>\r\n<li data-start=\"2438\" data-end=\"2472\">\r\n<p data-start=\"2440\" data-end=\"2472\">Event Registration &amp; Reminders</p>\r\n</li>\r\n<li data-start=\"2473\" data-end=\"2506\">\r\n<p data-start=\"2475\" data-end=\"2506\">SaaS Onboarding &amp; Notifications</p>\r\n</li>\r\n</ul><hr data-start=\"2508\" data-end=\"2511\"><h3 data-start=\"2513\" data-end=\"2545\">💻 <strong data-start=\"2520\" data-end=\"2545\">Technologies &amp; Tools:</strong></h3><ul data-start=\"2547\" data-end=\"2797\">\r\n<li data-start=\"2547\" data-end=\"2628\">\r\n<p data-start=\"2549\" data-end=\"2628\"><strong data-start=\"2549\" data-end=\"2562\">Platforms</strong>: Slack, Discord, WhatsApp (Cloud API), Telegram, Messenger, Web</p>\r\n</li>\r\n<li data-start=\"2629\" data-end=\"2668\">\r\n<p data-start=\"2631\" data-end=\"2668\"><strong data-start=\"2631\" data-end=\"2644\">Languages</strong>: Node.js, Python, PHP</p>\r\n</li>\r\n<li data-start=\"2669\" data-end=\"2743\">\r\n<p data-start=\"2671\" data-end=\"2743\"><strong data-start=\"2671\" data-end=\"2690\">Frameworks/APIs</strong>: Botpress, Dialogflow, Twilio, Sendbird, Socket.IO</p>\r\n</li>\r\n<li data-start=\"2744\" data-end=\"2797\">\r\n<p data-start=\"2746\" data-end=\"2797\"><strong data-start=\"2746\" data-end=\"2757\">Hosting</strong>: AWS Lambda, Heroku, Cloudflare Workers</p>\r\n</li>\r\n</ul><hr data-start=\"2799\" data-end=\"2802\"><h3 data-start=\"2804\" data-end=\"2834\">💵 <strong data-start=\"2811\" data-end=\"2832\">Starting at $1200</strong></h3><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"2835\" data-end=\"2944\"><em data-start=\"2835\" data-end=\"2944\">Pricing depends on the number of integrations, complexity of conversation flow, and third-party API access.</em></p>', 1200.00, 1, '2025-06-16 12:04:06', '2025-06-16 12:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8xEjd8fhywZ9JhUX1jSrOISaWuDCzLvcqfbENyjM', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSEpZSjBSUVlRelkwTVdrREhUWEtBcHEydGJGaTJxdFllblVRcXdpNyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvc2VydmljZS9kZXRhaWxzLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1750094029);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `real_password`, `role_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '2025-06-16 11:36:57', '$2y$12$Fk8aW7yVny8dZgC06ql//.LU.4QsrttnKiQqMdFcQmzlay05vpXq2', '12345678', 'Admin', NULL, '2025-06-16 11:36:57', '2025-06-16 11:36:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
