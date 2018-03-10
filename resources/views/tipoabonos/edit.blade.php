@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipoabono
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoabono, ['route' => ['tipoabonos.update', $tipoabono->id], 'method' => 'patch']) !!}

                        @include('tipoabonos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection