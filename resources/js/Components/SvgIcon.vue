<template>
  <svg-vue
    :fill="fill"
    :icon="icon"
    :stroke="stroke"
    :stroke-width="strokeWidth"
    stroke-linecap="round"
    stroke-linejoin="round"
  >
  </svg-vue>
</template>

<script setup>
defineProps({
  icon: {
    type: String,
    required: true,
  },

  strokeWidth: {
    type: String,
    required: false,
    default: '2',
  },

  stroke: {
    type: String,
    required: false,
    default: 'currentColor',
  },

  fill: {
    type: String,
    required: false,
    default: 'none',
  },
})
</script>
