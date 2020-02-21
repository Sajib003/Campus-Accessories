-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 09:37 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ca`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'SAJIB', '01712345678', 'sajib@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `product_key` varchar(20) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `image` varchar(300) NOT NULL,
  `details` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `catagory`, `product_key`, `pname`, `image`, `details`, `price`) VALUES
(17, 'Electronics', '1102', '12 digit electronic calculator', '12 digit electronic calculator.jpg', '2 Way Power Solar And Battery\r\nCheck & Crack Replay Facility\r\n12 digit support', 250),
(18, 'Electronics', '1103', 'Printer', 'Brother MFC-9140CDN.jpg', 'Model - Brother MFC-9140CDN\r\nPrinter Type - Multifunction Mono Laser\r\nFirst Page Print - 16sec (Mono) / 16sec (Colour)\r\nPrint Resolution (Pixel) - 2400 x 600dpi\r\nDuplex Print - Automatic\r\nScan Paper Size - Max. Legal', 20000),
(19, 'Electronics', '1101', 'Cc Camera', '4 in 1cc camera.jpg', 'You can see the Mobile / Laptop / PC at the 4th corner of the room. \r\nâ€¢ Audio: Two Way Audio. Talking and listening â€¢\r\nNetwork: It has its own WiFi. Apart from the Internet, you can see the IP camera within 100 feet without internet. And if you have internet, you can see from anywhere in the world.\r\nâ€¢ Night Vision: It will also show you all of the dark \r\nâ€¢ Record: It can record only when you have a memory card \r\nâ€¢ Memory Card: Supports memory card upto 64GB.\r\nâ€¢ 360 degree Rotation:', 6500),
(20, 'Electronics', '1104', 'CANON IP2772', 'CANON_IP2772.jpg', 'Brand: Canon\r\nModel: ip2772\r\nSpeed ??8.0 rpm (Black), 4.0 rpm (Color)\r\nInterface: USB 2.0\r\nPrint Resolutions: 4800 x 1200dpi\r\nPrinting speed 4 x 6 \"border less photo in 55secs\r\nConnectivity: USB 2.0\r\nPower: AC line\r\nHigh quality brand new product', 4000),
(21, 'Electronics', '1105', 'CASIO fx-100MS', 'fx100MS.jpg', 'AA-size battery\r\n300 Functions / Dot Matrix /\r\n2-Line Display / 10+2 Digits / Plastic Keys\r\nMulti-replay function , Differential calculations , Equation calculations , SOLVE function\r\n**********\r\nâ€¢ 2-line display\r\nâ€¢ Fraction calculations\r\nâ€¢ Integration calculations\r\nâ€¢ Combination and Permutation\r\nâ€¢ Statistics\r\n(STAT-data editor, Standard deviation, Normal distribution calculations, Regression analysis)\r\nâ€¢ Base-n calculations / conversions\r\nâ€¢ Logical operations\r\nâ€¢ Complex number calculations\r\nâ€¢ CALC memory\r\nâ€¢ Engineering symbol calculations\r\nâ€¢ 9 variable memories\r\nâ€¢ Comes with slide-on hard case\r\n*****Features*****\r\nFraction calculations\r\nCombination and permutation\r\nStatistics (STAT-data editor, Standard deviation, Regression analysis)\r\n9 variable memories\r\nComes with slide-on hard case', 700),
(22, 'Electronics', '1106', 'CASIO FX991ESPLUS', 'FX991ESPLUS.jpg', 'Material: LED\r\nPower Source: Battery\r\nBattery type: AAA\r\nDry Cell Battery\r\n', 1300),
(23, 'Electronics', '1107', 'Canon LiDE 120 Scanner', 'LiDE_120_Scanner.jpg', 'Canon lide 120 scanner\r\nCompact Design\r\nFlatbed Scanner\r\n3 color LED\r\nButton 4 Button (PDF, AUTOSCAN, COPY, SEND)\r\nScanning Element: CIS\r\nDimension: 250 x 370 x 40 mm\r\nWeight: 1.5 kg\r\nScanning Speed: (Color) 3.7 msec / line (300 dpi), 16.7 msec / line (2400dpi) Â¹\r\nScanning Speed: (Gray-Scale) 3.7 msec / line (300 dpi), 5.6 msec / line (2400dpi) Â¹\r\nScanning Gradation (Color) 48 bit\r\nInput -> 48/24 bit\r\nOutput Scanning Gradation (Black) 16 bit\r\nInput -> 8 bit output\r\nPaper size: A4 / Letter (216 x 297mm)\r\nOperating System Support: Windows 8 / Windows 7 / Windows XP / Windows Vista / Mac OS X v10.6.8 and later\r\nInterface: USB 2.0\r\nWarranty: 1 year', 5999),
(24, 'Official', '1201', 'Chair', 'Desk_Chair.jpg', 'High quality gas lift ,\r\nlow back nylon pp made with good quality mesh fabric,\r\nTilt and Locked mechanism,\r\nchrome base,dust cover\r\nNylon caster, nylon mixed armrest ,seat also adjustable.', 4800),
(25, 'Official', '1202', 'Canteen Chair CC 7', 'Canteen Chair CC 7.jpg', 'Uses: Especially in office, hospital, school, college, university showroom, cafe, restaurant.\r\nComfortable and good looking.\r\nColor: Wood\r\nMaterial: High-Quality Plastic\r\nChassis: Stainless Steel Tube\r\nSize: Standard\r\nMade In China', 3000),
(26, 'Official', '1203', 'Classic Chair', 'Classic_Chair.jpg', 'Solid plastic foot\r\nDesign and Color of the European Standard\r\n5 kg weight\r\nFitting chair of dining', 1480),
(27, 'Official', '1204', 'Deal File Rack', 'File_Rack.jpg', 'Deal file rack\r\nBrand new products ', 900),
(28, 'Official', '1205', 'Deli E0303 Mini Stapler', 'Deli E0303 Mini Stapler.jpg', 'Brand: Deli\r\nMini Stapler Machine\r\nNichol Plated Smooth Metal\r\nInteresting designs\r\nHigh quality\r\nColor: Pink', 100),
(29, 'Official', '1206', 'Deli E39299 Correction Pen - 2Pcs', 'Deli E39299 Correction Pen - 2Pcs.jpg', 'Product Type: Correction Pen\r\nQuantity Per Box: 2pcs\r\nBrand Name: Deli\r\nDiameter of Ball: 3.5 mm Fiber Tip\r\nBody Shape: Attractive & Three Colour Body Shape\r\nSpecial Feature: Easy to Erase and Clean\r\nLead Color: Fluorescent\r\nShelf Life: N/A\r\nQuality: Standard\r\nPackaging: Set\r\nWeight : 7ML', 220),
(30, 'Official', '1207', 'Folding Chair', 'Folding Chair.jpg', 'attractive design\r\nlong durability\r\nhigh quality polymer used for this chair\r\nOval shape design', 950),
(31, 'Official', '1208', 'Kangaroo Punch Machine', 'Punch_Machine.jpg', 'Brand: Kangaro\r\nColor: Black\r\nThere will be 1 hole\r\nInteresting designs\r\nHigh quality', 229),
(32, 'Official', '1209', 'Office Table FT-3', 'Office_Table.jpg', 'Uses: Especially in office, hospital, school, college, university.\r\nComfortable and good looking.\r\nColor: Chocolate Brown\r\nMaterial: Ply\r\nLaker\r\nSize: Standard\r\nMade In China', 18500),
(33, 'Official', '1210', 'Stapler Pin Remover', 'Stapler Pin Remover.jpg', 'Product Identifiers\r\nâ€¢ GTIN\r\n6921734902313\r\nâ€¢ BRAND\r\nDeli\r\nProduct Key Features\r\nâ€¢ Colour Ash', 199),
(34, 'Student', '1301', '70 GSM A4 Size Colored Paper - 500 Sheet', 'A4ColorPaper.jpg', 'Product Type: A4 Colored Paper\r\nSheets (Pack of One)\r\nThickness: 70 GSM\r\nQuality: Good\r\nSpecial Feature: 5 Different Colors', 419),
(35, 'Student', '1302', 'A4 Exercise Book (notebook) - Each 200 pages - 20 ', 'A4 Exercise Book (notebook) - Each 200 pages - 20 pieces.jpg', 'A4 Exercise Book (notebook)\r\n300 GSM Hard Cover with Lamination Paper\r\n61 GSM paper\r\nUseful as a lecturer of a university, school or college\r\nSuper Smooth, Hard Pigeon and Pure White', 1200),
(36, 'Student', '1303', 'Bashundhara A4 Paper 80 GSM 500 Sheets', 'Bashundhara_A4.jpg', 'Product Type: A4 Paper\r\nBrand: Bashundhara\r\nQuantity Per Box: 500 Sheets\r\nQuality: ORIGINAL Product\r\nSpecial Feature: Easy to Use\r\nCountry : Bangladesh', 300),
(37, 'Student', '1304', 'FABER CASTELL White Board Marker', 'White_Board_Marker.jpg', 'FABER CASTELL White Board Marker\r\nColor: Red, Green, Blue, Black\r\nInteresting designs\r\nHigh quality', 230),
(38, 'Student', '1305', 'Highlighter Marker Pen', 'Highlighter Marker Pen.jpg', 'Ideal for all normal & special paper\r\nSuper fluorescent water-based ink\r\nChisel tip with pocket clip on cap\r\n3 line width 1-5mm\r\nColor: Yellow\r\nquantity: 5 pcs', 225),
(39, 'Student', '1306', 'Sketch notebook', 'Sketch_notebook.jpg', 'Sketch Nootbook\r\n7.25\"X5.5\" / #\r\n0 Sheets /\r\n40 Pages (Blank Pages)\r\nCover 300gsm & Inner 180gsm\r\nHandmade Paper,\r\nBlack Spiral Bindin', 229),
(40, 'Student', '1307', 'Tracing Paper 20 Pieces', 'Tracing Paper 20 Pieces.jpg', 'A4 size\r\nUsed for drawing\r\nAmount: 20 pieces', 220),
(41, 'Official', '1211', 'File Carry Case with Zipper', 'File Kerry Case with Zipper.jpg', 'Product Type: Zipper File carry bag\r\nColour: black Yellow\r\nQuality: Good\r\nMaterial: Plastic & nylon padded\r\nEasy use to carry interview papers', 215),
(42, 'Official', '1212', 'Tipp-Ex Rapid Dry Correction Fluid', 'Tipp-Ex Rapid Dry Correction Fluid.jpg', 'White correction fluid\r\nCorrect written mistakes instantly with Tipp-ex Rapid!\r\nThis pack of 3 bottles of correction fluid is quick drying and easy to use. Simple to use - open the bottle and use the brush tip to cover the area. Tipp-ex Rapid Bottle.\r\nTipp-Ex correction fluid is high quality and quick-drying which allows to easily undo mistakes in the classroom, home or office.\r\nIt has a foam wedge applicator, for easy and precise application and coverage.\r\nThe quick-drying formula means you can carry on working over the errors almost immediately.\r\nTipp-Ex can be used for all types of paper correction\r\nPack of 3 x 20ml\r\nCountry of Origin: Malaysia \r\n', 322),
(43, 'Electronics', '1108', 'Canon G2000 Printer and Scanner', 'Canon G2000 Printer and Scanner.jpg', 'Canon G2000 Color Printer And Scanner\r\nCompact Design\r\nColor inkjet printers\r\nPrinting Resolutions: 4800x1200 (Vertical) dpi.\r\nScanning Optical Resolutions (Horizontal x Vertical): 600 x 1200 dpi * 1\r\nPaper size A4 / Letter, 8.5 \"x 11.7\" / 216 x 297 mm\r\nOperating System Support: Windows 8 / Windows 7 / Windows XP / Windows Vista / Mac OS X v10.6.8 and later\r\nUSB 2.0 Hi-Speed\r\nPrint Speed ??(Black): 8.8ppm\r\nPrint Speed ??(Color): 5 PPM\r\nPrinter Type: Double Function (Printer and Scanner)\r\nWeight: 12.7 lb (Approx. 5.8 kg)\r\nISO standard', 14800),
(44, 'Electronics', '1109', 'Casio Fx-991MS Scientific Calculator', 'Casio Fx-991MS Scientific Calculator.jpg', ' Two-line LCD display\r\n10 +2 digits\r\nPlastic buttons\r\n240 functions', 900),
(45, 'Electronics', '1110', 'Digital view DV-601A', 'Digital view DV-601A.jpg', 'Rand Digital View\r\nModel: DV-601A\r\n1/3 \"CMOS Sensor\r\n3.6mm security camera lens\r\n800TVL Resolutions\r\n20M IR Detention', 1800),
(46, 'Electronics', '1111', 'Epson L130 Single Function Inkjet', 'Epson L130 Single Function Inkjet.jpg', 'Epson L130 Single Function Inkjet Printer\r\nTechnical specification: -\r\nThe Epson L130 ink tank system printer brings quick performance with low running costs to all your personal and work projects.\r\nHigh-yield ink bottles: 4000 Prints at only Rs.320 per Black Ink Bottle (70ml) Print speed up to 8.5ipm\r\nCompact Size\r\n1-year warranty or 15,000 prints, whichever comes first.', 9500),
(47, 'Electronics', '1112', 'WIFI Pocket Photo Printer', 'WIFI Pocket Photo Printer.jpg', 'WiFi Pocket Photo Printer\r\nPrint photos from smartphone\r\nWi-Fi connectivity\r\nFree iOS and Android App Products\r\n2.1 x 3.4 \"image in 65 Sec 290 dpi resolution\r\nHold 10 Sheets of Paper\r\nLithium-polymer rechargeable battery', 10999),
(48, 'Student', '1308', '8.5 Inch Smart LCD Writing Digital Tablet for Note', '8.5 Inch Smart LCD Writing Digital Tablet for Notes.jpg', 'LCD writing tablet use the flexible liquid crystal technology to write words, patterns and graphics by pressure, \r\nYou can write or draw with gentle pressure just like writing in the paper .\r\nEasy to erase by press \"Delete\" button with extremely low power consumption ,battery working time is nearly 2 years and \r\ncan write more than 10,000 times\r\nLight weight, portable, ultra-low energy consumption and eye protection.This is one of best economic and environmental \r\nfor children to write ,draw .Not any garbage and dust are produced .Saving paper protecting environment\r\nEasy to use, easy to take: Writing and drawing on the tablet is just like writing on the paper. Sensitive LCD writing \r\nscreen ,creats lines of different thickness depends on how hard you press. Very convenient to use , and very lightweight \r\nto take', 650),
(49, 'Student', '1309', 'Dollar White Board Marker Ink', 'Dollar White Board Marker Ink.jpg', 'Dollar White Board Marker Ink\r\nOriginal Product\r\n4 piece combo pack\r\n4 colors\r\nWeight per bottle: 15 ml\r\nBrand New Products\r\n', 300),
(50, 'Student', '1310', 'Double A Paper', 'Double A Paper.jpg', 'Double A Paper\r\nA4 size\r\nOffset Paper\r\n100 pies packet\r\nBrand New Products', 350),
(51, 'Student', '1311', 'Pen with Lock Diary - Gift Set', 'Pen with Lock Diary - Gift Set.jpg', 'Pen with Lock Diary - Gift Set\r\nHigh Quality Rewarded Leaf Diary\r\nThere is a pen with\r\nInside the box, the diary can be locked inside the box\r\nAll the privacy of the diary is protected\r\nSize: 14 * 20 * 3 cms Outer Box\r\nA gift gift to a loved one', 250),
(52, 'Student', '1312', 'Sipa Paint Marker', 'Sipa Paint Marker.jpg', 'Metal body of the pen, high quality nib.\r\nFast dry after writing\r\nOil-based ink, writing smooth, waterproof, does not fade.\r\nMark your tire\'s Raised letters and mark your racing tires for identification\r\nSuitable for all types of tires and comfortably to use.\r\nquantity: 5 pc', 365);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `company` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `name`, `company`, `address`, `city`, `phone`, `Username`, `Email`, `Password`) VALUES
(7, 'Sajib', 'Sajib', 'Gopalganj', 'Dhaka', '01723456789', 'Sajib006', 's@gmail.com', 'ca592b1d7ee0c4aaebd8040c3a40c9d8'),
(8, 'Khalid', 'Khalid', 'Khulna', 'Khulna', '01425964789', 'Khalid001', 'k1@gmail.com', '66b2525420c6f3c5d33fd87cb8fa2bd0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
