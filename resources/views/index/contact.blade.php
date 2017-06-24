@extends('common')
@section('title','shortcodes')
@section('content')
<div id="main-content">
    <div id="contact-page">
        <h1>CONTACT ME</h1>

        <span class="main-border"></span>
        <div id="contact-info">

            <h2>John Smith</h2>
            <ul class="contact-list">
                <li>123 Long Street<br  /> London, England</li>
            </ul>
            <ul class="list2">
                <li><span class="bold">Phone: </span>+123 456 789</li>
                <li><span class="bold">Email:</span> info@something.com</li>
            </ul>
            <a href="#"><span id="contact-twitter"></span></a>
            <a href="#"><span id="contact-facebook"></span></a>
        </div><!--END contact-info-->
        <div id="map">
            <iframe width="425" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Envato+Pty+Ltd,+Elizabeth+Street,+Melbourne,+Victoria,+Australia&amp;aq=0&amp;oq=envato&amp;sll=37.0625,-95.677068&amp;sspn=57.030354,135.263672&amp;t=h&amp;ie=UTF8&amp;hq=Envato+Pty+Ltd,+Elizabeth+Street,&amp;hnear=Melbourne+Victoria,+Australia&amp;ll=-37.812332,144.968956&amp;spn=0.006295,0.012981&amp;output=embed"></iframe>

        </div><!--END map-->

        <div class="clear"></div>
        <h1 id="contact-h1">SEND ME A MESSAGE</h1>
        <span class="main-border"></span>

        <form class="contact_form" action="#" method="post" name="contact_form">
            <ul>
                <li>
                    <span class="required_notification">* Denotes Required Field</span>
                </li>
                <li>
                    <label for="contactname">Name</label>
                    <input type="text" name="contactname" id="contactname" placeholder="John Doe" required />
                </li>
                <li>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="john_doe@example.com" required />
                    <span class="form_hint">Proper format "name@something.com"</span>
                </li>
                <li>
                    <label for="website">Website</label>
                    <input type="url" name="website" id="website" placeholder="http://johndoe.com" pattern="(http|https)://.+"/>
                    <span class="form_hint">Proper format "http://someaddress.com"</span>
                </li>
                <li>
                    <textarea name="message" cols="40" rows="6" required ></textarea>
                </li>
                <li>
                    <button class="submit" name="send" type="submit">SEND</button>
                </li>
            </ul>
        </form>		<div class="intro"></div>
    </div><!--END contact-page-->
</div><!--END main-content-->
@stop