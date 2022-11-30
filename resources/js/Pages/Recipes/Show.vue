<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import Header from '@/Components/Headers/Index.vue';
import PrimaryButton from '@/Components/Buttons/Primary.vue';

defineProps(['recipe'])
</script>

<template>

    <Head :title="recipe.name" />

    <AuthenticatedLayout>
        <div>
            <div>
                <img class="h-36 w-full object-cover lg:h-52"
                    src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1081&q=80"
                    alt="" />
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-end sm:space-x-5">
                    <div class="sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                        <div class="mt-3 min-w-0 flex-1 sm:hidden md:block">
                            <h1 class="truncate text-2xl font-bold text-gray-900">{{ recipe.name }}</h1>
                        </div>
                        <div class="justify-stretch mt-3 flex flex-col space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                            <PrimaryButton as="link" :href="route('recipes.edit', [recipe.slug])">
                                Edit
                            </PrimaryButton>
                        </div>
                    </div>
                </div>
                <div class="mt-3 hidden min-w-0 flex-1 sm:block md:hidden">
                    <h1 class="truncate text-2xl font-bold text-gray-900">{{ recipe.name }}</h1>
                </div>
            </div>

            <div class="mt-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <div class="overflow-hidden rounded-lg bg-gray-200">
                            <div class="px-4 py-5 sm:p-6">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Ingredients</h3>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 md:mt-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Instructions</h3>
                        <div class="prose" v-html="recipe.instructions" />
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>