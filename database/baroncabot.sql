-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2023 at 09:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baroncabot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@baroncabot.com', '2022-08-18 12:46:02', '$2y$10$fi.z5ukk/BF7nCBm6AseBORcmpbMCwBBhVHWccQIwD4ZkM/L94Po.', 'EJWsitLiC5V7foFdcqXa3nHAUsnw9DNLrvDhau3EeJ40hBzyzHltHTsSBJ6X', NULL, '2020-03-04 13:39:05', '2022-09-12 07:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `admins_password_resets`
--

CREATE TABLE `admins_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `id` int(11) NOT NULL,
  `parentID` int(11) DEFAULT NULL,
  `category` varchar(55) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `file_mime` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `download_count` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `synopsis` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_type` int(10) UNSIGNED DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_tags` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `visibility` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publish_time` datetime DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `comment` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `synopsis`, `thumbnail`, `blog_type`, `url`, `meta_tags`, `meta_description`, `status`, `visibility`, `publish_time`, `featured`, `comment`, `view_count`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'More Opportunities For Africans To Invest In Property In The UK', '<p><strong><img src=\"https://g6g2u3ceklawnicrdmbeordv-wpengine.netdna-ssl.com/wp-content/uploads/2022/04/Frame-2.jpg\" alt=\"\" width=\"50%\" /><img src=\"https://g6g2u3ceklawnicrdmbeordv-wpengine.netdna-ssl.com/wp-content/uploads/2022/04/Frame-3.jpg\" alt=\"\" width=\"50%\" /></strong></p>\r\n<p><strong>Baron &amp; Cabot have now expanded in Kenya and Nigeria. Africans can now invest in property within UK. &nbsp;&nbsp;</strong></p>\r\n<p><iframe title=\"#TRADINGBELL [2] Understanding Real Estate investment with founder &amp; MD Baron &amp; Cabot Mark Pearson\" src=\"https://www.youtube.com/embed/QjBrfl03cgk\" width=\"100%\" height=\"416\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>Baron &amp; Cabot, a UK property investment company has launched their new base in Kenya and Nigeria to finally help Kenyans and Nigerians invest in property within the UK in a simple and effective way. &ldquo;Baron &amp; Cabot is undoubtedly the fastest growing UK property investment company in the world,&rdquo; remarks Mark Pearson, founder of Baron &amp; Cabot.</p>\r\n<p>&ldquo;We aim to help Kenyans and Nigerians with the ability to provide mortgages and buying of property through thorough research for the safety of their investment in the UK.&rdquo;</p>\r\n<p>Investing in property in the UK is greatly considered to be one of the lowest risk investments in the world, with consistent long-term returns factored in by continuous growth within the country. Baron &amp; Cabot has built a market leading research strategy for the investor to simply just choose what would be suitable for them. The investor is also granted a step-by-step guide on sourcing the right property to purchase in the UK. This gives the investor the power and confidence to ask the right questions for profitable property investment.</p>\r\n<p>&ldquo;As the demand for property investment rises within African investors, our main goal is to make sure the process of property investment always remains transparent and simple.&rdquo; added Mark Pearson, founder of Baron &amp; Cabot.</p>\r\n<p>A great opportunity presented by the UK is that foreigners can legally buy property or have banks offer favourable mortgage terms for investment. This investment platform gives Africans an opportunity to invest in property with ease and without limitations. Thus, while seeking to invest in property, Baron &amp; Cabot stands out to be the paramount property investment organization that an investor can trust through the investment process.</p>\r\n<p><video controls=\"controls\" width=\"100%\" height=\"350\">\r\n<source src=\"https://cms.forbesafrica.com/wp-content/uploads/2022/04/Athena-House.mp4\" type=\"video/mp4\" /></video></p>\r\n<p>&ldquo;Our introduction in Kenya and Nigeria will greatly impact property investment and sourcing in the UK, thus creating more options for investors&rdquo;, says James Walsh, Head of Sales at Baron &amp; Cabot Research. Baron &amp; Cabot has worked with investors across the world and impacted many from their first to fifty first properties. This expansion creates a great opportunity for African investors. Source Article: Forbes Africa, Africa Business<br />&nbsp;</p>', 'Baron & Cabot, a UK property investment company has launched their new base in Kenya and Nigeria to finally help Kenyans and Nigerians invest in property within the UK in a simple and effective way. “Baron & Cabot is undoubtedly the fastest growing UK property investment company in the world,” remarks Mark Pearson, founder of Baron & Cabot.', '5deKhV.jpg', NULL, 'more-opportunities-for-africans-to-invest-in-property-in-the-uk', 'Baron & Cabot', 'Baron & Cabot', 31, NULL, NULL, NULL, NULL, 1, 1, 1, '2022-07-01 05:31:29', '2022-07-01 08:38:12'),
(2, 'Why Should I Use A Broker?', '<p>Why should I use a broker?<br />One question always asked is whether you should use a broker or try and go direct to developer.</p>\r\n<p>A normal question a client would consider is why to use a &lsquo;broker&rsquo; or sourcing agent rather than going direct to developer, after all surely the broker is making a commission that could go to you? Alternatively can you not just use a buy to let broker and then once you have the right property go direct at that stage?</p>\r\n<p>These are legitimate questions, and after all you are in the business to get the best possible returns which means any cost savings should be taken at all stages of the investment. So what exactly does a broker do?</p>\r\n<p>Firstly it is important to understand how the relationship between all the parties work. In the main developers build, lean on brokers with their network of investors to sell, and then the management company manages the building there after.</p>\r\n<p>With this relationship developers either do not have a client focussed sales team, or have agreements with brokers that if a client does come direct they are unable to offer discounts.</p>\r\n<p>This means that if a client does circumvent the broker they pay market rate, however if they buy through the broker there is an ability to negotiate the price.</p>\r\n<p>In addition to this as companies like Baron &amp; Cabot purchase a large volume of properties through the developer via their client relationships, the broker has the knowledge of how far the developer may reduce costs and the volume of business to be in a position to work a deal.</p>\r\n<p>There are further complexities in the role that a broker takes with a development.</p>\r\n<p>Property Underwriting</p>\r\n<p>Before a project is launched, often a development is underwritten by the developer or master agent themselves. What this means is that in exchange for a discount on some, or all of the apartments in a development a company like Baron &amp; Cabot will guarantee that they will purchase any stock which is not sold.</p>\r\n<p>This offers benefits to the developer in that they know all or a large proportion of the properties are &lsquo;sold&rsquo; before they even start building or advertising, the broker is able to get exclusive stock to offer to clients, and clients get to buy at a discounted rate.</p>\r\n<p>Due Diligence</p>\r\n<p>One of the primary benefits of working with a broker is the due diligence on a development which any good broker will perform and have the ability to quickly share details with you.</p>\r\n<p>Things like who is funding the development, section 106 and planning details, lease information, reliable price point and expected growth are all the information a good broker will have before ever taking on a project from a developer. While most developments are safe and will make money there are a few (completed and off plan) which are wisely avoided.</p>\r\n<p>Full Market Coverage</p>\r\n<p>One of the great benefits of building a relationship with a broker company and an individual within the company will be getting a full market view, which is not restricted to a developer. Naturally and direct developer will only show you their projects which may or may not be suitable to you as an individual.</p>\r\n<p>Like comparing your life insurance, car insurance or mortgage rate using a good broker will allow you to have a quick view on what is available UK wide and the best price point, or return of investment within your criteria. Along with having your due diligence ready to read this will save you significant time in your search.</p>\r\n<p>None advertised developments/ properties</p>\r\n<p>One thing any investor should bare in mind is that there are always 3-4 developments in the pipeline at any one time that are not ready to be advertised because due diligence has not been finished, or the company will not launch externally as they believe it will all be sold with existing clients.</p>\r\n<p>Speaking to a good broker they will be able to give insight into what may be coming available which would be perfect for you, and allow you to get first opportunity on the best units.</p>\r\n<p>Other Services</p>\r\n<p>Legal services, management companies and currency exchange are some of the additional benefits for you. Like any good working relationship you have the broker will add value and allow your investment to be seamless as possible. Equally advising when you should sell or remortgage is key to helping grow your portfolio.</p>\r\n<p>Like with any partnership there are good and not so good brokers but working with ones which have market coverage and full due diligence on every project is key to getting the best out of your investment.</p>\r\n<p>It is likely just re-assurance that your decision is correct and support in getting the best possible deal but allows you to get the professional support you would expect from a mortgage broker or solicitor. A good broker is not an estate agent showing you all the properties available, but a key partner in delivering the best investment for you.</p>', 'A normal question a client would consider is why to use a ‘broker’ or sourcing agent rather than going direct to developer, after all surely the broker is making a commission that could go to you?', 'peqkvf.jpg', NULL, 'why-should-i-use-a-broker', 'Baron Cabot, Why Should I Use A Broker', 'A normal question a client would consider is why to use a ‘broker’ or sourcing agent rather than going direct to developer, after all surely the broker is making a commission that could go to you?', 31, NULL, NULL, NULL, NULL, 1, 1, 1, '2018-12-22 05:32:05', '2022-07-01 08:53:54'),
(3, 'What Causes Property Prices To Go Up And Down?', '<p>When I was younger studying to become a property professional at University, other than understanding the basis of valuations on a property, build structures and the like a major understanding was the economics behind markets.</p>\r\n<p>While these were the days when the chancellor Gordon Browns fiscal policy was seen as some sort of genius level of economics, with significant basis of borrowing and retrospectively can be seen as significantly flawed. Lessons learnt from this time through to where we are now can be used as a solid foundation for going forward.</p>\r\n<p>You don&rsquo;t have to be an economics graduate or professional within details of an economy to understand how property prices fluctuate. Really not over complicating markets is generally the way where the vast majority of investors make money.&nbsp;</p>\r\n<p>In my university days one of my economics lecturers would warn that if there was more than 8 cranes in the skyline you could expect a dip in values. While over simplistic what he was getting at was the most basic element of supply and demand.</p>\r\n<p>At its heart, property is unique in that there is always a demand for it. Unlike investing in the stock market, where Facebook may become the new Myspace or Google may become obsolete like some of its predecessors, Volkswagen may fabricate emissions and lose a customer base or fax machines become superseded (I hope the banks catch on to this), people always have needed a roof over their head.</p>\r\n<p>This is the primary understanding at a high level of property economics. If there are more people needing property to live in each year and there are not enough properties being built, property prices will increase. If there is an over-supply of property and too much competition property prices will stay stagnant and fall.</p>\r\n<p>Current supply v&rsquo;s demand in UK residential property</p>\r\n<p>Parliament has suggested that the UK needs to deliver 300,000 new homes per year to keep up with the demand of a growing population in the UK. In 2017/2018 the number delivered was at its highest in many years achieving 74% of its target. Heriot-Watt University has put the number at 340,000 to deal with the huge under-supply in the UK.</p>\r\n<p>See the research paper here</p>\r\n<p>Naturally this is a macro figure looking at UK property as a whole without consideration of the various cities. Naturally in economically powerful UK cities this number is magnified significantly over the needs of smaller towns and cities.</p>\r\n<p>Taking Manchester as an example, a city which some investors have become nervous of the supply levels expected over the next 3 years we can look back at the numbers again. JLL suggests in their studies that 11,254 new properties are needed per year in the city to reach the demand required with 7,500 in the pipeline over the next two years. Manchester council in their March 2017 report suggested that a minimum of 25,000 new properties had to be built every year to even manage the issue of under supply in the city.</p>\r\n<p>Manchester research paper can be seen here</p>\r\n<p>Using my lecturers example of cranes in the city, even with the minimum level of development needed by the city we would expect to see over 30 developments at one time, with significantly more under JLL&rsquo;s suggestions.</p>\r\n<p>Inner v Outer City Demand</p>\r\n<p>While these numbers will affect the city overall and are mirrored with Birmingham and Leeds demand the inner city sees an even greater struggle meeting the needs of the people due primarily to sheer logistics and land.</p>\r\n<p>As a rule of thumb the inner city tends to be within a ring road around a city. Most major UK cities in some way have a road around them which the inside of this is classed as pure city centre and the outer being development areas.</p>\r\n<p>Naturally a buy to let investor will see an even greater demand on properties within the inner ring roads with the natural problem of supply and demand thirst which can almost never be quenched.</p>\r\n<p>Naturally there is a finite amount of space which can be utilised in these areas which is increasingly been built on or land banked for future development.</p>\r\n<p>These are areas of the city which there can not be significant additional supply leading to a constant competition for property there and a natural increase in property asking prices. With much of Manchester city centre seeing over &pound;500 per square foot asking prices and year on year growth the question of the ceiling will not be desire but affordability.</p>\r\n<p>Affect of average earnings on growth/ London Comparison</p>\r\n<p>When we look at economic growth and comparisons with big cities in the UK it is impossible to see past the likes of London as an example of property prices slowing considerably. While there are still investors who will stick with the capital it is widely accepted that it will continue a slow to no growth for the next few years.</p>\r\n<p>This may go directly against the supply and demand argument at the core of property prices but brings us nicely into the next point to consider, how much a city needs to earn to sustain the growth.</p>\r\n<p>London is a prime example of several factors which both made investors incredibly wealthy, and the ripple effect this can have on other cities. It is in fact proof of the value of investing in the secondary cities such as Birmingham and Manchester with a caveat of knowing when you have hit the ceiling and to cash in on your investment.</p>\r\n<p>Baron &amp; Cabot are known for not only choosing the correct properties to buy now, but also when the best time to cash in your investment and look elsewhere with your profits.</p>\r\n<p>One major driver is understanding where the ceiling is for your investment in a city and you will be able to roughly estimate your exit strategy.</p>\r\n<p>As an example when we look at the likes of the City of London you would need 14.29 times average earnings to buy a property, come further out to Greenwich and 12.95 times earnings are needed for the average property (ONS Office of National Statistics link).</p>\r\n<p>Compare this to the likes of Birmingham 5.59 or Manchester 5.74 and we can see there is some average growth available before we start to see a slow down in those cities for property growth.</p>\r\n<p>Some other cities:</p>\r\n<p>Sheffield 5.7</p>\r\n<p>Liverpool 4.7</p>\r\n<p>Leeds 6.27</p>\r\n<p>Leicester 6.57</p>\r\n<p>Luton 8.35</p>\r\n<p>Reading 8.54</p>\r\n<p>With an average salary in Birmingham of &pound;35,500 we could expect average property prices in the city to grow to &pound;350,000 before we would see a reflective London slow down, or &pound;300,000 comparative to the likes of Reading.</p>\r\n<p>Mortgage rates/LTV</p>\r\n<p>Short of supply and demand and salary affordability the other intrinsic factor in property price growth is lending and affordability on property.</p>\r\n<p>Since the last property recession banks have been very strict on lending criteria in terms of the amount they will lend to an individual for their own home and even more so for a buy to let property.</p>\r\n<p>This has created a more balanced growth and is expected to reduce any issues should there ever be short term property drops in the future.</p>\r\n<p>One important factor when looking at your own affordability is understanding the effect of a percentage changes on mortgage rates and your affordability.</p>\r\n<p>With conversations surrounding Brexit, while there is no reason to suggest that there would be a sudden drop in housing demand, there could be interest rate implications on mortgages, which make it harder for individuals to afford a new home, or to move up to their next property.</p>\r\n<p>Naturally this will improve rental demand for a buy-to-let investor, however can slow the growth of property prices.</p>\r\n<p>How to use this information</p>\r\n<p>When speaking to investors its generally been the most profitable to follow the trends of a city quite closely. If it has been growing at 5% per annum for the last 5-10 years and the properties are not getting to the top end of affordability you should see some strong growth.</p>\r\n<p>As always to manage property fluctuations with interest rates its important to focus on a 5 &ndash;to 10-year investment plan whereby you are balancing rental income with capital growth.</p>\r\n<p>While many investors can take advantage of short cycles and make quick wins, the main focus point should be at long term steady gains in rent and capital growth and as stress free as possible.</p>\r\n<p>Property investment is not a complex algorithm, just looking at the basics, taking some good advice and dealing with the right people, while being sensible with returns will generally put you in a good position.</p>\r\n<p>As always, feel free to speak to someone in Baron &amp; Cabot to understand which markets other investors are looking at, and which may be the most suitable for you.</p>', 'When I was younger studying to become a property professional at University, other than understanding the basis of valuations on a property, build structures and the like a major understanding was the economics behind markets.', 'tm0SYb.jpg', NULL, 'what-causes-property-prices-to-go-up-and-down', 'baron cabot,What Causes Property Prices To Go Up And Down', 'When I was younger studying to become a property professional at University, other than understanding the basis of valuations on a property, build structures and the like a major understanding was the economics behind markets.', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 09:00:08', '2022-07-01 09:00:08'),
(4, 'Should I Buy A Student Property?', '<p>We look at the reasons for and against student property investments in the UK.</p>\r\n<p>Student property in the UK has seen significant investment over the last 10 years, with the marketing on these types of properties being incredibly exciting for many investors. With yield returns being promised often exceeding 8% it is no wonder so many of our clients inquire about our view on student accommodation as a viable investment option.</p>\r\n<p>When we are looking at student accommodation it is important to differentiate normal residential property which is aimed at student tenants, and property which has a lease restriction for just students. For the purpose of this article we will be focussing on the latter.</p>\r\n<p>Benefits of student property</p>\r\n<p>When assessing a student property the first thing which clients are drawn to is the purchase price. While a city centre 1 bed may cost in excess of &pound;150,000 a student property could be &pound;70,000 and yet from that investment there can be significant yield returns.</p>\r\n<p>An example of this is two properties being advertised at time of writing. One is a &pound;150,000 1 bedroom in Liverpool, generating 6% gross rental return in year 1. The other is a student room, &pound;69,500 and generating 8% net (according to the marketing material) assured for 3 years.</p>\r\n<p>Logically looking at these two options the traditional 1 bed will generate roughly 5% net, a full 3% below the student property, of which with the same investment we can buy two student units and have some change &ndash; plus no stamp duty!</p>\r\n<p>Equally, students need a place to stay. Liverpool university is an incredible university seeing growth, a unique medical unit which focus&rsquo;s on tropical diseases (the only one in the UK) and an undersupply of quality student accommodation.</p>\r\n<p>It seems odd to suggest that a traditional 1 bed may be a better option for your investment.</p>\r\n<p>Questions you should ask before you invest in student property.</p>\r\n<p>While, as with every investment there are some developers better than others when it comes to student property there is significant complexities when buying in this market.</p>\r\n<p>Its not residential</p>\r\n<p>The first suggestion to clients is to stop looking at student property as a residential investment. It is not, student property is a commercial property and should be dealt with the same caution as you would investing in a shop to rent out, an industrial unit, hotel room or car parking space.</p>\r\n<p>The reasoning behind this is that this is a pure investment and will only ever be sold back to an investor. As the bank does not see student as residential property you wont be able to borrow to pay for it using a mortgage, and getting any lending on the property will be slim to none.</p>\r\n<p>Selling it back to investors</p>\r\n<p>But you have cash to buy it so why worry? Again, we have to look at the exit strategy for your investment. If you do want to sell your student property how will you? You may need to find a route into investors which means unlikely to use an estate agent. You may try and use a company like Baron &amp; Cabot to sell the property, however when selling to investors there will need to be a way for them to make money on the investment to make it worth while.</p>\r\n<p>Capital growth issues</p>\r\n<p>This is where there are more differences to residential property. The capital growth you see in the &lsquo;normal&rsquo; residential property market only comes from selling your property at a profit. Part of the important work Baron &amp; Cabot do is planning the ideal exit strategy for a property when the growth in value is at its strongest. Often this will mean selling to someone who is on the property ladder. This type of buyer will pay the open market value (OMV) for a property where as an investor will need a discount to make it worth investing in.</p>\r\n<p>With student property as it cant be bought with a mortgage, and there will never be an owner occupier living in there we can only value it at a multiple of its profit &ndash; in the same way you would value a business. Ultimately this will be net rental income at 7% + to entice an investor.</p>\r\n<p>So what is the problem if i&rsquo;m being offered 8% net now, thats only going to grow in value and mean my asset is worth more? This is the key question in this investment, and why a really good broker will be able to help you with the advice here. While the rental may increase, it is important to understand where the rental income figure comes from and who guarantees the rental income?</p>\r\n<p>The rental &lsquo;guarantee&rsquo;</p>\r\n<p>For more information about &lsquo;rental guarantees&rsquo; see the article on that here. The first question is what can you do if they don&rsquo;t pay the rental guarantee? While every contract is different and most developers are completely honest there are a few out there who may not, or have a track record of not paying these agreements. And what can you do about this? The wording of that is in the contract and we can only give you answers on ones which have passed through our due diligence.</p>\r\n<p>And how is the rental income calculated? Even if the rent is paid as guaranteed at 8% net for the first 3 years is that what it is worth? Going back to the valuation point above if a property is bought at &pound;70,000 with an 8% net income, but after the guaranteed 3 years the net income drops to 6% the asset could be worth &pound;52,500 or &pound;60,000 (based on a re-sale valuation for 8% or 7% net income &ndash; feel free to call us to explain this in more detail).</p>\r\n<p>Do the rental numbers stack up</p>\r\n<p>So knowing what the rental is now is imperative, knowing the rentals of similar in the area will help you understand the true valuation of the property and help you to compare it to that 1 bedroom place. It may be that a developer is charging more for the property to fund the additional rent you will receive in the first 3 years, in essence you are giving a developer more money for a unit so he can give it back to you and give you a sense of safety with the guaranteed rent.</p>\r\n<p>Comparing a student property against a residential is simple when utilising the resources that a company like Baron &amp; Cabot can rely on. In essence though assume little to no capital growth in student accommodation and have it as a pure yield play. Over all this could mean a lower overall income, and a much higher risk investment but this can only be judged on property to property.</p>\r\n<p>Should I avoid student property</p>\r\n<p>Like each student, the property is different as each investor is. The question of whether it is suitable for you or not would be judged on your criteria. Often a student property (so long as it is with a good developer who has passed our due diligence) will work for someone who has large amounts of cash, no need for a mortgage, likely already has a portfolio or wants a pure rental income. It may be that the income is a pension alternative and a high yield is required at the expense of long term profit.</p>\r\n<p>Pick up the phone</p>\r\n<p>There is nothing better than asking people who are dealing in property all day everyday for some suggestions when you are trying to balance the alternatives.</p>\r\n<p><strong>Call Baron &amp; Cabot on 0203 287 8282 to discuss your options with an independent broker.</strong></p>', 'Student property in the UK has seen significant investment over the last 10 years, with the marketing on these types of properties being incredibly exciting for many investors. With yield returns being promised often exceeding 8% it is no wonder so many of our clients inquire about our view on student accommodation as a viable investment option.', 'mNZfIA.jpg', NULL, 'should-i-buy-a-student-property', 'Should I Buy A Student Property', 'Should I Buy A Student Property', 31, NULL, NULL, NULL, NULL, 1, 1, 1, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(5, 'Foreign Investment In The UK, How Easy Is It?', '<p>We look at how thousands of foreign investors are able to invest in the UK</p>', 'Foreign Investment In The UK, How Easy Is It?', '1ueXOt.jpg', NULL, 'foreign-investment-in-the-uk-how-easy-is-it', 'Foreign Investment In The UK, How Easy Is It', 'Foreign Investment In The UK, How Easy Is It?', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(6, 'Can I Get A Buy-To-Let Mortgage?', '<p>We look at how thousands of foreign investors are able to invest in the UK</p>', 'We look at how thousands of foreign investors are able to invest in the UK', 'iVD4XZ.jpg', NULL, 'can-i-get-a-buy-to-let-mortgage', 'We look at how thousands of foreign investors are able to invest in the UK', 'We look at how thousands of foreign investors are able to invest in the UK', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(7, 'Financial Planning For An Investment.', '<p>Property investment is likely to give you a better return than your bank. But how much do you need to make that first property purchase?</p>\r\n<p>Knowing how much you will need for your next investment is critical, but it doesn&rsquo;t have to be hard. We look at how much money you need to make a buy to let property investment in the UK.</p>\r\n<p>While most know that money in the bank is not the best way to generate passive income, often clients struggle to understand how much money they will need to make an investment into property, and how far that money will go with a buy-to-let investment.</p>\r\n<p>One routine Baron &amp; Cabot broker will work with you on in the initial call is understanding how much you would like to invest. Naturally, this is unlikely to be everything that you have saved, keeping money for a rainy day is important, as is being able to keep your money in a property investment long enough to give you the returns.</p>\r\n<h3>Buy to let mortgage LTV</h3>\r\n<p>The first port of call for you is to understand how much the mortgage lender will expect you to have as a deposit in the mortgage. As a buy-to-let investor you are a higher risk than you are as a home owner, simply because you are more likely to not pay your investment than the roof over your head.</p>\r\n<p>Because of this mortgage companies will generally expect between 25% and 35% money on the property as cash with them lending the remainder. The vast majority of Baron &amp; Cabot clients are able to invest 30% and under with the bank lending the remainder. This is what is known as &lsquo;loan to value&rsquo; (LTV), how much the bank will loan to you against the value of the property.</p>\r\n<p>Our starting assumption then is that we need at least 25% available by the time the property is completed.</p>\r\n<p>On a low value property of say <strong>&pound;100,000</strong> this will mean we need at least &pound;25,000 to start.</p>\r\n<h3>Stamp Duty</h3>\r\n<p>Although loan to value is not a cost as it is invested in the property, it is still money out of your pocket. One cost that you will not get back is stamp duty.</p>\r\n<p>Stamp is the next step for planning an investment in a buy-to-let property in the UK. A stamp duty calculator like the one here is a great resource for planning this costs.</p>\r\n<p>We will look at what you can buy with each bracket of savings in the article below.</p>\r\n<h3>Legal Fee&rsquo;s</h3>\r\n<p>Your normal legal fee&rsquo;s are an additional cost which should not be overlooked when making an investment. In general terms expect to pay in the region of &pound;1,200 however each solicitor is different and you should ask your broker at Baron &amp; Cabot to share the legal fee quotes when choosing a property.</p>\r\n<p>Often legal fee&rsquo;s are either at completion or split between exchange and completion (on an off plan property), understanding these costs when on a tight budget is significant.</p>\r\n<h3>Other costs</h3>\r\n<p>Additional costs you will be expecting are your mortgage broker costs, furniture pack if you are furnishing the property and broker fee&rsquo;s (Baron &amp; Cabot do not charge you admin fee&rsquo;s). When deciding on furniture Baron &amp; Cabot will in most cases have a preferred partner who can help, and they tend to range between &pound;2,500 and &pound;4,500 depending on size and spec of the property.</p>\r\n<h3>Budget Range</h3>\r\n<p>Knowing the budget you have will roughly give us the ability to buy the below property values:</p>\r\n<p><strong>&pound;20,000 &ndash; &pound;65,000 property investment</strong></p>\r\n<p><strong>&pound;30,000 &ndash; &pound;100,000 property investment</strong></p>\r\n<p><strong>&pound;40,000 &ndash; &pound;134,000 property investment</strong></p>\r\n<p><strong>&pound;50,000 &ndash; &pound;165,000 property investment</strong></p>\r\n<p>Note that the above are reference points only and is a basis for a starting point, not a rule for all. A mortgage advisor through Baron &amp; Cabot will be able to give you clear expectations as money saved.</p>\r\n<h3>Best area&rsquo;s for your budget</h3>\r\n<p>Now that you have a rough idea of your costs you should speak to your broker at Baron &amp; Cabot about the best area&rsquo;s to invest based on budget range.</p>\r\n<p>The very best investments may not always be in a city or town you are familiar with. Gathering the research information from your Baron &amp; Cabot broker will help you with your first investment through us, after which your confidence will grow.</p>\r\n<p>At this stage it is important to understand that the overall goal is to make the best returns, in the safest manner possible over a period of 5 years. Some investors make the mistake that being able to buy a 4 bedroom house in a poor area is better than a 1 bedroom apartment in a prime growth area. The goal is the return not the size of the property.</p>\r\n<p>Purchasing a buy-to-let property should be a simple and stress free process, however planning with Baron &amp; Cabot and understanding your own expectations and bench marks are key. While the information here is beneficial very little comes close to a business relationship with an advisor over the telephone or in person.</p>\r\n<p>For more information about planning your investment feel free to email Mark on the address mark@baroncabot.com.</p>', 'Property investment is likely to give you a better return than your bank. But how much do you need to make that first property purchase', 'A5dsH8.jpg', NULL, 'financial-planning-for-an-investment', 'Financial Planning For An Investment.', 'Property investment is likely to give you a better return than your bank. But how much do you need to make that first property purchase', 31, NULL, NULL, NULL, NULL, 1, 1, 1, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(8, '5 Steps On How To Research An Off Plan Buy-To-Let Property', '<p>With so many options available to look at, so many companies offering what can look like amazing deals, numerous websites and literally 11,000 properties to choose from. How on earth do you choose the one that&rsquo;s right for you?</p>\r\n<p>After more than 5 years of listening to property investors and asking them what&rsquo;s really important to them, there is a common thread from those who have been around a long time and have eventually, become successful with real estate investments. They made mistakes too, hopefully, their knowledge will help you avoid those mistakes and prevent you losing your hard-earned cash in the process.</p>\r\n<h3>1. Double check your budget &ndash; measure twice cut once</h3>\r\n<p>First things first. So many times, people will believe they have access to an amount of cash, either built up equity in a property or perhaps a dividend paying out &ndash; without actually checking the cash is really available at the amount or time they thought. You&rsquo;re going to need access to around 30% to 40% of the property value as a deposit on a buy to let, all the adverts you see which say, &ldquo;Buy now for only 10% deposit!&rdquo; these are for actual home owners, not you. Check with the bank or the fund, but do check before you start looking for property.</p>\r\n<h3>2. Build a plan and stick to it, Rome wasn&rsquo;t built in a day</h3>\r\n<p>How much money do you think you&rsquo;d need, if you wanted to retire and still enjoy yourself properly for the rest of your life? Once you have that number figured out, you can start to build an idea of how many properties it may take to supply that income to you. It will take time; however, property investments aren&rsquo;t short term anyway, always consider 10 to 15 years as a time frame to work on.</p>\r\n<p>The UK property market doesn&rsquo;t fair well for &lsquo;property flipping&rsquo; so much anymore and especially not with off plans. There are always going to be ups and downs with any investment, property is no different. Don&rsquo;t allow a temporary situation to alter your long-term plans, Brexit included!</p>\r\n<p>After all, if you&rsquo;re a follower of the property cycle idea, you&rsquo;ll understand that land in the UK, is limited and supply and demand don&rsquo;t change that much. Rightmove wrote in their recent report that home buyers needs outweighed any instability and were buying anyway which has resulted in a price increase. The best time to buy is when everyone else is selling.</p>\r\n<p>Most of the portfolio buyers I&rsquo;ve spoken with target one bed apartments in and around &pound;150,000 in areas outside of main city centres, areas that have the better potential for growth over the next 5 to 10 years. These sorts of locations aren&rsquo;t yet established, so although you may not personally want to live there right now, there is the likelihood you would do in a few years.</p>\r\n<p>It&rsquo;s difficult to remain objective and logical with property, if you become too emotional, you&rsquo;ll end up buying places you want to live in, which are more likely to be expensive in already developed areas &ndash; this will not give you the results you want. Work on spreadsheets, and if the numbers work, go for it.</p>\r\n<h3>3. Get expert advice, because hiring an amateur is more expensive</h3>\r\n<p>Speak to an independent mortgage broker and ask them to help, the advisors at your bank usually only have access to their banks products, you may not be getting the best rates, so shop around a little.</p>\r\n<p>There are fees to exit a mortgage and banks won&rsquo;t let you refinance the whole amount, maybe only 70%. You may need an accountant to go through your finances if you&rsquo;re self-employed to prove you can manage the loan, this will take time and money.</p>\r\n<p>Banks will want to know you are able to service the debt safely, you&rsquo;ll get better rates if you&rsquo;re an experienced buy to let landlord (at least 6 months with one property) than someone just starting out.</p>\r\n<p>Don&rsquo;t buy something just because you like the person, it may sound silly, but a lot of people stick to what they know simply because they like who they&rsquo;re buying from.</p>\r\n<h3>4. If it looks too good to be true&hellip;</h3>\r\n<p>By now you&rsquo;ve seen so many adverts on reputable websites such as Rightmove and Zoopla, signed up to a lot of different property pages, forums and so forth. Treat these all the same, be sceptical, be analytical and stick to your guns.</p>\r\n<p>If a project looks too good to be true, it often is! A few examples for you. Care home investments, Student accommodation, Hotel rooms &ndash; these all typically have some hook in like &ldquo;10% for 10 years, guaranteed!&rdquo;. Spend the money at a horse race instead, you at least have some chance of a return and have a lot more fun doing it! It&rsquo;s also important to remember, there is not likely a financial director on the planet that would allow any company to guarantee rent for any period, it makes zero business sense to do so.</p>\r\n<p>See below for a typical advert (arrived just in time for me to see it today) and sadly yes, people do fall for these mythical investments.</p>\r\n<p>Projects like this do seem like great deals, so cheap, high yields, apparent demand and hands off! What could possibly go wrong? Check online for the hundreds if not thousands of complaints about income not being paid on time, if at all.</p>\r\n<h3>5. How to sort the wheat from the chaff (there&rsquo;s a lot of chaff!)</h3>\r\n<p>Research, research and more research. Don&rsquo;t take anyone&rsquo;s word for it, check out everything and ask for proofs of what is being said to you.</p>\r\n<p>Ask for a full legal pack so you can see the lease and the lease terms. Has the land been bought? What happens to your deposit? Is your money safe or is it being used to build with? Can you see the S106? Has the developer got a track record you can see? If it&rsquo;s a cash purchase, why is that?</p>\r\n<p>As a note on the developers, there are limited numbers of real and good developers in the UK &ndash; you&rsquo;ll question their price once, but never question their quality. Keep that in mind, when it&rsquo;s time to rent it out or sell, this is when you realise you made a great choice.</p>\r\n<p>You may not need to see these details yourself, the lease can look like gibberish and appears to be written in Shakespearian English, but you do need to know how long the lease is, how much the ground rent is, which should be 0.1% of the property value, how much the service charge is and it should be linked to the Retail Price Index (RPI) and reviewed every 10 years.</p>\r\n<p>Asking for these things will often cause the weaker projects to vanish, as the sales person simply won&rsquo;t have any of those things to give to you, because the documents don&rsquo;t exist.</p>\r\n<p>Ask what percentage is reserved for owner occupiers, as a rule of thumb, it should be 30%. Banks won&rsquo;t lend against a development that is as they call it &lsquo;investor lead&rsquo; as it&rsquo;s too high a risk.</p>\r\n<p>You can buy rental reports from companies like Zoopla too, these are helpful in generating a guideline rental return for the postcode area you want to buy in. Do bear in mind however, post code areas often have a large variation of rental and property values, so it&rsquo;s just a guide.</p>\r\n<p>Avoid cash only investments on off plan properties, these are one of the most problematic you&rsquo;ll find out there. Why? Typically, your money is used to build the development with, and if a bank isn&rsquo;t willing to lend to the developer, why the hell would you or I be willing to?</p>\r\n<p>Often and almost always delayed for huge amounts of time, one or two years and sometimes never at all built, this is because the developer has to wait until a certain number of the off plan has been sold before they will commit to build it, they&rsquo;ll have what&rsquo;s called an &lsquo;option&rsquo; on the land, which basically means you and everyone else own absolutely nothing until it&rsquo;s built and at 100% risk to your deposit. We&rsquo;re then left trying to legally recover our large deposits, which can take years if successful.</p>\r\n<p>Thank you for taking the time to read this article, if you thought it was helpful, do let me know. I&rsquo;d be happy to help you connect with professionals able to help you chose the right property too.</p>\r\n<p>Feel free to contact Gareth at Baron &amp; Cabot on <strong>+44 (0) 203 287 8844</strong> or have a chat to us on the live chat below.</p>', 'With so many options available to look at, so many companies offering what can look like amazing deals, numerous websites and literally 11,000 properties to choose from. How on earth do you choose the one that’s right for you?', 'EIwQWl.jpg', NULL, '5-steps-on-how-to-research-an-off-plan-buy-to-let-property', '5 Steps On How To Research An Off Plan Buy-To-Let Property', 'With so many options available to look at, so many companies offering what can look like amazing deals, numerous websites and literally 11,000 properties to choose from. How on earth do you choose the one that’s right for you?', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 19:10:15', '2019-12-31 19:10:15');
INSERT INTO `blogs` (`id`, `title`, `content`, `synopsis`, `thumbnail`, `blog_type`, `url`, `meta_tags`, `meta_description`, `status`, `visibility`, `publish_time`, `featured`, `comment`, `view_count`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(9, 'Best Buy-To-Let Cities In The UK 2019', '<p>Best buy-to-let cities in the UK 2019: Where the experienced are investing in property.<br />&nbsp;<br />UK property in 2019 has become even more exciting than any other year. With the maturity of government schemes to increase power of cities outside of London, and the capital itself becoming so expensive that it has slowed growth, investors made significant growth in new territories over the last few years.&nbsp;</p>\r\n<p>Understanding new growth area&rsquo;s can be relatively simple with the correct methodology. Where are governments investing, where are significant institutional investors spending money, where are major companies locating too, and where are significant infrastructure improvements being made?</p>\r\n<p>When all of these factors come together we get hotspots of investments which are expected to return growth over the next 3-10 years. The benefit of buying in growth area&rsquo;s will also see the smart investor achieve higher yields than mature parts of the city.</p>\r\n<h3>Number 5. Earls Court London</h3>\r\n<p>&nbsp;<br />&nbsp;<br />&nbsp;<br />For the investor with a higher budget and wants to stay in London, Earls Court has the potential to be one of the significant wins to be had in the city.</p>\r\n<p>Capco, who are redeveloping the area off the back of its Covent Garden success is planning 10,000 new homes in this West London location.</p>\r\n<p>Investors can quickly get in here at square foot prices significantly below its neighbours, with a long term growth potential should the masterplan go ahead.</p>\r\n<p>Holding out to see this masterplan released may show some key opportunities which we will be keeping a close watch on at Baron &amp; Cabot.</p>\r\n<p>Key Stats:</p>\r\n<p>Expected next 5 years: 12% (JLL)</p>\r\n<p>Average Yield: 3.5%</p>\r\n<p>Average property price v average earnings: 12</p>\r\n<p>Number 4: Leeds</p>\r\n<p>&nbsp;<br />&nbsp;<br />&nbsp;<br />About 10 years ago Leeds was seen as being over supplied with investment property. This rumour which likely had some accuracy at the time, led to a massive drop in construction resulting in a position now of a great city with a huge undersupply of property.</p>\r\n<p>Leeds has every right to have ambitions of matching Manchester and Birmingham in terms of economic performance and having one of the largest banking and legal industries outside of the capital packs some serious short and long-term results for investors.</p>\r\n<p>The capital of Yorkshire is not delivering significant savings with many new developments, keeping us away from some of the new developments, however there are some smaller developments which can deliver both value and yield.</p>\r\n<p>The Southbank project in Leeds, south of the river which will double the size of the city is where most long term investment returns will be delivered, however SOYO and Mabgate area&rsquo;s are equally worth investigating with slightly smaller investment zones delivering returns slightly quicker than the long term of Southbank.</p>\r\n<p>Investors should be wary of price point with many developers being over ambitious in asking prices, however the city itself at the correct prices should certainly be seen as value, cheaper than Birmingham and Manchester with significant demand.</p>\r\n<p>Key Stats:</p>\r\n<p>Expected next 5 years: 19.9% (JLL)</p>\r\n<p>Average Yield: 6.5%</p>\r\n<p>Average property price v average earnings: 6.27</p>\r\n<p>Number 3: Liverpool</p>\r\n<p>&nbsp;<br />&nbsp;<br />&nbsp;<br />The city known globally for the Beatles and historically for its shipping has since blossomed into an economic strength in the Northern Powerhouse.</p>\r\n<p>The city has gone from strength to strength and had been overlooked by many investors until recently.</p>\r\n<p>Greg Malouf, the charismatic Australian developer behind the success of Liverpool&rsquo;s waterfront, in partnership with Peel Holdings was amazed that a waterfront city, with so much economic output had been so overlooked, we share that sentiment.</p>\r\n<p>2019 is likely the last chance we will get to buy in at under &pound;150,000 for key waterfront developments. While there are cheaper area&rsquo;s of the city, growth will be slower than on the waterfront where tenants will naturally look to.</p>\r\n<p>Yields in the city due to the price points are higher than the likes of Leeds, Birmingham and Manchester, although growth is likely to be a slightly longer process as the cities new area&rsquo;s come to shape.</p>\r\n<p>The key investment area is Liverpool Waters on the historic waterfront. Being developed by Peel Holdings, the developers who transformed Media City in Manchester from wasteland to one of the key area&rsquo;s of the city have taken on this masterplan which has been 10 years in the making.</p>\r\n<p>Look for true waterfront as the first point of call, within the traditional wall&rsquo;s of the waterfront, these developments are generally brick built in line with local governments plan to make this area a &lsquo;mini Amsterdam&rsquo;.</p>\r\n<p>Key Stats:</p>\r\n<p>Expected next 5 years: 19.3% (JLL)</p>\r\n<p>Average Yield: 6.5%</p>\r\n<p>Average property price v average earnings: 4.7</p>\r\n<p>Number 2: Manchester</p>\r\n<p>&nbsp;<br />&nbsp;<br />&nbsp;<br />Like with its competition Birmingham, Manchester has seen incredible growth over the past 10 years, and is poised to see further strides over the next 10 years. Low stock levels and high demand has seen competition for land and property being at an all-time high.</p>\r\n<p>Politically and economically stable Manchester has been in high demand for local and international investors, with the city leading the way in Europe with some of the best investment of government money completely transforming the city.</p>\r\n<p>The threat of over supply suggested by some investors does not stack up against the numbers of property needed in the city. The need for quality accommodation is at a critical point with the capital of the Northern Powerhouse retaining its graduates, while taking companies from London and their staff.</p>\r\n<p>The creativity and diversity of the city, with some of the best economic output of any city in the UK Manchester should have been and continue to be on any investors to do list for investments.</p>\r\n<p>Key city centre locations are now starting to deliver lower yields due to the price points, however there are spots such as Blackfriars, Middlewood Locks and Ancoats which are still delivering good value, high yields and huge capital growth potential.</p>\r\n<p>Don&rsquo;t expect bargains in Manchester, do however expect that your investment will be in a mature city with existing infrastructure and huge growth potential.</p>\r\n<p>Key Stats:</p>\r\n<p>Expected next 5 years: 22.8% (JLL)</p>\r\n<p>Average Yield: 6%</p>\r\n<p>Average property price v average earnings: 5.74</p>\r\n<p>Number 1: Birmingham</p>\r\n<p>&nbsp;<br />&nbsp;<br />&nbsp;<br />In at number 1 spot is Birmingham. Over the last few years Birmingham&rsquo;s property prices have grown at an astronomical rate and will continue to do so. Being centrally located in the UK, when the HS2 line comes rocketing into the city in 38 minutes from London, Birmingham will cement its position as the most accessible city in the UK.</p>\r\n<p>With major companies re-locating to the city, graduates staying due to the achievable rents and high-quality social scene the UK&rsquo;s 2nd city is primed to make growth similar to those achieved by London investments many years ago.</p>\r\n<p>With a current and ongoing problem with under supply, and high competition for central land, Birmingham property prices are seeing constant upward pressure, which will intensify each year up until and immediately after the HS2 arrival and the planned tram links between the two Birmingham HS2 stations.</p>\r\n<p>As you will have read in the article &lsquo;What causes property prices to go up and down&rsquo; Birmingham has an average property price of 5.59 the average salary, where London is 12-14 times average salary. Birmingham could legitimately see growth to 10x average salary before a slowdown, meaning average property would be &pound;350,000.</p>\r\n<p>Key growth area&rsquo;s to look at are Sheldon and surrounds, which take in the first stop of the HS2 and is one of the fastest selling, and best valued parts of the city, Digbeth/ Curzon, where the 2nd HS2 station will be located, and area&rsquo;s surrounding Broad Street and Brindley Place.</p>\r\n<p>More mature spots such as financial area&rsquo;s will see the most premium property growth with more wealthy individuals being based in the city expecting the highest spec developments.</p>\r\n<p>Tony Pidgley, The Founder and Chairman of Berkeley Homes, a traditional long term luxury spec central London developer have also jumped into the growth of Birmingham, making their first ever developments out of the capital and planning 3,000 new properties per year in Birmingham.</p>\r\n<p>He said &ldquo;I don&rsquo;t have any doubt that in the next decade you will become one of those world-class cities.</p>\r\n<p>&ldquo;With the Smithfield and all the other things you are ambitious about, you will have all those things.</p>\r\n<p>&ldquo;You are a city which is on the up.&rdquo;</p>\r\n<p>Key Stats:</p>\r\n<p>Expected next 5 years: 20.5% (JLL)</p>\r\n<p>Average Yield: 6%</p>\r\n<p>Average property price v average earnings: 5.59</p>\r\n<p>In conclusion</p>\r\n<p>Investing in these areas for your next buy-to-let investment gives some of the best chances of returns, however by no mean guarantee. Within the locations there are areas where you should be investing, and those which you most certainly shouldn&rsquo;t.</p>\r\n<p>Equally there are properties, both completed and off-plan which will perform better than others, and significantly worse. Knowing the quality of a property, the lease details and price points &ndash; which are covered in our other articles will support you in making the best returns for your investments.</p>\r\n<p>Speak to a broker at Baron &amp; Cabot on our chat below (if you are shy) or give us a call on 0203 287 8282.<br />&nbsp;</p>', 'UK property in 2019 has become even more exciting than any other year. With the maturity of government schemes to increase power of cities outside of London, and the capital itself becoming so expensive that it has slowed growth, investors made significant growth in new territories over the last few years. ', '2rrUJh.jpg', NULL, 'best-buy-to-let-cities-in-the-uk-2019', 'Best Buy-To-Let Cities In The UK 2019', 'UK property in 2019 has become even more exciting than any other year. With the maturity of government schemes to increase power of cities outside of London, and the capital itself becoming so expensive that it has slowed growth, investors made significant growth in new territories over the last few years. ', 31, NULL, NULL, NULL, NULL, 1, 1, 1, '2019-12-31 19:10:15', '2022-07-20 19:32:28'),
(10, 'What Affect Does A Young Demographic Have On Your Property Investment?', '<p>Investors will often see, when reviewing potential property investments, a city described as &lsquo;young&rsquo; or having a high number of graduates retained. &lsquo;HESA destination of leavers survey&rsquo; is generally the go to guide on graduate leavers and where they go sitting the likes of Manchester, Leeds, Birmingham, Edinburgh and London at the top of the charts of cities holding on to graduates, with Birmingham traditionally losing many graduates to London expecting to see significant growth in the charts before the next release.</p>\r\n<p>When looking at pure city age Slough, London, Oxford, Cambridge and Bradford are some of the names with Blackpool, Sunderland and Blackpool being some of the oldest.</p>\r\n<p>While looking for a UK property investment why is this important? And what affect will it have on your long-term investment goals?</p>\r\n<p>Primarily the goal, as always is growth in rental return and capital growth. For this we must go behind what the numbers mean. A true driver of property growth is how a city can retain its graduates.</p>\r\n<p>Graduate retention tells an investor a few things about a city, that it has quality business&rsquo; there attracting the graduates to stay, that these graduates will eventually earn more and start to buy property increasing pressure on prices, and have promotions resulting in upward pressure on rentals.</p>\r\n<p>The more a city grows with professional staff, earning more money and driving demand, the better our investments in that city will perform. Naturally it&rsquo;s not the only consideration in growth but is one of the fundamentals of progressive long-term growth which we would like to see along with other growth factors considered.</p>\r\n<p>Thankfully in the UK there are a significant number of cities performing and retaining increasing numbers of its graduates. Importantly this has been consistent, long term, and without reason to believe they will stop growing.</p>\r\n<p>Retention of students is not the only factor to consider within a city. There is a significant &lsquo;bounce rate&rsquo; of students who study in a different city and return to their home city, or study and move to another city for the job they are looking for. The number of students who &lsquo;bounce&rsquo; accounts for around 50% of the students in any city.</p>\r\n<p>Jobs are not the only factor attracting graduates. Cost of living balanced with opportunity has increasingly become an important factor for graduates and ultimately your buy to let investment.</p>\r\n<p>As with many people London has increasingly become difficult in terms of the cost of living compared to the average wage overall, and even more complex for graduate roles. Birmingham and Manchester, and in some ways Leeds have equally had year on year rental and capital growth changing the landscape of property investments in the city.</p>\r\n<p>At Baron &amp; Cabot we have noticed an increasing lean towards sharing accommodation in Birmingham and Manchester. While most investors traditionally purchased 1 bed apartments in these cities, savvy landlords are taking advantage of the increasing costs and started to purchase many more 2 bed apartments as property investments in core city centre locations.</p>\r\n<p>In purchasing 2-bedroom apartments as buy to let investments, focussing on 2 similar sized double bedrooms, 2 bathrooms and key locations, we are seeing investors targeting tenants who are increasingly sharing to afford the best locations in the respective cities.</p>\r\n<p>This trend is expected to continue in a similar vain to London in terms of growth with pressure of demand still consistently outstripping supply in key financial cities. As a buy to let investor there is opportunity today to benefit from the price pressures in the same way we did 10 &ndash; 15 years ago in the capital.</p>\r\n<p>The modern investor has to look at trends with their advisor and work with them. While a clich&eacute; the trend is your friend and understanding long term migration to a city of &lsquo;high-quality&rsquo; professional tenants will always be a key part of the jigsaw.</p>\r\n<p>Many factors come in to capital and rental growth, and while demographics are important they are a factor behind the numbers, giving comfort in the investment rather than being strong enough to choose the investment.</p>\r\n<p>The balance between the loss of domiciled students against the gaining of graduates from elsewhere, 2013-14 to 2014-15:. Source: HESA destination of leavers survey.<br />For more information please contact Baron &amp; Cabot via live chat or telephone on <strong>0203 287 8282.</strong></p>', 'Investors will often see, when reviewing potential property investments, a city described as ‘young’ or having a high number of graduates retained. ‘HESA destination of leavers survey’ is generally the go to guide on graduate leavers and where they go sitting the likes of Manchester, Leeds, Birmingham, Edinburgh and London at the top of the charts of cities holding on to graduates, with Birmingham traditionally losing many graduates to London expecting to see significant growth in the charts before the next release.', '1eCcBw.jpg', NULL, 'what-affect-does-a-young-demographic-have-on-your-property-investment', 'What Affect Does A Young Demographic Have On Your Property Investment?', 'Investors will often see, when reviewing potential property investments, a city described as ‘young’ or having a high number of graduates retained. ‘HESA destination of leavers survey’ is generally the go to guide on graduate leavers and where they go sitting the likes of Manchester, Leeds, Birmingham, Edinburgh and London at the top of the charts of cities holding on to graduates, with Birmingham traditionally losing many graduates to London expecting to see significant growth in the charts before the next release.', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(11, '7 Tips For A Would Be Buy-To-Let Investor', '<p>A question of whether to choose a house or apartment can be simple when you know your end goals.</p>\r\n<p>When investigating the best path for returns many of our investors question whether a house or an apartment is the best place to put their money. While the best place to invest is the place with the safest and highest returns we investigate the positives and negatives of each.</p>\r\n<p>At Baron &amp; Cabot we find many new investors who really like the ideal of a house, and a freehold house when starting to look at property. The logic is certainly there, many believe that a lease cannot be extended and so see a freehold asset as a safer position, while others see the likes of ground rent, or building management as a restriction.</p>\r\n<p>Some investors simply feel that they would prefer to live in a freehold house and thus this should be the best place to put their money.</p>\r\n<p>So what are the benefits of houses for buy-to-let?</p>\r\n<h3>Longer term tenants</h3>\r\n<p>Often if purchased right and you can afford the investment of a family home you will find that tenants will stay for longer. While a younger professional tenant will stay on average 20months in a rented property a family will often stay longer due to the burden of moving with children.</p>\r\n<h3>Autonomy over the property</h3>\r\n<p>Although most investors prefer to have a hands off investment, some landlords prefer to be engaged with the property, arranging to have the roof checked or maintained along with the building and gardens themselves. This can often save you some money and improve net rental returns in some instances.</p>\r\n<h3>Ability to change status of the property</h3>\r\n<p>In addition you may be able to change the status of the property from a house into separate flats to create a significant jump in capital growth. While most of us in the industry have done some sort of refurbishment or upgrade, new capital gains rules here should also be worked into profits.</p>\r\n<h3>No lease</h3>\r\n<p>Significantly the biggest benefit is not having to spend money or time extending your lease when it gets to the last 90 years. On average if your lease gets as low as 90 years you would pay &pound;5,000 plus fee&rsquo;s to have this extended, by owning the freehold you will never have to do this.</p>\r\n<p>Benefits to buying an apartment for a buy-to-let</p>\r\n<h3>Ease of investment</h3>\r\n<p>Generally the biggest draw to an apartment with a long leasehold is the &lsquo;arms length&rsquo; approach where a client can invest and spend as little or as much time as they want in managing the asset. Most investors want the property investment as a vehicle for better returns rather than additional work. If we are looking for passive income a managed apartment is often a useful route.</p>\r\n<h3>Ease of rent</h3>\r\n<p>As city centre locations are often the area where most apartments can be found as an investor there is often a bigger pool of tenants ready to rent. Although competition is higher, if priced right you should very rarely see void periods in a property if in a core city centre area.</p>\r\n<h3>Portfolio diversity</h3>\r\n<p>For the investor looking to build a portfolio apartments often come at the benefit of being fully managed and therefore you are able to invest in area&rsquo;s with the best returns not just area&rsquo;s in commuting distance from your own property. This can allow a diversified portfolio to grow lowering your overall investment risk.</p>\r\n<h3>Overall</h3>\r\n<p>The bottom line with houses or apartments should be primarily the return you will get on your investment and then how much work you want to be putting in to it. Investors would be wise to disregard a house because it has more rooms or is bigger if over 5 or 10 years it doesn&rsquo;t make you as much return on investment as a smaller better placed apartment. Conversely if a house can be easily managed, has a great growth potential and rental yield we should not disregard it just because it is a house.</p>', 'A question of whether to choose a house or apartment can be simple when you know your end goals.', 'Lx3Pcl.jpg', NULL, '7-tips-for-a-would-be-buy-to-let-investor', '7 Tips For A Would Be Buy-To-Let Investor', 'A question of whether to choose a house or apartment can be simple when you know your end goals.', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(12, '7 Tips For A Would Be Buy-To-Let Investor', '<p>Searching for a buy to let property investment generally creates a balance of excitement and trepidation initially, followed by an overwhelming avalanche of choice.</p>\r\n<p>You start with great belief in bricks and mortar, you&rsquo;ve read your Rich Dad, Poor Dad book and have decided on passive income, compared to investment rates and dreamed of a property empire like Fred Trumps, but would be more than happy with a couple of income generators allowing you to retire.</p>\r\n<p>This feeling of determination can quickly be eradicated with the sheer volume of choice, should you get a buy-to-let investment near your home, or in a better performing area, how long will that perform better? 1 or 2 bed property investment or should we look at a house for a buy-to-let &ndash; we live in a house so maybe this is bets.</p>\r\n<p>Then you look at freeholds and leaseholds, start receiving a flurry of emails from annoying property brokers who have heard that you want to pay a maximum of &pound;150,000 in the south, and try and tell you to buy a 2-bed flat in Bradford as this will give them the most commission.</p>\r\n<p>So, who can you trust, and what should you look for in a buy-to-let UK property investment? It should be simple and means going back to basics.</p>\r\n<h3>1. Market research on buy-to-let investments</h3>\r\n<p>It really starts with you and what returns you are getting at the moment. You have say &pound;50,000 to invest in the next property, but what is that achieving now, and what could it achieve in another safe investment type?</p>\r\n<p>While at time of writing interest rates are down in the UK there may be another viable option you can look at, and as a worst case can be used as a benchmark of what you need/ want your property investment to achieve.</p>\r\n<p>Investing in buy to let will commit your funds and should be looked at over a 5 year period as an ideal minimum of time. If you will be relying on a rental income to live from understanding your investment is key. To live off your rent you may want to look at a higher yielding, lower cost investment property in a smaller town or outskirts of a city which is already completed and has proof of rental income over the last few years.</p>\r\n<p>Most investors are looking to grow a portfolio over the next 5 or so years so that they can retire. But what number do you need per month and how can this be achieved. Have this written down to understand how many properties you would require achieving this.</p>\r\n<h3>2. Do the maths</h3>\r\n<p>Property investment in the UK is not just about the purchase price of the apartment itself. Think about a buy-to-let mortgage for example. You are likely to require a minimum of 25% of your own cash, with the remaining the bank lending, if your new to this, think of 30% plus to start of with.</p>\r\n<p>In addition, what will your buy-to-let mortgage rate be when you come to get the property? If you are a foreign investor expect this to be higher at 3% or 3.5% with a UK national potentially at 2%.</p>\r\n<p>Have a look at mortgage calculators or speak to a trusted broker and get to grips with what this mortgage rate will be and add it into your calculations. If a 1% difference makes the investment unviable decide whether the property you are thinking of makes sense.</p>\r\n<p>At Baron &amp; Cabot we would always suggest having a quick calculator made before you even look at a property. Do it yourself or with help of an advisor with a basic how much you can afford, what your mortgage lending will give you, the ball park mortgage rate will be. Take out expected stamp duty from your cash available and we have a position on what type of property is achievable.</p>\r\n<p>With this buy-to-let property calculation you are now in a position to do the maths on income. Have a look at this , or this one on , but assume an average 1 bed of 450 square foot with &pound;2 service charge per annum and &pound;250 per annum ground rent, 8% management fees and you can estimate what rental return you would need.</p>\r\n<h3>3. Choose a promising area to invest</h3>\r\n<p>While it is always emotionally easier to part with money on an investment which is in an established area this will not always delver the returns you are looking for.</p>\r\n<p>Consider core city centre investments and their yields. While investing in London property may deliver 4% gross (rental before costs above), a Manchester or Birmingham property investment may deliver 5% or 6% gross rental yield. Now look at the outer growth areas of these cities and you may see a higher yield and growth and a lower cost of entry.</p>\r\n<p>When we look at areas don&rsquo;t invest because its cheap, invest because it delivers value. Key things you want to see are future changes to that area. Is there significant government or independent investment happening over the next 5 years? Is there a new tram line or train line going there, or a new road which will increase values?</p>\r\n<p>Buying an investment property in the UK means that it will on occasion not be a place where you would live now but should be one you may do in 5 years&rsquo; time. If you invest in a property where the growth has already happened it is likely to have lower returns.</p>\r\n<p>Conversely look at area&rsquo;s not to invest in, where there have been long periods of under investment. While some area&rsquo;s in the North East deliver high yields and cheap purchase prices, some are seeing growth slower than inflation meaning you may not get the returns people have seen in other places.</p>\r\n<p>Promising areas should not only have an air tight logical case for growth but also have a demographic which shows it can support rental and capital growth.</p>\r\n<p>Consider the comparison of Reading and Luton. Both are commuting distance to London and both had significant investment in 2014-2017 based on the improved rail links. Reading saw huge capital growth and rental growth as it was not only commuting distance, its young population was wealthy enough from the jobs in the city to support higher growth than those in Luton.</p>\r\n<h3>4. Use leverage on a buy-to-let mortgage</h3>\r\n<p>Often leveraging is the best method of getting the most out of your investment. Think of it this way; if you buy an investment property using 100% of your cash and the property grows 25% in value over 5 years you will see a 25% growth in your cash investment. If however you use 30% of your cash and the remaining mortgage the same property will see you return 83% on your cash invested.</p>\r\n<p>While you need to understand the risks of having a mortgage if you can afford a month without rent leveraging should be considered in building a portfolio. Most will use an interest only mortgage and use the flexibility this delivers. Buying correctly and for a long term will manage any risks associated with a short-term drop in property prices during a cycle.</p>\r\n<h3>5. Don&rsquo;t be greedy in property investment</h3>\r\n<p>Greed in a buy-to-let investment can often be the downfall of an investor. Look at long term minimum 5-year return on your investments and properties which are safe investments. Whether it is off plan or completed there is a small number of properties advertised which show returns which the more mature investor will understand are not deliverable.</p>\r\n<p>Do not look for guaranteed rents, rental yields over 7% or buy backs if you are new to investment. While they look appealing, they will often not be able to deliver on your expectations and can cause long term stress.</p>\r\n<p>Look for 5, 7 and 10 years of an investment and the yield and growth that should deliver. Look for property investments which are solid, from a firm who has done the research and can share all of this information with you. If you get 7% growth on your investment per annum through a mix of property appreciation and rental income you are beating most other investment types. We often have investors suggesting a minimum of 10% return on rent which we have to explain will generally come at very high-risk properties.</p>\r\n<p>No one will sell a property at so much below market value that you can generate a really high yield, without it meaning that they want to get rid of the property for one reason or another. This is generally that it is high risk, or the seller has had financial problems.</p>\r\n<h3>6. Consider how hand on you want to be as an investor.</h3>\r\n<p>When looking at a property to rent out a would-be property investor should consider how hands on they want to be with the property investment.</p>\r\n<p>Owning a freehold semi-detached property somewhere may initially be your thought process however this will only benefit you if you want to be responsible for maintenance and upkeep.</p>\r\n<p>You may want to use a management company which will likely cost between 6% and 10% of your rental income. You can do this yourself, however may come at a risk of having the property untenanted or having poor tenants.</p>\r\n<p>Generally, investors want a hands-off property investment, working off the principles of passive income streams. While this could carve away at potential profits, in the long term it can often mean an easier investment where you will not have to live near to the property. In many cases having professionals dealing with your property will actually leave you in a better financial position with less void periods in your rental cycles.</p>\r\n<p>In addition, having the property managed with fair and reasonable service charges should mean that there are no nasty surprises with bills and the common areas are kept to a high standard. A leasehold apartment is most suitable to this type of hands-off investment where the focus is based on best areas to invest regardless of distance to your own home, and long term quality tenants.</p>\r\n<h3>7. Give yourself a financial buffer</h3>\r\n<p>Property investments have been a wonderful lucrative market for our own clients and thousands of others both in the UK and abroad. It can come with pitfalls for an investor who is flying to close to the wind with an investment.</p>\r\n<p>As with any investment, whether it is a car or a handbag or your own home it is important to invest what you can afford and have a mortgage which you could afford if there was a vacant month or so in the tenancy.</p>\r\n<p>While the average tenant will stay for 18months or so, you should be comfortable that you are not invested so close that this could cause financial hardship.</p>\r\n<p>Be sensible when investing and look at the investment as a 5 year minimum investment to really get the value from a property investment. There really is nothing like owning property, from having a solid investment that you can touch, to having tenants pay off your rent and using each property to eventually fund more purchases. That said to do so you must be sensible as a property landlord to be able to see this growth on your investment.</p>\r\n<p><strong>For more information please feel free to chat to us on our chat bot, or call on 0203 287 8282.</strong></p>', 'Searching for a buy to let property investment generally creates a balance of excitement and trepidation initially, followed by an overwhelming avalanche of choice.', 'rwyVPY.jpg', NULL, '7-tips-for-a-would-be-buy-to-let-investor-pqmq', '7 Tips For A Would Be Buy-To-Let Investor', 'Searching for a buy to let property investment generally creates a balance of excitement and trepidation initially, followed by an overwhelming avalanche of choice.', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(13, 'Completed Or Off Plan Investment?', '<p>Understanding the difference in profit of the two investment types.</p>\r\n<p>Property investment is likely to give you a better return than your bank. But how much do you need to make that first property purchase?</p>\r\n<p>Knowing how much you will need for your next investment is critical, but it doesn&rsquo;t have to be hard. We look at how much money you need to make a buy to let property investment in the UK.</p>\r\n<p>While most know that money in the bank is not the best way to generate passive income, often clients struggle to understand how much money they will need to make an investment into property, and how far that money will go with a buy-to-let investment.</p>\r\n<p>One routine Baron &amp; Cabot broker will work with you on in the initial call is understanding how much you would like to invest. Naturally this is unlikely to be everything that you have saved, keeping money for a rainy day is important, as is being able to keep your money in a property investment long enough to give you the returns.</p>\r\n<p>Buy to let mortgage LTV</p>\r\n<p>The first port of call for you is to understand how much the mortgage lender will expect you to have as a deposit in the mortgage. As a buy-to-let investor you are a higher risk than you are as a home owner, simply because you are more likely to not pay your investment than the roof over your head.</p>\r\n<p>Because of this mortgage companies will generally expect between 25% and 35% money on the property as cash with them lending the remainder. The vast majority of Baron &amp; Cabot clients are able to invest 30% and under with the bank lending the remainder. This is what is known as &lsquo;loan to value&rsquo; (LTV), how much the bank will loan to you against the value of the property.</p>\r\n<p>Our starting assumption then is that we need at least 25% available by the time the property is completed.</p>\r\n<p>On a low value property of say &pound;100,000 this will mean we need at least &pound;25,000 to start.</p>\r\n<p>Stamp Duty</p>\r\n<p>Although loan to value is not a cost as it is invested in the property, it is still money out of your pocket. One cost that you will not get back is stamp duty.</p>\r\n<p>Stamp is the next step for planning an investment in a buy-to-let property in the UK. A stamp duty calculator like the one here is a great resource for planning this costs.</p>\r\n<p>We will look at what you can buy with each bracket of savings in the article below.</p>\r\n<p>Legal Fee&rsquo;s</p>\r\n<p>Your normal legal fee&rsquo;s are an additional cost which should not be overlooked when making an investment. In general terms expect to pay in the region of &pound;1,200 however each solicitor is different and you should ask your broker at Baron &amp; Cabot to share the legal fee quotes when choosing a property.</p>\r\n<p>Often legal fee&rsquo;s are either at completion or split between exchange and completion (on an off plan property), understanding these costs when on a tight budget is significant.</p>\r\n<p>Other costs</p>\r\n<p>Additional costs you will be expecting are your mortgage broker costs, furniture pack if you are furnishing the property and broker fee&rsquo;s (Baron &amp; Cabot do not charge you admin fee&rsquo;s). When deciding on furniture Baron &amp; Cabot will in most cases have a preferred partner who can help, and they tend to range between &pound;2,500 and &pound;4,500 depending on size and spec of the property.</p>\r\n<p>Budget Range</p>\r\n<p>Knowing the budget you have will roughly give us the ability to buy the below property values:</p>\r\n<p>&pound;20,000 &ndash; &pound;65,000 property investment</p>\r\n<p>&pound;30,000 &ndash; &pound;100,000 property investment</p>\r\n<p>&pound;40,000 &ndash; &pound;134,000 property investment</p>\r\n<p>&pound;50,000 &ndash; &pound;165,000 property investment</p>\r\n<p>Note that the above are reference points only and is a basis for a starting point, not a rule for all. A mortgage advisor through Baron &amp; Cabot will be able to give you clear expectations as money saved.</p>\r\n<p>Best area&rsquo;s for your budget</p>\r\n<p>Now that you have a rough idea of your costs you should speak to your broker at Baron &amp; Cabot about the best area&rsquo;s to invest based on budget range.</p>\r\n<p>The very best investments may not always be in a city or town you are familiar with. Gathering the research information from your Baron &amp; Cabot broker will help you with your first investment through us, after which your confidence will grow.</p>\r\n<p>At this stage it is important to understand that the overall goal is to make the best returns, in the safest manner possible over a period of 5 years. Some investors make the mistake that being able to buy a 4 bedroom house in a poor area is better than a 1 bedroom apartment in a prime growth area. The goal is the return not the size of the property.</p>\r\n<p>Purchasing a buy-to-let property should be a simple and stress free process, however planning with Baron &amp; Cabot and understanding your own expectations and bench marks are key. While the information here is beneficial very little comes close to a business relationship with an advisor over the telephone or in person.</p>\r\n<p>For more information about planning your investment feel free to email Mark on the address mark@baroncabot.com.</p>', 'Understanding the difference in profit of the two investment types.\r\nProperty investment is likely to give you a better return than your bank. But how much do you need to make that first property purchase?', 'PvxuNy.jpg', NULL, 'completed-or-off-plan-investment', 'Completed Or Off Plan Investment?', 'Understanding the difference in profit of the two investment types.\r\n\r\nProperty investment is likely to give you a better return than your bank. But how much do you need to make that first property purchase?', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(14, 'What Is Happening To Investment In Birmingham?', '<p>Recently described as the &lsquo;jewell at the heart of the UK,&rsquo; known for being the most central location in Great Britain, Birmingham has always been the epicentre for UK transport as well as being widely regarded as the UK&rsquo;s second city. But why are so many investors flocking to the investment properties of Birmingham and suggesting it will be the next city to make property millionaires?</p>\r\n<p>Have a look at point 4 if you believe &nbsp;Birmingham is getting overpriced.</p>\r\n<p>We look at the 7 reasons Birmingham has become a main attraction:</p>\r\n<p><strong>1. The youngest city in Europe</strong></p>\r\n<p>Birmingham has the youngest population of any major city in Europe. A young population which stays in the city is a massive indicator of growth. Young people moving to the city and staying means more jobs, more demand for property, which in turn pushes up property prices and rent.</p>\r\n<p>Nearly 40% of Birmingham&rsquo;s population is under 25 which is an incredibly healthy city statistic.</p>\r\n<p><strong>2. Huge multinational business&rsquo;s have moved to Birmingham</strong></p>\r\n<p>Birmingham&rsquo;s growth and quality employees has seen some of the biggest companies in the world relocate to the city with HSBC and Deutsche Bank becoming the latest to call this city home. PwC has taken the whole commercial space in Chamberlain Square as their strategy to make a major investment in the city has come to the fore.</p>\r\n<p>Add these multinationals to the small and medium sized business&rsquo;s and the scope for long term population growth, of an employee type earning high wages has a positive impact on property prices. Quality accommodation has increasingly become demanded, while the knock on effect of the overall rental and sales market is continuing to grow.</p>\r\n<p><strong>3. Constant property price increases</strong></p>\r\n<p>With a growth of 25% In property values in Birmingham postcodes over the last 5 years the market is showing amazing growth.</p>\r\n<p>The old adage of &lsquo;the trend is your friend&rsquo; here is prevalent, with JLL reporting a further 18% growth expectation on average over the next 5 years, with certain postcodes exceeding that.</p>\r\n<p>Buying in now could see outstanding returns before the market has maximised its growth and starts to slow.</p>\r\n<h3>4. Average salary to average property price</h3>\r\n<p>With point 3 many of us look at these markets and are guilty of assuming the growth has finished. Property prices can&rsquo;t get any higher and we should be looking elsewhere, while equally not liking elsewhere as the market isn&rsquo;t mature enough for our appetite.</p>\r\n<p>While Birmingham has had resounding success, the early investors took the risks which have paid out, while now investors have a lot more information to go off, and as the points above show, a lot more growth to come.</p>\r\n<p>While growth is continuous there will be a natural point where the property slows down its growth as the property values catch up to the wages in the city. This is exactly the circumstances in London where average property is 13.5 times the average salary of &pound;35,000 causing a market slow down as wages catch up.</p>\r\n<p>Birmingham has an average salary of &pound;25,000 and growing quickly, and yet the average property is 6.44 times the average salary in all Birmingham postcodes, and 7.5 times that of the average salary in the core city centre.</p>\r\n<p>This leaves a significant amount of growth remaining before a slow down in property growth for the city.</p>\r\n<h3>5. HS2 Super fast train</h3>\r\n<p>With pre-construction work underway on the London to Birmingham leg the HS2 has come under scrutiny in the press and parliament due to the costs of building this first leg, and what affect that will have on phase 2 to Manchester via Crewe.</p>\r\n<p>While for the country the cost can be debated, for investors in Birmingham the two stations in Sheldon and Curzon create a once in a lifetime investment opportunity.</p>\r\n<p>The scale of the prize for the city and all those invested in it can never be down played with commuting time dropped under 40 minutes into London. Naturally this will allow the two cities to better share business&rsquo;s and staff, and have a significant effect on the Birmingham property prices closing the gap with London.</p>\r\n<p>While the future phases could get ruled out, having the HS2 from Birmingham to London will always benefit the city. It will either be the central Hub of the line, connecting London, Manchester and Leeds, or even with just phase one it will become a location which is as quick to access from London as the majority of tube stops.</p>\r\n<h3>6. Metro and commuting links</h3>\r\n<p>Historically Birmingham has not been a great provider of internal public transport links with the city coming under pressure for their emissions numbers.</p>\r\n<p>With the commonwealth games and the HS2 coming to the city, along with huge numbers of new tenants, the city has had to start significant improvements to this which have already seen huge improvements in the core city centre and will grow to the fringe areas of the city, linking the HS2 in Sheldon into the city with a new metro route.</p>\r\n<p>Historically residential properties which have had a metro line built connecting them to city centre infrastructure have seen growth of 12% &ndash; 25% when a the route is regular throughout the day.</p>\r\n<p>With Birmingham&rsquo;s huge investment into infrastructure it gives further options for investors priced out of core city centre to focus on great values on future public infrastructure.</p>\r\n<h3>7. Commonwealth Games</h3>\r\n<p>Finally, and excitingly for Birmingham, the commonwealth games coming to the city in 2022 will further put the location on the map for local and international investors.</p>\r\n<p>With large investment into the city residential property will likely see some real short-term growth from improved public amenities and overall investment both private and public.</p>\r\n<p>Conclusion</p>\r\n<p>To conclude Birmingham is booming and we have many years of various improvements to look forward to and capitalise on as investors.</p>\r\n<p>Looking for 2 bed sharing options in the city centre for young professionals, or traditional 1 bed investments seems to be the key strategy with the vast majority of savvy investors.</p>\r\n<p>With a 5 or 10 year investment plan the city could work wonders for your buy-to-let or portfolio.</p>', 'Recently described as the ‘jewell at the heart of the UK,’ known for being the most central location in Great Britain, Birmingham has always been the epicentre for UK transport as well as being widely regarded as the UK’s second city. But why are so many investors flocking to the investment properties of Birmingham and suggesting it will be the next city to make property millionaires?', '5a403Q.jpg', NULL, 'what-is-happening-to-investment-in-birmingham', 'What Is Happening To Investment In Birmingham?', 'Recently described as the ‘jewell at the heart of the UK,’ known for being the most central location in Great Britain, Birmingham has always been the epicentre for UK transport as well as being widely regarded as the UK’s second city. But why are so many investors flocking to the investment properties of Birmingham and suggesting it will be the next city to make property millionaires?', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 19:10:15', '2019-12-31 19:10:15');
INSERT INTO `blogs` (`id`, `title`, `content`, `synopsis`, `thumbnail`, `blog_type`, `url`, `meta_tags`, `meta_description`, `status`, `visibility`, `publish_time`, `featured`, `comment`, `view_count`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(15, '5 Reasons To Invest In Germany', '<p>When you think of Germany you may think of quality products, discipline, and productivity, of strong political leadership and a stable economy.</p>\r\n<p>More recently there has been a surge in international investment into Germany, partially due to the below 5 reasons:</p>\r\n<h3>1. Many of the cities have the best occupancy rates in the world.</h3>\r\n<p>In recent studies the likes of Berlin has only 1.2% vacancy rate at any one time. That means that 98.8% of all property has a tenant sat in it. As an investor this is an incredible number and one which makes you feel secure in the longevity of the property.<br />A real life example we saw regarding this statistic was our most recent development at Baron &amp; Cabot. During the process of our due diligence we naturally look at rental figures to ensure that they are realistic in comparison to the development we are looking at. This particular area of Berlin has a population of 250,000 and yet when we were attempting comparisons there was only 14 apartments available to rent!</p>\r\n<p>High occupancy rates suggest a few things. The first is that there is an under supply of property available. In this case it is critically undersupplied in Germany due to strict building regulations. Under supply in property means that there is competition for rent making rent push upwards regularly, competition on resale of property, pushing prices up and long term rentals as people stay in their property longer with a lack of alternative choices.</p>\r\n<p>High occupancy rates is exciting for investors with long term security and growth.</p>\r\n<h3>2. Low to no tax payable!</h3>\r\n<p>Tax is clearly the bane of our lives. As an investor myself and speaking to my accountant as to how I could pay less tax, his answer was &lsquo;earn less money!&rsquo; But there is another way, and that is German investment.</p>\r\n<p>Now, before we get too excited there are caveats to this. As the German government are continually striving to keep their property market profitable, they also want to ensure it is stable. To achieve this an investor must keep their investment for 10 years before they are liable for 100% tax break on your capital gains. At Baron &amp; Cabot we urge investors to look at Germany as a 10 year investment to really see the massive benefits.</p>\r\n<p>In the short term however there are benefits to German property from a tax perspective. The first is that everything can be offset against your tax, including your mortgage. This allows investors to hold more of their profits, and with investments in the capital of Germany having relatively low initial yields, your 10 year tax position plays into your favour.</p>\r\n<h3>3. 10-year fixed rate mortgages</h3>\r\n<p>Keeping with the theme of long-term stable investments clients who live in Europe and earn in Euro or live outside of Europe earning local currency can get a 10 year fixed rate mortgage.</p>\r\n<p>Even more exciting is that the mortgage is approved on off-plan properties up to 2 years before completion, meaning you can buy off plan safe in the knowledge your mortgage has been approved.</p>\r\n<p>Not only that but the mortgage company pays the developer in instalments after they have approved the developer and valued each of the properties. Effectively for an investor you have the security of the mortgage broker signing off a developer from a due diligence perspective.</p>\r\n<p>Paying as low as 30% deposit international investors can get a 10-year fixed rate mortgage at 2.9% or lower.</p>\r\n<p>The criteria for a mortgage is also an incredibly low bar, effectively you need to earn over &euro;13,000 per year (or equivalent currency) and not be politically exposed and a mortgage is simple.</p>\r\n<h3>4. Huge capital growth</h3>\r\n<p>While Germany overall has seen continuous property growth, there are cities, such as the capital which still has a long way to grow.</p>\r\n<p>Seeing 12%-15% annual property growth is not unreasonable, and many investors are investing in Berlin to achieve the same returns they did with their London investments 15-20 years ago.</p>\r\n<p>Berlin has been well documented as having the fastest growing property prices in the world and with wage and GDP growth this is expected to continue.</p>\r\n<p>While yields are around 4%-4.5%, rental growth matches the capital growth and have no sign of stopping over the next 10 years.</p>\r\n<p>With 20,000- 30,000 people moving to Berlin for example each year, and supply a fraction of this, demand will not stop property and rental price increases. With an average salary in Berlin being &euro;46,144 (according to payscale) property prices have a lot of growth before they slow.</p>\r\n<p>With housing in Berlin being approximately 42% cheaper than London, and wages in Berlin being comparatively higher it is clear that the market can absorb significant further growth before any slow down. This is expected to be the next 10 years.</p>\r\n<h3>5. Easy to do business</h3>\r\n<p>Finally, and possibly most importantly for access to the German market is the ease of investing there as a foreigner.</p>\r\n<p>As a starting point Baron &amp; Cabot manage the process for anyone unsure, however it is really simple yourself with all of the solicitors and management companies speaking English fluently.</p>\r\n<p>Equally there is very little in the way of red tape, and the mortgage company and management company hold your hand through the whole process.</p>\r\n<h3>Conclusion</h3>\r\n<p>Ultimately Berlin, and Germany as a whole is a superb investment for the right investor. If you are looking for the lower end of the risk spectrum, don&rsquo;t need to rely on rental income month to month, want capital growth and can wait 10 years to cash in, you are ideal for the investment.</p>\r\n<p>My colleagues in Baron &amp; Cabot who have purchased for themselves have done so to hold the money in the property for 10 years like a very high interest account, safe in the knowledge that if they need the money out before then they can sell and pay capital gains tax.</p>\r\n<p>For any further questions please feel free to email Mark at mark@baroncabot.com or call 0203 287 8282.</p>', 'When you think of Germany you may think of quality products, discipline, and productivity, of strong political leadership and a stable economy.', 'FsiAsu.jpg', NULL, '5-reasons-to-invest-in-germany', '5 Reasons To Invest In Germany', 'When you think of Germany you may think of quality products, discipline, and productivity, of strong political leadership and a stable economy.', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(16, 'What Are All The Costs Incurred On A Property: The Complete Guide', '<p>Property investment is simple really. Pick something which will grow in value, something that will rent well, and budget and more often than not you will make a good return. Get someone paying off your mortgage for you, make some capital growth, re-mortgage and go again.</p>\r\n<p>One thing that many would be investors miss are some of the additional cost expectations and what each one of them mean.&nbsp;</p>\r\n<p>This is a list of the most notable cost implications.</p>\r\n<h3>BEFORE YOU BUY</h3>\r\n<h3>1. Stamp Duty</h3>\r\n<p>It&rsquo;s generally the biggest outlay and paid on completion of a property. If you are a first-time buyer or this is your only property stamp duty is barely noticeable, if you are a buy-to-let investor expect 3% plus going straight into the pockets of our fair leaders!</p>\r\n<p>It&rsquo;s surprising how many people forget stamp duty when they have their budget planned. If you have &pound;40,000 for instance assume that you can get a &pound;135,000 property and knock that stamp duty off of your savings.</p>\r\n<h3>2. Legal Fee&rsquo;s</h3>\r\n<p>Again, a good solicitor will protect you and your investment to the best way possible within the powers of British law. But they are not cheap!</p>\r\n<p>Finding a solicitor, you trust is the starting point and then trying to persuade them that they shouldn&rsquo;t charge you too much is the next step!</p>\r\n<p>Expect &pound;700 to &pound;750 for conveyancing plus some additional costs. If you put aside &pound;1,200 you&rsquo;re probably not too far off.</p>\r\n<h3>3. Mortgage Fee&rsquo;s</h3>\r\n<p>Some basic broker costs should be expected if you are using one. A good broker can be hugely important, not only looking at high street backs but also private funds who may lend. If you are a foreign investor get a great broker and look after them &ndash; they can be a huge benefit to your profits.</p>\r\n<p>UK residence may expect &pound;300 plus for a broker.</p>\r\n<h3>AFTER PURCHASE</h3>\r\n<h3>4. Service Charge</h3>\r\n<p>Have a look at the article here for a full break down of service charges. Some clients confuse service charge with management fee or ground rent. The service charge is ultimately to pay for the services around the property.</p>\r\n<p>Maintaining the lifts, cleaning the internal and external and spaces, pruning the garden and checking the fire alarms are the types of things you would expect from a service charge. Assume &pound;900 per year for a 1 bed and &pound;1300 two bed. Buying a freehold? Put aside the same amount for normal servicing of the property.</p>\r\n<h3>5. Ground Rent</h3>\r\n<p>Ground rent is the payment for the land that the apartment sits on. Look at our article on ground rent and how you renew it here.</p>\r\n<p>Expect a running cost of around &pound;250 in your budget plan.</p>\r\n<h3>6. Management Fee&rsquo;s</h3>\r\n<p>Not cheap at all but for most it makes life a lot easier getting a really good management company.</p>\r\n<p>On average we see the top management companies looking for 8% of the gross rent, sometimes less if there are multiple units. There are management companies out there that do more or less, and costs more or less.</p>\r\n<p>Look out for whether it includes VAT or has additional VAT, can catch you out and cause frustration with the company.</p>\r\n<p>The role of a good management company is to find the right tenant, check they can afford the property and have the property rented out as stress free for the owner as possible. A good management company can be the salt of the earth, you&rsquo;ll only ever notice the management company when you have a bad one!</p>\r\n<h3>7. Mortgage costs</h3>\r\n<p>The rental income after ground rent and service charge is what is considered in the industry as &lsquo;net rental income&rsquo;.</p>\r\n<p>For our net position we should look at what rental income we have left after service charge, ground rent, management fees and mortgage. If we are still getting some income that we can tax in the first year we are doing great.</p>\r\n<p>Remember over time rent will increase much more than any of these costs and improve your profit year on year.</p>\r\n<p>With a mortgage most investors will look at interest only to keep costs down and much more control over how your money is spent however your broker can help you with this decision.</p>\r\n<h3>8. TAX</h3>\r\n<p>We can&rsquo;t talk investments without talking Tax. I once asked my accountant the best way to pay less tax, he answered straight faced with &ldquo;earn less money!&rdquo; The truth is that if you are paying a lot of tax you are making a lot of money. Regardless of where we invest our money there is a tax implication to it all.</p>\r\n<p>There&rsquo;s no need for this to be complex, simply put you will need to pay taxes on your profits like with any business.</p>\r\n<p>Great tax advise can help you out significantly when you grow your portfolio. Equally having your properties in a company can help a lot.</p>\r\n<p>Don&rsquo;t forget your taxes when we look at your final net position.</p>\r\n<h3>ALL IN ALL</h3>\r\n<p>All in, there are a lot of costs to consider before and during purchase. Stamp duty can be painful but with property doubling in price every 10 years or so there is no reason why you shouldn&rsquo;t still be making some of the best investments you ever have in property.</p>\r\n<p>Look at medium to long term returns and you will tend to protect yourself a lot better than needing very fast returns. Take as much advise as you can, but do not confuse yourself overly with what is a really simple investment type.</p>\r\n<p>Speak to an advisor at Baron &amp; Cabot and get an idea of what sort of investment you would need to make and the returns you should get. If a property doubles every 10 years, and you only invest 25% in each one, your investment doubles every 2.5 years, this in an investment type that you are familiar with.&nbsp;</p>\r\n<p>The starting point before any property investment should always be planning what you can afford.</p>', 'Property investment is simple really. Pick something which will grow in value, something that will rent well, and budget and more often than not you will make a good return.', 'wWuvuL.jpg', NULL, 'what-are-all-the-costs-incurred-on-a-property-the-complete-guide', 'What Are All The Costs Incurred On A Property: The Complete Guide', 'Property investment is simple really. Pick something which will grow in value, something that will rent well, and budget and more often than not you will make a good return.', 31, NULL, NULL, NULL, NULL, 1, 1, 1, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(17, 'How Much Should I Pay On Exchange?', '<p>Off plan developers may ask for different amounts on exchange, how much should you pay and what protection do you have?&nbsp;</p>\r\n<p>You may have bought off plan before, it may be your first time, but no matter how many developments you look at they all seems to have different arbitrary numbers on exchange and completion. With some projects paying 10% on exchange of contracts, and other off plan developments asking for over 75% its worth looking at how these numbers are devised, and whether you should be accepting the numbers on offer.</p>\r\n<h3>How are the numbers devised?</h3>\r\n<p>While this article will not be able to give exact reasons for every development there are some basics which go into the amount a developer requests on exchange. Generally the rule of thumb is if you are being asked to pay more than 70% you are effectively acting as a lender for a developer (with all the risks lending entails).</p>\r\n<p>Note that the number we should really be looking at is how much is paid before completion, not just how much on exchange. Even if you are asked to pay in instalments before completion, the likelihood is that you are funding the development.</p>\r\n<p>These numbers may be 60% / 50% or 70% and are often based on how much the developer is able to borrow from the bank themselves. Some bank may require the developer to have 50% of the cash in and they will lend the remainder of the money.</p>\r\n<p>Alternatively if the developer can persuade you to part with the lions share of the money upfront, they can reduce the costs of interest paid on borrowing.</p>\r\n<h3>So should I not invest in high payment plans?</h3>\r\n<p>Fundamentally any payment structure is fine so long as you understand (and are happy with) the inherent risks which come with lending someone money. If you know the developer, know their books, they have a strong track record this may not be an issue, this is exactly what a bond does.</p>\r\n<p>The primary problem which comes with heavy payment plans is that the nature of a developer who needs clients money because a financial institution wont lend to them, are often the developers who have the highest risks, are the least experienced and unable to back the loan with assets. This puts you the property investor in a position where you are expected to know more than the bank.</p>\r\n<h3>Developer is promising interest on deposited funds.</h3>\r\n<p>Again interest on deposited funds should always be questioned. Who is paying the interest? Who us underwriting this interest payment and will they actually pay it?</p>\r\n<p>While some developers will, others will not and you have very little legal recourse should they decide not to pay this.</p>\r\n<p>Other issues with high payment plans</p>\r\n<p>The other issue with large payment plans (40% plus before completion), is that if the developer needs client money to build &ndash; which is normally the case with this model, each stage of the development is held back until units are sold.</p>\r\n<p>A developer may need to sell 30% of the properties before they can even start the build and then more and more for each phase. If the sales take time (which they usually will with high payment plans) then you may have invested early and wait years for completion. The vast majority of off plan developments which have significant delays have high payment models.</p>\r\n<h3>So why do we pay any money on exchange?</h3>\r\n<p>To be able to build a project there will in most cases be off plan sales, then a show flat is built and in the last 6 months of build the developer will increase prices and offer to the owner occupier market.</p>\r\n<p>Off plan sales benefit both the developer and the investor. The developer sells 80% of their properties early on giving them confidence that they wont have to have a long wait to sell units on completion, they can pay back any lending on the build and focus on the next project. For the investors they can get their unit 10%-15% under what it will be worth on completion by investing early.</p>\r\n<p>With this &lsquo;trade&rsquo; between developer, the broker they choose to sell their project, and investor there has to be a commitment which satisfies all that the investor is serious and wont decide to not complete on the development when the build is finished.</p>\r\n<p>Many investors will buy 10+ units in a development and if their commitment was 0% or even 5% on a cheaper development, and they decided they were not going to complete on purchase at the end of the build it can cause a huge amount of problems for the brokers and developers.</p>\r\n<h3>So what should you be paying before exchange?</h3>\r\n<p>There is, as you would expect, no hard and fast rule here, it is primarily down to the negotiation and advice the master broker has made with developer before the apartments or houses were formerly launched and marketed.</p>\r\n<p>The most important element for an investor is understanding that the development is already funded. The broker should be able to very quickly give you this information &ndash; if they can&rsquo;t is likely their company has not done sufficient due diligence (find someone else quick). If you are happy that the developer doesn&rsquo;t &lsquo;need&rsquo; your money it makes the decision a lot easier.</p>\r\n<p>Next understand how much of your money is insured (normally 10%) and how far the development is into the build. This is important and should be advised by your broker, as a if the development is having the kitchens fitted or on final fit out, your asset is worth much more than if it is a car park with a padlock.</p>\r\n<p>Naturally the best projects will sell often even before build starts so we need some hard and fast common ground.</p>\r\n<p>Normally it is fair to expect under 25% and ideally 10% &ndash; 20%. This is usually a position which leaves the developer, broker and investor comfortable, shows development does not need client funding (the land may be valued at over 20% itself) and gives you as an investor an easy way to get their money back should the worst case scenario come to play.</p>\r\n<p>*Note that your 10% insurance may not be needed to pay back to you. In some instances &ndash; say if the developer was small and went bust, 10% could be used to replace the developer and complete the project.</p>\r\n<h3>Can I negotiate exchange numbers?</h3>\r\n<p>Clients must know that everything is negotiable, but the best projects have little to no movement. Logically a broker will not be able to negotiate too much on a development which is selling quickly, however it is always worth the question if you are uncomfortable with the exchange amount being requested.</p>', 'Off plan developers may ask for different amounts on exchange, how much should you pay and what protection do you have? ', 'cKTze4.jpg', NULL, 'how-much-should-i-pay-on-exchange', 'How Much Should I Pay On Exchange?', 'Off plan developers may ask for different amounts on exchange, how much should you pay and what protection do you have? ', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(18, 'What Is A Section 106 Agreement: Why Should You Care?', '<p>So, you have found the right property, you&rsquo;ve checked the developers track record and the price of the property, you&rsquo;ve checked that there is planning in place for the development and that the developer is funding the whole project. Rental income looks good, not too much to be risky, not too small that you&rsquo;re not making any money, capital growth in the area looks like it should be superb over the next 5 years.&nbsp;</p>\r\n<p>Congratulations! You are nearly there but there is one thing you should check with your broker before you get that reservation paid and take on the project. The Section 106 agreement.</p>\r\n<h3>But what is a section 106?</h3>\r\n<p>A section 106 agreement at its most basic level is an agreement between the local council where a planning application has been made and the developer. It is effectively a caveat to the planning application where a council may request that affordable housing is included in the development or local infrastructure is completed due to the developments impact on the local area.</p>\r\n<p>In some circumstances the section 106 agreement can be in the form of a fee paid to the council where by the local council can use this money how they see fit in the local community.</p>\r\n<h3>Why is this important?</h3>\r\n<p>There are a few reasons as an investor you want to be comfortable with the section 106 agreement being in place and agreed.</p>\r\n<p>Primarily, even if a developer shows you a planning agreement this may have that it has been granted based on a section 106. Knowing what this is can help understanding whether affordable housing or council tenants will be in the development.</p>\r\n<p>In the vast majority of cases the planning will be granted with affordable housing or council tenants included, this section 106, like the planning will be contested by the developer, after which they will agree a fee rather than having the council or affordable housing within the development.</p>\r\n<p>Delays while contesting.</p>\r\n<p>While contesting the section 106 is relatively simple process it can take time. Although in theory the planning permission has been granted, until the section 106 is correct most developers won&rsquo;t start on site.</p>\r\n<p>As an investor we don&rsquo;t like any uncertainty, and this is especially important when talking about planning permission.</p>\r\n<p>At Baron &amp; Cabot we will not look at developments until the section 106 has been finalised. We do this not because we believe that an investors money will be at risk, but because it makes the expected completion date impossible to gauge (without a start date how can we know completion).</p>\r\n<h3>Conclusion</h3>\r\n<p>While a section 106 agreement may seem insignificant at first it is becoming increasingly more important in understanding the investment and we would suggest you check with your broker or developer that this is agreed. Get a copy of it, even if you are unsure exactly what you are looking at, if the developer/ broker refuses it, it may be questionable how much research they have conducted.</p>\r\n<p>When working with Baron &amp; Cabot we will ensure this is in place and a copy will be accessible for you at all times.</p>\r\n<p>For more questions on Section 106 agreements, or an investment in general, click our live chat or call us on 0203 287 8282.</p>', 'So, you have found the right property, you’ve checked the developers track record and the price of the property, you’ve checked that there is planning in place for the development and that the developer is funding the whole project.', 'HQMZqN.jpg', NULL, 'what-is-a-section-106-agreement-why-should-you-care', 'What Is A Section 106 Agreement: Why Should You Care?', 'So, you have found the right property, you’ve checked the developers track record and the price of the property, you’ve checked that there is planning in place for the development and that the developer is funding the whole project.', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-12-31 19:10:15', '2019-12-31 19:10:15'),
(19, 'How much you should expect to pay for a service charge.', '<p>What is a service charge, and how much should it be (not always as low as possible).&nbsp;</p>\r\n<p>Before we dive in to an understanding of how a service charge is estimated by a developer we should take a step back and really understand what a service charge is and its purpose.</p>\r\n<p><em><strong>For those here looking for a short answer a &lsquo;normal&rsquo; service charge tends to run at about &pound;2 per square foot per year, more with more services, less for a basic property.</strong></em></p>\r\n<h3>What is a service charge</h3>\r\n<p>Simply put when done correctly the service charge covers all the costs of maintaining the building and everything in it/ on it. In your own home, if you live in a suburban house for instance, when the roof needs work you pay the &pound;10,000 or so in 1 payment and hope that there is no more work to be done. You&rsquo;ll paint the doors and window, maybe pay a gardener once a week and power wash the drive from time to time to keep up appearances (and value).</p>\r\n<p>Within a shared building ideally there is a fund put together in advance which keeps everything running smoothly, from the common area&rsquo;s lifts and gymnasiums if you have them, the value of your apartment is kept high, in part by the surrounding area&rsquo;s, so you want them to be clean and high quality.</p>\r\n<p>When judging a service charge on a property there is a huge amount of information to break down, however there are a number of &lsquo;rules of thumb&rsquo; we can consider through the article to make your life a lot easier and know you are not being fleeced.</p>\r\n<h3>Not paying enough service charge</h3>\r\n<p>While almost all investors raise the service charge question, and more often than not, naturally want the service charge to be as low as possible, I am often as nervous about a service charge which is too low as I am with one which I consider too high.</p>\r\n<p>Much of this, as with anything comes with experience. In my early days as a graduate surveyor I had the benefit of managing a property portfolio in amongst the other work I was doing valuing properties, and completing my studies for RICS. One particular development stood out to me with regards to poor service charge management.</p>\r\n<p>The company I was working for had recently taken on a development which had significant issues. It was a 1970&rsquo;s building in Lytham St Anne&rsquo;s and had a number of ageing tenants as well as some much younger tenants.</p>\r\n<p>The property itself being see front had started to have significant erosion issues with the windows, primarily due to the salt water. The problem here came from the fact that the service charge had been so low for so long there had not been enough saved up to do the work which would cost &pound;80,000 or so, and more importantly the frontage should not have ever got as bad as it was if it had been properly maintained.</p>\r\n<p>Issue&rsquo;s here begin to arise in that we had to write to all of the tenants to raise the money for the work before the issue became even worse. As you would expect, those tenants on the opposite side of the building didn&rsquo;t want to add money to the service budget for property problems which did not affect them, and the tenants who felt that they would die before they saw the benefit of the investment were equally as hesitant, others simply didn&rsquo;t have the money available.</p>\r\n<p>Another property I owned near Manchester had a similar issue with the roof. Most of the tenants were older and as the management company had not saved up enough money, the roof which was a flat roof had problems which were simply being patched up, rather than adding a full roof over the block.</p>\r\n<p>While modern management companies have improved this significantly, as with any property there will be issues arising which need money spent on them. The benefit of a new property is with a 10 year build warranty which you should expect on any recently completed property along with a good service charge.</p>\r\n<p>So, what is too low for a service charge cost? As you would expect there is no real answer to this question and will depend on building to building. As a starting point in Baron &amp; Cabot we would expect a normal sized development with a lift, maybe a gym and some parking to cost around &pound;2 per square foot service charge. We have properties which are much smaller with little common area which have service charges of &pound;1 per square foot, and others in luxury London developments over &pound;5 per square foot.</p>\r\n<p>Have a look at the development and start from &pound;2 working your way down. No lifts, no gym, no real shared common area&rsquo;s knock it down a little. Swimming pool? Pump the service charge up a lot etc.</p>\r\n<h3>What is too much to pay on a service charge?</h3>\r\n<p>As you would expect this question is a complex one to answer. While we would generally try to avoid swimming pools and expensive amenities in a development without a genuine value, these are the types of services which you can expect to cost a lot more.</p>\r\n<p>Anyone who has a swimming pool will understand the cost of running them day to day, equally having additional cleaners and maintenance people to upkeep a gym can add significant service charge costs.</p>\r\n<p>While these services can improve rent&rsquo;s you have to compare whether it gives you a better return having these services.</p>\r\n<p>One thing which should be noted in favour of mixed spaces and a slightly higher service charge is that there are significant studies showing that tenants will stay considerably longer in a property if they meet or know another person who lives there. Meeting 3 people who live in the same complex can see rental terms increase dramatically benefiting the landlord and tenant alike.</p>\r\n<p>Many developers have been keen to create these communities as it allows long term growth of the properties, tenant satisfaction and low turn over of tenancies. The landlords being happy are more likely to invest in a similar development again.</p>\r\n<h3>Service charge sinking fund</h3>\r\n<p>When estimating how much you should pay for service charges you should consider whether there is a sinking fund created for major works.</p>\r\n<p>A sinking fund is simply a fund saved for a rainy day, should some major repairs come up which were not expected. Sometimes a sinking fund may be used for expected works as well, annual property painting for instance may be saved up for monthly and paid annually.</p>\r\n<p>If there is a sinking fund in place your service charge may be marginally higher each month however you can be comfortable that the big things are being taken care of.</p>\r\n<p>So is a service charge/ leasehold property worse than a freehold.</p>\r\n<p>Many newer investors will often dislike having a service charge explaining that a freehold doesn&rsquo;t have one. While technically correct, from an investment perspective the costs associated with a service charge (should) be lower as you are sharing the burden of the big things with several other property owners.</p>\r\n<p>The additional benefit for investors looking only for passive investments, using their property investment as a vehicle to generate higher income, they do not want to be taking a running input into maintenance of the property, preferring others to do so, with no major surprises on significant costs.</p>\r\n<p>When valuing how much you should pay for your service charge, equally balance out how much you value your own time, and how much of a hand on approach you want to take with a property.</p>\r\n<p>Start from a position of &pound;2 per square foot and move up or down depending on services. Remember service charge is valued annually. Just times the square foot of the property by the price per square foot and that is what you will pay per year.</p>\r\n<p>Get more insights into service charges by contacting us via the live chat or via phone 0203 287 8282.</p>', 'What is a service charge, and how much should it be (not always as low as possible). Before we dive in to an understanding of how a service charge is estimated by a developer we should take a step back and really understand what a service charge is and its purpose.', 'CUcKos.jpg', NULL, 'how-much-you-should-expect-to-pay-for-a-service-charge', 'How much you should expect to pay for a service charge.', 'What is a service charge, and how much should it be (not always as low as possible). Before we dive in to an understanding of how a service charge is estimated by a developer we should take a step back and really understand what a service charge is and its purpose.', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2020-01-01 19:52:02', '2020-01-22 19:52:02'),
(20, 'How Much Should Your Ground Rent Be?', '<p>We ask how what is a ground rent and what should it cost.&nbsp;</p>\r\n<p>When addressing a property speaking to your broker about the lease early on in the fact find is an aspect which is incredibly important and often overlooked aspect when we speak to our clients. Understanding how much the ground rent is, and how much it increases will have a direct impact on your profit margins in years to come.</p>\r\n<p>Ground rent should not be difficult, however some developments in the UK make this part of the lease intentionally complex to generate further developer profits at the expense of the investor. Thankfully all Baron &amp; Cabot properties have been through a strict ground rent due diligence process to protect our investors.</p>\r\n<p>A ground rent is simply a rental on the land which the property sits on. When buying as there are multiple units sat on top of the same ground, a ground rent is paid to the &lsquo;freeholder&rsquo;. This can last from 99 years up to 999 years and can be renewed under the Leasehold Reform, Housing and Urban Development Act 1993.</p>\r\n<p>When considering a property you should be looking at two things lease length, ground rent cost, and how the ground rent increases each year.</p>\r\n<p>Lease length</p>\r\n<p>Most properties in the UK will have a minimum of 125 years, however it is sensible to look for 200 years plus. When you get to 90 years remaining you can add another 90 years for &pound;5,000 (2019 rates) thus every 90 years difference in a property lease length when comparing could be seen as a &pound;5,000 difference in what should be paid for a property.</p>\r\n<p>Ideally Baron &amp; Cabot look for 250 years, however 200 years plus would not cause any real problems in the decision process or the ability to get full open market value for the property when you sell or remortgage.</p>\r\n<p>Ground Rent Cost</p>\r\n<p>Modern ground rents are 0.1% of the property value per year (&pound;150,000 property would be &pound;150 per annum) however there are still a number of properties which have &pound;250 ground rent as standard.</p>\r\n<p>&pound;250 per year is acceptable for the vast majority of mortgage lenders, however if a ground rent goes above the &pound;250 mark not only is the developer looking quite greedy, the mortgage companies prepared to lend on the property are significantly reduced.</p>\r\n<p>Ground Rent Reviews</p>\r\n<p>So you are happy with the ground rent as it stands but thats not the end of it. Knowing how the ground rent increases can make or break the value of a property long term. Ask your broker for the terms of the ground rent increases and a copy of this section of the lease.</p>\r\n<p>A &lsquo;normal&rsquo; review would be ground rent tracking RPI with increases every 10 years. What this means is that the ground rent only increases with inflation and is increased every 10 years. Effectively this means that it will never &lsquo;feel&rsquo; more expensive than it is now. Another important point with tracking inflation is that it is unlikely that the freehold will ever be sold as it is only ever worth the same amount as someones money in their pocket.</p>\r\n<p>In the market we occasionally see ground rent doubling after 10 years or similar lease caveats. The suggestion would be to walk away from these sorts of agreements as it can have a knock on affect to the re-sale value of your investment.</p>\r\n<p>Conclusion</p>\r\n<p>Ground rents should be simple and not something to worry about so long as you have a sensible one. Always ask the question of your advisor and if you are looking at a development that Baron &amp; Cabot don&rsquo;t offer check this part of the lease (a problem lease is a good reason we may not carry the development).</p>\r\n<p>Be happy with your lease by asking the basics, and if in doubt, always speak to us on any projects you are looking at.</p>', 'We ask how what is a ground rent and what should it cost. When addressing a property speaking to your broker about the lease early on in the fact find is an aspect which is incredibly important and often overlooked aspect when we speak to our clients.', 'msFSnz.jpg', NULL, 'how-much-should-your-ground-rent-be', 'How Much Should Your Ground Rent Be?', 'We ask how what is a ground rent and what should it cost. When addressing a property speaking to your broker about the lease early on in the fact find is an aspect which is incredibly important and often overlooked aspect when we speak to our clients.', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2020-01-01 19:52:02', '2020-01-22 19:52:02'),
(21, 'What To Look For In A Lease (Leasehold)', '<p>Understand the key points you should be asking to see in a lease.</p>\r\n<p>When speaking to your broker about a property, understanding the lease terms should be equal to understanding the yield and price point of the property. Thankfully all Baron &amp; Cabot investment properties have been through the due diligence. Below is what we look for.</p>\r\n<h3>Lease Length</h3>\r\n<p>The length of the lease is the first thing that we would understand. While there is no defined term for a lease general consensus points at over 125 years with most comfort in the 200 years plus.</p>\r\n<p>While you have a right to extend your lease by 90 years it is not something you want to be thinking about when you buy a new property. Once you run below 70 years mortgages will start to get expensive and some providers would rather not lend.</p>\r\n<p>Extending a lease with 95 years remaining will cost &pound;5,000 plus any legal help you use to make the extension. This will add an additional 90 years to the lease, allowing some rough guidance on how you can down (or up) value a property based on lease length.</p>\r\n<h3>Lease Cost</h3>\r\n<p>Once we have looked at lease length and are happy with this we will look at the cost of the ground rent. Again there are no set figures for ground rent but some basics which you can work to. In general terms we want the new 0.1% ground rent cost if possible. This would mean that a &pound;100,000 property would pay &pound;100 per year, &pound;200,000 property will pay &pound;200 per year etc.</p>\r\n<p>While most developers are slow to do the 0.1% ground rent we are starting to see more and more new projects with this, and we naturally negotiate this in as and when possible.</p>\r\n<p>One benefit of this as a ground rent price is that all mortgage providers prefer this, with Countrywide at the time of writing refusing to mortgage properties without the 0.1% ground rent. Although this would not be a deal breaker in a lease, suggested sub &pound;250 ground rent is ideal with the real crux being how the ground rent is increased.</p>\r\n<h3>Ground Rent Increases/ Reviews</h3>\r\n<p>While there are few parts of a lease which are complete deal breakers (lease length or price in isolation may just change the value we have on the property) a poor ground rent increase would certainly mean walking away from a project entirely.</p>\r\n<p>In each lease there will either be a static ground rent (it never increases) or an increasing ground rent. In itself an increasing ground rent is not an issue at all so long as it is not increasing faster than inflation.</p>\r\n<p>Although unusual some less scrupulous brokers and developers will have ground rents increasing faster than inflation. This may be doubling after 10 years, or increasing at certain rates which add value into the ownership of the freehold. The worst case is not having any restrictions at how much it can be increased.</p>\r\n<p>While &pound;250 per year doubling every 10 years may not seem a lot in the short term, in the long term this may be significantly above inflation resulting in what feels like an extremely expensive ground rent in the future.</p>\r\n<h3>Service Charge</h3>\r\n<p>Another inherent cost of a leasehold property is a service charge. A service charge should if calculated correctly keep the value of the property high and common area&rsquo;s looking how the tenant would expect them.</p>\r\n<p>A landlord will always have a cost of repair and upkeep on a property whether its freehold or leasehold, with the benefit of a service charge being that an investor can be fully &lsquo;hands off&rsquo; with their investment rather than arranging house painting or gutter checks etc.</p>\r\n<p>While a service charge should be seen as a benefit to some investors knowing roughly how much it should be is another question.</p>\r\n<p>As a very rough rule of thumb, for properties outside of London we would expect a service charge to be around &pound;2 per square foot per year. So if you have a 450 square foot 1 bed in Liverpool we would expect to be around &pound;900 per year.</p>\r\n<p>This rule is a benchmark however and knowing the quality of a property, what sort of amenities there are will also change that number. For example a small brick building with no lifts may be significantly cheaper, while a large development with common area&rsquo;s, high floors for window cleaning, gymnasiums, swimming pools and concierge are likely to cost more.</p>\r\n<p>With the service charge it is important to work with your advisor to forecast what rental increases should be expected from a development with these amenities and whether an increase (or decrease) in service charge is justified in the rent.</p>\r\n<h3>Overall lease</h3>\r\n<p>A lease with a few exceptions can rarely be seen as good or bad based on individual points but is checked to ensure a few key points stand up, and the remaining ones make sense in the over all picture of the type of property, type of rent and purchase price of each individual unit.</p>\r\n<p>The lease review is an early part of Baron &amp; Cabot&rsquo;s due diligence and we would always advise any investor to make it a point to check this when comparing what appear to be like for like properties. Whether completed or off plan the lease of a property can be substantial in the amount of profit you will see both short and long term.</p>', 'Understand the key points you should be asking to see in a lease.When speaking to your broker about a property, understanding the lease terms should be equal to understanding the yield and price point of the property.', 'leHxBa.jpg', NULL, 'what-to-look-for-in-a-lease-leasehold', 'What To Look For In A Lease Leasehold', 'Understand the key points you should be asking to see in a lease.When speaking to your broker about a property, understanding the lease terms should be equal to understanding the yield and price point of the property.', 31, NULL, NULL, NULL, NULL, 1, 1, NULL, '2020-01-22 19:52:02', '2020-01-22 19:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `blog_id`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 1, 1, '2022-07-01 08:38:12', '2022-07-01 08:38:12'),
(4, 2, 1, '2022-07-01 08:53:54', '2022-07-01 08:53:54'),
(5, 2, 2, '2022-07-01 08:53:54', '2022-07-01 08:53:54'),
(6, 3, 2, '2022-07-01 09:00:08', '2022-07-01 09:00:08'),
(8, 4, 2, '2022-07-20 19:11:01', '2022-07-20 19:11:01'),
(9, 5, 2, '2022-07-20 19:17:38', '2022-07-20 19:17:38'),
(10, 6, 2, '2022-07-20 19:19:42', '2022-07-20 19:19:42'),
(12, 7, 2, '2022-07-20 19:23:40', '2022-07-20 19:23:40'),
(13, 8, 2, '2022-07-20 19:28:33', '2022-07-20 19:28:33'),
(15, 9, 2, '2022-07-20 19:32:28', '2022-07-20 19:32:28'),
(16, 10, 2, '2022-07-22 18:39:40', '2022-07-22 18:39:40'),
(17, 11, 2, '2022-07-22 18:44:00', '2022-07-22 18:44:00'),
(18, 12, 2, '2022-07-22 18:48:29', '2022-07-22 18:48:29'),
(19, 13, 2, '2022-07-22 18:51:01', '2022-07-22 18:51:01'),
(20, 14, 2, '2022-07-22 18:55:48', '2022-07-22 18:55:48'),
(21, 15, 2, '2022-07-22 18:59:16', '2022-07-22 18:59:16'),
(23, 17, 2, '2022-07-22 19:05:26', '2022-07-22 19:05:26'),
(24, 16, 2, '2022-07-22 19:05:44', '2022-07-22 19:05:44'),
(25, 18, 2, '2022-07-22 19:08:42', '2022-07-22 19:08:42'),
(26, 19, 2, '2022-07-22 19:46:48', '2022-07-22 19:46:48'),
(27, 20, 2, '2022-07-22 19:49:08', '2022-07-22 19:49:08'),
(28, 21, 2, '2022-07-22 19:52:02', '2022-07-22 19:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `feature` varchar(50) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashflow`
--

CREATE TABLE `cashflow` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `unitID` int(11) DEFAULT NULL,
  `client_reservation_fee` varchar(20) NOT NULL,
  `exchange_deposit` varchar(100) DEFAULT NULL,
  `exchange_deposit_percentage` varchar(10) DEFAULT NULL,
  `legal_fees` varchar(20) DEFAULT NULL,
  `uk_non` varchar(20) DEFAULT NULL,
  `mortgage_lending_value` varchar(20) DEFAULT NULL,
  `land_registry_fees` varchar(20) DEFAULT NULL,
  `mortgage_broker_fee` varchar(20) DEFAULT NULL,
  `stamp_duty` varchar(20) DEFAULT NULL,
  `valuation_fee` varchar(20) DEFAULT NULL,
  `mortgage_type` varchar(100) DEFAULT NULL,
  `mortgage_amount` varchar(100) DEFAULT NULL,
  `mortgage_costs` varchar(100) DEFAULT NULL,
  `payment_on_reservation_and_exchange` varchar(20) DEFAULT NULL,
  `payment_on_completion` varchar(20) DEFAULT NULL,
  `final_capital_payment` varchar(20) DEFAULT NULL,
  `final_capital_payment_percentage` varchar(20) DEFAULT NULL,
  `equity_required` varchar(20) DEFAULT NULL,
  `estimated_gross_rental_income` varchar(20) DEFAULT NULL,
  `gross_yield` varchar(20) DEFAULT NULL,
  `get_ground` varchar(20) DEFAULT NULL,
  `estimated_service_charge` varchar(20) DEFAULT NULL,
  `estimated_service_charge_rate` varchar(20) DEFAULT NULL,
  `management_fee_rate` varchar(20) DEFAULT NULL,
  `management_fee` varchar(20) DEFAULT NULL,
  `ground_rent` varchar(20) DEFAULT NULL,
  `monthly_expenses` varchar(20) DEFAULT NULL,
  `monthly_income` varchar(20) DEFAULT NULL,
  `net_yield` varchar(20) DEFAULT NULL,
  `mortgage_repayment` varchar(100) DEFAULT NULL,
  `land_registry_fee` varchar(100) DEFAULT NULL,
  `year_1` varchar(20) DEFAULT NULL,
  `year_2` varchar(20) DEFAULT NULL,
  `year_3` varchar(20) DEFAULT NULL,
  `year_4` varchar(20) DEFAULT NULL,
  `year_5` varchar(20) DEFAULT NULL,
  `year_6` varchar(20) DEFAULT NULL,
  `year_7` varchar(20) DEFAULT NULL,
  `year_8` varchar(20) DEFAULT NULL,
  `year_9` varchar(20) DEFAULT NULL,
  `year_10` varchar(20) DEFAULT NULL,
  `annual_1` varchar(20) DEFAULT NULL,
  `annual_2` varchar(20) DEFAULT NULL,
  `annual_3` varchar(20) DEFAULT NULL,
  `annual_4` varchar(20) DEFAULT NULL,
  `annual_5` varchar(20) DEFAULT NULL,
  `annual_6` varchar(20) DEFAULT NULL,
  `annual_7` varchar(20) DEFAULT NULL,
  `annual_8` varchar(20) DEFAULT NULL,
  `annual_9` varchar(20) DEFAULT NULL,
  `annual_10` varchar(20) DEFAULT NULL,
  `rent_escalation_1` varchar(20) DEFAULT NULL,
  `rent_escalation_2` varchar(20) DEFAULT NULL,
  `rent_escalation_3` varchar(20) DEFAULT NULL,
  `rent_escalation_4` varchar(20) DEFAULT NULL,
  `rent_escalation_5` varchar(20) DEFAULT NULL,
  `rent_escalation_6` varchar(20) DEFAULT NULL,
  `rent_escalation_7` varchar(20) DEFAULT NULL,
  `rent_escalation_8` varchar(20) DEFAULT NULL,
  `rent_escalation_9` varchar(20) DEFAULT NULL,
  `rent_escalation_10` varchar(20) DEFAULT NULL,
  `rental_income_1` varchar(20) DEFAULT NULL,
  `rental_income_2` varchar(20) DEFAULT NULL,
  `rental_income_3` varchar(20) DEFAULT NULL,
  `rental_income_4` varchar(20) DEFAULT NULL,
  `rental_income_5` varchar(20) DEFAULT NULL,
  `rental_income_6` varchar(20) DEFAULT NULL,
  `rental_income_7` varchar(20) DEFAULT NULL,
  `rental_income_8` varchar(20) DEFAULT NULL,
  `rental_income_9` varchar(20) DEFAULT NULL,
  `rental_income_10` varchar(20) DEFAULT NULL,
  `listing_fee` varchar(100) DEFAULT NULL,
  `mph_fee` varchar(20) DEFAULT NULL,
  `total_equity_required` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashflow`
--

INSERT INTO `cashflow` (`id`, `property_id`, `unitID`, `client_reservation_fee`, `exchange_deposit`, `exchange_deposit_percentage`, `legal_fees`, `uk_non`, `mortgage_lending_value`, `land_registry_fees`, `mortgage_broker_fee`, `stamp_duty`, `valuation_fee`, `mortgage_type`, `mortgage_amount`, `mortgage_costs`, `payment_on_reservation_and_exchange`, `payment_on_completion`, `final_capital_payment`, `final_capital_payment_percentage`, `equity_required`, `estimated_gross_rental_income`, `gross_yield`, `get_ground`, `estimated_service_charge`, `estimated_service_charge_rate`, `management_fee_rate`, `management_fee`, `ground_rent`, `monthly_expenses`, `monthly_income`, `net_yield`, `mortgage_repayment`, `land_registry_fee`, `year_1`, `year_2`, `year_3`, `year_4`, `year_5`, `year_6`, `year_7`, `year_8`, `year_9`, `year_10`, `annual_1`, `annual_2`, `annual_3`, `annual_4`, `annual_5`, `annual_6`, `annual_7`, `annual_8`, `annual_9`, `annual_10`, `rent_escalation_1`, `rent_escalation_2`, `rent_escalation_3`, `rent_escalation_4`, `rent_escalation_5`, `rent_escalation_6`, `rent_escalation_7`, `rent_escalation_8`, `rent_escalation_9`, `rent_escalation_10`, `rental_income_1`, `rental_income_2`, `rental_income_3`, `rental_income_4`, `rental_income_5`, `rental_income_6`, `rental_income_7`, `rental_income_8`, `rental_income_9`, `rental_income_10`, `listing_fee`, `mph_fee`, `total_equity_required`, `created_at`, `updated_at`) VALUES
(1, 19, 100, '5000', '17950', '10', '1450', '499', '70', '270', '1250', '13250', '372', 'Interest Only', '160650', '2409.75', '24400', '66451.75', '45900', '20', '90851.75', '2208', '11.545098039216', '0', '92.916666666667', '2.5', '10', '220.8', '19.125', '1140.9696666667', '1067.0303333333', '5.5792435729847', '492', NULL, '234283.8', '243655.152', '252183.08232', '259748.5747896', '266242.28915934', '276785.48381005', '286639.04703369', '295840.16044347', '304389.94108029', '312304.07954837', '111', '333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '331.2', '476.928', '1200', '2022-07-11 22:03:52', '2022-10-31 21:58:59'),
(2, 18, 21, '5000', '57370.5', '25', '1450', '499', '75', '270', '1250', '14964', '372', 'Interest Only', '187111.5', '2806.6725', '63820.5', '23722.6725', '0', '0', '87543.1725', '1075', '5.1707137188254', '0', '0', '1.81', '10', '107.5', '20.790166666667', '521.74016666667', '553.25983333333', '2.6611611258528', NULL, NULL, '553.25983333333', NULL, NULL, NULL, NULL, NULL, NULL, '840', '800', '890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '161.25', '232.2', NULL, '2022-07-12 05:10:35', '2022-09-08 06:43:53'),
(3, 17, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-14 11:22:25', '2022-08-14 11:22:25'),
(4, 101, 144, '5000', '62732.8', '20', '1450', NULL, '75', '270', '1250', '22318', '408', 'Interest Only', '253998', '3809.97', '69182.8', '48042.17', '16933.2', '5', '117224.97', '1475', '5.2264191056622', '0', '179.89833333333', '2.99', '10', '147.5', '0', '327.39833333333', '1147.6016666667', '4.0663371365129', '1799', NULL, '-602.15666666667', '337616.37', '349432.94295', '359915.9312385', '368913.82951946', '381530.68248903', '383972.67750969', '329330.00717766', '80762.956235368', '-668208.15743401', '355548.9', '373326.345', '386392.767075', '397984.55008725', '407934.16383943', '421885.51224274', '434879.58601982', '446925.75055257', '458054.20174132', '468314.61586033', '2.0429362880886', '2.1348684210526', '2.2138585526316', '2.2913436019737', '2.3715406280428', '2.4398409981304', '2.503032879982', '2.5613535460856', '2.6151419705533', '2.6645681537968', '17700', '18496.5', '19180.8705', '19852.2009675', '20547.028001362', '21138.782407802', '21686.276872164', '22191.567123285', '22657.590032874', '23085.818484496', '0', '0', '0', '2022-10-18 06:33:00', '2022-11-13 17:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `cashflow_forecasts`
--

CREATE TABLE `cashflow_forecasts` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `rental_growth_year_1` varchar(20) DEFAULT NULL,
  `rental_growth_year_2` varchar(20) DEFAULT NULL,
  `rental_growth_year_3` varchar(20) DEFAULT NULL,
  `rental_growth_year_4` varchar(20) DEFAULT NULL,
  `rental_growth_year_5` varchar(20) DEFAULT NULL,
  `rental_growth_year_6` varchar(20) DEFAULT NULL,
  `rental_growth_year_7` varchar(20) DEFAULT NULL,
  `rental_growth_year_8` varchar(20) DEFAULT NULL,
  `rental_growth_year_9` varchar(20) DEFAULT NULL,
  `rental_growth_year_10` varchar(20) DEFAULT NULL,
  `rental_capital_appreciation_1` varchar(20) DEFAULT NULL,
  `rental_capital_appreciation_2` varchar(20) DEFAULT NULL,
  `rental_capital_appreciation_3` varchar(20) DEFAULT NULL,
  `rental_capital_appreciation_4` varchar(20) DEFAULT NULL,
  `rental_capital_appreciation_5` varchar(20) DEFAULT NULL,
  `rental_capital_appreciation_6` varchar(20) DEFAULT NULL,
  `rental_capital_appreciation_7` varchar(20) DEFAULT NULL,
  `rental_capital_appreciation_8` varchar(20) DEFAULT NULL,
  `rental_capital_appreciation_9` varchar(20) DEFAULT NULL,
  `rental_capital_appreciation_10` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashflow_forecasts`
--

INSERT INTO `cashflow_forecasts` (`id`, `property_id`, `rental_growth_year_1`, `rental_growth_year_2`, `rental_growth_year_3`, `rental_growth_year_4`, `rental_growth_year_5`, `rental_growth_year_6`, `rental_growth_year_7`, `rental_growth_year_8`, `rental_growth_year_9`, `rental_growth_year_10`, `rental_capital_appreciation_1`, `rental_capital_appreciation_2`, `rental_capital_appreciation_3`, `rental_capital_appreciation_4`, `rental_capital_appreciation_5`, `rental_capital_appreciation_6`, `rental_capital_appreciation_7`, `rental_capital_appreciation_8`, `rental_capital_appreciation_9`, `rental_capital_appreciation_10`, `created_at`, `updated_at`) VALUES
(1, 101, '0.8', '4.5', '3.7', '3.5', '3.5', '2.88', '2.59', '2.33', '2.10', '1.89', '5', '5', '3.5', '3', '2.5', '3.42', '3.08', '2.77', '2.49', '2.24', '2022-10-31 11:06:18', '2022-11-01 11:32:07'),
(3, 19, '0.8', '4.5', '3.7', '3.5', '3.5', '2.88', '2.59', '2.33', '2.10', '1.89', '2.', '4', '3.5', '3', '2.5', '3.96', '3.56', '3.21', '2.89', '2.6', '2022-10-31 21:36:48', '2022-10-31 21:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_blogs`
--

CREATE TABLE `category_blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `parentID` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_blogs`
--

INSERT INTO `category_blogs` (`id`, `parentID`, `name`, `url`, `description`, `keywords`, `meta_description`, `image`, `featured`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 0, 'News', 'news', '<p>News</p>', 'News', 'News', NULL, 'Yes', '15', NULL, NULL, '2021-01-22 10:04:30', '2021-01-22 10:04:30'),
(2, 0, 'Insights', 'insights', NULL, 'Insights', 'Insights', NULL, NULL, '15', NULL, NULL, '2022-07-01 05:36:31', '2022-07-01 05:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `postID` int(11) DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `productID` int(11) DEFAULT NULL,
  `product_parent_comment` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `authorid` int(11) DEFAULT NULL,
  `view_status` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE `communication` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `adminID` int(11) DEFAULT NULL,
  `conversationID` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `repyto` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communication`
--

INSERT INTO `communication` (`id`, `userID`, `adminID`, `conversationID`, `conversation`, `repyto`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '50FTqL', 'Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.', NULL, '2020-04-01 12:56:51', '2020-04-01 12:56:51'),
(2, NULL, 1, '50FTqL', ' Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles.', NULL, '2020-04-01 16:17:36', '2020-04-01 16:17:36'),
(3, 1, NULL, '50FTqL', 'When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream', NULL, '2020-04-01 13:23:05', '2020-04-01 13:23:05'),
(4, 1, NULL, '50FTqL', 'A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox.', NULL, '2020-04-01 13:23:56', '2020-04-01 13:23:56'),
(5, NULL, 1, '50FTqL', ' How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! \"Now fax quiz Jack!\" my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk.', NULL, '2020-04-01 16:24:16', '2020-04-01 16:24:16'),
(6, 1, NULL, '34FEgU', 'Test test', NULL, '2020-04-06 19:06:23', '2020-04-06 19:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'China', 'CHN', 156, 86),
(45, 'CX', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'Congo', 'COG', 178, 242),
(50, 'CD', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'France', 'FRA', 250, 33),
(74, 'GF', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'India', 'IND', 356, 91),
(100, 'ID', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'Niger', 'NER', 562, 227),
(156, 'NG', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'Peru', 'PER', 604, 51),
(169, 'PH', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'Poland', 'POL', 616, 48),
(172, 'PT', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'United States', 'USA', 840, 1),
(227, 'UM', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'Zimbabwe', 'ZWE', 716, 263),
(240, 'RS', 'Serbia', 'SRB', 688, 381),
(241, 'AP', 'Asia / Pacific Region', '0', 0, 0),
(242, 'ME', 'Montenegro', 'MNE', 499, 382),
(243, 'AX', 'Aland Islands', 'ALA', 248, 358),
(244, 'BQ', 'Bonaire, Sint Eustatius and Saba', 'BES', 535, 599),
(245, 'CW', 'Curacao', 'CUW', 531, 599),
(246, 'GG', 'Guernsey', 'GGY', 831, 44),
(247, 'IM', 'Isle of Man', 'IMN', 833, 44),
(248, 'JE', 'Jersey', 'JEY', 832, 44),
(249, 'XK', 'Kosovo', '---', 0, 381),
(250, 'BL', 'Saint Barthelemy', 'BLM', 652, 590),
(251, 'MF', 'Saint Martin', 'MAF', 663, 590),
(252, 'SX', 'Sint Maarten', 'SXM', 534, 1),
(253, 'SS', 'South Sudan', 'SSD', 728, 211);

-- --------------------------------------------------------

--
-- Table structure for table `custome_field`
--

CREATE TABLE `custome_field` (
  `id` int(11) NOT NULL,
  `pageID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `type` varchar(150) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_manager`
--

CREATE TABLE `file_manager` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parentID` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_mime` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` int(11) DEFAULT NULL,
  `section` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file_manager`
--

INSERT INTO `file_manager` (`id`, `parentID`, `name`, `file_name`, `file_mime`, `file_size`, `cover`, `section`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 1, NULL, 'Bjot3Tshelves-4032134_960_720-768x432.jpg', 'image/jpeg', '92968', NULL, 'gallery', 1, NULL, '2022-06-13 14:06:51', '2022-06-13 14:06:51'),
(5, 1, NULL, 'KJC7FTcouch-with-blue-cushion_1203-320.jpg', 'image/jpeg', '80399', NULL, 'gallery', 1, NULL, '2022-06-13 14:06:51', '2022-06-13 14:06:51'),
(6, 1, NULL, 'z07QSvwhite-frame-mock-up-wall_23-2148374732.jpg', 'image/jpeg', '86900', NULL, 'gallery', 1, NULL, '2022-06-13 14:06:51', '2022-06-13 14:06:51'),
(7, 1, NULL, 'hQI14qvintage-traditional-realistic-frames-set-dark-wall-isolated-vector-illustration_1284-12529.jpg', 'image/jpeg', '99139', NULL, 'gallery', 1, NULL, '2022-06-13 14:06:51', '2022-06-13 14:06:51'),
(8, 1, NULL, '8z9oO7living-room-3498914_960_720-768x512.jpg', 'image/jpeg', '70975', NULL, 'gallery', 1, NULL, '2022-06-13 14:06:52', '2022-06-13 14:06:52'),
(9, 1, NULL, '8ElqKCchairs-2181968_960_720-768x506.jpg', 'image/jpeg', '50151', NULL, 'gallery', 1, NULL, '2022-06-13 14:06:53', '2022-06-13 14:06:53'),
(10, 1, NULL, 'YWk5UKdining-room-3108037_960_720-1-768x457.jpg', 'image/jpeg', '57263', NULL, 'gallery', 1, NULL, '2022-06-13 14:06:53', '2022-06-13 14:06:53'),
(11, 1, NULL, '5JInuknew-home-4083239_960_720-1-768x512.jpg', 'image/jpeg', '108772', NULL, 'gallery', 1, NULL, '2022-06-13 14:58:41', '2022-06-13 14:58:41'),
(12, 1, NULL, 'fALo3Ythe-interior-of-the-1508271_960_720-300x199.jpg', 'image/jpeg', '14838', NULL, 'gallery', 1, NULL, '2022-06-13 14:58:41', '2022-06-13 14:58:41'),
(13, 1, NULL, 'lGRnD8options-396266_960_720-300x225.jpg', 'image/jpeg', '13272', NULL, 'gallery', 1, NULL, '2022-06-13 14:58:42', '2022-06-13 14:58:42'),
(14, 1, NULL, 'CVsi18two-men-shaking-hands_53876-63180-300x200.jpg', 'image/jpeg', '12590', NULL, 'gallery', 1, NULL, '2022-06-13 14:58:42', '2022-06-13 14:58:42'),
(15, 1, NULL, 'JwIfFlteam-architects-working-construction-plan_23-2147842999.jpg', 'image/jpeg', '130391', NULL, 'gallery', 1, NULL, '2022-06-13 14:58:42', '2022-06-13 14:58:42'),
(16, 1, NULL, 'AadY6Pbuilding-plan-354233_960_720-768x503.jpg', 'image/jpeg', '54432', NULL, 'gallery', 1, NULL, '2022-06-13 14:58:42', '2022-06-13 14:58:42'),
(17, 1, NULL, 'glUzNRtriangle-3125882_960_720-768x461.jpg', 'image/jpeg', '74205', NULL, 'gallery', 1, NULL, '2022-06-13 14:58:42', '2022-06-13 14:58:42'),
(18, 1, NULL, 'yKje4FUntitled-design-2-300x240.jpg', 'image/jpeg', '17457', NULL, 'gallery', 1, NULL, '2022-06-13 14:58:42', '2022-06-13 14:58:42'),
(19, 1, NULL, 'jQMgF1new-home-1664284_960_720.jpg', 'image/jpeg', '130646', NULL, 'gallery', 1, NULL, '2022-06-13 15:22:14', '2022-06-13 15:22:14'),
(20, 1, NULL, 'b0yvouapproved-29149_960_720.webp', 'image/webp', '149756', NULL, 'gallery', 1, NULL, '2022-06-13 15:22:14', '2022-06-13 15:22:14'),
(21, 1, NULL, 'Hqvccimeeting-2284501_960_720.jpg', 'image/jpeg', '117701', NULL, 'gallery', 1, NULL, '2022-06-13 15:22:14', '2022-06-13 15:22:14'),
(22, 1, NULL, 'wQo3u8plan-b.jpg', 'image/jpeg', '98643', NULL, 'gallery', 1, NULL, '2022-06-13 15:22:14', '2022-06-13 15:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `cover_image`, `description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'General', 'WlQjOV.png', NULL, 15, 1, 1, '2022-03-21 06:55:46', '2022-03-21 07:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `country`, `first_name`, `last_name`, `subject`, `email`, `phone_number`, `message`, `created_at`, `updated_at`) VALUES
(5, '381', 'Hedda', 'Kasimir', NULL, 'zavacaco@mailinator.com', '86123535', NULL, '2022-07-25 15:41:13', '2022-07-25 15:41:13'),
(6, 'Malta', 'Tanek', 'Xantha', NULL, 'bohydiqyc@mailinator.com', '+356830', NULL, '2022-08-10 10:16:21', '2022-08-10 10:16:21'),
(7, 'Saudi Arabia', 'Jocelyn', 'Kimberley', NULL, 'kojafedo@mailinator.com', '+966862', NULL, '2022-08-10 10:16:40', '2022-08-10 10:16:40'),
(8, NULL, 'Lunea', 'Ishmael', NULL, 'raxyvyt@mailinator.com', '+25407009288670', NULL, '2022-09-13 08:40:46', '2022-09-13 08:40:46'),
(9, NULL, 'Griffin', 'kisia', NULL, 'grifkisia@gmail.com', '+2540700928867', NULL, '2022-09-13 10:09:07', '2022-09-13 10:09:07'),
(10, NULL, 'Griffin', 'kisia', NULL, 'grifkisia@gmail.com', '+254074382423', NULL, '2022-09-13 10:09:34', '2022-09-13 10:09:34'),
(11, NULL, 'Griffin', 'kisia', NULL, 'grifkisia@gmail.com', '243700123456', NULL, '2022-09-13 10:14:48', '2022-09-13 10:14:48'),
(12, NULL, 'Griffin', 'kisia', NULL, 'grifkisia@gmail.com', '+2540700928867', NULL, '2022-09-13 10:28:58', '2022-09-13 10:28:58'),
(13, NULL, 'Griffin', 'kisia', NULL, 'grifkisia@gmail.com', '+2540700928867', NULL, '2022-09-13 10:29:24', '2022-09-13 10:29:24'),
(14, NULL, 'Griffin', 'kisia', NULL, 'grifkisia@gmail.com', '+2540799944444', NULL, '2022-09-13 10:31:28', '2022-09-13 10:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `short` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `short`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', NULL, '2017-04-20 12:33:55'),
(2, 'Kiswahili', 'ksw', NULL, NULL),
(3, 'French', 'fr', '2017-04-06 19:09:26', '2017-04-20 12:37:32'),
(4, 'Germany', 'gr', '2017-04-20 11:01:58', '2017-04-20 11:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `language_sections`
--

CREATE TABLE `language_sections` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `directory` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language_sections`
--

INSERT INTO `language_sections` (`id`, `name`, `directory`, `created_at`, `updated_at`) VALUES
(1, 'General Section', 'general', '2018-07-09 00:00:00', '2018-07-09 00:00:00'),
(2, 'Finance Section', 'finance', '2018-07-09 00:00:00', '2018-07-09 00:00:00'),
(3, 'Human Resource Section', 'hr', '2018-07-09 00:00:00', '2018-07-09 00:00:00'),
(4, 'Customer Relationship Management Section', 'crm', '2018-07-09 00:00:00', '2018-07-09 00:00:00'),
(5, 'Project Management Section', 'project', '2018-07-09 00:00:00', '2018-07-09 00:00:00'),
(6, 'Mail Section', 'mail', '2018-07-09 00:00:00', '2018-07-09 00:00:00'),
(7, 'Content Management System', 'cms', '2018-07-09 00:00:00', '2018-07-09 00:00:00'),
(8, 'Personal', 'personal', '2018-07-09 00:00:00', '2018-07-09 00:00:00'),
(9, 'Settings', 'settings', '2018-07-09 00:00:00', '2018-07-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `status`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'main', 15, NULL, 1, NULL, '2022-05-13 06:16:14', '2022-05-13 06:16:14');

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
(4, '2020_03_04_192705_create_admins_table', 2),
(5, '2020_03_04_192749_create_admins_password_resets_table', 2),
(6, '2020_04_01_143931_create_communication_table', 3),
(7, '2020_11_24_085729_create_gallery_table', 4),
(8, '2020_11_24_153759_create_page_menu_table', 5),
(9, '2020_11_24_154132_create_menu_table', 5),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(11, '2022_06_23_101726_create_team_members_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mortgage_rate`
--

CREATE TABLE `mortgage_rate` (
  `id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `deposit` varchar(5) NOT NULL,
  `apr` varchar(5) NOT NULL,
  `add_base_rate` varchar(5) NOT NULL,
  `total` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mortgage_rate`
--

INSERT INTO `mortgage_rate` (`id`, `country`, `deposit`, `apr`, `add_base_rate`, `total`) VALUES
(1, 'Afghanistan', '50', '4.25', '1.75', '6.00'),
(2, 'Albania', '25', '3.00', '1.75', '4.75'),
(3, 'Algeria', '25', '3.00', '1.75', '4.75'),
(4, 'Andorra', '25', '3.00', '1.75', '4.75'),
(5, 'Angola', '35', '4.25', '1.75', '6.00'),
(6, 'Antigua and Barbuda', '25', '3.00', '1.75', '4.75'),
(7, 'Argentina', '25', '3.00', '1.75', '4.75'),
(8, 'Armenia', '25', '3.00', '1.75', '4.75'),
(9, 'Australia', '25', '3.00', '1.75', '4.75'),
(10, 'Austria', '25', '3.00', '1.75', '4.75'),
(11, 'Azerbaijan', '25', '3.00', '1.75', '4.75'),
(12, 'Bahrain', '25', '3.00', '1.75', '4.75'),
(13, 'Bangladesh', '35', '4.25', '1.75', '6.00'),
(14, 'Barbados', '25', '3.00', '1.75', '4.75'),
(15, 'Belarus', '25', '3.00', '1.75', '4.75'),
(16, 'Belgium', '25', '3.00', '1.75', '4.75'),
(17, 'Belize', '25', '3.00', '1.75', '4.75'),
(18, 'Benin', '25', '3.00', '1.75', '4.75'),
(19, 'Bhutan', '50', '4.25', '1.75', '6.00'),
(20, 'Bolivia', '25', '3.00', '1.75', '4.75'),
(21, 'Bosnia and Herzegovina', '25', '3.00', '1.75', '4.75'),
(22, 'Botswana', '25', '3.00', '1.75', '4.75'),
(23, 'Brazil', '25', '3.00', '1.75', '4.75'),
(24, 'Brunei', '25', '3.00', '1.75', '4.75'),
(25, 'Bulgaria', '25', '3.00', '1.75', '4.75'),
(26, 'Burkina Faso', '25', '3.00', '1.75', '4.75'),
(27, 'Burundi', '25', '3.00', '1.75', '4.75'),
(28, 'Cambodia', '25', '3.00', '1.75', '4.75'),
(29, 'Cameroon', '25', '3.00', '1.75', '4.75'),
(30, 'Canada', '25', '3.00', '1.75', '4.75'),
(31, 'Cape Verde', '25', '3.00', '1.75', '4.75'),
(32, 'Central African Republic', '25', '3.00', '1.75', '4.75'),
(33, 'Chad', '25', '3.00', '1.75', '4.75'),
(34, 'Chile', '25', '3.00', '1.75', '4.75'),
(35, 'China', '25', '3.00', '1.75', '4.75'),
(36, 'Colombia', '25', '3.00', '1.75', '4.75'),
(37, 'Comoros', '25', '3.00', '1.75', '4.75'),
(38, 'Congo, Democratic Republic of the', '25', '3.00', '1.75', '4.75'),
(39, 'Congo, Republic of the', '25', '3.00', '1.75', '4.75'),
(40, 'Costa Rica', '25', '3.00', '1.75', '4.75'),
(41, 'Cote d\'Ivoire', '25', '3.00', '1.75', '4.75'),
(42, 'Croatia', '25', '3.00', '1.75', '4.75'),
(43, 'Cuba', '25', '3.00', '1.75', '4.75'),
(44, 'Cyprus', '25', '3.00', '1.75', '4.75'),
(45, 'Czech Republic', '25', '3.00', '1.75', '4.75'),
(46, 'Denmark', '25', '3.00', '1.75', '4.75'),
(47, 'Djibouti', '25', '3.00', '1.75', '4.75'),
(48, 'Dominica', '25', '3.00', '1.75', '4.75'),
(49, 'Dominican Republic', '25', '3.00', '1.75', '4.75'),
(50, 'East Timor (Timor-Leste)', '25', '3.00', '1.75', '4.75'),
(51, 'Ecuador', '25', '3.00', '1.75', '4.75'),
(52, 'Egypt', '25', '3.00', '1.75', '4.75'),
(53, 'El Salvador', '25', '3.00', '1.75', '4.75'),
(54, 'Equatorial Guinea', '25', '3.00', '1.75', '4.75'),
(55, 'Eritrea', '25', '3.00', '1.75', '4.75'),
(56, 'Estonia', '25', '3.00', '1.75', '4.75'),
(57, 'Ethiopia', '25', '3.00', '1.75', '4.75'),
(58, 'Fiji', '25', '3.00', '1.75', '4.75'),
(59, 'Finland', '25', '3.00', '1.75', '4.75'),
(60, 'France', '25', '3.00', '1.75', '4.75'),
(61, 'Gabon', '25', '3.00', '1.75', '4.75'),
(62, 'Georgia', '25', '3.00', '1.75', '4.75'),
(63, 'Germany', '25', '3.00', '1.75', '4.75'),
(64, 'Ghana', '25', '3.00', '1.75', '4.75'),
(65, 'Greece', '25', '3.00', '1.75', '4.75'),
(66, 'Grenada', '25', '3.00', '1.75', '4.75'),
(67, 'Guatemala', '25', '3.00', '1.75', '4.75'),
(68, 'Guinea', '25', '3.00', '1.75', '4.75'),
(69, 'Guinea-Bissau', '25', '3.00', '1.75', '4.75'),
(70, 'Guyana', '25', '3.00', '1.75', '4.75'),
(71, 'Haiti', '25', '3.00', '1.75', '4.75'),
(72, 'Honduras', '25', '3.00', '1.75', '4.75'),
(73, 'Hungary', '25', '3.00', '1.75', '4.75'),
(74, 'Iceland', '25', '3.00', '1.75', '4.75'),
(75, 'India', '25', '3.00', '1.75', '4.75'),
(76, 'Indonesia', '25', '3.00', '1.75', '4.75'),
(77, 'Iran', '50', '4.25', '1.75', '6.00'),
(78, 'Iraq', '50', '4.25', '1.75', '6.00'),
(79, 'Ireland', '25', '3.00', '1.75', '4.75'),
(80, 'Israel', '25', '3.00', '1.75', '4.75'),
(81, 'Italy', '25', '3.00', '1.75', '4.75'),
(82, 'Jamaica', '25', '3.00', '1.75', '4.75'),
(83, 'Japan', '25', '3.00', '1.75', '4.75'),
(84, 'Jordan', '25', '3.00', '1.75', '4.75'),
(85, 'Kazakhstan', '25', '3.00', '1.75', '4.75'),
(86, 'Kenya', '25', '3.00', '1.75', '4.75'),
(87, 'Kiribati', '25', '3.00', '1.75', '4.75'),
(88, 'Korea, North', '50', '4.25', '1.75', '6.00'),
(89, 'Korea, South', '25', '3.00', '1.75', '4.75'),
(90, 'Kosovo', '25', '3.00', '1.75', '4.75'),
(91, 'Kuwait', '25', '3.00', '1.75', '4.75'),
(92, 'Kyrgyzstan', '25', '3.00', '1.75', '4.75'),
(93, 'Laos', '35', '4.25', '1.75', '6.00'),
(94, 'Latvia', '25', '3.00', '1.75', '4.75'),
(95, 'Lebanon', '25', '3.00', '1.75', '4.75'),
(96, 'Lesotho', '25', '3.00', '1.75', '4.75'),
(97, 'Liberia', '25', '3.00', '1.75', '4.75'),
(98, 'Libya', '25', '3.00', '1.75', '4.75'),
(99, 'Liechtenstein', '25', '3.00', '1.75', '4.75'),
(100, 'Lithuania', '25', '3.00', '1.75', '4.75'),
(101, 'Luxembourg', '25', '3.00', '1.75', '4.75'),
(102, 'Macedonia', '25', '3.00', '1.75', '4.75'),
(103, 'Madagascar', '25', '3.00', '1.75', '4.75'),
(104, 'Malawi', '25', '3.00', '1.75', '4.75'),
(105, 'Malaysia', '25', '3.00', '1.75', '4.75'),
(106, 'Maldives', '25', '3.00', '1.75', '4.75'),
(107, 'Mali', '25', '3.00', '1.75', '4.75'),
(108, 'Malta', '25', '3.00', '1.75', '4.75'),
(109, 'Marshall Islands', '25', '3.00', '1.75', '4.75'),
(110, 'Mauritania', '25', '3.00', '1.75', '4.75'),
(111, 'Mauritius', '25', '3.00', '1.75', '4.75'),
(112, 'Mexico', '25', '3.00', '1.75', '4.75'),
(113, 'Micronesia, Federated States of', '25', '3.00', '1.75', '4.75'),
(114, 'Moldova', '25', '3.00', '1.75', '4.75'),
(115, 'Monaco', '25', '3.00', '1.75', '4.75'),
(116, 'Mongolia', '25', '3.00', '1.75', '4.75'),
(117, 'Montenegro', '25', '3.00', '1.75', '4.75'),
(118, 'Morocco', '25', '3.00', '1.75', '4.75'),
(119, 'Mozambique', '25', '3.00', '1.75', '4.75'),
(120, 'Myanmar (Burma)', '35', '4', '1.75', '5.75'),
(121, 'Namibia', '25', '3.00', '1.75', '4.75'),
(122, 'Nauru', '25', '3.00', '1.75', '4.75'),
(123, 'Nepal', '25', '3.00', '1.75', '4.75'),
(124, 'Netherlands', '25', '3.00', '1.75', '4.75'),
(125, 'New Zealand', '25', '3.00', '1.75', '4.75'),
(126, 'Nicaragua', '25', '3.00', '1.75', '4.75'),
(127, 'Niger', '35', '4', '1.75', '5.75'),
(128, 'Nigeria', '35', '4', '1.75', '5.75'),
(129, 'Norway', '25', '3.00', '1.75', '4.75'),
(130, 'Oman', '25', '3.00', '1.75', '4.75'),
(131, 'Pakistan', '35', '4.25', '1.75', '6.00'),
(132, 'Palau', '25', '3.00', '1.75', '4.75'),
(133, 'Panama', '25', '3.00', '1.75', '4.75'),
(134, 'Papua New Guinea', '25', '3.00', '1.75', '4.75'),
(135, 'Paraguay', '25', '3.00', '1.75', '4.75'),
(136, 'Peru', '25', '3.00', '1.75', '4.75'),
(137, 'Philippines', '35', '4', '1.75', '5.75'),
(138, 'Poland', '25', '3.00', '1.75', '4.75'),
(139, 'Portugal', '25', '3.00', '1.75', '4.75'),
(140, 'Qatar', '25', '3.00', '1.75', '4.75'),
(141, 'Romania', '25', '3.00', '1.75', '4.75'),
(142, 'Russia', '50', '4.25', '1.75', '6.00'),
(143, 'Rwanda', '35', '4', '1.75', '5.75'),
(144, 'Saint Kitts and Nevis', '25', '3.00', '1.75', '4.75'),
(145, 'Saint Lucia', '25', '3.00', '1.75', '4.75'),
(146, 'Saint Vincent and the Grenadines', '25', '3.00', '1.75', '4.75'),
(147, 'Samoa', '25', '3.00', '1.75', '4.75'),
(148, 'San Marino', '25', '3.00', '1.75', '4.75'),
(149, 'Sao Tome and Principe', '25', '3.00', '1.75', '4.75'),
(150, 'Saudi Arabia', '25', '3.00', '1.75', '4.75'),
(151, 'Senegal', '25', '3.00', '1.75', '4.75'),
(152, 'Serbia', '25', '3.00', '1.75', '4.75'),
(153, 'Seychelles', '25', '3.00', '1.75', '4.75'),
(154, 'Sierra Leone', '50', '4.25', '1.75', '6.00'),
(155, 'Singapore', '25', '3.00', '1.75', '4.75'),
(156, 'Slovakia', '25', '3.00', '1.75', '4.75'),
(157, 'Slovenia', '25', '3.00', '1.75', '4.75'),
(158, 'Solomon Islands', '25', '3.00', '1.75', '4.75'),
(159, 'Somalia', '25', '3.00', '1.75', '4.75'),
(160, 'South Africa', '25', '3.00', '1.75', '4.75'),
(161, 'South Sudan', '35', '4', '1.75', '5.75'),
(162, 'Spain', '25', '3.00', '1.75', '4.75'),
(163, 'Sri Lanka', '25', '3.00', '1.75', '4.75'),
(164, 'Sudan', '35', '4', '1.75', '5.75'),
(165, 'Suriname', '25', '3.00', '1.75', '4.75'),
(166, 'Swaziland', '25', '3.00', '1.75', '4.75'),
(167, 'Sweden', '25', '3.00', '1.75', '4.75'),
(168, 'Switzerland', '25', '3.00', '1.75', '4.75'),
(169, 'Syria', '25', '3.00', '1.75', '4.75'),
(170, 'Taiwan', '25', '3.00', '1.75', '4.75'),
(171, 'Tajikistan', '25', '3.00', '1.75', '4.75'),
(172, 'Tanzania', '25', '3.00', '1.75', '4.75'),
(173, 'Thailand', '25', '3.00', '1.75', '4.75'),
(174, 'The Bahamas', '25', '3.00', '1.75', '4.75'),
(175, 'The Gambia', '25', '3.00', '1.75', '4.75'),
(176, 'Togo', '25', '3.00', '1.75', '4.75'),
(177, 'Tonga', '25', '3.00', '1.75', '4.75'),
(178, 'Trinidad and Tobago', '25', '3.00', '1.75', '4.75'),
(179, 'Tunisia', '25', '3.00', '1.75', '4.75'),
(180, 'Turkey', '25', '3.00', '1.75', '4.75'),
(181, 'Turkmenistan', '25', '3.00', '1.75', '4.75'),
(182, 'Tuvalu', '25', '3.00', '1.75', '4.75'),
(183, 'Uganda', '25', '3.00', '1.75', '4.75'),
(184, 'Ukraine', '25', '3.00', '1.75', '4.75'),
(185, 'United Arab Emirates', '25', '3.00', '1.75', '4.75'),
(186, 'United Kingdom', '25', '2.00', '1.75', '3.75'),
(187, 'United States of America', '25', '3.00', '1.75', '4.75'),
(188, 'Uruguay', '25', '3.00', '1.75', '4.75'),
(189, 'Uzbekistan', '25', '3.00', '1.75', '4.75'),
(190, 'Vanuatu', '25', '3.00', '1.75', '4.75'),
(191, 'Vatican City (Holy See)', '25', '3.00', '1.75', '4.75'),
(192, 'Venezuela', '25', '3.00', '1.75', '4.75'),
(193, 'Vietnam', '25', '3.00', '1.75', '4.75'),
(194, 'Yemen', '50', '4.25', '1.75', '6.00'),
(195, 'Zambia', '25', '3.00', '1.75', '4.75'),
(196, 'Zimbabwe', '35', '4', '1.75', '5.75');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `parentID` int(11) DEFAULT 0,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `custom_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_tags` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `visibility` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publish_time` datetime DEFAULT NULL,
  `template` int(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `parentID`, `title`, `content`, `url`, `custom_url`, `thumbnail`, `meta_tags`, `meta_description`, `status`, `visibility`, `publish_time`, `template`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 0, 'Projects', NULL, 'projects', NULL, NULL, 'projects', 'Baron &amp; Cabot - The only company with trained UK surveyors and data analysts, meaning you get the highest returns in the safest investments. Buy Property in London, Manchester, Birmingham. Leeds, Liverpool, Bolton, Coventry &amp; more.', 31, 'public', NULL, 7, 1, NULL, '2022-07-27 06:10:24', '2022-07-27 06:29:02'),
(2, 0, 'Services', NULL, 'services', NULL, NULL, 'services', 'Baron &amp; Cabot - The only company with trained UK surveyors and data analysts, meaning you get the highest returns in the safest investments. Buy Property in London, Manchester, Birmingham. Leeds, Liverpool, Bolton, Coventry &amp; more.', 31, 'public', NULL, 4, 1, NULL, '2022-07-27 06:17:30', '2022-07-27 06:26:29'),
(3, 0, 'About', NULL, 'about', '#', NULL, 'About', 'Baron &amp; Cabot - The only company with trained UK surveyors and data analysts, meaning you get the highest returns in the safest investments. Buy Property in London, Manchester, Birmingham. Leeds, Liverpool, Bolton, Coventry &amp; more.', 31, 'public', NULL, NULL, 1, NULL, '2022-07-27 06:18:12', '2022-07-27 09:23:23'),
(4, 3, 'Who we are', NULL, 'who-we-are', NULL, NULL, 'who we are', 'Baron &amp; Cabot - The only company with trained UK surveyors and data analysts, meaning you get the highest returns in the safest investments. Buy Property in London, Manchester, Birmingham. Leeds, Liverpool, Bolton, Coventry &amp; more.', 31, 'public', NULL, 6, 1, NULL, '2022-07-27 06:18:25', '2022-07-27 06:28:13'),
(5, 3, 'Due Diligence', NULL, 'due-diligence', NULL, NULL, 'Due diligence', 'Baron &amp; Cabot - The only company with trained UK surveyors and data analysts, meaning you get the highest returns in the safest investments. Buy Property in London, Manchester, Birmingham. Leeds, Liverpool, Bolton, Coventry &amp; more.', 31, 'public', NULL, 3, 1, NULL, '2022-07-27 06:19:15', '2022-07-27 06:25:04'),
(6, 3, 'Faq\'s', NULL, 'faqs', NULL, NULL, 'faq', 'Baron &amp; Cabot - The only company with trained UK surveyors and data analysts, meaning you get the highest returns in the safest investments. Buy Property in London, Manchester, Birmingham. Leeds, Liverpool, Bolton, Coventry &amp; more.', 31, 'public', NULL, 2, 1, NULL, '2022-07-27 06:19:36', '2022-07-27 06:23:20'),
(7, 0, 'Our Team', NULL, 'our-team', NULL, NULL, 'Our team', 'Baron &amp; Cabot - The only company with trained UK surveyors and data analysts, meaning you get the highest returns in the safest investments. Buy Property in London, Manchester, Birmingham. Leeds, Liverpool, Bolton, Coventry &amp; more.', 31, 'public', NULL, 5, 1, NULL, '2022-07-27 06:20:19', '2022-07-27 06:27:04'),
(8, 0, 'Insights', NULL, 'insights', NULL, NULL, 'insights', 'Baron &amp; Cabot - The only company with trained UK surveyors and data analysts, meaning you get the highest returns in the safest investments. Buy Property in London, Manchester, Birmingham. Leeds, Liverpool, Bolton, Coventry &amp; more.', 31, 'public', NULL, NULL, 1, NULL, '2022-07-27 06:20:46', '2022-07-27 06:20:54'),
(9, 0, 'Contact us', NULL, 'contact-us', NULL, NULL, 'contacts', 'Baron &amp; Cabot - The only company with trained UK surveyors and data analysts, meaning you get the highest returns in the safest investments. Buy Property in London, Manchester, Birmingham. Leeds, Liverpool, Bolton, Coventry &amp; more.', 31, 'public', NULL, 1, 1, NULL, '2022-07-27 06:21:00', '2022-07-27 06:22:29'),
(10, 0, 'Home', NULL, 'home', NULL, NULL, 'Home', 'Baron &amp; Cabot - The only company with trained UK surveyors and data analysts, meaning you get the highest returns in the safest investments. Buy Property in London, Manchester, Birmingham. Leeds, Liverpool, Bolton, Coventry &amp; more.', 31, 'public', NULL, NULL, 1, NULL, '2022-07-27 08:18:17', '2022-07-27 09:24:00'),
(11, 0, 'Africa', NULL, 'africa', NULL, NULL, NULL, NULL, 31, 'public', NULL, 8, 1, NULL, '2022-07-27 15:11:42', '2022-07-27 15:13:32'),
(12, 0, 'Thank you', NULL, 'thank-you', NULL, NULL, NULL, NULL, 31, 'public', NULL, 9, 1, NULL, '2022-08-10 05:34:11', '2022-08-10 05:34:44'),
(13, 0, 'Facebook', NULL, 'facebook', NULL, NULL, NULL, NULL, 31, 'public', NULL, 10, 1, NULL, '2022-08-30 16:25:46', '2022-08-30 16:26:29'),
(14, 0, 'Asia', NULL, 'asia', NULL, NULL, NULL, NULL, 31, 'public', NULL, 11, 1, NULL, '2022-11-03 04:44:18', '2022-11-03 04:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `page_menu`
--

CREATE TABLE `page_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menuID` int(11) NOT NULL,
  `pageID` int(11) NOT NULL,
  `parentID` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_menu`
--

INSERT INTO `page_menu` (`id`, `menuID`, `pageID`, `parentID`, `position`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 3, 3, 1, NULL, '2022-05-13 06:21:32', '2022-07-27 07:37:59'),
(2, 1, 3, 0, 2, 1, NULL, '2022-05-13 06:21:33', '2022-07-27 07:37:37'),
(3, 1, 2, 0, 1, 1, NULL, '2022-05-13 06:21:35', '2022-07-27 07:37:02'),
(4, 1, 8, 0, 7, 1, NULL, '2022-05-13 08:40:33', '2022-07-27 07:37:46'),
(5, 1, 9, 0, 8, 1, NULL, '2022-05-24 08:07:16', '2022-07-27 07:36:56'),
(6, 1, 7, 0, 6, 1, NULL, '2022-07-27 07:36:40', '2022-07-27 07:37:46'),
(7, 1, 6, 3, 5, 1, NULL, '2022-07-27 07:36:42', '2022-07-27 07:37:46'),
(8, 1, 5, 3, 4, 1, NULL, '2022-07-27 07:36:44', '2022-07-27 07:37:59'),
(9, 1, 1, 0, 0, 1, NULL, '2022-07-27 07:36:46', '2022-07-27 07:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `page_template`
--

CREATE TABLE `page_template` (
  `id` int(11) NOT NULL,
  `blade_name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_template`
--

INSERT INTO `page_template` (`id`, `blade_name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'contact', 1, NULL, '2022-07-27 09:22:18', '2022-07-27 09:22:18'),
(2, 'faq', 1, NULL, '2022-07-27 09:23:05', '2022-07-27 09:23:05'),
(3, 'due-diligence', 1, NULL, '2022-07-27 09:24:56', '2022-07-27 09:24:56'),
(4, 'services', 1, NULL, '2022-07-27 09:26:17', '2022-07-27 09:26:17'),
(5, 'team', 1, NULL, '2022-07-27 09:26:58', '2022-07-27 09:26:58'),
(6, 'who-we-are', 1, NULL, '2022-07-27 09:28:07', '2022-07-27 09:28:07'),
(7, 'projects', 1, NULL, '2022-07-27 09:28:50', '2022-07-27 09:28:50'),
(8, 'africa', 1, NULL, '2022-07-27 18:12:09', '2022-07-27 18:12:09'),
(9, 'thank-you', 1, NULL, '2022-08-10 08:34:38', '2022-08-10 08:34:38'),
(10, 'facebook', 1, NULL, '2022-08-30 19:26:11', '2022-08-30 19:26:11'),
(11, 'asia', 1, NULL, '2022-11-03 07:44:54', '2022-11-03 07:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `parentID` int(11) DEFAULT 0,
  `name` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `keywords` varchar(180) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `parentID`, `name`, `description`, `status`, `meta_description`, `keywords`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Projects', NULL, '15', NULL, NULL, 'projects', NULL, '2022-06-23 21:28:52', '2022-06-23 21:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `product_category_product_information`
--

CREATE TABLE `product_category_product_information` (
  `id` int(11) NOT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `productID` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category_product_information`
--

INSERT INTO `product_category_product_information` (`id`, `categoryID`, `productID`, `created_at`, `updated_at`) VALUES
(5, 1, 2, '2022-06-28', '2022-06-28'),
(7, 1, 1, '2022-07-06', '2022-07-06'),
(8, 1, 3, '2022-07-06', '2022-07-06'),
(9, 1, 4, '2022-07-06', '2022-07-06'),
(10, 1, 5, '2022-07-06', '2022-07-06'),
(11, 1, 6, '2022-07-06', '2022-07-06'),
(12, 1, 7, '2022-07-06', '2022-07-06'),
(13, 1, 8, '2022-07-07', '2022-07-07'),
(14, 1, 9, '2022-07-07', '2022-07-07'),
(15, 1, 10, '2022-07-07', '2022-07-07'),
(16, 1, 11, '2022-07-07', '2022-07-07'),
(17, 1, 12, '2022-07-07', '2022-07-07'),
(18, 1, 13, '2022-07-07', '2022-07-07'),
(19, 1, 14, '2022-07-07', '2022-07-07'),
(20, 1, 15, '2022-07-07', '2022-07-07'),
(21, 1, 16, '2022-07-07', '2022-07-07'),
(22, 1, 17, '2022-07-07', '2022-07-07'),
(23, 1, 18, '2022-07-07', '2022-07-07'),
(24, 1, 19, '2022-07-07', '2022-07-07'),
(25, 1, 101, '2022-10-18', '2022-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `product_information`
--

CREATE TABLE `product_information` (
  `id` int(11) NOT NULL,
  `parentID` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `stories` varchar(20) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `floor` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `amenities` text DEFAULT NULL,
  `item_condition` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `publish` varchar(100) DEFAULT NULL,
  `price` varchar(11) DEFAULT NULL,
  `reservation_fee` varchar(255) DEFAULT NULL,
  `unit_choices` varchar(255) DEFAULT NULL,
  `bedrooms` varchar(100) DEFAULT NULL,
  `bathrooms` varchar(100) DEFAULT NULL,
  `garadge` varchar(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `completion` varchar(255) DEFAULT NULL,
  `furniture_pack` varchar(20) DEFAULT NULL,
  `price_per_sqf` varchar(20) DEFAULT NULL,
  `rent_per_month` varchar(100) DEFAULT NULL,
  `feature_alert` varchar(255) DEFAULT NULL,
  `feature_color` varchar(255) DEFAULT NULL,
  `mortgage_type` varchar(150) DEFAULT NULL,
  `mortgage_lending_value` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_information`
--

INSERT INTO `product_information` (`id`, `parentID`, `type`, `product_name`, `stories`, `latitude`, `longitude`, `short_description`, `floor`, `description`, `size`, `year`, `url`, `map`, `amenities`, `item_condition`, `status`, `publish`, `price`, `reservation_fee`, `unit_choices`, `bedrooms`, `bathrooms`, `garadge`, `location`, `completion`, `furniture_pack`, `price_per_sqf`, `rent_per_month`, `feature_alert`, `feature_color`, `mortgage_type`, `mortgage_lending_value`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Apartments', 'Silk Works, Coventry', NULL, NULL, NULL, 'A former historic textiles factory transformed to apartments with the taste of Luxury and Modernity The Silk Works is nestled within an eclectic metropolitan borough steeped in history with unique arts, cultural and social opportunities.', NULL, '<h2>Experience the delights of city centre living</h2>\r\n<p>A former historic textiles factory transformed to apartments with the taste of Luxury and Modernity<br />Experience the delights of city centre living</p>\r\n<p>The Silk Works is nestled within an eclectic metropolitan borough steeped in history with unique arts, cultural and social opportunities. Coventry is a vibrant family focused city perfectly suited for 21st century living. Renowned for its rich industrial heritage and abundance of unique attractions, it will engage every age group. Coventry retains a district status, having a bustling music, dance, theatre and poetry scene.</p>', '352 - 922 sq ft', NULL, 'silk-works-coventry', NULL, 'null', NULL, 'Sold out', 'Yes', '350000', '5000', '1 & 2 Beds', NULL, NULL, NULL, 'Coventry', 'Q3 2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-23 18:35:30', '2022-07-06 17:34:51'),
(2, NULL, 'Project', 'Urban Green', NULL, NULL, NULL, 'Right in the heart of one of Manchester’s most exciting and vibrant areas Urban Green is a stunning new luxury development in one of Manchester’s most exciting up-and-coming areas.', NULL, '<p>Right in the heart of one of Manchester&rsquo;s most exciting and vibrant areas<br />Urban Green is a stunning new luxury development in one of Manchester&rsquo;s most exciting up-and-coming areas. Comprised of 174 one- and two-bedroom apartments, this building offers a high-end lifestyle and all the convenience of city-centre living at a more affordable price.</p>', '446 - 707 sq ft', NULL, 'urban-green-dd', NULL, 'null', NULL, 'Sold out', 'Yes', '169000', '5000', 'Studios, 1 & 2 Bedrooms?', NULL, NULL, NULL, 'Manchester', 'Q4 2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-23 18:38:58', '2022-07-06 18:21:33'),
(3, NULL, 'Project', 'Sheldon Court', NULL, NULL, NULL, 'A new defining landmark has arrived in Sheldon.\r\nComposed of 64 one & two bed residencies these stylish apartments deliver light-filled living spaces, where the quality of design and finish is never compromised. A new defining landmark has arrived in Sheldon.', NULL, '<p>A new defining landmark has arrived in Sheldon.<br />Composed of 64 one &amp; two bed residencies these stylish apartments deliver light-filled living spaces, where the quality of design and finish is never compromised. A new defining landmark has arrived in Sheldon.</p>', NULL, NULL, 'sheldon-court', NULL, 'null', NULL, 'Sold out', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, 'Birmingham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-06 18:36:12', '2022-07-06 18:36:12'),
(4, NULL, 'Project', 'Arden Gate', NULL, NULL, NULL, 'Luxury In The Heart Of Birmingham A wide variety of 225 luminous and airy designed apartments duplexes in the luxury Arden Gate with a top-end finishing and specifications throughout and fully equipped modern', NULL, '<h3>Luxury In The Heart Of Birmingham</h3>\r\n<p>A wide variety of 225 luminous and airy designed apartments duplexes in the luxury Arden Gate with a top-end finishing and specifications throughout and fully equipped modern kitchen designs fitted with European branded appliances. A limited number of apartments come with a private garden and a selection are fitted with balconies to enjoy the leafy neighborhood and beautiful city views.</p>', NULL, NULL, 'arden-gate', NULL, 'null', NULL, 'Sold out', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, 'Birmingham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-06 18:42:15', '2022-07-06 18:42:15'),
(5, NULL, 'Project', 'Ironworks', NULL, NULL, NULL, 'Apartment In One Of The UK\'s Most Progressive Cities Move into an Iron Works apartment in one of the UK’s most progressive cities.', NULL, '<h3>Apartment In One Of The UK\'s Most Progressive Cities</h3>\r\n<p>Move into an Iron Works apartment in one of the UK&rsquo;s most progressive cities. The development is nestled in the heart of Digbeth, dubbed the city&rsquo;s creative quarter and a prime spot for development. Recent proposals* include the introduction of 33,000 sqm of retail place and a further 75,000 sqm of residential development.</p>', NULL, NULL, 'ironworks', NULL, 'null', NULL, 'Sold out', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, 'Birmingham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-06 19:00:30', '2022-07-06 19:00:30'),
(6, NULL, 'Project', 'Quay Central', NULL, NULL, NULL, 'Located In The Heart Of The Liverpool Waters Quay Central comprises 108 one and two bedroom apartments across seven floors with two commercial units on the ground floor and a communal bike store for resident use.', NULL, '<h3>Located In The Heart Of The Liverpool Waters</h3>\r\n<p>Quay Central comprises 108 one and two bedroom apartments across seven floors with two commercial units on the ground floor and a communal bike store for resident use. Each of the apartments will be finished to an extremely high specification, with spacious bedrooms, modern bathroom suites and an airy open plan kitchen and living room. All two bedroom apartments will have the additional benefit of an en-suite bathroom adjacent to the master bedroom.</p>', NULL, NULL, 'quay-central', NULL, 'null', NULL, 'Sold out', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, 'Liverpool', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-06 19:18:42', '2022-07-06 19:18:42'),
(7, NULL, 'Project', 'Tobacco Warehouse', NULL, NULL, NULL, 'Presenting Stylish In Liverpool\'s Largest Landmark Tobacco Warehouse presents stylish, Titanic-sized warehouse homes in Liverpool’s largest landmark.', NULL, '<h3>Presenting Stylish In Liverpool\'s Largest Landmark</h3>\r\n<p>Tobacco Warehouse presents stylish, Titanic-sized warehouse homes in Liverpool&rsquo;s largest landmark. A stunning collection of authentic loft apartments, Tobacco Warehouse is at the centre of the city&rsquo;s most ambitious regeneration programme, an area being transformed into a thriving new creative neighbourhood</p>', NULL, NULL, 'tobacco-warehouse', NULL, 'null', NULL, 'Sold out', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, 'Liverpool', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-06 19:33:05', '2022-07-06 19:33:05'),
(8, NULL, 'Project', 'Timber Yard', NULL, NULL, NULL, 'Timber Yard is the Galliard Apsley Partnership’s first apartment release with planning consent for 379 studios and 1, 2 & 3 bedroom apartment arranged around landscaped courtyard gardens', NULL, '<p>Timber Yard is the Galliard Apsley Partnership&rsquo;s first apartment release with planning consent for 379 studios and 1, 2 &amp; 3 bedroom apartment arranged around landscaped courtyard<br />gardens.</p>\r\n<p>The development has been designed to provide exclusive lifestyle facilities including a gym, club lounge and screening room while offering high quality, highly specified living space rising 12 levels - with many apartments enjoying superb city centre views.</p>\r\n<p>Timber Yard will also be within 10 minutes walk of New Street and Moor Street stations - with Moor Street providing direct access to the forthcoming Curzon Street HS2 interchange (2029).</p>\r\n<p>Development Address: Pershore Street, Birmingham B5 6PA</p>', NULL, NULL, 'timber-yard', NULL, 'null', NULL, 'Fast Selling', 'Yes', '313100', '5000', '2 beds', NULL, NULL, NULL, 'Birmingham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 07:58:51', '2022-07-07 07:58:51'),
(9, NULL, 'Project', 'Priory House', NULL, NULL, NULL, 'Priory house is a flagship project in the heart of Birmingham city centre. The scheme will create an enduring 21st century lifestyle for its inhabitants and provide a renewed sense of purpose to this part of the city.', NULL, '<p>Priory house is a flagship project in the heart of Birmingham city centre.</p>\r\n<p>The scheme will create an enduring 21st century lifestyle for its inhabitants and provide a renewed sense of purpose to this part of the city.</p>\r\n<p>Built in the 1950&rsquo;s Priory House harks back to Birmingham&rsquo;s industrial past. The proposed scheme will preserve and enhance the original building, and provide a connected space for contemporary living.</p>\r\n<p>Home of the Birmingham Forensic Science Service for more than 40 years Priory House is a 77,000 sq ft landmark mid-century building located on Gooch Street North within the cultural hub of Birmingham&rsquo;s Southside district.</p>\r\n<p>It will be brought back to life by a bold regeneration scheme that will reflect the relationship between the aesthetics of its industrial past and modern warehouse loft living.</p>\r\n<p>Address: Gooch St North, Birmingham, B5</p>', NULL, NULL, 'priory-house', NULL, 'null', NULL, 'Fast Selling', 'Yes', '211200', '5000', '1 and 2 beds', NULL, NULL, NULL, 'Birmingham', 'End of July 2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 08:13:38', '2022-07-07 08:13:38'),
(10, NULL, 'Project', 'Trent Bridge Quays', NULL, NULL, NULL, 'Built on the banks of the River Trent and within easy reach of West Bridgford and Nottingham City Centre, Trent Bridge Quays is a contemporary development f 95 desirable homes and apartments.', NULL, '<h3>Marketing Restrictions: No Portal, No Social Media, No Online Listings</h3>\r\n<p>A Waterside Vision Made Real</p>\r\n<p>Built on the banks of the River Trent and within easy reach of West Bridgford and Nottingham City Centre, Trent Bridge Quays is a contemporary development f 95 desirable homes and apartments.</p>\r\n<p>No longer the choice of the privileged few, waterfront living means space, freedom and privacy. It&rsquo;s all about mind, body and soul - the perfect antidote to a busy city life.<br />A unique location that&rsquo;s at the vanguard of a new wave of investment and regeneration that will build on and expand the great success story of Nottingham. It brings together everything that&rsquo;s best. Inside and out, local and regional, classic and contemporary.<br />Interconnecting green spaces, a rich textured neighbourhood of shops, caf&eacute;s, bars and restaurants all within easy reach. It&rsquo;s a neighbourhood forging the way for a new chapter in Nottingham&rsquo;s history.</p>\r\n<p>Development Address: MeadowLane, Nottingham, NG2 3HR</p>', NULL, NULL, 'trent-bridge-quays', NULL, 'null', NULL, 'Fast Selling', 'Yes', '219300', '5000', '1, 2 and 3 beds, and Townhouses', NULL, NULL, NULL, 'Nottingham', 'B5 Q1 2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 08:26:31', '2022-07-07 08:26:31'),
(11, NULL, 'Project', 'Heaton House, Jewellery Qtr', NULL, NULL, NULL, 'Inspired by history, Heaton House will be home to a private house, 14 contemporary townhouses & 42 industrial style apartments, ensuring that rich history once more delivers a new vision for life at the heart of the city.', NULL, '<p>Inspired by history, Heaton House will be home to a private house, 14 contemporary townhouses &amp; 42 industrial style apartments, ensuring that rich history once more delivers a new vision for life at the heart of the city.<br /><br />A rarity like Heaton House comes along once in a lifetime. Its roots are written deep into the city&rsquo;s folklore. Its origins, as a 19th century georgian villa in Camden Street, form part of the rich suburban middle-class enclaves that grew with the expansion of the Jewellery Qtr.<br /><br />&bull; A development of 42 apartments and 14 townhouses plus the restoration of a 4-bed Georgian Villa<br />&bull; What sets Heaton House apart is its historical recreation.<br />&bull; Fully modernised generous open plan accommodation with well curated specifications &amp; state of the art features.<br /><br />Address: Camden Street, Birmingham, B1 3BZ</p>', NULL, NULL, 'heaton-house-jewellery-qtr', NULL, 'null', NULL, 'Fast Selling', 'Yes', '205920', '5000', '1, 2 bed and 3 bed Townhouses', NULL, NULL, NULL, 'Birmingham', 'August 2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 08:57:13', '2022-07-07 08:57:13'),
(12, NULL, 'Project', 'The Axium', NULL, NULL, NULL, 'The Axium is a contemporary new development on a 2.3-acre site located in the very heart of Birmingham. Located just south of Holloway Head, The Axium is just a few minutes walk from Grand Central-New Street Station, the top-end shopping centers and the business and financial district.', NULL, '<p>The Axium is a contemporary new development on a 2.3-acre site located in the very heart of Birmingham. Located just south of Holloway Head, The Axium is just a few minutes walk from Grand Central-New Street Station, the top-end shopping centers and the business and financial district.<br /><br />The development comprises 304 high-end residential apartments designed with practical and well-thought out layouts fitted with top-end finishing and specifications, modern Porcelanosa kitchen designs, fully fitted with high-end Bosch electrical appliances and luxury, fully tiled, bathrooms and en-suite.</p>', NULL, NULL, 'the-axium', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2430.292130735171!2d-1.9036211841942614!3d52.47384617980547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bc61d78a66f1%3A0xf1f39ea770e7448e!2sWindmill%20St%2C%20Birmingham%2C%20UK!5e0!3m2!1sen!2ske!4v1657195556164!5m2!1sen!2ske\" width=\"100%\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'null', NULL, 'Fast Selling', 'Yes', '197950', '5000', '1, 2 beds', NULL, NULL, NULL, 'Birmingham', 'Completed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 09:06:38', '2022-07-07 09:06:38'),
(13, NULL, 'Project', 'Broadoaks Phase 3', NULL, NULL, NULL, 'Broadoaks is a new residential community in the hear of affluent Solihull (B91). Its combination of refined living and casual elegance connects past, present and future.', NULL, '<p>Marketing Restrictions: No Portal, No Social Media, No Online Listings ///<br /><br />Broadoaks is a new residential community in the hear of affluent Solihull (B91). Its combination of refined living and casual elegance connects past, present and future.<br /><br />A unique find in today&rsquo;s property market, Broadoaks provides contemporary modern living in the heart of one of the UK&rsquo;s most desirable places to live - offering you the choice of a town or country lifestyle.<br />Broadoaks Phase 3 is an intimate collection of 96 contemporary styled residences situated within a secluded setting in the sophisticated haven of Solihull. Set apart but within easy reach of the town centre, these private apartments are crafted for the individual, making them perfect for a new generation of aspiring homeowners.<br /><br />Development Address: Broadoaks, Streetsbrook Road, Solihull B91 1QY</p>', NULL, NULL, 'broadoaks-phase-3', NULL, 'null', NULL, 'Fast Selling', 'Yes', '195000', '5000', '1, 2 and 3 beds', NULL, NULL, NULL, 'Solihull', 'Completed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 16:39:51', '2022-07-07 16:39:51'),
(14, NULL, 'Project', 'APEX Lofts', NULL, NULL, NULL, 'A brand new design-focussed development of 80 stunning high quality apartments located in the centre of Birmingham.', NULL, '<p>A brand new design-focussed development of 80 stunning high quality apartments located in the centre of Birmingham.<br /><br />Apex Lofts has been designed with a core focus on occupier demand, through architectural innovation, pioneering integration and exceptional specification. The building, which offers a selection of well-designed one bedroom, two bedroom and duplex apartments is arranged over nine levels, providing stunning views over Birmingham&rsquo;s iconic skyline. Cutting edge features have been incorporated into the design of Apex Lofts, such as the contemporary &rsquo;Saw Tooth&rsquo; roof, reflectant of the industrial heritage of the area. Facilities offered in the development include cycle store, residents gym and rooftop garden.<br /><br /><br />Development Address: 50 Warwick Street, Birmingham, B12 0NH</p>', NULL, NULL, 'apex-lofts', NULL, 'null', NULL, 'Fast Selling', 'Yes', '219330', '5000', '25 x 1 bed; 31 x 2 beds; 14 Duplex', NULL, NULL, NULL, 'Birmingham', 'Aug 2022.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 16:53:24', '2022-07-07 16:53:24'),
(15, NULL, 'Project', 'Silk Works', NULL, NULL, NULL, 'The Silk Works, a former historic textiles factory, has been transformed into 58 well-designed stylish one and two bedroom apartments with modern and luxurious finishes. Located in the north of Coventry this area is long celebrated for its revolutionary textiles and silk ribbon industry.', NULL, '<p>58 ONE AND TWO BEDROOM APARTMENTS IN A RESTORED TEXTILES FACTORY WITH MODERN AND LUXURIOUS FINISHES<br /><br />The Silk Works, a former historic textiles factory, has been transformed into 58 well-designed stylish one and two bedroom apartments with modern and luxurious finishes. Located in the north of Coventry this area is long celebrated for its revolutionary textiles and silk ribbon industry. The local area is a haven of multiculturalism, and cultural attractions. Amidst by a variety of transport links, each apartment at The Silk Works features spacious living quarters, first-class amenities and is a short distance away from Coventry City Centre. The building has kept its original fabric, but the new modern interior now tells a different story.<br /><br /><br />&bull; Prime City Centre Location<br />&bull; Mix of One Bed, Two Bed Apartments<br />&bull; Highly Refined and Luxurious Specifications<br />&bull; Historic Textile Factory Conversion</p>', NULL, NULL, 'silk-works', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2432.8110872257403!2d-1.5017681841959394!3d52.42822057979692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48774bf2e821ba8f%3A0x2bb51b6979bbd682!2sFoleshill%20Rd%2C%20Coventry%2C%20UK!5e0!3m2!1sen!2ske!4v1657224980397!5m2!1sen!2ske\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'null', NULL, 'Fast Selling', 'Yes', '125000', '5000', '58 units (42 x 1 bed; 16 x 2 beds)', NULL, NULL, NULL, 'Coventry', 'Completed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 17:16:52', '2022-07-07 17:16:52'),
(16, NULL, 'Project', 'Phoenix', NULL, NULL, NULL, 'Situated on Newmarket Road, the primary eastern route into the City Centre, the development offers fast and easy access by bike, car or on foot to Cambridge’s acclaimed University, thriving employment hubs and a vast range of attractions and menities.', NULL, '<p>Situated on Newmarket Road, the primary eastern route into the City Centre, the development offers fast and easy access by bike, car or on foot to Cambridge&rsquo;s acclaimed University, thriving employment hubs and a vast range of<br />attractions and amenities.<br />The stylish part three-storey, part five-storey new<br />apartment building is set back from the road and boasts a full height glazed entrance that leads to thirteen residences; ten one-bedroom apartments, one two-bedroom apartment and two three-bedroom duplexes.<br /><br />&bull; One of the most beautiful cities in the world (Forbes, 2010)<br />&bull; Thirteen residences; ten one-bedroom apartments, one two-bedroom apartment and two two-bedroom duplexes<br />&bull; Prime Central Location<br />&bull; Phoenix is a rare opportunity to secure a high-quality<br />home in a truly desirable location.<br /><br />Address: Newmarket Road Cambridge CB5 8JL</p>', NULL, NULL, 'phoenix', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.785979904525!2d0.14432201579598292!3d52.210936679756834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d87020133d56f9%3A0xc83d933ddad38230!2sNewmarket%20Rd%2C%20Cambridge%20CB5%208JL%2C%20UK!5e0!3m2!1sen!2ske!4v1657225895565!5m2!1sen!2ske\" width=\"100%\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'null', NULL, 'Fast Selling', 'Yes', '350000', '5000', '1, 2 bed and 3 bed Duplexes', NULL, NULL, NULL, 'Cambridge', 'Q3 2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 17:32:25', '2022-07-07 17:32:25'),
(17, NULL, 'Project', 'Pavilion Wharf', NULL, NULL, NULL, 'Pavilion Wharf comprises one, two and three-bedroom contemporary apartments all designed to the highest standard to provide residents with luxury waterside living.', NULL, '<p>Pavilion Wharf comprises one, two and three-bedroom contemporary apartments all designed to the highest standard to provide residents with luxury waterside living.<br /><br />Pavilion offers a comprehensive suite of on-site amenities to allow residents to enjoy a twenty-first-century city lifestyle to the full.<br />A gymnasium, residents&rsquo; lounge, coworking space, concierge services, a dedicated post room and secure car parking as well as cycle storage, provides the reward for living in one of the UK&rsquo;s most dynamic cities.<br />To indulge in quieter moments, residents benefit from an additional garden terrace on which to relax overlooking the river and to enjoy their own private outside space away from the bustle of modern city life.<br />An excellent range of local shops, bars and restaurants can be found within walking distance or easy bike ride.<br /><br />&bull; High-specification 17 storey building with 1, 2 &amp; 3-bed apartments<br />&bull; 160 stunning waterside apartments with impressive city and water views.<br />&bull; Surrounded by high-quality public realm, including a new landscaped area with a tree lined boulevard, public square and seating steps overlooking the River Irwell.<br />&bull; A gymnasium, residents&rsquo; lounge, coworking space, concierge services</p>', NULL, NULL, 'pavilion-wharf', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.6439442960823!2d-2.2673235841567085!3d53.47482318000617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bae1fcbf0969f%3A0xf72b52fbd35bb2e8!2sDerwent%20St%2C%20Salford%2C%20UK!5e0!3m2!1sen!2ske!4v1657226409633!5m2!1sen!2ske\" width=\"100%\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'null', NULL, 'Fast Selling', 'Yes', '179950', '5000', '1, 2 and 3 bed', NULL, NULL, NULL, 'Manchester', 'Q3 2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 17:41:09', '2022-07-07 17:41:09'),
(18, NULL, 'Project', 'Urban Green', NULL, NULL, NULL, 'Urban Green is a stunning new luxury development in one of Manchester’s most exciting up-and-coming areas.\r\nComprised of 174 one- and two-bedroom apartments, this building offers a high-end lifestyle and all the convenience of city-centre living at a more affordable price.', NULL, '<p>Urban Green is a stunning new luxury development in one of Manchester&rsquo;s most exciting up-and-coming areas.<br />Comprised of 174 one- and two-bedroom apartments, this building offers a high-end lifestyle and all the convenience of city-centre living at a more affordable price.<br /><br />This secure community has been designed by award winning architects and is ideal for first-time buyers and families looking to live in a convenient location with outstanding transport links, educational institutions and proximity to some of Manchester&rsquo;s finest green spaces and sports venues.</p>', NULL, NULL, 'urban-green', NULL, 'null', NULL, 'Fast Selling', 'Yes', '169000', '5000', 'Studios, 1 and 2 beds', NULL, NULL, NULL, 'Manchester', 'Q4 2023', '4060', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 17:51:34', '2022-08-13 13:13:08'),
(19, NULL, 'Project', 'BluLiving', NULL, NULL, NULL, 'Bluliving Bracknell offers stylish town centre living in a regenerated Bracknell, the new hub of the south east.\r\nThis stylish residential development presents an exceptional opportunity to invest in a rapidly improving region.\r\nErgonomically designed studio to three-bedroom apartments will embrace the best of modern living in harmony with sleek interior design and high quality finishing.', NULL, '<p>Bluliving Bracknell offers stylish town centre living in a regenerated Bracknell, the new hub of the south east.<br /><br />This stylish residential development presents an exceptional opportunity to invest in a rapidly improving region.<br />Ergonomically designed studio to three-bedroom apartments will embrace the best of modern living in harmony with sleek interior design and high quality finishing.<br />BluLiving Bracknell will contain 121 apartments arranged across three buildings. Community space and the level of interior design will make BluLiving Bracknell stand apart from other developments in the region.<br /><br />A dedicated social and community app for residents will double as a remote control for the exciting smart technology being implemented in the apartments.</p>', '484', NULL, 'bluliving', NULL, 'null', NULL, 'Fast Selling', 'Yes', '225000', '5000', '1 and 2 beds', NULL, NULL, NULL, 'Bracknell', 'Completed', '3000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 17:57:14', '2022-07-13 17:53:48'),
(21, 18, NULL, '102', NULL, NULL, NULL, NULL, '1', NULL, '737	', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '247905', NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, '336', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-11 07:20:05', '2022-08-13 12:37:21'),
(22, 18, NULL, '112', NULL, NULL, NULL, NULL, '1', NULL, '707', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '249482', NULL, NULL, '2', '', NULL, NULL, NULL, NULL, '353', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-11 07:20:57', '2022-08-13 12:55:37'),
(23, 17, NULL, '104', NULL, NULL, NULL, NULL, '1st', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '292074', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '407', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(24, 17, NULL, '105', NULL, NULL, NULL, NULL, '1st', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '306219', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '395', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(25, 17, NULL, '110', NULL, NULL, NULL, NULL, '1st', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '302375', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '390', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(26, 17, NULL, '201', NULL, NULL, NULL, NULL, '2nd', NULL, '975', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '0', NULL, NULL, NULL, NULL, '363', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(27, 17, NULL, '202', NULL, NULL, NULL, NULL, '2nd', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '197825', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '467', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(28, 17, NULL, '203', NULL, NULL, NULL, NULL, '2nd', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '197825', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '467', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(29, 17, NULL, '204', NULL, NULL, NULL, NULL, '2nd', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '300325', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '418', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(30, 17, NULL, '205', NULL, NULL, NULL, NULL, '2nd', NULL, '555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '238056', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '429', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(31, 17, NULL, '206', NULL, NULL, NULL, NULL, '2nd', NULL, '975', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '369000', NULL, NULL, '3', '0', NULL, NULL, NULL, NULL, '378', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(32, 17, NULL, '209', NULL, NULL, NULL, NULL, '2nd', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '300325', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '418', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(33, 17, NULL, '210', NULL, NULL, NULL, NULL, '2nd', NULL, '555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '230625', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '416', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(34, 17, NULL, '301', NULL, NULL, NULL, NULL, '3rd', NULL, '975', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '358750', NULL, NULL, '3', '0', NULL, NULL, NULL, NULL, '368', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(35, 17, NULL, '306', NULL, NULL, NULL, NULL, '3rd', NULL, '975', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '374125', NULL, NULL, '3', '0', NULL, NULL, NULL, NULL, '384', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(36, 17, NULL, '401', NULL, NULL, NULL, NULL, '4th', NULL, '975', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '363875', NULL, NULL, '3', '0', NULL, NULL, NULL, NULL, '373', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(37, 17, NULL, '402', NULL, NULL, NULL, NULL, '4th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '205448', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '485', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(38, 17, NULL, '403', NULL, NULL, NULL, NULL, '4th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '205448', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '485', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(39, 17, NULL, '404', NULL, NULL, NULL, NULL, '4th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '303913', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(40, 17, NULL, '405', NULL, NULL, NULL, NULL, '4th', NULL, '555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '243225', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '438', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(41, 17, NULL, '406', NULL, NULL, NULL, NULL, '4th', NULL, '975', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '379250', NULL, NULL, '3', '0', NULL, NULL, NULL, NULL, '389', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(42, 17, NULL, '407', NULL, NULL, NULL, NULL, '4th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '211916', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(43, 17, NULL, '408', NULL, NULL, NULL, NULL, '4th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '211916', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(44, 17, NULL, '409', NULL, NULL, NULL, NULL, '4th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '303913', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(45, 17, NULL, '410', NULL, NULL, NULL, NULL, '4th', NULL, '555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '235721', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '425', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(46, 17, NULL, '501', NULL, NULL, NULL, NULL, '5th', NULL, '975', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '369000', NULL, NULL, '3', '0', NULL, NULL, NULL, NULL, '369', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(47, 17, NULL, '506', NULL, NULL, NULL, NULL, '5th', NULL, '975', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '384375', NULL, NULL, '3', '0', NULL, NULL, NULL, NULL, '394', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(48, 17, NULL, '604', NULL, NULL, NULL, NULL, '6th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '303913', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(49, 17, NULL, '605', NULL, NULL, NULL, NULL, '6th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '316725', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '408', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(50, 17, NULL, '610', NULL, NULL, NULL, NULL, '6th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '306219', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '395', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(51, 17, NULL, '701', NULL, NULL, NULL, NULL, '7th', NULL, '737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '303913', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '412', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(52, 17, NULL, '704', NULL, NULL, NULL, NULL, '7th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '307500', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '428', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(53, 17, NULL, '705', NULL, NULL, NULL, NULL, '7th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '320569', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '413', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(54, 17, NULL, '706', NULL, NULL, NULL, NULL, '7th', NULL, '737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '313650', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '426', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(55, 17, NULL, '709', NULL, NULL, NULL, NULL, '7th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '307500', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '428', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(56, 17, NULL, '710', NULL, NULL, NULL, NULL, '7th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '310319', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '400', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(57, 17, NULL, '801', NULL, NULL, NULL, NULL, '8th', NULL, '737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '305194', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '414', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(58, 17, NULL, '803', NULL, NULL, NULL, NULL, '8th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '213210', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '503', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(59, 17, NULL, '804', NULL, NULL, NULL, NULL, '8th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '307500', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '428', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(60, 17, NULL, '805', NULL, NULL, NULL, NULL, '8th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '320569', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '413', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(61, 17, NULL, '806', NULL, NULL, NULL, NULL, '8th', NULL, '737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '315188', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '428', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(62, 17, NULL, '807', NULL, NULL, NULL, NULL, '8th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '217609', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '513', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(63, 17, NULL, '808', NULL, NULL, NULL, NULL, '8th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '217609', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '513', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(64, 17, NULL, '809', NULL, NULL, NULL, NULL, '8th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '307500', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '428', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(65, 17, NULL, '810', NULL, NULL, NULL, NULL, '8th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '310319', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '400', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(66, 17, NULL, '901', NULL, NULL, NULL, NULL, '9th', NULL, '737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '306731', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '416', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(67, 17, NULL, '902', NULL, NULL, NULL, NULL, '9th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '215021', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '507', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(68, 17, NULL, '903', NULL, NULL, NULL, NULL, '9th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '215021', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '507', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(69, 17, NULL, '904', NULL, NULL, NULL, NULL, '9th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '307500', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '428', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(70, 17, NULL, '905', NULL, NULL, NULL, NULL, '9th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '320569', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '413', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(71, 17, NULL, '906', NULL, NULL, NULL, NULL, '9th', NULL, '737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '315956', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '429', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(72, 17, NULL, '907', NULL, NULL, NULL, NULL, '9th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '219161', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '517', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(73, 17, NULL, '908', NULL, NULL, NULL, NULL, '9th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '219161', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '517', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(74, 17, NULL, '909', NULL, NULL, NULL, NULL, '9th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '307500', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '428', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(75, 17, NULL, '910', NULL, NULL, NULL, NULL, '9th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '310319', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '400', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(76, 17, NULL, '1001', NULL, NULL, NULL, NULL, '10th', NULL, '737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '313650', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '426', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(77, 17, NULL, '1004', NULL, NULL, NULL, NULL, '10th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '314163', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '438', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(78, 17, NULL, '1005', NULL, NULL, NULL, NULL, '10th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '328769', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(79, 17, NULL, '1010', NULL, NULL, NULL, NULL, '10th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '322106', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '415', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(80, 17, NULL, '1104', NULL, NULL, NULL, NULL, '11th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '314163', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '438', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(81, 17, NULL, '1105', NULL, NULL, NULL, NULL, '11th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '331844', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '428', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(82, 17, NULL, '1106', NULL, NULL, NULL, NULL, '11th', NULL, '737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '322619', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '438', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(83, 17, NULL, '1110', NULL, NULL, NULL, NULL, '11th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '322106', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '415', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(84, 17, NULL, '1201', NULL, NULL, NULL, NULL, '12th', NULL, '737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '313650', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '426', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(85, 17, NULL, '1205', NULL, NULL, NULL, NULL, '12th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '322106', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '421', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(86, 17, NULL, '1209', NULL, NULL, NULL, NULL, '12th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '314163', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '438', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(87, 17, NULL, '1210', NULL, NULL, NULL, NULL, '12th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '322106', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '415', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(88, 17, NULL, '1301', NULL, NULL, NULL, NULL, '13th', NULL, '737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '321081', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '436', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(89, 17, NULL, '1302', NULL, NULL, NULL, NULL, '13th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '217350', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '513', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(90, 17, NULL, '1303', NULL, NULL, NULL, NULL, '13th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '217350', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '513', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(91, 17, NULL, '1304', NULL, NULL, NULL, NULL, '13th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '321594', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '448', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(92, 17, NULL, '1305', NULL, NULL, NULL, NULL, '13th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '339788', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '438', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(93, 17, NULL, '1306', NULL, NULL, NULL, NULL, '13th', NULL, '737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '330306', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '448', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(94, 17, NULL, '1307', NULL, NULL, NULL, NULL, '13th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '222525', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '525', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(95, 17, NULL, '1308', NULL, NULL, NULL, NULL, '13th', NULL, '424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '222525', NULL, NULL, '1', '0', NULL, NULL, NULL, NULL, '525', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(96, 17, NULL, '1309', NULL, NULL, NULL, NULL, '13th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '321594', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '448', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(97, 17, NULL, '1310', NULL, NULL, NULL, NULL, '13th', NULL, '776', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '330050', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '425', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(98, 17, NULL, '1404', NULL, NULL, NULL, NULL, '14th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '321594', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '448', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(99, 17, NULL, '1409', NULL, NULL, NULL, NULL, '14th', NULL, '718', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '313750', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '437', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-24 07:46:18', '2022-08-24 07:46:18'),
(100, 19, NULL, '4', NULL, NULL, NULL, NULL, '3', NULL, '446', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '229500', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '515', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-08 03:50:24', '2022-10-31 18:43:58'),
(101, NULL, 'Project', 'Boulevard', NULL, NULL, NULL, NULL, NULL, '<p>Open the door to a new chapter of luxury living and scale the heights, all from the comfort of your own home. Welcome to Birmingham&rsquo;s premier new neighbourhood! Centrally located in the heart of Birmingham&rsquo;s Southside, Boulevard provides 145 beautifully designed apartments woven into the city&rsquo;s Cultural Quarter. A great place to enjoy a fusion of city living, dining and the arts.<br /><br />Boulevard offers a comprehensive suite of on-site amenities including a gymnasium, residents lounges, concierge services, a dedicated concierge and secure car parking as well as cycle storage provides the reward for living in one of the UK&rsquo;s most dynamic cities. Residents benefit from a large modern gardens on which to relax and to enjoy their own private outside space away from the bustle of modern city life.<br /><br />Residents can easily access Birmingham city centre by foot and are well connected by public transport with frequent bus services throughout the day.<br />An excellent range of local shops, bars and restaurants can be found within walking distance along Bristol Street, the famous Custard Factory and legendary Arcadian.<br /><br />Development Address: Bristol Street, Birmingham</p>', NULL, NULL, 'boulevard', NULL, 'null', NULL, 'Fast Selling', 'Yes', '199950', '5000', '1 And 2 Beds', NULL, NULL, NULL, 'Birmingham', 'Q4 2024', '4005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:28:04', '2022-10-18 04:08:12'),
(102, 101, NULL, 'A3.00.03', NULL, NULL, NULL, NULL, 'Ground', NULL, '522', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '216264', NULL, NULL, '1 Bed w/ Balcony', '0', NULL, NULL, NULL, NULL, '414', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(103, 101, NULL, 'A1.01.01', NULL, NULL, NULL, NULL, 'First', NULL, '848', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '348176', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '411', '1600', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-11-13 14:52:35'),
(104, 101, NULL, 'A1.01.02', NULL, NULL, NULL, NULL, 'First', NULL, '668', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '296016', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '443', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(105, 101, NULL, 'A3.01.01', NULL, NULL, NULL, NULL, 'First', NULL, '545', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '240540', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '441', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(106, 101, NULL, 'A3.01.04', NULL, NULL, NULL, NULL, 'First', NULL, '691', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '307292', NULL, NULL, '2 Bed w E/S w/ Balcony', '0', NULL, NULL, NULL, NULL, '445', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28');
INSERT INTO `product_information` (`id`, `parentID`, `type`, `product_name`, `stories`, `latitude`, `longitude`, `short_description`, `floor`, `description`, `size`, `year`, `url`, `map`, `amenities`, `item_condition`, `status`, `publish`, `price`, `reservation_fee`, `unit_choices`, `bedrooms`, `bathrooms`, `garadge`, `location`, `completion`, `furniture_pack`, `price_per_sqf`, `rent_per_month`, `feature_alert`, `feature_color`, `mortgage_type`, `mortgage_lending_value`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(107, 101, NULL, 'A1.02.01', NULL, NULL, NULL, NULL, 'Second', NULL, '848', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '350176', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '413', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(108, 101, NULL, 'A1.02.04', NULL, NULL, NULL, NULL, 'Second', NULL, '722', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '318664', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '441', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(109, 101, NULL, 'A1.02.06', NULL, NULL, NULL, NULL, 'Second', NULL, '655', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '291860', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '446', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(110, 101, NULL, 'A2.02.01', NULL, NULL, NULL, NULL, 'Second', NULL, '426', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '199950', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '469', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(111, 101, NULL, 'A3.02.02', NULL, NULL, NULL, NULL, 'Second', NULL, '676', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '306112', NULL, NULL, '2', '0', NULL, NULL, NULL, NULL, '453', '1325', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-11-01 07:55:55'),
(112, 101, NULL, 'A3.02.03', NULL, NULL, NULL, NULL, 'Second', NULL, '436', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '214232', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '491', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(113, 101, NULL, 'A3.02.09', NULL, NULL, NULL, NULL, 'Second', NULL, '746', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '332952', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '446', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(114, 101, NULL, 'A1.03.01', NULL, NULL, NULL, NULL, 'Third', NULL, '848', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '352176', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '415', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(115, 101, NULL, 'A1.03.04', NULL, NULL, NULL, NULL, 'Third', NULL, '722', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '320664', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(116, 101, NULL, 'A2.03.01', NULL, NULL, NULL, NULL, 'Third', NULL, '426', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '207112', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '486', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(117, 101, NULL, 'A3.03.01', NULL, NULL, NULL, NULL, 'Third', NULL, '545', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '244540', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '449', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(118, 101, NULL, 'A3.03.04', NULL, NULL, NULL, NULL, 'Third', NULL, '691', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '311292', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '450', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(119, 101, NULL, 'A3.03.07', NULL, NULL, NULL, NULL, 'Third', NULL, '674', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '298088', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '442', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(120, 101, NULL, 'A3.03.08', NULL, NULL, NULL, NULL, 'Third', NULL, '522', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '233264', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '447', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(121, 101, NULL, 'A1.04.04', NULL, NULL, NULL, NULL, 'Fourth', NULL, '668', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '302016', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '452', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(122, 101, NULL, 'A1.04.05', NULL, NULL, NULL, NULL, 'Fourth', NULL, '722', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '322664', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '447', '1395', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-11-02 08:55:51'),
(123, 101, NULL, 'A3.04.03', NULL, NULL, NULL, NULL, 'Fourth', NULL, '436', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '218232', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '501', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(124, 101, NULL, 'A3.04.04', NULL, NULL, NULL, NULL, 'Fourth', NULL, '691', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '313292', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '453', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(125, 101, NULL, 'A3.04.08', NULL, NULL, NULL, NULL, 'Fourth', NULL, '522', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '244264', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '468', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(126, 101, NULL, 'A3.04.09', NULL, NULL, NULL, NULL, 'Fourth', NULL, '746', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '336952', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '452', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(127, 101, NULL, 'A1.05.05', NULL, NULL, NULL, NULL, 'Fifth', NULL, '722', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '324664', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '450', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(128, 101, NULL, 'A3.05.01', NULL, NULL, NULL, NULL, 'Fifth', NULL, '543', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '251516', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '463', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(129, 101, NULL, 'A3.05.04', NULL, NULL, NULL, NULL, 'Fifth', NULL, '691', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '315292', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(130, 101, NULL, 'A3.05.09', NULL, NULL, NULL, NULL, 'Fifth', NULL, '746', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '338952', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '454', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(131, 101, NULL, 'A1.06.07', NULL, NULL, NULL, NULL, 'Sixth', NULL, '655', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '292860', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '447', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(132, 101, NULL, 'A1.07.01', NULL, NULL, NULL, NULL, 'Seventh', NULL, '495', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '225940', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(133, 101, NULL, 'A1.07.05', NULL, NULL, NULL, NULL, 'Seventh', NULL, '722', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '328664', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '455', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(134, 101, NULL, 'A1.08.02', NULL, NULL, NULL, NULL, 'Eighth', NULL, '427', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '217624', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '510', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(135, 101, NULL, 'A1.08.05', NULL, NULL, NULL, NULL, 'Eighth', NULL, '722', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '330664', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '458', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(136, 101, NULL, 'A1.09.02', NULL, NULL, NULL, NULL, 'Ninth', NULL, '427', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '220124', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '516', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(137, 101, NULL, 'A1.09.05', NULL, NULL, NULL, NULL, 'Ninth', NULL, '722', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '332664', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '461', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(138, 101, NULL, 'A1.10.01', NULL, NULL, NULL, NULL, 'Tenth', NULL, '495', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '231940', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '469', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(139, 101, NULL, 'A1.10.04', NULL, NULL, NULL, NULL, 'Tenth', NULL, '668', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '314016', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '470', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(140, 101, NULL, 'A1.11.02', NULL, NULL, NULL, NULL, 'Eleventh', NULL, '427', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '224124', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '525', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(141, 101, NULL, 'A1.11.03', NULL, NULL, NULL, NULL, 'Eleventh', NULL, '692', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '325804', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '471', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(142, 101, NULL, 'A1.11.05', NULL, NULL, NULL, NULL, 'Eleventh', NULL, '722', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '336664', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '466', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(143, 101, NULL, 'A1.12.01', NULL, NULL, NULL, NULL, 'Twelfth', NULL, '495', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '235940', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '477', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(144, 101, NULL, 'A1.12.05', NULL, NULL, NULL, NULL, 'Twelfth', NULL, '722', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '338664', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '469', '1475', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-11-01 17:00:36'),
(145, 101, NULL, 'A1.13.01', NULL, NULL, NULL, NULL, 'Thirteenth', NULL, '765', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '355000', NULL, NULL, '2 Bed w E/S w/ Balcony', '0', NULL, NULL, NULL, NULL, '464', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(146, 101, NULL, 'A1.14.01', NULL, NULL, NULL, NULL, 'Fourteenth', NULL, '765', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '349180', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(147, 101, NULL, 'A1.14.03', NULL, NULL, NULL, NULL, 'Fourteenth', NULL, '801', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '355612', NULL, NULL, '2 Bed w E/S', '0', NULL, NULL, NULL, NULL, '444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28'),
(148, 101, NULL, 'A1.14.04', NULL, NULL, NULL, NULL, 'Fourteenth', NULL, '551', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '252612', NULL, NULL, '1 Bed', '0', NULL, NULL, NULL, NULL, '458', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-18 03:32:28', '2022-10-18 03:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_inventory`
--

CREATE TABLE `product_inventory` (
  `id` int(11) NOT NULL,
  `productID` int(11) DEFAULT NULL,
  `current_stock` int(11) DEFAULT NULL,
  `reorder_level` int(11) DEFAULT NULL,
  `replenish_level` int(11) DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_media`
--

CREATE TABLE `product_media` (
  `id` int(11) NOT NULL,
  `productID` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `file_size` varchar(100) DEFAULT NULL,
  `file_mime` varchar(100) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `cover` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_media`
--

INSERT INTO `product_media` (`id`, `productID`, `file`, `file_name`, `position`, `file_size`, `file_mime`, `type`, `cover`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 1, NULL, 'KKMd0osilkworks-bedroom.jpg', NULL, '212043', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 14:55:05', '2022-07-06 14:55:05'),
(7, 1, NULL, '12BynUsilkworks-bathroom.jpg', NULL, '253952', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 14:55:06', '2022-07-06 14:55:06'),
(8, 1, NULL, 'pWsqNRsilkworks-kitchen.jpg', NULL, '190224', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-06 14:55:10', '2022-07-06 14:55:24'),
(9, 1, NULL, 'ofBcVVsilkworks-bedroom (1).jpg', NULL, '212043', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 14:55:11', '2022-07-06 14:55:11'),
(10, 2, NULL, 'ruuDGD4.jpg', NULL, '1285126', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 18:24:20', '2022-07-06 18:24:20'),
(11, 2, NULL, 'Eguoas1.jpg', NULL, '1151660', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 18:24:22', '2022-07-06 18:24:22'),
(12, 2, NULL, 'jCwvr24.jpg', NULL, '1285126', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 18:24:30', '2022-07-06 18:24:30'),
(13, 2, NULL, 'XLVtYy4.jpg', NULL, '1285126', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 18:24:33', '2022-07-06 18:24:33'),
(14, 2, NULL, '42teczUrban-Green-Header-1.jpg', NULL, '682435', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-06 18:27:39', '2022-07-06 18:27:44'),
(15, 3, NULL, 'BHkO7P16-1160x684-1.jpg', NULL, '103742', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-06 18:36:25', '2022-07-06 18:36:36'),
(16, 3, NULL, 'uOdx5B25-1160x684-1.jpg', NULL, '120579', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 18:36:27', '2022-07-06 18:36:27'),
(17, 3, NULL, 'Figrzc16-1160x684-1 (1).jpg', NULL, '103742', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 18:36:28', '2022-07-06 18:36:28'),
(18, 3, NULL, 'pbUCz418-1160x684-1.jpg', NULL, '119886', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 18:36:30', '2022-07-06 18:36:30'),
(19, 4, NULL, 'I5us40Court-Collaboration-Ardent-Gate-LWD-3224-62-1.jpg', NULL, '428451', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-06 18:43:04', '2022-07-06 18:43:12'),
(20, 4, NULL, 'Ml9VJG2_JS185382271-1.jpg', NULL, '45562', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 18:43:06', '2022-07-06 18:43:06'),
(21, 4, NULL, 'uBfkLp277391117-2.jpg', NULL, '89020', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 18:43:07', '2022-07-06 18:43:07'),
(22, 4, NULL, '5C6IoA2_JS185382271-1 (1).jpg', NULL, '45562', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 18:43:09', '2022-07-06 18:43:09'),
(23, 5, NULL, 'gyLrPbiw_brochure_march_2019_Page_09_Image_0002.jpg', NULL, '46355', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-06 19:01:19', '2022-07-06 19:01:27'),
(24, 5, NULL, 'VZyVO1iw_brochure_march_2019_Page_13_Image_0002.jpg', NULL, '96761', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 19:01:21', '2022-07-06 19:01:21'),
(25, 5, NULL, 'GvthREiw_brochure_march_2019_Page_07_Image_0001-1.jpg', NULL, '61316', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 19:01:22', '2022-07-06 19:01:22'),
(26, 5, NULL, 'aMYFariw_brochure_march_2019_Page_09_Image_0002 (1).jpg', NULL, '46355', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 19:01:24', '2022-07-06 19:01:24'),
(27, 6, NULL, 'tFxPiIimage00004-e1549475070929.jpeg', NULL, '110103', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 19:19:30', '2022-07-06 19:19:30'),
(28, 6, NULL, 'buuirRimage-0-1024x1024-1.jpg', NULL, '77296', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 19:19:32', '2022-07-06 19:19:32'),
(29, 6, NULL, 'F2Gv0eimage00004-e1549475070929 (1).jpeg', NULL, '110103', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 19:19:33', '2022-07-06 19:19:33'),
(30, 6, NULL, 'jcA1l5Quay-Capital_roma_1-1.png', NULL, '1628263', 'image/png', NULL, 1, NULL, NULL, '2022-07-06 19:19:35', '2022-07-06 19:19:47'),
(31, 6, NULL, '4Qikdtimage-0-1024x1024-1 (1).jpg', NULL, '77296', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 19:19:37', '2022-07-06 19:19:37'),
(32, 7, NULL, 'xrJaOltobacco-warehouse-oct2019-156.jpg', NULL, '193087', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 19:34:28', '2022-07-06 19:34:28'),
(33, 7, NULL, 'qKScRktobacco-warehouse-oct2019-83.jpg', NULL, '158373', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 19:34:30', '2022-07-06 19:34:30'),
(34, 7, NULL, 'PD0Z9Stobacco-warehouse-oct2019-103.jpg', NULL, '202833', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-06 19:34:31', '2022-07-06 19:34:38'),
(35, 7, NULL, 'xgfraZtobacco-warehouse-oct2019-156 (1).jpg', NULL, '193087', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-06 19:34:33', '2022-07-06 19:34:33'),
(36, 8, NULL, 'UPiJeS010.jpg', NULL, '51082', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:02:58', '2022-07-07 08:02:58'),
(37, 8, NULL, 'fq7oid009.jpg', NULL, '122527', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:02:58', '2022-07-07 08:02:58'),
(38, 8, NULL, 'sJn0mJ008.jpg', NULL, '51774', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:03:00', '2022-07-07 08:03:00'),
(39, 8, NULL, 'Zy6yAx007.jpg', NULL, '28972', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:03:01', '2022-07-07 08:03:01'),
(40, 8, NULL, 'wPgI300061.jpg', NULL, '37942', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:03:01', '2022-07-07 08:03:01'),
(41, 8, NULL, 'eyltqJ0051.jpg', NULL, '70000', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:03:02', '2022-07-07 08:03:02'),
(42, 8, NULL, 'Y4BEuj0041.jpg', NULL, '256332', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:03:02', '2022-07-07 08:03:02'),
(43, 8, NULL, '7aB6dL0031.jpg', NULL, '175456', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-07 08:03:02', '2022-07-07 08:03:27'),
(44, 8, NULL, 'hYheAG0011.jpg', NULL, '152788', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:03:02', '2022-07-07 08:03:02'),
(45, 8, NULL, '4fIV5Z002.jpg', NULL, '191888', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:03:02', '2022-07-07 08:03:02'),
(51, 9, NULL, 'c6Nl8oPriory_House_Showhome_-_by_Ralph_Media_Group_09118.jpg', NULL, '1273631', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:21:24', '2022-07-07 08:21:24'),
(53, 10, NULL, 'WnGYEhMeadowlane_3.10_Riverside_View_RGB_Web.jpg', NULL, '1498482', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:28:24', '2022-07-07 08:28:24'),
(59, 11, NULL, 'Fm9haY9.jpg', NULL, '218382', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:58:34', '2022-07-07 08:58:34'),
(60, 11, NULL, 'npEkGR8.jpg', NULL, '93061', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:58:35', '2022-07-07 08:58:35'),
(61, 11, NULL, 'YBxuN871.jpg', NULL, '228260', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:58:35', '2022-07-07 08:58:35'),
(62, 11, NULL, '8Tuvdq61.jpg', NULL, '96454', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:58:41', '2022-07-07 08:58:41'),
(63, 11, NULL, 'cfPbCf42.jpg', NULL, '436182', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-07 08:58:41', '2022-07-07 08:58:45'),
(64, 11, NULL, 'PA25VX12.jpg', NULL, '293812', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 08:58:41', '2022-07-07 08:58:41'),
(70, 13, NULL, 'otvDksCGI_2.png', NULL, '652489', 'image/png', NULL, 1, NULL, NULL, '2022-07-07 16:43:16', '2022-07-07 16:43:28'),
(71, 13, NULL, 'vSsRMpRMG02439.jpg', NULL, '727516', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:17', '2022-07-07 16:43:17'),
(72, 13, NULL, '1wxMTMRMG02436.jpg', NULL, '529308', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:17', '2022-07-07 16:43:17'),
(73, 13, NULL, 'qHIxWaRMG02435.jpg', NULL, '767350', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:17', '2022-07-07 16:43:17'),
(74, 13, NULL, 'rqhBtwRMG02434.jpg', NULL, '632828', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:17', '2022-07-07 16:43:17'),
(75, 13, NULL, 'POyyQaRMG02433.jpg', NULL, '626515', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:17', '2022-07-07 16:43:17'),
(76, 13, NULL, '4ZfFjIRMG02431.jpg', NULL, '854706', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:17', '2022-07-07 16:43:17'),
(77, 13, NULL, 'fpQdZWRMG02430.jpg', NULL, '535472', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:17', '2022-07-07 16:43:17'),
(78, 13, NULL, 'Ddc7dlRMG02428.jpg', NULL, '573837', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:18', '2022-07-07 16:43:18'),
(79, 13, NULL, 'BAkedrRMG02427.jpg', NULL, '481563', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:18', '2022-07-07 16:43:18'),
(80, 13, NULL, 'WKOZMpRMG02426.jpg', NULL, '959041', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:18', '2022-07-07 16:43:18'),
(81, 13, NULL, 'c5dfAlRMG02424.jpg', NULL, '1240139', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:18', '2022-07-07 16:43:18'),
(82, 13, NULL, 'L8iXZpRMG02421.jpg', NULL, '593451', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:18', '2022-07-07 16:43:18'),
(83, 13, NULL, 'z5HsA8RMG02418.jpg', NULL, '858026', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:18', '2022-07-07 16:43:18'),
(84, 13, NULL, '2euscMRMG02416.jpg', NULL, '848151', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:43:19', '2022-07-07 16:43:19'),
(85, 14, NULL, 'x6g22MApex_Lofts_Fountain_Lofts_Internal_Bed_Apex_Lofts_02.jpg', NULL, '200399', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:56:09', '2022-07-07 16:56:09'),
(86, 14, NULL, 'wE8pFcApex_Lofts_Fountain_Lofts_Internal_Bed_Apex_Lofts_01_3.jpg', NULL, '170144', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:56:09', '2022-07-07 16:56:09'),
(87, 14, NULL, 'zZgEkyApex_Lofts___Fountain_Lofts_Internal_longe_Apex_Lofts_02.jpg', NULL, '1235808', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 16:56:10', '2022-07-07 16:56:10'),
(88, 14, NULL, 'n2WUKkApex_Lofts___Fountain_Lofts_Internal_longe_Apex_Lofts_01.jpg', NULL, '1665403', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-07 16:56:10', '2022-07-20 14:33:40'),
(90, 15, NULL, 'X7YQ9pSilk-Works---Showroom-17.jpg', NULL, '270111', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:49', '2022-07-07 17:20:49'),
(91, 15, NULL, 'PVqgMxSilk-Works---Showroom-16.jpg', NULL, '270111', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:49', '2022-07-07 17:20:49'),
(92, 15, NULL, 'zLsf4XSilk-Works---Showroom-15.jpg', NULL, '276325', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:49', '2022-07-07 17:20:49'),
(93, 15, NULL, 'QhrziESilk-Works---Showroom-14.jpg', NULL, '268835', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:49', '2022-07-07 17:20:49'),
(94, 15, NULL, 'nhBvQVSilk-Works---Showroom-12.jpg', NULL, '195730', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:50', '2022-07-07 17:20:50'),
(95, 15, NULL, 'yFSOY1Silk-Works---Showroom-11.jpg', NULL, '211706', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:50', '2022-07-07 17:20:50'),
(96, 15, NULL, '75vVhkSilk-Works---Showroom-10.jpg', NULL, '197087', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:50', '2022-07-07 17:20:50'),
(97, 15, NULL, '2MAVJ6Silk-Works---Showroom-09.jpg', NULL, '213199', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:50', '2022-07-07 17:20:50'),
(98, 15, NULL, 'q7dqhZSilk-Works---Showroom-08.jpg', NULL, '219126', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:50', '2022-07-07 17:20:50'),
(99, 15, NULL, 'o8ftCxSilk-Works---Showroom-07.jpg', NULL, '229565', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:51', '2022-07-07 17:20:51'),
(100, 15, NULL, 't4RQIIplot_43_enquite.jpg', NULL, '1628198', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:52', '2022-07-07 17:20:52'),
(101, 15, NULL, 'mSDqkuplot_44_lounge.jpg', NULL, '1405932', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:52', '2022-07-07 17:20:52'),
(102, 15, NULL, 'K81R7CSilkWorks-02.jpg', NULL, '259470', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:52', '2022-07-07 17:20:52'),
(103, 15, NULL, 'VZJIIHSilkWorks-03.jpg', NULL, '521380', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:52', '2022-07-07 17:20:52'),
(104, 15, NULL, 'kqJGURSilkWorks-04.jpg', NULL, '383235', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:53', '2022-07-07 17:20:53'),
(105, 15, NULL, 'c37F0xSilkWorks-05.jpg', NULL, '498965', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:53', '2022-07-07 17:20:53'),
(106, 15, NULL, '0YIKY4Silk-Works---Showroom-01.jpg', NULL, '173322', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:53', '2022-07-07 17:20:53'),
(107, 15, NULL, 'BDDcGQSilk-Works---Showroom-06.jpg', NULL, '216551', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:53', '2022-07-07 17:20:53'),
(108, 15, NULL, 'L8sg8iSilk-Works---Showroom-05.jpg', NULL, '216551', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:53', '2022-07-07 17:20:53'),
(109, 15, NULL, 'uSOd8JSilk-Works---Showroom-04.jpg', NULL, '255693', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:53', '2022-07-07 17:20:53'),
(110, 15, NULL, 'UESqiDSilk-Works---Showroom-03.jpg', NULL, '248956', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:53', '2022-07-07 17:20:53'),
(111, 15, NULL, 'IQOF3YSilk-Works---Showroom-02.jpg', NULL, '183644', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:20:54', '2022-07-07 17:20:54'),
(112, 15, NULL, 'nWWGH5SilkWorks-01.jpg', NULL, '1318158', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-07 17:20:54', '2022-07-07 17:21:30'),
(113, 16, NULL, 'NSkV5t43.jpg', NULL, '34320', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:33:20', '2022-07-07 17:33:20'),
(114, 16, NULL, 'gsWf0w33.jpg', NULL, '22117', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:33:20', '2022-07-07 17:33:20'),
(115, 16, NULL, 'F19TkN22.jpg', NULL, '62994', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:33:20', '2022-07-07 17:33:20'),
(116, 16, NULL, 'gEyrVEphoenix.jpg', NULL, '390789', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-07 17:33:21', '2022-07-07 17:33:24'),
(117, 17, NULL, '39ZXBYPHOTO-2022-05-28-19-38-211.jpg', NULL, '110635', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:44:12', '2022-07-07 17:44:12'),
(118, 17, NULL, '2jPJQWPHOTO-2022-05-28-19-38-011.jpg', NULL, '99769', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:44:12', '2022-07-07 17:44:12'),
(119, 17, NULL, 'y5YvrgPHOTO-2022-05-28-19-37-421.jpg', NULL, '138205', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:44:12', '2022-07-07 17:44:12'),
(120, 17, NULL, 'gkAXO0PHOTO-2022-05-28-19-37-221.jpg', NULL, '79974', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:44:12', '2022-07-07 17:44:12'),
(121, 17, NULL, 'cyDVvsPHOTO-2022-05-28-19-37-011.jpg', NULL, '91507', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:44:13', '2022-07-07 17:44:13'),
(122, 17, NULL, 'SuVwHnPHOTO-2022-05-28-19-36-421.jpg', NULL, '84845', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:44:13', '2022-07-07 17:44:13'),
(123, 17, NULL, 'WTyWGUPavilion-Wharf---02.png', NULL, '856681', 'image/png', NULL, 1, NULL, NULL, '2022-07-07 17:44:13', '2022-07-07 17:44:32'),
(124, 17, NULL, '7RFnNNPavilion-Wharf---03.png', NULL, '1483720', 'image/png', NULL, NULL, NULL, NULL, '2022-07-07 17:44:14', '2022-07-07 17:44:14'),
(125, 17, NULL, 'fVolZPPavilion-Wharf---04.png', NULL, '1805911', 'image/png', NULL, NULL, NULL, NULL, '2022-07-07 17:44:14', '2022-07-07 17:44:14'),
(126, 17, NULL, 'YQe8BAPavilion-Wharf---05.png', NULL, '992813', 'image/png', NULL, NULL, NULL, NULL, '2022-07-07 17:44:14', '2022-07-07 17:44:14'),
(127, 17, NULL, 'KRyD5YPavilion-Wharf---01.png', NULL, '1322535', 'image/png', NULL, NULL, NULL, NULL, '2022-07-07 17:44:14', '2022-07-07 17:44:14'),
(128, 18, NULL, 'hIbTJZUrban_Green_-_Living_Area_4.jpg', NULL, '1068176', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:30', '2022-07-07 17:53:30'),
(129, 18, NULL, 't23ind0605_HEATON_URBANGREEN_VIEW01_COLOUR_DRAFT_001.jpg', NULL, '1697814', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-07 17:53:30', '2022-07-07 17:53:39'),
(130, 18, NULL, 'tOeXVgUrban_Green_-_Living_Area_3.jpg', NULL, '1100642', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:31', '2022-07-07 17:53:31'),
(131, 18, NULL, 'VUzLleUrban_Green_-_Living_Area_2.jpg', NULL, '972840', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:31', '2022-07-07 17:53:31'),
(132, 18, NULL, 'ZeUiuyUrban_Green_-_Living_Area_1.jpg', NULL, '861204', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:31', '2022-07-07 17:53:31'),
(133, 18, NULL, '54COsuUrban_Green_-_External_2.jpg', NULL, '1275160', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:31', '2022-07-07 17:53:31'),
(134, 18, NULL, '3WdNhXUrban_Green_-_External_1.jpg', NULL, '1075564', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:31', '2022-07-07 17:53:31'),
(135, 18, NULL, 'CeKSmWUrban_Green_-_Coffee_pod.jpg', NULL, '856544', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:31', '2022-07-07 17:53:31'),
(136, 18, NULL, 'A4gK2uUrban_Green_-_en_Suite.jpg', NULL, '1508586', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:31', '2022-07-07 17:53:31'),
(137, 18, NULL, 'dlP7tlUrban_Green_-_Bedroom_1.jpg', NULL, '1064628', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:32', '2022-07-07 17:53:32'),
(138, 18, NULL, 'eTJeSOUrban_Green_-_Bathroom_2.jpg', NULL, '1354846', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:32', '2022-07-07 17:53:32'),
(139, 18, NULL, 'T8akA5Urban_Green_-_Bathroom_1.jpg', NULL, '1107616', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:32', '2022-07-07 17:53:32'),
(140, 18, NULL, 'Hb3Rl9Urban_Green_-_Balcony.jpg', NULL, '1477490', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:32', '2022-07-07 17:53:32'),
(141, 18, NULL, 'I6PkjfUrban_Green_-_Roof_Terrace.jpg', NULL, '1049211', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-07 17:53:32', '2022-07-07 17:53:32'),
(143, 19, NULL, 'SJbeHGBluLiving,_Bracknell_-_03.jpeg', NULL, '304492', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-07 17:58:59', '2022-07-12 02:13:38'),
(146, 14, NULL, 'TTLV8cZnaB6yA_Dusk1_RGB_color (1) (1).jpg', NULL, '892975', 'image/jpeg', NULL, 0, NULL, NULL, '2022-07-20 14:32:30', '2022-07-20 14:33:39'),
(147, 12, NULL, '5obKSoAxium.jpg', NULL, '1007698', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-20 14:37:02', '2022-07-20 14:37:10'),
(148, 12, NULL, 'tifmqQAxium2.jpg', NULL, '1379686', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 14:43:49', '2022-07-20 14:43:49'),
(149, 12, NULL, 'tAs6QELPobslThe.jpg', NULL, '1071372', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 14:45:24', '2022-07-20 14:45:24'),
(150, 12, NULL, '7Sg5oA2eX3lWThe.jpg', NULL, '979873', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 14:46:27', '2022-07-20 14:46:27'),
(151, 12, NULL, 'NLa9HvPnFpgaThe.jpg', NULL, '797637', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 14:48:23', '2022-07-20 14:48:23'),
(152, 10, NULL, 'tIYDQ712j7OEEdit.jpg', NULL, '1550442', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 14:51:03', '2022-07-20 14:51:03'),
(153, 10, NULL, 'JVxU9xMeadowLane.jpg', NULL, '1397412', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-20 14:52:50', '2022-07-20 14:53:12'),
(154, 10, NULL, 'K0y799LmygHn1.jpg', NULL, '1220216', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 14:55:18', '2022-07-20 14:55:18'),
(155, 10, NULL, '4ml2p94eZDTO180105.jpg', NULL, '1429024', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 14:56:55', '2022-07-20 14:56:55'),
(156, 10, NULL, 'rh3hRyz1NKLM180105.jpg', NULL, '1576490', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 14:57:48', '2022-07-20 14:57:48'),
(157, 9, NULL, 'JAUJhzOM0d2l210215.jpg', NULL, '1537575', 'image/jpeg', NULL, 1, NULL, NULL, '2022-07-20 15:01:13', '2022-07-20 15:08:52'),
(158, 9, NULL, '2L5BXZdkJ1uIPriory.jpg', NULL, '948391', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 15:09:29', '2022-07-20 15:09:29'),
(159, 9, NULL, 'brOPUvgnBr2IPriory.jpg', NULL, '652686', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 15:10:20', '2022-07-20 15:10:20'),
(160, 9, NULL, '8bmtuzUPBtrGPriory.jpg', NULL, '989310', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 15:11:16', '2022-07-20 15:11:16'),
(161, 9, NULL, 'GsYpGv1X9k0cPriory.jpg', NULL, '1112981', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 15:12:12', '2022-07-20 15:12:12'),
(162, 9, NULL, 'pl3HzWoRgH5gPriory.jpg', NULL, '1123932', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 15:12:49', '2022-07-20 15:12:49'),
(163, 9, NULL, 'IW54qfc6Nl8oPriory.jpg', NULL, '1273631', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 15:13:41', '2022-07-20 15:13:41'),
(164, 19, NULL, 'TFeyf2LRzt05BluLiving.jpg', NULL, '379674', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 15:23:22', '2022-07-20 15:23:22'),
(165, 19, NULL, '4NjCdyVu1HefBluLiving.jpeg', NULL, '335469', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 15:24:04', '2022-07-20 15:24:04'),
(166, 19, NULL, 'iRHUSIZedBLkBluLiving.jpeg', NULL, '431120', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-07-20 15:25:04', '2022-07-20 15:25:04'),
(167, 101, NULL, '5MAAyIrMWiV502.jpg', NULL, '794709', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-10-18 03:29:44', '2022-10-18 03:29:44'),
(168, 101, NULL, '7qf65IoPfjNv01asda.jpg', NULL, '815055', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-10-18 03:29:44', '2022-10-18 03:29:44'),
(169, 101, NULL, '6Qj3HQDYqu8r09dqw.jpg', NULL, '1205740', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-10-18 03:29:44', '2022-10-18 03:29:44'),
(170, 101, NULL, 'GQDQcnzUw2ejzxczxczxc.jpg', NULL, '846070', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-10-18 03:29:44', '2022-10-18 03:29:44'),
(171, 101, NULL, '1Ere3aOqUcmO05.jpg', NULL, '865814', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-10-18 03:29:44', '2022-10-18 03:29:44'),
(172, 101, NULL, 'xPx21NwI4psqasdasda.jpg', NULL, '727268', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-10-18 03:29:44', '2022-10-18 03:29:44'),
(173, 101, NULL, 'GvjZX9Wqlr8usadasd.jpg', NULL, '889855', 'image/jpeg', NULL, NULL, NULL, NULL, '2022-10-18 03:29:45', '2022-10-18 03:29:45'),
(174, 101, NULL, 'HJDni58U5gGqbludsad.jpg', NULL, '1010047', 'image/jpeg', NULL, 1, NULL, NULL, '2022-10-18 03:29:45', '2022-10-18 03:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `roi`
--

CREATE TABLE `roi` (
  `id` int(11) NOT NULL,
  `session` text NOT NULL,
  `property_id` int(11) NOT NULL,
  `unitID` int(11) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `company_buy` varchar(100) DEFAULT NULL,
  `live_in` varchar(100) DEFAULT NULL,
  `lease_terms` varchar(100) DEFAULT NULL,
  `purchase_type` varchar(100) DEFAULT NULL,
  `mortgage_rate` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roi`
--

INSERT INTO `roi` (`id`, `session`, `property_id`, `unitID`, `country`, `company_buy`, `live_in`, `lease_terms`, `purchase_type`, `mortgage_rate`, `created_at`, `updated_at`) VALUES
(1, 'ONTuNaGeA2NPUwPe3Vue5Kf1kS4xmCbTk9PrxO9J', 101, 123, 'Czech Republic', 'Yes', 'Yes', 'Airbnb', 'Mortgage', '4.75', '2023-01-06 09:27:04', '2023-01-06 09:27:43'),
(2, '1eHJp8rFozrnYbxLOSO7zgFuy3rf8EAwQJQqyWMi', 101, 127, 'Andorra', 'Yes', 'Yes', 'Long term rent', 'Cash', '4.75', '2023-01-06 12:13:13', '2023-01-06 12:18:42'),
(3, '7h21NetmDf294MlQNBJl8kssKoDpzilYTlYsuj8J', 101, 134, 'Guyana', 'Yes', 'No', 'Long', 'Cash', '4.75', '2023-01-07 10:28:46', '2023-01-07 10:28:46'),
(4, 'NT8XBXiHDpm4wgQaRlJj13ITZPmxUMJaedoLMM4J', 101, 123, 'Vanuatu', 'No', 'Yes', 'Airbnb', 'Cash', '4.75', '2023-01-07 11:24:16', '2023-01-07 11:24:16'),
(5, 'DAmDxkLHujvXoMQGrvvKy7rK0oGUHU7Q6NXYdbyr', 101, 125, 'Uruguay', 'Yes', 'No', 'Long', 'Cash', '4.75', '2023-01-07 11:54:17', '2023-01-07 11:54:17'),
(6, 'asMfKUTaW8BDmH0eDXBLMBka3OgDjpdRy3W49H91', 101, 111, 'Canada', 'No', 'Yes', 'Airbnb', 'Mortgage', '4.75', '2023-01-07 15:19:32', '2023-01-07 15:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `autoload` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `autoload`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'https://cms.zeka.co.ke/public', 'yes', '2020-03-13 17:33:31', '2020-03-13 17:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption_one` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption_two` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption_three` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `caption_one`, `caption_two`, `caption_three`, `url`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'BWaepj.jpg', 'Property You Can Bank On', NULL, NULL, '#', '15', 1, NULL, '2021-03-11 07:34:16', '2022-07-04 13:41:11'),
(2, '6YuTI2.jpg', 'Property You Can Bank On', 'Find your UK investment with the \'5-Star Trust rated\' UK MARKET LEADERS.', NULL, '#', '15', 1, NULL, '2021-03-15 08:40:15', '2022-07-04 13:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `color`, `created_at`, `updated_at`) VALUES
(1, 'paid', NULL, '2017-03-25 21:00:00', '2019-09-18 21:00:00'),
(2, 'unpaid', NULL, '2019-09-18 21:00:00', '2019-05-10 20:55:04'),
(3, 'partially paid', NULL, '2019-09-18 21:00:00', '2019-09-18 21:00:00'),
(4, 'cancelled', NULL, '2019-09-18 21:00:00', '2019-09-18 21:00:00'),
(5, 'overdue', NULL, '2019-09-18 21:00:00', '2019-09-18 21:00:00'),
(6, 'sent', NULL, '2019-05-15 21:00:00', '2019-05-15 21:00:00'),
(7, 'pending', '#49b6d6', '2019-05-15 21:00:00', '2019-05-15 21:00:00'),
(8, 'deleted', NULL, '2019-05-15 21:00:00', '2019-05-15 21:00:00'),
(9, 'remove', NULL, '2019-05-15 21:00:00', '2019-05-15 21:00:00'),
(10, 'draft', NULL, '2019-05-15 21:00:00', '2019-05-15 21:00:00'),
(11, 'expired', NULL, '2019-05-15 21:00:00', '2019-05-15 21:00:00'),
(12, 'declined', NULL, '2019-05-15 21:00:00', '2019-05-15 21:00:00'),
(13, 'accepted', '#468847', '2019-05-15 21:00:00', '2019-05-15 21:00:00'),
(14, 'delivered', NULL, '2019-06-01 21:00:00', '2019-06-01 21:00:00'),
(15, 'active', NULL, '2019-06-09 21:00:00', '2019-06-09 21:00:00'),
(16, 'complete', NULL, '2019-06-15 21:00:00', '2019-06-15 21:00:00'),
(17, 'started', NULL, '2019-07-27 21:00:00', '2019-07-27 21:00:00'),
(18, 'dept', NULL, '2019-08-13 21:00:00', '2019-08-13 21:00:00'),
(19, 'approved', '#468847', '2019-08-16 21:00:00', '2019-08-16 21:00:00'),
(20, 'denied', NULL, '2019-08-16 21:00:00', '2019-08-16 21:00:00'),
(21, 'open', NULL, '2019-09-18 21:00:00', '2019-09-18 21:00:00'),
(22, 'closed', NULL, '2019-09-18 21:00:00', '2019-09-18 21:00:00'),
(23, 'dormant', NULL, '2019-09-25 21:00:00', '2019-09-25 21:00:00'),
(24, 'ongoing', NULL, '2019-10-20 21:00:00', '2019-10-20 21:00:00'),
(25, 'employed', NULL, '2019-10-24 21:00:00', '2019-10-24 21:00:00'),
(26, 'terminated', NULL, '2019-10-24 21:00:00', '2019-10-24 21:00:00'),
(27, 'deceased', NULL, '2019-10-24 21:00:00', '2019-10-24 21:00:00'),
(28, 'resigned', NULL, '2019-10-24 21:00:00', '2019-10-24 21:00:00'),
(29, 'cart', NULL, '2020-03-16 20:56:23', '2020-03-16 20:56:23'),
(30, 'order', NULL, '2020-03-17 18:10:35', '2020-03-17 18:10:35'),
(31, 'published', NULL, '2020-11-23 21:00:00', '2020-11-23 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `userID` int(11) NOT NULL,
  `businessID` int(11) NOT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `position`, `profile_image`, `bio`, `facebook`, `linkedin`, `instagram`, `twitter`, `email`, `video_link`, `status`, `rank`, `created_at`, `updated_at`) VALUES
(1, 'Mark Pearson', 'Founder', 'AOIqVSvkIEaquuENMuFNTSA0IbZjEj.jpg', 'Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.', NULL, NULL, NULL, NULL, NULL, 'Mark.mp4', 'Active', 2, '2022-06-23 18:21:50', '2022-08-18 06:46:42'),
(2, 'James Walsh', 'Head of Sales', '7BUJDEakYvIhVbAPbnblTZG3vK4P4c.jpg', 'Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.', NULL, NULL, NULL, NULL, NULL, 'James.mp4', 'Active', 3, '2022-06-23 18:24:01', '2022-08-18 06:46:42'),
(3, 'Tom Hepworth', 'Associate', 'OIyPua0XTxi5YHET0jM6j6OyHjEIch.jpg', 'Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.', NULL, NULL, NULL, NULL, NULL, 'Tom.mp4', 'Active', 1, '2022-06-23 18:25:50', '2022-08-18 06:46:42'),
(4, 'Will Duckers', 'Associate', '441YGEpt4QbaU93uDteuMFVcSASqkt.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', NULL, NULL, NULL, NULL, NULL, NULL, 'Active', 0, '2022-07-06 06:52:16', '2022-08-18 06:46:39'),
(5, 'Zayn Mahmood', 'Associate', 'Zqm9jgkjXjzmfSkskhLDRM6aca1piY.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', '', '', '', '', NULL, 'Aymen.mp4', 'Active', 4, '2022-07-06 06:54:52', '2022-08-17 17:43:45'),
(6, 'David Poole', 'Junior Associate', 'YBnC5W31NEy3xPfuGPaL3UNQ7RkP2b.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', NULL, NULL, NULL, NULL, NULL, 'David.mp4', 'Active', 5, '2022-07-06 06:56:14', '2022-08-17 17:43:46'),
(7, 'Jason Carlisle', 'Junior Associate', 'rLsA8lGytIGGTctZiBWd3Sowvpf9BM.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', NULL, NULL, NULL, NULL, NULL, 'Jason.mp4', 'Active', 6, '2022-07-06 06:58:09', '2022-08-17 17:43:46'),
(8, 'Will Lyons', 'Junior Associate', 'uKqwEGdy5iDwy0PywUhxTnQRCo2Ir3.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', '', '', '', '', NULL, 'Well-Dokes.mp4', 'Active', 7, '2022-07-06 07:00:06', '2022-08-17 17:43:46'),
(9, 'Alex Devenport', 'Coordinator', 'KVRUZexrQdY1Glwqb9hVJ40qdNUcp0.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', NULL, NULL, NULL, NULL, NULL, 'Alex-1-.mp4', 'Active', 8, '2022-07-06 07:05:54', '2022-08-17 17:43:46'),
(10, 'Kelsey Ashford', 'Coordinator', 'zE8t6IUApOVW7HmBmcrF1U4xkV4J6C.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', '', '', '', '', NULL, 'Caissy.mp4', 'Active', 9, '2022-07-06 07:07:41', '2022-08-17 17:43:46'),
(11, 'Rachel Hayes', 'Sales Progression Manager', '7T5tRAgHc1ZA4I06DRNGxhQWCKcicF.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', NULL, NULL, NULL, NULL, NULL, 'Rechal.mp4', 'Active', 10, '2022-07-06 07:09:27', '2022-08-17 17:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone_number`, `country`, `town`, `street_address`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'grifkisia@gmail.com', '2020-04-08 20:04:45', '$2y$10$sSKeqzxyNzXFaXr00o6Y.eRmL2H6XYNC9soMvBeZyFzF8V0.m7Rgy', '8MpgCYQnX8seom8UbSpiUNcMf2qEi0J6ihr68HUlvLkNCmHkLRSpCepXhdo1', NULL, NULL, NULL, NULL, NULL, '2020-04-06 18:35:43', '2020-04-12 08:20:00'),
(2, 'Nishiv Shah', 'nish@sonashoppeltd.com', '2020-04-08 20:04:40', '$2y$10$jmPgif..HJdQYNMV7ooLP.MuhuxWJGXZW/8mInQTppJP8u5K8.Sa2', NULL, '+254721428824', 'Kenya', 'Nairobi', 'Westgate Shopping Mall', NULL, '2020-04-07 11:22:45', '2020-04-07 11:23:23'),
(3, 'GRIFFIN KISIA', 'kisia@bluetreeagency.com', NULL, '$2y$10$oi7bTwMd2MpT8BlfDxB9GO/c/J519MBgMithp5mo912EYiWO6ns9K', NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-08 08:45:34', '2021-01-08 08:45:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admins_password_resets`
--
ALTER TABLE `admins_password_resets`
  ADD KEY `admins_password_resets_email_index` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashflow`
--
ALTER TABLE `cashflow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashflow_forecasts`
--
ALTER TABLE `cashflow_forecasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_blogs`
--
ALTER TABLE `category_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communication`
--
ALTER TABLE `communication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custome_field`
--
ALTER TABLE `custome_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_manager`
--
ALTER TABLE `file_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_sections`
--
ALTER TABLE `language_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mortgage_rate`
--
ALTER TABLE `mortgage_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_menu`
--
ALTER TABLE `page_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_template`
--
ALTER TABLE `page_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category_product_information`
--
ALTER TABLE `product_category_product_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_information`
--
ALTER TABLE `product_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_media`
--
ALTER TABLE `product_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roi`
--
ALTER TABLE `roi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cashflow`
--
ALTER TABLE `cashflow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cashflow_forecasts`
--
ALTER TABLE `cashflow_forecasts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_blogs`
--
ALTER TABLE `category_blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `communication`
--
ALTER TABLE `communication`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `custome_field`
--
ALTER TABLE `custome_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_manager`
--
ALTER TABLE `file_manager`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mortgage_rate`
--
ALTER TABLE `mortgage_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `page_menu`
--
ALTER TABLE `page_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `page_template`
--
ALTER TABLE `page_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_category_product_information`
--
ALTER TABLE `product_category_product_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_information`
--
ALTER TABLE `product_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `product_inventory`
--
ALTER TABLE `product_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_media`
--
ALTER TABLE `product_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `roi`
--
ALTER TABLE `roi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
