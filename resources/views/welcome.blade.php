@extends('layouts.app')

@section('content')
  <template>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                    <div class="card-header text-white bg-dark"><i class="fas fa-notes-medical"></i> Citas Medicas V1.0.0</div>
                    <!-- acceder al home -->
                    @hasanyrole('doctor')
                    <citas-component></citas-component>
                    @endrole
                    <!-- acceder al objeto ver doctores -->
                    @role('recepcion')
                    <verdoctores-component></verdoctores-component>
                    @endrole
                  </div>
              </div>
          </div>
      </div>
  </template>


@endsection
