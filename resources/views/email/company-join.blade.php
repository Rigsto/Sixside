@component('mail::message')
    {{-- Greeting --}}
    # {!! $greeting !!}

    A company wants to join us. Here is their information:

    Name : {!! $name !!}
    Company Name : {!! $company !!}
    Email Address : {!! $email !!}
    Phone Number : {!! $phone !!}
    Notes :
    {!! $additional !!}

    @component('mail::button', ['url' => $url])
        {!! $buttonText !!}
    @endcomponent

    {{-- Salutation --}}
    @if (! empty($salutation))
        {!! $salutation !!}
    @else
        @lang('Regards'),<br>{{ config('app.name') }}
    @endif

    {{-- Subcopy --}}
    @isset($url)
        @slot('subcopy')
            @lang(
            "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
            'into your web browser: [:actionURL](:actionURL)',
            [
            'actionText' => $buttonText,
            'actionURL' => $url
            ]
            )
        @endslot
    @endisset
@endcomponent
