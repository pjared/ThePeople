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

class UTHouseSeeder extends Seeder
{
    public $data = [
        [
            'location' => 'District 1',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Joel Ferry',
                        'dob' => null,
                        'bio' => "Joel Ferry was born and raised in West Corinne, Box Elder County and has always loved the land and community spirit that's felt in Northern Utah. Joel graduated from Box Elder High School in 1996 and served an LDS mission to Brazil. He graduated from Utah State University with a degree in Economics and Finance in 2003.",
                        'contact_email' => 'votejoelferry@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.votejoelferry.com/',
                        'sources' => 'https://www.votejoelferry.com/',
                    ],

                    'opinions' => [

                        [
                            'name' => "Economy & Taxes",
                            'stance' => "As our state faces difficult decisions, we must remain principle-based to be successful. Below, you'll find the principles that will guide me as your legislator."
                        ],
                        [
                            'name' => "Property Rights",
                            'stance' => "The right to own property is fundamental to a free people.  I will work hard to ensure personal property rights are protected."
                        ],
                        [
                            'name' => "Public Lands",
                            'stance' => "My family enjoys visiting and spending time on federal and state lands.  I will make sure those areas are protected for recreation, as well as wise agriculture and industry uses.  Public land-use policy decisions should be made on a local level."
                        ],
                        [
                            'name' => "Education",
                            'stance' => "Education functions best when decisions are made on a local level.  Funding our public schools at all levels is a top priority.  I will make sure we follow high standards for our teachers and students while allowing parent choice and providing the best help we can to teachers and students."
                        ],
                        [
                            'name' => "Public Safety",
                            'stance' => "I am a proud supporter of our public safety officials.  We live in a time when we need to be sure our safety is protected and our first responders are respected.   "
                        ],
                        [
                            'name' => "Transportation",
                            'stance' => "With expected population growth, we need to make sure our transportation needs are met and that our rural areas are not forgotten.  Funding the maintenance and new construction of our transportation systems is critical to the economic development of our community."
                        ],
                        [
                            'name' => "Mental Health",
                            'stance' => "I acknowledge the many different types of mental disorders and support help and treatment for individuals.  I will work to make sure resources are available for those who need help."
                        ],
                        [
                            'name' => "Health Care",
                            'stance' => "My family has felt the effects of a worsening health care system.  I support free market solutions to get us back to affordable rates for families and competitive business opportunities."
                        ],
                        [
                            'name' => "Innovation",
                            'stance' => "Technology is a wonderful thing.  I am encouraged by all the good I can see in science and how it can benefit agriculture, health, and business. I will support new opportunities for growth in this area."
                        ],
                        [
                            'name' => "2nd Amendment",
                            'stance' => "I am an avid sportsman and enjoy spending time in the field with my children.  As an owner and member of hunting clubs, I strongly support the 2nd Amendment."
                        ],
                        [
                            'name' => "Energy",
                            'stance' => "Developing new forms of energy is crucial to support our growing population. I believe that Utah can lead the way in developing new energy technologies.  I support the development of all forms of power."
                        ],

                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Joshua Hardy',
                        'dob' => null,
                        'bio' => "I am running for House District 1 because we need a representative who will represent the district. We have been represented by one party for too long and I feel it is time for change. We need someone who will listen to the people from this district and someone who will bring positive change that will benefit us. I am that person.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.joshuahardy4utah.com/',
                        'sources' => 'https://www.joshuahardy4utah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Education",
                            'stance' => "With having a shortage of teachers, increasing teachers' pay will attract more teachers to our schools. Too many teachers have to buy supplies out of their own pockets for students to have the necessary education. Another issue is children not having the means to have a free meal in school, too many children are going hungry and lack of food leads to lack of energy for the child to function in school and receive a proper education.",
                        ],
                        [
                            'name' => "Air quality",
                            'stance' => "Is an issue that I feel strong about; using fossil fuels causes air pollution, which can cause damage to crops and the health of farm animals. We need to adopt the practice of solar energy to increase air quality.",
                        ],
                        [
                            'name' => "Equal pay for women",
                            'stance' => "Too many women are being under paid for the work they put forth in the workforce and don't receive the recognition they deserve. Employers cannot discriminate against female workers by paying them less wages than their male counterparts who work in the same establishment performing similar work, but they do.   Utah continues to lack a standalone equal pay law. Instead, women workers must rely on the Utah Antidiscrimination Act. Utah continues to receive the designation as one of the \"worst states for women\" and the state with the second-highest gender pay gap in the country. Female workers earn 70.2 cents for every dollar earned by males. Utah is one of the last states and the only Rocky Mountain West state without an equal pay law. If an employee feels they have been discriminated against over pay, they have to file a complaint with the Labor Commission within 180 days of the incident.  The employee has to rely on the Labor Commission to see the complaint through instead of hiring an attorney and taking it to civil court. Given this, Utah has one of the weakest regulatory frameworks for addressing the gender pay disparities.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 10',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Jill Koford',
                        'dob' => null,
                        'bio' => "My name is Jill Koford, lifelong resident of Weber County, and I'm running to represent you in the Utah House of Representatives. I am running, first and foremost, to give you a strong voice in the discussions of our state's future.",
                        'contact_email' => 'jill@votekoford.com',
                        'contact_phone_number' => '(385)244-0170',
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://votekoford.com/',
                        'sources' => 'https://votekoford.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Low Taxes",
                            'stance' => "There are plenty of old adages about death and taxes as separate and distinct objects. Instead, I liken taxes to death by a thousand cuts. Along with the general buckets of collecting taxes (income, property, capital gains, use, etc.) are the many different entities who get a bite at each of those categories. If you've never looked closely at your property tax bill or the budgets of your local, state, and federal government, I would recommend doing so to get a better grasp of who spends your hard-earned money. Whatever your political background or party affiliation, I believe you will find dozens of things you don't think are necessary government expenditures. Instead of government asking \"What programs can we support?\" it should ask \"What programs are no longer needed? What programs could we live without?\" Government has a fiduciary responsibility to the taxpayers to be transparent in taxation, and fiscally conservative with the funds it collects.",
                        ],
                        [
                            'name' => "Natural Resources",
                            'stance' => "Utah has the most beautiful natural resources in the nation, and we have shown time and time again that we manage our state assets better than most. Yet, much of the public land within Utah is still (mis)managed by the federal government, and we should seek to wrest all we can to more local control. We also need to have some very candid conversations about our most precious resource: water. Water is a complex issue that includes conservation, preservation, and storage, and it's time we look with a greater and longer-term vision than ever before so we can sustain our population for generations.",
                        ],
                        [
                            'name' => "Inflation",
                            'stance' => "With inflation at its highest in over 40 years, it is something ever-present on all our minds. The question is, how can the state government impact inflation? I believe in sound conservative economic principles: a balanced budget, lower taxes, reduced government spending, and the power of the free market which includes deregulation and privatization. If we are tightening our belts in the home and at the grocery store, then the government should be doing the same. Utah has been hailed as the best run state in the union, and I think we're on the right track, but I also believe there are ways we can improve. There are always ways to be more efficient and to get government out of the way.",
                        ],
                        [
                            'name' => "Education Innovation",
                            'stance' => "I am an educator, and believe in parental rights when it comes to the education of their children. Traditional schools, charter schools, online schools, home schools, and boundary waivers provide choice and creative options for parents because one size does not fit all. Instead of putting kids in boxes when it comes to creative thinking and problem solving, let's put them in an environment where they can think critically and build their logical reasoning. Children are the answer! They will develop new technologies that will move us forward if we teach them that they can. Every student should know they are capable of whatever they put their mind and energy into. Opportunities come in all shapes and sizes and that means championing education in all its forms: traditional college, certificates, trade school, and more.",
                        ],
                        [
                            'name' => "Civility",
                            'stance' => "It just has to be said: Our current political dialogue stinks. It's rotten. Not long ago we could have reasoned discussions and disagreements with one another, and now it's a matter of \"if you don't agree with me 100% of the time, then we're enemies.\" Nothing makes me more disheartened than that narrow-minded attitude. I sure hope we can find a lot of common ground in this campaign, because I do want to be the best representative for you. But I suspect we won't agree on literally every issue, and I believe that's okay! I will always be honest and straightforward with my beliefs, and I will respect you and seek to understand your beliefs. My goal is to provide responsive representation and fierce advocacy for the entire district.",
                        ],
                        [
                            'name' => "Limited Government/Personal Independence",
                            'stance' => "One of the best ways to allow for civility and disagreement is to empower you as an individual to make more of your own decisions. It's only when we entrust the government to make all of our decisions for us that we get into such heated life-or-death arguments about how to live our lives. That way, if you have a slight disagreement with your neighbor, that's okay! Disagreement and debate help us to sift through the chaff and get to the best ideas. I believe that you should be free to choose how you'll live your life without asking for permission from the government.  You do what you want as long as it doesn't interfere with the rights of another.",
                        ],
                        [
                            'name' => "Military & Veterans",
                            'stance' => "The contribution of Veterans to our nation can never be appreciated adequately. I feel lucky everyday for the men and women who have served and are currently serving in the armed forces. We should do whatever we can to ensure that Veterans and active duty Service Members are treated with the utmost respect in our great state. Additionally, the economic impact of Hill Air Force Base, neighboring HD10, cannot be overstated. We are fortunate in our area to be in the flightpath of HAFB, and frequently I am proud to hear and feel the sound of freedom flying overhead.",
                        ],
                        [
                            'name' => "Law Enforcement & First Responders",
                            'stance' => "Being raised by a firefighter, I learned great respect and admiration for the men and women who put their lives on the line to keep our communities safe. I am grateful to have gotten to know our Sheriff and I ardently support our men and women in law enforcement and emergency response. I will work hand-in-hand with these fine people to make certain they have the support and resources they need to do their jobs effectively.",
                        ],
                        [
                            'name' => "2nd Amendment",
                            'stance' => "I am a lifetime member of the NRA, a lifetime member of Frontsight firearms training, and have a concealed carry permit. I believe the Constitution makes clear that citizens have the right to own firearms. You should have the right to protect you and yours from danger. While many issues have nuance and complexities, this one doesn't. You have the right to bear arms.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Rosemary Lesser',
                        'dob' => null,
                        'bio' => "After graduating in the very first class of women undergrads at the University of Notre Dame, Rosemary was commissioned as an officer in the U.S. Air Force. She continued her education at the nation's only military medical school where she earned her medical degree. She went on to specialize in OB/GYN and served military members and their families in Germany and Texas. After 15 years in the Air Force, Rosemary and her family moved to Ogden. ",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.rosemarylesser.com/',
                        'sources' => 'https://www.rosemarylesser.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Healthcare",
                            'stance' => "​As a physician, Rosemary knows how important healthcare is to our families and our community. That's why she strongly believes that healthcare should be affordable and accessible for all Utahns. ",
                        ],
                        [
                            'name' => "Taxes",
                            'stance' => "Rosemary believes that a fair and well-balanced tax system is key to maintaining and building upon Utah's economic success.",
                        ],
                        [
                            'name' => "Public Education",
                            'stance' => "Rosemary is an active participant in the public education programs the state legislature has funded.",
                        ],
                        [
                            'name' => "Childcare",
                            'stance' => "Finding affordable quality child care is challenging to many Utah families with children.",
                        ],
                        [
                            'name' => "Clean Air",
                            'stance' => "Clean air is essential to the health of our communities and our environment, and it is one of the biggest challenges that we face as a state.",
                        ],
                        [
                            'name' => "Clean Water",
                            'stance' => "As we have seen the past few years, droughts in Utah is getting continually worse and more frequent.",
                        ],
                        [
                            'name' => "Clean Energy",
                            'stance' => "",
                        ],
                        [
                            'name' => "The Great Salt Lake",
                            'stance' => "Since 1986, Utah's Great Salt Lake has dropped a staggering 20.35 feet. The effects will cause grave damage to Utah's environment, public health, and economy if we don't do something to stop it now. ",
                        ],
                        [
                            'name' => "Veterans",
                            'stance' => "\"Integrity First. Service Before Self. Excellence in All We Do.\"",
                        ],
                        [
                            'name' => "Affordable Housing",
                            'stance' => "Ogden is quickly becoming one of the hottest housing markets in the nation. That is what Forbes Magazine reported in April 2021, including our enchanting town among \"America's Top Ten Hottest Markets.\" It's easy to understand why Ogden is receiving national attention--for the same reasons Rosemary and her husband decided to raise their family here over 29 years ago. As your State Representative, Rosemary encourages this period of growth. She is also working hard to deliver common-sense policies that place our community on a path toward sustainable development.",
                        ],

                        [
                            'name' => "Protecting Public Health",
                            'stance' => "As a member of the Opioid Committee with the Ogden Civil Action network (Ogden CAN), Rosemary has joined with leaders throughout our state to fight against Utah's challenges with opioid addiction.",
                        ],
                        [
                            'name' => "Election Integrity",
                            'stance' => "Rosemary is proud that Utah is a model for the nation when it comes to election integrity. Our election system is safe, secure, and accessible for all Utahns, and Rosemary is committed to keeping it that way. ",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 11',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Katy Hall',
                        'dob' => null,
                        'bio' => " My name is Katrina Hall, my friends call me Katy. I have worn a lot of hats in my life...wife, mother of 4 boys, registered nurse, Bonneville high tennis coach, Navy wife, Air Force mom, Ironman, soon to be Grandma, and now I have decided to run for State House Representative for District 11. My reasons for running are that I have strong conservative values that I feel need to be better represented for our community.",
                        'contact_email' => 'katy4utah11@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'https://katyhall.org/',
                        'sources' => 'https://katyhall.org/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 12',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Mike Schultz',
                        'dob' => null,
                        'bio' => "A life-long resident of Hooper, Roy and West Haven, Representative Mike Schultz has represented Utah House District 12 since 2015. He is committed to public service, limited government and personal liberty.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'https://mike4house.com/',
                        'sources' => 'https://mike4house.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 13',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Karen Peterson',
                        'dob' => null,
                        'bio' => "Karen Peterson was selected in a special election to represent House District 13 (Clearfield, Clinton, Sunset, and West Point) in December 2021. She has lived with her family in Clinton for 15 years and currently works as the Community Development Manager for Sunrise Engineering. Previously she worked as the Legislative Policy Director for Gov. Spencer Cox and as the Deputy Education Policy Advisor for Governor Gary Herbert.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://electkarenpeterson.com',
                        'sources' => 'https://electkarenpeterson.com',
                    ],

                    'opinions' => [
                        [
                            'name' => "Fiscal Conservative",
                            'stance' => "I supported the $200 million dollar tax cut, which benefited those especially on fixed incomes and families with children.",
                        ],
                        [
                            'name' => "Constitutional Conservative",
                            'stance' => "I believe in the second amendment's protections of citizens' right to bear arms and support constitutional carry.",
                        ],
                        [
                            'name' => "Focus on Essential Government Functions",
                            'stance' => "Our communities' arteries are all state roads. As the state moves forward on the 1800 North road project, I was able to advocate for the viaduct over the railroad tracks to happen BEFORE the exit off of I-15.",
                        ],
                        [
                            'name' => "Education",
                            'stance' => "I support parents as their child's first and most important teacher. Parents should have the ability to guide their child's education path. I value the choices that have been provided to parents, including home schooling. I sponsored legislation to help parents know and understand the choices they have locally for their children",
                        ],
                        [
                            'name' => "Transparency and Communication",
                            'stance' => "Being a representative means listening to the people in your district and amplifying their voice at the state level.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Tab Uno',
                        'dob' => null,
                        'bio' => "",
                        'contact_email' => 'tablynuno@msn.com ',
                        'contact_phone_number' => '(801)458-6743',
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'https://www.tablynunoforutahhouse.com/',
                        'sources' => 'https://www.tablynunoforutahhouse.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "HOUSING",
                            'stance' => "One of the few positive outcomes of the COVID-19 has been the disruption in housing transactions that threatened to rapidly transform our neighborhoods.  However as we slowly return to normal, the radical transformation of our neighborhoods could be made permanent.  We need to place a temporary moratorium on these huge corporations on outbidding local residents from buying homes.  We need carefully study how we want our community to look like and how our future neighborhoods will develop instead of allowing outside investors through their corporations to control what our cities will become.  ",
                        ],
                        [
                            'name' => "GOVERNMENT REFORM",
                            'stance' => "Electing people to office who believe in a representative democracy.  Voting for candidates who believe that voters are intelligent and are interested in being involved in the political process if given a fair and decent opportunity.  Forming a State Legislature that includes working for you and Northern Davis County.  Our community needs a candidate dedicated.",
                        ],
                        [
                            'name' => "HEALTH CARE",
                            'stance' => "Our state government must take vigorous action to make sure that the law of our land is upheld and that residents have equitable access to essential mental health services just as they do with their primary medical care.  Depression, anxiety, and suicidal ideation are better addressed through mental health services than just prescribing more and more costly drugs.",
                        ],
                        [
                            'name' => "EDUCATION: Local Control",
                            'stance' => "All of our children deserve a quality education!  North Davis students, low-income students, and minority students need community leaders who will fight for local authority and adequate resources directed towards local schools, teachers, and students to help students become educated, productive citizens not wards of the state.  We cannot afford to allow our children to lag behind the rest of the world while students from other countries and other states take away better-paying jobs. \"More Salt Lake County move-ins come from abroad each year than from many nearby counties,\" The Salt Lake Tribune (September  4, 2020).  Residents have demanded better education for decades.  We have waited too long for real educational reform.",
                        ],
                        [
                            'name' => "Taxes",
                            'stance' => "WE NEED TO REVISIT WHAT IT MEANS TO PAY OUR \"FAIR SHARE\" and consider returning to our cherished values of hard work and the shared sacrifice of our grandparents.  The 1776 Declaration of Independence held that every person is endowed with the inalienable rights of life, liberty, and the pursuit of happiness.  Why do we work so hard and long?  How do we pursue happiness?  What do we mean by \"fair share\" and \"hard work\"?  Most middle-class workers put in long hours of either physical or mental labor paid through a salary or by the hour.  Over the past decades, a whole new class of wealth-generating activity has arisen where money by itself generates money through investments and stock market speculation, where people pay other people to create money wealth that requires no actual physical or mental labor in and by itself.  And the obsessive accumulation of wealth has also contributed to the irrational dream that money brings happiness which it does not.  Studies have established that excessive money does not bring more happiness.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 14',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Karianne Lisonbee',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 15',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Ammon Gruwell',
                        'dob' => null,
                        'bio' => "I am a native Utahn, an electrical engineering manager, and a father of four. I was born in Provo, but have lived in Davis County for the last 5 years. I earned my Masters of Science in Computer Engineering from BYU and currently work at L3Harris Technologies in Salt Lake City as both a technical lead and a manager overseeing the development of communications technology for the Department of Defense.",
                        'contact_email' => '',
                        'contact_phone_number' => '(385)424-1243',
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => 'https://ammongruwell.com/',
                        'sources' => 'https://ammongruwell.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Making Elections More Representative",
                            'stance' => "The two party system has for too long forced voters to choose between the lesser of two evils. Faced with a choice between two political extremes, more voters than ever feel politically homeless. With a few small updates to how we vote, we could usher in a new era of healthy multi-party democracy.",
                        ],
                        [
                            'name' => "Giving Voice Back To The People",
                            'stance' => "If you feel like politicians aren't listening to you, it's because they aren't. Wealthy special interests fund the majority of campaigns in Utah while voters are largely ignored. By amplifying the voice of regular voters, campaign finance reform will give people back their voice.",
                        ],
                        [
                            'name' => "Investing In Tomorrow",
                            'stance' => "In today's toxic political environment, so much focus is put on divisive cultural war issues that urgent investments in the future are being ignored. We need to invest in long term solutions to air, water, and housing crises that simply cannot be ignored any longer.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Brad Wilson',
                        'dob' => null,
                        'bio' => "I'm proud to represent Utah's 15th district in the House of Representatives. I am a lifelong resident of Davis County where I raised my family and built my business. Chosen by my colleagues to serve as Speaker of the House in 2018, I have worked hard to represent my district and position Utah as an economic powerhouse where the people of our state can prosper and enjoy an unsurpassed quality of life.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.votebradwilson.com/',
                        'sources' => 'https://www.votebradwilson.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Tax Cuts",
                            'stance' => "\"Since the last time I asked for your vote, I led the way as we cut income tax for all Utahns and passed additional cuts for families, seniors, and veterans. Utah may not be able to prevent runaway federal spending but we can help Utahns keep more of their hard-earned money. That's a promise I've delivered on.\" - Brad Wilson",
                        ],
                        [
                            'name' => "Fighting Federal Government Overreach",
                            'stance' => "Over the past year, Utah received over $1 billion from the federal government for COVID-19 relief through ARPA funds, saddling our children and grandchildren with unimaginable debt. While they spent recklessly, Brad Wilson made sure Utah invested for the future. Brad Wilson led the House of Representatives as they prioritized investment in Utah's natural resources, roads, and other essential infrastructure projects that will keep our economy strong and help Utahns prosper for generations to come. Brad has seen firsthand the negative impacts of relying on other countries for our natural resources. He strongly supports increasing domestic production to keep Utah and America from being dependent on foreign oil and gas.",
                        ],
                        [
                            'name' => "Election Integrity",
                            'stance' => "\"While I have full faith in Utah's election system, I believe it is important to provide assurance to Utahns that our election systems and processes continue to be secure, fair, and above reproach. As we do with every other area of government. we should assess what works well and what could be done better in our elections.\" - Brad Wilson",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 16',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Trevor Lee',
                        'dob' => null,
                        'bio' => "Trevor Lee is running to bring relief to families struggling with inflation and higher taxes while protecting parental rights and supporting teachers to provide a quality education for our children and grandchildren.",
                        'contact_email' => '',
                        'contact_phone_number' => '(801)721-7896',
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.votetrevorlee.com/',
                        'sources' => 'https://www.votetrevorlee.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Lower taxes to help families struggling with inflation",
                            'stance' => "",
                        ],
                        [
                            'name' => "Protect parental rights and support teachers",
                            'stance' => "",
                        ],
                        [
                            'name' => "Support law enforcement",
                            'stance' => "",
                        ],
                        [
                            'name' => "Defend the 2nd Amendment and our Constitutional rights",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Brent Zimmerman',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 17',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Stewart Barlow',
                        'dob' => null,
                        'bio' => "With my expertise as a medical doctor and as a business owner, I have become one of the go to voices among my legislative colleagues on issues related to health care, business and economic growth. I am working hard to make sure our district's voice is represented on Capitol Hill.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.votestewartbarlow.com/about-stewart',
                        'sources' => 'https://www.votestewartbarlow.com/about-stewart',
                    ],

                    'opinions' => [
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 18',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Paul Cutler',
                        'dob' => null,
                        'bio' => "It's been one of the great honors and privileges of my life to serve the citizens of House District 18 for the past eight years. While it's hard to step aside, that decision was made easier by the knowledge that a dedicated public servant like Paul Cutler was willing to step up and run to replace me. I've known Paul for many years. I trust him, I value his dedicated service as Mayor, and I know he will serve the citizens of our district well. He has my full support.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://votepaulcutler.com/',
                        'sources' => 'https://votepaulcutler.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 19',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Raymond Ward',
                        'dob' => null,
                        'bio' => "I was first elected to the Utah House of Representatives in 2014.  I really like getting to serve there. My family consists of me, my wife Beverly (campaign manager and chief of staff), my son Stephen (in medical school at the U), my daughter Yvonne (working as a software engineer), my son-in-law TJ, (working on a Cybersecurity degree at BYU), and my daughter Lucy (attending MIT).",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.raywardutah.com/',
                        'sources' => 'https://www.raywardutah.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 2',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Holly Gunther',
                        'dob' => null,
                        'bio' => "Holly was born and raised just outside Chicago, Illinois. Veteran of the US Army and current concealed weapons permit holder. Served an LDS mission to Wisconsin. Graduated from BYU Provo. Holly has nine children, two grandchildren, two dogs, and one husband.",
                        'contact_email' => 'votehollygunther@gmail.com',
                        'contact_phone_number' => '(435)222-7500',
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.votehollygunther.org/',
                        'sources' => 'https://www.votehollygunther.org/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Education",
                            'stance' => "I value public education for all children. I will support teachers by providing them with the tools and resources needed to teach effectively and safely. Education is the means to self-reliance. Ensuring a quality education now prevents needing help later. Funding education now means meaningful careers down the line. People's rights are most secure when everyone is afforded a good education and encouraged to be well informed. Public education should receive the highest priority in funding within our state.",
                        ],
                        [
                            'name' => "Environment",
                            'stance' => "As sacred stewards of the earth, we strive to recycle what we can, use energy wisely, and seek to create a cleaner world. Caring for the environment is a sign of respect for the Earth, God, and our children. Our public policy should reflect that imperative. We cannot be indifferent to air and water quality.",
                        ],
                        [
                            'name' => "Economic Opportunity",
                            'stance' => "We each have a responsibility to help all reach self-reliance. Honest pay for an honest day's work creates a strong economy, enabling self-reliant families. A more self-reliant America is a stronger America.",
                        ],
                        [
                            'name' => "Healthcare",
                            'stance' => "Caring for the sick and afflicted is a key aspect of being a part of a moral society. Working to implement and continue healthcare reform is our part of that responsibility. ",
                        ],
                        [
                            'name' => "Immigration",
                            'stance' => "Immigration has served as a foundation for American innovation and greatness since America's founding. Compassionate reform that keeps families together, protects American jobs, allows businesses to find needed employees, and creates a simple path for legal residence is necessary to keep the American dream a reality. ",
                        ],
                        [
                            'name' => "Bipartisanship",
                            'stance' => "The best work can come when we share stewardship and agency, working to make America a better place. Working together towards common goals results in ideas that are best for everyone.",
                        ],
                        [
                            'name' => "The Sanctity of the Human Family",
                            'stance' => "Our human family is under attack. We cannot, in good conscience, call ourselves \"pro-family\" unless we are actively, practically, and concretely looking out for the welfare of ALL families, regardless of their wealth, religion, skin color, gender, race, health, or sexual orientation. We can all strengthen and help maintain families all across the state as the fundamental units of society.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Mike Petersen',
                        'dob' => null,
                        'bio' => "Mike Petersen is the Vice President of LetterPress Software, a Utah based, instructional design and training development firm. Launched in 1997, LetterPress has been honored with the Best of State award, and has created training solutions for countless organizations including Ernst & Young, Kaplan, Inc, the 4H and many more. Mike and his wife Sallie moved to North Logan over 30 years ago so Mike could attend graduate school at Utah State University.",
                        'contact_email' => 'voteformikepetersen@gmail.com',
                        'contact_phone_number' => '(435)770-6925',
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.voteformikepetersen.com/',
                        'sources' => 'https://www.voteformikepetersen.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "The Family is the Fundamental Unit of Society",
                            'stance' => "I am fully supportive of the statement found in our Cache GOP Platform which says: \"The family is the fundamental institution and strength of our society. We support legislation which recognizes the rights and the responsibilities of parents for their minor children. We believe in the right to life for both the born and unborn, and we strongly oppose legalizing abortion except to preserve the life or health of the mother or in cases of rape or incest. We believe that men and women should be responsible in their sexual relationships and that parents should teach that responsibility to their children. We urge the strengthening and enforcement of laws protecting against pornography, prostitution, abuse within families, and the abdication of parental responsibility.\"",
                        ],
                        [
                            'name' => "Pro-life",
                            'stance' => "I am unapologetically pro-life and believe in the sanctity of life. Democrats are pushing the definition of an abortion to later and later in the term of a pregnancy, even defining it outside of the mother's womb. That is infanticide.",
                        ],
                        [
                            'name' => "Second Amendment Rights",
                            'stance' => "The second amendment was included in the Bill of Rights to protect us from an overreaching government. It was not intended to ensure our ability to hunt for food. Laws that limit our ability to protect our homes, our families and our communities have no place in Utah. I was a co-sponsor on H.B.60 which guarantees Utahns, 21 years old or older, the right to carry a firearm or carry a concealed firearm in a public area without a permit.",
                        ],
                        [
                            'name' => "Taxes and Other Fees",
                            'stance' => "The Cache County GOP Platform reminds us that \"The combined burden and complexity of Federal, state, and local taxes are too severe. Republicans support tax reforms at each level, including reducing tax rates, simplifying tax rules and reports.\"",
                        ],
                        [
                            'name' => "Protecting Property Rights",
                            'stance' => "During the 2022 General Session I sponsored two bills to protect the personal property rights of the citizens of Utah.",
                        ],
                        [
                            'name' => "COVID-19 Pandemic",
                            'stance' => "There are three branches of government. Each has responsibilities that the others cannot assume. The legislative branch is responsible for creating laws, the executive branch has the responsibility for executing the laws and the judiciary to interpret the laws. Presidents and Governors who create mandates circumvent and even undermine the constitution. Leaders should teach correct principles and let citizens govern themselves.",
                        ],
                        [
                            'name' => "Mental Health",
                            'stance' => "During and after graduate school I completed internships at the Utah State Hospital as well as in a family therapy practice. I also spent several years working in a 75 bed behavioral medicine unit and then as a high school counselor. These experiences, as well as my life as a dad and grandfather helped to form my deep concern for the mentally ill and especially  those contemplating suicide. While in general I believe social services are best provided by churches, families, and non-profit organizations, individuals with mental health issues are too often unable to reach out for help and are especially vulnerable members of our community that need a unique approach. During the 2022 General Session I was glad to support several important mental health bills including; SB171 - Behavioral Health Curriculum Program, HB236 - Behavioral Health Amendments, and HB278 - Behavioral Health Treatment Access Amendments. I did oppose bills that were intended to provide redundant services.",
                        ],
                        [
                            'name' => "Election Integrity",
                            'stance' => "During the general session I sponsored two bills that improve election processes and increase voter confidence.",
                        ],
                        [
                            'name' => "Water Conservation",
                            'stance' => "As we experience one of the worst droughts in Utah's history I was glad to support several important water bills during the 2022 General Session including; HB282 - Water Wise Landscaping Amendments, HB410 - Great Salt Lake Watershed Enhancement, and HB33 - Instream Water Flow Amendments.",
                        ],
                        [
                            'name' => "Public Safety and Law Enforcement",
                            'stance' => "Like most Utahns I am disturbed that anyone would ever demand anything as irresponsible as \"defund the police.\" There can hardly be a more reckless and thoughtless suggestion. I was glad during the 2022 General Session to support several important law enforcement bills including: HB23 - First Responder Mental Health Services, HB12 - Public Safety Retirement Amendments, and HB426 - Law Enforcement Training Amendments.",
                        ],
                        [
                            'name' => "Public Education",
                            'stance' => "I believe we need to reduce federal and state mandates, increase teacher training and pay, and implement more efficient and effective ways to teach children and prepare them for careers, family, and life. I believe Utah has the brightest students and the most hardworking, dedicated teachers in the country.",
                        ],
                        [
                            'name' => "Government Overreach",
                            'stance' => "I believe lawmakers should evaluate each bill that crosses their desk by looking through two lenses. The first lens is the U.S. Constitution and the second is the GOP Party Platform. These documents are filled with truths that when understood and followed help lawmakers clearly see which bills are necessary and useful to the people and which are not.",
                        ],
                        [
                            'name' => "Caucus Convention vs Signatures",
                            'stance' => "Ballot Initiative Signature Gathering Effort Under WayDelegates are tasked with researching candidates to determine who will represent them best and should appear on the primary election ballot. ",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 20',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Melissa Ballard',
                        'dob' => null,
                        'bio' => "Melissa Garff Ballard was born and raised in Davis County. She attended the University of Utah, where she graduated with a bachelor's degree in Piano Performance and a Master of Music in Piano Performance and Accompanying. She was the Founding Chair of the University of Utah School of Music Advisory Board and Camarata Awards.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://melissagarffballard.com/about-melissa',
                        'sources' => 'https://melissagarffballard.com/about-melissa',
                    ],

                    'opinions' => [
                        [
                            'name' => "Education",
                            'stance' => "Ensuring that quality education is available to all Utahns is a top priority of my legislative office. Education is a key differentiator in providing opportunity and stability for families and economic strength for the future of our communities. Attracting, training, and retaining qualified and motivated teachers is critical to the success of our children and the continued growth and prosperity of our communities. Accountability in our schools will continue our legacy of producing talented students who are ready to contribute in substantive jobs.",
                        ],
                        [
                            'name' => "Air Quality",
                            'stance' => "Poor air quality is a major concern for the health and well-being of Utah families. Inversion is one of the few negatives that companies mention when considering relocation or expansion in Utah. Increased attention has been given to changing vehicle emissions and standards, but new laws need to include building more energy-efficient and low-emission appliances for homes and businesses. According to a recent study, emissions from homes and businesses will replace vehicles as the primary producers of pollution by 2050 if changes are not made. A concerted and sustainable approach to mitigating and alleviating air pollution should be a major concern for all Utahns. ",
                        ],
                        [
                            'name' => "Infrastructure & Economic Development",
                            'stance' => "Utah was founded by pioneers who built communities with the future in mind. They were willing to sacrifice and work hard for the betterment of future generations. It is important that today's Utahns continue to work hard and make the tough choices that will bless our children and future generations. ",
                        ],
                        [
                            'name' => "2nd Amendment & Rural Values",
                            'stance' => "I believe in limited government. I believe in our constitutional right to bear arms. I love the outdoors and grew up hunting, fishing, and riding on cattle drives with my family. I believe in decreasing federal regulation over rural areas, giving Utah land owners the opportunity to manage their own property and to enjoy the immense beauty and world-class recreation that is available here.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Daniel Cottam',
                        'dob' => null,
                        'bio' => "No site found to scrape!",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Libertarian',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],
                [
                    'candidate' => [
                        'name' => 'Phil Graves',
                        'dob' => null,
                        'bio' => "If given the honor of representing the good citizens of Utah House District 20, I promise to fight to strengthen public education, to bring about meaningful campaign finance reform to get dark money out of state politics, and to protect our environment from polluters.  As a native Utahn and long time resident of Bountiful, it is time for the Utah State House to start representing the interests of working class families, and not those of corporations.",
                        'contact_email' => 'philgravesuthd20@yahoo.com ',
                        'contact_phone_number' => '(801)230-7043',
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://electphilgraves.com/',
                        'sources' => 'https://electphilgraves.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Save the Great Salt Lake!",
                            'stance' => "To maintain and improve our quality of life along the Wasatch Front, it is imperative that the overall health of the Great Salt Lake become a priority of the Utah Legislature."
                        ],
                        [
                            'name' => "Reproductive Freedom = Economic Freedom",
                            'stance' => "With the overturning of Roe V. Wade in late June 2022, the reproductive freedoms that women have enjoyed for fifty years were stripped away."
                        ],
                        [
                            'name' => "Education",
                            'stance' => "I believe that investment in our public schools is key to the future success of Utah."
                        ],
                        [
                            'name' => "Public Lands",
                            'stance' => "I believe it is critical that we protect Utah's wild places for future generations."
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 21',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'David Atkin',
                        'dob' => null,
                        'bio' => "David is not a career politician, he's just a man from your community looking to help fix things. David has become very concerned about our community over the years as we lean toward more liberal ideals something needs to be done to stop it. David will fight the good fight for our state to be weaned off of federal grants and assistance, he will also fight to take back land in our state that the federal government has claimed as their own.",
                        'contact_email' => '',
                        'contact_phone_number' => '(801)953-0932',
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://davidcatkin.com/',
                        'sources' => 'https://davidcatkin.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Help Downtown Businesses With The Homeless Problem",
                            'stance' => "David believes that our small businesses are important to the downtown area and the entire valley and is willing to make suggestions to keep the homeless people away from your businesses and promote a cleaner downtown that the people in the community are proud of and want to patronize. Downtown businesses should be able to have the police arrest any vagrant sitting in front of their business if they are causing a disruption to normal business. If the city police won't, or can't respond then the business shall be able to call the sheriff or the state police to alleviate the problem.",
                        ],
                        [
                            'name' => "Private Property Rights",
                            'stance' => "David will fight the city for your right to build whatever you want on land that you have purchased. He will fight for Utahans to keep and own private property. When you buy property nobody should tell you what to do with it, as house rep I will not buy into any anti-American ideas, I believe in the freedom of the American people, and our state and national constitution.",
                        ],
                        [
                            'name' => "66% Of Utah Real Estate Is Owned By The Federal Government",
                            'stance' => "When I win my election for Utah House 21, I will be working hard to take our Utah real estate back from the federal government. I was shocked to learn how much of our state the feds actually own, that number is 66% which is the majority of Utah real estate is controlled by the federal government, and that essentially gives the control of the real estate in our state.  I will build alliances to get this problem rectified and to return Utah real estate to the state of Utah.",
                        ],
                        [
                            'name' => "United By A Common Goal",
                            'stance' => "David believes that Utahans love Salt Lake City, and would like to see it move toward the values that we all know still exist in Utah. Those values include a clean city to bring your family to where they can enjoy it without worrying about what will happen next. Utah believes in family, home, and country and these are the values we'd like to emanate from our state.",
                        ],
                        [
                            'name' => "Utah Values",
                            'stance' => "David  will build alliances in the state house and senate to get things done in an efficient way that produces the results we are looking for. David in Utah values that include family, cleanliness of our cities and a low crime rate.",
                        ],
                        [
                            'name' => "Police Should Be Able To ID Anybody",
                            'stance' => "David  will work hard to make it so the police are able to ID anyone during a traffic stop. If their ID looks to be fake the police should be allowed to verify it.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Sandra Hollins',
                        'dob' => null,
                        'bio' => "Sandra Hollins was born in New Orleans, Louisiana, and she has been a resident of Salt Lake City for the past 30 years. Sandra and her husband David currently reside in Fair Park and have two daughters, Jaynell and Canice, who are currently attending college in Texas.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.sandrahollins.com/',
                        'sources' => 'https://www.sandrahollins.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. It seems Hollins doesn't have an issues page",
                            'stance' => "",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 22',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Jen Dailey-Provost',
                        'dob' => null,
                        'bio' => "I am sincerely honored to serve the community of Utah's House District 24 - thank you! Through the COVID-19 pandemic, I will continue to do my best to represent the voices in our community. I am honored and humbled to continue to work on policy issues including our state's opioid crisis, the rising cost of living that puts many Utahns' housing stability at risk, patient safety, and more.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'http://jenforutah.com/',
                        'sources' => 'http://jenforutah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 23',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Ruth Ann Abbott',
                        'dob' => null,
                        'bio' => "I have been part of this community for many years, working tirelessly to add my few drops to the well of prosperity for all. I was invited to come to Utah to teach at the University of Utah Math department in 2000, and was there for years before moving into public education with my teens, most recently at a school for autism for almost a decade. With my husband, I served eight years on a mission for the Inner City helping those in need gain access to medical, dental, housing and employment. Because drugs were such a powerful influence in most of their lives, progress was slow but people CAN change when others believe in them and give support.",
                        'contact_email' => 'ruthann.abbott@gmail.com',
                        'contact_phone_number' => '(801)582-9503',
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://ruthannabbott.com/',
                        'sources' => 'https://ruthannabbott.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. It seems Abott doesn't have an issues page",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Brian King',
                        'dob' => null,
                        'bio' => "I am running in 2022 to continue to be the champion for Utah families and push for policies that will enact positive change in our community. I am committed and honored to serve the people of House District 23.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.kingforrep.com/index.html',
                        'sources' => 'https://www.kingforrep.com/index.html',
                    ],

                    'opinions' => [
                        [
                            'name' => "Economy:",
                            'stance' => "We need to create a social and environmental atmosphere that will attract companies to Utah and promote the development and success of home grown Utah businesses."
                        ],
                        [
                            'name' => "Public Education:",
                            'stance' => "We must protect and invest into our public education system. This includes more funding allocated to our children, classrooms, and teachers."
                        ],
                        [
                            'name' => "Environment:",
                            'stance' => "Too often the environment takes a back seat to development or other economic interests. Our representatives in the legislature must work to bring greater balance to all environmental issues we in District 23 are concerned about."
                        ],
                        [
                            'name' => "Healthcare:",
                            'stance' => "We must work as a state to ensure that every Utahn has health insurance, and is allowed access to quality healthcare while at the same time encouraging the best and safest possible medical practices in our community."
                        ],
                        [
                            'name' => "Gun Safety:",
                            'stance' => "The health and safety of our community is of the upmost importance. Sensible gun laws, like universal background checks, will help keep firearms out of the hands of those who should not have one. "
                        ],
                        [
                            'name' => "Mental Health",
                            'stance' => "Every Utah family deserves access to mental health resources. We must end the stigma around mental health and expand mental health resources."
                        ],
                        [
                            'name' => "Public Lands",
                            'stance' => "​Ensuring access to public lands is vital to the future of our state."
                        ],
                        [
                            'name' => "Representative Politics",
                            'stance' => "I'm running to ensure that the people in District 23 will continue to be represented by an experienced, knowledgeable, and principled advocate."
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Cabot Nelson',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 24',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Joel Briscoe',
                        'dob' => null,
                        'bio' => "I represent legislative District 25. East and south parts of Salt Lake. I am an educator, and a community activist in favor of open and accountable government.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => '',
                        'sources' => 'https://twitter.com/repbriscoe',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 25',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Rebecca Ipson',
                        'dob' => null,
                        'bio' => "Rebecca is a lifelong resident of Utah.  She grew up in Midvale and moved to West Valley City in 1988 when she married her husband, Mark Ipson.  She graduated from Snow College, then transferred to the University of Utah where she earned a bachelor's degree in Mathematics.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.ipsonforoffice2022.org/',
                        'sources' => 'https://www.ipsonforoffice2022.org/',
                    ],

                    'opinions' => [
                        [
                            'name' => "I believe in Family",
                            'stance' => "Strong families make our nation strong. It is important to support families. ",
                        ],
                        [
                            'name' => "I believe in Education",
                            'stance' => "All students deserve to have a good education. Curriculum and other issues should be determined locally and not by national leaders.",
                        ],
                        [
                            'name' => "I believe in a Safe Community",
                            'stance' => "Everyone wants to feel safe in their communities. I will support efforts to keep people safe. ",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Angela Romero',
                        'dob' => null,
                        'bio' => "Angela Romero has always had a passion to serve. Growing up in Tooele, Utah, Angela was raised by her grandparents. Their dedication to raising a hard-working, well-educated woman inspired her to pursue college, graduating with a Bachelor's degree in Political Science and a Master's Degree in Public Administration from the University of Utah. In 2012, she won election to represent House District 26 at the Utah Legislature.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [
                        [
                            'name' => "Angela Fights for Survivors of Sexual Assault",
                            'stance' => "Angela has taken a serious interest in combating crimes that affect women, children and families. Most notably, she passed House Bill 200, which requires: the testing of all rape kits in Utah; sexual assault survivors be provided with the ability to anonymously track the status of their rape kit; and that law enforcement officers assigned to investigate cases of sexual assault, child sexual abuse and domestic violence receive trauma-informed training.",
                        ],
                        [
                            'name' => "Angela Works for Clean Air",
                            'stance' => "Angela knows clean air is a major concern for Utah families. Among many efforts to improve air quality across the Wasatch Front, she secured $100,000 in ongoing funding for the TRAX Monitoring Air Quality project. This project gathers the air quality data necessary to understand the conditions we face and the effect it has on our health. Angela's leadership on this issue led to her appointment on the Air Quality Policy Board.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 26',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Quinn Kotter',
                        'dob' => null,
                        'bio' => "Quinn Kotter is running to listen and lead while focusing on improving our quality of life. As inflation gets worse, our family budgets are getting smaller. As your Representative, Quinn Kotter will champion legislation to provide relief for working families and those living on a fixed income. He will listen to and work with all stakeholders to find solutions that bring opportunities and elevate our community. ",
                        'contact_email' => 'Quinn@VoteKotter.com',
                        'contact_phone_number' => '(385)202-6683',
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.votekotter.com/',
                        'sources' => 'https://www.votekotter.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. It seems Kotter doesn't have an issues page",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                        [
                            'name' => "",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Elizabeth Weight',
                        'dob' => null,
                        'bio' => "I taught junior and senior high school students for over thirty years.  From instructing and encouraging students, as well as my interest in how public policy impacts teaching and learning, I am an active spokesperson for students, parents, teachers, and the integral role of schools in communities. Being a teacher enriched my life and also led to my involvement in a number of professional and community leadership positions.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'http://www.liz4utah.com/',
                        'sources' => 'http://www.liz4utah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Serving Utah & Utahns",
                            'stance' => "Still true in 2022: Just as when I first ran for a Utah House seat, my job is to work on legislation to benefit people and communities. Still true: Coming from a career in which I focused on young people and their acquisition of knowledge and skills to support their future aspirations, I understand many of the challenges for them and their families. Still true: My views on state policy must be shaped by conversations I have with constituents, research that is reliable and unbiased, and recommendations from those with education and experience in a policy area. I value informed discussion.",
                        ],
                        [
                            'name' => "Politics vs. Problem Solving",
                            'stance' => "No wonder people are frustrated about voting choices these days. We expect to learn about different solutions to issues faced by our family or neighborhood or school. Instead, we're bombarded with declarations about the evils or ideals of a political group or person. We're given diatribes instead of discussions and pertinent ideas. Even talking about our Constitution often gets diverted from the framework for problem-solving leadership it provides.",
                        ],
                        [
                            'name' => "Campaign Responsibility",
                            'stance' => "My mother, an active voter all her adult life, recently told me she has never seen the kind of hatefully politicized environment we have now. During the primary campaign in her town, she received the expected information from candidates, but then got mailers with strong messages against one candidate. The point was simply to distract or confuse voters. No dummy, my mother realized the emotional exaggerations and obvious distortions and was even more secure with her vote for the candidate being defamed. Additionally, she has a new level of disgust for anonymous misinformation and those who distribute it - people we agree are cowards.",
                        ],
                        [
                            'name' => "Legislation for Community and Common Good",
                            'stance' => "Legislators get ideas for changes to laws from a variety of sources - constituent issues, local leaders, students, organizations.  During the 2022 legislative session, we considered bills on a wide range of topics, from designating a state crustacean to water metering to our annual budget. For proper process and responsible voting, we rely on and are grateful for experts' reports, dialog with those who best understand complexities of issues, and from communication we receive from constituents. Proper process and responsible voting also require our decisions to be based on reliable, unbiased information, with thought and consideration of whole communities - interdependent networks like neighborhoods, school communities, workforce groups, as well as municipalities, counties, or special districts. The challenge for all representative leaders has always been to balance the needs and rights of individuals with those of the communities we are all part of. The \"common good\" is a strong theme and required commitment in our work for good policy.",
                        ],
                        [
                            'name' => "Priority: Community",
                            'stance' => "Much of my expression in this column is about neighborhoods - the homes, nearby schools, churches, grocery store; the retired folks and working parents, toddlers and teenagers; the teachers, mail deliverers, and store clerks who comprise what we each call \"my neighborhood.\"",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 27',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Clare Collard',
                        'dob' => null,
                        'bio' => "I have lived in Magna for thirty-one years alongside my husband Que. We have been married for 35 years and have raised our two sons, Zachary and Chaz in Magna. My twenty-year track record of service in the community ranges from serving on the Social Service Block Grant Allocation Board, which increased funding for afterschool programs, to my efforts with The Working Families Campaign. To now serving you in the Utah State Legislature. What affects my fellow residents, affects me.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.voteclare.com/',
                        'sources' => 'https://www.voteclare.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "JOB GROWTH",
                            'stance' => "The west side of Salt Lake County is the economic engine of our local economy. We need to continue to attract competitive paying jobs to our area from all industries."
                        ],
                        [
                            'name' => "SUPPORTING SMALL BUSINESSES",
                            'stance' => "Small businesses are the backbone of our local economy and what keeps the economic engine running. I know how hard small business owners work and struggle, especially during this recent pandemic and earthquake. I have worked with small businesses getting them products and services to help their business thrive."
                        ],
                        [
                            'name' => "EDUCATION FUNDING",
                            'stance' => "Improving education and increasing funding are key elements to ensure our children's future. Educators must be fairly compensated for their work, and it is the duty of our state to minimize turnover and improve retention."
                        ],
                        [
                            'name' => "HEALTHCARE & MENTAL HEALTH SERVICES ACCESS",
                            'stance' => "Many people in our community are uninsured creating a myriad of challenges. We need a universal health care program that allows everyone to get the health care they need, when they need it. This also includes being against the Income Tax bill to raise taxes, which would have unfairly burdened working families."
                        ],
                        [
                            'name' => "SENSIBLE GROWTH, DEVELOPMENT & AFFORDABLE HOUSING",
                            'stance' => "Managing the growth of our community with sensible planning will create a future for our children and grandchildren. Growth is inevitable, but how we grow is critically important."
                        ],

                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Anthony Loubet',
                        'dob' => null,
                        'bio' => "Anthony's father was an immigrant from Mazatlán, Mexico, who helped build Anthony's childhood home in Moorpark, California, through sweat equity in its construction as part of a Habitat for Humanity-type program. Anthony learned the value of hard work and helping others from his father's example.",
                        'contact_email' => 'anthony@anthonyloubet.com',
                        'contact_phone_number' => '(801)613-0884',
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.anthonyloubet.com/',
                        'sources' => 'https://www.anthonyloubet.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "MOVING EDUCATION FORWARD ",
                            'stance' => "Quality education is essential, and it ought to be one of the issues at the forefront of discussion.",
                        ],
                        [
                            'name' => "Fighting Inflation​",
                            'stance' => "Each time our families go to the grocery store, the prices are steadily increasing. This needs to stop. ",
                        ],
                        [
                            'name' => "Supporting Law Enforcement",
                            'stance' => "States across the nation are cutting their law enforcements budget, and they are seeing the consequences.",
                        ],
                        [
                            'name' => "INFRASTRUCTURE NEEDS IN THE WEST ",
                            'stance' => "There has been much discussion about development on the west side. However, this will cause some strain on our existing infrastructure.",
                        ],
                        [
                            'name' => "TAX POLICY",
                            'stance' => "Anthony opposed the tax bill that sought to increase our grocery and gas taxes.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 28',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Tim Jimenez',
                        'dob' => null,
                        'bio' => "Timothy Adrian Jimenez was born May 30, 1977 in California. Tim's father had struggled with alcohol from a young age trying to escape the abusive home he had grown up in.  Tim's parents joined the Church of Jesus Christ of Latter-day Saints shortly before marrying and soon moved away from family and old lives to start a new life in Moscow, Idaho.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.timforutah.com/',
                        'sources' => 'https://www.timforutah.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 29',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Bridger Bolinder',
                        'dob' => null,
                        'bio' => "I am a lifelong resident of Grantsville. I attended Grantsville elementary, middle, and high school. I had many great opportunities afforded to me from growing up in Grantsville. It was a place where everyone knew everyone. There wasn't much trouble you could get into without your parents knowing about it.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.votebolinder.com/',
                        'sources' => 'https://www.votebolinder.com/',
                    ],

                    'opinions' => [

                        [
                            'name' => "Water",
                            'stance' => "Utah is the second driest state in the nation. Much of what we hear is that households need to do a better job of conserving water. This is true, but I know our city, county, and state facilities can also do a much better job of conserving water. This past legislative session, we had many bills pass and a lot of discussions related to water. We are headed in the right direction. I would like to see the state legislature seek more feedback from our farmers and industrial water users. Rural Utah is unique in the way we use and manage our water."
                        ],
                        [
                            'name' => "Transportation",
                            'stance' => "Citizens of the Tooele valley understand that we have a significant issue with traffic and transportation. Our most notable solution is the addition of the Mid-valley highway. I believe we can do more. Currently, the Tooele valley is largely a commuting community. This contributes heavily to our ongoing traffic issues. To combat this, we need to start attracting businesses that create jobs so Tooele valley citizens can work locally and cut down on transportation. As your representative, I will continue to direct more funding for transportation in our area."
                        ],
                        [
                            'name' => "Tax Policy",
                            'stance' => "I appreciate and support the tax cuts that were passed this past legislative session. I believe our tax code should be as simple as possible, have low rates, and include a broad base. As a fiscal conservative, I will work to ensure a common-sense approach to spending. I will always fight to put more of taxpayers? hard-earned money back into their pockets."
                        ],
                        [
                            'name' => "Second Amendment",
                            'stance' => "Although Utah is a pro-second amendment state, events and policies of outside states have the chance to infringe on that right. I will fight to protect not only the second amendment in Utah but in all states in America."
                        ],
                        [
                            'name' => "Economic Prosperity and Responsible Growth",
                            'stance' => "The rural counties of our district have experienced tremendous growth over the past 10-15 years. This growth has caused an increase in traffic congestion, strains on our roads and infrastructure, and overcrowded schools. As your representative, I will advocate for increased transportation and infrastructure funds. Working closely with our cities and counties, I will work to attract businesses that will create more revenue for rural Utah and bring about high-paying jobs?also providing more property tax revenue for our schools."
                        ],
                        [
                            'name' => "Limited Federal Government. Local Control",
                            'stance' => "As a state, we must push back against constant federal government overreach. As your representative, I will fight for a limited federal government and work to reassert Utah?s State rights. Far too often, federal and, at times, even state laws are passed to deal with issues that would be much better handled at a more local level. Local government is where our issues are best understood."
                        ],
                    ],

                ],
                [
                    'candidate' => [
                        'name' => 'Chris Dyer',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],
                [
                    'candidate' => [
                        'name' => 'Kirk Pearson',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => 'kirk4congress@gmail.com',
                        'contact_phone_number' => '(801)856-1471',
                        'state' => 'Utah',
                        'party_name' => 'Constitution',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 3',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Patrick Belmont',
                        'dob' => null,
                        'bio' => "Patrick Belmont is a water scientist, university educator, and dad. Throughout his 20+ year professional career he has been known for asking the right questions to get to the heart of matters, listening and doing the hard work needed to understand all sides of complex issues, and bringing people together around common values. Patrick has been leading efforts to solve many of the biggest challenges of our time and will bring his rigorous research capabilities, deep-thinking skills, compassion, and practical problem-solving attitude to work for Utah.",
                        'contact_email' => 'belmont4utah@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.belmont4utah.org/',
                        'sources' => 'https://www.belmont4utah.org/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Guiding principles",
                            'stance' => "My decisions as a legislator will be guided by my commitment to integrity, civility, transparency, collaboration, and innovation. I believe that government has a limited, but essential role in protecting people and promoting the common good. Having a better balanced legislature (currently 78% Republican) will ensure more voices are heard, more checks and balances are in place, and our state laws and budget are subject to an appropriate level of scrutiny. I will be a strong advocate for government accountability and I'll ensure tax dollars are spent in ways that benefit all Utahns.",
                        ],
                        [
                            'name' => "Economy and Environment",
                            'stance' => "Utah's economy and environment are inseparable. Our land, air, and water resources set the foundation for so many of the things that make Utah a wonderful place to live, visit, and do business. When we are not good stewards of our environment, it affects our health, our agricultural productivity, tourism and recreation, and our ability to attract new businesses to Utah. Many of our environmental assets have been degraded and are at risk of long-term damage because our legislature has not appreciated the close connection between our environment and economy. I will work to ensure we strengthen our economy in ways that improve our environment and natural resources for today and future generations.",
                        ],
                        [
                            'name' => "Quality, Affordable Housing",
                            'stance' => "The housing market in Utah is causing a lot of pain for people in lower and middle income brackets and the state legislature did far too little in 2022 to get the problem under control, providing only 20% of the funding requested by Governor Cox. Utah's housing problem is affected by some broader economic issues, but there is much more we can and should be doing to eliminate barriers to smart development, streamline and improve building codes, increase competition, and protect people in difficult situations. I have heard the concerns of Logan, River Heights, and Richmond citizens on this issue and will work hard to resolve these issues at the state level.",
                        ],
                        [
                            'name' => "Education",
                            'stance' => "Education is the greatest investment we can make in our society, providing people with opportunities for stability, higher paying jobs, and self-dependency. Beyond providing the technical skills people need to succeed in jobs, a good education system helps people understand the world, helps them develop critical thinking skills and information literacy, helps people gain self-confidence, and enables people to become better, more productive members of society. I will advocate for increases in education funding at all levels, pre-K, K-12, community and technical colleges, and all universities throughout the state. Further, I will work to ensure that teachers, parents and students, not legislators, decide what gets taught in our classrooms.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Dan Johnson',
                        'dob' => null,
                        'bio' => "Dan Johnson grew up on a farm in Eastern Nebraska. This is where he learned many of life's lessons, especially the value of hard work. He is the first person in the generations of his family to graduate from college. Dan has three degrees from colleges and universities in Nebraska: Bachelor's Degree from Peru State Teachers College, Master's Degree from the University of Nebraska at Omaha, Educational Specialist Degree from the University of Nebraska at Lincoln, and a fourth degree, a Doctorate Degree in Educational Leadership.",
                        'contact_email' => 'DanJohnsonHouse4@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.votedanjohnson.com/',
                        'sources' => 'https://www.votedanjohnson.com/',
                    ],

                    'opinions' => [

                        [
                            'name' => "Economy and Inflation",
                            'stance' => "I am concerned about where we are going. We are experiencing record inflation and seem to be entering a recession. This is not a partisan issue. This is a spending issue. In Utah, we understand what it means to live within our means. Our budget is balanced, we have a surplus each year, and we continually rank as the best-managed state in the nation. Washington could learn a lesson from Utah. To fix this issue, we need to look for ways to ease the burden on Utah families. Easing this burden could include lowering gas taxes as prices remain high, keeping taxes low on Utahn's, and ensuring Utah remains an affordable place to raise a family."
                        ],
                        [
                            'name' => "Education",
                            'stance' => "Education is foundational for success in life, development in Cache Valley, and for economic growth in Utah.  I will work to maintain funding and attention for both the K-12 school system and Utah State University. I have worked in education for my entire professional life. This issue is very important to me. I am proud to say the past few sessions I have fought to achieve record funding for our children's education. I have worked to ensure no child goes to school hungry by providing breakfast for those that need it. And I cosponsored a bill to provide teachers an additional 4 paid days off to ease their workload. In the upcoming session, I will continue to fight for record funding and ensure that our kids have the tools needed to provide them with success, our teachers have the support they need to continue doing what they do best, and our parents are partners in our children's education."
                        ],
                        [
                            'name' => "Infrastructure",
                            'stance' => "Logan, Richmond, and Cove have infrastructure needs, especially related to transportation, that need to be addressed by the state with innovation and resources. I will look for opportunities to keep our roads, facilities, and services up to date."
                        ],
                        [
                            'name' => "Healthcare & Social Services",
                            'stance' => "Individuals with healthcare and disability needs far outweigh the funds available to provide those services. I understand these challenges and will work to pursue fairness for all citizens. The health and well-being of our friends and neighbors are one of my top priorities. Utah's youth suicide rate is unacceptable, and I am working hard to change this. In the Legislature, we have worked to pass the SAFEUT app, which provides support to our struggling youth. I am also proud of the work I have done to provide funding and support to CAPSA and the Family Place, which supports at-risk youth and those suffering from domestic abuse. Providing these resources is one step in the right direction. I will continue to find ways to provide support to our friends and neighbors that are struggling with their mental health."
                        ],
                        [
                            'name' => "Juvenile Justice",
                            'stance' => "The legislature is currently leading juvenile justice reform focused on cutting costs for rehabilitation and investing in early interventions to prevent youth from ending up in the justice system. These are complicated issues, and I will bring my experience working with youth and those who care for them in finding solutions."
                        ],
                        [
                            'name' => "Utah Values",
                            'stance' => "Carol and I have seven children we have raised with core values. I believe in the importance of family and honor those who sacrifice to serve our local community and country. I appreciate and celebrate diversity and believe that we need to look out for the individual.  We have lived in Logan since 1990 and love our community and the people who live here. I look forward to doing what is right for Cache Valley and for Utah."
                        ],

                    ],

                ],

            ],

        ],
        [
            'location' => 'District 30',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Fatima Dirie',
                        'dob' => null,
                        'bio' => "As a former refugee from Somalia, Fatima Dirie was resettled to Salt Lake City with her family in 1997 while still in middle school.  The family escaped war back home, first finding refuge in neighboring Kenya, then ultimately finding safety and an opportunity to rebuild in Utah.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.electfatimadirie.com/',
                        'sources' => 'https://www.electfatimadirie.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Public Safety",
                            'stance' => "With violent and property crime on the rise in our communities, it's critical our residents feel safe. Our legislature's objective must be to provide our neighborhoods with safety while recognizing the diverse population that makes up West Valley City. In this spirit, Fatima supports legislation that:",
                        ],
                        [
                            'name' => "Healthcare",
                            'stance' => "As we move into our second full year of the pandemic, healthcare disparity in Utah is abundantly clear. According to the most recent U.S. census, West Valley City has nearly double the rate of uninsured people (19.7%) as the state average (10.8%). This inequity in healthcare coverage must be addressed, and Fatima is excited to promote policy that:",
                        ],
                        [
                            'name' => "Economy",
                            'stance' => "West Valley City is a diverse population made up of working-class families trying to get by. With inflation causing added pain at the gas pumps and in our grocery stores, economic relief is desperately needed for the residents of West Valley City. Fatima knows the backbone of every community are its businesses, which is why Fatima will champion legislation that:",
                        ],
                        [
                            'name' => "Affordable Housing",
                            'stance' => "According to a study released by the University of Utah, rental rates have increased by 10.1% across Salt Lake County - the second highest yearly increase on record.  With the added price increases due to inflation and global supply chain issues,  more and more Utahn's are struggling to make ends meet. As a refugee, Fatima knows how devastating housing insecurity can be, which is why she supports:",
                        ],
                        [
                            'name' => "Education",
                            'stance' => "West Valley City is behind the state average of individuals with High School Diploma's, and only 15% of adults over the age of 25 have a bachelor's degree or higher. As a beneficiary of our public education system, Fatima knows a good education is the basis of every successful individual, which is why she supports:",
                        ],
                        [
                            'name' => "Environment",
                            'stance' => "The air quality in the Salt Lake Valley can at times be some of the worst in the world. West Valley City's exposure leads to higher rates of related health issues and must be addressed. Focusing on environmentalism is not just good public policy, it's good economics. This is why Fatima is in favor of:",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Evan Rodgers',
                        'dob' => null,
                        'bio' => "I was born in Salt Lake City, and have lived in West Valley City my entire life. I have built long-lasting connections with the community through years of service, education, and employment. I recently graduated from the University of Utah with a Bachelors in Psychology. While obtaining my degree, I was able to work with professors in their research involving behavioral science. I am currently pursuing a Masters degree in Counseling.",
                        'contact_email' => 'evanrodgers4utah@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => 'https://www.evanrodgers4utah.com/',
                        'sources' => 'https://www.evanrodgers4utah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Let's Create More Unity in Politics!",
                            'stance' => "The political atmosphere has grown increasingly divisive and daunting. I have been dissuaded from more personal involvement in the past due to the aggressive, unproductive environment of politics. I hope to bring more unity in Utah politics, focusing less on who is right and more on how each of us can serve our community and our state."
                        ],
                        [
                            'name' => "Let's Make Mental Health Care Accessible!",
                            'stance' => "My years working in behavioral health services have allowed me to witness firsthand the failings of Utah's mental health care system. I hope to advocate for accessible, affordable care for all who may need it. Utah is especially vulnerable to issues with substance abuse and suicide. We must take action now to protect our youth especially from the growing mental health epidemic."
                        ],
                        [
                            'name' => "Let's Fund Public Education!",
                            'stance' => "Education is a valuable tool for life-long success, and every student in Utah deserves the best schooling experience possible. I spent all my years of public education and higher education in this state. I hope to be able to give back to the teachers and schools that have served me. I will do this by encouraging public education funding and supporting teachers during this especially difficult time."
                        ],

                    ],

                ],
                [
                    'candidate' => [
                        'name' => 'Judy Weeks-Rohner',
                        'dob' => null,
                        'bio' => "Growing up on a farm in Wyoming taught Judy Weeks-Rohner the value of hard work and the satisfaction of completing difficult tasks. After graduation, Judy started a career with Mountain Bell Telephone and Telegraph and was the first woman in Wyoming to become a testboard operator.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.judyforutah.com/',
                        'sources' => 'https://www.judyforutah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "JUDY WEEKS-ROHNER IS ABOUT IMPROVING EDUCATION",
                            'stance' => "One of Judy's life long passions has been education. Her goal is to come up with the best solutions for parents, teachers, and most importantly the students who are counting on us to help them live their best life. ",
                        ],
                        [
                            'name' => "PROTECTING OUR WORKERS",
                            'stance' => "Our state is home to the most hard-working Americans in the country. Without their dedication and effort, our economy will not succeed. ",
                        ],
                        [
                            'name' => "SUPPORTING SMALL BUSINESSES",
                            'stance' => "The American dream is based on entrepreneurship and innovation. Our small business owners are the cornerstone of what makes our country and our state great. ",
                        ],
                        [
                            'name' => "STRENGTHENING WEST VALLEY",
                            'stance' => "It's no secret that the West Side has been ignored when it comes to our schools, infrastructure, and economic development. West Valley deserves the same resources as the rest of Utah.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 31',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Karen Kwan',
                        'dob' => null,
                        'bio' => "Rep. Karen Kwan was elected to the Utah Legislature in 2016 to represent the residents of Taylorsville, Murray. Millcreek, and West Valley City. She has been a long-time resident of Taylorsville with her family. Rep. Kwan earned a Bachelor of Arts in Psychology and a Master's degree in Clinical Psychology both from Pepperdine University.",
                        'contact_email' => 'votekarenkwan@gmail.com',
                        'contact_phone_number' => '(801)870-7746',
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://karenkwanforutah.com/',
                        'sources' => 'https://karenkwanforutah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Education",
                            'stance' => "As an educator, I am passionate about providing the very best possible education to the students of Utah. I believe that investing wisely in our greatest assets - our children - is the best thing we can do for the future of our state.",
                        ],
                        [
                            'name' => "Economy",
                            'stance' => "Small businesses are the lifeblood of Utah, and I will always work for sound public policy that helps them to succeed. We can support and empower our workforce by  providing better education and skills training.",
                        ],
                        [
                            'name' => "Environment",
                            'stance' => "Like you, I value our natural environment, and encourage all Utahns to be good stewards of our natural resources.",
                        ],
                        [
                            'name' => "Utah's Seniors",
                            'stance' => "I recognize an inherent need to support and protect those who have worked hard all their lives. And it's going to become more important as the senior population explodes in the next ten years.",
                        ],

                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Andrew Nieto',
                        'dob' => null,
                        'bio' => "Government of, by, and for YOU, your friends, your neighbors, your family, your church, your teammates, your classmates, your coworkers, and your community.  I am one of you; I seek to be chosen by you; I will speak, LISTEN, work, negotiate, and represent, FOR YOU.",
                        'contact_email' => 'nieto4house31@gmail.com',
                        'contact_phone_number' => '(661)886-6794',
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.nieto4house31.com/',
                        'sources' => 'https://www.nieto4house31.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Government Of, By, and For WE THE PEOPLE!",
                            'stance' => "Utah's legislative process is renowned for its grassroots participation. Fellow residents of district 31, I will be there for you, working together as constituent and representative, to craft legislation that matters to the people of Taylorsville and West Valley City!",
                        ],
                        [
                            'name' => "Small, like a \"Shining City on the Hill\"",
                            'stance' => "Government is best when it's closest to the people. The beauty of Uah's legislature is that it's small, each district like a city. That means YOU, the People, can have REAL relationships with your representatives at the state Capitol. That's called the grassroots!",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 32',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Adam Bean',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => 'acbean13@gmail.com',
                        'contact_phone_number' => '(801)819-9493',
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],
                [
                    'candidate' => [
                        'name' => 'Sahara Hayes',
                        'dob' => null,
                        'bio' => "Sahara Hayes is a lifelong Utah resident, and has lived in District 32 for over 20 years. As a member of the Millcreek Community Council, she is aware of the interests and issues that impact the daily lives of residents. Through her work on the Council she has gotten to know residents, and the concerns and challenges they face.",
                        'contact_email' => 'Contact@VoteSahara.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.votesahara.com/',
                        'sources' => 'https://www.votesahara.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Prioritizing the Environment",
                            'stance' => "Clean air is a constant concern for residents of the Salt Lake valley, and outdoor access is one of the highlights of living in Utah. Sahara's environmental priorities include: ",
                        ],
                        [
                            'name' => "Supporting Public Education",
                            'stance' => "Teachers have one of the highest positions of trust and responsibility in the state, and they deserve to be compensated accordingly. Increasing the salaries of teachers is a large aspect of teacher retention, and needs to be addressed at the legislative level. Sahara is an advocate for smaller class sizes, increased public funding for schools, and the overall strengthening of the public school system. ",
                        ],
                        [
                            'name' => "Affordable Housing",
                            'stance' => "Utah is experiencing dramatic population growth, and while it is important to keep up with this influx, it needs to be done in an intentional way. The state should work to prioritize long-term sustainability in new housing, and incentivize affordability. Additionally, it is important to protect the interests of the people who already live in areas being developed, and design measures to keep them from being displaced.",
                        ],
                        [
                            'name' => "Strengthening the Arts",
                            'stance' => "Arts and culture is a large part of what makes communities feel like homes. Like so many industries, the arts sector was hit hard during the COVID-19 pandemic. Continuing to provide operational support and relief to arts organizations is a priority, as the arts are an integral part of what makes Utah such a vibrant state.",
                        ],
                        [
                            'name' => "Protecting Queer and Transgender Youth",
                            'stance' => "Every child deserves to be treated with respect and dignity, no matter their gender identity or sexual orientation. Recent bills targeting transgender youth are cruel, and need to be challenged directly. In addition to opposing bills that discriminate against the LGBTQ+ community, Sahara plans to work with queer and gender-affirming organizations to propose legislation to improve the quality of life for queer youth in Utah. This includes providing a direct route for parents and students to update names and gender markers in schools, and advocating for the inclusion of same-sex relationships in sexual education courses.",
                        ],
                        [
                            'name' => "Accessible Healthcare",
                            'stance' => "Healthcare is a constant concern for many Utahns, which frequently includes the headaches of insurance battles and opaque information. Sahara prioritizes funding organizations that provide free healthcare for those experiencing homelessness, accessible and legal reproductive healthcare, and requiring insurance providers to include gender-affirming healthcare in their plans. ",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Brittany Karzen',
                        'dob' => null,
                        'bio' => "Brittany Karzen has expertly navigated the intersection of public policy and communication for nearly two decades in both the public and private sectors on several issues including energy, the environment, public health, underserved communities, law enforcement, and victim rights.",
                        'contact_email' => 'info@brittanykarzen.com',
                        'contact_phone_number' => '(801)613-2145',
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.brittanykarzen.com/',
                        'sources' => 'https://www.brittanykarzen.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "ENVIRONMENT & THE ECONOMY",
                            'stance' => "Everyone wants to breathe clean air and drink clean water. As we pursue impactful environmental policies we must be conscious of the economic impact on low-income Utahns. ",
                        ],
                        [
                            'name' => "MENTAL HEALTH, ADDICTION, & HOMELESSNESS ",
                            'stance' => "We can save lives and tax dollars by making it easier for community members to access mental health and addiction treatment.​",
                        ],
                        [
                            'name' => "EDUCATION & AT-RISK YOUTH",
                            'stance' => "Addressing the basic needs of youth is both morally right and fiscally responsible. Kids that are able to perform in school are more successful and are less likely to be involved in our very expensive criminal justice system.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 33',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Gerald Burt',
                        'dob' => null,
                        'bio' => "Our scraper didn't work for this one. Check out http://geraldburtutah.com/ for this candidate's stances.",
                        'contact_email' => 'me@geraldburtutah.com',
                        'contact_phone_number' => '(801)888-0368',
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'http://geraldburtutah.com/',
                        'sources' => 'http://geraldburtutah.com/',
                    ],

                    'opinions' => [],
                ],
                [
                    'candidate' => [
                        'name' => 'Doug Owens',
                        'dob' => null,
                        'bio' => "Doug Owens was born and raised in Salt Lake City and graduated from the University of Utah and Yale Law School. He and his wife Cynthia Smart Owens have four children and are proud to call Millcreek their home.",
                        'contact_email' => 'doug@dougowensutah.com',
                        'contact_phone_number' => '(801)792-9343',
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://dougowensutah.com',
                        'sources' => 'https://dougowensutah.com',
                    ],

                    'opinions' => [
                        [
                            'name' => "Clean Air",
                            'stance' => "Too many lives are shortened by air quality on the Wasatch Front. Much more can be done to clean the air, as outlined in the Utah Road Map: Positive Solutions on Climate and Air Quality. We need to build consensus as a state and set a goal for reducing emissions, then reach that goal by reducing emissions from the vehicle fleet, from new buildings, and from industrial sources."
                        ],
                        [
                            'name' => "Public Lands",
                            'stance' => "Utah is the most beautiful of the 50 states. As a native Utahn, I grew up exploring and learning to love our state?s open spaces and I?ve passed that tradition on to my children. I know that Utahns are good stewards of the land, and we know best how to protect it. Utah?s treasured lands are not just beautiful, they?re a powerful engine to grow our economy, which is tied directly to outdoor recreation and tourism. I?ll fight to protect the places we all love, and I?ll work to make sure our children and grandchildren inherit a clean and beautiful Utah."
                        ],
                        [
                            'name' => "Education",
                            'stance' => "Nothing is more important than ensuring our children are able to reach their full potential. This means investing in education to prepare Utah students to compete with the rest of the world for high-paying jobs. It means expanding vocational education opportunities so that people who are willing to work hard at a trade have an opportunity to get ahead. And it means making sure students can attend college without a lifetime of debt. I know from personal experience how much of a burden rising college costs put on Utah families, so lowering tuition at community colleges and universities and expanding access to low interest loans is incredibly important to me."
                        ],
                        [
                            'name' => "Affordable Healthcare",
                            'stance' => "As the husband of a practicing physician, I understand the importance of good health care policy. I believe that all hard-working Utahns should have access to high-quality, affordable health insurance. We need to get to work to protect Medicaid and Obamacare, rather than wasting time playing political games."
                        ],
                        [
                            'name' => "A Strong Middle Class Economy",
                            'stance' => "Six generations of my family have called Utah home. My wife Cynthia and I are grateful to raise our children here. I believe that Utahns who work hard should be able to support their families.  I will fight to improve the business climate and strengthen the middle class. I?ll reduce unnecessary and burdensome regulations that hurt small businesses. I?ll fight to attract new industries and good-paying jobs to Utah."
                        ],
                    ],

                ],

            ],

        ],
        [
            'location' => 'District 34',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'John McPhie',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => 'votejohnmcphie@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],
                [
                    'candidate' => [
                        'name' => 'Carol Moss',
                        'dob' => null,
                        'bio' => "A proven leader, Carol represents her community on key committees - Education, Executive Offices and Criminal Justice Appropriations, Executive Appropriations, and Economic Development and Workforce Services, as well as Public Utilities, Energy, and Technology Interim Committee, Administrative Rules, and Legislative Management.",
                        'contact_email' => 'carolspackmoss@gmail.com',
                        'contact_phone_number' => '(801)647-8764',
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://carolmossforhouse.com/',
                        'sources' => 'https://carolmossforhouse.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Education",
                            'stance' => "Carol believes education is the pathway to success, improving our children's lives today and creating business leaders, skilled employees, and informed citizens for tomorrow. In 2012 she passed and funded HB 115, Peer Assistance and Review, a successful peer mentoring and teacher evaluation program that has been implemented in the SLC School District. She also secured ongoing funding for the highly regarded International Baccalaureate (IB) program (HB 266), passed anti-bullying and hazing legislation (HB 325), and co-sponsored bills to reduce standardized testing in high schools and prevent SAGE scores from being tied to teacher evaluations.  In 2019, she passed HB 130, which created an exit survey for educators to take, which allows essential information about why teachers leave the profession to be sent to districts. This information is key to determining how districts can better recruit and retain quality teachers. Most recently in 2020, Carol passed HB 108, to address the shortage of medical specialists in schools, such as speech pathologists and audiologists. This bill permits districts to create a separate pay scale to remain competitive with the private sector. To address the critical teacher shortage, Carol advocates for higher salaries, lower class sizes, reduction of unnecessary testing, and better support for teachers.",
                        ],
                        [
                            'name' => "Opioid Epidemic",
                            'stance' => "Carol has been a leader in addressing the epidemic that results in the death of over 400 Utahns a year from opioid-based painkillers and heroin.  In 2014 she passed the \"Good Samaritan Law,\" to encourage friends to call for help without fear of being arrested for use or possession (HB 11) and the \"Naloxone Rescue\" bill (HB 119) which gives friends and families access to the life-saving drug Naloxone which can reverse an overdose.  In 2016 she passed HB 238 to expand Naloxone access to police, EMT's, and to addiction and recovery centers.  Not only have these laws saved hundreds of lives, but they have also helped get individuals into a program where addiction is treated as a chronic, recurring brain disease.",
                        ],
                        [
                            'name' => "Clean Air",
                            'stance' => "To give our children a bright future, we need to find real solutions to Utah's air quality problem. Carol understands clean air is not just important for our health but better for our economy as well. She is committed to expanding mass transit options, strict enforcement of clean air standards, and promoting anti-idling education and policies.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 35',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Belinda Johnson',
                        'dob' => null,
                        'bio' => "When I was first asked to run for the Murray City School District Board of Education nearly 12 years ago, I had no idea how much it would change my life and how much I would learn. And until a few weeks ago I never saw myself going further in politics. But here we are! A big opportunity has come my way and I will be running for the Utah House of Representatives in the \"new\" District 35.",
                        'contact_email' => '',
                        'contact_phone_number' => '(801)231-8666',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://vote4belinda.com/',
                        'sources' => 'https://vote4belinda.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. It seems Johnson doesn't have an issues page",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Mark Wheatley',
                        'dob' => null,
                        'bio' => "In my years in the legislature, I'VE BEEN YOUR VOICE OF BALANCE AND REASON as I've worked to represent you on Capitol Hill. I was born and raised in Salt Lake City and have spent the past 25 years living in Murray, Utah, where I have had the honor of serving the citizens of House District 35 as your Representative.",
                        'contact_email' => 'MarkWheatley35@hotmail.com',
                        'contact_phone_number' => '(801)264-8844',
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://www.vote4wheatley.com/',
                        'sources' => 'https://www.vote4wheatley.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "STRONG FAMILIES",
                            'stance' => "I helped pass measures that are protecting our children and keeping drugs and methamphetamine drug houses out of our neighborhoods."
                        ],
                        [
                            'name' => "QUALITY OF LIFE",
                            'stance' => "I voted to protect the water and open spaces that we all enjoy in Utah.  When they are continually threatened by unchecked growth and inefficient use of natural resources, I will always be the reasonable voice for preservation."
                        ],
                        [
                            'name' => "QUALITY OF LIFE ",
                            'stance' => "I voted to protect the water and open spaces that we all enjoy in Utah.  When they are continually threatened by unchecked growth and inefficient use of natural resources, I will always be the reasonable voice for preservation.",
                        ],
                        [
                            'name' => "PROTECTING SENIOR CITIZENS",
                            'stance' => "I helped pass for greater funding for Salt Lake County Aging Services; for Meals on Wheels & Community Senior Centers."
                        ],
                        [
                            'name' => "EDUCATION FUNDING",
                            'stance' => "I have always prioritized responsible funding for public education to decrease class sizes, provide necessary supplies to our classrooms, and compensate teachers fairly.  I've received an A+ rating from the Utah Education Association every session in which I have served.",
                        ],
                        [
                            'name' => "AFFORDABLE & ACCESSABLE HIGHER EDUCATION",
                            'stance' => "I retired after working 15 years as an administrator at Salt Lake Community College.  I currently serve the Higher Education Appropriations Sub-committee.  I know the key for Utah's economic success is a strong and vibrant higher education system.  Innovations developed on campuses create more jobs in our private sector.  I am committed to enhance funding for our colleges and universities to attract eager students as well as the best faculty and staff.",
                        ],
                        [
                            'name' => "RESPONSIBLE ENVIRONMENTAL STEWARDSHIP",
                            'stance' => "We, in Utah, are responsible for protecting some of the world's greatest natural treasures.  I don't take this responsibility lightly.  I continue my commitment to ensuring the right to a healthy environment for all Utahns.  This includes working across the aisle to make sure that all voices are heard in our legislative process.  I will make sure your voice is included in Utah's environmental decisions.",
                        ],
                        [
                            'name' => "\"THE UTAH WAY\" OF LIFE",
                            'stance' => "There are as many ways to enjoy Utah's natural wonders as there are people in Utah.  Protecting and enhancing Utah's Way of Life for future generations is one of my top priorities.  I will continue to support legislation which provides clean air and water for our communities and preserves our 84,899 square miles of canyons, trails, parks and open spaces.",
                        ],
                        [
                            'name' => "SMALL BUSINESS FOR JOBS",
                            'stance' => "According to the most recent data, there are 313,590 small businesses in Utah and they provide 45.4% of all of the jobs in our state.  In addition to providing so many jobs, small businesses make it possible for more Utahns to build wealth and provide firm foundations for their families.  I will continue to support these businesses as a customer and as a legislator.",
                        ],
                        [
                            'name' => "FAIR BUSINESS IS GOOD BUSINESS",
                            'stance' => "I will continue my work to eliminate unfair tax exemptions for big business that shifts the tax burden to our small business owners.  I will also work across the aisle to eliminate  un-necessary  bureaucratic obstacles to Utah's entrepreneurs.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 36',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Jim Dunnigan',
                        'dob' => null,
                        'bio' => "Representative Jim Dunnigan is a dedicated public servant and advocate for the residents of Taylorsville and West Jordan. Jim and his wife Vicki are 45-year Taylorsville residents. They are the proud parents of two wonderful children who graduated from Taylorsville High and have now blessed them with 6 grandchildren.",
                        'contact_email' => 'ElectDunnigan@gmail.com',
                        'contact_phone_number' => '(801)840-1800',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'http://electdunnigan.com/',
                        'sources' => 'http://electdunnigan.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Taxes",
                            'stance' => "I voted against the new food tax, I voted against the new gas tax and against property tax increases. I am focused on the issues that are important to our Community and believe that our citizens can spend their money better than the government can."
                        ],
                        [
                            'name' => "Economy and Jobs",
                            'stance' => "As a local business owner in Taylorsville, I understand the struggles of making payroll, keeping overhead low, and balancing a budget; all while dealing with burdensome regulations. That's why he promotes fewer regulations and lower taxes- so business owners can create jobs and the economy can thrive."
                        ],

                        [
                            'name' => "Education",
                            'stance' => "I support Utah's hard working teachers and our most valuable resource, Utah children. I believe the people of our state know what is best for our students and wants to keep federal bureaucrats out of the decision room so that Utahns can create the best, and unlimited, opportunities for our children to empower them for generations to come.",
                        ],
                        [
                            'name' => "States' Rights",
                            'stance' => "I am a staunch defender of government transparency and accountability. I have championed efforts to preserve and protect an open political process because I know that as an elected official, I work for the citizens of Taylorsville and West Jordan. I fought political corruption, even within my own party, by heading up the committee investigating former Attorney General John Swallow. I then passed Utah's most significant campaign finance reform in decades.",
                        ],
                        [
                            'name' => "Transparency and Fighting Corruption",
                            'stance' => "Decisions are best made on the local level and not by Washington D.C. bureaucrats who have never lived in Utah. I have fought federal overreach in education, public lands, and healthcare. Securing more rights for Utah is vital as we continue to explode in population and I want to have a seat at the table to discuss upcoming challenges so that Utahns are making decisions for the future of out great state.",
                        ],
                        [
                            'name' => "Predatory Lending",
                            'stance' => "I have made protecting consumers a priority. I believe individuals in need of financial help should not be preyed upon with overwhelming interest rates or long term loan extensions. I have been a champion for individuals with financial struggles by sponsoring and passing a bill that eliminated predatory lending practices.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Lynette  Wendel',
                        'dob' => null,
                        'bio' => "I grew up in the Midwest, and after seeing many parts of the United States, my husband Mark and I fell in love with Utah and made it our home. We chose Taylorsville 27 years ago for many of the same reasons we stay here: the amazing people, the diverse values and cultures we all represent.",
                        'contact_email' => 'lynette@votelynette.com',
                        'contact_phone_number' => '(801)839-5717',
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://www.votelynette.com/',
                        'sources' => 'https://www.votelynette.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Fair and Accurate Representation",
                            'stance' => "Apply time-honored values to benefit our modern-day community",
                        ],
                        [
                            'name' => "Good Governance",
                            'stance' => "Ensure transparency and accountability in government",
                        ],
                        [
                            'name' => "Fiscal Responsibility",
                            'stance' => "Stop spending a dime to save a nickel",
                        ],
                        [
                            'name' => "Smart Economic Growth",
                            'stance' => "The proper housing choices/developments in places that make sense",
                        ],
                        [
                            'name' => "Air Quality",
                            'stance' => "Improve personal health with clean air",
                        ],
                        [
                            'name' => "Affordable Housing",
                            'stance' => "Promote quality housing choices that keep our kids and seniors safe in their neighborhoods",
                        ],
                        [
                            'name' => "Transportation",
                            'stance' => "Focus on moving people, not just cars​",
                        ],
                        [
                            'name' => "Education",
                            'stance' => "Increase performance, don't lower expectations",
                        ],
                        [
                            'name' => "Healthcare",
                            'stance' => "Protect patient-provider relationship and treatment",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 37',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Ashlee Matthews',
                        'dob' => null,
                        'bio' => "My name is Ashlee Matthews, and I am serving as a state representative for my neighbors and friends of House District 37. I have had the opportunity to serve the public for the last eleven years in my work for the Utah Department of Transportation, and my husband is a Union Pipefitter.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'www.ashleeforutah.com',
                        'sources' => 'www.ashleeforutah.com',
                    ],

                    'opinions' => [
                        [
                            'name' => "Infrastructure and Mobility on the West Side",
                            'stance' => "During the 2022 General Session, I co-sponsored HB 322 - Transit Amendments with Rep. Christofferson which moved the construction aspect of UTA under the purview of UDOT. This will allow public transit access to be more seamlessly incorporated into future transportation projects. ",
                        ],
                        [
                            'name' => "Livable Wages",
                            'stance' => "During the 2021 General Session I ran HB 361 - Minimum Wage Amendments. This bill would have provided regional minimum wage increases, which were calculated using a formula that took into consideration the cost of living and goods in each County, and compared it to the average non-managerial, non-agricultural wages for the area. This would have allowed for an increase that would have supported responsible growth in all areas without becoming detrimental to our smaller and more rural counties. ",
                        ],
                        [
                            'name' => "Environmental Stewardship",
                            'stance' => "As a beekeeper myself, HB 224 - Pollinator Amendments was perhaps one of my most fun bills to run in the 2021 Session. This bill created a pilot program in partnership with the Utah Department of Agriculture and Food, SUU and USU. This bill created a 3-year pilot program that includes public education efforts via workshops & planting guides, and distribution of pollinator friendly native flowering plants and seeds to landowners. We hope to support the nearly 1,200 native species of pollinators in this state to support our agricultural economy.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Henry Medina',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => 'hmedina7.62x49@gmail.com',
                        'contact_phone_number' => '(801)-888-9758',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.facebook.com/groups/henry4utah',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 38',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Cheryl Acton',
                        'dob' => null,
                        'bio' => "Cheryl Acton was born and raised in Kansas before moving to Arizona for her senior year of high school. She lived in northern Denmark for a year as a Rotary Youth Ambassador, then arrived in Utah to begin her freshman year at BYU. Awed by Utah's scenic beauty and its wonderful people, she takes enormous pride in her adopted home state.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.votecherylacton.com/',
                        'sources' => 'https://www.votecherylacton.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 39',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Hope Goeckeritz',
                        'dob' => null,
                        'bio' => "I have lived in what is now District 39 for over 20 years. Born and raised a Utahn, my roots run deep with love for my community- and I believe that if you love something, you work to make it better. That's why I'm running for office. I love our community, I love the people within, and I know that with a lot of hard work and a little bit of hope, we will continue to better our district- because our community is the best place to live, raise a family, work, recreate, and thrive in the world. ",
                        'contact_email' => 'hope@vote4hope.com',
                        'contact_phone_number' => '(801)477-8487',
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://www.vote4hope.com/',
                        'sources' => 'https://www.vote4hope.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Family-Strengthening Policies",
                            'stance' => "Our family unit - whatever that looks like for you - is the bedrock of our community",
                        ],
                        [
                            'name' => "Good Governance",
                            'stance' => "Restoring faith in our politics",
                        ],
                        [
                            'name' => "Protecting our Environment",
                            'stance' => "Utah deserves to be around for a long time",
                        ],
                        [
                            'name' => "Robust Education Policy",
                            'stance' => "Educators and students need to be supported",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Ken Ivory',
                        'dob' => null,
                        'bio' => "Ken was born in Mt. Pleasant, Utah (Sanpete County) in 1963. He grew up in Tempe, Arizona, graduating from McClintock HS in 1981. He served a mission for the LDS Church in Guatemala. Ken met and married his wife Becky in 1988. Becky is a past recipient of the Golden Apple Teacher Award. They have four amazing children and three adorable grandchildren.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.voteivory.com/',
                        'sources' => 'https://www.voteivory.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Fiscal Responsibility",
                            'stance' => "HB138 Federal Receipts Reporting Requirements: This bill requires all state agencies to have contingency plans to prepare for the reduction in the amount or value of federal funds to the state and requires the reporting of federal receipts received by certain state agencies, requires the report to contain a plan to operate the state agency in the event federal receipts are reduced by certain amounts, and requires the Government Operations and Political Subdivisions Interim Committee to study whether to apply federal receipts reporting requirements to certain other governmental entities.",
                        ],
                        [
                            'name' => "Education",
                            'stance' => "HB357 Evaluating Tax Revenue Foregone from Federally Controlled Lands: Establishes the procedures and process for determining the fair taxable value of federally controlled lands in Utah in order to compel the federal government to pay the fair taxable value (instead of approx. $1/acre) to better fund Utah schools and essential govt services.",
                        ],
                        [
                            'name' => "Victim's Rights",
                            'stance' => "HB277 Statute of Limitations of Civil Actions: Eliminates the Statute of Limitations for victims of child sexual abuse to bring civil actions against their perpetrators at any time, their civil actions are never barred by a statute of limitations period.",
                        ],
                        [
                            'name' => "Self-Defense",
                            'stance' => "HB298 Exemptions Act Amendments: Allows an individual to be exempt from bankruptcy or judgment up to three firearms and 1,000 rounds of ammunition for each firearm, without regard to their value. Allows an individual to never lose the ability to protect their home and family notwithstanding a bankruptcy filing or judgment against them. This is the best firearms exemption statute in the nation.",
                        ],
                        [
                            'name' => "Healthcare",
                            'stance' => "HB240 Medical Retainer Agreements: Reduces medical costs by allowing for medical retainer agreements in which a health care provider agrees to provide routine health care services to a patient in exchange for a prepaid fee is not a health benefit plan subject to regulation by the Insurance Department, and permits a health care provider to include limited services performed by a third party in the retainer agreement.",
                        ],
                        [
                            'name' => "Restraining Federal Overreach",
                            'stance' => "HB76 Federal Law Evaluation and Response: This bill defines the \"constitutional line\" in Utah Code and establishes a dispute resolution mechanism for the Constitutional Defense Council to evaluate and respond to federal laws/actions that exceed delegated power/authority.",
                        ],
                        [
                            'name' => "Business",
                            'stance' => "HB95 Bad Check Fee Amendments: Allows businesses to recover from the bouncer of a check the same fee amount that is charged to the business by the banks.",
                        ],
                        [
                            'name' => "Criminal Justice",
                            'stance' => "HB430 Prohibition of Genital Mutilation: Defines female genital mutilation; makes performing or facilitating female genital mutilation a second-degree felony; provides that a medical professional who performs female genital mutilation shall lose the ability to practice permanently; declares that female genital mutilation is a form of child abuse for reporting requirements; allows a person subject to female genital mutilation to bring a civil action; and requires the Department of Health to create an education program to alert the community to the health risks and emotional trauma of female genital mutilation.",
                        ],
                        [
                            'name' => "Animal Welfare",
                            'stance' => "HB261 Horse Tripping Amendments: Modifies the duties of the Agricultural Advisory Board; requires a venue that holds a horse event to report certain information to the Department of Agriculture and Food; authorizes the Department of Agriculture and Food, in consultation with Agricultural Advisory Board, to make rules; requires a report to the Natural Resources, Agriculture, and Environment Interim Committee.",
                        ],

                        [
                            'name' => "Environmental",
                            'stance' => "HB99 Catastrophic Wildfire Revisions Bill Requests: Under certain circumstances, the state shall indemnify, defend, and hold a chief executive officer or county sheriff harmless from any claims or damages, including court costs and attorney fees that are assessed as a result of the chief executive officer's or county sheriff's action in abating a catastrophic public nuisance and wildfire risks.",
                        ],
                        [
                            'name' => "Social/Public Welfare",
                            'stance' => "HB145 Foster Children Visitation Amendments: Defines the term \"sibling\"; requires the division to make reasonable efforts for sibling visitation when siblings are separated due to foster care or adoptive placement; allows the court to order sibling visitation when the visitation is in the best interest of the child; and makes technical changes.",
                        ],
                        [
                            'name' => "Government Efficiency",
                            'stance' => "HJR24Joint Rules Resolution on Legislative Broadcast and Materials Access: Advance tele-government to enable citizens statewide to participate in state government remotely to increase access and reduce citizen costs. Requires that certain meetings and sessions of the Legislature be broadcast with audio and video; requires that broadcasted meetings and sessions be archived on the Legislature's website; provides certain exceptions and conditions for the broadcasting requirements; and provides standards for posting meeting materials on the Legislature's website.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 4',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Kera Birkeland',
                        'dob' => null,
                        'bio' => "Kera Birkeland brings integrity and accountability to the Utah House of Representatives. She displays strength when faced with challenges and never hesitates to stand up for her conservative beliefs, all while remaining open-minded and easy to get along with. Kera's experiences as a small business owner and foster parent have given her first-hand knowledge of government's unnecessary regulations and burdensome bureaucracy. She believes that conservative policies play a fundamental role in the success of Utah.",
                        'contact_email' => 'kbirkeland@le.utah.gov',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'https://www.kerabirkeland.com/',
                        'sources' => 'https://www.kerabirkeland.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Private Property Rights",
                            'stance' => "",
                        ],
                        [
                            'name' => "Freedom",
                            'stance' => "",
                        ],
                        [
                            'name' => "Choice in Education",
                            'stance' => "",
                        ],
                        [
                            'name' => "Lower Taxes",
                            'stance' => "",
                        ],
                        [
                            'name' => "Local Control",
                            'stance' => "",
                        ],
                        [
                            'name' => "The Unborn",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Kris Campbell',
                        'dob' => null,
                        'bio' => "Kris Campbell has lived in unincorporated western Summit County for 12 years (Summit Park, Timberline and Silver Creek neighborhoods near Park City). He was raised riding horses in eastern Wyoming and spent some time after college in central Pennsylvania before moving back to the mountains and high valleys of the West. He has two smart, considerate daughters with plenty of personality that keep him on his toes.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.kris4utah.com/',
                        'sources' => 'https://www.kris4utah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Support Local Decision Making",
                            'stance' => "Local communities need the tools, resources, and flexibility to make wise decisions tailored to your unique needs for public health, education, land use, and other issues.  As a state legislator, I will work to: Listen to people, ensuring your needs are considered and respected throughout the legislative process. Provide resources and support to help your community make great decisions about the challenges you face. Collaborate with people, towns, and counties to identify how and when the state can help address local needs.",
                        ],
                        [
                            'name' => "Legislate With Moderation",
                            'stance' => "I will increase trust in an effective, open legislative process by:Using legislative power in moderation.     Respecting and upholding the balance of power between the people, judiciary, executive, and legislative branches. Collaborating with people, both in the majority and minority, to find fair solutions that meet the needs of as many people as possible. Following open, transparent processes like the independent redistricting commission approach to find fair policies that balance conflicting priorities. Providing transparency into all decisions.  If a decision cannot stand up to public scrutiny in the light of day, it's a sure sign that it's not a good decision.",
                        ],
                        [
                            'name' => "Manage Growth Responsibly",
                            'stance' => "Let's build a collaborative model for responsible growth where developers work with communities to understand and meet your community's vision, goals, and needs.  I will encourage responsible growth by: Encouraging collaboration between community members, employers, government officials, and developers. Giving communities the flexibility to effectively plan for and coordinate development efforts locally. Limiting the duration of entitlements so that as communities needs and plans evolve due to changing circumstances, the entitlements can evolve or revert as appropriate. Balancing costs, risks, and rewards of development fairly across stakeholders so that current residents are not unfairly burdened, cities and counties have the resources they need to provide infrastructure and services to meet the new demand, and developers can earn a fair profit for their efforts while paying a fair share of the costs and risks. ",
                        ],
                        [
                            'name' => "Steward Our Water Resources",
                            'stance' => "To ensure that we continue to have plenty of water to meet our needs now, and our kids' and grandkids' needs in the future, we have the responsibility to be wise stewards of our water. I will help to manage our water resources for both immediate needs and long-term sustainability by: Continuing the momentum from the last legislative session's initial great efforts to address the Great Salt Lake and other water needs. Collaborating locally, using guidance and best practices from the state and other parts of Utah. Providing support to transition to crops that work well in short growing seasons with less water use. Encouraging farmers to use techniques that conserve water and improve soil quality.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 40',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Tim Loftis',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => 'timothyloftis@gmail.com',
                        'contact_phone_number' => '(801)860-1812',
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],
                [
                    'candidate' => [
                        'name' => 'Andrew Stoddard',
                        'dob' => null,
                        'bio' => "As a lifelong resident of the Salt Lake Valley, this District has shaped who I am today. I was raised in Sandy, live in Midvale, and work in Murray. I know this community and I am committed to serving its people. As your Representative, I will be an advocate for the people of in this District -- regardless of background, circumstance, or affiliation.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://www.voteandrewstoddard.com/',
                        'sources' => 'https://www.voteandrewstoddard.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Public Safety",
                            'stance' => "I am committed to building a safer community. Having worked as a city prosecutor, I've seen first hand the challenges brought by the rapid development in this part of the valley, including populations experiencing homelessness and an increase in pedestrian accidents. As your legislator, I will commit to using my influence on Capitol Hill to provide resources to House District 40. The citizens of this district have elected to shoulder the burdens of growth and are entitled to the support of the state.Passed Legislation: Disease Testing Amendments; POST Certification Amendments; Prohibited Persons Amendments"
                        ],
                        [
                            'name' => "Education",
                            'stance' => "An educated citizenry is the cornerstone of a strong community. I will make fully funding Utah?s schools a priority, and work to free teachers from constraints that keep them from bringing out the best in their students. Education doesn?t stop at high school, and I will take action to empower higher education - not just at four year universities, but also through state support of trade education, community college, and other programs that will create a dynamic, self-sustaining workforce to usher Utah into the tech age."
                        ],
                        [
                            'name' => "Housing",
                            'stance' => "It is easy to see the housing crisis facing Utahns. Home prices and rents continue to rise, pricing hard working citizens out of the American Dream. I am driven to create opportunities for home buyers and renters alike to improve their station including down payment assistance loans, rent assistance, and other programs that will create secure and long lasting places to live for Utah residents."
                        ],
                        [
                            'name' => "Criminal Justice",
                            'stance' => "My work as a prosecutor has shown me where the criminal justice system works, and where it doesn?t. I want to reform the process to make it more clear and accessible. I believe many minor offenders need to receive mental health, drug treatment, and other services to be rehabilitated into productive members of the community. I support comprehensive, evidence-driven criminal justice reform.Passed Legislation: Murder Mitigation Amendments; Expungement Amendments; Intimate Image Distribution Prohibition Revisions; Diversion Fees Amendments; Inheritance Disqualification Amendments"
                        ],
                        [
                            'name' => "Healthcare",
                            'stance' => "Healthcare is too important to be treated like just any business. I support programs that improve access and affordability for healthcare and insurance and that help patients make informed decisions about what care they want and what it will cost. I am ready to advocate for patients and work to expand access to resources across the state."
                        ],
                        [
                            'name' => "Labor",
                            'stance' => "Creating a realistic opportunity for self-sufficiency should be a cornerstone of any economy. I support increasing the minimum wage, strengthening protections for workers, including laws that encourage and permit workers to associate, laws that provide paid parental leave, and increasing access to workman?s compensation, unemployment insurance, and new job training for displaced workers.Passed Legislation: Consumer Sales Practices Amendments"
                        ],
                        [
                            'name' => "Immigration",
                            'stance' => "I believe that we work best by working together, and that immigration policy must be driven by wisdom, not fear. I always want to be with my own family, and our immigrant communities are entitled to that same opportunity. Utah is defined by our welcoming spirit, and our State government must reflect that value and welcome people from all over the world, serving as a safe haven and wholesome new community for refugees, asylum seekers, and victims of trafficking, crime, and domestic violence.Passed Legislation: Victim Guidelines for Prosecutors"
                        ],
                        [
                            'name' => "Air Quality",
                            'stance' => "Utah?s government has spent too long with their heads in the sand on this crucial issue, and they are letting our communities down. Children, the elderly, and the disabled are not just inconvenienced by the air in the valley- their lives are in danger. I pledge to take concrete steps to preserve air quality that will grow and strengthen Utah?s economy- steps like incentivizing telecommuting on red air days and overhauling Salt Lake?s public transit system.Passed Legislation:Tax Credit for Alternative Fuel Heavy Duty Vehicles"
                        ],

                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Thomas Young',
                        'dob' => null,
                        'bio' => "Tom is a life-long resident of the Wasatch Front and has called district 40 home for almost 20 years. Tom and his wife, Allison, enjoy sports, traveling, going to neighborhood events, and developing lasting relationships.He and Allison are raising four beautiful daughters, who do everything from basketball & soccer to science & programming, and many things in between. These good sports may even show up on your doorstep between now and November 8th.",
                        'contact_email' => '',
                        'contact_phone_number' => '(801)647-4979',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [
                        [
                            'name' => "Classrooms First",
                            'stance' => "The one area of the budget that needs action above words - classrooms. In this sphere is where our kids get inspired, where they learn creativity, and prepare for the time when they will take the reins in the not-too-distant future. We must treat our classrooms well.",
                        ],
                        [
                            'name' => "Our Taxes Now",
                            'stance' => "Economic growth is shifting and will require careful consideration of state government needs, private initiative, and market competitiveness. When it comes to taxes, Utah needs someone who will put taxpayers first.",
                        ],
                        [
                            'name' => "Effective",
                            'stance' => "Tom led much of the economics work of the Legislature for the past 15 years and built an economics company. He will bring that experience to the legislature and work to make the state government effective.",
                        ],
                        [
                            'name' => "Inflation",
                            'stance' => "Prices are up 10% for consumer goods and services, and 25% for homes. To slow the rise in prices, Utah should forgo increasing the gas and property taxes until there is evidence that more revenue is needed.",
                        ],
                        [
                            'name' => "Jobs and Economic Development",
                            'stance' => "Future growth depends on policies today. Utah should be careful with which companies receive tax incentives.",
                        ],
                        [
                            'name' => "Water",
                            'stance' => "The effects of what we do today will be felt for years to come. Utah needs to work towards solutions that do not increase the cost of water. Economic growth depends on it.",
                        ],
                        [
                            'name' => "Air Quality",
                            'stance' => "The Utah Division of Air Quality reports that 29% of our air pollution comes from our homes and businesses, 17% from industrial sources, and 42% from our cars and trucks. Carpooling to work, telecommuting when possible, forgoing burning on red burn days, converting to gas fireplaces, buying electric or low emission vehicles, and replacing water heaters with low emissions models may help, but are slow movements around the edges. Utah should work to make more significant investments in air quality.",
                        ],
                        [
                            'name' => "The American Dream",
                            'stance' => "Homeownership dropped from 71.7% in 2020 to 68.8% in 2021 and is down from a high of 76.2% in 2008. Nationally, the rate stands at 65.4%. This comes at a time when there is still room for single-family housing development in Salt Lake County and along the Wasatch Front. Utah should work to utilize undeveloped lands, rather than rushing to apartment/transit-oriented development.",
                        ],
                        [
                            'name' => "Transparency",
                            'stance' => "Rather than an after-the-fact reporting of what occurred, we should move into the 21st century, with real-time transparency. Tom will work on creating reporting that non-insiders would be able to figure out what's going on in real-time.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 41',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Gay Bennion',
                        'dob' => null,
                        'bio' => "I am passionate about education, our environment, and a robust economy for all. Thank you for entrusting me as your Representative in the Utah State Legislature. I find great joy as I connect with so many of you and help you to connect with one another.",
                        'contact_email' => 'gaylynn@gaylynnbennion.com',
                        'contact_phone_number' => '(385)-200-1794',
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://www.gaylynnbennion.co',
                        'sources' => 'https://www.gaylynnbennion.co',
                    ],

                    'opinions' => [
                        [
                            'name' => "Wise Stewardship of Our Air, Water, and Land",
                            'stance' => "Strong voice for sustainable use of Big and Little Cottonwood Canyons",
                        ],
                        [
                            'name' => "Housing",
                            'stance' => "Utah housing shortage exacerbated by real estate speculation, some in the form of illegal short-term rentals",
                        ],
                        [
                            'name' => "Quality Public Education",
                            'stance' => "Focus on early learning",
                        ],
                        [
                            'name' => "Healthcare",
                            'stance' => "Increase access to affordable healthcare",
                        ],
                        [
                            'name' => "Economic Development",
                            'stance' => "Follow best practices to provide careful, transparent state leadership",
                        ],
                        [
                            'name' => "Accountable, Balanced Representation",
                            'stance' => "Listen to varying viewpoints in our community and give voice to your values",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Wayne Sandberg',
                        'dob' => null,
                        'bio' => "Gary believes government must be value-based and effective in protecting individual rights for all, providing reasonable regulations which encourage growth, and cutting unnecessary bureaucracy. Gary believes in limited government and our inalienable rights to life, liberty and the pursuit of happiness.",
                        'contact_email' => 'sandbergforhouse41@gmail.com',
                        'contact_phone_number' => '(801)467-3222 ',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://sandbergforhouse41.com/',
                        'sources' => 'https://sandbergforhouse41.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Water Discrimination on the East Bench and in the Canyons?",
                            'stance' => "Many year-round residents in the Cottonwood Canyons don't get the same water service that others in Salt Lake County enjoy.  For several months each year, they have no culinary water in their taps and no water in their fire hydrants. To compound this outrageous situation, these homes are nestled in areas that are listed as high and extreme wildfire danger. ",
                        ],
                        [
                            'name' => "Wildfire Danger on the East Bench and in the Cottonwood Canyons",
                            'stance' => "Much of District 41's East Bench foothills and Cottonwood Canyons are listed as extreme fire danger. This according to the interactive fire risk map of the Utah State Division of Forestry, Fire and State Lands: https://wildfirerisk.utah.gov/Map/Public. ",
                        ],
                        [
                            'name' => "End the Traffic Jams on Wasatch Boulevard and in the Canyons",
                            'stance' => "The frequent and unacceptable traffic jams on Wasatch Boulevard and up the canyons frustrate canyon visitors and disturb the peace.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 42',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Carson Barlow',
                        'dob' => null,
                        'bio' => "My name is Carson Barlow, and I'd like to represent District 42 in the Utah House of Representatives. Things are hard right now. Inflation is hurting our wallets. Housing costs are putting first time home buyers out of the market, making it harder to start families. We currently have a water shortage.",
                        'contact_email' => 'carsonbarlow4utahhouse@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'I',
                        'site_link' => 'https://carsonbarlow.com/',
                        'sources' => 'https://carsonbarlow.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Environment",
                            'stance' => "I support responsibly converting Utah's energy production to clean methods such as Wind, Solar and Nuclear energy.",
                        ],
                        [
                            'name' => "Economy",
                            'stance' => "I'm in favor of building a strong Utah economy. Utah's heritage is one of an industrious people building the foundations of our state. Let's honor that heritage and get to work by promoting industrial legislation.",
                        ],
                        [
                            'name' => "Criminal Justice",
                            'stance' => "We ask too much of our police forces in Utah. We need to support them by investing in crime prevention initiatives that address mental health and drug addiction. I would also be willing to support universal background checks for gun ownership.",
                        ],
                        [
                            'name' => "Housing",
                            'stance' => "It is becoming increasingly difficult for first time home buyers in Utah. We need to incentivise the construction of starter homes to help alleviate the market cost of buying a place to raise a family.",
                        ],
                        [
                            'name' => "Water",
                            'stance' => "We are currently in a drought, and we are experiencing an increase in population as more people move in from out of state. I recommend we decouple water prices from property taxes, and price water for what is actually used. I also think it would be best to implement a water conservation infrastructure in Utah.",
                        ],
                        [
                            'name' => "Church and State",
                            'stance' => "With the overturning of Roe vs Wade, there has been a rise in contention here in Utah. Many of us believe that the life of the unborn must be protected. Many of us believe that it is up to the mother to decide what to do with her pregnancy. I believe we can work together to find and implement common solutions. I am willing to support a variety of legislation on this matter.",
                        ],
                        [
                            'name' => "Education",
                            'stance' => "I believe a strong public education system is beneficial to all who live in Utah.",
                        ],
                        [
                            'name' => "Health Care",
                            'stance' => "I would like to see medicare for all Utahns. If we can't work that out, then we should at least have a public option for health insurance.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'David Jack',
                        'dob' => null,
                        'bio' => "David Jack, M.D., FAAFP did his undergraduate training at the University of Utah and received his medical degree from the Uniformed Services University of the Health Sciences School of Medicine in Bethesda, Maryland. His training was in the U.S. Army at Ft. Lewis, Tacoma, Washington. He served 12 years on active duty with the Army and served another 28 years in the Utah Army National Guard. ",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => 'https://unitewithdavidjack.com/',
                        'sources' => 'https://unitewithdavidjack.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Increase transparency, fairness, and good character",
                            'stance' => "All proposed bills should be open to meaningful public review. Legislative caucus meetings should also be open. I support ethics reforms that make it easier to identify and eliminate conflicts of interest.",
                        ],
                        [
                            'name' => "Expand voter participation",
                            'stance' => "We need to strengthen our independent redistricting commission. It is positive to seek to expand access to alternative voting systems (such as Ranked Choice, STAR, or Approval voting methods) that reduce costs, encourage civility, and better reflect public will.",
                        ],
                        [
                            'name' => "Increased government accountability",
                            'stance' => "I support considering term limits that will reduce incumbent advantages. I also support campaign finance laws that will limit the influence of moneyed special interests.",
                        ],
                        [
                            'name' => "Equal Opportunity",
                            'stance' => "I support laws that provide protection against discrimination based on race, religion, gender, age, or sexual orientation. Every individual is of inherent worth, has a right to be respected, and deserves to fully participate in our shared political and economic life.",
                        ],
                        [
                            'name' => "Faith",
                            'stance' => "I support the protection of religious belief and its role in public life, as well as the constitutional right to free exercise of religious expression for all.",
                        ],
                        [
                            'name' => "Healthcare",
                            'stance' => "I wish to promote reforms that extend healthcare, including mental healthcare, to more people. Reforms should also seek to reduce costs, improve outcomes, and the quality of care.",
                        ],
                        [
                            'name' => "Immigration",
                            'stance' => "I endorse policy reforms that respect the dignity of individuals and the unity of families. I will advocate for a healthy immigration system that includes fair, enforceable laws and that promotes the economic benefits of immigration.",
                        ],

                        [
                            'name' => "Balanced Budgets",
                            'stance' => "I support sound fiscal policies that create a viable, long-term balance between government revenues and expenditures for the benefit of current and future generations.",
                        ],
                        [
                            'name' => "Economic Growth",
                            'stance' => "Public policy must promote economic opportunity for all, regardless of social and economic class, including the poor and needy.",
                        ],
                        [
                            'name' => "Taxes and Regulations",
                            'stance' => "I support a more efficient tax system that minimizes loopholes, reduces negative effects on working families, and ensures a fair contribution from all. Reviewing regulations and policies to continually assess their value in a changing economy is important.",
                        ],
                        [
                            'name' => "Environmental Stewardship",
                            'stance' => "I advocate for the stewardship of Utah's natural resources over the long term. I will promote policies that protect our air, water, and land to provide quality of life and economic benefits for many and across generations.",
                        ],
                        [
                            'name' => "Comfort",
                            'stance' => "As citizens, we should not be afraid of our own air.",
                        ],
                        [
                            'name' => "Water",
                            'stance' => "Without water, there will be no people! We must be able to conserve.",
                        ],
                        [
                            'name' => "Recreation",
                            'stance' => "It is important to safeguard open spaces and trails and to expand recreation for youth.",
                        ],
                        [
                            'name' => "Education",
                            'stance' => "I strongly support increased funding for public education as a vehicle for sustained economic growth, an engaged citizenry, and to equip students for a rapidly changing world.",
                        ],
                        [
                            'name' => "Children and Families",
                            'stance' => "It is extremely necessary to sustain and support children and their families for improved future social wellbeing, and community success.",
                        ],
                        [
                            'name' => "Economic Growth",
                            'stance' => "The best way to improve the state's economy is to assure adequate appropriate education for all, especially children.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Robert Spendlove',
                        'dob' => null,
                        'bio' => "Robert proudly serves in the Utah House of Representatives, where he was elected in 2014. He represents District 49 in the Legislature, covering parts of Sandy and Cottonwood Heights cities. Professionally, Robert is a Senior Vice President and the Economic and Public Policy Officer for Zions Bank.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://spendloveforutah.com/',
                        'sources' => 'https://spendloveforutah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Economy and Jobs",
                            'stance' => "As an economist, I have spent most of my career focused on strengthening Utah's economy and positioning our state for success. The best way to grow an economy is for government to give businesses the tools to succeed and then get out of their way. Businesses who are free from government over-regulation are able to thrive, create jobs, and contribute to our communities. Utah is routinely ranked as one of the best states in the nation to do business. These rankings include:",
                        ],
                        [
                            'name' => "COVID-19 and Economic Recovery ",
                            'stance' => "COVID-19 has shaken our economic growth and prosperity. I have been actively involved in policymaking and planning to fight the economic downturn caused by the pandemic. I have worked with state and local leaders to pass bills that help us battle the pandemic and pave the road to our economic recovery. ",
                        ],
                        [
                            'name' => "Education",
                            'stance' => "Education is a foundation for success.  We need to ensure that quality education is available to all Utah students.  It is my priority to focus on education with the goals of empowering parents, teachers, and students. We can only do so much at the Legislature, we need to ensure that education is a top priority for parents and students.  ",
                        ],
                        [
                            'name' => "Healthcare",
                            'stance' => "Utah is in a unique position to lead the nation in modernizing our healthcare system and addressing the needs of our citizens. As healthcare spending becomes a larger part of our nation's GDP, our state budget, and individuals' spending, it is essential for us to chart the right course. To do this, we must focus on lowering costs, increasing quality, and achieving greater access to the healthcare system.",
                        ],
                        [
                            'name' => "Air Quality",
                            'stance' => "Air quality is a major concern here in Utah. I am proud to have helped pass or been the co-sponsor to numerous laws that have helped our air quality.  However, we need to focus on education and encouragement rather than regulation.  By focusing on education and empowerment, we can allow the free market to drive improvements rather than rely on the heavy hand of government.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 43',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Alan Anderson',
                        'dob' => null,
                        'bio' => "A life long Democrat supporting the rights of ALL people. Fiscally conservative, socially liberal. Proud to be called a liberal.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => '',
                        'sources' => 'https://utahdemocrats.org/portfolio_page/alan-anderson-utah-house-district-43/',
                    ],

                    'opinions' => [
                        [
                            'name' => "No site to scrape!",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Steven Eliason',
                        'dob' => null,
                        'bio' => "No site to scrape",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 44',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Dee Grey',
                        'dob' => null,
                        'bio' => "My name is Dee Grey (They/Them) and I am running for the Utah House of Representatives in the 44th District representing Northern Daybreak, West & South Jordan. Too often I have heard from politicians, friends, neighbors, and coworkers about how much we just need to start talking. I am fully committed to the belief that across the aisle we share so many values in common.We share so many dreams and so much sorrow. Let us build from our shared values, and begin listening to all experiences. Anything less would be unkind.",
                        'contact_email' => '',
                        'contact_phone_number' => '(801)808-2717',
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://www.deegreyforkindness.com/',
                        'sources' => 'https://www.deegreyforkindness.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "EDUCATION",
                            'stance' => "Kindness is Listening. Our teachers deserve better. I will apply a Business Agility approach to improving our education system. This means making Education a viable, and valuable, by listening to the educators themselves.",
                        ],
                        [
                            'name' => "LIBERTY FOR ALL",
                            'stance' => "Kindness is Feedback. I firmly believe in the value of personal faith. I grew up being taught the same thing as most other people in Salt Lake City; limited government, community service, acting based on the best information we have, not on the whims of the day.",
                        ],
                        [
                            'name' => "THE ENVIRONMENT",
                            'stance' => "Kindness is Accountability. Our politicians on the Hill have regularly shown an inability to be accountable for their actions. From wasting money changing the Cannabis legislation, to ignoring the science behind pollution that drains our lakes and reduces the lung quality of our children.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Jordan Teuscher',
                        'dob' => null,
                        'bio' => "Jordan is the oldest of eight children. He met his wife, Aliona, while practicing law in Ukraine. Aliona had recently returned from a church mission in Novosibirsk, Russia and was about to leave to study at Brigham Young University. After a short courtship, they were married in 2009 and are now the parents of three adorable children, Tristan (8) and Tanner (7), and Madeleine (3). He and his family love to travel, work together in the yard, and attend sporting events.",
                        'contact_email' => 'jordan@jordanteuscher.com',
                        'contact_phone_number' => '(801)810-6170',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [
                        [
                            'name' => "A Constitutional Conservative",
                            'stance' => "I believe our founding documents were divinely inspired?that government exists to protect our lives, liberty, and property. Thus, we must ensure that government does not intrude into the lives of its citizens. I am pro-individual rights, pro-small government, and pro-capitalism. I believe as Jefferson did that the government closest to the people serves the people best. As such, I am a strong proponent of federalism and states rights. I am a fiscal conservative that supports the reduction and simplification of taxation. I am pro-life and I fully support the Second Amendment. I am a strong supporter of legal immigration and oppose any action that normalizes illegal immigration. I support the platform of the Utah Republican Party."
                        ],
                        [
                            'name' => "Responsible Growth and Affordable Housing",
                            'stance' => "Our valley continues to grow at an unprecedented rate, adding roughly 8,000 new residents each year for the past 20 years. The 32,000 acres of undeveloped land  west of Bangerter remains the last significant developable area in the county. The decisions we make today on how that land is developed will have lasting consequences on the vitality and quality of life for our community. It is crucial that the decisions affecting the development of this land is made by those who live in this area and who have to deal with the consequences."
                        ],
                        [
                            'name' => "Economy",
                            'stance' => "We have been blessed to live in a state with booming economic growth. Recently, we ranked first in the nation in job growth, innovation, and entrepreneurship. We just had the largest budget surplus in the history of the state. We have been recognized as the Best Managed State in America. These accolades have come because of Utah?s culture of limited government and fiscal responsibility. Government does not create jobs?its role in the economy is to protect property rights, to make and enforce laws that give citizens the opportunity to freely pursue opportunities, and to create and maintain public infrastructure so that businesses can thrive."
                        ],
                        [
                            'name' => "Education",
                            'stance' => "Coming from a long-line of educators, including a sister who is an English teacher at Herriman High School and a brother who is a teacher at Murray High School, I believe providing quality public education is an important issue facing Utah today. Although ensuring adequate resources is important, we can do a better job administering the educational funding in the state. We must cut down on the high-cost of bureaucratic overhead in education and get the money directly to the local administrators and teachers. Additionally, we must make sure that these local administrators are empowered to direct school funds as their needs demand to increase academic achievement. I support giving more autonomy to local school districts, principals, and administrators. Above all, I will continue to fight to bring more local control, transparency, and empowerment to those who understand the needs of our kids the best?the parents."
                        ],
                        [
                            'name' => "Infrastructure and Transportation",
                            'stance' => "We do not have the infrastructure in place to support the growth our corner of the valley is experiencing. More than 80% of our residents commute out of the area for employment each day, with nearly half of them headed north. We each have felt this as we sit in traffic and congestion every day. We need a plan to connect the west side of the valley to the east side. We need to expedite north-south projects that provide streamlined access from the southwest of Salt Lake County to the freeways."
                        ],
                        [
                            'name' => "First Amendment Freedoms",
                            'stance' => "Our first amendment rights are under attack. There are powerful forces that are working hard to inhibit freedom of speech and religious believers? ability to practice their religion and maintain their deeply-held convictions. I believe strongly in the inalienable right of individuals to freely share their opinions and worship in accordance with the dictates of their conscience. It is the role of government to protect and secure these rights. Unfortunately, there are too many in the legislature who undervalue these freedoms and set them aside in pursuit of other goals. I?m proud of the work I?ve been able to achieve in bringing greater freedom of speech to our college campuses, and pledge to continue the fight."
                        ],
                        [
                            'name' => "Air Quality",
                            'stance' => "Another challenge with Utah?s tremendous population growth over the past two decades and its potential growth is the effect that it has on our air quality. These effects are exacerbated by Utah?s high mountain valleys and plateaus. During winter months, the inversion the Salt Lake Valley experiences traps emissions in the valley for weeks, often reaching levels that negatively impact our health and can lead to serious negative health effects, especially for children and the elderly. Poor air quality can also have a negative effect on our economy as workers are less productive and businesses are less likely to make Utah their home. Improving our air quality needs to be a urgent priority to ensure that our quality of life remains high. I will continue to support cost-effective ways to improve air quality. However, in doing so, I will ensure we avoid government intrusion and business-killing regulations. This is a challenge we can overcome if we will tackle it using conservative principles, innovative thinking, and free market ideas."
                        ],
                    ],

                ],

            ],

        ],
        [
            'location' => 'District 45',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Susan Pulsipher',
                        'dob' => null,
                        'bio' => "Our family moved to South Jordan in 1999. My husband, David, and I have four daughters and twenty grandchildren. The future of this great state is important to me as I watch my grandchildren grow. I want to ensure that they have an environment that is safe, an economy that allows them to prosper and opportunities to maximize their potential,",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'http://susanpulsipher.com/',
                        'sources' => 'http://susanpulsipher.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 46',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Ladd Johnson',
                        'dob' => null,
                        'bio' => "I grew up in Sandy Utah and graduated from Jordan High School.  Following two years of missionary service in Brazil I attended BYU where I met my wife Bryn.  She finished her degree in Geography with a minor in Spanish and supported me while I finished my bachelor's degree in Accounting, a master's degree in Accounting and my law degree.",
                        'contact_email' => 'voteladd@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => 'https://www.voteladd.com/',
                        'sources' => 'https://www.voteladd.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Economy/Inflation",
                            'stance' => "We have many small businesses in Draper and Bluffdale.  I am a big supporter of small businesses being able to grow and thrive without governmental red tape. While inflation is an issue best addressed at a national level I will support common sense measures at the State level to help support our small businesses and address skyrocketing housing costs and increases to everyday purchases like groceries."
                        ],
                        [
                            'name' => "Education",
                            'stance' => "We have wonderful students, schools, teachers and parents in Draper and Bluffdale!  I support our schools and will advocate for additional funding for our schools.  Discussions regarding the education of our children are critically important and the best outcomes are achieved with a collaborative and balanced approach.  I am opposed to policies and decisions regarding education that are driven by a political agenda and not the interests of the children.  I do not want our schools becoming political battlegrounds and will fight to keep politics out of our schools.  I also will advocate for increased funding and opportunities for our kids to attend college or trade school after high school."
                        ],
                        [
                            'name' => "Local Control",
                            'stance' => "Most government decisions are best made at a local level.  While certain state level policies can and should be implemented, whenever possible the cities and counties should be left to work out the details of those policies.  The Utah legislature often imposes \"one size fits all\" solutions on our cities and counties and this practice should change.  I will advocate for State funds to make sure proper infrastructure is in place at the 146th South exit and other areas connected to the re-development of the prison site.",
                        ],
                        [
                            'name' => "Better Government",
                            'stance' => "I support common sense governmental improvements to make government more efficient and responsive to the citizens including implementing ranked-choice voting or approval voting, supporting independent redistricting, limiting campaign finance donations, term limits for elected officials, cracking down on conflicts of interest, making state school board and similar elections non-partisan and increasing legal voter participation in primary and general elections.  I will be a be an advocate for transparent spending by the State and carefully watch expenditures of tax dollars.",
                        ],
                        [
                            'name' => "Air Quality",
                            'stance' => "Air quality in Utah's cities has increasingly become a noticeable problem. I will support measures at the State and local level to encourage common sense policies and behaviors that can help improve air quality.  ",
                        ],
                        [
                            'name' => "Utah Outdoor Living",
                            'stance' => "I love Utah's outdoor lifestyle! I will prioritize making sure our mountains, trails, lakes, redrock and backcountry remain open and accessible to all.  As part of supporting our outdoor lifestyle, it is critical that the legislature take the current drought seriously and implement policies to wisely manage our water supply to preserve our ability to enjoy the outdoors.",
                        ],
                        [
                            'name' => "Healthcare Costs",
                            'stance' => "Healthcare costs have more than tripled between 2000 and 2020 making healthcare unaffordable for so many.  This is an incredibly complex problem, but we can begin taking actions at the State level to start chipping away at the factors that cause such dramatic increases in costs.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Jeff Stenquist',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => '',
                        'contact_phone_number' => '(385)272-9437',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 47',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Dave Lundgren',
                        'dob' => null,
                        'bio' => "Government only functions when it has the public trust.  That is why it is vital we have leaders whose leadership and behavior are beyond reproach.  Yet more and more, we discover our leadership is dismissive of its stewardship of our trust. When I speak of ethics, I speak of a person adhering to the rules of law.",
                        'contact_email' => 'DaveUtahHD47@gmail.com',
                        'contact_phone_number' => '(801)803-4450',
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => 'https://daveutah47.com/',
                        'sources' => 'https://daveutah47.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Campaign Finance Reform",
                            'stance' => "It is too easy for wealthy individuals to contribute large amounts of cash to legislators with the expectation that their next donation will depend on a few key votes.  Influence is bought.  It also gives mammoth advantages to incumbents whose entire tenure can be an endless fundraising campaign.  I will propose a bill which would fund each election for a state office and ensure that candidates are on a level playing field when it comes to accessing the public.",
                        ],
                        [
                            'name' => "Term Limits",
                            'stance' => "There is something to be said for experience.  When that experience is used, however, to stifle new ideas and establish influence that others feel compelled to submit to, the value of that tenure is overwhelmed.  We need to limit terms for legislators in order to get a wider range of ideas in how to approach the problems and opportunities we face.",
                        ],
                        [
                            'name' => "Gerrymandering",
                            'stance' => "The citizens of the state have told our leaders that we wanted fair and impartial districting.  Instead, our legislature passed a law which diminished transparency and accountability in the districting process and turned the Better Boundaries commission we voted for into little more than an extra-credit project.  The state legislature put their interest over ours.  I would work to craft legislation that would authorize the state legislature to only be allowed to vote on proposals put forward by the independent commission.  ",
                        ],
                        [
                            'name' => "Fiscal Accountability",
                            'stance' => "Everyone has heard stories of government agencies which spend large amounts of money needlessly at the end of a budget year simply to justify a large budget next year.  This wasteful process inflates what we must spend to fund departments.  I would propose the Responsible Stewards Act that would move any department head whose department comes in under budget to the front of the line when considering promotions or other state positions.  We need to reward those who are responsible with our money, not simply the ones with the most influence and largest budget.",
                        ],
                        [
                            'name' => "Bluffdale Prison",
                            'stance' => "The prison is going to be decommissioned shortly.  Right now there is a board in place which is reviewing options on what can be done with this land after the prison is relocated.  For the past eighteen months, I have been pressing the board to share information on how the land will be distributed.  I have gotten no reply from them.  I have gotten dismissive answers from representatives in my house and senate district.  Over 30 of our 104 legislators have day jobs in real estate and land development, including the house speaker and majority whip.  Without transparency, the conditions are perfect for corruption, collusion, and backroom deals.  We NEED transparency in what will happen with this land and how it will be allocated, and I will fight for that.",
                        ],
                        [
                            'name' => "Election Reform",
                            'stance' => "As they are constituted now, our elections restrict the choices people have in who they may vote for and how they consider their candidate of choice.  Often, this leads to people voting not for who they prefer, but voting against the person the like the least, doing what they feel will ensure the defeat of one person even if it means they don't get to vote for who they truly feel would do the best job.  I would work to enact Ranked Choice Voting throughout the state, enabling people with a more robust way to express their political preferences.",
                        ],
                        [
                            'name' => "Committees",
                            'stance' => "I will do all I can to earn a seat on any and all committees dealing with ethics and conduct of legislators.  I want the citizens of Utah District 47 and the state as a whole to know there is at least one person who is vigilant in keeping its legislature in line and above board.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Mark Strong',
                        'dob' => null,
                        'bio' => "One of the most memorable experiences of my youth was living in Munich, Germany while my father was serving in the Air Force. While there I got to travel to Berlin with our youth football team to play the American team there and to see West Berlin. Back in 1982 the wall between East and West Berlin was a very dark place. During my weekend there our team went to a lookout point where we climbed some stairs to a small platform, big enough for just a couple boys, and looked over into East Berlin.",
                        'contact_email' => 'mark@strong4utah.com',
                        'contact_phone_number' => '(385)275-5682 ',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://strong4utah.com/',
                        'sources' => 'https://strong4utah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Limited Government",
                            'stance' => "Government derives its power from individual citizens like you and me and those powers must be restrained. Powers given to government should be exercised close to the people, first at the city level, then at the state and finally at the federal level. When kept local our leaders are more accountable to neighbors and concerned citizens who have a voice that can be heard. ",
                        ],
                        [
                            'name' => "Education",
                            'stance' => "Nothing is more important to the future strength of Utah and the USA than the education of our youth. I am committed to improving education by supporting the most effective learning techniques available. We need disruptive innovation at every level to get more bang for our buck. I support increased compensation for effective teachers who inspire our youth. My feelings were summed up by a catchy phrase I found on the Sutherland Institute's website, \"NO TAXATION WITHOUT INNOVATION.\" ",
                        ],
                        [
                            'name' => "Fiscal Accountability",
                            'stance' => "Governments, at every level, should be held to the same standard of fiscal accountability as citizens. My wife and I have made sacrifices and worked hard to be debt free and enjoy the benefits and freedom that come with that. Governments must do the same by making hard choices to restrain spending.",
                        ],
                        [
                            'name' => "Strong Families",
                            'stance' => "My views on the subject of family are best summed up by the Republican Party Platform which states, \"We recognize the traditional family as the fundamental unit of society. We affirm that parents have the fundamental right and primary responsibility to direct the upbringing of their children and to provide nurturing care, discipline and training in moral values.\" ",
                        ],
                        [
                            'name' => "Economy",
                            'stance' => "For the past twenty-four years I have worked closely with businesses throughout Utah. My work takes me into warehouses, manufacturing plants, distribution centers and other storage areas. Relying on my decades of expertise, we are able to work together to maximize storage and material handling. Because my industry serves nearly every other industry, I see the struggles businesses face in trying to make a profit while serving their customers and taking care of their employees. I am a firm believer in the free market system and want laws that help to maintain a positive business climate for continued economic growth in Utah, with as little government interference as possible.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 48',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Jay Cobb',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => '',
                        'contact_phone_number' => '(801)712-4451',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],
                [
                    'candidate' => [
                        'name' => 'Katie Olson',
                        'dob' => null,
                        'bio' => "A native of Pleasant Grove, Utah, Katie Pitts Olson learned about hard work and public service early on. Her father was a firefighter for Provo City for 21 years. He often worked two to three jobs to make ends meet on a public servant salary. Katie's seen firsthand the mental and physical toll of being a first responder.",
                        'contact_email' => 'katie@votekatieolson.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://www.votekatieolson.com',
                        'sources' => 'https://www.votekatieolson.com',
                    ],

                    'opinions' => [
                        [
                            'name' => "Informed Decisions",
                            'stance' => "I?ve dedicated my career to continuous government improvement. This means that every day I evaluate options from all angles, and I run the numbers. I?m not afraid to ask tough questions?and I don?t take ?That?s the way we?ve always done it? for an answer. I figure out how each activity aligns with our values, whether the costs?time, environmental, fiscal, personnel?are justified, and how the trade-offs might happen. As your state representative, I commit to fully evaluating potential legislation and talking with those of us who would be affected by it. The votes I cast will be backed by data, logic, and the voices of my constituents. In making the best decisions for our region, I will always prioritize data over daydreams."
                        ],
                        [
                            'name' => "Balanced Growth",
                            'stance' => "Change in Utah is happening. How it happens is up to us! We can strike a balance of growth and stability without sacrificing the things we love about our beautiful state. As your state representative, I will help local governments become more self-sufficient through building their residential and commercial tax bases to fund local infrastructure and services. I will hold developers accountable for paying their fair share. And I will encourage cities to offer a variety of housing types for residents of all income ranges. We can preserve the open space we love and continue to build strong communities through bold, smart planning as we grow."
                        ],
                        [
                            'name' => "Strong Cities",
                            'stance' => "When you turn on the tap to brush your teeth with clean water, that?s local government at work. The world is complex, but every day there are firefighters, police officers, and public works employees working hard to make sure the basics of your day stay simple. The traffic lights function, the road is plowed, and the trash is taken out. It?s the essential services that can unite us. As your state legislator, I will help ensure that our local governments have the power they need to meet your needs through timely, informed local control. I will advocate for legislation that supports our basic needs to make our cities, counties, and schools a safe and happy home for all of us."
                        ],
                        [
                            'name' => "Education, Education, Education!",
                            'stance' => "Investing in our children is a must. As your state representative, I will help Utah recognize the role of educators by paying them livable wages and by working with teachers and school boards?rather than against them?to improve our public schools. We can?t afford to skimp on education or to waste time debating statewide arguments about what teachers, school boards, and parents can decide in their own communities. As a state legislator, I will vote for giving every student the community support they need to help them grow physically, intellectually, emotionally, and socially."
                        ],
                        [
                            'name' => "Bold & Balanced Budgets",
                            'stance' => "I?m obsessed with budgeting. It?s how I?ve helped my own family prosper and thrive on a public servant salary?even in the hardest times. I will bring that same needs-based mentality to the state. Utah has a booming economy, making this the ideal time to invest in the things we value most, including safe infrastructure and strong education. Each expense of hard-earned tax dollars must be justified with a clear outcome. Likewise, tax cuts should be meaningful and targeted, not knee-jerk reactions. I will advocate for legislation with a complete cost analysis that accounts for the full picture, not just the short-term, and can always answer how this aligns with our values and furthers the well-being of Utahns."
                        ],
                        [
                            'name' => "Solid Stewardship",
                            'stance' => "Utah?s natural beauty and resources are unparalleled. Stewardship over these state lands is a deeply held belief for me and one I take seriously. As your state representative, I will vote for smart, data-driven solutions to water quantity and quality issues. Similarly, we need to work together to solve one of Utah?s most pressing economic and health concerns: our air quality. Utah needs bold state leadership now to work with industry and our citizens to ensure clearer and cleaner air. To attract and retain businesses and families, we need air that is always safe for our children and our most vulnerable to breathe. I will prioritize legislation that offers evidence-based solutions to this critical and growing problem."
                        ],
                        [
                            'name' => "Community Counts",
                            'stance' => "Nothing is more important to me than my family. It?s also become clear to me that it takes a community to take care of people. From extended family to kind neighbors, my little family is better because of the connections we?ve made. And I know that I share these beliefs with many Utahns. As your state representative, I will vote to protect families and provide them with the support they need to grow and thrive in Utah. It?s critical that we more broadly provide services to strengthen caregivers as they raise the next generation. Research shows that offering robust maternal services, including counseling, financial support, and quality health care, as well as mental health services for parents, is good for children and for communities. We need strong responses to domestic violence threats in our communities and clear, including multi-faceted supports for anyone trying to leave abusive situations.  I want Utah to be filled with safe, supportive neighborhoods where kids play together and there?s a place for parents and those without children to feel loved and connected."
                        ],
                        [
                            'name' => "Reliable Infrastructure",
                            'stance' => "It?s no secret here in the South Valley: east-west traffic is strained. We can?t widen I-15 forever, but we can recognize our growth and start to plan around population centers. Mountain View Corridor will need to be safer sooner, as we reckon with planned growth to the west. Multi-modal transportation must be part of our plan. We can?t afford to get caught up in shiny sales pitches with a high price tag. Rather, we must stay focused on the simple, straightforward solutions: I?m talking bus rapid transit and strengthening each local area so residents can live, work, and play without needing to drive far."
                        ],
                        [
                            'name' => "Housing for All",
                            'stance' => "Utah is in the midst of a housing crisis, and we in the South Valley know too well that the biggest cost of that crisis is being borne by Utah families. Too many Utah families, especially the young and the vulnerable, are underhoused and under stress, forced to choose between having either livable commutes or enough money to meet their families? other needs. As your state representative, I will promote solutions for increasing affordable housing in Utah in rural, suburban, and urban areas. I will work for cost-effective and humane services for the homeless and unhoused, following the best practice of housing-first solutions. And I will vote for policies that will increase the volume of middle housing in Utah, so we can better serve our hard-working families."
                        ],
                        [
                            'name' => "Mental Health Matters",
                            'stance' => "My life has been touched by suicide too many times. The struggles I?ve witnessed in friends, neighbors, and family members due to mental health issues are forever written on my heart. We can do more to support research, access, and affordability for mental health treatments. Utah can become a beacon of hope for tackling these issues with sensitivity, compassion, and true love."
                        ],
                    ],

                ],

            ],

        ],
        [
            'location' => 'District 49',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Candice Pierucci',
                        'dob' => null,
                        'bio' => "I grew up in Herriman and have lived in House District 52 for over seventeen years—I remember when it was mostly farmland and neighborhoods. Since then, our district has seen tremendous growth, opportunity and unique challenges. My husband and I have chosen to raise our family here in the South Valley—I love the community and the people who live here.",
                        'contact_email' => 'candice@candicepierucci.com',
                        'contact_phone_number' => '(385) 202-3936',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.candicepierucci.com/',
                        'sources' => 'https://www.candicepierucci.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "PROPER ROLE OF GOVERNMENT",
                            'stance' => "I love and support the Constitution. While many people across the country are aware of the separation of powers found in the Constitution, it seems that most people in Washington D.C.  have forgotten that the Constitution provides enumerated powers only. States must push back against constant overreach by the federal government. As your state representative, I fight for a limited federal government and work to reassert Utah's rights as a state."
                        ],
                        [
                            'name' => "2ND AMMENDMENT",
                            'stance' => "I am a staunch defender of the 2nd Amendment. I do all within my power as a state legislator to protect an individual's constitutional right to bear arms."
                        ],
                        [
                            'name' => "MENTAL HEALTH",
                            'stance' => "Fewer than half the adults with a mental illness in Utah are getting treatment or counseling, and suicide is the leading cause of death for the state?s youths. On average, about 620 Utahns have died by suicide annually over the past five years, and the state?s age-adjusted suicide rates were the fifth-highest in the nation, according to state data. We have a lot of work to do. As your State Representative, I passionately pursue legislation to improve mental health in Utah."
                        ],
                        [
                            'name' => "SUPPORT LAW ENFORCEMENT",
                            'stance' => "Utah?s law enforcement officers represent the very best of our state, especially the police officers, sheriff?s deputies, and highway patrol troopers who serve in the Southwest corner of Salt Lake County. Over the past few years as your Representative, I have had the privilege to get to know many of the men and women who protect and serve the communities of our district. They are good people, who genuinely care about the people they serve. Despite increasingly challenging times, we remain protected thanks to the selfless sacrifices of these heroes."
                        ],
                        [
                            'name' => "RESPONSIBLE GROWTH",
                            'stance' => "WATCH VIDEO"
                        ],
                        [
                            'name' => "PRO-FAMILY",
                            'stance' => "I am pro-life and feel strongly that the state has a vested interest in protecting the life of the unborn."
                        ],
                        [
                            'name' => "SUPPORTING OUR MILITARY",
                            'stance' => "We have a sacred responsibility to care for those who have served our country and preserved our freedoms. I have had the opportunity of serving on the board of directors for Utah Honor Flight and volunteering as a flight leader on flights with our WWII, Korean, and Vietnam veterans. Time and time again I was reminded of the true price of freedom and the sacrifices our service members and their families make daily. I have volunteered at the veteran?s nursing home and played bingo with America?s Greatest Generation. While working for Congressman Stewart I worked on casework for veterans, helping them access their benefits with the VA and feel strongly that we can do more to support our service members and their families."
                        ],
                        [
                            'name' => "EDUCATION",
                            'stance' => "The education of the next generation is critical for the continued success of individuals, families, and the state. Parents must be empowered in the decision-making process of their children?s education. We have so many incredible teachers in Utah. We need to allow for more innovation in the classroom and reward success. As a legislator I have supported and will continue to support legislative policies that increase funding for education, facilitate innovation in education, empower parents, and put students? success and learning first."
                        ],
                        [
                            'name' => "TAX POLICY",
                            'stance' => "I am not in favor of an increase in tax rates and agree with Utah?s current flat tax structure and would not support a progressive tax structure. I believe that tax code should be simple, have low rates, and include a broad base. As a fiscal conservative, I have advocated for a common-sense approach to spending, promoting efficient and effective use of taxpayer dollars."
                        ],
                        [
                            'name' => "DOMESTIC VIOLENCE",
                            'stance' => "Domestic violence is a serious issue for far too many children and families in Utah. Since 2000, at least 42% of adult homicides in Utah were domestic violence related. Families are at risk and our law enforcement is stretched thin dealing with domestic violence cases. As your legislator, I am committed to tackling this issue head on. I am bringing together community leaders, local law enforcement, and advocacy  organizations to coordinate a community and legislative response heartbreaking reality that is plaguing our communities."
                        ],
                    ],

                ],
                [
                    'candidate' => [
                        'name' => 'Miles Pomeroy',
                        'dob' => null,
                        'bio' => "Miles was raised in Mesa, Arizona and Bakersfield, California. He served a mission for The Church of Jesus Christ of Latter-day Saints in Toronto, Canada. Miles graduated from Brigham Young University in Biology and went on to a PhD program at UC Irvine. Biology was not a good fit for Miles, so he pivoted his career to software engineering. Miles currently works at Domo as a Senior Software Engineer.",
                        'contact_email' => 'miles@moderatemiles.com',
                        'contact_phone_number' => '(801)810-4344',
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://moderatemiles.com/',
                        'sources' => 'https://moderatemiles.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Value the Voter",
                            'stance' => "Over the last few years, the state legislature has ignored the will of the people by nerfing citizen passed ballot initiatives. Miles will respect the voters' voice.",
                        ],
                        [
                            'name' => "Balance Extremism",
                            'stance' => "Republicans control 80% of the seats in the state legislature, leading to a use of power without proper checks. Miles can help restore the balance.",
                        ],
                        [
                            'name' => "Work with All",
                            'stance' => "Divisiveness breeds bad policy. Compromise is the telltale sign of good democracy. Miles will work the Utah Way, across the aisle, to focus on the real issues.",
                        ],
                        [
                            'name' => "Care about People",
                            'stance' => "Compassion for the marginalized should be a hallmark of Utah life. Miles believes lifting the disadvantaged lifts the whole community.",
                        ],
                        [
                            'name' => "Fiscally Conservative",
                            'stance' => "Governments have a responsibility to use tax revenues wisely. They should demonstrate that any tax change will result in a net benefit for society. We must keep taxes from limiting economic mobility.",
                        ],
                        [
                            'name' => "Socially Progressive",
                            'stance' => "Every Utahn deserves a fair chance to reach their goals. Our nation's history includes injustices, but we have made progress. We must ensure our communities are inclusive for all Utahns.",
                        ],
                        [
                            'name' => "Limited Government",
                            'stance' => "Government functions most efficiently when it is close to the people and fairly represents them. Utahns value their personal agency to decide what is best for themselves. We must empower people over special interests.",
                        ],
                        [
                            'name' => "Pro-Family",
                            'stance' => "Utah lags behind in education funding; quality teaching requires quality pay. Affordable healthcare, childcare, and housing are essential to supporting young families. We must invest in our children—our future.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 5',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Casey Snider',
                        'dob' => null,
                        'bio' => "Casey has worked in the US Senate, the US House, and in various other capacities at the national, state, and local levels of government. Most recently he was the Chair of the Cache County Republican Party. Successful leadership means doing the right thing for the right reasons.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.caseysnider.com/',
                        'sources' => 'https://www.caseysnider.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 50',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Stephanie Gricius',
                        'dob' => null,
                        'bio' => "Service is at the core of everything Stephanie Gricius has focused on with her family, faith, and community throughout her life. She began serving her community as a volunteer t-ball coach for the YMCA at age 14 and hasn't stopped serving since. In 2014, Gricius saw a need in her community as the Utah Legislature  debated relocating the state prison to Eagle Mountain and dedicated her time and energy to help lead the opposition.",
                        'contact_email' => 'Stephanie4Utah@gmail.com',
                        'contact_phone_number' => '(801)901-8251',
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'https://votestephanie.org/',
                        'sources' => 'https://votestephanie.org/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 51',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Jeremy Baker',
                        'dob' => null,
                        'bio' => "I'm a life-long Utahn and a first-time home owner in Lehi as of 2021. I graduated from UVU with a Bachelor of Science in Criminal Justice with an emphasis in law enforcement and a Master of Science in Cybersecurity. I am currently a cybersecurity lead/architect. ",
                        'contact_email' => 'bakerforutahhouse@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'L',
                        'site_link' => 'https://www.bakerforutah.com/',
                        'sources' => 'https://www.bakerforutah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Increase Personal Freedoms",
                            'stance' => "With the growing movements focusing on personal freedoms and government tyranny, I want to continue that passion to extend it in areas where Utah continues to be anti-freedom. According to Cato Institute's Freedom in the 50 States 2021 report, Utah ranks 50th for alcohol freedom and gambling freedom. In a state that saw protests against covid mandates and allowing only 'essential' workers to work, we should be extending that sentiment to the restrictive alcohol and gambling laws. If elected, I would push to reduce the role of the DABS (DABC), push to get our alcohol laws in line with our neighboring states, and push to get our gambling laws in line with our neighboring states.",
                        ],
                        [
                            'name' => "Abortion",
                            'stance' => "Along with personal freedoms and with the recent SCOTUS ruling pushing abortion to a state legislative responsibility, I believe Utah's trigger abortion ban enacted in 2020 is too restrictive on elective abortions, although it does account for reasonable exceptions. If elected, I would work with other law makers to put in a reasonable time period where elective abortions are allowed. I prefer the cut-off for elective abortions being at the date of viability as noted in Planned Parenthood v. Casey.",
                        ],
                        [
                            'name' => "Reduce State Spending and Taxes",
                            'stance' => "Reviewing Cato Institute's Freedom in the 50 States report, Utah's score could improve by reducing state spending and taxes. As an enthusiast of laissez-faire and Austrian economics, if elected, I would work with other lawmakers to reduce the role of the state government, reduce taxes after reducing spending, and work to ensure people within the state are keeping more of their money to spend it in the market where they would prefer rather than where the government would prefer.",
                        ],
                        [
                            'name' => "Eliminate the Grocery Tax",
                            'stance' => "While working on reducing state spending and taxes, the grocery tax is something that could be eliminated without any consequence. Only 13 states impose a grocery tax, if elected, I would look to get Utah to join the 37 other states in entirely removing the grocery tax.",
                        ],
                        [
                            'name' => "Eliminate the Income Tax",
                            'stance' => "A big tax reform that would benefit Utah is eliminating the income tax. Florida, Texas, and five other states do not have an income tax and Utah could join them. If elected, I would work with other lawmakers to make Utah the 8th state to eliminate state income taxes.",
                        ],
                        [
                            'name' => "Educational Freedom",
                            'stance' => "I'm a huge supporter of educational choice and was disheartened to see Governor Cox veto the school choice bill. I like the innovation that comes with the private sector and believe homeschooling, charter schools, and private schools can provide solutions to our future educational needs, but most of all, students should be funded, not institutions, so parents can decide what education their child receives. If elected, I would work with other lawmakers to bring another school choice bill to Governor Cox.",
                        ],
                        [
                            'name' => "Increase Digital Privacy",
                            'stance' => "It's a common headline to see that data was leaked and individuals' information was stolen in a hack, but most people don't have any recourse. Many governments have tried to address the issue by creating standards and fining companies. From experience, those standards are more less bars that IT and cybersecurity teams meet in order to not be legally liable, not to truly secure data. I believe that each individual should be able to own their identities and as such should have a way to be compensated for the poor security practices of companies. If elected, I would work with other lawmakers to create a digital privacy law that allows Utah residents to seek compensation from any company that loses their personal data and be awarded a portion of any profit made from selling their personal data.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Jefferson Moss',
                        'dob' => null,
                        'bio' => "My amazing wife, Kim, and I have four children ranging from 18 years down to 9. My wife received her degree from Utah Valley University and is currently a teacher at Harvest Elementary. She grew up in Ephraim and attended Snow College. While in High School, she was the pitcher on the softball team. She spends most of her time running our kids to all of their different activities, as well as teaching piano.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.jeffersonmoss.com/',
                        'sources' => 'https://www.jeffersonmoss.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Education",
                            'stance' => "As a child of two educators, the husband of a teacher, and the parent of four children in the public education system, I feel strongly about the importance of getting a good education. I understand the challenges that Utah faces with having large families and limited resources. I have been a strong advocate for local control and feel that decisions are best made at the level closest to the student and parent. I have aggressively pushed back on efforts by the Federal Government to influence education policy in our state. I believe we have a much better understanding of what our students need to succeed than those in Washington. I also passed a bill that pulled back much of the micromanagement from the state level down to our districts on teacher evaluations. I don?t believe in a one size fits all approach and want to empower those at the local level. I feel that our teachers and principals are innovators, and I passed a bill that establishes the Utah Leading in Effective and Dynamic Education program in the state. This will create a clearinghouse of innovative and effective practices from throughout the state, which will be a very helpful resource for our teachers and principals."
                        ],
                        [
                            'name' => "Job Creation",
                            'stance' => "Utah has a rich history of entrepreneurship, rooted in our pioneer heritage of self-reliance and hard work. As an entrepreneur, I understand how challenging it is to build a company from the ground up. It is the entrepreneur that takes the risks and puts in the efforts that produces the jobs of tomorrow. We need to continue to support groups that help in entrepreneurs being provided the right tools and then step aside and let them flourish. The best thing that government can do is support these small business owners and not burden them with over regulation."
                        ],
                        [
                            'name' => "Transportation",
                            'stance' => "As a resident of Saratoga Springs since 2004, I have seen the population in our area explode. While serving on both the City Council and Planning Commission, I was very involved in transportation issues and long term planning for the eventual build out of our area. I believe this experience will be critical as I work with the state on transportation issues statewide, while bringing a much needed perspective from our district."
                        ],
                        [
                            'name' => "Transparency",
                            'stance' => "In my time serving on the City Council and State Board of Education, I have been a strong advocate for open and transparent government. When going through a severe budget shortfall, I pushed to have a series of open meetings to go over every department and evaluate every expenditure and determine what was a must-have versus a nice to have. In addition, I pushed to solve our fiscal issues by going through a public truth in taxation process, rather than hiding the increase through overtaxing fees. I want the public to know exactly where their tax dollars are going, regardless of the potential political fallout of doing so. I passed a bill that required that every city be completely transparent about how they use these enterprise funds (http://archive.sltrib.com/article.php?id=5458967&itype=CMSID).As a member of the State Board, I realized shortly after being elected that our budget and spending were anything but transparent. Even as a board member, it was very difficult to understand how we were spending the funds that were allocated. After several board members aggressively asked questions, it became apparent that we needed to make serious changes to the oversight and transparency of the finances. I helped to lead the charge on adopting spending plans, a formal budget, and improved accounting processes. I feel strongly that transparency leads to greater accountability and I will continue to fight for that as a member of the legislature."
                        ],
                        [
                            'name' => "Taxes",
                            'stance' => "I believe strongly in limited government. I have fought for fiscal responsibility and transparency at the city and state levels. I feel that government should provide only those things that the individuals cannot provide by themselves. I will continue to fight against government waste and inefficiencies that lead to higher taxes."
                        ],
                    ],

                ],

            ],

        ],
        [
            'location' => 'District 52',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Cory Maloy',
                        'dob' => null,
                        'bio' => "The Utah State Legislature needs principled representation to build a vibrant Utah. Cory Maloy was elected to the Utah House of Representatives in 2016 and is currently serving his second term. As the Utah House Representative for District 6, Cory is a strong voice for reasonable and rational solutions. He uses his principles and integrity to guide his hand in creating policy.",
                        'contact_email' => '',
                        'contact_phone_number' => '(801)477-0019',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.votecorymaloy.com/',
                        'sources' => 'https://www.votecorymaloy.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 53',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Kay Christofferson',
                        'dob' => null,
                        'bio' => "I come from a large family of 7 children. My wife is from a family of 9 children. We have 7 children of our own. Family is an important part of our life. We are enjoying a new generation with 11 grandchildren.",
                        'contact_email' => 'kay@christofferson56.com',
                        'contact_phone_number' => '(801)592-5709',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://christofferson56.com/',
                        'sources' => 'https://christofferson56.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Cut taxes, cut government spending and cut the red tape",
                            'stance' => "Utah's economy is strong!  We have one of the lowest unemployment rates in the country and this can be tied back to conservative principles voted on in the legislature.",
                        ],
                        [
                            'name' => "Enhance education through local control",
                            'stance' => "I believe that we know what is best for our children; not a bureaucrat in Washington.  I supported legislation that would give more control to the local level, where it should be.",
                        ],
                        [
                            'name' => "Build infrastructure to prepare for the future",
                            'stance' => "As the Chair of the House Transportation Committee I help set good policies that keep our families and economy moving.",
                        ],
                        [
                            'name' => "Protect the Unborn",
                            'stance' => "I am not afraid to say that I am pro-life. In the Legislature I have sponsored legislation that protects the unborn. I have also helped encourage the Utah County Commission to pass a resolution Declaring Utah County's Support for Protecting All Human Life.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'W. McCullough',
                        'dob' => null,
                        'bio' => "Candidates website seems outdated. Check it out at http://andrewmccullough.org/",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'L',
                        'site_link' => 'http://andrewmccullough.org/',
                        'sources' => 'http://andrewmccullough.org/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. It seems McCullough doesn't have an issues page.",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Ann Schreck',
                        'dob' => null,
                        'bio' => "Ann was born in Northern California and lived in Minnesota and Southern California before moving to Utah. She has chosen to live in Utah County for over 25 years for the proximity to beautiful mountains, economic and real estate growth, and safe neighborhoods. She attended Utah Valley University, then graduated from Brigham Young University with a Bachelor of Science. She has strong ties to the state, with many of her extended family calling it home as well, and calls herself a \"Utahn by choice\".",
                        'contact_email' => 'info@schreckforutah.com',
                        'contact_phone_number' => '(801)901-0166',
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://schreckforutah.com/',
                        'sources' => 'https://schreckforutah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Taxes, Economy, and Infrastructure",
                            'stance' => "Responsible use of the taxes we all pay is key, and will help ensure a stronger economy, with more affordable housing, better transportation options, and build and maintain important infrastructure from roads and schools to utility connections and internet for work, learning, and life."
                        ],
                        [
                            'name' => "Water, Air, Land",
                            'stance' => "Preserving the resources of Utah for generations to enjoy - reducing pollution and safeguarding water and natural land. Our tax dollars and government should also be working for a cleaner environment (in additional to personal responsibility). It's time to include renewable energy in our economy and lives to make sure we are good stewards of this planet."
                        ],
                        [
                            'name' => "Critical Services",
                            'stance' => "Utah needs to focus on providing services that improve their lives from medical and mental health to education and training to encourage a robust workforce and thriving population.Important services to ensure a physically and mentally healthy person from prenatal to death is critical to the wellbeing of a state and nation. Each person should be able to make decisions about the size and timing of their family as part of their physical, mental and financial responsibilities."
                        ],
                        [
                            'name' => "Vote Like Your Country Depends On It",
                            'stance' => "Every adult citizen has not only the right to vote, but the responsibility to vote and have their vote recognized. Our Republic will stand with the checks and balances our Forefathers imagined ensuring all citizens are represented in their government."
                        ],
                    ],

                ],

            ],

        ],
        [
            'location' => 'District 54',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Brady Brammer',
                        'dob' => null,
                        'bio' => "Brady has unique TRAINING & EXPERIENCE to be our strongest representative in the legislature. As an attorney, Brady has 10+ years successfully representing cities, school districts, businesses, and individuals in governmental legal issues.",
                        'contact_email' => 'bbrammer@le.utah.gov',
                        'contact_phone_number' => '(801)709-1790',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.votebrammer.com/',
                        'sources' => 'https://www.votebrammer.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "EDUCATION",
                            'stance' => "I am a product of the Alpine School District and Brigham Young University. That education has served me well. My own children now attend ASD schools as well. Parents know best how to chart the course for their child's learning. Teachers know best what they need to be effective in their classroom with each unique group of students. I believe that with any decisions we make for public education policy, we need to allow decision-making to take place at the most local level possible— parents and teachers. As your legislator, I promise to be an advocate and partner in providing the best educational experience we can.",
                        ],
                        [
                            'name' => "LIMITED FEDERAL GOVERNMENT",
                            'stance' => "I support and love our Constitution. While many are aware of the separation of powers, it seems that Washington DC has forgotten (or is willfully ignorant) that the Constitution provides enumerated powers only. The Constitution was never intended to be interpreted as expansively as it has. States must push back against this constant overreach by the Federal Government. This is particularly true with regard to federally controlled lands in Utah. I will work to gain access and use of these lands to benefit Utah and our economy through common sense measures.  ",
                        ],
                        [
                            'name' => "FAMILY VALUES",
                            'stance' => "The importance of family cannot be overstated. The breakdown of the family over the last few decades has contributed to nearly every social crisis facing our country today--resulting in incalculable costs to lives, society and government. If you elect me, I will vote to protect the Utah County values we hold dear. I will support policies that strengthen our families and provide incentives that encourage individual responsibility. ",
                        ],
                        [
                            'name' => "HEALTH CARE",
                            'stance' => "Government should not be in the health care business. The free market approach is preferable to leaving decisions to bureaucrats. More freedom to choose and innovate will keep our health care at the level we have come to expect in our country.",
                        ],
                        [
                            'name' => "ETHICS & HONESTY IN POLITICS",
                            'stance' => "The political pecking order is simple.  Legislators work for their constituents, not the other way around.  There are many in our legislature who will tell you that \"you cannot legislate ethics.\"  While I agree this is a difficult issue I feel we must do more to increase the public trust in the legislative process. If elected, I commit that I will hold myself to the highest ethical standard.  I will go above and beyond the letter of the law and I will always remember the sacred trust voters place in those they elect to represent them.  I will represent YOU and YOUR interests!",
                        ],
                        [
                            'name' => "PRIVATE PROPERTY RIGHTS",
                            'stance' => "Property rights are foundational to all the other rights we enjoy as Americans. It is one of the natural rights identified by the Declaration of Independence and it is further protected by our U.S. Constitution in the 5th Amendment (among other locations).  Someone once said speaking of property rights, \"If this right is not protected then all other rights become worthless.\"  I agree completely.  As a legislator, I will commit to ongoing vigilance against any individual or governmental entity that would seek to erode this sacred right.",
                        ],
                        [
                            'name' => "TAXES AND THE ECONOMY",
                            'stance' => "Utah's balanced budget law ensures that state government lives within its means. However, that doesn't stop government from increasing \"the size of the pie\" by raising taxes. I will stand strongly in opposition to tax increases.",
                        ],
                        [
                            'name' => "2ND AMENDMENT & SCHOOL SAFETY",
                            'stance' => "The 2nd Amendment helps protect the 1st Amendment as well as our other rights. I am a staunch defender of the 2nd Amendment. I will do all within my power as a state legislator to protect our constitutional right to bear arms.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Andrew Matishen',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => 'andrew.matishen@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],
                [
                    'candidate' => [
                        'name' => 'Nikki Pino',
                        'dob' => null,
                        'bio' => "I'm running for Utah State House of Representatives, District 54. Accountability and Balance.",
                        'contact_email' => 'savingtheworldoneday@gmail.com',
                        'contact_phone_number' => '(801)643-2893',
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => '',
                        'sources' => 'https://www.facebook.com/nikkiraypino/',
                    ],

                    'opinions' => [
                        [
                            'name' => "No site to scrape!",
                            'stance' => "",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 55',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Jon Hawkins',
                        'dob' => null,
                        'bio' => "Jon Hawkins is a two-term Utah House Representative from Pleasant Grove, being first elected in 2018 to fill the seat left open by Rep. Brian Greene. He currently serves as the House Judiciary Committee Chairman, and as a member of the House Business and Labor Committee, the Higher Education Appropriations Subcommittee, the House Ethics Committee, and the Occupational and Professional Licensure Review Committee.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.electjonhawkins.com/',
                        'sources' => 'https://www.electjonhawkins.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 56',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Val Peterson',
                        'dob' => null,
                        'bio' => "Representative Val Peterson was first elected to the Utah State Legislature in 2010. As a member of the Utah House of Representatives he has served as chair of House Education and Vice Chair of Rules, Government Operations, Economic Development, Work Force Service and Labor Appropriations.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://valpeterson.org',
                        'sources' => 'https://valpeterson.org',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 57',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Nelson Abbott',
                        'dob' => null,
                        'bio' => "Nelson Abbott is a husband, a father of four children and a grandfather. He has lived in Orem for 27",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'https://nelsonabbott.com/index.html',
                        'sources' => 'https://www.facebook.com/NelsonAbbottUT',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 59',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Mike Kohler',
                        'dob' => null,
                        'bio' => "Family man, grandpa, farmer, Business Owner, Public Policy Advisor, and Community volunteer. Mike Kohler is a life-long resident of Midway, Utah. After a few years of college, he came home to run the family dairy farm due to the illness of his father. In 1997, when the business could not grow enough to take care of everyone involved, Mike sold his portion of the farm to family pursuing other interests.",
                        'contact_email' => 'mikekohler2020@gmail.com',
                        'contact_phone_number' => '(801)420-6158',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://mikekohler2022.com/',
                        'sources' => 'https://mikekohler2022.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Taxes and Education Funding",
                            'stance' => "I support the constitutional change on the ballet this fall to allow the Legislature to use State Income Tax revenue to something other than education. They need that in their tool box as they work to counter downward trends in traditional funding sources. I support funding traditional education. I also support funding alternatives for students and their families who choose another path along with accountability measures to assure the legislature and public that their support is not being wasted.",
                        ],
                        [
                            'name' => "Zoning and Zone Change Requests",
                            'stance' => "It is my opinion that governments should be careful approving zone changes. Usually, such changes undermine neighborhoods and lives.",
                        ],
                        [
                            'name' => "Law Enforcement",
                            'stance' => "",
                        ],
                        [
                            'name' => "Firearms and the 2nd Amendment",
                            'stance' => "I support a citizen's right to purchase, own, collect and use a firearm for their own purpose. The right to use a firearm for one's own protection should not be infringed. I like a line I've heard before by someone who said, \"God made men and women. Sam Colt made them equal\"... or something like that.",
                        ],
                        [
                            'name' => "Social and Mental Health Services",
                            'stance' => "As County Commissioner, I was part of the multi county board over government sponsored mental health services in Wasatch and Utah Counties. These services take care of those who were under or un-insured and needed emotional or mental health treatment. It was very enlightening. I had no idea of the impact a mental health problem can have on a family.",
                        ],
                        [
                            'name' => "Property Taxes, Green Belt and Zoning",
                            'stance' => "I support preferential tax rates for land used to produce food, animals and other agricultural products.",
                        ],
                        [
                            'name' => "Water and Water Diversion Projects",
                            'stance' => "I think Central Utah has been good for our area and its contribution of water to the Provo and Weber River systems provides water and recreation opportunities we wouldn't otherwise have. It seems reasonable that new water projects are likely worth the effort.",
                        ],
                        [
                            'name' => "Water Rights Adjudication",
                            'stance' => "If you don't care about water rights, this may be a little boring. When it comes to water ownership, an Adjudication is not something we worry about everyday but, when the State conducts one, it's a big deal.",
                        ],
                        [
                            'name' => "Water Rights Transfers",
                            'stance' => "I support striking a balance between private property and community rights when it comes to historic water use and future water needs. As a legislator, I will continue to work with Utah's water interests to find that balance.",
                        ],
                        [
                            'name' => "Water and Water Rights",
                            'stance' => "Water and water rights are sacred in Utah. When the first pioneer settlers entered the Salt Lake Valley, they diverted nearby springs and creeks to irrigate crops. Utah's mountain valleys did the same. Ponds and reservoirs soon became part of the system to extend the irrigation season through the summer. It is still done that way today only everything is bigger and culinary water delivery parallels irrigation in most communities.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Meaghan Miller',
                        'dob' => null,
                        'bio' => "Meaghan Miller lives in Wasatch County with her husband Dylan and two sons. In her house, shoes are dog toys are everywhere. Meaghan received her bachelor's degree from Colorado Mesa University, and her Master's from the University of Denver. She began her career as an Athletic Trainer at Salt Lake Regional Medical Center and other physical therapy clinics but ultimately found professional fulfillment in the non-profit sector.",
                        'contact_email' => 'votemiller59@gmail.com',
                        'contact_phone_number' => '(801)635-4129',
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://www.votemiller59.net/?fbclid=IwAR06y-xu6_4CR-bRqNAsCMCft6gVwIlWa7oC8GyD3s-7TPt4HmoVD0mu5Lc',
                        'sources' => 'https://www.votemiller59.net/?fbclid=IwAR06y-xu6_4CR-bRqNAsCMCft6gVwIlWa7oC8GyD3s-7TPt4HmoVD0mu5Lc',
                    ],

                    'opinions' => [
                        [
                            'name' => "OUR ENVIRONMENT",
                            'stance' => "Advocating for smart and responsible growth, limiting sprawl, and protecting the natural environment for future generations, I intend to preserve our values and way of life",
                        ],
                        [
                            'name' => "HEALTHCARE",
                            'stance' => "Ensure that all Wasatch Back residents have access to high-quality, affordable health care, improving ability to live full, productive lives and maximize individual potential for happiness and dignity",
                        ],
                        [
                            'name' => "ETHICAL GOVERNMENT",
                            'stance' => "Promote smart, responsible spending and stewardship of your hard earned tax dollars",
                        ],
                        [
                            'name' => "SUSTAINABLE COMMUNITIES",
                            'stance' => "We have to educate and empower our future, provide vocational training and empower continuing education for our youth",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 6',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Matthew Gwynn',
                        'dob' => null,
                        'bio' => "Matt is intense in his dedication to service, passionate about solving problems, and has incredible devotion that fuels his fight for change in the face of irresponsible government and bureaucrats alike.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.gwynn4uthouse.org/',
                        'sources' => 'https://www.gwynn4uthouse.org/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 60',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Adam Robertson',
                        'dob' => null,
                        'bio' => "In my occupation I've had the opportunity to brief Generals, Pentagon officials, and business leaders throughout the world. It has been my privilege to work directly with the very best our country has to offer as they protect the freedoms that we so often take for granted as Americans. I believe it is our duty to be wise stewards of that freedom and I am running to continue working for you in preserving and defending those freedoms.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'https://adamrobertson.vote/',
                        'sources' => 'https://adamrobertson.vote/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 63',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Stephen Whyte',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 64',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Jefferson Burton',
                        'dob' => null,
                        'bio' => "Jeff graduated from Payson High School and received a B.S. in Sociology from the University of New York.  Later he received Masters degrees from the United States Army War College in Strategic Studies and the University of Phoenix in Education.  He served his church and then his country.  He served in the U.S. Army and National Guard for 37 years and retired in 2019 serving the last 7 years as the Adjutant General of the Utah National Guard.",
                        'contact_email' => 'Jeff@ElectJeffBurton.com',
                        'contact_phone_number' => '(801)372-5350',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'http://electjeffburton.com/',
                        'sources' => 'http://electjeffburton.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Integrity",
                            'stance' => "I am firmly grounded in the principles of Loyalty, Duty, Respect, Selfless Service, Honor, Integrity and Personal Courage. No accomplishment is worth the cost of my Integrity.",
                        ],
                        [
                            'name' => "Government Accountability",
                            'stance' => "My first priority is government accountability and ensuring access to you the taxpayers.  I believe the best policies are driven by facts and good data, not divorced from compassion, but not driven by emotion. I will focus on solutions that solve problems rather than unwise or unproductive solutions in the name of \"doing someing.\"  I promise to never forget that each tax dollar comes from an individual taxpayer, with house payments, car repairs, doctor bills, and many other demands on their budget.  I will never forget that each vote I make affects individual citizens and families. ",
                        ],
                        [
                            'name' => "Accessibility",
                            'stance' => "My assignment, if elected, would be to be your Representative, and to do that job well, I am committed to being proactive in reaching out and listening to you.  I will conduct more open forums and townhalls where taxpayers' voices will be heard. I will work to engage citizens and be as accessible through townhalls, social media, email, by phone, and any other available option.",
                        ],
                        [
                            'name' => "Educating Our Children",
                            'stance' => "I will focus on improving our educational programs to deliver relevant education that prepares our children to face the ever evolving and competitive economy. We also need a more rigorous and practical civic component focused on critical role of Representative Democracy and Founding Principles. The current challenges we face have stretched us into innovation in education that now gives us an opportunity to evaluate in more depth how online and/or remote learning can be used to improve the education our students receive.",
                        ],
                        [
                            'name' => "Second Amendment",
                            'stance' => "I believe the Second Amendment to the United States Constitution guarantees a fundamental, individual right to keep and bear arms for all law-abiding Americans, and that state and local governments should not be allowed to circumvent this God given right. I do not want government at any level determining what \"competency\" with a firearm means, not do I believe they should have the ability to change that definition depending on current public sentiment.",
                        ],
                        [
                            'name' => "Responsible Development",
                            'stance' => "I will focus on expanding our prosperity while maintaining our unique way of life. These decisions are best made at the local level with state statute as a support.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Alan Wessman',
                        'dob' => null,
                        'bio' => "Alan Wessman has lived in Utah for most of his life and is a longtime resident (nearly twenty years) of Spanish Fork. He came to Utah at the age of four when his dad ended his honorable service in the United States Navy and took a job with Utah Power and Light as a power generation engineer.",
                        'contact_email' => '',
                        'contact_phone_number' => '(801)477-4250',
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => 'https://www.electawessman.com',
                        'sources' => 'https://www.electawessman.com',
                    ],

                    'opinions' => [
                        [
                            'name' => "Golden Rule",
                            'stance' => "Behave towards all others as I would want them to behave towards me and others in similar circumstances. Be the public servant I expect others to be.",
                        ],
                        [
                            'name' => "Civic duty",
                            'stance' => "Uphold and defend the Constitution of the United States of America and the Utah Constitution, and seek to sustain or restore the appropriate balance of powers.",
                        ],
                        [
                            'name' => "Public interest",
                            'stance' => "Use public office for the public interest, never my own. Avoid all conflicts of interest, recuse when a conflict is unavoidable, and disclose upfront when recusal is not allowed.",
                        ],
                        [
                            'name' => "Be informed",
                            'stance' => "Understand issues, circumstances, and legislation. Seek perspectives of various stakeholders and citizens.",
                        ],
                        [
                            'name' => "Truth",
                            'stance' => "Be intellectually honest and humble: respect good ideas and truth wherever they're found.",
                        ],
                        [
                            'name' => "Altruism",
                            'stance' => "Be compassionate and inclusive: seek to be a blessing and not a burden for the disadvantaged and marginalized. Pay forward our own privileges obtained for us by generations past, to secure a better future for generations ahead.",
                        ],
                        [
                            'name' => "Public integrity",
                            'stance' => "Be transparent and protective of the public trust. Expose and fight corruption and abuse of public office.",
                        ],
                        [
                            'name' => "Accountability",
                            'stance' => "Improve and expand mechanisms that allow the powerful to be held accountable by the law and by the citizens. Be accountable myself to my constituents and to all the people of Utah.",
                        ],
                        [
                            'name' => "Fairness",
                            'stance' => "Level the playing field. Eradicate gerrymandering and other laws or practices that award disproportionate partisan advantage.",
                        ],
                        [
                            'name' => "Appreciation",
                            'stance' => "Be supportive of election workers, educators, journalists, health care workers, emergency responders, civil servants, and others whose unsung efforts sustain our lives and liberties. Recognize and appreciate the good intentions and deeds of people even in the face of policy disagreements.",
                        ],
                        [
                            'name' => "Pragmatism",
                            'stance' => "Seek balanced, sensible, and maximally-acceptable solutions.",
                        ],
                        [
                            'name' => "Prudence",
                            'stance' => "Be careful with taxpayer money. Direct it towards real public needs, and away from special interests and private profiteers.",
                        ],
                        [
                            'name' => "Conservation",
                            'stance' => "Protect and carefully manage our irreplaceable resources.",
                        ],
                        [
                            'name' => "Trust but verify",
                            'stance' => "Take expertise seriously and respectfully, but ask tough questions and be on guard for unfounded claims or unexamined conventional wisdom.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 65',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Douglas Welton',
                        'dob' => null,
                        'bio' => "Doug Welton currently represents District 67 in the Utah House of Representatives, a role that has allowed him to create change across a wide range of issues. In fact, each bill he sponsored during the most recent legislative session passed in both the House and the Senate. As an educator and highly-skilled debate coach, Representative Welton would often encourage his students to participate in the political process.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.dougweltonutah.com/',
                        'sources' => 'https://www.dougweltonutah.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 66',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Russ Hatch',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Constitution',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],
                [
                    'candidate' => [
                        'name' => 'Steven Lund',
                        'dob' => null,
                        'bio' => "I support small business, mining, agriculture and tourism. I am an advocate for private property rights, and public access to public lands. I believe that properly educating children to compete in tomorrow's world is paramount to elevating life and guaranteeing the longevity of Sanpete and Juab County. Our greatest resource is children.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'http://stevelundforutahhouse58.com/',
                        'sources' => 'http://stevelundforutahhouse58.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. Check out http://stevelundforutahhouse58.com/ for this candidate's stances.",
                            'stance' => "",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 67',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Christine Watkins',
                        'dob' => null,
                        'bio' => "Christine was born and raised in Cache Valley. Living in Lewiston she helped her Grandpa Hyer haul hay, thin and hoe sugar beets, and milk cows. She graduated from high school in California and quickly returned to Utah State University and earned a Bachelor's Degree in Elementary Education. Christine married and had four sons and one daughter.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://watkinsforruralutah.com/',
                        'sources' => 'https://watkinsforruralutah.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 68',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Scott Chew',
                        'dob' => null,
                        'bio' => "Utah State House Representative District 55 (Uintah Basin) Wants to see the Basin and Utah continue",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => '',
                        'sources' => 'https://www.facebook.com/people/Scott-Chew/100057910515929/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 69',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Phil Lyman',
                        'dob' => null,
                        'bio' => "As a father, grandfather, and lawmaker, I have been keenly interested in Utah's child protection laws and have been actively reviewing those laws over the last several months.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://lymanforutah.com/',
                        'sources' => 'https://lymanforutah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. Check out https://lymanforutah.com/ for this candidate's stances.",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Davina Smith',
                        'dob' => null,
                        'bio' => "My name is Davina Smith and I'm running for Utah House of Representatives in District #69. We need someone to stand up for our rural and indigenous communities in Salt Lake City. I'm originally from Monument Valley, Utah and am an enrolled member of the Diné (Navajo) tribe.",
                        'contact_email' => '',
                        'contact_phone_number' => '(435)261-2867',
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://www.davinaforut.com/',
                        'sources' => 'https://www.davinaforut.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Economic Opportunity",
                            'stance' => "The fastest growing economy in the US shouldn't be leaving the rural communities that propel it behind. Workers are the powerhouse of our economy and deserve a living wage. Rural towns need more autonomy and local control over the tax dollars they generate, tourism, and housing policy. I will support and trust working families, local businesses, and local governments to make informed decisions about their community."
                        ],
                        [
                            'name' => "Education",
                            'stance' => "My mother was a public school teacher in rural Utah and Arizona for over three decades. She was passionate about taking care of both the children in her family and her classroom through education and nurturance. I've seen first hand how hard teachers work, and how underpaid they are. Our rural schools and teachers deserve to be invested in. Rural communities are suffering most from the fact that Utah ranks last in the country in per pupil spending."
                        ],
                        [
                            'name' => "Affordable Housing",
                            'stance' => "Rural Utahns deserve healthy, stable housing. Rising housing costs all over Utah are displacing families, creating labor shortages, and increasing poverty overall. We can't cater our local housing policy to wealthy, outside interests. We need to protect our communities first."
                        ],
                        [
                            'name' => "Water + Environment",
                            'stance' => "In the Desert, water is our most important resource. In the Navajo language, \"Tó éí iiná\" means \"water is life\". In southeast Utah, we need to come to an understanding that we all share, utilize, and rely on this land. Threats to our shared land are a threat to all of us."
                        ],
                        [
                            'name' => "Voting Rights",
                            'stance' => "Rural communities need safe and convenient access to the ballot box. Making it harder for people to vote is fundamentally undemocratic. Voter suppression and gerrymandering efforts silence the voices of underrepresented communities in Utah. I believe in including everyday people in the political process, which is why we must protect voting access and universal vote-by-mail. Rural Utahns often live far from their nearest polling site, making it difficult to vote in person, especially for elders and working families. We need to make it easier to register to vote by implementing automatic voter registration and same-day registration programs. Tribal IDs need to continue to be recognized as legitimate voter IDs in Utah. We need educational resources and classes to help these communities become more involved in the political process."
                        ],
                        [
                            'name' => "Healthy Families",
                            'stance' => "Healthy rural communities encompass safe housing, affordable healthcare, domestic violence prevention, and a clean environment. I am passionate about community health from a mental, physical and emotional standpoint. I will fight to make healthcare more affordable,  increase awareness on Murdered and Missing Indigenous Women (MMIW), and advocate for safe and healthy environments for families."
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 7',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Ryan Wilcox',
                        'dob' => null,
                        'bio' => "A graduate of both Weber High and Weber State University, Ryan was raised on a dairy farm here in Weber County and has deep roots in our community. He and his wife Kristina are the proud parents of five children, ranging from a Senior in High School to a brand new kindergartner. With a lifelong music educator for a mother, and a wife who has served as both a teacher and librarian, (and all five children in our local schools) Ryan understands the importance of education.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://votewilcox.com/',
                        'sources' => 'https://votewilcox.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 70',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Carl Albrecht',
                        'dob' => null,
                        'bio' => "42 year resident of Sevier County 40 year career with Garkane Energy 23 years as CEO of Garkane Energy Represents rural agriculture and tourism community in South-Central Utah",
                        'contact_email' => 'carl@carl.vote',
                        'contact_phone_number' => '(435)979-6578',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://carl.vote',
                        'sources' => 'https://carl.vote',
                    ],

                    'opinions' => [
                        [
                            'name' => "Local control",
                            'stance' => "",
                        ],
                        [
                            'name' => "Multiple-use of federal and state lands",
                            'stance' => "",
                        ],
                        [
                            'name' => "Fight to protect our 2nd Amendment",
                            'stance' => "",
                        ],
                        [
                            'name' => "Support free markets and private enterprise",
                            'stance' => "",
                        ],
                        [
                            'name' => "My job is to represent the people, not special interests",
                            'stance' => "",
                        ],
                        [
                            'name' => "Prioritize Rural Utah values and needs, always with a conservative voice",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Zeno Parry',
                        'dob' => null,
                        'bio' => "Veteran Blue Collar Worker Longtime Iron County Resident",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'United Utah',
                        'site_link' => 'http://votezenoparry.com/',
                        'sources' => 'http://votezenoparry.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "The Constitution",
                            'stance' => "",
                        ],
                        [
                            'name' => "Safe Schools",
                            'stance' => "",
                        ],
                        [
                            'name' => "Funding Education & Educators",
                            'stance' => "",
                        ],
                        [
                            'name' => "Fair Pay & Living Wages",
                            'stance' => "",
                        ],
                        [
                            'name' => "Family Values",
                            'stance' => "",
                        ],
                        [
                            'name' => "Access To Affordable Healthcare",
                            'stance' => "",
                        ],
                        [
                            'name' => "Protecting Southern Utah's Natural Beauty",
                            'stance' => "",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 71',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Dallas Guymon',
                        'dob' => null,
                        'bio' => "Hello, my name is Dallas J. Guymon and I am running to be your representative for Utah House District 71. I originally moved to Cedar City in 2018 to attend SUU. I came here with nothing but a scholarship and some rent money. But after only a few years this community has blessed me with a degree, a budding career, and a lovely wife. I am a proud transplant to Cedar City, and like many others, I have found a home here.",
                        'contact_email' => 'electdallas@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://electdallas.org/',
                        'sources' => 'https://electdallas.org/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Accountable Government",
                            'stance' => "Our public leaders have lost the confidence of the people. They have chosen wealth and power over the public good.",
                        ],
                        [
                            'name' => "Economic Growth",
                            'stance' => "As a future legislature, I will focus on policies that will improve Utah's economy for everyone.",
                        ],
                        [
                            'name' => "k-12 Education",
                            'stance' => "Ensuring that our children have access to quality education is one of our most important duties as citizens.",
                        ],
                        [
                            'name' => "Healthcare",
                            'stance' => "Healthcare is a right.",
                        ],
                        [
                            'name' => "Ending Prohibition",
                            'stance' => "Adults should be allowed to make decisions regarding what they will consume as long as it doesn't hurt anyone else.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Piper Manesse',
                        'dob' => null,
                        'bio' => "Piper was born in Provo, Utah and raised in Cody, Wyoming. In high school she became keenly interested in politics and was thrilled for the opportunity to attend Girls State and Girls Nation. The highlight during her stay in Washington, D.C. for Girls Nation was meeting with her hometown political hero, Senator Al Simpson. She even got the chance to discuss immigration with him; one of his key focuses at the time (and this was way back in 1985).",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'United Utah',
                        'site_link' => 'https://www.piperforutah.com/',
                        'sources' => 'https://www.piperforutah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Education",
                            'stance' => "Education is an investment, and the Utah Legislature needs to take that investment more seriously. Utah is still toward the very last in the nation in per pupil spending. The Utah Legislature hasn?t done enough to help increase teacher wages and decrease class sizes. With the Legislature's track record of consistently underfunding public education, we need to elect leaders who will give public education funding more than just lip service."
                        ],
                        [
                            'name' => "Local Control",
                            'stance' => "The more local the government control, the better. Individual counties deserve the ability to govern themselves on local issues without interference from the Utah Legislature. Just as Federal Government overreach is wrong, so is State Government overreach. Iron County knows what's best for Iron County."
                        ],
                        [
                            'name' => "Roe v. Wade",
                            'stance' => "I believe in the sanctity of life. I think everyone can agree that reducing the number of abortions is a worthy goal. I also believe that enacting extreme laws punishing women who are already in a difficult situation is not the answer. Instead, the question we should be asking is \"Why would a pregnant woman feel that an abortion is her best, and possibly only, option?\" Let's let women share their real experiences and then do something truly radical: listen. When we do that, we can understand those reasons and get to work in solving those issues. We need better access to healthcare, childcare, and contraception. Fathers need to be held accountable. Adoptions should be more affordable."
                        ],
                        [
                            'name' => "Environmental Stewardship",
                            'stance' => "Our air quality is important. Our water resources have become a critical issue. I support policies that recognize our stewardship for our natural resources and the impact we have on those resources. We need to take a long view when it comes to the environment, and balance that with good policy that doesn?t promote extreme environmental ideology."
                        ],
                        [
                            'name' => "Government Reform",
                            'stance' => "I support efforts that increase transparency in government. Transparency shouldn't be suppressed by further restricting members of the press. I support an independent redistricting commission that has actual authority, instead of the watered-down version we have now. We should get to vote for our leaders instead of party leaders choosing that for us through unfair boundary creation. I also support term limits so that leaders focus more on serving people than serving their party."
                        ],
                        [
                            'name' => "Second Amendment",
                            'stance' => "I support the right to possess firearms. I also support common-sense legislation to keep them out of the hands of those who demonstrate that they can?t use them responsibly."
                        ],
                    ],

                ],
                [
                    'candidate' => [
                        'name' => 'Rex Shipp',
                        'dob' => null,
                        'bio' => "My name is Rex Shipp. I'm running to be your representative to the Utah State Legislature. I'm running because I love this district. I've raised my children here. I want this to continue to be one of the best places on earth to live, work, play, and raise a family.  I want the families that live in this area to enjoy the same experiences.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://electrexshipp.com',
                        'sources' => 'https://electrexshipp.com',
                    ],

                    'opinions' => [
                        [
                            'name' => "Local Control",
                            'stance' => "Government overreach is a problem that I take seriously. The success of this country isn't found on Capitol Hill. It's located in the homes of our state. I will fight overreach. I will limit government involvement. The best decisions for communities happen on a local level. I want to ensure that Southern Utah has the ability to shape the direction of its future.",
                        ],
                        [
                            'name' => "Growth",
                            'stance' => "Utah's population is expected to double by 2050. This growth should bring jobs. But if the state does not exercise disciplined planning and investment, we'll be in a world of hurt. In Southern Utah, we know how to work together. We built prosperity out of the desert. I want my children and their children to be close to me as I grow old. To do that, we need to plan for the future.",
                        ],
                        [
                            'name' => "Invest",
                            'stance' => "Fiscal responsibility is incredibly important to this state. It's important to me. Infrastructure is expensive. Because of that, I want to make sure that we maximize our tax dollars. If they're put to good use, elected officials shouldn't have to ask for more money. Good infrastructure means more time with loved ones.",
                        ],
                        [
                            'name' => "Clean Air",
                            'stance' => "Utah is beautiful. Southern Utah supports much of our state with our natural playgrounds and recreation. Unfortunately, air quality in some parts of our state is too low. We must address this issue. But as we do so, we need to ensure that it our citizens and businesses are consulted throughout the process. ",
                        ],
                        [
                            'name' => "Educate",
                            'stance' => "As a father, education is among the top priorities of my campaign. The quality of our state's future will be determined largely by this issue. I was lucky enough to be educated in Southern Utah. In considering how we spend tax dollars, I believe that our children should be the top priority. Local school boards should make decisions for their communities. We should believe in and trust the educators we have in our schools. But accountability is key to tracking outcomes.",
                        ],
                        [
                            'name' => "Less Regulation",
                            'stance' => "As a business owner, I believe in a free market. I believe in empowering entrepreneurs in our society to create value.",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 72',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'JOSEPH ELISON',
                        'dob' => null,
                        'bio' => "Believer in God Husband and father  Washington County resident for 37 years",
                        'contact_email' => 'ElisonForUtah@gmail.com',
                        'contact_phone_number' => '(435)467-9627',
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.elisonforutah.com',
                        'sources' => 'https://www.elisonforutah.com',
                    ],

                    'opinions' => [
                        [
                            'name' => "God's laws and God's ways will ultimately prevail",
                            'stance' => "",
                        ],
                        [
                            'name' => "USA and Her Constitution are gifts from God",
                            'stance' => "",
                        ],
                        [
                            'name' => "Education choices are best made on a local level",
                            'stance' => "",
                        ],
                        [
                            'name' => "Government must be accountable and transparent",
                            'stance' => "",
                        ],
                        [
                            'name' => "Limited government as stated in the Constitution",
                            'stance' => "",
                        ],
                        [
                            'name' => "Socialism and Marxism have breached our public institutions",
                            'stance' => "",
                        ],
                        [
                            'name' => "Free and fair market practices",
                            'stance' => "",
                        ],
                        [
                            'name' => "LLow tax and fiscal conservatism",
                            'stance' => "",
                        ],
                        [
                            'name' => "Secure borders and legal immigration",
                            'stance' => "",
                        ],
                        [
                            'name' => "God fearing people and patriots must stand and defend our way of life",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Ila Fica',
                        'dob' => null,
                        'bio' => "Ila was born in Boise, Idaho and attended Borah High School. She graduated from Idaho State University with a bachelor's degree in Psychology and a master's in Counseling. Ila has worked as a therapist in the school system, the private sector, and for a domestic violence shelter. In her free time, she is just as likely to go on an outdoor adventure as she is to spend a quiet afternoon inside with a puzzle.",
                        'contact_email' => 'FicaFor22@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'D',
                        'site_link' => 'https://votefica.com',
                        'sources' => 'https://votefica.com',
                    ],

                    'opinions' => [
                        [
                            'name' => "Equality and Visibility",
                            'stance' => "Utah's teen suicide rate consistently ranks higher than the national average, at nearly 2 times the national rate (Utah IBIS). Thankfully, these numbers have improved with access to resources over the years, but there is no denying that there is a correlation between this still too high rate and legislation such as HB 11, which targeted 4 transgender athletes in Utah. Living with my partner Melody has taught me that most Utahns have a big heart, but that doesn't mean that there is still work to be done. As a legislator, I would work to proactively promote the rights and well being of LGBTQ+ people, as well as foster inclusive, safe, welcoming, and affirming schools and educational environments for LGBTQ students. Nobody in our community should feel unseen, or feel they do not belong. Together, we can work to make our community a safe and accepting place.",
                        ],
                        [
                            'name' => "Accountability",
                            'stance' => "",
                        ],
                        [
                            'name' => "Mental Health Awareness",
                            'stance' => "Over 23% of Utahns struggle with lifetime depression, and women in our state struggle with mental illness at nearly 2 times the rate as men (Utah IBIS). Regrettably, Utah's teen suicide rate is consistently higher than the national average (Utah IBIS) . Nobody should have to suffer through depression or through losing a loved one, and having worked as a therapist for over 17 years, I know how hard it is for individuals to seek help for mental illness. This is especially true for people in rural Utah, low income families, and individuals in non-supportive environments. As your legislator, I would work to change the stigma behind mental illness, make mental health resources more widely available to all members of our community, and work to have insurance cover mental health issues, including covering yearly mental health checks; just as insurance covers yearly physicals.",
                        ],
                        [
                            'name' => "Education",
                            'stance' => "Over the past few years, it seems like our public schools have been under attack. Legislation such as HB 331 and HB 234 stigmatize local public schools as \"less than\", creating socioeconomic segregation in our communities. Having worked in public schools my whole life as both a professional counselor, as well as president of my kid's PTA, I know first hand just how hard teachers work, with the little resources they have. There is no \"one size fits all\" teaching method for our children, which is why I support our public education system. The teachers we entrust our future generations with should not be living on food stamps, which is why I support not only raising teacher salaries, but also communicating to teachers that they are both appreciated and respected within our communities, a message not enough educators receive.",
                        ],
                        [
                            'name' => "Domestic Abuse",
                            'stance' => "Working at The DOVE center, a free shelter that provides resources to women struggling with abusive relationships, I have seen first hand how little resources and protections there are for individuals that are victims of domestic violence. In fact, nearly 50% of all homicides within our state can be attributed to domestic violence, yet repeat offenders are all too often given slap on the wrist, and even shared custody of children. Not only does the fear of losing children in a custody battle keep victims with their abusers, but the lack of resources such as affordable housing, legal help, and support structures force victims to be trapped in an abusive relationship, or even far worse. I want to work to make these resources more available with programs like the one I currently work in. Additionally, holding abusers in our state accountable will not only help to protect our children, but will also significantly decrease the homicide rate in our state",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 73',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Colin Jack',
                        'dob' => null,
                        'bio' => "My ancestors pioneered and settled almost every corner of what is now Utah. They came here primarily to find safety and refuge from the persecution that forced them out of their homes. Eventually, my ancestors were driven to the colonies in Mexico, and then to Arizona, where my parents grew up. I was born in Provo, Utah, but raised in Lukachukai, Arizona, in the middle of the Navajo Reservation.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'https://www.colinwjack.com/',
                        'sources' => 'https://www.colinwjack.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 74',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Neil Walter',
                        'dob' => null,
                        'bio' => "Neil is a Southern Utah native; He is a graduate of Dixie High School and Dixie College. As a result, he understands the needs of our community. Neil has served on public Charter school boards for 11 years. He spent 9 years as faculty at Dixie State University teaching Economics and Finance adjunct. He understands the importance of education, and stands against CRT, or other ideologies that label our children and ignore parent input.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.walterfor74.com',
                        'sources' => 'https://www.walterfor74.com',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 75',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Walt Brooks',
                        'dob' => null,
                        'bio' => "I am a native of St. George and live in the home I grew up in and my Great Grandpa built in the late 1800's. I have a great love for Southern Utah. It is a beautiful and wonderful place to live, work, and raise a family.  My wife Jennifer and I met while we were attending Dixie College. We married a few years later while attending SUU then made our home in St. George. We have 5 children ranging from 13 - 22.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'R',
                        'site_link' => 'https://www.waltbrooks.com/',
                        'sources' => 'https://www.waltbrooks.com/',
                    ],

                    'opinions' => [],
                ],

            ],

        ],
        [
            'location' => 'District 8',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Monica Hall',
                        'dob' => null,
                        'bio' => "I was born in Texas, but Utah is home. I cherish living in Ogden with its natural beauty and its incredibly generous residents. I'm an ordained Minster of Word and Sacrament for the Presbyterian Church (USA). I'm also a Board Certified Chaplain. I've served a congregation in Ogden and have worked closely with inter-faith leaders along the Wasatch.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.hall4utah.com/',
                        'sources' => 'https://www.hall4utah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Ensure a commitment to good governing with responsible use of tax monies",
                            'stance' => "",
                        ],
                        [
                            'name' => "Represent the needs of our community through carefully crafted policy",
                            'stance' => "",
                        ],
                        [
                            'name' => "Focus on clean air, public health, and water conservations so Ogden City and Ogden Valley can thrive",
                            'stance' => "",
                        ],
                        [
                            'name' => "Work to lower the high poverty levels in Ogden City",
                            'stance' => "",
                        ],
                        [
                            'name' => "Fight for women's equality in wages and reproductive health care",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Jason Kyle',
                        'dob' => null,
                        'bio' => "Jason is a husband, father and business manager passionate about fighting for the future of Utah. Jason was born and raised in Utah and received a degree in chemical engineering from the University of Utah. He built a career in management within a medical and industrial imaging device company where he currently works today. Jason and his wife, Lupita, are very involved in their community, have four adorable daughters, and a son on the way. They live in Huntsville.",
                        'contact_email' => 'jason@jasonbkyle.com',
                        'contact_phone_number' => '(385)394-2424',
                        'state' => 'Utah',
                        'party_name' => 'Republicans',
                        'site_link' => 'https://www.jasonbkyle.com',
                        'sources' => 'https://www.jasonbkyle.com',
                    ],

                    'opinions' => [
                        [
                            'name' => "Lower the tax burden on families and businesses​",
                            'stance' => "",
                        ],
                        [
                            'name' => "Ensure local control and that YOUR voice is heard​",
                            'stance' => "",
                        ],
                        [
                            'name' => "Bring prosperity to Weber and Morgan Counties",
                            'stance' => "",
                        ],
                        [
                            'name' => "Protect parental rights",
                            'stance' => "",
                        ],
                        [
                            'name' => "Support our hardworking teachers and law enforcement",
                            'stance' => "",
                        ],
                    ],
                ],

            ],

        ],
        [
            'location' => 'District 9',
            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Neil Hansen',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'Democrat',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],
                [
                    'candidate' => [
                        'name' => 'Jacob Johnson',
                        'dob' => null,
                        'bio' => "No site to scrape!",
                        'contact_email' => 'jacob.johnson@jacob4utah.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Libertarian',
                        'site_link' => '',
                        'sources' => '',
                    ],

                    'opinions' => [],
                ],
                [
                    'candidate' => [
                        'name' => 'Calvin Musselman',
                        'dob' => null,
                        'bio' => "My wife, Dawnell, and I moved to the district over 30 years ago following my military service for Desert Storm. We both count ourselves lucky to call this beautiful place home and love raising our family here. We have lived not only in Ogden, but Roy and now West Haven.",
                        'contact_email' => 'calmusselman@gmail.com',
                        'contact_phone_number' => '(801)-941-6188',
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://calvinmusselman.com',
                        'sources' => 'https://calvinmusselman.com',
                    ],

                    'opinions' => [
                        [
                            'name' => "AFFORDABLE HOUSING",
                            'stance' => "For the first time in 40 years, there are more Utah families in need of a home than there are homes available. Our state's growth is fantastic in so many ways: our state's economy has boomed, we've added more high paying jobs to our communities, and we've been able to increase education funding every year. But our incomes cannot keep up with the rising costs of homes, even in Northern Utah. If we don't improve our housing market, the typical Utah family will spend nearly 50% of their income on housing. Which means there's less money to save for retirement, college, car repairs, or after school activities for their kids."
                        ],
                        [
                            'name' => "EDUCATION",
                            'stance' => "It is the responsibility of the Legislature to work smarter on public education funding, and I am proud of our recent efforts. We've increase public education funding even in an economic downturn - an accomplishment few other states can boast. Utah's fiscally conservative policies have allowed our current representatives to protect education funding through the rainy-day fund, and we've secured federal funding from the CARES Act to provide support for online learning. These efforts protect teachers' salaries during an uncertain time and better prepare us for rapid economic recovery."
                        ],

                        [
                            'name' => "GOVERNMENT TRANSPARENCY",
                            'stance' => "One of the greatest benefits to having a citizen legislature is the vast expertise we can draw from to form good, representative policy. But beyond good policy, I believe a citizen legislature keeps government close to the people it serves. Rather than career politicians, our Legislature is made up of everyday Utahns. The House of Representatives consists of teachers, engineers, lawyers, and farmers to name just a few, and I am grateful to serve alongside them.",
                        ],
                        [
                            'name' => "ECONOMIC DEVELOPMENT",
                            'stance' => "Over the last decade, our state has experienced significant economic growth, but much of this growth has been concentrated along the Wasatch Front. I want to make sure our community and Northern Utah as a whole, receives the attention it deserves.",
                        ],
                        [
                            'name' => "TAX REFORM",
                            'stance' => "It's no secret that last year the State Legislature tried to tackle a massive overhaul of our state tax system. The legislation that passed was repealed earlier this year, as a response to voices from the community. Despite the contention around this important topic, I am grateful to live in a country where the people can participate in the legislative process through public forums, committee attendance, and when needed, referendum.",
                        ],
                    ],
                ],

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
        // Get the office for US House
        $office = PublicOfficePosition::firstWhere('name', 'State Congress');
        foreach ($this->data as $senate) {
            // Create the location
            $location = Location::create([
                'name' => $senate['location'],
                'type' => 'state_congress',
                'state' => 'Utah',
            ]);
            // Create the ballot
            $ballot = Ballot::create([
                'location_id' => $location->id,
                'office_id' => $office->id,
                'voting_date' => Carbon::createFromDate(2022, 11, 8),
                'has_single_runner' => count($senate['candidates']) == 1 ? true : false,
            ]);

            // Add each candidate
            foreach ($senate['candidates'] as $candidate_info) {
                $candidate = $candidate_info['candidate'];
                $candidate = Candidate::create([
                    'name' => $candidate['name'],
                    'dob' => $candidate['dob'],
                    'bio' => $candidate['bio'],
                    'contact_email' => $candidate['contact_email'],
                    'contact_phone_number' => $candidate['contact_phone_number'],
                    'party_name' => $candidate['party_name'],
                    'site_link' => $candidate['site_link'],
                    'state' => 'Utah',
                    'ballot_id' => $ballot->id,
                    'show' => true,
                ]);
                $this->add_photo($candidate);
                //Add manual candidate for candidate
                ManualCandidate::create([
                    'candidate_id' => $candidate->id,
                    'note' => 'Candidate has not been contacted as of 9/21',
                    'sources' => $candidate_info['candidate']['sources'],
                ]);
                //Add opinions
                foreach ($candidate_info['opinions'] as $opinion) {
                    CandidateOpinion::create([
                        'candidate_id' => $candidate->id,
                        'name' => $opinion['name'],
                        'stance' => $opinion['stance'],
                    ]);
                }
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
