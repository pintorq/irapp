@extends('layouts.dashboard.main')
@include('contacto.proveedores.form')
@section('template_title')
Editar el proveedor "{{$proveedor->persona->primer_nombre}} {{$proveedor->persona->primer_apellido}}" | {{ config('app.name', 'Laravel') }}
@endsection
@section('content')

        <div class="container-fluid">

            <!-- Heading -->
            <div class="card mb-4 wow fadeIn hoverable">

                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">

                    <h4 class="mb-2 mb-sm-0 pt-1">
                    <span><i class="fas fa-user-tag mr-1 fa-lg"></i></span>
                        <a href="{{ route('proveedores.index') }}">Lista de proveedores</a>
                        <span>/</span>
                        <span>Editar el proveedor "{{$proveedor->persona->primer_nombre}} {{$proveedor->persona->primer_apellido}}"</span>
                    </h4>

                    <div class="d-flex justify-content-center">
                    <a href="{{ route('proveedores.index') }}" class="btn btn-outline-secondary btn-circle waves-effect hoverable" 
                    data-toggle="tooltip" data-placement="bottom" title="Lista de proveedores">
                      <i class="fas fa-2x fa-user-tag"></i>
                            </a>

                            <a href="{{ route('proveedores.show', $proveedor->id) }}" class="btn btn-outline-primary btn-circle waves-effect hoverable" 
                    data-toggle="tooltip" data-placement="bottom" title='Informacion del proveedor "{{$proveedor->persona->primer_nombre}} {{$proveedor->persona->primer_apellido}}"'>
                      <i class="fas fa-2x fa-info"></i>
                            </a>
                    </div>

                </div>

            </div>
            <!-- Heading -->

         
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-12">

                    <!--Card-->
                    <div class="card hoverable">

                        <!--Card content-->
                        <div class="card-body">

                          <!-- Extended material form grid -->
@yield('crud_form')
<!-- Extended material form grid -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
 
        </div>

@endsection

