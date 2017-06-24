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
                    <span class="mws-i-24 i-day-calendar">Calendar</span>
                </div>
                <div class="mws-panel-body">
                    <div class="mws-panel-content">
                        <div id="mws-calendar"></div>
                    </div>
                </div>
            </div>
        </div>
@stop
