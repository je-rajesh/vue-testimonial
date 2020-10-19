<template>
    <div>
        <div class="d-flex justify-content-center my-5 py-5 text-center">
            <h3 class="d-4 font-light w-3 tracking-tight">
                thousands of dev up their game with laracasts every day
            </h3>
        </div>
        <div class="container" style="min-height:500px">

            <!-- left -->
            <div class="row">
                <div class="col-9 p-3"> 
                    <a  :href="testimonial.link" 
                        :id="`testimonial-${++index}`"
                        class="my-3" 
                        target="_blank"
                        v-for="(testimonial, index) in testimonials"
                        :key="index"
                        @mouseover="updateFeaturedTestimonial(testimonial)"
                        @mouseout="clearTimer"
                    >
                    <img :src="testimonial.avatar" :alt="testimonial.name" class="rounded m-1" style="height:100px; width:100px;" :class="{ 'border border-success rounded-circle' : featuredTestimonial === testimonial }">
                    </a>
                </div>
            

             <!-- right -->
                <div class="col-3 bg-grey-lighter text-center d-flex justify-content-center align-items-center p-10">
                    <div> 
                        <img :src="featuredTestimonial.avatar" :alt="featuredTestimonial.name">
                        <p class="text-black bold mb-6">{{ featuredTestimonial.name }}</p>
                        
                        <b><i>{{ featuredTestimonial.body }}</i></b>
                        <div class="row justify-content-center">
                            <a :href="featuredTestimonial.link" class="btn btn-dark">More testimonials</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
    </div>
</template>

<script>
import _ from 'lodash';

    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data(){
            return {
                testimonials: [],
                featuredTestimonial: {},
                timer: {}
            }
        }, 
        created(){
            axios.get('/testimonials')
                .then(response => {
                    this.testimonials = response.data.testimonials;
                    this.featuredTestimonial = this.testimonials[0];

                    console.log(this.testimonials);
                })
                .catch((error)=>{
                    alert('error');
                    console.log(error);
                });
        },
        methods:{
            // updateFeaturedTestimonial:_.debounce(function(data){
            //     this.featuredTestimonial = data;
            // }, 200)
            updateFeaturedTestimonial(testimonial){
                this.timer = setTimeout(() => {
                    this.featuredTestimonial = testimonial;
                }, 250);
            }, 

            clearTimer() {
                clearTimeout(this.timer);
            }
        }
    }
</script>

<style>
    .border-thick{
        border-image-width: 3px;
    }
</style>
