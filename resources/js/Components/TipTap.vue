<script setup>
import { unref } from 'vue';
import { useEditor, EditorContent } from '@tiptap/vue-3';
import StarterKit from '@tiptap/starter-kit';
import ListOrdered from '@/Components/Icons/ListOrdered.vue';

const props = defineProps({
    modelValue: {
        type: String,
        default: "",
    },
});

const emit = defineEmits(['update:modelValue']);

const editor = useEditor({
    content: props.modelValue,
    extensions: [
        StarterKit,
    ],
    onUpdate: ({editor}) => {
        const unrefEditor = unref(editor);
        emit("update:modelValue", unrefEditor.getHTML());
    },
    editorProps: {
        attributes: {
            class: 'prose prose-sm max-w-3xl mx-auto prose-a:text-blue-500 text-sm px-3 py-2 min-h-72 border-gray-300 rounded-bl-md rounded-br-md overflow-auto focus:outline-none',
        },
    },
});
</script>

<template>
    <div class="flex border border-gray-300 rounded-md bg-white focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
        <EditorContent :editor="editor" class="flex-1" />
        <div class="w-10 border-l border-gray-300 p-1">
            <ListOrdered
                class="w-8 h-8 p-0.5 border border-gray-400 rounded cursor-pointer"
                @click="editor.chain().focus().toggleOrderedList().run()"
            />            
        </div>
    </div>
</template>