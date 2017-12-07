<form class="form-group">
    <div class="input-group" >
        <input type="text" class="form-control" placeholder="Search" onkeyup="showResult(this.value, {{$id}})">
        <div class="input-group-btn">
          <button class="btn btn-primary" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
    </div>
    <div id="{{$id}}" class="w3-bar w3-bar-block w3-white"></div>
</form>