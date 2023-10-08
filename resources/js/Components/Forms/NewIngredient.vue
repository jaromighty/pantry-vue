<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import Input from '@/Components/Input.vue';
import Label from '@/Components/Label.vue';
import PrimaryButton from '@/Components/Buttons/Primary.vue';

const form = useForm({
    grams: '',
    alternate: '',
    name: ''
});
</script>

<template>
    <form class="">
        <div class="mt-4 grid grid-cols-1 gap-y-4 gap-x-3 items-end sm:grid-cols-8">
            <div class="sm:col-span-2">
                <Label for="grams" value="Grams" />
                <Input type="text" name="grams" id="grams" class="mt-1 block w-full" v-model="form.grams" autocomplete="grams" />
            </div>

            <div class="sm:col-span-2">
                <Label for="alternate" value="Alternate" />
                <Input type="text" name="alternate" id="alternate" class="mt-1 block w-full" v-model="form.alternate" autocomplete="alternate" />
            </div>

            <div class="sm:col-span-4">
                <Label for="name" value="Name" />
                <Input type="text" name="name" id="name" class="mt-1 block w-full" v-model="form.name" autocomplete="name" />
            </div>
        </div>
        <!-- <div class="mt-4">
            <PrimaryButton>Add</PrimaryButton>
        </div> -->
    </form>
</template>