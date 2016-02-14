{{-- resources/views/emails/password.blade.php --}}

Klik Disini Untuk Mereset Password Anda: <a href="{{ url('password/reset/'.$token) }}">{{ url('password/reset/'.$token) }}</a>
