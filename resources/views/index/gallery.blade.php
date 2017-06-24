@extends('common')
@section('title','gallery')
@section('content')
<div id="main-content">
    <div id="gallery-page">
        <h1>Gallery</h1>

        <span class="main-border"></span>

        <ul id="filter">
            <li>Filter:</li>
            <li><a href="#all" title="">All</a></li>
            <li><a href="#movies" title="" rel="movies">Movies</a></li>
            <li><a href="#games" title="" rel="games">Games</a></li>
            <li><a href="#fashion" title="" rel="fashion">Fashion</a></li>
            <li><a href="#science" title="" rel="science">Science</a></li>
        </ul>
        <div id="gallery-wrapper">
            <ul id="gallery">
                <li class="gallery-item games fashion science movies"><a href="images/image-placeholder.png" rel="prettyPhoto[sortable]"><img src="images/gallery1.jpg" height="126" width="177" alt="gallery image" /></a></li>
                <li class="gallery-item movies"><a href="http://youtu.be/8-MlnAJklrM" rel="prettyPhoto"><img src="images/gallery2.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all games picture"><a href="#"><img src="images/gallery3.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all games picture"><a href="#"><img src="images/gallery4.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all fashion picture"><a href="#"><img src="images/gallery5.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all games picture"><a href="#"><img src="images/gallery6.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all science picture"><a href="#"><img src="images/gallery1.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all games picture"><a href="#"><img src="images/gallery6.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all games picture"><a href="#"><img src="images/gallery4.jpg" height="126" width="177" alt="gallery image"  /></a></li>

                <li class="gallery-item games fashion science movies"><a href="images/image-placeholder.png" rel="prettyPhoto[sortable]"><img src="images/gallery1.jpg" height="126" width="177" alt="gallery image" /></a></li>
                <li class="gallery-item movies"><a href="http://youtu.be/8-MlnAJklrM" rel="prettyPhoto"><img src="images/gallery2.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all games picture"><a href="#"><img src="images/gallery3.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all games picture"><a href="#"><img src="images/gallery4.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all fashion picture"><a href="#"><img src="images/gallery5.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all games picture"><a href="#"><img src="images/gallery6.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all science picture"><a href="#"><img src="images/gallery1.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all games picture"><a href="#"><img src="images/gallery6.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all games picture"><a href="#"><img src="images/gallery4.jpg" height="126" width="177" alt="gallery image"  /></a></li>

                <li class="gallery-item games fashion science movies"><a href="images/image-placeholder.png" rel="prettyPhoto[sortable]"><img src="images/gallery1.jpg" height="126" width="177" alt="gallery image" /></a></li>
                <li class="gallery-item movies"><a href="http://youtu.be/8-MlnAJklrM" rel="prettyPhoto"><img src="images/gallery2.jpg" height="126" width="177" alt="gallery image"  /></a></li>
                <li class="gallery-item all games picture"><a href="#"><img src="images/gallery3.jpg" height="126" width="177" alt="gallery image"  /></a></li>
            </ul>
            <div class="clear"></div>
            <div class="Pagination"></div>
     <div class="clear"></div>
        </div><!--END gallery-wrapper-->
    </div><!--END gallery-page-->
</div><!--END main-content-->
@stop