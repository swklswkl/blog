@extends('admin.common.common')
@section('content')
        <div class="container">

            <div class="mws-report-container clearfix">
                <a class="mws-report" href="#">
                    <span class="mws-report-icon mws-ic ic-building"></span>
                    <span class="mws-report-content">
                        	<span class="mws-report-title">Floors Climbed</span>
                            <span class="mws-report-value">324</span>
                        </span>
                </a>

                <a class="mws-report" href="#">
                    <span class="mws-report-icon mws-ic ic-sport"></span>
                    <span class="mws-report-content">
                        	<span class="mws-report-title">Calories Burned</span>
                            <span class="mws-report-value down">74%</span>
                        </span>
                </a>

                <a class="mws-report" href="#">
                    <span class="mws-report-icon mws-ic ic-walk"></span>
                    <span class="mws-report-content">
                        	<span class="mws-report-title">Kilometers Walked</span>
                            <span class="mws-report-value">14</span>
                        </span>
                </a>

                <a class="mws-report" href="#">
                    <span class="mws-report-icon mws-ic ic-bug"></span>
                    <span class="mws-report-content">
                        	<span class="mws-report-title">Bugs Fixed</span>
                            <span class="mws-report-value up">22%</span>
                        </span>
                </a>

                <a class="mws-report" href="#">
                    <span class="mws-report-icon mws-ic ic-car"></span>
                    <span class="mws-report-content">
                        	<span class="mws-report-title">Cars Repaired</span>
                            <span class="mws-report-value">77</span>
                        </span>
                </a>
            </div>

            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-polaroids">Image Gallery</span>
                </div>
                <div class="mws-panel-body">
                    <div class="mws-panel-content">
                        <ul id="mws-gallery" class="clearfix">
                            <li>
                                <img src="example/cyan_hawk.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li>
                                <img src="example/cyan_kangaroo.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/cyan_koala.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/cyan_kookaburra.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/cyan_wallaby.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/scottwills_buffalo.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/scottwills_cat.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/scottwills_fish.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/scottwills_underwater3.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/scottwills_horse.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/scottwills_meercats.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/scottwills_penguin.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/scottwills_squirrel.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/scottwills_underwater2.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/scottwills_underwater4.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                            <li><img src="example/scottwills_underwater5.jpg" alt="" />
                                <div class="mws-gallery-overlay">
                                    <div class="mws-gallery-zoom"></div>
                                </div>
                            </li>
                        </ul>

                        <div class="mws-pagination clearfix">
                            <ul>
                                <li><a href="#" class="mws-paging-button disabled">First</a></li>
                                <li><a href="#" class="mws-paging-button disabled">Prev</a></li>
                                <li><a href="#" class="mws-paging-button current">1</a></li>
                                <li><a href="#" class="mws-paging-button">2</a></li>
                                <li><a href="#" class="mws-paging-button">3</a></li>
                                <li><a href="#" class="mws-paging-button">4</a></li>
                                <li><a href="#" class="mws-paging-button">5</a></li>
                                <li><a href="#" class="mws-paging-button">Next</a></li>
                                <li><a href="#" class="mws-paging-button">Last</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop