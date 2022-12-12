<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="" class="form-control" placeholder="" aria-describedby="helpId" >
    <span class="text-danger">
        {{$demo}}
      {{-- @error('name')
          {{$message}}
      @enderror --}}
    </span>
    {{-- <small id="helpId" class="text-muted">Help text</small> --}}
  </div>
