<div class="ui inverted vertical footer very padded segment">
    <div class="ui container">
        <div class="ui inverted sixteen column wide equal height stackable grid">
            <div class="four wide column">
                <div class="ui left aligned basic padded segment">
                    <h4 class="ui inverted header">{{trans('navigation.about')}}</h4>
                    <div class="ui inverted link list">
                        <a class="item" href="{{'navlink.aboutus'}}">{{trans('navigation.aboutus')}}</a>
                        <a class="item" href="{{'navlink.methodology'}}"> {{trans('navigation.methodology')}} </a>
                        <a class="item" href="{{'navlink.publishers'}}">{{trans('navigation.publishers')}}</a>
                        <a class="item" href="{{'navlink.contact'}}"> {{trans('navigation.contact')}}</a>
                    </div>
                </div>
            </div>
            <div class="four wide column">
                <div class="ui left aligned basic padded segment">
                    <h4 class="ui inverted header">{{ trans('navigation.headers.subscribe') }}</h4>
                    <div class="ui inverted link list">
                        <form
                                action="https://akhbarmeter.us11.list-manage.com/subscribe/post?u=2911001665bae66f0f76c3b60&amp;id=04234119df"
                                class="ui form validate" id="mc-embedded-subscribe-form" method="post"
                                name="mc-embedded-subscribe-form" novalidate target="_blank">
                            <input class="required email" id="mce-EMAIL" name="EMAIL"
                                   placeholder="{{ 'text-email' }}"
                                   spellcheck="false" type="email" value="">
                            <br><br>
                            <input class="ui fluid secondary button" id="mc-embedded-subscribe" name="subscribe"
                                   type="submit" value="{{ trans('navigation.headers.subscribe') }}">
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div aria-hidden="true" style="position: relative; left: -5000px;z-index:-1;"><input
                                        name="b_2911001665bae66f0f76c3b60_04234119df" tabindex="-1" type="text"
                                        value=""></div>
                        </form>
                        <div class="three wide column clear" id="mce-responses">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four wide column">
                <div class="ui left aligned basic padded segment">
                    <h4 class="ui inverted header">{{trans('navigation.academy')}}</h4>
                    <div class="ui inverted link list">
                        <a class="item" href="{{'navlink.our-topics'}}">{{trans('navigation.our-topics')}}</a>
                        <a class="item" href="{{'navlink.research'}}">{{trans('navigation.research')}}</a>
                        <a class="item" href="{{'navlink.opportunities'}}">{{trans('navigation.opportunities')}}</a>
                    </div>
                </div>
            </div>
            <div class="four wide column">
                <div class="ui left aligned basic padded segment">
                    <h4 class="ui inverted header">{{trans('navigation.headers.follow')}}</h4>
                    <div class="ui inverted link list">
                        <div class="item">
                            <a href="https://www.facebook.com/akhbarmeter"><i class="facebook white icon"></i></a>
                            <a href="https://www.youtube.com/channel/UCaRZspCyYvBciBp6qWo619g"><i
                                        class="youtube white icon"></i></a>
                            <a href="https://www.linkedin.com/in/akhbarmeter/"><i class="linkedin white icon"></i></a>
                            <a href="https://www.instagram.com/akhbarmeter"><i class="instagram white icon"></i></a>
                        </div>
                        <a class="item" href="{{route('locale.set', 'en')}}">English</a>
                        <a class="item" href="{{route('locale.set', 'ar')}}">عربي</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="ui section divider"></div>
    <div class="ui center aligned container">
        <small>Copyrigths Reserved @AkhbarMeter 2014-{{today()->format('Y')}}</small>
    </div>
</div>
