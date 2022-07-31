<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import Header from '@/Components/Headers/Create.vue';
import PrimaryButton from '@/Components/Buttons/Primary.vue';

const form = useForm({
    name: ""
});

const submit = () => {
    form.post(route('ingredients.store'));
}
</script>

<template>
    <Head title="Add Ingredient" />

    <AuthenticatedLayout>
        <div class="py-12">
            <Header>Add an ingredient</Header>
            <div class="mt-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <form @submit="submit">
                    <div>
                        <label for="ingredient-name" class="block text-sm font-medium text-gray-700">Ingredient name</label>
                        <div class="mt-1">
                            <input type="text" v-model="name" id="ingredient-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" />
                        </div>
                    </div>
                    <div class="mt-6">
                        <PrimaryButton>Save</PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>