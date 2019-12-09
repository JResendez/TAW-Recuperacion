@extends('base')
@section('contenido')

 <template v-if="menu==0">
    <dashboard></dashboard>
</template>

<template v-if="menu==1">
    <ventas></ventas>
</template>

<template v-if="menu==2">
    <articulos></articulos>      
</template>

<template v-if="menu==3">   
    <clientes></clientes>
</template>

<template v-if="menu==4">
    <proveedores></proveedores>
</template>

@endsection