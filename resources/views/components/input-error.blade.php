@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'alert  text-   is-invalid text-danger']) }}>
        @foreach ((array) $messages as $message)
        <strong> <li>{{ $message }}</li></strong>
        @endforeach
    </ul>
@endif
