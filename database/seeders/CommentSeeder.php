<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $candidate = Candidate::firstWhere('user_id', 1);
        $candidate->comment('Wow such a cool website');
        $comment = Comment::find(1);
        $comment->is_approved = true;
        $comment->reply = 'Thanks man!';
        $comment->save();

        $candidate->comment('Wow and the website has such a nice background');
        $comment = Comment::find(2);
        $comment->is_approved = true;
        $comment->reply = 'I spent a lot of time working on that one';
        $comment->save();

        $candidate->comment('The color scheme is off the charts');
        $comment = Comment::find(3);
        $comment->is_approved = true;
        $comment->reply = 'I believe that the color schema does create a new atmosphere';
        $comment->save();

        $candidate->comment('And the UX skills? Don\'t get me starteds');
        $comment = Comment::find(4);
        $comment->is_approved = true;
        $comment->save();
    }
}
