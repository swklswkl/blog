@extends('common')
@section('title','shortcodes')
@section('content')
<div id="main-content">

    <h2>headers</h2>
    <h1>H1 - Praesent cursus auctor justo</h1>
    <h2>H2 - Praesent cursus auctor justo</h2>
    <h3>H3 - Praesent cursus auctor justo</h3>
    <h4>H4 - Praesent cursus auctor justo</h4>
    <h5>H5 - Praesent cursus auctor justo</h5>
    <h6>H6 - Praesent cursus auctor justo</h6>

    <h2>Blockquote</h2>
    <blockquote>Aliquam et lectus sed arcu molestie eleifend. Nam diam nibh, dignissim nec fringilla vel, euismod sit amet massa. Aliquam erat volutpat. Duis et tincidunt elit. Sed vestibulum justo sit amet lectus vulputate vulputate. Praesent cursus auctor justo, ut consequat neque convallis sit amet. Nullam id leo mauris, quis tempor dolor. </blockquote>

    <h2>Tabs</h2>
    <ul class="tabs">
        <li><a href="#">Tab 1</a></li>
        <li><a href="#">Tab 2</a></li>
        <li><a href="#">Tab 3</a></li>
    </ul>
    <div class="clear"></div>
    <div class="panes">
        <div><img src="{{asset('static/images/image3.jpg')}}" height="59" width="56" alt="fun"  />First tab content. Tab contents are called "panes". Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor vehicula sem nec congue. Nulla sit amet orci sit amet urna pharetra mollis at facilisis risus. Curabitur tempus, risus eu volutpat molestie, mauris quam faucibus felis, porttitor pretium sapien tortor eget velit. Aliquam erat volutpat. Phasellus placerat porta tellus et pellentesque. Phasellus at fermentum nisl.</div>
        <div>Second tab content</div>
        <div>Third tab content</div>
    </div><!--END panes-->

     <h2>A toggle</h2>
    <div class="toggle-button"><a href="#" class="title toggle-inactive">I am a Toggle. Click Me!</a></div>
    <div class="toggle-pane">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor vehicula sem nec congue. Nulla sit amet orci sit amet urna pharetra mollis at facilisis risus. Curabitur tempus, risus eu volutpat molestie, mauris quam faucibus felis, porttitor pretium sapien tortor eget velit. Aliquam erat volutpat. Phasellus placerat porta tellus et pellentesque. Phasellus at fermentum nisl. </p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor vehicula sem nec congue. Nulla sit amet orci sit amet urna pharetra mollis at facilisis risus. Curabitur tempus, risus eu volutpat molestie, mauris quam faucibus felis, porttitor pretium sapien tortor eget velit. Aliquam erat volutpat. Phasellus placerat porta tellus et pellentesque. Phasellus at fermentum nisl. </p>
    </div><!--END toggle-pane-->
    <br /><br />
    <div class="half">
    <h2>Tooltips on images</h2>
    <ul class="tooltips">
        <li><img src="{{asset('static/images/image1.jpg')}}" title="this is a tooltip" alt="this is a tooltip" height="61" width="57" /> </li>
        <li><img src="{{asset('static/images/image2.jpg')}}" title="The tooltip uses the title attribute to display the tip" alt="this is a tooltip" height="61" width="57" /> </li>
    </ul>
    </div>
    <div class="half-last">
    <h2>Tooltips on links</h2>
        <p>You can also have <a title="This is a tooltip on a link" href="#">TOOLTIPS</a> on a link as well</p>
    </div>
    <div class="clear"></div>
    <div class="alertRed">Alert Text!</div>
    <div class="alertGreen">Alert Text!</div>
    <div class="alertPink">Alert Text!</div>

    <h2>Buttons</h2>
    <ul class="buttons">
        <li><a href="#" class="blue">Blue Button</a></li>
        <li><a href="#" class="red">Red Button</a></li>
        <li><a href="#" class="purple">Purple</a></li>
        <li><a href="#" class="green">Green</a></li>
        <li><a href="#" class="darkgrey">Dark Grey</a></li>
        <li><a href="#" class="lightgrey">Light Grey</a></li>
    </ul>
    <div class="clear"></div>

    <h2>Split the page</h2>
    <div class="half">
    <h2>Half Shortcode</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis odio, cursus in ullamcorper at, auctor et dui. Nulla varius tristique interdum. Integer at risus erat, vehicula vestibulum ante. In turpis velit, tempor at volutpat id, pharetra nec arcu. Integer varius vestibulum velit, quis faucibus enim viverra quis. Sed scelerisque feugiat leo, at iaculis urna posuere ac. Proin lobortis odio dictum risus venenatis et fringilla mauris elementum. </p>
    </div><!--END half-->

    <div class="half-last">
    <h2>Half Shortcode</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis odio, cursus in ullamcorper at, auctor et dui. Nulla varius tristique interdum. Integer at risus erat, vehicula vestibulum ante. In turpis velit, tempor at volutpat id, pharetra nec arcu. Integer varius vestibulum velit, quis faucibus enim viverra quis. Sed scelerisque feugiat leo, at iaculis urna posuere ac. Proin lobortis odio dictum risus venenatis et fringilla mauris elementum. </p>
    </div><!--END half-->
    <div class="clear"></div>
    <div class="thirds">
        <h2>Thirds</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis odio, cursus in ullamcorper at, auctor et dui. Nulla varius tristique interdum. Integer at risus erat, vehicula vestibulum ante.</p>
    </div>
    <div class="thirds">
    <h2>Thirds</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis odio, cursus in ullamcorper at, auctor et dui. Nulla varius tristique interdum. Integer at risus erat, vehicula vestibulum ante.</p>
    </div>
    <div class="thirds-last">
    <h2>Thirds</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis odio, cursus in ullamcorper at, auctor et dui. Nulla varius tristique interdum. Integer at risus erat, vehicula vestibulum ante.</p>
    </div>

</div><!--END main-content-->
@stop