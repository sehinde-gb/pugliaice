<template>
  <div id="app" class="container">
    <h2>Vue Multiple Checkbox Example</h2>
    <form @submit.prevent="send()">
      <div class="form-group">
        <div class="form-check">
          <label for="joe" class="form-check-label">
            <input type="checkbox"
                    id="joe"
                    class="form-check-input"
                    value="joe"
                    v-model="checkedNames" />
                    Joe
          </label> 
        </div>

        <div class="form-check">
          <label for="jack" class="form-check-label">
            <input type="checkbox"
                    id="jack"
                    class="form-check-input"
                    value="jack"
                    v-model="checkedNames" />
                    Jack 
          </label>
        </div>

        <div class="form-check">
          <label for="Nick" class="form-check-label">
            <input type="checkbox"
                   id="nick"
                   class="form-check-input"
                   value="nick"
                   v-model="checkedNames" />
                   Nick
          </label> 
        </div>
      <br>
    </div> 

    <div class="form-group">
      <button class="btn btn-info">Submit</button>

    </div>
    </form>       

    
  </div>
</template>

<script>
//import HelloWorld from './components/HelloWorld.vue'

export default {
  //name: 'app',

  //components: {
    //HelloWorld
 // },

  data() {
    return {
      checkedNames: []
    }
  },
  methods: {
      send() {
        

        let obj = {
          check_items: this.checkedNames
        }
        axios.post('/api/checks', obj)
            .then(res => console.log(res.data));
      }
    }

}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
