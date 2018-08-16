<template>
    <b-card img-src="images/hank.jpg" style="max-width:200px" v-bind:title="cardEvent.name">
        <p class="event-text">{{cardEvent.text}}</p>
        <b-button @click="click" variant="primary">clicks</b-button>
    </b-card>
</template>

<script>
    export default {
        props: ["cardEventValue"],
        name: "card",
        data: function () {
            return {
                cardEvent:[]
            }
        },
        created() {
        },
        watch: {
            cardEventValue: function(newVal) {
                this.cardEvent= newVal;
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
                axios.get("/cardEvents/getNewEvent").then(function (response) {
                    self.cardEvent = response.data;
                }).catch(function (ex) {
                    // ex 처리
                });
            }
        }
    }
</script>

<style scoped>

</style>