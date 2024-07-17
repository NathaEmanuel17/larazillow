<template>
    <div>
        <span>
            {{ listing.street }} {{ listing.street_nr }} {{ listing.city }}
        </span>
    </div>
</template>

<script setup>
 defineProps({
    listing: Object
 })
</script>