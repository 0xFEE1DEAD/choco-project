<template>
    <div class="group-body">
        <div class="group-thumbnail">
            <img :src="imageSrc">
        </div>
        <div class="group-description">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        imageSrc: {
            type: String
        }
    },
    data()
    {
        return {}
    }
}
</script>

<style scoped>
    .group-thumbnail {
        width: 150px;
        height: 150px;
        border-radius: 100%;
        overflow: clip;
    }
    .group-thumbnail > img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .group-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        max-width: 200px;
        text-align: center;
        margin: 10px;
    }
    .group-description {
        margin-top: 20px;
    }
</style>