<template>
  <div id="app" class="container">
     <h3>Vue.js Datepicker</h3>
    <form @submit.prevent="addDate">
      <div class="form-group">
        <datepicker
          format="dd/MM/yyyy"
          placeholder="Add Date"
          clear-button-icon="true"
          v-model="obj.date"
          @selected="dateSelected()"
        ></datepicker>

        
        
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
      let datepicker = {
        mainDate: this.obj.date
      }
      //this.axios.post('/api/datepicker', datepicker.then((res) => {
        console.log(res.data);
      //}))
    }
  }
}
</script>

<style>
    .center {
        width: 50%;
        margin: 0 auto;
    }
</style>