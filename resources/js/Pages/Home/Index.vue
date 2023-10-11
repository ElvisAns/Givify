<template>
    <Head>
        <title>Home page</title>
        <meta name="description" content="Welcome to givify">
    </Head>
    <h1>{{ name }}</h1>
</template>

<script setup>
import { ref,onMounted } from "vue"
import { Head } from '@inertiajs/vue3'
import {useFirebase} from '../../Composables/useFirebase'

const props = defineProps({
    users : Object
})
console.log(props.users)
const name = ref("ansima");
const { firebaseApp, initializeFirebase } = useFirebase();
onMounted(() => {
    initializeFirebase();
});
</script>

<script>

import MainLayout from '@/Layouts/MainLayout.vue';

export default {
    layout: MainLayout
}
</script>