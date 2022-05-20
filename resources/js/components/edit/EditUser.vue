<template>
    <div>
        <div class="w-full justify-center flex mt-5">
            <div class="border rounded w-[400px] flex flex-col items-center">
                <h3 class="text-center mt-3">Edit User</h3>
                <form @submit.prevent="updateUser" class="flex flex-col items-center w-full p-3">
                    
                        <label class="px-3 w-full">Nombre</label>
                        <input type="text" class="m-2 p-2 w-[90%] border border-gray-400 rounded" v-model="User.name">
                
                        <label class="px-3 w-full">Email</label>
                        <input type="text" class="m-2 p-2 w-[90%] border border-gray-400 rounded" v-model="User.email">
                   
                    <button type="submit" class="px-3 py-1 rounded-full border bg-blue-600 text-white">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data(){
            return{User:{}}
              },
        created(){
            this.axios.get(`http://localhost:8000/api/users/${this.$route.params.id}`).then((res)=> 
                    {this.User = res.data;});
                 },
        methods:{
            updateUser(){
                this.axios.patch(`http://localhost:8000/api/users/${this.$route.params.id}`, this.User).then((res)=> 
                {this.$router.push({name: 'home'});});
                           }
                 }
                } 
</script>