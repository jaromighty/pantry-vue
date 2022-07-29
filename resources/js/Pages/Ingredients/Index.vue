<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Headers/Index.vue';
import PrimaryButton from '@/Components/Buttons/Primary.vue';
</script>

<template>
    <Head title="Ingredients" />

    <AuthenticatedLayout>
        <div class="py-12">
            <Header>
                <template #title>
                    Ingredients
                </template>
                <template #actions>
                    <PrimaryButton type="button">
                        Add an ingredient
                    </PrimaryButton>
                </template>
            </Header>
        </div>
    </AuthenticatedLayout>
</template>