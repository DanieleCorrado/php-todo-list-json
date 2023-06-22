<script>

import axios from 'axios';

export default {
  data() {
    return {
      TodoList: []
    }
  },
  mounted() {
    axios.get('http://localhost/index.php').then(r => {
      this.TodoList = r.data;
      console.log(this.TodoList);
    })
  },
}


</script>

<template>
  <body>

    <h1 id="title">Todo List</h1>

    <div id="list">
      <ul>
        <li v-for="element in TodoList"> {{ element.name }}</li>
      </ul>
    </div>
  </body>
</template>

<style lang="scss">
@use '../src/css/general.scss' as *;

#title {
  font-size: 90px;
  text-align: center;
  margin: 70px 0 20px;
  color: rgb(108, 117, 125);
}

#list {
  background-color: white;
  width: 30%;
  margin: 0 auto;
  border-radius: 10px;

  ul {
    // padding: 10px 0;
    list-style: none;

    li {
      padding: 10px;
      margin-bottom: 10px;
      border-bottom: 1px solid black;
    }
  }
}
</style>
