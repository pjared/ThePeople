<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\CandidateVote;
use App\Models\Law;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UTLegSeeder extends Seeder
{
    public $legislations = [
        "https://le.utah.gov/~2022/bills/static/HB0274.html"=> [
            "House_Votes"=> [
                [
                    "name" => "Melissa Ballard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Gay Bennion",
                    "vote" => "yea"
                ],
                [
                    "name" => "Joel Briscoe",
                    "vote" => "yea"
                ],
                [
                    "name" => "Clare Collard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jen Dailey-Provost",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jim Dunnigan",
                    "vote" => "yea"
                ],
                [
                    "name" => "Steven Eliason",
                    "vote" => "yea"
                ],
                [
                    "name" => "Joel Ferry",
                    "vote" => "yea"
                ],
                [
                    "name" => "Matthew Gwynn",
                    "vote" => "yea"
                ],
                [
                    "name" => "Sandra Hollins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Dan Johnson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Marsha Judkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brian King",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Kohler",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karen Kwan",
                    "vote" => "yea"
                ],
                [
                    "name" => "Rosemary Lesser",
                    "vote" => "yea"
                ],
                [
                    "name" => "Phil Lyman",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ashlee Matthews",
                    "vote" => "yea"
                ],
                [
                    "name" => "Carol Moss",
                    "vote" => "yea"
                ],
                [
                    "name" => "Calvin Musselman",
                    "vote" => "yea"
                ],
                [
                    "name" => "Doug Owens",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karen Peterson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Candice Pierucci",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stephanie Pitcher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Judy Weeks-Rohner",
                    "vote" => "yea"
                ],
                [
                    "name" => "Angela Romero",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Schultz",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jeff Stenquist",
                    "vote" => "yea"
                ],
                [
                    "name" => "Andrew Stoddard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jordan Teuscher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Elizabeth Weight",
                    "vote" => "yea"
                ],
                [
                    "name" => "Douglas Welton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mark Wheatley",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stephen Whyte",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brad Wilson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Nelson Abbott",
                    "vote" => "nay"
                ],
                [
                    "name" => "Cheryl Acton",
                    "vote" => "nay"
                ],
                [
                    "name" => "Carl Albrecht",
                    "vote" => "nay"
                ],
                [
                    "name" => "Kera Birkeland",
                    "vote" => "nay"
                ],
                [
                    "name" => "Brady Brammer",
                    "vote" => "nay"
                ],
                [
                    "name" => "Walt Brooks",
                    "vote" => "nay"
                ],
                [
                    "name" => "Jefferson Burton",
                    "vote" => "nay"
                ],
                [
                    "name" => "Kay Christofferson",
                    "vote" => "nay"
                ],
                [
                    "name" => "Jon Hawkins",
                    "vote" => "nay"
                ],
                [
                    "name" => "Karianne Lisonbee",
                    "vote" => "nay"
                ],
                [
                    "name" => "Steven Lund",
                    "vote" => "nay"
                ],
                [
                    "name" => "Cory Maloy",
                    "vote" => "nay"
                ],
                [
                    "name" => "Jefferson Moss",
                    "vote" => "nay"
                ],
                [
                    "name" => "Mike Petersen",
                    "vote" => "nay"
                ],
                [
                    "name" => "Val Peterson",
                    "vote" => "nay"
                ],
                [
                    "name" => "Susan Pulsipher",
                    "vote" => "nay"
                ],
                [
                    "name" => "Rex Shipp",
                    "vote" => "nay"
                ],
                [
                    "name" => "Casey Snider",
                    "vote" => "nay"
                ],
                [
                    "name" => "Keven Stratton",
                    "vote" => "nay"
                ],
                [
                    "name" => "Mark Strong",
                    "vote" => "nay"
                ],
                [
                    "name" => "Norm Thurston",
                    "vote" => "nay"
                ],
                [
                    "name" => "Christine Watkins",
                    "vote" => "nay"
                ],
                [
                    "name" => "Stewart Barlow",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Scott Chew",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Ken Ivory",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Adam Robertson",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Robert Spendlove",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Raymond Ward",
                    "vote" => "not voting"
                ]
            ],
            "bill_summary" => "General Description:\n This bill amends provisions related to health education.\n Highlighted Provisions:\n This bill:\n ▸ requires the State Board of Education to establish curriculum requirements that\n include instruction in:\n • sexual assault resource strategies; and\n • sexual violence behavior prevention;\n ▸ amends provisions related to when a student receives health education instruction;\n ▸ requires a local education agency (LEA) to:\n • review data, including data on sexual assault, for each county in which the LEA\n is located;\n • use the data reviewed to inform the LEA's policies on health education; and\n • as appropriate, incorporate the data into health education;\n ▸ defines terms; and\n ▸ makes technical and conforming changes.",
            "house_nays" => 25,
            "house_not_voting" => 7,
            "senate_yeas" => 10,
            "house_yeas" => 43,
            "Senate_Votes"=> [
                [
                    "name" => "Kirk Cullimore",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karen Mayne",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stuart Adams",
                    "vote" => "nay"
                ],
                [
                    "name" => "Keith Grover",
                    "vote" => "nay"
                ],
                [
                    "name" => "Ladd Johnson",
                    "vote" => "nay"
                ],
                [
                    "name" => "Mike Kennedy",
                    "vote" => "nay"
                ],
                [
                    "name" => "Daniel McCay",
                    "vote" => "nay"
                ],
                [
                    "name" => "Ann Millner",
                    "vote" => "nay"
                ],
                [
                    "name" => "Scott Sandall",
                    "vote" => "nay"
                ],
                [
                    "name" => "Jerry Stevenson",
                    "vote" => "nay"
                ],
                [
                    "name" => "Evan Vickers",
                    "vote" => "nay"
                ],
                [
                    "name" => "RONALD WINTERTON",
                    "vote" => "nay"
                ],
                [
                    "name" => "Daniel Thatcher",
                    "vote" => "not voting"
                ]
            ],
            "title" => "HEALTH EDUCATION AMENDMENTS",
            "senate_nays" => 18,
            "bill_status" => "Current Law",
            "senate_not_voting" => 1
        ],
        "https://le.utah.gov/~2022/bills/static/HB0440.html"=> [
            "House_Votes"=> [
                [
                    "name" => "Cheryl Acton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Carl Albrecht",
                    "vote" => "yea"
                ],
                [
                    "name" => "Melissa Ballard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stewart Barlow",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brady Brammer",
                    "vote" => "yea"
                ],
                [
                    "name" => "Walt Brooks",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jefferson Burton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Scott Chew",
                    "vote" => "yea"
                ],
                [
                    "name" => "Kay Christofferson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Clare Collard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jim Dunnigan",
                    "vote" => "yea"
                ],
                [
                    "name" => "Steven Eliason",
                    "vote" => "yea"
                ],
                [
                    "name" => "Joel Ferry",
                    "vote" => "yea"
                ],
                [
                    "name" => "Matthew Gwynn",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jon Hawkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Sandra Hollins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ken Ivory",
                    "vote" => "yea"
                ],
                [
                    "name" => "Dan Johnson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Marsha Judkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Kohler",
                    "vote" => "yea"
                ],
                [
                    "name" => "Rosemary Lesser",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karianne Lisonbee",
                    "vote" => "yea"
                ],
                [
                    "name" => "Steven Lund",
                    "vote" => "yea"
                ],
                [
                    "name" => "Cory Maloy",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jefferson Moss",
                    "vote" => "yea"
                ],
                [
                    "name" => "Calvin Musselman",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karen Peterson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Val Peterson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Candice Pierucci",
                    "vote" => "yea"
                ],
                [
                    "name" => "Susan Pulsipher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Adam Robertson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Schultz",
                    "vote" => "yea"
                ],
                [
                    "name" => "Rex Shipp",
                    "vote" => "yea"
                ],
                [
                    "name" => "Casey Snider",
                    "vote" => "yea"
                ],
                [
                    "name" => "Robert Spendlove",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jeff Stenquist",
                    "vote" => "yea"
                ],
                [
                    "name" => "Keven Stratton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mark Strong",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jordan Teuscher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Raymond Ward",
                    "vote" => "yea"
                ],
                [
                    "name" => "Christine Watkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Douglas Welton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stephen Whyte",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brad Wilson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Nelson Abbott",
                    "vote" => "nay"
                ],
                [
                    "name" => "Gay Bennion",
                    "vote" => "nay"
                ],
                [
                    "name" => "Kera Birkeland",
                    "vote" => "nay"
                ],
                [
                    "name" => "Joel Briscoe",
                    "vote" => "nay"
                ],
                [
                    "name" => "Jen Dailey-Provost",
                    "vote" => "nay"
                ],
                [
                    "name" => "Brian King",
                    "vote" => "nay"
                ],
                [
                    "name" => "Karen Kwan",
                    "vote" => "nay"
                ],
                [
                    "name" => "Phil Lyman",
                    "vote" => "nay"
                ],
                [
                    "name" => "Ashlee Matthews",
                    "vote" => "nay"
                ],
                [
                    "name" => "Carol Moss",
                    "vote" => "nay"
                ],
                [
                    "name" => "Doug Owens",
                    "vote" => "nay"
                ],
                [
                    "name" => "Mike Petersen",
                    "vote" => "nay"
                ],
                [
                    "name" => "Stephanie Pitcher",
                    "vote" => "nay"
                ],
                [
                    "name" => "Judy Weeks-Rohner",
                    "vote" => "nay"
                ],
                [
                    "name" => "Angela Romero",
                    "vote" => "nay"
                ],
                [
                    "name" => "Andrew Stoddard",
                    "vote" => "nay"
                ],
                [
                    "name" => "Norm Thurston",
                    "vote" => "nay"
                ],
                [
                    "name" => "Elizabeth Weight",
                    "vote" => "nay"
                ],
                [
                    "name" => "Mark Wheatley",
                    "vote" => "nay"
                ]
            ],
            "bill_summary" => "General Description:\n This bill modifies provisions related to the oversight and provision of services for\n individuals experiencing homelessness.\n Highlighted Provisions:\n This bill:\n ▸ defines terms;\n ▸ modifies the membership of the Utah Homelessness Council (council) within the\n Office of Homeless Services (office);\n ▸ establishes the Utah Homeless Network Steering Committee within the office and\n describes the membership and duties of the steering committee;\n ▸ allows certain municipalities to receive funds from the Homeless Shelter Cities\n Mitigation Restricted Account (account) to mitigate the impacts of homeless\n shelters;\n ▸ establishes a formula for the office's disbursement of funds to municipalities that\n have been approved by the council to receive account funds;\n ▸ removes provisions allowing the office to provide grants from the account;\n ▸ modifies provisions related to the process for municipalities to request account\n funds;\n ▸ requires the council to consider certain factors in determining whether to approve or\n deny a municipality's request for account funds;\n ▸ removes provisions requiring the office to make recommendations to the Legislature\n regarding requests for account funds;\n ▸ requires certain councils of governments to annually prepare and submit to the\n office an overflow plan that establishes plans for temporary overflow shelters within\n the county during a limited period of time;\n ▸ requires the office to review the overflow plan to determine whether the plan is\n sufficient for the provision of services for individuals experiencing homelessness\n during a limited period of time;\n ▸ allows certain homeless shelters to expand capacity during a limited period of time\n under certain circumstances;\n ▸ prohibits municipalities from imposing certain capacity limits on homeless shelters\n during a limited period of time under certain circumstances;\n ▸ prohibits municipalities from restricting an entity from operating a temporary\n overflow shelter from a facility owned or operated by the entity during a limited\n period of time under certain circumstances;\n ▸ allows the office to contract with an entity to operate a temporary overflow shelter\n from a state facility during a limited period of time under certain circumstances;\n ▸ requires the office to make rules governing certain overflow plans and temporary\n overflow shelters; and\n ▸ makes technical and conforming changes.",
            "house_nays" => 21,
            "house_not_voting" => 1,
            "senate_yeas" => 24,
            "house_yeas" => 53,
            "Senate_Votes"=> [
                [
                    "name" => "Stuart Adams",
                    "vote" => "yea"
                ],
                [
                    "name" => "Kirk Cullimore",
                    "vote" => "yea"
                ],
                [
                    "name" => "Keith Grover",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ladd Johnson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Kennedy",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ann Millner",
                    "vote" => "yea"
                ],
                [
                    "name" => "Scott Sandall",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jerry Stevenson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Daniel Thatcher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Evan Vickers",
                    "vote" => "yea"
                ],
                [
                    "name" => "RONALD WINTERTON",
                    "vote" => "yea"
                ],
                [
                    "name" => "Daniel McCay",
                    "vote" => "nay"
                ],
                [
                    "name" => "Karen Mayne",
                    "vote" => "not voting"
                ]
            ],
            "title" => "HOMELESS SERVICES AMENDMENTS",
            "senate_nays" => 4,
            "bill_status" => "Current Law",
            "senate_not_voting" => 1
        ],
        "https://le.utah.gov/~2022/bills/static/HB0011.html"=> [
            "House_Votes"=> [
                [
                    "name" => "Nelson Abbott",
                    "vote" => "yea"
                ],
                [
                    "name" => "Cheryl Acton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Carl Albrecht",
                    "vote" => "yea"
                ],
                [
                    "name" => "Melissa Ballard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stewart Barlow",
                    "vote" => "yea"
                ],
                [
                    "name" => "Kera Birkeland",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brady Brammer",
                    "vote" => "yea"
                ],
                [
                    "name" => "Walt Brooks",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jefferson Burton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Scott Chew",
                    "vote" => "yea"
                ],
                [
                    "name" => "Kay Christofferson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jim Dunnigan",
                    "vote" => "yea"
                ],
                [
                    "name" => "Steven Eliason",
                    "vote" => "yea"
                ],
                [
                    "name" => "Joel Ferry",
                    "vote" => "yea"
                ],
                [
                    "name" => "Matthew Gwynn",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jon Hawkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ken Ivory",
                    "vote" => "yea"
                ],
                [
                    "name" => "Dan Johnson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Marsha Judkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Kohler",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karianne Lisonbee",
                    "vote" => "yea"
                ],
                [
                    "name" => "Steven Lund",
                    "vote" => "yea"
                ],
                [
                    "name" => "Phil Lyman",
                    "vote" => "yea"
                ],
                [
                    "name" => "Cory Maloy",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jefferson Moss",
                    "vote" => "yea"
                ],
                [
                    "name" => "Calvin Musselman",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Petersen",
                    "vote" => "yea"
                ],
                [
                    "name" => "Val Peterson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Candice Pierucci",
                    "vote" => "yea"
                ],
                [
                    "name" => "Susan Pulsipher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Adam Robertson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Judy Weeks-Rohner",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Schultz",
                    "vote" => "yea"
                ],
                [
                    "name" => "Rex Shipp",
                    "vote" => "yea"
                ],
                [
                    "name" => "Casey Snider",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jeff Stenquist",
                    "vote" => "yea"
                ],
                [
                    "name" => "Keven Stratton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jordan Teuscher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Raymond Ward",
                    "vote" => "yea"
                ],
                [
                    "name" => "Christine Watkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stephen Whyte",
                    "vote" => "yea"
                ],
                [
                    "name" => "Gay Bennion",
                    "vote" => "nay"
                ],
                [
                    "name" => "Joel Briscoe",
                    "vote" => "nay"
                ],
                [
                    "name" => "Clare Collard",
                    "vote" => "nay"
                ],
                [
                    "name" => "Sandra Hollins",
                    "vote" => "nay"
                ],
                [
                    "name" => "Brian King",
                    "vote" => "nay"
                ],
                [
                    "name" => "Karen Kwan",
                    "vote" => "nay"
                ],
                [
                    "name" => "Rosemary Lesser",
                    "vote" => "nay"
                ],
                [
                    "name" => "Ashlee Matthews",
                    "vote" => "nay"
                ],
                [
                    "name" => "Carol Moss",
                    "vote" => "nay"
                ],
                [
                    "name" => "Doug Owens",
                    "vote" => "nay"
                ],
                [
                    "name" => "Stephanie Pitcher",
                    "vote" => "nay"
                ],
                [
                    "name" => "Angela Romero",
                    "vote" => "nay"
                ],
                [
                    "name" => "Andrew Stoddard",
                    "vote" => "nay"
                ],
                [
                    "name" => "Norm Thurston",
                    "vote" => "nay"
                ],
                [
                    "name" => "Elizabeth Weight",
                    "vote" => "nay"
                ],
                [
                    "name" => "Mark Wheatley",
                    "vote" => "nay"
                ],
                [
                    "name" => "Jen Dailey-Provost",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Karen Peterson",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Robert Spendlove",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Mark Strong",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Douglas Welton",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Brad Wilson",
                    "vote" => "not voting"
                ]
            ],
            "bill_summary" => "General Description:\n This bill addresses student athlete participation in gender-designated sports in the\n public education system.\n Highlighted Provisions:\n This bill:\n ▸ defines terms;\n ▸ imposes limits on participation in female sports, by:\n • requiring schools and local education agencies to designate athletic activities by\n sex;\n • prohibiting a student of the male sex from competing against another school on\n a team designated for female students;\n • prohibiting certain complaints or investigations based on a school or local\n education agency maintaining separate athletic activities for female students;\n and\n • providing for severability;\n ▸ in the alternative if a court invalidates the above policy:\n • conditions student athlete participation in gender-designated sports in the public\n education system on the student's birth certificate;\n • establishes the School Activity Eligibility Commission (commission) and\n provides the commission's membership and duties;\n • requires the commission to establish a baseline range of students in a given\n gender-designated interscholastic activity for a given age;\n • provides that records of the commission related to a specific student are\n protected;\n • provides immunity from suit for members of the commission;\n • allows a student to participate in a gender-designated interscholastic activity that\n does not correspond to the sex designation on the student's birth certificate or in\n the case of a gender transition if the student receives the commission's eligibility\n approval;\n • provides processes for an athletic association to notify the commission when a\n student registers to participate in a gender-designated sport in a situation that\n requires the commission's eligibility approval;\n • provides processes for the commission to receive information and evidence;\n • provides for the confidentiality of the proceedings, commission vote, eligibility\n determination, and student's identity; and\n • establishes a standard for the commission's considerations in rendering an\n eligibility determination;\n • allows for commission meetings in which the commission discusses and votes\n on a specific student's request to be closed under the Open and Public Meetings\n Act;\n • provides for reasonable accommodations in school facilities related to gender\n identity for students participating in interscholastic activities; and\n • provides for severability; and\n ▸ makes technical changes.",
            "house_nays" => 16,
            "house_not_voting" => 7,
            "senate_yeas" => 16,
            "house_yeas" => 52,
            "Senate_Votes"=> [
                [
                    "name" => "Stuart Adams",
                    "vote" => "yea"
                ],
                [
                    "name" => "Kirk Cullimore",
                    "vote" => "yea"
                ],
                [
                    "name" => "Keith Grover",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ladd Johnson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Daniel McCay",
                    "vote" => "yea"
                ],
                [
                    "name" => "Scott Sandall",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jerry Stevenson",
                    "vote" => "yea"
                ],
                [
                    "name" => "RONALD WINTERTON",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Kennedy",
                    "vote" => "nay"
                ],
                [
                    "name" => "Karen Mayne",
                    "vote" => "nay"
                ],
                [
                    "name" => "Ann Millner",
                    "vote" => "nay"
                ],
                [
                    "name" => "Daniel Thatcher",
                    "vote" => "nay"
                ],
                [
                    "name" => "Evan Vickers",
                    "vote" => "nay"
                ]
            ],
            "title" => "STUDENT ELIGIBILITY IN INTERSCHOLASTIC ACTIVITIES",
            "senate_nays" => 13,
            "bill_status" => "Current Law",
            "senate_not_voting" => 0
        ],
        "https://le.utah.gov/~2022/bills/static/SB0176.html"=> [
            "House_Votes"=> [
                [
                    "name" => "Nelson Abbott",
                    "vote" => "yea"
                ],
                [
                    "name" => "Cheryl Acton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Melissa Ballard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stewart Barlow",
                    "vote" => "yea"
                ],
                [
                    "name" => "Gay Bennion",
                    "vote" => "yea"
                ],
                [
                    "name" => "Kera Birkeland",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brady Brammer",
                    "vote" => "yea"
                ],
                [
                    "name" => "Joel Briscoe",
                    "vote" => "yea"
                ],
                [
                    "name" => "Walt Brooks",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jefferson Burton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Scott Chew",
                    "vote" => "yea"
                ],
                [
                    "name" => "Kay Christofferson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Clare Collard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jen Dailey-Provost",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jim Dunnigan",
                    "vote" => "yea"
                ],
                [
                    "name" => "Steven Eliason",
                    "vote" => "yea"
                ],
                [
                    "name" => "Joel Ferry",
                    "vote" => "yea"
                ],
                [
                    "name" => "Matthew Gwynn",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jon Hawkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Sandra Hollins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Dan Johnson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Marsha Judkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brian King",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karen Kwan",
                    "vote" => "yea"
                ],
                [
                    "name" => "Rosemary Lesser",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karianne Lisonbee",
                    "vote" => "yea"
                ],
                [
                    "name" => "Steven Lund",
                    "vote" => "yea"
                ],
                [
                    "name" => "Cory Maloy",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ashlee Matthews",
                    "vote" => "yea"
                ],
                [
                    "name" => "Carol Moss",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jefferson Moss",
                    "vote" => "yea"
                ],
                [
                    "name" => "Calvin Musselman",
                    "vote" => "yea"
                ],
                [
                    "name" => "Doug Owens",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karen Peterson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Val Peterson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Candice Pierucci",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stephanie Pitcher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Susan Pulsipher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Judy Weeks-Rohner",
                    "vote" => "yea"
                ],
                [
                    "name" => "Angela Romero",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Schultz",
                    "vote" => "yea"
                ],
                [
                    "name" => "Robert Spendlove",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jeff Stenquist",
                    "vote" => "yea"
                ],
                [
                    "name" => "Andrew Stoddard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mark Strong",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jordan Teuscher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Norm Thurston",
                    "vote" => "yea"
                ],
                [
                    "name" => "Raymond Ward",
                    "vote" => "yea"
                ],
                [
                    "name" => "Christine Watkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Elizabeth Weight",
                    "vote" => "yea"
                ],
                [
                    "name" => "Douglas Welton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mark Wheatley",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stephen Whyte",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brad Wilson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Carl Albrecht",
                    "vote" => "nay"
                ],
                [
                    "name" => "Ken Ivory",
                    "vote" => "nay"
                ],
                [
                    "name" => "Mike Kohler",
                    "vote" => "nay"
                ],
                [
                    "name" => "Phil Lyman",
                    "vote" => "nay"
                ],
                [
                    "name" => "Mike Petersen",
                    "vote" => "nay"
                ],
                [
                    "name" => "Adam Robertson",
                    "vote" => "nay"
                ],
                [
                    "name" => "Rex Shipp",
                    "vote" => "nay"
                ],
                [
                    "name" => "Casey Snider",
                    "vote" => "nay"
                ],
                [
                    "name" => "Keven Stratton",
                    "vote" => "nay"
                ]
            ],
            "bill_summary" => "General Description:\n This bill amends provisions of the Alcoholic Beverage Control Act and provisions\n related to the Act.\n Highlighted Provisions:\n This bill:\n ▸ defines and amends terms;\n ▸ amends proximity requirements for certain arena licensees;\n ▸ amends provisions of the Malted Beverage Act regarding:\n • labeling and packaging; and\n • the power of the commission and department to classify flavored malt\n beverages;\n ▸ amends the time period in which a retail manager is required to complete a certain\n training program;\n ▸ changes the name of the \"Department of Alcoholic Beverage Control\" to the\n \"Department of Alcoholic Beverage Services\";\n ▸ changes the name of the \"Alcoholic Beverage Control Commission\" to the\n \"Alcoholic Beverage Services Commission\";\n ▸ changes the name of the \"Alcoholic Beverage Control Advisory Board\" to the\n \"Alcoholic Beverage Services Advisory Board\";\n ▸ amends provisions related to the late renewal of a license;\n ▸ amends provisions regarding the liquor control fund;\n ▸ amends provisions regarding the calculation of manufacturer production for school\n lunch program markup purposes;\n ▸ requires a package agency to submit any information the commission or department\n may require for the renewal of a package agency agreement;\n ▸ permits a package agency located at a manufacturing facility to, under certain\n conditions, remain open on a Sunday or on a state or federal holiday;\n ▸ amends a provision related to the furnishing of alcohol to a minor;\n ▸ amends the application requirements for a retail license;\n ▸ amends the requirements for a conditional retail license;\n ▸ prohibits the commission from including certain sublicenses in the total number of\n licenses the commission has issued for each type of retail license;\n ▸ permits various retail licensees to sell beer for off-premise consumption under\n certain conditions;\n ▸ makes references to the department's auditing of a retail licensee's records\n consistent;\n ▸ amends provisions regarding a retail licensee's ceasing of operations;\n ▸ permits a management agreement under certain conditions;\n ▸ prohibits an off-premise beer retailer from:\n • engaging in or permitting on the licensed premises gambling or fringe gambling;\n • having certain devices or games on the licensed premises; or\n • knowingly allowing certain drug-related activities on the licensed premises;\n ▸ amends provisions regarding the tracking of enforcement actions to remove\n references to and requirements related to a repealed section of statute;\n ▸ amends the total number of resort licenses permitted at a time in the state to eight;\n ▸ permits a hotel licensee or person applying for a hotel license to obtain a spa\n sublicense;\n ▸ amends the number of -hour single event permits the director may issue in a\n calendar year to the same person to ;\n ▸ amends and renumbers the Transfer of Alcohol License Act; and\n ▸ makes technical and conforming changes.",
            "house_nays" => 11,
            "house_not_voting" => 0,
            "senate_yeas" => 22,
            "house_yeas" => 64,
            "Senate_Votes"=> [
                [
                    "name" => "Stuart Adams",
                    "vote" => "yea"
                ],
                [
                    "name" => "Kirk Cullimore",
                    "vote" => "yea"
                ],
                [
                    "name" => "Keith Grover",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ladd Johnson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Kennedy",
                    "vote" => "yea"
                ],
                [
                    "name" => "Daniel McCay",
                    "vote" => "yea"
                ],
                [
                    "name" => "Scott Sandall",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jerry Stevenson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Daniel Thatcher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Evan Vickers",
                    "vote" => "yea"
                ],
                [
                    "name" => "RONALD WINTERTON",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karen Mayne",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Ann Millner",
                    "vote" => "not voting"
                ]
            ],
            "title" => "ALCOHOLIC BEVERAGE CONTROL ACT AMENDMENTS",
            "senate_nays" => 4,
            "bill_status" => "Current Law",
            "senate_not_voting" => 3
        ],
        "https://le.utah.gov/~2022/bills/static/HB0242.html"=> [
            "House_Votes"=> [
                [
                    "name" => "Nelson Abbott",
                    "vote" => "yea"
                ],
                [
                    "name" => "Cheryl Acton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Melissa Ballard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stewart Barlow",
                    "vote" => "yea"
                ],
                [
                    "name" => "Gay Bennion",
                    "vote" => "yea"
                ],
                [
                    "name" => "Kera Birkeland",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brady Brammer",
                    "vote" => "yea"
                ],
                [
                    "name" => "Joel Briscoe",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jefferson Burton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Scott Chew",
                    "vote" => "yea"
                ],
                [
                    "name" => "Clare Collard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jen Dailey-Provost",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jim Dunnigan",
                    "vote" => "yea"
                ],
                [
                    "name" => "Steven Eliason",
                    "vote" => "yea"
                ],
                [
                    "name" => "Joel Ferry",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jon Hawkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Sandra Hollins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Dan Johnson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Marsha Judkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brian King",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Kohler",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karen Kwan",
                    "vote" => "yea"
                ],
                [
                    "name" => "Rosemary Lesser",
                    "vote" => "yea"
                ],
                [
                    "name" => "Steven Lund",
                    "vote" => "yea"
                ],
                [
                    "name" => "Cory Maloy",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ashlee Matthews",
                    "vote" => "yea"
                ],
                [
                    "name" => "Carol Moss",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jefferson Moss",
                    "vote" => "yea"
                ],
                [
                    "name" => "Calvin Musselman",
                    "vote" => "yea"
                ],
                [
                    "name" => "Doug Owens",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Petersen",
                    "vote" => "yea"
                ],
                [
                    "name" => "Val Peterson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Candice Pierucci",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stephanie Pitcher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Susan Pulsipher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Angela Romero",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Schultz",
                    "vote" => "yea"
                ],
                [
                    "name" => "Casey Snider",
                    "vote" => "yea"
                ],
                [
                    "name" => "Robert Spendlove",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jeff Stenquist",
                    "vote" => "yea"
                ],
                [
                    "name" => "Andrew Stoddard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Keven Stratton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jordan Teuscher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Elizabeth Weight",
                    "vote" => "yea"
                ],
                [
                    "name" => "Douglas Welton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mark Wheatley",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stephen Whyte",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brad Wilson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Carl Albrecht",
                    "vote" => "nay"
                ],
                [
                    "name" => "Kay Christofferson",
                    "vote" => "nay"
                ],
                [
                    "name" => "Ken Ivory",
                    "vote" => "nay"
                ],
                [
                    "name" => "Karianne Lisonbee",
                    "vote" => "nay"
                ],
                [
                    "name" => "Phil Lyman",
                    "vote" => "nay"
                ],
                [
                    "name" => "Karen Peterson",
                    "vote" => "nay"
                ],
                [
                    "name" => "Adam Robertson",
                    "vote" => "nay"
                ],
                [
                    "name" => "Judy Weeks-Rohner",
                    "vote" => "nay"
                ],
                [
                    "name" => "Rex Shipp",
                    "vote" => "nay"
                ],
                [
                    "name" => "Mark Strong",
                    "vote" => "nay"
                ],
                [
                    "name" => "Norm Thurston",
                    "vote" => "nay"
                ],
                [
                    "name" => "Raymond Ward",
                    "vote" => "nay"
                ],
                [
                    "name" => "Christine Watkins",
                    "vote" => "nay"
                ],
                [
                    "name" => "Walt Brooks",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Matthew Gwynn",
                    "vote" => "not voting"
                ]
            ],
            "bill_summary" => "General Description:\n This bill addresses secondary water metering.\n Highlighted Provisions:\n This bill:\n ▸ addresses definitions;\n ▸ imposes requirements related to metering pressurized secondary water;\n ▸ provides for penalties for failure to comply with metering requirements;\n ▸ provides for exemptions;\n ▸ provides for grants to fund metering of certain pressurized secondary water services;\n ▸ allows for water conservation grants under certain circumstances;\n ▸ addresses rulemaking authority; and\n ▸ makes technical changes.",
            "house_nays" => 14,
            "house_not_voting" => 3,
            "senate_yeas" => 22,
            "house_yeas" => 58,
            "Senate_Votes"=> [
                [
                    "name" => "Stuart Adams",
                    "vote" => "yea"
                ],
                [
                    "name" => "Kirk Cullimore",
                    "vote" => "yea"
                ],
                [
                    "name" => "Keith Grover",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Kennedy",
                    "vote" => "yea"
                ],
                [
                    "name" => "Daniel McCay",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ann Millner",
                    "vote" => "yea"
                ],
                [
                    "name" => "Scott Sandall",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jerry Stevenson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Daniel Thatcher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Evan Vickers",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ladd Johnson",
                    "vote" => "nay"
                ],
                [
                    "name" => "Karen Mayne",
                    "vote" => "not voting"
                ],
                [
                    "name" => "RONALD WINTERTON",
                    "vote" => "not voting"
                ]
            ],
            "title" => "SECONDARY WATER METERING AMENDMENTS",
            "senate_nays" => 3,
            "bill_status" => "Current Law",
            "senate_not_voting" => 4
        ],
        "https://le.utah.gov/~2022/bills/static/HB0121.html"=> [
            "House_Votes"=> [
                [
                    "name" => "Nelson Abbott",
                    "vote" => "yea"
                ],
                [
                    "name" => "Cheryl Acton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Carl Albrecht",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stewart Barlow",
                    "vote" => "yea"
                ],
                [
                    "name" => "Kera Birkeland",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brady Brammer",
                    "vote" => "yea"
                ],
                [
                    "name" => "Joel Briscoe",
                    "vote" => "yea"
                ],
                [
                    "name" => "Walt Brooks",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jefferson Burton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Scott Chew",
                    "vote" => "yea"
                ],
                [
                    "name" => "Clare Collard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jen Dailey-Provost",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jim Dunnigan",
                    "vote" => "yea"
                ],
                [
                    "name" => "Steven Eliason",
                    "vote" => "yea"
                ],
                [
                    "name" => "Joel Ferry",
                    "vote" => "yea"
                ],
                [
                    "name" => "Matthew Gwynn",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jon Hawkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Sandra Hollins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Dan Johnson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Marsha Judkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brian King",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karen Kwan",
                    "vote" => "yea"
                ],
                [
                    "name" => "Rosemary Lesser",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karianne Lisonbee",
                    "vote" => "yea"
                ],
                [
                    "name" => "Steven Lund",
                    "vote" => "yea"
                ],
                [
                    "name" => "Cory Maloy",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ashlee Matthews",
                    "vote" => "yea"
                ],
                [
                    "name" => "Carol Moss",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jefferson Moss",
                    "vote" => "yea"
                ],
                [
                    "name" => "Calvin Musselman",
                    "vote" => "yea"
                ],
                [
                    "name" => "Doug Owens",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Petersen",
                    "vote" => "yea"
                ],
                [
                    "name" => "Karen Peterson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Val Peterson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Candice Pierucci",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stephanie Pitcher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Susan Pulsipher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Adam Robertson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Judy Weeks-Rohner",
                    "vote" => "yea"
                ],
                [
                    "name" => "Angela Romero",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mike Schultz",
                    "vote" => "yea"
                ],
                [
                    "name" => "Rex Shipp",
                    "vote" => "yea"
                ],
                [
                    "name" => "Casey Snider",
                    "vote" => "yea"
                ],
                [
                    "name" => "Robert Spendlove",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jeff Stenquist",
                    "vote" => "yea"
                ],
                [
                    "name" => "Andrew Stoddard",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mark Strong",
                    "vote" => "yea"
                ],
                [
                    "name" => "Jordan Teuscher",
                    "vote" => "yea"
                ],
                [
                    "name" => "Norm Thurston",
                    "vote" => "yea"
                ],
                [
                    "name" => "Raymond Ward",
                    "vote" => "yea"
                ],
                [
                    "name" => "Christine Watkins",
                    "vote" => "yea"
                ],
                [
                    "name" => "Elizabeth Weight",
                    "vote" => "yea"
                ],
                [
                    "name" => "Douglas Welton",
                    "vote" => "yea"
                ],
                [
                    "name" => "Mark Wheatley",
                    "vote" => "yea"
                ],
                [
                    "name" => "Stephen Whyte",
                    "vote" => "yea"
                ],
                [
                    "name" => "Brad Wilson",
                    "vote" => "yea"
                ],
                [
                    "name" => "Melissa Ballard",
                    "vote" => "nay"
                ],
                [
                    "name" => "Kay Christofferson",
                    "vote" => "nay"
                ],
                [
                    "name" => "Ken Ivory",
                    "vote" => "nay"
                ],
                [
                    "name" => "Mike Kohler",
                    "vote" => "nay"
                ],
                [
                    "name" => "Phil Lyman",
                    "vote" => "nay"
                ],
                [
                    "name" => "Keven Stratton",
                    "vote" => "nay"
                ],
                [
                    "name" => "Gay Bennion",
                    "vote" => "not voting"
                ]
            ],
            "bill_summary" => "General Description:\n This bill modifies provisions related to conservation of water and related provisions\n regarding lawn or turf.\n Highlighted Provisions:\n This bill:\n ▸ imposes requirements related to water conservation at state government facilities\n and by state agencies;\n ▸ provides for incentives to replace lawn or turf with drought resistant landscaping;\n ▸ grants rulemaking authority;\n ▸ requires the Legislative Water Development Commission to study water\n conservation in the state; and\n ▸ makes technical changes.",
            "house_nays" => 8,
            "house_not_voting" => 2,
            "senate_yeas" => 19,
            "house_yeas" => 65,
            "Senate_Votes"=> [
                [
                    "name" => "Mike Kennedy",
                    "vote" => "yea"
                ],
                [
                    "name" => "Daniel McCay",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ann Millner",
                    "vote" => "yea"
                ],
                [
                    "name" => "Scott Sandall",
                    "vote" => "yea"
                ],
                [
                    "name" => "Evan Vickers",
                    "vote" => "yea"
                ],
                [
                    "name" => "Ladd Johnson",
                    "vote" => "nay"
                ],
                [
                    "name" => "RONALD WINTERTON",
                    "vote" => "nay"
                ],
                [
                    "name" => "Stuart Adams",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Kirk Cullimore",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Keith Grover",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Karen Mayne",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Jerry Stevenson",
                    "vote" => "not voting"
                ],
                [
                    "name" => "Daniel Thatcher",
                    "vote" => "not voting"
                ]
            ],
            "title" => "WATER CONSERVATION MODIFICATIONS",
            "senate_nays" => 3,
            "bill_status" => "Current Law",
            "senate_not_voting" => 7
        ]
        ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->legislations as $link => $leg) {
            //Create the Law
            $law = Law::create([
                'senate_not_voting' => $leg["senate_not_voting"],
                'senate_yeas'=> $leg["senate_yeas"],
                'senate_nays'=> $leg["senate_nays"],
                'house_not_voting'=> $leg["house_not_voting"],
                'house_yeas'=> $leg["house_yeas"],
                'house_nays'=> $leg["house_nays"],
                'bill_id'=> "State_Bill",
                'bill_link'=> $link,
                'bill_status'=> "Current Law",
                'bill_title'=> $leg["title"],
                'bill_summary'=> $leg["bill_summary"],
            ]);
            //Loop through the votes
            $house_votes = $leg["House_Votes"];
            foreach ($house_votes as $vote) {
                $candidate = Candidate::firstWhere('name', $vote["name"]);
                if (! $candidate) {
                    echo 'Could not find candidate: ' . $vote["name"];
                }
                CandidateVote::create([
                    'candidate_id' => $candidate->id,
                    'law_id' => $law->id,
                    'vote' => $vote["vote"],
                ]);
            }
            $senate_votes = $leg["Senate_Votes"];
            foreach ($senate_votes as $vote) {
                $candidate = Candidate::firstWhere('name', $vote["name"]);
                if (! $candidate) {
                    echo 'Could not find candidate: ' . $vote["name"];
                }
                CandidateVote::create([
                    'candidate_id' => $candidate->id,
                    'law_id' => $law->id,
                    'vote' => $vote["vote"],
                ]);
            }
        }
    }
}
