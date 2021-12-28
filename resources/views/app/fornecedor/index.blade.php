<h3>Fornecedores</h3>

{{ 'codada preta' }}

@php
  $coisas = ['Coisa1', 'coisa2', 'coisa3', 'coisa4']  ; 
@endphp



@if (count($coisas)>3)
    Tem {{count($coisas)}} itens no array
@endif
