@extends('common')
@section('title','slider')
@section('content')
<div id="main-content">
        <div id="page">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img class="post-image" src="{{asset('static/images/post-image.jpg')}}" alt="post image" height="214" title="This is a caption" width="609" />
                <img class="post-image" src="{{asset('static/images/post-image2.jpg')}}" alt="post image" height="214" width="609" />
                <img class="post-image" src="{{asset('static/images/post-image3.jpg')}}" alt="post image" title="#htmlcaption" height="214" width="609" />
            </div><!--END slider-->
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div><!--END htmlcaption-->
           </div><!--END nivoSlider-->
        <span class="main-border"></span>
            <h2>Possible page setup</h2>
            <div class="thirds">
            <img src="{{asset('static/images/gallery1.jpg')}}" alt="" height="126" width="177" />

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra egestas tempus. Duis lobortis gravida lobortis. Sed molestie metus id sapien adipiscing ornare. </p>
            </div><!--END thirds-->

            <div class="thirds">
            <img src="{{asset('static/images/gallery2.jpg')}}" alt="" height="126" width="177" />

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra egestas tempus. Duis lobortis gravida lobortis. Sed molestie metus id sapien adipiscing ornare. </p>
            </div><!--END thirds-->

            <div class="thirds-last">
            <img src="{{asset('static/images/gallery3.jpg')}}" alt="" height="126" width="177" />

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra egestas tempus. Duis lobortis gravida lobortis. Sed molestie metus id sapien adipiscing ornare. </p>
            </div><!--END thirds-->
            <div class="clear"></div>

            <p><img class="left" src="{{asset('static/images/gallery3.jpg')}}" alt="" height="126" width="177" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra egestas tempus. Duis lobortis gravida lobortis. Sed molestie metus id sapien adipiscing ornare. Cras tristique tellus non nibh gravida a condimentum eros sagittis. Pellentesque facilisis elementum arcu eget ullamcorper.</p>

            <p><img class="right" src="{{asset('static/images/gallery1.jpg')}}" alt="" height="126" width="177" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra Duis egestas tempus. Duis lobortis gravida lobortis. Sed molestie metus id sapien adipiscing ornare. Cras tristique tellus non nibh gravida a gravida condimentum eros sagittis. Pellentesque facilisis elementum arcu eget ullamcorper.</p>

            <h2>What is Lorem Ipsum</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            <p>Source: <a href="http://www.lipsum.com/">Lorem Ipsum</a></p>
    </div><!--end page-->
</div><!--END main-content-->
@stop