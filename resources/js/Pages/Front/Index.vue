<script setup>
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <section class="bg-gradient-to-l from-[#C9D6FF] to-[#E2E2E2]">
        <section class="container mx-auto h-screen w-screen">
            <section class="space-y-4">
                <h1 class="text-4xl font-bold">Laravel Inertia JS Starterkit</h1>
                <div
                    v-if="$page.props.flash.message"
                    class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert"
                >
                    <span class="font-medium">
                        {{ $page.props.flash.message }}
                    </span>
                </div>

                <div
                    v-if="$page.props.flash.message"
                    class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert"
                >
                    <span class="font-medium">
                        {{ $page.props.flash.message }}
                    </span>
                </div>

                <section class="mt-8 flex justify-between">
                    <Link v-if="$page.props.auth.user" :href="route('dashboard.index')">Dashboard</Link>

                    <section v-if="!$page.props.auth.user" class="space-x-4">
                        <Link :href="route('login')">Login</Link>
                        <Link :href="route('dashboard.index')">Register</Link>
                    </section>

                    <section v-if="$page.props.auth.user" class="space-x-4">
                        <Link :href="route('logout')" as="button" class="bg-red-500 px-4 py-3 text-white" method="POST">Logout</Link>
                    </section>
                </section>

                <p>A Complete custom Laravel Inertia JS starterkit made by <a class="underline" href="https://google.com">Alexander
                    Ivan.</a> Stop
                    wasting
                    your time configuring settings things up for new project. Things included in this starterkit:</p>
            </section>

            <section class="mt-8">
                <ul class="list-none">
                    <li>Laravel 10</li>
                    <li>Tailwind CSS</li>
                    <li>Inertia JS + SSR</li>
                    <li>Ziggy</li>
                    <li>Fortify</li>
                    <li>Spatie Permission</li>
                    <li>Login/Register Page</li>
                    <li>Responsive Dashboard Design</li>
                </ul>

                <section class="mt-8">
                    <h4>Next thing to add:</h4>
                    <ul class="list-none">
                        <li>Forgot Password + Send email</li>
                        <li>Social Media Login</li>
                        <li>Folder structures</li>
                    </ul>
                </section>
            </section>

            <footer class="mt-8">
                <p>Starterkit Made by ❤️ Alexander Ivan</p>
            </footer>
        </section>

    </section>
</template>
