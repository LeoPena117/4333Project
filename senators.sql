-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 02:18 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senators`
--

-- --------------------------------------------------------

--
-- Table structure for table `allsenators`
--

CREATE TABLE `allsenators` (
  `ID` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Party` varchar(1) NOT NULL,
  `ImgURL` varchar(500) NOT NULL,
  `Bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allsenators`
--

INSERT INTO `allsenators` (`ID`, `Name`, `Party`, `ImgURL`, `Bio`) VALUES
(1, 'Angus King', 'I', 'https://api.ballotpedia.org/v3/thumbnail/200/300/crop/best/Angus_King_official_portrait.jpg', 'Angus Stanley King Jr. is an American politician and attorney serving as the junior United States Senator from Maine since 2013. A political independent since 1993, he was the 72nd Governor of Maine from 1995 to 2003.'),
(2, 'Bernard Sanders', 'I', 'https://pbs.twimg.com/profile_images/794596124686487552/kqpbolIc_400x400.jpg', 'Bernard Sanders is an American politician serving as the junior United States Senator from Vermont since 2007.'),
(3, 'Lamar Alexander', 'R', 'http://mediad.publicbroadcasting.net/p/wpln/files/styles/x_large/public/201704/lamar_alexander_via_tn_photo_services.jpg', 'Andrew Lamar Alexander Jr. is an American politician serving as the senior United States Senator from Tennessee, a seat he has held since 2003. A member of the Republican Party, he also was the 45th governor of Tennessee from 1979 to 1987 and the 5th United States Secretary of Education from 1991 to 1993'),
(4, 'John Barrasso', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/John_Barrasso_official_portrait_112th_Congress.jpg/220px-John_Barrasso_official_portrait_112th_Congress.jpg', 'John Anthony Barrasso III is an American physician and politician serving as the junior United States Senator from Wyoming and a member of the Republican Party.'),
(5, 'Roy Blunt', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Roy_Blunt%2C_Official_Portrait%2C_112th_Congress.jpg/220px-Roy_Blunt%2C_Official_Portrait%2C_112th_Congress.jpg', 'Roy Dean Blunt is an American politician who is the junior United States Senator from Missouri, serving since 2011. A member of the Republican Party, he previously served as a member of the United States House of Representatives and as Missouri Secretary of State.'),
(6, 'John Boozman', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/John_Boozman%2C_official_portrait%2C_112th_Congress.jpg/220px-John_Boozman%2C_official_portrait%2C_112th_Congress.jpg', 'John Nichols Boozman is the senior United States Senator for Arkansas, and a member of the Republican Party. He served as the United States Representative for Arkansas\'s 3rd congressional district from 2001 to 2011. Born in Shreveport, Louisiana, he is the brother of the late state Senator Fay Boozman.'),
(7, 'Richard Burr', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Richard_Burr_official_portrait.jpg/220px-Richard_Burr_official_portrait.jpg', 'Richard Mauze Burr is an American businessman and politician who is the senior United States Senator from North Carolina, serving since 2005. A member of the Republican Party, Burr was previously a member of the United States House of Representatives.'),
(8, 'Shelley Capito', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Shelley_Moore_Capito_official_Senate_photo.jpg/220px-Shelley_Moore_Capito_official_Senate_photo.jpg', 'Shelley Wellons Moore Capito is an American politician serving as the junior United States Senator from West Virginia since 2015. A Republican, she is the daughter of three-term West Virginia governor Arch Alfred Moore Jr.'),
(9, 'Bill Cassidy', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Bill_Cassidy_official_Senate_photo.jpg/220px-Bill_Cassidy_official_Senate_photo.jpg', 'William Morgan Cassidy is an American gastroenterologist and politician who is the senior United States Senator from Louisiana, serving since 2015. A member of the Republican Party, he previously served as a member of the U.S. House of Representatives and the Louisiana State Senate'),
(10, 'Susan Collins', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Susan_Collins_official_Senate_photo.jpg/220px-Susan_Collins_official_Senate_photo.jpg', 'Susan Margaret Collins is an American politician serving as the senior United States Senator for Maine, a seat to which she was first elected in 1996. A Republican, Collins is the chair of the Senate Special Committee on Aging and is a former chair of the Senate Committee on Homeland Security and Governmental Affairs.'),
(11, 'Bob Corker', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Bobcorker.jpg/220px-Bobcorker.jpg', 'Robert Phillips Corker Jr. is an American businessman and politician serving as the junior United States Senator from Tennessee since 2007. He is the current chairman of the Senate\'s Committee on Foreign Relations. He is a member of the Republican Party.'),
(12, 'John Cornyn', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/John_Cornyn.jpg/220px-John_Cornyn.jpg', 'John Cornyn III is an American politician and lawyer serving as the senior United States Senator from Texas since 2002. He is the current Senate Majority Whip for the 115th Congress. Cornyn previously served as Chairman of the National Republican Senatorial Committee from 2007 to 2011.'),
(13, 'Tom Cotton', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Tom_Cotton_official_Senate_photo.jpg/220px-Tom_Cotton_official_Senate_photo.jpg', 'Thomas Bryant Cotton is an American politician serving as the junior United States Senator for Arkansas since January 3, 2015. He is a Republican. Cotton was born and raised in Dardanelle, Arkansas. He attended Harvard University as an undergraduate, and later returned to Harvard Law School, graduating in 2002.'),
(14, 'Mike Crapo', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Mike_Crapo_Official_Photo_110th_Congress.jpg/220px-Mike_Crapo_Official_Photo_110th_Congress.jpg', 'Michael Dean Crapo is an American politician serving as the senior United States Senator from Idaho, a seat he was first elected to in 1998. A Republican, he previously served as the U.S. Representative for Idaho\'s 2nd congressional district from 1993 to 1999.'),
(15, 'Ted Cruz', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Ted_Cruz%2C_official_portrait%2C_113th_Congress.jpg/220px-Ted_Cruz%2C_official_portrait%2C_113th_Congress.jpg', 'Rafael Edward \"Ted\" Cruz is an American politician and attorney serving as the junior United States Senator from Texas since 2013. He was a candidate for the Republican nomination for President of the United States in the 2016 election. Cruz was born in Calgary, Alberta and raised in Houston, Texas. '),
(16, 'Steve Daines', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Steve_Daines_official_Senate_portrait.jpg/220px-Steve_Daines_official_Senate_portrait.jpg', 'Steven David Daines is an American entrepreneur and politician serving as the junior United States Senator from Montana since 2015. He previously was the U.S. Representative for Montana\'s at-large congressional district from 2013 to 2015.'),
(17, 'Michael Enzi', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Mike_Enzi%2C_official_portrait%2C_111th_Congress.jpg/220px-Mike_Enzi%2C_official_portrait%2C_111th_Congress.jpg', 'Michael Bradley Enzi is an American politician serving as the senior United States Senator from Wyoming, a seat he was first elected to in 1996. He is a member of the Republican Party. Raised in Thermopolis, Wyoming, Enzi attended George Washington University and the University of Denver.'),
(18, 'Joni Ernst', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Joni_Ernst_official_photo.jpg/220px-Joni_Ernst_official_photo.jpg', 'Joni Kay Ernst is an American politician serving as the junior United States Senator for Iowa since 2015. A Republican, she served in the Iowa Senate from 2011 to 2014. She served in the Iowa Army National Guard from 1993 to 2015, retiring as a lieutenant colonel.'),
(19, 'Deb Fischer', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Deb_Fischer%2C_official_portrait%2C_115th_Congress.jpg/220px-Deb_Fischer%2C_official_portrait%2C_115th_Congress.jpg', 'Debra Strobel Fischer is an American politician serving as the senior United States Senator from Nebraska since 2013. Prior to that, she served two terms in the Nebraska Legislature, representing a rural district in the Sandhills. She is a member of the Republican Party.'),
(20, 'Jeff Flake', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Jeff_Flake_official_Senate_photo.jpg/220px-Jeff_Flake_official_Senate_photo.jpg', 'Jeffry Lane Flake is an American politician serving as the senior United States Senator from Arizona, a seat to which he was first elected in 2012. A member of the Republican Party, Flake was a member of the U.S. House of Representatives from 2001 to 2013.'),
(21, 'Cory Gardner', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Cory_Gardner_official_Senate_portrait.jpeg/220px-Cory_Gardner_official_Senate_portrait.jpeg', 'Cory Scott Gardner is an American politician serving as the junior United States Senator from Colorado since 2015. A Republican, he was the U.S. Representative for Colorado\'s 4th congressional district from 2011 to 2015 and a member of the Colorado House of Representatives from 2005 to 2011.'),
(22, 'Lindsey Graham', 'R', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0ekdFEgYjYL1FvPe9MWHyLCNk49JcnzYXeCXzzveGR6PyTAqQ', 'Lindsey Olin Graham is an American politician serving as the senior United States Senator from South Carolina, a seat he has held since 2003. He is a member of the Republican Party. A native of Central, South Carolina, Graham graduated from the University of South Carolina in 1977.'),
(23, 'Chuck Grassley', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Chuck_Grassley_official_photo_2017.jpg/220px-Chuck_Grassley_official_photo_2017.jpg', 'Charles Ernest Grassley is an American politician serving as the senior United States Senator from Iowa. Grassley was first elected to the U.S. Senate in 1980. A member of the Republican Party, Grassley previously served in the Iowa House of Representatives and in the United States House of Representatives. '),
(24, 'Orrin Hatch', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Orrin_Hatch_official_photo%2C_2015.jpg/220px-Orrin_Hatch_official_photo%2C_2015.jpg', 'Orrin Grant Hatch is an American attorney and politician serving as the senior United States Senator for Utah. Having served in the Senate since 1977, Hatch is the longest-serving Republican Senator in the history of the United States.'),
(25, 'Dean Heller', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Dean_Heller%2C_official_portrait%2C_114th_Congress.jpg/220px-Dean_Heller%2C_official_portrait%2C_114th_Congress.jpg', 'Dean Arthur Heller is an American businessman and politician serving as the senior United States Senator for Nevada. A Republican, he was appointed by Governor Brian Sandoval and then elected in 2012. He is the Dean of Nevada\'s congressional delegation.'),
(26, 'John Hoeven', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Hoeven_Official_Portrait_2014.JPG/220px-Hoeven_Official_Portrait_2014.JPG', 'John Henry Hoeven III is an American banker and politician serving as the senior United States Senator from North Dakota since 2011. A member of the Republican Party, he previously served as the 31st Governor of North Dakota from 2000 to 2010. Hoeven was elected that year to the U.S. Senate with 76.1% of the vote.'),
(27, 'Cindy Hyde-Smith', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Cindy_Hyde-Smith_official_photo.jpg/220px-Cindy_Hyde-Smith_official_photo.jpg', 'Cindy Hyde-Smith is an American politician who is the junior United States Senator from Mississippi, in office since April 2018. A member of the Republican Party, she was previously the Mississippi Commissioner of Agriculture and Commerce and a member of the Mississippi State Senate'),
(28, 'James Inhofe', 'R', 'https://www.desmogblog.com/sites/beta.desmogblog.com/files/James%20Inhofe%20copy.jpg', 'James Mountain Inhofe is an American politician serving as the senior United States Senator from Oklahoma, a seat he was first elected to in 1994. A member of the Republican Party, he chaired the U.S. Senate Committee on Environment and Public Works from 2003 to 2007 and again from 2015 until 2017.'),
(29, 'Johnny Isakson', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Johnny_Isakson_official_Senate_photo.jpg/220px-Johnny_Isakson_official_Senate_photo.jpg', 'John Hardy Isakson is an American politician serving as the senior United States Senator from Georgia, in office since 2005, and a member of the Republican Party. Previously, he represented Georgia\'s 6th Congressional district in the United States House of Representatives from 1999 to 2005.'),
(30, 'Ron Johnson', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Ron_Johnson%2C_official_portrait%2C_112th_Congress.jpg/220px-Ron_Johnson%2C_official_portrait%2C_112th_Congress.jpg', 'Ronald Johnson is an American businessman and politician serving as the senior United States Senator from Wisconsin, a seat he was first elected to in 2010. A member of the Republican Party, he previously was chief executive officer of PACUR, LLC, a polyester and plastics manufacturer.'),
(31, 'John Kennedy', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/John_Neely_Kennedy%2C_official_portrait%2C_115th_Congress_2.jpg/220px-John_Neely_Kennedy%2C_official_portrait%2C_115th_Congress_2.jpg', 'John Neely Kennedy is an American attorney and politician serving as the junior United States Senator from Louisiana since 2017. A member of the Republican Party, he previously served as Treasurer of Louisiana from 2000 to 2017. '),
(32, 'Jon Kyl', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/Jon_Kyl%2C_official_109th_Congress_photo.jpg/170px-Jon_Kyl%2C_official_109th_Congress_photo.jpg', 'Jon Llewellyn Kyl is an American politician serving as the junior United States Senator from Arizona since September 5, 2018, succeeding the late John McCain. A member of the Republican Party, he previously held Arizona\'s other seat in the U.S. Senate from January 1995 to January 2013, serving alongside McCain'),
(33, 'James Lankford', 'R', 'https://pbs.twimg.com/profile_images/824285569379352576/X9u-Ypf3_400x400.jpg', 'James Paul Lankford is an American politician serving as the junior United States Senator from Oklahoma since 2015. A member of the Republican Party, he served as the U.S. Representative for Oklahoma\'s 5th congressional district from 2011 to 2015.'),
(34, 'Mike Lee', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Mike_Lee%2C_official_portrait.jpg/220px-Mike_Lee%2C_official_portrait.jpg', 'Michael Shumway Lee is an American politician, author, and attorney who is the junior United States Senator from Utah. A libertarian-leaning Republican, Lee has served in the Senate since January 3, 2011. Born in Mesa, Arizona, Lee is a graduate of Brigham Young University.'),
(35, 'Mitch McConnell', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Mitch_McConnell_portrait_2016.jpg/220px-Mitch_McConnell_portrait_2016.jpg', 'Addison Mitchell McConnell Jr. is an American politician serving as the senior United States Senator from Kentucky and as Senate Majority Leader. McConnell is the second Kentuckian to lead his party in the Senate and is the longest-serving U.S. Senator from Kentucky in history.'),
(36, 'Jerry Moran', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Jerry_Moran%2C_109th_Congress%2C_official_portrait.jpg/220px-Jerry_Moran%2C_109th_Congress%2C_official_portrait.jpg', 'Gerald Wesley Moran is an American politician serving as the junior United States Senator from Kansas since 2011. '),
(37, 'Lisa Murkowski', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Lisa_Murkowski_official_photo.jpg/220px-Lisa_Murkowski_official_photo.jpg', 'Lisa Ann Murkowski is an American politician serving as the senior United States Senator from Alaska, having held that seat since 2002. She is a member of the Republican Party, and is the second most senior Republican woman in the Senate.'),
(38, 'Rand Paul', 'R', 'https://pbs.twimg.com/profile_images/681152691461042177/_PrgDgFA_400x400.jpg', 'Randal Howard \"Rand\" Paul is an American politician and physician serving as the junior United States Senator from Kentucky since 2011, alongside Majority Leader Mitch McConnell. He is the son of former U.S. Representative Ron Paul of Texas.'),
(39, 'David Perdue', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/David_Perdue%2C_Official_Portrait%2C_114th_Congress.jpg/220px-David_Perdue%2C_Official_Portrait%2C_114th_Congress.jpg', 'David Alfred Perdue Jr. is an American businessman and politician serving as the junior United States Senator from Georgia since 2015. He was elected in 2014 to the seat previously held by Saxby Chambliss, who retired. Perdue won the Republican primary and defeated Democratic nominee Michelle Nunn.'),
(40, 'Rob Portman', 'R', 'https://www.congress.gov/img/member/p000449_200.jpg', 'Robert Jones Portman is an American attorney, serving as the junior United States Senator for Ohio, and a Republican. Portman previously served as a U.S. Representative, the 14th United States Trade Representative, and the 35th Director of the Office of Management and Budget.'),
(41, 'James Risch', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Jim_Risch_official_portrait.jpg/220px-Jim_Risch_official_portrait.jpg', 'James Elroy Risch is an American politician serving as the junior United States Senator from Idaho since 2009. A member of the Republican Party, he previously served as Lieutenant Governor of Idaho from 2003 to 2006 and again from 2007 to 2009 and as Governor of Idaho from 2006 until 2007.'),
(42, 'Pat Roberts', 'R', 'https://pbs.twimg.com/profile_images/981951337536671744/8z6P2Eck_400x400.jpg', 'Charles Patrick Roberts is an American politician of the Republican Party serving as the senior United States Senator from Kansas, a position he has held since 1997. Roberts previously served as the Chairman of the Senate Select Committee on Intelligence.'),
(43, 'Mike Rounds', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Mike_Rounds_official_Senate_portrait.jpg/220px-Mike_Rounds_official_Senate_portrait.jpg', 'Marion Michael Rounds is an American businessman and politician serving as the junior United States Senator from South Dakota since 2015. A member of the Republican Party, he served as the 31st Governor of South Dakota from 2003 to 2011, having previously served in the South Dakota Senate from 1991 to 2001.'),
(44, 'Marco Rubio', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Senator_Rubio_official_portrait.jpg/220px-Senator_Rubio_official_portrait.jpg', 'Marco Antonio Rubio is an American politician, attorney, and the junior United States Senator for the State of Florida. A member of the Republican Party, Rubio previously served as Speaker of the Florida House of Representatives.'),
(45, 'Ben Sasse', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Ben_Sasse_official_portrait.jpg/220px-Ben_Sasse_official_portrait.jpg', 'Benjamin Eric Sasse is an American politician, author, professor, consultant, and educational administrator from the U.S. state of Nebraska. In 2014, he was elected to a seat in the U.S. Senate. Sasse is a member of the Republican Party.'),
(46, 'Tim Scott', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Tim_Scott%2C_official_portrait%2C_113th_Congress.jpg/220px-Tim_Scott%2C_official_portrait%2C_113th_Congress.jpg', 'Timothy Eugene Scott is an American businessman and politician serving as the junior United States Senator from South Carolina since 2013. Appointed by Governor Nikki Haley to replace the retiring Jim DeMint, he later won a special election in 2014 and was elected to a full term in 2016.'),
(47, 'Richard Shelby', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Richard_Shelby%2C_official_portrait%2C_112th_Congress.jpg/220px-Richard_Shelby%2C_official_portrait%2C_112th_Congress.jpg', 'Richard Craig Shelby is an American politician serving as the senior United States Senator from Alabama. First elected to the U.S. Senate in 1986, he is the Chairman of the Senate Appropriations Committee, succeeding Thad Cochran.'),
(48, 'Dan Sullivan', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Senator_Dan_Sullivan_official.jpg/220px-Senator_Dan_Sullivan_official.jpg', 'Daniel Scott Sullivan is an American politician, lawyer and member of the Republican Party serving as the junior United States Senator from Alaska since 2015.'),
(49, 'John Thune', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/John_Thune%2C_official_portrait%2C_111th_Congress.jpg/220px-John_Thune%2C_official_portrait%2C_111th_Congress.jpg', 'John Randolph Thune is an American politician serving as the senior United States Senator from South Dakota, a seat he has held since 2005. A member of the Republican Party, he previously served as the U.S. Representative for South Dakota\'s at-large congressional district from 1997 to 2003.'),
(50, 'Thom Tillis', 'R', 'https://pbs.twimg.com/profile_images/998603484999045121/gH6xOL-n_400x400.jpg', 'Thomas Roland Tillis is an American businessman and politician who is the junior United States Senator from North Carolina, serving since 2015. A member of the Republican Party, he was previously the Speaker of the North Carolina House of Representatives.'),
(51, 'Patrick Toomey', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Pat_Toomey_official_photo.jpg/220px-Pat_Toomey_official_photo.jpg', 'Patrick Joseph Toomey is an American businessman, former Wall Street banker and politician serving as the junior United States Senator for Pennsylvania, elected in 2010.'),
(52, 'Roger Wicker', 'R', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Roger_Wicker%2C_official_Congressional_photo_portrait.jpg/170px-Roger_Wicker%2C_official_Congressional_photo_portrait.jpg', 'Roger Frederick Wicker is an American attorney and politician who is the senior United States Senator from Mississippi, in office since 2007. A member of the Republican Party, Wicker previously served as a member of the United States House of Representatives and the Mississippi State Senate. '),
(53, 'Todd Young', 'R', 'https://upload.wikimedia.org/wikipedia/commons/0/0f/Senator_Todd_Young_official_portrait.jpg', 'Todd Christopher Young is an American politician serving as the junior United States Senator from Indiana since 2017. From 2011 to 2017 he was the U.S. Representative for Indiana\'s 9th congressional district. Young is a member of the Republican Party.'),
(54, 'Tammy Baldwin', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Tammy_Baldwin%2C_official_portrait%2C_113th_Congress.jpg/220px-Tammy_Baldwin%2C_official_portrait%2C_113th_Congress.jpg', 'Tammy Suzanne Green Baldwin is an American politician serving as the junior United States Senator from Wisconsin since 2013.'),
(55, 'Michael Bennet', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Michael_Bennet_Official_Photo.jpg/220px-Michael_Bennet_Official_Photo.jpg', 'Michael Farrand Bennet is an American businessman, lawyer and politician serving as the senior United States Senator from Colorado, a seat he has held since 2009. A member of the Democratic Party, he was appointed to the seat when Ken Salazar resigned to become Secretary of the Interior.'),
(56, 'Richard Blumenthal', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Richard_Blumenthal_Official_Portrait.jpg/220px-Richard_Blumenthal_Official_Portrait.jpg', 'Richard Blumenthal is an American attorney and politician who has served as a United States Senator from Connecticut since 2011. He is a member of the Democratic Party. He has been the state\'s senior senator since 2013 and is ranked as the second wealthiest member of the Senate. '),
(57, 'Cory Booker', 'D', 'https://122g2g321ipu7384u15dtr81-wpengine.netdna-ssl.com/wp-content/uploads/2016/03/THUMB_Cory-Booker.jpg', 'Cory Anthony Booker is an American politician serving as the junior United States Senator from New Jersey since 2013 and a member of the Democratic Party. The first African-American U.S. Senator from New Jersey, he was previously the 36th Mayor of Newark from 2006 to 2013.'),
(58, 'Sherrod Brown', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Sherrod_Brown_official_photo_2009.jpg/220px-Sherrod_Brown_official_photo_2009.jpg', 'Sherrod Campbell Brown is an American politician who is the senior United States Senator from Ohio, first elected in 2006. A Democrat, he previously represented Ohio\'s 13th congressional district in the United States House of Representatives.'),
(59, 'Maria Cantwell', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Maria_Cantwell%2C_official_portrait%2C_110th_Congress.jpg/220px-Maria_Cantwell%2C_official_portrait%2C_110th_Congress.jpg', 'Maria Elaine Cantwell /?kænt?w?l/ (born October 13, 1958) is the junior United States Senator from Washington, first elected in 2000. A Democrat, she previously served in the Washington House of Representatives from 1987 to 1993 and the United States House of Representatives from Washington\'s 1st congressional district from 1993 to 1995, after which she worked as an executive for RealNetworks. She is Washington\'s second female senator, after Patty Murray.'),
(60, 'Benjamin Cardin', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Ben_Cardin_official_Senate_portrait.jpg/220px-Ben_Cardin_official_Senate_portrait.jpg', 'Benjamin Louis Cardin is an American politician serving as the senior United States Senator from Maryland, first elected to that seat in 2006. A member of the Democratic Party, he previously was the U.S. Representative for Maryland\'s 3rd congressional district from 1987 to 2007.'),
(61, 'Thomas Carper', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Tom_Carper%2C_official_portrait%2C_112th_Congress.jpg/220px-Tom_Carper%2C_official_portrait%2C_112th_Congress.jpg', 'Thomas Richard Carper is an American politician serving as the senior United States Senator from Delaware, serving since 2001. A member of the Democratic Party, Carper served in the United States House of Representatives from 1983 to 1993 and was the 71st Governor of Delaware from 1993 to 2001.'),
(62, 'Robert Casey', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Bob_Casey_Jr._official_photo.jpg/1200px-Bob_Casey_Jr._official_photo.jpg', 'Robert Patrick Casey Jr. is an American attorney and politician who is currently the senior United States Senator from Pennsylvania. He previously served as Pennsylvania Auditor General from 1997 to 2005 and as Pennsylvania Treasurer from 2005 to 2007.'),
(63, 'Christopher Coons', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Chris_Coons%2C_official_portrait%2C_112th_Congress.jpg/220px-Chris_Coons%2C_official_portrait%2C_112th_Congress.jpg', 'Christopher Andrew Coons is an American politician serving as the junior United States Senator from Delaware since 2010. A member of the Democratic Party, he won a special election to succeed Ted Kaufman, who had been appointed to the seat when Joe Biden resigned to become Vice President of the United States.'),
(64, 'Catherine Masto', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Catherine_Cortez_Masto_official_portrait.jpg/220px-Catherine_Cortez_Masto_official_portrait.jpg', 'Catherine Marie Cortez Masto is an American attorney and politician serving as the junior United States Senator from Nevada since 2017. A member of the Democratic Party, she previously served as the 32nd Attorney General of Nevada.'),
(65, 'Joe Donnelly', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Joe_Donnelly%2C_official_portrait%2C_113th_Congress.jpg/220px-Joe_Donnelly%2C_official_portrait%2C_113th_Congress.jpg', 'Joseph Simon Donnelly Sr. is an American attorney and politician serving as the senior United States Senator from Indiana. A member of the Democratic Party, he was elected to the Senate in 2012. Born in Massapequa, New York, Donnelly graduated from the University of Notre Dame.'),
(66, 'Tammy Duckworth', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Tammy_Duckworth%2C_official_portrait%2C_115th_Congress.jpg/220px-Tammy_Duckworth%2C_official_portrait%2C_115th_Congress.jpg', 'Ladda Tammy Duckworth is an American politician and former U.S. Army lieutenant colonel who has served as the junior United States Senator for Illinois since 2017. A member of the Democratic Party, she represented Illinois\'s 8th district in the United States House of Representatives from 2013 to 2017.'),
(67, 'Richard Durbin', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Richard_Durbin_official_photo.jpg/220px-Richard_Durbin_official_photo.jpg', 'Richard Joseph Durbin is an American politician serving as the senior United States Senator from Illinois since 1997.'),
(68, 'Dianne Feinstein', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Dianne_Feinstein%2C_official_Senate_photo_2.jpg/220px-Dianne_Feinstein%2C_official_Senate_photo_2.jpg', 'Dianne Goldman Berman Feinstein is an American politician serving as the senior United States Senator from California, a seat she has held since 1992. A member of the Democratic Party, she previously was Mayor of San Francisco from 1978 to 1988.'),
(69, 'Kirsten Gillibrand', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Kirsten_Gillibrand%2C_official_portrait%2C_112th_Congress.jpg/220px-Kirsten_Gillibrand%2C_official_portrait%2C_112th_Congress.jpg', 'Kirsten Elizabeth Gillibrand is an American attorney and politician serving as the junior United States Senator from New York since January 2009. She previously held the position of U.S. Representative for New York\'s 20th congressional district from 2007 until her Senate appointment.'),
(70, 'Kamala Harris', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Senator_Harris_official_senate_portrait.jpg/220px-Senator_Harris_official_senate_portrait.jpg', 'Kamala Devi Harris is an American attorney, politician and a member of the Democratic Party. Harris has served as the junior United States Senator from California since 2017. She had previously served as the 32nd Attorney General of California from 2011 to 2017.'),
(71, 'Margaret Hassan', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Maggie_Hassan%2C_official_portrait%2C_115th_Congress.jpg/220px-Maggie_Hassan%2C_official_portrait%2C_115th_Congress.jpg', 'Margaret Hassan is an American politician who is the junior United States Senator from New Hampshire. A Democrat, Hassan was elected to the Senate in the 2016 election. She was the 81st Governor of New Hampshire, from 2013 to 2017.'),
(72, 'Martin Heinrich', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Martin_Heinrich%2C_official_portrait%2C_113th_Congress.jpg/220px-Martin_Heinrich%2C_official_portrait%2C_113th_Congress.jpg', 'Martin Trevor Heinrich is an American politician and businessman serving as the junior United States Senator from New Mexico since 2013. A native of Fallon, Nevada, Heinrich lived much of his adulthood in New Mexico, specifically Albuquerque, the state\'s largest city.'),
(73, 'Heidi Heitkamp', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Heidi_Heitkamp_official_portrait_113th_Congress.jpg/220px-Heidi_Heitkamp_official_portrait_113th_Congress.jpg', 'Mary Kathryn \"Heidi\" Heitkamp is an American businesswoman, lawyer and politician who has served as the junior United States Senator from North Dakota since 2013. A member of the North Dakota Democratic-Nonpartisan League Party, she is the first woman elected to the U.S. Senate from North Dakota. '),
(74, 'Mazie Hirono', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Mazie_Hirono%2C_official_portrait%2C_112th_Congress.jpg/220px-Mazie_Hirono%2C_official_portrait%2C_112th_Congress.jpg', 'Mazie Keiko Hirono is an American politician serving as the junior United States senator from Hawaii since 2013. She is a member of the Democratic Party'),
(75, 'Doug Jones', 'D', 'https://thehill.com/sites/default/files/styles/thumb_small_article/public/jonesdoug.jpg?itok=LzW_YLD7', 'Gordon Douglas Jones is an American attorney, former prosecutor and politician serving as the junior United States Senator from Alabama since 2018. A member of the Democratic Party, he previously was a United States Attorney for the Northern District of Alabama from 1997 to 2001.'),
(76, 'Tim Kaine', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Tim_Kaine%2C_official_113th_Congress_photo_portrait.jpg/220px-Tim_Kaine%2C_official_113th_Congress_photo_portrait.jpg', 'Timothy Michael Kaine is an American attorney and politician serving as the junior United States Senator from Virginia since 2013. He previously was the state\'s 38th Lieutenant Governor from 2002 to 2006 and 70th Governor from 2006 to 2010.'),
(77, 'Amy Klobuchar', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Amy_Klobuchar%2C_official_portrait%2C_113th_Congress.jpg/220px-Amy_Klobuchar%2C_official_portrait%2C_113th_Congress.jpg', 'Amy Jean Klobuchar is an American lawyer and politician who is the senior United States Senator from Minnesota, elected in 2006. A member of the Minnesota Democratic-Farmer-Labor Party, Minnesota\'s affiliate of the Democratic Party, she was previously Hennepin County Attorney.'),
(78, 'Patrick Leahy', 'D', 'https://media2.fdncms.com/sevendaysvt/imager/u/inlineslideshow/3736605/politics1-1.jpg', 'Patrick Joseph Leahy is an American politician serving as the senior United States Senator from Vermont, a seat to which he was first elected in 1974.'),
(79, 'Joe Manchin', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Senator_Manchin.jpg/220px-Senator_Manchin.jpg', 'Joseph Manchin III is an American politician serving as the senior United States Senator from West Virginia, a seat he has held since 2010. A member of the Democratic Party, he previously served as the 34th governor of West Virginia from 2005 to 2010 and the 27th secretary of state of West Virginia from 2001 to 2005.'),
(80, 'Edward Markey', 'D', 'https://cdn10.bostonmagazine.com/wp-content/uploads/sites/2/2017/09/ed-markey-1.jpg', 'Edward John Markey is an American politician serving as the junior United States Senator from Massachusetts since 2013. A member of the Democratic Party, he was the U.S. Representative for Massachusetts\'s 7th congressional district from 1976 to 2013.'),
(81, 'Claire McCaskill', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Claire_McCaskill%2C_113th_official_photo.jpg/220px-Claire_McCaskill%2C_113th_official_photo.jpg', 'Claire Conner McCaskill is an American politician who serves as the senior United States Senator from Missouri, a seat she was first elected to in 2006'),
(82, 'Robert Menendez', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Robert_Menendez_official_photo.jpg/220px-Robert_Menendez_official_photo.jpg', 'Robert Menendez is an American politician serving as the senior United States Senator from New Jersey, a seat he has held since 2006.'),
(83, 'Jeff Merkley', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Jeff_Merkley%2C_115th_official_photo.jpg/220px-Jeff_Merkley%2C_115th_official_photo.jpg', 'Jeffrey Alan Merkley is an American politician serving as the junior United States Senator from Oregon since 2009. He is a member of the Democratic Party.'),
(84, 'Christopher Murphy', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Chris_Murphy%2C_official_portrait%2C_113th_Congress.jpg/220px-Chris_Murphy%2C_official_portrait%2C_113th_Congress.jpg', 'Christopher Scott Murphy is an American politician serving as the junior United States Senator from Connecticut since 2013. A member of the Democratic Party, he previously served in the United States House of Representatives, representing Connecticut\'s 5th congressional district from 2007 to 2013.'),
(85, 'Patty Murray', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Patty_Murray%2C_official_portrait%2C_113th_Congress.jpg/220px-Patty_Murray%2C_official_portrait%2C_113th_Congress.jpg', 'Patricia Lynn Murray is an American politician serving as the senior United States Senator from Washington, a seat she was first elected to in 1992. A member of the Democratic Party, Murray is Washington State\'s first female U.S. Senator.'),
(86, 'Bill Nelson', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Bill_Nelson.jpg/220px-Bill_Nelson.jpg', 'Clarence William Nelson II is an American politician serving as the senior United States Senator from Florida. Before entering politics he served in the U.S. Army Reserve in the Vietnam War. He was first elected to the Senate in 2000.'),
(87, 'Gary Peters', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Gary_Peters%2C_official_portrait%2C_114th_Congress.jpg/220px-Gary_Peters%2C_official_portrait%2C_114th_Congress.jpg', 'Gary Charles Peters Sr. is an American politician and businessman serving as the junior United States Senator from Michigan since 2015. A member of the Democratic Party, he was the U.S. Representative for Michigan\'s 14th congressional district from 2013 until his election to the Senate.'),
(88, 'Jack Reed', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Jack_Reed_official_photo.jpg/220px-Jack_Reed_official_photo.jpg', 'John Francis Reed is an American politician serving as the senior United States Senator from Rhode Island, a seat he was first elected to in 1996. A member of the Democratic Party, he previously was the U.S. Representative for Rhode Island\'s 2nd congressional district from 1991 to 1997.'),
(89, 'Brian Schatz', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Brian_Schatz%2C_official_portrait%2C_113th_Congress_2.jpg/220px-Brian_Schatz%2C_official_portrait%2C_113th_Congress_2.jpg', 'Brian Emanuel Schatz is an American politician serving as the senior United States Senator from Hawaii since 2012. Schatz was appointed by Governor Neil Abercrombie to replace Senator Daniel Inouye after his death.'),
(90, 'Charles Schumer', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Chuck_Schumer_official_photo.jpg/220px-Chuck_Schumer_official_photo.jpg', 'Charles Ellis Schumer is an American politician serving as the senior United States Senator from New York, a seat he was first elected to in 1998. A member of the Democratic Party, he has also been the Senate Minority Leader since 2017.'),
(91, 'Jeanne Shaheen', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Jeanne_Shaheen%2C_official_Senate_photo_portrait%2C_2009.jpg/220px-Jeanne_Shaheen%2C_official_Senate_photo_portrait%2C_2009.jpg', 'Cynthia Jeanne Shaheen is the senior United States Senator from New Hampshire. A member of the Democratic Party, she is the first female U.S. Senator in New Hampshire\'s history, was the first female Governor of New Hampshire, and the first woman elected as both Governor and a U.S. Senator in American history.'),
(92, 'Tina Smith', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Tina_Smith_official_photo.jpg/220px-Tina_Smith_official_photo.jpg', 'Christine \"Tina\" Flint Smith is an American politician and former businesswoman serving as the junior United States Senator from Minnesota since 2018, filling the seat vacated by Al Franken. She is a member of the Minnesota Democratic–Farmer–Labor Party, an affiliate of the Democratic Party.'),
(93, 'Debbie Stabenow', 'D', 'https://media2.fdncms.com/metrotimes/imager/u/blog/17418396/1385545.jpg?cb=1541564428', 'Deborah Ann Greer Stabenow is an American politician who is the senior United States Senator from Michigan and a member of the Democratic Party. First elected to the Senate in 2000, she is Michigan\'s first female U.S. Senator.'),
(94, 'Jon Tester', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/JonTester.jpg/220px-JonTester.jpg', 'Jon Tester is an American politician serving as the senior United States Senator from Montana, in office since 2007. He is a member of the Democratic Party. Tester was first elected to the Senate in 2006, defeating Republican incumbent Conrad Burns in one of the closest Senate races of that year.'),
(95, 'Tom Udall', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Tom_Udall_official_photo.jpg/220px-Tom_Udall_official_photo.jpg', 'Thomas Stewart Udall is an American politician serving as the senior United States Senator from New Mexico, a seat he was first elected to in 2008.'),
(96, 'Chris Hollen', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Chris_Van_Hollen_official_portrait%2C_2010.jpg/240px-Chris_Van_Hollen_official_portrait%2C_2010.jpg', 'Christopher Van Hollen Jr. is an American politician serving as the junior United States Senator from Maryland since January 3, 2017. From 2003 to 2017, he held the position of U.S. Representative for Maryland\'s 8th congressional district. He is a member of the Democratic Party.'),
(97, 'Mark Warner', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Mark_Warner_113th_Congress_photo.jpg/220px-Mark_Warner_113th_Congress_photo.jpg', 'Mark Robert Warner is an American businessman and politician serving as the senior United States Senator from Virginia, a seat he was first elected to in 2008. He is a member of the Democratic Party and currently a Vice Chair of the Senate Democratic Caucus and the Vice Chair of the Senate Intelligence Committee.'),
(98, 'Elizabeth Warren', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/Elizabeth_Warren%2C_official_portrait%2C_114th_Congress.jpg/220px-Elizabeth_Warren%2C_official_portrait%2C_114th_Congress.jpg', 'Elizabeth Ann Warren is an American politician and academic serving as the senior United States Senator from Massachusetts, a seat she has held since 2013.'),
(99, 'Sheldon Whitehouse', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Sheldon_Whitehouse_2010.jpg/220px-Sheldon_Whitehouse_2010.jpg', 'Sheldon Whitehouse is an American lawyer and politician serving as the junior United States Senator from Rhode Island since 2007. He is a member of the Democratic Party and previously served as a United States Attorney from 1993 to 1998 and as the Attorney General of Rhode Island from 1999 to 2003.'),
(100, 'Ron Wyden', 'D', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Ron_Wyden_official_photo.jpg/220px-Ron_Wyden_official_photo.jpg', 'Ronald Lee Wyden is an American politician serving as the senior United States Senator for Oregon since 1996. A member of the Democratic Party, he previously served in the United States House of Representatives from 1981 until 1996. He is the current dean of Oregon\'s congressional delegation.');

-- --------------------------------------------------------

--
-- Table structure for table `biography`
--

CREATE TABLE `biography` (
  `ID` int(11) NOT NULL,
  `Born` varchar(128) NOT NULL,
  `Age` int(11) NOT NULL,
  `Spouse` varchar(128) NOT NULL,
  `Education` varchar(128) NOT NULL,
  `FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biography`
--

INSERT INTO `biography` (`ID`, `Born`, `Age`, `Spouse`, `Education`, `FK`) VALUES
(1, 'March 31, 1944', 74, 'Mary Herman', 'Dartmouth College (BA)\r\nUniversity of Virginia (JD)', 1),
(2, 'September 8, 1941', 77, 'Jane O\'Meara Sanders', 'University of Chicago (BA)', 2),
(3, 'July 3, 1940', 78, 'Honey Alexander', 'NYU School of Law (1965), Vanderbilt University (1962), Maryville High School', 3),
(4, 'July 21, 1952', 66, 'Bobbi Brown', 'Rensselaer Polytechnic Institute\r\nGeorgetown University (BS, MD)', 4),
(5, 'January 10, 1950', 68, 'Abigail Perlman Blunt', 'Southwest Baptist University Bookstore, Missouri State University', 5),
(6, 'December 10, 1950', 67, 'Cathy Boozman', 'Southern College of Optometry (1977), University of Arkansas (1969–1973), Northside High School', 6),
(7, 'November 30, 1955', 62, 'Brooke F. Burr', 'Wake Forest University, Richard J. Reynolds High School', 7),
(8, 'November 26, 1953', 64, 'Charles L. Capito', 'Duke University (1975), University of Virginia, Holton-Arms School', 8),
(9, 'September 28, 1957', 61, 'Laura Layden Cassidy', 'Louisiana State University (1979)', 9),
(10, 'December 7, 1952', 65, 'Thomas Daffron', 'St. Lawrence University (1975), Caribou High School', 10);

-- --------------------------------------------------------

--
-- Table structure for table `democrats`
--

CREATE TABLE `democrats` (
  `ID` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `democrats`
--

INSERT INTO `democrats` (`ID`, `Name`, `State`, `Class`) VALUES
(1, 'Tammy Baldwin', 'WI', 'Class I'),
(2, 'Michael Bennet', 'CO', 'Class III'),
(3, 'Richard Blumenthal', 'CT', 'Class III'),
(4, 'Cory Booker', 'NJ', 'Class II'),
(5, 'Sherrod Brown', 'OH', 'Class I'),
(6, 'Maria Cantwell', 'WA', 'Class I'),
(7, 'Benjamin Cardin', 'MD', 'Class I'),
(8, 'Thomas Carper', 'DE', 'Class I'),
(9, 'Robert Casey', 'PA', 'Class I'),
(10, 'Christopher Coons', 'DE', 'Class II'),
(11, 'Catherine Masto', 'NV', 'Class III'),
(12, 'Joe Donnelly', 'IN', 'Class I'),
(13, 'Tammy Duckworth', 'IL', 'Class III'),
(14, 'Richard Durbin', 'IL', 'Class II'),
(15, 'Dianne Feinstein', 'CA', 'Class I'),
(16, 'Kirsten Gillibrand', 'NY', 'Class I'),
(17, 'Kamala Harris', 'CA', 'Class III'),
(18, 'Margaret Hassan', 'NH', 'Class III'),
(19, 'Martin Heinrich', 'NM', 'Class I'),
(20, 'Heidi Heitkamp', 'ND', 'Class I'),
(21, 'Mazie Hirono', 'HI', 'Class I'),
(22, 'Doug Jones', 'AL', 'Class II'),
(23, 'Tim Kaine', 'VA', 'Class I'),
(24, 'Amy Klobuchar', 'MN', 'Class I'),
(25, 'Patrick Leahy', 'VT', 'Class III'),
(26, 'Joe Manchin', 'WV', 'Class I'),
(27, 'Edward Markey', 'MA', 'Class II'),
(28, 'Claire McCaskill', 'MO', 'Class I'),
(29, 'Robert Menendez', 'NJ', 'Class I'),
(30, 'Jeff Merkley', 'OR', 'Class II'),
(31, 'Christopher Murphy', 'CT', 'Class I'),
(32, 'Patty Murray', 'WA', 'Class III'),
(33, 'Bill Nelson', 'FL', 'Class I'),
(34, 'Gary Peters', 'MI', 'Class II'),
(35, 'Jack Reed', 'RI', 'Class II'),
(36, 'Brian Schatz', 'HI', 'Class III'),
(37, 'Charles Schumer', 'NY', 'Class III'),
(38, 'Jeanne Shaheen', 'NH', 'Class II'),
(39, 'Tina Smith', 'MN', 'Class II'),
(40, 'Debbie Stabenow', 'MI', 'Class I'),
(41, 'Jon Tester', 'MY', 'Class I'),
(42, 'Tom Udall', 'NM', 'Class II'),
(43, 'Chris Hollen', 'MD', 'Class III'),
(44, 'Mark Warner', 'VA', 'Class II'),
(45, 'Elizabeth Warren', 'MA', 'Class I'),
(46, 'Sheldon Whitehouse', 'RI', 'Class I'),
(47, 'Ron Wyden', 'OR', 'Class III');

-- --------------------------------------------------------

--
-- Table structure for table `independents`
--

CREATE TABLE `independents` (
  `ID` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `independents`
--

INSERT INTO `independents` (`ID`, `Name`, `State`, `Class`) VALUES
(1, 'Angus King', 'ME', 'Class I'),
(2, 'Bernard Sanders', 'VT', 'Class I');

-- --------------------------------------------------------

--
-- Table structure for table `not_up_for_reelection`
--

CREATE TABLE `not_up_for_reelection` (
  `ID` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Party` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `not_up_for_reelection`
--

INSERT INTO `not_up_for_reelection` (`ID`, `Name`, `State`, `Party`) VALUES
(0, 'Tammy Duckworth', 'WI', 'D'),
(1, 'Bernard Sanders', 'VT', 'I'),
(2, 'Lamar Alexander', 'TN', 'R'),
(3, 'Roy Blunt', 'MO', 'R'),
(4, 'John Boozman', 'AR', 'R'),
(5, 'Richard Burr', 'NC', 'R'),
(6, 'Shelley Capito', 'WV', 'R'),
(7, 'Bill Cassidy', 'LA', 'R'),
(8, 'Susan Collins', 'ME', 'R'),
(9, 'John Cornyn', 'TX', 'R'),
(10, 'Tom Cotton', 'AR', 'R'),
(11, 'Mike Crapo', 'ID', 'R'),
(12, 'Steve Daines', 'MT', 'R'),
(13, 'Michael Enzi', 'WY', 'R'),
(14, 'Joni Ernst', 'IA', 'R'),
(15, 'Cory Gardner', 'CO', 'R'),
(16, 'Lindsey Graham', 'SC', 'R'),
(17, 'Chuck Grassley', 'IA', 'R'),
(18, 'John Hoeven', 'ND', 'R'),
(19, 'James Inhofe', 'Ok', 'R'),
(20, 'Johnny Isakson', 'GA', 'R'),
(21, 'Ron Johnson', 'WI', 'R'),
(22, 'John Kennedy', 'LA', 'R'),
(23, 'Jon Kyl', 'AZ', 'R'),
(24, 'James Lankford', 'OK', 'R'),
(25, 'Mike Lee', 'UT', 'R'),
(26, 'Mitch McConnell', 'KY', 'R'),
(27, 'Jerry Moran', 'KS', 'R'),
(28, 'Lisa Murkowski', 'AK', 'R'),
(29, 'Rand Paul', 'KY', 'R'),
(30, 'David Perdue', 'GA', 'R'),
(31, 'Rob Portman', 'OH', 'R'),
(32, 'James Risch', 'ID', 'R'),
(33, 'Pat Roberts', 'KS', 'R'),
(34, 'Mike Rounds', 'SD', 'R'),
(35, 'Marco Rubio', 'FL', 'R'),
(36, 'Ben Sasse', 'NE', 'R'),
(37, 'Tim Scott', 'SC', 'R'),
(38, 'Richard Shelby', 'AL', 'R'),
(39, 'Dan Sullivan', 'AK', 'R'),
(40, 'John Thune', 'SD', 'R'),
(41, 'Thom Tillis', 'NC', 'R'),
(42, 'Patrick Toomey', 'PA', 'R'),
(43, 'Todd Young', 'IN', 'R'),
(44, 'Michael Bennet', 'CO', 'D'),
(45, 'Richard Blumenthal', 'CT', 'D'),
(46, 'Cory Booker', 'NJ', 'D'),
(47, 'Benjamin Cardin', 'MD', 'D'),
(48, 'Thomas Carper', 'DE', 'D'),
(49, 'Robert Casey', 'PA', 'D'),
(50, 'Christopher Coons', 'DE', 'D'),
(51, 'Catherine Masto', 'NV', 'D'),
(53, 'Richard Durbin', 'IL', 'D'),
(54, 'Kamala Harris', 'CA', 'D'),
(55, 'Margaret Hassan', 'NH', 'D'),
(56, 'Doug Jones', 'AL', 'D'),
(57, 'Patrick Leahy', 'VT', 'D'),
(58, 'Edward Markey', 'MA', 'D'),
(59, 'Robert Menendez', 'NJ', 'D'),
(60, 'Jeff Merkley', 'OR', 'D'),
(61, 'Christopher Murphy', 'CT', 'D'),
(62, 'Patty Murray', 'WI', 'D'),
(63, 'Gary Peters', 'MI', 'D'),
(64, 'Jack Reed', 'RI', 'D'),
(65, 'Brian Schatz', 'HI', 'D'),
(66, 'Charles Schumer', 'NY', 'D'),
(67, 'Jeanne Shaheen', 'NH', 'D'),
(68, 'Tom Udall', 'NM', 'D'),
(69, 'Chris Hollen', 'MD', 'D'),
(70, 'Mark Warner', 'VA', 'D'),
(71, 'Ron Wyden', 'OR', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `republicans`
--

CREATE TABLE `republicans` (
  `ID` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `republicans`
--

INSERT INTO `republicans` (`ID`, `Name`, `State`, `Class`) VALUES
(1, 'Lamar Alexander', 'TN', 'Class II'),
(2, 'John Barrasso', 'WY', 'Class I'),
(3, 'Roy Blunt', 'MO', 'Class III'),
(4, 'John Boozman', 'AR', 'Class III'),
(5, 'Richard Burr', 'NC', 'Class III'),
(6, 'Shelley Capito', 'WV', 'Class II'),
(7, 'Bill Cassidy', 'LA', 'Class II'),
(8, 'Susan Collins', 'ME', 'Class II'),
(9, 'Bob Corker', 'TN', 'Class I'),
(10, 'John Cornyn', 'TX', 'Class II'),
(11, 'Tom Cotton', 'AR', 'Class II'),
(12, 'Mike Crapo', 'ID', 'Class III'),
(13, 'Ted Cruz', 'TX', 'Class I'),
(14, 'Steve Daines', 'MT', 'Class II'),
(15, 'Michael Enzi', 'WY', 'Class II'),
(16, 'Joni Ernst', 'IA', 'Class II'),
(17, 'Deb Fischer', 'NE', 'Class I'),
(18, 'Jeff Flake', 'AZ', 'Class I'),
(19, 'Cory Gardner', 'CO', 'Class II'),
(20, 'Lindsey Graham', 'SC', 'Class II'),
(21, 'Chuck Grassley', 'IA', 'Class III'),
(22, 'Orrin Hatch', 'UT', 'Class I'),
(23, 'Dean Heller', 'NV', 'Class I'),
(24, 'John Hoeven', 'ND', 'Class III'),
(25, 'Cindy Hyde-Smith', 'MS', 'Class II'),
(26, 'James Inhofe', 'OK', 'Class II'),
(27, 'Johnny Isakson', 'GA', 'Class III'),
(28, 'Ron Johnson', 'WI', 'Class III'),
(29, 'John Kennedy', 'LA', 'Class III'),
(30, 'Jon Kyl', 'AZ', 'Class III'),
(31, 'James Lankford', 'OK', 'Class III'),
(32, 'Mike Lee', 'UT', 'Class III'),
(33, 'Mitch McConnell', 'KY', 'Class II'),
(34, 'Jerry Moran', 'KS', 'Class III'),
(35, 'Lisa Murkowski', 'AK', 'Class III'),
(36, 'Rand Paul', 'KY', 'Class III'),
(37, 'David Perdue', 'GA', 'Class II'),
(38, 'Rob Portman', 'OH', 'Class III'),
(39, 'James Risch', 'ID', 'Class II'),
(40, 'Pat Roberts', 'KS', 'Class II'),
(41, 'Mike Rounds', 'SD', 'Class II'),
(42, 'Marco Rubio', 'FL', 'Class III'),
(43, 'Ben Sasse', 'NE', 'Class II'),
(44, 'Tim Scott', 'SC', 'Class III'),
(45, 'Richard Shelby', 'AL', 'Class III'),
(46, 'Dan Sullivan', 'AK', 'Class II'),
(47, 'John Thune', 'Sd', 'Class III'),
(48, 'Thom Tillis', 'NC', 'Class II'),
(49, 'Patrick Toomey', 'PA', 'Class III'),
(50, 'Roger Wicker', 'MS', 'Class I'),
(51, 'Todd Young', 'IN', 'Class III');

-- --------------------------------------------------------

--
-- Table structure for table `upforreelection`
--

CREATE TABLE `upforreelection` (
  `ID` int(1) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `State` varchar(2) NOT NULL,
  `Party` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upforreelection`
--

INSERT INTO `upforreelection` (`ID`, `Name`, `State`, `Party`) VALUES
(1, 'Jeff Flake', 'AZ', 'R'),
(2, 'Bill Nelson', 'FL', 'D'),
(3, 'Joe Donnelly', 'IN', 'D'),
(4, 'Tina Smith', 'MN', 'D'),
(5, 'Claire McCaskill', 'MO', 'D'),
(6, 'Cindy Hyde-Smith', 'MS', 'R'),
(7, 'Jon Tester', 'MT', 'D'),
(8, 'Heidi Heitkamp', 'ND', 'D'),
(9, 'Bob Menendez', 'NJ', 'D'),
(10, 'Dean Heller', 'NV', 'R'),
(11, 'Sherrod Brown', 'OH', 'D'),
(12, 'Bob Corker', 'TN', 'R'),
(13, 'Ted Cruz', 'TX', 'R'),
(14, 'Tammy Baldwin', 'WI', 'D'),
(15, 'Joe Manchin', 'WV', 'D'),
(16, 'Dianne Feinstein', 'CA', 'D'),
(17, 'Chris Murphy', 'CT', 'D'),
(18, 'Tom Carper', 'DE', 'D'),
(19, 'Mazie Hirono', 'HI', 'D'),
(20, 'Elizabeth Warren', 'MA', 'D'),
(21, 'Ben Cardin', 'MD', 'D'),
(22, 'Angus King', 'ME', 'I'),
(23, 'Debbie Stabenow', 'MI', 'D'),
(24, 'Amy Klobuchar', 'MN', 'D'),
(25, 'Roger Wicker', 'MS', 'R'),
(26, 'Deb Fischer', 'NE', 'R'),
(27, 'Martin Heinrich', 'NM', 'D'),
(28, 'Kirsten Gillibrand', 'NY', 'D'),
(29, 'Bob Casey', 'PA', 'D'),
(30, 'Sheldon Whitehouse', 'RI', 'D'),
(31, 'Orrin Hatch', 'UT', 'R'),
(32, 'Tim Kaine', 'VA', 'D'),
(33, 'Bernie Sanders', 'VT', 'I'),
(34, 'Maria Cantwell', 'WA', 'D'),
(35, 'John Barrasso', 'WY', 'R');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allsenators`
--
ALTER TABLE `allsenators`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `biography`
--
ALTER TABLE `biography`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `democrats`
--
ALTER TABLE `democrats`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `independents`
--
ALTER TABLE `independents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `not_up_for_reelection`
--
ALTER TABLE `not_up_for_reelection`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `republicans`
--
ALTER TABLE `republicans`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `upforreelection`
--
ALTER TABLE `upforreelection`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allsenators`
--
ALTER TABLE `allsenators`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `biography`
--
ALTER TABLE `biography`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `democrats`
--
ALTER TABLE `democrats`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `independents`
--
ALTER TABLE `independents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `not_up_for_reelection`
--
ALTER TABLE `not_up_for_reelection`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `republicans`
--
ALTER TABLE `republicans`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `upforreelection`
--
ALTER TABLE `upforreelection`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
