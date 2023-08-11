-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 05:15 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tm`
--
CREATE DATABASE IF NOT EXISTS `tm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tm`;

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE IF NOT EXISTS `agency` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `akey` char(8) NOT NULL,
  `loginid` int(12) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `agencydp` text NOT NULL,
  `address` varchar(35) NOT NULL,
  `about` varchar(256) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `dist` varchar(20) NOT NULL,
  `ph` varchar(12) NOT NULL,
  `regno` int(10) NOT NULL,
  `arating` float NOT NULL,
  `aratecount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `akey`, `loginid`, `aname`, `agencydp`, `address`, `about`, `pin`, `dist`, `ph`, `regno`, `arating`, `aratecount`) VALUES
(14, '2d489911', 64, 'Dream travellers', 'person_4_sq.jpg', 'dream travellers, Ground Floor, Pa', 'dfdf', '651458', 'thiruvananthapuram', '9865481533', 1245, 4.4, 2),
(15, '4e01421b', 65, 'EPIC HOLIDAYS', 'man_tourist_backpack_mountains_travel_114250_3840x2160.jpg', 'EPIC HOLIDAYS, Ground Floor, Palal', 'dfd', '682046', 'kollam', '9868415651', 1246, 0, 0),
(16, '72aedfc3', 66, 'SAFARI', 'vlcsnap-2019-12-26-19h21m54s135.png', 'SAFARI, Ground Floor, Palal Towers,', 'df', '648546', 'alappuzha', '8459621557', 1247, 0, 0),
(17, 'bbf35ec6', 67, 'Marco  Polo', '2569ef3b9cbb0d2f10f005cd5820-1449085.jpg', 'NORTON, 10TH Floor, PalaLl Towers,,', 'df', '458546', 'pathanamthitta', '7548961535', 1248, 0, 0),
(18, 'da0d4a87', 68, 'redgear', 'saf1.jpg', 'first floor dtower 349,eranakulam', 'we are the king makers', '65489', 'eranakulam', '8111966294', 8055, 0, 0),
(22, 'e1241af0', 77, 'tech travel', 'user4.jpg', 'tech travel,first floor tk building', 'we are travel agency from tech travel,first floor tk building  ,\r\nopposite tv tower nemam,tvm', '654233', 'thiruvananthapuram', '9865481522', 3455, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bankkey` char(8) NOT NULL,
  `bankname` varchar(20) NOT NULL,
  `branchname` varchar(20) NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `accountholder` varchar(30) NOT NULL,
  `accno` varchar(16) NOT NULL,
  `cardno` varchar(16) NOT NULL,
  `cvv` int(3) NOT NULL,
  `expiredate` varchar(20) NOT NULL,
  `totalamount` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `cardno` (`cardno`),
  UNIQUE KEY `accno` (`accno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bankkey`, `bankname`, `branchname`, `ifsc`, `accountholder`, `accno`, `cardno`, `cvv`, `expiredate`, `totalamount`) VALUES
(1, 're65yu43', 'sbi', 'ayoor', 'sbiayo655634', 'jumbo', '453333834812342', '7560917679734334', 456, '2/2020', 3832550),
(2, '43wwrdrf', 'sbi', 'anchal', 'sbianc653634', 'adwaith', '2325487451243765', '7560917679730655', 333, '7/24', 100000000),
(3, 'ak225522', 'federalbank', 'kadakkal', 'federal2255', 'ananda krishnan', '8111966294225522', '8111966294811196', 369, '07/2030', 699977000),
(4, '435w45y6', 'sbi', 'anchal', '233', 'subin', '2325347451243765', '7860917679730655', 452, '7/22', 100000),
(5, '67wwrdrf', 'sbi', 'kadakkal', 'sbikdc653634', 'olam', '2325487451243734', '5634557679730655', 455, '7/24', 456000),
(6, '8055cs', 'sbi', 'kadakkal', 'sbikdl12345', 'jadayu', '81119662942255', '225580552255', 234, '12/2040', 90266900),
(7, 'cs8055', 'sbi', 'kadakkal', 'sbikdl5467', 'dream', '98765432198', '987654321234', 123, '12/2034', 1265200),
(8, 'test', 'test', 'test', 'test', 'test', '12345', '12345', 123, '12/21', 1126790);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `blogkey` varchar(16) NOT NULL,
  `date` date NOT NULL,
  `head` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `loginid` int(10) NOT NULL,
  `status` enum('0','1','-1') NOT NULL,
  `bimage` text NOT NULL,
  `likes` int(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blogkey`, `date`, `head`, `Category`, `place`, `content`, `loginid`, `status`, `bimage`, `likes`) VALUES
(13, 'b912752f', '2020-02-21', 'gfghjhkjhk', 'Adventure', 'erer', 'po', 64, '1', '1431610.jpg', 2),
(18, 'daffebd8', '2020-04-01', 'Fly High', 'Travel', 'Himalaya', 'Are you preparing to trek Everest Base Camp or another tea house trek in Nepal? If so, you may be looking for a comprehensive packing checklist. Packing the proper clothing, equipment, and supplies for your Everest Base Camp trek will go a long way in ensuring you have a great trekking experience. As you pack for Everest Base Camp, remember that your gear will be divided into two packs: your daypack that you will carry each day as you trek, and your duffle bag which will be carried between tea houses by porters. All extra luggage can be left at the hotel before you begin your trek. At the start of every morning, your porters will take your duffle and carry it up to the next tea house. It will be difficult or impossible to access your gear from your duffle bag until the evening when you arrive at your tea house. This means you should pack anything you may need each day during your hike in your daypack. However, to make trekking easier, you should keep your daypack as light as possible—so only carry the essentials. This includes water, snacks, camera, headlamp, poncho, extra layers, and sun protection. Everest ', 57, '0', '1431610.jpg', 1),
(19, '3ddd9459', '2020-04-01', 'Bike Taxi Travel and Floating Market Experiences in Pattaya', 'Travel', 'Pattaya', 'After flying from Singapore to Bangkok, I headed straight to Pattaya. At dawn I arrived at the hotel where we had been staying in Pattaya, and as we were having a good trip, I quickly went to bed.\n\nWhen I woke up early in the morning, Harris and Ika stepped outside to get ready. We headed straight to McDonalds. With Harris Ike, you know the heavy breakfast is going to be on. I ate the barbecue chicken in the morning.\n\nIt was on our way out after breakfast that we saw the bike taxi. As auto rides in our country, you can rely on bike taxis if there is only one in Thailand. Taxi drivers can take you to a safe place, whether it is the passenger or the passenger, even if it is late at night.\n\nHarris and Ike rode separate bike taxis, wearing helmets. The bike I was riding was a chassis. Bike taxis took us to the Gems Gallery, where we rode in and out of vehicles. A bike taxi cost us about 100 baths.\n\nAs part of the Chinese New Year, they were all decorated with red. The staff at the gallery wore a red uniform. Views of the Gems Gallery can be seen in the accompanying video. On our way out of the gallery, we saw a bus with Harris Ike''s Royalsky Holidays package tours with Malayalees.\n\nSo we boarded the bus with them to the famous floating market in Pattaya itself. On the trip, Harris was talking to Ikea Mike and entertaining everyone. Harris Ike also invited me to share his experiences.\n\nSo we finally got to the floating market. After getting off the bus in the parking lot, everyone headed to the floating market. The first time I came to the floating market with Harris Ikea and Prasanth was in the evening. In contrast, this time they had a good show with Chinese New Year.After taking our tickets for boating, we all put our hats on our heads and got into the boat. We walked in the boat through a wooden market over the water. Our boat was fitted with a motor. Traveling in sailboats is a bit better. This boat ride in the floating market really is the best evening time. When we first arrived here, the boat was gone when it was getting dark. It was a special field.\n\nThere were many tourists besides us in the floating market. Most of them were Chinese. They could see on their faces that everyone was doing well. So after the boat ride we got off the jetty and walked to the market.\n\nVariety of dining experiences starting in the back .. All the tourists who were with us were eager. Harris Ikea showed off some of the hottest Thai special items like shrubs, silkworm, grasshoppers and crocodile meat. With that, the hatred and incompetence that was on everyone''s mind was gone. Then there was a difference between male and female, so that everyone could eat it.\n\nHarris Ikea is one of those people who has become the go-to person for a tour agency boss. This time too I was able to experience it directly. If you go on tour it should be with people like this. That''s it… You can contact Harris Ike''s Royalsky Holidays for the best travel packages: 9846571800.\n\nThailand is not over, but the rest of the sights and features are next.\n', 57, '1', '18949.jpg', 1),
(20, 'd7aef26b', '2020-04-01', 'As we drove through the woods with the animals ', 'Travel', 'Marine Park Bangkok,Pattaya, Thailand', 'Marine Park Bangkok Tour with Safari World We were in Pattaya, Thailand. I mean, Harris and Ika. It was the day that Harris Ikeâ€™s tour group went back home. In the morning, they took the bus to Bangkok airport. After about two hours of travel along the Kethilan Expressway, we arrived in Bangkok. Our first entry was to the Safari Park in Bangkok. Safari Park is an area where all the animals are housed in a large man-made forest. It is home to birds and animals from all over the world. Safari World and Safari Park in Bangkok are some of the popular attractions of the region, which offer visitors the opportunity to sit in our cart and explore the artificial jungle. Tourists can park in the Safari Park with their vehicles. Tourists can still see animals in vehicles parked along the road in the park. The sight of all the birds and animals that roam like a forest is fascinating. When the safari world begins, youll find giraffes camels zebras and birds. Moving forward, it became an area of â€‹â€‹deer. A variety of deer can be found there. Lakes and ponds are made in the park for feeding animals and birds, and for bathing and drinking water. The area from the herbivores area to the meats area is closed with special wires. One such door is to keep the carnivorous animals from invading the herbivores area. The first sight was seen by lions. When we saw them, they all ate and rested. Some of them were ready for mating. After the lions area, it became a kingdom of tigers. What first impressed us was the sight of the clash between the two. The rest was focused on rest. Park watchers parked their vehicles in various places to monitor the animals. Their courage must be acknowledged. About 500 acres of forest have been converted into forests. Although it is aimed at tourism, keeping the animals in their habitat is commendable. Tourism authorities in our country need to set the example for Thai people. We can do this in a way that does not damage nature. But what about you? This is where we go. The only relief is the forest safari in Bandipur, Muthamanga and Mudumalai forest. Anyway, this trip through the jungle animals is a must for anyone coming to Thailand.', 64, '1', 'saf1.jpg', 1),
(22, '9c80b0e9', '2020-04-01', 'dfd', 'Adventure', 'ds', 'dfd', 64, '1', 'anonymous-hacker-uhd-4k-wallpaper.jpg', 0),
(23, 'be03cd13', '2020-04-01', 'Smaller than the iPhone, it features a 4K camera with a pocket', 'Tech', 'Kerala', 'For a vlogger, the most important factor is the camera itself. We have many vloggers who use DSLR to mobile phones. This is me. Depending on the size of the camera, the ease of use by those who use it. This means that the smaller the camera size, the less difficult it is to use. This time we''re going to introduce you to a baby camera that can be easily manipulated by everyone.\n\nDJI Osmo Pocket is a handheld camera with 4K - 3 axis stabilization. Though small in size, she is a tall tiger. He also transcends GoPro in video / audio quality.\n\n\nI bought this baby camera for $ 33999 from the website imastudent.com. One of the benefits of purchasing this website is that it will be available within two days of ordering.\n\nThis little camera called the DJI Osmo Pocket is smaller than a smartphone. DJI is a company that mainly produces drone cameras. One made with Ideas from Drone\nThe DJI Osmo Pocket is a handheld camera. Along with the camera comes a user manual, a data cable and a camera that can be secured with the camera. It also comes with two separate accessories for connecting with iPhones and other smart phones.\n\n\nIn order to connect to camera phones, an application called DJI Mimo phone must be installed on the phone. Then you can set the camera settings using this app. Likewise within a month of buying the camera\nMust register on the DJI osmo website through the DJI Mimo phone app. The camera will only get the warranty, including registration, in this case. So this should be done without forgetting everyone. It is best to use Class 10 memory cards in the camera. This makes it easy to copy and paste files.\n\nCamera stabilization is a good practice\nOne of the highlights of the DJI Osmo Pocket Camera. While recording the video, the camera can be rotated in many directions. This camera also captures the best possible visuals in fast motion.\n\nBeing a camera in your pocket, you can easily shoot it anywhere and in any hurry. If you are looking for vlogging or looking for a camera that is perfect for capturing videos on the go, then the DJI Osmo Pocket is definitely the choice.', 64, '1', 'Jea.jpeg', 0),
(24, '700c672b', '2020-04-01', 'Information on home-going flights can be found on the phone.', 'Tech', 'Kerala', 'Planes have long been a favorite of most of us. Most people may be surprised to see aircraft flying through the sky at such a young age. There are many among us who have always dreamed of getting on a plane. Despite this, air travel is becoming more common today.\n\nIn the past, the aircraft was astonishing and the current generation knows the details of it (model, route, airlines). Now let''s move on. Many of us can hear the sound of aircraft flying over the house. Sometimes clouds cannot even see the plane. Can you see all the flight information and direction on our phone from below?\n\nAs science grew, so did technology. The top flight information can be accessed by using a simple mobile app. That''s the name of the Flightradar 24 number. You can download this app for free from Google Playstore.\n\nNow let''s see what are the benefits of this WhatsApp. As mentioned earlier, the major advantage of this app is that it receives all the information about the airline. This app enables you to see real-time status of flights in and around the world, not just those that fly over our heads. For example, from Kochi, we can find flights in New York, Dubai, Singapore, and anywhere in the world.\n\nWhat kind of information do we get through this app? We can see the name and model of the flying aircraft, as well as where it comes from and where it goes. The app will tell you how high the aircraft is flying and when it will land. It also provides information on when to land and how to land at airports.\n\nThis app is very useful for those who love airplanes and regular flights. Similarly, if you want to know about these things, you can download and use this app for free on your phone. And then another thing. If your relatives or friends are from overseas, you can see their flight time and flight direction in real time. In short, this app can be used for a lot of fun and information like this. Anyway, Keto is the worst.', 64, '1', 'flight-radar.jpg', 1),
(26, '9f46577e', '2020-04-20', 'Beef lovers, this beef is what the beef ...', 'Food', 'Kerala', 'Beef in the dumpster. One would go to the junction with the traffic lights of the Model School in Thiruvananthapuram and find out where the pit is. A hotel with no name written on the board without the pit. A hotel with a board of manorama right next to the model school, right next to the model school, at the junction. There is an alley in the front. The Aristo Junction was overlooked because it could not cross. Essentially 5-6 two-wheelers can be parked. Perrotta and Beef said the first day they were alone. Aun and beef the second day with a friend. Beef is the star of both experiences. Beef prairie is not to be missed. The food includes nuts, papadam, sambar, avial, peanut, pickle, flavor and juices. Instead of the usual peanut curry, the Toran is made. The rest of the peanuts that morning were served at noon. The food is on the leaves. Well done. The curries inside were good. Aviel was delicious. The whole thing was finely chopped. When the beef was too heavy, they broke down. Because the beef was so light, the taste of the fish was not tested. The perota I ate at first was good. The beef fry I got at first seemed to be rough between a back and a fry. Price information: Beef Fry Ã¢â€šÂ¹ 80, Perrotta Ã¢â€šÂ¹ 8, and Ã¢â€šÂ¹ 60. Plumbers story If you go through the history of the shop, you will have to go back 65 years. The place where Sri Sivaraman Pillai started. He was first served tea at the hotel. Over the years, two or three hotels have opened up in many places. Two are near the Thampanoor railway station and one is at the Thampanoor bus stand. One in the premises of the Model School. Then came the place where it now stands. The hotel was originally a hut. You have to go down five steps to get inside. So the people named themselves. Hut. Then they dug the pits and built the present building in their own place, but the name is not gone. That s the same old barn. The family came to Thiruvananthapuram from Alappuzha - Ochira and started their life with food. At first the hotel, the backyard and the family were all together. Now the house is not with the hotel, only the hotel. Previously, there was only a hotel and a boutique called the Model Hotel. There is no model hotel now. The hut is still on its way. Sarathy as his son Sri Radhakrishnan instead of his father. The eldest son was Ramachandran Nair. After he got a job as a jailer, his elder brother Radhakrishnan took it over. It will be thirty years since Radhakrishnan Chettan took over this restaurant. The chef is a chef at the back of the taste of the beef. It will be thirty years since he came here. Not only the beef but the biryani is served here. Going to the beef camp and taking it straight. Dont buy what comes with it. Here are the daily routines - open at 7:30 p.m. Puttu, lentils, papadas behind bread, cakes and perotta are ready. At 10 pm the Veesu Perotta (which is usually done by order) will be served on Biryani at 11 am and on 12 pm. Chapati at 3 pm, idiom at 4 am, bread at 6 pm, cakes at 7 pm and rice at night. The chicken is ready at 10 am and the beef is at 11 am. You will see these till nightfall. Coconut oil and palm oil are used for cooking. Ready-made spices are not used. All the spices are prepared separately. 10 years ago everything was in the fireplace. The hotel was shitty at the time. After refurbishing, everything is done in a gas oven. Up to 35 people can be seated. There is still room to lay the table. Timings: 7:30 AM to 10:30 PM. Location: Manoramas board has been replaced by the shops name next to the alley where there is a signal light against the model school. And as it is said; Dont forget the beef lovers.', 57, '0', 'kuz1.jpg', 0),
(27, '08869169', '2020-04-20', 'You can phone, listen to this song and watch it ..', 'Tech', 'Kerala', 'Those who do not have a watch will be few today. Watches can even be a sign of some peoples status. Usually we tie the watch to watch the time. Some people have heard about the watchmaker even though it has no battery. There are a variety of watches. A wrist watch is designed to be worn with wrists. It can have either a strap or a chain tie. Similarly, a pocket watch is designed to carry a person in the pocket. But nowadays, there have been tremendous changes in watches. No need to carry a mobile phone and watch together. This is because the number of watches that make the phone call is now on the market. While searching for watches like this on Google, I came to know about LEMFO LES1. I decided to buy this watch because it is a very good review model. I ordered the watch through the website www.banggood.com. I rely on www.banggood.com because it is the fastest rate on Indian websites. It will take us at least 2 weeks to get the watch if you book from here. Until then, the watch must have been craving. The LEMFO LES1 Watch, priced at Rs 6500, has many other features besides phone calling. One of the highlights is the map. When you go somewhere, you no longer have to dial the phone to find the way. Then you can take videos with this watch. Please do not use it for camera programs. It can also be used for exercise purposes. You can find out how many kilometers you walk in a day. If you feel that you can sing while you are alone, you can do it with this watch. It also has Bluetooth, Wi-Fi and more. It also comes with 3G support which can be used on the net. Whats really impressive about this smartphone is that it can do all that a smartphone can do. With the watch in hand, I can say Im happy. Good stuff.', 57, '1', 'wat.jpg', 1),
(28, 'f1236eee', '2020-04-20', 'An off road trip from Kuttikkanam to Madamakkulam on MG Hector', 'Travel', 'Kuttikkanam,kerala', 'à´•àµà´®à´³à´¿à´¯à´¿à´²àµ‡à´•àµà´•àµà´³àµà´³ à´¯à´¾à´¤àµà´°à´¯à´¿à´²à´¾à´£àµ. à´•àµà´Ÿàµà´Ÿà´¿à´•àµà´•à´¾à´¨à´¤àµà´¤à´¿à´¨àµ à´¸à´®àµ€à´ªà´¤àµà´¤àµà´³àµà´³ à´ªà´¾à´žàµà´šà´¾à´²à´¿à´®àµ‡à´Ÿàµà´Ÿà´¿à´²àµ† à´¸à´¨àµà´¦àµ¼à´¶à´¨à´¤àµà´¤à´¿à´¨àµ à´¶àµ‡à´·à´‚ à´žà´™àµà´™àµ¾ à´ªà´¿à´¨àµà´¨àµ€à´Ÿàµ à´ªàµ‹à´¯à´¤àµ à´…à´µà´¿à´Ÿàµ†à´¯à´Ÿàµà´¤àµà´¤àµ à´¤à´¨àµà´¨àµ†à´¯àµà´³àµà´³ à´®à´¦à´¾à´®àµà´®à´•àµà´•àµà´³à´‚ à´Žà´¨àµà´¨ à´¸àµà´¥à´²à´¤àµà´¤àµ‡à´•àµà´•àµ à´†à´¯à´¿à´°àµà´¨àµà´¨àµ. à´µà´³à´°àµ† à´®à´¨àµ‹à´¹à´°à´®à´¾à´¯, à´’à´Ÿàµà´Ÿàµà´‚ à´¤à´¿à´°à´•àµà´•à´¿à´²àµà´²à´¾à´¤àµà´¤ à´’à´°àµ à´šàµ†à´±à´¿à´¯ à´µà´´à´¿à´¯à´¿à´²àµ‚à´Ÿàµ†à´¯à´¾à´¯à´¿à´°àµà´¨àµà´¨àµ à´žà´™àµà´™à´³àµà´Ÿàµ† à´¯à´¾à´¤àµà´°.\r\n\r\nà´Žà´‚à´œà´¿ à´¹àµ†à´•àµà´Ÿàµ¼ à´¤àµ»àµà´±àµ† à´•à´´à´¿à´µàµ à´¤àµ†à´³à´¿à´¯à´¿à´šàµà´šàµà´•àµŠà´£àµà´Ÿàµ à´µàµ€à´¤à´¿à´•àµà´±à´žàµà´ž, à´•àµà´¤àµà´¤à´¨àµ† à´•à´¯à´±àµà´±à´µàµà´‚ à´‡à´±à´•àµà´•à´µàµà´®àµà´³àµà´³ à´ªà´¾à´¤à´•à´³àµ† à´•àµ€à´´à´Ÿà´•àµà´•à´¿ à´¯à´¾à´¤àµà´° à´¤àµà´Ÿàµ¼à´¨àµà´¨àµ. à´…à´­à´¿à´¯àµà´‚ à´¶àµà´µàµ‡à´¤à´¯àµà´®àµ†à´²àµà´²à´¾à´‚ à´•à´¾à´±à´¿à´¨àµà´±àµ† à´¸àµºà´±àµ‚à´«à´¿à´²àµ‚à´Ÿàµ† à´¨à´¿à´¨àµà´¨àµ à´ªàµà´±à´¤àµà´¤àµ† à´•à´¾à´´àµà´šà´•àµ¾ à´†à´¸àµà´µà´¦à´¿à´•àµà´•àµà´•à´¯à´¾à´¯à´¿à´°àµà´¨àµà´¨àµ. à´’à´Ÿàµà´µà´¿àµ½ à´žà´™àµà´™àµ¾ à´•àµ†.à´•àµ†. à´±àµ‹à´¡à´¿à´²àµ‡à´•àµà´•àµ à´µàµ€à´£àµà´Ÿàµà´‚ à´•à´¯à´±à´¿.\r\n\r\nà´µà´³à´žàµà´žà´™àµà´™à´¾à´¨à´‚ à´µàµ†à´³àµà´³à´šà´¾à´Ÿàµà´Ÿà´®àµŠà´•àµà´•àµ† à´•à´´à´¿à´žàµà´žàµ à´†à´·àµâ€Œà´²à´¿ à´Žà´¸àµà´±àµà´±àµ‡à´±àµà´±à´¿à´²àµ‡à´•àµà´•àµà´³àµà´³ à´µà´´à´¿à´¯à´¿à´²àµ‡à´•àµà´•àµ à´žà´™àµà´™àµ¾ à´•à´¯à´±à´¿. à´°à´¾à´¤àµà´°à´¿ 10 à´®à´£à´¿ à´®àµà´¤àµ½ à´°à´¾à´µà´¿à´²àµ† 7 à´®à´£à´¿ à´µà´°àµ† à´Žà´¸àµà´±àµà´±àµ‡à´±àµà´±àµ à´µà´´à´¿à´¯àµà´³àµà´³ à´±àµ‹à´¡àµ à´…à´Ÿà´šàµà´šà´¿à´Ÿàµà´®àµ†à´¨àµà´¨àµà´³àµà´³ à´®àµà´¨àµà´¨à´±à´¿à´¯à´¿à´ªàµà´ªàµ à´¨àµ½à´•àµà´¨àµà´¨ à´¬àµ‹àµ¼à´¡àµ à´…à´µà´¿à´Ÿàµ‡à´•àµà´•àµ à´•à´¯à´±à´¿à´¯à´ªàµà´ªàµ‹àµ¾ à´¤à´¨àµà´¨àµ† à´žà´™àµà´™àµ¾à´•àµà´•àµ à´•à´¾à´£àµà´µà´¾àµ» à´¸à´¾à´§à´¿à´šàµà´šàµ. à´ªà´£àµà´Ÿàµ à´§à´¾à´°à´¾à´³à´‚ à´¤àµ‡à´¯à´¿à´² à´•àµƒà´·à´¿ à´šàµ†à´¯àµà´¤à´¿à´°àµà´¨àµà´¨ à´†à´·àµâ€Œà´²à´¿ à´Žà´¸àµà´±àµà´±àµ‡à´±àµà´±àµ à´‡à´ªàµà´ªàµ‹àµ¾ à´à´¤à´¾à´£àµà´Ÿàµ à´‰à´ªàµ‡à´•àµà´·à´¿à´•àµà´•à´ªàµà´ªàµ†à´Ÿàµà´Ÿ à´¨à´¿à´²à´¯à´¿à´²à´¾à´£àµ. à´Žà´™àµà´•à´¿à´²àµà´‚ à´šà´¿à´²à´¯à´¿à´Ÿà´™àµà´™à´³à´¿àµ½ à´‡à´ªàµà´ªàµ‹à´´àµà´‚ à´•àµƒà´·à´¿à´¯àµà´£àµà´Ÿàµ.\r\n\r\nà´®à´¨àµ‹à´¹à´°à´®à´¾à´¯ à´¤àµ‡à´¯à´¿à´²à´¤àµà´¤àµ‹à´Ÿàµà´Ÿà´™àµà´™àµ¾à´•àµà´•à´¿à´Ÿà´¯à´¿à´²àµ‚à´Ÿàµ†à´¯àµà´³àµà´³ à´µà´´à´¿à´¯à´¿à´²àµ‚à´Ÿàµ† à´žà´™àµà´™àµ¾ à´¸à´žàµà´šà´°à´¿à´•àµà´•àµà´µà´¾àµ» à´¤àµà´Ÿà´™àµà´™à´¿. à´•àµà´±à´šàµà´šàµ à´•à´´à´¿à´žàµà´žà´ªàµà´ªàµ‹àµ¾ à´Ÿà´¾àµ¼à´±àµ‹à´¡àµ à´’à´•àµà´•àµ† à´®à´¾à´±à´¿ à´ªà´•àµà´•à´¾ à´“à´«àµâ€Œà´±àµ‹à´¡àµ à´¤à´¨àµà´¨àµ†à´¯à´¾à´¯à´¿ à´®à´¾à´±à´¿. à´šàµ†à´±à´¿à´¯ à´•à´¾à´±àµà´•àµ¾à´•àµà´•àµ à´•à´Ÿà´¨àµà´¨àµà´ªàµ‹à´•àµà´µà´¾àµ» à´…à´²àµà´ªà´‚ à´¬àµà´¦àµà´§à´¿à´®àµà´Ÿàµà´Ÿàµ‡à´±à´¿à´¯ à´† à´±àµ‹à´¡à´¿àµ½ à´œàµ€à´ªàµà´ªàµà´•àµ¾à´•àµà´•àµ à´ªàµà´°à´¶à´¨à´®à´¿à´²àµà´²à´¾à´¤àµ† à´•à´¯à´±à´¿à´ªàµà´ªàµ‹à´•àµà´µà´¾àµ» à´¸à´¾à´§à´¿à´•àµà´•àµà´‚. à´¨à´®àµà´®àµà´Ÿàµ† à´¹àµ†à´•àµà´Ÿàµ¼ à´…à´¤àµà´¯à´¾à´µà´¶àµà´¯à´‚ à´“à´«àµà´±àµ‹à´¡àµ à´•àµˆà´•à´¾à´°àµà´¯à´‚ à´šàµ†à´¯àµà´¯à´¾àµ» à´®à´¿à´Ÿàµà´•àµà´•à´¨à´¾à´¯à´¿à´°àµà´¨àµà´¨à´¤à´¿à´¨à´¾àµ½ à´µà´²à´¿à´¯ à´•àµà´´à´ªàµà´ªà´®àµŠà´¨àµà´¨àµà´®à´¿à´²àµà´²à´¾à´¤àµ† à´žà´™àµà´™àµ¾à´•àµà´•àµ à´…à´¤àµà´µà´´à´¿ à´¸à´žàµà´šà´°à´¿à´•àµà´•àµà´µà´¾àµ» à´¸à´¾à´§à´¿à´šàµà´šàµ.\r\n\r\nà´µà´³à´°àµ† à´µà´¿à´œà´¨à´®à´¾à´¯ à´† à´ªàµà´°à´¦àµ‡à´¶à´¤àµà´¤àµ à´žà´™àµà´™àµ¾ à´†à´°àµ†à´¯àµà´‚ à´•à´£àµà´Ÿàµà´®àµà´Ÿàµà´Ÿà´¿à´¯à´¿à´²àµà´². à´†à´•àµ† à´…à´µà´¿à´Ÿà´¤àµà´¤àµ† à´¨à´¿à´¶à´¬àµà´¦à´¤à´¯àµ† à´•àµ€à´±à´¿à´®àµà´±à´¿à´šàµà´šà´¿à´°àµà´¨àµà´¨à´¤àµ à´žà´™àµà´™à´³àµà´Ÿàµ† à´•à´¾à´±à´¿à´¨àµà´±àµ† à´¶à´¬àµà´¦à´‚ à´®à´¾à´¤àµà´°à´®à´¾à´¯à´¿à´°àµà´¨àµà´¨àµ. à´ªàµ‹à´•àµà´¨àµà´¨ à´µà´´à´¿ à´’à´°à´¿à´Ÿà´¤àµà´¤àµ à´’à´°àµ à´šàµ†à´±à´¿à´¯ à´•àµà´·àµ‡à´¤àµà´°à´‚ à´•à´¾à´£àµà´µà´¾àµ» à´¸à´¾à´§à´¿à´šàµà´šàµ. à´†à´¦à´¿à´µà´¾à´¸à´¿à´•àµ¾ à´†à´°à´¾à´§à´¿à´•àµà´•àµà´¨àµà´¨ à´•àµà´·àµ‡à´¤àµà´°à´®à´¾à´¯à´¿à´°à´¿à´•àµà´•àµà´‚ à´…à´¤àµ†à´¨àµà´¨àµ à´¤àµ‹à´¨àµà´¨àµà´¨àµà´¨àµ. à´ªà´•àµà´·àµ‡ à´…à´µà´¿à´Ÿàµ†à´¯àµŠà´¨àµà´¨àµà´‚ à´†à´°àµ†à´¯àµà´‚ à´•à´£àµà´Ÿà´¿à´²àµà´²à´¤à´¾à´¨àµà´‚.\r\n\r\n\r\n\r\nà´ªàµ‹à´•à´ªàµà´ªàµ‹à´•àµ† à´µà´´à´¿à´¯àµà´Ÿàµ† à´…à´µà´¸àµà´¥ à´µà´³à´°àµ† à´¦àµàµ¼à´˜à´Ÿà´®à´¾à´¯à´¿ à´®à´¾à´±à´¿à´¤àµà´¤àµà´Ÿà´™àµà´™à´¿. à´œàµ€à´ªàµà´ªàµ à´ªàµ‹à´²àµà´³àµà´³ à´«àµ‹àµ¼à´µàµ€àµ½ à´¡àµà´°àµˆà´µàµ à´µà´¾à´¹à´¨à´™àµà´™àµ¾à´•àµà´•à´²àµà´²à´¾à´¤àµ† à´…à´¤àµà´µà´´à´¿ à´ªàµ‹à´•àµà´µà´¾àµ» à´¨à´²àµà´² à´¬àµà´¦àµà´§à´¿à´®àµà´Ÿàµà´Ÿàµ à´¤à´¨àµà´¨àµ†à´¯à´¾à´¯à´¿à´°àµà´¨àµà´¨àµ. à´žà´™àµà´™àµ¾ à´«à´¸àµà´±àµà´±àµ à´—à´¿à´¯àµ¼ à´®à´¾à´¤àµà´°à´®à´¿à´Ÿàµà´Ÿàµà´•àµŠà´£àµà´Ÿàµ à´µà´³à´°àµ† à´ªà´¤à´¿à´¯àµ†à´¯à´¾à´¯à´¿à´°àµà´¨àµà´¨àµ à´ªàµŠà´¯àµâ€Œà´•àµà´•àµŠà´£àµà´Ÿà´¿à´°àµà´¨àµà´¨à´¤àµ. à´ªà´²à´¯à´¿à´Ÿà´¤àµà´¤àµà´‚ à´µà´¾à´¹à´¨à´‚ à´…à´Ÿà´¿à´¤à´Ÿàµà´Ÿà´¾à´¤à´¿à´°à´¿à´•àµà´•àµà´µà´¾àµ» à´¶àµà´°à´¦àµà´§à´¿à´šàµà´šà´¿à´°àµà´¨àµà´¨àµ.\r\n\r\nà´…à´™àµà´™à´¨àµ† à´¦àµàµ¼à´˜à´Ÿà´‚ à´ªà´¿à´Ÿà´¿à´šàµà´š, à´Žà´¨àµà´¨à´¾àµ½ à´µà´³à´°àµ† à´…à´¡àµà´µà´žàµà´šà´±à´¸àµ à´†à´¯à´¿à´°àµà´¨àµà´¨ à´† à´¯à´¾à´¤àµà´°à´¯àµà´•àµà´•àµ à´¶àµ‡à´·à´‚ à´žà´™àµà´™àµ¾ à´®à´¦à´¾à´®àµà´®à´•àµà´•àµà´³à´¤àµà´¤à´¿à´¨àµ à´¸à´®àµ€à´ªà´¤àµà´¤àµ à´Žà´¤àµà´¤à´¿à´šàµà´šàµ‡àµ¼à´¨àµà´¨àµ. à´…à´µà´¿à´Ÿàµ† à´¨à´¿à´¨àµà´¨àµà´‚ à´•àµà´±à´šàµà´šàµ à´¤à´¾à´´àµ‡à´•àµà´•àµ à´ªàµ‹à´•à´£à´‚ à´®à´¦à´¾à´®àµà´®à´•àµà´•àµà´³à´¤àµà´¤à´¿à´¨àµà´±àµ† à´•à´±à´•àµà´Ÿàµ à´¸àµà´ªàµ‹à´Ÿàµà´Ÿà´¿àµ½ à´Žà´¤àµà´¤à´¿à´šàµà´šàµ‡à´°àµà´µà´¾àµ». à´ªà´£àµà´Ÿàµ à´†à´·àµâ€Œà´²à´¿ à´Žà´¸àµà´±àµà´±àµ‡à´±àµà´±àµ à´¬à´‚à´—àµà´³à´¾à´µà´¿à´²àµ† à´¸à´¾à´¯à´¿à´ªàµà´ªàµà´®à´¾à´°àµà´‚ à´®à´¦à´¾à´®àµà´®à´®à´¾à´°àµà´‚ à´•àµà´³à´¿à´•àµà´•àµà´µà´¾à´¨à´¾à´¯à´¿ à´µà´¨àµà´¨à´¿à´°àµà´¨àµà´¨ à´¸àµà´¥à´²à´®à´¾à´¯à´¿à´°àµà´¨àµà´¨àµ à´‡à´¤àµ. à´…à´¤àµà´•àµŠà´£àµà´Ÿà´¾à´£àµ à´‡à´¤à´¿à´¨àµ à´®à´¦à´¾à´®àµà´®à´•àµà´•àµà´³à´‚ à´Žà´¨àµà´¨ à´ªàµ‡à´°àµ à´µà´¨àµà´¨à´¤àµà´‚.\r\n\r\nà´¸à´®à´¯à´•àµà´•àµà´±à´µàµ à´®àµ‚à´²à´‚ à´žà´™àµà´™àµ¾ à´®à´¦à´¾à´®àµà´®à´•àµà´•àµà´³à´¤àµà´¤à´¿à´²àµ‡à´•àµà´•àµ à´¨à´Ÿà´¨àµà´¨àµ à´ªàµ‹à´•àµà´µà´¾àµ» à´¨à´¿à´¨àµà´¨à´¿à´²àµà´². à´…à´µà´¿à´Ÿàµ† à´¨à´¿à´¨àµà´¨àµà´‚ à´•à´¾à´´àµà´šà´•àµ¾ à´†à´¸àµà´µà´¦à´¿à´šàµà´šà´¤à´¿à´¨àµ à´¶àµ‡à´·à´‚ à´žà´™àµà´™àµ¾ à´µàµ€à´£àµà´Ÿàµà´‚ à´“à´«àµâ€Œà´±àµ‹à´¡àµ à´¤à´¾à´£àµà´Ÿà´¿ à´•àµà´®à´³à´¿à´¯à´¿à´²àµ‡à´•àµà´•àµ à´¯à´¾à´¤àµà´° à´¤àµà´Ÿàµ¼à´¨àµà´¨àµ. à´Žà´¨àµà´¤à´¾à´¯à´¾à´²àµà´‚ à´Žà´‚à´œà´¿ à´¹àµ†à´•àµà´Ÿà´±à´¿àµ½ à´’à´°àµ à´•à´¿à´Ÿà´¿à´²àµ» à´“à´«àµâ€Œà´±àµ‹à´¡àµ à´¯à´¾à´¤àµà´° à´†à´¸àµà´µà´¦à´¿à´•àµà´•àµà´µà´¾àµ» à´ˆ à´¯à´¾à´¤àµà´°à´¯à´¿àµ½ à´¸à´¾à´§à´¿à´šàµà´šàµ. à´…à´¤àµ à´¤à´¨àµà´¨àµ†à´¯à´¾à´¯à´¿à´°àµà´¨àµà´¨àµ à´ˆ à´Ÿàµà´°à´¿à´ªàµà´ªà´¿à´²àµ† à´¹àµˆà´²àµˆà´±àµà´±àµà´‚.', 57, '1', 'madam.jpg', 2),
(29, 'b5511728', '2020-04-22', 'A drive through the Pakistani border and through Punjab villages', 'Travel', 'Punjab,India', 'After our visit to Pakistan, we headed back to Delhi. We were traveling in a Maruti S crossover car that was given to Baiju Chetan to be reviewed by Maruti. The road is narrow but a nice clean road. We really enjoyed the journey through the Punjab villages. At some point we got off the road to see the beautiful views.\r\nAnoop Technologist who was with his colleague explained the farming on the side of the road. So on the way, we spotted a buffalo farm on the roadside. Anoop was very vocal about the buffalo. We learned that they are the Murray breeds. I could see that the name Anoop Technologist is not just that. He is one and a half man in knowledge.\r\nWe walked through the small countryside along the buffalo farm. People live near the farm. They lived in tiny huts, not big houses like ours, or mud. With their consent, we entered a house. From the outside it looks like a cottage but inside we could see it was very clean. Similarly, the cribs were nice and clean.\r\nI have always felt that Punjabis are generally very loving. They treat us like guests from Kerala. So we headed back to Delhi, seeing the village views. It doesn  t seem to arrive in Delhi before nightfall. So sometimes the journey will be to Ludhiana.\r\nAfter passing the villages we made our way into the city. The beauty of Punjab is in its villages. The city views were just as boring as ever. We were in a hurry later than usual. So our journey did not reach Ludhiana. We decided to stay in a hotel room next to Jalandhar. Since she was tired, she ate dinner and fell straight into bed.\r\nThe next morning we checked in from the hotel and got off. After some wandering, we found a dhaba for breakfast. From there, we made a breakfast special with Punjabi special porata, nuts and curry. We had a good appetite and enjoyed the food.\r\nWe had another 300km to Delhi. We enjoyed the journey, sharing the good news.', 73, '1', 'pp.jpg', 0),
(30, '182fc7f1', '2020-04-22', 'â€œà´“à´Ÿàµ à´®àµ€à´¨àµ‡ à´•à´£àµà´Ÿà´‚ à´µà´´à´¿â€ - OMKV Unni and YouTube Features', 'Food', 'Kerala', 'In the series of Tech Travel Eat Travel with Vloggers exchange, I moved to Kumbalangi, Ernakulam. That is where Unni  s house became famous through the channel OMKV Fishing and Cooking. As the name implies, Unni  s channel highlights fishing and cooking it. The full name of OMKV is â€™â€™ â€™â€™ â€™â€™ â€™â€™ â€™â€™ â€™â€™ Unni  s Channel is going there with pure country views.\r\nUnni described the situation of launching a Youtube channel. Kumbalangi is a beautiful village situated in the Ernakulam district. A land of backwaters, chinwalls and fishes. Unni Kumbalangi then had no idea what videos to do on his channel. Fishing itself became the subject.\r\nWhen the channel started, he joined his friend Stalin. Unni did not know that he would earn Youtube at first. Unni later learned that it could be turned into a source of income. There is no internet in Unni  s house in the vicinity of Unni  s home to shoot and edit the video and upload it to YouTube. Unni found the answer. The edited video will be uploaded to your mobile phone and sent to Unni Range. Then they upload the video and come back.\r\nUnni and Channel are most famous for the video of their daughter being slaughtered by a hen, who was caught by the hen and given to the Molc. The video received a lot of negative comments, but for the most part, Unni was supportive. As the videos hit, Unni started earning more from YouTube.\r\nThere are different types of fishing in the Unni channel. The videos mostly attract people because they shoot in a rural setting. The OMKV Fishing and Cooking videos are great for expatriates to post their nostalgia. Unni  s most popular fish is the sea fish chala (sardine), although a variety of fish are caught in the backwaters.\r\nAn interview and a preview of Unni has been broadcast on Kerala Vision Channel. On that day Unni received a sword called Walla which weighs about 15 kg. Unni is a large family of about ten people including his parents, his wife, his two children and his siblings. All the family members are very supportive of Unni  s fishing and vlogging.\r\nWhen I went, Unni prepared a delicious tasty shrimp pickle. Unni  s cooking is in the clay pots near the house. I quickly packed up the shrimp pickle and gave it to me. It is in this recipe that Unni shares his specialties. Due to lack of time, the views of Kumbalangi village could not be seen or video recorded. I returned from there, assuring Unni that he would come to Kumbalangi another time.\r\nOMKV Unni is a good example of how the common channel of YouTube can be successfully managed by overcoming all the difficulties.', 73, '1', 'un.jpg', 0),
(31, '6bade9aa', '2020-04-22', 'Lets take a trip to enjoy the coldâ€¦ Here are the top 10 places', 'News', 'Kerala', 'The children  s vacation and summer come together. At this time it is too hot to leave the house. Most people will faint in the sun for ten minutes. For those who are looking for a trip this summer to get a little cold, there are plenty. Here are the top ten places to choose from to enjoy the cold.\r\n1. Munnar - There is no doubt that Munnar is the best place to enjoy the cold of Kerala. The coldest months of the year are November, December and January. Munnar gets better during the summer and daytime, but the evening becomes quite cloudy. Then the atmosphere started to cool down. This is the case in the early morning. So get ready to stay in Munnar for at least a day. Now that the season is almost over, Munnar will be able to offer good accommodation at cheap rates through online booking sites.\r\n2. Ooty: After Munnar, Ooty is the place to go for cool trips. Located in Tamil Nadu, Ooty is frequented by tourists from Ooty. After the hot weather in Coimbatore and Mettupalayam endured, the passage started. As soon as this pass starts up, the cold starts to come down. So as we go through each of the hairpin curves, we feel the cold is increasing. Since there are more sightseeing and activities in Ooty than most of the three, family trips are the most preferred choice for family trips.\r\n3. Kodaikanal: Kodaikanal is the most visited hill station in Tamil Nadu. Kodaikanal is also known as the Princess of the Mountains due to its scenic beauty. Some argue that Kodaikanal is derived from the Tamil words Kodaikanal, which is always surrounded by mud, but there are some who argue that it was derived from the Tamil words meaning   gift of the forest  . Summer in Kodaikanal starts from April. During that time the temperature in Kodaikanal will be between 11 and 19 degrees. Malayalees can also visit the Palani Temple on their way to Kodaikanal.\r\nPonmudi: Ponmudi is a popular hill station in Thiruvananthapuram district. Ponmudi, a small town, is situated at a distance of about 60 km from the city of Thiruvananthapuram. The hairpin curves must be crossed to reach the pompeii. There is only one way to stay here a day. The resort is KTDC  s Golden Peak. Rooms range from Rs 2000 - Rs 3,000. Room charges may vary depending on the season.\r\n5. Vagamon: Located 28 km east of Erattupetta on the border of Kottayam-Idukki districts, Vagamon is famous for its scenic beauty. The National Geographic Traveler is one of the top 10 tourist destinations in the world. Vagamon is an ideal place for a quick and easy one day trip. Summers are hot and humid in the summer, but the evening starts to cool down. Later in the night, it becomes a good cold. So if your trip is to enjoy the cold during this hot season, come to Vagamon with a day stay. There are many resorts and cottages available.\r\nÂ© Albin Manjalil.\r\n6. Lakkidi, Wayanad: Lakkidi and the surrounding areas of Wayanad are an ideal place for those in Northern Kerala to enjoy the cold. The reason is that the place is warmer than other places in Wayanad. Therefore, there are many resorts and homestays available. Most of the winters here are spent in the evening and early morning.\r\n7. Coorg: Karnataka is like Munnar to Kerala. The place is also known as Kodagu. Tourist places in and around Coorg If you are willing to spend a little money, you can break in and stay at some of the best resorts. If your trip is cheap, there are also budget homestays for the common man. To plan your trip, you need to spend two or three days in Coorg aside from the rush. This place is easily accessible to the people of North Kerala.\r\n8. Yelagiri is a hill station in Vellore district of Tamil Nadu and is a back packer  s paradise. Perched at an elevation of 1048 ft above sea level, this place is at a distance of about 160 km from Bangalore. It is one of the best places to visit in Bangalore. Yelagiri is not as well-known and developed as the major hill stations of Tamil Nadu, Ooty and Kodaikanal. However, there are activities like trekking, hiking and paragliding. Here  s what  s happening in May', 73, '1', 'mnr.jpeg', 2),
(32, '5808babc', '2020-04-22', 'The market in Ooty and the Tiger Hills hiding in silence', 'Travel', 'Kerala', 'After our journey on the Avalanche route, Salisheetan took us to see the Ooty market in the middle of the town. There was everything in a marketplace, including blankets, various groceries, and vegetables. All good fresh items. We walked there with sights.\r\nThe market there was every section. All the grocery stores are in one area, the egg-only shops are in one area, and the vegetables are in one area. It was so. Vegetables are good quality and you can see that. Most of the vegetables in our local market are caught in mud and dirt. But the vegetables here were pretty clean. The farm is marketed here after collecting it from farms and washing it thoroughly.\r\nThere was not a lot of rush in the marketplace since we were away. We saw a cute little cat in a shop selling bananas. The animal lover, Salishettan, kept it taut and adorable. Apart from fruits and vegetables, flowers were also actively marketed in the market. We did not buy anything except what we saw.\r\nFrom the vegetable section we then moved on to the fish-meat-selling area. The fish were mostly raised in the dam. However, the fish do not get the taste and freshness of the local fish. Before I left the market, Shweta had bought some soybeans for a very good profit. It was a profit of Rs 70 more than our country. So we walked out of the market.\r\nAfter viewing the market sights, we went to see Tiger Hills, near Ooty. There was a tree on the way to where the carts could not go. So we started walking slowly. We were walking through a very deserted place. Salisheetan said that the tiger is a descending area. Upon hearing this, we became more alert.\r\nSo we walked to Tiger Hills. When we hear the name, we think it is on top of a mountain. But there is a lake and a dam. It seems that there are not many tourists to the place which is very desolate. It  s a horrible place to be in Hollywood movies like When Wrong Turn Numbers. Don  t come here as two or three people. To come here as a large group. That would be the best for your safety.\r\nWalking through the forest, we reached the Tiger Hills Check Dam. It was a beautiful sight and awaited us there. It was a check dam built by the British in 1903. It was also Ooty  s drinking water source. How many of us know that there is such a place in Ooty? After watching the stunning views from the Tiger Hills, we headed back to Ooty Town. We then headed back to SR Jungle Resort in Anakkatti.', 73, '1', 'tte-ooty.jpg', 0),
(33, 'a1f6725a', '2020-04-22', 'Physical distancing will end era of cheap air travel, industry warns', 'News', 'INDIA', 'The days of cheap air travel will be over if airlines are forced to introduce physical distancing measures on planes because of the Covid-19 pandemic, the industry has warned.\r\nAlexandre de Juniac, the director general of the International Air Transport Association (Iata), said that if governments ordered airlines to adopt physical distancing onboard aircraft, at least a third of seats would remain empty and airlines would have to raise their ticket prices by at least 50% or go bust.\r\nâ€œEither you fly at the same price, selling the ticket at the same average price as before, and you lose enormous amounts of money so itâ€™s impossible to fly for any airline, particularly low cost; or you increase ticket prices by at least 50% and you are able to fly with a minimum profit. So it means that if social distancing is imposed, cheap travel is over.â€\r\nIata said domestic air traffic had slumped 70% since early January because of the pandemic and warned that any global recovery was likely to be slow. While domestic routes will open sooner than long-haul, weak consumer confidence amid recession fears will undermine a quick recovery, said Brian Pearce, Iataâ€™s chief economist. Vietnam plans to restart all domestic flights from Thursday.\r\n\r\nPearce pointed to China, where air travel bounced back initially when domestic flights resumed in mid-February, but said the recovery had since stalled with the number of domestic flights at just over 40% of pre-pandemic levels. In Australia, domestic flights are 10% of pre-crisis levels even though new Covid-19 infections are close to zero.', 73, '1', '4325.jpg', 0),
(34, 'e5c96f5a', '2020-04-22', 'Amtrak Suspends Several Routes, Reduces Service Schedules', 'News', 'New York', 'As the impact of the ongoing coronavirus outbreak continues to change daily, Amtrak has once again announced updates to its essential service plans to meet government travel restrictions.\r\nDue to the Centers for Disease Control and Preventionâ€™s recommendation that residents of New York, New Jersey and Connecticut refrain from non-essential travel for 14 days, Amtrak has been forced to change and temporarily suspend routes.\r\nIn addition, there are new safety protocols at train stations for customers arriving from out of state. Passengers are being asked to check with each state for specific guidance.\r\nWhile Amtrak continues to provide essential services along the Northeast Corridor, it has been forced to temporarily suspend several services, including Acela (Boston â€“ Washington, DC), Downeaster (Boston â€“ Brunswick, Maine), Keystone Service (Harrisburg â€“ New York) and more.\r\nThe rail company also revealed several routes would operate on a reduced schedule, including Adirondack (New York â€“ Montreal), Empire Service (New York â€“ Niagara Falls), Lincoln Service (Chicago â€“ St. Louis), Northeast Regional (Boston â€“ New York â€“ Washington, DC â€“ Virginia), Pacific Surfliner (San Luis Obispo â€“ San Diego) and more.\r\nClick here for complete coronavirus coverage on the Microsoft News app on Windows 10, iOS and Android\r\nAs a result of the reduced service, Amtrak announced some stations might not be staffed, with passengers reporting directly to the platform to board their train. The rail company is also suspending cafe service on select routes.\r\nAmtrak is waiving change fees for reservations made before May 31 and contacting customers with bookings on trains that are being modified to schedule a new departure time or travel on another day.', 73, '1', 'BB12ZmQR.jfif', 0);
INSERT INTO `blog` (`id`, `blogkey`, `date`, `head`, `Category`, `place`, `content`, `loginid`, `status`, `bimage`, `likes`) VALUES
(35, '174440aa', '2020-04-22', 'Coronavirus and travel: Munich cancels Oktoberfest, Spain cancels Running of the Bulls', 'News', 'Munich', 'Munich  s Oktoberfest, the world  s largest popular festival, where revellers from all over the globe swig beer by the litre and sing along to oompah bands, fell victim on Tuesday to the coronavirus pandemic.\r\nSix million people flock to the Bavarian capital every year for the two-week festivities, held in packed tents with long wooden tables and benches where social distancing to avoid contagion would be both lamentable and impossible.\r\nThe event, scheduled this year for September 19 to October 4, brings in 1 billion euros ($A1.73 billion) for the city.\r\n"This is not a normal year and it is unfortunately a year without the Oktoberfest," said Markus Soeder, premier of the southern German state, announcing a decision that had been widely expected. "It hurts. It is a huge shame."\r\nSome parts of Germany have started to relax lockdown measures introduced last month to slow the spread of the virus, but big events are banned until August 31. Chancellor Angela Merkel has urged Germans to stay disciplined to avoid a relapse after some slowing of the infection rate.\r\nAs of Tuesday, Germany had registered 143,457 cases of coronavirus, of whom 4,598 had died.\r\nTraveller Newsletter\r\nGet the latest news and updates emailed straight to your inbox.\r\nEnter your email address\r\nBy submitting your email you are agreeing to Fairfax Media  s terms and conditions and privacy policy.\r\nSeveral states are requiring shoppers and people on public transport to wear face masks as additional protection. Berlin on Tuesday made masks compulsory on public transport from April 27.\r\nNOT A NORMAL SUMMER\r\nForeign Minister Heiko Maas said this would not be a normal summer holiday year, either. Although it was too early to say what would happen to travel, beaches and holiday accommodation would not be packed as usual, he said.\r\nGermany  s government is trying to mitigate the effects of the shutdown on Europe  s biggest economy with a range of measures, including a 750 billion stimulus package, and hopes consumer demand will return to help it out of a sharp recession.\r\nVisitors to the Oktoberfest consume more than 7 million litres of beer, 100 oxen, half a million chickens and more than 140,000 pairs of sausages each year.\r\nMunich mayor Dieter Reiter said he was sorry to disappoint the 2 million people who travel from abroad for the festival, and said it was also a blow to Bavarians, who don traditional lederhosen and dirndls - leather shorts and low-cut embroidered dresses - for a highlight of their year.\r\nMunich pastor Rainer Maria Schiessler told the KNA Catholic news agency the festival had been cancelled twice in the 19th century due to cholera epidemics, and also during World War Two.\r\n"Munich will survive," he said.\r\nThe festivities go back to 1810, when the first Oktoberfest was held in honour of Bavarian Crown Prince Ludwig  s marriage.\r\nThese days the festivities tend to turn rowdy in the evenings and many foreign tourists can  t stomach the large quantities of specially brewed beer, but it remains as popular as ever.\r\n"We hope we can make up for this next year, with even more passion and joy," Reiter said. \r\nMeanwhile Spain  s famous running of the bulls in Pamplona is another major European event to be called off due to the coronavirus pandemic.\r\nPamplona city hall announced Tuesday that the nine-day San Fermin festival held in July won  t take place this year.\r\nIt said in a statement that though the decision was expected, "it still brings sadness."\r\nPamplona mayor Enrique Maya is infected with the virus.\r\nThe San Fermin fiesta was made famous internationally by Ernest Hemingway in his 1926 novel "The Sun Also Rises."', 73, '1', '1587506286507.jpg', 0),
(36, '90878883', '2020-04-22', 'HOW TO BRING THE SEASONS INTO YOUR MARKETING', 'Creative', 'Kerala', 'Itâ€™s fall and everyoneâ€™s excited for sweater season and pumpkin-spice-everything! Us too!\r\nBut latte cravings and wardrobe-layering asideâ€”as professionals, marketers, and communicators, isnâ€™t there something comforting about knowing what to expect from a season?\r\nWhether promoting our own business, or the organization we work for, how can we get more intentional about bringing the seasons into our message and marketing?\r\nseasonal marketing planning\r\nMake a Big Picture Calendar. (Thatâ€™s Actually Big!)\r\nWe all intend to plan ahead, but too often let the day-to-day minutia get in the way of making a calendar for the year.\r\nSure, you canâ€™t know every detail to anticipate. Heck, you canâ€™t know half the priorities that will pop up in any particular month. But you can plan for big picture seasonality, busy-times, and events.\r\nDo thisâ€¦ plot out the next three months. (And make it big. On a big whiteboard, or roll of butcher paper). Thereâ€™s something about having a big, visual calendar that everyone can see that helps you remember the very things we can take for granted.\r\nDonâ€™t get bogged down with every little XYZ. Instead, try focusing on what you do know from past experience and the timely cues of the seasons:\r\nseasonal marketing for business\r\nWhat is a naturally busy time for your business? Fall, late spring, the new year? How can you promote your most popular product and services during this season? Whatâ€™s your best mix of fun + practicality, or inspiration + advice?\r\nWhat is a naturally busy time for the customers you serve? Where you want to help, but also recognize thereâ€™s a lot of â€œnoiseâ€ out there competing for their attention? Back to school, holidays? How can you acknowledge the stress in their lives and bring them encouragement with a confidence-boosting quote or a service or product that can help them manage this busy time?\r\nWhen is there typically a lull for you in business, where you can have a little more fun? Summertime? Vacations? Sometimes just planting seeds (even fun ones) can help keep you top of mind leading into the busy times? It can be as little as celebrating National Popsicle day or sharing your favorite road-trip tips â€“ it doesnâ€™t always have to be serious!\r\nWhen are there annual events that always happen as a part of your business or organization? Annual planning for the new year? A time you always give back? Are you taking these events for granted, or can you share a behind-the-scenes with your people?\r\nâ€”\r\nYou can plan a whole promotion or campaign around a seasonal event, or you can just remember to layer the season into small things: a social post, a physical mailer or postcard, or an email to your customers.\r\nWhether big or small, consider how your photography, design, headlines, or even just a famous quote or lyric about the season can make its way into your message, imagery, and content.\r\nAnd remember to balance your brand voice and your business purpose with the flavor of the season. Too much â€œpumpkin spiceâ€ (though some of you may disagree) can overpower what makes your core ingredients so special.\r\nBe sure to sign up for our newsletter list to get these branding and marketing articles delivered straight to your inbox.', 65, '1', 'SeasonsMarketingA-768x768.jpg', 0),
(37, '2351b98a', '2020-04-22', 'DOES NARROWING IN FREAK YOU OUT?', 'Creative', 'Kerala', 'Whether you  re a creative entrepreneur   small business owner   or even a larger organization    the idea of getting daringly narrow with your brand positioning and marketing efforts can sometimes feel like boxing yourself in   painting yourself in a corner   and alienating potential customers   who can pay you   and help your business grow  \r\nSo today I want to share three simple brand exercises for narrowing in on your niche without freaking out  \r\nBrand Exercise   Narrow in on your dream customer\r\nIt  s not uncommon for us to get pushback from our clients who are uncomfortable with narrowing in on their dream customer   They might say it  s because they don  t want to leave anyone out   But if we  re reading between the lines   we always sense an underlying fear of losing out on any customer willing to pay them   If money were no object   who would your dream customer be   What exactly would you offer them   Why do they need it    what problem are you solving for them  \r\nIf you  re having a hard time imagining who your dream customer is   think of a real person   Either a previous customer you  ve already worked with   a friend you know would benefit from your offering   or maybe even a character on a TV show you could imagine hiring you  \r\nBrand Exercise   Experiment with getting specific in your content and promotional launches\r\nOne of the reasons narrowing in can feel so intimidating is because it means a lot of work for your entire brand   But you don  t need an entire rebrand to get daringly narrow   You can experiment with speaking to your dream customer in your content like blog posts   videos   podcasts   social media posts   and even sales campaigns targeting a specific segment of your audience  \r\nFor example   let  s say you love working with decisive women between the ages of 25  40 who are typically moms   Maybe you already have a Mother  s Day marketing initiative planned   but perhaps you want to get daringly narrow   What if you spoke directly to working moms   Or single moms   Or moms who have kids that are obsessed with fidget spinners  \r\nThese experiments will show you how getting niched with your offering and who you  re talking to   and how you  re talking to them   can increase engagement and your bottom line even to a seemingly smaller audience  \r\nBrand Exercise   Show what you want more of in your portfolio and testimonials\r\nFocusing your thoughts   intentions   and actions on what you want to happen is so much in the mainstream now that we  ve all heard the phrases   put what you want out into the universe   or   like attracts like     But this law of attraction sentiment isn  t just for those who believe in metaphysics or magic   If your testimonials   portfolio   or case studies come from projects you  re proud of and dream customers you  d like more of    then you will naturally attract people who like your style and trust you to deliver  \r\nWhen was the last time you asked your dream clients for testimonials or shared recent work   results   or success stories you loved   One of the easiest ways to narrow in is by focusing in on   and sharing     what you want more of', 65, '1', 'NarrowingIn-768x768.jpg', 0),
(38, '14393137', '2020-04-22', 'Creative Ideas â€“ DIY Easy Sprinkler from Old Pool Noodle', 'Creative', 'Punjab,India', 'Summer vacation is here! Are you looking for fun activities for kids to do and keep them away from TVs or computer games? You donâ€™t have to spend extra money on some fancy toys for the kids. With a bit of time and creativity, you can make something out of cheap materials but something that can create lots of fun to keep your kids actively entertained!\r\n\r\nIn this tutorial, YouTube channel Make It and Love It is going to show you how to make an easy DIY sprinkler from an old pool noodle. A pool noodle is a cylindrical hollow piece of foam that is commonly used when swimming. Itâ€™s perfect for keeping you floating, doing aquatic exercises or just relaxing in the water. But pool noodles are actually more versatile than you expected. Letâ€™s grab one of those old pool noodles that are laying around or just get one at the Dollar Store and turn it into a simple sprinkler for the kids to run through. It will be a fun and colorful way to beat the summer heat and an activity for the whole family to enjoy!\r\n\r\nDonâ€™t forget to share this awesome craft idea with your friends and family!', 65, '1', 'Golf-Sprinklers-Billboard-2018.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bkey` char(8) NOT NULL,
  `packageid` int(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  `bdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cldate` date NOT NULL DEFAULT '0000-00-00',
  `paymentstatus` enum('0','1') NOT NULL,
  `cancelstatus` enum('0','1') NOT NULL,
  `progress` set('0','1','2','-1') NOT NULL DEFAULT '0',
  `reply` char(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `bkey`, `packageid`, `loginid`, `bdate`, `cldate`, `paymentstatus`, `cancelstatus`, `progress`, `reply`) VALUES
(46, '5893c68e', 18, 57, '2020-04-10 04:03:30', '2020-04-15', '1', '0', '1', ''),
(47, 'c6ada465', 23, 57, '2020-04-10 04:07:29', '2020-04-15', '1', '0', '2', ''),
(48, 'c0ec3423', 21, 57, '2020-04-10 04:13:29', '2020-04-15', '1', '0', '2', ''),
(49, '0650031b', 13, 57, '2020-04-10 04:19:19', '2019-04-15', '1', '0', '1', ''),
(50, 'ce6fa88e', 13, 57, '2020-04-10 04:22:36', '2020-04-15', '1', '0', '1', ''),
(51, '35e2e128', 13, 57, '2020-04-12 13:42:53', '2020-04-17', '0', '0', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cardkey` varchar(8) NOT NULL,
  `nameholder` varchar(50) NOT NULL,
  `cardno` varchar(16) NOT NULL,
  `cvv` int(4) NOT NULL,
  `expiredate` varchar(12) NOT NULL,
  `amount` int(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  `currentdate` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `cardkey`, `nameholder`, `cardno`, `cvv`, `expiredate`, `amount`, `loginid`, `currentdate`) VALUES
(17, '73e66efc', 'jumbo', '7560917679734334', 456, '3/20', 45099, 59, '2020-02-12'),
(30, '5caa1b5a', 'jumbo', '2147483647', 456, '2/2020', 77, 59, '2020-02-15'),
(31, '2f6d047b', 'jumbo', '2147483647', 456, '2/2020', 77, 59, '2020-02-15'),
(32, 'debe0705', 'jumbo', '2147483647', 456, '2/2020', 77, 59, '2020-02-15'),
(33, 'b219aec9', 'jumbo', '2147483647', 456, '2/2020', 77, 59, '2020-02-15'),
(34, '6266ac90', 'jumbo', '2147483647', 456, '2/2020', 77, 59, '2020-02-15'),
(35, 'cfaa9588', 'jumbo', '2147483647', 456, '2/2020', 77, 64, '2020-02-15'),
(36, 'e652e90d', 'dream', '2147483647', 123, '12/2034', 0, 64, '2020-02-21'),
(37, '5616ae5a', 'dream', '987654321234', 123, '12/2034', 0, 64, '2020-02-21'),
(38, '5aa3ce8f', 'dream', '987654321234', 123, '12/2034', 0, 64, '2020-02-21'),
(39, 'd5e97cc3', 'jumbo', '2147483647', 456, '2/2020', 214654, 59, '2020-02-21'),
(40, 'b3649512', 'jumbo', '2147483647', 456, '2/2020', 214654, 59, '2020-02-21'),
(41, '91e7c60f', 'jumbo', '2147483647', 0, '2/2020', 214654, 59, '2020-02-21'),
(42, '46ff1e16', 'jumbo', '2147483647', 456, '2/2020', 214654, 59, '2020-02-21'),
(43, 'bc72aeaa', 'jumbo', '2147483647', 456, '2/2020', 45099, 59, '2020-02-21'),
(44, '09dcf080', 'jumbo', '2147483647', 456, '2/2020', 45099, 59, '2020-02-21'),
(45, '5fd631f1', 'jumbo', '2147483647', 456, '2/2020', 45099, 59, '2020-02-21'),
(46, 'ad1362e2', 'jumbo', '2147483647', 456, '2/2020', 45099, 59, '2020-02-21'),
(47, 'a6a544ff', 'jumbo', '2147483647', 456, '2/2020', 45099, 59, '2020-02-21'),
(48, '56633c17', 'jumbo', '2147483647', 456, '2/2020', 5000, 59, '2020-02-26'),
(49, '5146fe9a', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(50, '931981e8', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(51, 'f3cb9c85', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(52, '78b051de', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(53, '806fce71', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(54, '9016a12e', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(55, '109f16d2', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(56, 'a4bf3ae7', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(57, '11c857e6', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(58, '79106b43', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(59, '8df947c9', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(60, '2e2393bf', 'jumbo', '2147483647', 456, '2/2020', 5000, 59, '2020-02-26'),
(61, '8ad51427', 'jumbo', '2147483647', 456, '2/2020', 5000, 59, '2020-02-26'),
(62, 'e0fa1dc5', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(63, 'ecb17848', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(64, '2bdd219b', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(65, '773eca0b', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(66, '53fca65c', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(67, '8c16569c', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(68, 'af70a5cb', 'jumbo', '2147483647', 456, '02/2020', 5000, 59, '2020-02-26'),
(69, '444fa233', 'jumbo', '7560917679734334', 456, '02/2020', 5000, 59, '2020-02-26'),
(70, 'f77bb25d', 'jumbo', '7560917679734334', 456, '02/2020', 5000, 59, '2020-02-26'),
(72, '33b653de', 'ananda krishnan', '8111966294811196', 369, '7/2030', 45099, 57, '2020-02-26'),
(73, 'aa882bcb', 'jumbo', '7560917679734334', 456, '02/2020', 214654, 59, '2020-02-29'),
(74, 'b2ec5cbe', 'jumbo', '7560917679734334', 456, '02/2020', 214654, 59, '2020-03-07'),
(75, 'f236728b', 'jumbo', '7560917679734334', 456, '02/2020', 45099, 59, '2020-03-07'),
(76, 'b355b982', 'jumbo', '7560917679734334', 456, '02/2020', 45099, 59, '2020-03-07'),
(77, 'cfee7577', 'jumbo', '7560917679734334', 456, '02/2020', 45099, 59, '2020-03-07'),
(78, '2cbcb9d0', 'test', '12345', 123, '12/21', 214654, 57, '2020-03-30'),
(79, 'f65519f8', 'test', '12345', 123, '12/21', 5000, 57, '2020-03-30'),
(80, 'f8afe255', 'test', '454545', 35445, '6/1988', 45099, 57, '2020-03-30'),
(81, '7f49be7c', 'test', '454545', 35445, '6/1988', 45099, 57, '2020-03-30'),
(82, 'c7a8f6c4', 'test', '454545', 35445, '6/1988', 45099, 57, '2020-03-30'),
(83, '3671b69c', 'test', '454545', 35445, '6/1988', 45099, 57, '2020-03-30'),
(84, '2a8851fa', 'test', '454545', 35445, '6/1988', 45099, 57, '2020-03-30'),
(85, '0fc678de', 'jumbo', '7560917679734334', 456, '2/2020', 250000, 57, '2020-04-10'),
(86, '95e9928c', 'ananda krishnan', '8111966294811196', 369, '7/2030', 5000, 57, '2020-04-10'),
(87, '43d1c647', 'jumbo', '7560917679734334', 456, '2/2020', 214654, 57, '2020-04-10'),
(88, 'addaa23b', 'jumbo', '7560917679734334', 456, '2/2020', 214654, 57, '2020-04-10'),
(89, '3b509796', 'jumbo', '7560917679734334', 456, '2/2020', 214654, 57, '2020-04-10'),
(90, '6ac659a0', 'jumbo', '7560917679734334', 456, '2/2020', 214654, 57, '2020-04-10'),
(91, 'f97e5f6e', 'jumbo', '7560917679734334', 456, '2/2020', 45000, 57, '2020-04-10'),
(92, '5f185db1', 'jumbo', '7560917679734334', 456, '2/2020', 45000, 57, '2020-04-10'),
(93, 'ef89ccfe', 'jumbo', '7560917679734334', 456, '2/2020', 45000, 57, '2020-04-10'),
(94, '8b28faa4', 'jumbo', '7560917679734334', 456, '2/2020', 45000, 57, '2020-04-10'),
(95, '13ce2f9b', 'jumbo', '7560917679734334', 456, '2/2020', 45000, 57, '2020-04-10'),
(96, 'f996f4d3', 'jumbo', '7560917679734334', 456, '2/2020', 45000, 57, '2020-04-10'),
(97, '1b621d9c', 'jumbo', '7560917679734334', 456, '2/2020', 45000, 57, '2020-04-10'),
(98, '0447b080', 'jumbo', '7560917679734334', 456, '2/2020', 45000, 57, '2020-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `chkey` varchar(8) NOT NULL,
  `chat` varchar(1500) NOT NULL,
  `senderid` int(10) NOT NULL,
  `receiverid` int(10) NOT NULL,
  `dateee` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `v` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=352 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `chkey`, `chat`, `senderid`, `receiverid`, `dateee`, `time`, `v`) VALUES
(290, '35561bd6', 'gh', 57, 64, '2020-04-18', '2020-04-19 09:46:49', '0'),
(291, 'fe46cca2', 'y', 57, 64, '2020-04-18', '2020-04-19 09:46:49', '0'),
(292, 'tyu', 'po', 64, 57, '2020-04-18', '2020-04-19 09:46:49', '0'),
(293, 'a1c1ddf5', 'j', 57, 64, '2020-04-18', '2020-04-19 09:46:49', '0'),
(294, '7abd63b2', 'g', 72, 57, '2020-04-18', '2020-04-19 09:46:38', '0'),
(301, '7d6bee1d', 'fg', 57, 64, '2020-04-18', '2020-04-19 09:46:49', '0'),
(302, '595d4ee9', 'y', 57, 64, '2020-04-18', '2020-04-19 09:46:49', '0'),
(303, 'dc763ce9', 'k', 57, 64, '2020-04-18', '2020-04-19 09:46:49', '0'),
(304, 'c891d277', 'kk', 57, 64, '2020-04-18', '2020-04-19 09:46:49', '0'),
(305, '704829d2', 'try', 73, 57, '2020-04-18', '2020-04-19 09:46:59', '0'),
(306, '6f05fd39', 'trytry', 57, 64, '2020-04-18', '2020-04-19 09:46:49', '0'),
(307, '97e33328', 't', 57, 64, '2020-04-18', '2020-04-19 09:46:49', '0'),
(308, '0f1677b3', 'r', 57, 72, '2020-04-18', '2020-04-19 09:46:38', '0'),
(309, 'd1293b74', 'j', 57, 73, '2020-04-18', '2020-04-19 09:46:59', '0'),
(310, '74997582', 'y', 57, 64, '2020-04-18', '2020-04-19 09:46:49', '0'),
(311, '4bc482d8', 'e', 57, 64, '2020-04-18', '2020-04-18 12:42:20', '0'),
(312, '0bdac547', 'pp', 64, 57, '2020-04-19', '2020-04-19 09:46:49', '0'),
(313, 'f867312b', 'ii', 64, 72, '2020-04-19', '2020-04-19 09:55:42', '0'),
(314, 'bf356ae0', 'pp', 57, 73, '2020-04-19', '2020-04-19 09:46:59', '0'),
(315, '980fa597', 't', 57, 73, '2020-04-19', '2020-04-19 09:46:59', '0'),
(318, 'f003b632', 'yu', 57, 73, '2020-04-19', '2020-04-19 09:46:59', '0'),
(319, '7f7ec03c', 'i', 57, 64, '2020-04-19', '2020-04-19 09:46:49', '0'),
(320, 'f9037e5c', 'we', 57, 65, '2020-04-19', '2020-04-19 09:56:39', '0'),
(321, 'da9561c5', 'weee', 57, 65, '2020-04-19', '2020-04-19 09:56:39', '0'),
(322, '4b834710', 'tyu', 57, 65, '2020-04-19', '2020-04-19 09:56:39', '0'),
(323, '8410beb5', 'uu', 57, 65, '2020-04-19', '2020-04-19 09:56:39', '0'),
(324, '19f0380f', 'uu', 57, 65, '2020-04-19', '2020-04-19 09:56:39', '0'),
(325, 'd3e8dd36', 'r', 57, 64, '2020-04-19', '2020-04-19 09:46:49', '0'),
(326, '754a5edb', 'y', 57, 64, '2020-04-19', '2020-04-19 09:46:49', '0'),
(327, '3f65dbda', 'yu', 57, 64, '2020-04-19', '2020-04-19 09:46:49', '0'),
(329, '3bd5264f', 'rt', 57, 67, '2020-04-19', '2020-04-19 10:30:53', '0'),
(330, '06e9ce26', '34545', 57, 66, '2020-04-19', '2020-04-19 09:48:25', '0'),
(331, 'eeae831a', '45', 57, 68, '2020-04-19', '2020-04-19 05:53:16', '1'),
(333, 'a1ba78de', '55', 57, 64, '2020-04-19', '2020-04-19 09:46:49', '0'),
(334, 'cfda349f', '5t5t', 57, 72, '2020-04-19', '2020-04-19 09:46:38', '0'),
(335, '4da5aa54', 'jyj', 57, 65, '2020-04-19', '2020-04-19 09:56:39', '0'),
(336, '62633f67', 'ty', 57, 73, '2020-04-19', '2020-04-19 09:46:59', '0'),
(337, '11a9941d', 'Messaging\nRecent\nSearch\n \nsunil\nArun\nsunil\nDream travellers2020-04-19 11:23:38\n55\n\nsunil\nsubin2020-04-19 11:23:46\n5t5t\n\nsunil\nEPIC HOLIDAYS2020-04-19 13:52:40\njyj\n\nsunil\nMarco Polo2020-04-19 11:22:34\nrt\n\nsunil\nSAFARI2020-04-19 11:23:07\n34545\n\nsunil\nredgear2020-04-19 11:23:16\n45\n\nsunil\ntech travel2020-04-19 11:23:24\nrr\n\nRecent', 57, 73, '2020-04-19', '2020-04-19 09:46:59', '0'),
(338, '54ed76ff', 'Messaging\nRecent\nSearch\n \nsunil\nArun\nsunil\nDream travellers2020-04-19 11:23:38\n55\n\nsunil\nsubin2020-04-19 11:23:46\n5t5t\n\nsunil\nEPIC HOLIDAYS2020-04-19 13:52:40\njyj\n\nsunil\nMarco Polo2020-04-19 11:22:34\nrt\n\nsunil\nSAFARI2020-04-19 11:23:07\n34545\n\nsunil\nredgear2020-04-19 11:23:16\n45\n\nsunil\ntech travel2020-04-19 11:23:24\nrr\n\nRecent', 57, 73, '2020-04-19', '2020-04-19 09:46:59', '0'),
(339, '608cc7d1', 'Messaging\nRecent\nSearch\n \nsunil\nArun\nsunil\nDream travellers2020-04-19 11:23:38\n55\n\nsunil\nsubin2020-04-19 11:23:46\n5t5t\n\nsunil\nEPIC HOLIDAYS2020-04-19 13:52:40\njyj\n\nsunil\nMarco Polo2020-04-19 11:22:34\nrt\n\nsunil\nSAFARI2020-04-19 11:23:07\n34545\n\nsunil\nredgear2020-04-19 11:23:16\n45\n\nsunil\ntech travel2020-04-19 11:23:24\nrr\n\nRecent\n\n\n\n\n\n\n\nMessaging\nRecent\nSearch\n \nsunil\nArun\nsunil\nDream travellers2020-04-19 11:23:38\n55\n\nsunil\nsubin2020-04-19 11:23:46\n5t5t\n\nsunil\nEPIC HOLIDAYS2020-04-19 13:52:40\njyj\n\nsunil\nMarco Polo2020-04-19 11:22:34\nrt\n\nsunil\nSAFARI2020-04-19 11:23:07\n34545\n\nsunil\nredgear2020-04-19 11:23:16\n45\n\nsunil\ntech travel2020-04-19 11:23:24\nrr\n\nRecent\n\n\n\n\n\n\n\nMessaging\nRecent\nSearch\n \nsunil\nArun\nsunil\nDream travellers2020-04-19 11:23:38\n55\n\nsunil\nsubin2020-04-19 11:23:46\n5t5t\n\nsunil\nEPIC HOLIDAYS2020-04-19 13:52:40\njyj\n\nsunil\nMarco Polo2020-04-19 11:22:34\nrt\n\nsunil\nSAFARI2020-04-19 11:23:07\n34545\n\nsunil\nredgear2020-04-19 11:23:16\n45\n\nsunil\ntech travel2020-04-19 11:23:24\nrr\n\nRecent', 57, 73, '2020-04-19', '2020-04-19 09:46:59', '0'),
(340, '7d60f19a', 'ioio', 57, 64, '2020-04-19', '2020-04-19 11:02:55', '0'),
(341, 'f0007313', 'yuytyu', 57, 73, '2020-04-19', '2020-04-19 11:03:13', '0'),
(342, 'b60f1fd8', 'ty', 73, 72, '2020-04-22', '2020-04-22 12:12:30', '0'),
(343, '9d2c8097', 'hhhh', 64, 73, '2020-04-22', '2020-04-22 12:34:30', '0'),
(345, '7f076fc6', 'io', 73, 57, '2020-04-22', '2020-04-22 12:48:28', '0'),
(346, 'fde4eef7', 'yy', 73, 72, '2020-04-22', '2020-04-22 12:48:42', '0'),
(348, 'd9b68d12', 'rtrt', 73, 57, '2020-04-22', '2020-04-22 13:01:07', '0'),
(350, '401f8f05', 'ssss', 73, 57, '2020-04-22', '2020-04-22 13:04:19', '1'),
(351, '26d11ba4', 'ssss', 73, 57, '2020-04-22', '2020-04-22 13:04:20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comissions`
--

CREATE TABLE IF NOT EXISTS `comissions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `comkey` char(12) NOT NULL,
  `date` date NOT NULL,
  `amount` float NOT NULL,
  `agencyloginid` int(12) NOT NULL,
  `userloginid` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `comissions`
--

INSERT INTO `comissions` (`id`, `comkey`, `date`, `amount`, `agencyloginid`, `userloginid`) VALUES
(1, 'b75c132d', '2020-04-10', 1000, 64, 57),
(2, '1fcc3723', '2020-03-10', 42930.8, 64, 57),
(3, 'ec8971e3', '2020-04-10', 9000, 64, 57),
(4, '8ac2c9d9', '2020-04-10', 9000, 64, 57),
(5, '8ac2c9d9', '2020-04-10', 9000, 64, 57),
(6, '76016b7f', '2020-04-10', 9000, 64, 57),
(7, '6ab93f44', '2020-04-10', 9000, 64, 57),
(8, 'c1bae0ae', '2020-04-10', 9000, 64, 57);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `commentkey` varchar(12) NOT NULL,
  `comment` varchar(240) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `loginid` int(10) NOT NULL,
  `blogid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `commentkey`, `comment`, `name`, `cdate`, `loginid`, `blogid`) VALUES
(28, '9d3955fd', 'gggggggg', 'Dream travellers', '2020-04-04 04:55:58', 64, 18),
(42, 'dc47c199', 'a', 'ananda', '2020-04-04 06:06:40', 57, 18),
(49, '77394e16', 'aaaaaaaa', 'Dream travellers', '2020-04-04 06:35:33', 64, 20),
(50, '0753c3c7', 'aadddddd', 'ananda', '2020-04-04 06:35:43', 57, 20),
(51, '9477576c', 'aa', 'ananda', '2020-04-04 06:37:49', 57, 20),
(52, 'd8d1ea31', 'sss', 'Dream travellers', '2020-04-04 06:38:08', 64, 20),
(53, 'f8ccf75d', 'ss', 'Dream travellers', '2020-04-04 06:40:24', 64, 20),
(54, '817db537', 'dd', 'ananda', '2020-04-04 08:14:10', 57, 20),
(55, 'a9e4bc93', 'rrrrrrrrrrrr', 'Dream travellers', '2020-04-04 09:31:20', 64, 20),
(56, '34b6cbba', 'aaa', 'Dream travellers', '2020-04-04 09:40:52', 64, 20),
(57, '2119927f', 'ssss', 'ananda', '2020-04-04 09:41:05', 57, 20),
(58, '8cda62d4', 'dfsdf', 'ananda', '2020-04-04 15:26:08', 57, 20),
(59, '7de891e7', 'uuuuuuuuuu', 'ananda', '2020-04-10 11:17:25', 57, 18),
(60, 'c1ca209c', 'F', 'ananda', '2020-04-10 14:08:13', 57, 18),
(61, '11f3f5fa', 'http://localhost/tm/blogview.php?k=daffebd8', 'ananda', '2020-04-10 14:18:29', 57, 18),
(62, '91971be2', 'yuyu', 'ananda', '2020-04-20 16:29:51', 57, 24),
(64, 'c2e9f2f3', 'rrrrrr', 'ananda', '2020-04-21 04:30:28', 57, 28),
(65, '1a9a7e70', '56564', 'ananda', '2020-04-21 04:31:00', 57, 28),
(66, '88d0b74b', 'ttt', 'ananda', '2020-04-21 04:31:07', 57, 28),
(67, '619f66ec', '44', 'Dream travellers', '2020-04-21 04:31:59', 64, 28),
(68, 'cb4e27f7', 'ttt', 'Dream travellers', '2020-04-21 04:32:06', 64, 28),
(69, '43ad4d8f', 'we', 'Admin', '2020-04-21 04:36:31', 1, 28);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ckey` char(8) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `complaint` varchar(250) NOT NULL,
  `creply` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `loginid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `ckey`, `subject`, `complaint`, `creply`, `date`, `loginid`) VALUES
(3, 'bee5b4c1', 'dgdhrtvhrtrh', 'iyuyg;iiojhhkl,jib', 'ssssssssssssssssssssssss', '2020-01-24', 0),
(4, 'f1d4a7a7', 'ouguigbh', 'hjtitgtuyiggytgtysddfyt', '', '2020-01-24', 57),
(5, '0a2631e3', 'qqdqd', 'dqssd', '', '2020-01-24', 57),
(6, 'db1fe524', 'dgdhrtvhrtrh', 'rt', 'fefef', '2020-01-24', 57),
(9, '3d869262', 'dgdhrtvhrtrh', 'fgfgfg', '', '2020-02-10', 60),
(10, '3838513f', 'time delay', 'flight was late', '', '2020-02-11', 64),
(12, '68ed90ab', 'sdsfdfmg', 'sdsd', '', '2020-02-21', 59),
(13, '053f6f65', 'l;;l;', 'ui9uio', '', '2020-02-21', 59),
(14, '19c0401f', 'bug', 'gg', '', '2020-03-30', 64),
(15, 'ded24204', 'bug', 'cvcv', '', '2020-04-05', 64),
(16, '0ffda020', 'Blog approval takes a long time', 'Blog approval is too long ,please reduce waiting time and approve faster.', '', '2020-04-13', 57),
(17, 'e6440ec3', 'bug', 'test1erer', '', '2020-04-22', 73);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fbkey` varchar(12) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `fdate` date NOT NULL,
  `loginid` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fbkey`, `feedback`, `fdate`, `loginid`) VALUES
(1, '5251847b', 'erer', '2020-02-21', 57),
(2, '01698353', 'hghgh', '2020-03-07', 0),
(3, '2487b64c', 'admin test1', '2020-04-01', 0),
(4, '41f6678b', 'admin test1', '2020-04-01', 64),
(5, 'b8ea7bf2', 'hejkfkjefkjefjefjkejfkj', '2020-04-01', 64),
(6, 'bf28449c', 'gg', '2020-04-01', 57),
(7, '4420a7be', 'tytyy', '2020-04-22', 73);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `likekey` varchar(16) NOT NULL,
  `blogid` int(10) NOT NULL,
  `loginid` int(10) NOT NULL,
  `likes` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=173 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `likekey`, `blogid`, `loginid`, `likes`) VALUES
(161, '443e045c', 20, 57, -1),
(162, '6dede5aa', 13, 57, 1),
(163, 'e695fc7e', 28, 57, 1),
(164, 'aaac033d', 19, 57, 1),
(165, 'c3730e31', 20, 57, 1),
(166, '4074b53c', 24, 57, 1),
(167, '99a02a2e', 27, 1, 1),
(168, '3cd1991e', 28, 1, 1),
(169, '13d9eba6', 31, 57, 1),
(170, '30114e7b', 31, 73, 1),
(171, 'e5da1e50', 38, 73, 1),
(172, '85d58973', 13, 73, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE IF NOT EXISTS `logintable` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `status` enum('0','1','2') NOT NULL,
  `lkey` char(8) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `usertype` enum('0','1','2','3') NOT NULL,
  `onlinestatus` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`id`, `status`, `lkey`, `email`, `password`, `usertype`, `onlinestatus`) VALUES
(1, '1', 'admin', 'admin@imperial.com', '25d55ad283aa400af464c76d713c07ad', '0', '0'),
(57, '1', '873e1557', 'ananthakrishnan.gr.kdl@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2', '1'),
(59, '1', 'ed5a5833', 'harikrishnan.grkdl@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0', '0'),
(64, '1', '7c836eba', 'Dreamtravellers@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1', '0'),
(65, '1', '4b7ef4ad', 'EPICHOLIDAYS@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1', '0'),
(66, '1', '8c725c0c', 'SAFARI@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1', '0'),
(67, '1', '91e73bc1', 'NORTONI@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1', '0'),
(68, '1', '414d311c', 'red@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1', '0'),
(72, '1', '7567efba', 'abhsi@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2', '1'),
(73, '1', 'ece13fa4', 'abhiew@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2', '0'),
(77, '1', 'f22c9fa6', 't@t.com', '25d55ad283aa400af464c76d713c07ad', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nkey` varchar(12) NOT NULL,
  `notifi` text NOT NULL,
  `loginid` int(12) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reciever` int(12) NOT NULL,
  `vie` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=156 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `nkey`, `notifi`, `loginid`, `date`, `reciever`, `vie`) VALUES
(113, '22c436f3', 'rrrrrrr', 1, '2020-04-05 18:30:00', 57, '0'),
(114, 'aca13a92', 'rrrrrrr', 1, '2020-04-05 18:30:00', 72, '0'),
(115, 'c7f23854', 'rrrrrrr', 1, '2020-04-05 18:30:00', 73, '0'),
(116, '2c926610', 'rrrrrrr', 1, '2020-04-05 18:30:00', 74, '1'),
(117, 'd4add25c', 'rrrrrrr', 1, '2020-04-05 18:30:00', 75, '1'),
(118, '844fdbf7', 'rrrrrrr', 1, '2020-04-05 18:30:00', 76, '1'),
(119, '6355ec08', 'dddddd', 64, '2020-04-05 18:30:00', 57, '0'),
(120, '233b5927', '2', 64, '2020-04-05 18:30:00', 57, '0'),
(121, '869c586b', 'Your Package '' has been Started', 0, '2020-04-10 18:30:00', 57, '0'),
(122, '31009a78', 'Your Package '' has been Started', 64, '2020-04-10 18:30:00', 57, '0'),
(123, '565d6f77', 'You have finished Your Journey,Rate Your Review by Clicking on Write a Review on Your Cart.See you s', 64, '2020-04-10 18:30:00', 57, '0'),
(124, 'afabf5b5', 'You have finished Your Journey,Rate Your Review by Clicking on Write a Review on Your Cart.See you soon -Imperials', 64, '2020-04-10 18:30:00', 57, '0'),
(125, '20a9520d', 'The Package Kulu-Manali  has been suspended ,for more information Contact  9865481533  ', 64, '2020-04-10 18:30:00', 57, '0'),
(126, '20a9520d', 'The Package Kulu-Manali has been suspended ,for more information Contact 9865481533 ', 64, '2020-04-10 18:30:00', 57, '0'),
(127, 'aa2099f4', 'ttttttt', 64, '2020-04-10 18:30:00', 57, '0'),
(128, '9e329f6a', 'Your Package Kulu-Manali has been Started', 64, '2020-04-22 12:26:30', 57, '0'),
(129, '27e5d817', 'Your Package Kulu-Manali has been Started', 64, '2020-04-22 12:27:17', 57, '0'),
(130, 'a396729d', 'Your Package Kulu-Manali has been Started', 64, '2020-04-22 12:27:42', 57, '0'),
(131, 'bff35a7a', 'Your Package Kulu-Manali has been Started', 64, '2020-04-22 12:27:47', 57, '0'),
(132, '6ac0b32e', 'You have finished Your Journey,Rate Your Review by Clicking on Write a Review on Your Cart.See you soon -Imperials', 64, '2020-04-22 12:28:24', 57, '0'),
(133, 'ed243f35', 'odraaaaaa', 64, '2020-04-22 12:29:16', 57, '0'),
(134, '17e4c526', 'weew', 1, '2020-04-22 14:25:05', 72, '1'),
(135, '59595d98', 'ere', 1, '2020-04-22 14:26:23', 64, '1'),
(136, 'd3af4e1b', 'Your blog Creative Ideas â€“ DIY Easy Sprinkler from Old Pool Noodle has been approved.See you again!Hope you enjoy. ', 1, '2020-04-22 14:26:37', 65, '1'),
(137, 'af947976', 'Your blog Creative Ideas â€“ DIY Easy Sprinkler from Old Pool Noodle has been rejected due to violation of terms.You can try again after editing blog ', 1, '2020-04-22 14:26:53', 65, '1'),
(138, 'e3653134', 'Your blog Creative Ideas â€“ DIY Easy Sprinkler from Old Pool Noodle has been approved.See you again!Hope you enjoy. ', 1, '2020-04-22 14:27:40', 65, '1'),
(139, '8ae22398', 'fff', 1, '2020-04-22 14:54:40', 64, '1'),
(140, '83b6ffe0', 'fff', 1, '2020-04-22 14:54:40', 65, '1'),
(141, 'b133d9e6', 'fff', 1, '2020-04-22 14:54:40', 66, '1'),
(142, '48b567ba', 'fff', 1, '2020-04-22 14:54:41', 67, '1'),
(143, '6d3b03d4', 'fff', 1, '2020-04-22 14:54:41', 68, '1'),
(144, 'ee1ee4c1', 'fff', 1, '2020-04-22 14:54:41', 77, '1'),
(145, '5bfa22f1', 'tyt', 1, '2020-04-22 14:55:34', 1, '1'),
(146, '5372909e', 'tyt', 1, '2020-04-22 14:55:34', 57, '1'),
(147, '53d75b2c', 'tyt', 1, '2020-04-22 14:55:34', 59, '1'),
(148, '8e2bdd8c', 'tyt', 1, '2020-04-22 14:55:34', 64, '1'),
(149, '509a8cd4', 'tyt', 1, '2020-04-22 14:55:34', 65, '1'),
(150, 'dab769f2', 'tyt', 1, '2020-04-22 14:55:34', 66, '1'),
(151, '73c5e462', 'tyt', 1, '2020-04-22 14:55:34', 67, '1'),
(152, '4ffb9437', 'tyt', 1, '2020-04-22 14:55:34', 68, '1'),
(153, '818b612f', 'tyt', 1, '2020-04-22 14:55:34', 72, '1'),
(154, '1629a3e5', 'tyt', 1, '2020-04-22 14:55:34', 73, '1'),
(155, 'a4119b41', 'tyt', 1, '2020-04-22 14:55:34', 77, '1');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pkey` char(8) NOT NULL,
  `packagename` varchar(100) NOT NULL,
  `packagetype` varchar(100) NOT NULL,
  `packageamount` int(100) NOT NULL,
  `packagedetails` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `start` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `days` int(100) NOT NULL,
  `noc` int(5) NOT NULL,
  `pimage` text NOT NULL,
  `loginid` int(10) NOT NULL,
  `date` date NOT NULL,
  `rating` float NOT NULL,
  `ratecount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `pkey`, `packagename`, `packagetype`, `packageamount`, `packagedetails`, `category`, `start`, `destination`, `days`, `noc`, `pimage`, `loginid`, `date`, `rating`, `ratecount`) VALUES
(13, '7f3c4a53', 'Kulu-Manali', 'Domestic', 45000, ' Manali is a high-altitude Himalayan resort town in Indiaï¿½s northern Himachal Pradesh state. It has a reputation as a backpacking center and honeymoon destination. Set on the Beas River Manali is a high-altitude Himalayan resort town in Indiaïn norther Manali is a high-altitude Himalayan resort town in Indiaï¿½s northern Himachal Pradesh state. It has a reputation as a backpacking center and honeymoon destination. Set on the Beas RiverManali is a high-altitude Himalayan resort town in Indiaï¿½s northern Himachal Pradesh state. It has a reputation as a backpacking center and honeymoon destination. Set on the Beas RiverManali is a high-altitude Himalayan resort town in Indiaï¿½s northern Himachal Pradesh state. It has a reputation as a backpacking center and honeymoon destination. Set on the Beas River', 'summer', 'seff', 'manali', 2, 2, '1431610.jpg', 64, '2020-02-11', 1.7, 1),
(21, 'ce86684a', 'Kulu-Manali', 'International', 15000, 'fdgdfgdf', 'Adventure', 'Kochi', 'Goa', 13, 0, '18949.jpg', 64, '2020-02-18', 3.85, 2),
(23, 'a139eabf', 'Angels', 'International', 250000, 'The trip arranged for family\r\nduration 14 days,4days in dubai,\r\n5days in neywork and 5 days in denmark\r\nthen return to kochin.\r\n\r\nTrip cost around 250000 for 4 persons including kids,for more details contact \r\nour desk .', 'Family', 'Kochi', 'Dubai', 14, 4, '1431610.jpg', 64, '2020-04-01', 5, 1),
(24, '661b6d0a', 'High hills', 'Domestic', 23000, 'This is a 7 days trip on goa', 'Adventure', '', 'Goa', 7, 1, '1_revised.jpg', 64, '2020-04-12', 0, 0),
(25, '4e2e3ade', 'Shore', 'International', 450000, 'This is a 10 days package for  2 persons', 'Cruise', 'Kochi', 'Malideeves', 10, 2, 'hero_2.jpg', 64, '2020-04-12', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `ratekey` varchar(12) NOT NULL,
  `head` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `rating` float NOT NULL,
  `loginid` int(12) NOT NULL,
  `packageid` int(12) NOT NULL,
  `agencyid` int(12) NOT NULL,
  `rdate` date NOT NULL,
  `arating` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `ratekey`, `head`, `review`, `rating`, `loginid`, `packageid`, `agencyid`, `rdate`, `arating`) VALUES
(27, '8e7165a6', 'looong ride', 'eeeeeeeeeeeeeeeeeee', 4.7, 57, 18, 14, '2020-04-10', 3.8),
(28, 'erwerwe', 'heavyyyyyyy', 'e trip arranged for family duration 14 days,4days in dubai, 5days in neywork and 5 days in denmark then return to kochin. Trip cost around 250000 for 4 persons including kids,for more details contact\r\n\r\n\r\ne trip arranged for family duration 14 days,4days in dubai, 5days in neywork and 5 days in denmark then return to kochin. Trip cost around 250000 for 4 persons including kids,for more details contact\r\n\r\ne trip arranged for family duration 14 days,4days in dubai, 5days in neywork and 5 days in denmark then return to kochin. Trip cost around 250000 for 4 persons including kids,for more details contact', 5, 57, 23, 14, '2020-04-01', 5);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE IF NOT EXISTS `subscription` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `subkey` varchar(12) NOT NULL,
  `loginid` int(12) DEFAULT NULL,
  `mail` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(300) NOT NULL,
  `phoneno` int(16) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `subkey`, `loginid`, `mail`, `message`, `name`, `phoneno`, `date`) VALUES
(19, 'd5d77257', 57, 'ananthakrishnan.gr.kdl@gmail.com', 's', 'uuuuuuuuuuuuuuuuuuu', 34, '2020-04-06 15:17:44'),
(21, 'cc3fd121', 57, 'Dreamtravellers@gmailw.com', 'e', 'uuuuuuuuuuuuuuuuuuu', 0, '2020-04-06 15:19:27'),
(22, 'd08ad119', 57, 'Dssd@gmail.com', '6uyuy', 'fgf', 34, '2020-04-12 04:09:28'),
(23, 'addf18e1', 73, 'ananthaukrishnan.gr.kdl@gmail.com', 'k', 'uuuuuuuuuuuuuuuuuuu', 34, '2020-04-22 10:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ukey` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userdp` text NOT NULL,
  `uabout` varchar(256) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `dist` varchar(20) NOT NULL,
  `pin` varchar(12) NOT NULL,
  `ph` varchar(12) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ukey`, `username`, `userdp`, `uabout`, `fname`, `lname`, `address`, `gender`, `dob`, `dist`, `pin`, `ph`, `loginid`) VALUES
(17, '978cf8d4', 'ananda', 'user5.jpg', 'Ananda aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Anandha', 'Krishnan GR', 'ananda krishnan ,karthika', 'male', '2020-01-01', 'kollam', '691536', '8111966294', '57'),
(19, '6e89fe0f', 'subin', 'person_3_sq.jpg', '7567efba', 'Adwaith', 'Mohan', 'adwrererhrrrrr', 'Male', '2020-03-04', 'thiruvananthapuram', '691310', '7560917679', '72'),
(20, 'f7fb5153', 'Arun', 'person_1.jpg', 'ece13fa4', 'Adwaith', 'Mohan', 'hggf', 'Male', '2020-03-05', 'thiruvananthapuram', '691306', '7560917', '73'),
(23, '0676f83a', 'adwaith007', 'Penguins.jpg', '18ee1b10', 'Adwaith', 'Mohan', 'hggf', 'male', '2020-03-05', 'thiruvananthapuram', '691306', '7560917', '76');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
