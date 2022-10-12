<?php

namespace App\Http\Controllers;

use App\Models\CandidatePermaLink;
use Illuminate\Http\Request;

class PermaLinkController extends Controller
{
    /**
     * Direct the current link to the candidate that we are trying to find. I was implementing this
     * for giving candidates QR codes for users to scan
     */
    public function directLink(Request $request, $permalink)
    {
        $permalink = CandidatePermaLink::firstWhere('perma_link', $permalink);

        if(! $permalink) {
            return redirect('/')->with('error', 'We were unable to find this candidate');
        }
        $candidate_id = $permalink->candidate_id;
        return redirect('/profile/candidate/' . $candidate_id);
    }
}
