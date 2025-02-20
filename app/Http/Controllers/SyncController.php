<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSyncRequest;
use App\Http\Requests\UpdateSyncRequest;
use App\Models\Sync;
use Illuminate\Support\Facades\Http;

class SyncController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getData()
    {
        $wordpressURL = 'https://backup.savepoint.com.br/wp-json/wp/v2/posts';

        $response = Http::get($wordpressURL);
        $posts = $response->json();
        // dd($posts[0]['_links']['self'][0]['targetHints']['allow'][0]);
            $id = $posts[0]['id'];
            $date = $posts[0]['date'];
            $slug = $posts[0]['slug'];
            $title = $posts[0]['title']['rendered'];
            $content = $posts[0]['content']['rendered'];
            $excerpt = $posts[0]['excerpt']['rendered'];
            $author = $posts[0]['author'];
            $featured_media = $posts[0]['featured_media'];
            $categories = $posts[0]['categories'][0];
            $tags = $posts[0]['tags'];
            $tagsString = implode(', ', $tags);
            $class_list = $posts[0]['class_list'];
            $class_listString = implode(', ', $class_list);

            /*dd(compact(
                'id',
                'date',
                'slug',
                'title',
                'content',
                'excerpt',
                'author',
                'featured_media',
                'categories',
                'tags',
                'tagsString',
                'class_list',
                'class_listString'
            ));*/





        // return response()->json($response->json);
        return $posts;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSyncRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sync $sync)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sync $sync)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSyncRequest $request, Sync $sync)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sync $sync)
    {
        //
    }
}
