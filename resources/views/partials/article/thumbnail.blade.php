<div class="ui centered center aligned fluid link card">
    <a href="#articleLink">
        <div class="ui image">
            <img alt="{{$article->title}}" src="{{$article->photos ?: asset('img/templates/bg-cover.jpg')}}" style="height:200px;width:100%;">
            @if($article->labels[0])
            <a class="ui {{$article->labels[0]->color}} top left attached large label"> <i
                    class="ui {{$article->labels[0]->icon}} icon"></i> {{$article->labels[0]->name}}</a>
            @else
            <a class="ui green top left attached large label"><i class="ui check icon"></i>{{trans('text.goodnews')}}</a>
            @endif

            <div class="ui top right attached basic circular huge label publisher_logo">
                <img class="ui image circular" src="{{$article->publisher->logo}}">
            </div>
            <div class="ui bottom right attached teal left label">
                {{trans('text.rating')}} {{$article->score}}%
            </div>
        </div>
        <div class="content">
            <div class="left aligned meta">
                <span class="date"> <i class="clock outline small icon"></i> <small>{{$article->created_at->diffForHumans()}}</small> </span>
            </div>
            <div class="left aligned description">
                <a class="dark-text" href="#articleLink">{{Str::limit($article->title, 150)}}</a>
            </div>
        </div>
    </a>
</div>
