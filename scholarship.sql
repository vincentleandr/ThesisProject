-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 04:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentblog`
--

CREATE TABLE `commentblog` (
  `CommentId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `BlogId` int(11) NOT NULL,
  `Comment` text,
  `Author` varchar(225) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentblog`
--

INSERT INTO `commentblog` (`CommentId`, `UserId`, `BlogId`, `Comment`, `Author`, `Date`) VALUES
(1, 136, 24, 'Very helpful ! Thank you !', 'Vincent', '2017-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `msblog`
--

CREATE TABLE `msblog` (
  `BlogId` int(11) NOT NULL,
  `BCategory` varchar(225) DEFAULT NULL,
  `BTitle` varchar(225) DEFAULT NULL,
  `BImage` varchar(225) DEFAULT NULL,
  `BContent` text,
  `BAuthor` varchar(225) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msblog`
--

INSERT INTO `msblog` (`BlogId`, `BCategory`, `BTitle`, `BImage`, `BContent`, `BAuthor`, `Date`) VALUES
(20, 'Tips', 'Tips from One of the Top Ten Scholarship Winner', '13.jpg', 'â€œI\'ve never seen people like you read for fun.\" Every time I heard this statement, my head throbbed and my motivation wavered with the emphasis of one devastating, degrading truth: it was not expected of me because of my background. It only got worse with the mention of college. As a first generation, low -income Hispanic woman, the weight of such low expectations seems to drag me down endlessly into the dark abyss of failure. How will I afford it? How will I travel there? Who honestly expects me to make it past freshman year? Is college really worth the effort?\r\n\r\nWhenever I get home, my questions are answered. My mother leaps forward clutching yet another college acceptance letter. Her joy is palpable, and soon I am smiling along as well. She notices my reluctance and takes my face between her calloused hands. â€œIn America, anybody can make it,â€ she assures me in broken English. Gazing into her adoring eyes, I realize that no amount of student debt or condescending comments can stop my mother from believing in my success. Not only would I have a career because of college, but she will also be proud. Her faith strengthens my resolve. Her joy encourages me to look past all the barriers.\r\n\r\nYes, I assure myself once again. College is worth the investment.\r\n\r\nHow to find scholarships :\r\nAttending college has always been a major goal of mine, but I knew that I would not be able to do so without scholarships. With that in mind, I made applying to scholarships a top priority. With the help of my academic advisors and the internet, I had access to thousands of scholarships, and never failed to apply to as many as I can. One of my peers actually recommended Unigo to me, and I have never turned back.\r\n\r\nHow to write a winning scholarship essay :\r\nMy advice is to apply to scholarships that appeal to your personality and interests. Enjoy storytelling? There are scholarships dedicated to that. Interested in math and science? There are endless chances available to attain financial support for such aspirations. Unigo has proven to be a crucial resource that has matched me with countless scholarships and made my dreams of attending college a reality. When I write my scholarship essays, I focus on events that have molded me into the person I am today. If I am ever unsure of what to write, I think of the reasons that I want to obtain an education, and focus my determination and earnestness into my essay. Never hesitate to apply!', 'MyScholarships', '2017-05-03'),
(21, 'Information', 'What to expect when you get to college?', '12.jpg', 'In college, you donâ€™t just go to school, it\'s your life. You eat, sleep, and shower there. You take classes there. You hang out there. Itâ€™s like a student Survivor â€” but with homework. Be prepared, so you don\'t get voted off the island.\r\n\r\n1. Mo time, mo work\r\nIt\'s like Biggie said about mo money, mo problems. Since you have more time, your professors are going to give you more work. You can handle it, but youâ€™ll need organization, self-discipline, and a crap-ton of sticky notes.\r\n\r\n2. Youâ€™re the boss\r\nYour schedule is totally in your control. You can take advantage of that by kicking butt on your grades and making your parents proud. Or you can fall asleep binge-watching the entire series of Breaking Bad and miss all your classes. Since college isnâ€™t free, you better go with option A.\r\n\r\n3. Yes new friends\r\nDrake may not want new friends, but in college most of your friends will be new. It may be scary not to know anyone at first, but be patient and nice, and youâ€™ll have a squad before you know it.\r\n\r\n4. You can be whoever you want\r\nSince most people in college wonâ€™t know you, you can be whoever you want. That doesnâ€™t mean you should grow a mustache and use a fake accent, but it does mean you get to start fresh. So before you get to college, think about what the best version of yourself would be like, and be it!\r\n\r\n5. You can eat whatever you want\r\nYou donâ€™t have your mom mediating your meals anymore, so exercise self-control and basic intelligence. Too much of anything is bad, variety is good, and the plates are small for a reason.\r\n\r\n6. You may not be the best at everything\r\nWhatever high school was like, chances are the competition in college will be tougher. Take it as a challenge to push your boundaries. But donâ€™t be disappointed if you donâ€™t always win. The important thing is to keep trying your best.\r\n\r\n7. Youâ€™ll get homesick\r\nAs exciting and fun as college will be, eventually youâ€™ll miss your old friends and family. So make the most of the time you have left. Hug your parents more, hang out with your friends, and do all the things youâ€™ve always wanted, but never got around to. And donâ€™t worry, youâ€™ll still have plenty of opportunity to get sick of home during breaks.\r\n', 'Joseph Merante', '2017-05-03'),
(22, 'Tips', '5 ways to increase your chances of getting into top colleges', 'bg10.jpg', 'When I was applying to colleges last fall, several of the schools on my list were considered â€œreachâ€ schools, even for the most qualified candidates. These are colleges like Harvard, Yale, MIT, and Stanford, which grace the college lists of many driven, competitive high school seniors across the world. The truth is that there is no formula that will guarantee you admission to top colleges with low acceptance rates. But there are several things you can do to maximize your chances and ensure that you send in the best application possible.\r\n\r\n1. Grades are your first priority \r\nGrades matter on any college application, but especially for highly-selective top colleges. Students often get caught up trying to balance five extracurricular activities, perform well on standardized tests, get excellent letters of recommendations, and ace interviews, all at the same time. While these are all extremely important, none of it matters if you lose focus on your grades. A college application is like an ice cream sundae â€” you can go crazy perfecting the right combination of toppings, but itâ€™ll never work without the right base. In the same way, your grades have to serve as your foundation for everything else on your application. Donâ€™t forget about them!\r\n\r\n2. Prioritize your time \r\nIn addition to focusing on your grades, you still need to find ways to spend your time outside of classwork and homework effectively. Spending twenty hours a week preparing for a single standardized test like the ACT or SAT is probably not a good use of your time. Of course you should study for these tests, but consider creating a list of priorities so you donâ€™t feel pulled in every direction all the time. Your grades come first, then rank your extracurricular activities in terms of time commitment. It depends on what you feel is most important to your life and your application, and what youâ€™re most passionate about. If you can organize your time, not only will you be more focused on each of your tasks, youâ€™ll likely be less stressed out about performing well on everything.\r\n\r\n3. Write killer supplemental essays\r\nImagine this: hundreds of applicants with the same grades, test scores, interview ratings, and even similar extracurricular activities. Thatâ€™s what the desk of a Harvard admission officer looks like around January. Iâ€™m not saying this to stress you out, but to point out something that can help you stand out from the rest of the applicants: your writing! Donâ€™t waste the opportunity of the supplemental essay by playing safe and writing generically. Write a unique supplemental essay for each college and make sure your writing sounds like you, not anyone else. Put your heart into it. If it feels appropriate, be a little light-hearted or humorous, but make sure you convey why youâ€™re serious about the school. Give yourself plenty of time to compose your supplemental essays â€” before summer and fall applications take over your entire life. Believe me, it will pay off.\r\n\r\n4. Demonstrate interest \r\nAnother way to stand out from the crowd is to make sure the admissions office knows about you before your application arrives. Email your admissions officer directly with a specific question, making sure to introduce yourself. Request an interview with the admissions officer and/or with alumni in your area. Attend information sessions and go on a campus tour. Many schools keep track of these displays of interest, to see which applicants are really invested in the school. Although demonstrated interest canâ€™t get you into a school on its own, it doesnâ€™t hurt to introduce yourself to the admissions office in addition to turning in a strong application.\r\n\r\n5. Consider applying early \r\nWhile the overall acceptance rate for a competitive school can appear shockingly low, these colleges admit a much higher percentage of students in their Early Decision/Early Action rounds. If you really love the school, feel good about your grades at the end of junior year, and have your application together by mid-fall, it may be worth applying early. Early Decision is binding, which means that if youâ€™re admitted, you must attend. Early Action works similarly, except youâ€™re not bound to attend. If youâ€™re sure a college is right for you, sending in an early application in November is arguably the best way to boost your chances. For example, Yale admits around 6% of overall applicants, but 17% of Early Action applicants are admitted. Cornell has an overall acceptance rate of around 14%, but 28% of Early Decision applicants are admitted. This pattern holds true for most selective schools â€” and statistics are available online. Find out whether the schools on your list offer early application options, and decide if itâ€™s the right choice for you.\r\n\r\nFor many students, the biggest obstacle in the process of applying to selective schools is their own panic. The truth is, top colleges do offer excellent programs and opportunities, but there are plenty of great schools out there that may not have the brand-name appeal of an Ivy League. Approaching applications like theyâ€™re life-or-death is a surefire way to stress yourself out. Your application will be a lot more genuine and confident if you take the pressure off yourself a little bit, and actually enjoy the process. Have fun with your essays. Savor your senior year of high school. Youâ€™ve come this far, so congratulate yourself and stay open-minded about your college choices.', 'Maya Juman', '2017-05-03'),
(23, 'Tips', '10 tips to manage working while going to college', '5.jpg', 'College can be tough, and working while taking classes is even harder. For many students, though, it has become a financial necessity. Here are 10 tips to help you successfully manage working while going to school. (And for resume advice and tips for landing a job, check out our \"Internships, Jobs, and Careers\" section.)\r\n\r\n1. Classes are always top priority\r\nWork out your school schedule first. You can schedule work around your classes, but you canâ€™t always schedule classes around work. Your degree is more important than a temporary job.\r\n\r\n2. Stay organized\r\nUse your phoneâ€™s calendar app or Google Calendar to remind you of important events like classes and changing work shifts. Donâ€™t leave it up to your memory alone because life in college is too hectic to remember everything.\r\n\r\n3. Get work-study\r\nWork-study jobs are usually on campus and can be scheduled around your classes. If youâ€™re lucky, youâ€™ll get a job in your department. If youâ€™re really lucky, it may count toward your degree. Apply for work-study when you fill out the FAFSA and talk to your schoolâ€™s financial aid department about your options.\r\n\r\n4. Make sure your employer knows your availability\r\nAs soon as you get your class schedule, let your boss know. Give them a copy of your schedule and make sure they understand that you can\'t work during those times. The sooner you let your employer know, the more likely theyâ€™ll be able to accommodate your scheduling needs.\r\n\r\n5. Do homework at work\r\nI had a job as an afternoon nanny during college. The girls would do their homework and I would do some of mine. Nanny, barista, bookstore clerk â€” these are ideal jobs for college students because thereâ€™s lots of extra time to work on your own stuff.\r\n\r\n6. Ask for finals week off in advance\r\nIf you have a project, paper, or finals coming up, give yourself the extra time youâ€™ll need â€” either to study or just to have a little free time to relax and clear your head.\r\n\r\n7. Donâ€™t overload yourself\r\nPick-up shifts are great if you need some extra cash, but donâ€™t take on too much at once. Youâ€™ll burn out fast. School is hard all by itself, and working demands your time and attention. Donâ€™t put a strain on yourself, or both will suffer.\r\n\r\n8. Donâ€™t work between classes\r\nEither work before your first class or after your last class, and leave a good buffer of time in between. That way, if class or work runs late, it wonâ€™t be too much trouble.\r\n\r\n9. Dress for success\r\nJust in case you DO have to run from work to class or the other way around, dress in clothes that are both comfortable and work-appropriate. Master the business casual look now. It will be your best friend in the future.\r\n\r\n10. Make time for you\r\nCollege is a once-in-a-lifetime experience. Give yourself time to make memories and enjoy yourself. Itâ€™s not your job or classes youâ€™ll remember most, itâ€™s the people you meet and things you do along the way.', 'Trinya Murray', '2017-05-03'),
(24, 'Tips', '6 ways to make money as a college student', '4.jpg', 'You are constantly talked about. Youâ€™re the generation that has been analyzed, fawned over, and criticized by countless employers, scientists, and baby boomers. You\'re expected to have certain skills, but are you using them to your advantage? We already gave you 10 easy ways to make money in college, so here are six more ways to make money as a college student on and off campus.\r\n\r\n1. Brand ambassador\r\nMajor brands will pay you to represent them on your college campus. Brand ambassadors are responsible for developing and implementing a university-specific marketing plan targeted at students, such as presenting to a class, passing out samples, or posting about the brand on social media. This is one of the most flexible part-time jobs available for college students â€” you can set your own hours and brand ambassadors are often generously compensated. Working as a campus brand representative goes beyond just being a resume builder; you\'ll accumulate a collection of stories and skills from which to draw for future job interviews.\r\n\r\n2. Tech support\r\nAs a millennial, youâ€™re not just good with technology, youâ€™re great. Because of your vast knowledge of social media platforms, you can make a part-time job for yourself and help create strategies for a client or get paid to teach older people how use modern technology.\r\n\r\n3. Freelance jobs\r\nIn all that spare time you have (yeah, right), get a freelance job! If youâ€™re a Java pro, try selling your skills to companies who need a revamped website. Or if youâ€™re a talented content creator and writer, write for that fashion or sports magazine you read religiously. You can limit your workload and only take on projects when youâ€™re not completely swamped with school. Also, your freelancing experience can definitely come in handy post-graduation, when youâ€™re looking to supplement your real adult paycheck.\r\n\r\n4. Market research guinea pig\r\nIf youâ€™re just looking for some extra cash once in a while instead of a regular gig, market research may be a good fit. This can be a very easy part-time job that mostly entails filling out some online surveys, taste-testing different juice flavors, or talking about brand relationships with different companies.\r\n\r\n5. Nanny/babysitter\r\nThis may seem kind of high school, but think about it: if you were a parent would you rather have a high schooler, or an older, more responsible college student watching your kids? Also, the hours are super flexible, the pay is pretty good, and you can usually get full access to the fridge.\r\n\r\n6. Catering\r\nIf you\'re looking for flexible hours and a way to enhance your interpersonal skills and network, get a part-time job as a caterer. You\'ll develop great multi-tasking skills and it shows employers that you\'re levelheaded and exceptionally organized.', 'Maria Saracino-Lowe', '2017-05-03'),
(25, 'Information', 'Being waitlisted doesn\'t mean you have to wait', '1.jpg', 'April 1st arrives, and you\'ve found out if you\'ve been accepted to the colleges you applied to. You mourn the colleges that rejected you, then dust yourself off to revel in your acceptances. By May 1st â€” after hopefully reviewing everything carefully â€” you make a decision. A deposit is made, the housing questionnaireâ€™s complete, and now you can celebrate. You are a ______ (fill in the name of the mascot here)! Congratulations!\r\n\r\nBut, unfortunately, this is not the scenario for everyone. While youâ€™re online ordering your collegeâ€™s swag, other students are in a collegiate purgatory â€” the waitlist. They are not buying logoâ€™d hats or reserving orientation dates or following their new school on Twitter. Instead, they are feeling the same anxiety that you were feeling a month ago, but now itâ€™s heightened because of the celebratory atmosphere all around them.\r\n\r\nAs one of my friends describes it, when her son found out that he got waitlisted at his top choice, UC Berkeley, neither she nor her son could be â€œsad or thrilled with what they had, knowing they might have something better behind door #2. Really, everything just sort of fizzled.â€ There was no â€œconfetti moment,â€ as she called it. What they had was an acceptance from UCLA, a school other students, especially within our sonsâ€™ own graduating class, were coveting. But to paraphrase an old proverb, one studentâ€™s top choice is another studentâ€™s waitlist, and vice versa.\r\n\r\nWhat people tell you to do if you\'re waitlisted\r\nAdvice abounds on the Web, but my friends whose sons and daughters were waitlisted were told by their school counselors and the college admissions offices to just wait. Simply wait and do nothing else. Do not send letters or emails and do not call. This waiting becomes the equivalent of watching everyone around you pair off on prom dates, while the guy you want to go with wonâ€™t let you know until everyone else has turned him down.\r\n\r\nJust as with the initial admissions decisions, it comes down to the numbers. Each year, colleges are adding to their waitlist numbers because they have to hedge their bets knowing that students are applying to more and more schools. In 2013, waitlist numbers ranged from the hundreds to the thousands. \r\n\r\nWhether colleges admit any of their waitlisted students is determined by how much of a gap they have in enrollment, if any. Not getting in through a waitlist is not a reflection on the student. It once again comes down to a sheer numbers â€” a business decision on the collegeâ€™s part.\r\n\r\nWhat you should really do\r\nEven knowing all this, the waiting can be torturous, and there is one big thing you can do to help if you are in this situation: get as invested as possible in another school that has accepted you. Case in point: One of my friends\' son got waitlisted at his first choice of Cal Poly Pomonaâ€™s engineering program. According to their admissions department, it may take until mid-June for the students on the waitlist to know if they have been accepted. This has left my friendâ€™s son and his family uncomfortable and unsettled. This feeling, however, hasnâ€™t stopped them from putting down a deposit for both admissions (non-refundable) and housing (partly refundable) at CSU Chico. It didnâ€™t get in their way of attending Chicoâ€™s open house for admitted students. There, they met with professors and current students in the engineering department. They walked around the campus and toured the residence halls. And, hereâ€™s the interesting thing: in doing all this, they fell a little in love with the school, describing it as â€œdown-to-earth, beautiful, eco-friendly, green, and accessible.â€ Their â€œsecond choice,â€ might actually turn out to be a better fit than Cal Poly Pomona.\r\n\r\nWhat to do if you\'re accepted\r\nIf it turns out you\'re one of the lucky students who are not waiting, please have a little heart and courtesy. Right after pressing the â€œacceptâ€ button, go online to the schools youâ€™re not going to attend and graciously decline their offer. In doing so, you will help clear a path for those young men and women who are waiting desperately for their very own confetti moment.', 'Judith Bickel', '2017-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `msscholarship`
--

CREATE TABLE `msscholarship` (
  `ScholarshipId` int(11) NOT NULL,
  `STitle` varchar(255) DEFAULT NULL,
  `SDescription` text,
  `SFund` float DEFAULT NULL,
  `SGender` varchar(225) DEFAULT NULL,
  `SLocation` varchar(255) DEFAULT NULL,
  `SGrade` varchar(255) DEFAULT NULL,
  `SGPA` float DEFAULT NULL,
  `SReligion` varchar(225) DEFAULT NULL,
  `SStart` date DEFAULT NULL,
  `SDeadline` date DEFAULT NULL,
  `SAnnouncement` date DEFAULT NULL,
  `SWebsite` varchar(255) DEFAULT NULL,
  `SEmail` varchar(255) DEFAULT NULL,
  `SRegisteredDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msscholarship`
--

INSERT INTO `msscholarship` (`ScholarshipId`, `STitle`, `SDescription`, `SFund`, `SGender`, `SLocation`, `SGrade`, `SGPA`, `SReligion`, `SStart`, `SDeadline`, `SAnnouncement`, `SWebsite`, `SEmail`, `SRegisteredDate`) VALUES
(50, 'College Opportunity by Steven Foundation', 'Steven Foundation is founded by Steven. Steven Foundation provide an opportunity and also financial aid for students all around Indonesia to continue their education to the next step.', 50000000, '0', 'No Requirements', 'No Requirements', 0, 'No Requirements', '2017-05-14', '2017-05-28', '2017-06-02', 'http://stevenfoundation.com', 'stevenfoundation@gmail.com', '2017-05-03'),
(51, 'Amazing Women of Indonesia', 'To celebrate and remember Kartini Day, the government of Indonesia provide this scholarship for all amazing women of Indonesia.', 35000000, '2', 'No Requirements', 'No Requirements', 0, 'No Requirements', '2017-06-08', '2017-06-20', '2017-06-25', 'http://indonesiagovernment.co.id', 'indonesia_government@gmail.com', '2017-05-03'),
(52, 'Diversity of Our Country', 'Bhinneka Tunggal Ika as the motto of our country, Indonesia means that Indonesia is a country with diversity of its people. Indonesia is a country full and rich of culture, ethnic, and race. That being said, the government provide this scholarship for all country-wide students.', 20000000, '0', 'No Requirements', 'No Requirements', 0, 'No Requirements', '2017-05-05', '2017-06-04', '2017-06-05', 'http://indonesiagovernment.co.id', 'indonesia_government@gmail.com', '2017-05-03'),
(53, 'XYZ National Scholarship', 'As a big company in Indonesia, XYZ wants to help all students of Indonesia to reach their dream. That being said, XYZ provide this scholarship.', 40000000, '0', 'No Requirements', 'No Requirements', 0, 'No Requirements', '2017-05-10', '2017-05-18', '2017-05-20', 'http://xyz.com', 'xyz@yahoo.com', '2017-05-03'),
(54, 'Poverty Scholarship', 'Poverty scholarship is a financial aid for people with low income provided by the Indonesian Government.', 20000000, '0', 'No Requirements', 'No Requirements', 0, 'No Requirements', '2017-07-01', '2017-07-10', '2017-07-15', 'http://indonesiagovernment.co.id', 'indonesia_government@gmail.com', '2017-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `msuniversity`
--

CREATE TABLE `msuniversity` (
  `UniversityId` int(11) NOT NULL,
  `UName` varchar(255) DEFAULT NULL,
  `UCountry` varchar(255) DEFAULT NULL,
  `ULocation` varchar(255) DEFAULT NULL,
  `UWebsite` varchar(255) DEFAULT NULL,
  `UEmail` varchar(255) DEFAULT NULL,
  `UFacility` text,
  `UFact` text,
  `URequirement` text,
  `UAchievement` text,
  `UDescription` text,
  `ULogo` varchar(255) DEFAULT NULL,
  `URegisteredDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msuniversity`
--

INSERT INTO `msuniversity` (`UniversityId`, `UName`, `UCountry`, `ULocation`, `UWebsite`, `UEmail`, `UFacility`, `UFact`, `URequirement`, `UAchievement`, `UDescription`, `ULogo`, `URegisteredDate`) VALUES
(109, 'Bina Nusantara University', 'Indonesia', 'Jl. Anggrek, RT.5/RW.3, Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530', 'http://binus.ac.id', 'binus@binusian.org', '<ul><li>Classroom</li><li>Library</li><li>Auditorium</li><li>Language Laboratory</li><li>Information Kiosk</li><li>BINUS TV</li><li>Bookstore</li><li>Copy Center</li><li>Food Court</li><li>Musholla</li><li>Bank</li><li>ATM</li><li>Wireless Internet</li><li>Public Phone Service</li><li>Parking Space</li><li>Public Safety</li></ul>', '<ul><li>Binus University supported the anti-corruption for Indonesia.</li><li>The library of Binus University got an &#39;A&#39; Accreditation Award from the government of Indonesia.</li><li>Binus Career and Alumni Center have been cooperate with more than a thousand companies.</li></ul>', '<ul><li>Passing BINUS INTERNATIONAL Entrance Test</li><li>International TOEFL Score of 550 or better</li><li>Test of Written English Score of 4.0 or better</li><li>Official IELTS 6.5 overall or better WITH 5.5 for Writing Module or better</li><li>Official iBT (internet based TOEFL) Of 80 overall or better WITH 18 for Writing Module or better</li><li>Pre University English 150 hours if TOEFL scores are between 500-549 or TWE between 2,5-3,9</li></ul>', '<ul><li>Winner of &#39;Perguruan Tinggi Swasta (PTS) Terbaik 2015&#39;.</li></ul>', '<p>Bina Nusantara University or Binus is a university in Jakarta, Indonesia.&nbsp;BINUS UNIVERSITY offers study programs, which give students time and space to decide which major they are willing to take by considering some innovative combinations. Some facilities have been prepared to support learning-teaching activities in dynamic and comfortable campuses. Each student of BINUS UNIVERSITY has become a member of BINUSIAN community. Being a BINUSIAN is not only a choice to reach an education with additional skill in technology application but also a first decision of an effective step. Visionary BINUSIAN community helps every BINUSIAN to foresee the future and dare to decide that being at the first place is not a dream.</p>', 'binus_logo.png', '2017-05-03'),
(110, 'Nanyang Technological University', 'Singapore', '50 Nanyang Ave, Singapore 639798', 'http://ntu.edu.sg', 'adm_intnl@ntu.edu.sg', '<ul><li>Dormitory</li><li>Campus</li><li>Cafe</li><li>Restaurant</li></ul>', '<ul><li>Have more than 50.000 students including alumni.</li></ul>', '<p>You must have completed at least 12 years of general education or will be taking&nbsp;High School&nbsp;national examinations in the year of application in order to be considered for admission.&nbsp;<br /><br />Submission of IELTS or&nbsp;TOEFL or&nbsp;SAT (previously known as SAT Reasoning Test or SAT 1)&nbsp;&nbsp;or Pearson Test of English Academic (PTE Academic)&nbsp;or ACT with Writing or Ameson English scores are only compulsory for applicants</p><ul><li><p>with PRC Gao Kao qualification (i.e. applicants who will be taking Gao Kao in June 2017 and those who have already taken Gao Kao)&nbsp;<strong>OR</strong></p></li><li><p>who do not take up English language in Junior and Senior High School or taken English language only as a 2nd&nbsp;language.</p></li></ul><p>&nbsp;</p><p>For IELTS, TOEFL and PTE Academic, only scores obtained in the&nbsp;2 years leading up to the application deadline will be considered. The validity period for SAT and ACT is 5 years.</p>', '<ul><li>A global university on a rapid rise.</li><li>A global research powerhouse.</li><li>NTU Engineering ranks among world&#39;s best.</li></ul>', '<p>Nanyang Technological University was built in 1955, located at Singapore. NTU have 4 faculties and 12 high schools. Technic Faculty with 6 schools, focusing on technology innovation. Science Faculty offer science education. Business Faculty offer MBA Program.</p>', 'ntu_logo.jpg', '2017-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `msuser`
--

CREATE TABLE `msuser` (
  `UserId` int(11) NOT NULL,
  `Role` varchar(225) DEFAULT NULL,
  `Email` varchar(225) DEFAULT NULL,
  `Password` varchar(225) DEFAULT NULL,
  `Gender` varchar(225) DEFAULT NULL,
  `Location` varchar(225) DEFAULT NULL,
  `GPA` float DEFAULT NULL,
  `Religion` varchar(255) DEFAULT NULL,
  `Firstname` varchar(225) DEFAULT NULL,
  `Lastname` varchar(225) DEFAULT NULL,
  `RegisteredDate` date DEFAULT NULL,
  `Grade` varchar(225) DEFAULT NULL,
  `Skill` text,
  `Achievement` text,
  `Goals` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msuser`
--

INSERT INTO `msuser` (`UserId`, `Role`, `Email`, `Password`, `Gender`, `Location`, `GPA`, `Religion`, `Firstname`, `Lastname`, `RegisteredDate`, `Grade`, `Skill`, `Achievement`, `Goals`) VALUES
(101, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, '', '', '0', NULL, NULL, '', '', ''),
(136, 'Member', 'vincentleander52@gmail.com', 'ffe553694f5096471590343432359e02', '1', 'Jakarta', 3.2, 'Buddhist', 'Vincent', 'Leander', '2017-05-03', 'S1', '', '', ''),
(137, 'Member', 'felixleander2108@gmail.com', '101a6ec9f938885df0a44f20458d2eb4', '1', 'Bali', 0, 'Buddhist', 'Felix', 'Leander', '2017-05-03', 'S1', '', '', ''),
(138, 'Member', 'ilianasimon@yahoo.com', '7740c188be18aca1000e3442c763663f', '2', 'Jakarta', 0, 'Buddhist', 'Iliana', 'Simon', '2017-05-04', 'S1', '', '', ''),
(139, 'Member', 'stevenyang9595@gmail.com', 'a8f5f167f44f4964e6c998dee827110c', '1', 'Jakarta', 4, 'Protestant', 'steven', 'mai', '2017-05-09', 'S1', '', '', ''),
(140, 'Member', 'stashia1709@gmail.com', 'efe6398127928f1b2e9ef3207fb82663', NULL, NULL, NULL, '', 'stashia', 'mai', NULL, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviewuniversity`
--

CREATE TABLE `reviewuniversity` (
  `ReviewId` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `UniversityId` int(11) DEFAULT NULL,
  `Review` text,
  `Author` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewuniversity`
--

INSERT INTO `reviewuniversity` (`ReviewId`, `UserId`, `UniversityId`, `Review`, `Author`, `Date`) VALUES
(4, 136, 109, 'I went to college here. Life is pretty good around the campus. The facilities are also awesome and I of course met a lot of people who became friends. Binus also held a festival called Binus Festival where basically there will be many stands selling various things like food and etc.', 'Vincent', '2017-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `scholarshipmajor`
--

CREATE TABLE `scholarshipmajor` (
  `ScholarshipMajorId` int(11) NOT NULL,
  `ScholarshipId` int(11) DEFAULT NULL,
  `SMajor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarshipmajor`
--

INSERT INTO `scholarshipmajor` (`ScholarshipMajorId`, `ScholarshipId`, `SMajor`) VALUES
(510, 50, 'No Requirements'),
(511, 50, 'Agriculture, Agriculture Operations, and Related Sciences'),
(512, 50, 'Architecture and Related Sciences'),
(513, 50, 'Area, Ethnic, Cultural, Gender, and Group Studies'),
(514, 50, 'Basic Skills and Developmental/Remedial Education'),
(515, 50, 'Biological and Biomedical Sciences'),
(516, 50, 'Business, Management, Marketing, and Related Support Services'),
(517, 50, 'Citizenship Activities'),
(518, 50, 'Communication, Journalism, and Related Programs'),
(519, 50, 'Communication Technologies/Technicians and Support Services'),
(520, 50, 'Computer and Information Sciences and Support Services'),
(521, 50, 'Construction Tools'),
(522, 50, 'Education'),
(523, 50, 'Engineering'),
(524, 50, 'Engineering Technologies and Engineering-Related Fields'),
(525, 50, 'English Language and Literature/Letters'),
(526, 50, 'Foreign Languages, Literatures, and Linguistics'),
(527, 50, 'Family and Consumer Sciences/Human Sciences'),
(528, 50, 'Health Professions and Related Programs'),
(529, 50, 'Health-Related Knowledge and Skills'),
(530, 50, 'High School/Secondary Diplomas and Certificates'),
(531, 50, 'History'),
(532, 50, 'Homeland Security, Law Enforcement, Firefighting and Related Protective Services'),
(533, 50, 'Interpersonal and Social Skills'),
(534, 50, 'Legal Professions and Studies'),
(535, 50, 'Leisure and Recreational Activities'),
(536, 50, 'Liberal Arts and Sciences, General Studies and Humanities'),
(537, 50, 'Library Science'),
(538, 50, 'Mathematics and Statistics'),
(539, 50, 'Mechanic and Repair Technologies/Technicians'),
(540, 50, 'Military Science, Leadership and Operational Art'),
(541, 50, 'Military Technologies and Applied Sciences'),
(542, 50, 'Multi/Interdisciplinary Studies'),
(543, 50, 'Parks, Recreation, Leisure, and Fitness Studies'),
(544, 50, 'Personal Awareness and Self-Improvement'),
(545, 50, 'Philosophy and Religious Studies'),
(546, 50, 'Physical Sciences'),
(547, 50, 'Precision Production'),
(548, 50, 'Psychology'),
(549, 50, 'Public Administration and Social Service Professions'),
(550, 50, 'Residency Programs'),
(551, 50, 'Science Technologies/Technicians'),
(552, 50, 'Social Sciences'),
(553, 50, 'Technology Education/Industrial Arts'),
(554, 50, 'Theology and Religious Vocations'),
(555, 50, 'Transportation and Materials Moving'),
(556, 50, 'Visual and Performing Arts'),
(557, 51, 'No Requirements'),
(558, 51, 'Agriculture, Agriculture Operations, and Related Sciences'),
(559, 51, 'Architecture and Related Sciences'),
(560, 51, 'Area, Ethnic, Cultural, Gender, and Group Studies'),
(561, 51, 'Basic Skills and Developmental/Remedial Education'),
(562, 51, 'Biological and Biomedical Sciences'),
(563, 51, 'Business, Management, Marketing, and Related Support Services'),
(564, 51, 'Citizenship Activities'),
(565, 51, 'Communication, Journalism, and Related Programs'),
(566, 51, 'Communication Technologies/Technicians and Support Services'),
(567, 51, 'Computer and Information Sciences and Support Services'),
(568, 51, 'Construction Tools'),
(569, 51, 'Education'),
(570, 51, 'Engineering'),
(571, 51, 'Engineering Technologies and Engineering-Related Fields'),
(572, 51, 'English Language and Literature/Letters'),
(573, 51, 'Foreign Languages, Literatures, and Linguistics'),
(574, 51, 'Family and Consumer Sciences/Human Sciences'),
(575, 51, 'Health Professions and Related Programs'),
(576, 51, 'Health-Related Knowledge and Skills'),
(577, 51, 'High School/Secondary Diplomas and Certificates'),
(578, 51, 'History'),
(579, 51, 'Homeland Security, Law Enforcement, Firefighting and Related Protective Services'),
(580, 51, 'Interpersonal and Social Skills'),
(581, 51, 'Legal Professions and Studies'),
(582, 51, 'Leisure and Recreational Activities'),
(583, 51, 'Liberal Arts and Sciences, General Studies and Humanities'),
(584, 51, 'Library Science'),
(585, 51, 'Mathematics and Statistics'),
(586, 51, 'Mechanic and Repair Technologies/Technicians'),
(587, 51, 'Military Science, Leadership and Operational Art'),
(588, 51, 'Military Technologies and Applied Sciences'),
(589, 51, 'Multi/Interdisciplinary Studies'),
(590, 51, 'Parks, Recreation, Leisure, and Fitness Studies'),
(591, 51, 'Personal Awareness and Self-Improvement'),
(592, 51, 'Philosophy and Religious Studies'),
(593, 51, 'Physical Sciences'),
(594, 51, 'Precision Production'),
(595, 51, 'Psychology'),
(596, 51, 'Public Administration and Social Service Professions'),
(597, 51, 'Residency Programs'),
(598, 51, 'Science Technologies/Technicians'),
(599, 51, 'Social Sciences'),
(600, 51, 'Technology Education/Industrial Arts'),
(601, 51, 'Theology and Religious Vocations'),
(602, 51, 'Transportation and Materials Moving'),
(603, 51, 'Visual and Performing Arts'),
(604, 52, 'No Requirements'),
(605, 52, 'Agriculture, Agriculture Operations, and Related Sciences'),
(606, 52, 'Architecture and Related Sciences'),
(607, 52, 'Area, Ethnic, Cultural, Gender, and Group Studies'),
(608, 52, 'Basic Skills and Developmental/Remedial Education'),
(609, 52, 'Biological and Biomedical Sciences'),
(610, 52, 'Business, Management, Marketing, and Related Support Services'),
(611, 52, 'Citizenship Activities'),
(612, 52, 'Communication, Journalism, and Related Programs'),
(613, 52, 'Communication Technologies/Technicians and Support Services'),
(614, 52, 'Computer and Information Sciences and Support Services'),
(615, 52, 'Construction Tools'),
(616, 52, 'Education'),
(617, 52, 'Engineering'),
(618, 52, 'Engineering Technologies and Engineering-Related Fields'),
(619, 52, 'English Language and Literature/Letters'),
(620, 52, 'Foreign Languages, Literatures, and Linguistics'),
(621, 52, 'Family and Consumer Sciences/Human Sciences'),
(622, 52, 'Health Professions and Related Programs'),
(623, 52, 'Health-Related Knowledge and Skills'),
(624, 52, 'High School/Secondary Diplomas and Certificates'),
(625, 52, 'History'),
(626, 52, 'Homeland Security, Law Enforcement, Firefighting and Related Protective Services'),
(627, 52, 'Interpersonal and Social Skills'),
(628, 52, 'Legal Professions and Studies'),
(629, 52, 'Leisure and Recreational Activities'),
(630, 52, 'Liberal Arts and Sciences, General Studies and Humanities'),
(631, 52, 'Library Science'),
(632, 52, 'Mathematics and Statistics'),
(633, 52, 'Mechanic and Repair Technologies/Technicians'),
(634, 52, 'Military Science, Leadership and Operational Art'),
(635, 52, 'Military Technologies and Applied Sciences'),
(636, 52, 'Multi/Interdisciplinary Studies'),
(637, 52, 'Parks, Recreation, Leisure, and Fitness Studies'),
(638, 52, 'Personal Awareness and Self-Improvement'),
(639, 52, 'Philosophy and Religious Studies'),
(640, 52, 'Physical Sciences'),
(641, 52, 'Precision Production'),
(642, 52, 'Psychology'),
(643, 52, 'Public Administration and Social Service Professions'),
(644, 52, 'Residency Programs'),
(645, 52, 'Science Technologies/Technicians'),
(646, 52, 'Social Sciences'),
(647, 52, 'Technology Education/Industrial Arts'),
(648, 52, 'Theology and Religious Vocations'),
(649, 52, 'Transportation and Materials Moving'),
(650, 52, 'Visual and Performing Arts'),
(651, 53, 'No Requirements'),
(652, 53, 'Agriculture, Agriculture Operations, and Related Sciences'),
(653, 53, 'Architecture and Related Sciences'),
(654, 53, 'Area, Ethnic, Cultural, Gender, and Group Studies'),
(655, 53, 'Basic Skills and Developmental/Remedial Education'),
(656, 53, 'Biological and Biomedical Sciences'),
(657, 53, 'Business, Management, Marketing, and Related Support Services'),
(658, 53, 'Citizenship Activities'),
(659, 53, 'Communication, Journalism, and Related Programs'),
(660, 53, 'Communication Technologies/Technicians and Support Services'),
(661, 53, 'Computer and Information Sciences and Support Services'),
(662, 53, 'Construction Tools'),
(663, 53, 'Education'),
(664, 53, 'Engineering'),
(665, 53, 'Engineering Technologies and Engineering-Related Fields'),
(666, 53, 'English Language and Literature/Letters'),
(667, 53, 'Foreign Languages, Literatures, and Linguistics'),
(668, 53, 'Family and Consumer Sciences/Human Sciences'),
(669, 53, 'Health Professions and Related Programs'),
(670, 53, 'Health-Related Knowledge and Skills'),
(671, 53, 'High School/Secondary Diplomas and Certificates'),
(672, 53, 'History'),
(673, 53, 'Homeland Security, Law Enforcement, Firefighting and Related Protective Services'),
(674, 53, 'Interpersonal and Social Skills'),
(675, 53, 'Legal Professions and Studies'),
(676, 53, 'Leisure and Recreational Activities'),
(677, 53, 'Liberal Arts and Sciences, General Studies and Humanities'),
(678, 53, 'Library Science'),
(679, 53, 'Mathematics and Statistics'),
(680, 53, 'Mechanic and Repair Technologies/Technicians'),
(681, 53, 'Military Science, Leadership and Operational Art'),
(682, 53, 'Military Technologies and Applied Sciences'),
(683, 53, 'Multi/Interdisciplinary Studies'),
(684, 53, 'Parks, Recreation, Leisure, and Fitness Studies'),
(685, 53, 'Personal Awareness and Self-Improvement'),
(686, 53, 'Philosophy and Religious Studies'),
(687, 53, 'Physical Sciences'),
(688, 53, 'Precision Production'),
(689, 53, 'Psychology'),
(690, 53, 'Public Administration and Social Service Professions'),
(691, 53, 'Residency Programs'),
(692, 53, 'Science Technologies/Technicians'),
(693, 53, 'Social Sciences'),
(694, 53, 'Technology Education/Industrial Arts'),
(695, 53, 'Theology and Religious Vocations'),
(696, 53, 'Transportation and Materials Moving'),
(697, 53, 'Visual and Performing Arts'),
(698, 54, 'No Requirements'),
(699, 54, 'Agriculture, Agriculture Operations, and Related Sciences'),
(700, 54, 'Architecture and Related Sciences'),
(701, 54, 'Area, Ethnic, Cultural, Gender, and Group Studies'),
(702, 54, 'Basic Skills and Developmental/Remedial Education'),
(703, 54, 'Biological and Biomedical Sciences'),
(704, 54, 'Business, Management, Marketing, and Related Support Services'),
(705, 54, 'Citizenship Activities'),
(706, 54, 'Communication, Journalism, and Related Programs'),
(707, 54, 'Communication Technologies/Technicians and Support Services'),
(708, 54, 'Computer and Information Sciences and Support Services'),
(709, 54, 'Construction Tools'),
(710, 54, 'Education'),
(711, 54, 'Engineering'),
(712, 54, 'Engineering Technologies and Engineering-Related Fields'),
(713, 54, 'English Language and Literature/Letters'),
(714, 54, 'Foreign Languages, Literatures, and Linguistics'),
(715, 54, 'Family and Consumer Sciences/Human Sciences'),
(716, 54, 'Health Professions and Related Programs'),
(717, 54, 'Health-Related Knowledge and Skills'),
(718, 54, 'High School/Secondary Diplomas and Certificates'),
(719, 54, 'History'),
(720, 54, 'Homeland Security, Law Enforcement, Firefighting and Related Protective Services'),
(721, 54, 'Interpersonal and Social Skills'),
(722, 54, 'Legal Professions and Studies'),
(723, 54, 'Leisure and Recreational Activities'),
(724, 54, 'Liberal Arts and Sciences, General Studies and Humanities'),
(725, 54, 'Library Science'),
(726, 54, 'Mathematics and Statistics'),
(727, 54, 'Mechanic and Repair Technologies/Technicians'),
(728, 54, 'Military Science, Leadership and Operational Art'),
(729, 54, 'Military Technologies and Applied Sciences'),
(730, 54, 'Multi/Interdisciplinary Studies'),
(731, 54, 'Parks, Recreation, Leisure, and Fitness Studies'),
(732, 54, 'Personal Awareness and Self-Improvement'),
(733, 54, 'Philosophy and Religious Studies'),
(734, 54, 'Physical Sciences'),
(735, 54, 'Precision Production'),
(736, 54, 'Psychology'),
(737, 54, 'Public Administration and Social Service Professions'),
(738, 54, 'Residency Programs'),
(739, 54, 'Science Technologies/Technicians'),
(740, 54, 'Social Sciences'),
(741, 54, 'Technology Education/Industrial Arts'),
(742, 54, 'Theology and Religious Vocations'),
(743, 54, 'Transportation and Materials Moving'),
(744, 54, 'Visual and Performing Arts');

-- --------------------------------------------------------

--
-- Table structure for table `scholarshiprace`
--

CREATE TABLE `scholarshiprace` (
  `ScholarshipRaceId` int(11) NOT NULL,
  `ScholarshipId` int(11) DEFAULT NULL,
  `SRace` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarshiprace`
--

INSERT INTO `scholarshiprace` (`ScholarshipRaceId`, `ScholarshipId`, `SRace`) VALUES
(186, 50, 'No Requirements'),
(187, 50, 'Acehnese'),
(188, 50, 'Balinese'),
(189, 50, 'Banjarese'),
(190, 50, 'Bantenese'),
(191, 50, 'Batak'),
(192, 50, 'Betawi'),
(193, 50, 'Bugis'),
(194, 50, 'Chinese'),
(195, 50, 'Cirebonese'),
(196, 50, 'Foreign'),
(197, 50, 'Javanese'),
(198, 50, 'Madurese'),
(199, 50, 'Makassarese'),
(200, 50, 'Malay'),
(201, 50, 'Minahasan'),
(202, 50, 'Minangkabau'),
(203, 50, 'Sasak'),
(204, 50, 'Sundanese'),
(205, 50, 'Other'),
(206, 51, 'No Requirements'),
(207, 51, 'Acehnese'),
(208, 51, 'Balinese'),
(209, 51, 'Banjarese'),
(210, 51, 'Bantenese'),
(211, 51, 'Batak'),
(212, 51, 'Betawi'),
(213, 51, 'Bugis'),
(214, 51, 'Chinese'),
(215, 51, 'Cirebonese'),
(216, 51, 'Foreign'),
(217, 51, 'Javanese'),
(218, 51, 'Madurese'),
(219, 51, 'Makassarese'),
(220, 51, 'Malay'),
(221, 51, 'Minahasan'),
(222, 51, 'Minangkabau'),
(223, 51, 'Sasak'),
(224, 51, 'Sundanese'),
(225, 51, 'Other'),
(226, 52, 'No Requirements'),
(227, 52, 'Acehnese'),
(228, 52, 'Balinese'),
(229, 52, 'Banjarese'),
(230, 52, 'Bantenese'),
(231, 52, 'Batak'),
(232, 52, 'Betawi'),
(233, 52, 'Bugis'),
(234, 52, 'Chinese'),
(235, 52, 'Cirebonese'),
(236, 52, 'Foreign'),
(237, 52, 'Javanese'),
(238, 52, 'Madurese'),
(239, 52, 'Makassarese'),
(240, 52, 'Malay'),
(241, 52, 'Minahasan'),
(242, 52, 'Minangkabau'),
(243, 52, 'Sasak'),
(244, 52, 'Sundanese'),
(245, 52, 'Other'),
(246, 53, 'No Requirements'),
(247, 53, 'Acehnese'),
(248, 53, 'Balinese'),
(249, 53, 'Banjarese'),
(250, 53, 'Bantenese'),
(251, 53, 'Batak'),
(252, 53, 'Betawi'),
(253, 53, 'Bugis'),
(254, 53, 'Chinese'),
(255, 53, 'Cirebonese'),
(256, 53, 'Foreign'),
(257, 53, 'Javanese'),
(258, 53, 'Madurese'),
(259, 53, 'Makassarese'),
(260, 53, 'Malay'),
(261, 53, 'Minahasan'),
(262, 53, 'Minangkabau'),
(263, 53, 'Sasak'),
(264, 53, 'Sundanese'),
(265, 53, 'Other'),
(266, 54, 'No Requirements'),
(267, 54, 'Acehnese'),
(268, 54, 'Balinese'),
(269, 54, 'Banjarese'),
(270, 54, 'Bantenese'),
(271, 54, 'Batak'),
(272, 54, 'Betawi'),
(273, 54, 'Bugis'),
(274, 54, 'Chinese'),
(275, 54, 'Cirebonese'),
(276, 54, 'Foreign'),
(277, 54, 'Javanese'),
(278, 54, 'Madurese'),
(279, 54, 'Makassarese'),
(280, 54, 'Malay'),
(281, 54, 'Minahasan'),
(282, 54, 'Minangkabau'),
(283, 54, 'Sasak'),
(284, 54, 'Sundanese'),
(285, 54, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `scholarshiptype`
--

CREATE TABLE `scholarshiptype` (
  `ScholarshipTypeId` int(11) NOT NULL,
  `ScholarshipId` int(11) DEFAULT NULL,
  `SType` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarshiptype`
--

INSERT INTO `scholarshiptype` (`ScholarshipTypeId`, `ScholarshipId`, `SType`) VALUES
(125, 50, 'No Requirements'),
(126, 50, 'Academic Scholarships'),
(127, 50, 'Financial Scholarships'),
(128, 50, 'Athletic Scholarships'),
(129, 50, 'Creative Scholarships'),
(130, 50, 'Military Scholarships'),
(131, 50, 'Scholarships for Minorities'),
(132, 50, 'Scholarships for Women'),
(140, 51, 'Scholarships for Women'),
(141, 52, 'No Requirements'),
(142, 52, 'Academic Scholarships'),
(143, 52, 'Financial Scholarships'),
(144, 52, 'Athletic Scholarships'),
(145, 52, 'Creative Scholarships'),
(146, 52, 'Military Scholarships'),
(147, 52, 'Scholarships for Minorities'),
(148, 52, 'Scholarships for Women'),
(149, 53, 'No Requirements'),
(150, 53, 'Academic Scholarships'),
(151, 53, 'Financial Scholarships'),
(152, 53, 'Athletic Scholarships'),
(153, 53, 'Creative Scholarships'),
(154, 53, 'Military Scholarships'),
(155, 53, 'Scholarships for Minorities'),
(156, 53, 'Scholarships for Women'),
(157, 54, 'No Requirements'),
(158, 54, 'Academic Scholarships'),
(159, 54, 'Average Academic Performance Scholarships'),
(160, 54, 'Athletic Scholarships'),
(161, 54, 'Creative Scholarships'),
(162, 54, 'Military Scholarships'),
(163, 54, 'Scholarships for Minorities'),
(164, 54, 'Scholarships for Women');

-- --------------------------------------------------------

--
-- Table structure for table `trscholarship`
--

CREATE TABLE `trscholarship` (
  `TrScholarshipId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ScholarshipId` int(11) NOT NULL,
  `Status` varchar(225) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trscholarship`
--

INSERT INTO `trscholarship` (`TrScholarshipId`, `UserId`, `ScholarshipId`, `Status`) VALUES
(27, 136, 50, 'Approved'),
(29, 139, 53, 'Approved'),
(30, 139, 52, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `universityimage`
--

CREATE TABLE `universityimage` (
  `UniversityImageId` int(11) NOT NULL,
  `UniversityId` int(11) NOT NULL,
  `Images` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universityimage`
--

INSERT INTO `universityimage` (`UniversityImageId`, `UniversityId`, `Images`) VALUES
(44, 109, 'binus.jpg'),
(45, 109, 'binus2.jpg'),
(46, 109, 'binus3.jpg'),
(47, 110, 'ntu.jpg'),
(48, 110, 'ntu2.jpg'),
(49, 110, 'ntu3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `universitymajor`
--

CREATE TABLE `universitymajor` (
  `UniversityMajorId` int(11) NOT NULL,
  `UniversityId` int(11) DEFAULT NULL,
  `UMajor` varchar(255) DEFAULT NULL,
  `TutionFee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universitymajor`
--

INSERT INTO `universitymajor` (`UniversityMajorId`, `UniversityId`, `UMajor`, `TutionFee`) VALUES
(111, 109, 'Computer and Information Sciences and Support Services', 65000000),
(112, 109, 'Architecture and Related Sciences', 55000000),
(113, 109, 'Business, Management, Marketing, and Related Support Services', 60000000),
(114, 110, 'Business, Management, Marketing, and Related Support Services', 100000000),
(115, 110, 'Science Technologies/Technicians', 90000000);

-- --------------------------------------------------------

--
-- Table structure for table `usermajor`
--

CREATE TABLE `usermajor` (
  `UserMajorId` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `Major` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermajor`
--

INSERT INTO `usermajor` (`UserMajorId`, `UserId`, `Major`) VALUES
(34, 136, 'Agriculture, Agriculture Operations, and Related Sciences'),
(35, 137, 'Agriculture, Agriculture Operations, and Related Sciences'),
(36, 138, 'Business, Management, Marketing, and Related Support Services'),
(37, 138, 'Citizenship Activities'),
(38, 138, 'Education'),
(39, 138, 'Engineering'),
(40, 138, 'Health Professions and Related Programs'),
(41, 138, 'History'),
(42, 139, 'Agriculture, Agriculture Operations, and Related Sciences'),
(43, 139, 'Architecture and Related Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `userrace`
--

CREATE TABLE `userrace` (
  `UserRaceId` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `Race` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrace`
--

INSERT INTO `userrace` (`UserRaceId`, `UserId`, `Race`) VALUES
(93, 136, 'Chinese'),
(94, 137, 'Acehnese'),
(95, 138, 'Chinese'),
(96, 139, 'Chinese');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `UserTypeId` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `Type` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`UserTypeId`, `UserId`, `Type`) VALUES
(21, 136, 'Academic Scholarships'),
(22, 137, 'Academic Scholarships'),
(23, 138, 'Academic Scholarships'),
(24, 138, 'Scholarships for Women'),
(25, 139, 'Academic Scholarships');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentblog`
--
ALTER TABLE `commentblog`
  ADD PRIMARY KEY (`CommentId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `BlogId` (`BlogId`);

--
-- Indexes for table `msblog`
--
ALTER TABLE `msblog`
  ADD PRIMARY KEY (`BlogId`);

--
-- Indexes for table `msscholarship`
--
ALTER TABLE `msscholarship`
  ADD PRIMARY KEY (`ScholarshipId`);

--
-- Indexes for table `msuniversity`
--
ALTER TABLE `msuniversity`
  ADD PRIMARY KEY (`UniversityId`);

--
-- Indexes for table `msuser`
--
ALTER TABLE `msuser`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `reviewuniversity`
--
ALTER TABLE `reviewuniversity`
  ADD PRIMARY KEY (`ReviewId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `UniversityId` (`UniversityId`);

--
-- Indexes for table `scholarshipmajor`
--
ALTER TABLE `scholarshipmajor`
  ADD PRIMARY KEY (`ScholarshipMajorId`),
  ADD KEY `ScholarshipId` (`ScholarshipId`);

--
-- Indexes for table `scholarshiprace`
--
ALTER TABLE `scholarshiprace`
  ADD PRIMARY KEY (`ScholarshipRaceId`),
  ADD KEY `ScholarshipId` (`ScholarshipId`);

--
-- Indexes for table `scholarshiptype`
--
ALTER TABLE `scholarshiptype`
  ADD PRIMARY KEY (`ScholarshipTypeId`),
  ADD KEY `ScholarshipId` (`ScholarshipId`);

--
-- Indexes for table `trscholarship`
--
ALTER TABLE `trscholarship`
  ADD PRIMARY KEY (`TrScholarshipId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `ScholarshipId` (`ScholarshipId`);

--
-- Indexes for table `universityimage`
--
ALTER TABLE `universityimage`
  ADD PRIMARY KEY (`UniversityImageId`),
  ADD KEY `UniversityId` (`UniversityId`);

--
-- Indexes for table `universitymajor`
--
ALTER TABLE `universitymajor`
  ADD PRIMARY KEY (`UniversityMajorId`),
  ADD KEY `UniversityId` (`UniversityId`);

--
-- Indexes for table `usermajor`
--
ALTER TABLE `usermajor`
  ADD PRIMARY KEY (`UserMajorId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `userrace`
--
ALTER TABLE `userrace`
  ADD PRIMARY KEY (`UserRaceId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`UserTypeId`),
  ADD KEY `UserId` (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentblog`
--
ALTER TABLE `commentblog`
  MODIFY `CommentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `msblog`
--
ALTER TABLE `msblog`
  MODIFY `BlogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `msscholarship`
--
ALTER TABLE `msscholarship`
  MODIFY `ScholarshipId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `msuniversity`
--
ALTER TABLE `msuniversity`
  MODIFY `UniversityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `msuser`
--
ALTER TABLE `msuser`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `reviewuniversity`
--
ALTER TABLE `reviewuniversity`
  MODIFY `ReviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `scholarshipmajor`
--
ALTER TABLE `scholarshipmajor`
  MODIFY `ScholarshipMajorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=745;
--
-- AUTO_INCREMENT for table `scholarshiprace`
--
ALTER TABLE `scholarshiprace`
  MODIFY `ScholarshipRaceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;
--
-- AUTO_INCREMENT for table `scholarshiptype`
--
ALTER TABLE `scholarshiptype`
  MODIFY `ScholarshipTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT for table `trscholarship`
--
ALTER TABLE `trscholarship`
  MODIFY `TrScholarshipId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `universityimage`
--
ALTER TABLE `universityimage`
  MODIFY `UniversityImageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `universitymajor`
--
ALTER TABLE `universitymajor`
  MODIFY `UniversityMajorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `usermajor`
--
ALTER TABLE `usermajor`
  MODIFY `UserMajorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `userrace`
--
ALTER TABLE `userrace`
  MODIFY `UserRaceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `UserTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentblog`
--
ALTER TABLE `commentblog`
  ADD CONSTRAINT `commentblog_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `msuser` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentblog_ibfk_2` FOREIGN KEY (`BlogId`) REFERENCES `msblog` (`BlogId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviewuniversity`
--
ALTER TABLE `reviewuniversity`
  ADD CONSTRAINT `reviewuniversity_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `msuser` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviewuniversity_ibfk_2` FOREIGN KEY (`UniversityId`) REFERENCES `msuniversity` (`UniversityId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scholarshipmajor`
--
ALTER TABLE `scholarshipmajor`
  ADD CONSTRAINT `scholarshipmajor_ibfk_1` FOREIGN KEY (`ScholarshipId`) REFERENCES `msscholarship` (`ScholarshipId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scholarshiprace`
--
ALTER TABLE `scholarshiprace`
  ADD CONSTRAINT `scholarshiprace_ibfk_1` FOREIGN KEY (`ScholarshipId`) REFERENCES `msscholarship` (`ScholarshipId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scholarshiptype`
--
ALTER TABLE `scholarshiptype`
  ADD CONSTRAINT `scholarshiptype_ibfk_1` FOREIGN KEY (`ScholarshipId`) REFERENCES `msscholarship` (`ScholarshipId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trscholarship`
--
ALTER TABLE `trscholarship`
  ADD CONSTRAINT `trscholarship_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `msuser` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trscholarship_ibfk_2` FOREIGN KEY (`ScholarshipId`) REFERENCES `msscholarship` (`ScholarshipId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `universityimage`
--
ALTER TABLE `universityimage`
  ADD CONSTRAINT `universityimage_ibfk_1` FOREIGN KEY (`UniversityId`) REFERENCES `msuniversity` (`UniversityId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `universitymajor`
--
ALTER TABLE `universitymajor`
  ADD CONSTRAINT `universitymajor_ibfk_1` FOREIGN KEY (`UniversityId`) REFERENCES `msuniversity` (`UniversityId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usermajor`
--
ALTER TABLE `usermajor`
  ADD CONSTRAINT `usermajor_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `msuser` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userrace`
--
ALTER TABLE `userrace`
  ADD CONSTRAINT `userrace_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `msuser` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usertype`
--
ALTER TABLE `usertype`
  ADD CONSTRAINT `usertype_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `msuser` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
