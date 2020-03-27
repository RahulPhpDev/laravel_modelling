@extends('partials.layout')

@section('content')

<div class="remodal-bg">

        <div class="content_contain">
            <div class="page_contain">
                <div class="contain">
                    <section class="partners_hero">
                    	<div class = "form-group">
                            <select>
                                @foreach($users as $user_id => $name)

                                <option> {{$name}} </option>
                               @endforeach
                            </select>
                        </div>
                        <div class = "form-group">
                            <label> First Name:</label>
                            <input type ="text" name="first_name">
                        </div>

                    </section>
                </div>

              
            </div>
        </div>
    </div>