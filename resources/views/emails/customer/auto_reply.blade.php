<html lang="{{ app()->getLocale() }}" @if (\Helper::isLocaleRtl()) dir="rtl" @endif>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff">
    <div id="{{ App\Misc\Mail::REPLY_SEPARATOR_HTML }}" class="{{ App\Misc\Mail::REPLY_SEPARATOR_HTML }}">

        @if (\Helper::isLocaleRtl())
            <div style="font-family:sans-serif; direction: rtl; unicode-bidi: plaintext; text-align: right;">
        @else
            <div style="font-family:sans-serif;">
        @endif
            {!! $auto_reply_message !!}
        </div>
    </div>
    <span height="0" style="font-size: 0px; height:0px; line-height: 0px; color:#ffffff;">{{ \MailHelper::getMessageMarker($headers['Message-ID']) }}</span>
</body>
</html>