<div class="mb-4">
    <label class="block text-sm font-medium text-gray-300">{{ $label }}</label>

    {{-- Imagen actual --}}
    @if(!empty($current))
        <img src="{{ asset('storage/' . $current) }}" alt="Logo actual" class="h-20 w-20 object-cover rounded mb-2">
    @endif

    <input id="logo-input" type="file" name="{{ $name }}" accept="{{ $accept ?? '*' }}" class="hidden"
        onchange="updateLogoPreview(event)">

    <label for="logo-input"
        class="cursor-pointer inline-block px-4 py-2 bg-gray-700 text-white rounded hover:bg-gray-600">
        Seleccionar archivo
    </label>

    <span id="logo-name"
        class="ml-2 text-gray-300">{{ $current ? 'Archivo actual' : 'Ningún archivo seleccionado' }}</span>

    <img id="logo-preview" class="h-20 w-20 object-cover rounded hidden mt-2" />

    @error($name)
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>

<script>
    function updateLogoPreview(event) {
        const input = event.target;
        const preview = document.getElementById('logo-preview');
        const nameSpan = document.getElementById('logo-name');

        if (input.files && input.files[0]) {
            nameSpan.textContent = input.files[0].name;
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>