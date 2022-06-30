
<template>
    <svg :width="size" :height="size" viewBox="0 0 12 20" :fill="fill" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.67 1.86998L9.9 0.0999756L0 9.99998L9.9 19.9L11.67 18.13L3.54 9.99998L11.67 1.86998Z"/>
    </svg>
</template>

<script>

export default {
    props: {
        size: {
            type: Number || String,
            default: 30
        },
        fill: {
            type: String,
            default: '#fff'
        }
    }
}
</script>