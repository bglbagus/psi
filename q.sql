

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
 
--
-- Database: `CRUD`
--

Table structure for table `faiz`
--
 
CREATE TABLE 'faiz' (
	'Username' varchar(100) auto_increment,
	'NPM' varchar (100),
	'Namauser' varchar(100),
	'Nomertelepon' varchar(100),
	'Userpassword' varchar(100),
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;
 
--
-- Dumping data for table `faiz`
--

 
--
-- Indexes for dumped tables
--

--
-- Indexes for table `faiz`
--
ALTER TABLE `faiz`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faiz`
--
ALTER TABLE `faiz`
  MODIFY `Username` varchar(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION /