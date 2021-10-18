<html style="h-screen">

<body style="h-screen">

@include('public/components/head')

{{-- @include('admin/components/navbar') --}}

@include('admin/components/dashboard/start')
@include('admin/layouts/home/components/home')
@include('admin/components/dashboard/end')

</body>

</html>