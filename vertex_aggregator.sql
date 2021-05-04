-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2021 at 03:07 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vertex_aggregator`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblAssets`
--

CREATE TABLE `tblAssets` (
  `ID` int(11) NOT NULL,
  `TopicID` int(11) NOT NULL,
  `TrainingPhaseID` int(11) NOT NULL,
  `AssetTypeID` int(11) NOT NULL,
  `ResourceID` varchar(255) NOT NULL,
  `AssetTitle` varchar(255) NOT NULL,
  `AssetURL` varchar(255) NOT NULL,
  `Created` date NOT NULL,
  `Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblAssets`
--

INSERT INTO `tblAssets` (`ID`, `TopicID`, `TrainingPhaseID`, `AssetTypeID`, `ResourceID`, `AssetTitle`, `AssetURL`, `Created`, `Updated`) VALUES
(54, 2, 1, 3, '', 'Overview of CF', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8360153', '2017-03-16', '2017-07-12'),
(55, 1, 1, 3, '', 'Overview of Vertex', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8360208', '2017-03-16', '2017-07-12'),
(56, 6, 1, 1, '', 'ORKAMBI Product Information', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=9298381', '2017-03-22', '2018-03-23'),
(57, 2, 1, 3, '', 'CFTR and CF Genetics', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8181966', '2017-03-22', '0000-00-00'),
(58, 2, 1, 3, '', 'Manifestations of CF ', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8360210', '2017-06-08', '2017-06-08'),
(59, 2, 2, 3, '', 'Residual CFTR Activity', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8433115', '2017-06-29', '0000-00-00'),
(60, 2, 2, 3, '', 'Treatment of Acute, Emergent and Late Pulmonary Manifestations', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8458589', '2017-07-12', '0000-00-00'),
(61, 5, 1, 1, '', 'KALYDECO Product Information', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8458675', '2017-07-12', '0000-00-00'),
(62, 6, 1, 3, '', 'Lumacaftor/Ivacaftor Program Overview ', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8476298', '2017-07-19', '0000-00-00'),
(63, 4, 2, 3, '', 'Biostatistics ', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8476315', '2017-07-19', '0000-00-00'),
(64, 7, 1, 1, '', 'TEZ/IVA Program Overview Navigator', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8479334', '2017-07-20', '0000-00-00'),
(65, 5, 1, 1, '', 'Ivacaftor Clinical Studies Navigator', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8748903', '2017-08-01', '2017-09-28'),
(66, 2, 1, 3, '', 'Long-term Management of Pulmonary Manifestations', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8735089', '2017-09-22', '2017-09-22'),
(67, 3, 1, 1, '', 'Clinical Studies and Real World Evidence in CF', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8735290', '2017-09-22', '0000-00-00'),
(68, 6, 1, 1, '', 'ORKAMBI Clinical Studies Navigator', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8735318', '2017-09-22', '0000-00-00'),
(69, 3, 1, 1, '', 'Clinical Development Pipeline', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8907618', '2017-12-05', '0000-00-00'),
(70, 5, 1, 3, '', 'Ivacaftor Program Overview Part 1: Development Through Registration', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8907593', '2017-12-05', '2017-12-05'),
(71, 5, 1, 3, '', 'Ivacaftor Program Overview Part 2: Post Registration', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=8946306', '2017-12-19', '0000-00-00'),
(72, 7, 2, 1, '', 'SYMDEKO USPI', 'https://www.compliancewire.com/Secure/Custom/VertexLogin.asp?courseUID=9400858', '2018-03-23', '2018-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `tblAssetsType`
--

CREATE TABLE `tblAssetsType` (
  `AssetTypeID` int(11) NOT NULL,
  `AssetType` varchar(255) NOT NULL,
  `AssetTypeIcon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblAssetsType`
--

INSERT INTO `tblAssetsType` (`AssetTypeID`, `AssetType`, `AssetTypeIcon`) VALUES
(1, 'PDF', '/img/ico-pdf.png'),
(2, 'Slide Deck', '/img/ico-slideDeck.png'),
(3, 'eLearning', '/img/ico-eLearn.png'),
(4, 'Video', '/img/ico-vid.png'),
(5, 'Clinical Study', '/img/ico-clinStudy.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblKeyResources`
--

CREATE TABLE `tblKeyResources` (
  `ResourceID` int(11) NOT NULL,
  `Resource` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `Created` date NOT NULL,
  `Updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblKeyResources`
--

INSERT INTO `tblKeyResources` (`ResourceID`, `Resource`, `Description`, `url`, `Created`, `Updated`) VALUES
(16, 'Cystic Fibrosis University References', '', 'http://collab.vrtx.com/sites/gma/Global_Medical_Affairs/EducationTraining/Forms/AllItems.aspx?RootFolder=%2Fsites%2Fgma%2FGlobal_Medical_Affairs%2FEducationTraining%2FV-LEARN%20CURRICULUM%20FOR%20GMA&FolderCTID=0x012000C46E7090E5C9434B926D49B6B75BC88E&Vie', '2017-03-27', '2017-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `tblTopics`
--

CREATE TABLE `tblTopics` (
  `TopicID` int(11) NOT NULL,
  `TopicType` varchar(255) NOT NULL,
  `Created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblTopics`
--

INSERT INTO `tblTopics` (`TopicID`, `TopicType`, `Created`) VALUES
(1, 'Overview of Vertex', '0000-00-00'),
(2, 'Disease State', '0000-00-00'),
(3, 'Clinical Research', '0000-00-00'),
(4, 'Biostatistics', '0000-00-00'),
(5, 'Ivacaftor', '0000-00-00'),
(6, 'Lumacaftor', '0000-00-00'),
(7, 'Next Gen', '0000-00-00'),
(8, 'tezacaftor', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tblTrainingPhase`
--

CREATE TABLE `tblTrainingPhase` (
  `TrainingPhaseID` int(11) NOT NULL,
  `TrainingPhase` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblTrainingPhase`
--

INSERT INTO `tblTrainingPhase` (`TrainingPhaseID`, `TrainingPhase`) VALUES
(1, 'Onboarding'),
(2, 'Continuing Education');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblAssets`
--
ALTER TABLE `tblAssets`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TopicID` (`TopicID`),
  ADD KEY `TrainingPhaseID` (`TrainingPhaseID`),
  ADD KEY `AssetTypeID` (`AssetTypeID`),
  ADD KEY `ResourceID` (`ResourceID`);

--
-- Indexes for table `tblAssetsType`
--
ALTER TABLE `tblAssetsType`
  ADD PRIMARY KEY (`AssetTypeID`);

--
-- Indexes for table `tblKeyResources`
--
ALTER TABLE `tblKeyResources`
  ADD PRIMARY KEY (`ResourceID`);

--
-- Indexes for table `tblTopics`
--
ALTER TABLE `tblTopics`
  ADD PRIMARY KEY (`TopicID`);

--
-- Indexes for table `tblTrainingPhase`
--
ALTER TABLE `tblTrainingPhase`
  ADD PRIMARY KEY (`TrainingPhaseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblAssets`
--
ALTER TABLE `tblAssets`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tblAssetsType`
--
ALTER TABLE `tblAssetsType`
  MODIFY `AssetTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblKeyResources`
--
ALTER TABLE `tblKeyResources`
  MODIFY `ResourceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblTopics`
--
ALTER TABLE `tblTopics`
  MODIFY `TopicID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblTrainingPhase`
--
ALTER TABLE `tblTrainingPhase`
  MODIFY `TrainingPhaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblAssets`
--
ALTER TABLE `tblAssets`
  ADD CONSTRAINT `tblAssets_ibfk_1` FOREIGN KEY (`TopicID`) REFERENCES `tblTopics` (`TopicID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblAssets_ibfk_2` FOREIGN KEY (`TrainingPhaseID`) REFERENCES `tblTrainingPhase` (`TrainingPhaseID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblAssets_ibfk_3` FOREIGN KEY (`AssetTypeID`) REFERENCES `tblAssetsType` (`AssetTypeID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
