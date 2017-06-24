@extends('common')
@section('title','shortcodes')
@section('content')
<div id="main-content">
        <div class="post">
                <div id="ei-slider" class="ei-slider">
        <ul class="ei-slider-large">
            <li>
                <img src="images/post-image.jpg" alt=""/>
                <div class="ei-title">
                    <h2>Passionate</h2>
                    <h3>Seeker</h3>
                </div>
            </li>
            <li>
                <img src="images/post-image2.jpg" alt="" />
                <div class="ei-title">
                    <h2>Creative</h2>
                    <h3>Duet</h3>
                </div>
            </li>
            <li>
                <img src="images/post-image3.jpg" alt="" />
                <div class="ei-title">
                    <h2>Friendly</h2>
                    <h3>Devil</h3>
                </div>
            </li>
            <li>
                <img src="images/post-image.jpg" alt=""/>
                <div class="ei-title">
                    <h2>Passionate</h2>
                    <h3>Seeker</h3>
                </div>
            </li>
            <li>
                <img src="images/post-image2.jpg" alt="" />
                <div class="ei-title">
                    <h2>Creative</h2>
                    <h3>Duet</h3>
                </div>
            </li>
        </ul><!-- ei-slider-large -->
        <ul class="ei-slider-thumbs">
            <li class="ei-slider-element">Current</li>
            <li><a href="#">Slide 1</a><img src="images/post-thumb.jpg" alt="" /></li>
            <li><a href="#">Slide 2</a><img src="images/post-thumb2.jpg" alt="" /></li>
            <li><a href="#">Slide 3</a><img src="images/post-thumb3.jpg" alt="" /></li>
            <li><a href="#">Slide 4</a><img src="images/post-thumb.jpg" alt="" /></li>
            <li><a href="#">Slide 5</a><img src="images/post-thumb2.jpg" alt="" /></li>
        </ul><!-- ei-slider-thumbs -->
    </div><!-- ei-slider -->

        <span class="main-border"></span>
        <div class="half">
        <h2>This is an unordered list</h2>
            <ul class="list">
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
                <li>List item 4</li>
            </ul>
        </div><!--END half-->
        <div class="half-last">
            <h2>A numbered list</h2>
            <ol class="list">
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
                <li>List item 4</li>
            </ol>
         </div><!--END half-last-->
         <div class="clear"></div>
          <div class="half">
        <h2>Another List style</h2>
            <ul class="circles">
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
                <li>List item 4</li>
            </ul>
        </div><!--END half-->
        <div class="half-last">
            <h2>One more for fun</h2>
            <ul class="square">
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
                <li>List item 4</li>
            </ol>
         </div><!--END half-last-->
    </div><!--end post-->
</div><!--END main-content-->
@stop