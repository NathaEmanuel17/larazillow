<template>
    <Box>
        <template #header>Offer Made</template>

        <Price :price="offer.amount" class="text-3xl"/>

        <section class="mt-2 flex flex-col md:flex-row justify-between text-gray-500">
            <div>Made On</div>
            <div class="font-medium">{{ offerMadeOn }}</div>
        </section>

    </Box>
</template>

<script setup>
import { computed } from 'vue'
import Box from '@/Components/UI/Box.vue'
import Price from '@/Components/Price.vue';

const props = defineProps({
    offer: Object
})

const offerMadeOn = computed(
    () => new Date(props.offer.created_at).toDateString(),
)
</script>