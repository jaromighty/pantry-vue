<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Headers/Create.vue';
</script>

<template>
    <Head title="Add Ingredient" />

    <AuthenticatedLayout>
        <div class="py-12">
            <Header>Add an ingredient</Header>
        </div>
    </AuthenticatedLayout>
</template>