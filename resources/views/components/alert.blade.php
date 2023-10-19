@props(['type', 'message'])

<div {{ $attributes ->merge(['class'=> 'alert alert-' .$type]) }}>
    {{$message}}</div>
<!--PARA FILTRAR ATRIBUTOS-->
    <ul>
        <li>
            whereStartsWith: { { $attributes->whereStartsWith('data') }} 
        </li>
        <li>
            whereDoesntStartWith: { { $attributes->whereDoesntStartWith('data') }} 
        </li>
        <li>
            has: { { $attributes->has('class') }} 
        </li>
        <li>
            get: { { $attributes->get('data') }} 
        </li>
        <li>
            filter: { { $attributes->filter(fn(string $value, string $key) => $key =='data-id') }} 
        </li>
    </ul>
