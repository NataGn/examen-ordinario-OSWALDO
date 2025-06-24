

<template>
  <div class="counter">
    <h1>Contador: {{ count }}</h1>
    <button @click="count--">-</button>
    <button @click="count++">+</button>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const count = ref(0)
</script>

<style scoped>
.counter {
  text-align: center;
  margin-top: 50px;
}

button {
  margin: 0 10px;
  padding: 10px 20px;
  font-size: 18px;
}
</style>
