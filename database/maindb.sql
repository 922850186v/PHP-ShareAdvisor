-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 04:41 PM
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
('Application Software', '2.90', '12.10'),
('Automobiles & Components', '0.60', '6.64'),
('Banks', '0.29', '2.49'),
('Capital Goods', '0.82', '4.68'),
('Commercial & Professional Services', '0.69', '1.85'),
('Consumer Durables & Apparel', '1.43', '9.45'),
('Consumer Services', '0', '0'),
('Diversified Financials', '0.92', '3.52'),
('Energy', '2.19', '88.17'),
('Food & Staples Retailing', '1.65', '10.58'),
('Food, Beverage & Tobacco', '1.51', '5.35'),
('HealthCare Equipment & Services', '1.98', '8.01'),
('Household & Personal Products', '1.66', '8.72'),
('Insurance', '0.88', '6.48'),
('Materials', '1.22', '5.81'),
('Real Estate', '0.5', '5.64'),
('Retailing', '0.51', '5.64'),
('Telecommunication Service', '0.78', '5.21'),
('Transportation', '2.77', '4.72'),
('Utilities', '0.97', '7.77');

-- --------------------------------------------------------

--
-- Table structure for table `sdetails`
--

CREATE TABLE `sdetails` (
  `scode` varchar(6) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `quarter` int(10) NOT NULL,
  `fyear` int(10) NOT NULL,
  `eps1` text NOT NULL,
  `eps2` text NOT NULL,
  `eps3` text NOT NULL,
  `eps4` text NOT NULL,
  `eps` text NOT NULL,
  `pe` text NOT NULL,
  `yoy` int(10) NOT NULL,
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
  `dfyear` int(11) NOT NULL,
  `industry` text NOT NULL,
  `is_deleted` text NOT NULL,
  `mdate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sdetails`
--

INSERT INTO `sdetails` (`scode`, `cname`, `quarter`, `fyear`, `eps1`, `eps2`, `eps3`, `eps4`, `eps`, `pe`, `yoy`, `nav`, `mps`, `dps`, `dtypec`, `dtypes`, `d1`, `d2`, `d3`, `d4`, `dfinal`, `dfyear`, `industry`, `is_deleted`, `mdate`) VALUES
('AAA', 'AAA', 0, 2020, '1.56', '3.21', '5.24', '10.12', '20.13', '2.24', 105, '65', '45', '10', '', '', '', '', '', '', '', 2022, 'Utilities', 'Yes', '2022-08-10'),
('AEL.N', 'ACCESS ENGINEERING PLC', 0, 0, '0', '0', '0', '0', '4.21', '2.49', 0, '27.28', '10.50', '1.00', 'Cash', '', '1st', '2nd', '', '', '', 2021, 'Capital Goods', 'No', '2022-06-18'),
('ACL.N', 'ACL CABLES PLC', 0, 0, '0', '0', '0', '0', '18.53', '2.33', 0, '75.15', '43.10', '1.00', 'Cash', '', '1st', '', '', '', '', 2021, 'Capital Goods', 'No', '2022-05-30'),
('APLA.N', 'ACL PLASTICS PLC', 0, 0, '14.57', '29.99', '38.11', '74.82', '157.49', '1.91', 2361, '526.39', '301.50', '15', 'Cash', '', '1st', '', '', '', '', 2022, 'Materials', 'No', '2022-08-02'),
('AGAL.N', 'AGALAWATTE PLANTATIONS PLC', 0, 0, '2.63', '1.58', '1.85', '3.49', '9.55', '3.62', 112, '17.05', '34.60', '0.00', '', '', '', '', '', '', '', 2020, 'Food, Beverage & Tobacco', 'No', '2022-08-05'),
('AGST.N', 'AGSTAR PLC', 0, 0, '0', '0', '0', '0', '3.05', '1.97', 0, '13.60', '6.00', '0.20', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Materials', 'No', '2022-04-02'),
('SPEN.N', 'AITKEN SPENCE PLC', 0, 0, '0', '0', '0', '0', '25.96', '2.81', 0, '162.44', '73.00', '4.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Capital Goods', 'No', '2022-05-27'),
('ALLI.N', 'ALLIANCE FINANCE COMPANY PLC', 0, 0, '0', '0', '0', '0', '44.29', '1.15', 0, '201.00', '63.60', '14.50', 'Cash', '', '1st', '', '', '', '', 2022, 'Diversified Financials', 'No', '2022-08-12'),
('GREG.N', 'AMBEON HOLDINGS PLC', 0, 0, '0', '0', '0', '0', '6.58', '6.22', 0, '26.06', '40.90', '3.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Consumer Durables & Apparel', 'No', '2022-03-25'),
('AMF.N', 'ASSOCIATED MOTOR FINANCE COMPANY PLC', 0, 0, '1.35', '1.65', '1.50', '0.28', '4.78', '2.13', 119, '24.07', '10.20', '0.00', '', '', '', '', '', '', '', 2020, 'Diversified Financials', 'No', '2022-08-11'),
('BFL.N', 'BAIRAHA FARMS PLC', 0, 0, '9.74', '14.53', '17.38', '23.10', '64.75', '2.35', 274, '316.16', '152.00', '9.00', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-07-31'),
('BALA.N', 'BALANGODA PLANTATIONS PLC', 0, 0, '0.36', '-4.75', '6.43', '19.47', '21.51', '2.64', 1504, '55.92', '56.80', '0.00', '', '', '', '', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-08-10'),
('CIC.N', 'C I C HOLDINGS PLC', 0, 0, '7.93', '12.14', '2.76', '5.58', '28.41', '1.44', 188, '47.77', '41.00', '2.00', 'Cash', '', '1st', '', '', '', 'Final', 2022, 'Materials', 'No', '2022-07-31'),
('COLO.N', 'C M HOLDINGS PLC', 0, 0, '0', '0', '0', '0', '46.12', '1.63', 0, '266.00', '75.00', '5.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Retailing', 'No', '2022-04-02'),
('CWM.N', 'C. W. MACKIE PLC', 0, 0, '0', '0', '0', '0', '15.67', '4.56', 0, '93.67', '71.50', '10', 'Cash', '', '1st', '', '', '', 'Final', 2022, 'Retailing', 'No', '2022-05-26'),
('CFIN.N', 'CENTRAL FINANCE COMPANY PLC', 0, 0, '0', '0', '0', '0', '30.80', '2', 0, '245.59', '61.50', '3.50', 'Cash', '', '1st', '', '', '', 'Final', 2022, 'Diversified Financials', 'No', '2022-05-30'),
('CIND.N', 'CENTRAL INDUSTRIES PLC', 0, 0, '0', '0', '0', '0', '19.48', '2.78', 0, '105.42', '54.20', '5.00', '', 'Scrip', '', '', '', '', 'Final', 2022, 'Capital Goods', 'No', '2022-06-18'),
('GRAN.N', 'CEYLON GRAIN ELEVATORS PLC', 0, 0, '0', '0', '0', '0', '21.63', '3.24', 0, '134.81', '70.10', '6.00', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Food, Beverage & Tobacco', 'No', '2022-03-26'),
('CHL.N', 'CEYLON HOSPITALS PLC', 0, 0, '0', '0', '0', '0', '26.75', '5.97', 0, '214.88', '159.75', '3.20', 'Cash', '', '1st', '', '', '', '', 2021, 'HealthCare Equipment & Services', 'No', '2022-03-03'),
('CHMX.N', 'CHEMANEX PLC', 0, 0, '0', '0', '0', '0', '6.32', '9.19', 0, '160.94', '58.10', '1.00', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Materials', 'No', '2022-05-20'),
('LLUB.N', 'CHEVRON LUBRICANTS LANKA PLC', 0, 0, '4.25', '3.78', '3.93', '3.50', '15.46', '5.04', 82, '22.98', '77.90', '13.00', 'Cash', '', '1st', '2nd', '3rd', '4th', '', 2021, 'Materials', 'No', '2022-08-02'),
('CDB.N', 'CITIZENS DEVELOPMENT BUSINESS FINANCE PLC', 0, 0, '0', '0', '0', '0', '49.27', '3.49', 0, '233.80', '172', '7.50', 'Cash', '', '', '', '', '', 'Final', 2021, 'Diversified Financials', 'No', '2022-03-03'),
('COMB.N', 'COMMERCIAL BANK OF CEYLON PLC', 0, 0, '0', '0', '0', '0', '20.15', '3.98', 0, '140.24', '80.10', '7.50', 'Cash', 'Scrip', '1st', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-19'),
('COCR.N', 'COMMERCIAL CREDIT AND FINANCE ', 0, 0, '0', '0', '0', '0', '14.22', '1.33', 0, '60.25', '18.90', '1.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Diversified Financials', 'No', '2022-05-30'),
('CLC.N', 'COMMERCIAL LEASING & FINANCE PLC', 0, 0, '0', '0', '0', '0', '1.03', '30.1', 0, '4.04', '31.00', '0.00', '', '', '', '', '', '', '', 2020, 'Diversified Financials', 'Yes', '2022-03-29'),
('DFCC.N', 'DFCC BANK PLC', 0, 0, '0', '0', '0', '0', '11.17', '5.47', 0, '164.74', '61.10', '3.00', 'Cash', '', '', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-03'),
('DIAL.N', 'DIALOG AXIATA PLC', 0, 0, '0', '0', '0', '0', '2.08', '5.19', 0, '10.80', '10.80', '1.24', 'Cash', '', '', '', '', '', 'Final', 2021, 'Telecommunication Service', 'No', '2022-03-04'),
('DIPD.N', 'DIPPED PRODUCTS PLC', 0, 0, '1.61', '1.35', '3.95', '6.18', '13.09', '2.62', 206, '44.00', '34.30', '2.05', 'Cash', '', '1st', '2nd', '3rd', '', 'Final', 2022, 'Materials', 'No', '2022-08-09'),
('ELPL.N', 'ELPITIYA PLANTATIONS PLC', 0, 0, '0', '0', '0', '0', '21.03', '4.44', 0, '94.68', '93.30', '3.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-05-27'),
('PACK.N', 'Ex-pack Corrugated Cartons PLC', 0, 0, '0.50', '0.45', '0.86', '1.28', '3.09', '3.2', 461, '6.94', '9.90', '0.80', 'Cash', '', '1st', '2nd', '3rd', '', '', 2022, 'Materials', 'No', '2022-08-02'),
('EXPO.N', 'EXPOLANKA HOLDINGS PLC', 0, 0, '6.17', '11.79', '16.04', '10.31', '44.31', '3.96', 220, '75.88', '175.25', '8.19', 'Cash', '', '1st', '', '', '', '', 2023, 'Transportation', 'No', '2022-07-31'),
('HNB.N', 'HATTON NATIONAL BANK PLC', 0, 0, '0', '0', '0', '0', '36.41', '2.29', 0, '325.68', '83.50', '9.00', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-05-16'),
('HAYC.N', 'HAYCARB PLC', 0, 0, '1.79', '1.98', '5.80', '9.73', '19.3', '3.74', 466, '72.73', '72.20', '2.70', 'Cash', '', '1st', '2nd', '3rd', '', 'Final', 2022, 'Materials', 'No', '2022-08-10'),
('MGT.N', 'HAYLEYS FABRIC PLC', 0, 0, '0', '0', '0', '0', '11.16', '3.01', 0, '21.92', '33.60', '2.10', 'Cash', '', '1st', '2nd', '3rd', '', 'Final', 2022, 'Consumer Durables & Apparel', 'No', '2022-05-30'),
('HEXP.N', 'HAYLEYS FIBRE PLC', 0, 0, '0.81', '1.83', '4.06', '8.30', '15', '5.27', 165046, '57.47', '79.10', '2.55', 'Cash', '', '1st', '2nd', '3rd', '', 'Final', 2022, 'Consumer Durables & Apparel', 'No', '2022-08-10'),
('HAYL.N', 'HAYLEYS PLC', 0, 0, '0', '0', '0', '0', '24.34', '2.99', 0, '89.85', '72.80', '4.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Capital Goods', 'No', '2022-05-20'),
('HHL.N', 'HEMAS HOLDINGS PLC', 0, 0, '0', '0', '0', '0', '7.12', '6.17', 0, '59.66', '43.90', '4.85', 'Cash', '', '1st', '', '', '', 'Final', 2022, 'Capital Goods', 'No', '2022-05-19'),
('HASU.N', 'HNB ASSURANCE PLC', 0, 0, '0', '0', '0', '0', '8.16', '6.1', 0, '54.15', '49.80', '3.20', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Insurance', 'No', '2022-03-20'),
('HBS.N', 'hSenid Business Solutions Limited', 0, 0, '0', '0', '0', '0', '1.93', '10.1', 0, '7.05', '19.50', '0.00', '', '', '', '', '', '', '', 2020, 'Application Software', 'No', '2022-07-02'),
('JINS.N', 'JANASHAKTHI INSURANCE PLC', 0, 0, '0', '0', '0', '0', '2.18', '11.38', 0, '44.89', '24.80', '2.30', 'Cash', '', '1st', '', '', '', 'Final', 2021, 'Insurance', 'No', '2022-04-07'),
('JKH.N', 'JOHN KEELLS HOLDINGS PLC', 0, 0, '0', '0', '0', '0', '10.65', '14.98', 0, '177.60', '159.50', '1.0', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Capital Goods', 'No', '2022-03-03'),
('KGAL.N', 'KEGALLE PLANTATIONS PLC', 0, 0, '0', '0', '0', '0', '31.86', '4.41', 0, '188.67', '140.50', '5.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-06-01'),
('KCAB.N', 'KELANI CABLES PLC', 0, 0, '0', '0', '0', '0', '67.33', '5.05', 0, '264.94', '340.00', '4.50', 'Cash', '', '1st', '', '', '', '', 2021, 'Capital Goods', 'No', '2022-03-26'),
('KVAL.N', 'KELANI VALLEY PLANTATIONS PLC', 0, 0, '4.17', '3.24', '14.48', '12.90', '34.79', '3.38', 212, '97.06', '117.50', '2.50', 'Cash', '', '1st', '', '', '', '', 2023, 'Food, Beverage & Tobacco', 'No', '2022-09-15'),
('LOLC.N', 'L O L C HOLDINGS PLC', 0, 0, '0', '0', '0', '0', '129.03', '4.63', 0, '531.34', '598.00', '0.00', '', '', '', '', '', '', '', 2021, 'Diversified Financials', 'No', '2022-06-01'),
('LALU.N', 'LANKA ALUMINIUM INDUSTRIES PLC', 0, 0, '1.10', '1.77', '2.02', '1.68', '6.57', '2.47', 287, '33.49', '16.20', '1.00', 'Cash', '', '', '', '', '', 'Final', 2020, 'Materials', 'No', '2022-08-06'),
('LCBF.N', 'LANKA CREDIT AND BUSINESS FINANCE PLC', 0, 0, '0', '0', '0', '0', '0.18', '11.11', 0, '3.45', '2.00', '0.00', '', '', '', '', '', '', '', 2022, 'Diversified Financials', 'No', '2022-05-30'),
('LIOC.N', 'LANKA IOC PLC', 0, 0, '0.53', '1.67', '6.34', '18.64', '27.18', '4.16', 3535, '64.25', '113.00', '2.25', 'Cash', '', '', '', '', '', 'Final', 2022, 'Energy', 'No', '2022-08-05'),
('LMF.N', 'LANKA MILK FOODS (CWE) PLC', 0, 0, '0', '0', '0', '0', '33.01', '5.76', 0, '349.45', '190.25', '5.00', 'Cash', '', '', '', '', '', 'Final', 2021, 'Food, Beverage & Tobacco', 'No', '2022-03-03'),
('TILE.N', 'LANKA TILES PLC', 0, 0, '0', '0', '0', '0', '15.50', '2.83', 0, '46.07', '43.90', '6.70', 'Cash', '', '1st', '2nd', '3rd', '', '', 2022, 'Capital Goods', 'No', '2022-05-27'),
('LWL.N', 'LANKA WALLTILE PLC', 0, 0, '4.12', '4.96', '7.25', '6.07', '22.4', '3.13', 123, '65.98', '70.00', '7.70', 'Cash', '', '1st', '2nd', '3rd', '', '', 2022, 'Capital Goods', 'No', '2022-09-21'),
('LFIN.N', 'LB FINANCE PLC', 0, 0, '3.79', '5.08', '3.98', '3.77', '16.62', '2.53', 54, '57.76', '42', '5.00', 'Cash', '', '1st', '', '', '', 'Final', 2022, 'Diversified Financials', 'No', '2022-07-21'),
('LOFC.N', 'LOLC FINANCE PLC', 0, 0, '0', '0', '0', '0', '3.23', '2.94', 0, '4.43', '9.50', '0.00', '', '', '', '', '', '', '', 2020, 'Diversified Financials', 'No', '2022-05-30'),
('MELS.N', 'MELSTACORP PLC', 0, 0, '0', '0', '0', '0', '9.34', '4.67', 0, '74.67', '43.60', '5.40', 'Cash', '', '1st', '2nd', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-05-30'),
('MBSL.N', 'MERCHANT BANK OF SRI LANKA & FINANCE PLC', 0, 0, '0', '0', '0', '0', '2.18', '2.94', 0, '8.36', '6.40', '0.00', '', '', '', '', '', '', '', 2022, 'Diversified Financials', 'No', '2022-03-16'),
('NAMU.N', 'NAMUNUKULA PLANTATIONS PLC', 0, 0, '0', '0', '0', '0', '81.57', '4.36', 0, '229.44', '355.75', '10.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-06-01'),
('NDB.N', 'NATIONAL DEVELOPMENT BANK PLC', 0, 0, '0', '0', '0', '0', '22.44', '2.83', 0, '175.65', '63.40', '5.50', 'Cash', 'Scrip', '1st', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-23'),
('NTB.N', 'NATIONS TRUST BANK PLC', 0, 0, '0', '0', '0', '0', '22.20', '2.41', 0, '141.48', '53.40', '3.50', '', 'Scrip', '', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-03'),
('OSEA.N', 'OVERSEAS REALTY (CEYLON) PLC', 0, 0, '0', '0', '0', '0', '2.36', '7.63', 0, '37.91', '18.00', '1.25', 'Cash', '', '', '', '', '', 'Final', 2021, 'Real Estate', 'No', '2022-03-03'),
('PABC.N', 'PAN ASIA BANKING CORPORATION PLC', 0, 0, '0', '0', '0', '0', '6.95', '1.25', 0, '41.92', '8.70', '0.00', '', '', '', '', '', '', '', 2020, 'Banks', 'No', '2022-06-23'),
('PLR.N', 'PRIME LANDS RESIDENCIES PLC', 0, 0, '0', '0', '0', '0', '1.86', '3.66', 0, '7.14', '6.80', '0.7', 'Cash', '', '1st', '', '', '', '', 2022, 'Real Estate', 'No', '2022-05-26'),
('CARE.N', 'PRINTCARE PLC', 0, 0, '1.02', '13.14', '10.46', '11.92', '36.54', '0.86', 943177, '68.31', '31.30', '4.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Commercial & Professional Services', 'No', '2022-08-10'),
('RENU.N', 'RENUKA CITY HOTELS PLC', 0, 0, '0', '0', '0', '0', '334.93', '0.93', 0, '1075.07', '312.75', '0.00', '', '', '', '', '', '', '', 2022, 'Consumer Services', 'No', '2022-05-30'),
('COCO.N', 'RENUKA FOODS PLC', 0, 0, '0', '0', '0', '0', '4.42', '3.37', 0, '36.18', '14.90', '0.35', 'Cash', '', '', '', '', '', 'Final', 2020, 'Food, Beverage & Tobacco', 'No', '2022-06-12'),
('RICH.N', 'RICHARD PIERIS AND COMPANY PLC', 0, 0, '0.73', '1.19', '0.93', '1.76', '4.61', '6.72', 231, '12.05', '31', '0.60', 'Cash', '', '1st', '', '', '', '', 2022, 'Capital Goods', 'No', '2022-09-19'),
('REXP.N', 'RICHARD PIERIS EXPORTS PLC', 0, 0, '0', '0', '0', '0', '116.35', '4.33', 0, '302.30', '503.50', '28.00', 'Cash', '', '1st', '', '', '', '', 2022, 'Materials', 'No', '2022-06-01'),
('RCL.N', 'ROYAL CERAMICS LANKA PLC', 0, 0, '0', '0', '0', '0', '8.84', '3.28', 0, '33.69', '29.00', '3.75', 'Cash', '', '1st', '2nd', '3rd', '', '', 2022, 'Capital Goods', 'No', '2022-06-01'),
('SAMP.N', 'SAMPATH BANK PLC', 0, 0, '0', '0', '0', '0', '12.11', '4.43', 0, '111.14', '53.70', '4.25', 'Cash', '', '', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-03'),
('SEYB.N', 'SEYLAN BANK PLC', 0, 0, '0', '0', '0', '0', '8.71', '4.76', 0, '101.01', '41.50', '4.00', '', 'Scrip', '', '', '', '', 'Final', 2021, 'Banks', 'No', '2022-03-03'),
('CSD.N', 'SEYLAN DEVELOPMENTS PLC', 0, 0, '0', '0', '0', '0', '2.37', '7.72', 0, '35.64', '18.30', '1.40', 'Cash', '', '', '', '', '', 'Final', 2021, 'Real Estate', 'No', '2022-03-03'),
('KZOO.N', 'SHAW WALLACE INVESTMENTS PLC', 0, 0, '0', '0', '0', '0', '1.74', '6.44', 0, '11.20', '11.20', '0.20', 'Cash', '', '', '', '', '', 'Final', 2021, 'Diversified Financials', 'No', '2022-03-03'),
('SCAP.N', 'SOFTLOGIC CAPITAL PLC', 0, 0, '0', '0', '0', '0', '0.76', '7.24', 0, '7.01', '5.50', '0.00', '', '', '', '', '', '', '', 2020, 'Insurance', 'No', '2022-04-02'),
('CRL.N', 'SOFTLOGIC FINANCE PLC', 0, 0, '0', '0', '0', '0', '-1.09', '-15.96', 0, '10.64', '17.40', '0.00', '', '', '', '', '', '', '', 2020, 'Diversified Financials', 'No', '2022-03-03'),
('SHL.N', 'SOFTLOGIC HOLDINGS PLC', 0, 0, '0', '0', '0', '0', '1.05', '62.19', 0, '4.51', '65.30', '0.00', '', '', '', '', '', '', '', 2020, 'Capital Goods', 'No', '2022-03-03'),
('AAIC.N', 'SOFTLOGIC LIFE INSURANCE PLC', 0, 0, '0', '0', '0', '0', '5.61', '6.77', 0, '28.24', '38.00', '2.80', 'Cash', '', '1st', '', '', '', '', 2021, 'Insurance', 'No', '2022-04-01'),
('SLT.N', 'SRI LANKA TELECOM PLC', 0, 0, '0', '0', '0', '0', '6.73', '6.21', 0, '52.01', '41.80', '2.02', 'Cash', '', '1st', '', '', '', '', 2021, 'Telecommunication Service', 'No', '2022-03-17'),
('SUN.N', 'SUNSHINE HOLDINGS PLC', 0, 0, '1.44', '1.36', '2.01', '2.12', '6.93', '6.29', 54, '31.35', '43.60', '1.00', 'Cash', '', '1st', '', '', '', 'Final', 2022, 'Food, Beverage & Tobacco', 'No', '2022-08-06'),
('PARQ.N', 'SWISSTEK (CEYLON) PLC', 0, 0, '0', '0', '0', '0', '6.16', '2.37', 0, '23.05', '14.60', '2.70', 'Cash', '', '1st', '2nd', '3rd', '', '', 2022, 'Materials', 'No', '2022-06-12'),
('TPL.N', 'TALAWAKELLE TEA ESTATES PLC', 0, 0, '0.98', '1.20', '13.21', '6.79', '22.18', '4.26', 286, '92.43', '94.50', '5.65', 'Cash', '', '1st', '', '', '', 'Final', 2022, 'Food, Beverage & Tobacco', 'No', '2022-08-04'),
('TSML.N', 'TEA SMALLHOLDER FACTORIES PLC', 0, 0, '-0.92', '-0.58', '1.99', '6.11', '6.6', '5.38', 30450, '56.63', '35.50', '1', 'Cash', '', '1st', '', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-07-21'),
('TJL.N', 'TEEJAY LANKA PLC', 0, 0, '0', '0', '0', '0', '3.01', '13.55', 0, '25.50', '40.80', '0.85', 'Cash', '', '1st', '', '', '', '', 2022, 'Consumer Durables & Apparel', 'No', '2022-03-03'),
('TESS.N', 'TESS AGRO PLC', 0, 0, '0', '0', '0', '0', '0.12', '12.5', 0, '0.28', '1.50', '0.00', '', '', '', '', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-06-12'),
('TKYO.N', 'TOKYO CEMENT COMPANY (LANKA) PLC', 0, 0, '0', '0', '0', '0', '8.43', '5.81', 0, '57.87', '49.00', '2.10', 'Cash', '', '1st', '2nd', '', '', '', 2021, 'Materials', 'No', '2022-03-03'),
('UDPL.N', 'UDAPUSSELLAWA PLANTATIONS PLC', 0, 0, '-2.68', '9.19', '3.06', '21.68', '31.25', '1.98', 1336, '116.05', '62.00', '0.00', '', '', '', '', '', '', '', 2022, 'Food, Beverage & Tobacco', 'No', '2022-08-10'),
('VFIN.N', 'VALLIBEL FINANCE PLC', 0, 0, '0', '0', '0', '0', '12.37', '2.34', 0, '45.25', '29.00', '1.50', 'Cash', '', '1st', '', '', '', '', 2021, 'Diversified Financials', 'No', '2022-05-30'),
('VONE.N', 'VALLIBEL ONE PLC', 0, 0, '0', '0', '0', '0', '9.09', '4.1', 0, '61.43', '37.30', '1.50', 'Cash', '', '1st', '', '', '', '', 2022, 'Utilities', 'No', '2022-06-11'),
('WATA.N', 'WATAWALA PLANTATIONS PLC', 0, 0, '5.73', '3.84', '3.87', '3.61', '17.05', '4.9', 1, '30.53', '83.60', '14', 'Cash', '', '1st', '', '', '', 'Final', 2022, 'Food, Beverage & Tobacco', 'No', '2022-08-04');

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
(1, 'Admin', 'admin@admin.com', '$2y$10$RaEaEShFFxjtg8hYXjoFouJxeTo8DglPaArPHg5tDFlJsDp2UgAmO', 'Male'),
(2, 'Vishva Isuranga', 'vishvaisuranga@gmail.com', '$2y$10$CJNs4yz//5xzRNJ9Ixtp8OxlC7oC/ffRkEnCAVaJ/PvBL1accOHgW', 'Male'),
(3, 'Sachini Wickramasinghe', 'sachinirulz@gmail.com', '$2y$10$jehr3s5YlzOgUxRU6Sniq.8hrPmtDJnB6prgiGGu4DcjKutFNEBhi', 'Female'),
(4, 'Loshan Ranjeewa', 'ranjeewa.loshan@hnb.lk', '$2y$10$YkiYrbEyclpq/sFGKNNUIu1CEYS/CO0sRwoX1lrf2mOZVsDxfOrjK', 'Male'),
(5, 'Vishva', 'supun000001@gmail.com', '$2y$10$CZwfJG7OA5uqza48DLEZq.Qip5bLxoBC6YGDksZkBPb3e8TWDNv3W', 'Male'),
(6, 'Supun Madhawa', 'supun000002@gmail.com', '$2y$10$1O4LsifwT9o.v/HpVsS00uoVmq1/oeV88HVb5/OCpk0s8jTDGu9TW', 'Female'),
(7, 'Thilanka Harshakantha', 'thilanka.harshakantha@hnb.lk', '$2y$10$4o/iFVUjz1z7rV4dx74lIeckWxFiEF8uzOZMXx42M8VJ5Ln2GW5VC', 'Male'),
(8, 'Achala Upeksha', 'upeksha.achala@gmail.com', '$2y$10$oaWJ3uBhC8IFmFljZOZoU.G7z4DX2cDztJcV2.vQLOBKH6uRqJTFS', 'Male'),
(9, 'Nadith', 'nadith@hnb.lk', '$2y$10$X0soqAQSpJWpVIvBUyfF.OCTpM68T0cj000ca5daeE5L9K.z8RCEy', 'Male'),
(10, 'Amal', 'amalperera@gmail.com', '$2y$10$Bd2YEtFpgInxnIerWVMwP.WzYFysfWpn7JIB8VkALqqFryP/C1BD6', 'Male'),
(11, 'John', 'john@gmail.com', '$2y$10$EulxV2HG1cFSLzOOsRAgxOAM4bSsLGWeiLQZGbQd9kzS/Ymg1sOFG', 'Male');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
