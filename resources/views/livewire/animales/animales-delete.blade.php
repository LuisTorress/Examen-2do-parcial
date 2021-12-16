<div>
    <div class="card mx-auto" style="width: 18rem;">
        @if ($foto != null)
            <img style="width: 286px; height: 286px;" class="mx-auto card-img-top"
                    src="{{Storage::disk('public')->url($animal->Foto)}}" alt="Card image cap">
        @else
                <img style="width: 286px; height: 286px;"
                src="{{Storage::disk('public')->url($animal->Foto != null ? $animal->Foto : 'images/animales/defaultAnimal.png')}}"
                alt="">
        @endif

        <div class="card-body">
            <h5 class="card-title text-center">{{$animal->animal}}</h5>
            <p class="card-title text-center">{{$animal->especie}}</p>
            <p class="card-title text-center">{{$animal->precio}}</p>
            <button wire:click="Eliminar animal" class="btn btn-danger btn-sm">Confirmar</button>
            <a href="{{route('animales')}}" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
</div>
