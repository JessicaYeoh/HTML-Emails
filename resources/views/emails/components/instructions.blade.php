<table style="border-collapse:collapse;width:620px;height:auto;margin:0 auto;">
    <tr>
        <td style="padding:0;margin:0;padding:0 5%;">
            @if (isset($images))
                <table align="left" style="border-collapse:collapse;width:53%;">
                    {{ $slot }}
                </table>

                <table align="right" style="max-width:152px;width:40vw;">
                    <tr>
                        <td>
                            {{ $images }}
                        </td>
                    </tr>
                </table>
            @else
                <table style="border-collapse:collapse;">
                    {{ $slot }}
                </table>
            @endif
        </td>
    </tr>
</table>
