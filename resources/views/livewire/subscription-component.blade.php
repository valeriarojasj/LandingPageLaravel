        <form>
          <div class="subscribe-container">
            <div class="subscribe-item1">
              <label id="labelSubscribe" for="inputEmail3" >Querés enterarte de nuestras últimas búsquedas y eventos?</label>
            </div>
            <div class="subscribe-item2">
              <input type="email" class="form-control" id="inputEmailSubscribe" placeholder="Escribí tu dirección de email" wire:model.defer='email'>
              @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="subscribe-item3">
              <button type="button" id="subscribeBtn" wire:click="save" class="rounded-full btn applyBtn">Subscribirme</button>
            </div>
          </div>  
          <div>
            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
              {{ session('message') }}
              <button type="button" class="float-right close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
          </div>
         </form>

       