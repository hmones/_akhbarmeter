<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PGN244N');</script>
<!-- End Google Tag Manager -->

<!-- ###########################################
############# Google Analytics and Alexa Scripts
###########################################-->

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-76515214-1', 'auto');
    ga('send', 'pageview');
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-811605675"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'AW-811605675');
</script>

<script type="text/javascript">
    _atrk_opts = {atrk_acct: "OQlMo1IWx810mh", domain: "akhbarmeter.org", dynamic: true};
    (function () {
        var as = document.createElement('script');
        as.type = 'text/javascript';
        as.async = true;
        as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js";
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(as, s);
    })();
</script>
<noscript><img alt="" height="1"
               src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=OQlMo1IWx810mh" style="display:none"
               width="1"/></noscript>


<script src="{{asset('js/cookieconsent.min.js')}}"></script>
<script>
    window.addEventListener("load", function () {
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#eaf7f7",
                    "text": "#5c7291"
                },
                "button": {
                    "background": "#56cbdb",
                    "text": "#ffffff"
                }
            },
            "showLink": false,
            "theme": "classic",
            "content": {
                "message": "{{trans('text.consent.text')}}",
                "dismiss": "{{trans('text.consent.button')}}"
            }
        })
    });
</script>
