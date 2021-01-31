-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2016 at 07:31 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `catergory`
--

CREATE TABLE `catergory` (
  `name` varchar(225) NOT NULL,
  `caterpage` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catergory`
--

INSERT INTO `catergory` (`name`, `caterpage`) VALUES
('Dry fruits', 'alldryfruits.php'),
('Fruits and vegetables', 'allfruitsvegi.php\r\n'),
('Groceries and Staples', 'allgrocery.php'),
('Health drinks', 'allhealthdrink.php');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_name` varchar(225) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(225) NOT NULL,
  `product_details` varchar(500) NOT NULL,
  `product_store` varchar(100) NOT NULL,
  `product_cater` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `product_price`, `product_image`, `product_details`, `product_store`, `product_cater`, `product_id`) VALUES
('Almond-Blue Diamond(1 Pck)', 650, 'images/almond.jpg', 'Blue Diamond Growers'' naturally nutritious Wasabi and Soy Sauce almonds are roasted and seasoned with spicy BOLD flavors.', 'kannan', 'dryfruits', 1),
('Cashewnut( 1 pck)', 65, 'images/cashewnut.jpg', 'Superior Quality Fun Time Crunch.Fit 4 Active Lifestyle.', 'kannan', 'dryfruits', 2),
('Lion Dates(1 Pck)', 108, 'images/dates1.jpg', 'We don''t use oil for its glossiness.', 'kannan', 'dryfruits', 3),
('Pistachios(1 Pck)', 310, 'images/pista.jpg', 'Salted Pista is a drupe, containing an elongated seed, which is the cooked portion. ', 'kannan', 'dryfruits', 4),
('Raisins(100g pouch)', 40, 'images/raisin.jpg', 'Raisins help to correct iron deficiency anemia and promote blood clotting during wound healing', 'vasantham', 'dryfruits', 5),
('Walnut(1 Pck)', 300, 'images/walnut.jpg', 'Walnut Kernels are the rich in nutrition and add a palatable flavour to any dish. It has good quantity calories enclosed in hard brown colored shells; the kernels inside the shell are off white in color that is covered with a thin brown skin.', 'boomika', 'dryfruits', 6),
('Tomato(1 Kg)', 8, 'images/tom1.jpg', 'Tomato is an amazingly popular and versatile food that comes in several different varieties that vary in shape, color and size.', 'kannan', 'Fruits and vegetables', 7),
('Tomato(1 Kg)', 7, 'images/tom2.jpg', 'There are tiny cherry tomatoes, Italian pear-shaped tomatoes, bright yellow tomatoes, and the green tomato. ', 'boomika', 'Fruits and vegetables', 8),
('Tomato(1 Kg)', 8, 'images/tom3.jpg', 'Simply include a tomato in your daily meal and protect yourself from the dangers of cancer and heart diseases.', 'vasantham', 'Fruits and vegetables', 9),
('Onion(1 Kg)', 20, 'images/oni1.jpg', 'Onion can fill your kitchen with a thick spicy aroma. It is a common base vegetable in most Indian dishes, thanks to the wonderful flavor that it adds to any dish.', 'kannan', 'Fruits and vegetables', 10),
('Onion(1 Kg)', 17, 'images/oni2.jpg', 'Onions are high in sulphur, vitamin B6 and B9. It has high quantities of water and naturally low in fat. It is high in phytochemical compounds', 'boomika', 'Fruits and vegetables', 11),
('Onion(1 Kg)', 19, 'images/oni3.jpg', 'It is a versatile vegetable that can be used raw, sauteed, caramelized, roasted, deep fried, pureed or boiled as required. It lends itself very well to almost any cuisine.', 'vasantham', 'Fruits and vegetables', 12),
('Carrot(1 kg)', 40, 'images/carrot.jpg', 'The carrot is a root vegetable lengthy, narrow and cylindrical/cone shaped generally bright orange in color & available during the year.', 'kannan', 'Fruits and vegetables', 13),
('Chilli(100 g)', 5, 'images/chilli.jpg', 'Green chillies have an attractive fresh flavor and a sharp bite. These chillies have rich vitamin a and vitamin c content. We can''t think of Indian food preparation without a dash of green chillies.', 'boomika', 'Fruits and vegetables', 14),
('Chilli', 4, 'images/chilli2.jpg', 'Green chilies are rich in dietary fiber which is important for a healthy digestive system. These are strong anti-oxidants and prevent against free radicals. They are rich in Vitamin A, which in turn is very good for your eyes and skin.', 'vasantham', 'Fruits and vegetables', 15),
('Lemon(1 Piece)', 3, 'images/lemon.jpg', 'Lemons are oval in shape and feature a yellow, texturized external peel. Like other citrus fruits, their internal flesh is covered in segments, with the average lemon having eight to ten. Depending on variety the tartness could vary.', 'vasntham', 'Fruits and vegetables', 16),
('Beans(1 kg)', 50, 'images/beans.jpg', 'French beans also called green beans contain green, rounded, velvety pods and taste best when they are still young, luscious and tender. They have a crunchy feel and sweet flavor. ', 'kannan', 'Fruits and vegetables', 17),
('Bitter gourd(1 kg)', 42, 'images/bitter.jpg', 'Bitter Gourd is a well-liked vegetable in Asian countries, where its health benefits are famous, particularly, and its ability to lower blood glucose in diabetics. It is a tropical vegetable; which derives its name from its very bitter flavor, in fact is among the most bitter of all vegetables.', 'boomika', 'Fruits and vegetables', 18),
('Bottle gourd(1 Kg)', 18, 'images/bottle.jpg', 'Bottle gourd is a long slim vegetable with a light green soft skin and a white inner flesh. Bottle gourd is one of the favorite vegetables of Indians and contains numerous health benefits. They are particularly good for old aged peoples.', 'vasantham', 'Fruits and vegetables', 19),
('Garlic(1 Kg)', 150, 'images/garlic.jpg', 'Garlic is a white, cloven, juicy, thin skinned, pungent & white fleshed, aromatic edible bulb that belongs to the lily family. Garlic is organized in a head, called the "bulb," which is completed up of separate cloves.', 'boomika', 'Fruits and vegetables', 20),
('Capsicum(1 Kg)', 46, 'images/cap.jpg', 'Capsicums add a dynamic personality to your food owing to its exciting color. It mixes into any dish and brings out a certain zing and flavor. It offers more than 100% of the everyday requirement of Vitamin C. ', 'kannan', 'Fruits and vegetables', 21),
('Cauliflower(1 piece)', 20, 'images/califlower.jpg', 'Cauliflower contains a firm but soft texture and a slightly bitter taste with a sulfurous hint. It is excellent basis of minerals like phosphorous, manganese and potassium. 1 cup of boiled cauliflower can already provide you 55 mg of vitamin C.', 'boomika', 'Fruits and vegetables', 22),
('Brinjal(1 Kg)', 40, 'images/brinjal.jpg', 'Brinjal is oval-round purple with white stripes. These are egg-shaped, smooth and sleek skinned, white-striped purple coloured, enjoyably pungent tasting vegetables. These are low in saturated Fat, sodium and cholesterol.', 'vasantham', 'Fruits and vegetables', 23),
('Potato(1 Kg)', 17, 'images/potato.jpg', 'Potatoes have rich and smooth texture filling, reasonable in calories, non-fattening, and are nutrient dense, which means you obtain many nutrients for the amount of calories they have. It is a superior supply of carbohydrates, dietary fiber and numerous minerals like potassium, copper, iron and magnesium.', 'boomika', 'Fruits and vegetables', 24),
('Ladies finger(1 Kg)', 36, 'images/lady.jpg', 'Ladies Finger is an edible pea pod and although can be eaten as raw or fresh. It is a wonderful supply of important vitamins such as vitamins A, C, K, E, and B complex, as well as iron, potassium, calcium, copper, sodium, selenium, magnesium, manganese and zinc. ', 'kannan', 'Fruits and vegetables', 25),
('Black raisins(200 g)', 79, 'images/black.jpg', 'Black Seedless Raisin, the most famous variety of dried grape, is widely known for its sugary taste & juicy flavor. Black Seedless Raisin comes with quite a few medicinal properties, which assist us to take proper care of our health. ', 'boomika', 'dryfruits', 26),
('Figs(200 g)', 136, 'images/fig.jpg', 'Figs are bell shaped fruits with wrinkled and tough skin. They are one of the sweetest fruits and also have a very sugary scent. Fig is logically rich in much wellbeing benefiting anti-oxidants, phyto-nutrients and vitamins.', 'vasantham', 'dryfruits', 27),
('Apple(1 Kg)', 105, 'images/apple.jpg', 'Royal gala apples are bright red, thin skinned, white fleshed fruits with a mild sweet flavour and are native to New Zealand.', 'kannan', 'Fruits and vegetables', 28),
('Banana(1 Kg)', 20, 'images/banana_yel.jpg', 'Yelakki bananas are tiny sized bananas around 3- 4 inches lengthy, contain a thinner skin and better shelf life than Robusta bananas. Green fruits changes golden yellow on ripening, and flesh is white color. ', 'boomika', 'fruits and vegetables', 29),
('Green banana(1 Kg)', 28, 'images/banana_grn.jpg', 'Green banana is an unripened yellow banana. It is a superior supply of fiber, minerals, and vitamins and contains a starch. It is rich in vitamin B6, C, fiber & potassium. It performs more like a fiber than a starch. The resistant starch in green bananas has numerous health benefits.', 'vasantham', 'Fruits and vegetables', 30),
('Grapes-panner(1 Kg)', 46, 'images/grapes_blk.jpg', 'Fresho is our brand of fresh fruits and vegetables which are individually handpicked everyday by our experienced and technically competent buyers. Our buying, storing and packaging processes are tailored to ensure that only the fresh, nutrient dense, healthy and delicious produce reaches your doorstep.', 'kannan', 'Fruits and vegetables', 31),
('Grapes-green(1 Kg)', 66, 'images/grapes_grn.jpg', 'Fresho is our brand of fresh fruits and vegetables which are individually handpicked everyday by our experienced and technically competent buyers. Our buying, storing and packaging processes are tailored to ensure that only the fresh, nutrient dense, healthy and delicious produce reaches your doorstep.', 'boomika', 'Fruits and vegetables', 32),
('Mosami(4 pcs)', 52, 'images/mosami.jpg', 'Sweet Lime is soft yellow colored, mildly sweet tasting, juicy fruits that is resident to South Asia. It is a versatile fruit with a sweet and sour flavor. This wonderful fruit renders terrific nutritional charge. It is little in calories; just 43 calories per 100 grams. The peel can differ in thickness from lean to quire thick.', 'vasantham', 'Fruits and vegetables', 33),
('Orange(1 Kg)', 44, 'images/orange.jpg', 'Fresho is our brand of fresh fruits and vegetables which are individually handpicked everyday by our experienced and technically competent buyers. Our buying, storing and packaging processes are tailored to ensure that only the fresh, nutrient dense, healthy and delicious produce reaches your doorstep. ', 'boomika', 'Fruits and vegetables', 34),
('Papaya', 22, 'images/papaya.jpg', 'Papaya includes thin smooth skin dark green in color when undeveloped, which changes to orange or bright yellowish, as it ripens. It includes a delicious, succulent orange flesh sometimes with pink or yellow hues. Inside the internal cavity of the fruit are numerous black, round seeds covered in a gelatinous-like substance (some varieties are seedless).', 'boomika', 'Fruits and vegetables', 35),
('Watermelon(1 pc)', 70, 'images/water.jpg', 'Watermelon Kiran is a smaller range of watermelons, oblong in shape with a dark green banded rind and pinkish-red flesh, interspersed with numerous brownish-black seeds. This variety includes a thinner rind than other varieties of watermelon. The flesh is sugary, juicy with a grainy texture.', 'vasantham', 'Fruits and vegetables', 36),
('Sweet Corn(1 pc)', 10, 'images/sweetcorn.jpg', 'Sweet corn is an annual with, yellow and white, bi-colored ear. It is a fine supply of potassium and folate. Fresh sweet corn is one of summer''s cooking treats, whether it''s sauteed, souffleed or boiled on the cob.', 'boomika', 'Fruits and vegetables', 37),
('Cherry(100 g)', 20, 'images/cherry.jpg', 'Cherries are drupe fruits with a central seed surrounded by edible fleshy fruit measuring 2 cm in diameter. Externally the fruits have bright shiny red or purple color with very thin peel', 'boomika', 'dryfruits', 38),
('Masala Cashew(100 g)', 99, 'images/cash.jpg', 'Masala Cashews are a quick nutritious snack; this particular variety is perfectly coated in black pepper. It is a tasty Indian snack roasted to perfection with the goodness of spices such as dry mango powder (amchur), Black pepper etc. Cashews are outstanding supply of fiber & protein. Cashews are a fine supply of minerals like sodium, potassium, calcium.', 'boomika', 'dryfruits', 39),
('Refined -Sunflower Oil, 1 ltr', 83, 'images/gold.jpg', 'Gold Winner Refined Sunflower oil is appreciated for its light savor, frying presentation and health reimbursement. It improves heart health and reduces chance of heart assault. And it keeps your family fit and fit and is the most excellent product in its kind.', 'kannan', 'grocery', 40),
('Sunflower Refined Oil- 5 ltr Can', 429, 'images/fortune.jpg', 'Fortune refined sunflower oil is light, strong and wholesome oil that is effortless to digest. Rich in natural vitamins, it consists mostly of poly-unsaturated fatty acids (PUFA) and is low in saturated fats. Fortune refined sunflower oil goes during the greatly specialized procedure of winterization that removes approximately all the wax content in the oil, making it the lightest oil offered today.', 'boomika', 'grocery', 41),
('Olive Oil - Extra Virgin, 250 ml', 330, 'images/olive.jpg', '100% Extra Virgin olive oil. The best quality you can buy, use it to add the delicious taste of the Mediterranean to your salads, soups and casseroles. Olive oil. A blend of refined and virgin olive oils especially good for everyday cooking and homemade mayonnaise.', 'kannan', 'grocery', 42),
('Rice Bran Oil, 1 ltr Pouch', 91, 'images/porna.jpg', 'Rice Bran Is Naturally Enriched With Multiple Nutrients That Translate Into Health Benefits For Every Member In The Family. It Is Recommended By Doctors And Scientists All Over The World.', 'vasantham', 'grocery', 43),
('Sunflower Refined Oil-1ltr Pouch', 82, 'images/for.jpg', 'Fortune Sun Lite Refined Sunflower Oil is a healthy, light and nutritious oil that is simple to digest. Rich in natural vitamins, it consists mostly of poly-unsaturated fatty acids (PUFA) and is low in soaked fats. It is strong and makes you feel light and active level after heavy food.', 'boomika', 'grocery', 44),
('Black Pepper,100 gm Pouch', 89, 'images/pepper.jpg', 'Black Peppers are known as spice and herbs. It contains high content of Vitamins especially Vitamin K, besides Vitamin C and A. These peppers also contain many benefits as a medicine. Similarly the dietary fiber content is high. Pepper has no cholesterol and it is extremely low in sugar content.', 'kannan', 'grocery', 45),
('Turmeric, 200 gm Pouch', 35, 'images/tumeric.jpg', 'Turmeric Sticks smells clean and very hygienic. It contains many medicinal values and also utilized as a cosmetic. It contains an antibacterial effect which treats many skin problems and decreases unwanted hair growth.', 'boomika', 'grocery', 46),
('Sakthi Chilli Powder,100g', 33, 'images/chil.jpg', 'Chilli powder can be used as a rub or mixed with oil for marinades on Paneer or sliced vegetables.', 'vasantham', 'grocery', 47),
('Parrys Sugar - White Label, 1 kg Pouch', 50, 'images/sugar.jpg', 'Parry''s Pure Refined Sugar plays a vital role in maintaining our health. It is preferred for its quality, texture and flavor. Parry''s sugar goes through best in class refinement and is refined to 99.9%. It contains uniform grain size and departs no residue.', 'kannan', 'grocery', 48),
('Tata Salt - Iodized, 1 kg Pouch', 17, 'images/salt1.jpg', 'Tata Iodized Salt is obtained by evaporating sea water or brine in shallow basins by wind and sunlight. It is the essence of all life, enabling good strength and health. Tata Iodine Salt helps to standardize metabolism and development, particularly in babies and children. It is kindness that goes into every pack of Tata Iodized Salt.', 'boomika', 'grocery', 49),
('Tata Salt - Lite, 1 kg Pouch', 29, 'images/salt2.jpg', 'Low sodium salt\r\n\r\nNutrition Information: Energy 0 kcal, Fat Carbohydrate, Protein 0g, Fatty Acids, 0g, Vitamins, Sodium, Potassium 7.8g, Iodine 15 ppm.', 'vasantham', 'grocery', 50),
('Basmati Rice, 1 kg Pouch', 75, 'images/basmathi.jpg', 'Basmati rice is a long-grained range of rice native to India. These are rigid, white, thin and long grains that contain a characteristically fragrant aroma. Basmati rice comparatively includes less sugar content.', 'kannan', 'grocery', 51),
('Idli Rice, 1 kg Bag', 35, 'images/idle.jpg', 'Idli Rice Is Wholesome As It Is A Rich Supply Of Fibers And Is Effortless To Digest And Strong. It Is A Great Supply Of Carbohydrates And Proteins. They Are Light And It Can Create In Jiffy With Minimal Ingredients.', 'boomika', 'grocery', 52),
('Ponni Rice, 1 kg ', 51, 'images/ponni.jpg', 'Boiled Rice Is Clean And Pure. The Main Feature Of This Rice Is That It Withstands Extended Shelf Life. It Relishes In Aroma, Given That A High Nutrition Value To Anyone''S Diet.', 'vasantham', 'grocery', 53),
('Toor Dal, 1 kg Pouch', 180, 'images/toor.jpg', 'Toor Dal Completes The Indian Platter With Its Distinctive Inherent Flavor, Fragrance And Nutrition. These Are Wealthy Source Of Protein And Simple To Digest And Cook.', 'kannan', 'grocery', 54),
('Moong Dal, 1 kg Pouch', 130, 'images/moong.jpg', 'Moong Dal Is Skinned And Flat Yellow Moong Dal Which Is Simple In Food Preparation And Delicious In Serving. It Is Very Light In Digestion Compare To Other Legumes. It Is A Fine Supply For A Variety Of Minerals Vitamins And Vitamin B5.', 'boomika', 'grocery', 55),
('Channa Dal, 1 kg Pouch', 79, 'images/channa.jpg', 'Channa Dal Is A Ready Supply Of Proteins For A Balanced Diet Containing Little Or No Meat. It Is Nutty Flavor And Sweet, This Dal Is Amongst The Most Famous Dal In India. Channa Dal Contains A Mild Sweet Taste When Cooked And Is Rich Nutritious.', 'vasantham', 'grocery', 56),
('Paper boat- anar', 30, 'images/anar.jpg', ' Anar has such commendable antioxidant properties that it probably lectured green tea on the matter. And speaking of beating – Anar is good for the heart, its fiber is kind to the weighing scale, and its abundant Vitamin C is great for immunity.', 'kannan', 'health', 57),
('Paper boat-aamras', 30, 'images/amm.jpg', ' A silkesque ale cascading down your throat - Soothing, serenading and more importantly, lingering. To remind you that the mango is indeed the true king of the fruit realm. And that we cannot help but submit to its tasty tyranny.', 'boomika', 'health', 58),
('Paper boat-kokum', 30, 'images/kokum.jpg', 'sherbet made from Kokum berries, a hint of cardamom, cumin and sugarcane extract has been described as the reason why Ratna fell and decided to name an entire district after the incident. But Ratnagiri''s dubious nomenclature aside, Kokum is a relaxant, an anti-oxidant and an appetizer. ', 'vasantham', 'health', 59),
('Paper boat-jamun', 30, 'images/jamun.jpg', 'Jamun Kala Khatta weaves in several nutritional quadrants quite seamlessly. A great source of essential minerals like calcium, potassium, magnesium, phosphorus and sodium, Jamun is the heavy hitter here with anti-diabetic, pro-digestive and skin-clearing properties.', 'kannan', 'health', 60),
('Paper boat-golgappe', 30, 'images/gol.jpg', 'Other than the functional benefits of salivating (of there are many we’re sure), Golgappe ka Pani has tamarind, lemon juice and a hint of red chillies. The tamarind makes it a awesome immunity booster (what with its anti-oxidant properties and all), while the lemon juice makes it a potent digestive aid. ', 'boomika', 'health', 61);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(225) NOT NULL,
  `storepage` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `store_name`, `storepage`, `image`) VALUES
(1, 'Kannan Departmental Store', 'store3.php', 'images/img1.jpg'),
(3, 'Vasantham Super Market', 'store4.php', 'images/img2.jpg'),
(4, 'Boomika Supermarket', 'store2.php', 'images/img3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `address_1` varchar(225) NOT NULL,
  `address_2` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `pincode` int(6) NOT NULL,
  `contact` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `address_1`, `address_2`, `city`, `state`, `pincode`, `contact`) VALUES
(9, 'amritha', '123am', 'amritha', 'tk', 'amrita@gmail.com', '2,manjankara st', 'south masi st', 'madurai', 'tamil nadu', 625001, 0),
(10, 'prakalpa', 'password', 'Prakalpa', 'RS', 'rsprakalpa@gmail.com', '13/1,Panthadi 6th street,', 'thavuttu sandhai', 'madurai', 'tamil nadu', 625001, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catergory`
--
ALTER TABLE `catergory`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`),
  ADD UNIQUE KEY `store_name` (`store_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
