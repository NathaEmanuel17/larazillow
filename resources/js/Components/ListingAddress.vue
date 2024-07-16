<template>
    <div>
        <span>
            {{ listing.street }} {{ listing.street_nr }} {{ listing.city }}, for {{ listing.price }}
        </span>
    </div>
</template>

<script setup>
 defineProps({
    listing: Object
 })
</script>