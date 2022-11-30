<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Headers/Index.vue';
import PrimaryButton from '@/Components/Buttons/Primary.vue';
import RecipeItem from '@/Components/Lists/RecipeItem.vue';

defineProps(['recipes']);
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
                    <PrimaryButton as="link" :href="route('recipes.create')">
                        Add a recipe
                    </PrimaryButton>
                </template>
            </Header>

            <div class="mt-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                    <RecipeItem v-for="recipe in recipes" :key="recipe.id" :recipe="recipe" />
                </ul>
            </div>
        </div>
    </AuthenticatedLayout>
</template>