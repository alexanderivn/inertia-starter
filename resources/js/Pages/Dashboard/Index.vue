<script setup>
import {computed} from 'vue'
import {Link, usePage} from '@inertiajs/vue3'

const page = usePage()
const user = computed(() => page.props.auth.user)
</script>

<template>
    <h1 class="text-4xl font-bold">Dashboard Page</h1>
    <div
        v-if="$page.props.flash.message"
        class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
                    <span class="font-medium">
                        {{ $page.props.flash.message }}
                    </span>
    </div>


    <p>You are logged in as: <span class="font-bold">{{ user.name }}</span></p>
    <Link :href="route('/')">Back to HomePage</Link>


    <section v-if="$page.props.auth.user" class="mt-8">
        <Link :href="route('logout')" as="button" class="bg-red-500 px-4 py-3 text-white" method="POST">Logout</Link>
    </section>

</template>

