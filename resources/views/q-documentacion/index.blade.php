@extends('layouts.app')

@section('template_title')
    Documentación
@endsection

@section('content')

    <div class="container-fluid" style="padding-right: 0; padding-left: 0;">
        <div class="p0">
            <div class="col-sm-12">
                <div class="abm">
                    <div class="card-header pb-2">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 class="pt-2"> Documentación </h3>
                            </span>

                            <div class="float-end">

                              <a href="{{ route('q-documentacion.create', ['pTipo' => 'f']) }}" class="btn btn-info float-end me-1"  data-placement="left">
                                {{ __('Nuevo Archivo') }}
                              </a>

                              <a href="{{ route('q-documentacion.create', ['pTipo' => 'c']) }}" class="btn btn-primary float-end me-1"  data-placement="left">
                                {{ __('Nueva Carpeta') }}
                              </a>


                            </div>

                        </div>
                    </div>


                    {{-- Mostrar carpeta (y padre) que se estaba editando --}}
                    @php($xiddocumvisible = '')
                    @php($xidpadrevisible = '')
                    @php($xidpadr2visible = '')

                    @if ($xiddocumvisible = Session::get('xiddocumentacion'))

                      @foreach ($qDocsF as $key => $value)
                          @if ($xiddocumvisible==$value->iddocumentacion)
                              @php($xidpadr2visible = $value->idpadre)

                              @foreach ($qDocs2 as $key => $value)
                                  @if ($xidpadr2visible==$value->iddocumentacion)
                                      @php($xidpadrevisible = $value->idpadre)
                                      @break
                                  @endif
                              @endforeach

                              @break

                          @endif
                      @endforeach

                      @if ($xidpadr2visible == '' && $xidpadrevisible == '')

                        @foreach ($qDocs2 as $key => $value)
                            @if ($xiddocumvisible==$value->iddocumentacion || $xidpadr2visible==$value->iddocumentacion)
                                @php($xidpadr2visible = $value->idpadre)
                            @endif
                        @endforeach

                        @foreach ($qDocs1 as $key => $value)
                            @if ($xiddocumvisible==$value->iddocumentacion || $xidpadr2visible==$value->iddocumentacion)
                                @php($xidpadrevisible = $value->idpadre)
                            @endif
                        @endforeach

                      @endif


                    @endif

                    {{-- $xiddocumvisible; --}}

                    {{-- Armar arbol de carpetas y archivos   --}}

                    @php($xpath = str_replace('home/c2050240/public_html/','',public_path('documentacion').'/'.Auth::user()->idempresa))
                    
                    <div class="card-body px-0">
                        <div class="table-responsive" style="height:70vh; overflow: auto;">


                            <div class="accordion" id="accordionFlushExample0">

                                @foreach ($qDocs1 as $qDoc)

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed ps-1" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo{{ $qDoc->iddocumentacion }}" aria-expanded="false" aria-controls="flush-collapseTwo">

                                          <table class="table table_en_accordion">
                                            <tbody>
                                              <tr>
                                                <td ><i class="icon-folder-close"></i></td>
                                                <td class="w-50">{{ $qDoc->nombre }}</td>
                                                <td class="w-50">
                                                  <form action="{{ route('q-documentacion.destroy',$qDoc->iddocumentacion) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-light btn-sm float-end text-danger"><i class="icon-remove" title="Borrar"></i></button>
                                                    </form>
                                                  <a class="btn btn-sm btn-light float-end" href="{{ route('q-documentacion.edit',$qDoc->iddocumentacion) }}"><i class="icon-pencil" title="Modificar"></i></a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>


                                        </button>
                                        </h2>                                       
                                        <div id="flush-collapseTwo{{ $qDoc->iddocumentacion }}" class="accordion-collapse collapse {{ $qDoc->iddocumentacion==$xiddocumvisible || $qDoc->iddocumentacion==$xidpadrevisible || $qDoc->iddocumentacion==$xidpadr2visible  ? "show" : "" }}  " data-bs-parent="#accordionFlushExample0">
                                        <div class="accordion-body">


                                          <div class="accordion" id="accordionFlushExample{{ $qDoc->iddocumentacion }}">
                                          @foreach ($qDocs2 as $qDoc2)
                                            
                                            @if($qDoc->iddocumentacion == $qDoc2->idpadre)
                                            
                                              
                                              <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                <button class="accordion-button collapsed ps-1" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo{{ $qDoc2->iddocumentacion }}" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                  
                                                  <table class="table table_en_accordion">
                                                    <tbody>
                                                      <tr>
                                                        <td ><i class="icon-folder-close"></i></td>
                                                        <td class="w-50">{{ $qDoc2->nombre }}</td>
                                                        <td class="w-50">
                                                          <form action="{{ route('q-documentacion.destroy',$qDoc2->iddocumentacion) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-light btn-sm float-end text-danger"><i class="icon-remove" title="Borrar"></i></button>
                                                            </form>
                                                          <a class="btn btn-sm btn-light float-end" href="{{ route('q-documentacion.edit',$qDoc2->iddocumentacion) }}"><i class="icon-pencil" title="Modificar"></i></a>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
  
                                                </button>
                                                </h2>
                                                <div id="flush-collapseTwo{{ $qDoc2->iddocumentacion }}" class="accordion-collapse collapse {{ $qDoc2->iddocumentacion==$xiddocumvisible || $qDoc2->iddocumentacion==$xidpadrevisible || $qDoc2->iddocumentacion==$xidpadr2visible  ? "show" : "" }} " data-bs-parent="#accordionFlushExample{{ $qDoc->iddocumentacion }}">
                                                <div class="accordion-body">

                                                  {{-- <div class="mx-4 pt-3 pb-3"> &nbsp;&nbsp;&nbsp; </div>Esto es un comentario --}}
                                                  @foreach ($qDocsF as $qDocf)
                                
                                                    @if($qDoc2->iddocumentacion == $qDocf->idpadre)


                                                    <table class="table ms-3 table-hover" style="width: 69%; cursor: pointer;">
                                                      <tbody>
                                                        <tr>
                                                          <td>
                
                                                            @switch($qDocf->extension)
                                                                @case('pdf')
                                                                    <img src='img/icon_pdf.png' style="width: 15px; auto;" />
                                                                    @break
                                                                @case('xls')
                                                                @case('xlsx')
                                                                    <img src='img/icon_xls.png' style="width: 15px; auto;" />
                                                                    @break
                                                                @case('doc')
                                                                @case('docx')
                                                                    <img src='img/icon_doc.png' style="width: 15px; auto;" />
                                                                    @break                                                                    
                                                                @default
                                                                    <i class="icon-file-alt"></i>
                                                            @endswitch
                                                          </td>
                                                          <td class="w-50">
                                                            <a href="{{$xpath.'/'.$qDocf->file}}" target="_blank">{{ $qDocf->nombre }}</a>
                                                          </td>
                                                          <td class="w-50">

                                                            <form action="{{ route('q-documentacion.destroy',$qDocf->iddocumentacion) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-light btn-sm float-end text-danger"><i class="icon-remove" title="Borrar"></i></button>
                                                            </form>
                                                            <a class="btn btn-sm btn-light float-end" href="{{ route('q-documentacion.edit',$qDocf->iddocumentacion) }}"><i class="icon-pencil" title="Modificar"></i></a>

                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                     
                                                    
                                                    @endif

                                                  @endforeach
                                                 

                                                </div>
                                                </div>
                                              </div>
                                              
                                            
                                            @endif

                                          @endforeach 

                                          {{-- Archivos en carpetas raiz --}}
                                          @foreach ($qDocsF as $qDocf)
                                
                                            @if($qDoc->iddocumentacion == $qDocf->idpadre)
                                            
                                            <table class="table ms-2 mt-3 table-hover" style="width: 69%; cursor: pointer;">
                                              <tbody>
                                                <tr>
                                                  <td>
                                                    @switch($qDocf->extension)
                                                    @case('pdf')
                                                        <img src='img/icon_pdf.png' style="width: 15px; auto;" />
                                                        @break
                                                    @case('xls')
                                                    @case('xlsx')
                                                        <img src='img/icon_xls.png' style="width: 15px; auto;" />
                                                        @break
                                                    @case('doc')
                                                    @case('docx')
                                                        <img src='img/icon_doc.png' style="width: 15px; auto;" />
                                                        @break                                                                    
                                                    @default
                                                        <i class="icon-file-alt"></i>
                                                    @endswitch
                                                  </td>
                                                  <td class="w-50"><a href="{{$xpath.'/'.$qDocf->file}}" target="_blank">{{ $qDocf->nombre }}</a></td>
                                                  <td class="w-50">
                                                    <form action="{{ route('q-documentacion.destroy',$qDocf->iddocumentacion) }}" method="POST"  onsubmit="return confirm('Seguro desea eliminar este Item ?');" >
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit" class="btn btn-light btn-sm float-end text-danger"><i class="icon-remove" title="Borrar"></i></button>
                                                      </form>
                                                    <a class="btn btn-sm btn-light float-end" href="{{ route('q-documentacion.edit',$qDocf->iddocumentacion) }}"><i class="icon-pencil" title="Modificar"></i></a>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>

                                            @endif

                                          @endforeach

                                          </div>    

                                        </div>
                                        </div>
                                    </div>

                                    
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    @if ($message = Session::get('error'))
    <x-alert color="danger">  
    <p>{{ $message }}</p>
    </x-alert>
    @endif
    
@endsection
