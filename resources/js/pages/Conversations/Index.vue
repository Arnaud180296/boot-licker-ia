<script lang="ts" setup>
    //import Layout from "./Layout";
    import { Head } from "@inertiajs/vue3";
    import { Link } from "@inertiajs/vue3";

    

    const props = defineProps({
        conversations : Array,
        user : Object
    });
    
</script>
<template>
    <Head title="Mes conversations"></Head>
    <h1>Liste des conversations de <strong>{{ props.user?.name }}</strong> ({{ conversations?.length }})</h1>

    <div v-if="conversations?.length > 0">
        <ul v-for="conversation in props.conversations" :key="conversation.id" class="m-6 p-3">
            <li class="mb-2 text-primary-emphasis bg-primary text-black"><Link href="/conversations/{id}"><em>{{ conversation?.title }}</em> </Link></li>
        </ul>
    </div>
    <p v-else>Aucune conversaion n'existe</p>
</template>
<style scoped>
</style>