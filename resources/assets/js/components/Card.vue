<template>
    <b-card img-src="images/hank.jpg" style="max-width:200px" v-bind:title="this.event.name">
        <p class="event-text">{{event.text}}</p>
        <b-button @click="click" variant="primary">clicks</b-button>
    </b-card>
</template>

<script>
    export default {
        props: ["initialEvent"],
        name: "card",
        data: function () {
            return {
                event: this.initialEvent
            }
        },

        methods: {
            click: function () {
                console.log("click");
                this.checkResolved();
                this.changeToNewEvent();
            },
            checkResolved: function () {

            },
            changeToNewEvent: function () {
                let self = this;
                axios.get("/events/getNewEvent").then(function (response) {
                    self.event = response.data;
                }).catch(function (ex) {
                    // ex 처리
                });
            }
        }
    }
</script>

<style scoped>

</style>