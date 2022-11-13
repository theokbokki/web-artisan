  <fieldset {{ $attributes->merge(['class' => 'grid gap-2']) }}>
    <label for="{{ $for }}">
      {{ $label }}
    </label>
    <select class="input select-bg appearance-none min-w-max pr-14">
      @foreach ($options as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
      @endforeach
    </select>
  </fieldset>
