<template>
  <div id="app" class="container">
     <h3>Vue.js Datepicker</h3>
    <form @submit.prevent="addDate">
      <div class="form-group">
        <vuejs-datepicker
          format="dd/MM/yyyy"
          placeholder="Add Date"
          clear-button-icon="true"
          v-model="obj.date"
        ></vuejs-datepicker>
      </div>
      <div class="form-group">
        <button class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>
</template>

<script>



export default {
  
  data() {
    return {
      obj:{}
    }
  },
  methods: {
    addDate() {
      let date = {
        mainDate: this.obj.date
      }
      this.axios.post('/api/date', date.then((res) => {
        console.log(res.data);
      }))
    }
  }
}
</script>
