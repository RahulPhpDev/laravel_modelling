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
                                <th> Create </th>
                            </tr>
                        @foreach($articles as $article)
                            <tr>
                                <td> {{$article->title}} </td>
                                <td> {{$article->content}} </td>
                                <td> {{$article->diff_in_update_days}} </td>
                            </tr>
                        @endforeach
                        
                           </table>
                        
                    </section>
                </div>

              
            </div>
        </div>
    </div>