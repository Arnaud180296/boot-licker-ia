<script lang="ts" setup>
    //import Layout from "./Layout";
    import { Head } from "@inertiajs/vue3";
    import { Link } from "@inertiajs/vue3";

    

    const props = defineProps({
        conversations : Array,
        user : Object
    });
 
    defineOptions({
        layout:{
            breadcrumbs:[
                {
                    title: "Mes conversations"
                }
            ]
        }
    })
</script>
<template> <!--https://laravel.com/docs/13.x/authentication // https://laravel.com/docs/13.x/sanctum#how-it-works
https://inertiajs.com/docs/v3/the-basics/links

https://getbootstrap.com/docs/5.3/utilities/colors/
https://www.conventionalcommits.org/fr/v1.0.0/

https://lucide.dev/icons/mail-search

https://www.gigabyte.com/Motherboard/GA-Z97M-DS3H-rev-10/support#Support-Manual
https://download1.gigabyte.com/Files/Manual/mb_manual_ga-z97m-ds3h_e.pdf?v=d8d841de0f5e49e2df9cc9860af3c433 -->
    <Head title="Mes conversations"></Head>

    <h1>Liste des conversations de <strong>{{ props.user?.name }}</strong> (<span class="conversations-sum">{{ conversations?.length }}</span>)</h1>

    <div v-if="conversations?.length > 0">
        <ul v-for="conversation in props.conversations" :key="conversation.id" class="m-6 p-3">
            <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                    <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                        <li><Link :href="`/conversations/${conversation.id}`"><em>{{ conversation?.title }}</em> </Link></li>
                    </div>
                </div>
            </div>
        </ul>
    </div>
    <p v-else>Aucune conversaion n'existe</p>

</template>

<style scoped>
    .conversations-sum{
        color: rgb(255, 166, 0);
    }
</style>



