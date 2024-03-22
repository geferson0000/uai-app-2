@extends('layouts.template') @section('title', 'UI') 

@section('content')
<!-- Bootstrap-->
@include('acta.modal')

<!-- Bootstrap-->
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="/js/jquery-dataTables/jquery.min.js"></script>
<!-- DataTable -->
<script src="/js/jquery-dataTables/jquery.dataTables.min.js"></script>
<script src="/js/jquery-dataTables/dataTables.bootstrap5.min.js"></script>
<!-- Custom JS -->
<script src="/js/table/main.js"></script>
@endsection