@extends('partials.layout')

@section('content')

<div class="remodal-bg">

        <div class="content_contain">
            <div class="page_contain">
                <div class="contain">
                    <section class="partners_hero">
                    	   <table border="4">
                            <tr>
                                <th> Title </th>
                                <th> Content </th>
                                <th> Title+Content </th>
                                <th> Create </th>
                            </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td> {{$post->title}} </td>
                                <td> {{$post->content}} </td>
                                <td> {{$post->title_content}} </td>
                                <td> {{$post->created_at}} </td>
                            </tr>
                        @endforeach
                        
                           </table>
                        
                    </section>
                </div>

              
            </div>
        </div>
    </div>