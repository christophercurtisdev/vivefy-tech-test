<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h1 class="text-2xl">
                            Vivify Tech Test - Welcome {{ $page.props.auth.user.name }}
                        </h1>
                        <hr>
                        <p class="text-sm">
                            I've decided to make this application as simple as possible from a frontend perspective. 
                            I've used laravel breeze to spin up a simple login system and utilise Vue and this tech test is being developed via Laravel's very helpful single line docker build.
                            The application itself is similar to a trello board without the pretty frontend.
                            I've also fleshed out models with relationships that aren't used and generated dummy data in the seeders
                            in the app just to demonstrate the shape of the data.
                            Lastly, most of the functionality is not in but the idea is one page for boards (CRUD functionality) where you define the lanes in the create/ update, another page for viewing boards (where you also create tasks in a modal), and finally one page for task viewing/ updating.
                            The missing functionality is mostly just forms that would call an ajax/ axios function in the component and ping the data to the correct endpoint.
                        </p>
                        <br>
                        <p class="text-md">
                            Application Desired Features:
                        </p>
                        <ul class="list-disc pl-12">
                            <li>CRUD functionality for boards</li>
                            <li>CRUD functionality for swimlanes on boards</li>
                            <li>CRUD functionality for tasks in swimlanes</li>
                        </ul>
                        <p class="text-md">
                            This is all written with the following extensions in mind:
                        </p>
                        <ul class="list-disc pl-12">
                            <li>Restricted access based on user permissions (Roles table)</li>
                            <li>Multiple users assigned to tasks</li>
                            <li>Copy and paste functionality for tasks</li>
                        </ul>
                        <br>
                        <hr>
                        <p class="text-sm">
                            Noteworthy Packages used:
                        </p>
                        <ul class="list-disc pl-12 text-sm">
                            <li>https://packagist.org/packages/laracasts/generators</li>
                            <li>https://packagist.org/packages/laravel/breeze</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
