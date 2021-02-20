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
            <x-jet-dialog-modal  wire:model='modalOpen'>
              <x-slot name="title">
                 Subscripción Exitosa!
              </x-slot>
              <x-slot name="content" >
                <div class="text-xs">
                  Ya quedaste subscrito a nuestro newsletter. Pronto comenzarás a recibir nuestras últimas búsquedas y eventos!
                </div>
              </x-slot>
              <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('modalOpen')" wire:loading.attr="disabled">
                  Cerrar
                </x-jet-secondary-button>
              </x-slot>
           </x-jet-dialog-modal>
            </div>
            
            

          
           
        </form>
