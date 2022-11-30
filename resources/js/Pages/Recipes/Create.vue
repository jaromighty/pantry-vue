<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Headers/Create.vue';
import PrimaryButton from '@/Components/Buttons/Primary.vue';
import TipTap from '@/Components/TipTap.vue';

const form = useForm({
    name: "",
    source: "",
    instructions: ""
});

const submit = () => {
    form.post(route('recipes.store'));
}
</script>

<template>
    <Head title="Add Recipe" />

    <AuthenticatedLayout>
        <div class="py-12">
            <Header>Add a recipe</Header>
            <div class="mt-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <form @submit.prevent="submit" class="space-y-4">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 space-y-4 sm:col-span-3">
                            <div>
                                <label for="recipe-name" class="block text-sm font-medium text-gray-700">Recipe name</label>
                                <div class="mt-1">
                                    <input type="text" v-model="form.name" id="recipe-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                                </div>
                            </div>
                            <div>
                                <label for="recipe-source" class="block text-sm font-medium text-gray-700">Recipe source</label>
                                <div class="mt-1">
                                    <input type="text" v-model="form.source" id="recipe-source" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                                </div>
                            </div>
                            <PrimaryButton>Save</PrimaryButton>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="recipe-instructions" class="block text-sm font-medium text-gray-700">Instructions</label>
                            <div class="mt-1">
                                <TipTap v-model="form.instructions" id="recipe-instructions" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>