@extends('layouts.default')
@section('content')
  <script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

{{ HTML::script('js/repo.js')}}

<script>
$('#repo').repo({ user: 'darcyclarke', name: 'Repo.js' });
</script>
@endsection
