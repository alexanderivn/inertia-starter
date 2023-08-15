<script setup>
import {useForm} from '@inertiajs/vue3'

defineProps({
    status: {
        type: String
    }
})

const form = useForm({
    email: '',
    password: '',
})

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password')
    });
}

</script>

<template>
    <section class="bg-gradient-to-l from-[#C9D6FF] to-[#E2E2E2]">
        <section class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <form @submit.prevent="submit">
                <section class="bg-white w-min p-8">
                    <section class="flex flex-col gap-y-4">
                        <label class="block" for="email">Email
                            <input v-model="form.email" autofocus class="block border" name="email" type="email">
                            <span v-if="form.errors.email">{{ form.errors.email }}</span>
                        </label>

                        <label class="block" for="password">Password
                            <input v-model="form.password" class="block border" name="password"
                                   type="password">
                            <span v-if="form.errors.password">{{ form.errors.password }}</span>
                        </label>

                        <section>
                            <button :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                                    class="bg-blue-200 px-4 py-2 rounded-md" type="submit">Login
                            </button>
                        </section>
                    </section>
                </section>
            </form>
        </section>
    </section>
</template>
