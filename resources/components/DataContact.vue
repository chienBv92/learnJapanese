<template>
    <div>

        <div> Địa chỉ: {{address}}</div>
        <slot name="title">chienbui</slot>

        <div>Số điện thoại: {{phone}}</div>
        <slot name="name"></slot>

        <slot></slot>
    </div>


</template>

<script>
    export default {
        props: ['address', 'phone'],

    }


</script>

<style scoped>
    p{
        color: red;
    }
</style>
