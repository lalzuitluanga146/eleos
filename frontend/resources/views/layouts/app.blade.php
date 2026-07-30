<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data->meta_title ?? $data->clinic_name ?? 'Eleos' }}</title>

    @if(filled($data->meta_description ?? null))
        <meta name="description" content="{{ $data->meta_description }}">
    @endif

    @if(filled($data->favicon ?? null))
        <link rel="icon" href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($data->favicon) }}">
    @endif

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-700 cursor-default"></body>
<x-header  />


    @yield('content')
    <x-footer  />

<x-appointment-modal />
</body>
</html>
