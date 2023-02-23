-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 07:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `idetails`
--

CREATE TABLE `idetails` (
  `industry` varchar(100) NOT NULL,
  `ipbv` text NOT NULL,
  `ipe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idetails`
--

INSERT INTO `idetails` (`industry`, `ipbv`, `ipe`) VALUES
('Application Software', '2.94', '44.70'),
('Automobiles & Components', '0.72', '8.14'),
('Banks', '0.38', '3.34'),
('Capital Goods', '0.88', '8.1'),
('Commercial & Professional Services', '0.86', '6.20'),
('Consumer Durables & Apparel', '1.91', '11.92'),
('Consumer Services', '0', '0'),
('Diversified Financials', '1.52', '10.96'),
('Energy', '0', '0'),
('Food & Staples Retailing', '1.65', '10.58'),
('Food, Beverage & Tobacco', '1.64', '9.45'),
('HealthCare Equipment & Services', '1.98', '8.01'),
('Household & Personal Products', '1.66', '8.72'),
('Insurance', '0.88', '6.48'),
('Materials', '1.15', '4.31'),
('Real Estate', '0.56', '11.36'),
('Retailing', '0.58', '9.12'),
('Telecommunication Service', '0.78', '5.21'),
('Transportation', '5.31', '7.84'),
('Utilities', '1.14', '8.74');

-- --------------------------------------------------------

--
-- Table structure for table `sdetails`
--

CREATE TABLE `sdetails` (
  `scode` varchar(6) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `eps` text NOT NULL,
  `pe` text NOT NULL,
  `epsinc` text NOT NULL,
  `nav` text NOT NULL,
  `mps` text NOT NULL,
  `dps` text NOT NULL,
  `dtypec` text NOT NULL,
  `dtypes` text NOT NULL,
  `d1` text NOT NULL,
  `d2` text NOT NULL,
  `d3` text NOT NULL,
  `d4` text NOT NULL,
  `dfinal` text NOT NULL,
  `fyear` int(11) NOT NULL,
  `industry` text NOT NULL,
  `is_deleted` text NOT NULL,
  `mdate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sdetails`
--

INSERT INTO `sdetails` (`scode`, `cname`, `eps`, `pe`, `epsinc`, `nav`, `mps`, `dps`, `dtypec`, `dtypes`, `d1`, `d2`, `d3`, `d4`, `dfinal`, `fyear`, `industry`, `is_deleted`, `mdate`) VALUES
('AEL.N', 'ACCESS ENGINEERING PLC', '3.15', '7.97', '1', '24.20', '25.10', '0.25', 'Cash', '', '1st', '', '', '', '', 2021, 'Capital Goods', 'No', '2022-03-20'),
('ACL.N', 'ACL CABLES PLC', '12.07', '4.01', '1', '65.06', '48.40', '1.00', 'Cash', '', '1st', '', '', '', '', 2021, 'Capital Goods', 'No', '2022-04-10'),
('APLA.N', 'ACL PLASTICS PLC', '99.05', '3.43', '1', '460.02', '340.00', '10', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Materials', 'No', '2022-04-13'),
('AGAL.N', 'AGALAWATTE PLANTATIONS PLC', '6.84', '4.25', '0', '11.01', '29.10', '0.00', '', '', '', '', '', '', '', 2020, 'Food, Beverage & Tobacco', 'No', '2022-04-01'),
('AGST.N', 'AGSTAR PLC', '3.05', '1.97', '1', '13.60', '6.00', '0.20', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Materials', 'No', '2022-04-02'),
('SPEN.N', 'AITKEN SPENCE PLC', '7.62', '10.7', '1', '126.20', '81.50', '1.00', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Capital Goods', 'No', '2022-03-26'),
('ALLI.N', 'ALLIANCE FINANCE COMPANY PLC', '32.95', '1.81', '1', '193.00', '59.60', '6.50', 'Cash', '', '1st', '', '', '', '', 2022, 'Diversified Financials', 'No', '2022-04-19'),
('GREG.N', 'AMBEON HOLDINGS PLC', '6.58', '6.22', '1', '26.06', '40.90', '3.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Consumer Durables & Apparel', 'No', '2022-03-25'),
('BFL.N', 'BAIRAHA FARMS PLC', '44.27', '4.18', '1', '281.59', '185.25', '9.00', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-03-28'),
('COLO.N', 'C M HOLDINGS PLC', '46.12', '1.63', '1', '266.00', '75.00', '5.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Retailing', 'No', '2022-04-02'),
('CWM.N', 'C. W. MACKIE PLC', '11.56', '6.06', '1', '73.19', '70.00', '7.0', 'Cash', '', '', '', '', '', 'Final', 2021, 'Retailing', 'No', '2022-03-03'),
('CFIN.N', 'CENTRAL FINANCE COMPANY PLC', '35.97', '2.57', '1', '240.80', '92.50', '1.50', 'Cash', '', '1st', '', '', '', '', 2022, 'Diversified Financials', 'No', '2022-03-03'),
('CIND.N', 'CENTRAL INDUSTRIES PLC', '30.66', '3.91', '1', '123.05', '120.00', '8.00', 'Cash', 'Scrip', '1st', '', '', '', 'Final', 2021, 'Capital Goods', 'No', '2022-03-26'),
('GRAN.N', 'CEYLON GRAIN ELEVATORS PLC', '21.63', '3.24', '1', '134.81', '70.10', '6.00', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Food, Beverage & Tobacco', 'No', '2022-03-26'),
('CHL.N', 'CEYLON HOSPITALS PLC', '26.75', '5.97', '1', '214.88', '159.75', '3.20', 'Cash', '', '1st', '', '', '', '', 2021, 'HealthCare Equipment & Services', 'No', '2022-03-03'),
('CHMX.N', 'CHEMANEX PLC', '4.46', '18.05', '1', '163.73', '80.50', '1.00', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Materials', 'No', '2022-03-26'),
('LLUB.N', 'CHEVRON LUBRICANTS LANKA PLC', '16.36', '4.83', '1', '20.83', '79.10', '13.00', 'Cash', '', '1st', '2nd', '3rd', '4th', '', 2021, 'Materials', 'No', '2022-04-20'),
('CDB.N', 'CITIZENS DEVELOPMENT BUSINESS FINANCE PLC', '49.27', '3.49', '1', '233.80', '172', '7.50', 'Cash', '', '', '', '', '', 'Final', 2021, 'Diversified Financials', 'No', '2022-03-03'),
('COMB.N', 'COMMERCIAL BANK OF CEYLON PLC', '20.15', '3.98', '1', '140.24', '80.10', '7.50', 'Cash', 'Scrip', '1st', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-19'),
('COCR.N', 'COMMERCIAL CREDIT AND FINANCE ', '11.75', '2.66', '1', '54.47', '31.30', '1.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Diversified Financials', 'No', '2022-03-19'),
('CLC.N', 'COMMERCIAL LEASING & FINANCE PLC', '1.03', '30.1', '1', '4.04', '31.00', '0.00', '', '', '', '', '', '', '', 2020, 'Diversified Financials', 'Yes', '2022-03-29'),
('DFCC.N', 'DFCC BANK PLC', '11.17', '5.47', '1', '164.74', '61.10', '3.00', 'Cash', '', '', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-03'),
('DIAL.N', 'DIALOG AXIATA PLC', '2.08', '5.19', '1', '10.80', '10.80', '1.24', 'Cash', '', '', '', '', '', 'Final', 2021, 'Telecommunication Service', 'No', '2022-03-04'),
('DIPD.N', 'DIPPED PRODUCTS PLC', '7.81', '4.1', '0', '28.72', '32.00', '1.90', 'Cash', '', '1st', '2nd', '3rd', '', '', 2022, 'Materials', 'No', '2022-04-01'),
('ELPL.N', 'ELPITIYA PLANTATIONS PLC', '19.36', '5.42', '1', '88.57', '105.00', '2.00', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Food, Beverage & Tobacco', 'No', '2022-03-27'),
('EXPO.N', 'EXPOLANKA HOLDINGS PLC', '23.25', '8.04', '1', '34.19', '187.00', '1.17', 'Cash', '', '1st', '', '', '', '', 2022, 'Transportation', 'No', '2022-04-01'),
('HNB.N', 'HATTON NATIONAL BANK PLC', '45.17', '2.88', '1', '335.93', '130.00', '9.00', 'Cash', 'Scrip', '1st', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-26'),
('HAYC.N', 'HAYCARB PLC', '7.41', '6.21', '0', '48.73', '46.00', '1.55', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Materials', 'No', '2022-04-04'),
('MGT.N', 'HAYLEYS FABRIC PLC', '3.45', '8.14', '1', '13.80', '28.10', '1.10', 'Cash', '', '1st', '2nd', '3rd', '', '', 2022, 'Consumer Durables & Apparel', 'No', '2022-04-01'),
('HAYL.N', 'HAYLEYS PLC', '17.39', '5.64', '1', '75.27', '98.00', '4.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Capital Goods', 'No', '2022-03-16'),
('HHL.N', 'HEMAS HOLDINGS PLC', '6.78', '9.38', '1', '54.80', '63.60', '2.90', 'Cash', '', '1st', '', '', '', '', 2022, 'Capital Goods', 'No', '2022-03-03'),
('HASU.N', 'HNB ASSURANCE PLC', '8.16', '6.1', '1', '54.15', '49.80', '3.20', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Insurance', 'No', '2022-03-20'),
('HBS.N', 'hSenid Business Solutions Limited', '0.54', '50.74', '1', '4.30', '27.40', '0.00', '', '', '', '', '', '', '', 2020, 'Application Software', 'No', '2022-03-04'),
('JINS.N', 'JANASHAKTHI INSURANCE PLC', '2.18', '11.38', '0', '44.89', '24.80', '2.30', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Insurance', 'No', '2022-04-07'),
('JKH.N', 'JOHN KEELLS HOLDINGS PLC', '10.65', '14.98', '1', '177.60', '159.50', '1.0', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Capital Goods', 'No', '2022-03-03'),
('KGAL.N', 'KEGALLE PLANTATIONS PLC', '21.30', '6.82', '1', '180.07', '145.25', '5.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-03-26'),
('KCAB.N', 'KELANI CABLES PLC', '67.33', '5.05', '1', '264.94', '340.00', '4.50', 'Cash', '', '1st', '', '', '', '', 2021, 'Capital Goods', 'No', '2022-03-26'),
('KVAL.N', 'KELANI VALLEY PLANTATIONS PLC', '17.39', '2.62', '1', '71.58', '45.60', '0.95', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-04-15'),
('LOLC.N', 'L O L C HOLDINGS PLC', '61.50', '6.43', '1', '311.50', '395.50', '0.00', '', '', '', '', '', '', '', 2021, 'Diversified Financials', 'No', '2022-04-19'),
('LALU.N', 'LANKA ALUMINIUM INDUSTRIES PLC', '5.56', '4.6', '1', '26.40', '25.60', '0.20', 'Cash', '', '', '', '', '', 'Final', 2020, 'Materials', 'No', '2022-03-03'),
('LMF.N', 'LANKA MILK FOODS (CWE) PLC', '33.01', '5.76', '1', '349.45', '190.25', '5.00', 'Cash', '', '', '', '', '', 'Final', 2021, 'Food, Beverage & Tobacco', 'No', '2022-03-03'),
('TILE.N', 'LANKA TILES PLC', '15.57', '3.03', '1', '42.91', '47.20', '4.80', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Capital Goods', 'No', '2022-04-02'),
('LWL.N', 'LANKA WALLTILE PLC', '17.23', '3.49', '1', '59.09', '60.10', '4.80', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Capital Goods', 'No', '2022-04-01'),
('LFIN.N', 'LB FINANCE PLC', '16.38', '3.05', '1', '58.40', '50.00', '3.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Diversified Financials', 'No', '2022-04-02'),
('LOFC.N', 'LOLC FINANCE PLC', '2.35', '4.43', '1', '9.15', '10.40', '0.00', '', '', '', '', '', '', '', 2020, 'Diversified Financials', 'No', '2022-04-02'),
('MELS.N', 'MELSTACORP PLC', '6.97', '6.8', '1', '72.57', '47.40', '5.40', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-03-17'),
('MBSL.N', 'MERCHANT BANK OF SRI LANKA & FINANCE PLC', '2.18', '2.94', '1', '8.36', '6.40', '0.00', '', '', '', '', '', '', '', 2022, 'Diversified Financials', 'No', '2022-03-16'),
('NAMU.N', 'NAMUNUKULA PLANTATIONS PLC', '70.15', '4.86', '1', '219.17', '341.25', '10.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-04-13'),
('NDB.N', 'NATIONAL DEVELOPMENT BANK PLC', '22.44', '2.83', '1', '175.65', '63.40', '5.50', 'Cash', 'Scrip', '1st', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-23'),
('NTB.N', 'NATIONS TRUST BANK PLC', '22.20', '2.41', '1', '141.48', '53.40', '3.50', '', 'Scrip', '', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-03'),
('OSEA.N', 'OVERSEAS REALTY (CEYLON) PLC', '2.36', '7.63', '1', '37.91', '18.00', '1.25', 'Cash', '', '', '', '', '', 'Final', 2021, 'Real Estate', 'No', '2022-03-03'),
('PABC.N', 'PAN ASIA BANKING CORPORATION PLC', '6.95', '2.29', '1', '41.92', '15.90', '0.00', '', '', '', '', '', '', '', 2020, 'Banks', 'No', '2022-03-03'),
('CARE.N', 'PRINTCARE PLC', '18.87', '1.49', '1', '49.59', '28.10', '4.00', 'Cash', '', '1st', '', '', '', '', 2021, 'Commercial & Professional Services', 'No', '2022-04-19'),
('COCO.N', 'RENUKA FOODS PLC', '1.62', '9.07', '1', '34.89', '14.70', '0.35', 'Cash', '', '1st', '', '', '', 'Final', 2020, 'Food, Beverage & Tobacco', 'No', '2022-04-05'),
('RICH.N', 'RICHARD PIERIS AND COMPANY PLC', '3.06', '5.16', '1', '10.29', '15.80', '0.60', 'Cash', '', '1st', '', '', '', '', 2022, 'Capital Goods', 'No', '2022-03-26'),
('REXP.N', 'RICHARD PIERIS EXPORTS PLC', '58.27', '10.14', '1', '245.08', '590.75', '28.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Materials', 'No', '2022-04-15'),
('RCL.N', 'ROYAL CERAMICS LANKA PLC', '8.68', '4.1', '1', '30.85', '35.60', '3.00', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Capital Goods', 'No', '2022-04-02'),
('SAMP.N', 'SAMPATH BANK PLC', '12.11', '4.43', '1', '111.14', '53.70', '4.25', 'Cash', '', '', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-03'),
('SEYB.N', 'SEYLAN BANK PLC', '8.71', '4.76', '1', '101.01', '41.50', '4.00', '', 'Scrip', '', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-03'),
('CSD.N', 'SEYLAN DEVELOPMENTS PLC', '2.37', '7.72', '1', '35.64', '18.30', '1.40', 'Cash', '', '', '', '', '', 'Final', 2021, 'Real Estate', 'No', '2022-03-03'),
('KZOO.N', 'SHAW WALLACE INVESTMENTS PLC', '1.74', '6.44', '0', '11.20', '11.20', '0.20', 'Cash', '', '', '', '', '', 'Final', 2021, 'Diversified Financials', 'No', '2022-03-03'),
('SCAP.N', 'SOFTLOGIC CAPITAL PLC', '0.76', '7.24', '1', '7.01', '5.50', '0.00', '', '', '', '', '', '', '', 2020, 'Insurance', 'No', '2022-04-02'),
('CRL.N', 'SOFTLOGIC FINANCE PLC', '-1.09', '-15.96', '1', '10.64', '17.40', '0.00', '', '', '', '', '', '', '', 2020, 'Diversified Financials', 'No', '2022-03-03'),
('SHL.N', 'SOFTLOGIC HOLDINGS PLC', '1.05', '62.19', '1', '4.51', '65.30', '0.00', '', '', '', '', '', '', '', 2020, 'Capital Goods', 'No', '2022-03-03'),
('AAIC.N', 'SOFTLOGIC LIFE INSURANCE PLC', '5.61', '6.77', '1', '28.24', '38.00', '2.80', 'Cash', '', '1st', '', '', '', '', 2021, 'Insurance', 'No', '2022-04-01'),
('SLT.N', 'SRI LANKA TELECOM PLC', '6.73', '6.21', '1', '52.01', '41.80', '2.02', 'Cash', '', '1st', '', '', '', '', 2021, 'Telecommunication Service', 'No', '2022-03-17'),
('SUN.N', 'SUNSHINE HOLDINGS PLC', '5.02', '6.47', '1', '26.85', '32.50', '0.50', 'Cash', '', '1st', '', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-04-02'),
('PARQ.N', 'SWISSTEK (CEYLON) PLC', '6.57', '6.59', '1', '22.17', '43.30', '1.80', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Materials', 'No', '2022-03-03'),
('TJL.N', 'TEEJAY LANKA PLC', '3.01', '13.55', '1', '25.50', '40.80', '0.85', 'Cash', '', '1st', '', '', '', '', 2022, 'Consumer Durables & Apparel', 'No', '2022-03-03'),
('TKYO.N', 'TOKYO CEMENT COMPANY (LANKA) PLC', '8.43', '5.81', '1', '57.87', '49.00', '2.10', 'Cash', '', '1st', '2nd', '', '', '', 2021, 'Materials', 'No', '2022-03-03'),
('VFIN.N', 'VALLIBEL FINANCE PLC', '11.94', '3.17', '1', '41.90', '37.90', '1.50', 'Cash', '', '1st', '', '', '', '', 2021, 'Diversified Financials', 'No', '2022-03-19'),
('VONE.N', 'VALLIBEL ONE PLC', '9.96', '3.71', '1', '58.42', '37.00', '1.50', 'Cash', '', '1st', '', '', '', '', 2022, 'Utilities', 'No', '2022-04-01'),
('WATA.N', 'WATAWALA PLANTATIONS PLC', '15.10', '4.6', '1', '30.90', '69.40', '6.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `udetails`
--

CREATE TABLE `udetails` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `udetails`
--

INSERT INTO `udetails` (`ID`, `username`, `email`, `password`, `gender`) VALUES
(1, 'Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Male'),
(2, 'Vishva Isuranga', 'vishvaisuranga@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male'),
(3, 'Sachini Wickramasinghe', 'sachinirulz@gmail.com', '7215ee9c7d9dc229d2921a40e899ec5f', 'Female'),
(4, 'Loshan Ranjeewa', 'ranjeewa.loshan@hnb.lk', 'd00498d9f077780f5be58d0956ce0458', 'Male'),
(5, 'Pradeepa Jinasena', 'pradeepa@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female'),
(6, 'Thilanka Harshakantha', 'thilanka.harshakantha@hnb.lk', '68053af2923e00204c3ca7c6a3150cf7', 'Male'),
(7, 'Rukshitha', 'rukshitha@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `idetails`
--
ALTER TABLE `idetails`
  ADD PRIMARY KEY (`industry`);

--
-- Indexes for table `sdetails`
--
ALTER TABLE `sdetails`
  ADD PRIMARY KEY (`cname`);

--
-- Indexes for table `udetails`
--
ALTER TABLE `udetails`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `udetails`
--
ALTER TABLE `udetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
