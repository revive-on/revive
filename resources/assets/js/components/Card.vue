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
                this.checkResolved();
                this.changeToNewEvent();
            },
            checkResolved: function () {

            },
            changeToNewEvent: function () {
                this.$parent.fireNewEvents();
            }
        }
    }
</script>

<style scoped>

</style>