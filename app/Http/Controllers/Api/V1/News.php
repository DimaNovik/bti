<?php
namespace App\Http\Controllers\Api\V1;

use App\bti_news;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class News extends Controller
{
    /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */

        public function index()
        {
            $content = bti_news::orderBy('id', 'desc')->get();
            return $content;
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $content = bti_news::create($request->all());
            return $content;
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $content = bti_news::create($request->all());
            $content->uploadImage($request->file('img'));
            return $content;
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            return bti_news::findOrFail($id);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {

        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $pages = bti_news::findOrFail($id);
            $pages->update($request->all());

            return $pages;
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $pages = bti_news::findOrFail($id);
            $pages->delete();
            return '';
        }


        public function categories()
        {
            $content = bti_news::all();
            return $content;
        }
}
