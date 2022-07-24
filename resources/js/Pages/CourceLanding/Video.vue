<template>
    <div class="content">
        <div class="information">
            <div class="information-title">Небольшое закулисье с курса</div>
            <div class="inner-video-wrap">
                <iframe class="inner-video" src="https://www.youtube.com/embed/Iimd5IDwTRc" 
                    title="Небольшое закулисье с курса" frameborder="0" 
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.content {
    margin-top: 100px;
    padding-left: 20px;
    padding-right: 20px;
    font-family: 'Montserrat';
}
.information {
    max-width: 900px;
    margin: auto;
}
.information-title {
    font-weight: 700;
    font-size: 1.8em;
    margin-bottom: 50px;
}
.inner-video-wrap
{
    display: flex;
    margin-bottom: 50px;
}
.inner-video
{
    height: 65vh;
    border-radius: 30px;
    margin: auto;
    aspect-ratio: 16/9;
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
    .inner-video
    {
        width: 100%;
        aspect-ratio: auto;
    }
}

@media only screen and (max-width: 575px) {
    .inner-video
    {
        width: 100%;
        aspect-ratio: auto;
    }
}
</style>