<template>
    <CookiesMessage v-show="!acceptCookies"></CookiesMessage>        
    <Header 
        :contactUsOffsetTop="contactUsOffsetTop"
        @scrollTo="scrollTo"
    ></Header>
    <First ref="first" @scrollTo="scrollTo"></First>
    <About></About>
    <CourceInformation ref="courceInformation"></CourceInformation>
    <Gallery ref="gallery"></Gallery>
    <Program ref="program"></Program>
    <LearningSteps></LearningSteps>
    <Inventory></Inventory>
    <Video></Video>
    <Form ref="form"></Form>
    <FAQ></FAQ>
    <Footer ref="contacts"></Footer>
    <UpButton @scrollTo="scrollTo"></UpButton>
</template>

<script>
import First from './First'
import About from './About'
import CourceInformation from './CourceInformation'
import Gallery from './Gallery'
import Header from './Header'
import Program from './Program'
import LearningSteps from './LearningSteps'
import Inventory from './Inventory'
import Video from './Video'
import Form from './Form'
import FAQ from './FAQ'
import Footer from './Footer'
import UpButton from './Components/UpButton'
import CookiesMessage from './Components/CookiesMessage'

export default {
    components: {
        Header,
        First,
        About,
        CourceInformation,
        Gallery,
        Program,
        LearningSteps,
        Inventory,
        Video,
        Form,
        FAQ,
        Footer,
        UpButton,
        CookiesMessage
    },
    props: {
        acceptCookies: Boolean
    },
    data() {
        return {
            contactUsOffsetTop: 9999999
        }
    },
    methods: {
        scrollTo(name)
        {
            switch(name)
            {
                case 'courceInfromation':
                {
                    this.$refs.courceInformation.scrollTo();
                    break;
                }
                case 'gallery':
                {
                    this.$refs.gallery.scrollTo();
                    break;
                }
                case 'program':
                {
                    this.$refs.program.scrollTo();
                    break;
                }
                case 'contacts':
                {
                    this.$refs.contacts.scrollTo();
                    break;
                }
                case 'form':
                {
                    this.$refs.form.scrollTo();
                    break;
                }
                case 'first':
                {
                    this.$refs.first.scrollTo();
                    break;
                }
            }
        }
    }
}
</script>

<style>
*, *::before, *::after {
  box-sizing: border-box;
}

@keyframes show {
  from {
    transform: translateY(100px);
    opacity: 0;
  }

  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.show-animate {
    animation-duration: 1000ms;
    animation-name: show;
    animation-timing-function: ease-in-out; 
}
</style>