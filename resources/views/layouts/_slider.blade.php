<!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/quiz-background.jpg')}}" alt="First slide" style="height: 30em;">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/test.jpg')}}" alt="Second slide" style="height: 30em;">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/quiz.jpg')}}" alt="Third slide" style="height: 30em;">
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
<!--/.Carousel Wrapper-->