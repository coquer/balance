<template>

</template>
<script>
    import {EventBus} from "../app";

    export default {
        props: ['message'],

        mounted() {

            EventBus.$on('flash', message =>{
                this.flash(message)
            })
        },

        methods:{
            flash(message) {
                this.$buefy.snackbar.open({
                    duration: 2500,
                    message: message,
                    type: 'is-success',
                    position: 'is-bottom-right',
                    actionText: null,
                    queue: false
                })
            }
        }

    }
</script>
