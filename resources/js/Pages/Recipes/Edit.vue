<script setup>
import AuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import TipTap from '@/Components/TipTap.vue';
import PrimaryButton from '@/Components/Buttons/Primary.vue';
import NewIngredient from '@/Components/Forms/NewIngredient.vue';

const props = defineProps(['recipe']);

const form = useForm({
    name: props.recipe.name,
    source: props.recipe.source,
    instructions: props.recipe.instructions
});

const submit = () => {
    form.put(route('recipes.update'));
}
</script>

<template>
    <Head title="Edit Recipe" />

    <AuthenticatedLayout>
        <div>
            <div>
                <img class="h-36 w-full object-cover lg:h-52"
                    src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1081&q=80"
                    alt="" />
            </div>
            <div class="mt-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <div class="overflow-hidden rounded-lg bg-gray-200">
                            <div class="px-4 py-5 sm:p-6">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Ingredients</h3>
                                <NewIngredient />
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 md:mt-0">
                        <form @submit.prevent="submit">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Instructions</h3>
                            <div class="mt-2">
                                <TipTap v-model="form.instructions" id="recipe-instructions" />
                            </div>
                            <div class="mt-4">
                                <PrimaryButton>Save</PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>