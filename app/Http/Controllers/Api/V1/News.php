<?php
use App\news;
use Illuminate\Http\Request;
namespace App\Http\Controllers;

class News extends Controller
{
    /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */

        public function index()
        {
            $content = news::all();
            return $content;
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $content = news::create($request->all());
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
            $content = news::create($request->all());
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
            return news::findOrFail($id);
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
            $pages = news::findOrFail($id);
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
            //
        }


        public function categories()
        {
            $content = news::all();
            return $content;
        }
}
