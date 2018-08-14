<template>
    <div>
        <b-card-group deck>
            <card :event="event_1"></card>
            <card :event="event_2"></card>
        </b-card-group>
        <b-card-group deck>
            <card :event="event_3"></card>
            <card :event="event_4"></card>
        </b-card-group>
    </div>
</template>

<script>
    import Card from './Card.vue';

    export default {
        components: {Card},
        created() {
            let self = this;
            axios.get("/events/show").then(function (response) {
                let data = response.data;
                self.event_1 = data[0];
                self.event_2 = data[1];
                self.event_3 = data[2];
                self.event_4 = data[3];
            }).catch(function (ex) {
                // ex 처리
            });
        },
        data() {
            return {
                event_1: [],
                event_2: [],
                event_3: [],
                event_4: []
            }
        }
    }
</script>