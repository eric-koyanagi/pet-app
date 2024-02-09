<template>
    <div class="container mx-auto py-5">
        Test: {{ message }}
    </div>
</template>
  
<script setup>
  defineProps({
    // Define props if needed
    message: {
      type: String,
      default: 'Hello from this component!',
    },
  });
  
  const someMethod = () => {
    // Method implementation
  };
</script>