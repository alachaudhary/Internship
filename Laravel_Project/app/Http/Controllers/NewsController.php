<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\News;
use Carbon\Carbon;

class NewsController extends Controller
{
        public function fetchNews()
        {
            $apiKey = env('NEWS_API_KEY');
            $response = Http::get('https://newsapi.org/v2/top-headlines', [
                'apiKey' => $apiKey,
                'country' => 'pk', 
            ]);
    
            if ($response->successful()) {
                $newsData = $response->json()['articles'];
    
                foreach ($newsData as $article) {
                    $publishedAt = isset($article['publishedAt']) 
                        ? Carbon::parse($article['publishedAt'])->format('Y-m-d H:i:s')
                        : now();
    
                    News::updateOrCreate(
                        ['title' => $article['title']], 
                        [
                            'description' => $article['description'] ?? 'No description available',
                            'url' => $article['url'],
                            'source' => $article['source']['name'] ?? 'Unknown source',
                            'published_at' => $publishedAt,
                        ]
                    );
                }
    
                return redirect()->route('news.index')->with('success', 'News fetched and stored successfully!');
            } else {
                return redirect()->back()->with('error', 'Failed to fetch news. Please check your API key or request.');
            }
        }

        public function index()
    {
        $news = News::all();
        return view('user.news', compact('news'));
    }
}
