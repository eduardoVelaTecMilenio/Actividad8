<br>
<label for="NombreReal">Nombre Real</label>
<input type="text" name="NombreReal" value="{{ isset($superheroe->NombreReal)?$superheroe->NombreReal:'' }}" id="NombreReal"><br><br>

<label for="Alias">Alias</label>
<input type="text" name="Alias" value="{{ isset($superheroe->Alias)?$superheroe->Alias:'' }}" id="Alias"><br><br>

<label for="Foto">Foto</label>
@if(isset($superheroe->Foto))
<img src="{{ asset('storage').'/'.$superheroe->Foto }}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto"><br><br>

<label for="InformacionAdicional">Información Adicional</label>
<input type="text" name="InformacionAdicional" value="{{ isset($superheroe->InformacionAdicional)?$superheroe->InformacionAdicional:'' }}" id="InformacionAdicional"><br><br>

<input type="submit" value="Guardar""><br><br>
<br>
<a href="{{ url('superheroe') }}">Regresar</a>