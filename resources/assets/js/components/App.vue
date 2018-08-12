<template>
    <div id="app">
        <section class="row controls" v-if="!gameIsRunning">
            <div class="small-12 columns">
                <button id="start-game" @click="startGame">Game Start</button>
                {{gameIsRunning}} | Turn {{turns}}
            </div>
        </section>
        <section class="row controls" v-else>
            <div class="small-12 columns">
                <h1 style="text-align:center;">Select the card</h1>

            </div>

        </section>
        <card></card>
    </div>
</template>

<script>
    import Card from './Card.vue';

    export default {

        components: {Card},
        methods: {
            startGame: function () {
                console.log('hey');
                this.gameIsRunning = true;
                this.turns = 0
            },
            nextTurn: function () {
                this.turns++;
            }
        },
        created() {
            this.turns = 0
        },
        data: function () {
            return {
                gameIsRunning: false,
                cards: [],
                turns: 0
            }
        }
    }
</script>
<style>
    #app {
        margin-left: 1em;
    }

    .heading h1 {
        margin-bottom: 0;
    }
</style>