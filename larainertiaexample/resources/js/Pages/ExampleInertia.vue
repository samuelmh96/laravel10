<template>
    <div>
       <h1> {{ counter }} </h1>
       <button @click="increment()">+</button>
       <button @click="decrement">-</button>
    </div>
</template>

<script setup>
import {ref} from 'vue';
const counter = ref(0);

const increment = () => {
    counter.value++
}

const decrement = () => {
    counter.value--
}
</script>

<style>

</style>