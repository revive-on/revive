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
        <b-card-group deck>
            <card name="1"></card>
            <card name="2"></card>
        </b-card-group>
        <b-card-group deck>
            <card name="3"></card>
            <card name="4"></card>
        </b-card-group>
    </div>
</template>

<script>
    import Card from './Card.vue';

    export default {
        data() {
            return {
                cards: [
                    {
                        "name": "연구원",
                        "text": "연구원의 일기"
                    },
                    {
                        "name": "지수원",
                        "text": "지수원의 일기"
                    },
                    {
                        "name": "대훈원",
                        "text": "대훈원의 일기"
                    },
                    {
                        "name": "벼리원",
                        "text": "벼리원의 일기"
                    }
                ]
            }
        },
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