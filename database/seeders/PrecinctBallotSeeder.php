<?php

namespace Database\Seeders;

use App\Models\Ballot;
use App\Models\BallotPrecinct;
use App\Models\Location;
use App\Models\PublicOfficePosition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class PrecinctBallotSeeder extends Seeder
{
    public $precincts = [
        'STG25' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'UAF301' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'HER027' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'KAN' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'OR357' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'WVC044' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'BC05' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'SY03' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'SLC120' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 2,
        ],
        'SLC096' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'ULE416' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'LEW01' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'SF411' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'EMG001' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        '1-M' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'MUR008' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'SR406' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'UPA408' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'GUN' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'SJD026' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'CE06' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'BOXW' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'TC06' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'SR413' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'WVC009' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'CNP04' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'NS07' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'FRV' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'LI305' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'PARS' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'SP301' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'SJD025' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 4,
        ],
        'SLC058' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 1,
        ],
        'SUM' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'ROY08' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'NRV908' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'CF08' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'EM410' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'DW03' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'HNY2' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'COUN02' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'KA06' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'BO38' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'ROY17' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'HER902' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'WJD060' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'SLC007' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'DEL18' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'AF322' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'NRV912' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'USA402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'SJD022' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'EM402' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'SW03' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'LOG24' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'LE315' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'KA19' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'BO07' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'WVC027' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 31,
            'us_congress_id' => 2,
        ],
        'HIN11' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        '5' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'KA07' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'AF318' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'LA44' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'PR349' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        '5-M' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'PLV08' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'SP308' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'PR341' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'WB05' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'SOG09' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'VC11' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'LI308' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'LA13' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'ML03' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'WAT02' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'SLC004' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'SLC052' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'MUR017' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'SAN021' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'MUR009' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'MUR010' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        '502' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'OGD06' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        '105' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'RCH01' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        '2' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'PER4' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'CL08' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'TC16' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'STG09' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'CC 21' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'CC 19' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'PARV' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'SAN024' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'OR332' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'KA09' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'CC 6' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'SLC098' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'AF319' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        '2_5_A' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'WCN002' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'WJD007' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'ULE405' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        '501' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'HER030' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'VC09' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'CE12' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'SA402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'ELWD' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'MANT' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'HI304' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'NE02' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'LE421' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'KA01' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'WVC031' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 31,
            'us_congress_id' => 2,
        ],
        'SJD015' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'MIL025' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'UBE401' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'HOL017' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'SJD042' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'KA03' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'LA01' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'FA04' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 2,
        ],
        'BL19' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'EC02' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        '500' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'TC14' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'SLC046' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'FLDG1' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'SAN906' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'SAN019' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'TC05' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'DRP017' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 3,
        ],
        'EM422' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'CWS09' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        '13' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'MIDV' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'HOLD8' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'COHS72' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'FA24' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 1,
        ],
        'OGD16' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'SF422' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'LA34' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SLC085' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        '306' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'GNT006' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'KA31' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 1,
        ],
        'SIL006' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'OGD33' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'ULE318' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'WJD008' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        '1' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SJD046' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'LOG22' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        '20' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'COVE' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'SP03' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'WJD032' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'SJD040' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'HUR08' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'BO27' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'WVC039' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 2,
        ],
        'CF12' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'SLC122' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'LE410' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'SLC099' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'MIL01' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'WJD027' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'DRP901' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 46,
            'us_congress_id' => 4,
        ],
        'SW04' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'SAN047' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'MIL901' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'SIL009' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'OR353' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'NS06' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'SC05' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'WJD063' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'MUR021' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'NIB01' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'UER401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'SIDE33' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'NRV409' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'NRV917' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'EM416' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'BU' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'TO06' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'SJD041' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'WB02' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'LE418' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'MTRS55' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'COT024' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'PA414' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'SJD031' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'PR355' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'OR324' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'AL301' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'BC10' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'LT21' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'DC11' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'WJD014' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'MIL030' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'UAF324' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'SOG01' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'COT003' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'LA14' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        '204' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'AB11' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'DRP026' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'SLC127' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'SHL003' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'FD18' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'ULE408' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'BO42' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'BLF009' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 46,
            'us_congress_id' => 4,
        ],
        'NLG01' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'SJD013' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 43,
            'us_congress_id' => 4,
        ],
        'LA58' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'LEAM7' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'WJD041' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'OR320' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        '39' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        '33' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'SJD028' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        '16' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'TAY025' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'NS04' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        '4' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'UER403' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'STG01' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'TR10' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'SSL009' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'LA70' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'AN1' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'BO29' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'ENT01' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'KRN005' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'LE311' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'SP307' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'OR363' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'LA18' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        '23' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'WAS01' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'CH' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'MN27' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'WVC037' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 2,
        ],
        'KA12' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SY34' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SMI06' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'BC11' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'WHT004' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 45,
            'us_congress_id' => 3,
        ],
        'LA12' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SLC008' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'SMI01' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'CWS02' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'STG30' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'UAF401' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        '550' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'WHV12' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'COWH' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'LA71' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'MIL031' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'CWS07' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'HAR01' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'WVC056' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'OAK6' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'FA10' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'CSU01' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'SSL011' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'UWM401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'NOG02' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'UAF310' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'DG01' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'UNKW' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'MUR033' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        '6' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'COT011' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'KA30' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 18,
            'us_congress_id' => 1,
        ],
        'TC10' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'WAS02' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'PCN001' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'LA27' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SQ405' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'COR' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'CE04' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'MUR018' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'CF05' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'NOG06' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'UAF317' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 52,
            'us_congress_id' => 3,
        ],
        'WHT002' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'SLC105' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'CA11' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'CC 13' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'BO32' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'KA33' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'NS13' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'LA22' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SJD039' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'NLG03' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'WP01' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'RIV023' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        '3-M2' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'MIL008' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'PRO02' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'CWS04' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'MUR003' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'KA29' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 18,
            'us_congress_id' => 1,
        ],
        'MUR027' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'TAY036' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'UHI311' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'LP02' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'SLC064' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'DC08' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 1,
        ],
        'KA11' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'SSL006' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'VC13' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'PR359' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'SMI02' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'FH02' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'SLC025' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'NS19' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'MAG008' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'SJD054' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'LI304' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'UAL301' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'RIV017' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'SJD052' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'UPM301' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 3,
        ],
        'WAT05' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        '31' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'SJD020' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'LE412' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'AL307' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'MID003' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        'SLC069' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'COT014' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'WEL01' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'PRO06' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'STG54' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'WP08' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'AW22' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'LP01' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        '2_2_B' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'WVC002' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'SLC044' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'TAY012' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'SLC113' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        '11' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'PR310' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'CC 16' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'THAY4' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'OR' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'WX04' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'LOG09' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'DRP001' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        '3_3' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SA408' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'STG33' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'SHL007' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'MIL033' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'MA403' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'SP402' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'HER006' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'RIV025' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'COT017' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'UCH308' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'ROY16' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'TC04' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'TAY007' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'COT015' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'HER009' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        '104' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'IFOR49' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'RVH02' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'WEL03' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'NE03' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        '15' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'CNP05' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        '3-U' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SAN046' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'MV01' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'HPR11' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'SAN041' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'LA56' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'RO22' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'PG301' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'NS08' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'SLC090' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'WJD903' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'WP03' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'TC12' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'BTNS34' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'UAF323' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'EM401' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'LA05' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'COV03' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'PR325' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'GNT011' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'USQ405' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'KA23' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'COV' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'SR422' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'GV07' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'MID002' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        'SMI04' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'MAG016' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'SLC019' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'LA10' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SY15' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'COT006' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'DC01' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 2,
        ],
        'CLN19' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'PA406' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'OGD09' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'SF404' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'RIV02' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'ULE321' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'STG57' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'RIV01' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'FA19' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'PR328' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        '1002' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'SLC057' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 1,
        ],
        'EU' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 2,
        ],
        'MAN' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        '17' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'PR335' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'KRN004' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'SML42' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 1,
        ],
        'LI302' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'BO26' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'WP11' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'DN24' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'SOG03' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'OR303' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'UUL402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'ROY05' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'OR356' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'TAY026' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'DRP024' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'SAN052' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 45,
            'us_congress_id' => 3,
        ],
        'WVC040' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 2,
        ],
        'LOG21' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'WVC028' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 31,
            'us_congress_id' => 2,
        ],
        'KRN013' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'HIL01' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'DVS31' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'OQR002' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'ULE317' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'SLC038' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'SF412' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'FH06' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'AL12' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'CC 27' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'HYR04' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'LE304' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'SP415' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'COCDSR' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'BLF010' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 46,
            'us_congress_id' => 4,
        ],
        'NE05' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'OR309' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'OLDS2' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'CF22' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'UUL401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 61,
            'us_congress_id' => 4,
        ],
        'ENO 6' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'PR301' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'SIL011' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        '1-C' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'UPM402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'AL305' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'LOG14' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'HUR10' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'PG305' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'UHC301' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 3,
        ],
        'CF01' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'CBL001' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'VIR01' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'SLC048' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'SLC026' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'OGD13' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'STG29' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'KRN012' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'SJD006' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'LA33' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'PR304' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'ISL001' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'STG13' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'PR339' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'PG316' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'SMI03' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'UIN02' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'LA76' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'WVC006' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'WJD044' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'LA06' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SIL010' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'GV06' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'CL06' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'OR318' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'AW16' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'HER012' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'HPR30' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'MAG001' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'TAY003' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'LA31' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'MAG012' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'HE6' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'STG31' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'HER019' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'HI312' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'USL401' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'CE18' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 1,
        ],
        'USF411' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'MID023' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'CC 25' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'BGC001' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'OR302' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'SAN023' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'SJD059' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'HER034' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'SR404' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'RIV003' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'OR335' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'SLC066' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'MID018' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        'GL' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'USA407' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'NOG01' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'UAL306' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'LE309' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'SAN033' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'VC10' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'HOL012' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'KRN002' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'EM420' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'WHV11' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'LOG02' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'ENO 2' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'PR344' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'DR301' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'WP13' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'SPR' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'SAN050' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 45,
            'us_congress_id' => 3,
        ],
        'SIL014' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'SLC042' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 2,
        ],
        'NRV915' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'CC 2' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'PR322' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'IVN04' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'EM415' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'SAN034' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'UAF308' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'MEN02' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'OGD24' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        '410' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'LA21' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SLC111' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'SP06' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'BC08' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'SLC030' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'ULE420' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'HER031' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'BO09' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'PLYM' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'TE05' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'WP07' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'WVC047' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'LA25' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'RIV006' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'SAN902' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'WVC035' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 2,
        ],
        'PA7' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'ST02' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'TAY006' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'PRDG45' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'SW07' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'SY05' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'SLC063' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'STG53' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'SLC094' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'NRV909' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'MUR006' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 4,
        ],
        'FR01' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        '301' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'LEW00' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'RIV018' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'PR318' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'HOL004' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        'SY04' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'CC 4' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'ROY12' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'EM417' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'UNINH' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'HUR03' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'FA09' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'CL01' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'SY38' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'PEOA15' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        '27' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'PLC02' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'AF307' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'SR414' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'PLV01' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'COT002' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'WHV10' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'HYD01' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'CF24' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'CWS03' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'HAR03' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'SPR01' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'MIL004' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 2,
        ],
        'SSL003' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'UPR304' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'STG02' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'CF20' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        '7' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'PARG' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'NOG11' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'SP08' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'ULE421' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'MAG004' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'UFF401' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'COT022' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'SLC022' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'WVC041' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 2,
        ],
        'SIL001' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        '414' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'CC 11' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'CF09' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'LE305' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'SR409' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'WHV05' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        '1_5' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'UPR308' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'WVC063' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'OR311' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'TAY010' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'EM407' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'SLC029' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'COT019' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'LY03' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'SJD048' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'MUR007' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 34,
            'us_congress_id' => 4,
        ],
        'PA402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'CE01' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'LE413' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'ULS401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'OR305' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'LA26' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'DRP002' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'BLF012' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 46,
            'us_congress_id' => 4,
        ],
        'SIL003' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'GNT002' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'AF312' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'SU04' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'HOL021' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        'DEL17' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'WJD016' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'LA02' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        '563' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        '205' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'HYR02' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'WVC052' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'WJD043' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'GV03' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'LA15' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'PG314' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'WAT03' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'PR362' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'HOL003' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        'WVC061' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'MIL009' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'ALT001' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'WAS17' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'LA52' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'CW' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'ROY23' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'CY' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        '3PK' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'SIL002' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'SJD043' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'PR358' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'LOG06' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'BC01' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'SLC061' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'MID021' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'ULE310' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'VI302' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'SSS11' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'AF323' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'GV02' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'NLG05' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'SF402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'WP05' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'HER904' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'LE417' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'BRYL' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'NRV905' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'SAN006' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'FRW01' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'UPC302' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'WJD037' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'CE11' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'DRP007' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'MIL02' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        '331' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'TC22' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        '12' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'BO13' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'WHT003' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 45,
            'us_congress_id' => 3,
        ],
        'SLC103' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        '14' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'MUR001' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'FAY' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'LA07' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'ROY11' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'WHV06' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'SLC125' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'OGD21' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'SY35' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SY08' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        '4-M2' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'MIL003' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 2,
        ],
        'BLF007' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'FRW02' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'OR301' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'WP06' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'MAG014' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'STG42' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'SLC112' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'OR344' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'DEWY' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'SA404' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'LAV01' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'WJD048' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'SY36' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'CL14' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'WVC050' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'LA75' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SJD063' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'LOG18' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'PR316' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'SOG06' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        '21' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'FH01' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'SJD017' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'WJD062' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'RO51' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'NEW' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'PER3' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'AF305' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'PRO03' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'OQR001' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'SUME30' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'HOYT18' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'RIV019' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'SHL006' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'SF420' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'FH07' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'KA24' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SJD057' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'NRV408' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'GV05' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'DRP028' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'UIN01' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'CC 18' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'AF310' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'AMA' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'SOG07' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'HPR31' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'KA16' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'PR367' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'ES4' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'MID012' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'OGD15' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'WP12' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'RIV031' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'STG35' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'LC01' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'UAF302' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'EPH' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'BO20' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'PR331' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'MOR' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        '2-U' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'USF402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'SW26' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'RIV028' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'WVC018' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'WJD026' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'WJD034' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'STG21' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'ULE411' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'MAG002' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'EM423' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'CF02' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'OR359' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'MID007' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'STG07' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'MID006' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        'STG19' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'RIV021' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'WJD001' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'LA46' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SW01' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'SF415' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'HOL002' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        'RIV016' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'SLC055' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 1,
        ],
        '3' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'PA8' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'PR321' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'GNT007' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'ULE301' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'SR401' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'MW25' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'JERW27' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'TAY023' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'WVC019' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'SC02' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'PG326' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        '32' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'GNT003' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'BTNN34' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'SLC053' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'RIV014' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'NRV406' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'COT008' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'WJD025' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'SAN042' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'SW02' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'STG22' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'SOG05' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'LA68' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'GV01' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'OR361' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'MIL007' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'OR346' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'CH302' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'BO2' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        '2_5' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'IVN01' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'FIL2' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'BO04' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'BC02' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'ULE312' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'SAN039' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'MAG015' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'HER016' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'MEN01' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'WP09' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'HI311' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'PA407' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'SLC020' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'STG27' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'ROY14' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        '5-U3' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'UHI301' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'HYR05' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'MUR024' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'WVC064' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'UHC402' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'PR327' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'TOQ02' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'TAY015' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        '24' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'VI305' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'SJD001' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'LE406' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'FA11' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'PEW51' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'TAY021' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'SLC051' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'AM11' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'CV' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'WAS05' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'CC 15' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'LE402' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'OR336' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        '10' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'SF413' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'SWT002' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        '307' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'CL17' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        '9' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'PR330' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'HI310' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'LOG04' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'HYR03' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'MSC04' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'STG12' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'DRP029' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'HOL007' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        'MIL039' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'JN01' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'ULE402' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'WJD004' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'HER032' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'SA403' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'SJD024' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 43,
            'us_congress_id' => 4,
        ],
        'DG02' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'SLC087' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'RIV008' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'SJD014' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 4,
        ],
        'SJD061' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'OR345' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        '34' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'DC05' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'SLC054' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 1,
        ],
        'OR362' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'PER1' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'COT012' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'BO33' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'COGL' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'KA1' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'FRW05' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'WAS14' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'OGD40' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'HNY1' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'SNOW' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'DU12' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'OAKS14' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'SJD010' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'LA37' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'UPA402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        '417' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'CL22' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'RIV033' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'PLV06' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'MUR012' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'SF418' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'KRN009' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'HER901' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        '560' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'WJD052' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'LA59' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'DC02' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'UHI306' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'SY27' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'KA10' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'WHV03' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'NS05' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'LA49' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'ULE417' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'CC 26' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'DC10' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'MUR029' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'LI306' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'WLD2' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'WR20' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'RIV030' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'FH04' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'PA412' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'LA74' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'OR349' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'DRP015' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'PR312' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'STG41' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'SP304' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'SCIP9' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'SSW22' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'PG321' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'SLC010' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'EC05' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'WCN001' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'WAS03' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'USF418' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'WVC034' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'NRV913' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'BO36' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'CF11' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        '504' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        '1003' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'NRV910' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'MSC03' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'SLC067' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'DRP020' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        '25' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'CC 28' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'SIL005' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'BCNW' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'MUR016' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'KA04' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'SAN036' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'BO16' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'WANE17' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'NRV903' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'SR408' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'STG06' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'SY09' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'LA53' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'SLC123' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'RVH01' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        '1-U3' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SLC049' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'PR329' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'BO14' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'SY20' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'SSL008' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'HYD02' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'LE422' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'KA15' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SSL005' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'OGD32' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'MID009' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        '2-M1' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'WVC007' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'CODXDR' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'COV02' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        '3-M1' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'STG44' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'WVC055' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'NE04' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'LE06' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'CC 29' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'MOL001' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        'UBN401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'LE312' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'MIL032' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        'BO24' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'DRP022' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'SJD004' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'WAS15' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'WAS10' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'OGD07' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'WP02' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'LA24' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'KA14' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'TAY008' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'WVC045' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'SLC073' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'BC14' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'MA407' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'NS02' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'KA2' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'SU03' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'FA25' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 1,
        ],
        '4-U' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'AL306' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'CC 7' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'DRP014' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'RIV009' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'STG20' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'MID020' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'PR314' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'OR317' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'OR352' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'FA13' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'WVC003' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'FR11' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'SLC100' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'SR416' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'SY33' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'NIB02' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'SAN030' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'GR01' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'DRP003' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 3,
        ],
        'SLC116' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'DRP019' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'AF311' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'RO42' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'EM424' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'SE29' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'CL15' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'DO5' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'LA61' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SAN028' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'STG18' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'SAN001' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'CL19' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'MAG007' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'HEN25' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'SLC031' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'HER025' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'SUMW10' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'UCF401' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'HOL013' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'WVC033' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'LPNW9' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'STG15' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'HPR12' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'VR01' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'MUR023' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'SLC117' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'TREW' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'WVC032' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 31,
            'us_congress_id' => 2,
        ],
        'TAY022' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'HI301' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'SW06' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'COT005' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'WX11' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'STR' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'ULE422' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'NS15' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'LTC001' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'PR340' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'WX09' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'MIL038' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 34,
            'us_congress_id' => 4,
        ],
        'SOG02' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'LYN19' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'OR328' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'BEN' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'LA40' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SLC068' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'UAF319' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'CC 17' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'SF410' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'MUR034' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'DC13' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'CF03' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'WJD040' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'NRV302' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'WVC024' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 2,
        ],
        'GV09' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'GARF58' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'KA36' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 1,
        ],
        'COT004' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'SLC009' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'COT013' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'FA06' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'CLS19' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'LOG25' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'CLK' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'SLC034' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'LA72' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'USQ408' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'KCYN43' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'WVC023' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 2,
        ],
        'BO23' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'BLF003' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'FH05' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'KA28' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'NRV907' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'COV01' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        '400' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'COLN56' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'NS12' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'SAN025' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'SFCC57' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'PA408' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'CONH28' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'MIL020' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 2,
        ],
        'WANW17' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'LA66' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'SAN048' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'ULE302' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'TAY027' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        '2_5_B' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'CWS05' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'COP001' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'NS14' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'BC07' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'HER018' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'RV01' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'WHV04' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'SLC021' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'LE405' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'SAN014' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'MID013' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'SLC056' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 1,
        ],
        'MA406' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'COV06' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'PROS3' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'RIV' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'RIV035' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'RIV005' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'SLC047' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'BLF006' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 46,
            'us_congress_id' => 4,
        ],
        'SAN038' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'ROY15' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'VI304' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'MIL021' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'PARE' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'SR412' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'MTP' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'SY32' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SAN037' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'USF421' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'HUN01' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'OGD23' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'LE303' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'LA51' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'TAY013' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'CF401' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'SJD062' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        '350' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'NS16' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        '40' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'SF406' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'LI310' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'UCB401' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'TC21' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'NS10' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'HEE38' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'TRE1' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'OGD14' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'SLC104' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'VC08' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'OGD01' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'SQ402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'EM406' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'KA05' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'SP10' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'HER001' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'LOG19' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'HUR11' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'BRT001' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'WJD056' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'KAN4' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'OGD20' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'LE306' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'DRP011' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'BO15' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'SLC018' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'BO28' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'FA21' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'HER905' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'SJD008' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'MUR019' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'PLV04' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'STG38' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'GNT001' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'SJD032' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'PARS7' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 1,
        ],
        'NSN24' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'PG320' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'HEW23' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'PG317' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        '5-U2' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'OGD29' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        '562' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'LOG16' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'FF401' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'UAF320' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'MAG005' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'FA12' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        '3-M4' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'WAS11' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'OAKN14' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'SLC012' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'SAN010' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'PR352' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        '1_3_B' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'DRP023' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'SAN011' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'BLF013' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 46,
            'us_congress_id' => 4,
        ],
        'BV01' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'CF21' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'BC04' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'SQ404' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'MID022' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'ROY02' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'ER402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'HOL009' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'EM405' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'DRP013' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'LA29' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SLC060' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        '2_2' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'DVN1' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'HYD03' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        '1_4' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'TRE' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'VC14' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'WVC049' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'SAN045' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'SIL012' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'SLC115' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'AF314' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'SP306' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 3,
        ],
        'AL303' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'SY24' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'SP416' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'NS' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'FA01' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 2,
        ],
        'SP411' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 62,
            'us_congress_id' => 4,
        ],
        'BO43' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'LE321' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'WP15' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'HER005' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'RIV013' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'SR405' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'WAS04' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'KA3' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'HI314' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'CL02' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'RO32' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'JERE37' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'SIL007' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'CH306' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'LA62' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'CE10' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'OR338' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'FA03' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'LA54' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'OR326' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'SAN064' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'ROY01' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        '102' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SA407' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'HER015' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'RO41' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'UEL401' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'ROY20' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'ULE314' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'COT018' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'CC 12' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'ENO 3' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'MUR004' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'OGD05' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'RCH02' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'NS09' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'WVC022' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 30,
            'us_congress_id' => 2,
        ],
        'SP05' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'CE13' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'AF306' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'CE08' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'SLC108' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'MO01' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'MUR005' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'CF14' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        '503' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SLC093' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'EC04' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'SAN029' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'LOG10' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'OGD36' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'TRE4' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'MID008' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        'GNT008' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'SLC106' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'KAMS12' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'CC 9' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'HOL010' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'OGD27' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'SY37' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SAN058' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 45,
            'us_congress_id' => 3,
        ],
        'LE319' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 52,
            'us_congress_id' => 3,
        ],
        'LAV02' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'BO30' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'SAN031' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'KA27' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'SAN062' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'WJD022' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'LA60' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'CF06' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'PR332' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'WJD013' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'UWM402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'SP310' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 3,
        ],
        '3_4_A' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'DRP012' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'SY11' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'PKMN35' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SJD018' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'SF408' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'MIL011' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'WJD036' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'CH305' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'CC 8' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'NOG03' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'SP406' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'PG307' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'WAS06' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'MA408' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'OR304' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'SAN022' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'LA16' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'HER013' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'BO05' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'WVC008' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 31,
            'us_congress_id' => 2,
        ],
        'LE317' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'RNDV47' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 1,
        ],
        'WSTV' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'RIV012' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'ROY03' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'KA08' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'SAN017' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        'TOQ01' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'TAY029' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'TAY014' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'SP302' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'NRV901' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'WJD064' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'BO21' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'MUR002' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'NS17' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'FTG' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'TC03' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'ULS402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'WEBC21' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        '100' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'USR424' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'SP414' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 62,
            'us_congress_id' => 4,
        ],
        'SAN005' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'SIL004' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'KA02' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'WJD038' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'SP07' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'HOWL' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'OR316' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'COHS74' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'KRN001' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'NOG08' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'KA35' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 2,
        ],
        'KA13' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'LE316' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'SLC011' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'MIL013' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'SJD051' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'LOG07' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'STG34' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        '412' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'STG52' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'SP01' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'SAN901' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'SLC016' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'UBN402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'MIL001' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'OGD41' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'WAS08' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'FA17' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'LE411' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'KA18' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'HER008' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'CWS01' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'NE01' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'MUR014' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'WVC048' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'SLC036' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'WJD901' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'NRV304' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'TC20' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'TAY032' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'LOG11' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'BO17' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'COT025' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        '1-U1' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SJD034' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'OGD12' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'BO11' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'TRES' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'KA17' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SJD064' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'KRN010' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'LI301' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'WB01' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'MIL026' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'NIB04' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'ULE316' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        '30' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'TC09' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'UAF307' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'TA12' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'CL12' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'COR1' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'LA32' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'EC03' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        '1-T' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'KA4' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'DE02' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'NOG09' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'BO35' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'CE05' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'NW28' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'UOR350' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'STG51' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'WJD045' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'MIL018' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'CC 24' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'SA405' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'SLC078' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'MAG003' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'RIV024' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'OR333' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'COCNBR' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'BC09' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'MIL041' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        'SY13' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'KRN007' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'WX07' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'PG308' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'WHV07' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'SMI05' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'CH308' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'SY23' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'SF416' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'SP408' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'SLC050' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        '3_4' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'WP14' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'VI301' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'ER401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'LA23' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'TAY031' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'MUR015' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'KAMN12' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'WHV09' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'FRAE28' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'HPR10' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'SLC903' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        '1_2_B' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'COUN08' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'PLC03' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'LA20' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'PR302' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'OR340' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'STG26' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'WJD003' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        '520' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SJD055' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'WVC036' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 2,
        ],
        'SAN018' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'COHV28' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'WEL02' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        '1001' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'CF17' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'OGD17' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'WVC010' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'ROY09' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'RO31' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'OR337' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'COT007' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'WAT04' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        '207' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SR402' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'WVC011' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'CL04' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'MTCR59' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'OGD30' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'NRV906' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'WJD070' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'WAS18' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'WJD071' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'DRP027' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'PR315' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'STG11' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'OGD22' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        '1_1_M' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SLC107' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'TAY035' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'SLC045' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'SJD044' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'SSL007' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'KA32' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'WVC057' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'PLV11' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'LA63' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'PRO05' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'SR411' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'TAY002' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'SAN020' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'OGD11' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'AL' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'LOG13' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'STG36' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'SJD003' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'UPIN41' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'NS18' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'MIL042' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'HER017' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'HPR21' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'GNT014' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'ULE410' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'BH' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'CL18' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'HOL018' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'SAN026' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'CF10' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'PR360' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'FRW04' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'NRV914' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'TAY028' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'WVC026' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 30,
            'us_congress_id' => 2,
        ],
        'SU01' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'PLV02' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'CL13' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'VI307' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'HOL019' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'HER003' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'COUN03' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'RIV029' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'SAN057' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 45,
            'us_congress_id' => 3,
        ],
        'CL10' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'CL11' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'WHV08' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'SLC081' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'WJD072' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'WHV01' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'IB01' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'FA18' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'WJD035' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'OR341' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'STG16' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'SJD045' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'PR313' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'BO37' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'WVC020' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'UPR364' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'SJD033' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        '3_3_BF' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'TC13' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'COUN07' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'BO18' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'WAS12' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'PA413' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'SAN009' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'PR338' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'APV01' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'HA5' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'BV04' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'WHV13' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'ENO 4' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'TC15' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'HUR01' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        '303' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'KA26' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'VI306' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'CE07' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'PLV07' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        '540' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SLC129' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'AF301' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        '101' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'MIL027' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'SP04' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'AR11' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'USR411' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'MID014' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'STG49' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'NS11' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'DRP018' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'RCK01' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'OR330' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'VI308' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'SMI07' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'MAG013' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'CL03' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'SJD049' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'SHL005' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'PRO01' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'NOG05' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'LE308' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'PR356' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'RPL26' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'TC17' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'WE01' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'BGC002' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'OR322' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'PRO04' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        '530' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'WB04' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'SAN003' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        '202' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'CL05' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'AE15' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'BC06' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'PR308' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'CF19' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'HER023' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'CONCF' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'MIL010' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'UPC301' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'MAG901' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'EM408' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'SP404' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'CEN' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'BO06' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'AF324' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'LA41' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'COT021' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'MIL028' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 34,
            'us_congress_id' => 4,
        ],
        'SOG10' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'SLC091' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'ABR14' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'STG23' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'HER011' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'SSL901' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'SOG11' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'TRE5' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'WVC021' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 30,
            'us_congress_id' => 2,
        ],
        'MID015' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'PR311' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'UCB402' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'CNP03' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'GAR1' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'CC 20' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'PLV05' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'LA39' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'LA50' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'LE416' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'WX08' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'PA411' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'SLC074' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'MID017' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'SAN060' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 45,
            'us_congress_id' => 3,
        ],
        'SLC084' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'OR312' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        '3_1' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'OLDN32' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SF401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'LE302' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'PG312' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'ROY06' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'BEAR' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'LA43' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'WVC015' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'PG325' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'FA05' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'FH08' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'PG313' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'WJD068' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'IVN06' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'SLC070' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'WAT01' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'NRV918' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'OGD37' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'OGD04' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'SJD038' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'WJD029' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'BO25' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'STG48' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'WVC013' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'HER024' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'SW11' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'WCR002' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'LA28' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'OGD34' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'LA67' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'DR302' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'RIV007' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'OGD10' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'DRP006' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 3,
        ],
        'AF320' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'LA38' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SLC902' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'ML01' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'DRP021' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'PA401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'GARE' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'SLC015' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'SLC075' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'WJD011' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'LE407' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'NRV401' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'LA17' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'OR327' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'SAN015' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'KRN014' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'WJD017' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'PG304' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'SHL002' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'CC 5' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'SLC023' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'STG03' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'WP04' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'STG40' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'HA07' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'SY21' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'BV02' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'TAY009' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'SAN027' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 4,
        ],
        'PR363' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'WVC051' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'WVC005' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'WVC001' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'SQ410' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'SA401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'NHT01' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'SUTH20' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'RIV03' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'HA6' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'BO01' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'MEA3' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        '22' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'SAN903' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'SLC080' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'WJD053' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'SJD005' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'WX10' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'FA20' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'OR358' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'SJD029' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'UGE402' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'WVC060' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'OR348' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'WVC029' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 2,
        ],
        'SP02' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'SLC040' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'PROM48' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'BW' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'SSL010' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'EC01' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'ECOR46' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'SLC118' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'COLEED' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        '1-U2' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SLC041' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'STG58' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'RIV001' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'GN23' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'PR319' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'SAN040' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'UOR360' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'LE401' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        '203' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'COT009' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'SY17' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'UMA406' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'NRV402' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        '200' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'MUR025' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'SY30' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'KA21' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'HER007' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'PR342' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'MAG009' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'SAN007' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'ULE413' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'ML02' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'STG43' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'MID016' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'DU11' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'WJD054' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'RO11' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'SR418' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'OR334' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'AF317' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 52,
            'us_congress_id' => 3,
        ],
        'SJD023' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'STG55' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        '1_4_B' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'STG10' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'DF07' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'DC09' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 1,
        ],
        '201' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'COUN06' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'LE404' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'WJD058' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'SLC901' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'UPR321' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'MID004' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        'TE01' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'COT010' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'DC04' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'PR333' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'USQ404' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'BO40' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'SAN004' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'LE310' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'RANS36' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 1,
        ],
        'ROY07' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'CE15' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'PINN39' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'SJD030' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'ROY18' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'KRN006' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'TC08' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'CF15' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'SLC109' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'GV04' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'LA03' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SLC003' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'LPNE9' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'SSL012' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'WAGN29' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'WJD057' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'IVN05' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'NS03' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'FA15' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'SR415' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'ULE423' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'NRV305' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'CF04' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'SLC065' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'WX05' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'BC03' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'UHI302' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'PR345' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'SJD012' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 43,
            'us_congress_id' => 4,
        ],
        'BLF005' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'SSL004' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'HUR07' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'TAY005' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'QUAR6' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'CE16' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'LOG15' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'CL21' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'WJD024' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'OGD19' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'SLC126' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 2,
        ],
        'DRP025' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'MIL024' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'WJD033' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'STG46' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'WVC017' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'TC01' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        '305' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'TM11' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'RO12' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'TRE2' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'SJD007' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'MIL012' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'CODIV' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'HA01' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'CWS08' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'MID019' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'BO31' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'ST01' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'SHL001' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'SAN032' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'UOR361' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'GV08' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'WJD046' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'MA401' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'SAN054' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'PLV10' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'HOL020' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'TAY004' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'SJD036' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'SAN016' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'WJD018' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'EM414' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'CC 10' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'COT023' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'MUR030' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        '3_2' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'LE301' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'WJD069' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'SQ407' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'CL07' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'SF403' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'ME06' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'OR354' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'MID001' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        'SLC006' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 22,
            'us_congress_id' => 2,
        ],
        'WJD050' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'CE17' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'BLF002' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'SAN053' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'OGD38' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'MID011' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'CC 23' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'ENO 1' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'NIB03' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'GV10' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'UNINHC' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'TAY020' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'FIL1' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'BO44' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'TAY018' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'GO401' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'DRP005' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'LOG20' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'STG14' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'WX02' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'DRP004' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'HOL005' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        'WAS09' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'DRP008' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'PR350' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'FA08' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'SLC062' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'BO02' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'SLC082' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'SAN002' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'SLC033' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'CSU02' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'ULE319' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 52,
            'us_congress_id' => 3,
        ],
        'HI306' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'CE03' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'BO10' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'SP305' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'OGD39' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'WJD006' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'BLF011' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 46,
            'us_congress_id' => 4,
        ],
        'SY12' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'SP09' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'COPINE' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'SLC017' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'WJD009' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'SLC059' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 1,
        ],
        'SW09' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'PLC01' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'TAY034' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'STG28' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'SJD058' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'MIL017' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'LO02' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'HOL001' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        'PG302' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'DC03' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'VC12' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'SIL008' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'BV03' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'UINT52' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'WLD1' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'COV05' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'NLG04' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'LA08' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'STG37' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'HUR09' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'COUN01' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'HI305' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'LOG12' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'COUN04' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'MIL022' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'OR323' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        '37' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'OGD28' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'MY12' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'WVC038' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 2,
        ],
        'NRV407' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 61,
            'us_congress_id' => 4,
        ],
        'PG318' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'LAV03' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'SY14' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'OR314' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'SQ408' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'FA23' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'LA69' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'SJD037' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'PA404' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'RIV020' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'STG17' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'HUR05' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'FH03' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'AL304' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'WJD055' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'DC06' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'HER021' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'AF401' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'TRE6' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'FA14' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'EM418' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'MSC01' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'SJD060' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'B02' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'TC11' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'BI04' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'BC15' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'NRV916' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'SR417' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        '206' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'WJD019' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'LA35' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'HOL006' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        '330' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'DC15' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 1,
        ],
        'LE420' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        '208' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SLC121' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'SY25' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'CF23' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'BC12' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'UBN403' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'ROY13' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'OR350' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'NOG12' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'CH304' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'RIV011' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'WH401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'SAN063' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'PR354' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'BC13' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'SY10' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'SMI08' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'GNT004' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'TAY030' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'SR410' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'WVC025' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 2,
        ],
        'FA16' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        '320' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SJD053' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'KA34' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'MIL034' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'SLC072' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'WVC062' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'SJD009' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        '300' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'UGO402' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'DC17' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        '4-M1' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SLC071' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'OGD26' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'MA402' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'HER033' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'SLC128' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'LA48' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'LA04' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'MIL040' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'SP303' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 3,
        ],
        'LA42' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SY06' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'RIV010' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'RIV015' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'OR306' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'MSC02' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'PA410' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'SCRU8' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'SW08' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        '3_5' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'PR305' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'WHT001' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        '8' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'MAY' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'IVN03' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'COV04' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'SP409' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'COUN09' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'SR420' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'CH301' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'ROY22' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'TC19' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'PAR' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'HER022' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'GAR2' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'LA47' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'MAG011' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'SLC035' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'SJD011' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'SLC002' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'SC01' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'PORT' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'WVC043' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 31,
            'us_congress_id' => 2,
        ],
        'WJD030' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'MHW40' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'WJD059' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'NS01' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        '5-U1' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'KA22' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'HER004' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        '304' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'PR324' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'MID024' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'RR13' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'SLC097' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'WJD039' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'GNT012' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'GNT009' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'SLC086' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'STG50' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        '2-M3' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SP410' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'BO41' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'CA3' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'MUR036' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 34,
            'us_congress_id' => 4,
        ],
        'NOG04' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'SF407' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'SAN904' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'NRV904' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'BLF008' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'TAY019' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'MA404' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'CC 22' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'LA64' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'BO22' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'UHI310' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'SAN051' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 45,
            'us_congress_id' => 3,
        ],
        'LA55' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'RIV002' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'MID010' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 3,
        ],
        'WJD015' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'WCR001' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'SJD002' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'WHV02' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'COT901' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'HUR02' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'FA22' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'CM' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'ROY21' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'SC04' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'PG323' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'SAN061' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 45,
            'us_congress_id' => 3,
        ],
        'GAR16' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'BO19' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'OR321' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'MIL036' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        'SY28' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'COUN05' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'HONY' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'HOL022' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'NE11' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'TAY016' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'MUR020' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'ROCP54' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'BO03' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'MIL015' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 2,
        ],
        'SLC119' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'FRAW28' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'LA19' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'LOG23' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'PR366' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'SAN012' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'AL302' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'HPR22' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'TAY017' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'SAN008' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'WVC042' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 2,
        ],
        'SLC124' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'UAF306' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'SP401' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'PR364' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'OGD18' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'WJD049' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'WJD066' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'AF302' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'MIL035' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'PG322' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'HI307' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'HYR01' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 5,
            'us_congress_id' => 1,
        ],
        'WJD012' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'CF13' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'AF308' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'HER028' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'WAL' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'SLC001' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'UUL303' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'CE14' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'USQ401' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'RO21' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'OR360' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'SF425' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'NRV911' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'CF07' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'PR346' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'STG47' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'PR365' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'MIL019' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'MUR011' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 4,
        ],
        '103' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'TI9' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'SLVR16' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'PARN' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'CF18' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'FLO25' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 29,
            'us_congress_id' => 2,
        ],
        'MO02' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'HER014' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'PLV03' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'HUR04' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'WVC053' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'OGD08' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'CE02' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'MIL016' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 2,
        ],
        'WVC059' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'COT020' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'RIV032' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'GNT010' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'MUR031' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        'WJD902' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 4,
        ],
        'GE402' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'SLC037' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'HER029' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'KRN901' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'LE320' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'LOG17' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'MIL037' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 3,
        ],
        '3-M3' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SAN013' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 43,
            'us_congress_id' => 3,
        ],
        'PR306' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'PR320' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'WVC030' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 31,
            'us_congress_id' => 2,
        ],
        'KRN008' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'BO34' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'MUR022' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'SR421' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'UPA401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'RIV04' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'HOL008' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'KA25' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'CCRK20' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        '411' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SLC027' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 2,
        ],
        'SJD056' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'HOL016' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'GNT015' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'OGD25' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'LE423' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        '18' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'SY16' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        '120' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'BO08' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'HI313' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'LE414' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'MIL006' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'PG324' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'BO12' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'LA77' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'BO39' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'HOL015' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'BR11' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 69,
            'us_congress_id' => 2,
        ],
        'LA73' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        '2_3_B' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SY01' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'TC18' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'WVC016' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'USR410' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'LE314' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'AXT' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'WJD051' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'LOG01' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'WVC014' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'GNT013' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        '413' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'PR343' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'STG39' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'SLC089' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'SJD016' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'NS20' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'OGD31' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'SLC014' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'WJD047' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'MAG010' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'GS17' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'SLC043' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'SLC114' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'RIV027' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'FLDG2' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'CC 14' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'PR336' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        '340' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'OGD35' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'NRV405' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'SAN043' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        '2-M2' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'GE401' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'PR326' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'SCRL44' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'BLF004' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'SLC028' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'NLG02' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'SC03' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'PER2' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'SLC083' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'SY22' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'DC12' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        '561' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SJD035' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'HI302' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        '416' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'WAS13' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'PLC04' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'PG310' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'PKMS5' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'PR307' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'ROY04' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'SLC013' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'CC 1' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        'DRP010' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'SAN055' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'EM412' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'WJD028' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'LI309' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'PLC05' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'DRP009' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        '121' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'LA65' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SQ401' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'HER002' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'SAN049' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 45,
            'us_congress_id' => 3,
        ],
        'SLC095' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'WAS16' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'LOG08' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'ULV302' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'CL09' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'GSL001' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'CWS06' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 9,
            'us_congress_id' => 1,
        ],
        'PR348' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 61,
            'us_congress_id' => 3,
        ],
        'SY07' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'AF304' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'SC06' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'HUR06' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'SAN044' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'SJD050' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'SA406' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'ROY10' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'SY18' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'SP405' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'RIV901' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'CC 3' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 71,
            'us_congress_id' => 2,
        ],
        '36' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'SR424' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'KRN011' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        '106' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'SIL013' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'MID005' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        'WJD020' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'STG56' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'SY19' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'HOL014' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'SF421' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'SJD019' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'SJD021' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'WJD023' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'HAR04' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'PA405' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'MUR013' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 35,
            'us_congress_id' => 4,
        ],
        'ULV301' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'HER010' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'SY26' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'SJD027' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'MIL005' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'WJD061' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        '302' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'MUR026' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        '2_3' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'OR308' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        '1_1' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'TAY033' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'RIV022' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'OGD03' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'LE408' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 52,
            'us_congress_id' => 4,
        ],
        'LA09' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'STG45' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'SS' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 66,
            'us_congress_id' => 4,
        ],
        'LEED01' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'SLC092' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'NOG10' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'PARW7' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 1,
        ],
        'SLC077' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 1,
        ],
        'HPR20' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'SOG04' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 10,
            'us_congress_id' => 1,
        ],
        'SAN065' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'DC14' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'TC02' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'PG309' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'WVC004' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'CODAV' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'WVC058' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'SSL001' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'SF424' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'OR329' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 58,
            'us_congress_id' => 3,
        ],
        'SAN035' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'CL20' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'SLC110' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'SLC032' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 2,
        ],
        'HUR12' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'USP406' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'WCR003' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'MUR028' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'MAG006' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 27,
            'us_congress_id' => 2,
        ],
        'OR310' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 56,
            'us_congress_id' => 3,
        ],
        'DC16' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 1,
        ],
        'PLV09' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'CNP02' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 8,
            'us_congress_id' => 1,
        ],
        'UCV401' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'OR342' => [
            'ut_senate_id' => 23,
            'ut_congress_id' => 57,
            'us_congress_id' => 3,
        ],
        'STG04' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'CNP01' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'SLC079' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 25,
            'us_congress_id' => 2,
        ],
        'STG08' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'CF16' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'NRV902' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'WAS07' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'LOG05' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'SF419' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'SW05' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'SSL002' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 24,
            'us_congress_id' => 2,
        ],
        'SW10' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'WJD065' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'GNT005' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'SLC088' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'KA20' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 1,
        ],
        'WJD031' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        'TRE3' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'RIV004' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 48,
            'us_congress_id' => 4,
        ],
        'BLF001' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 47,
            'us_congress_id' => 4,
        ],
        'SU02' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'STG32' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'CL16' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'PR334' => [
            'ut_senate_id' => 24,
            'ut_congress_id' => 60,
            'us_congress_id' => 3,
        ],
        'ROY19' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 12,
            'us_congress_id' => 1,
        ],
        'EM411' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'BD/C' => [
            'ut_senate_id' => 1,
            'ut_congress_id' => 1,
            'us_congress_id' => 1,
        ],
        'AF316' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'ER403' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'SR423' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'HOL011' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 34,
            'us_congress_id' => 3,
        ],
        'LA11' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SLC101' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'OGD02' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'TAY011' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'HER020' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'WB03' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        'RIV026' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'PR353' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 62,
            'us_congress_id' => 3,
        ],
        'SSE13' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 4,
            'us_congress_id' => 3,
        ],
        'MIL002' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'MUR035' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'MUR032' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 40,
            'us_congress_id' => 4,
        ],
        'SLC024' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 22,
            'us_congress_id' => 1,
        ],
        'WVC046' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'STG24' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'EM419' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'SR419' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'NOG13' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'SJD047' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'SY02' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 14,
            'us_congress_id' => 1,
        ],
        'RIV034' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 45,
            'us_congress_id' => 4,
        ],
        'WX01' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'WVC054' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 30,
            'us_congress_id' => 4,
        ],
        'EM404' => [
            'ut_senate_id' => 22,
            'ut_congress_id' => 50,
            'us_congress_id' => 4,
        ],
        'NOG14' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'HER026' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'ENO 5' => [
            'ut_senate_id' => 28,
            'ut_congress_id' => 70,
            'us_congress_id' => 2,
        ],
        'SJD901' => [
            'ut_senate_id' => 17,
            'ut_congress_id' => 44,
            'us_congress_id' => 4,
        ],
        'WX06' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'USF410' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        '415' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 59,
            'us_congress_id' => 3,
        ],
        'COT026' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        '38' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'LA57' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'WVC012' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 26,
            'us_congress_id' => 2,
        ],
        'WJD067' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 39,
            'us_congress_id' => 4,
        ],
        '1_2' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 69,
            'us_congress_id' => 3,
        ],
        'SO05' => [
            'ut_senate_id' => 20,
            'ut_congress_id' => 68,
            'us_congress_id' => 3,
        ],
        'SAN056' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 45,
            'us_congress_id' => 3,
        ],
        'WX03' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'WJD042' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'WJD002' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'FRW03' => [
            'ut_senate_id' => 4,
            'ut_congress_id' => 6,
            'us_congress_id' => 1,
        ],
        'NLG06' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'UAF305' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'DC07' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 20,
            'us_congress_id' => 2,
        ],
        'IVN02' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 74,
            'us_congress_id' => 2,
        ],
        'DRP016' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 46,
            'us_congress_id' => 3,
        ],
        'MIL014' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 32,
            'us_congress_id' => 2,
        ],
        'SY31' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'SLC076' => [
            'ut_senate_id' => 9,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'SY29' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'LE403' => [
            'ut_senate_id' => 18,
            'ut_congress_id' => 51,
            'us_congress_id' => 4,
        ],
        'CE09' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'WJD010' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'NRV410' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'SP412' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 63,
            'us_congress_id' => 4,
        ],
        'MIL023' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 33,
            'us_congress_id' => 1,
        ],
        'FA02' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 17,
            'us_congress_id' => 2,
        ],
        'SQ406' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 65,
            'us_congress_id' => 4,
        ],
        'CONH27' => [
            'ut_senate_id' => 27,
            'ut_congress_id' => 72,
            'us_congress_id' => 2,
        ],
        'WP10' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 13,
            'us_congress_id' => 1,
        ],
        'SHL004' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'WJD005' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
        'CH307' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'COT016' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'FA07' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 18,
            'us_congress_id' => 2,
        ],
        'COHS75' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 75,
            'us_congress_id' => 2,
        ],
        'TAY024' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 36,
            'us_congress_id' => 4,
        ],
        'PG303' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'SLC102' => [
            'ut_senate_id' => 14,
            'ut_congress_id' => 23,
            'us_congress_id' => 2,
        ],
        'SOG08' => [
            'ut_senate_id' => 5,
            'ut_congress_id' => 11,
            'us_congress_id' => 1,
        ],
        'HAR02' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'WB06' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 19,
            'us_congress_id' => 2,
        ],
        '19' => [
            'ut_senate_id' => 26,
            'ut_congress_id' => 67,
            'us_congress_id' => 3,
        ],
        'SLC005' => [
            'ut_senate_id' => 8,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'LA30' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'MIL029' => [
            'ut_senate_id' => 13,
            'ut_congress_id' => 34,
            'us_congress_id' => 4,
        ],
        'COT001' => [
            'ut_senate_id' => 15,
            'ut_congress_id' => 41,
            'us_congress_id' => 3,
        ],
        'NOG07' => [
            'ut_senate_id' => 3,
            'ut_congress_id' => 7,
            'us_congress_id' => 1,
        ],
        'HI308' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 54,
            'us_congress_id' => 3,
        ],
        'LOG03' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 3,
            'us_congress_id' => 1,
        ],
        'PG311' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'TAY001' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 31,
            'us_congress_id' => 4,
        ],
        'HER903' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 49,
            'us_congress_id' => 4,
        ],
        'SF414' => [
            'ut_senate_id' => 25,
            'ut_congress_id' => 64,
            'us_congress_id' => 4,
        ],
        'SAN059' => [
            'ut_senate_id' => 19,
            'ut_congress_id' => 42,
            'us_congress_id' => 3,
        ],
        'LA36' => [
            'ut_senate_id' => 7,
            'ut_congress_id' => 16,
            'us_congress_id' => 1,
        ],
        'SLC039' => [
            'ut_senate_id' => 10,
            'ut_congress_id' => 21,
            'us_congress_id' => 2,
        ],
        'KRN003' => [
            'ut_senate_id' => 12,
            'ut_congress_id' => 37,
            'us_congress_id' => 4,
        ],
        'RCH03' => [
            'ut_senate_id' => 2,
            'ut_congress_id' => 2,
            'us_congress_id' => 1,
        ],
        'STG05' => [
            'ut_senate_id' => 29,
            'ut_congress_id' => 73,
            'us_congress_id' => 2,
        ],
        'PG306' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 55,
            'us_congress_id' => 3,
        ],
        'LA45' => [
            'ut_senate_id' => 6,
            'ut_congress_id' => 15,
            'us_congress_id' => 1,
        ],
        'TC07' => [
            'ut_senate_id' => 11,
            'ut_congress_id' => 28,
            'us_congress_id' => 2,
        ],
        'LE318' => [
            'ut_senate_id' => 21,
            'ut_congress_id' => 53,
            'us_congress_id' => 3,
        ],
        'WJD021' => [
            'ut_senate_id' => 16,
            'ut_congress_id' => 38,
            'us_congress_id' => 4,
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state_senate_office = PublicOfficePosition::firstWhere('name', 'State Senate');
        $state_congress_office = PublicOfficePosition::firstWhere('name', 'State Congress');
        $us_congress_office = PublicOfficePosition::firstWhere('name', 'U.S. Congress');
        foreach ($this->precincts as $precinct_name => $precinct) {
            if (isset($precinct['ut_senate_id'])) {
                $location = Cache::remember('utah-senate_district-' . $precinct['ut_senate_id'], 30, function () use ($precinct) {
                    return Location::where('type', 'state_senate')->firstWhere('name', 'District ' . $precinct['ut_senate_id']);
                });
                if($location) {
                    $ballot = Cache::remember('ballot-' . $location->id . '-' . $state_senate_office->id, 30, function () use ($location, $state_senate_office) {
                            return Ballot::where('location_id', $location->id)->firstWhere('office_id', $state_senate_office->id);
                        }
                    );
                    if($ballot) {
                        BallotPrecinct::create(
                            [
                                'ballot_id' => $ballot->id,
                                'precinct_id' => $precinct_name,
                            ]
                        );
                    }
                }
            }
            if (isset($precinct['ut_congress_id'])) {
                $location = Cache::remember('utah-congress_district-' . $precinct['ut_congress_id'], 30, function () use ($precinct) {
                    return Location::where('type', 'state_congress')->firstWhere('name', 'District ' . $precinct['ut_congress_id']);
                });
                if ($location) {
                    $ballot = Cache::remember(
                        'ballot-' . $location->id . '-' . $state_congress_office->id,
                        30,
                        function () use ($location, $state_congress_office) {
                            return Ballot::where('location_id', $location->id)->firstWhere('office_id', $state_congress_office->id);
                        }
                    );
                    if ($ballot) {
                        BallotPrecinct::create(
                            [
                                'ballot_id' => $ballot->id,
                                'precinct_id' => $precinct_name,
                            ]
                        );
                    }
                }
            }
            if (isset($precinct['us_congress_id'])) {
                $location = Cache::remember('utah-us_congress_district-' . $precinct['us_congress_id'], 30, function () use ($precinct) {
                    return Location::where('type', 'us_congress')->firstWhere('name', 'District ' . $precinct['us_congress_id']);
                });
                if ($location) {
                    $ballot = Cache::remember(
                        'ballot-' . $location->id . '-' . $us_congress_office->id,
                        30,
                        function () use ($location, $us_congress_office) {
                            return Ballot::where('location_id', $location->id)->firstWhere('office_id', $us_congress_office->id);
                        }
                    );
                    if ($ballot) {
                        BallotPrecinct::create(
                            [
                                'ballot_id' => $ballot->id,
                                'precinct_id' => $precinct_name,
                            ]
                        );
                    }
                }
            }
        }
    }
}
