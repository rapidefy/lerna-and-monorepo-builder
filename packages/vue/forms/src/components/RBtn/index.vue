<script setup lang="ts">
import { defineProps } from 'vue'
const props = defineProps({
  text: {
    type: String,
    default: () => null,
    required: true,
  }
})
</script>

<template>
  <div>
    <v-btn>{{ text }}</v-btn>
  </div>
</template>

<style scoped>

</style>
