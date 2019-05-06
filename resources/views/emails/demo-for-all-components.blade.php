@extends('emails/layout')

@section('content')
    @component('emails.components.preview')
        {{--MUST BE MINIMUM OF 90 CHARACTERS LONG--}}
        <div style="display: none; max-height: 0; overflow: hidden;font-size:14px;margin:0;color:#696969;">
            This is the text that shows as a preview for each email. It must be atleast 90 characters long so it covers the entire preview section.
        </div>

        <!-- DISPLAYS WHITE SPACE AFTER PREVIEW TEXT -->
        <div style="display: none; max-height: 0; overflow: hidden;">
            &nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
    @endcomponent

    {{--HEADER--}}
    @component('emails.components.header')
        @slot('dates')
            {{--INSERT THE FROM DATE TEXT--}}
            @slot('fromDate')
                <span style="color:#696969;margin:4px 0 0 0;font-size:14px;">From Date</span>
            @endslot

            {{--INSERT THE TILL DATE TEXT--}}
            @slot('tillDate')
                <span style="color:#696969;margin:4px 0 0 0;font-size:14px;">Till Date</span>
            @endslot
        @endslot

        {{--INSERT SUBTITLE TEXT--}}
        @slot('subtitle')
            <h4 style="color:#696969;margin:4px 0 0 0;font-size:14px;">Subtitle Two Goes Here</h4>
        @endslot

        {{--INSERT MAIN TITLE TEXT--}}
        @slot('title')
            <h1 style="margin:2px 0 5px;font-size:30px;">Important <span style="color:#679198;">Text</span> This Is a very long Title to show center aligning and wrapping of text</h1>
        @endslot

        {{--THIS IS THE TEXT UNDER THE MAIN TITLE--}}
        <p style="width:auto;font-size:14px;margin:0;color:#696969;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

        {{--OPTIONAL BUTTON--}}
        @slot('button')
            View In App
        @endslot
    @endcomponent

    {{--MERCHANT BLOCKS--}}
    @component('emails.components.merchantblocks')
        {{--FIRST MERCHANT BLOCK--}}
        @component('emails.components.onemerchantblock')
            @slot('heading')
                <h2 style="color:#333333;font-size:20px;font-weight:bolder;margin:0 0 2px;">Heading / Merchant Name Goes Here This Is Additional Text To Show a Long N</h2>
            @endslot

            {{--OPTIONAL DATES--}}
            @slot('dates')
                @slot('fromDate')
                    <span style="color:#696969;margin:4px 0 5px 0;font-size:14px;">From Date</span>
                @endslot

                @slot('tillDate')
                    <span style="color:#696969;margin:4px 0 5px 0;font-size:14px;">Till Date</span>
                @endslot
            @endslot

            {{--OPTIONAL SUBTITLE--}}
            @slot('subtitle')
                <h4 style="color:#696969;margin:4px 0 5px;font-size:14px;">Subtitle Two Goes Here</h4>
            @endslot

            {{--MERCHANT BLOCK TEXT--}}
            @slot('body')
                <p style="width:auto;font-size:14px;margin:0;color:#696969;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            @endslot

            {{--OPTIONAL BUTTON--}}
            @slot('button')
               View Merchant
            @endslot
        @endcomponent

        {{--SECOND MERCHANT BLOCK--}}
        @component('emails.components.onemerchantblock')
            @slot('heading')
                <h2 style="color:#333333;font-size:20px;font-weight:bolder;margin:0 0 2px;">Heading / Merchant Name Goes Here This Is Additional Text To Show a Long N</h2>
            @endslot

            {{--OPTIONAL DATES--}}
            @slot('dates')
                @slot('fromDate')
                <span style="color:#696969;margin:4px 0 5px 0;font-size:14px;">From Date</span>
                @endslot

                @slot('tillDate')
                <span style="color:#696969;margin:4px 0 5px 0;font-size:14px;">Till Date</span>
                @endslot
            @endslot

            {{--OPTIONAL SUBTITLE--}}
            @slot('subtitle')
                <h4 style="color:#696969;margin:4px 0 5px;font-size:14px;">Subtitle Two Goes Here</h4>
            @endslot

            {{--MERCHANT BLOCK TEXT--}}
            @slot('body')
                <p style="width:auto;font-size:14px;margin:0;color:#696969;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            @endslot

            {{--OPTIONAL BUTTON--}}
            @slot('button')
                View Merchant
            @endslot
        @endcomponent
    @endcomponent

    {{--STEP BY STEP INSTRUCTIONS--}}
    @component('emails.components.instructions')
        {{--STEP 1--}}
        @component('emails.components.step')
            @slot('stepNumber')
                <h4 style="color:#696969;margin:0 0 2px;font-size:14px;">Step 1</h4>
            @endslot

            @slot('stepText')
                <p style="width:auto;font-size:14px;margin:0;color:#696969;margin-bottom:30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            @endslot
        @endcomponent

        {{--STEP 2--}}
        @component('emails.components.step')
            @slot('stepNumber')
                <h4 style="color:#696969;margin:0 0 2px;font-size:14px;">Step 2</h4>
            @endslot

            @slot('stepText')
                <p style="width:auto;font-size:14px;margin:0;color:#696969;margin-bottom:30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            @endslot
        @endcomponent

        {{--STEP 3--}}
        @component('emails.components.step')
            @slot('stepNumber')
                <h4 style="color:#696969;margin:0 0 2px;font-size:14px;">Step 3</h4>
            @endslot

            @slot('stepText')
                <p style="width:auto;font-size:14px;margin:0;color:#696969;margin-bottom:30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            @endslot
        @endcomponent

        {{--STEP 4--}}
        @component('emails.components.step')
            @slot('stepNumber')
                <h4 style="color:#696969;margin:0 0 2px;font-size:14px;">Step 4</h4>
            @endslot

            @slot('stepText')
                <p style="width:auto;font-size:14px;margin:0;color:#696969;margin-bottom:30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            @endslot
        @endcomponent

        {{--OPTIONAL IMAGE ON RIGHT SIDE--}}
        @slot('images')
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Logo-ex-7.png" alt="dbs logo"
                 border="0" style="vertical-align:middle;" width="100%">
        @endslot
    @endcomponent

    {{--BULLET POINTS--}}
    {{--FIRST BULLET POINTS SECTION--}}
    @component('emails.components.bulletpoints')
            @slot('heading')
                Heading 1
            @endslot

            {{--ONE DOTPOINT--}}
            @component('emails.components.onedotpoint')
                @slot('dotpoint')
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                @endslot
            @endcomponent

            {{--ONE DOTPOINT--}}
            @component('emails.components.onedotpoint')
                @slot('dotpoint')
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                @endslot
            @endcomponent
    @endcomponent

    {{--SECOND BULLET POINTS SECTION--}}
    @component('emails.components.bulletpoints')
        @slot('heading')
            Heading 2
        @endslot

        {{--ONE DOTPOINT--}}
        @component('emails.components.onedotpoint')
            @slot('dotpoint')
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
            @endslot
        @endcomponent

        {{--ONE DOTPOINT--}}
        @component('emails.components.onedotpoint')
            @slot('dotpoint')
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
            @endslot
        @endcomponent
    @endcomponent

    {{--END OF EMAIL COMPONENT--}}
    @component('emails.components.emailend')
        <p style="width:auto;font-size:14px;color:#696969;margin:0 0 10px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
    @endcomponent

    {{--FOOTER COMPONENT--}}
    @component('emails.components.footer')
    @endcomponent
@endsection
