<template>
    <transition name="fade" appear >
        <b-card class="card-event" img-src="images/hank.jpg" style="max-width:200px"
                v-bind:title="cardEvent.name" v-if="show">
            <p class="event-text">{{cardEvent.text}}</p>
            <b-button @click="click" variant="primary">click</b-button>
        </b-card>
    </transition>
</template>

<script>
    export default {
        props: ["cardEventValue"],
        name: "card",
        data: function () {
            return {
                cardEvent: this.cardEventValue,
                show: true
            }
        },
        created() {
        },
        methods: {
            click: function () {
                this.checkResolved();
                this.changeToNewEvent();
            },
            checkResolved: function () {

            },
            changeToNewEvent: function () {
                this.show = false;
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

    .fade-leave-active {
        animation: bounce-in .5s reverse;
        transition: opacity .5s;
    }

    .fade-leave-to {
        opacity: 0;
        transform: translateY(30px);
    }

    .card-event {
        border-radius: 18px;

        transition-property: transform, box-shadow;
        transition-duration: 0.3s;
        transition-timing-function: ease-out;
    }

    .card-event:hover {
        transform: scale(1.1, 1.1);
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