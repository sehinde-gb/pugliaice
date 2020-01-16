<template>
  
      <ol>
            <li v-if="users.length>0" v-for="user in users">
                    @{{ user.name }}
            </li>
        </ol>
   
    
</template>


<script>
export default {
  data: {
    users:[]
  },
  mounted(){
     this.loadData();
  },
  methods:{
     loadData:function(){
        axios.get('https://jsonplaceholder.typicode.com/users').then(response=>{
          if(response.status==200){
            console.log(response.data);
            //this.users=response.data;
          }
          }).catch(error=>{
              console.log(error)
          });
          }
  }
}

</script>