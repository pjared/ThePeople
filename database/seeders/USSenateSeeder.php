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

class USSenateSeeder extends Seeder
{
    public $candidates = [
            [
                'candidate' => [
                    "name" => 'Jimmy Hansen',
                    "dob" => null,
                    "bio" => "Jimmy was born and raised in a rural farming community in Southwest Missouri. After earning a degree in Physics and Mandarin Chinese from Missouri State University, he moved with his young family to Salt Lake City to pursue a Ph.D. in Physics at the University of Utah. While attending the U, Jimmy became interested in education and postponed his graduate studies to pursue a teaching career. He has loved teaching and coaching in both San Juan and Wasatch County. Jimmy, his wife Tahnee, and their children have been residents of Utah for nearly ten years. They have fallen in love with the beauty of Utah and currently reside in Monument Valley.",
                    "contact_email" => '​jamesarthansen@gmail.com',
                    "contact_phone_number" => null,
                    'state' => 'Utah',
                    "party_name" => 'Libertarian',
                    'site_link' => 'https://www.jimmyforutah.com/',
                ],

                'manual_candidate' => [
                    'sources' => 'https://www.jimmyforutah.com',
                ],

                'opinions' => [
                    [
                        "name" => 'Healthcare: High costs, poor outcomes',
                        "stance" => "  According to the World Bank, America has the highest health expenditures per capita. Yet despite paying the most of any nation, we are only ranked 35th by the Global Health Index, which considers 169 countries. Many believe the solution is more spending, government-mandated health plans, and price-fixing.



                        According to government estimates, millions of Americans travel to Mexico for cheaper prescription drugs and medical procedures each year. Why is it that American pharmacies and doctors cannot compete? Is it because of greedy companies? Is it because we do not have socialized medicine? The solution to high healthcare costs would be to remove the cause of high prices, not chase those high prices with more spending. Restoring a free market in the healthcare industry where doctors and hospitals compete for patients would solve our healthcare cost crisis.

                        Remove regulations that suppress new drugs and procedures. Individuals have the right to try and pursue any treatment they wish, with or without the government's consent.

                        Give doctors the freedom to build and establish practices and facilities where needed and repeal the government's lengthy and expensive permitting process.

                        Reform the tort system to protect doctors, hospitals, drug manufacturers, and medical device companies from frivolous lawsuits.

                        Vote no for Medicare/Medicaid expansions and work with congressional colleagues to introduce/sponsor legislation to enact the three stated measures above.

                        I would support giving dollars spent on healthcare directly to Americans, allowing them to spend them on their healthcare, and supporting the systems that best help them reach their health needs.

                        I would also be interested in a single-payer model. Most studies show significant cost savings, particularly on drugs and administrative costs. My only constraint on this system would be that we do not spend more than we already do on Medicaid/Medicare. It must deliver on the cost-saving promise!


                        Another ignored cause of poor American health and lower life expectancies is the typical American diet and the lack of movement in our daily lives. We could help our country return to healthier and simpler foods by making it easier for small farmers to sell their products directly to the people in their communities. Repealing USDA regulations that only allow large corporate farms to succeed would revitalize small family farms and help Americans return to a healthier diet.



                        As for movement, we are Libertarians, and we won't force you to be more active. Only you have the power to choose healthier outcomes!",
                    ],
                    [
                        "name" => "Foreign policy: Achieving Peace through free trade and genuine friendship",
                        "stance" => "In the 75+ years since WWII, there have been over 400,000 documented US war casualties, yet Congress has not officially declared war in that time. To what end were these American lives ended or seriously maimed?
                        Korea. Vietnam. Iraq. Afghanistan. Washington continually wastes American blood and wealth in conflicts that have nothing to do with our Nation's defense. How does jumping from one foreign conflict to the next, selling arms into active war zones, expanding military treaties in distant lands, and ultimately bankrupting America, make our country or the world safer?
                        We should seek a state of neutrality, open dialogue, and free trade to build friendship, economic prosperity, and peace throughout the land.
                        The current crisis in Ukraine highlights the failures of American foreign policy. The fall of the Iron Curtain was a great moment for liberty. The USSR coffers were exhausted from failed central planning policies and the decade-long civil war in Afghanistan. The right of people to move freely between countries and dictate the course of their own lives was being realized.
                        Instead of using this momentous occasion to develop friendship and economic prosperity with Russia and all of Eastern Europe, we expanded NATO eastward, placed weapons and nuclear arms into European countries, and dumped millions of dollars to influence Ukrainian and Georgian elections. America carried out the militarization of former Soviet states in the supposed name of peace and democracy. In actuality, it was the vain desire to build a political legacy and weaken Russia. Yet we now see that Ukrainians, not Washington politicians, are harvesting the bitter fruits. We must make peace with the world and stop the pattern of war profiteering and meddling in other countries' domestic politics.

                            I would vote no for any military action that does not directly tie to the defense of our Nation.

                            I will vote no to arms deals to countries involved in active conflicts, such as the billions of dollars of weapons we sell to the Saudi government, which in turn are being used against Yemen, giving rise to one of the worst humanitarian crises of our day.

                            I will work to normalize trade and walk back sanctions with our \"enemies\" and instead seek to establish free trade and diplomacy to achieve peace on the world stage.

                            I would also seek unilateral denuclearization with the other nuclear powers to walk the world back from the nuclear precipice. ",
                    ],
                    [
                        "name" => "Government for the people, Not corporations and special interests",
                        "stance" => "A free market is one where individuals control the means of production. Individuals are free to assume risk as they undertake business ventures. That risk is a natural check to speculative enterprises and deals. We no longer have a free market when the government subsidizes industries, limits choice, and passes trillion-dollar bailout packages. It is called crony capitalism, and it benefits a few at the expense of the general population.

                        We are currently in a period of record inflation and shortages. According to a recent report by the Joint Economic Committee of Congress, the average cost of recent inflation per household in the Mountain West region exceeds $500 per month. For families living on a fixed income, that increase is devastating. You quickly realize the empty promise of government stimulus when it evaporates after a few months of inflation costs. Inflation erases the value of savings and is particularly devastating to our senior citizens.

                        I would vote no to bailout packages for industries. Let the free market pick winners and losers, not the government.

                        I would support the repeal of stifling regulatory laws that make it nearly impossible for small businesses to compete with much larger and richer corporations.

                        I would also work with congressional colleagues to introduce legislation that would repeal tax dollars subsidizing any industry sector such as manufacturing, energy production, and agriculture. Government subsidies of industries are antithetical to a free market and destroy the natural competition that keeps prices low. A quick google search pulls up many examples of politicians profiting from these very subsidies. For example, VP Al Gore and the company Silver Springs Network in which he heavily invested received federal subsidies of $560m. Mr. Gore claims that every penny he made off of these investments went back into his non-profit, but no politician or industry should profit off the backs of the populace.

                        I would also support legislation forbidding members of congress from trading stocks. Public servants are elected to serve, not enrich their portfolios.",
                    ],
                    [
                        "name" => "Education, A critical Investment",
                        "stance" => "Education is a critical investment for our communities. Public funding of education is, in my mind, one of the best things our Nation has done to support widespread literacy, numeracy, and the opportunity to explore new ideas. I realize this is not an orthodox, libertarian view. However, before discussing defunding schools, we should focus on the tax dollars spent on bailouts, subsidies, and weapons proliferation in much larger quantities than those spent on education.

                        In Washington, I would support legislation that returns education decisions to states and a voucher system where federal dollars follow the students. A voucher system would allow institutions to compete for those students, leading to better outcomes in the public and private sectors. ",
                    ],
                    [
                        "name" => "A Women's Right To Choose",
                        "stance" => "I fully support the individual's right to autonomy over their body. The government, at no level, should ever dictate an individual's healthcare choices. That is between the individual and their care provider. Studies have shown that abortion bans do not reduce abortion rates; they only make abortion riskier. Those with means travel to states where the practice is legal, and those without means resort to more desperate actions. If you want to reduce abortion rates, increase access to family planning services through doctors, midwives, and nurses, and increase education about and access to effective contraceptives.

                        I will fully support legislation that:

                        Removes undue burdens to professionals seeking to establish quality care for women and eliminates barriers between women and doctors, midwives, nurses, and doulas.

                        Expands a women's access to contraceptives without the need for a prescription.


                        I will support Supreme Court nominees that protect the right of the individual to make these decisions for themselves. I support any individual's right to peacefully and tastefully engage with and advocate for choices beyond abortion, such as adoption for profit. When we empower women to make the best decisions for their health, there will be far fewer abortions.",
                    ],
                ],
            ],
            [
                'candidate' =>[
                    "name" => 'Mike Lee',
                    "dob" => null,
                    "bio" => "Elected in 2010 as Utah's 16th Senator, Mike Lee has spent his career defending the fundamental liberties of all Americans and advocating for America's founding constitutional principles. Senator Lee acquired a deep respect for the Constitution early in life while watching his father, Rex E. Lee, serve as the Solicitor General under President Ronald Reagan. He attended most of his father's arguments before the U.S. Supreme Court, giving him a unique and up-close understanding of government. Lee graduated from Brigham Young University with a degree in Political Science, and served as BYU's Student Body President in his senior year. He graduated from BYU's Law School in 1997 and went on to serve as law clerk to Judge Dee Benson of the U.S. District Court for the District of Utah, and then with future Supreme Court Justice Judge Samuel A. Alito, Jr. on the U.S. Court of Appeals for the Third Circuit.",
                    "contact_email" => '​jamesarthansen@gmail.com',
                    "contact_phone_number" => null,
                    'state' => 'Utah',
                    "party_name" => 'Republican',
                    'site_link' => 'https://www.lee.senate.gov/',
                ],

                'manual_candidate' => [
                    'sources' => 'https://www.lee.senate.gov/',
                ],

                'opinions' => [
                    [
                        "name" => "Protecting 2nd Amendment",
                        "stance" => "The Second Amendment guarantees Americans the fundamental right to keep and bear arms. The Supreme Court correctly interpreted this guarantee as an individual right as opposed to a collective right enjoyed only by colonial militias. Many gun control efforts threaten the rights of law-abiding Americans while criminals intent on hurting themselves or others continue to ignore the law. These efforts also harm the ability of Americans to protect themselves and their families, disproportionately hurting minorities and those living in high-crime areas. Senator Lee has led the fight against efforts to further restrict the ability of law-abiding Americans to exercise this fundamental right and he supports efforts to roll back existing gun control laws.",
                    ],
                    [
                        "name" => "Technology",
                        "stance" => "American entrepreneurs and creators have made the United States the global leader in science and technology. Their innovation and advances in technology have transformed the quality of life of people throughout the world, including millions of Americans.As technology improves and new and growing markets emerge, there will always be a temptation in Washington to expand the federal government's regulatory role over the private sector and attempt to centrally control our innovation. However, Senator Lee believes a responsible approach to technology policy is one where the federal government restrains itself to its limited constitutional authorities and even then only acts in a manner that is narrowly tailored to address the specific challenge. This authority must be exercised carefully because government intervention tends to hinder, rather than empower, American innovators and can insulate the largest, most powerful companies from their competitors. As tech companies acquire more power and exercise more control over our access to information, our antitrust enforcers must play a more active role to promote and protect competition.As the internet has grown and transformed how Americans share information, purchase and transport goods, and consume news, the federal government has needed and will continue to need to revisit debates over government regulation of speech, corporate conduct, competition, and transportation. If we want reforms to successfully combat discriminatory action, ensure competition, and crack down on obscene content to protect our children, all while preserving a fair marketplace and continued innovation, Senator Lee believes Congress must engage in robust debate, exercise its limited, proper role, and consider how its actions may lead to other consequences.",
                    ],
                    [
                        "name" => "Jobs",
                        "stance" => "While the Constitution charges Congress with regulating interstate commerce, Senator Lee believes that authority should be used to ensure goods and services can be properly sold and traded amongst the 50 states and the rest of the world. He does not think it gives the federal government blanket authority to micromanage the country's economy.Congress should allow American businesses and families to thrive without the burdensome hand of government getting in the way. Workers succeed when businesses have access to the capital they need, and capital becomes more readily available when government is not overregulating or spending beyond its means.Throughout our nation's history, Americans have proven they have an innovative and entrepreneurial spirit to better not only their own lives but the lives of their neighbors, local communities, and the world at large. Senator Lee believes Americans, not government, have built businesses, employed workers, supported families, and provided the ideas to improve the lives of each generation.The federal government can appropriately help support the continuation of these successes by removing unnecessary regulations, increasing access to foreign markets through free and fair trade agreements, simplifying our tax code and making it more competitive, protecting the integrity of the dollar, and protecting American workers by ensuring our legal immigration system supplements our workforce only where there is a gap.Jobs also depend on free markets, and free markets require vigilance to protect them from anticompetitive monopolies. Senator Lee, through his leadership on the Senate Subcommittee on Competition Policy, Antitrust, and Consumer Rights, works to ensure that our antitrust enforcers vigorously enforce U.S. law to protect consumers and free markets.",
                    ],
                    [
                        "name" => "Healthcare",
                        "stance" => "Access to affordable, high-quality healthcare is a critical component of a productive and vibrant society. Unfortunately, due to government intrusion, many Americans cannot afford the care and treatment they need.Each of our 50 states has different populations with different health-care needs, so Senator Lee believes there is no reason all Americans should be forced to purchase the same essential health benefits package while shopping for health insurance. Good health-care policy is flexible and customizable, since what is essential to one family or individual may not be essential to another.While Senator Lee opposes the Patient Protection and Affordable Care Act, otherwise known as Obamacare, he believes the problems of federal intervention in the health-care sector started decades earlier. Exempting employer-provided health insurance from taxation was one of the first issues that inappropriately incentivized the employer-sponsored model over the individual consumer model. For many Americans, this has resulted in fewer insurance choices and has tied them to their jobs.While immediately ending the tax deduction for healthcare provided through an employer would be unsettling for many Americans, Senator Lee believes its reform must be a topic for debate. But possibly the most important health-care reform needed is a liberalization of health savings accounts. Freeing these accounts from federal government restrictions could allow Americans to save more for their health-care needs, allow them to transfer from jobs without losing their insurance, and equip them to be more active and engaged consumers. With a more informed consumer base, its influence over the market could truly turn things around, improving quality, cost, and accessibility.Additionally, Senator Lee believes Congress must reform the Food and Drug Administration to make medical devices and drugs (and their generics) available sooner and at a lower cost. Medicaid to ensure it is targeted for the truly vulnerable who are unable to provide for themselves, such as children, pregnant women, and the disabled; and the Department of Health and Human Services so that all life, including the lives of the unborn and the elderly, is always protected.",
                    ],
                    [
                        "name" => "Education",
                        "stance" => "Human capital the knowledge, skills, and abilities of every person is one of our nation's greatest resources. Because an education is essential for many to pursue the American dream, Senator Lee believes reforms are needed to empower students and their families with options that best meet their unique needs.Children's first teachers are their parents, and parents must carry the primary responsibility to oversee and direct their children's education. Therefore, it's important that families have choices whether that be home schooling, public school, charter school, private school, etc. and the federal government should not incentivize one over another.While the four-year formalized college education is held as the gold standard by many, it really shouldn't be. For some it is absolutely the right route, but for others, higher education may not be necessary or they may be better served and prepared for work through an apprenticeship program or short-term, highly focused instruction. Again, Senator Lee believes choice and options are important. At the end of the day, higher education should prepare the upcoming generation for success in today's workforce. For this to be accomplished and the cost of post-secondary education to decrease, greater transparency, accountability, and competition are needed.",
                    ],
                    [
                        "name" => "National Security",
                        "stance" => "Protecting the American people from foreign threats is a fundamental function of the federal government. In crafting the U.S. Constitution, our Founders understood the immense power and control vested in the ability to raise and command an Army and Navy as well as to declare war. While the President serves as Commander-in-Chief of the armed forces, Congress is the only branch with the power to declare war and raise a military through the power of the purse. This authority was given to Congress because it is the branch held most accountable by the people.Congress and the President also share the responsibility of engaging with foreign nations. Congress is explicitly charged with the power to regulate foreign commerce, and the Senate's power to ratify treaties and offer advice and consent on ambassador nominations serves as a check on the President's diplomatic power.Over the years, the checks and balances and appropriate division of this power has weakened, resulting in a concentration of both defense and foreign relations powers in the executive branch. Therefore, one of Senator Lee's missions is to reassert and reinvigorate the constitutional role of Congress in shaping U.S. military and foreign policy. He continues to lead major legislation on war powers, military spending, and restraining international institutions. He believes very strongly that actions that would put American blood and treasure on the line must be debated and discussed where the risks and benefits can be carefully weighed and the American people can influence such decisions through their elected leaders. The U.S. Congress is the only body that meets both parameters.Another major component of protecting our national security and sovereignty is securing our borders. We must know who is entering and exiting our country to protect Americans domestically and ensure that we enforce our immigration laws so as not to incentivize those who want to enter the United States to do so illegally.While the Framers understood the importance of national security, they also understood that protecting civil liberties by limiting the government's power to search and spy on its citizens was an essential protection against tyranny. As James Madison said when framing a government where men govern men the great difficulty lies in this: you must first enable the government to control the governed; and the next place, oblige it to control itself. Senator Lee believes the federal government must follow warrant requirements enshrined in the Fourth Amendment to protect Americans against unauthorized government surveillance and preserve the civil liberties granted by our Constitution.",
                    ],
                    [
                        "name" => "Natural Resources",
                        "stance" => "When Utah first entered the Union, a ratified agreement called the Utah Enabling Act stipulated that public lands lying within said State shall be sold by the United States subsequent to the admission of said State into the Union. Unfortunately, the federal government has not held up its end of the bargain and has retained vast amounts of Utah acreage limiting Utahns' ability to maintain, conserve, recreate, and responsibly produce on the lands within their own state.Senator Lee believes much of this land should be transferred to the state as promised so that Utah's natural resources can be better managed to conserve the land, provide for the state's constituents, and serve its multi-use purposes. Utah has a great track record of responsibly managing public lands and caring for its environment, while ensuring economic prosperity for its communities, families, and industries dependent on access to the land, like agriculture, energy, and outdoor recreation.As Utah's population grows, access to the land will become even more urgent and necessary. Some will need to accommodate affordable housing, roads to ease congestion, schools, etc; other acreage that contains critical minerals and energy sources will need to be responsibly and safely tapped; and finally, others will need to be preserved for fishing, hunting, climbing, and other outdoor sports that bring families together and are simply a way of life in the west.Additionally, Senator Lee believes the federal government should not pick winners and losers in the energy sector or agriculture sector and that the free market and the demands of the public will result in the most efficient use of funds, reliable supply of energy to fuel the country and food to feed our population, and innovative solutions to keep our environment clean and food supply safe. But again, safe, responsible, and reliable access to the land is necessary to accomplish this.",
                    ],
                    [
                        "name" => "The Family",
                        "stance" => "The family is the most basic and essential building block of American society, and strong families are the best predictor of financial, educational, and emotional success in life. Accordingly, Senator Lee consistently pursues policies that strengthen family ties and works to undo government interventions that penalize or weaken the family.Since every human life holds innate and profound dignity and worth from conception, it is essential that the federal government respect each human life. Every individual deserves respect and protection to freely exercise and live out their religious and moral beliefs without fear of oppression or persecution as guaranteed by the First Amendment to our Constitution.The importance of the family and the social capital that comes from active, local communities motivates much of Senator Lee's work everything from tax policy to welfare policy to criminal justice reform. He believes America must renew civil society and the federal government should not crowd-out civil society's role or Americans' participation in associational life and the institutions that secure it.For instance, Senator Lee believes the tax code should not penalize marriage, our entitlement system should not penalize parents, and our criminal code should provide flexibility to judges in sentencing non-violent offenders. Ensuring that the federal government places married couples and parents on a level-playing field as other Americans and provides those that have been convicted of non-violent crimes the opportunity to rehabilitate themselves and return to their families and communities are important reforms that Senator Lee has made a focus of his work.",
                    ],
                ],
            ],

            [
                'candidate' =>[
                    "name" => 'Evan McMullin',
                    "dob" => null,
                    "bio" => "Evan McMullin is a proud Utahn, former undercover CIA officer and chief policy director in Congress, who ran for president in 2016. Evan grew up in a family like many in America, one that struggled to put food on the table and heat their home in the winter. At an early age, Evan learned the value of hard work and to always honor family and country. After graduating from high school and serving a two-year mission to Brazil for The Church of Jesus Christ of Latter-day Saints, the Agency recruited Evan into its student trainee program while he was attending Brigham Young University.",
                    "contact_email" => 'info@evanmcmullin.com',
                    "contact_phone_number" => null,
                    'state' => 'Utah',
                    "party_name" => 'Independent',
                    'site_link' => 'https://evanmcmullin.com/',
                ],

                'manual_candidate' => [
                    'sources' => 'https://evanmcmullin.com/',
                ],

                'opinions' => [
                    [
                        "name" => "Strengthen our democracy and stand up to extremists",
                        "stance" => "Our democratic republic is at risk. Division, extremism and conspiracy promoted by dishonorable politicians now dominate our politics and create dysfunction, chaos and instability in our country. During my CIA service abroad, I saw countries succumb to extremist movements that robbed people of their basic freedoms and placed power in the hands of authoritarian regimes. In order to preserve our system of self-government, which is necessary to ensure liberty and justice for every American, we must reform and strengthen our democracy by:
                        Ensuring voting rights for all eligible Americans
                        Ending partisan gerrymandering and other electoral corruption
                        Toughening transparency and ethics laws
                        Reducing the influence of money in politics
                        Uniting Americans on common ground",
                    ],
                    [
                        "name" => "Lower health care costs",
                        "stance" => "We have a moral obligation to ensure that every American has access to quality, affordable health care. Yet Americans pay more for health care than anyone else in the world. Too many politicians in Washington focus only on how to pay for continually rising costs of quality care rather than working to lower them. They protect the special interests who benefit at the expense of hard-working families paying thousands of dollars in premiums, deductibles, copays and other costs every month. It's time to finally start improving care while lowering its financial burden by making sensible reforms including:

                        Negotiating lower drug prices
                        Promoting competition in the prescription drug market
                        Improving patient choice in insurance and care providers
                        Requiring hospital price and quality transparency
                        Cutting administrative waste
                        Expanding telemedicine",
                    ],
                    [
                        "name" => "Reduce reckless government spending and inflation",
                        "stance" => "Utah is one of the most stunning places on earth. We are fortunate to call it home and tens of millions of others visit from around the world every year. Our responsibility for stewardship of this uniquely beautiful place is great, yet Utah is currently experiencing a historic drought and worsening air quality that threatens our health, prosperity and quality of life. For our children to flourish as we have for years to come, we must take sensible steps to protect these most vital natural resources by:

                        Improving western forest management
                        Developing water conservation practices and infrastructure
                        Investing in innovations that decrease harmful emissions
                        Encouraging job-friendly conservation in industry
                        Strengthening diversified economic development in rural areas",
                    ],
                    [
                        "name" => "Keep America safe",
                        "stance" => "Utah was founded by Americans and immigrants, who fled to its mountains in search of freedom, opportunity and safety, and it is still a sanctuary for a rapidly growing population in an increasingly unstable world. We must ensure that it remains so – despite rising threats within and beyond our borders – and that the rest of America continues to be safe for all who call it home. As a former intelligence officer and national security advisor in Congress, I know we can achieve this by:

                        Modernizing and reforming our military
                        Strengthening our alliances with other free nations
                        Protecting funding for police training, accountability and safety
                        Countering violent extremism
                        Securing our borders and treating immigrants humanely
                        Improving digital safety for our children",
                    ],
                    [
                        "name" => "Reaffirm our founding ideals",
                        "stance" => "We reaffirm the self-evident truth that all persons are created equal and free, having the same inalienable rights to life, liberty, and the pursuit of happiness, and that it is the prerogative of all to make personal decisions in accordance with their free will. We therefore condemn all forms of bigotry such as racism, antisemitism and other religious intolerance, sexism, and persecution based on sexual orientation.",
                    ],
                    [
                        "name" => "Defend the Constitution",
                        "stance" => "We uphold the Constitution as the inviolable and collective contract protecting liberty and justice for all, and honor the essential separation and balance it establishes among coequal branches of the federal government and the states.",
                    ],
                    [
                        "name" => "Protect American democracy",
                        "stance" => "We seek the preservation and betterment of our democratic republic and the endurance of our self-government, free from foreign interference. We support reforms that make our system more accessible, transparent, and competitive, oppose the intentional disenfranchisement of voters, and reject extremism, whether of the right or the left.",
                    ],
                    [
                        "name" => "Seek and promote truth",
                        "stance" => "We recognize truth and reason as essential to a free and just society, and expect our leaders, citizens, and press to seek and promote them. We oppose the employment of fear mongering, conspiracy theories, and falsehoods and instead support evidence-based policymaking and honest discourse.",
                    ],
                    [
                        "name" => "Uphold the rule of law",
                        "stance" => "We maintain that the impartial rule of law is essential to a free and just society to protect the rights, safety and property of all people. No one is above the law, including public officials, and our criminal justice system must treat everyone equally without discrimination based on race, status or other unrelated factors.",
                    ],
                    [
                        "name" => "Demand ethical government",
                        "stance" => "We demand that public officials and aspiring leaders act in the best interests of the country – even when in conflict with their political parties – and with integrity and honor, the absence of which is a harbinger for abuses of power that threaten the republic.",
                    ],
                    [
                        "name" => "Preserve American pluralism",
                        "stance" => "We are committed to a pluralistic society defined by its ideals and welcoming to immigrants rightfully seeking safety, opportunity, and a better life by becoming contributing members of our diverse nation. We reject the notion that America should be defined by the races, birthplaces, religious affiliations, or partisan identities of its founders or groups of citizens.",
                    ],
                    [
                        "name" => "Promote civic responsibility",
                        "stance" => "We believe that all Americans share civic responsibility, which is essential for our self-government and national success. Thriving communities are built by dutifully engaged citizens and good faith efforts to overcome differences with mutual respect and the bonds of civil affection. The solutions to many of America's greatest challenges can only be found in our diverse communities.",
                    ],
                    [
                        "name" => "Expand economic opportunity",
                        "stance" => "We recognize open, market-based economies as consistent with our natural liberty and the optimal means of ensuring economic mobility and the allocation of scarce resources. Capitalism, while insufficient to address all matters of the public interest, has made America the most prosperous nation on earth and is the engine for innovation and economic growth. We support sensible and limited regulation, including to ensure equal opportunity, and affirm government's vital role in assisting vulnerable citizens, while encouraging self-reliance without the impediments of cronyism and corruption.",
                    ],
                    [
                        "name" => "Sustain freedom of speech",
                        "stance" => "We reaffirm the Constitution's guarantee of free speech and freedom of the press as essential to accountable government and the American way of life. We sustain the rights of individuals and private entities to exercise this freedom, even to express unpopular views, and condemn efforts to erode press freedom and public support for its vital role.",
                    ],
                    [
                        "name" => "Honor our conservation responsibilities",
                        "stance" => "We consider vital our shared stewardship of America's resources – natural, environmental, and financial. We accept responsibility to conserve for ourselves and future generations these public assets, and to protect them from both natural and man-made harms.",
                    ],
                    [
                        "name" => "Advance our common defense and general welfare",
                        "stance" => "We uphold that government is instituted by the people to secure those essential, collective goods that individuals cannot attain for themselves, particularly providing for the common defense and promoting the general welfare. We therefore support policies that further public safety, health, and defense as required for enduring national sovereignty and prosperity.",
                    ],
                ],
            ],

            [
                'candidate' =>[
                    "name" => 'Tommy Williams',
                    "dob" => null,
                    "bio" => "I believe we need someone that represents the people of Utah. Not another politician out for themselves. Or a person who puts their party before the country. As your US Senate Representative, I will fight for your rights and freedoms. It's time for your voice to be heard.",
                    "contact_email" => '',
                    "contact_phone_number" => null,
                    'state' => 'Utah',
                    "party_name" => 'Independent',
                    'site_link' => 'https://tommywilliams4u.tripod.com/home.html',
                ],

                'manual_candidate' => [
                    'sources' => 'https://tommywilliams4u.tripod.com/home.html',
                ],

                'opinions' => [
                    [
                        "name" => "CONFLICT OF INTEREST",
                        "stance" => "If any member of US Congress, or their family has business with a company they should be required to remove themselves from any decision that could benefit the company. If they receive (and take) money from a business, then they should remove themselves from any decisions.",
                    ],
                    [
                        "name" => " CAMPAIGN CONTRIBUTIONS",
                        "stance" => "No \"Out of State\" political contributions (donations) should be allowed for any state House/Senate/Governor/Local Government: Elections in Utah.",
                    ],
                    [
                        "name" => " TERM LIMITS",
                        "stance" => "I Support a constitutional term limit amendment. Term Limits can help prevent politician from becoming more interested in staying in power rather than doing what they were elected for.",
                    ],
                    [
                        "name" => "LOBBYIST",
                        "stance" => "No lobbyist should be allowed in the US Capitol Building. No Lobbyist should be allowed to contact by phone, message or email. Any member when there in the Capitol building.",
                    ],
                    [
                        "name" => "ACCOUNTABILITY",
                        "stance" => "Required quarterly statewide town halls meetings. Regular digital reports, no expensive publications",
                    ],
                    [
                        "name" => "ELECTIONS",
                        "stance" => "Ensure national election integrity and voter access. Which is necessary to ensure liberty and justice for every American. Ensuring voting rights for all eligible Americans.  Toughening transparency and ethics laws. Reducing the influence of money in politic.  Ending partisan gerrymandering and other electoral corruption. Get rid of super packs.",
                    ],
                    [
                        "name" => "KEEP AMERICA SAFE",
                        "stance" => "Utah is home to thousands of active-duty military personnel. I honor the service given by Utah veterans and will stand up for them in Washington. Strengthening our alliances with other free nations. Countering violent extremism. Protecting funding for police training, accountability and safety. Improving digital safety",
                    ],
                    [
                        "name" => "EDUCATION",
                        "stance" => "I think our education priorities should be established by parents, cities and the state. Teachers, principals, cafeteria workers and janitors all are on the “Front Lines\" at the schools. So I think it is really important to listen to what they have to say.",
                    ],
                    [
                        "name" => "HOUSING",
                        "stance" => "Support solutions for affordable housing",
                    ],
                    [
                        "name" => "HEALTH & WELLNESS",
                        "stance" => "Access to good health care is essential for everyone in America. We have a moral obligation to ensure that every American has access to quality, affordable health care.  We should focus on how to lower the cost of healthcare. Negotiating lowering the cost of prescription drugs. Promoting competition in the prescription drug market. Telehealth solutions to increase mental & physical health services. Requiring hospital price and quality transparency. Prepare for the next pandemic and antibiotic resistant super-bugs.",
                    ],
                    [
                        "name" => "ECONOMIC OPPORTUNITY",
                        "stance" => "I will support and enable their efforts to improve workforce development, childcare, workplace protections, and paid family leave to create more opportunities for Utahns to prosper.",
                    ],
                    [
                        "name" => "ALTERNATIVE ENERGY / ENVIRONMENT",
                        "stance" => "I am for alternative energy sources that are renewable and have lower carbon emissions. Like; Wind Energy, Solar Energy, Biomass Energy, Hydroelectric energy. Developing water conservation practices and infrastructure. Investing in innovations that decrease harmful emissions. Encouraging job-friendly conservation in industry",
                    ],
                    [
                        "name" => "TAXES & SPENDING:",
                        "stance" => "Both major parties have engaged in reckless borrowing and spending. The US Senate need to reduce wasteful spending. Groceries & Medication shouldn't be taxed. Protect child tax credits. Passing balanced budget legislation. Avoiding unnecessary wars. Support affordable childcare",
                    ],
                    [
                        "name" => "SECOND AMENDMENTS RIGHTS",
                        "stance" => "I believe the Second Amendment to the United States Constitution guarantees a fundamental, individual right to keep and bear arms that applies to all Americans, regardless of where they live in the United States. Gun control only hurts law- abiding citizens. Criminals don't follow laws. “Gun bans don't disarm criminals; gun bans attract them.\" Walter Mondale. Restricting more of American's Freedoms when it comes to guns isn't the answer.  I also believe it is essential to reduce gun violence through: Gun safety initiatives. Mental and behavioral health supports. Updated background check system",
                    ],
                    [
                        "name" => "HATE CRIMES",
                        "stance" => "It is time to eliminate “Hate Crimes\" from the American Legal System. Why is one person's life worth more than another? If a kid is murdered. It shouldn't matter what color or sex the kid is. it shouldn't matter what color or sex the person that committed the crime. What should matter is a kid was murdered!  \"Hate Crimes\" says if two kids get murdered. One kids life worth more then the other kid.  You can apply it rape, child molestation and lots of other crimes.",
                    ],
                    [
                        "name" => "ABORTION",
                        "stance" => "I am 100% Pro-Life. I have been for protecting the rights of the unborn person my entire life.  It should be defined as: Pro-Life vs Pro-Murder (not pro-choice)",
                    ],
                    [
                        "name" => "TRANSGENDER BATHROOM LAWS",
                        "stance" => "Thinking you are a different sex (psychological thought) is different than actually being that sex (physically). All your plumbing works the same. I would try to get the following law: Law for Bathrooms/Locker rooms/showers: It should all boil down to what plumbing you have at the time the restroom is used. If you have (below the waist) male part (men's bathroom) or female part (women's bathroom). The people who aren't sure if they are a boy or girl need to study an anatomy book. That should help.  Being born a boy or a girl is not a choice you are born with (boy plumbing or girl plumbing) that is a fact you can't dispute it. Being transgender is a choice that is also a fact it is NOT physical it is psychological. Big difference thinking you are a different sex is different than actually being that sex. All your plumbing works the same.  Why is it ok to infringe the rights of people who don't want girls showering with boys! Teenage boy (you can reverse girl for boy) who decides to identify as a girl walking into the girl's locker room in high school. The girls shouldn't be forced to be seen by the boy nor should he be allowed to see them in the shower, or dressing. The boy would be infringing on the rights of everyone else.",
                    ],
                    [
                        "name" => "GAY RIGHTS / MARRIAGE",
                        "stance" => "I am against gay marriage. The Bible clearly states Homosexuality is a sin. China (Atheist country) is against gays and China rejects same-sex marriage. The (gays) don't want equal rights or even tolerance, they want everyone to approve and only believe what they believe. Gays want to take away our rights. Churches would have to marry gays, gay Sunday school teachers, rent room in your home, babysitters, etc. You have no rights to choose and can be sued if you don't want a gay person with your kids.",
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
        $location = Location::where('name', 'Utah')->firstWhere('type', 'state',);
        $office = PublicOfficePosition::create([
            "name" =>  'U.S. Senate',
            "years_per_term" => 6,
        ]);
        // Create the ballot
        $ballot = Ballot::create([
            'location_id' => $location->id,
            'office_id' => $office->id,
            'voting_date' => Carbon::createFromDate(2022, 11, 8),
            'has_single_runner' => false,
        ]);
        foreach($this->candidates as $candidate_info) {
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
