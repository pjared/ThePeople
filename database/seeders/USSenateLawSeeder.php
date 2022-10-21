<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\CandidateVote;
use App\Models\Law;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class USSenateLawSeeder extends Seeder
{
    public $laws = [
        "H.R. 1799" => [
            "senate_no_votes" => 1,
            "senate_yeas" => 92,
            "senate_nays" => 7,
            "house_no_votes" => 11,
            "house_yeas" => 415,
            "house_nays" => 3,
            "bill_link" => "http://www.congress.gov/bill/117th-congress/house-bill/1799",
            "senate_roll_link" => "https://www.senate.gov/legislative/LIS/roll_call_votes/vote1171/vote_117_1_00140.htm",
            "house_roll_link" => "https://clerk.house.gov/Votes/202180",
            "bill_status" => "Became Law",
            "bill_title" => "PPP Extension Act of 2021",
            "bill_summary" => "This bill extends the Paycheck Protection Program, established to support small businesses in response to COVID-19 (i.e., coronavirus disease 2019), through June 30, 2021. Currently, the program is set to expire on March 31, 2021. For the final 30 days of the program (i.e., from June 1 until June 30), the Small Business Administration may only process applications submitted prior to June 1, and it may not accept any new loan applications. The bill excludes the budgetary effects of this bill from PAYGO scorecards under the Statutory Pay-As-You-Go Act of 2010 and from Senate PAYGO scorecards."
        ],
        "S. 1251" => [
            "senate_no_votes" => null,
            "senate_yeas" => 92,
            "senate_nays" => 8,
            "house_no_votes" => null,
            "house_yeas" => null,
            "house_nays" => null,
            "bill_link" => "http://www.congress.gov/bill/117th-congress/senate-bill/1251",
            "senate_roll_link" => "https://www.senate.gov/legislative/LIS/roll_call_votes/vote1171/vote_117_1_00251.htm",
            "house_roll_link" => null,
            "bill_status" => "Passed to House",
            "bill_title" => "Growing Climate Solutions Act of 2021",
            "bill_summary" => "This bill authorizes the Department of Agriculture (USDA) to establish a voluntary Greenhouse Gas Technical Assistance Provider and Third-Party Verifier Certification Program to help reduce entry barriers into voluntary environmental credit markets for farmers, ranchers, and private forest landowners. A voluntary environmental credit market is a market through which agriculture and forestry credits may be bought or sold. Entities eligible to participate in the program are (1) providers of technical assistance to farmers, ranchers, or private forest landowners in carrying out sustainable land use management practices that prevent, reduce, or mitigate greenhouse gas emissions, or sequester carbon; or (2) third-party verifiers that conduct the verification of the processes described in the protocols for voluntary environmental credit markets. Among other requirements, USDA must publish (1) a list of protocols and qualifications for eligible entities; (2) information describing how entities may self-certify under the program; (3) information describing how entities may obtain the expertise to meet the protocols and qualifications; and (4) instructions and suggestions to assist farmers, ranchers, and private forest landowners in facilitating the development of agriculture or forestry credits and accessing voluntary environmental credit markets. USDA must also establish an advisory council to make recommendations regarding the list of protocols and qualifications, best practices, and voluntary environmental credit markets. The bill also rescinds certain funds provided in the American Rescue Plan Act of 2021 and makes the funds available for the certification program."
        ],
        "H.R. 3684" => [
            "senate_no_votes" => 1,
            "senate_yeas" => 69,
            "senate_nays" => 30,
            "house_no_votes" => 8,
            "house_yeas" => 221,
            "house_nays" => 201,
            "bill_link" => "http://www.congress.gov/bill/117th-congress/house-bill/3684",
            "senate_roll_link" => "https://www.senate.gov/legislative/LIS/roll_call_votes/vote1171/vote_117_1_00314.htm",
            "house_roll_link" => "https://clerk.house.gov/Votes/2021208",
            "bill_status" => "Became Law",
            "bill_title" => "Infrastructure Investment and Jobs Act",
            "bill_summary" => "Among other provisions, this bill provides new funding for infrastructure projects, including for: roads, bridges, and major projects; passenger and freight rail; highway and pedestrian safety; public transit; broadband; ports and waterways; airports; water infrastructure; power and grid reliability and resiliency; resiliency, including funding for coastal resiliency, ecosystem restoration, and weatherization; clean school buses and ferries; electric vehicle charging; addressing legacy pollution by cleaning up Brownfield and Superfund sites and reclaiming abandoned mines; and Western Water Infrastructure. / This bill has been cut off early. Please go to the link to read the entire bill."
        ],
        "H.R. 3967" => [
            "senate_no_votes" =>2,
            "senate_yeas" => 84,
            "senate_nays" => 14,
            "house_no_votes" => 3,
            "house_yeas" => 256,
            "house_nays" => 174,
            "bill_link" => "http://www.congress.gov/bill/117th-congress/house-bill/3967",
            "senate_roll_link" => "https://www.senate.gov/legislative/LIS/roll_call_votes/vote1172/vote_117_2_00230.htm",
            "house_roll_link" => "com",
            "bill_status" => "Awaiting President",
            "bill_title" => "Sergeant First Class Heath Robinson Honoring our Promise to Address Comprehensive Toxics Act of 2022 or the Honoring our PACT Act of 2022",
            "bill_summary" => "This bill addresses health care, presumption of service-connection, research, resources, and other matters related to veterans who were exposed to toxic substances during military service. / This bill has been cut off early. Please click the bill link to read the rest of the bill."
        ],
        "H.R. 5376" => [
            "senate_no_votes" => null,
            "senate_yeas" => 51,
            "senate_nays" => 50,
            "house_no_votes" => 1,
            "house_yeas" => 220,
            "house_nays" => 213,
            "bill_link" => "http://www.congress.gov/bill/117th-congress/house-bill/5376",
            "senate_roll_link" => "https://www.senate.gov/legislative/LIS/roll_call_votes/vote1172/vote_117_2_00325.htm",
            "house_roll_link" => "com",
            "bill_status" => "Became Law",
            "bill_title" => "Inflation Reduction Act of 2022",
            "bill_summary" => "TITLE I--COMMITTEE ON FINANCE / Subtitle A--Deficit Reduction / Part 1--Corporate Tax Reform / (Sec. 10101) This act imposes an alternative minimum tax of 15% of the average annual adjusted financial statement income of domestic corporations (excluding Subchapter S corporations, regulated investment companies, and real estate investment trusts) that exceeds $1 billion over a specified 3-year period. The tax is effective in taxable years beginning after December 31, 2022. / This bill has been cut off early. Please click on the bill link to read the entire bill."
        ],
        "H.R. 6833" => [
            "senate_no_votes" => 3,
            "senate_yeas" => 72,
            "senate_nays" => 25,
            "house_no_votes" => 1,
            "house_yeas" => 230,
            "house_nays" => 201,
            "bill_link" => "http =>//www.congress.gov/bill/117th-congress/house-bill/6833",
            "senate_roll_link" => "https://www.senate.gov/legislative/LIS/roll_call_votes/vote1172/vote_117_2_00351.htm",
            "house_roll_link" => "https://clerk.house.gov/Votes/2022476",
            "bill_status" => "Became Law",
            "bill_title" => "Affordable Insulin Now Act",
            "bill_summary" => "This bill limits cost-sharing for insulin under private health insurance and the Medicare prescription drug benefit. Specifically, the bill caps cost-sharing under private health insurance for a month's supply of selected insulin products at $35 or 25% of a plan's negotiated price (after any price concessions), whichever is less, beginning in 2023. The bill caps cost-sharing under the Medicare prescription drug benefit for a month's supply of covered insulin products at $35 beginning in 2023. Currently, the Centers for Medicare & Medicaid Services is testing a voluntary model under the Medicare prescription drug benefit (the Part D Senior Savings Model) in which the copayment for a month's supply of insulin is capped at $35 through participating plans. The model is set to expire on December 31, 2025. The bill also (1) further delays implementation of regulations relating to the treatment of certain Medicare prescription drug benefit rebates from drug manufacturers for purposes of federal anti-kickback laws, and (2) increases funding for the Medicare Improvement Fund."
        ],
        "H.R. 7776" => [
            "senate_no_votes" => 6,
            "senate_yeas" => 93,
            "senate_nays" => 1,
            "house_no_votes" => 6,
            "house_yeas" => 384,
            "house_nays" => 37,
            "bill_link" => "http://www.congress.gov/bill/117th-congress/house-bill/7776",
            "senate_roll_link" => "https://www.senate.gov/legislative/LIS/roll_call_votes/vote1172/vote_117_2_00273.htm",
            "house_roll_link" => "https://clerk.house.gov/Votes/2022253",
            "bill_status" => "Awaiting President",
            "bill_title" => "Water Resources Development Act of 2022",
            "bill_summary" => "This bill authorizes the U.S. Army Corps of Engineers to carry out activities concerning water resources development projects, water supply and wastewater infrastructure, flood control, navigation, or ecosystem restoration, such as shoreline restoration. In addition, it modifies the process used to deauthorize certain inactive water resources development projects."
        ],
        "H.R. 7691" => [
            "senate_no_votes" => 3,
            "senate_yeas" => 86,
            "senate_nays" => 11,
            "house_no_votes" => 5,
            "house_yeas" => 368,
            "house_nays" => 57,
            "bill_link" => "http://www.congress.gov/bill/117th-congress/house-bill/7691",
            "senate_roll_link" => "https://www.senate.gov/legislative/LIS/roll_call_votes/vote1172/vote_117_2_00191.htm",
            "house_roll_link" => "https://clerk.house.gov/Votes/2022145",
            "bill_status" => "Became Law",
            "bill_title" => "Additional Ukraine Supplemental Appropriations Act, 2022",
            "bill_summary" => "This bill provides $40.1 billion in FY2022 emergency supplemental appropriations for activities to respond to Russia's invasion of Ukraine. The bill provides appropriations to several federal departments and agencies, including: the Department of Justice, the Department of Defense, the Nuclear Regulatory Commission, the Department of Health and Human Services, the Department of State, the U.S. Agency for International Development, the Department of Agriculture, and the Department of the Treasury. Among other things, the bill provides appropriations for defense equipment, migration and refugee assistance, regulatory and technical support regarding nuclear power issues, emergency food assistance, economic assistance, and seizures of property related to the invasion."
        ],
        "H.R. 4521" => [
            "senate_no_votes" => 4,
            "senate_yeas" => 68,
            "senate_nays" => 28,
            "house_no_votes" => 2,
            "house_yeas" => 222,
            "house_nays" => 210,
            "bill_link" => "https://www.congress.gov/bill/117th-congress/house-bill/4521",
            "senate_roll_link" => "https://www.senate.gov/legislative/LIS/roll_call_votes/vote1172/vote_117_2_00109.htm",
            "house_roll_link" => "https://clerk.house.gov/Votes/202231",
            "bill_status" => "House is Resolving Differences",
            "bill_title" => "United States Innovation and Competition Act of 2021",
            "bill_summary" => "This bill addresses U.S. technology and communications, foreign relations and national security, domestic  manufacturing, education, trade, and other matters. Among other provisions, the bill: provides funding for FY2022-FY2026 to support U.S. semiconductor manufacturing, research and development, and supply chain security; provides funding for wireless supply chain innovation; establishes a Directorate for Technology and Innovation in the National Science Foundation; extends through 2025 the authority of the National Aeronautics and Space Administration (NASA) to lease its non-excess real property and related personal property; authorizes various programs and policies related to space exploration; authorizes various international affairs programs and activities, including foreign assistance for the Indo-Pacific region; requires federal infrastructure programs to provide for the use of materials produced in the United States; imposes sanctions on China for cybersecurity and human rights abuses; requires the Department of Health and Human Services to consider national security risks associated with sensitive genetic information; includes initiatives related to elementary and secondary education, including those to increase computer science education; contains provisions related to higher education, including those reauthorizing through FY2027 international education programs and addressing China's influence on institutions of higher education; modifies and expands the schedule for graduated merger filing fees; prohibits federal funding for the Wuhan Institute of Virology; requires the U.S. Trade Representative to take certain actions related to digital trade and censorship practices; and extends through 2027 the Generalized System of Preferences."
        ]
    ];

    public $candidate_votes = [
        "H.R. 1799" => [
            "candidate_vote" => "nay"
        ],
        "S. 1251" => [
            "candidate_vote" => "nay"
        ],
        "H.R. 3684" => [
            "candidate_vote" => "nay"
        ],
        "H.R. 3967" => [
            "candidate_vote" => "nay"
        ],
        "H.R. 5376" => [
            "candidate_vote" => "nay"
        ],
        "H.R. 6833" => [
            "candidate_vote" => "not voting"
        ],
        "H.R. 7776" => [
            "candidate_vote" => "yea"
        ],
        "H.R. 7691" => [
            "candidate_vote" => "nay"
        ],
        "H.R. 4521" => [
            "candidate_vote" => "nay"
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mike_lee = Candidate::firstWhere('name', 'Mike Lee');
        foreach($this->laws as $i => $law) {
            Law::create([
                "senate_not_voting" => $law["senate_no_votes"],
                "senate_yeas" => $law["senate_yeas"],
                "senate_nays" => $law["senate_nays"],
                "house_not_voting" => $law["house_no_votes"],
                "house_yeas" => $law["house_yeas"],
                "house_nays" => $law["house_nays"],
                "bill_link" => $law["bill_link"],
                "senate_roll_link" => $law["senate_roll_link"],
                "house_roll_link" => $law["house_roll_link"],
                'bill_id' => $i,
                "bill_status" => $law["bill_status"],
                "bill_title" => $law["bill_title"],
                "bill_summary" => $law["bill_summary"],
            ]);
        }
        foreach($this->candidate_votes as $i => $vote) {
            $law = Law::firstWhere('bill_id', $i);
            CandidateVote::create([
                'candidate_id' => $mike_lee->id,
                'law_id' => $law->id,
                'vote' => $vote["candidate_vote"],
            ]);
        }
    }
}
