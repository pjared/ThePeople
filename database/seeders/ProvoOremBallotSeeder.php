<?php

namespace Database\Seeders;

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\CandidateOpinion;
use App\Models\Location;
use App\Models\ManualCandidate;
use App\Models\PublicOfficePosition;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProvoOremBallotSeeder extends Seeder
{
    public $new_offices = [
        [
            "name" => 'State Congress',
            "years_per_term" => 2,
        ],
        [
            "name" => 'U.S. Congress',
            "years_per_term" => 2,
        ],
    ];

    public $locations = [
        [
            'name' => 'District 58',
            'type' => 'state_congress',
            'state' => 'Utah',
        ],
        [
            'name' => 'District 61',
            'type' => 'state_congress',
            'state' => 'Utah',
        ],
        [
            'name' => 'District 62',
            'type' => 'state_congress',
            'state' => 'Utah',
        ],
        [
            'name' => 'District 3',
            'type' => 'us_congress',
            'state' => 'Utah',
        ],
    ];

    public $ballots = [
        [
            "location_id" => 3,
            "office_id" => 1,
            'has_single_runner' => true,
        ],
        [
            "location_id" => 4,
            "office_id" => 1,
            'has_single_runner' => false,
        ],
        [
            "location_id" => 5,
            "office_id" => 1,
            'has_single_runner' => false,
        ],
        [
            "location_id" => 6,
            "office_id" => 2,
            'has_single_runner' => false,
        ],
    ];

     public $candidates = [
        // UT House 58
        [
            "name" => 'Keven Stratton',
            "dob" => null,
            "bio" => "With a house full of five daughters and three sons, life was full, varied, and fast-paced. Now as nearly empty nesters, they enjoy their children's families and the joys of grandparenting.
            Keven's experience in service began decades ago as he volunteered in the community. The lessons of that service now helps him represent our community's interests. As an entrepreneur, attorney, and farmer, Rep. Stratton owns and operates a group of companies that employ over 150 wonderful people in the areas of Construction, Agriculture, Manufacturing, Real Estate, and Law.",
            "contact_email" => 'keven@kevenstrattoncom',
            "contact_phone_number" => '(801)836-6010',
            'state' => 'Utah',
            "party_name" => 'Republican',
            'site_link' => 'https://kevenstratton.com/',
        ],
        [
            "name" => 'Lucas Ramirez',
            "dob" => '01/01/1975',
            "bio" => "My name is Lucas Ramirez. I am a husband, father, and family nurse practitioner. I am running to represent the people of Utah House District 58 because I believe Utah can maintain fiscal responsibility while prioritizing the health and education of our citizens. I feel it is important to honor the traditions that make Utah special, while also paving a successful path forward for everyone who chooses to call this great state their home.",
            "contact_email" => 'runwithramirez@gmail.com',
            "contact_phone_number" => '(801)922-0562',
            'state' => 'Utah',
            "party_name" => 'Democrat',
            'site_link' => 'https://www.runwithramirez.com/',
        ],
        // UT House 61
        [
            "name" => 'Marsha Judkins',
            "dob" => null,
            "bio" => "Marsha Judkins graduated from Bingham High School in South Jordan (Go Miners!). She then moved to Provo to begin college at BYU on an academic scholarship. Marsha changed her major three times—Mathematics, Piano Pedagogy, Math again—, married a fellow student, had five of their seven children, and moved to their current home west of the freeway in Provo before graduating with a B.A. in Political Science with a minor in Mathematics ten years after she started.",
            "contact_email" => null,
            "contact_phone_number" => null,
            'state' => 'Utah',
            "party_name" => 'Republican',
            'site_link' => 'https://marshajudkins.com/',
        ],
        [
            "name" => 'Michael Anderson',
            "dob" => null,
            "bio" => null,
            "contact_email" => null,
            "contact_phone_number" => null,
            'state' => 'Utah',
            "party_name" => null,
            'site_link' => null,
        ],
        // UT House 62
        [
            "name" => 'Daniel Friend',
            "dob" => null,
            "bio" => "I came to Provo to study editing and the linguistics of English at BYU. Like many students, including my own grandparents, I met my wife there and got married. I've now lived in Provo for over twelve years, the last nine of which have been in House District 62. District 62 is where we bought our first home and started our family. We now have two daughters: Sophie, who's three, and Christina, who's one year old.",
            "contact_email" => 'daniel@friendforutah.com',
            "contact_phone_number" => '(801)960-2602',
            'state' => 'Utah',
            "party_name" => 'Democrat',
            'site_link' => 'https://friendforutah.com/',
        ],
        [
            "name" => 'Norm Thurston',
            "dob" => '11/4/1967',
            "bio" => "For the past 15 years, I have held various positions supporting the State of Utah's efforts to create state-based solutions for local health care issues, and fighting to prevent the implementation of Obamacare in our state. I have helped lead the effort to reform Utah's health care system, serving as Health Reform Coordinator for much of that time. I have been actively involved in Utah's effort to modernize our Medicaid system. In these positions I spent countless hours working with leaders from both the Executive and Legislative branches of state government in the policy development process.",
            "contact_email" => 'normthurston62@gmail.com',
            "contact_phone_number" => '(801)477-5348',
            'state' => 'Utah',
            "party_name" => 'Republican',
            'site_link' => 'http://www.normthurston.com/',
        ],
        // US House 3
        [
            "name" => 'Aaron Heinemen',
            "dob" => null,
            "bio" => "MY ALMA MATER IS UTAH VALLEY UNIVERSITY. INCOMPLETE ASSOCIATE DEGREE IN UNIVERSITY STUDIES, 63 CREDITS ATTAINED SO FAR. I PASSED POLITICAL SCIENCE COURSE WITH AN A MINUS IN FALL SEMESTER 2010. (UTAH VALLEY UNIVERSITY IS CORRUPT AND RUINED AS ADDLED TO THE PERVERSE COMMUNIST IDEOLOGY, AND IT SHOULD BE REFORMED; I AM NO LONGER \"LIBERAL\" BECAUSE OF INSANE CAMPUS CULTURE AS VERY BIASED TO FAVOR LIBERAL IDEOLOGY.)
            I AM PASSIONATE ABOUT POLITICS, AS A REFORMED LIBERTARIAN/FORMER LIBERAL, TO SUPPORT THE PALEO-CONSERVATIVE CAUSES TOWARD RESTORING THE AMERICAN REPUBLIC AND UTAH STATE, ON THE SOUND CONSTITUTIONAL AGENDA, AGAINST THE ENTRENCHED (CORRUPT AND GREEDY) ESTABLISHMENTS INFLUENCED BY THE SPECIAL INTERESTS THAT IGNORE \"WE THE PEOPLE.\"",
            "contact_email" => 'info@aaronforcongress.us',
            "contact_phone_number" => null,
            'state' => 'Utah',
            "party_name" => 'Independent American Party of Utah',
            'site_link' => 'https://www.aaronforcongress.us/',
        ],
        [
            "name" => 'Daniel Cummings',
            "dob" => null,
            "bio" => "Dr. Daniel C. Cummings is a family medicine doctor in Provo, Utah and is affiliated with multiple hospitals in the area, including Choctaw Nation Health Care Center-Talihina and U. S. Public Health Service Indian Hospital-Parker. He received his medical degree from University of Utah School of Medicine and has been in practice for more than 20 years.",
            "contact_email" => null,
            "contact_phone_number" => null,
            'state' => 'Utah',
            "party_name" => 'Constitution Party',
            'site_link' => null,
        ],
        [
            "name" => 'Glenn Wright',
            "dob" => null,
            "bio" => "I am a resident of Park City and Summit County, settling here, in 2006, after 58 years of travel that included residence in 8 states and 3 foreign countries and work in over a dozen other countries. After growing up in urban New Jersey (Paterson), rural Pennsylvania (near Hershey) and upstate New York (Poughkeepsie), I attended Rensselaer Polytechnic Institute, graduating in 1969 with a BS in Aeronautical Engineering. In 2010 I joined American Legion Post 14 in Park City and was drafted into the position of Post Adjutant in 2011.",
            "contact_email" => null,
            "contact_phone_number" => '(435)640-9284',
            'state' => 'Utah',
            "party_name" => 'Democrat',
            'site_link' => 'https://wrightforutahcongressionaldistrict3.com/',
        ],
        [
            "name" => 'John Curtis',
            "dob" => '5/10/1960',
            "bio" => "John R. Curtis proudly represents Utah's 3rd Congressional District. Since being elected to Congress on November 13, 2017, John has worked on 15 pieces of legislation that were signed into law, ranging in diverse topics such as better managing public lands, combatting human trafficking, supporting small businesses, and more. Additionally, he serves as the inaugural Chairman of the Conservative Climate Caucus and a member of the powerful House Committee on Energy and Commerce. He previously served on the House Natural Resources Committee and Foreign Affairs Committee.",
            "contact_email" => null,
            "contact_phone_number" => null,
            'state' => 'Utah',
            "party_name" => 'Republican',
            'site_link' => 'https://curtis.house.gov/',
        ],
        [
            "name" => 'Michael Stoddard',
            "dob" => null,
            "bio" => null,
            "contact_email" => null,
            "contact_phone_number" => null,
            'state' => 'Utah',
            "party_name" => 'Libertarian',
            'site_link' => null,
        ],
    ];

    public $candidate_ballots =[
        1 => 1,
        2 => 1,
        3 => 2,
        4 => 2,
        5 => 3,
        6 => 3,
        7 => 4,
        8 => 4,
        9 => 4,
        10 => 4,
        11 => 4,
    ];

    public $manual_candidates = [
        1 => [
            'note' => 'Not Contacted Yet, 9/14/22',
            'sources' => 'https://kevenstratton.com/',
        ],
        2 => [
            'note' => 'Not Contacted Yet, 9/14/22',
            'sources' => 'https://www.runwithramirez.com/',
        ],
        3 => [
            'note' => 'Not Contacted Yet, 9/14/22',
            'sources' => 'https://marshajudkins.com/',
        ],
        4 => [
            'note' => 'Not Contacted Yet, 9/14/22. Michael Anderson has no website for us to get data from. If you have any information about him, or this is you, please contact us to get signed up.',
            'sources' => '',
        ],
        5 => [
            'note' => 'Not Contacted Yet, 9/14/22',
            'sources' => 'https://friendforutah.com/',
        ],
        6 => [
            'note' => 'Not Contacted Yet, 9/14/22',
            'sources' => 'http://www.normthurston.com/',
        ],
        7 => [
            'note' => 'Not Contacted Yet, 9/14/22.',
            'sources' => 'https://www.aaronforcongress.us/',
        ],
        8 => [
            'note' => 'Not Contacted Yet, 9/14/22',
            'sources' => 'https://www.pbs.org/video/daniel-cummings-constitution-us-house-district-3-wzados/, https://health.usnews.com/doctors/daniel-cummings-366587',
        ],
        9 => [
            'note' => 'Gleen Wright Plans on Signing up and making a profile.',
            'sources' => 'https://wrightforutahcongressionaldistrict3.com/',
        ],
        10 => [
            'note' => 'Not Contacted Yet, 9/14/22',
            'sources' => 'https://curtis.house.gov/',
        ],
        11 => [
            'note' => 'Not Contacted Yet, 9/14/22. Michael Stoddard has very little online presence. We have not been able to find a site for his campaign or any information about him. If you have any information about him, or this is you, please contact us to get signed up.',
            'sources' => '',
        ],
    ];

    public $candidate_opinions = [
        1 => [
            [
                "name" => 'Defending Liberty',
                "stance" => "Leads the effort on restoring and protecting our public lands.
                Chairs Natural Resources, Agriculture and Environmental Quality Committee.
                Landmark business legislation.
                Shepherding legislation that supports criminal justice reform and unclogging courts.",
            ],
            [
                "name" => "Preserving Freedom",
                "stance" => "Chair of the House Legislative Water Commission guiding state water policy.
                Water is critical to our future. Insisting on sound process and policies that include public input and transparency.
                Guiding policy development for the coming unprecedented growth in Utah County.
                Working with leading world experts to address the algal blooms in Utah Lake.",
            ],
            [
                "name" => "Protecting Children",
                "stance" => "Created model legislation that both safeguards and empowers students to safely use technology. The effort is collaborative with school community councils made of experts and parents to determine and promote good practices that keep them safe.",
            ],
            [
                "name" => "Protecting the Unborn",
                "stance" => "Sponsor and pass legislation to enhance the protection of unborn child.",
            ],
            [
                "name" => "Criminal Justice Reform",
                "stance" => "",
            ],
            [
                "name" => "Education Funding ",
                "stance" => "",
            ],
            [
                "name" => "Digital Citizenship",
                "stance" => "",
            ],
            [
                "name" => "Environmental Quality",
                "stance" => "",
            ],
        ],

        2 =>[
            [
                "name" => "PEOPLE BEFORE POLITICS",
                "stance" => "I should represent you because I am committed to confronting the root issues of our community, instead of treating the symptoms. This will bring about lasting healing to our state. As a nurse practitioner, I do this everyday for my patients. I am ready to do this for Utah. I am inspired by the way my district values family and community. I want to take these values and share them with legislators at Capitol Hill, so the entire state can benefit.",
            ],
            [
                "name" => "Addressing Our Individuals Needs For Healthcare",
                "stance" => "As a nurse practitioner, I see first hand patients making difficult choices regarding their healthcare. Too often patients are forced to focus on the costs of prescriptions and copays instead of prioritizing their health and wellbeing. Although we enjoy great healthcare systems here in Utah that provide us with quality care, we need to make sure we're doing all we can to decrease costs and increase access. In my experience, the best way to decrease healthcare costs is to focus on prevention. As our country ages, we often address the needs of our elderly population. While this is important, we need to make sure that we don't ignore the needs of the upcoming generations. Proper nutrition and exercise habits should be encouraged in our schools, homes, and communities, so that our children can grow into healthy adults.",
            ],
            [
                "name" => "Prepare For A Better Future Through Education",
                "stance" => "The solution to improving education in Utah is not an increase of spending, but changing how money is spent. As a state, we need to prioritize valuing teachers who dedicate their lives to bettering our children and our community. With an increase of students with learning disabilities or other individual needs in schools, it is vital that we allocate enough resources and research into providing alternatives routes of success for each and every Utah child. Because of the economic strain Utah is experiencing due to the coronavirus, the state is looking at cutting funding from education. Local education budgets should be protected and our schools shouldn't have to worry about how they're going to find the money to teach our kids. ",
            ],
            [
                "name" => "Preserve Our Natural Beauty",
                "stance" => "Utah is a beautiful state with a variety of landscapes to enjoy. Since we have been blessed with such beauty, it is essential that we prioritize preserving this state for the generations after us. We must use our resources in a responsible way, ensuring we keep the future of Utah in mind. Considering this responsibility, we can still take advantage of the economic benefits our resources can bring. With proper regulations and local involvement, we can ensure Utah's resources are being protected, as well as utilized for economic growth.",
            ],
        ],

        3 => [
            [
                "name" => "Role of State Government",
                "stance" => "The role of state government is to protect the inherent rights of individuals and provide and administer services the private sector will not or cannot provide. Our government operates best when it is local and regulations are limited. State government should defer to county, city, or school board governance when possible. Barring compelling reasons, Marsha will not support legislation that infringes on the rights of or adds mandates to local governments.",
            ],
            [
                "name" => "Prioritized Spending",
                "stance" => "Before we even think about raising taxes, we need to ensure existing dollars are being spent responsibly with a taxpayer return on investment in mind. Marsha will work to provide more efficient budgets that fund essential services while providing the responsible growth our economy needs. By keeping taxes as minimal as possible, and focusing on increased revenue through growth, we can ensure our state remains a great place to live, work, and raise a family.",
            ],
            [
                "name" => "Protecting Life",
                "stance" => "Being pro-life means protecting the sanctity and dignity of human life. Marsha is 100% pro-life and will support policies to reduce the number of abortions.",
            ],
            [
                "name" => "Improving Education",
                "stance" => "Dozens of bills are presented during the legislative session every year attempting to control education at the state level. Decisions should be made locally whenever possible. We currently have the lowest per-student funding in the nation and many school districts are struggling with recruiting and retaining good teachers. We need to support beginning teachers (where the highest turnover happens) through mentoring and training, and support legislation giving teachers more autonomy in their classrooms. The legislature, school districts, and citizens working together can solve any of the issues facing Utah's schools. It is our responsibility to ensure that Utah teachers are fairly compensated, and that every Utah student has the opportunity for a quality education and prosperous future.",
            ],
            [
                "name" => "Responsive Leadership",
                "stance" => "Being a representative is more than casting votes, it's listening and responding to the people you represent. Marsha is committed to always being a phone call away and answering your questions honestly, even when it's not what you want to hear. She will also provide: A pre-session survey that is direct and focused on key issues, Weekly reporting during the session, Regular town halls, Attendance at Eggs & Issues and other events, Post-session report, Answering questions and emails promptly",
            ],
            [
                "name" => "Protecting Our Public Lands",
                "stance" => "The recent creation and reduction of national parks in Utah has displayed an existing gap between different sides in this debate. As a state, we must develop procedures for the proper management of our lands and avoid future federal mandates that may not work in our best interest. We are blessed to live in such a beautiful state and must ensure it remains that way for future generations.",
            ],
            [
                "name" => "Air Quality",
                "stance" => "Poor air quality affects all of us, and it is a matter of life and death for some. Each of us should take responsibility for how our choices affect our environment and those around us. Our beautiful valleys are always going to struggle with air quality because of forces beyond our control. However, there are many things we can do to keep our air as clean as possible. Utah will double in population in the next 50 years, and our leaders need to thoughtfully plan for this growth with air quality in mind. Citizens should not be forced to adopt green behaviors, but expanding choices to those who want to limit their footprints should be a priority and driven by the free market. Policies should encourage and support actions to help keep our air clean. This position is fiscally responsible because pollution has real costs. Families and companies think twice before moving to a place with poor air quality. Also, during inversions, emergency room visits go up, and productivity goes down.",
            ],
            [
                "name" => "Transparency",
                "stance" => "Citizens have every right to know what is going on at the capital and how the government is spending their tax dollars. All steps of the legislative process should be transparent and open to the public. As a representative, Marsha will always answer questions honestly, and be available and accountable to her constituents.",
            ],
            [
                "name" => "Infrastructure/Transportation",
                "stance" => "As Utah continues to grow, so will our transportation and infrastructure needs. Planning for the future is more than merely widening our roads and freeways, we must create other innovative, fiscally sound, and environmentally responsible ways to address our transportation needs now and in the future.",
            ],
            [
                "name" => "Second Amendment",
                "stance" => "As a firm believer in the constitution, Marsha will always stand for the rights of law-abiding citizens to responsibly keep and bear arms.",
            ],
        ],

        5 => [
            [
                "name" => "Preventing Abortions",
                "stance" => "Getting an abortion is no one's life goal. Abortions are always, always a symptom of larger problems—most often, socioeconomic ones. And the key to preventing abortions lies in solving those larger problems.",
            ],
            [
                "name" => "Utah Lake",
                "stance" => "Utah Lake needs to be restored, not transformed by corporate, tax leeching companies who do not follow scientific expertise and ecological best practices.",
            ],
            [
                "name" => "Renters' Rights",
                "stance" => "Every community needs to strike a balance between the property rights of landlords and the human rights of their renters. Sadly, Utah law is widely unbalanced in favor of the landlords.",
            ],
            [
                "name" => "Liveable Wages",
                "stance" => "Utah's current minimum wage is $7.25 an hour. There is no way anyone can support themselves—let alone a family—on such a pittance! This low rate has not been raised since 2009, but the cost of living has gone up—inflation, tuition, and housing costs have all increased. And our Utah legislature has done absolutely nothing to help the hardworking families in our state, despite the experiences of states and cities across the country proving that gradual minimum wage increases don't cost jobs.",
            ],
            [
                "name" => "Affordable Housing",
                "stance" => "Unaffordable housing isn't just a problem in Provo; it's a problem statewide. It is past time for the state legislature to enact laws that will allow Utah's housing supply to finally catch up with demand.",
            ],
        ],

        6 => [
            [
                "name" => "Environment – Water",
                "stance" => "A perennially important issue to Utahns. What options do we have to ensure continued access to safe water for all of our residents?",
            ],
            [
                "name" => "Housing",
                "stance" => "What can we do to improve the stock of housing without interfering with free enterprise? What barriers can be removed to improve affordability?",
            ],
            [
                "name" => "Taxes",
                "stance" => "We need to review our tax policy to overhaul the tax credit system and improve fairness. We also need to address the imbalance between the sales tax and the income tax.",
            ],
            [
                "name" => "Public Education",
                "stance" => "How can we increase parent involvement and participation? How can we drive innovation in our schools at all levels?",
            ],
            [
                "name" => "Transportation",
                "stance" => "How can we utilize public transportation better as a solution for moving people? What does long-range planning require for future needs and corridor preservation? How will we address the fairness issue relating to electric and gas-powered vehicles paying their fair share for road usage and maintenance?",
            ],
            [
                "name" => "Sanctity of Human Life",
                "stance" => "What can we do to reduce the need and opportunity for abortions of convenience?",
            ],
            [
                "name" => "Governance",
                "stance" => "How can we put forward a reasonable budget that funds priorities but also protects our future and the economy?",
            ],
            [
                "name" => "Education",
                "stance" => "Funding Flexibility – I am a constant advocate for fewer earmarks and more local control in deciding how education fund should be used. Division of Roles – I am interested in a more clear delineation of education rules between the legislature and state and local elected board members.",
            ],
            [
                "name" => "Personal Freedom and Business",
                "stance" => "While we have made a lot of progress, there is still work to do to eliminate unnecessary regulations and burdens on Utah's businesses.",
            ],
            [
                "name" => "Poverty Reform",
                "stance" => "Utah invests hundreds of millions each year in alleviating poverty, yet the problem seems to never go away. I am working with several legislators and stakeholders to revise our approach to poverty to be more effective, leading to fewer families that depend on public assistance for their basic needs.",
            ],
            [
                "name" => "Public Health and Health System Reform",
                "stance" => "Drug importation – We need to explore ways to allow the importation of equally safe, but lower cost drugs from Canada or other countries for distribution in Utah.",
            ],
            [
                "name" => "Tax Fairness",
                "stance" => "It's time to look at our tax policies to make sure that taxes and credits are applied fairly and are transparent to the general public.",
            ],
            [
                "name" => "Occupational and Business Freedom",
                "stance" => "Competency based – People should be allowed to do the jobs they have been trained to do. We need to replace “seat-time” and other box-checking requirements with options for people who can demonstrate competency to get to work. Universal principles – We need clear guidelines for when the government should and shouldn't get between a person and their chosen profession and push toward the least burdensome method possible to protect health and welfare.",
            ],
            [
                "name" => "Lowering BAC is About Saving Lives",
                "stance" => "Lowering the BAC limit to 0.05 is not about drinking; it is about separating drinking from driving. It is about preventing crashes, injuries, and deaths.",
            ],
        ],

        7 => [

            [
                "name" => "Sick and Tired of the \"status quo\" corruption",
                "stance" => "I run for U.S. House of Representatives, Congressional District 3 because I'm sick and tired of the \"status quo\" corruption that continue to infect the body politics and structures of Utah state AND U.S. government. I am particular about dealing head-on with the corruption that affects U.S. legislature and present & future administration, and the various offices that always abuse you, the taxpayers, for their self-enrichment with consolidated powers that is contrary to the U.S. constitution and that disregards the ethos of \"do unto others as they do unto you.\" U.S. government should not be the playground to curry the corrupt favors as it happens too frequently with our American government that pretends to be legitimate, yet upholds the establishment rules in seeking to control our facet of life, liberty, property, and the pursuit of happiness, which includes the right to gainful employment without obstacles of prejudice and unjust discrimination for self-sufficiency toward the idealized goal of happiness, without interference.",
            ],
            [
                "name" => "An Increases in All Areas",
                "stance" => "I pledge to be the contrarian in standing up to the decrepitude of the establishment that illegitimately dominates this land as the state of Utah continue to grapple with the increases in all areas, especially the demography that lends to the new crises such as housing and job.",
            ],
            [
                "name" => "Nullify the Arcane & Traitorous Laws at the State Level",
                "stance" => "As the future legislator, I offer the cure with the proposed bills that will nullify the arcane & traitorous laws at the state level, such as HB 116 (2011 law) that tries to usurp U.S. immigration policy to favor importing immigrants for (cheap) labor and “Count My Vote” SB 54, to preserve the saner Utah republic, to extend to every state to prevent the similar wrongs. And by extension—restore America to its greatness, by repealing bad federal laws and introducing common sense constitutional amendments, starting with repealing the 17th Amendment (direct election of U.S. Senators) that serve as one of many deep roots of corruption that continue to damage America.",
            ],

            [
                "name" => "I Pledge to Vote for Donald Trump",
                "stance" => "I pledge to vote for Donald Trump to elect as Speaker of the House, then impeach Biden and Harris on charges that include dereliction of duty and corruption, and breaching the oath to defend and uphold the U.S. Constitution. Then Donald Trump ascends to retake the presidential power that had been denied as robbed in the 2020 election fraud that was engineered to install Biden, Harris and the \"lawmakers\" in thieved seats to ruin America because they are drunk with power. ",
            ],
        ],

        8 => [
            [
                "name" => "Prevent Congress From Borrowing Using U.S. Credit",
                "stance" => '',
            ],
            [
                "name" => "Require National Debt Repayment Within 50 Years",
                "stance" => '',
            ],

            [
                "name" => "Restoring Prior Constitutional Republic",
                "stance" => '',
            ],
        ],

        10 => [
            [
                "name" => "Climate Change and Water",
                "stance" => "Agriculture and carbon extraction are incompatible. We will not long be able to do both. The drought has caused ranchers throughout Utah to cull their herds. Agriculture has been the big loser in in this trend of dry years.",
            ],
            [
                "name" => "Social issues",
                "stance" => "The Supreme Court's actions effecting women's Health, gun violence and the environment need attention from Congress.",
            ],
            [
                "name" => "Energy Security",
                "stance" => "The war in Ukraine has emphasized our need for secure and affordable energy. Electrification of transport, supported by locally produced renewable electrical energy will insulate us from price fluctuations and put a stake in the heart of petro-despots like Putin and others around the world.",
            ],
            [
                "name" => "Air Quality",
                "stance" => "Electrification of transport, supported by locally produced renewable electrical energy will also eliminate much of the air pollution that plagues the Wasatch Front and many other areas of Utah.",
            ],
            [
                "name" => "Economic Growth",
                "stance" => "Economic growth is uneven accross the District. Climate change and its effects and responses will have major influences on different parts of the district. Finding solutions NOW is vital for the future of all of our residents.",
            ],
        ],

        11 => [
            [
                "name" => "Economy & Jobs",
                "stance" => "As a former small businessman, I understand the difficulties Utahns experience and I'm here to help by creating economic opportunity in every district from Provo to Sandy and communities in-between.",
            ],
            [
                "name" => "Education",
                "stance" => "As your Congressman, I am committed to helping improve our education system by empowering the states to play a larger role in developing the resources they need to hire and keep the best.",
            ],
            [
                "name" => "Energy and Natural Resources and Public Land",
                "stance" => "I am fighting hard as a member of the House Natural Resources Committee to ensure that our rural counties have the economic development and resources they need to prosper.",
            ],
            [
                "name" => "Foreign Affairs & Trade",
                "stance" => "As a member of the House Foreign Affairs Committee, and as a missionary in Taiwan, I have a great appreciation for the important leadership role that the U.S. plays in the world.",
            ],
            [
                "name" => "Healthcare",
                "stance" => "I believe that innovation and free market principles can improve our healthcare system. Read about what I'm doing from speaking out against the Medical Device Tax to reducing government interference.",
            ],
            [
                "name" => "Medicaid, Medicare & Social Security",
                "stance" => "I am committed to keeping these programs strong and available for those who need it now and making sure that they are sustainable for future generations.",
            ],
            [
                "name" => "Second Amendment",
                "stance" => "I am a strong supporter and protector of Americans' Constitutional rights. I know we can and must provide solutions that both honor those rights and protect our neighborhoods and schools.",
            ],
            [
                "name" => "Tech & Internet",
                "stance" => "Our district is home to Silicon Slopes, one of the nation's fastest growing and thriving tech sectors. As a member of the House Small Business Committee, I am focused on helping foster innovation.",
            ],
            [
                "name" => "Veterans",
                "stance" => "My office is proud to support and provide services to those who have bravely served our country, as well as the military families that support them.",
            ],
        ],

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->new_offices as $office) {
            PublicOfficePosition::create([
                "name" =>  $office['name'],
                "years_per_term" => $office['years_per_term'],
            ]);
        }

        foreach($this->locations as $location) {
            Location::create([
                'name' => $location['name'],
                'type' => $location['type'],
                'state' => $location['state'],
            ]);
        }

        foreach($this->ballots as $ballot) {
            Ballot::create([
                "location_id" => $ballot['location_id'],
                "office_id" => $ballot['office_id'],
                'voting_date' => Carbon::createFromDate(2022, 11,8),
                'has_single_runner' => $ballot['has_single_runner'],
            ]);
        }

        foreach($this->candidates as $i => $candidate) {
            if($i == 1) {
                $candidate = Candidate::create([
                    "name" => $candidate['name'],
                    "dob" => $candidate['dob'] ? Carbon::createFromFormat('m/d/Y', $candidate['dob']) : null,
                    "bio" => $candidate['bio'],
                    "contact_email" => $candidate['contact_email'],
                    "contact_phone_number" => $candidate['contact_phone_number'],
                    'state' =>$candidate['state'],
                    "party_name" => $candidate['party_name'],
                    'site_link' => $candidate['site_link'],
                    "ballot_id" => $this->candidate_ballots[$i + 1],
                    'show' => false,
                ]);
                $this->add_photo($candidate);
                continue;
            }
            $candidate = Candidate::create([
                "name" => $candidate['name'],
                "dob" => $candidate['dob'] ? Carbon::createFromFormat('m/d/Y', $candidate['dob']) : null,
                "bio" => $candidate['bio'],
                "contact_email" => $candidate['contact_email'],
                "contact_phone_number" => $candidate['contact_phone_number'],
                'state' =>$candidate['state'],
                "party_name" => $candidate['party_name'],
                'site_link' => $candidate['site_link'],
                "ballot_id" => $this->candidate_ballots[$i + 1],
                'show' => true,
            ]);
            $this->add_photo($candidate);
        }
        foreach($this->manual_candidates as $i => $manual_candidate) {
            ManualCandidate::create([
                'candidate_id' => $i,
                'note' => $manual_candidate['note'],
                'sources' => $manual_candidate['sources'],
            ]);
        }

        foreach($this->candidate_opinions as $i => $single_candidate_opinions) {
            foreach($single_candidate_opinions as $candidate_opinion) {
                CandidateOpinion::create([
                    'candidate_id' => $i,
                    "name" => $candidate_opinion['name'],
                    "stance" => $candidate_opinion['stance'],
                ]);
            }
        }
    }

    public function add_photo($candidate)
    {
        $photo_path = 'profile-photos/' . $candidate->slug;
        if(Storage::disk('public')->exists($photo_path . ' .jpg')) {
            $candidate->profile_photo_path = $photo_path . ' .jpg';
            $candidate->save();
        } else if(Storage::disk('public')->exists($photo_path . ' .jpeg')) {
            $candidate->profile_photo_path = $photo_path . ' .jpeg';
            $candidate->save();
        } else if(Storage::disk('public')->exists($photo_path . ' .JPG')) {
            $candidate->profile_photo_path = $photo_path . ' .JPG';
            $candidate->save();
        } else if(Storage::disk('public')->exists($photo_path . ' .webp')) {
            $candidate->profile_photo_path = $photo_path . ' .webp';
            $candidate->save();
        } else if(Storage::disk('public')->exists($photo_path . ' .png')) {
            $candidate->profile_photo_path = $photo_path . ' .png';
            $candidate->save();
        } else if(Storage::disk('public')->exists($photo_path . ' .PNG')) {
            $candidate->profile_photo_path = $photo_path . ' .PNG';
            $candidate->save();
        }
    }
}
