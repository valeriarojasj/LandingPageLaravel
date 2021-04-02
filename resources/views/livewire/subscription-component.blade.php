<div>
  @if ($success)
    <div class="alert alert-success alert-dismissible" role="alert">
      {{ $messageSuccess }}
      <button type="button" wire:click='closeSuccess' class="float-right close" aria-label="Close">
        <span aria-hidden="true">
          &times;
        </span>
      </button>
    </div>
  @else
    <div>
      <form>
        <div class="subscribe-container">
          <div class="subscribe-item1">
            <label id="labelSubscribe" for="inputEmail3">
              Querés enterarte de nuestras últimas búsquedas y eventos?
            </label>
          </div>
          <div class="subscribe-item2">
            <input type="email" class="form-control" id="inputEmailSubscribe" autocomplete= "off" placeholder="Escribí tu dirección de email" wire:model.defer='email'>
            @error('email')
              <span class="error">
                {{ $message }}
              </span>
            @enderror
          </div>
          <div class="subscribe-item3">
            <button type="button" id="subscribeBtn" style="background-color: #D895B2;" wire:click="save"  class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn hover:border-indigo-500 hover:text-indigo-500">
              Subscribirme
            </button>
          </div>
        </div>          
      </form>
    </div>
  @endif        
</div>
