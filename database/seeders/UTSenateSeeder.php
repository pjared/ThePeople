<?php

namespace Database\Seeders;

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\CandidateOpinion;
use App\Models\Location;
use App\Models\ManualCandidate;
use App\Models\PublicOfficePosition;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class UTSenateSeeder extends Seeder
{
    public $data = [
        [
            'location' => 'District 1',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Scott Sandall',
                        'dob' => null,
                        'bio' => "With my history, serving in the Utah Senate, Utah House of Representatives, and the Utah Farm Bureau State Board of Directors, I believe that I'll be able to build upon the legacy of hard work and prosperity in Northern Utah. My commitment is to continue to represent the interests of you and your family at the Utah State Legislature.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.votescottsandall.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.votescottsandall.com/',
                    ],

                    'opinions' => [],
                ],
            ]
        ],
        [
            'location' => 'District 5',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Michael Blodgett',
                        'dob' => null,
                        'bio' => "Born and raised in district 5 boundaries. Went to local schools, C H Taylor Elementary, Central Middle School, Ogden High School, Weber State University receiving a Bachelors in Criminalistics Forensic Science (2004) and a Bachelors in Medical Laboratory Science (2008). Served a Mission for the Church of Jesus Christ of Latter-day Saints in Taipei, Taiwan (1998-2000). Met my wife Jennie Amos Blodgett in 2001 and was married and sealed in the Bountiful Temple.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://mikeforutahsenate.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://mikeforutahsenate.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Education",
                            'stance' => "Utah's greatest investment is our children.  We need to support our students by funding after school programs, supporting universal pre-K, and advocating for our high quality teachers.",
                        ],
                        [
                            'name' => "Protecting Our Public Lands",
                            'stance' => "Public lands are a huge part of Utahn's identity and why we call this state home.  Let's work together to keep our public lands in public hands and out of developer's pockets.",
                        ],
                        [
                            'name' => "Transportation",
                            'stance' => "Northern Utah is operating a 21st Century lifestyle with infrastructure from the 1900s.  We need to advocate for funding that can ensure safe bridges, high quality roads and sidewalks, and modern day school buildings.",
                        ],
                        [
                            'name' => "Fiscal Responsibility",
                            'stance' => "The Utah Legislature is running rampant with pet projects that go counter with Utah values.  We have families who can't afford health care, while the Utah Legislature allocated 45 million dollars to rename UTA.  We need our elected officials to be fiscally responsible and fund services that align with Utah values.",
                        ],
                        [
                            'name' => "Criminal Justice Reform",
                            'stance' => "Northern Utah has a serious problem with over crowded jails and underpaid law enforcement.  We need to use our Utah pragmatism to work with law enforcement and community leaders to find common sense solutions.",
                        ],
                        [
                            'name' => "Quality Growth",
                            'stance' => "Utah is growing and our cities and rural areas are feeling it.  The way we handle this growth for the next 5 years will be incredibly impactful to Utahns for the next 5 decades.  I want to support policies and find solutions that will allow my kids to be able to raise their families right here were they grew up.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Ann Millner',
                        'dob' => null,
                        'bio' => "Dr. F. Ann Millner serves as the State Senator for District 18. She is Senate Majority Whip and Chair of the Senate Ethics Committee. Ann also sits on the Executive Appropriations Committee, Education Committee, Economic Development and Workforce Services Committee, Public Education Appropriations Committee, Higher Education Appropriations Committee, Government Operations Committee, Legislative Management Committee, and the Transportation, Public Utilities, Energy, & Technology Committee.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => '',
                    ],

                    'manual_candidate' => [
                        'sources' => '',
                    ],


                    'opinions' => [
                        [
                                'name' => "Economic Development",
                                'stance' => "As Utah increases in population, the issues facing us continue to grow in importance. I am committed to making the right decisions, informed by data and my core values. Below, you'll find a summary of some of these values.",
                        ],
                        [
                                'name' => "Economic Development:",
                                'stance' => "When we encourage good policy in our State Legislature, we foster important principles that build and strengthen our economic vitality. I support free enterprise and limited government which allow a talented workforce, bright and innovative entrepreneurs, and small and large businesses to contribute to a growing economy. I support strategic partnerships with our business community to solve challenges and leverage our opportunities.",
                        ],
                        [
                                'name' => "Education",
                                'stance' => "We can't draw a sharp line between education and economic development, and we can't have one without the other. I am convinced there are only two ways for Utah to compete in today's global economy: we can either be cheaper, or smarter. We must choose smarter. That is why education has to be job one.",
                        ],
                        [
                                'name' => "Government Spending",
                                'stance' => "I've heard from so many people who say, \"Government has enough money. They need to learn how to make it stretch before they come back for more.\" I can certainly understand that point of view. I will make driving efficiency in state government one of my top priorities. Where there is waste or duplication, we need to cut it out.",
                        ],
                        [
                                'name' => "Healthcare",
                                'stance' => "My academic and professional background is in the field of health care management. Health care is complex, and because of recent government actions, allows the states only limited control.",
                        ],
                        [
                                'name' => "Integrity",
                                'stance' => "We all know that Utah has been rocked recently with allegations of wrongdoing by high government officials. Utah expects and deserves much better. When people elect leaders they must be able to trust them to act in good faith, \"without passion or prejudice\" in the interest of their constituents.",
                        ],
                        [
                                'name' => "Public Lands",
                                'stance' => "We face huge issues with our public lands and access to them. I share the opinion of many others that the Federal control of Utah lands is excessive and heavy-handed. At the same time I value our wild lands and remote areas and want to respect and preserve our most sensitive areas.",
                        ],
                        [
                                'name' => "Quality of Life",
                                'stance' => "There are currently, and will be in the future, important policy discussions that wrestle with cleaning our air, preserving our natural resources, managing those resources, and providing for Utah's future. Creating solutions for our future will be an important effort where we must engage.",
                        ],
                        [
                                'name' => "Role of Government",
                                'stance' => "As has been said elsewhere, government makes a wonderful servant, but a terrible master. Government has an important role in such areas as education, yet left on its own, government tends to become too large and intrusive.",
                        ],
                        [
                                'name' => "Veterans & The Military",
                                'stance' => "I am committed to help veterans get the education and training that they need and then support them in getting high quality jobs. Returning warriors are another one of our greatest assets in building a qualified workforce in our area. It is important they have access to education training and career services in transitioning from the military to the private sector.",
                        ],
                        [
                                'name' => "2nd Amendment",
                                'stance' => "I've been asked if I am a member of the NRA, which I don't happen to be. But I was raised around guns, I own guns and know how to handle and shoot them. I am a strong supporter of the Second Amendment, which I believe is in the Bill of Rights for good reason. I will continue to support the right to bear arms in the State of Utah.",
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
                        'name' => 'Jerry Stevenson',
                        'dob' => null,
                        'bio' => "Senator Jerry Stevenson is a Republican member of the Utah State Senate, representing District 6. He has served in this position since January 25, 2010. Prior to his service in the Utah Senate, Stevenson was a three-term mayor of Layton from 1994 until 2006. He has also served as a Layton City Council Member.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.votejerrystevenson.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.votejerrystevenson.com/',
                    ],

                    'opinions' => [

                    ],
                ],
            ]
        ],
        [
            'location' => 'District 7',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Stuart Adams',
                        'dob' => null,
                        'bio' => "My name is J. Stuart Adams and I am a lifetime resident of Davis County. I graduated from Layton High in 1972 and went on to earn my Bachelor of Arts at the University of Utah in business finance. I currently reside in Layton where my wife Susan and I raised our four children: Angie, Kristin, Lizzy and Stephanie. Today we are proud grandparents to fourteen grandchildren. I am a partner in the Adams Company, a Real Estate, Construction and Development Firm in Kaysville.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.votestuartadams.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.votestuartadams.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Stimulate Economic Growth:",
                            'stance' =>"Thanks for researching my platforms. If our community stops staying informed, we'll be headed down the wrong path. If you ever have questions or concerns about what you read here, please reach out. I'd love to have a discussion with you."
                        ],
                        [
                            'name' => "Uphold Responsible Tax Stewardship",
                            'stance' =>"My goal is to support efforts that create an environment for economic success. I oppose cronyism and government choosing winners and losers. My economic development efforts are focused on the establishment of a fair and stable tax code. I am also committed to our workforce, our infrastructure, and our quality of life. Utah is one of the premier business destinations in the country. Thanks to our legislature's solid conservative approach, Utah's economy is stronger than ever. But to retain this advantage, we must invest in our existing and future workforce so that we can meet the growing demands of businesses. Another focus of mine is ensuring our communities are providing a smooth flow of business and people through wise infrastructure development. We must keep pace with our state's incredible growth."
                        ],
                        [
                            'name' => "Protect Air Quality",
                            'stance' =>"I'm a small business owner, so I recognize the challenges Utah's local businesses confront. Utah is continually ranked at the top or near the top of as the best states for business. But if we rest on our laurels we will fall behind. I strongly believe in the broad base principle of tax policy. We will continue to look at ways to address inequities that exist in the tax code. For taxes to work, everyone needs to have skin in the game, but it must be reasonable and take into account proportionality. I pledge to continue to improve Utah's tax code by promoting a simple, equitable, and transparent tax system that supports families and businesses, rather than stifles them."
                        ],
                        [
                            'name' => "Maintain Government Accountability",
                            'stance' =>"Our state's geography offers stunning landscapes and outdoor amenities, but it also brings inherent challenges for our air quality. One of the biggest culprits of our bad air problem is tailpipe emissions. I support alternative fuels such as natural gas as a method of reducing emissions. During the 2013 Session, I championed three-part legislation that provides a way for school districts to convert their buses to CNG; allows Utah to band together with other states to make bulk purchases of factory produced CNG vehicles; and helps fund the construction of more natural gas fueling stations available for state fleets, school districts, commercial vehicles, and private consumers.In addition to these efforts, most recently, I sponsored legislation that encourages our state's oil refineries to produce and sell low sulfur, tier 3 fuel in the state by 2020. There is no silver bullet for solving the air quality challenges, but the efforts we have made so far will help move Utah in the right direction toward cleaner air and you have my commitment that this issue will continue to be a major focus for me."
                        ],
                        [
                            'name' => "Ensure Quality Education",
                            'stance' =>"Our state continues to win national awards for our conservative and fiscally responsible approach to government. But even with our successes, we can always do better. I remain committed to studying ways to use taxpayer dollars more efficiently and where possible look for opportunities to save taxpayer dollars. Ultimately, I am accountable to you my constituents and that I am doing all I can to make sure you know the legislature is spending your tax dollars appropriately."
                        ],
                        [
                            'name' => "Preserve Freedom & Liberty",
                            'stance' =>"Utah will continue to navigate difficult questions at the boundary of religious freedom and gay rights. I believe that legislative negotiations are a more effective vehicle for properly protecting values instead of waiting for judicial decisions. I also believe we can obtain the proper balance. Protecting religious liberty is possible, but will involve advancing gay rights, not seeking to defeat them. As the sponsor of the bills that formed the Utah Compromise in 2015, we were able to accomplish both of these goals effectively. Under the Compromise,  employers retain the legal ability to establish reasonable employment regulations that reflect their own values. At work, employees may, in a non-disruptive manner, express their views and even religious convictions about marriage, family, and sexuality; they cannot be penalized at work for expressing those views outside of work. LGBTQ people receive identical protections. We found a balanced solution, squaring religious liberty with LGBT non-discrimination. I am proud that Utah, was able to navigate this difficult issue without boycott or protest and as a result, the Utah Compromise has become a benchmark for other states."
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Adam Feller',
                        'dob' => null,
                        'bio' => "Born in Austin, Texas, I grew up in a conservative household and spent a good deal of my formative years working on my grandfather's farm in the Texas Hill Country. As I worked beside him and my father, bailing hay, tending livestock, and building fences, I learned determination and a work ethic that has served me well. I learned that no matter how long the fence will be, you have to start with the first post hole. moved to Utah with my family in 2014. Having never set foot in Utah before, it was a scary prospect.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Libertarian',
                        'site_link' => 'https://adamfeller.org/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://adamfeller.org/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Taxation",
                            'stance' => "You own your labor and the fruits it bears. You rent your labor to employers or customers for agreed upon compensation. You use that compensation to acquire goods, services, and property. The government does not have a rightful claim to any part of those transactions. There are many taxes that need to be rescinded, and we need to prioritize. The one that I will focus on first is Utah's grocery tax. As is too common in government circles, someone had a wretched idea: punish people for purchasing of the necessities of life. As a proportion of total wages, this tax hits working and middle class Utahns harder than the affluent. It should be permanently and immediately abolished.",
                        ],
                        [
                            'name' => "Lockdowns & Mandates",
                            'stance' => "Authoritarian mandates and lockdowns are antithetical to liberty and I stand against the measures taken by miniature dictators over the last two years. While Utah did not suffer as badly as many other states, we need controls in place to make sure that any attempts to repeat the crimes perpetrated by governors throughout the country are as politically painful as possible.",
                        ],
                        [
                            'name' => "Criminal Justice Reform",
                            'stance' => "Law enforcement reform is badly needed. There is a litany of despicable practices that need to be ended: Civil asset forfeiture, Qualified immunity, The militarization of police, The death penalty. No-knock raids and SWAT teams have their place and role in meaningful law enforcement, but their usage must be restricted to cases where violence has already started. Sentencing and corrections also need an overhaul. It is shameful that the \"land of the free\" has the highest incarceration rate in the developed world. Only violent offenders who hurt or threaten other people should be sentenced to prison. When a property offender is sent to prison, they often have no means to pay restitution, leaving their victim without justice. Property offenders should be sentenced to pay restitution with interest to their victims and carry a record on their credit scores until that debt is paid off. The war on drugs and other victimless crimes should be repealed, and prisoners who are serving sentences only for those crimes should be released immediately.",
                        ],
                        [
                            'name' => "School Choice & Reform",
                            'stance' => "Monopolies, especially those enforced by government, are terrible for consumers, and education is not an exception. Tax money that is collected for the purpose of educating a child should follow that child to fund his or her education, not to fund a specific government office. Parents know their children best and should be allowed to select the best fit for their students. In public schools, more money should go directly into the classroom and not be squandered on unnecessary administrators and other staff.",
                        ],
                        [
                            'name' => "Defund the DABS",
                            'stance' => "Another state monopoly that needs to be abolished is the Department of Alcoholic Beverage Service, which restricts consumer choice while artificially raising consumer prices. In addition, it forces taxpayers who have a religious or moral objection to alcohol to be unwitting participants in liquor distribution. We need to open up the free market to better serve consumers and get the government out of the liquor business.",
                        ],
                        [
                            'name' => "Right to Self Defense",
                            'stance' => "When the Second Amendment to the U.S. Constitution was ratified, it was not a new right that was suddenly granted to the people by the newly formed government. Instead, it was a recognition of a natural right that pre-existed any government. I wholly stand up for the absolute right of individuals to arm and defend themselves from threats, both foreign and domestic. I will work with any like-minded officials to pre-emptively nullify any federal attempt to infringe upon that right.",
                        ],
                        [
                            'name' => "War and Peace",
                            'stance' => "War is the ultimate action of the government, determining literally life and death for millions of individuals. When drafting the United States Constitution, the founding fathers did not trust the executive branch with this power; it was too similar to having an unchecked king. The power to declare war was specifically entrusted to the legislative branch so that the ultimate decision would be closest to the people who would bear the costs. Fast forward to today. Of all the wars in which the U.S. has been involved in its history, the last constitutionally declared war was World War II. The legislative branch has abdicated its constitutional role, and the executive branch, under both parties, has eagerly absorbed those powers. We have drifted so far away from the Constitution in the most important issue that in many cases, the president commits the lives of our troops to danger without even consulting with Congress. This is primarily a federal issue, but there is a state aspect to this. I will proudly introduce, sponsor, or support Defend the Guard legislation. This legislation instructs the governor to only contribute Utah National Guard members to combat situations if there is a constitutional declaration of war by the Congress.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Kimberly Wagner',
                        'dob' => null,
                        'bio' => "I was born in Logan and reared in a large family in North Ogden, Utah. Following my parents' example, I got involved in politics early, working on local campaigns as a teenager.  I studied English and Political Science at BYU.   After serving a mission in Guatemala and graduating, summa cum laude, I worked with Senator Orrin Hatch for two years in Washington, D.C.  I subsequently earned an M.A. in Political Science and a Ph.D. in Organizational Behavior and Human Resources, both from UCLA.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => 'https://www.votekimberlywagner.com/home',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.votekimberlywagner.com/home',
                    ],

                    'opinions' => [
                        [
                            'name' => "Political Reform",
                            'stance' =>"As a senator, I would work to end gerrymandering, to make more Utah races non-partisan, (such as the State Board of Education), to adopt alternative voting methods such as Approval Voting (a superior alternative to Ranked Choice Voting) as options for municipalities, and to reform campaign financing. Utah is one of relatively few states with no limits whatsoever on campaign contributions from any source for legislative races. The vast majority of campaign contributions to incumbents come from special interests. According to an analysis reported in the Salt Lake Tribune, on average, only five cents per dollar in campaign contributions come from voters in an incumbent's own district. And a significant number of legislators get no contributions from their own constituents in a given election cycle. This creates an unhealthy dynamic of outsized influence of special interests versus individual voters."
                        ],
                        [
                            'name' => "Air Quality",
                            'stance' => "Utah's population has grown roughly 40% over the last two decades, which adds to the strain on our air quality. Despite already poor air quality, the Utah legislature has, over the objections of local leaders, pursued the development of Utah's Inland Port, which will make additional efforts to improve air quality even more vital. \"Utah has the nation's largest emissions of hazardous air pollutants, which are linked to cancer and birth defects in human health studies.\" We need to make more progress more quickly toward having clean air, for the benefit of all Utahns, but particularly those most vulnerable to the effects of bad air. I would support legislative efforts to develop and implement a strong plan that reduces emissions by focusing on permits, allowances, and monitoring.",
                        ],
                        [
                            'name' => "Water Conservation",
                            'stance' => "Population growth, coupled with severe drought, also make water conservation critical.  Education and incentives (such as turf buy-back programs) are both useful tools to boost conservation. Monitoring secondary water use can help with voluntary water conservation as well.  Yet it's not just individual households depleting this precious resource. \"Utahns have the 2nd highest municipal and industrial per capita water use in the United States...\" We need to consider measures to further reduce usage by all parties.",
                        ],
                        [
                            'name' => "Education",
                            'stance' =>"Our public schools in Utah are working hard to make limited funding stretch as they, in conjunction with many parent volunteers, educate our students. Teachers already feel beleaguered with the demands put on them during the pandemic. More recent legislative efforts to micromanage teachers threaten to increase the number of educators leaving the profession. Many measures to ensure transparency are already in place. If they aren?t working adequately, local school districts, working with teachers, can bolster transparency rather than adding mandates originating on Capitol Hill. We need to treat our teachers as professionals and not make unreasonable demands on their time. We also need to make sure we fund education adequately.  I?ve seen the value of a good and affordable education in my own family. My dad grew up on a farm in Cache Valley. Not only was he the first member of his family to go to college, he went on to get his Ph.D. Education opens doors."
                        ],
                        [
                            'name' => "Affordable Housing",
                            'stance' =>"Housing demand has outstripped supply in recent years, resulting in skyrocketing home prices.  Rental units are also in short supply. Many Utahns are being priced out of the housing market.  We need to create a better balance between single family unit dwellings and multi-family options.  Market forces alone aren't meeting our housing needs, and zoning changes could be part of the solution. I support efforts made by the legislature in 2021 to pave the way for more Internal and External Accessory Dwelling Units (ADUs) as part of an overall strategy to address our housing crisis."
                        ],
                        [
                            'name' => "Access to Mental Health Care",
                            'stance' => "Although the stigma of mental health problems is decreasing, it remains common to hear of tragedies that could have, perhaps, been avoided with mental health interventions.  Access to mental health care is a public issue. Access gaps and months-long-waits to get professional help can increase risk and vulnerability. As a Senator, I'd like to explore further how we can address those issues.",
                        ],
                    ],
                ],
            ]
        ],
        [
            'location' => 'District 9',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Jen Plumb',
                        'dob' => null,
                        'bio' => "Dr. Plumb is a Utah native, born in Salt Lake City. She attended UCLA for her undergraduate training and went on to obtain her Master of Public Health and MD degrees at the University of Utah. After that, she went off to complete her medical residency training in Pediatrics at Rileys Children's Hospital/Indiana University and her Pediatric Emergency Medicine here at Primary Children's Hospital. ",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'https://www.jenplumb.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.jenplumb.com/',
                    ],

                    'opinions' => [
                    ],
                ],
            ]
        ],
        [
            'location' => 'District 11',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Daniel Thatcher',
                        'dob' => null,
                        'bio' => "Senator Daniel W. Thatcher was first elected in 2010,defeating a Democratic incumbent in a historic upset. While representing a left leaning district, he maintained a solidly conservative voting record on protecting the unborn, constitutional rights, lower taxes, and school choice. In his first year in the Senate, he served as the Chair of the Patrick Henry Caucus in defense of state's rights.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'https://www.thatcherforsenate.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.thatcherforsenate.com/',
                    ],

                    'opinions' => [
                    ],
                ],
            ]
        ],
        [
            'location' => 'District 12',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Karen Mayne',
                        'dob' => null,
                        'bio' => "For the past two years, Karen has served as a member of Senate leadership. Serving on the powerful Executive Appropriations Committee funding prioritized programs, balancing the budget, and reduced state government. During the 2010 legislative session, Karen passed all four of the bills she sponsored which means she has a nearly perfect success rate of passing legislation during her three years as your Senator. Not many legislators Republicans or Democrats can be that successful.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://karenmayne.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://karenmayne.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. It seems Mayne doesn't have an issues page",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Linda Paulson',
                        'dob' => null,
                        'bio' => "My name is Linda Paulson. I am running for Utah Senate District 12.  Like many of you, I have been frustrated with what's going on in society. I am dedicated to God, Family, and the Constitution.  If this is what you value, I would like to be your voice. God loves all His children.  He wants us to be free, and moral—(Exodus:20)",
                        'contact_email' => 'lindacampaign@linda4utahsenate.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.linda4utahsenate.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.linda4utahsenate.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. Check out https://www.linda4utahsenate.com/politicalissues for this candidate's stances.",
                            'stance' => "",
                        ],
                    ],
                ],
            ]
        ],
        [
            'location' => 'District 13',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Nate Blouin',
                        'dob' => null,
                        'bio' => "I moved to Utah in 2009 after spending my early years growing up in New Hampshire. I was raised to respect the great outdoors and followed my passion for skiing to Utah. You'll find me enjoying the Wasatch canyons on foot, skis and bike throughout the seasons. I'm committed to protecting these spaces and the quality of life they create for residents, from our trails and snow to the water we drink.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.nateforutah.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.nateforutah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Clean air and clean energy",
                            'stance' => "Clean air is a basic right, not a scarce commodity. The inversion and ozone that frequently choke the Wasatch Front are bad for our health and for our economy. We must prioritize policies that reduce emissions both in our neighborhoods and at the source of the electricity that we use. Climate change is a generational problem but we can take action to alter its course.",
                        ],
                        [
                            'name' => "Strengthening the voice of the community",
                            'stance' => "Utah currently has exemplary laws that allow citizens to easily register to vote and to vote by mail. This keeps costs down while maintaining secure elections and encourages high turnout. We must protect this right going forward. Further, through citizen initiatives, Utah has passed our most progressive laws, and the will of the people must be respected.",
                        ],
                        [
                            'name' => "Quality growth",
                            'stance' => "Utah is changing rapidly and faces critical decisions as we envision the decade to come. With a young and rapidly growing population, affordability is crucial to preserving quality of life in housing, healthcare and other vital needs. I will focus on supporting all Utahns while creating a level playing field to make Utah's economy work for everyone.",
                        ],
                        [
                            'name' => "Civil Rights",
                            'stance' => "Recent events have reshaped the protections we need from our state government. With Roe v. Wade now overturned and a wave of mass gun violence sweeping the nation, Utahns deserve assurances that elected leaders will fight for safe communities, access to critical care, and the opportunity to live life as our authentic selves.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Roger Stout',
                        'dob' => null,
                        'bio' => "",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => '',
                    ],

                    'manual_candidate' => [
                        'sources' => '',
                    ],

                    'opinions' => [
                        [
                            'name' => "No site to scrape!",
                            'stance' => "",
                        ],
                    ],
                ],
            ]
        ],
        [
            'location' => 'District 14',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Stephanie Pitcher',
                        'dob' => null,
                        'bio' => "Stephanie is a mom, an attorney, and an avid hiker of Utah's mountains and trails. For the last four years, Stephanie has served in the House of Representatives, representing communities in Salt Lake City, Millcreek, and Holladay. She is running for State Senate to continue the fight for cleaner air, meaningful investments in public education, transparency in government, and criminal justice reform.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.electstephanie.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.electstephanie.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Women & Reproductive Freedom",
                            'stance' => "The recent news of the Supreme Court decision overturning Roe v. Wade is devastating. It means the end of a longstanding legal precedent which protected abortion rights nationwide, and in Utah, the immediate halt to abortion access at any stage, leaving thousands of Utah women without access to comprehensive reproductive care. Outlawing abortions will never make them go away. It only makes them more dangerous, especially for women of low economic means or those belonging to marginalized communities. I support reproductive freedom and will fight against prohibitive abortion bans and burdensome policies that restrict access to birth control or reproductive care. I am also committed to equal rights for women and believe we must pass legislation to eliminate the gender pay gap, increase work-family supports, ratify the ERA, improve the availability of childcare, and ensure families have access to affordable healthcare.",
                        ],
                        [
                            'name' => "Gun Control",
                            'stance' => "We MUST take meaningful action to end gun violence. There are many things we can do at the local level to impose sensible gun regulations that will reduce violence and keep our children safe. Among these, Utah should: 1. Implement a ‘red flag' law, which would allow a friend or family member to petition the court for an order to temporarily prevent an individual in crisis from accessing a gun; 2. Require universal background checks; 3. Raise the age requirement for firearm purchase from 18 to 21; 4. Impose a waiting period following the sale or purchase of a gun; and 5. Ban the sale of assault rifles.",
                        ],
                        [
                            'name' => "Clean Air & the Environment",
                            'stance' => "Air pollution impacts our quality of life. The inversion and ozone along the Wasatch Front is bad for our health and bad for our economy. We must work to clean up our air, reduce vehicle emissions, and encourage more green energy use. Climate change is a generational problem, but with innovative solutions and bold leadership, we can take action to reverse its course.",
                        ],
                        [
                            'name' => "LGBTQ+ & Equal Rights",
                            'stance' => "Our LGBTQ+ community deserve to be treated with dignity and fairness, to receive equal protection under the law, and to live a life of authenticity. As a member of the House of Representatives, I have fought alongside organizations like Equality Utah against anti-trans laws, and I will continue to stand against hate and fight for our LGBTQ+ community. We must work together to build safe communities, ensure access to healthcare, and create a Utah that is more equitable, just, and kind.",
                        ],
                        [
                            'name' => "Good Government",
                            'stance' => "Utah has a robust vote-by-mail system and an online process for registering to vote. These policies make voting more accessible and encourage high voter turnout. We must protect this right by defending the vote-by-mail system, ensuring a comprehensive citizen initiative process, and upholding the will of the people via voter-led efforts. We should also provide civic engagement literacy classes for young people to become familiar with and more engaged with the political process.",
                        ],
                        [
                            'name' => "Affordable Housing",
                            'stance' => "Utah is experiencing a housing crisis. Our population is growing faster than ever before, yet our housing isn't keeping up with our growth. The cost of living is skyrocketing, and more Utah families are struggling to pay rent and make ends meet. I believe that housing is a human right. I will fight to increase investments in affordable housing, defend renters' and homeowners' rights, and work to keep housing prices down while preserving the character of historic neighborhoods.",
                        ],
                        [
                            'name' => "Public Education",
                            'stance' => "This past legislative session we saw several attacks to our public schools and our teachers — from efforts to implement a private voucher program, to threats to per-pupil funding, to efforts to micro-manage our teachers. We must support our teachers and invest in our public school system.",
                        ],
                        [
                            'name' => "Criminal Justice Reform",
                            'stance' => "I am an advocate for innovation and reform in the criminal justice system. Our system should focus on restitution and rehabilitation, not excessive jail sentences and fines that leave individuals in a cycle of dept. Among my policy priorities, we should:",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Dennis Roach',
                        'dob' => null,
                        'bio' => "As a 6th generation Utahn with roots all along the Wasatch front, I've seen a lot of changes and growth in our great state.  I believe it's time for our elected leaders to work together for their constituents and focus less on rigid partisan ideology. With over 2 decades of managerial and support experience I've learned a lot about what it takes to get people to work together.  I've spent the last 10 years volunteering my time to help serve our community working with local leaders.",
                        'contact_email' => 'DennisRoachDistrict14@gmail.com',
                        'contact_phone_number' => '(801)-330-5970',
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => 'https://dennisroach.wixsite.com/voteroach',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://dennisroach.wixsite.com/voteroach',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. It seems Roach doesn't have an issues page",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Dan Sorensen',
                        'dob' => null,
                        'bio' => "Born the 10th of my parents' eleven children, I was raised in a lively and welcoming East Millcreek home full of faith, music, dogs, firearms and fine art, with extra beds and a place at the table for those who on occasion needed a place to stay. I attended William Penn Elementary and Evergreen Jr. High schools and worked at the family furniture business in Sugarhouse where I earned enough money to buy my dream car, a ‘72 Toyota Land Cruiser FJ40, in which I crisscrossed the backroads of Utah from the Wasatch Mountains to the Canyonlands, and from the West Desert to the Uintas.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.dansorensenutah.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.dansorensenutah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Partisanship",
                            'stance' =>"Political parties are inevitable, but as citizens and neighbors we can minimize the false dichotomy they present when we engage in honest, issues-based and reasonable dialogue with each other in determining public policy. We serve our communities best when loyalty to party is minimized in favor of loyalty to community, and principle-based public policy. I am disinclined to use labels such as \"liberal\", \"conservative\", \"right\" or \"left\". They are are too low-resolution to define the many and varied perspectives and opinions held by the many and varied individuals in our community. My hope is that we avoid putting ourselves and each other firmly into these categorical boxes. That we genuinely reason together to address public policy, writing only what's necessary into law, and leaving the rest to open and friendly discussion."
                        ],
                        [
                            'name' => "Education",
                            'stance' =>"Both Jana and I attended our neighborhood public schools and we are both graduates of our state?s flagship university. I understand the value in these institutions. We have sent each of our six children to our local public schools and we have genuine love and gratitude for their teachers and administrators who helped us to successfully raise them. While public education is critical to a healthy society, it should not maintain a monopoly of control. We ought to welcome diversity and choice in education, whether through charter, private or home schooling. As with all goods and services quality improves when consumers have a real choice. We have an obligation to sustain our public schools, and adequately compensate teachers, without marginalizing other educational options that may better serve the needs of many of our citizens. "
                        ],
                        [
                            'name' => "Public Health",
                            'stance' =>"Had the Framers foreseen just how industrialized healthcare would become - how much its enormous profits would influence our politics - I believe they'd have written into the Bill of Rights a prohibition of state-sponsored medicine, similar to the 1st Amendment's establishment clause prohibiting state-sponsored religion. If the state has a positive role to play in promoting the health of its citizens I don't think it's what we experienced with the Covid-19 pandemic, during which we routinely heard politicians and journalists recite, \"the science says...\", pretending that science is a dogma of established rationality on which they should base, or even mandate, public policy. \"The science\" is in fact a wonderful but messy process of testing and probing in order to understand how the material world works. It is not a principle-based orthodoxy, which is why public officials are under oath to abide by constitutional principles, not by medical journals. The authoritarian impulse of both national and local public officials was on display during the pandemic, and the presumed authority they exercised in the name of public health has left us with a tragic array of consequences, making the presumed cure exponentially worse than the disease. While Utah was spared the most draconian practices implemented in some states, we were nonetheless dealt harmful indignities, particularly in Salt Lake County where elected and unelected officials imposed mandates, school closures, and the shuttering of businesses they deemed \"nonessential\", all the while spending public funds to promote one source of information while censoring all others. Never again can we afford such a reckless disregard of our fellow citizens' basic right to choose their medical remedies and pursue their professions. Regardless of a public official's belief in social distancing, masks and vaccinations, etc. these are matters of scientific review and recommendation, not of law or mandate. We can promote public health without taking a wrecking ball to foundational liberties, economic prosperity, public education and social and psychological wellbeing."
                        ],
                        [
                            'name' => "Taxation & Spending",
                            'stance' =>"Much of what happens at the legislature has to do with the appropriation of the revenue generated through taxation. The urge for legislators to appropriate more and more money to their favored cause is incessant. Many or most of these causes seem, at least in principle, justified and beneficial. Who doesn?t want to promote public health, improve the status of the marginalized, empower the disadvantaged or encourage research and technology, etc.? But why is the state the favored instrument through which these aspirations are pursued? Because legislators claim authority to raise the money by force - to take what is Peter's and give it to Paul (assuming Paul is well-connected). "
                        ],
                        [
                            'name' => "Free Markets",
                            'stance' =>"Protecting freedom in the marketplace is perhaps the most significant way a legislator can enhance the human condition. Government regulation of business may sometimes be a necessary evil, but more often it's an unnecessary one - a nefarious tool to protect the politically well-connected from having to innovate and compete to meet market demands. Politicians are tempted to think they can improve our economy by \"doing something\", but their interventions inevitably lead to unsustainable public debt and inflation which are anything but \"socially and economically just\" - especially to working class people."
                        ],
                        [
                            'name' => "Bill of Rights",
                            'stance' =>"The framers of the U.S. Constitution designed the supreme law of the land to restrain lawmakers and public officials in their natural inclination to impose on their fellow citizens' unalienable rights. Knowing it may not be enough to restrain the legislative impulse they included a bill of specific rights in order to remove all doubt. When they used language like \"Congress shall make no law...\" and \"the right of the people... shall not be infringed...\" I believe they meant it. Nevertheless legislators, backed by powerful monied interests and zealous ideologues, continue to \"alienate\" people from their \"unalienable\" rights. From speech and religious observation to self preservation and bodily autonomy, the urge for state actors to \"infringe\" upon and \"abridge\" foundational rights persists. Legislators swear an oath to uphold the Constitution - not a science journal, educational theory, religious orthodoxy, or advocacy group."
                        ],
                        [
                            'name' => "Freedom of Speech",
                            'stance' =>"Political Correctness often begins with good intentions - after all there is virtue in respecting the sensitivities of others. Unfortunately it is sometimes abused by those in power to intimidate and cancel people with minority viewpoints, threatening the foundational ideals of free speech and even freedom of thought. It's essential to nourish an atmosphere where all are safe to express what they believe and even to question policies or attitudes adopted by the majority, that in doing so people won't be cancelled from their livelihood or shamed out of the public square, or worse, be made to profess things they don't believe."
                        ],
                        [
                            'name' => "Right to Life",
                            'stance' =>"The Declaration of Independence soundly acknowledges that we are all created equal, and endowed by our Creator with certain \"unalienable\" rights, among which are Life, Liberty, and the pursuit of Happiness. The first of these is Life since without Life no other rights matter. Nevertheless, in 1973, under the influence of the Sexual Revolution of the 1960s, the Supreme Court ruled in favor of an incoherent claim that our Constitution allows for depriving that first unalienable right to persons still in the womb if their parents didn't want them. "
                        ],
                        [
                            'name' => "Ecology & Public Lands",
                            'stance' =>"Utah is the most beautiful place in the world. I have known and loved other places around the country and around the globe, but in my humble opinion, this really is \"the place\". Part of what makes it so unique is the easy access we have from our metropolitan areas to our wild country - especially those of us who live in this blessed community at the base of the Wasatch Mountains. We of all people can be acutely aware of our obligation to thoughtfully protect these wild places and our access to them, from both the ambitions of developers and the zealotry of environmental extremists. "
                        ],

                    ],
                ],
            ]
        ],
        [
            'location' => 'District 18',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Daniel McCay',
                        'dob' => null,
                        'bio' => "Dan McCay is a member of the Utah State Senate, representing District 11, Utah and Salt Lake C0unties. McCay assumed office on January 1, 2019 and his current term ends on January 1, 2023. Senator McCay earned both his bachelor's in Secondary Education and his master's in Instructional Design from Utah State University. He went on to receive his J.D. from Willamette University. He is employed as an attorney and a real estate portfolio manager.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.senatormccay.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.senatormccay.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. It seems McCay doesn't have an issues page",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Jed Nordfelt',
                        'dob' => null,
                        'bio' => "",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => '',
                    ],

                    'manual_candidate' => [
                        'sources' => '',
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
                        'name' => 'Catherine Voutaz',
                        'dob' => null,
                        'bio' => "Why Politics? That's a big question. In 2017, my son Chandler died by suicide. It impacted how I see the world and definitely defined how I should focus on making the world a better place. My family is impacted by mental health challenges, increased higher education costs, traffic congestion, poor air quality, and now inflation. Our Legislators should be both concerned and address the growth continued housing and growth issues by appropriately managing our tax dollars.",
                        'contact_email' => 'voutazcatherine@gmail.com',
                        'contact_phone_number' => '(385)429-0327',
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.votevoutaz.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.votevoutaz.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Control Inflation",
                            'stance' => "",
                        ],
                        [
                            'name' => "Mental Health Funding",
                            'stance' => "",
                        ],
                        [
                            'name' => "Public Education",
                            'stance' => "",
                        ],
                        [
                            'name' => "Equality is Essential",
                            'stance' => "",
                        ],
                        [
                            'name' => "Manage Utah's Growth",
                            'stance' => "",
                        ],
                        [
                            'name' => "Reduce Healthcare Costs",
                            'stance' => "",
                        ],
                        [
                            'name' => "Clean Air",
                            'stance' => "",
                        ],
                        [
                            'name' => "Business and Job Opportunities",
                            'stance' => "",
                        ],
                        [
                            'name' => "Tackling Utah's Budget and Tax Policies",
                            'stance' => "",
                        ],
                    ],
                ],
            ]
        ],
        [
            'location' => 'District 19',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Parker Bond',
                        'dob' => null,
                        'bio' => "I'm born and raised in Utah. I graduated from Hillcrest High School in 2005, Utah State University in 2011, and currently work remotely as a software developer. I care deeply about Utah's public education and air quality. In my free time I like playing board games with friends, curling, and spending time with my family, especially in Utah's mountains and red rocks.",
                        'contact_email' => 'ParkerForSenate19@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.votebond.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.votebond.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Support and fully fund Public Education",
                            'stance' => "",
                        ],
                        [
                            'name' => "Improve our Air Quality",
                            'stance' => "",
                        ],
                        [
                            'name' => "Conserve our limited water resources",
                            'stance' => "",
                        ],
                        [
                            'name' => "Smart Growth",
                            'stance' => "",
                        ],
                        [
                            'name' => "Accountability from elected representatives",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Kirk Cullimore',
                        'dob' => null,
                        'bio' => "Senator Kirk A. Cullimore Jr. has represented District 9 in the Utah State Senate since he was elected in 2018. He received an Associate's Degree in music from Utah Valley University. Kirk then served a two-year mission for the Church of Jesus Christ of Latter-Day Saints in the Philippines. After returning, he continued his education and received a Bachelor's Degree in music from Brigham Young University. He subsequently taught music for six years and managed a music teaching studio. He then went on to pursue a law degree at the University of Oklahoma.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://kirkcullimore.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://kirkcullimore.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Fiscal Responsibility",
                            'stance' =>"As Utah continues to grow, demands will increase on certain government functions like infrastructure, water, and education. However, we need not grow the state government. We need to find efficiencies in government to maintain and even continue to reduce the tax obligations on Utah families. The fiscal responsibility of Utah has led to a long run of economic expansion, business and entrepreneurial growth,  and prosperity for Utah families."
                        ],
                        [
                            'name' => "Education",
                            'stance' =>"Our number one resource is our children. Utah needs to find ways to continue to appropriately invest in education for all children. With that said, the best indicator of success for a child?s education is support at home. We need to prioritize policies that encourage parent and family responsibility for children?s education in any learning environment."
                        ],
                        [
                            'name' => "Growth",
                            'stance' =>"For all the reasons that we love Utah, our state will continue to grow. We need to appropriately address that growth with investment in infrastructure and water conservation. We need to continue to respect private property rights and local zoning while finding ways to encourage proper housing development to address serious affordability problems."
                        ],
                        [
                            'name' => "Government Accountability",
                            'stance' =>"An accessible and transparent government best serves the people. We must continue to encourage open meetings rules, budget accountability, and proper oversight and reporting of government expenditures."
                        ],
                        [
                            'name' => "Economy",
                            'stance' =>"Utah has done well in developing policy that encourages entrepreneurship and business investment that create jobs, opportunity and an increased quality of life for all Utahns. Utah should continue to lead in creating a friendly business environment for new and emerging technologies and businesses as well as our traditional industry and historic businesses."
                        ],
                        [
                            'name' => "Family Values",
                            'stance' =>"The family is the fundamental unit of society. Our state should do whatever it can to focus on policies that strengthen the family. When families are functioning, there is less need for government ? which is a good thing. Education works better; there is less demand on the criminal justice systems; substance abuse, mental illness and homeless issues are minimized; social safety nets are less necessary; etc. We need to embrace the many cultures that contribute to our state and cultivate family ties."
                        ],
                        [
                            'name' => "Health Care",
                            'stance' =>"Health care has become too complex and too expensive. Utah should lead the way in streamlining medical billing; innovating ways to inform patients before incurring significant healthcare costs; and, supporting strategies to reduce prescription costs. At that same time, we should implement programs through care providers and insurance companies that encourages and rewards healthy behavior and preventative care."
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Tyler Peterson',
                        'dob' => null,
                        'bio' => "I grew up in Sandy and have lived in Draper for the last 7 years. I love the mountains and have summited 5 peaks in this district alone! You can catch me practicing drums in my spare time. I started my career as a journalist with bachelor's degrees in Psychology and Mass Communications, then earned a master's degree in International Affairs in Washington, DC. Today I manage strategic projects for a large international non-profit in town.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => 'https://tpfor19.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://tpfor19.com/',
                    ],

                    'opinions' => [

                        [
                            'name' => "Citizen Re-Engagement",
                            'stance' =>"Vote Tyler L. PetersonVote Tyler L. PetersonVote Tyler L. PetersonVote Tyler L. PetersonNot Republican. Not Democrat. Just an average citizen.See Average BioFor Sandy, Draper and Alpine's Senate District 19"
                        ],
                        [
                            'name' => "Fair & Local Representation",
                            'stance' =>"Lately we've been seeing not government of, by and for the people, but government of the party, by the party, for the party. It's a far cry from what our nation was set up to be. Those of us held hostage feel hopeless and divided, possibly more than ever in our lifetimes. It's time to reverse that trend by getting more everyday citizens elected. Ones who will help restore the health of our nation."
                        ],
                        [
                            'name' => "Government for the People",
                            'stance' =>"Strong communities are built on trust, and trust is built sharing and working together in physical space on common goals. Let's get together."
                        ],
                        [
                            'name' => "Facts Matter",
                            'stance' =>"Ignorance isn't always bliss. We ignore good science and truth at our peril. Let's get better at telling who the legitimate experts are and hear what they have to say."
                        ],
                        [
                            'name' => "Toning it Down",
                            'stance' =>"Most \"hot-button\" issues are smaller and less important than some would have you believe. Let's give in less to hyper-partisan exploitation and prevent single issues from dividing us."
                        ],
                        [
                            'name' => "Quality Public Education",
                            'stance' =>"Healthy political systems serve people, not politicians or single parties. Let's take stock of our system and make it healthier for democracy."
                        ],

                    ],
                ],
            ]
        ],
        [
            'location' => 'District 20',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Jill Fellow',
                        'dob' => null,
                        'bio' => "Jill M. Fellow is a writer, activist, and University Executive who knows Utah and fights to protect public lands, equal rights, and inclusive communities for all. In 2020, Jill ran for Summit County Council in an effort to shine light on the lack of gender diversity within city and county councils around the Beehive State. In 2021, she was elected as the Secretary of the Utah Democratic Party, where she currently serves.",
                        'contact_email' => 'jillfellow@gmail.com',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Democrat',
                        'site_link' => 'https://www.jillforutah.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.jillforutah.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Diversify the Utah legislature to add the voices of women and the underserved to the democratic process",
                            'stance' => "",
                        ],
                        [
                            'name' => "Protect Utah's Public lands and open space for all Utah families to enjoy",
                            'stance' => "",
                        ],
                        [
                            'name' => "Cut food taxes",
                            'stance' => "",
                        ],
                        [
                            'name' => "Build and support safe, inclusive spaces for LGBTQ+ youth in the Beehive State",
                            'stance' => "",
                        ],
                        [
                            'name' => "Design new, ethical solutions to Utah's water shortage, and pass laws that hold water districts accountable for corrupt lobbying and over spending",
                            'stance' => "",
                        ],
                        [
                            'name' => "Promote clean, expanded public transit in the Wasatch back and across Rural Utah",
                            'stance' => "",
                        ],
                        [
                            'name' => "Address the housing shortage for all Utah communities",
                            'stance' => "",
                        ],
                        [
                            'name' => "Fight against laws that take body autonomy away from Utahns",
                            'stance' => "",
                        ],

                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'RONALD WINTERTON',
                        'dob' => null,
                        'bio' => "No Bio Found",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://www.senatorwinterton.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => '',
                    ],

                    'opinions' => [
                        [
                            'name' => "Our scraper didn't work for this one. It seems Winterton doesn't have an issues page",
                            'stance' => "",
                        ],
                    ],
                ],
            ]
        ],
        [
            'location' => 'District 21',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Mike Kennedy',
                        'dob' => null,
                        'bio' => "Dr. Mike Kennedy is a lot of things — a former state legislator, a family doctor, a lawyer, an Eagle Scout, a husband, a father of eight, and a self-made man who grew up in a single-parent home in less than fortunate circumstances. Disputing the notion that all kids who grow up poor are destined for failure, Mike worked hard to find success and provide a better life for his family. Working his way through college to support himself, Mike graduated with a bachelor's degree from BYU, only taking time off to serve a two-year LDS Mission, before graduating from medical school at Michigan State University.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://kennedyforutah.org/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://kennedyforutah.org/',
                    ],

                    'opinions' => [
                    ],
                ],
            ]
        ],
        [
            'location' => 'District 23',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Keith Grover',
                        'dob' => null,
                        'bio' => "If you have to pick the one thing Senator Keith Grover does better than anything else, you might talk about his selflessness, or the way he listens, or his honesty. Or you might take a look at how he gained all of these valuable skills and simply think, he's the guy that always rises to the occasion. Born and raised in Provo, Utah, Keith's unconquerable spirit and compassion for others has led him down a tumultuous, winding, incredible path that few others would have followed.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => '',
                        'site_link' => 'https://keithgrover.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://keithgrover.com/',
                    ],

                    'opinions' => [
                        ],
                ],
            ]
        ],
        [
            'location' => 'District 28',

            'candidates' => [
                [
                    'candidate' => [
                        'name' => 'Patricia Bradford',
                        'dob' => null,
                        'bio' => "Patricia graduated from Southern Utah University with a B.S. in History Education and a minor of Geography. After completing her student teaching at Cedar High School and spending a semester substituting in Iron County School district, Patricia's plan to become a teacher crashed with the economy in 2008 and she landed in the Software as a Service industry. During her time working for growing companies, Patricia gained experience in quality assurance, project management, and team leadership.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'United Utah Party',
                        'site_link' => 'https://votepatriciabradford.com',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://votepatriciabradford.com',
                    ],

                    'opinions' => [
                        [
                            'name' => "By the People, for the People",
                            'stance' => "At its core, good government is about the people. Elected officials should never lose sight of the fact they are public servants and the bills they debate and pass affect the lives of those whom they've sworn to serve. Voters should choose their elected officials, not the other way around. Practices such as gerrymandering and restrictive voting laws damage the fabric of our democracy.",
                        ],
                        [
                            'name' => "Education",
                            'stance' => "Quality education is an essential pillar of a prosperous society. Teachers and school districts require support and resources as they partner with parents to help students succeed. They also need flexibility to meet the unique challenges of their specific schools and students. Students suffer when education policy becomes a pawn of partisan agendas.",
                        ],
                        [
                            'name' => "Government Reform",
                            'stance' => "The legislative process must be open to meaningful public review. Stricter campaign finance laws level the playing field and limit the influence of moneyed special interests. Alternative voting systems (such as Ranked Choice, STAR, or Approval voting methods) better reflect the will of the people. Publicly funded primaries should be open to all eligible voters and school boards, sheriffs, and attorneys general should be selected in non-partisan elections. These and other reforms will help ensure that elected officials best represent the needs of all Utahns, not private interests or purely partisan agendas.",
                        ],
                        [
                            'name' => "Thoughtful Problem Solving",
                            'stance' => "Water conservation, land usage, transportation, racial and economic inequality, affordable housing, healthcare access, energy resources, public health, media literacy, education, social services, etc... The people of Utah face any number of challenges and they deserve real solutions, not sound bites. Thoughtful problem solving involves careful consideration of a wide variety of voices, including content area experts and the everyday people who are impacted by government decisions.",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Barry Short',
                        'dob' => null,
                        'bio' => "It is my desire to represent the people of this huge and sprawling district, which ranges from central Washington County, through Iron County and Beaver County and western Millard County. It is my intent to represent this district as an unapologetic fiscal hawk. There is no such thing as government money, there is only taxpayer money - and I will do everything I can to cut taxes and reduce expenditures through the state budget. Government's footprint is too large, its tread on us too heavy.",
                        'contact_email' => '',
                        'contact_phone_number' => '(435)393-5115',
                        'state' => 'Utah',
                        'party_name' => 'Libertarian',
                        'site_link' => 'https://www.shortforsenate.org/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.shortforsenate.org/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Make School Choice an option for every Utah student",
                            'stance' => "Let the state funding follow the student to whatever type of education that they (and their parents) select, be it public school, charter school, private school, or homeschooling. Our one-size-fits-all approach is outdated and does not meet the varied needs of our student population.",
                        ],
                        [
                            'name' => "Abolish the Grocery Tax",
                            'stance' => "The returns from the tax are trivial as a component of the state budget, they disproportionately affect the lowest income families, and the state has a huge budget surplus. Time to consign the grocery tax to history! And then, we turn our attention to other taxes.",
                        ],
                        [
                            'name' => "Establish a statutory routine for regular periodic evaluation of ALL occupational and professional licensing",
                            'stance' => "These regulations get set in stone, and they need to be reevaluated regularly - and many, simply eliminated. If a profession is not subject to licensing in at least 30 other states, I will propose immediately repealing any and all licensing requirements for that profession. Other regulations simply make no sense - why does it take 15 weeks of training to be certified to be a police officer, but 39 weeks of training to be certified as a barber?",
                        ],
                        [
                            'name' => "Reform Civil Asset Forfeiture",
                            'stance' => "Sometimes police seize assets as part of an investigation. At present, they are required to return these assets ONLY if the subject of the investigation is found not guilty in court. This must be amended so assets must be returned UNLESS the subject is found guilty - many cases do not go all the way to court, or in fact charges are never filed, and the subject does not get their property back. It's legalized theft.",
                        ],
                        [
                            'name' => "Reform election filing fees",
                            'stance' => "Our fees, particularly for the full time jobs at the county level, are huge and greatly exceed those of any surrounding state. (Colorado: $0. Arizona: $0. Wyoming: maximum $50. Utah? Up to $1000 for some offices!) This impacts and discourages the ability of individuals to seek public office - and there is nothing more important to our society than the free exchange of ideas. I will work to limit filing fees to a fixed amount, instead of calculating them based on the pay which the job receives. Elections are about ideas, but we treat them like playing the lottery - the more you risk, the more you can win!",
                        ],
                        [
                            'name' => "Get the government out of the retail alcohol business",
                            'stance' => "DABC/DABS has been a source of constant corruption ever since its founding at the end of Prohibition. It is unnecessary, a duplication of efforts the free market is already doing at no cost to taxpayers. We need neither stores nor employees - both in retail and distribution - on the asset sheet of the state of Utah. (Many Utahns don't drink - yet we are ALL partners in one of the nation's largest alcohol distribution systems!) Create  jobs, create opportunities, and treat the people of Utah as adults.",
                        ],
                        [
                            'name' => "Eliminate the cronyism and high prices of our medical cannabis program by introducing market reforms",
                            'stance' => "Many if not most users of this program receive subsidies to the cost, through Medicare, Medicaid, the VA, and even private insurance - which means that we taxpayers are ultimately the ones paying the price when costs are higher than they should be. Although, to be perfectly clear, our real goal ought to be full decriminalization. Many people, in resisting vaccine mandates, came to the correct conclusion that the government has no right to force you to ingest anything. That is correct - but the reverse is also true, government has no rightful authority to forbid you to peacefully ingest what you choose.",
                        ],
                        [
                            'name' => "Listen to YOU, not to corporate donors.",
                            'stance' => "",
                        ],
                    ],
                ],
                [
                    'candidate' => [
                        'name' => 'Evan Vickers',
                        'dob' => null,
                        'bio' => "As a lifelong resident of southern Utah, I know first-hand the unique needs of our area, as I grew up here, I've raised my family here, and I've built successful businesses here and employ nearly 50 people. This area, and the great people who live here, made me who I am and have given me and my family so much. I am very proud to call southern Utah my home.",
                        'contact_email' => '',
                        'contact_phone_number' => null,
                        'state' => 'Utah',
                        'party_name' => 'Republican',
                        'site_link' => 'https://voteevanvickers.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://voteevanvickers.com/',
                    ],

                    'opinions' => [
                        [
                            'name' => "Local Control:",
                            'stance' =>"Throughout my years of service in the Utah Legislature, I have consistently fought back against federal intrusion in our education system, on our lands and in our healthcare. Local control is at the heart of a well-run, effective, and efficient government, and I will not stand for the federal government attempting to take away our authority or govern that which should be managed locally and at the state level."
                        ],
                        [
                            'name' => "Leadership",
                            'stance' =>"During my time at the Utah Legislature, I have sponsored and passed 89% of the bills I have put forth, on critical issues like public lands, water, wildland fire, small business, workers compensation, tax issues, and election law, to name a few. It's important to remember that sponsoring a bill, no matter how little or how many of them, is relatively easy, but it's actually passing those bills that takes tremendous dedication, knowledge, extensive research, and relationships with lawmakers and leaders and constituents built on mutual trust and respect. An effective legislator recognizes that working all alone nothing gets accomplished, but working together with the highest of ethics and values brings about great things, particularly so for our rural area. And that is how I have represented you at the Utah Legislature."
                        ],
                        [
                            "name" => "Economic Vitality & Lower Taxes",
                            "stance" => "The only way we can solve the long-term funding issues in our state is to grow the economic activity and increase jobs. More taxes will never be the answer. I received the fourth highest score in the State Senate from the Utah Taxpayers Association because I have a proven track record supporting economic growth through wise tax policy. I know from personal business experience, as well as my experience serving on the Cedar City Council and Economic Development Board, that most of our job growth comes from small business expansion. When my wife Chris and I bought our first drug store in 1996, we had eight employees, and five of them were my family. We now have two pharmacies and drug stores, two retail stores and 50 employees. If we had 10 businesses that had the same track record as ours then we would have the equivalent of a large company. We have to make sure that our tax and regulation structure is conducive to small business growth. We also have to position our local economic development boards in a position to benefit from the state resources provided by the Governor's Office of Economic Development.",
                        ],
                        [
                            "name" => "Energy",
                            "stance" => "Nearly 70% of our state is under federal control, and they have locked the door pretty tight on what we can and can't do on these federal lands. I am a firm believer that those who use the lands as a resource are the best stewards; whether it be the ranchers and farmers, or the sportsmen and energy producers. These people appreciate the fact that they can't just use up this resource and throw it away. They have to preserve the lands in order to use it over and over again for our benefit. I support and will continue to support legislation that pushes the federal government to give more control to the state of Utah over what is allowed on our public lands. This can lead to more gas, oil and coal production which can help our local economy as well as supply critical energy resources.",
                        ],
                        [
                            "name" => "States Rights",
                            "stance" => "The framers of our Constitution intended for the majority of powers to be at the state level, not at the federal level. I strongly support the 10th Amendment. I am a strong proponent of local control, as the more close people are to decisions made, the better the decisions are. For example, I know that if Utah was allowed to manage public lands, we would do a far better job of utilizing these resources than the federal government.",
                        ],
                        [
                            "name" => "Immigration",
                            "stance" => "This has been a very controversial and emotional issue the past few years.  First of all, the federal system is broken, as the federal government continues to refuse to enforce the border and our current immigration laws. This puts great pressure on the states to deal with the situation. I have supported and will continue to support enforcement provisions that allow us to get rid of the criminal element of illegal immigration. I also support E-Verify. In fact my business uses E-Verify on all of our employees. That is current Utah law.  We do need to pass a modification to the state E-Verify law to conform with some constitutional issues in the current law; as we can withhold a business license but we can't fine them as our current law does.",
                        ],
                        [
                            "name" => "Government Spending",
                            "stance" => "I recognize that there are basic functions that state government has to take care of. I am not in favor of instituting new, extravagant programs with state dollars. I support basic needs first and foremost. There are resources that are distributed to different areas of the state for needed projects and programs.  I feel it is my responsibility to stay connected with my local officials and constituents so that I know what the local needs are and then advocate for them in the Legislature. I also recognize that it is my responsibility to ask the questions: \"Is this really needed?\" or \"Is there a return on investment?\"",
                        ],
                        [
                            "name" => "Healthcare",
                            "stance" => "Because of my profession, I have dealt with a lot of healthcare issues in the state, and as such, I feel that I am well-positioned to understand what is good and what is bad about healthcare in Utah. We do many things right with regards to healthcare. We continue to be able to treat patients with much less cost than other states, while still achieving the same outcomes. However, the overall approach to healthcare needs to be fixed. As long as we stay with a fee for a service model then costs will continue to go up.",
                        ],
                        [
                            "name" => "Education",
                            "stance" => "I am the first college graduate in my family. I have been very fortunate to be able to help all five of my children get college degrees; two have Doctorates in Pharmacy and work in our family businesses. And I currently serve as Chair of the Higher Appropriations Committee, which oversees the budgets and direction of all of Utah's higher education institutions. We are very fortunate to have two excellent schools of higher education in southern Utah with Dixie State College and SUU. These schools are cooperating very well together on a number of fronts and have different missions, which allow the students here in our area to have excellent higher education choices. They also are a big catalyst for economic development in southern Utah.",
                        ],

                    ],
                ],
            ]
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
        $office = PublicOfficePosition::create([
            "name" =>  'State Senate',
            "years_per_term" => 4,
        ]);
        foreach($this->data as $senate) {
            // Create the location
            $location = Location::create([
                'name' => $senate['location'],
                'type' => 'state_senate',
                'state' => 'Utah',
            ]);
            // Create the ballot
            $ballot = Ballot::create([
                'location_id' => $location->id,
                'office_id' => $office->id,
                'voting_date' => Carbon::createFromDate(2022, 11,8),
                'has_single_runner' => count($senate['candidates']) == 1 ? true : false,
            ]);

            // Add each candidate
            foreach($senate['candidates'] as $candidate_info) {
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
                    'sources' => $candidate_info['manual_candidate']['sources'],
                ]);
                //Add opinions
                foreach($candidate_info['opinions'] as $opinion) {
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
        if(Storage::disk('public')->exists($photo_path . '.jpg')) {
            $candidate->profile_photo_path = $photo_path . '.jpg';
            $candidate->save();
        } else if(Storage::disk('public')->exists($photo_path . '.jpeg')) {
            $candidate->profile_photo_path = $photo_path . '.jpeg';
            $candidate->save();
        } else if(Storage::disk('public')->exists($photo_path . '.JPG')) {
            $candidate->profile_photo_path = $photo_path . '.JPG';
            $candidate->save();
        } else if(Storage::disk('public')->exists($photo_path . '.webp')) {
            $candidate->profile_photo_path = $photo_path . '.webp';
            $candidate->save();
        } else if(Storage::disk('public')->exists($photo_path . '.png')) {
            $candidate->profile_photo_path = $photo_path . '.png';
            $candidate->save();
        } else if(Storage::disk('public')->exists($photo_path . '.PNG')) {
            $candidate->profile_photo_path = $photo_path . '.PNG';
            $candidate->save();
        }
    }
}
