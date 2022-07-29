<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Headers/Index.vue';
import PrimaryButton from '@/Components/Buttons/Primary.vue';
</script>

<template>
    <Head title="Recipes" />

    <AuthenticatedLayout>
        <div class="py-12">
            <Header>
                <template #title>
                    Recipes
                </template>
                <template #actions>
                    <PrimaryButton type="button">
                        Add a recipe
                    </PrimaryButton>
                </template>
            </Header>
        </div>
    </AuthenticatedLayout>
</template>