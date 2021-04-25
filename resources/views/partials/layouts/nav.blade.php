<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-PGN244N"
            style="display:none;visibility:hidden"
            width="0"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="ui container">
    <div class="ui grid">
        <div class="tablet mobile only column">
            <div class="ui top fixed menu">
                <div class="item">
                    <a class="logo-nav" href="{{ route('home') }}"></a>
                </div>
                <a class="right floated item" onclick="open_menu()"> <i class="bars icon"></i> </a>
            </div>
        </div>
    </div>
</div>


<div class="ui bottom vertical menu sidebar" id="mobile_menu" style="top: 66px !important;">
    <div class="item">
        <div class="header">{{trans('layouts.nav.about')}}</div>
        <div class="menu" tabindex="-1">
            <a class="link item" href="{{trans('navlink.aboutus')}}">{{trans('nav.aboutus')}}</a>
            <a class="item" href="{{trans('navlink.methodology')}}"> {{trans('nav.methodology')}} </a>
            <a class="item" href="{{trans('navlink.publishers')}}">{{trans('nav.publishers')}}</a>
            <a class="item" href="{{trans('navlink.contact')}}"> {{trans('nav.contact')}}</a>
        </div>
    </div>
    <div class="item">
        <div class="header">{{trans('nav.academy')}}</div>
        <div class="menu">
            <a class="item" href="{{trans('navlink.our-topics')}}">{{trans('nav.our-topics')}}</a>
            <a class="item" href="{{trans('navlink.research')}}">{{trans('nav.research')}}</a>
            <a class="item" href="{{trans('navlink.opportunities')}}">{{trans('nav.opportunities')}}</a>
        </div>
    </div>
    <div class="item">
        <div class="header">{{'nav.news.title'}}</div>
        <div class="menu">
            <a class="item" href="{{'navlink.news'}}">
                <i class="globe teal icon"></i>{{'nav.news.all'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=1">
                <i class="handshake outline teal icon"></i>{{'nav.news.politics'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=2">
                <i class="chart line teal icon"></i>{{'nav.news.economics'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=3">
                <i class="trophy teal icon"></i>{{'nav.news.sports'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=4">
                <i class="camera teal icon"></i>{{'nav.news.arts'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=5">
                <i class="ambulance teal icon"></i>{{'nav.news.accidents'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=6">
                <i class="eye teal icon"></i>{{'nav.news.misc'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=7">
                <i class="users teal icon"></i>{{'nav.news.local'}}
            </a>
        </div>
    </div>
    <div class="header">
        <a class="item" href="{{'navlink.videos'}}">{{'nav.videos'}}</a>
    </div>

    <div class="item" tabindex="0">
        <div class="header">Language - اللغة</div>
        <div class="menu" tabindex="-1">
            <a class="item" data-request="onSwitchLocale" data-request-data="locale: 'ar'" href="#"><i
                    class="eg flag"></i>عربي</a>
            <a class="item" data-request="onSwitchLocale" data-request-data="locale: 'en'" href="#"><i
                    class="us flag"></i>English</a>
        </div>
    </div>

    @guest
        <div class="item">
            <a
                class="ui secondary button"
                href="{{ route('login') }}">
                {{'page.login.title'}}
            </a>
        </div>
    @else
        <div class="item">
            <a href="/account/">
                {{'nav.greet'}} , {{Auth::user()->name}}
            </a>
        </div>
        <div class="item">
            <a
                class="ui secondary button"
                href="{{ route('logout') }}">
                {{'page.logout.title'}}
            </a>
        </div>
    @endguest

</div>

<div class="ui top fixed borderless stackable huge pointing menu" id="mainmenu">
    <div class="ui header item logodiv">
        <a class="logo-nav logodiv" href="{{ route('home') }}"></a>
    </div>
    <div class="ui dropdown item cust_menu" tabindex="0">{{'nav.about'}}
        <i class="dropdown icon"></i>
        <div class="menu" tabindex="-1">
            <a class="link item" href="{{'navlink.aboutus'}}">{{'nav.aboutus'}}</a>
            <a class="item" href="{{'navlink.methodology'}}"> {{'nav.methodology'}} </a>
            <a class="item" href="{{'navlink.publishers'}}">{{'nav.publishers'}}</a>
        <!-- <a class="item" href="{{'navlink.profiles'}}"> {{'nav.profiles'}} </a> -->
            <a class="item" href="{{'navlink.contact'}}"> {{'nav.contact'}}</a>
        </div>
    </div>
    <div class="ui dropdown item cust_menu" tabindex="0">{{'nav.academy'}}
        <i class="dropdown icon"></i>
        <div class="menu" tabindex="-1">
            <a class="item" href="{{'navlink.our-topics'}}">{{'nav.our-topics'}}</a>
            <a class="item" href="{{'navlink.research'}}">{{'nav.research'}}</a>
            <a class="item" href="{{'navlink.opportunities'}}">{{'nav.opportunities'}}</a>
        </div>
    </div>
    <div class="ui dropdown item cust_menu" href="{{'navlink.news'}}" tabindex="0">{{'nav.news.title'}}
        <i class="dropdown icon"></i>
        <div class="menu" tabindex="-1">
            <a class="item" href="{{'navlink.news'}}">
                <i class="globe teal icon"></i>{{'nav.news.all'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=1">
                <i class="handshake outline teal icon"></i>{{'nav.news.politics'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=2">
                <i class="chart line teal icon"></i>{{'nav.news.economics'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=3">
                <i class="trophy teal icon"></i>{{'nav.news.sports'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=4">
                <i class="camera teal icon"></i>{{'nav.news.arts'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=5">
                <i class="ambulance teal icon"></i>{{'nav.news.accidents'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=6">
                <i class="eye teal icon"></i>{{'nav.news.misc'}}
            </a>
            <a class="item" href="{{'navlink.news'}}?categories[]=7">
                <i class="users teal icon"></i>{{'nav.news.local'}}
            </a>
        </div>
    </div>

    <a class="item cust_menu" href="{{'navlink.videos'}}">{{'nav.videos'}}</a>

    <div class="right menu">
        <div class="ui dropdown item" tabindex="0">
            <i class="us flag"></i>English <i class="dropdown icon"></i>
            <div class="menu" tabindex="-1">
                <a class="item" data-request="onSwitchLocale" data-request-data="locale: 'ar'" href="#"><i
                        class="eg flag"></i>عربي</a>
                <a class="item" data-request="onSwitchLocale" data-request-data="locale: 'en'" href="#"><i
                        class="us flag"></i>English</a>
            </div>
        </div>
        @guest
            <div class="item">
                <a
                    class="ui secondary button"
                    href="{{ route('login') }}">
                    {{'page.login.title'}}
                </a>
            </div>
        @else
            <div class="item">
                <a href="/account/">
                    {{'nav.greet'}} , {{Auth::user()->name}}
                </a>
            </div>
            <div class="item">
                <a
                    class="ui secondary button"
                    href="{{ route('logout') }}">
                    {{'page.logout.title'}}
                </a>
            </div>
        @endguest
    </div>
</div>


@push('scripts')
    <script>
        $(document)
            .ready(function () {
                // fix main menu to page on passing
                $('#mainmenu').visibility({
                    type: 'fixed'
                });
                $('.overlay').visibility({
                    type: 'fixed',
                    offset: 80
                });

                // lazy load images
                $('.image').visibility({
                    type: 'image',
                    transition: 'vertical flip in',
                    duration: 500
                });

                // show dropdown on hover
                $('#mainmenu  .ui.dropdown').dropdown({
                    on: 'hover'
                });

            })
        ;

        function open_menu() {
            $('#mobile_menu')
                .sidebar('setting', 'transition', 'overlay')
                .sidebar('setting', 'dimPage', false)
                .sidebar('toggle')
            ;
        }
    </script>
@endpush
