-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 06:09 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articles_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_username` varchar(200) NOT NULL,
  `p_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_username`, `p_password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `user_id`, `created_at`, `image_path`) VALUES
(1, 'Test blog', 'The topic of blogging seems to come up a lot in our social media training workshops. The benefits of a quality blog are obvious – fresh content is good for your readers and your rankings. Blogs are easy to set up and even easier to update. We often tell people that if they can use Microsoft Word… they can update a blog. As easy as they are to set up, they can be difficult to maintain. A \r\ngood blog is filled with relevant, timely content that is updated on a regular basis. New bloggers often start out with a bang but then fizzle out when they realize that creating content can be challenging.\r\nuw sjdh jhdh sjyd sjdyg sdjhg skdjhg', 102, NULL, NULL),
(2, 'Optimization Algorithms in Deep Learning', '1. Why do we need better optimization Algorithms?\r\nTo train a neural network model, we must define a loss function in order to measure the difference between our model predictions and the label that we want to predict. What we are looking for is a certain set of weights, with which the neural network can make an accurate prediction, which automatically leads to a lower value of the loss function.\r\nI think you must know by now, that the mathematical method behind it is called gradient descent.\r\n\r\nEq. 1 Gradient Descent for parameters ? with loss function L.\r\nIn this technique (Eq.1), we must calculate the gradient of the loss function L with respect to the weights (or parameters ?) that we want to improve. Subsequently, the weights/parameters are updated in the direction of the negative direction of the gradient.\r\nBy periodically applying the gradient descent to the weights, we will eventually arrive at the optimal weights that minimize the loss function and allow the neural network to make better predictions.\r\nSo far the theory.\r\nDo not get me wrong, gradient descent is still a powerful technique. In practice, however, this technique may encounter certain problems during training that can slow down the learning process or, in the worst case, even prevent the algorithm from finding the optimal weights', 101, '2019-08-31 19:59:37', 'http://localhost/articles_ci/ci/uploads/20170505_131942.jpg'),
(3, 'Classy Image Recognition', 'Pipelining becomes much clearer with a concrete example. Lets discuss how we might build the backend of an example application. Our example app is Classy, a mobile app that classifies images. This application allows a user to select one or more images and it determines the class of each image. It also allows the user to enter one or more urls to get classifications for images from the web. We are targeting users with older phones and limited mobile bandwidth, so the majority of our computation must be done on the server side. We are going to architect (and pipeline!) the server components of Classy.\r\n\r\nFor classification, we will use an implementation of the venerable VGG model (a convolutional classification model that won the ImageNet competition a few years back). We might start by deploying the VGG model with a GraphPipe server. Normally VGG accepts images as a 224x224x3 array of floating point values. Additionally it expects the image to be preprocessed by being put in BGR order (instead of the normal RGB), and for each channel to be normalized by subtracting a constant value that is the average value for that channel across the entire ImageNet data set.', 102, '2019-09-11 05:30:03', 'http://localhost/articles_ci/ci/uploads/5dc.png'),
(4, 'The Art of Effective Visualization of Multi-dimensional Data', 'Descriptive Analytics is one of the core components of any analysis life-cycle pertaining to a data science project or even specific research. Data aggregation, summarization and visualization are some of the main pillars supporting this area of data analysis. Since the days of traditional Business Intelligence to even in this age of Artificial Intelligence, Data Visualization has been a powerful tool and has been widely adopted by organizations owing to its effectiveness in abstracting out the right information, understanding and interpreting results clearly and easily. However, dealing with multi-dimensional datasets with typically more than two attributes start causing problems, since our medium of data analysis and communication is typically restricted to two dimensions. In this article, we will explore some effective strategies of visualizing data in multiple dimensions (ranging from 1-D up to 6-D).\r\nMotivation\r\n“A picture is worth a thousand words”\r\nThis is a very popular English idiom we are all familiar with and should serve as enough inspiration and motivation for us to understand and leverage data visualization as as effective tool in our analysis. Always remember that “Effective data visualization is both an art as well as a science”. Before we begin, I would also like to mention the following quote which is really relevant and reinforces the necessity of data visualization.\r\n“The greatest value of a picture is when it forces us to notice what we never expected to see.”', 101, NULL, NULL),
(5, 'The Era of Python', 'One of the most interesting things about python is that it is actually a single person’s work. Most of the other popular programming languages are developed and published by large companies employing lots of professionals. Python is an exception!\r\n\"Python is fast enough for our site and allow us to produce maintainable features in record time, with a minimum of developer\". \r\nOf course, he did not develop and evolve all the components of python by himself. It is an Open source project and thousands of people have contributed to the development of the Python. Although python has evolved a lot over the years, it is still widely used for the same purposes it was back then.\r\nhe main intention of developing python was to help programmers write clear, logical codes for small and large scale projects. This is the reason it became so popular among developers. Python is so versatile, it is used in Web development, Gaming, building scripts and GUI for desktop applications, configuring servers, performing scientific calculations and data analysis.\r\nPython can be used for literally everything!', 101, '2019-09-11 10:12:13', 'http://localhost/articles_ci/ci/uploads/2015-04-06-1428346418-7067059-SmartCityInternetofThings.jpg'),
(6, 'Architecting a Machine Learning Pipeline', 'AI systems are moving from development and testing into production. At their heart, AI systems are simply computation and therefore deploying a system remotely provides remote computation. If this system involves multiple steps of computation, there are many advantages to be gained by providing this computation as composable chunks that can be combined.\r\n\r\nI’m describing a concept that is usually called a pipeline. You package each bit of computation into a component. Then you send data through multiple components in sequence. Pipelines can be a very valuable deployment tool. They allow us to reuse bits of computation and make our architecture more flexible, allowing us to respond to new demands with agility.\r\n\r\nThis post is divided into two parts. The first (which you are reading now) explains ways to architect Machine Learning pipelines with a concrete example. The second part dives into all the glorious details of implementing the different architectures with GraphPipe, including an implementation of the real-world example.', 101, '2019-09-11 10:20:53', 'http://localhost/articles_ci/ci/uploads/download.jpg'),
(8, 'Expt 4 : Tree, BST and Operation', 'fedfh', 109, '2019-10-23 10:25:39', 'http://localhost/articles_ci/ci/uploads/A11.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `post_id`, `comment`, `date_added`) VALUES
(7, 101, 9, 'Hey buddy nice blog..', '2019-10-19 07:22:20'),
(8, 101, 8, 'It\'s nice blog for referrence..', '2019-10-19 07:38:41'),
(9, 101, 9, 'Are answering my question..', '2019-10-19 07:40:08'),
(10, 102, 9, 'Yeah sure i\'m ready to answer you..', '2019-10-19 08:59:04'),
(11, 101, 6, 'Nice Article for MI Reference ... ', '2019-10-22 07:44:28'),
(12, 102, 6, 'Yeah it\'s useful blog for MI developers thak you:)\r\n', '2019-10-22 08:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `First_name` varchar(200) NOT NULL,
  `Last_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Username`, `Password`, `First_name`, `Last_name`) VALUES
(1, 'prajakta', 'prajakta', '', ''),
(2, 'muskan', 'muskan', '', ''),
(3, 'shreeya', 'shreeya', '', ''),
(4, 'ashwini', 'ashwini', '', ''),
(5, 'sonali', 'sonali', '', ''),
(6, 'priyanka', 'priyanka', '', ''),
(7, 'vaishnavi', 'vaishnavi', '', ''),
(8, 'muskan1', 'muskan1', '', ''),
(9, 'prajakta', 'prajakta', 'prajaktaagale', 'prajakta'),
(10, 'prajakta', 'prajakta', 'prajaktaagale', 'prajakta'),
(11, 'prajakta', 'prajakta', 'prajaktaagale', 'prajakta'),
(12, 'ashu', 'ashu', 'ashu', 'ashu');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `uname` varchar(500) NOT NULL,
  `user_type` enum('admin','author','user') NOT NULL,
  `password` varchar(500) NOT NULL,
  `confirm_pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `uname`, `user_type`, `password`, `confirm_pass`) VALUES
('Abc aaa', 'aaa@gmail.com', 'aaa', 'user', 'aaa', 'aaa'),
('Swati Bamble', 'swatibamble@gmail.com', 'Swati_bb', 'user', 'swati@123', 'swati@123'),
('Anisha Gharat', 'anishagharat@gmail.com', 'anish@', 'user', 'anish@123', 'anish@123'),
('Leena Shinde', 'leenas@gmail.com', 'leen@', 'user', 'leena@123', 'leena@123'),
('Tejal', 'teju.wagh@spit.ac.in', 'swa', 'user', 'swati', 'swati');

-- --------------------------------------------------------

--
-- Table structure for table `scope`
--

CREATE TABLE `scope` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `body` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scope`
--

INSERT INTO `scope` (`id`, `title`, `body`) VALUES
(1, 'Machine Learning.', 'ML is a part of AL or a branch of AL .now a day ML is become a more crucial domain for developing automation application. '),
(2, 'Artificial Intelligence ', 'AI is worst domain of study Computer science. We can make application intelligent by using AL. and develop robotics in many applications. so that it lead to reduce human work.'),
(3, 'Artificial Intelligence ', 'AI is worst domain of study Computer science. We can make application intelligent by using AL. and develop robotics in many applications. so that it lead to reduce human work.'),
(4, 'AL', '\'AI is worst domain of study Computer science. We can make application intelligent by using AL. and develop robotics in many applications. so that it lead to reduce human work'),
(5, 'AL', '\'AI is worst domain of study Computer science. We can make application intelligent by using AL. and develop robotics in many applications. so that it lead to reduce human work'),
(6, 'Artificial Intelligence', 'AI is worst domain of study Computer science. We can make application intelligent by using AL. and develop robotics in many applications. so that it lead to reduce human work.'),
(7, 'Expt 3 Traversal of Graph using BFS and DFS', '<li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Logout\">\r\n          <h5><?= anchor(\'login/logout\', \'Logout\', \'class=\"nav-link\"\')?></h5>\r\n            <span class=\"nav-link-text\"></span>\r\n      </li>'),
(8, 'Expt 4 : Tree, BST and Operation', ''),
(9, 'fhkdhflk', 'bnm,,nbvghj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `pword` varchar(255) DEFAULT NULL,
  `user_type` enum('admin','author','user') NOT NULL,
  `block_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pword`, `user_type`, `block_status`) VALUES
(101, 'admin', 'admin', 'admin', 0),
(102, 'aaa', 'aaa', 'user', 0),
(103, 'Swati_bb', 'swati@123', 'user', 0),
(107, 'anish@', 'anish@123', 'user', 0),
(108, 'leen@', 'leena@123', 'user', 0),
(109, 'swa', 'swati', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `comment_id` (`comment_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scope`
--
ALTER TABLE `scope`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `scope`
--
ALTER TABLE `scope`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
