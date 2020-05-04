<div class="form-group">
              <label for="exampleInputEmail1">Nombre: </label>
              <input type="text" name='nombre' class="form-control"  placeholder="Nombre..." value="{{old('nombre', $valor->nombre)}}">
              {!! $errors->first('nombre', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Categoria: </label>
              <select class="form-control" id="cars" name="categoria_id">
              <option class="negro" value="{{$valor->categoria_id}}">--Seleccione un valor--</option>
                @foreach ($categorias as $categoria)
                <option class="negro" value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</option>  
                @endforeach
              </select>
              {!! $errors->first('categoria_id', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Precio C/U: </label>
              <input name="precioUnitario" type="number" class="form-control"  placeholder="..." value="{{old('precioUnitario',$valor->precioUnitario)}}">
              {!! $errors->first('precioUnitario', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Precio por mayor: </label>
              <input name="precioPorMayor" type="number" class="form-control"  placeholder="..." value="{{old('precioPorMayor',$valor->precioPorMayor)}}">
              {!! $errors->first('precioPorMayor', '<small>:message</small>') !!}
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Imagen:</label>
            <input class="form-control" type="file" name="img">
            <input class="form-control" type="hidden" name="imgOld" value="{{$valor->img}}">

            </div>
            <br>
            <button type="submit" class="btn btn-primary">{{ $tipo['tipo'] == 'subir' ? 'Subir prodcuto' : 'Actualizar producto'}}</button>