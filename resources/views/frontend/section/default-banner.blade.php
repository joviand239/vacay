<div class="default-banner" style="background: url({!! getImageUrlSize(@$page->bannerImage[0], 'full') !!})">
    <div class="container">

        <div class="inline-wrapper">

            <h1 class="title">{!! @$page->bannerTitle !!}</h1>


            @if(@$page->bannerAnchor == \App\Util\Constant::YES)
                <ul class="anchor-list">
                    <li><a class="anchor" href="#a-message-from-vacay">A message from VACAY!</a></li>
                    <li><a class="anchor" href="#vision-and-mission">Vision & Mission</a></li>
                    <li><a class="anchor" href="#our-values">Our Values</a></li>
                    <li><a class="anchor" href="#our-local-pals">Our Local Pals</a></li>
                    <li><a class="anchor" href="#our-services">Our Services</a></li>
                </ul>
            @endif

            @if(!empty(@$page->bannerSubtitle))
                <h2 class="subtitle">{!! @$page->bannerSubtitle !!}</h2>
            @endif

            @if(!empty(@$page->bannerButtonText))
                <a href="{!! @$page->bannerButtonLink !!}" class="btn main-btn">{!! @$page->bannerButtonText !!} <i class="fa fa-angle-right"></i></a>
            @endif


        </div>


    </div>
</div>