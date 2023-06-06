<div>
    <div class="col">
                                        <div class="form-outline">
                                        <label class="form-label" for="form8Example4">Distribuidor</label>
                                            <select name="distribuidor"  id="distribuidor1" class="form-select" onkeyup="distribuidor();"  wire:model="distribuidores">
                                            <option selected value="">Selecciona un distribuidor</option>
                                       @foreach($distribuidor as $distri)
                                                <option  value="{{$distri->id}}">{{$distri->id}} - {{$distri->primer_nombre}} {{$distri->segundo_nombre}} {{$distri->apellido_paterno}} {{$distri->apellido_materno}}</option>
                                       @endforeach
                            
                                      
                                       
                                            </select>
                                            <div class="valid-feedback">
                                            ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                            Por favor, completa la información requerida.
                                            </div>
                                        </div>
    
    
    
                                        <div class="form-outline">
                                        <label class="form-label" for="form8Example4">Capital</label>
                                            <select name="capi"  id="capital" class="form-select" onkeyup="capital();"  wire:model="capitales">
                                @if($capital->count()==0)
                                <option>Seleccione un capital</option>
                                @endif
                                       @foreach($capital as $cap)
                                                <option value="{{$cap->id}}">{{$cap->capital}}</option>
                                                <input hidden type="text" value="{{$cap->capital}}" name="capital"> 
                                       @endforeach
                                       
                                            </select>
                                            <div class="valid-feedback">
                                            ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                            Por favor, completa la información requerida.
                                            </div>
                                        </div>
    
    </div>
    