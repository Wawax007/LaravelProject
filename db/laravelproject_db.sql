DROP DATABASE IF EXISTS laravelproject_db;
CREATE DATABASE laravelproject_db;
USE laravelproject_db;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravelproject_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `stars`
--

DROP TABLE IF EXISTS `stars`;
CREATE TABLE IF NOT EXISTS `stars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stars`
--

INSERT INTO `stars` (`id`, `Nom`, `Prenom`, `Image`, `Description`) VALUES
(1, 'Di Caprio', 'Léonardo', 'dicaprio-leonardo.jpg', 'Né à Hollywood le 11 novembre 1974, le jeune Leonardo, encouragé par sa mère, débute très tôt sa carrière. Il apparaît d\'abord dans quelques séries avant de décrocher un rôle au cinéma en 1993 dans Blessures secrètes au coté de Robert de Niro. Mais c\'est le film suivant, Gilbert Grapes avec Johnny Depp qui le révèle.'),
(2, 'Stewart', 'Kristen', 'stewart-kristen.jpg', 'Kristen Stewart est née le 9 avril 1990 à Los Angeles. Biographie courte de Kristen Stewart - Née à Los Angeles le 9 avril 1990, Kristen Stewart est la fille d\'un producteur et d\'une scénariste. C\'est donc sans surprise qu\'elle se destine à passer devant la caméra.'),
(3, 'Cranston', 'Bryan', 'cranston-bryan.jpg', 'Bryan Cranston voit le jour le 7 mars 1956 à San Fernando en Californie. Fils de l\'acteur Joe Cranston, il passe son enfance à Los Angeles. Sportif, il envisage à l\'adolescence une carrière dans la police. Il étudie la criminologie pour se spécialiser dans la police scientifique.'),
(4, 'Murphy', 'Cillian', 'murphy-cillian.jpg', 'Cillian Murphy naît le 25 mai 1976 en Irlande. S\'il est aujourd\'hui un acteur incontournable du cinéma britannique, il a failli ne pas faire carrière sur le grand écran puisqu\'il se destinait à une carrière musicale. Passionné de musique, il monte un groupe, Sons of M.'),
(5, 'Brosnan', 'Pierce', 'brosnan-pierce.jpg', 'Né en Irlande, en 1953, le jeune Pierce déménage à Londres avec sa mère en 1964, suite au divorce de ses parents. Là, il se découvre un goût pour l\'art, et suit une formation d\'illustration dans une école prestigieuse. De 16 à 19 ans, Pierce Brosnan suit également une formation d\'acteur.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
