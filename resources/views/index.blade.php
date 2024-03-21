@extends('layouts.template')
@section('title', 'UI')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



  <button
        type="button"
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
        data-bs-whatever="@mdo"
      >
        Nueva Acta
      </button>
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header modal-header-2">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Nueva Acta
              </h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label"
                    >Nombre completo del saliente</label
                  >
                  <input type="text" class="form-control" id="recipient-name" />
                </div>
                <label for="recipient-name" class="col-form-label"
                  >cedula
                </label>
                <input type="text" class="form-control" id="recipient-cedula" />
                <label for="recipient-name" class="col-form-label"
                  >Telefono del saliente</label
                >
                <input type="text" class="form-control" id="recipient-cedula" />
                <label for="recipient-name" class="col-form-label"
                  >Telefono del entrante</label
                >
                <input type="text" class="form-control" id="recipient-cedula" />
                <label for="recipient-name" class="col-form-label"
                  >Coreo del saliente</label
                >
                <input type="text" class="form-control" id="recipient-cedula" />
                <label for="recipient-name" class="col-form-label"
                  >Coreo del entrante</label
                >
                <input type="text" class="form-control" id="recipient-cedula" />
                <label for="recipient-name" class="col-form-label"
                  >Gerencia que entrega</label
                >
                <input type="text" class="form-control" id="recipient-cedula" />
                <div class="mb-3">
                  <label for="startDate">Fecha de sucripcion</label>
                  <input
                    type="date"
                    name="date"
                    id="dateIni"
                    value="2024-05-09"
                    min="2016-04-27"
                    max="3000-05-09"
                    class="form-control"
                  />
                  <label for="endDate">Fecha de entrega a la UAI</label>
                  <input
                    type="date"
                    name="date"
                    id="dateFin"
                    value="2018-05-10"
                    min="2016-04-28"
                    max="3000-05-10"
                    class="form-control"
                  />
                </div>
                <label for="endDate">Fecha de cese</label>
                <input
                  type="date"
                  name="date"
                  id="dateFin"
                  value="2018-05-10"
                  min="2016-04-28"
                  max="3000-05-10"
                  class="form-control"
                />
              </form>
            </div>
            <div class="modal-footer-2">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                cerar
              </button>
              <button type="button" class="btn btn-primary">guardar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container my-4 bg-white">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <table id="datatable_users" class="hover" style="width: 100%">
              <caption>
                Acta de Entrega
              </caption>
              <thead>
                <tr>
                  <th class="centered">#</th>
                  <th class="centered">Name</th>
                  <th class="centered">Email</th>
                  <th class="centered">City</th>
                  <th class="centered">Company</th>
                  <th class="centered">Status</th>
                  <th class="centered">Options</th>
                </tr>
              </thead>
              <tbody id="tableBody_users"></tbody>
            </table>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection