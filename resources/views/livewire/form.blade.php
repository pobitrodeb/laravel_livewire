<div>
 <h2 class="my-2 text-danger"> Livewire Form Submit  </h2>

<form  class="my-5" wire:submit.prevent="submitForm">
    <input type="text" placeholder="Enter your name">
    <button class="btn btn-primary"> Submit Form </button>
    {{ $submitForMessage }}
</form>
</div>
<div>
    <a class="btn btn-danger" wire:click="onChange"> Click for change content</a>
  {{ $message }}
</div>
