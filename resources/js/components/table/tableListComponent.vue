<template>
  <div class="w-full justify-center flex mt-5">
    <div class="border rounded w-[600px] flex flex-col items-center p-3">
      <table class="text-left table-auto w-full border-collapse border border-slate-400">
        <thead class="uppercase ">
          <th class="border border-slate-300 p-1">Id</th>
          <th class="border border-slate-300 p-1">Nombre</th>
          <th class="border border-slate-300 p-1">Email</th>
          <th class="border border-slate-300 p-1">Funcion</th>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id">
              <td class="border border-slate-300 p-1">{{user.id}}</td>
              <td class="border border-slate-300 p-1">{{user.name}}</td>
              <td class="border border-slate-300 p-1">{{user.email}}</td>
              <td class="text-center border border-slate-300 p-1">
                  
                      <router-link :to="{ name: 'edit', params: { id: user.id }}" class="rounded px-3 py-2 m-1 bg-green-800 text-white" > Edit </router-link>
                      <button @click="deleteUser(user.id)" class="rounded px-3 py-2 m-1 bg-red-600 text-white">Delete</button>
                  
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
<script>
    export default {

       data(){
          return{users:[]}
        },
       created(){
            this.axios.get('http://localhost:8000/api/users/').then(response => {
                this.users = response.data;
             });
        },
       methods:{
           deleteUser(id){
                this.axios.delete(`http://localhost:8000/api/users/${id}`).then(response =>{
                    let i=this.users.map(user=>user.id).indexOf(id);
                    this.users.splice(i, 1)
                });
            }
        }
    } 
</script>

<style>

</style>