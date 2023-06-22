<script>

import axios from 'axios';

export default {
  mounted() {
    axios.get('http://localhost:5173/src/php/index.php').then(r => {
      console.log(JSON.stringify(r));
    })
  },
}


</script>

<template>
  <div>
    <h1>Hello world</h1>
  </div>
</template>

<style scoped></style>
