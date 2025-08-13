-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2025 a las 17:45:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petsapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoptions`
--

CREATE TABLE `adoptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pet_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `adoptions`
--

INSERT INTO `adoptions` (`id`, `user_id`, `pet_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2025-06-06 21:44:18', '2025-06-06 21:44:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_30_130509_create_pets_table', 1),
(5, '2025_05_30_130557_create_adoptions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pets`
--

CREATE TABLE `pets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'no-pet.webp',
  `kind` varchar(255) NOT NULL,
  `weight` double NOT NULL,
  `age` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pets`
--

INSERT INTO `pets` (`id`, `name`, `image`, `kind`, `weight`, `age`, `breed`, `location`, `description`, `active`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Stuart', 'no-pet.webp', 'Dog', 2.5, '8', 'Pincher', 'Manizales, Colombia', 'Its a good boy', 1, 0, '2025-06-06 21:44:18', '2025-06-06 21:44:18'),
(2, 'Killer', 'no-pet.webp', 'Dog', 8.5, '3', 'Germany Shepherd', 'Berlin, Germany', 'Its a good boy', 1, 1, '2025-06-06 21:44:18', '2025-06-06 21:44:18'),
(3, 'Michi', 'no-pet.webp', 'Cat', 1.5, '7', 'Persa', 'Abu, Dhuabi', 'Only chickend food.', 1, 0, '2025-06-06 21:44:18', '2025-06-06 21:44:18'),
(4, 'Chanchi', 'no-pet.webp', 'Pig', 15.8, '5', 'Mini', 'Tokio, Japan', 'All Kind of food.', 1, 0, '2025-06-06 21:44:18', '2025-06-06 21:44:18'),
(5, 'Cody357', 'no-pet.webp', 'Dog', 73, '9', 'DarkOrchid', 'North Marlen', 'Iste maiores perferendis et maiores doloremque ratione ut dolorum architecto delectus.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(6, 'Annie291', 'no-pet.webp', 'Pig', 36, '6', 'LightSkyBlue', 'Tromptown', 'Dolorem atque velit odit voluptas similique sed magnam doloribus alias a amet.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(7, 'Simba728', 'no-pet.webp', 'Dog', 78, '4', 'LightSeaGreen', 'Port Laron', 'Itaque est enim sint assumenda sint corporis placeat reprehenderit dolorem nobis et impedit.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(8, 'Marley896', 'no-pet.webp', 'Dog', 21, '9', 'DarkKhaki', 'East Helen', 'Quas incidunt corporis nobis perferendis excepturi minima voluptatem sunt.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(9, 'Riley831', 'no-pet.webp', 'Bird', 8, '9', 'MistyRose', 'West Reymundomouth', 'Iste quaerat qui consequatur minus nesciunt iusto vitae iste sed.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(10, 'Tank028', 'no-pet.webp', 'Dog', 26, '8', 'LightGoldenRodYellow', 'Wuckertland', 'Eaque ipsum numquam voluptatem ipsum a deleniti placeat corrupti sed quos.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(11, 'Kobe028', 'no-pet.webp', 'Mouse', 38, '8', 'SandyBrown', 'West Alena', 'Voluptatem expedita atque sit aut consequatur tempore cupiditate ipsum laudantium.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(12, 'Sadie443', 'no-pet.webp', 'Dog', 80, '7', 'CornflowerBlue', 'New Susanamouth', 'Soluta sint praesentium vero natus ut rerum similique officiis omnis sed et.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(13, 'Gunner629', 'no-pet.webp', 'Dog', 56, '3', 'LimeGreen', 'Eunaborough', 'Est voluptas esse voluptates et beatae culpa optio et fugit esse.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(14, 'Sadie200', 'no-pet.webp', 'Dog', 21, '2', 'SeaGreen', 'Batzbury', 'Ea fuga velit fuga sed nesciunt aperiam saepe doloremque natus sint suscipit.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(15, 'Emma078', 'no-pet.webp', 'Bird', 58, '9', 'RosyBrown', 'Susanborough', 'Ut qui alias rerum et nesciunt reiciendis.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(16, 'Thor312', 'no-pet.webp', 'Bird', 33, '4', 'MintCream', 'North Maudeberg', 'Nisi ducimus ullam vel qui voluptas nihil quos et libero debitis accusamus in nobis.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(17, 'Cooper714', 'no-pet.webp', 'Hamster', 55, '1', 'Tomato', 'Ephraimmouth', 'Eos eum et ut et id magni.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(18, 'Oliver873', 'no-pet.webp', 'Dog', 28, '7', 'Cornsilk', 'Port Ethyl', 'Vel dolorem eos magnam nihil magni optio necessitatibus voluptatem ut ea voluptatem qui quasi.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(19, 'Chloe892', 'no-pet.webp', 'Dog', 61, '3', 'Peru', 'Jefferyshire', 'Sint earum illo quis ipsa similique corrupti iusto quis autem.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(20, 'Stella268', 'no-pet.webp', 'Mouse', 59, '1', 'Brown', 'East Nolan', 'Tempora dolore aut illo qui et dolor explicabo velit ab veritatis molestiae voluptatem et.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(21, 'Dexter549', 'no-pet.webp', 'Dog', 73, '3', 'DarkBlue', 'Lake Wilfrid', 'Et voluptatem asperiores quis quasi dolorem ipsam voluptatem reprehenderit earum fugit eveniet qui.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(22, 'Oscar591', 'no-pet.webp', 'Dog', 48, '9', 'White', 'Port Coltenborough', 'Dolores ipsum quo reprehenderit qui ipsam quos id et.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(23, 'Leo153', 'no-pet.webp', 'Pig', 6, '6', 'MediumAquaMarine', 'South Colinberg', 'Sunt tenetur dolores fuga natus qui quo.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(24, 'Ruby817', 'no-pet.webp', 'Cat', 17, '5', 'DarkMagenta', 'North Cordellfurt', 'Quidem vel pariatur ea inventore incidunt et.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(25, 'Abby065', 'no-pet.webp', 'Cat', 30, '9', 'SlateGray', 'Gilbertstad', 'Aut enim veniam expedita itaque recusandae voluptatibus voluptate eum.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(26, 'Duke145', 'no-pet.webp', 'Dog', 15, '4', 'LightSteelBlue', 'Spinkaview', 'Omnis ut adipisci exercitationem deleniti dignissimos aut vel ea et minima reprehenderit repellat.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(27, 'Sadie641', 'no-pet.webp', 'Bird', 59, '2', 'PowderBlue', 'Madalinefurt', 'Nostrum non laboriosam enim laborum voluptas est tenetur molestiae eligendi.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(28, 'Princess731', 'no-pet.webp', 'Pig', 37, '8', 'DarkOrchid', 'Pearlinetown', 'Eos est deleniti culpa aspernatur mollitia repellat ut omnis hic fugiat.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(29, 'Roxy078', 'no-pet.webp', 'Bird', 73, '6', 'SlateGray', 'North Damien', 'Voluptates incidunt fugit blanditiis aperiam molestiae repudiandae rerum adipisci temporibus nobis.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(30, 'Athena099', 'no-pet.webp', 'Dog', 1, '5', 'Azure', 'South Edytheland', 'Et dolore non exercitationem nobis eveniet non quod.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(31, 'Luna734', 'no-pet.webp', 'Mouse', 71, '7', 'OliveDrab', 'Port Heatherport', 'Voluptas odit et fugit qui vitae nihil et.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(32, 'Luna870', 'no-pet.webp', 'Pig', 8, '3', 'Lime', 'Lake Sisterberg', 'Ex et optio dolores consequuntur minus suscipit molestias eaque veniam.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(33, 'Roxy975', 'no-pet.webp', 'Dog', 64, '1', 'LightGoldenRodYellow', 'Christiansenview', 'Ea autem tempora autem amet atque voluptate omnis recusandae fugit officiis.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(34, 'Moose994', 'no-pet.webp', 'Pig', 58, '6', 'DeepPink', 'Finnstad', 'Delectus eos rerum enim dicta quod et maxime omnis vel necessitatibus.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(35, 'Bruno475', 'no-pet.webp', 'Mouse', 65, '7', 'DarkOrchid', 'Torpview', 'Voluptatem quisquam nobis quia velit quos nisi minima omnis exercitationem sunt velit sed maiores.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(36, 'Jax129', 'no-pet.webp', 'Pig', 24, '3', 'Moccasin', 'Runolfssonmouth', 'Qui sunt necessitatibus quam autem similique voluptas commodi sit modi blanditiis.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(37, 'Ruby130', 'no-pet.webp', 'Mouse', 48, '5', 'MediumAquaMarine', 'South Morton', 'Cum voluptas et voluptates ea quos facilis.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(38, 'Hunter537', 'no-pet.webp', 'Dog', 36, '4', 'Crimson', 'Perryburgh', 'Et at et excepturi quidem ea non dolor aut similique non aliquid.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(39, 'Axel028', 'no-pet.webp', 'Hamster', 4, '3', 'PaleGreen', 'Wernerberg', 'Est error magnam enim enim libero officiis explicabo minus id incidunt autem aperiam in.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(40, 'Nala352', 'no-pet.webp', 'Mouse', 37, '2', 'Lime', 'Lake Cathrynstad', 'Id voluptas iste rerum placeat amet debitis.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(41, 'Annie923', 'no-pet.webp', 'Bird', 65, '9', 'IndianRed', 'Lake Adele', 'Eum omnis incidunt provident veritatis suscipit nesciunt molestias nemo corporis molestias ex.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(42, 'Nala534', 'no-pet.webp', 'Mouse', 6, '5', 'Lime', 'Kerlukechester', 'Alias quae consequatur tempora delectus nobis et recusandae molestias.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(43, 'Lulu075', 'no-pet.webp', 'Dog', 77, '9', 'LightCoral', 'North Weldonborough', 'Cumque ab explicabo possimus fugit fugiat explicabo aut minima eos.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(44, 'Scout430', 'no-pet.webp', 'Mouse', 71, '4', 'OldLace', 'Manuelachester', 'Qui veritatis ut est ut maiores voluptatem.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(45, 'Chloe637', 'no-pet.webp', 'Pig', 71, '5', 'DarkGray', 'Weberton', 'Assumenda in minus similique rerum blanditiis excepturi exercitationem fugit.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(46, 'Kobe737', 'no-pet.webp', 'Dog', 39, '1', 'YellowGreen', 'New Maiya', 'Aut qui ut perspiciatis quod et aliquid maiores error aliquam vitae.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(47, 'Louie615', 'no-pet.webp', 'Dog', 49, '3', 'LightSeaGreen', 'Torreybury', 'Rerum expedita dignissimos nam expedita labore velit sed voluptates dolorum quaerat sed.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(48, 'Winston017', 'no-pet.webp', 'Dog', 38, '8', 'RosyBrown', 'Gerlachburgh', 'Quasi a iste ipsum quaerat provident laborum cumque et et ad veritatis non perspiciatis.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(49, 'Millie465', 'no-pet.webp', 'Pig', 22, '9', 'Aqua', 'New Ludiehaven', 'Necessitatibus vel rem ipsa odio repellat aut et suscipit illum perspiciatis beatae atque ut.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(50, 'Harley688', 'no-pet.webp', 'Bird', 4, '8', 'Pink', 'Coralieland', 'Sed in nemo fuga natus accusantium velit ab voluptas fugit officia corporis aspernatur veritatis delectus.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(51, 'Daisy432', 'no-pet.webp', 'Dog', 55, '9', 'LightYellow', 'Port Vivaside', 'Culpa veritatis voluptas aut asperiores eius perspiciatis qui quia qui delectus voluptates ullam.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(52, 'Tucker170', 'no-pet.webp', 'Dog', 55, '5', 'MediumAquaMarine', 'Lianashire', 'Molestiae ipsam quam aut sit et molestiae mollitia repellat.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(53, 'Oliver966', 'no-pet.webp', 'Mouse', 7, '9', 'MediumVioletRed', 'Smithammouth', 'Facilis dolor odio consectetur officiis deserunt nostrum ut dolor.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(54, 'Ruby877', 'no-pet.webp', 'Mouse', 33, '9', 'Tomato', 'North Daisyburgh', 'Aut laborum et debitis dolores et saepe eos.', 1, 0, '2025-06-06 21:45:53', '2025-06-06 21:45:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('f05KTWRjKYlVgLsMASATPcVKav4TJ8Qn8c5p2ixq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWldxc3ZmczViaFc5ZmhZeDUwdVlYQUVOalBwWEU1VXZ6Y05aUVlCTyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2Vycy80MCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1755099789);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document` bigint(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'no-photo.webp',
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `role` varchar(255) NOT NULL DEFAULT 'Customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `document`, `fullname`, `gender`, `birthdate`, `photo`, `phone`, `email`, `email_verified_at`, `password`, `active`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 75000001, 'John Wick', 'Male', '1964-09-12', 'jhon.png', '300000001', 'jonhw@gmail.com', NULL, '$2y$12$zd44nt75NLQIVwmAn9Jxbel1npaeHbKwXHD6uLKtz65f7TPORlRq2', 1, 'Admin', NULL, '2025-06-06 21:44:17', '2025-06-06 21:44:17'),
(2, 75000002, 'Lara Croft', 'Female', '1992-02-14', 'no-photo.webp', '300000002', 'larac@mail.com', NULL, '$2y$12$pm4ru7oY7D8EI2HRAnMaNu3odkV/C8.AqGTk96NfLY3EcbrY46uoi', 1, 'Customer', NULL, '2025-06-06 21:44:18', NULL),
(3, 76643087, 'Kaylie Keebler', 'Female', '2004-05-10', '7546882094.png', '+1-386-347-7790', 'aletha.wuckert@example.com', '2025-06-06 21:44:21', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', '5P4kwJjryo', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(4, 77792399, 'Cynthia Schimmel', 'Female', '1986-03-15', '7588489702.png', '+1 (801) 356-0419', 'nikolas.grady@example.com', '2025-06-06 21:44:25', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'Es3LPrafgx', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(5, 76764316, 'Natalia Klein', 'Female', '1993-05-08', '7588068632.png', '(478) 388-2022', 'qabbott@example.net', '2025-06-06 21:44:29', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'rUmGCr0Dg6', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(6, 77017385, 'Erling Schmeler', 'Male', '2005-09-01', '7569471140.png', '(908) 879-7843', 'jewel44@example.com', '2025-06-06 21:44:33', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'c9zgtrxUMq', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(7, 76000888, 'Arielle O\'Reilly', 'Female', '1988-01-11', '7564268033.png', '212-991-3001', 'courtney58@example.net', '2025-06-06 21:44:37', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', '8plCGw4FvO', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(8, 76712396, 'Raegan Gulgowski', 'Female', '2001-03-20', '7543348619.png', '+13417414764', 'ziemann.katlyn@example.net', '2025-06-06 21:44:40', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'mrH1TPrWo9', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(9, 76214490, 'Marlen Baumbach', 'Female', '1994-08-11', '7544313671.png', '1-432-381-2887', 'agrimes@example.com', '2025-06-06 21:44:43', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'ILEGzYQ6Xs', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(10, 75411411, 'Trisha Ratke', 'Female', '1994-08-01', '7586805759.png', '+1.984.260.3905', 'charlie21@example.net', '2025-06-06 21:44:47', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'iOr6HKpzsy', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(11, 76620917, 'Junior Konopelski', 'Male', '2000-01-17', '7529698401.png', '+1-442-791-9677', 'ronaldo41@example.net', '2025-06-06 21:44:50', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', '5Ahgekwa79', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(12, 75506725, 'Olga Rosenbaum', 'Female', '1990-02-27', '7526192528.png', '+1 (442) 481-8554', 'keaton49@example.com', '2025-06-06 21:44:53', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', '4AnhI843Hl', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(13, 75003450, 'Emily Nader', 'Female', '2005-05-02', '7579837408.png', '+1-814-537-9106', 'orie.toy@example.net', '2025-06-06 21:44:55', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'rYO6Sdn97B', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(14, 77624318, 'Lilla Wisoky', 'Female', '1982-04-27', '7539975431.png', '+1 (734) 746-1168', 'lorna.kertzmann@example.com', '2025-06-06 21:44:58', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'dFhmJWDmJq', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(15, 75940460, 'Lorine Dietrich', 'Female', '1981-12-18', '7519657179.png', '606.523.9796', 'xlangworth@example.org', '2025-06-06 21:45:00', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', '5U7qNay2af', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(16, 75777226, 'Pattie Schultz', 'Female', '2006-01-25', '7534312792.png', '775-613-6146', 'zena83@example.net', '2025-06-06 21:45:02', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'mhCFPBKBX4', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(17, 75419197, 'Tavares Streich', 'Male', '2003-08-08', '7507887007.png', '(202) 859-2047', 'oreilly.maximillian@example.org', '2025-06-06 21:45:05', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'gZgdLnSauW', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(18, 75944293, 'Jameson Mueller', 'Male', '2005-10-01', '7569472923.png', '+1-678-346-8430', 'toni41@example.org', '2025-06-06 21:45:08', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', '7xcItujQLo', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(19, 76805010, 'Monty Robel', 'Male', '1993-05-21', '7507342391.png', '1-484-218-6000', 'maggie55@example.com', '2025-06-06 21:45:10', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'FMupvcup2P', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(20, 76783721, 'Mallie Bayer', 'Female', '2003-12-01', '7589095427.png', '(432) 532-2852', 'aconnelly@example.org', '2025-06-06 21:45:14', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', '1exiioX7S1', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(21, 75221538, 'Anthony Kemmer', 'Male', '1995-09-13', '7548395660.png', '+1-564-405-6597', 'harris.shayne@example.net', '2025-06-06 21:45:17', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'LMikAFe6Hd', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(22, 77010913, 'Cortney Abshire', 'Female', '1990-09-29', '7508963783.png', '540.312.3284', 'mlebsack@example.org', '2025-06-06 21:45:20', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'UmZEXihQgc', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(23, 76520429, 'German Moen', 'Male', '1982-01-21', '7556956380.png', '906-244-9075', 'johnson.pearlie@example.org', '2025-06-06 21:45:23', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'eHb0soHBS8', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(24, 77185658, 'Elmore DuBuque', 'Male', '2000-06-19', '7581169731.png', '(304) 712-7441', 'agnes89@example.org', '2025-06-06 21:45:25', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'IvUeOUca3p', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(25, 75440060, 'Ena Bruen', 'Female', '1999-03-30', '7534536631.png', '+18185037686', 'lubowitz.emile@example.net', '2025-06-06 21:45:30', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', '3j4yLFkSss', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(26, 75482706, 'Sandra Wilkinson', 'Female', '1979-08-02', '7501772514.png', '+12293962443', 'ibins@example.com', '2025-06-06 21:45:34', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'bd4mEQCzR8', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(27, 76055394, 'Edgar Hermann', 'Male', '2002-11-24', '7570277697.png', '1-469-445-1272', 'nwindler@example.net', '2025-06-06 21:45:37', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'aOMkWjbHcC', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(28, 76758376, 'Samara Leuschke', 'Female', '2007-09-30', '7571081965.png', '505.360.0182', 'nico77@example.net', '2025-06-06 21:45:39', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'UYajCxTz70', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(29, 75070919, 'Elenor Spencer', 'Female', '1995-03-09', '7567344431.png', '+1.984.958.4500', 'kristina.mcdermott@example.net', '2025-06-06 21:45:42', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'gHNH7x1rLF', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(30, 77350376, 'Britney Metz', 'Female', '1995-12-05', '7588065144.png', '+16066377986', 'darrel.mcglynn@example.net', '2025-06-06 21:45:45', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', '2GMLAd6WhG', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(31, 76539883, 'Regan Monahan', 'Male', '1989-10-16', '7502626741.png', '320.272.3068', 'fritsch.rogelio@example.com', '2025-06-06 21:45:50', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'fAMMgpwwfj', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(32, 77947800, 'Claire McDermott', 'Female', '1985-09-16', '7522037825.png', '785-945-0632', 'mertz.may@example.org', '2025-06-06 21:45:53', '$2y$12$z/.uwObTTR05OiiHGBsYpu57xuKxNfMGRHp0jpX3ScPEYGZdcnLg6', 1, 'Customer', 'CJipcugbGF', '2025-06-06 21:45:53', '2025-06-06 21:45:53'),
(33, 981231238, 'Dayrito Moreno', 'Male', '1985-10-10', 'no-photo.webp', '3124776578', 'dayron@gmail.com', NULL, '$2y$12$0D0k/BJi3z4BCthBpiX/MuHWE/UVLzUgkyEQi9NF3x2f7Y287o55S', 1, 'Customer', NULL, '2025-06-13 17:55:03', '2025-06-13 18:25:20'),
(34, 1234, 'Edgar Hernandez', 'Male', '1966-11-23', 'no-photo.webp', '3134884232', 'edgar@gmail.com', NULL, '$2y$12$zghuAG4a5rWaWi0U7XPW0eXIKl3YgbwaELl9NkIDjFcHC6J5KRXiC', 1, 'Customer', NULL, '2025-07-30 22:19:17', '2025-07-30 22:19:17'),
(39, 7000046, 'Elon Musk', 'Male', '2025-08-06', '1754671332.png', '3003456789', 'elon@gmail.com', NULL, '$2y$12$5.Ax8iX0dUlhVjC1TejT9upch3o4b3AnSuU1ixgowDsj9BmIFufte', 1, 'Customer', NULL, '2025-08-08 21:42:12', '2025-08-08 21:42:12'),
(40, 1053843496, 'Jeferson Hernandez', 'Male', '1995-06-15', '1754671702.jpg', '3113975576', 'jefer.hernandez1@gmail.com', NULL, '$2y$12$qfDvJtJCJbNtUyqD93emGObzgNyQDlq6yyilY/LWueGbVCAXsE822', 1, 'Customer', NULL, '2025-08-08 21:48:22', '2025-08-08 21:48:22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adoptions`
--
ALTER TABLE `adoptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adoptions_user_id_foreign` (`user_id`),
  ADD KEY `adoptions_pet_id_foreign` (`pet_id`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pets_name_unique` (`name`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_document_unique` (`document`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adoptions`
--
ALTER TABLE `adoptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adoptions`
--
ALTER TABLE `adoptions`
  ADD CONSTRAINT `adoptions_pet_id_foreign` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`),
  ADD CONSTRAINT `adoptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
