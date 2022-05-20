<template>
    <div>
        <div class="flex border-b border-slate-300">
            <router-link to="/" class="text-slate-700 hover:bg-slate-300 hover:text-slate-700 p-3" >Lista de usuarios</router-link>
            <router-link to= "/create" class="text-slate-700 hover:bg-slate-300 hover:text-slate-700 p-3" >Registrar usuarios</router-link>
        </div>
        <router-view> </router-view>
    </div>
</template>
<script>
    export default {

  }
</script>