<div>
    <div class="card">
        <h5 class="card-header">Cliente</h5>
        <div class="card-body">
          <h5 class="card-title">{{$customer->name}}</h5>
          <p class="card-text">Correo: {{$customer->email}}</p>
          <p>Teléfono: {{$customer->phone}}</p>
          <p>Edad: {{$customer->age}}</p>
          <p>Estado: {{$customer->estado}}</p>
          <a href="{{route('customers')}}" class="btn btn-primary">Regresar</a>
        </div>
      </div>
</div>
