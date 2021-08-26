-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 10:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `writer_name`, `publication_status`, `blog_image`, `blog`, `created_at`, `updated_at`) VALUES
(5, 'SYLHET TOUR REVIEWS', 'জীবনানন্দ দাশ', 1, 'admin/blog-images/SYLHET TOUR REVIEWS – A MUST READ.jpg', '<p>Have you even been to the greenest part of Bangladesh? If not, take a virtual tour through this very Sylhet tour reviews prepared by our experts. So, let&rsquo;s get started.</p>\r\n\r\n<p>The Sylhet district is called the country of two leafs in one bud. Besides the natural beauty, Sylhet district has the amazing of the glorious history. This district&rsquo;s remarkable tea garden has taken place in the heart of Local and foreign tourists. Besides the Tea gardens there are a lot of tourist attractions in Sylhet such as, gardens Rataragul water lake, Hakaluki estates, Lalakhal, Bholaganj, Tamabil, Bichanakandi and Jaflong etc. There are a variety of different languages and cultures of the indigenous peoples living here. There are 20 visitor attractions found in Sylhet. This can be 30% of all traveler attractions recorded in Sylhet Division. The major sorts of traveler attractions recorded here are nature attractions and galleries. At that point there&rsquo;s moreover entertainment parks recorded in Sylhet.</p>\r\n\r\n<h2><strong>A Little Overview on Sylhet Tour Reviews</strong></h2>\r\n\r\n<p>Sylhet is an ancient township located on the northeastern border of Bangladesh. Celebrated as the otherworldly capital of the nation, it is wealthy in woodland, minerals and fisheries and normal magnificence. The lovely view of Jaintia Slopes, the rich magnificence of Jaflong, and the rolling rocks of Bholaganj surprise the tourists. Here described some most visited tourist places in Sylhet.</p>\r\n\r\n<h3><strong>Sylhet Tour Reviews &ndash; Places to Visit</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Ratargul Swamp Forest</strong></li>\r\n</ul>\r\n\r\n<p><img alt=\"Sylhet tour reviews\" src=\"https://blog.amarroom.com/wp-content/uploads/2018/12/Ratargul_Swamp_Forest_Sylhet.-1024x683.jpg\" /></p>\r\n\r\n<p>This is one of 22 swamp forests within the world. The eye-catching excellence of this forest pulls in guests from all the corners of the nation. It is found in Gowainghat upazila of Sylhet. A parcel of sightseers come to Sylhet to appreciate the magnificence of the forest. It is almost 26 kilometers away from Sylhet city. This exquisite forest may be compared to Amazon. It is additionally known as the world&rsquo;s greatest freshwater swamp forest. According to the forest division, the measure of this forest is 3,325.61 acres. Within the forest, different species of wild creatures like Tiger, Squirrel, Monkeys, and Eggs and numerous other creatures are seen.</p>\r\n\r\n<ul>\r\n	<li><strong>Bisnakandi</strong></li>\r\n</ul>\r\n\r\n<p><img alt=\"Sylhet tour reviews\" src=\"https://blog.amarroom.com/wp-content/uploads/2018/12/Bisnakandi-1024x576.jpg\" /></p>\r\n\r\n<p>This astonishing place of natural excellence is found at Gowainghat sub-district in Sylhet district. The most attraction of this spot is the waterway. The place appears like a shake bed as there are stones scattered within the waterway. The magnificence of nature is dazzling here. In spite of the fact that it needs a long travel to reach this spot, the quietness and excellence of nature evacuate all the fatigues of the tourists. The best time to visit there is rainy season.</p>\r\n\r\n<ul>\r\n	<li><strong>Jaflong</strong></li>\r\n</ul>\r\n\r\n<p><img alt=\"Sylhet tour reviews\" src=\"https://blog.amarroom.com/wp-content/uploads/2018/12/maxresdefault-1024x576.jpg\" /></p>\r\n\r\n<p>Enjoying the Sylhet tour reviews? Here, we are presenting the most beautiful Jaflong. It is one the most visited visitor attractions in Bangladesh. It is 60 kilometers away from Sylhet city which is approximately one-and-a-half-hour travel from Sylhet city by road. The most marvelous perspective of Jaflong is the collection of stones from the slopes and tea gardens. Jaflong is arranged at the foot of the Khasia slopes and along Mari Stream. Mari Waterway has started from the Himalayas Mountain. A Million tons of stone come in with the tide of the waterway. You&rsquo;ll unquestionably appreciate the collection of stones through the journey of the Mari Waterway. This waterway is additionally known as the Piayeen River.</p>\r\n\r\n<ul>\r\n	<li><strong>Lalakhal</strong></li>\r\n</ul>\r\n\r\n<p><img alt=\"Sylhet tour reviews\" src=\"https://blog.amarroom.com/wp-content/uploads/2018/12/Lala-Khal-2.jpg\" /></p>\r\n\r\n<p>Lalakhal is located in Jointapur Upazila around 35 km away from Sylhet city. The portion of lalakhal close Tamabil Street title Shari River. The foremost appealing and curiously thing of this river is different color of water. Water of distinctive portion of this waterway be different such as blue, green and crystal. You&rsquo;ll be able reach Lalakhal by boat or speed boat on the crystal water of Shari River.</p>\r\n\r\n<ul>\r\n	<li><strong>Hakaluki Haor</strong></li>\r\n</ul>\r\n\r\n<p><img alt=\"Sylhet tour reviews\" src=\"https://blog.amarroom.com/wp-content/uploads/2018/12/Resting_Tanguar_Haor_Sunamganj_Sylhet.jpg\" /></p>\r\n\r\n<p>Hakaluki haor is consisted with 238 swamp or bill. It is a region of tremendous sweet water. Two stream Juri and panai are the most source of water of this haor. Hakaluki fills with water within the stormy season. In this time its profundity is 2-6 meter. The most bills are: Chtla charge, Cukia charge, Pinglar kona charge, futi charge, Tural charge, Tekuni charge, Paol charge, Juyala charge, Khayarkona charge, balijuri charge, Kukurdubi charge, Birai charge, Dudal charge etc. It is a beautiful place to visit for the visitors.</p>\r\n\r\n<ul>\r\n	<li><strong>Tamabil</strong></li>\r\n</ul>\r\n\r\n<p><img alt=\"Sylhet tour reviews\" src=\"https://blog.amarroom.com/wp-content/uploads/2018/12/jaflong.jpg\" /></p>\r\n\r\n<p>Ever green slopes and crystal water of lake can deliver you an incredible touch of nature. Truly it is amazing!! The land port Tamabil is located at Goainghat Upazila in Shylet. On street it is approximately 56 km from Shylet city. It is known moreover as jaflong zero point. As it may be a border region so it is simple to see the indian slopes, waterfall and shower. There are parts of waterfall past the border. Those are exceptionally incredible to see in sundown. Individuals crowded to see this lovely scene in Tamabil border. Beyonds the tamabil there&rsquo;s Megaloy state of India.</p>\r\n\r\n<h3><strong>Conclusion</strong></h3>\r\n\r\n<p>These are the main attraction of Sylhet, there are more place to visit at Sylhet and all of them are beautiful, there are museum, amusement park and Mazar you can visit. There are 20 tourist attractions found in Sylhet. So, are you making up minds to visit Sylhet as soon as possible? Then, don&rsquo;t forget to take this Sylhet tour reviews as a guideline.</p>\r\n\r\n<p>If you need subtle tour package for visiting Sylhet, check this&nbsp;<a href=\"http://www.amarroom.com/\">site</a>. You will find the complete peace and luxury throughout the whole tour regarding different hotel rooms. If you wish to get a few more tour reviews like the Sylhet tour reviews, stay connected.<br />\r\n<br />\r\nSo, pack you bag and get on the road to Sylhet.</p>', '2020-09-15 15:43:36', '2020-09-19 13:48:32'),
(6, 'আমার বাংলাদেশ পর্ব ১', 'জীবনানন্দ দাশ', 1, 'admin/blog-images/আমার বাংলাদেশ পর্ব ১.jpg', '<p>&ldquo;বাংলার মুখ আমি দেখিয়াছি,</p>\r\n\r\n<p>তাই আমি পৃথিবীর রূপ খুঁজিতে যাইনা আর&rdquo;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -জীবনানন্দ দাশ&nbsp;</p>\r\n\r\n<p>বাংলাদেশ শব্দটিতে মিশে আছে স্নেহ, মায়া, তৃপ্তি, প্রশান্তিসহ অগণিত আবেগ। নামটির মতোই আমাদের এই দেশ বহন করছে অপরূপ সৌন্দর্য। চারদিক ঘিরে রেখেছে গাঢ় সবুজ এবং বিস্তীর্ণ জলরাশি। যা আমাদের চোখ ও মন জুড়িয়ে দেয়।&nbsp; এই দেশের সৌন্দর্য ও রূপ-বৈচিত্র ভাবতে বাধ্য করে সৃষ্টিকর্তা যেন পৃথিবীর সমস্ত সৌন্দর্য্যের সমারোহ ঘটিয়েছেন আমাদের এই স্নেহময়ী দেশে।আর তাইতো কবি জীবনানন্দ দাশ অন্য কোথাও পৃথীবির রূপ খুঁজতে যাননি।</p>\r\n\r\n<p>ঘাসের উপর জমে থাকা একটি ছোট্ট শিশির বিন্দু যেখানে মন্ত্র মুগ্ধ করে রাখে আমাদের। সেখানে দেশের যেকোন প্রান্তে গেলেই সৌন্দর্য্যের মুগ্ধতায় হারিয়ে যেতে পারবেন। আর যদি একরাশ মুগ্ধতা জড়িয়ে আপনার স্মৃতির পাতাকে সমৃদ্ধ করতে চান তাহলে কক্সবাজার ,বান্দরবান,রাঙামাটি এবং সিলেট উল্লেখযোগ্য। কোথাও মেঘের স্পর্শে ভিজে যেতে পারবেন তো কোথাও সমুদ্র ঢেউয়ে ভেসে থাকতে পারবেন কিংবা কোথাও পাহাড়ি সবুজ তৃপ্তি দিবে আপনার দৃষ্টিকে।&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://blog.amarroom.com/wp-content/uploads/2019/04/bandar-ban.jpg\" /></p>\r\n\r\n<h3>&nbsp; বান্দরবান:</h3>\r\n\r\n<p>কুয়াশার চাদরে ঢাকা কিংবা তুলোর মতো মেঘে মাখামাখি সবুজের লীলাভূমি বান্দরবান। প্রকৃতি এই পাহাড়ি অঞ্চলে নিজেকে মেলে ধরেছে নিজ আলপনায়।এটি বাংলাদেশের সবচাইতে কম ঘনবসতিপূর্ণ জেলা হলেও সৌন্দর্য্যের ভীড় সবচেয়ে বেশি।</p>\r\n\r\n<p>কি নেই এই জেলায় আছে সর্বদা মেঘমন্ডিত নীলগিরি,পাহাড়ের চূড়ায় অবস্থিত রহস্যময় উপকথা এবং অকল্পনীয় সৌন্দর্য্যের বগালেক একসাথে পাহাড়ি সমুদ্র এবং কর্ণফুলী নদীর&nbsp; মনোরম দৃশ্য নিয়ে আছে আছে নীলাচল ,সবুজের মাঝে প্রান্তিক লেক ,পাহাড়ের রাণী&nbsp; চিম্বুক,আছে পাহাড়ি মেঘ ধরার জন্য তাজিংডংসহ সুউচ্চ চূড়ার সমাহার,দুর্গম পথ পেরিয়ে নাফাখুম জলপ্রপাত যেখানে সূর্যের আলোয় খেলা করে রংধনু ,আছে পাহাড়ের চূড়া থেকে ঝরে পড়া রিজুক ঝর্ণা,জাদিপাই ঝর্ণা,শৈলপ্রপাত , বৌদ্ধধর্মাবলম্বীদের তীর্থস্থান স্বর্ণমন্দির, রামজাদী মন্দির।</p>\r\n\r\n<p><img alt=\"\" src=\"https://blog.amarroom.com/wp-content/uploads/2019/04/kolatoli-1024x680.jpg\" /></p>\r\n\r\n<h3>কক্সবাজার:</h3>\r\n\r\n<p>পৃথিবীর দীর্ঘতম অখন্ডিত সমুদ্র সৈকতের গর্বটি বাংলাদেশের। এই মায়াবী ও রূপময়ী কক্সবাজার সমুদ্র সৈকত প্রতি ঋতুতেই তার রূপ বদলায়। সৈকতের বুকে আছড়ে পড়া এক একটি ঢেউ, নৌকা ট্রলার নিয়ে জেলেদের কর্মচাঞ্চল্য, বিস্তীর্ণ বালুকাবেলা, সারি সারি ঝাউবন, ভোরে পাহাড়ের পিছন থেকে বেরিয়ে আসা কিংবা সন্ধ্যায় সমুদ্রের বুকে ঢুবে যাওয়া সূর্যের মায়াবী রূপ; এই সমস্ত আয়োজনই সৌন্দর্যমন্ডিত করেছে অখন্ডিত সমুদ্র সৈকতকে। মেরিন ড্রাইভের একপাশে পাহাড়&nbsp; আর&nbsp; অন্য পাশে সমুদ্র রেখে বিমোহিত হয়ে আওড়াতে পারেন নজরুলের গানের দুটি লাইন&nbsp; &ldquo;তুমি সুন্দর তাই চেয়ে থাকি&rdquo; এই সুন্দর প্রিয়তমার সৌন্দর্য না ,এই সৌন্দর্য সমুদ্রের।</p>\r\n\r\n<p>কক্সবাজার সমুদ্র সৈকতের পাশেই অবস্থিত হিমছড়ি।&nbsp; সবুজ পাহাড় আর অপরূপ ঝর্ণা এখানকার প্রধান আকর্ষণ। এর বিশেষত্ব হলো পাহাড়ের চূড়া থেকে সমুদ্রের সৌন্দর্য অবলোকন করা যায়. এছাড়াও রয়েছে ইনানী সৈকত , কলাতলী ,লাবনী সৈকত ,ডুলাহাজারা সাফারি পার্ক , সোনাদিয়া দ্বীপ ,মহেশখালী ,বৌদ্ধধর্মের অন্যতম চর্চাকেন্দ্র রামু; যাদের সৌন্দর্য একটি আরেকটির প্রতিদ্বন্দ্বী।</p>\r\n\r\n<p>তবে সেন্টমার্টিন ও ছেঁড়াদ্বীপ এর কথা একটু পৃথক করেই বলতে হয়। বালি, পাথর,প্রবাল এবং জীব বৈচিত্র্যের সমন্বয় হলো বাংলাদেশের একমাত্র প্রবাল দ্বীপ সেন্টমার্টিন। এর উদ্দেশ্যে যাওয়ার পথে সমুদ্রের মাঝে হয়তো বাতাসের বেগের সাথে সি-গাল হয়ে উড়তে মন চাইবে। আর সেখানে আকাশ এবং সমুদ্রের নীল রং মিশে একাকার , আছে ঢেউয়ের তালে মৃদু বাতাসের কোমল স্পর্শ, আছে নারকেল গাছের সারি ,আছে দারুচিনি দ্বীপ। এগুলো কেবলই সৌন্দর্য বর্ণনার ক্ষুদ্র প্রয়াস।</p>\r\n\r\n<p><img alt=\"amar bangala desh\" src=\"https://blog.amarroom.com/wp-content/uploads/2019/04/kaptai-lek.jpg\" /></p>\r\n\r\n<h3>রাঙামাটি :</h3>\r\n\r\n<p>বুকের মাঝে কাপ্তাই লেক ,সাজেক ভ্যালি এবং নানান নৈসর্গিক সৌন্দর্য নিয়ে মুখরিত রাঙামাটি।&nbsp; কাপ্তাই লেক যেন প্রকৃতির সাথে অপরূপ সাজে নিজেকে সাজিয়েছে। ঝুলন্ত সেতু ,সৃষ্টিকর্তার অপরূপ সৃষ্টি শুভলং ঝর্ণা ,পরিপাটি আদিবাসী গ্রাম,জুম পাহাড়, ছোট-বড়ো ,উঁচু-নিচু পাহাড়, এর সৌন্দর্য বাড়িয়েছে বহুগুনে।এই লেকের স্বচ্ছ জলে পানকৌড়ির ডুব,জল ও সূর্যস্নানের চকচকে দৃশ্য ,সাথে মিষ্টি বাতাস সব কিছুই উপভোগ করা যাবে নৌভ্রমণে।</p>\r\n\r\n<p>আর যদি মেঘ ছুঁয়ে দেখার কল্পনাকে সত্যি করতে চান বা নরম মেঘের স্পর্শ পেতে চান তাহলে আছে সাজেক ভ্যালি।এই ভ্যালি পথে যেতে যেতেই মুগ্ধ হওয়া যাবে এলোমেলো সারিতে সাজানো পাহাড়ে ,আঁকাবাঁকা রাস্তায় ,বিস্তীর্ণ সবুজের হাতছানি দেখে&nbsp; অথবা মেঘদল ও সূর্যের&nbsp; লুকোচুরিতে।এখানে নিমন্ত্রণ ছাড়াই মেঘ এসে গল্প করবে আপনার সাথে।</p>\r\n\r\n<p>কংলাক পাহাড়ের চূড়ায় দাঁড়িয়ে&nbsp; সূর্যোদয় ও সূর্যাস্তে পুলকিত হওয়ার সাথে রক্তিম আভায় কিছু স্মৃতি রোমন্থন করা যাবে। সমগ্র জেলা যেন শিল্পীর আঁকা দৃশ্য।</p>\r\n\r\n<p><img alt=\"\" src=\"https://blog.amarroom.com/wp-content/uploads/2019/04/syelhat.jpg\" /></p>\r\n\r\n<h3>সিলেট:</h3>\r\n\r\n<p>প্রকৃতির রূপ লাবণ্যে ঘেরা, নয়নাভিরাম প্রাকৃতিক সৌন্দর্যের লীলাভূমি সিলেট।সবুজ কে বাগান ,পাহাড়,নদী ,ঝর্ণা ,টিলা আর দিগন্ত জোড়া সবুজ বৃক্ষ ,নীল আকাশের নিচে অপরূপ মায়াবী আভা সিলেট যে করেছে রূপের রানী।&nbsp; এখানকার নৈসর্গিক শোভা অতি সহজেই যে কাউকে মুগ্ধ করবে। যাদের রূপে আপনি হারিয়ে যেতে চান তাদের মধ্যে আছে; স্তরে স্তরে সাজানো পাথরে সজ্জিত প্রকৃতি কন্যা জাফলং , স্বচ্ছ নীলাভ জলরাশি আর দুধারের অপরূপ সৌন্দর্য নিয়ে লালাখাল ,পাহাড়ের বুক চিরে নেমে আসা জলের বিছানাকান্দি আছে মালিনীছড়া ,লাক্কাতুরা চা বাগান।</p>\r\n\r\n<p>রাতারগুল বাংলাদেশের একমাত্র সোয়াম্প ফরেস্ট । রাতারগুল একটি প্রাকৃতিক বন, শীতকালে এখানে বসে হাজারো পাখির মেলা , আছে কয়েকশো প্রজাতির গাছ যা এর সৌন্দর্য বাড়িয়েছে বহুগুন। আর একটু অদূরেই সৌন্দর্যের পসরা নিয়ে আছে হাকালুকি হাওর।</p>\r\n\r\n<p>পূর্বে চায়ের দেশ, দক্ষিণে সবচেয়ে দীর্য সমদ্র সমুদ্র সৈকত , আর দক্ষিণ পূর্বে আকাশের সাথে মিশে থাকা পাহাড় যেন বাংলাদেশের প্রকৃতিতে দান করেছে ভিন্ন মাত্রা। এই অঞ্চলগুলো বহুমাত্রিক আকর্ষণে সমৃদ্ধ।&nbsp; সুসজ্জিত পাহাড় এবং এর বুক থেকে নেমে আসা ঝর্ণা, মায়াবী সবুজ ,আঁকাবাঁকা নদী , স্বচ্ছ জলরাশি ,মেঘদলের অবাধ আনাগোনা , একপাশে পাহাড়ি সবুজ আর অন্যপাশে নীল সমুদ্র জল সবই যেন চিত্রশিল্পীর নিখুতঁ চিত্রকর্ম।&nbsp;</p>', '2020-09-15 15:44:06', '2020-09-15 15:44:06'),
(7, 'MOST VISITING PLACE', 'জীবনানন্দ দাশ', 1, 'admin/blog-images/MOST VISITING PLACE IN BARISAL.jpg', '<p>Without a doubt, Bangladesh is a land of natural wonders. Though we always focus towards the Eastern side of Bangladesh as they are considered wilder and more beautiful, we cannot ignore the southern beauty of Barisal in any way. So, we will try to drag your focus to this southern area of Bangladesh and tell you about the most visiting place in Barisal.</p>\r\n\r\n<p>Of course, the magnificent sea beach of Kuakata would be one of the most spectacular places here. However, we would try to talk about some of the great places in Barisal city too.</p>\r\n\r\n<p>Let&rsquo;s start!</p>\r\n\r\n<p><strong>Durga Sagar</strong></p>\r\n\r\n<p>We will start the listings with one of the favorite places of the native people of Barisal &ndash; the Durga Sagar. If you ever ask a person from Barisal about some of the most visiting places in Barisal, he or she will definitely tell you to visit Durga Sagar. The place is also known as Madhabpasha Dighi by the locals.</p>\r\n\r\n<p>It is one of the biggest lakes in the southern parts of Bangladesh having a gigantuous area of 2,500 hectares or 25 square kilometers!</p>\r\n\r\n<p><img alt=\"tourist places in Barisal Bangladesh\" src=\"https://blog.amarroom.com/wp-content/uploads/2019/06/durga-sagar-barisal.jpg\" /></p>\r\n\r\n<p>This historical lake was a blessing of a Southern queen named Durga. The little land in the middle of the lake would be the most iconic beauty of the lake.</p>\r\n\r\n<p>Durga Sagar is about 11 kilometers away from the center of the Barisal city. The majestic scenario of the lake would definitely blow your mind.</p>\r\n\r\n<p><strong>Baitul Aman Mosque</strong></p>\r\n\r\n<p>Next, we would talk about the most iconic structural wonder of the city &ndash; the Baitul Aman Mosque. If you go along the road of the Durga Sagar and move forward, you can find this magnificent place.</p>\r\n\r\n<p><img alt=\"most visiting places in Barisal\" src=\"https://blog.amarroom.com/wp-content/uploads/2019/06/Baitul-aman-masjid-1024x683.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Some argue that Baitul Aman is the most beautiful mosque of the Southern region of the country. This mosque come Eidgah complex looks even more spectacular after dusk. You should definitely pay a visit here if you want to hit all the most visiting places in Barisal.</p>\r\n\r\n<p><strong>Swarupkathi Floating Market</strong></p>\r\n\r\n<p>We all know what Barisal is famous for &ndash; a ton of the mighty rivers crisscrossing the land. You might have heard about the famous floating market of Thailand and all the stories revolving around it.</p>\r\n\r\n<p><img alt=\"Barisal Bangladesh tourism\" src=\"https://blog.amarroom.com/wp-content/uploads/2019/06/floating-markets-barisal.jpg\" /></p>\r\n\r\n<p>You would certainly be amazed seeing a floating market in this country. The floating market of Swarupkathi is mainly popular for the juicy guavas &ndash; the apple of Bengal. It is a great add-on in Barisal Bangladesh tourism. Thousands of farmers in the southern districts rely on guava farming.</p>\r\n\r\n<p>In the harvest season, all the farmers gather here selling guavas to the merchants coming from all over the country especially in Dhaka.</p>\r\n\r\n<p><strong>Bibir Pukur</strong></p>\r\n\r\n<p>If you are planning to visit someplace inside the urban area in Barisal, you must consider the famous Bibir Pukur. It is situated in the heart of the city. You can often see the locals gathering here in groups sharing the stories. Bibir Pukur is a very lively place, we must say.</p>\r\n\r\n<p><img alt=\"\" src=\"https://blog.amarroom.com/wp-content/uploads/2019/06/bibir-pukur.jpg\" /></p>\r\n\r\n<p>Although, we should tell you something, it is not someplace where you would visit to see some natural scenic beauty. If you are curious seeing how the local people from Barisal spend their time, then this the right place for you.</p>\r\n\r\n<p><strong><em>Kuakata</em></strong></p>\r\n\r\n<p>Okay, it is going to be a big section as you know. Kuakata is one of the A-listed places to visiting in Bangladesh a crown jewel in tourist places in Barisal Bangladesh. Kuakata would be the second most popular sea beach in Bangladesh right after Cox&rsquo;s Bazar.</p>\r\n\r\n<p>As tourism is thriving here in Kuakata, you will find some of the great hotels here too. However, you shouldn&rsquo;t expect too much. You can get the best Kuakata hotels rates only from Amarroom.com &ndash; you trusted partner in traveling in Bangladesh. You will not only get the best deals, but also you can get to enjoy a flexible payment system that no other company can offer.</p>\r\n\r\n<p><img alt=\"\" src=\"https://blog.amarroom.com/wp-content/uploads/2019/06/Kuakata.jpg\" /></p>\r\n\r\n<p>There is so much to do and so much see in Kuakata apart from having a great day on the beach. So, we would divide the Kuakata travel section two parts &ndash;</p>\r\n\r\n<ul>\r\n	<li>The Eastern Beach Section</li>\r\n	<li>The Western Beach Section</li>\r\n</ul>\r\n\r\n<p><strong><em>The Eastern Kuakata</em></strong></p>\r\n\r\n<p>You can roam around Kuakata in either paddled rickshaw vans or motorbikes. To get the best kind of thrill, we would suggest you taking the motorbike. In that way, you can see great places while feeling the adrenaline rush in your veins!</p>\r\n\r\n<p>As you are taking the bike ride, the first place you will get to see is the Gangamatir Char. This the best place to see the sunrise. We should tell you that Kuakata is the only place where you get to enjoy both the sunrise and the sunset without any obstacles &ndash; the perfect view.</p>\r\n\r\n<p>Just by the Gangmatir Char, you can check out the mystic lake of Gangamati. You might need to cross the lake by a small ferry boat. The other side of the lake is locally known as the Kauwar Char.</p>\r\n\r\n<p>As you would ride along the sea beach, you will soon reach the island of the red crabs. Here you can see millions of red crabs swarming on the beach!</p>\r\n\r\n<p>After that, you would soon reach the new Jhaubon or the forest of tamarisk trees. The previous forest was destroyed by the mighty cyclone Sidr in 2007.</p>\r\n\r\n<p>&nbsp;In the eastern section, there are some tribal villages locally known as Rakhain Misri para. There are two Buddha temples here too &ndash; the Seema Buddha Bihar and the Sreemangal Buddha Bihar.</p>\r\n\r\n<p><strong>The Western Kuakata</strong></p>\r\n\r\n<p>You might have guessed already &ndash; the eastern section is the place for sunrise, and the western section is the place to visit if you are planning to see the best sunset Bangladesh has to offer.</p>\r\n\r\n<p>You can see this majestic sunset from the Sunset Point. On the way to get there, you can stop at the Lebur Char. Here, you can satisfy your appetite with tastiest fresh fishes Kuakata has to offer. You can have them either fried or Bar-B-Qed.</p>\r\n\r\n<p>You might not know, but you have a taste of Sundarbans &ndash; the biggest mangrove forest in the world from Kuakata too. There is a small island just by the sunset point called the Fatrar Char or Fatrar Bon. Here, you can see the same mangrove trees of Sundarbans. Don&rsquo;t get scared! There is no tiger here!</p>\r\n\r\n<p><strong>Final Words</strong></p>\r\n\r\n<p>So, that was pretty our take on the Barisal trip, or you can say the brief of the most visiting place in Barisal. Lastly, we want to add that; you can get the best service during your trip from Amarroom.com. Here, you can get the best deals for your stay in Barisal but also get the facilities of flexible payments such as 0% interest on EMI for your trip. So, what are you waiting for?</p>', '2020-09-18 09:38:35', '2020-09-19 13:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `number_of_room` int(11) NOT NULL,
  `booking_total` double(10,2) NOT NULL,
  `booking_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `location_id`, `hotel_id`, `room_id`, `customer_id`, `number_of_room`, `booking_total`, `booking_status`, `created_at`, `updated_at`) VALUES
(11, 1, 5, 3, 5, 3, 8250.00, 2, '2020-09-17 23:53:45', '2020-09-18 14:28:55'),
(12, 1, 5, 3, 5, 4, 11000.00, 2, '2020-09-17 23:54:17', '2020-09-19 02:14:24'),
(13, 4, 11, 5, 5, 3, 4950.00, 1, '2020-09-18 09:55:03', '2020-09-18 13:55:20'),
(14, 1, 6, 4, 8, 3, 3696.00, 0, '2020-09-18 14:06:30', '2020-09-18 14:06:30'),
(15, 4, 11, 5, 8, 4, 6600.00, 0, '2020-09-18 14:07:38', '2020-09-18 14:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(11) NOT NULL,
  `checkIn_dateTime` datetime NOT NULL,
  `checkout_dateTime` datetime NOT NULL,
  `total_day` int(11) NOT NULL,
  `total_night` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `checkIn_dateTime`, `checkout_dateTime`, `total_day`, `total_night`, `created_at`, `updated_at`) VALUES
(7, 11, '2020-09-26 11:53:24', '2020-10-03 11:53:26', 1, 1, '2020-09-17 23:53:45', '2020-09-17 23:53:45'),
(8, 12, '2020-10-03 11:53:51', '2020-10-10 11:53:54', 1, 1, '2020-09-17 23:54:17', '2020-09-17 23:54:17'),
(9, 13, '2020-09-22 21:49:24', '2020-09-30 21:49:26', 1, 1, '2020-09-18 09:55:03', '2020-09-18 09:55:03'),
(10, 14, '2020-09-19 02:06:08', '2020-09-19 02:06:09', 1, 1, '2020-09-18 14:06:30', '2020-09-18 14:06:30'),
(11, 15, '2020-09-19 02:06:43', '2020-09-23 02:06:45', 1, 1, '2020-09-18 14:07:38', '2020-09-18 14:07:38');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Joynal', 'Alam', 'new@email.com', '$2y$10$fqqflHb/H3uosw5/E8zwHO6xwKg5PFtNi3dCnQLdZo8lMeePderV6', '65464584', '65', '2020-09-16 15:13:33', '2020-09-16 15:13:33'),
(2, 'Joynal', 'Alam', 'jol@email.com', '$2y$10$2cIGRyAr3gtzKNTgQgl.f.HfGfLo1b0f.1fkQ6piLNNLREsSeo6LW', '018545754754544', '65', '2020-09-16 15:27:52', '2020-09-16 15:27:52'),
(3, 'Joynal', 'Alam', 'joyal@email.com', '$2y$10$qwMtI12GBgeB5x3wbDmFPOyWIm9OxZl3gwm8J4x5MGlmEV7b.MK36', '01800000000000', '65', '2020-09-16 15:29:19', '2020-09-16 15:29:19'),
(4, 'Joynal', 'Alam', 'new1@gmail.com', '$2y$10$D6fpl5XB.YU7m0/SaOqKhO3rzVlcF6cN4l4ePvivfL7NECTGatkK2', '018545754754544', '65', '2020-09-16 16:14:37', '2020-09-16 16:14:37'),
(5, 'Abdur', 'Rahim', 'rahim@gmail.com', '$2y$10$1rNTPhn.6VkLtlaaH5ND2OhxI/q150DWKk7iv7etIRVFQ8MkTQ.LW', '01883-911316', 'dsfdsfdsafdsf', '2020-09-16 16:15:51', '2020-09-16 16:15:51'),
(7, 'Turan', 'Codory', 'c173064@ugrad.iiuc.ac.bd', '$2y$10$FC8grw/cLINJMKnCtKg26.BgUNSOWYxAZGr.SlJVPdzHQ.0UEjrdK', '01883-911316', 'Any', '2020-09-18 13:23:18', '2020-09-18 13:23:18'),
(8, 'Zia', 'Alam', 'joynalam67598@gmail.com', '$2y$10$HJUiWsoDSs6cR..eK.aCLOit1fYm1MOB09xKyxdf4ZpTJiTDAqP/C', '01883-911316', '65', '2020-09-18 13:25:53', '2020-09-18 13:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` int(11) NOT NULL,
  `hotel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_numbers` int(11) NOT NULL,
  `available_room` int(11) NOT NULL,
  `minimum_price` double(8,2) NOT NULL,
  `hotel_facilities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `location_id`, `hotel_name`, `room_numbers`, `available_room`, `minimum_price`, `hotel_facilities`, `address`, `description`, `hotel_image`, `created_at`, `updated_at`) VALUES
(5, 1, 'Royal', 100, 104, 1000.00, 'wifi, swmming pool', 'Na', 'na', 'admin/hotel-images/Royal.jpg', '2020-09-14 23:57:37', '2020-09-19 02:14:24'),
(6, 1, 'Rowshon', 50, 50, 500.00, 'Na', 'na', 'na', 'admin/hotel-images/Rowshon.jpg', '2020-09-14 23:59:40', '2020-09-14 23:59:40'),
(8, 3, 'Nitol Bay', 200, 200, 2500.00, 'Wifi, Parking, Swmming Pool', 'NA', 'na', 'admin/hotel-images/Nitol Bay.jpg', '2020-09-15 00:00:18', '2020-09-15 02:00:25'),
(9, 4, 'Afmi', 100, 100, 1500.00, 'wifi', 'Na', 'na', 'admin/hotel-images/Afmi.jpg', '2020-09-15 01:14:59', '2020-09-15 01:14:59'),
(10, 4, 'Taltola', 20, 20, 500.00, 'NA', 'NA', 'Na', 'admin/hotel-images/Taltola.jpg', '2020-09-15 14:48:26', '2020-09-15 14:48:26'),
(11, 4, 'Afmi Plaza', 200, 200, 1000.00, 'NA', 'etrgyty', 'qewrewtreter', 'admin/hotel-images/Afmi Plaza.jpg', '2020-09-18 09:27:22', '2020-09-18 09:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `hotel_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `hotel_id`, `hotel_image`, `created_at`, `updated_at`) VALUES
(4, 5, 'admin/individual-hotel-images/Royal0.jpg', '2020-09-15 16:28:12', '2020-09-15 16:28:12'),
(5, 5, 'admin/individual-hotel-images/Royal1.jpg', '2020-09-15 16:28:20', '2020-09-15 16:28:20'),
(6, 5, 'admin/individual-hotel-images/Royal2.jpg', '2020-09-15 16:28:27', '2020-09-15 16:28:27'),
(7, 6, 'admin/individual-hotel-images/Rowshon0.jpg', '2020-09-15 16:28:34', '2020-09-15 16:28:34'),
(8, 6, 'admin/individual-hotel-images/Rowshon1.jpg', '2020-09-15 16:28:45', '2020-09-15 16:28:45'),
(9, 11, 'admin/individual-hotel-images/Afmi Plaza0.jpg', '2020-09-18 09:30:19', '2020-09-18 09:30:19'),
(10, 11, 'admin/individual-hotel-images/Afmi Plaza1.jpg', '2020-09-18 09:30:28', '2020-09-18 09:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `created_at`, `updated_at`) VALUES
(1, 'Bhoddarhat', '2020-09-13 07:53:19', '2020-09-13 07:53:19'),
(3, 'Agrabad', '2020-09-14 23:11:48', '2020-09-14 23:11:48'),
(4, 'Chawkbazar', '2020-09-15 01:14:33', '2020-09-15 01:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_13_133956_create_locations_table', 2),
(5, '2020_09_14_172115_create_hotels_table', 3),
(6, '2020_09_15_053129_create_hotels_table', 4),
(7, '2020_09_15_180100_create_rooms_table', 5),
(8, '2020_09_15_200736_create_blogs_table', 6),
(9, '2020_09_15_201645_create_blogs_table', 7),
(10, '2020_09_15_220357_create_images_table', 8),
(11, '2020_09_16_181236_create_rooms_table', 9),
(12, '2020_09_16_182133_create_rooms_table', 10),
(13, '2020_09_16_205343_create_customers_table', 11),
(14, '2020_09_16_233114_create_bookings_table', 12),
(15, '2020_09_16_234733_create_booking_details_table', 13),
(16, '2020_09_17_160626_create_payments_table', 14),
(17, '2020_09_17_163908_create_bookings_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('joynal@email.com', '$2y$10$0kJFIF2qGtv6u9EPULQPJex9eGD1/r/7p03fQNeaWI2lG5z5P8Z2O', '2020-09-18 15:00:04'),
('joynalam67598@gmail.com', '$2y$10$/r02lyTxS9v.Q75J3oQxP.1qBwP3GJs4ANPRRGp2RWKTaY00D6qRC', '2020-09-18 15:01:39');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `booking_id`, `payment_type`, `created_at`, `updated_at`, `payment_status`) VALUES
(8, 11, 'cash', '2020-09-17 23:53:45', '2020-09-18 09:42:24', 1),
(9, 12, 'cash', '2020-09-17 23:54:17', '2020-09-17 23:54:17', 0),
(10, 13, 'cash', '2020-09-18 09:55:03', '2020-09-18 09:55:03', 0),
(11, 14, 'cash', '2020-09-18 14:06:30', '2020-09-18 14:06:30', 0),
(12, 15, 'cash', '2020-09-18 14:07:38', '2020-09-18 14:07:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_room` int(11) NOT NULL,
  `available_room` int(11) NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_capacity` int(11) NOT NULL,
  `room_facilities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_per_night` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `location_id`, `hotel_id`, `room_name`, `room_code`, `number_of_room`, `available_room`, `room_type`, `room_capacity`, `room_facilities`, `price_per_night`, `description`, `room_image`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'Standard', 'DS-325', 6, 6, 'NON-AC', 5, 'NA', 500.00, 'na', 'admin/room-images/DS-325.jpg', '2020-09-16 12:26:23', '2020-09-18 14:27:56'),
(2, 1, 5, 'Double Standard', 'DS-323', 10, 10, 'AC', 4, 'wifi', 1500.00, 'NA', 'admin/room-images/DS-323.jpg', '2020-09-16 12:26:59', '2020-09-16 12:26:59'),
(3, 1, 5, 'Deluxe Standard bad', 'DS-300', 20, 24, 'Deluxe', 4, 'WiFi, Hot Water', 2500.00, 'NAS', 'admin/room-images/DS-300.jpg', '2020-09-16 12:27:44', '2020-09-19 02:14:25'),
(4, 1, 6, 'Standard', 'D-325', 20, 20, 'Deluxe', 5, 'WiFi, Hot Water', 1120.00, 'NA', 'admin/room-images/D-325.jpg', '2020-09-18 07:17:26', '2020-09-18 07:17:26'),
(5, 4, 11, 'Double Standard', 'DS-3200', 20, 20, 'Deluxe', 4, 'WiFi', 1500.00, 'dfghdgyhkijthyrtew', 'admin/room-images/DS-3200.jpg', '2020-09-18 09:33:50', '2020-09-18 09:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Joynal', 'joynal@email.com', NULL, '$2y$10$Ucnv6N9R66dyFYYBA5QJJetq.r4aUnCRkfctQHSvXd4Lz.xjwkvjS', NULL, '2020-09-13 02:24:04', '2020-09-13 02:24:04'),
(2, 'Joynal Alam', 'joynalam67598@gmail.com', NULL, '$2y$10$obVHY5csmTtIpz.Udp2sKOqkZgxhsM.E5KVyXjrCQBXsyCNZU0FQu', NULL, '2020-09-18 15:01:26', '2020-09-18 15:01:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
