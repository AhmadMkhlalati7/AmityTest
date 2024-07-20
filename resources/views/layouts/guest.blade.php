<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>
	<main class="d-flex w-100">
        @yield('content')
	</main>


</body>
<script src="{{ asset('admin/js/app.js') }}"></script>

</html>
