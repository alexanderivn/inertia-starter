<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

const page = usePage()
const user = computed(() => page.props.auth.user)
</script>

<template>
<h1>About Page</h1>

    You are logged in as: {{ user.name }}
    <a :href="route('/')">Back to HomePage</a>

</template>

