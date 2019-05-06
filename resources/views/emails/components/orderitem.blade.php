<tr>
    <td style="padding:0;margin:0;padding:10px 5% 2px;">
        <table style="border-collapse:collapse;width:100%;">
            <tr>
                <td align="left" style="color:#696969;font-weight:bold;font-size:14px;padding:0;margin:0;">
                    {{ $itemName }}
                </td>

                <td align="right" style="color:#696969;font-weight:bold;font-size:14px;margin:0;padding:0 0 0 30px;vertical-align:top;">
                    {{ $amount }}
                </td>
            </tr>
        </table>
    </td>
</tr>

<tr>
    <td style="padding:0;margin:0;padding:0 5%;">
        {{ $modifier ?? ''}}
    </td>
</tr>