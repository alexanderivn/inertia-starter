<script setup>
import {useForm} from '@inertiajs/vue3'

const form = useForm({
    email: null,
    password: null,
})
</script>

<template>
    <section class="bg-gradient-to-l from-[#C9D6FF] to-[#E2E2E2]">
        <section class="container mx-auto h-screen w-screen">
            <form @submit.prevent="form.post('login')">

                {{form.errors.email}}
                <section class="bg-white w-min p-8">
                    <section class="flex flex-col gap-y-4">
                        <label class="block" for="email">Email
                            <input v-model="form.email" class="block border" name="email" required type="email">

                        </label>

                        <label class="block" for="password">Password
                            <input v-model="form.password" class="block border" name="password" required
                                   type="password">
                        </label>

                        <section>
                            <button class="bg-blue-200 px-4 py-2 rounded-md">Login</button>
                        </section>
                    </section>
                </section>
            </form>
        </section>
    </section>
</template>
