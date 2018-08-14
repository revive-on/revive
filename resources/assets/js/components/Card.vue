<template>
    <b-card img-src="images/hank.jpg" style="max-width:200px" v-bind:title="event.name">
        <p class="event-text">{{event.text}}</p>
        <b-button @click="click" variant="primary">click</b-button>
    </b-card>
</template>

<script>
    export default {
        props: ["event"],
        name: "card",
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
                    let data = response.data;
                    self.event = data[0];
                }).catch(function (ex) {
                    // ex 처리
                });
            }
        }
    }
</script>

<style scoped>

</style>