<template>
    <transition name="fade" appear
                appear-active-class="fade-enter-active">
        <b-card class="card-event" img-src="images/hank.jpg" style="max-width:200px" v-bind:title="cardEvent.name">
            <p class="event-text">{{cardEvent.text}}</p>
            <b-button @click="click" variant="primary">clicks</b-button>
        </b-card>
    </transition>
</template>

<script>
    export default {
        props: ["cardEventValue"],
        name: "card",
        data: function () {
            return {
                show: true,
                cardEvent: []
            }
        },
        created() {
        },
        watch: {
            cardEventValue: function (newVal) {
                this.cardEvent = newVal;
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
    .fade-enter-active {
        transition: all .3s ease;
        animation: bounce-in .5s;
    }

    .card-event {
        border-radius: 18px;
        box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.3);
        transition-property: transform, box-shadow;
        transition-duration: 0.3s;
        transition-timing-function: ease-out;
    }

    .card-event-hover {

    }

    @keyframes bounce-in {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.5);
        }
        100% {
            transform: scale(1);
        }
    }
</style>