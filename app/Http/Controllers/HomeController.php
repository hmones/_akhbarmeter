<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use App\Models\Score;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        Carbon::setWeekStartsAt(Carbon::SUNDAY);
        $date_from = today()->subYear()->startOfMonth()->subMonth();
        $topMonthPublisher = Score::whereHas('publisher', function ($query) {
            $query->where('published', 1);
        })->select('score_percent', 'publisher_id', 'score_period', 'score_from', 'score_to', 'num_articles')
            ->distinct()
            ->where('score_period', '=', 'month')
            ->where('score_from', '=', $date_from)
            ->orderBy(DB::raw('cast(score_percent as signed)'), 'asc')
            ->first();
        $bottomMonthPublisher = Score::whereHas('publisher', function ($q) {
            $q->where('published', '=', 1);
        })->select('score_percent', 'publisher_id', 'score_period', 'score_from', 'score_to', 'num_articles')
            ->distinct()
            ->where('score_period', '=', 'month')
            ->where('score_from', '=', $date_from)
            ->orderBy(DB::raw('cast(score_percent as signed)'), 'asc')
            ->first();
        $date_from = today()->subYear()->startOfWeek()->subWeek();
        $topWeekPublishers = Score::whereHas('publisher', function ($q) {
            $q->where('published', '=', 1);
        })->select('score_percent', 'publisher_id', 'score_period', 'score_from', 'score_to', 'num_articles')
            ->distinct()
            ->where('score_period', '=', 'week')
            ->where('score_to', '=', $date_from)
            ->orderBy(DB::raw('cast(score_percent as signed)'), 'desc')
            ->take(3)
            ->get();
        $bottomWeekPublishers = Score::whereHas('publisher', function ($q) {
            $q->where('published', '=', 1);
        })->select('score_percent', 'publisher_id', 'score_period', 'score_from', 'score_to', 'num_articles')
            ->distinct()
            ->where('score_period', '=', 'week')
            ->where('score_to', '=', $date_from)
            ->orderBy(Db::raw('cast(score_percent as signed)'), 'desc')
            ->take(3)
            ->get();
        $articles = Article::select('id', 'created_at', 'score', 'title', 'publisher_id')->with('photo', 'labels:name,color,icon')->with(array('publisher' => function ($query) {
            $query->select('id', 'name', 'slug')->with('logo');
        }))->where('active', 1)->orderBy('created_at', 'desc')->paginate(10);
        $posts = Post::latest()->take(4);
        return view('home', compact(['topMonthPublisher', 'topWeekPublishers', 'bottomMonthPublisher',
                                     'bottomWeekPublishers', 'articles', 'posts']));
    }
}
