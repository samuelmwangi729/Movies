<template>

</template>
<script>
export default{
  data(){
      return{
          name : 'Back'
      }

  },
  methods:{
      placeOrder:()=>{

      }
  },
  created() {
      let self=this;
          axios.get('/getTheCurrentLoggedInUSer')
          .then(response =>{
              this.name=response.data.name;
          })
          .catch(err=>{
              console.log(err)
          });
  }
}
</script>
