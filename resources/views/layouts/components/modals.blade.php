@if($errors->any())
	<script>console.error('{{ $errors->first() }}')</script>
@endif

@if(session()->has('message'))
	<script>console.log('{{ session('message') }}')</script>
@endif