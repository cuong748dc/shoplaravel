<!--Carousel Wrapper-->
<base href="{{asset('')}}">
<div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <?php
        $i = 0;
        ?>
        @foreach($slides as $slide)
            <li data-target="#carousel-example-1z" data-slide-to="{{$i}}"
                @if($i == 0)
                class="active"
                @endif></li>
            <?php
            $i++;
            ?>
        @endforeach
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <?php
        $i = 0;
        ?>
        @foreach($slides as $slide)
            <div class="carousel-item
        @if($i == 0)
            {{ 'active' }}
            @endif
                ">
                <?php
                $i++;
                ?>
                <img class="img-thumbnail" src="slide/{{ $slide->image }}">
            </div>
        @endforeach
    </div>
    <!--/First slide-->
</div>
<!--/.Slides-->
<div>
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
