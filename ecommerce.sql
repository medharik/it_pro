-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2020 at 11:03 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_titre` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_titre`) VALUES
(1, 'télévisions'),
(2, 'smartphones'),
(3, 'imprimantes'),
(4, 'PC PORTABLES');

-- --------------------------------------------------------

--
-- Table structure for table `commandes_info`
--

CREATE TABLE `commandes_info` (
  `commande_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `adresse` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Ville` varchar(255) CHARACTER SET latin1 NOT NULL,
  `number` varchar(255) CHARACTER SET latin1 NOT NULL,
  `CODEpostale` varchar(50) COLLATE utf8_bin NOT NULL,
  `cardname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cardnumber` varchar(20) CHARACTER SET latin1 NOT NULL,
  `date` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prod_count` int(14) DEFAULT NULL,
  `total` varchar(255) COLLATE utf8_bin NOT NULL,
  `cvv` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `commande_produits`
--

CREATE TABLE `commande_produits` (
  `order_pro_id` int(10) NOT NULL,
  `commande_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qte` int(14) DEFAULT NULL,
  `total` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `commentaire_id` int(100) NOT NULL,
  `commentaire` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`commentaire_id`, `commentaire`) VALUES
(1, 'BGVFCDXS'),
(2, 'KJHG'),
(3, 'KJHG'),
(4, 'FGHGFD');

-- --------------------------------------------------------

--
-- Table structure for table `marques`
--

CREATE TABLE `marques` (
  `marques_id` int(100) NOT NULL,
  `marques_titre` text CHARACTER SET hp8 COLLATE hp8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `marques`
--

INSERT INTO `marques` (`marques_id`, `marques_titre`) VALUES
(1, 'DELL'),
(2, 'SAMSUNG '),
(3, 'LENOVO'),
(5, 'CANON '),
(6, 'APPLE IPHONE');

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) CHARACTER SET latin1 NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(28, 1, '127.0.0.1', 25, 1),
(29, 1, '127.0.0.1', -1, 1),
(30, 2, '127.0.0.1', -1, 1),
(31, 3, '127.0.0.1', -1, 6),
(32, 3, '127.0.0.1', 12, 6),
(33, 4, '127.0.0.1', 12, 1),
(57, 1, '::1', -1, 1),
(69, 3, '::1', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(2000) CHARACTER SET hp8 COLLATE hp8_bin DEFAULT NULL,
  `product_prix` int(11) NOT NULL DEFAULT '0',
  `product_price` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `product_desc` text CHARACTER SET hp8 COLLATE hp8_bin NOT NULL,
  `product_image` text CHARACTER SET hp8 COLLATE hp8_bin,
  `product_keywords` text COLLATE utf8_bin,
  `product_text` varchar(255) CHARACTER SET hp8 COLLATE hp8_bin DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `Description` text CHARACTER SET hp8 COLLATE hp8_bin,
  `Description2` text CHARACTER SET hp8 COLLATE hp8_bin,
  `Description3` text CHARACTER SET hp8 COLLATE hp8_bin,
  `Description1` varchar(3000) CHARACTER SET hp8 COLLATE hp8_bin DEFAULT NULL,
  `Details` varchar(5000) COLLATE utf8_bin DEFAULT NULL,
  `Reviews` text CHARACTER SET hp8 COLLATE hp8_bin,
  `reviews1` text CHARACTER SET hp8 COLLATE hp8_bin,
  `prod_id_` int(100) DEFAULT NULL,
  `NEW` text COLLATE utf8_bin,
  `solde` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_prix`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `product_text`, `date`, `Description`, `Description2`, `Description3`, `Description1`, `Details`, `Reviews`, `reviews1`, `prod_id_`, `NEW`, `solde`) VALUES
(1, 4, 3, 'Lenovo S340-15IML 15,6', 7395, '7999', 'Lenovo S340-15IML 15,6\" LED IPS , i5-10210U, 8GB, 512GB, GEFORCE MX250', 'LenovoS340-15IML.png', 'Lenovo S340-15IML 15,6\" LED IPS', 'Lenovo S340-15IML 15,6\" LED IPS , i5-10210U, 8GB, 512GB, GEFORCE MX250', '2020-02-21 13:22:18', 'LenovoS340-15IML(5).jpg', 'LenovoS340-15IML(7).jpg', 'LenovoS340-15IML(5).jpg', 'Lenovo S340-15IML 15,6\" LED IPS , i5-10210U, 8GB, 512GB, GEFORCE MX250', '<h3>Détails</h3><br>\r\n\r\nvous recherchez un ordinateur portable 15 \"avec un puissant processeur Intel, le Lenovo IdeaPad S340-15IML (81NA007NMH) est le chemin à parcourir. Mince et léger, ce qui le rend extrêmement portable. Avec le son Dolby Audio de l\'IdeaPad S340 Il semble que vous soyez au cinéma, et grâce aux bords étroits, vous pouvez profiter de la résolution FHD de votre écran de haut en bas.L\'emballage est complet avec des détails de conception réfléchis tels que le curseur de confidentialité que vous seul déterminez ce que la webcam peut faire. voir.<br>\r\nLe IdeaPad S340-15IML (81NA007NMH) est équipé d\'un processeur Intel Core i5-10210U, une carte graphique NVIDIA GeForce MX250, 8 Go de mémoire et un rapide SSD 512 Go. Le système est livré avec Windows 10 Accueil<br>\r\n\r\nRéférence81NA007NMHModèleIdeapad S340-15IMLÉtatNeuf sous emballageTaille de l\'écran15,6\" LED - IPS - Full-HDTypes du ProcesseurIntel® Core™ i5--10210U (10ème Génération)Vitesse du ProcesseurFréquence de base 1,6 GHz , Fréquence Turbo maxi 4,2 GHzNombre de CPUs (Processeur)4 CœurMémoire (RAM)8 Go DDR4Type de Mémoire (RAM)DDR4 2400 MHzStockage512 GB SSDType de StockageMémoire flash , SSDRésolutionFHD ( 1920 X 1080 )Graphique intégréeIntel® UHD GraphicsProcesseur GraphiqueNvidia GeForce MX250 2GBType de ConnectivitéUSB 3.2 - USB 3,2 Type C - Wireless (WiFi) - HDMI - Jack Audio Audio Combo -<br>\r\n\r\n WebCamSystème d\'exploitationWindows 10ClavierQWERTY EnglishCouleurPlatinum GreyPoids du produit1,8 KgBatterie56WH - jusqu\'à 10 HrGarantie constructeurGarantie  : 1 an(s)', '<h3>Fiche technique<h3><br>\r\n<h3>PRINCIPALES CARACTERISTIQUES</h3><br>\r\nCPU : Intel Core i5-10210U 10e<br>\r\nRAM : 8 Go DDR4  <br>\r\nStockage : SSD 512 Go<br>\r\nGPU : Nvidia GeForce MX250 2GB<br>\r\nEcran : 15,6 LED IPS Full-HD<br>\r\nOS : Windows 10<br>\r\nGarantie  : 1 an', '<h3>DESCRIPTIF TECHNIQUE</h3><br>\r\nSKU: LE018CL13NTCFNAFAMZ<br>\r\nCouleur: gris<br>\r\nMateriau principal: .<br>\r\nModele: 81NA007NMH<br>\r\nTaille (Longueur x Largeur x Hauteur cm): 17,9 mm x 358 mm x 245 mm<br>\r\nPoids (kg): 1.8', NULL, 'NEW', '-20 %'),
(2, 4, 1, 'DELL Precision 7530-15.6', 21900, '', 'DELL Precision 7530-15.6\"', 'a.png', 'DELL Precision 7530-15.6\"', 'DELL Precision 7530-15.6\"- i7-8750H- 256SSD-RAM16G- Nvidia Quadro P1000- Azerty- Noir', '2020-04-23 03:24:03', 'b.png', 'c.png', 'a.png', '<h3>Dell precision 7530, Conception compacte. Puissance extraordinaire.</h3><br>\r\n<p>Ordinateur portable 15\" repense: plus fin et plus leger que jamais, avec de nouvelles\r\n fonctionnalites de realite virtuelle. Dote des derniers processeurs Intel  Core  et Xeon 6 coeurs.</p>\r\n', '<h3>\r\nPorts et emplacements\r\n\r\n</h3><br>\r\n<p>\r\n\r\n\r\n1. Prise jack pour casque <br>\r\n2. Port USB 3.1 Gen 1 avec technologie PowerShare<br> \r\n3. Verrou de securite <br>\r\n4. RDJ45 <br>\r\n5. Mini DisplayPort <br>\r\n6. HDMI <br>\r\n7. Port pour adaptateur secteur<br> \r\n8. Ports Thunderbolt 3 type C <br>\r\n9. Lecteur de carte SD <br>\r\n10. Lecteur de carte a puce (en option)\r\n', '<h3>\r\nDimensions et poids</h3><br>\r\n1. Hauteur : 25-29,95 mm (0,98-1,17\") <br>\r\n2. Largeur : 375,92 mm (14,8\") <br>\r\n3. Profondeur : 251,3 mm (9,89\") <br>\r\nPoids : 2,53 kg (5,57 livres)', '<h3>Fiche technique</h3><br>\r\n<h4>\r\nPRINCIPALES CARACTERISTIQUES</h4><h5>\r\nModel: Dell Precision 7530 </h5><br>\r\nEcran : 15,6p IPS de resolution de lecran : 1920  1080<br>\r\nProcesseur : i7-8750H (Hexa Coeur) 2,2 Ghz, 9M cache, Turbo boost 4,1Ghz<br>\r\nRAM : 16G DDR4 extensible jusqu\'a 64G<br>\r\nDisque dur : 256 GB SSD 100% flash + slote vide d\'extension SSD<br>\r\nOS : Windows 10 Pro 64 bits<br>\r\nCarte graphique : NVIDIA Quadro P1000 4GB GDDR5<br>\r\nGaranti 2 ans pro support<br>\r\nLaptop neuf avec emballage<br>\r\nAccesoires : Sac a dos Dell + souris Dell<br><h5>\r\nVENDU AVEC LE PRODUIT</h5><br>\r\nLaptop<br>\r\nChargeur<br>\r\nSac a dos Dell<br>\r\nSouris', NULL, '', ''),
(3, 1, 2, 'Samsung 75', 40000, '39990', 'Samsung 75\" 4K UHD QLED Smart TV ', '2.jpg', 'Samsung 75\" 4K UHD QLED Smart ', 'Samsung 75\" 4K UHD QLED Smart TV - 75Q60 - Noir', '2020-04-28 07:45:37', '6.jpg', '4.jpg', '5.jpg', '<h3>Utilisez votre voix avec Bixby à la télévision</h3><br>\r\n\r\nContrôlez votre téléviseur avec votre voix. Posez une question et découvrez ce que Bixby sait.\r\n\r\n', '<h3>Détails</h3><br>\r\n<h4>\r\nProcesseur quantique 4K</h4><br>\r\n\r\n\r\nLe processeur alimenté intelligemment transforme instantanément le contenu en 4K pour des détails nets et des couleurs raffinées.', '<h3>Fiche technique :</h3><br>\r\n\r\n\r\n\r\nEcran : 75\"<br>\r\nConnecté 4K Ultra HD : Oui<br>\r\nRésolution : 3 840 x 2 160<br>\r\nDolby :Oui<br>\r\nConnectivité Wi-Fi : Oui<br>\r\nPlateforme d\'applications : Smart TV avec Bixby Voice, applications et navigateur Web complet<br>\r\nBixby : Oui<br>\r\nHDMI :4<br>\r\nUSB : 2<br>\r\nPoids : 39.4kg\r\n', '<h3>Fiche technique :</h3><br>\r\n<h4>\r\nDESCRIPTIF TECHNIQUE</h4><br>\r\nSKU: SA024EA0MNGLBNAFAMZ<br>\r\nPoids (kg): 39.4', NULL, 'NEW', '-10 %'),
(4, 1, 2, 'Samsung Smart TV 50', 7898, '4979', 'Samsung Smart TV 50\" RU7100 UHD 4K série 7', '11.jpg', 'Samsung Smart TV 50\" RU7100 UHD 4K série 7', 'Samsung Smart TV 50\" RU7100 UHD 4K série 7', '2020-04-28 07:45:38', '12.jpg', '14.jpg', '15.jpg', '<h3>\r\nFiche technique :</h3><br>\r\nAffichage :LED<br>\r\nTaille : 50\"<br>\r\nRésolution : 3840 x 2160<br>\r\nAudio :Dolby <br>\r\nDigital Plus : Oui<br>\r\nDTS Codec :Oui<br>\r\nSortie son (RMS) : 20 W<br>\r\nSmart TV <br>\r\nTV Plus : Oui (US seulement, App)<br>\r\nNavigateur Web :Oui<br>\r\nSamsung Connect :Non<br>\r\nSmart View : Oui', 'PurColour<br>\r\nObtenez une expérience de couleur naturelle avec PurColour. Plongez dans votre divertissement TV et voyez les couleurs de la nature en détail.* Le  produit réel peut différer de l\'image montrée. S\'il vous plaît voir notre galerie de produits.', '<h3>Fiche technique</h3><br><h3>\r\nPRINCIPALES CARACTÉRISTIQUES</h3><br>\r\nSmart TV<br>\r\n4K<br>\r\nHDR<br>\r\nRécepteur Intégré.<br>\r\nPurColour', '<h3>VENDU AVEC LE PRODUIT</h3><br>\r\n<h3>Guide d utilisation Télécommande </h3><br>\r\n<h3>GENERAL</h3><br>\r\nSKU: SA024EL118HFLNAFAMZ<br>\r\nCouleur: Noir<br>\r\nTaille de l\'écran (pouces): 50.0<br>\r\nMatériau principal: Plastique<br>\r\nTechnologie TV: Smart|LED|4K|Ultra HD<br>\r\n<h3>GARANTIE<h3/><br>\r\nWarranty Duration: 12', NULL, NULL, NULL),
(5, 2, 2, 'Samsung Galaxy S20 Ultra ', 13990, '13490', 'Samsung Galaxy S20 Ultra ', '1 (1).jpg', 'Samsung Galaxy S20 Ultra 6.9\" (128Go,12Go) Android 10 -Noir - 1 an de garantie', 'Samsung Galaxy S20 Ultra 6.9\" (128Go,12Go) Android 10 -Noir - 1 an de garantie', '2020-04-28 07:58:37', '3 (1).jpg', '2 (1).jpg', '111.jpg', '<h3>Des captures timelapse brillantes plus belles que jamais</h3><br>\r\n\r\n\r\nCapturez la nuit d\'une manière totalement unique. La technologie avancée de faible luminosité vous permet de filmer des vidéos avec des captures de style longue exposition afin que votre vidéo présente des traînées lumineuses saisissantes.', '<h3>Détails</h3><br>\r\n\r\n<h3>     C\'est le téléphone qui va changer la photographie.</h3><br>\r\n\r\n\r\nDécouvrez les Galaxy S20, S20 + et S20 Ultra. Avec le Snap vidéo 8K révolutionnaire qui change la façon dont vous capturez non seulement la vidéo, mais la photographie.Ajoutez la sécurité Samsung Knox, une batterie intelligente, un processeur puissant et un stockage massif - et la série Galaxy S20 dévoile un tout nouveau monde pour les mobiles.', '<h3>Fiche technique :</h3><br>\r\n\r\n\r\n<h4>Fiche technique :</h4><br>\r\n\r\n\r\n\r\nTaille de l\'écran : 6.9<br>\r\nRésolution :1440 x 3200 pixels<br>\r\nOS :  Android 10.0; One UI 2<br>\r\nCaméra principal : 108MP+48MP+12MP+0.3MP<br>\r\nSelfie : 40MP<br>\r\nBatterie : 5000 mAh<br>\r\nRAM : 12Go<br>\r\nROM : ', NULL, NULL, NULL, NULL),
(6, 2, 6, 'Apple iPhone 11 Pro Max', 16599, '14399', 'Apple iPhone 11 Pro Max', '1 (2).jpg', 'gents wear cloths', 'Apple Apple iPhone 11 Pro Max 6.5\" (256Go, 4Go) iOS - Vert', '2020-04-28 07:58:38', '2 (2).jpg', '3 (1).jpg', '4.jpg', 'Interface élégante et immersive. \r\nNous avons exploité le champ de vision plus large pour vous permettre de voir ce qui se passe en dehors du cadre de l\'image - et appuyez simplement sur pour le capturer. Et il n\'y a presque rien entre vous et votre sujet, à l\'exception d\'une nouvelle police de police professionnelle. Donc, vous êtes toujours complètement immergé dans la scène.', '<h3>Détails\r\n</h3><br>\r\nEt puis il y avait Pro.\r\nUn système de triple caméra transformateur qui ajoute des tonnes de capacités sans complexité. Un saut sans précédent dans la vie de la batterie. Et une puce époustouflante qui double sur l\'apprentissage automatique et repousse les limites de ce qu\'un smartphone peut faire. Bienvenue sur le premier iPhone assez puissant pour s\'appeler Pro.', '<h3>Fiche technique</h3><br>\r\n\r\n\r\n<h4>PRINCIPALES CARACTÉRISTIQUES</h4><br>\r\n\r\n\r\nRAM : 4Go<br>\r\nROM : 64Go<br>\r\nCaméra triple 12MP<br>\r\nEcran : 6.5\"', NULL, NULL, NULL, NULL),
(7, 3, 5, 'Canon PIXMA E3140 ', 660, '600', 'Canon PIXMA E3140 imprimante', 'Canon PIXMA E3140 imprimante.jpg', 'Canon PIXMA E3140 imprimante\r\n', 'Canon PIXMA E3140 imprimante', '2020-04-28 05:26:54', 'Canon PIXMA E3140 imprimante.jpg', NULL, NULL, '<h3>Fiche technique</3><br>\r\n<h4>PRINCIPALES CARACTÉRISTIQUES</4><br>\r\n\r\n\r\nInnovation d\'impression: impression jet d\'encre <br>\r\nType de gadget: MFP <br>\r\nInterfaces système: Wi-Fi <br>\r\nDuplex: Non <br>\r\nSuperbe support d\'impression de photos: Non<br> \r\nA travaillé en fax: Non \r\n', '<h3>          Détails</h3><br>\r\n\r\nImprimante à jet d\'encre multi-travaux simple à utiliser et raisonnable avec une disponibilité de pointe. Évaluez le haut niveau de contenu d\'impression et de photographies, si essentiel sans périphérie, directement à partir de téléphones portables, d\'un appareil photo avec aide pour le Wi-Fi ou d\'applications cloud avec l\'aide d\'une imprimante multifonction à jet d\'encrePIXMA TS3140. Balayez et dupliquez en utilisant un écran LCD de 3,8 cm et un menu instinctif.\r\n\r\nUne innovation d\'impression jet d\'encre; Détermination de l\'impression jusqu\'à 48001 x 1200 points pour chaque pouce; La vitesse d\'impression à contraste élevé est d\'env. 7.7 images pour chaque instant; Vitesse d\'impression ombrée Env. 4,0 images / min; Vitesse photo 10 x 15 cm sans bords: env. pendant 65 secondes; Durée de vie de la cartouche (A4) 400 pages (foncé), 300 pages (ombré); Plaque arrière: jusqu\'à 60 feuilles (papier ordinaire); type de scanner à plat; Détermination du balayage (optique) 600 x 1200 dabs pour chaque pouce; La cadence de numérisation de l\'enregistrement A4 est d\'env. 15 secondes; Vitesse de copie: sFCOT: env. pendant 27 secondes, sESAT: env. 3.0 images pour chaque instant; Nombre de doublons de 20 doublons; Le spectacle monochrome en ligne est de 3,8 cm; Dimensions (L x P x H) env. 435 x 316 x 145 mm; Poids env. 3,9 kg.', '<h3>DESCRIPTIF TECHNIQUE</h3><br>\r\n\r\n\r\nSKU: CA011EA0Z6U7FNAFAMZ<br>\r\nPoids (kg): 4', NULL, NULL, NULL, NULL),
(8, 2, 2, 'Samsung TAB S6', 8490, '7790', 'Samsung TAB S6', '22.jpg', 'Samsung TAB S6', 'Samsung TAB S6 10.5\" (128Go, 6Go) Android 13MP+5MP/8MP - Bleu - 1 an de garantie', '2020-04-28 20:55:11', '23.jpg', '24.jpg', '22.jpg', '<h3>Fiche technique :</h3>\r\n<h4>Type de CPU :Octa-Core</h4><br>\r\nTaille (Afficheur principal) :10.5\" (267.2mm)<br>\r\nRésolution (Afficheur principal) :2560 x 1600 (WQXGA)<br>\r\nTechnologie (Afficheur Principal) :Super AMOLED<br>\r\nProfondeur de couleur (Afficheur principal) :16M<br>\r\nS Pen Support: Oui (Gesture/Remote Control)<br>\r\nCaméra Principale- Résolution: 13.0 MP + 5.0 MP<br>\r\nCaméra principale - Auto Focus :Oui<br>\r\n\r\nCaméra frontale - Résolution :8.0 MP<br>\r\nCaméra principale - Flash :Non<br>\r\nRésolution de l\'enregistrement vidéo :UHD 4K (3840 x 2160) @30fps<br>\r\nTaille de la RAM (Go): 6<br>\r\nTaille de la ROM (Go): 128<br>\r\nMémoire Disponible (Go) : 106.5<br>\r\nSupport de Mémoire Externe: MicroSD (Jusqu\'à 1TB)<br>\r\nANT+: Oui<br>\r\nVersion USB :USB 3.1 Gen 1<br>\r\nTechnologies de Localisation :GPS, Glonass, Beidou, Galileo<br>\r\nMHL :Non<br>\r\nWi-Fi :802.11 a/b/g/n/ac 2.4G+5GHz, VHT80 MU-MIMO<br>\r\nWi-Fi Direct :oui<br>\r\nSystème d\'exploitation : Android', '<h3>Détails</h3><br>\r\n<h4>\r\nDes possibilités de création illimitées</h4><br>\r\nDonnez une nouvelle dimension à votre créativité avec la Galaxy Tab S6, une tablette multifonctionnelle qui repousse les limites grâce aux tout nouveaux niveaux d’intégration du S Pen à la fois pour travailler et pour jouer. Optimisez votre potentiel et transformez les défis en opportunités avec une tablette qui vous prépare à tous les impondérables de la vie.', '<h3>Fiche technique</h3><br>\r\nPRINCIPALES CARACTÉRISTIQUES<br>\r\nTaille (Afficheur principal) :10.5\" (267.2mm)<br>\r\nTaille de la RAM (Go): 6<br>\r\nTaille de la ROM (Go): 128', '<h3>DESCRIPTIF TECHNIQUE</h3><br>\r\nSKU: SA024MP19FVGVNAFAMZ<br>\r\nModèle: Samsung Galaxy TAB S6 10.5\"<br>\r\nPoids (kg): 0.42', NULL, NULL, NULL),
(15, 3, 5, 'Canon Bouteilles d\'encre GI-490 ', 949, '439', '1 1(1).jpg', '1 1(1).jpg', 'Canon Bouteilles d\'encre GI-490 pour les imprimantes PIXMA G1400/G1410/G2400/G2410/G2411/G3400/G3410/G3411/G4400/G4410', 'Canon Bouteilles d\'encre GI-490 pour les imprimantes PIXMA G1400/G1410/G2400/G2410/G2411/G3400/G3410/G3411/G4400/G4410\r\n', '2020-05-01 18:04:55', '1 1(1).jpg', NULL, '1 1(1).jpg', '<h3>Fiche technique</h3><br>\r\nPRINCIPALES CARACTÉRISTIQUES<br>\r\nMarque : Canon<br>\r\nDonne environ 7000 pages couleur et 6000 pages noir par bouteille<br>\r\nFournit des couleurs vives, plus nettes et plus riches sur du papier ordinaire<br>\r\nEn conformité avec la norme ISO-IEC', 'Détails\r\n\r\nLe flacon d\'encre Canon GI-490 est un excellent moyen de remplacer les cartouches couleur individuelles d\'une série Canon PIXMA G. Les imprimantes à jet d\'encre sont connues pour être un moyen économique d\'obtenir des impressions incroyables partout. Cette bouteille d\'encre de couleur magenta unique fait partie du modèle de couleur CMJN qui fournit des solutions d\'impression pour les images et les textes en couleur. L\'encre économique permet de produire des copies plus grandes par bouteille et peut produire environ 7000 pages. Les couleurs sont vives et tranchantes qui restent vraies pendant longtemps sur du papier ordinaire. Cette encre révolutionnaire est basée sur les colorants pour améliorer la sortie de couleur qui ne s\'estompe pas avec le temps. \r\n\r\nSolution d\'impression colorée\r\nLa bouteille d\'encre Canon GI-490 offre de superbes impressions couleur même sur du papier ordinaire. Il fait ressortir des couleurs plus vives et vives avec chaque impression. L\'encre reste fidèle à sa couleur pour fournir des solutions d\'impression professionnelles ou domestiques et en vrac. Il a des impressions en noir et blanc neutre et tonique pour éviter le métamérisme.\r\n\r\nEncre de haute qualité\r\nUtilisez cette encre de qualité supérieure dans les imprimantes Canon PIXMA série G telles que G1400, G2400 et G3400. L\'encre de la cartouche couleur est pratique pour obtenir un rendement plus élevé avec une qualité constante. Il peut générer environ 7000 pages en une seule bouteille pour aider à réduire considérablement le coût par page. La couleur à base de colorant a une durée de vie prolongée et ne s\'estompe pas. L\'encre est conforme à la norme ISO / CEI.\r\n\r\nAchetez en ligne le meilleur de la technologie de Plugins aujourd\'hui. Découvrez une large gamme de produits en vente sur notre site et recevez-les directement chez vous.\r\n\r\nMarque : Canon\r\nEncre couleur de haute qualité pour les imprimantes à jet d\'encre série Canon PIXMA G G1400/ G2400/ G3400/ G4400\r\n\r\nDonne environ 7000 pages par bouteille\r\n\r\nFournit des couleurs vives, plus nettes et plus riches sur du papier ordinaire\r\n\r\nEn conformité avec la norme ISO-IEC', NULL, NULL, NULL, NULL, NULL),
(62, 2, 2, 'Samsung Galaxy S20 Ultra ', 13990, '13490', 'Samsung Galaxy S20 Ultra ', '1 (1).jpg', 'Samsung Galaxy S20 Ultra 6.9\" (128Go,12Go) Android 10 -Noir - 1 an de garantie', 'Samsung Galaxy S20 Ultra 6.9\" (128Go,12Go) Android 10 -Noir - 1 an de garantie', '2020-04-28 07:58:37', '3 (1).jpg', '2 (1).jpg', '111.jpg', '<h3>Des captures timelapse brillantes plus belles que jamais</h3><br>\r\n\r\n\r\nCapturez la nuit d\'une manière totalement unique. La technologie avancée de faible luminosité vous permet de filmer des vidéos avec des captures de style longue exposition afin que votre vidéo présente des traînées lumineuses saisissantes.', '<h3>Détails</h3><br>\r\n\r\n<h3>     C\'est le téléphone qui va changer la photographie.</h3><br>\r\n\r\n\r\nDécouvrez les Galaxy S20, S20 + et S20 Ultra. Avec le Snap vidéo 8K révolutionnaire qui change la façon dont vous capturez non seulement la vidéo, mais la photographie.Ajoutez la sécurité Samsung Knox, une batterie intelligente, un processeur puissant et un stockage massif - et la série Galaxy S20 dévoile un tout nouveau monde pour les mobiles.', '<h3>Fiche technique :</h3><br>\r\n\r\n\r\n<h4>Fiche technique :</h4><br>\r\n\r\n\r\n\r\nTaille de l\'écran : 6.9<br>\r\nRésolution :1440 x 3200 pixels<br>\r\nOS :  Android 10.0; One UI 2<br>\r\nCaméra principal : 108MP+48MP+12MP+0.3MP<br>\r\nSelfie : 40MP<br>\r\nBatterie : 5000 mAh<br>\r\nRAM : 12Go<br>\r\nROM : ', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(200) CHARACTER SET hp8 COLLATE hp8_bin DEFAULT NULL,
  `passe` varchar(200) CHARACTER SET hp8 COLLATE hp8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `passe`) VALUES
(1, 'soufiane', 'soufiane');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(300) CHARACTER SET latin1 NOT NULL,
  `password` varchar(300) CHARACTER SET latin1 NOT NULL,
  `mobile` varchar(10) CHARACTER SET latin1 NOT NULL,
  `address1` varchar(300) CHARACTER SET latin1 NOT NULL,
  `address2` varchar(11) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(7, 'soufiane', 'soufiane', 'soufiane.soufiane@gmail.com', 'soufiane.soufiane@gmail.com', '0675847352', 'CASA', 'CASA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `commandes_info`
--
ALTER TABLE `commandes_info`
  ADD PRIMARY KEY (`commande_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `commande_produits`
--
ALTER TABLE `commande_produits`
  ADD PRIMARY KEY (`order_pro_id`),
  ADD KEY `order_products` (`commande_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`commentaire_id`);

--
-- Indexes for table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`marques_id`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commandes_info`
--
ALTER TABLE `commandes_info`
  MODIFY `commande_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commande_produits`
--
ALTER TABLE `commande_produits`
  MODIFY `order_pro_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `commentaire_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marques`
--
ALTER TABLE `marques`
  MODIFY `marques_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commandes_info`
--
ALTER TABLE `commandes_info`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `commande_produits`
--
ALTER TABLE `commande_produits`
  ADD CONSTRAINT `order_products` FOREIGN KEY (`commande_id`) REFERENCES `commandes_info` (`commande_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `produits` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
