@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fields.faq') }} | {{ trans('app.title') }}</title>
    <style>
        #faq            {padding:2em 10%;}
        #faq div        {margin-top:1em;}
        #faq h3, #faq p {padding:1rem; text-align: left;}
        .faq-icon       {}
    </style>
@endsection


@section('subnav')

    @include('shin::_partials.nav.subnav', [
    'links' => [
        '/about'          => trans('shin::fields.about'),
        '#'      => trans('shin::fields.faq'),
        '/about/contact'  => trans('shin::fields.contact')
     ]
    ])

@endsection

@section('main')


    <div class="row small-center" id="faq">

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/icon_fab_notitle.svg" alt="About Find.Bible" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.1_title') }}</h3></div>
            <p>{{ trans('app.about.faq.1_description') }}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_resources.svg" alt="Find.Bible Creation" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.2_title') }}</h3></div>
            <p>{{ trans('app.about.faq.2_description') }}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_forumn.svg" alt="Find.Bible Forumn" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.3_title') }}</h3></div>
            <p>{{ trans('app.about.faq.3_description') }}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_group.svg" alt="Who is FOBAI" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.4_title') }}</h3></div>
            <p>{{ trans('app.about.faq.4_description') }}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_faq3.svg" alt="Find.Bible Ownership" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.5_title') }}</h3></div>
            <p>{{ trans('app.about.faq.5_description') }}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_team.svg" alt="Find.Bible Team" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.6_title') }}</h3></div>
            <p>{{ trans('app.about.faq.6_description') }}</p>
        </div>

        <div class="row">
            <div class="small-1"><img class="faq-icon" src="/img/fab_color_helping.svg" alt="Find.Bible Work" /></div>
            <div class="small-11"><h3>{{ trans('app.about.faq.7_title') }}</h3></div>
            <p>{{ trans('app.about.faq.7_description') }}</p>
        </div>

    </div>

@endsection
