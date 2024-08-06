<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.welcome') }}</title>
</head>
<body>
    <h1>{{ __('messages.welcome') }}</h1>
    <p>{{ __('messages.page_content') }}</p>
    <a href="{{ route('language.switch', 'en') }}">{{__('messages.English')}}</a>
    <a href="{{ route('language.switch', 'ar') }}">{{__('messages.Arabic')}}</a>
</body>
</html>
