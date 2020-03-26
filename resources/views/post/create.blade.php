@extends('partials.layout')

@section('content')

<div class="remodal-bg">

        <div class="content_contain">
            <div class="page_contain">
                <div class="contain">
                    <section class="partners_hero">
                    	<form action="{{ route("post.store") }}" method="Post" >
                    		@csrf
                    	<div>
                    		
                      	<input type = "text" name = "title">
                      	<label> Title: </label>
                    	</div>

                    	<div>	
	                      	<input type = "text" name = "content">
	                      	<label> Content: </label>
                    	</div>

                    	<div>	
	                      	<input type = "submit" name = "save" value = "{{trans('crud.save')}}">
                    	</div>
                    </form>
                    </section>
                </div>

              
            </div>
        </div>
    </div>