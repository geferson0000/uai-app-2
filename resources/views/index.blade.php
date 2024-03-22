@extends('layouts.template') @section('title', 'UI') 

@section('content')
<!-- Bootstrap-->
@include('acta.modal')
<div class="container my-4 bg-white">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                Nueva Acta
            </button>
            <div id="datatable_users_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="col-sm-12">
                    @include('acta.table')
                </div>
            </div>
        </div>
    </div>
    
</div>
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