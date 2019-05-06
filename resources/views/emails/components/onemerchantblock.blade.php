<tr>
    <td style="padding:0;margin:0;padding:0 5% 30px;">
        <table align="left" style="border-collapse:collapse;width:25%;">
            <tr>
                <td style="padding:0;margin:0;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Logo-ex-7.png" alt="dbs logo"
                         border="0" style="border-radius:5px;" width="107" height="107">
                </td>
            </tr>
        </table>

        <table align="right" style="border-collapse:collapse;width:75%;">
            <tr>
                <td style="padding:0;">
                    {{ $heading ?? '' }}
                </td>
            </tr>

            <tr>
                <td style="padding:0;margin:0;">
                    @if (isset($dates))
                        <table align="left">
                            <tr>
                                <td style="padding:0;">
                                    {{ $fromDate }} <span style="color:#F2F2F2;font-weight:bold;font-size:12px;padding:0 10px;">|</span> {{ $tillDate }}
                                </td>
                            </tr>
                        </table>
                    @else
                        <table align="left">
                            <tr>
                                <td style="padding:0;">
                                    {{ $subtitle ?? '' }}
                                </td>
                            </tr>
                        </table>
                    @endif
                </td>
            </tr>

            <tr>
                <td style="padding:0;">
                    {{ $body }}
                </td>
            </tr>

            <tr>
                <td style="margin:0;padding:0;">
                    <a href="https://www.google.com" target="_blank" x-apple-data-detectors="true" style="cursor:pointer;text-decoration:none;color:#679198;font-weight:bolder;font-size:12px;">
                        {{ $button }}
                    </a>
                </td>
            </tr>

        </table>
    </td>
</tr>
