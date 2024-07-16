@component('mail::message')
**Nom**: {{ $firstname }}

**Email**: {{ $email }}

**Sujet**: {{ $subject }}

**Message**:
{{ $messageBody }}

@endcomponent
