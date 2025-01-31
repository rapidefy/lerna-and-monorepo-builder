<script setup lang="ts">
import { defineProps } from 'vue'
const props = defineProps({
  text: {
    type: String,
    default: () => null,
    required: true,
  },
  color: {
    type: String,
    default: () => 'primary',
  }
})
</script>

<template>
  <div>
    <v-btn :color="color">{{ text }}</v-btn>
  </div>
</template>

<style scoped>

</style>
