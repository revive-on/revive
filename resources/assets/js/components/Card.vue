<template>
    <div>

        <b-card-group deck>
            <div v-for="card in cards1" :key="card.id">
                <b-card img-src="images/hank.jpg" style="max-width:200px" v-bind:title="card.name">
                    <p class="card-text">{{card.text}}</p>
                    <b-button href="#" variant="primary">click</b-button>
                </b-card>
            </div>
        </b-card-group>
        <b-card-group deck>
            <div deck v-for="card in cards2" :key="card.id">
                <b-card img-src="images/hank.jpg" style="max-width:200px" v-bind:title="card.name">
                    <p class="card-text">{{card.text}}</p>
                    <b-button href="#" variant="primary">click</b-button>
                </b-card>
            </div>
        </b-card-group>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                cards1: [
                    {
                        "id": 1,
                        "name": "연구원2",
                        "text": "연구원의 일기"
                    },
                    {
                        "id": 2,
                        "name": "지수원",
                        "text": "지수원의 일기"
                    }
                ],
                cards2: [
                    {
                        "id": 3,
                        "name": "대훈원3",
                        "text": "대훈원의 다이어리"
                    },
                    {
                        "id": 4,
                        "name": "벼리원",
                        "text": "벼리원의 일기"
                    }
                ]
            }
        },
    }
</script>