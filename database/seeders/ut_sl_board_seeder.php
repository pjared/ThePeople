<?php

namespace Database\Seeders;

use App\Models\Ballot;
use App\Models\Location;
use App\Models\PublicOfficePosition;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ut_sl_board_seeder extends Seeder
{
    public $data = [
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF301",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER027",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR357",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC044",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC120",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC096",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE416",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF411",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "EMG001",
            "district" => "1"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR008",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR406",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UPA408",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD026",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR413",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC009",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LI305",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP301",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD025",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC058",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "NRV908",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM410",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER902",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD060",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC007",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF322",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "NRV912",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USA402",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD022",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM402",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE315",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC027",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF318",
            "district" => "5"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR349",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP308",
            "district" => "6"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR341",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LI308",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC004",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC052",
            "district" => "4"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR017",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN021",
            "district" => "5"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR009",
            "district" => "1"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR010",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN024",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR332",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC098",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF319",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "WCN002",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD007",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE405",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USA402",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER030",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SA402",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI304",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE421",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC031",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD015",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL025",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UBE401",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL017",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD042",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC046",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN906",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN019",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP017",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM422",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF422",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC085",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT006",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL006",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE318",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD008",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD046",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD032",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD040",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC039",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC122",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE410",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC099",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD027",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP901",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN047",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "MIL901",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL009",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR353",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD063",
            "district" => "4"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR021",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UER401",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "NRV409",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "NRV917",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM416",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD041",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE418",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT024",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA414",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD031",
            "district" => "5"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR355",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR324",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AL301",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD014",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL030",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF324",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT003",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP026",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC127",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SHL003",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE408",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF009",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD013",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD041",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR320",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD028",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY025",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UER403",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL009",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN005",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE311",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP307",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR363",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC037",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "WHT004",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC008",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF401",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL031",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC056",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL011",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UWM401",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR033",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT011",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "PCN001",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SQ405",
            "district" => "1"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR018",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF317",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE408",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "WHT002",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC105",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD039",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV023",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL008",
            "district" => "1"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR003",
            "district" => "1"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR027",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "TAY036",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UHI311",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC064",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL006",
            "district" => "2"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR359",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC025",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF401",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG008",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD054",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LI304",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAL301",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV017",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD052",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UPM301",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD020",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE412",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AL307",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID003",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC069",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT014",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC002",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC044",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY012",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC113",
            "district" => "7"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR310",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP001",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SA408",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SHL007",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL033",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "MA403",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP402",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER006",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV025",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT017",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UCH308",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY007",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT015",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER009",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN046",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN041",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG301",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC090",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD903",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF323",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM401",
            "district" => "1"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR325",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT011",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USQ405",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR422",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID002",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG016",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC019",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT006",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA406",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF404",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE321",
            "district" => "3"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR328",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC057",
            "district" => "4"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR335",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN004",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LI302",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR303",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR356",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY026",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP024",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN052",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC040",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC028",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN013",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "OQR002",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE317",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC038",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF412",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE304",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP415",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF010",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR309",
            "district" => "6"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR301",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL011",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF324",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UPM402",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AL305",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG305",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UHC301",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "CBL001",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC048",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC026",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN012",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD006",
            "district" => "4"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR304",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "ISL001",
            "district" => "4"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR339",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG316",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC006",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD044",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL010",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR318",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER012",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG001",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY003",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG012",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER019",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI312",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF324",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USL401",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USF411",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID023",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF401",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "BGC001",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR302",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN023",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD059",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER034",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR404",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV003",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR335",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC066",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID018",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USA407",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF401",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAL306",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE309",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN033",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL012",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN002",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM420",
            "district" => "1"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR344",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "DR301",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN050",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL014",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC042",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "NRV915",
            "district" => "7"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR322",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM415",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN034",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF308",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC111",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC030",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE420",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER031",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF401",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC047",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV006",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN902",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC035",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY006",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC063",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC094",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "NRV909",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MUR006",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV018",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR318",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL004",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM417",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF324",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF307",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR414",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT002",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL004",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL003",
            "district" => "3"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "UPR304",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE421",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG004",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UFF401",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT022",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC022",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC041",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL001",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE305",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR409",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC063",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR311",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY010",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM407",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC029",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT019",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD048",
            "district" => "3"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR007",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA402",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE413",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "ULS401",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR305",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP002",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF012",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL003",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT002",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF312",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL021",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD016",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC052",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD043",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG314",
            "district" => "5"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR362",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL003",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC061",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL009",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "ALT001",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL002",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD043",
            "district" => "3"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR358",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC061",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID021",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE310",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "VI302",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF323",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF402",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER904",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE417",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF323",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "NRV905",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN006",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UPC302",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD037",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP007",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "WHT003",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC103",
            "district" => "6"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR001",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC125",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL003",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF007",
            "district" => "2"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR001",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR301",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG014",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC112",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR344",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SA404",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD048",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC050",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD063",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD017",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD062",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF305",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "OQR001",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV019",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SHL006",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF420",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD057",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "NRV408",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP028",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF310",
            "district" => "5"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR367",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID012",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV031",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF302",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF401",
            "district" => "3"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR331",
            "district" => "6"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USF402",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV028",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC018",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD026",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD034",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE411",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG002",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM423",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR359",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID007",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID006",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV021",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WJD001",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF415",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL002",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV016",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC055",
            "district" => "4"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR321",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT007",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE301",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR401",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY023",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC019",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG326",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT003",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC053",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV014",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "NRV406",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT008",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD025",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN042",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR361",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL007",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR346",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "CH302",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE312",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN039",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG015",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER016",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI311",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA407",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC020",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UHI301",
            "district" => "4"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR024",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC064",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UHC402",
            "district" => "2"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR327",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY015",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "VI305",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD001",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE406",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY021",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC051",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE402",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR336",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF413",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SWT002",
            "district" => "1"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR330",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI310",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP029",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL007",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL039",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE402",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD004",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER032",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SA403",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD024",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC087",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV008",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD014",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD061",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR345",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC054",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR362",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT012",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD010",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UPA402",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV033",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MUR012",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF418",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN009",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER901",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD052",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UHI306",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE417",
            "district" => "2"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR017",
            "district" => "4"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR029",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LI306",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV030",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA412",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR349",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP015",
            "district" => "6"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR312",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP304",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG321",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC010",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "WCN001",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USF418",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC034",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "NRV913",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "NRV910",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC067",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP020",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL005",
            "district" => "4"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR016",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN036",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF401",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "NRV903",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR408",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC123",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF308",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC049",
            "district" => "4"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR329",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL008",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE422",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL005",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID009",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC007",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC055",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MOL001",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UBN401",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE312",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL032",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP022",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD004",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY008",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF401",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC045",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC073",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "MA407",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USA402",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AL306",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP014",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV009",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID020",
            "district" => "1"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR314",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR317",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR352",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC003",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC100",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR416",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN030",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP003",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC116",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP019",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF311",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM424",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN028",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN001",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG007",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF323",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC031",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER025",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UCF401",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL013",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC033",
            "district" => "7"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR023",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC117",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC032",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY022",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI301",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT005",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE422",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "LTC001",
            "district" => "3"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR340",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL038",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR328",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC068",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF319",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF410",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MUR034",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD040",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "NRV302",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC024",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT004",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC009",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT013",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC034",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USQ408",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC023",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF003",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "NRV907",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN025",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA408",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL020",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN048",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE302",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY027",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "COP001",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER018",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC021",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE405",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN014",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID013",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC056",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "MA406",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV035",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV005",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC047",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF006",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN038",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "VI304",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL021",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR412",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN037",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USF421",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE303",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY013",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "CF401",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD062",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF406",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LI310",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UCB401",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC104",
            "district" => "6"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SQ402",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM406",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER001",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USA402",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "BRT001",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD056",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE306",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP011",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC018",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER905",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD008",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MUR019",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT001",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD032",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG320",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG317",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "FF401",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF320",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG005",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC012",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN010",
            "district" => "4"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR352",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP023",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN011",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF013",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SQ404",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID022",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "ER402",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL009",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM405",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP013",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC060",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC049",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN045",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL012",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC115",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF314",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP306",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AL303",
            "district" => "4"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR023",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP416",
            "district" => "6"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP411",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE321",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER005",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV013",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR405",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI314",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL007",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "CH306",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR338",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR326",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN064",
            "district" => "6"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SA407",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER015",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UEL401",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE314",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT018",
            "district" => "3"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR004",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC022",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF306",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC108",
            "district" => "6"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR005",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC093",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN029",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID008",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT008",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC106",
            "district" => "7"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR001",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL010",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN058",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE319",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN031",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN062",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD022",
            "district" => "7"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR332",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD013",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UWM402",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP310",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP012",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD018",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF408",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL011",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD036",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "CH305",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP406",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG307",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "MA408",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR304",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN022",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER013",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC008",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE317",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV012",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN017",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY029",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY014",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP302",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "NRV901",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE405",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD064",
            "district" => "4"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR002",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "ULS402",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "USR424",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP414",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN005",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL004",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD038",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR316",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN001",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE316",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC011",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL013",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD051",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN901",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC016",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UBN402",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL001",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE411",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER008",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR014",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC048",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC036",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD901",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "NRV304",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY032",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT025",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD034",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD064",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF401",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN010",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LI301",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL026",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE316",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF307",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UOR350",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD045",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL018",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SA405",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC078",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG003",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE421",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV024",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR333",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL041",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN007",
            "district" => "7"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR004",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG308",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "CH308",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF416",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP408",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC050",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "VI301",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "ER401",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY031",
            "district" => "4"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR015",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SLC903",
            "district" => "1"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR302",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR340",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WJD003",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD055",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC036",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN018",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE402",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC010",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR337",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT007",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR402",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC011",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "NRV906",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD070",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD071",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP027",
            "district" => "7"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR315",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC107",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY035",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC045",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD044",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL007",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC057",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR411",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY002",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN020",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD003",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF401",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL042",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER017",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT014",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE410",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF320",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL018",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN026",
            "district" => "3"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR360",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "NRV914",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY028",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC026",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "VI307",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL019",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER003",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV029",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN057",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC081",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD072",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD035",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR341",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD045",
            "district" => "3"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR313",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC020",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UPR364",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD033",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA413",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN009",
            "district" => "4"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR338",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "VI306",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC129",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF301",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL027",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "USR411",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID014",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USF402",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UHI311",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP018",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR330",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "VI308",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG013",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD049",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SHL005",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE308",
            "district" => "3"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR356",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "BGC002",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR322",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN003",
            "district" => "4"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR308",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER023",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL010",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UPC301",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG901",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE405",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM408",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP404",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF324",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT021",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL028",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC091",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER011",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SSL901",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC021",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID015",
            "district" => "1"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR311",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UCB402",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE416",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA411",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC074",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID017",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN060",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC084",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR312",
            "district" => "6"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF401",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE302",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG312",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC015",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG325",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG313",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD068",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC070",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "NRV918",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD038",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD029",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC013",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER024",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "WCR002",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "DR302",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV007",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP006",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF320",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC902",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP021",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA401",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC015",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC075",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD011",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE407",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "NRV401",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR327",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN015",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN014",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD017",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG304",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SHL002",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC023",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY009",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN027",
            "district" => "4"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR363",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC051",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC005",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC001",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SQ410",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SA401",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN903",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC080",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD053",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD005",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR358",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD029",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UGE402",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC060",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR348",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC029",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC040",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL010",
            "district" => "2"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR004",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC118",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC041",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV001",
            "district" => "3"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR319",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE321",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN040",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UOR360",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE401",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT009",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UMA406",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "NRV402",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE410",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MUR025",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER007",
            "district" => "1"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR342",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF317",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG009",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN007",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE413",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID016",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD054",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR418",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR334",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF317",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD023",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE404",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD058",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC901",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID004",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE318",
            "district" => "3"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR014",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT010",
            "district" => "2"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR333",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USQ404",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN004",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE310",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD030",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN006",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC109",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC003",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL012",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD057",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR415",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE423",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "NRV305",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC065",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UHI302",
            "district" => "4"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR345",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD012",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF005",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL004",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE316",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY005",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD024",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC126",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP025",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL024",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD033",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF324",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC017",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD007",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL012",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID019",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SHL001",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN032",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UOR361",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD046",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "MA401",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN054",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL020",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY004",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD036",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN016",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD018",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM414",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT023",
            "district" => "3"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR030",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE301",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD069",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SQ407",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF403",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR354",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID001",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC006",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD050",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF002",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN053",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID011",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY020",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY018",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "GO401",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP005",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP004",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL005",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP008",
            "district" => "7"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR350",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC062",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC082",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN002",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC033",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE319",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI306",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE416",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP305",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD006",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF011",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC017",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD009",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC059",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY034",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD058",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL017",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL001",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG302",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL008",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI305",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL022",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR323",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC038",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "NRV407",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG318",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR314",
            "district" => "6"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SQ408",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD037",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA404",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV020",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AL304",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD055",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER021",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF401",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM418",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF324",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD060",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "NRV916",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR417",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD019",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL006",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE420",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC121",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UBN403",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR350",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "CH304",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV011",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "WH401",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN063",
            "district" => "6"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR354",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT004",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY030",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR410",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC025",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD053",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL034",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC072",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC062",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD009",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UGO402",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC071",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "MA402",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER033",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC128",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL040",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP303",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV010",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV015",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UPC301",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR306",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE317",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA410",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF301",
            "district" => "4"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR305",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "WHT001",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP409",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR420",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "CH301",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER022",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG011",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC035",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD011",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SLC002",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC043",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD030",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD059",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER004",
            "district" => "1"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR324",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID024",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC097",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD039",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT012",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT009",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC086",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP410",
            "district" => "6"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF418",
            "district" => "3"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR036",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF407",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN904",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "NRV904",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF008",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY019",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "MA404",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UHI310",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN051",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV002",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID010",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD015",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "WCR001",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD002",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT901",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG323",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN061",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR321",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL036",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL022",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY016",
            "district" => "4"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR020",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL015",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UHI306",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC119",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF324",
            "district" => "3"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR366",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN012",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AL302",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY017",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN008",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC042",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC124",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF306",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP401",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PR364",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD049",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD066",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF302",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE321",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL035",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG322",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI307",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD012",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF308",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER028",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC001",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USQ401",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR360",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF425",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "NRV911",
            "district" => "6"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR346",
            "district" => "7"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR365",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL019",
            "district" => "2"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR011",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER014",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC053",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL016",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC059",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT020",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV032",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT010",
            "district" => "3"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR031",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD902",
            "district" => "6"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "GE402",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC037",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER029",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE417",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE416",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN901",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE320",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL037",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN013",
            "district" => "5"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR306",
            "district" => "1"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR320",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC030",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN008",
            "district" => "4"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR022",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE410",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR421",
            "district" => "2"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UPA401",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL008",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC027",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD056",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL016",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT015",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE423",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI313",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE414",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL006",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG324",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE405",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL015",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE420",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE421",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC016",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "USR410",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE314",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD051",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC014",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT013",
            "district" => "3"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR343",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE314",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC089",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD016",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC014",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD047",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF324",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG010",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC043",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC114",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV027",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR336",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "NRV405",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN043",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "GE401",
            "district" => "1"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR326",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF004",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC028",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC083",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD035",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI302",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG310",
            "district" => "5"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR307",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC013",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP010",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN055",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM412",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD028",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LI309",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP009",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SQ401",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER002",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN049",
            "district" => "4"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC095",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULV302",
            "district" => "7"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "GSL001",
            "district" => "7"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR348",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF304",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN044",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD050",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SA406",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP405",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV901",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR424",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN011",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SIL013",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "MID005",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD020",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL014",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE411",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF421",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD019",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD021",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD023",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "PA405",
            "district" => "7"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR013",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULV301",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER010",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD027",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL005",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD061",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MUR026",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR308",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY033",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV022",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE408",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE318",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC092",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC077",
            "district" => "6"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN065",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG309",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC004",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC058",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL001",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF424",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "UER403",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR329",
            "district" => "7"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN035",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC110",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC032",
            "district" => "3"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USP406",
            "district" => "5"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "WCR003",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MUR028",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MAG006",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR310",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UCV401",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "OR342",
            "district" => "7"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC079",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "NRV902",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF419",
            "district" => "4"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "SSL002",
            "district" => "3"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE416",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD065",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "GNT005",
            "district" => "3"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC088",
            "district" => "6"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD031",
            "district" => "7"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV004",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "BLF001",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF310",
            "district" => "5"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR334",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM411",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "AF316",
            "district" => "4"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "ER403",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR423",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "HOL011",
            "district" => "1"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC101",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY011",
            "district" => "4"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER020",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV026",
            "district" => "1"
        ],
        [
            "school_board" => "Provo School Board",
            "PrecinctID" => "PR353",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL002",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MUR035",
            "district" => "2"
        ],
        [
            "school_board" => "Murray",
            "PrecinctID" => "MUR032",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC024",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC046",
            "district" => "7"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM419",
            "district" => "1"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "SR419",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD047",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "RIV034",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC054",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "EM404",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER026",
            "district" => "1"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "SJD901",
            "district" => "5"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "USF410",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT026",
            "district" => "3"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WVC012",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD067",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN056",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE421",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "ULE317",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD042",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "WJD002",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "UAF305",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "USR410",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "DRP016",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL014",
            "district" => "2"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC076",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE403",
            "district" => "2"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD010",
            "district" => "7"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "NRV410",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SP412",
            "district" => "6"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL023",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SQ406",
            "district" => "1"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SHL004",
            "district" => "5"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD005",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "CH307",
            "district" => "4"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT016",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY024",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG303",
            "district" => "5"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC102",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC005",
            "district" => "1"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "MIL029",
            "district" => "2"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "COT001",
            "district" => "2"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "HI308",
            "district" => "4"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG311",
            "district" => "5"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "TAY001",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "HER903",
            "district" => "1"
        ],
        [
            "school_board" => "Nebo School Board",
            "PrecinctID" => "SF414",
            "district" => "3"
        ],
        [
            "school_board" => "Canyons",
            "PrecinctID" => "SAN059",
            "district" => "6"
        ],
        [
            "school_board" => "Salt Lake",
            "PrecinctID" => "SLC039",
            "district" => "2"
        ],
        [
            "school_board" => "Granite",
            "PrecinctID" => "KRN003",
            "district" => "6"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "PG306",
            "district" => "5"
        ],
        [
            "school_board" => "Alpine School Board",
            "PrecinctID" => "LE318",
            "district" => "3"
        ],
        [
            "school_board" => "Jordan",
            "PrecinctID" => "WJD021",
            "district" => "6"
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $school_board_chair = PublicOfficePosition::create([
            "name" => 'School Board Chair',
            "years_per_term" => 4,
        ]);

        foreach ($this->data as $school_board) {
            $board_name = $school_board['school_board'] . ' District ' . $school_board['district'];
            $location = Location::firstWhere('name', $board_name);
            if(! $location) {
                Location::create([
                    'name' => $board_name,
                    'state' => 'Utah',
                    'type' => 'School District',
                ]);
            }
        }
    }
}
