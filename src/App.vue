<script>
import axios from 'axios';
export default {
  data() {

    return {
      tasks: [],
      newTask: {
        name: "",
        complete: "false"
      }
    };
  },
  methods: {

    onSubmit() {
      const url = 'http://localhost/newTask.php';
      const data = this.newTask;
      const headers = {
        headers: { 'Content-Type': 'multipart/form-data' }
      };

      axios.post(url, data, headers)
        .then(res => {

          const data = res.data;
          this.tasks = data;
          this.newTask.name = "";
          this.newTask.complete = "false";
        })
    },

    deleteTask(idx) {

      const url = 'http://localhost/deleteTask.php';
      const data = { "index": idx };
      const headers = {
        headers: { 'Content-Type': 'multipart/form-data' }
      };
      axios.post(url, data, headers)
        .then(res => {
          const data = res.data;
          this.tasks = data;
        });
    }
  },
  mounted() {

    axios.get("http://localhost/tasks.php")
      .then(res => {

        const data = res.data;
        this.tasks = data;
      });
  }
}
</script>

<template>
  <body>

    <h1 id="title">Todo List</h1>

    <form @submit.prevent="onSubmit" id="addtask">
      <input type="text" name="name" v-model="newTask.name" placeholder="Aggiungi la task">
      <input type="submit" value="ADD">
    </form>

    <div id="list">
      <ul>
        <li v-for="(task, idx) in tasks" :class="task.complete === 'true' ? 'line-through' : ''" class="flex"> {{
          task.name }}
          <div class="delete" @click="deleteTask(idx)">
            <font-awesome-icon icon="fa-solid fa-trash-can" />
          </div>
        </li>

      </ul>
    </div>
  </body>
</template>

<style lang="scss">
@use '../src/css/general.scss' as *;

.flex {
  display: flex;
  justify-content: space-between;
  align-items: baseline;
}

#addtask {
  text-align: center;
  margin-bottom: 30px;

  input {
    padding: 10px;
    margin-left: 10px;
    border-radius: 5px;
    border: none;
  }
}

.delete {
  color: white;
  background-color: red;
  padding: 10px;
  border-radius: 5px;
}

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
    list-style: none;

    li {
      padding: 10px;
      margin-bottom: 10px;
      border-bottom: 1px solid black;
    }

    .line-through {
      text-decoration: line-through;
    }
  }
}
</style>