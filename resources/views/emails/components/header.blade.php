<table style="border-collapse:collapse;width:620px;height:auto;margin:0 auto;">
    <tr style="background-color:#679198;height:10px;">
        <td style="padding:0;margin:0;">
            {{--This is left empty to ensure that clients render the bar--}}
        </td>
    </tr>

    <tr>
        <td style="margin:0;text-align:right;padding:50px 5%;">
            <table style="vertical-align:middle;" align="right">
                <tr>
                    <td>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Logo-ex-7.png" alt="dbs logo" border="0" style="vertical-align:middle;" width="75" height="75">

                        <span style="color:#F2F2F2;font-weight:bold;font-size:20px;padding:0 10px;">|</span>

                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Logo-ex-7.png" alt="dbs logo"
                             border="0" style="vertical-align:middle;" width="75" height="75">
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td style="margin:20px 0 0 0;padding:0 5%;">
            @if (isset($dates))
                <table>
                    <tr>
                        <td align="left">
                            {{ $fromDate }} <span style="color:#F2F2F2;font-weight:bold;font-size:12px;padding:0 10px;">|</span> {{ $tillDate }}
                        </td>
                    </tr>
                </table>
            @else
                <table>
                    <tr>
                        <td align="left">
                            {{ $subtitle ?? '' }}
                        </td>
                    </tr>
                </table>
            @endif
        </td>
    </tr>

    <tr>
        <td style="margin:0;padding:0 5%;">
            {{ $title }}

            {{ $slot }}
        </td>
    </tr>

    @if(isset($button))
        <tr>
            <td style="margin:0;padding:10px 5% 0">
                <a href="https://www.google.com" target="_blank" x-apple-data-detectors="true" style="cursor:pointer;text-decoration:none;color:#679198;font-weight:bolder;font-size:12px;"> {{ $button }}</a>
            </td>
        </tr>
    @endif

    <tr>
        <td style="padding:0 0 30px;">
            {{--left empty for padding bottom--}}
        </td>
    </tr>
</table>
