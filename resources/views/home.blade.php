@extends('layouts.app', ['title' => trans('pages.home.title')])
@section('content')
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=794424590749589&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="ui grid">
        <div class="ui computer only column">
            <br><br>
        </div>
    </div>
    <div class="ui basic very padded segment" id="home_about_us">
        <br><br>
        <div class="ui container light-text">
            <div class="ui equal width stackable grid">
                <div class="computer only column">
                    <div class="ui left aligned basic segment">
                        <h1>{{trans('pages.home.about_title')}}</h1>
                        <p class="ui justified text">{{trans('pages.home.about_content')}}</p>
                        <div class="fb-like facebook_button_home" data-action="like"
                             data-href="https://www.facebook.com/akhbarmeter" data-layout="button_count"
                             data-share="false"
                             data-show-faces="false"
                             data-size="large"></div>
                    </div>

                    <div class="ui left aligned basic segment">
                        <p class="light-font">{{trans('page.home.signup_title')}}
                            {{trans('pages.home.signup_content')}}
                        </p>
                        <form class="ui form" data-request="onSend"
                              data-request-update="'flash-message': '#onHandleFormResult'">
                            @csrf
                            <div id="onHandleFormResult">
                                <div class="ui basic segment">
                                </div>
                            </div>
                            <div class="field">
                                <input class="form-control" name="url" placeholder="رابط الخبر" type="text">
                            </div>
                            <div class="field">
                                <input class="form-control" name="email" placeholder="بريدك الإلكتروني" type="email">
                            </div>
                            <div class="field">
                                <input name="_gotcha" style="display:none" type="text">
                            </div>
                            <div class="form-group">
                                <button class="fluid ui secondary button" type="submit">ارسل</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="center aligned column">
                    <div class="ui center aligned basic segment">
                        <a href="#publishersPage">
                            <img alt="{{$topMonthPublisher->name}}"
                                 class="ui circular centered small image"
                                 src="{{$topMonthPublisher->logo}}"
                                 width="136px"/>
                        </a>
                        <i class="ui circular green up pointing big label">{{$topMonthPublisher->score_percent}}%</i>
                        <h2 class="text">{{ trans('text.best_month') }} MONTH NAME TO DO</h2>
                    </div>
                    <div class="ui center aligned basic segment">
                        <div class="ui three column centered grid">
                            @foreach($topWeekPublishers as $publisher)
                                <div class="center aligned column">
                                    <a href="#publishersPageToDo"><img
                                            alt="{{$publisher->name}}"
                                            class="ui circular centered tiny image"
                                            src="{{ $publisher->logo}}"
                                            width="98px"/></a>
                                    <i class="ui circular green up pointing big label">
                                        {{$publisher->score_percent}}%
                                    </i>
                                </div>
                            @endforeach
                            <div class="ui container">
                                <h2 class="text">{{trans('text.best_week')}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center aligned column">
                    <div class="ui center aligned basic segment">
                        <a href="#publisherPageToDo">
                            <img alt="{{$bottomMonthPublisher->name}}"
                                 class="ui circular centered small image"
                                 src="{{$bottomMonthPublisher->logo}}"
                                 width="136px"/>
                        </a>
                        <i class="ui circular red up pointing big label">{{$bottomMonthPublisher->score_percent}}%</i>
                        <h2 class="text">{{trans('text.worst_month')}} MONTH NAME TO DO</h2>
                    </div>
                    <div class="ui center aligned basic segment">
                        <div class="ui three column center aligned grid">
                            @foreach($bottomWeekPublishers as $publisher)
                                <div class="center aligned column">
                                    <a href="#publisherPage"><img
                                            alt="{{$publisher->name}}"
                                            class="ui circular centered tiny image"
                                            src="{{$publisher->logo}}"
                                            width="98px"/></a>
                                    <i class="ui circular red up pointing big label">
                                        {{$publisher->score_percent}}%
                                    </i>
                                </div>
                            @endforeach
                            <div class="ui container">
                                <h2 class="text">{{trans('text.worst_week')}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="ui container">
            <div class="ui center aligned basic segment">
                <div class="ui horizontal divider header light-text">
                    {{trans('text.support_title')}}
                </div>
                <a href="https://www.patreon.com/akhbarmeter"> <img alt="Support the project"
                                                                    class="ui centered small image"
                                                                    src="{{asset('img/logos/patron.png')}}"></a>
            </div>
        </div>
        <br>
    </div>


    <!-- ####################################
          Search Section
    ########################################-->

    <div class="ui sixteen column stackable grid news-search">
        <div class="ui center aligned container">
            <div class="ui very padded basic segment">
                <h2 class="ui horizontal divider header">
                    <i class="newspaper outline icon"></i>
                    {{trans('pages.home.news_new')}}
                </h2>
            </div>
        </div>
    </div>
    <div class="ui sixteen column stackable grid">
        <div class="ui container">
            <div class="ui three column stackable grid">
                @foreach($articles as $article)
                    <div class="column">
                        @include('partials.article.thumbnail', compact('article'))
                    </div>
                @endforeach
            </div>
            <br><br>
            <div class="ui center aligned basic segment"><a class="ui secondary centered button"
                                                            href="#searchPage">{{trans('text.more')}}</a></div>
            <br><br>
        </div>
    </div>


    <!-- #################################
      Our Topics Slider Section
    ######################################-->
    <div id="our-news-carousel">
        <div class="ui sixteen wide column center aligned stackable grid">
            <div class="ui center aligned container">
                <div class="ui very padded basic segment">
                    <h2 class="ui horizontal inverted divider header">
                        <i class="edit icon"></i>
                        {{trans('pages.home.topics')}}
                    </h2>
                </div>
            </div>
        </div>
        <div class="ui sixteen wide column center aligned stackable grid">
            <div class="ui container">
                <div class="ui four stackable link borderless cards">
                    @foreach($posts as $post)
                        <div class="topics card">
                            <div class="ui dimmer">
                                <div class="content">
                                    <h4 class="ui inverted header">{{$post->title}}</h4>
                                    <a class="ui secondary button" href="#postLink">{{trans('text.more')}}</a>
                                </div>
                            </div>

                            <div class="image">
                                @if($post->featured_images()->count())
                                    {% if post.featured_images.count %}
                                    <img alt="{{ $post->featured_images()->first()->description }}" class="ui image"
                                         src="{{ $post->featured_images()->first()}}">
                                @else
                                    <img alt="No picture available" class="ui image"
                                         src="{{asset('img/templates/bg-cover.jpg')}}">
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- #################################
      Statistics Section
    ###################################### -->
    <div class="ui container logos">
        <div class="ui sixteen wide column center aligned stackable grid">
            <div class="sixteen wide center aligned column">
                <div class="ui very padded basic segment">
                    <h2 class="ui horizontal divider header">
                        <i class="chart line icon"></i>
                        {{ trans('text.counters')}}
                    </h2>
                </div>
            </div>
            <div class="four wide column">
                <a href="#publishersLink">
                    <div class="ui big statistic">
                        <div class="value">
                            10 <img src="{{asset('img/icons/Mail.png')}}"
                                    class="ui inline image">
                        </div>
                        <div class="label">
                            {{trans('text.publishers')}}
                        </div>
                    </div>
                </a>
            </div>
            <div class="four wide column">
                <a href="#postsLink">
                    <div class="ui big statistic">
                        <div class="value">
                            {{$posts->count()}} <img src="{{asset('img/icons/Pensils.png')}}"
                                                     class="ui inline image">
                        </div>
                        <div class="label">
                            {{trans('text.articles')}}
                        </div>
                    </div>
                </a>
            </div>
            <div class="four wide column">
                <a href="#searchLink">
                    <div class="ui big statistic">
                        <div class="value">
                            {{$articles->count()}} <img src="{{asset('img/icons/Retina-Ready.png')}}"
                                                        class="ui inline image">
                        </div>
                        <div class="label">
                            {{trans('text.reviews')}}
                        </div>
                    </div>
                </a>
            </div>
            <div class="four wide column">
                <a href="#publishersLink">
                    <div class="ui big statistic">
                        <div class="value">
                            3 <i class="user secret teal small icon"></i>
                        </div>
                        <div class="label">
                            {{trans('text.reviewers')}}
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- #################################
      Logos and Awards Section
    ###################################### -->

    <div class="ui container logos">
        <div class="ui sixteen column stackable grid">
            <div class="four wide column">
                <a href="https://eu-youthaward.org/"><img alt="European Youth Award"
                                                          class="ui centered fluid image"
                                                          src="{{asset('img/portfolio/eya.png') }}"></a>
            </div>
            <div class="four wide column">
                <a href="http://www.digitalparticipationcamp.org/portfolio/akhbarmeter"><img
                        alt="Digital Participation Camp" class="ui fluid image"
                        src="{{asset('img/portfolio/dpc.png')}}"></a>
            </div>
            <div class="four wide column">
                <br>
                <a href="http://wordpress.engagementpreis.org/akhbar-meter-media-meter/"><img
                        alt="Engagement Preis" class="ui fluid image" src="{{asset('img/portfolio/ca.jpg')}}"></a>
                <br><br>
                <a href="http://www.brandtschool.de/news-and-events/news-single-view/news/project-team-led-by-brandt-school-student-has-been-awarded-the-first-prize-at-the-digital-participat/"><img
                        alt="Willy Brandt School - University of Erfurt" class="ui fluid image"
                        src="{{asset('img/portfolio/wbs.jpg')}}"></a>
            </div>
            <div class="four wide column">
                <br>
                <a href="https://www.ich-mag-meine-uni.de/item/499-commitmentaward2017-projekt2.html"><img
                        alt="Ich mag meine uni" class="ui fluid image" src="{{asset('img/portfolio/mag1.gif')}}"></a>
                <br><br>
                <a href="http://factchecking.mk/egyptian-media-are-measured-by-the-akhbar-meter/"><img
                        alt="Factchecking.MK" class="ui fluid image" src="{{asset('img/portfolio/mk.png')}}"></a>
            </div>
        </div>
    </div>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function () {
                $('div.topics.card')
                    .dimmer({
                        on: 'hover'
                    })
                ;
            });
        </script>
    @endpush

@endsection
