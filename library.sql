-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 11:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `acquisition`
--

CREATE TABLE `acquisition` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acquisition`
--

INSERT INTO `acquisition` (`id`, `fullname`, `username`, `email`, `password`, `pic`) VALUES
(1, 'moges kibru', 'moge12', 'moge@gmail.com', '676767', 'p.jpg'),
(2, 'addss ffa', 'sil', '8888', 'fikadu026@gmail.com', 'p.jpg'),
(3, 'ad', 'lll', '000', 'fikadu026@gmail.com', 'p.jpg'),
(4, 'll', 'sss', '0111', 'fikadu026@gmail.com', 'p.jpg'),
(5, '', 'man', 'Helloman@1', 'fikadu026@gmail.com', 'p.jpg'),
(6, 'malo', 'manew', 'ufyvjhvhj@1S', 'fikadu026@gmail.com', 'p.jpg'),
(7, 'kkkkk', 'ppp', 'fuyvhjvhhj@1S', 'fikadu026@gmail.com', 'p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `shift_day` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `contact`, `password`, `pic`, `shift_day`) VALUES
(4, 'Admin', 'admin1', 'fikadu026@gmail.com', '251972183262', 'Adminpassword@1', 'nelson.jpg', 'Saturday'),
(5, 'Admintwo', 'admintwo', 'fikadu026@gmail.com', '251972183262', 'Admintwopassword@1', 'p.jpg', 'Sunday'),
(6, 'Adminthree', 'adminthree', 'fikadu026@gmail.com', '251972183262', 'Adminthreepassword@1', 'p.jpg', 'Friday'),
(7, 'Adminfour', 'adminfour', 'fikadu026@gmail.com', '251972183262', 'Adminfourpassword@1', 'p.jpg', 'Monday'),
(8, 'Adminfive', 'adminfive', 'fikadu026@gmail.com', '251972183262', 'Adminfivepassword@1', 'p.jpg', 'Wednesday'),
(9, 'Adminsix', 'adminsix', 'fikadu026@gmail.com', '251972183262', 'Adminsixpassword@1', 'p.jpg', 'Tuesday'),
(10, 'Adminseven', 'adminseven', 'fikadu026@gmail.com', '251972183262', 'Adminsevenpassword@1', 'p.jpg', 'Thursday'),
(11, 'hey', 'lel', 'fikadu026@gmail.com', '251972183262', 'Heylelman@1@', 'p.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `edition`, `status`, `quantity`, `department`) VALUES
(1, 'Principal of electronics', 'V.K. Mehta, Rohit Mehta', '3rd', 'Available', 3, 'EEE'),
(2, 'The Complete Reference C++', 'Herbert Schildt', '4th', 'Available', 4, 'CSE'),
(3, 'Data Structure', 'Seymour Lipschutz', '4th', 'Available', 4, 'ECE'),
(4, 'Database Systems', 'Abraham Silberschatz, Henry F. Korth, S. Sudarshan', '6th Edition', 'available', 10, 'Computer Science'),
(5, 'Introduction to Algorithms', 'Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, Clifford Stein', '3rd Edition', 'available', 5, 'Computer Science'),
(6, 'Operating System Concepts', 'Abraham Silberschatz, Greg Gagne, Peter B. Galvin', '10th Edition', 'available', 8, 'Computer Science'),
(7, 'Computer Networks', 'Andrew S. Tanenbaum, David J. Wetherall', '5th Edition', 'available', 7, 'Computer Science'),
(8, 'Artificial Intelligence: A Modern Approach', 'Stuart Russell, Peter Norvig', '3rd Edition', 'available', 6, 'Computer Science'),
(9, 'Introduction to Information Technology', 'Pearson', '1st Edition', 'available', 10, 'IT'),
(10, 'Information Systems for Business', 'R. Kelly Rainer Jr., Brad Prince', '4th Edition', 'available', 5, 'IT'),
(11, 'Network Security: Private Communication in a Public World', 'Charlie Kaufman, Radia Perlman, Mike Speciner', '2nd Edition', 'available', 8, 'IT'),
(12, 'Web Development and Design Foundations with HTML5', 'Terry Felke-Morris', '9th Edition', 'available', 7, 'IT'),
(13, 'Data Structures and Algorithms in Java', 'Robert Lafore', '2nd Edition', 'available', 6, 'IT'),
(14, 'Introduction to Law', 'John Smith', '2nd Edition', 'available', 10, 'Law'),
(15, 'Criminal Law and Procedure', 'Jane Johnson', '5th Edition', 'available', 8, 'Law'),
(16, 'Contract Law', 'Michael Brown', '3rd Edition', 'available', 6, 'Law'),
(17, 'Constitutional Law', 'Sarah Davis', '4th Edition', 'available', 7, 'Law'),
(18, 'Legal Research and Writing', 'Robert Wilson', '1st Edition', 'available', 5, 'Law'),
(19, 'Microeconomics: Principles and Applications', 'John Smith', '3rd Edition', 'available', 10, 'Economics'),
(20, 'Macroeconomics: A Modern Approach', 'Jane Johnson', '5th Edition', 'available', 8, 'Economics'),
(21, 'International Economics', 'Michael Brown', '2nd Edition', 'available', 6, 'Economics'),
(22, 'Managerial Economics', 'Sarah Davis', '4th Edition', 'available', 7, 'Economics'),
(23, 'Econometrics: Methods and Applications', 'Robert Wilson', '1st Edition', 'available', 5, 'Economics'),
(24, 'Tourism: Principles, Practices, Philosophies', 'Charles Johnson', '8th Edition', 'available', 10, 'Tourism Management'),
(25, 'Destination Marketing: An Integrated Marketing Communication Approach', 'Emily Davis', '4th Edition', 'available', 8, 'Tourism Management'),
(26, 'Event Management: Principles and Practices', 'Michael Wilson', '6th Edition', 'available', 12, 'Tourism Management'),
(27, 'Sustainable Tourism: A Development Guide', 'Jessica Brown', '3rd Edition', 'available', 6, 'Tourism Management'),
(28, 'Tourism Research Methods: Integrating Theory with Practice', 'David Anderson', '5th Edition', 'available', 9, 'Tourism Management'),
(29, 'Hospitality and Tourism Marketing: Concepts and Applications', 'Sarah Johnson', '7th Edition', 'available', 11, 'Tourism Management'),
(30, 'Tourism: Concepts and Practices', 'Andrew Smith', '9th Edition', 'available', 7, 'Tourism Management'),
(31, 'Cultural Tourism: The Partnership Between Tourism and Cultural Heritage Management', 'John Davis', '2nd Edition', 'available', 10, 'Tourism Management'),
(32, 'Tourism and the Economy: Understanding the Economics of Tourism', 'Elizabeth Wilson', '4th Edition', 'available', 8, 'Tourism Management'),
(33, 'Tourism Planning: Basics, Concepts, Cases', 'Robert Johnson', '6th Edition', 'available', 9, 'Tourism Management'),
(36, 'Agricultural Economics and Farm Management', 'John A. Miranowski', '7th Edition', 'available', 12, 'AgroEconomics'),
(37, 'Principles of Agricultural Economics', 'Andrew Barkley', '3rd Edition', 'available', 5, 'AgroEconomics'),
(38, 'Economics of Agricultural Development: World Food Systems and Resource Use', 'George W. Norton', '5th Edition', 'available', 5, 'AgroEconomics'),
(39, 'Applied Agricultural Economics', 'C. Barry Goodwin', '4th Edition', 'available', 10, 'AgroEconomics'),
(40, 'Agricultural Production Economics', 'David L. Debertin', '2nd Edition', 'available', 4, 'AgroEconomics'),
(41, 'Agricultural Economics', 'H. Evan Drummond', '9th Edition', 'available', 9, 'AgroEconomics'),
(42, 'Agricultural Development and Economic Transformation: Promoting Growth with Poverty Reduction', 'Uwe Jens Nagel', '4th Edition', 'available', 8, 'AgroEconomics'),
(43, 'Farm Management', 'Ronald D. Kay', '6th Edition', 'available', 8, 'AgroEconomics'),
(44, 'Introduction to Probability and Statistics', 'William Mendenhall', '15th Edition', 'available', 10, 'Statistics'),
(45, 'Statistical Inference', 'George Casella', '3rd Edition', 'available', 8, 'Statistics'),
(46, 'Applied Regression Analysis and Generalized Linear Models', 'John Fox', '4th Edition', 'available', 12, 'Statistics'),
(47, 'Mathematical Statistics and Data Analysis', 'John Rice', '3rd Edition', 'available', 6, 'Statistics'),
(48, 'Elements of Statistical Learning', 'Trevor Hastie', '2nd Edition', 'available', 9, 'Statistics'),
(49, 'Statistical Methods for Survival Data Analysis', 'Elisa T. Lee', '4th Edition', 'available', 11, 'Statistics'),
(50, 'An Introduction to Categorical Data Analysis', 'Alan Agresti', '3rd Edition', 'available', 7, 'Statistics'),
(51, 'Bayesian Data Analysis', 'Andrew Gelman', '3rd Edition', 'available', 10, 'Statistics'),
(52, 'Applied Multivariate Statistical Analysis', 'Richard Johnson', '6th Edition', 'available', 8, 'Statistics'),
(53, 'Statistical Models: Theory and Practice', 'David Freedman', '2nd Edition', 'available', 9, 'Statistics'),
(54, 'Sport and Exercise Physiology', 'William D. McArdle', '8th Edition', 'available', 10, 'Sport Science'),
(55, 'Foundations of Sport and Exercise Psychology', 'Robert S. Weinberg', '7th Edition', 'available', 8, 'Sport Science'),
(56, 'Biomechanics in Sport: Performance Enhancement and Injury Prevention', 'Vladimir M. Zatsiorsky', '2nd Edition', 'available', 12, 'Sport Science'),
(57, 'Exercise Physiology: Theory and Application to Fitness and Performance', 'Scott K. Powers', '10th Edition', 'available', 6, 'Sport Science'),
(58, 'Sport Nutrition', 'Asker E. Jeukendrup', '2nd Edition', 'available', 9, 'Sport Science'),
(59, 'Sport and Exercise Psychology: A Canadian Perspective', 'Peter R.E. Crocker', '4th Edition', 'available', 11, 'Sport Science'),
(60, 'Introduction to Kinesiology: Studying Physical Activity', 'Shirl J. Hoffman', '5th Edition', 'available', 7, 'Sport Science'),
(61, 'Measurement and Evaluation in Human Performance', 'James R. Morrow Jr.', '5th Edition', 'available', 10, 'Sport Science'),
(62, 'Motor Learning and Control: Concepts and Applications', 'Richard A. Schmidt', '11th Edition', 'available', 8, 'Sport Science'),
(63, 'Research Methods in Biomechanics', 'Gordon Robertson', '2nd Edition', 'available', 9, 'Sport Science'),
(64, 'Introduction to Psychology', 'James W. Kalat', '11th Edition', 'available', 10, 'Psychology'),
(65, 'Abnormal Psychology', 'Ronald J. Comer', '10th Edition', 'available', 8, 'Psychology'),
(66, 'Social Psychology', 'Elliot Aronson', '9th Edition', 'available', 13, 'Psychology'),
(67, 'Cognitive Psychology: Connecting Mind, Research, and Everyday Experience', 'E. Bruce Goldstein', '5th Edition', 'available', 6, 'Psychology'),
(68, 'Developmental Psychology: Childhood and Adolescence', 'David R. Shaffer', '10th Edition', 'available', 9, 'Psychology'),
(69, 'Personality Psychology: Domains of Knowledge About Human Nature', 'Randy J. Larsen', '7th Edition', 'available', 11, 'Psychology'),
(70, 'Biological Psychology', 'James W. Kalat', '13th Edition', 'available', 7, 'Psychology'),
(71, 'Educational Psychology', 'Anita Woolfolk', '14th Edition', 'available', 10, 'Psychology'),
(72, 'Health Psychology: Biopsychosocial Interactions', 'Edward P. Sarafino', '9th Edition', 'available', 8, 'Psychology'),
(73, 'Research Methods in Psychology', 'David G. Elmes', '10th Edition', 'available', 9, 'Psychology'),
(74, 'Medical-Surgical Nursing: Assessment and Management of Clinical Problems', 'Sharon L. Lewis, Shannon Ruff Dirksen, Margaret McLean Heitkemper', '10th Edition', 'available', 10, 'Nursing'),
(75, 'Fundamentals of Nursing', 'Patricia A. Potter, Anne Griffin Perry, Patricia Stockert, Amy Hall', '10th Edition', 'available', 8, 'Nursing'),
(76, 'Pharmacology and the Nursing Process', 'Linda Lane Lilley, Shelly Rainforth Collins, Julie S. Snyder', '9th Edition', 'available', 12, 'Nursing'),
(77, 'Maternity and Women\'s Health Care', 'Deitra Leonard Lowdermilk, Shannon E. Perry, Mary Catherine Cashion, Kathryn Rhodes Alden', '11th Edition', 'available', 6, 'Nursing'),
(78, 'Nursing Diagnosis Handbook: An Evidence-Based Guide to Planning Care', 'Betty J. Ackley, Gail B. Ladwig, Mary Beth Flynn Makic', '12th Edition', 'available', 9, 'Nursing'),
(79, 'Community/Public Health Nursing: Promoting the Health of Populations', 'Mary A. Nies, Melanie McEwen', '8th Edition', 'available', 11, 'Nursing'),
(80, 'Pediatric Nursing: The Critical Components of Nursing Care', 'Kathryn L. McCance, Sue E. Huether, Valentina L. Brashers', '2nd Edition', 'available', 7, 'Nursing'),
(81, 'Psychiatric-Mental Health Nursing: From Suffering to Hope', 'Mertie L. Potter, Mary D. Moller', '1st Edition', 'available', 10, 'Nursing'),
(82, 'Leadership and Management for Nurses: Core Competencies for Quality Care', 'Anita Finkelman', '4th Edition', 'available', 8, 'Nursing'),
(83, 'Evidence-Based Practice in Nursing & Healthcare: A Guide to Best Practice', 'Bernadette Mazurek Melnyk, Ellen Fineout-Overholt', '4th Edition', 'available', 9, 'Nursing'),
(84, 'Principles of Management', 'Stephen P. Robbins, Mary Coulter', '15th Edition', 'available', 10, 'Business Management'),
(85, 'Marketing Management', 'Philip Kotler, Kevin Lane Keller', '15th Edition', 'available', 8, 'Business Management'),
(86, 'Financial Management: Theory and Practice', 'Eugene F. Brigham, Michael C. Ehrhardt', '16th Edition', 'available', 12, 'Business Management'),
(87, 'Operations Management', 'Jay Heizer, Barry Render', '12th Edition', 'available', 6, 'Business Management'),
(88, 'Human Resource Management', 'Gary Dessler', '15th Edition', 'available', 9, 'Business Management'),
(89, 'Business Ethics: Ethical Decision Making and Cases', 'O.C. Ferrell, John Fraedrich, Linda Ferrell', '12th Edition', 'available', 11, 'Business Management'),
(90, 'Strategic Management: Concepts and Cases', 'Fred R. David, Forest R. David', '16th Edition', 'available', 7, 'Business Management'),
(91, 'International Business: Competing in the Global Marketplace', 'Charles W.L. Hill, G. Tomas M. Hult', '12th Edition', 'available', 10, 'Business Management'),
(92, 'Entrepreneurship: Successfully Launching New Ventures', 'Bruce R. Barringer, R. Duane Ireland', '6th Edition', 'available', 8, 'Business Management'),
(93, 'Organizational Behavior', 'Stephen P. Robbins, Timothy A. Judge', '18th Edition', 'available', 9, 'Business Management'),
(94, 'Biology: Concepts and Connections', 'Neil A. Campbell, Jane B. Reece, Martha R. Taylor, Eric J. Simon, Jean L. Dickey', '9th Edition', 'available', 9, 'Biology'),
(95, 'Campbell Biology', 'Lisa A. Urry, Michael L. Cain, Steven A. Wasserman, Peter V. Minorsky, Jane B. Reece', '11th Edition', 'available', 10, 'Biology'),
(96, 'Molecular Biology of the Cell', 'Bruce Alberts, Alexander Johnson, Julian Lewis, David Morgan, Martin Raff, Keith Roberts, Peter Walt', '6th Edition', 'available', 10, 'Biology'),
(97, 'Essential Cell Biology', 'Bruce Alberts, Dennis Bray, Karen Hopkin, Alexander D. Johnson, Julian Lewis, Martin Raff, Keith Rob', '4th Edition', 'available', 10, 'Biology'),
(98, 'Genetics: A Conceptual Approach', 'Benjamin A. Pierce', '6th Edition', 'available', 10, 'Biology'),
(99, 'Ecology: Concepts and Applications', 'Manuel C. Molles Jr.', '8th Edition', 'available', 10, 'Biology'),
(100, 'Microbiology: An Introduction', 'Gerard J. Tortora, Berdell R. Funke, Christine L. Case', '13th Edition', 'available', 10, 'Biology'),
(101, 'Anatomy & Physiology: The Unity of Form and Function', 'Kenneth S. Saladin', '8th Edition', 'available', 10, 'Biology'),
(102, 'Evolutionary Analysis', 'Jon C. Herron, Scott Freeman', '5th Edition', 'available', 10, 'Biology'),
(103, 'Cell and Molecular Biology: Concepts and Experiments', 'Gerald Karp', '8th Edition', 'available', 10, 'Biology'),
(104, 'University Physics with Modern Physics', 'Hugh D. Young, Roger A. Freedman', '15th Edition', 'available', 10, 'Physics'),
(105, 'Fundamentals of Physics', 'David Halliday, Robert Resnick, Jearl Walker', '11th Edition', 'available', 10, 'Physics'),
(106, 'Introduction to Quantum Mechanics', 'David J. Griffiths', '3rd Edition', 'available', 10, 'Physics'),
(107, 'Classical Mechanics', 'John R. Taylor', '1st Edition', 'available', 10, 'Physics'),
(108, 'Modern Physics for Scientists and Engineers', 'John Taylor, Chris Zafiratos, Michael A. Dubson', '2nd Edition', 'available', 10, 'Physics'),
(109, 'Electromagnetism', 'John C. Slater, Nathaniel H. Frank', '1st Edition', 'available', 10, 'Physics'),
(110, 'Thermal Physics', 'Charles Kittel, Herbert Kroemer', '2nd Edition', 'available', 10, 'Physics'),
(111, 'Introduction to Solid State Physics', 'Charles Kittel', '8th Edition', 'available', 10, 'Physics'),
(112, 'Nuclear Physics: Principles and Applications', 'John Lilley', '1st Edition', 'available', 10, 'Physics'),
(113, 'ddd', 'ddd', '3d', 'available', 8, 'cs'),
(114, 'ddd', 'ddd', '3d', 'available', 8, 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `cata`
--

CREATE TABLE `cata` (
  `book_name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image_file` varchar(500) NOT NULL,
  `pdf_file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cata`
--

INSERT INTO `cata` (`book_name`, `author`, `image_file`, `pdf_file`) VALUES
('Ke Admas Bashager', 'Bealu Girma', 'admas.jpg', 'admas.pdf'),
('A Life In A Science', 'Mickael', 'alife.jpg', 'alife.pdf'),
('C++', 'Bjarne', 'c++.jpg', 'c++.pdf'),
('Effect Modern C++', 'Scott Meyers', 'effective.jpg', 'effective.pdf'),
('Eyeta', 'Eyob Mamo', 'eyeta.jpg', 'eyeta.pdf'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Yemaleda Dibab', 'Bewqetu Siyum', 'yemaleda.jpg', 'yemaleda.pdf'),
('The Future Of An Illusion', 'Sigmund Frud', 'thefuture.jpg', 'thefuture.pdf'),
('', '', '', ''),
('Osho', 'Zelalem', 'osho.jpg', 'osho.pdf'),
('Long Walk To Freedom', 'Nelson Mandela', 'nelson.jpg', 'nelson.pdf'),
('Lewt', 'Bedru Hussen', 'lewt.jpg', 'lewt.pdf'),
('helo', 'wer', 'thefuture.jpg', 'thefuture.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `returned` varchar(100) NOT NULL,
  `day` int(50) NOT NULL,
  `fine` double NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`username`, `bid`, `returned`, `day`, `fine`, `status`) VALUES
('abe', 38, '2023-05-16', 3, 30, 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `return` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`username`, `bid`, `name`, `approve`, `issue`, `return`) VALUES
('abe', 38, 'economics', 'EXPIRED', '2023-5-9', '2023-5-13'),
('abe', 94, 'biology', 'yes', '2023-5-6', '2023-5-19'),
('abe', 43, 'Farm management', 'yes', '2023-5-16', '2023-5-18'),
('abe', 40, 'agri', 'yes', '2023-5-16', '2023-5-19'),
('abe', 88, 'al', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `snder` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `username`, `message`, `status`, `snder`) VALUES
(1, 'abe', 'hello', 'no', 'student'),
(2, 'abe', 'hello', 'no', 'student'),
(3, 'hey', 'lol', 'no', 'admin'),
(4, 'abe', 'ok', 'no', 'student'),
(5, 'abe', 'lal', 'no', 'admin'),
(6, 'abe', 'ok', 'no', 'student'),
(7, 'abe', 'hey', 'no', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `count` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `title`, `author`, `details`, `status`, `count`) VALUES
(2, 'armagedon', 'lealem', 'its a special book', 'yes', 'yes'),
(3, 'armagedon', 'lealem', 'its a special book', 'yes', 'yes'),
(4, 'armagedon', 'lealem', 'its a special book', '', 'yes'),
(5, 'armagedon', 'lealem', 'its a special book', '', 'yes'),
(6, 'armagedon', 'lealem', 'its a special book', '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `roll` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `username`, `roll`, `email`, `contact`, `password`, `status`, `pic`) VALUES
('abebe', 'abe', 132, 'haymilittle@gmail.com', '251972183262', 'Abebekebede@1', 1, 'c++.jpg'),
('dd', 'ff', 423, 'haymilittle@gmail.com', '251972183262', '888888', 1, 'images (3).jpeg'),
('lula lili lula', 'Sil_123', 333, 'haymilittle@gmail.com', '251972183262', 'D23@hdgjjk,', 1, 'p.jpg'),
('lula lili lula', 'zzz', 123, 'sil@gmail.com', '251972183262', 'Gagsf@1js', 1, 'p.jpg'),
('lula lili lula', 'xxxx', 132, 'fikadu026@gmail.com', '251972183262', 'FDerssy@1n', 1, 'p.jpg'),
('lula lili lula', 'sss', 132, 'fikadu026@gmail.com', '251972183262', 'Fayhfgvdq@1', 1, 'p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `username` varchar(255) NOT NULL,
  `otp` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`username`, `otp`, `date`) VALUES
('abe', '36621', '2023-05-14'),
('ff', '18482', '2023-05-14'),
('Sil_123', '59830', '2023-05-14'),
('kkkkk', '89040', '2023-05-14'),
('zzz', '36639', '2023-05-14'),
('xxxx', '33333', '2023-05-14'),
('sss', '16939', '2023-05-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acquisition`
--
ALTER TABLE `acquisition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acquisition`
--
ALTER TABLE `acquisition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
