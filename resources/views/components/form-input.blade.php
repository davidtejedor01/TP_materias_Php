<div class="mb-4">
    <label class="block text-sm font-medium text-gray-300">
        {{ $label }}
    </label>

    <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}"
        class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none" required />

    @error($name)
        <div class="text-red-500 text-sm mt-1">
            {{ $message }}
        </div>
    @enderror
</div>