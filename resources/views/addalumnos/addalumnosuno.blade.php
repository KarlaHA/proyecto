@extends('templates.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<section>
    
        <div class="main-container">
            <div>
                <form action="/busquedaalumnos" method= "GET">
                  
                  
                    <select name="carrera" id="carrera">
                        <option selected='selected' value= 'vacio'>Carrera</option>
                        <option value="Ingenieria Bioquimica">Ingenieria Bioquimica</option>
                        <option value="Ingenieria en Industrias Alimentarias">Ingenieria en Industrias Alimentarias</option>
                        <option value="Ingenieria en Materiales">Ingenieria en Materiales</option>
                        <option value="Ingenieria en Sistemas Computacionales">Ingenieria en Sistemas Comptacionales</option>
                        <option value="Ingenieria Indstrial">Ingenieria Industrial</option>
                        <option value="Ingenieria Mecatronica">Ingenieria Mecatronica</option>
                        <option value="Licenciatura en Administracion">Licenciatura en Administracion</option>
                        <option value="Ingenieria Informatica">Ingenieria Informatica</option>
                        <option value="Ingenieria en Innovacion Agricola">Ingenieria en Innovacion Agricola</option>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Buscar">
                </form>
            </div>
        </div>
      
    </section>
    <section>
        <div class="table-container">
            <table class="table table-light table-bordered">
                <thead>
                    <tr>
                       
                        <th width="15%" class="text-center">Matricula</th>
                        <th width="15%" class="text-center">Nombre</th>
                        <th width="15%" class="text-center">Carrera</th>
                        <th width="15%" class="text-center">Semestre</th>
                        <th width="15%" class="text-center">Creditos</th>
                        <th width="25%" class="text-center">Asignar</th>

                       
                    </tr>
                </thead>
                <tbody>
                     
                    @foreach ($listaalumnos as $item)
                            <tr> 
                                
                                <td width="15%" class="text-center">{{$item->matricula}}</td>
                                <td width="15%" class="text-center">{{$item->nombre}}</td>
                                <td width="15%" class="text-center">{{$item->carrera}}</td>
                                <td width="15%" class="text-center">{{$item->semestre}}</td>
                                <td width="15%" class="text-center">{{$item->creditos}}</td>
                                <td width="25%" class="text-center">
                                    <form method= "POST" action="asignacionaproyectos">
                                        @csrf
                                        
                                            <button class="btn btn-primary" 
                                                    name="btnAccion"
                                                    value="Guardar"
                                                    type="submit">Proyecto</button>
                                        
                                        <input type="hidden" id="id" name="id" value="{{$item->id}}">
                                        <input type="hidden" id="matricula" name="matricula" value="{{$item->matricula}}">
                                        <input type="hidden" id="nombre" name="nombre" value="{{$item->nombre}}">
                                        <input type="hidden" id="carrera" name="carrera" value="{{$item->carrera}}">
                                        <input type="hidden" id="semestre" name="semestre" value="{{$item->semestre}}">
                                        <input type="hidden" id="creditos" name="creditos" value="{{$item->creditos}}">
                                        
                                    </form>
                                            <span>|</span>
                                    <form method= "POST" action="asignacionaempresas">
                                        @csrf
                                        
                                            <button class="btn btn-primary" 
                                                    name="btnAccion"
                                                    value="Guardar"
                                                    type="submit">Empresa</button>
                                        
                            
                                        <input type="hidden" id="id" name="id" value="{{$item->id}}">
                                        <input type="hidden" id="matricula" name="matricula" value="{{$item->matricula}}">
                                        <input type="hidden" id="nombre" name="nombre" value="{{$item->nombre}}">
                                        <input type="hidden" id="carrera" name="carrera" value="{{$item->carrera}}">
                                        <input type="hidden" id="semestre" name="semestre" value="{{$item->semestre}}">
                                        <input type="hidden" id="creditos" name="creditos" value="{{$item->creditos}}">
                                        
                                    </form>
                                </td>

                                
                                
                            </tr>
                        
                    @endforeach  
                </tbody>
            </table>
            <div class="btn-container">
                <a href="/mostraralumnos"><button class="btn btn-primary" type="button">Asignados</button></a>
            </div>
        </div>
    </section>
@endsection
