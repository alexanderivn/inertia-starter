<script setup>
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <section class="bg-gradient-to-l from-[#C9D6FF] to-[#E2E2E2]">
        <section class="container mx-auto h-screen w-screen">
            <section class="space-y-4">

                <h1 class="text-4xl font-bold">Laravel Inertia JS Starterkit</h1>
                <p>A Complete custom Laravel Inertia JS starterkit made by <a class="underline" href="">Alexander
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


                <section class="mt-8">
                    <p>Support Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, magni.</p>
                    <a :href="route('about')">Support Page</a>
                </section>

                <section v-if="$page.props.auth.user">
                <Link :href="route('logout')" method="POST" as="button">Logout</Link>
                </section>
            </section>

            <footer class="mt-8">
                <p>Starterkit Made by ❤️ Alexander Ivan</p>
            </footer>
        </section>

    </section>
</template>
