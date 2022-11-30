<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps(['recipe']);
</script>

<template>
    <li class="relative">
        <Link :href="route('recipes.show', [recipe.slug])">
            <div
                class="group aspect-w-10 aspect-h-7 block w-full overflow-hidden rounded-lg bg-gray-200 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                <!-- <img :src="file.source" alt="" class="pointer-events-none object-cover group-hover:opacity-75" /> -->
                <button type="button" class="absolute inset-0 focus:outline-none" />
            </div>
            <p class="pointer-events-none mt-2 block truncate text-sm font-medium text-gray-900">{{ recipe.name }}</p>
            <!-- <p class="pointer-events-none block text-sm font-medium text-gray-500">{{ file.size }}</p> -->
        </Link>
    </li>
</template>