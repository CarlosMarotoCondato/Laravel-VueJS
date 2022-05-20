<template>
  <div>
    <div class="w-full justify-center flex mt-5">
      <div class="border rounded w-[400px] flex flex-col items-center">
        <h2 class="mt-3">Login</h2>
        <form @submit.prevent="register" class="flex flex-col items-center w-full p-3">
          <label for="user.name" class="px-3 w-full">Nombre</label>
          <input v-model="user.name" class="m-2 p-2 w-[90%] border border-gray-400 rounded" type="text" placeholder="Nombre" />
          <label for="user.password" class="px-3 w-full">Contraseña</label>
          <input v-model="user.password" class="m-2 p-2 w-[90%] border border-gray-400 rounded" type="password" placeholder="Contraseña" />
          <label for="user.email" class="px-3 w-full">Email</label>
          <input v-model="user.email" class="m-2 p-2 w-[90%] border border-gray-400 rounded" type="email" placeholder="Email" />
          <button type="submit" class="px-3 py-1 rounded-full border bg-blue-600 text-white">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    data(){
      return{user:{}}
    },
    methods:{
      register(){
        this.axios.post('http://localhost:8000/api/users', this.user).then(response =>(this.$router.push({name: 'home'})))
        .catch(err=> console.log(err))
        .finally(()=> this.loadin=false)
      }
    }
  } 
  
</script>
  
<style>

</style>