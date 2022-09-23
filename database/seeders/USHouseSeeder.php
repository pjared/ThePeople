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

class USHouseSeeder extends Seeder
{
    public $data = [
        [
            'location' => 'District 1',

            'candidates' => [
                [
                    'candidate' => [
                        "name" => 'Rick Jones',
                        "dob" => null,
                        "bio" => "",
                        "contact_email" => 'rickjonesforcongress@gmail.com',
                        "contact_phone_number" => null,
                        'state' => 'Utah',
                        "party_name" => '',
                        'site_link' => 'https://www.electrickjones.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.electrickjones.com/',
                    ],

                    'opinions' => [
                        [
                            "name" => "ADVANCE AMERICAN IDEALS",
                            "stance" => "Our seminal document, the Declaration of Independence, boldly proclaims that governments derive \"their just Powers from the Consent of the Governed.\" This requires that we protect voting rights and expose and fight partisan gerrymandering. Gerrymandering has become very egregious: in 2018, though Wisconsin Gov. Scott Walker lost his bid for reelection; he carried 63 of the 99 state Assembly districts. Such gerrymandering completely circumvents and thwarts the ideals that founded this nation. It creates \"elections without representation.\" Moreover, it destroys faith and trust in representative government.",
                        ],
                        [
                            "name" => "FAIR TAXATION",
                            "stance" => "Something is fundamentally wrong when self-proclaimed billionaire Donald Trump can in one year spend 350 times as much paying prostitute porn stars as he does paying federal income taxes. When the wealthiest individuals and corporations avoid paying their fair share of taxes it imposes increased burdens on middle class working families. Recipients of tax cuts worth tens of millions do not use the saved money to support local businesses and eat out more often. Instead the money is used to purchase assets, such as land, contributing to asset price inflation which makes housing less affordable or even out of reach for many.",
                        ],
                        [
                            "name" => "COMBAT CLIMATE CHANGE",
                            "stance" => "Climate change needs to be a priority as it affects our quality of life for us and future generations.",
                        ],
                        [
                            "name" => "REDUCE HEALTH CARE COSTS",
                            "stance" => "Americans should not have to pay higher prices for prescriptions than people in other nations do.",
                        ],
                    ],
                ],
                [
                    'candidate' =>[
                        "name" => 'Blake Moore',
                        "dob" => null,
                        "bio" => "Born and raised in Ogden, I learned responsibility and hard work from my dad; and all about optimism and service from my mom. I got picked on plenty as the youngest of five kids, but now we just debate who was the best athlete. I was. If they want to refute that, they are welcome to run for Congress. Simply put, sports taught me the importance of relying on those around you, and that constant improvement is possible. During my senior year, I was awarded the Wendy's National High School Heisman, honoring high school seniors for athletics, academics, and citizenship.",
                        "contact_email" => '',
                        "contact_phone_number" => null,
                        'state' => 'Utah',
                        "party_name" => 'Republican',
                        'site_link' => 'https://electmoore.com',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://electmoore.com',
                    ],

                    'opinions' => [
                        [
                            "name" => "Energy",
                            "stance" => "Many Utahns can no longer afford to fill up their gas tanks with gas above $5 a gallon. The Biden administration passes the buck by blaming everything except its own anti-energy agenda, but we need an all-of-the-above approach to our energy policy to keep prices down. As Ranking Member of the Oversight and Investigations Subcommittee of the House Natural Resources Committee, I am leading House Republican efforts to end the Biden energy ban and lower dependence on foreign oil and gas. My legislation would rebuild American energy production, require the timely issuance of permits to develop energy and approve pipelines, end Biden's regulatory attacks on energy producers, and lower skyrocketing gas prices so that Utahns aren't suffering from Biden's executive overreach. Limiting U.S. energy development and leaning on foreign countries to produce and sell energy is not environmentally friendly; it puts our environment, economy, and national security at risk.",
                        ],
                        [
                            "name" => "Pro-Life",
                            "stance" => "I am proud to be the only candidate endorsed by the Susan B. Anthony List and National Right to Life. I pray that Roe v. Wade will be overturned to return to the states their ability to restrict abortion and protect families. We should work for the day when abortion is unthinkable, and I am committed to ensuring that expecting women have the resources and support they need to bring new life into the world. I have proudly cosponsored and voted for legislation to stop taxpayer funding of abortion, coordinate resources for low-income expecting mothers, protect the conscience rights of healthcare providers, and more.",
                        ],
                        [
                            "name" => "Afghanistan",
                            "stance" => "Americans deserve to know what went wrong in Biden's disastrous handling of the Afghanistan withdrawal. Last August, I introduced the Afghanistan Accountability Act to immediately identify the breakdown between Biden, the DOD, and the intelligence community that facilitated this crisis. The bill was incorporated into the National Defense Authorization Act, along with provisions to prohibit the DOD from providing any financial support to the Taliban, require plans to rescue Americans still in Afghanistan, and identify and recover U.S. military equipment left behind. I was proud to be appointed to Leader McCarthy's task force to hold Biden accountable for the Afghanistan withdrawal and protect U.S. national security. My team and I spent the summer and fall helping evacuate Americans and Afghans from the country, and our casework continues to this day. It is unconscionable that the Biden administration left Americans to die because it failed to devise a plan for a responsible withdrawal, and I will keep pressing on the Armed Services committee until we have all the answers we are demanding and we ensure there are systems in place that will prevent a foreign policy crisis of this magnitude from ever happening again.",
                        ],
                        [
                            "name" => "Healthcare",
                            "stance" => "Utah has one of the country's most innovative healthcare sectors. I am helping grow this industry, supporting healthcare workers, and fighting for choice and transparency in our healthcare system to empower our families. I am cosponsoring legislation to lower health prices and prescription drug costs with competition, make healthcare more affordable, address failures in medical supply chains and shore up American manufacturing, and expand access to telehealth and cures.",
                        ],
                        [
                            "name" => "China",
                            "stance" => "Maintaining our competitive edge against China should be one of Congress's top priorities, and I am committed to strengthening our national security, building up U.S. manufacturing, securing our supply chains, and defending American intellectual property. In an exceptional move for a freshman legislator, House Leadership selected me to serve alongside committee chairs and ranking members as a conferee on the House-Senate conference committee to counter China and maintain America's competitive edge in science and technology. We must ensure America continues to boast the world's strongest, most diverse economy and military as our global competitors seek to undermine international norms.",
                        ],
                        [
                            "name" => "Immigration",
                            "stance" => "President Biden's border crisis endangers our national security, and I have spent countless hours holding DHS Secretary Mayorkas accountable for failed policies. From undermining the Remain in Mexico Policy to failing to address the fentanyl crisis that is killing Americans, this administration has abdicated its basic responsibility to secure our borders. I voted to restrict the Biden administration from sending checks to people who violated U.S. immigration laws and I defended the use of Title 42, which gives our Border Patrol more tools to manage our border. I recently visited the border and I also invited a border patrol agent to testify in front of the Oversight and Investigations Subcommittee about how Biden's border policies are allowing drugs to flow across our border and into our communities.Legal immigration is the only way that people should enter our nation. As we enhance border security, we can also look at streamlining the immigration system more broadly. Immigrants play an important role in our society and economy, and we can welcome and encourage lawful entry into our nation for those who seek to contribute to this great nation without harming the American workforce.",
                        ],
                        [
                            "name" => "Inflation",
                            "stance" => "I convened a debt and deficit task force in Ogden with local community leaders to create a roadmap on how to grow the economy, save our vital programs for vulnerable Americans, and better target America's spending. We are committed to drafting productive solutions that represent Utah's First District, and we are publishing a strategy document to lay out our concerns and recommendations. The sad reality is that inflation is costing hardworking Utah families $511 per month. Thanks to tax-and-spend policies that are contributing to inflation, Utahns are grappling with the rising costs of gas, groceries, utilities, housing, and clothing. I am committed to finding solutions to harmful spending policies so Utahns can keep more of their own money in their own pockets and save for their futures. In Congress, I support the Federal Agency Sunset Commission Act and the Fiscal State of the Nation Resolution to make government more efficient and force legislators to face the true fiscal health of our government. I also am working to recoup the hundreds of billions of dollars from COVID-19 relief funds that were never obligated. We should use these wasted dollars for debt reduction, not additional spending. Reversing the debt-to-GDP ratio is at the top of my fiscal agenda.",
                        ],
                        [
                            "name" => "Funding the Police",
                            "stance" => "Police officers are the backbone of our communities, and I have been honored to host multiple roundtable discussions with First District law enforcement officials to discuss challenges with hiring and retention, funding streams, and fighting crime. I joined colleagues on wheels for a Back the Blue bike rally at the National Law Enforcement Officers Memorial to honor police officers during National Police Week, spoke at Honor 365's 9/11 Honor Walk in Layton to pay my respects to fallen local heroes, including Ogden Officer Nate Lyday, and am humbled to display a photo of Officer Nate Lyday in my office to remind me everyday of how we can better protect those who sacrifice all to protect us. I am horrified that America experienced more officer deaths in the line of duty in 2021 than in any year since 1995. We are facing a crime crisis with record police shootings and homicide rates in 2021, and I am fighting radical efforts to defund the police because keeping communities safe should be at the center of all we do.",
                        ],
                        [
                            "name" => "Ukraine",
                            "stance" => "I am grieved by Russia's war in Ukraine, and I have used my leadership positions on the House Natural Resources and Armed Services Committees to support Ukraine and hold Russia accountable. I am disappointed that President Biden failed to provide meaningful lethal aid to Ukraine or enact costly sanctions ahead of Russia's invasion and has continued to move the goal post on full and effective sanctions on Russian banks and oligarchs. Nonetheless, I believe we must work across the aisle and with our allies and partners across the world to deter aggression, prosecute Putin for his war crimes, and enforce the rules-based international order. One of the simplest responses to this invasion should be to reduce dependence on Russian energy so American allies stop financing Putin's war. As Ranking Member of the House Natural Resources Oversight and Investigations Subcommittee, I am leading Republican oversight of President Biden's destructive energy policies. In this critical position, I am confronting Russia's invasion of Ukraine by urging the Administration to lift oil and gas restrictions on federal land, rebuild U.S. energy production, and provide oil and gas to our European allies. I am also drafting legislation to enhance American energy production; cosponsoring strategic legislation to impose costly sanctions on Russia and support lethal aid to Ukraine; and leading the way to modernize our military and maintain our competitive advantage on the House Armed Services Committee.",
                        ],
                        [
                            "name" => "Election Integrity",
                            "stance" => "Ensuring our elections are safe and secure should be a top priority for all Americans. In a way, I began helping to secure Utah's elections long ago. Growing up, my mom enlisted me to help sort ballots when she served as a clerk in the Weber County Clerk's Office. In Congress, I have worked hard to support election integrity by opposing H.R. 1, the Democrats' egregious legislation to give the federal government control over state elections, overturn voter ID laws, and allow taxpayer funding for political campaigns. I have welcomed Weber County's Clerk and Auditor Ricky Hatch to testify before members of Congress and share Weber County's secure voting processes. I have also spoken out against corporate boycotts of states like Georgia that have secured their election systems. I will safeguard the constitutional right of state and local officials to administer their own elections and ensure that each and every legal vote is counted.",
                        ],
                        [
                            "name" => "Mandates",
                            "stance" => "Federal vaccine mandates have no place in the United States of America, and I have worked hard to fight President Biden's federal overreach at every turn through legislation, letters to the Biden administration, court briefs, and more. These mandates infringe on our individual liberties and force Americans out of the workplace at a time when inflation is skyrocketing. Mandates are counterproductive and an affront to struggling American families. I am glad the Supreme Court overturned Biden's sweeping private employer mandates, and I was proud to file an amicus brief arguing that the Biden administration overstepped its authority. I believe we need to communicate the effectiveness of vaccines and other public health measures in a politically neutral manner and also factor in the role of natural immunity when setting public health measures. In addition, I used my role on the House Armed Services Committee to ensure that service members who chose not to take the COVID-19 vaccine could not be dishonorably discharged from the military, and to require DOD to establish standards under which service members could request vaccine exemptions.",
                        ],
                    ],
                ],
            ]
        ],
        [
            'location' => 'District 2',

            'candidates' => [
                [
                    'candidate' =>[
                        "name" => 'Cassie Easley',
                        "dob" => null,
                        "bio" => "Cassie Easley is a wife, mother and grandmother, and is active in church. She has lived in Utah for 19 years, 10 in Parowan where she raised her kids as a single mom. She moved to Enoch 9 years ago when she married her husband and joined their families. Her dad is a retired Navy Veteran, so she spent her childhood living in cities near Naval Bases. She has a great respect for our Military and knows first-hand what the families are going through while their loved ones are serving. Having lived in both larger cities and rural areas she feels it gives her a better insight into the varied needs of this district.",
                        "contact_email" => '',
                        "contact_phone_number" => null,
                        'state' => 'Utah',
                        "party_name" => 'Constitution Party',
                        'site_link' => 'https://cassieforcongress.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://cassieforcongress.com/',
                    ],

                    'opinions' => [
                        [
                            "name" => "Strong Proponent of the 2nd Amendment",
                            "stance" => "",
                        ],
                    ],
                ],
                [
                    'candidate' =>[
                        "name" => 'Jaymac McFarland',
                        "dob" => null,
                        "bio" => "Jay Mcfarland has spent the last twenty years fighting for principled politics as a talk radio show host in multiple markets. He believes that there is no problem in this world that can't be solved if people are willing to have respectful conversations about their disagreements. Jay has learned how to change hearts and minds by focusing on common ground between all his positions, and treating everyone with dignity and respect. Jay is a visionary leader and innovator who always strives to improve his skills.",
                        "contact_email" => 'contact@jaymacforutah.com',
                        "contact_phone_number" => '(801) 382-9964',
                        'state' => 'Utah',
                        "party_name" => 'United Utah Party',
                        'site_link' => 'https://www.jaymacforutah.com',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.jaymacforutah.com',
                    ],

                    'opinions' => [
                        [
                            "name" => "Limited Government",
                            "stance" => "The smaller the government is the more representation we each will have. When programs that should be local are given to the federal government we each lose our ability to control or effect change over said program. The Tenth Amendment of the Constitution says, \"The powers not delegated to the United States by the Constitution, nor prohibited by it to the States, are reserved to the States respectively, or to the people.\" The founders knew that a bloated federal government would be impossible to control. It is just common sense that the more local an issue is, the more the people will be engaged in the political process. We must resist all efforts to increase the size of the federal government knowing that states and their people are much better stewards of their resources and programs.",
                        ],
                        [
                            "name" => "Fiscal Responsibility",
                            "stance" => "The federal deficit is out of control and neither side is showing a willingness to turn this ship around. A significant portion of every tax dollar you pay goes directly to debt. For each new generation their tax dollars will be of less value because our elected officials cannot resist the temptation to mortgage our children's future. No new programs should be implemented without a clear path to fund it and we should resist any new expenditures before we begin to pay down the current debt.",
                        ],
                        [
                            "name" => "Protecting the Environment",
                            "stance" => "Instead of getting caught up in the debate about whether or not climate change is man-made, let's focus on the common goals of clean water, clean air, and energy independence. We all want these things for ourselves and for future generations. Through a combination of government incentives, corporate innovation, and responsible citizenry we can accomplish these goals in our lifetime. And we can do so without destroying commerce or jobs. Let each generation be able to declare that they left this planet better than they found it.",
                        ],
                        [
                            "name" => "Immigration Reform",
                            "stance" => "Controlled immigration is a necessary and healthy part of the continued growth of our nation. However, uncontrolled and illegal immigration brings with it many damaging elements that can be eliminated with comprehensive immigration reform. Creating a clear path for employers to be able to hire immigrants while at the same time building deterrents to illegal immigration will go a long way in removing the detractors for illegal immigration. Having a strongly enforced immigration policy is essential in these days of global pandemics, terrorist threats, and economic uncertainty. Those who are willing to following the rules should be welcomed with open arms. We should never leave behind compassion for our fellow human beings who are seeking access to the American Dream.",
                        ],
                        [
                            "name" => "Fighting for Utah",
                            "stance" => "The primary goal of any elected member of congress should be to fight to protect the rights of the state they represent. Giving away state powers to the federal government should only be allowed in the most exigent of circumstances. JayMac will fight to bring home powers that have been usurped by the federal government.",
                        ],
                    ],
                ],
                [
                    'candidate' =>[
                        "name" => 'Nick Mitchell',
                        "dob" => null,
                        "bio" => "Nick was born in February 1991 and was adopted right after birth, moving with his family to Bakersfield, California. Growing up black in a predominantly white community had its challenges. He is grateful for the experience because it made him who he is today. After moving to Utah, he attended Timpview High School where he participated in several extracurricular activities, including lacrosse, football, and theater. He graduated high school and served an LDS mission to Baguio, Philippines, where he was one of the first African Americans to serve.",
                        "contact_email" => '',
                        "contact_phone_number" => null,
                        'state' => 'Utah',
                        "party_name" => 'Democrat',
                        'site_link' => 'https://www.nickmitchellforcongress.com/about',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://www.nickmitchellforcongress.com/about',
                    ],

                    'opinions' => [
                        [
                            "name" => "SMALL BUSINESSES",
                            "stance" => "I believe we are seeing a bump in the economy currently because of all the new businesses created during the pandemic. If we allow people to pursue their passions and start businesses, it only benefits the economy. Being a small business owner is arduous. We should provide them, not large corporations, with assistance. If we prioritize small businesses over corporations, we will see a massive bump in the economy. The rich hoard money instead of circulating it in the economy to avoid taxes, whereas small businesses tend to circulate money and contribute taxes in their local community. When there were more small businesses and fewer corporations, the economy was more stable. If we put all our eggs in one basket and it fails, like the housing crisis in 2008, the entire economy collapses. If we diversify, like a mutual fund, then if one basket fails, we have others that can absorb the loss. Right now, if the FAANG stocks bubble bursts, our economy could crash because these stocks hold around 15-20% of the S&P 500. This is nearly directly-equivalent to our economic performance. One avenue to help the economy is by creating a more robust government program through the SBA (Small Business Association) that helps with loans. It would be funded by making the rich and corporations pay their fair share of taxes. Working-class outrage starts with wealth distribution. We need to focus on providing living wages. That will help the economy because workers will spend more, adding money to the economy. The rich hoarding wealth only hurts the economy.",
                        ],
                        [
                            "name" => "INFLATION",
                            "stance" => "Inflation is measured by the increase or decrease of service and product prices across the country, and this is culminated in the PCE (Personal Consumption Expenditures) price index. Private corporations adjust prices based on supply and demand, and they often increase prices to increase profit. We operate under a capitalistic economy, so the government can't, and I believe shouldn't, control this. Corporations, especially those in the oil industry, are causing the current rise in inflation. As we recently saw, fuel prices almost doubled due to the supply shock of the war in Ukraine. While domestic gas production was at an all-time high, oil companies raised prices anyway and raked in record profits, all off the backs of everyday Americans. This increased the price of transporting goods, which increased the price of products. The current rise of inflation is the fault of corporations. Also contributing to the record inflation is the rising cost of housing (22.6% of PCE), medical care (22.3% of PCE), and insurance. These are private industries, so there is little the government can do to combat inflation.",
                        ],
                        [
                            "name" => "MAGAZINE SIZE",
                            "stance" => "I used to own extended magazines. As mass shootings continued, I couldn't, in good conscience, keep them because of their potential to hurt people. The data shows that most defensive shootings happen within 20 feet, with 1-3 shots fired. With this knowledge, why do we need 20-round magazines? Plain and simple: we don't. If you need 20 rounds to put three on target, on behalf of the American people, please do not carry.",
                        ],
                        [
                            "name" => "ASSAULT RIFLES",
                            "stance" => "There is no practical reason to own an assault rifle as a citizen. They are incredible pieces of technology but their only practical use is for offensive shooting. That's it. As gun owners, we need to acknowledge that while we wouldn't use them for evil, others will. And one day, it might be someone you love who loses their life because a weapon of war was used on American soil. Some will argue for citizen ownership of assault rifles as protection from the government. Quite frankly, battles are no longer won by numbers; they are won by technology. And the technology wielded by the federal government outmatches any number of assault rifles. Some will argue, then, for ownership as protection from foreign invasion. Once again, the technology of the U.S. military is significantly stronger than the firearms owned by citizens, and the military will protect the nation from foreign enemies. With regulation, we have a couple of options to consider. Some want a ban on assault rifles, which most gun owners oppose. If we don't come to the table with some solutions, that‘s exactly what could happen. Semi-automatic guns need magazines to work. Those are not currently regulated, so we must start tracking magazines. If we only allow the purchase of one magazine per year per registered gun, it will take someone with ill intentions significantly longer to get the items needed to commit a mass shooting. There is no need for extended magazines, so by cutting down the number of rounds, we will save lives if a tragedy occurs. Limiting magazine capacity will provide an opportunity to escape or fight back during the reload. Banning high-capacity magazines reduces the number and lethality of mass shootings. This compromise will allow citizens to own these firearms while ensuring common-sense, protective measures.",
                        ],
                        [
                            "name" => "Concealed Carry Permits",
                            "stance" => "States getting rid of concealed carry permits should have lawsuits brought against them. Shootings have already increased. Removing CCWs puts police and citizens in danger. Now, every stop is a potentially-violent interaction because police don't know who has a gun and who doesn't. If anyone could have a gun, the police can't know who the perpetrator is. Tragically, this isn't hypothetical. After a man shot an active shooter, he was then killed by police while attempting to disarm the gunman. More people are going to get hurt and killed. Deregulating something with the power to kill only helps those who wish to do harm. As gun owners, we need to step up and take on some social responsibility. If you disagree with my ideas, I invite you to discuss your proposed solutions with me. We must do something to end the epidemic of violence. We must be part of the solution, not the problem.",
                        ],
                        [
                            "name" => "Healthcare",
                            "stance" => "First, we need to make it illegal for the big three (pharmaceuticals, hospitals, and insurance) to communicate to conspire and profiteer. Competition makes prices lower. Secondly, we must cap the amount hospitals can charge on products to 20-30% instead of 300%. This would only apply to products, not the employees. Also, we need to raise the threshold on which doctors and hospitals can be sued. That way, insurance for doctors and hospitals goes down. Medicine is complex; being able to sue a doctor or hospital needs to be raised to the level of egregious and blatant acts. This will also help doctors and hospitals with mitigation medicine instead of reactionary medicine, meaning they can be more aggressive in treatment because the fear of being sued is gone. Third, pharmaceuticals need to be incentivized to make new medicines like antibiotics, cancer treatments, and things of this nature. We should extend the patent life to a longer period, so they don't have to charge as much but still can recoup the costs of R&D (research and development) over a longer period because R&D is expensive. This will make the company profitable, especially for small biotech companies, so they don't get bought out by larger ones. Hospitals and insurance won't approve the medicine if it's too expensive. Healthcare is an industry that isn't going anywhere. It doesn't need more income each year to appease stockholders about growth. Healthcare shouldn't bankrupt people. It should not be one of the biggest holders of debt in America. I believe universal healthcare is guaranteed in our Declaration of Independence. It states Life, Liberty, and the Pursuit of Happiness. ",
                        ],
                        [
                            "name" => "UNIONS",
                            "stance" => "People in power often want to hoard money and power for themselves while their workers suffer. Unions provide a check. If business owners treated their employees like humans instead of cogs in a machine, there wouldn't be a need for unions. The research is clear; when employees are treated well and paid a living wage, turnover drops, productivity increases, and company revenue grows. It's simple: workers want to be seen, heard, and acknowledged. Unions give a clear line of communication between workers and business owners. The people who do the job every day know how to improve it and can provide owners with valuable feedback. Owners have to be humble and accept the suggestions of their employees.",
                        ],
                        [
                            "name" => "WORKERS' COMPENSATION",
                            "stance" => "While this pay isn't taxed, injured employees only receive a fraction of their salary. It needs to be 100%. I've heard too many stories of people losing their homes and not having food in the fridge due to the recklessness of companies. I have experienced this personally, telling a manager I would be hurt if certain safety measures were not taken. The manager ignored me and sent me back into the same situation. Within minutes, truck parts fell on my head and neck, causing a traumatic brain injury. This injury ultimately caused three pulmonary embolisms and a heart attack. I went on workers' compensation and needed four neck surgeries. We need to give OSHA more power to shut down businesses for safety violations. We need to make complaints to the EEOC, OSHA, and the labor commission easier, because it's usually one person going up against a company. From my own experience, the power and financial imbalance makes this process extremely difficult. The government needs to step up and create labor laws that empower the employee, not the employer.",
                        ],
                        [
                            "name" => "RIGHT-TO-WORK",
                            "stance" => "There are many misconceptions about Right-to-Work laws. Politicians who back them are often in the pocket of corporations that undermine the foundations of unions. No one is forced to join a union; in fact, there are laws against that. Right-to-Work laws empower corporations to hinder union formation and break the back of everyday workers by impeding collective bargaining and safer working conditions.",
                        ],
                        [
                            "name" => "WATER CONSERVATION",
                            "stance" => "Our water sources are drying up' it's evident from Lake Powell, the Great Salt Lake, and Lake Mead. Chris Stewart rejected the science of climate change, denying it for years. By waiting until the problem becomes on the verge of catastrophic, the cost of fixing it increases exponentially. We should have been working on this a decade ago. We need to reduce our water usage across the country. In Utah, where most of our water is used for agriculture, we need to invest in technologies to reduce water for farming. As citizens, we also need to reduce our water waste. We must work together to fix this problem, and we need innovation to recycle water and reduce water waste.",
                        ],
                        [
                            "name" => "Climate Change",
                            "stance" => "Climate change is real, and it is causing extreme weather to worsen. If you put holes throughout your home, exposing it to the elements, it would get hotter in the summer and colder in the winter. This is happening in our atmosphere. There is no denying this reality. We need concerted action to stem the bleeding. Hopefully, it's not too late. On this issue, some are worried about jobs, but the energy sector doesn't lose jobs; they transform. The very nature of energy is transformative, and so is the industry. That's what will happen when we transition to renewable energy. We need to invest in direct carbon capture technology. This technology pulls CO2 out of the air through chemical reactions. If we set up renewable energies and direct air capture technologies in our rural communities, it will help revitalize the rural economy and provide more jobs in those communities.",
                        ],
                        [
                            "name" => "SUBSIDIZING COLLEGE",
                            "stance" => "The current teacher shortage has been exacerbated by several factors, one of which is the unaffordability of education. To combat this, the cost of college must be subsidized by both the university and the government. For many, college is cost-prohibitive and forces them into debt. Negating this will allow more would-be teachers to enter classrooms. Teachers can change lives. I did theater in high school, and my teachers saw past my façade and knew I was just lost, trying to navigate a complicated path. We need more teachers like that who genuinely care and want to teach, but are prohibited due to the cost. One day, I want to give back and excite the next generation about science as a high school teacher.",
                        ],
                        [
                            "name" => "TEACHER PAY",
                            "stance" => "In addition to removing the financial barriers to entering the education field, we must pay teachers more. Every day, they juggle the varied needs and abilities of students in large classrooms, heavy workloads, and recently, pressures to teach incomplete history and science. Combine that with insultingly-low pay, it is no surprise that 42% of Utah teachers left the profession within five years. As a nation, we are taking advantage of our teachers. This must stop. We need to give teachers a stipend, so they won't need to pay for classroom materials out of their own pocket. By investing in our teachers, we invest in our children and the future of the state of Utah.",
                        ],
                        [
                            "name" => "EXTRACURRICULAR ACTIVITIES",
                            "stance" => "We don't need to slash extracurricular activities — they help kids figure out what they want to do in life. Extracurricular activities are not extra; they are vital to a child's education. Research shows participation positively affects graduation rates, community involvement, and academic and social development. We must provide more funding, at both the state and national level, to ensure students have access to these programs. Extracurricular activities benefit students in many ways: Arts education improves academic and social development, according to new research. Specifically, more art experiences can lead to enhanced school engagement, better standardized writing scores, reduced disciplinary problems, and increased empathy and compassion for others. Sports team participation is linked to higher GPAs for all students, and female high school athletes are three times more likely to graduate than their peers. In addition, physically-active children, on average, have higher test scores and self esteem, are more likely to attend college, and have 7-8% higher annual earnings once they enter the workforce. Student government, like many other extracurricular activities, can provide students with opportunities to build personal and professional relationships, practice teamwork, and build their resumes for both college applications and the workforce.",
                        ],
                        [
                            "name" => "DE-ESCALATION",
                            "stance" => "The most pressing concern is preventing unnecessary death. Let's start by acknowledging the police have incredibly difficult jobs. It's high stress and dangerous, and they are needed in our communities. To do their jobs, police need better de-escalation equipment. Currently, the only non-lethal, de-escalation option they carry are tasers. These require close proximity to the suspect, have high fail rates, and can only be used once. Their only other option is a 9mm with hollow-point ammunition, which is designed for concussive damage. The police need a non-lethal option that can be carried on-person. A potential option is one I have started creating called a diaper round, which I would decline to profit from because I don't believe people should profit off life. In an altercation, the key is space between the officer and whomever they are trying to arrest. As long as there is distance, there is no immediate threat and officers can de-escalate. Police can move bystanders to safety and corral the perpetrator. If a round needs to be fired, the diaper round would break ribs, which are easier to fix bullet holes. Being a 6'2\", 240-pound black man, I would rather have broken ribs than a bullet hole. With this device, if the officer is wrong, they can be given a sentence that's not for murder and the person who was shot will be alive and can be compensated. I believe in most cases, no officer wants to kill someone. We need to give them tools to de-escalate.",
                        ],
                        [
                            "name" => "EDUCATION AND RESOURCES",
                            "stance" => "Finding officers right now is a struggle, but we must raise the bar when hiring them. They have the ability to take life. We must hold officers to a higher standard, and we should join the states that require them to have at least an associate's degree. We also need more social service response units. Not every situation requires police officers, especially those dealing with mental health events. Salt Lake City has started implementing teams to address these events, but the program is underfunded. Increasing funding and training can help the police, those in crisis, and those calling 9-1-1. Because of the high-stress nature of their jobs, mandatory counseling sessions should be made for every officer so they can talk, confidentiality, about the stresses of the job and the trauma they see daily. Officers have the highest suicide rate of any profession, so a counseling program is needed to take care of our officers.",
                        ],
                        [
                            "name" => "Tax Reform",
                            "stance" => "Whenever we measure the wealth of the ultra-rich, the valuation is done based on their assets which usually are considered \"unrealized gains.\" These are only taxed when sold, becoming \"realized gains.\" Assets used to measure your wealth should be taxed. The people who benefit from this tax loophole like to think of themselves as the embodiment of the American dream. If they want to be that, they should pay their fair share of taxes. Since they will be paying taxes yearly off their net gains, we would need to drop the tax rate from the proposed 39.6% or 43% under the Biden Plan and the current scaled system (0%, 15%, 20%) to a flat rate of 25%. This would only apply to long-term capital gains. Changing capital gain laws will have the desired effect most Americans support because the ultra-rich overvalue their properties to borrow money against them to avoid paying taxes. If we tax the gains of the valuation of their assets from the previous year, they won't want to overvalue a property or they will have to pay more taxes on it. In addition, I support looking into providing tax breaks for individuals and corporations that pay a living wage to their employees to incentivize living wages.",
                        ],
                        [
                            "name" => "Pro Choice",
                            "stance" => "I'm the only candidate running to represent Utah's Second Congressional District that is outspokenly pro-choice. Access to abortion is a fundamental right, and the decision should be between an individual and their healthcare provider. The Supreme Court rolling back precedent from a previous court has never been done before. With the decision now returned to the states, we need a ballot initiative so the people can vote on it like Kansas did, rather than rely on a trigger law forced upon the state by politicians. The voice of the people needs to be heard on this issue. We must codify Roe v. Wade because it is a fundamental right that needs protection.",
                        ],
                        [
                            "name" => "ABORTION V. ADOPTION",
                            "stance" => "Some will argue that the answer to abortion is adoption. I was adopted, and I've had an in-depth conversation with my birth mother as to why she decided to give me up for adoption rather than get an abortion. Her decision was based in faith, which I respect. I also respect that she was able to decide what she did with her own body. Also, being adopted by parents who are not black led to difficulties. Growing up, I never felt like I belonged anywhere. I was too black for the white community, and not black enough for the black community. It was incredibly difficult, and I still battle with it today. People who have adopted children are well-versed in the struggle their children go through. When discussing adoption as an alternative, many fail to discuss the cost of adopting a child. Through a nonprofit agency, it costs between $10,000-$20,000, with the costs skyrocketing with a private agency of upwards of $50,000. While lowering the cost could make adopting a child easier, doing so could open children up to trafficking. It's a dark, sad truth. While many mean well when pitching adoption as an alternative, they fail to look at the complexity of the issue. If you want to make a real difference, go foster or adopt a child from foster care.",
                        ],
                        [
                            "name" => "VOTER FRAUD",
                            "stance" => "It didn't happen on a wide scale. It would have been found. Unlike Representatives who complain rather than problem-solve, I research the issues to determine actionable solutions. Even though there is no evidence of voter fraud, there are steps we can take to ease the minds of those who are concerned about election security. First, link voter rolls to the Census. Then, offset the time frame so the Census finishes a few years before the presidential election. This will allow us to have the most accurate headcount and addresses on voter rolls. For more than 10 years, Utah has been voting by mail. It was secure then, and it is secure now. According to then-Lieutenant Governor Spencer Cox, the few cases of voter fraud in Utah are often parents of missionaries who fill out ballots for their children. According to 2020 reporting from the Deseret News, the state's top officials agree that Utah elections are secure: Amelia Powers Gardner (R), Utah County Clerk/Auditor: \"Anytime you undermine people's confidence in election results without fact-based data, you're actually undermining the integrity of our elections ... (Utahns) can have confidence in our election.\" Justin Lee, Utah Elections Director: \"We haven't seen any kind of widespread instances of fraud.\" Sherrie Swensen (D), Salt Lake County Clerk: \"The president makes it sound like just anybody can produce a ballot and a ballot packet ... I've worked with enough other counties, and they're just not going to accept any weird ballot that shows up.\"",
                        ],
                        [
                            "name" => "VOTER SUPPRESSION",
                            "stance" => "The coordinated effort to prevent eligible voters from participating in democracy is horrifying. The fact that we must address active voter suppression in 2022 is saddening, and the Republicans who claim to \"defend\" the Constitution are actively destroying it by blowing up the democratic process. They are working to suppress votes because they are scared their party is becoming irrelevant. Between the lack of real policy platforms, disregard for the facts, and hypocrisy, they are losing control of their party and people are leaving in droves. They are willing to sacrifice your right to vote so they can stay in power. Unfortunately, this issue hits close to home. Chris Stewart voted to overturn a free and fair election. He voted to disenfranchise millions of voters and degrade our democracy. He voted to take away free agency from voters and betray the trust Utahns gave him. Every American who is eligible to vote should be able to vote. Whether it be for me or against me — that's what Democracy is; the right of we the people, not just some of the people, to vote for our representatives. Get out and vote this November.",
                        ],
                    ],
                ],
                [
                    'candidate' =>[
                        "name" => 'Chris Stewart',
                        "dob" => null,
                        "bio" => "Chris Stewart is the Congressman from Utah's Second Congressional District. He is a multiple New York Times best-selling and national award-winning author, world-record-setting Air Force pilot, and the former owner and CEO of a small business. Chris is one of ten children and grew up on a dairy farm in Cache Valley. He graduated from Utah State University, where he earned his degree in economics. Upon graduation, Chris joined the United States Air Force where he was the Distinguished Graduate (top of his class) in both Officer Training School and Undergraduate Pilot Training.",
                        "contact_email" => '',
                        "contact_phone_number" => null,
                        'state' => 'Utah',
                        "party_name" => 'Republican',
                        'site_link' => 'https://stewart.house.gov',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://stewart.house.gov',
                    ],

                    'opinions' => [
                        [
                            "name" => "Defense and National Security",
                            "stance" => "I believe that the fundamental responsibility of the federal government is to provide for our mutual defense. Recent world events in the Middle-east and North Africa illustrate that we still live in a dangerous world. Hostilities are growing in many corners of the world. History assures us that another security crisis will come. When it does, it is absolutely essential that we be prepared. We must keep our military strong. We must provide our troops with the tools that they need to succeed. President Obama has neglected the military during his administration. As recent events in Ukraine, Iraq and Syria have shown, the world is not ready for a smaller U.S. military. Now we have seen what happens when the U.S. refuses to honor its obligation as the world's only superpower, a nation that has stood for something rare and exceptional for generations. As an Air Force veteran and your Congressman, I am dedicated to ensuring your security and well-being. I can guarantee that no stone will remain unturned as I work to protect American families. Additionally, I am fully aware of the need for government scrutiny and have committed myself to pursuing responsible military spending. By closing overseas bases and streamlining operations, the military can sustain some reductions in spending without hurting national security. I am fully dedicated to safeguarding American safety both home and abroad.",
                        ],
                        [
                            "name" => "Economy and Jobs",
                            "stance" => "As a former small business owner, my employees were like my own family. I know many Utahns that are suffering through what has become the slowest economic recovery since the Great Depression. I've learned that if you want to restore hope for the American worker, give them a job. Foster an environment where jobs are being created and the economy is growing. It's American small businesses that are moving our economy forward. I will continue to work to create an environment that favors job creation, small businesses and a strong economy.",
                        ],
                        [
                            "name" => "Education",
                            "stance" => "Education is a vital part of our economy, and good education programs will ensure success both now and in the future. As a father of six children, I am deeply interested in the quality of education that our children receive in the State of Utah. I strongly believe that education decisions are best decided at state and local levels. Local and state leaders—those who have direct interaction with parents and teachers in their communities—are best positioned to determine policies that affect Utah's students, not Washington bureaucrats. I support legislation that keeps education choices in the hands of parents, along with local and state leaders.",
                        ],
                        [
                            "name" => "Energy",
                            "stance" => "Energy independence is vital to national security. In order to become less dependent on foreign energy, we must be able to pursue responsible development within our own borders. Maintaining a diverse energy portfolio will protect our current and future interests, while creating jobs at home. I support the responsible development of oil, natural gas, clean coal, and a variety economically viable renewable energy options. We are fortunate to live in a district full of scenic and natural resources. Multiple use land policies enable their responsible use, while protecting their integrity. I am committed to protecting environmental integrity while also supporting energy development to bring in needed revenue, jobs, and overall security.",
                        ],
                        [
                            "name" => "Financial Services",
                            "stance" => "The Financial Services industry is vital to our economy. In 2010, Congress passed the Dodd-Frank Wall Street Reform and Consumer Protection Act. This lengthy document, however well-intentioned, was poorly-designed. The Financial Services Committee of the House of Representatives reported that of the 400 rules required to be established under the Act, only 224 have been written. These 224 rules and regulations already consume 7,365 pages and will require private sector job-creators to spend 24,180,856 hours to comply with the rules. The Dodd-Frank Act is hindering financial institutions and small businesses. Instead of focusing their efforts on creating jobs and growing our economy, small businesses and financial institutions are spending increasing amounts of time and money to comply with the rules. Rather than hindering these institutions and businesses, we must seek to help them succeed and, in turn, spur the economy.",
                        ],
                        [
                            "name" => "Health",
                            "stance" => "Our health care and insurance systems need reform. In 2010, Congress enacted the Patient Protection and Affordable Care Act, commonly referred to as ObamaCare. The Supreme Court ruled in 2012 that the penalty assessed to individuals who fail to purchase insurance is a tax. As a former small business owner in Davis County, I see and understand the stresses that this tax penalty is forcing upon business owners throughout our district. Not only are jobs being killed by the implementation of Obamacare but it is crushing economic activity. The purpose of the Affordable Care Act was to drive insurance premiums down. But instead we see the exact opposite - some premiums rising as much as 400 percent. This makes ObamaCare the largest tax increase on the American people. As your Congressman, I will work to defund, repeal and replace Obamacare.",
                        ],
                    ],
                ],
            ]
        ],
        [
            'location' => 'District 4',

            'candidates' => [
                [
                    'candidate' =>[
                        "name" => 'Darlene McDonald',
                        "dob" => null,
                        "bio" => "A Quaker, she currently serves on the board for the American Friends Service Committee as a member-at-large and on the Friends Relations Committee. Previously, she's served as Outreach Director for the Utah Women's Democratic Club — the oldest women's Democratic club in the country, and on the board for Alliance for a Better Utah. In 2019, Ms. McDonald was elected Chair of the Utah Black Roundtable and served in that role for a one year term. In 2020, Ms. McDonald was elected to serve as the Democratic National Committeewoman for Utah.",
                        "contact_email" => '',
                        "contact_phone_number" => null,
                        'state' => 'Utah',
                        "party_name" => 'Democrat',
                        'site_link' => 'https://votedarlene.com',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://votedarlene.com',
                    ],

                    'opinions' => [
                        [
                            "name" => "HEALTHCARE",
                            "stance" => "As the mom of a son born with pre-existing heart conditions, Darlene is committed to ensuring access to high-quality, affordable healthcare for our families and addressing healthcare costs. That will be one of Darlene's priorities in Congress. Close to a million Utahns have contracted Covid-19 so far, which has resulted in the death of almost 5,000 of our friends and neighbors. Darlene has personally lost three close friends to the virus. As many of us prepare to return to the office and a life that closely resembles the way things were at the end of 2019, healthcare professionals continue to treat and study \"long-haulers\" who suffer from an affliction known as \"Long Covid.\" Long-haulers experience symptoms of the illness many weeks, or even months, after contracting the virus. An estimated 11.78 million Americans are living with long Covid. More research is necessary to help medical professionals explain why symptoms linger in some people and their long-term medical impact on the sufferers. Many long-haulers are unable to return to their previous lives, which has led to a loss in income. Their inability to work impacts their ability to obtain a quality health insurance plan and may even impact their ability to obtain life insurance. As long-haulers seek ongoing medical care for their symptoms, health care experts warn that they could face high healthcare costs that could exceed $100,000 over a lifetime. When in Congress, Darlene will make sure we don't return to the days when insurance companies denied coverage to people when they needed it the most. She will work with members of Congress and healthcare professionals to determine what can be done to bring the cost of healthcare down.",
                        ],
                        [
                            "name" => "MATERNITY HEALTH",
                            "stance" => "Utah has the highest birth rate in the United States: 14.9 per 1,000. Utah has the largest average household size in the country, and Utah is the youngest state with a median age of 30.7 years. Addressing maternity health, which includes mental health, is, therefore, extremely important in Utah communities. Depression and anxiety are the most common complications of childbirth. Unfortunately, maternal mortality in the United States exceeds other developed countries, and that is unacceptable. Pregnancy-associated deaths can also include accidental overdoses from opioids postpartum. The crisis is most severe for Black moms, who are dying at three to four times the rate of their white counterparts. Native Americans are more than twice as likely to die from pregnancy-related causes. Other research has shown that Asian Americans and Pacific Islanders (AAPI) have higher rates of maternal mortality during hospitalization for delivery, even after accounting for other factors that can affect outcomes. Darlene will make sure Utah moms have the resources they need to safely deliver their babies while tending to the well-being and care of mothers.",
                        ],
                        [
                            "name" => "FEDERAL DEBT",
                            "stance" => "The Federal Deficit is the amount of money the federal government spends versus how much it collects. The National Debt is the total amount of money the U.S. government owes. It's what you get from adding up all of the federal deficits accumulated from year to year. Big deficits mean a growing federal debt. No one in Washington has come up with a solid plan to address the nation's rising national debt, and many question if it's even necessary. Former Vice President Dick Cheney famously said,  \"Reagan proved deficits don't matter.\" American families that run high levels of debt risk bankruptcy or economic catastrophe, should an emergency arise. The National Debt operates pretty much the same way. High levels of debt and deficit spending at the household level are not sustainable. At some point, household debt has to be paid back. The debt is on an unsustainable course and has been for years. A large debt limits the government's ability to continue to fight the economic downturns. It also makes us potentially beholden to countries, such as China, that we borrow from. Tax cuts, as well as deficit spending, increase the national debt. Unfortunately, many members of Congress use the national debt as a political prop. Addressing the national debt isn't just about cutting spending. That tactic may work in American households, but it has seldom worked in a more complex system such as the government. Presidents who have run on cutting taxes and followed through end up having to raise them again. We cannot cut our way out of the crisis, no more than we can spend our way out of it. It takes politicians in Washington who are not looking to score political points but, instead, are willing to sit down at the table to create a smart, effective government - one which can operate within a budget that doesn't leave anyone behind. There are three drivers of growth in spending, which leads to an increase in the national debt: Rising healthcare costs per capita, Our aging population, The cost of servicing our national debt (interest cost). When in Congress, Darlene will not work to create a bigger government. She will work to create a smarter one.",
                        ],
                        [
                            "name" => "Strengthening Our Local Economy",
                            "stance" => "All politics are local. Darlene's legislative agenda will be centered around a commitment to make Utah's economy work for everyone. Darlene's agenda will include tax relief for families and investments in infrastructure like rural broadband, improved public transit and clean energy. As a small business owner, Darlene will advocate for small businesses. Darlene supports a national raise in the minimum wage, which would raise the minimum wage in Utah. As evidenced by The Coronavirus Relief Fund which provided relief to struggling families and businesses in 2020 and again in 2021, the economy benefits when the middle class is strong. The economy is built by the middle class. As consumers, they pour money into retail stores, which then helps to pay the salaries of the stores' employees, and also benefits investors. Beyond the macro-economic benefits, when hard-working households can afford to buy the things they need, they experience reduced stress and improved health - which leads to less crime, more focused students, and a more efficient workforce around the state. Rural jobs often pay less than urban ones, which is why so many young adults leave rural communities in search of urban jobs. Darlene is committed to finding solutions for the cash-flow issues of rural businesses, including farms and ranches provides $350 billion in emergency funding for eligible state, local, territorial, and Tribal governments to respond to the COVID-19",
                        ],
                        [
                            "name" => "Education",
                            "stance" => "Research has shown that students who have participated in early childhood educational interventions persist in their educational pursuits, have higher earnings, and commit fewer crimes. The preschool program Head Start not only enhances a child's educational potential, but also has a lasting positive impact on behavioral outcomes, including self-control and self-esteem. These investments must continue to be made in the state with the youngest population and highest birth rate. The COVID-19 pandemic put a stain on our education system by revealing several existing inequities. In order to address these inequities, we must invest in public education. We must make the needed changes that will allow us to: Attract, develop, and retain world-class educators, Provide state-of-the-art school facilities in every community, Make education affordable. We must prepare our students to be able to compete in an increasingly global economy. We must also be cognizant that the ability to learn is not determined by zip code. The ability to learn is not determined only by what happens when students walk into the classroom. A students' education should prepare them for what they will face ahead in the career path of their choosing. We need to take a comprehensive approach to ensure that every student is prepared for success at any level. They need access to good healthcare, financial support, and out-of-school opportunities, such as internships and mentorships, that will empower them to achieve.",
                        ],
                        [
                            "name" => "Democracy",
                            "stance" => "\"A Republic, if you can keep it,\" Benjamin Franklin is quoted to have said on the last day of the Constitutional Convention in Philadelphia in 1787. No other document like it existed in Europe, where monarchies ruled. American Democracy is an experiment in a different form of government, a democratic republic. The American Constitution, while grand and noble, is far from perfect. The Preamble to the U.S. The Constitution begins with three powerful words,  \"We the People,\" which present the essence of inclusivity, In order to form the more perfect union that forces the nation to hold as truth those three words, that we are indeed a country with a government made of the people, for the people, and by the people. Since its founding, America's promise to form a more perfect union has been tested. Too many times, she got it wrong. But through the process of Constitutional amendments and a Civil War, she's been steered in the direction of living up to its creed and promise of inclusiveness. The one thing we have learned over the past decade is that America's democracy is not guaranteed and it is worth fighting for. America became the shining example of a democratic state, where people not monarchies ruled. In the last two decades, we've seen democracies crumble and give way to authoritarian regimes and dictatorships. Studies are showing a dramatic shift toward right-wing authoritarian tendencies, and this should alarm everyone. The United States is a constitutional republic that is a representative democracy. That means we should encourage every eligible citizen of this country to vote and we should make it easier for people to cast a ballot, not harder. Instead, we've gone out of our way to make it harder for citizens to vote under the guise that millions of voters are voting illegally. This is simply false and spreading this lie jeopardizes the fabric that makes up our democracy. Covid-19 has taught us that what affects one of us affects us all. The U.S. Constitution was for fledgling democracies around the world. The world looks to us for leadership and our American democracy is worth fighting for. Without a strong democracy, nothing else matters: the fight for clean water and air, the fight for good education, the fight for affordable housing, and eliminating student debt...none of it matters if we lose our democracy. We must stand up for our democracy, not just when it's politically convenient to do so. We must stand for democracy especially when it's hard. That is the only way we can preserve it.",
                        ],
                        [
                            "name" => "Rural Utah",
                            "stance" => "Much of the attention around the Farm Bill lately is centered on the EBT food stamp program, but the Farm Bill sets policies that not only impact farmers and ranchers, but our domestic food supply. Why is it that fruits, vegetables and produce cost more and are less available than candy and fast food? Why is it that we have farmers and ranchers in our state who ship out their products to other states and even other countries before meeting the needs of Utahns? Let's see if we can solve some of the supply chain problems we are facing by incentivizing farmers and ranchers to meet local demands first. President Biden has focused a lot on the Farm Bill, and Darlene also intends to support common-sense solutions to the challenges faced by our farmers and ranchers. Darlene will work to eliminate urban food deserts - sections, often in the inner-city, where residents must travel more than a mile to reach a grocery store. Forcing those without adequate transportation to rely on local convenience stores for sustenance. Eliminating such food deserts creates an opportunity for rural farmers to fill that gap. If we truly focus on solving problems, we can find solutions to meet the needs of both rural and urban communities in the CD4.",
                        ],
                        [
                            "name" => "Water Conservation",
                            "stance" => "We are in an unprecedented drought that appears to be worse this year than it was in 2021. Water is precious in our semi-arid climate, and there is much we can do to conserve water every day. When we do, we are helping maintain our water supply, and there is also a financial incentive. Did you know that water heaters and toilets built in the last 20 years help you save substantial water? Modern dishwashers are also more efficient. Modern showerheads can provide ample pressure and use less water. Many manufacturers offer rebates upon purchase, and the water savings actually helps pay for the appliances over time. Be cognizant of leaks in your home, whether they be at the faucet or from a faulty pipe. If your water bill has increased a lot in the last six months without explanation, you should find out what is causing the increased water usage in your home. All of us can do our part to conserve water.",
                        ],
                    ],
                ],
                [
                    'candidate' =>[
                        "name" => 'Burgess Owens',
                        "dob" => null,
                        "bio" => "Burgess Owens is the Congressman from Utah's Fourth Congressional District. Born in the segregated South, he saw people of all backgrounds come together to work tirelessly against adversity. He was the 13th pick in the first round of the 1973 NFL draft and joined the New York Jets, later playing safety for ten seasons in the NFL for the New York Jets and the Oakland Raiders, winning the Superbowl with the 1980 Raiders' team.",
                        "contact_email" => '',
                        "contact_phone_number" => null,
                        'state' => 'Utah',
                        "party_name" => 'Republican',
                        'site_link' => 'https://owens.house.gov/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://owens.house.gov/',
                    ],

                    'opinions' => [
                        [
                            "name" => "Anti-Trafficking",
                            "stance" => "Human trafficking is a heinous crime that impacts people of all ages in communities worldwide. It is estimated that over 25 million people are subjected to human trafficking and forced labor, an industry responsible for roughly $150 billion annually. We must be vigilant in putting the criminals responsible behind bars and providing all-encompassing support to survivors. With collaboration among local, state, and federal partners and the private sector community, we can abolish these heinous crimes and restore the lives and livelihoods of those impacted.",
                        ],
                        [
                            "name" => "Antitrust & Big Tech",
                            "stance" => "For far too long, Big Tech has consistently restricted the choices of consumers in Utah and across the nation by unfairly hindering free-market competition. There is a strong, bipartisan push to update our nation's antitrust laws, and I'm pleased to report that lawmakers are gaining significant traction to take on Big Tech's anti-competitive, monopoly behaviors. I'm a proud member of the Freedom From Big Tech Caucus, led by my good friend Rep. Ken Buck, and our mission is simple: Reform antitrust laws, end censorship, protect children, crackdown on China, support competition, and strengthen privacy rights. It's past time for Congress to help states reclaim their right to enforce federal antitrust laws against Big Tech and their growing unchecked power.",
                        ],
                        [
                            "name" => "China",
                            "stance" => "The United States can no longer stand for China's malign influence, human rights abuses, and dishonest behavior. The Chinese Communist Party has ramped up building nuclear weapons, steals secrets from American companies, and threatens overall global stability. China represents a generational threat, and America must stand up so our adversaries around the world will stand down. As your Representative, I'll keep fighting against the CCP's human rights abuses and deceptive trade practices that threaten the safety and security of every American. ",
                        ],
                        [
                            "name" => "Economy and Jobs",
                            "stance" => "I was raised on the idea that anyone who works hard and dreams big can unlock their American Dream and find success. In Utah, you'll find a high-skilled workforce, diverse industries, and a powerhouse economy. As one of the fastest-growing states in the nation, federal policies must match our unique innovative and entrepreneurial values.",
                        ],
                        [
                            "name" => "Education",
                            "stance" => "Education is the key to success. From early learning to higher education, every single student in Utah and across the country deserves access to quality education - regardless of race, income, or zip code. Rest assured, one of my top priorities is supporting students and advancing policies that make our country's education system stronger. As a member of the Education and Labor Committee and Ranking Member of the House Early Childhood, Elementary, and Secondary Education Subcommittee, I am dedicated to fostering the best opportunities for students to learn, workers to succeed, and job creators of tomorrow to thrive.",
                        ],
                        [
                            "name" => "Energy Independence",
                            "stance" => "Before taking office, President Biden vowed to end American energy dominance, threatening our national security, causing pain at the pump, and increasing our dependency on foreign adversaries. Bad policies and unnecessary reliance on other countries for resources are fueling our domestic energy crisis. We need to protect our national security and unleash U.S. energy independence. As your Representative, I will always fight for pro-growth policies that boost our supply chains, energy independence, national security, and economic growth.",
                        ],
                        [
                            "name" => "Health Care",
                            "stance" => "It's no secret that Utah is on the cutting edge of health care innovation. In Congress, I'm proud of our work to cut bureaucratic red tape and improve health care outcomes. Together, we can provide Utah patients and families with accessible, efficient, and compassionate care. ",
                        ],
                        [
                            "name" => "Immigration and Border Security",
                            "stance" => "There is a devastating humanitarian, national security, and public health crisis at our southern border that is threatening the safety and security of every American. As your Representative, I am committed to securing our country's borders.",
                        ],
                        [
                            "name" => "Infrastructure",
                            "stance" => "As your Representative, I am committed to prioritizing the unique infrastructure needs of rural Utah and to ensuring that our towns aren't overlooked in Washington. Utah is a fast-growing state. We need to rebuild our country's crumbling infrastructure, including upgrading the roads, bridges, airports, and mass transit systems that improve the quality of life in Utah.",
                        ],
                        [
                            "name" => "Law Enforcement",
                            "stance" => "America's men and women in blue put their lives on the line every day to keep us safe. At a time when morale is low, budgets are being cut, and police officers are retiring at extremely high rates, it's imperative we give these heroes in law enforcement our full support.",
                        ],
                        [
                            "name" => "Protecting Life",
                            "stance" => "I am proud to be a staunch pro-life advocate in Congress and will always stand up to protect our most vulnerable. In Utah, we believe that life is precious and value the dignity and worth of every individual. As the father of six children and sixteen grandchildren, standing up for life is personal to me and I will do all I can to protect the unborn.",
                        ],
                        [
                            "name" => "RECA",
                            "stance" => "Tragically, under the banner of national security, the U.S. government exposed Utahns and Americans to radioactive uranium ore and radioactive dust - subjecting them to lung cancer and other life-threatening illnesses. Twenty years ago, former Utah Senator Orrin Hatch championed the Radiation Exposure Compensation Act (RECA) to make sure the sacrifices of our state's downwinders and their families are never forgotten. Radiation exposure caused by the U.S. atomic weapon development program forever destroyed lives and livelihoods in Utah and throughout the west. It has been over twenty years since any meaningful reform to RECA - now is the time for the federal government to renew its support and right these wrongs. In Congress, I championed the RECA Extension Act of 2022, led by Senator Mike Lee in the Senate, to extend the Radiation Exposure Compensation Act program for an additional two years. The bipartisan, bicameral bill passed the House in May 2022. I was also proud to lead the bipartisan Radiation Exposure Compensation Act Amendments of 2021 and look forward to delivering downwinders the support they deserve.",
                        ],
                        [
                            "name" => "Rural Utah",
                            "stance" => "Our state's farmers, ranchers, and agricultural producers feed the nation and fuel our economy. For far too long, Washington politicians have overlooked rural America and drowned out the voices of rural Utahns. From lowering costs to reducing burdens, I am proud of the results we have delivered for the backbone of the Beehive State.",
                        ],
                        [
                            "name" => "Second Amendment",
                            "stance" => "Bureaucrats in Washington want to trample the Second Amendment rights of law-abiding American citizens. I will always stand up for Utahns and their Constitutional right to keep and bear arms because it is fundamental to preserving our liberty. As your representative in Congress, I am honored to be your voice and to continue advocating for our most important constitutional freedoms, including the Second Amendment. ",
                        ],
                        [
                            "name" => "Small Business",
                            "stance" => "From manufacturing to the restaurant industry and everything in between, Utah runs on small businesses. Small business is the backbone of our state's economy, and Utah is soaring to new heights thanks to our business-friendly environment, competitive free-market principles, and state-level policies that encourage innovation. To continue this upward trajectory, we must get the government out of the way. My top priority is to ensure that Utah's economy continues to recover and flourish following the COVID-19 pandemic. Small business is the heart and soul of our state, and as the Fourth District heads back to work, Team Owens has your back at home and in the halls of Congress. In addition to visiting small businesses in every corner of Utah's Fourth, my team and I have worked hard to amplify their voices in Washington.",
                        ],
                        [
                            "name" => "Veterans",
                            "stance" => "We Salute America's men and women in uniform who serve in Utah, across the country, and abroad. These heroes exhibit bravery above and beyond the call of duty, and we're grateful for their service. ",
                        ],
                    ],
                ],
                [
                    'candidate' =>[
                        "name" => 'Johnathan Peterson',
                        "dob" => null,
                        "bio" => "",
                        "contact_email" => '',
                        "contact_phone_number" => null,
                        'state' => 'Utah',
                        "party_name" => 'Independent',
                        'site_link' => '',
                    ],

                    'manual_candidate' => [
                        'sources' => '',
                    ],

                    'opinions' => [
                        [
                            "name" => "No site to scrape!",
                            "stance" => "",
                        ],
                    ],
                ],
                [
                    'candidate' =>[
                        "name" => 'January Walker',
                        "dob" => null,
                        "bio" => "January has felt extremely fortunate in her career and harbors a personal mission to give back and lift her community. She believes that the best way to influence politics for good is to lead by example. She often volunteers with the unsheltered community, hosts displaced families in need at her home, helps her friends grow their business, and participates in grassroots projects throughout Utah. When not at work or serving her community, you can find her hiking in the mountains, taking a stroll around Utah Lake, boating with friends, paddle boarding rivers, gardening, exercising at the gym, road tripping to the coast for an ocean day, or traveling to new countries (she's currently at 20+).",
                        "contact_email" => 'UtahPolitician@protonmail.com',
                        "contact_phone_number" => null,
                        'state' => 'Utah',
                        "party_name" => 'United Utah Party',
                        'site_link' => 'https://januaryforutah.com/',
                    ],

                    'manual_candidate' => [
                        'sources' => 'https://januaryforutah.com/',
                    ],

                    'opinions' => [
                        [
                            "name" => "Economic Prosperity & Reduce Inflation",
                            "stance" => "January will aggressively combat inflation by implementing technology to eliminate the national debt & solve operational breakdowns in the USA supply chain. This will ease the pain on Utahn wallets. Resulting in lower gas prices and affordable groceries.",
                        ],
                        [
                            "name" => "Drought & Sustainability",
                            "stance" => "Hydroflume Technology will help reduce farming water usage by 12%, & January's proposal on using blockchain technology will allow water to be tracked across states and provide a path to reducing water waste.",
                        ],
                        [
                            "name" => "Personal Privacy & Cybersecurity",
                            "stance" => "As illustrated in the Bill of Rights, data privacy is a human right. You should have full control over your personal data & not be a product of big data. As we transition to a fully digital world.  Solutions like Blockchain Identity Wallets will allow individuals,  to control their information and vote securely with Blockchain Voting in elections.",
                        ],
                        [
                            "name" => "Clean Air to Breathe for Utah",
                            "stance" => "Every person deserves to breathe clean air. Our current representatives have power and influence but haven't done enough to help the pollution. Securing clean air resources to Utah will be a major focus for January. ",
                        ],
                        [
                            "name" => "Housing Availability for All Budgets",
                            "stance" => "High housing prices have become a barrier to entry for buyers & renters. Hardworking Utahns who have been able to afford housing struggle to do so and are becoming displaced. January will support programs to bring affordability back to Utah.",
                        ],
                        [
                            "name" => "Work Life Balance & Paid Time Off",
                            "stance" => "The pandemic showed us that our work-life balance was unsustainable, and we're seeing labor leave the workforce. Overwhelming feedback from Utahns indicate a need for guaranteed PTO for sickness & relaxation. January will seek this for all workers.",
                        ],
                        [
                            "name" => "Reasonable Healthcare Pricing & Prevention",
                            "stance" => "The United States spends its money on the outcomes of unmanaged illness rather than early prevention and intervention. January will champion initiatives that create \"health now\" to save money on healthcare costs downstream & reduce costs today on American wallets.",
                        ],
                        [
                            "name" => "Fiscal Responsibility & Budget",
                            "stance" => "It is immoral to leave future generations trillions in debt. January will lead  new solutions to prevent government shut downs and spend tax payer dollars prudently, & work towards eliminating the national debt.",
                        ],
                        [
                            "name" => "Education Reform & Affordability",
                            "stance" => "Education costs are a barrier to entry for the future success of not only individuals but the USA as a whole. January will work on a multifaceted plan to reduce education costs & support teachers.",
                        ],
                        [
                            "name" => "Criminal Justice Reform",
                            "stance" => "Nearly one in three Utahns have some kind of a criminal record. January will take the first steps towards meaningful reform by removing minimum prison sentences at the federal level.",
                        ],
                        [
                            "name" => "High Paying Part Time Work",
                            "stance" => "Creating Jobs that are high paying part time work mobilizes a highly educated workforces of stay at home parents while allowing them to continue care for children.",
                        ],
                        [
                            "name" => "Term Limits",
                            "stance" => "Enough said.",
                        ],
                        [
                            "name" => "Women's Healthcare Access",
                            "stance" => "January does not support government mandated childbirth or laws that limit women's access to birth control. Especially in cases of rape, incest, and at the risk of health and safety of the woman. She does support laws that support preventative healthcare for both men & women, and protects women from violence. ",
                        ],
                        [
                            "name" => "LGBTQ+",
                            "stance" => "January believes in \"Liberty & Justice for All\" and that individuals who identify as LGBTQ+ should be treated with acceptance, compassion, and respect.  Countries are stronger when all people -- regardless of sexual orientation, gender identity or expression, or sex characteristics -- are fully recognized as free and equal members of their society.",
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
        $office = PublicOfficePosition::firstWhere('name', 'U.S. Congress');
        foreach($this->data as $house) {
            // Create the location
            $location = Location::create([
                'name' => $house['location'],
                'type' => 'us_congress_district',
                'state' => 'Utah',
            ]);
            // Create the ballot
            $ballot = Ballot::create([
                'location_id' => $location->id,
                'office_id' => $office->id,
                'voting_date' => Carbon::createFromDate(2022, 11,8),
                'has_single_runner' => count($house['candidates']) == 1 ? true : false,
            ]);

            // Add each candidate
            foreach($house['candidates'] as $candidate_info) {
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
}
