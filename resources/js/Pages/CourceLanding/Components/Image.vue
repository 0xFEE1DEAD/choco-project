<template>
    <div :style="style" class="beautiful-image">
        <img v-lazy="imageSrc">
    </div>
</template>

<script>
export default {
    props: {
        imageSrc: {
            type: String
        },
        height: {
            type: Number,
            default: 200
        },
        width: {
            type: Number,
            default: 400
        }
    },
    data() {
        return {
            style: {
                'height': this.height + 'px', 
                'width': this.width + 'px'
            }
        }
    }
}
</script>

<style scoped>
.beautiful-image
{
    border-radius: 25px;
    overflow: clip;
    max-width: 100%;
}

.beautiful-image > img
{
    width: 100%;
    height: 100%;
    object-fit: cover;
    -webkit-mask-image: -webkit-linear-gradient(top, #ffffff 0%,#ffffff 100%)
}
</style>
