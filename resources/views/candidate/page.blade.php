@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row gx-0 justify-content-center">
            {{-- LEFT COLUMN --}}
            <div class="col-6 p-5">
                <div class="p-2">
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <img style="height:95%;width:95%" class="img-thumbnail" alt="Politician Image here" src="{{ Storage::url('images/' . $candidate->image_id  . '.jpg') }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                Name: {{ $candidate->name }}
                            </div>
                            <div>
                                Party: {{ $candidate->party->name }}
                            </div>
                            <div>
                                Running For: {{ $candidate->position->name }}
                            </div>
                            <div>
                                Email Candiate:  
                            </div>
                        </div>
                    </div>
                    {{--  
                    TODO: Ask people if one looks better than another
                    <img style="height:95%;width:95%" class="img-thumbnail" alt="Politician Image here" src="{{ Storage::url('images/' . $candidate->image_id  . '.jpg') }}">
                    <div class="p-2">
                        <div>
                            Name:
                        </div>
                        <div>
                            Party: 
                        </div>
                        <div>
                            Running for:  
                        </div>
                        <div>
                            Email your feedback:  
                        </div>
                    </div> --}}
                </div>
                <div class="p-2">
                    <div id="donorsInfo">
                        <button style="width:95%" class="card card-body" type="button" data-bs-toggle="collapse" data-bs-target="#campaignDonorCollapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                            <div class="row">
                                <div class="col-8 text-start">
                                    Campaign Donors
                                    <i class="bi bi-cash-stack"></i>
                                </div>
                                <div class="col-2 offset-2 text-center">
                                    <i class="bi bi-caret-down-fill"></i>
                                </div>
                            </div>
                        </button>
                        <div class="collapse multi-collapse" id="campaignDonorCollapse">
                            <div style="width:95%" class="card card-body no-border">
                                {{-- {{dd( count($candidate->donors), count($candidate->donors) == 0 )}} --}}
                                @if(count($candidate->donors) >= 1) 
                                    @foreach ($candidate->donors as $donor)
                                        Name:  {{$donor->name}}
                                        <br>
                                    @endforeach
                                @else
                                    No donor data as of yet.
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- {{dd($candidate->politician)}} --}}
                    <div id="previousPoisitonsInfo" class="mt-4">
                        <button style="width:95%" class="card card-body" type="button" data-bs-toggle="collapse" data-bs-target="#prevPositionsInfoCollapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                            <div class="row">
                                <div class="col-8 text-start">
                                    Previous Poisitons in Public Office
                                    <i class="bi bi-bank"></i>
                                </div>
                                <div class="col-2 offset-2 text-center">
                                    <i class="bi bi-caret-down-fill"></i>
                                </div>
                            </div>
                        </button>
                        <div class="collapse multi-collapse" id="prevPositionsInfoCollapse">
                            <div style="width:95%" class="card card-body no-border">
                                @if($candidate->politician)
                                    {{-- TODO: Get each held office --}}
                                @else
                                    This Candidate has not held office before
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- RIGHT COLUMN --}}
            <div class="col-6 p-5">
                <div class="p-2">
                    {{-- CAMPAIGN VIDEOS --}}
                    <div id="campaignInfo">
                        <button style="width:95%" class="card card-body" type="button" data-bs-toggle="collapse" data-bs-target="#campaignInfoCollapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                            <div class="row">
                                <div class="col-8 text-start">
                                    Campaign Videos
                                    <i class="bi bi-display"></i>
                                </div>
                                <div class="col-2 offset-2 text-center">
                                    <i class="bi bi-caret-down-fill"></i>
                                </div>
                            </div>
                        </button>
                        <div class="collapse multi-collapse" id="campaignInfoCollapse">
                            <div style="width:95%" class="card card-body no-border">
                                @if(count($candidate->videos) >= 1) 
                                    @foreach ($candidate->videos as $video)
                                        Link:  {{$video->link}}
                                        <br>
                                    @endforeach
                                @else
                                    No campaign videos as of yet
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- CONTROVERSIAL OPINIONS --}}
                    <div class="mt-4" id="opinionsInfo">
                        <button style="width:95%" class="card card-body" type="button" data-bs-toggle="collapse" data-bs-target="#contraOpinionsCollapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                            <div class="row">
                                <div class="col-8 text-start">
                                    Controversial Opinions
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5067 1.50804C10.6884 1.29895 10.9706 1.20705 11.2406 1.26954C14.8494 2.09755 16.6735 6.05217 16.2445 9.5953C16.0778 10.9657 15.6658 12.0439 15.0592 12.9518C15.0555 12.9571 15.0517 12.9123 15.048 12.9175C15.1858 12.8498 15.3129 12.7767 15.4319 12.6995C16.0238 12.3153 16.4583 11.8083 17.0239 11.1481C17.0923 11.0683 17.1626 10.9863 17.2353 10.952C17.3987 10.7125 17.6459 10.6169 17.8942 10.6473C18.1426 10.6776 18.3595 10.8299 18.4725 11.0531C18.97 12.0363 19.25 13.1479 19.25 14.3226C19.25 18.3267 16.0041 21.5726 12 21.5726C7.99594 21.5726 4.75 18.3267 4.75 14.3226C4.75 11.7856 6.05371 9.5535 8.02431 8.25956L8.09187 8.19598C8.12658 8.15601 8.16464 8.12454 8.20552 8.09703C9.07138 7.5144 9.69312 7.03786 10.1117 6.47743C10.5071 5.94801 10.75 5.3022 10.75 4.32264C10.75 3.59736 10.6161 2.95512 10.3723 2.26809C10.2733 2.00936 10.3249 1.71713 10.5067 1.50804ZM12.1712 3.25081C12.2231 3.60079 12.25 3.95872 12.25 4.32264C12.25 5.59106 11.9223 6.55995 11.3135 7.37505C10.7417 8.14054 9.95028 8.72847 9.10466 9.2999L9.03236 9.37275C8.99362 9.41179 8.95071 9.44644 8.95439 9.4761C7.30648 10.4991 6.25 12.2877 6.25 14.3226C6.25 17.4983 8.82436 20.0726 12 20.0726C15.1756 20.0726 17.75 17.4983 17.75 14.3226C17.75 13.8028 17.6812 13.2997 17.5523 12.8217C17.1721 13.2334 16.7524 13.6307 16.2485 13.9577C15.3253 14.5569 14.1699 14.899 12.5 14.899C12.1577 14.899 11.8589 14.6673 11.7736 14.3358C11.6884 14.0044 11.8383 13.6572 12.1381 13.4921C12.8169 13.1181 13.3923 12.661 13.8345 12.0357C14.2757 11.4118 14.6137 10.5787 14.7555 9.40975C15.0623 6.879 14.0149 4.38107 12.1712 3.25081Z" fill="black"/>
                                    </svg>
                                </div>
                                <div class="col-2 offset-2 text-center">
                                    <i class="bi bi-caret-down-fill"></i>
                                </div>
                            </div>
                        </button>
                        <div class="collapse multi-collapse" id="contraOpinionsCollapse">
                            <div style="width:95%" class="card card-body no-border">
                                @if(count($candidate->controversial_opinions) >= 1) 
                                    @foreach ($candidate->controversial_opinions as $opinion)
                                        {{-- TODO: Fix this when opinions are refactored  --}}
                                        @if($opinion->is_controversial)
                                            {{$opinion->name}}
                                            {{-- TODO: add a little icon to explain what opinion is --}}
                                            <br>
                                        @endif
                                    @endforeach
                                @else
                                    We're still searching for the controversial opinons!
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- OTHER OPINIONS --}}
                    <div class="mt-4" id="opinionsInfo">
                        <button style="width:95%" class="card card-body" type="button" data-bs-toggle="collapse" data-bs-target="#opinionsInfoCollapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                            <div class="row">
                                <div class="col-8 text-start">
                                    Other Opinions
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <div class="col-2 offset-2 text-center">
                                    <i class="bi bi-caret-down-fill"></i>
                                </div>
                            </div>
                        </button>
                        <div class="collapse multi-collapse" id="opinionsInfoCollapse">
                            <div style="width:95%" class="card card-body no-border">
                                @if(count($candidate->controversial_opinions) >= 1) 
                                    @foreach ($candidate->controversial_opinions as $opinion)
                                        {{-- TODO: Fix this when opinions are refactored  --}}
                                        @if(!$opinion->is_controversial)
                                            {{$opinion->name}}
                                            {{-- TODO: add a little icon to explain what opinion is --}}
                                            <br>
                                        @endif
                                    @endforeach
                                @else
                                    We're still searching for opinons!
                                @endif
                            </div>
                        </div>
                    </div>     
                    {{-- LAW MAKING INVOLVEMENT  --}}
                    <div class="mt-4" id="lawsPassedInfo">
                        <button style="width:95%" class="card card-body" type="button" data-bs-toggle="collapse" data-bs-target="#lawsPassedInfoCollapse" aria-expanded="false" aria-controls="multiCollapseExample2">
                            <div class="row">
                                <div class="col-8 text-start">
                                    Laws Passed in office
                                    <i class="bi bi-book"></i>
                                </div>
                                <div class="col-2 offset-2 text-center">
                                    <i class="bi bi-caret-down-fill"></i>
                                </div>
                            </div>
                        </button>
                        <div class="collapse multi-collapse" id="lawsPassedInfoCollapse">
                            <div style="width:95%" class="card card-body no-border">
                                @if(count($candidate->law_involvement) >= 1) 
                                    @foreach ($candidate->law_involvement as $law)
                                        {{-- TODO: Fix this when opinions are refactored  --}}
                                        Name : {{ $law->name }}
                                    @endforeach
                                @else
                                   No involvment in laws has been found
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection