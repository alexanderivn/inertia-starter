<script setup>

</script>

<template>
    <section class="bg-gradient-to-l from-[#C9D6FF] to-[#E2E2E2]">
        <section class="container mx-auto h-screen w-screen">
            <section class="space-y-4">
                <h1 class="text-4xl font-bold">Laravel Inertia JS Starterkit</h1>
                <p>Custom Laravel Inertia JS starterkit made by <a class="underline" href="">Alexander Ivan.</a> Stop
                    wasting
                    your time configuring settings things up for new project. Things included in this starterkit:</p>
            </section>

            <section class="mt-8">
                <ul class="list-none">
                    <li>Laravel 10</li>
                    <li>Tailwind CSS</li>
                    <li>Inertia JS SSR</li>
                    <li>Ziggy</li>
                    <li>Fortify</li>
                    <li>Spatie Permission</li>
                    <li>Login/Register Page</li>
                    <li>Dashboard</li>
                </ul>

                <section class="mt-8">
                    <h4>Next thing to add:</h4>
                    <ul class="list-none">
                        <li>Forgot Password + Send email</li>
                        <li>Folder structures</li>
                    </ul>
                </section>
            </section>
            <a :href="route('about')">About Page</a>
        </section>

    </section>
</template>
