<script setup>

</script>

<template>
    <section class="container mx-auto h-screen w-screen ">
        <h1 class="text-4xl">Inertia JS Starterkit</h1>
        <section>
            <p>This is custom Inertia JS starterkit, this included:</p>
        </section>

        <section class="mt-8">
            <ul class="list-disc">
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
                <ul class="list-disc">
                    <li>Forgot Password + Send email</li>
                </ul>
            </section>
        </section>
    </section>

    <a :href="route('about')">About Page</a>
</template>
