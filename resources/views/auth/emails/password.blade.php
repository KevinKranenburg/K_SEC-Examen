{{-- resources/views/emails/password.blade.php --}}
 
Klik hier om je wachtwoord te wijzigen: <a href="{{ url('password/reset/'.$token) }}">{{ url('password/reset/'.$token) }}</a>