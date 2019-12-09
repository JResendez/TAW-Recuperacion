<?php $__env->startSection('contenido'); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/recu/pos/resources/views/contenido/contenido.blade.php ENDPATH**/ ?>